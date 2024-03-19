

<?php $__env->startSection('body'); ?>
    <h1 class="mb-0">Edit Address</h1>
    <hr />
    <form action="<?php echo e(route('addresses.update', $address->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="street" class="form-control" placeholder="Street" value="<?php echo e($address->street); ?>">
            </div>
            <div class="col">
                <input type="text" name="city" class="form-control" placeholder="City" value="<?php echo e($address->city); ?>">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="province" class="form-control" placeholder="Province" value="<?php echo e($address->province); ?>">
            </div>
            <div class="col">
                <input type="text" name="country" class="form-control" placeholder="Country" value="<?php echo e($address->country); ?>">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="postal_code" class="form-control" placeholder="Postal Code" value="<?php echo e($address->postal_code); ?>">
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Ainur Rofik\Documents\#KuliahS4\PPL\tugas-ppl\tugas-ppl\resources\views/addresses/edit.blade.php ENDPATH**/ ?>