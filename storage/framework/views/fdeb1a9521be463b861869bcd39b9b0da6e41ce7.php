

<?php $__env->startSection('body'); ?>
    <h1 class="mb-0">Contact Details</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">First Name</label>
            <input type="text" name="First Name" class="form-control" placeholder="First Name" value="<?php echo e($contact->first_name); ?>" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Last Name</label>
            <input type="text" name="Last Name" class="form-control" placeholder="Last Name" value="<?php echo e($contact->last_name); ?>" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Email</label>
            <input type="text" name="Email" class="form-control" placeholder="Email" value="<?php echo e($contact->email); ?>" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Phone</label>
            <input type="text" name="Phone" class="form-control" placeholder="Phone" value="<?php echo e($contact->phone); ?>" readonly>
        </div>   
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="<?php echo e($contact->created_at); ?>" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="<?php echo e($contact->updated_at); ?>" readonly>
        </div>
    </div>
    <!-- <div class="row mb-3">
        <div class="col">
            <strong>First Name:</strong> <?php echo e($contact->first_name); ?>

        </div>
        <div class="col">
            <strong>Last Name:</strong> <?php echo e($contact->last_name); ?>

        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <strong>Email:</strong> <?php echo e($contact->email); ?>

        </div>
        <div class="col">
            <strong>Phone:</strong> <?php echo e($contact->phone); ?>

        </div>
    </div> -->
    <div class="row">
        <div class="col">
            <a href="<?php echo e(route('contacts.index')); ?>" class="btn btn-secondary">Back</a>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Ainur Rofik\Documents\#KuliahS4\PPL\tugas-ppl\tugas-ppl\resources\views/contacts/show.blade.php ENDPATH**/ ?>