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
                        window.location = '/invoices/' + response.data.id;
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
                        window.location = '/invoices/' + response.data.id;
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