<div class="container-fluid">
    <h3><i class="fas fa-edit fa-sm"></i> EDIT DATA BARANG</h3>
    <?php foreach ($barang as $brg) : ?>
        <form action="<?php echo base_url().'admin/data_barang/update' ?>" method="post">
            <div class="form-group">
                <label for="nama_brg">Nama Barang</label>
                <input type="hidden" name="id_brg" class="form-control" id="id_brg" value="<?php echo $brg->id_brg ?>">
                <input type="text" name="nama_brg" class="form-control" id="nama_brg" value="<?php echo $brg->nama_brg ?>">
            </div>
            <div class="form-group">
                <label for="keterangan">Keterangan</label>
                <input type="text" name="keterangan" class="form-control" id="keterangan" value="<?php echo $brg->keterangan ?>">
            </div>
            <div class="form-group">
                <label for="kategori">Kategori</label>
                <input type="text" name="kategori" class="form-control" id="kategori" value="<?php echo $brg->kategori ?>">
            </div>
            <div class="form-group">
                <label for="harga">Harga</label>
                <input type="text" name="harga" class="form-control" id="harga" value="<?php echo $brg->harga ?>">
            </div>
            <div class="form-group">
                <label for="stok">Stok</label>
                <input type="text" name="stok" class="form-control" id="stok" value="<?php echo $brg->stok ?>">
            </div>
            <button type="submit" class="btn btn-primary btn-sm mt-3">Simpan</button>
        </form>
    <?php endforeach; ?>
</div>