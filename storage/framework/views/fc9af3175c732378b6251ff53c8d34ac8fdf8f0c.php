
 
<?php $__env->startSection('body'); ?>
    <h1 class="mb-0">Detail Address</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Street</label>
            <input type="text" name="Street" class="form-control" placeholder="Street" value="<?php echo e($Address->Street); ?>" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">City</label>
            <input type="text" name="City" class="form-control" placeholder="City" value="<?php echo e($Address->City); ?>" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Province</label>
            <input type="text" name="Province" class="form-control" placeholder="Province" value="<?php echo e($Address->Province); ?>" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Country</label>
            <input type="text" name="Country" class="form-control" placeholder="Country" value="<?php echo e($Address->Country); ?>" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Postal_code</label>
            <input type="text" name="Postal_code" class="form-control" placeholder="Postal_code" value="<?php echo e($Address->Postal_code); ?>" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="<?php echo e($Address->created_at); ?>" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="<?php echo e($Address->updated_at); ?>" readonly>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Ainur Rofik\Documents\#KuliahS4\PPL\tugas-ppl\tugas-ppl\resources\views/Address/show.blade.php ENDPATH**/ ?>