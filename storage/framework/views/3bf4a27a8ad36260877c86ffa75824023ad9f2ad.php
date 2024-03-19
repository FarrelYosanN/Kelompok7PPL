

<?php $__env->startSection('body'); ?>
    <h1 class="mb-0">Add Address</h1>
    <hr />
    <form action="<?php echo e(route('addresses.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="street" class="form-control" placeholder="Street">
            </div>
            <div class="col">
                <input type="text" name="city" class="form-control" placeholder="City">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="province" class="form-control" placeholder="Province">
            </div>
            <div class="col">
                <input type="text" name="country" class="form-control" placeholder="Country">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="postal_code" class="form-control" placeholder="Postal Code">
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Ainur Rofik\Documents\#KuliahS4\PPL\tugas-ppl\tugas-ppl\resources\views/addresses/create.blade.php ENDPATH**/ ?>