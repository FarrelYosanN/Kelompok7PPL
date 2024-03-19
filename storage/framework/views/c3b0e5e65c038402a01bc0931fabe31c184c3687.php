
 
<?php $__env->startSection('body'); ?>
    <h1 class="mb-0">Edit Address</h1>
    <hr />
    <form action="<?php echo e(route('Address.update', $Address->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Street</label>
                <input type="text" name="Street" class="form-control" placeholder="Street" value="<?php echo e($Address->Street); ?>" >
            </div>
            <div class="col mb-3">
                <label class="form-label">City</label>
                <input type="text" name="City" class="form-control" placeholder="City" value="<?php echo e($Address->City); ?>" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Province</label>
                <input type="text" name="Province" class="form-control" placeholder="Province" value="<?php echo e($Address->Province); ?>" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Country</label>
                <input type="text" name="Country" class="form-control" placeholder="Country" value="<?php echo e($Address->Country); ?>" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Postal code</label>
                <input type="text" name="Postal_code" class="form-control" placeholder="Postal code" value="<?php echo e($Address->Postal_code); ?>" >
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Ainur Rofik\Documents\#KuliahS4\PPL\tugas-ppl\tugas-ppl\resources\views/Address/edit.blade.php ENDPATH**/ ?>