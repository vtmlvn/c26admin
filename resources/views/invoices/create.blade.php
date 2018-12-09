@extends('layouts.app')

@section('content')
    <div id="invoice">
        <div class="panel panel-default" v-clock>
            <div class="panel-heading">
                <div class="clearfix">
                    <span class="panel-title">Create Invoice</span>
                    <a href="{{ route('invoices.index') }}" class="btn btn-default pull-right">Back</a>
                </div>
            </div>
            <div class="panel-body">
                @include('invoices.form')
            </div>
            <div class="panel-footer">
                <a href="{{ route('invoices.index') }}" class="btn btn-default">CANCEL</a>
                <a class="btn btn-success" @click="create" href="{{ route('invoices.index') }}":disabled="isProcessing">CREATE</a>
            </div>
        </div>
    </div>
@stop


@push('scripts')
<script src="https://cdn.jsdelivr.net/vue/1.0.26/vue.js"></script>
<script src="https://cdn.jsdelivr.net/vue.resource/0.9.3/vue-resource.min.js"></script>
<script>
    Vue.http.headers.common['X-CSRF-TOKEN'] = '{{csrf_token()}}';

    window._form = {
        invoice_no : '',
        nama_customer: '',
        alamat_customer: '',
        judul: '',
        tanggal_masuk: '',
        tanggal_keluar: '',
        diskon: 0,
        orderans: [{
            nama: '',
            harga: 0,
            jumlah: 1
        }]
    };
</script>
<script src="/js/app.js"></script>
@endpush