<div class="container-fluid">
    <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambahBarang"><i class="fas fa-plus fa-sm"></i> Tambah Barang</button>
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nama Barang</th>
            <th>keterangan</th>
            <th>Kategori</th>
            <th>Harga</th>
            <th>Stok</th>
            <th colspan="3" class="text-center">Aksi</th>
        </tr>
        <?php foreach ($barang as $brg) : ?>
            <tr>
                <td><?php echo $brg->id_brg ?></td>
                <td><?php echo $brg->nama_brg ?></td>
                <td><?php echo $brg->keterangan ?></td>
                <td><?php echo $brg->kategori ?></td>
                <td><?php echo $brg->harga ?></td>
                <td><?php echo $brg->stok ?></td>
                <td>
                    <div class="btn btn-success btn-sm"><i class="fas fa-search-plus"></i></div>
                </td>
                <td>
                    <div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>
                </td>
                <td>
                    <div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>
<!-- Modal -->
<div class="modal fade" id="tambahBarang" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form Input Produk</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url('admin/data_barang/tambah_barang') ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="nama_brg">Nama Barang</label>
                        <input type="text" name="nama_brg" class="form-control" id="nama_brg">
                    </div>
                    <div class="form-group">
                        <label for="keterangan">Keterangan</label>
                        <input type="text" name="keterangan" class="form-control" id="keterangan">
                    </div>
                    <div class="form-group">
                        <label for="kategori">Kategori</label>
                        <input type="text" name="kategori" class="form-control" id="kategori">
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="number" name="harga" class="form-control" id="harga">
                    </div>
                    <div class="form-group">
                        <label for="stok">Stok</label>
                        <input type="number" name="stok" class="form-control" id="stok">
                    </div>
                    <div class="form-group">
                        <label for="gambar_brg">Gambar Produk</label>
                        <input type="file" name="gambar_brg" class="form-control" id="gambar_brg">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>