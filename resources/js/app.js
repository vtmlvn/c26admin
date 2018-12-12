
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key)))

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
var app = new Vue({
    el: '#invoice',
    data: {
        form: {},
        errors: {},
        isProcessing: false,
    },
    created: function() {
        Vue.set(this.$data, 'form', _form);
    },
    methods: {
        addLine: function() {
            this.form.orderans.push({ nama: '', harga: 0, jumlah: 1 });
        },
        remove: function(orderan) {
            this.form.orderans.$remove(orderan);
        },
        create: function() {
            this.$http.post('/invoices/', this.form)
                .then(function(response) {
                    if (response.data.created) {
                        window.location = '{{route("home.index")}}';
                    } else {
                        this.isProcessing = false;
                    }
                })
                .catch(function(response) {
                    Vue.set(this.$data, 'errors', response.data);
                });
        },
        update: function() {
            this.$http.put('/invoices/' + this.form.id, this.form)
                .then(function(response) {
                    if (response.data.updated) {
                        window.location = '{{route("home.index")}}';
                    } else {
                        this.isProcessing = false;
                    }
                })
                .catch(function(response) {
                    Vue.set(this.$data, 'errors', response.data);
                    this.isProcessing = false;
                });
        }
    },
    computed: {
        subtotal: function() {
            return this.form.orderans.reduce(function(carry, orderan) {
                return carry + (parseFloat(orderan.jumlah) * parseFloat(orderan.harga));
            }, 0);
        },
        total_biaya: function() {
            return this.subtotal - parseFloat(this.form.diskon);
        }
    }
});