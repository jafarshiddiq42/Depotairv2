<?php $__env->startSection('content'); ?>
    <div class="card mx-4">
        <div class="card-header">Form Pengeluaran</div>
        <div class="card-body">
            <form action="/kreditsubmit" method="post">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label for="keterangan">Keterangan</label>
                    <input type="text" class="form-control " name="keterangan" id="">
                </div>
                <div class="form-group">
                    <label for="keterangan">Jumlah Pengeluaran</label>
                    <input type="text" style="text-align: right" class="form-control" name="jumlah" id="">
                </div>
                <div class="form-group">
                <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>




<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/Depotair/resources/views/page/kredit/form.blade.php ENDPATH**/ ?>