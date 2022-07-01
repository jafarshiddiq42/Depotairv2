<?php $__env->startSection('brg', 'active'); ?>

<?php $__env->startSection('content'); ?>
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Cot Prabeu RO</h1> 

    </div>
    <!-- /.container-fluid -->
    <div class="card mx-4">
        <div class="card-header py-6">
            <h3> <?php echo e(Str::upper('daftar barang')); ?></h3>
            <div class="" style="float: right">
                <a href="/tambahbarang" class="btn btn-primary">tambah data</a>
            </div>
        </div>
        <div class="card-body  ">
            <div class="center px-auto">
            <table class="table table-hover "  style="width: 100%">
                <thead>
                    <th style="width: 5%">no</th>
                    <th style="width: 35%">Nama Barang</th>
                    <th style="width: 20%">harga</th>
                    
                    <th class="text-center" style="width: 20%">action </th>
                </thead>
                <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $barang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <td><?php echo e($nomor++); ?></td>
                            <td><?php echo e($item->namaBarang); ?></td>
                            <td><?php echo e($item->harga); ?></td>
                            
                            <td class="text-center">
                                <a href="/editbarang/<?php echo e($item->id); ?>" class="btn btn-primary">Edit</a>
                                
                                
                                <!-- Logout Modal-->
                                
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/Depotair/resources/views/page/barang/index.blade.php ENDPATH**/ ?>