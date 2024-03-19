

<?php $__env->startSection('body'); ?>
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Contacts</h1>
        <a href="<?php echo e(route('Contact.create')); ?>" class="btn btn-primary">Add New</a>
    </div>
    <hr />
    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($contact->id); ?></td>
                <td><?php echo e($contact->first_name); ?></td>
                <td><?php echo e($contact->last_name); ?></td>
                <td><?php echo e($contact->email); ?></td>
                <td><?php echo e($contact->phone); ?></td>
                <td>
                    <a href="<?php echo e(route('Contact.show', $contact->id)); ?>" class="btn btn-info btn-sm">View</a>
                    <a href="<?php echo e(route('Contact.edit', $contact->id)); ?>" class="btn btn-warning btn-sm">Edit</a>
                    <form action="<?php echo e(route('Contact.destroy', $contact->id)); ?>" method="POST" style="display: inline-block;">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Ainur Rofik\Documents\#KuliahS4\PPL\tugas-ppl\tugas-ppl\resources\views/contact/index.blade.php ENDPATH**/ ?>