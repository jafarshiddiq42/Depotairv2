<?php $__env->startSection('dbt'); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Cot Prabeu RO</h1>

</div>
<!-- /.container-fluid -->
<div class="card mx-4">
    <div class="card-header py-6">
        <h3> <?php echo e(Str::upper('Uang Masuk')); ?></h3>
        
    </div>
    <div class="card-body">
        <table class="table table-hover">
            <thead>
                <th>no</th>
                <th>Tanggal</th>
                <th class="text-center">Uang masuk</th>
                
                
            </thead>
            <tbody>
                <?php $__empty_1 = true; $__currentLoopData = $debit; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td><?php echo e($nomor++); ?></td>
                        <td><?php echo e($item->tanggal); ?></td>
                        <td>
                            <span class="" style="float: left">Rp.-</span>
                            <span class="" style="float: right"><?php echo e(number_format($item->uangmasuk,0,',','.')); ?></span>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/Depotair/resources/views/page/debit/index.blade.php ENDPATH**/ ?>