<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <button class="btn btn-sm btn-success mb-3">
                <?php
                $grand_total = 0;
                if ($keranjang = $this->cart->contents()) {
                    foreach ($keranjang as $items) {
                        $grand_total += $items['subtotal'];
                    }
                    echo 'Total Pembayaran : Rp. ' . number_format($grand_total, '0', ',', '.');
                ?>
            </button>
            <h3>Input Halaman Pengiriman dan pembayaran</h3>
            <form method="post" action="<?php echo base_url('dashboard/proses_pesanan') ?>">
                <div class="form-group">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" name="nama" class="form-control" placeholder="nama lengkap anda">
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat Lengkap</label>
                    <input type="text" name="alamat" class="form-control" placeholder="alamat lengkap anda">
                </div>
                <div class="form-group">
                    <label for="no_telp">Nomor Telepon</label>
                    <input type="text" name="no_telp" class="form-control" placeholder="Nomor telepon anda">
                </div>
                <div class="form-group">
                    <label for="jasa">Jasa Pengiriman</label>
                    <select name="jasa" id="" class="form-control">
                        <option value="">JNE</option>
                        <option value="">TIKI</option>
                        <option value="">POS Indonesia</option>
                        <option value="">GOJEK</option>
                        <option value="">GRAB</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="jasa">Pilih BAHNK</label>
                    <select name="jasa" id="" class="form-control">
                        <option value="">BCA - XXXXXX</option>
                        <option value="">BNI - XXXXXX</option>
                        <option value="">BRI - XXXXXX</option>
                        <option value="">MANDIRI - XXXXXX</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-sm btn-primary">Pesan Sekarang</button>
            </form>
            <?php 
            } else {
                echo "Keranjang Belanja Kosong";
            }
            ?>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>