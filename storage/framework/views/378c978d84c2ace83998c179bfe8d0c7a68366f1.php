<?php $__env->startSection('dt', 'active'); ?>

<?php $__env->startSection('content'); ?>
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Cot Prabeu RO</h1>
        
    </div>
    <!-- /.container-fluid -->
    <div class="card mx-4">
        <div class="card-header py-6">
            <?php echo e(date('D m/Y')); ?>

        </div>
        <div class="card-body">
            <table class="table table-hover table-responsive" style="width: 100%">
                <thead>
                    
                    <th>Nama Barang</th>
                    <th>Terjual</th>
                    <th class="text-center">tambah</th>
                    
                </thead>
                <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $baru2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            
                            <td style="width:25%"><?php echo e($item->namaBarang); ?></td>
                            <td style="width:15%"><?php echo e($item->jumlah); ?></td>
                            <td style="width:25%">
                                <form action="/<?php echo e($item->idbarang); ?>" method="post" name="formisi">
                                    <?php echo csrf_field(); ?>
                                    <input class="form-control" type="number" name="jumlahisi" id="jumlahtambah">
                                </form>
                            </td>
                            
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td colspan="3"> Belum ada Data</td>
                        </tr>
                    <?php endif; ?>
                    
                </tbody>
            </table>
        </div>
    </div>
    
    <div class="card mx-4 my-2">
       
        <div class="card-header">
           
                <?php echo csrf_field(); ?>

                <div style="font-size: 20px">Pemasukan</div>
              
              
               
                
    
        <div class="card-body">
            <table class="table px-4">
                <thead>
                    <th class="">Nama Barang</th>
                    <th class="text-center">Keuntungan</th>
                </thead>
                <tbody>
                    <tr>
                        <?php $__empty_1 = true; $__currentLoopData = $baru2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td class="text-left"><?php echo e($item->namaBarang); ?></td>
                        <td><span style="float:left"><?php echo e('Rp.-  '); ?></span><span style="float: right"
                                class="normaloffertotalspan"><?php echo e(number_format($item->jumlah * $item->harga, 0, ',', '.')); ?></span>
                        </td>

                        
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <?php endif; ?>
                   
                    <?php echo method_field('POST'); ?>
                    <tr>
                        <td class="text-center"><b> Total</b>

                        </td>

                        <td>
                            <b>
                                <span style="float:left"><?php echo e('Rp.-  '); ?></span>
                                
                                <span id="subtotal"  class="" style="float: right" name="halo"><?php echo e(number_format($total, 0, ',', '.')); ?></span>
                            </b>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2"><a href="/debit/<?php echo e($baru2[0]->tanggal); ?>" class="form-control bg-success text-center text-light">Finalisasi</a></td>
                    </tr>
                  
                </tbody>
            </table>

        </div>
    </div>
    
<?php $__env->stopSection(); ?>
<?php $__env->startSection('footerplus'); ?>
    <script>
        $('#jumlahtambah').on('keyup', function() {
            if ($(this).val().length > 0) {
                $('formisi').submit();
            }
        });
    </script>
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/Depotair/resources/views/home.blade.php ENDPATH**/ ?>