<?php $__env->startSection('content'); ?>
    <div class="card mx-4">
        <div class="card-header">Tambah Barang</div>
        <div class="card-body">
            <form action="/tambahbarang" method="post">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label for="keterangan">Nama Barang</label>
                    <input type="text" class="form-control " name="nama" id="">
                </div>
                <div class="form-group">
                    <label for="keterangan">Harga</label>
                    <input type="text" style="text-align: right" class="form-control" name="harga" id="">
                </div>
                <div class="form-group">
                <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>
a



<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/Depotair/resources/views/page/barang/form.blade.php ENDPATH**/ ?>