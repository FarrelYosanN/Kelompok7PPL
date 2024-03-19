
 
<?php $__env->startSection('body'); ?>
    <h1 class="mb-0">Add Address</h1>
    <hr />
    <form action="<?php echo e(route('Address.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="Street" class="form-control" placeholder="Street">
            </div>
            <div class="col">
                <input type="text" name="City" class="form-control" placeholder="City">
            </div>
            <div class="col">
                <input type="text" name="Province" class="form-control" placeholder="Province">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="Country" class="form-control" placeholder="Country">
            </div>
            <div class="col">
                <input type="text" name="Postal_code" class="form-control" placeholder="Postal code">
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Ainur Rofik\Documents\#KuliahS4\PPL\tugas-ppl\tugas-ppl\resources\views/Address/create.blade.php ENDPATH**/ ?>