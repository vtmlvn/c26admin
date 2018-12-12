<div class="row">
    <div class="col-sm-4">
        <div class="form-group">
            <label>Invoice No.</label>
            <input type="text" class="form-control" v-model="form.invoice_no">
            <p v-if="errors.invoice_no" class="error">@{{ errors.invoice_no[0] }}</p>
        </div>
        <div class="form-group">
            <label>Nama</label>
            <input type="text" class="form-control" v-model="form.nama_customer">
            <p v-if="errors.nama_customer" class="error">@{{ errors.nama_customer[0]}}</p>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group">
            <label>Alamat Pelanggan</label>
            <textarea class="form-control" v-model="form.alamat_customer"></textarea>
            <p v-if="errors.alamat_customer" class="error">@{{ errors.alamat_customer[0]}}</p>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group">
            <label>Parfum</label>
            <input type="text" class="form-control" v-model="form.judul">
            <p v-if="errors.judul" class="error">@{{ errors.judul[0]}}</p>
        </div>
        <div class="row">
            <div class="form-group col-sm-6">
                <label>Tanggal Masuk</label>
                <input type="date" class="form-control" min="{{$lweek}}" max="{{$now}}" v-model="form.tanggal_masuk">
                <p v-if="errors.tanggal_masuk" class="error">@{{ errors.tanggal_masuk[0]}}</p>
            </div>
            <div class="form-group col-sm-6">
                <label>Tanggal Selesai</label>
                <input type="date" class="form-control" max="{{$nweek}}" min="{{$lweek}}" v-model="form.tanggal_keluar">
                <p v-if="errors.tanggal_keluar" class="error">@{{ errors.tanggal_keluar[0]}}</p>
            </div>
        </div>
    </div>
    <hr>
    <div v-if="errors.orderans_empty">
        <p class="alert alert-danger">@{{ errors.orderans_empty }}</p>
    </div>
    <hr>
    <table class="table table-bordered table-form">
        <thead>
            <tr>
                <th>Orderan</th>
                <th>Harga</th>
                <th>Jumlah</th>
                <th>Total</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="orderan in form.orderans">
                <td class="table-nama" :class="{'table-error': errors['orderans.' + $index + '.nama']}">
                    <textarea class="table-control" v-model="orderan.nama"></textarea>
                </td>
                <td class="table-harga" :class="{'table-error': errors['orderans.' + $index + '.harga']}">
                    <input type="text" class="table-control" v-model="orderan.harga">
                </td>
                <td class="table-jumlah" :class="{'table-error': errors['orderans.' + $index + '.jumlah']}">
                    <input type="text" class="table-control" v-model="orderan.jumlah">
                </td>
                <td class="table-total">
                    <span class="table-text">@{{ orderan.jumlah * orderan.harga }}</span>
                </td>
                <td class="table-remove">
                    <a href="#" @click="remove(orderan)" class="btn btn-xs btn-danger fa fa-times"></a>
                </td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                
                <td class="table-empty" colspan=3><a href="#" @click="addLine()" class="btn btn-xs btn-info fa fa-plus">   Tambah Orderan</a></td>
                <td class="table-label">Sub Total</td>
                <td class="table-amount">@{{subtotal}}</td>
            </tr>
            <tr>
                <td class="table-empty" colspan=3></td>
                <td class="table-label">Diskon</td>
                <td class="table-diskon" :class="{'table-error': errors.diskon}">
                    <input type="text" class="table-discount_input" v-model="form.diskon">
                </td>
            </tr>
            <tr>
                <td class="table-empty" colspan=3></td>
                <td class="table-label">Total Biaya</td>
                <td class="table-amount">@{{total_biaya}}</td>
            </tr>
            <tr>
                <td class="table-empty" colspan=3></td>
                <td class="table-label">Status</td>
                <td class="table-status" :class="{'table-error': errors.status}">
                    <input type="radio" v-model="form.status" value="Lunas">Lunas <br>
                    <input type="radio" v-model="form.status" value="Belum Lunas">Belum Lunas
                </td>
                </div>
            </tr>
        </tfoot>
    </table>
</div>