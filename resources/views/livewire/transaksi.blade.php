<div>
    <div class="container">
        <div class="row mt-2">
            <div class="col-12">
                <button class="btn btn-primary">Transaksi Baru</button>
                <button class="btn btn-danger">Batalkan Transaksi</button>
                <button class="btn btn-info" wire:loading>Loading ...</button>
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-8">
            <div class="card border-primary">
                <div class="card-body">
                    <h4 class="card-title">No Invoice :</h4>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode Barang</th>
                                <th>Nama Barang</th>
                                <th>Harga</th>
                                <th>QTY</th>
                                <th>Subtotal</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
            </div>

            <div class="col-4">
                <div class="card border-primary">
                    <div class="card-body">
                        <h4 class="card-title">Total Biaya</h4>
                        <div class="d-flex justify-content-between">
                            <span>Rp.</span>
                            <span>{{ number_format('1234567', 2, '.', ',') }}</span>
                        </div>
                    </div>
                </div>
                <div class="card border-primary mt-2">
                    <div class="card-body">
                        <h4 class="card-title">Bayar</h4>
                        <input type="number" class="form-control" placeholder="Bayar">
                    </div>
                </div>
                <div class="card border-primary mt-2">
                    <div class="card-body">
                        <h4 class="card-title">Kembalian</h4>
                        <div class="d-flex justify-content-between">
                            <span>Rp.</span>
                            {{ number_format('1234567', 2, '.', ',') }}
                        </div>
                    </div>
                </div>
                <button class="btn btn-success mt-2 w-100">Bayar</button>
            </div>
        </div>

    </div>
</div>
