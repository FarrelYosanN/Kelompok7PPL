

<?php $__env->startSection('body'); ?>
    <h1 class="mb-0">Address Details</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Street</label>
            <input type="text" name="street" class="form-control" placeholder="street" value="<?php echo e($address->street); ?>" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">City</label>
            <input type="text" name="city" class="form-control" placeholder="city" value="<?php echo e($address->city); ?>" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Province</label>
            <input type="text" name="province" class="form-control" placeholder="province" value="<?php echo e($address->province); ?>" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Country</label>
            <input type="text" name="country" class="form-control" placeholder="country" value="<?php echo e($address->country); ?>" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Postal code</label>
            <input type="text" name="postal code" class="form-control" placeholder="postal code" value="<?php echo e($address->postal_code); ?>" readonly>
        </div>   
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="<?php echo e($address->created_at); ?>" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="<?php echo e($address->updated_at); ?>" readonly>
        </div>
    </div>
    <!-- <div class="row mb-3">
        <div class="col mb-3">
            <strong>Street:</strong> <?php echo e($address->street); ?>

        </div>
        <div class="col mb-3">
            <strong>City:</strong> <?php echo e($address->city); ?>

        </div>
    </div>
    <div class="row mb-3">
        <div class="col mb-3">
            <strong>Province:</strong> <?php echo e($address->province); ?>

        </div>
        <div class="col mb-3">
            <strong>Country:</strong> <?php echo e($address->country); ?>

        </div>
    </div>
    <div class="row mb-3">
        <div class="col mb-3">
            <strong>Postal Code:</strong> <?php echo e($address->postal_code); ?>

        </div>
    </div> -->
    <div class="row">
        <div class="col">
            <a href="<?php echo e(route('addresses.index')); ?>" class="btn btn-secondary">Back</a>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Ainur Rofik\Documents\#KuliahS4\PPL\tugas-ppl\tugas-ppl\resources\views/addresses/show.blade.php ENDPATH**/ ?>