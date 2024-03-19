

<?php $__env->startSection('body'); ?>
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List Contact</h1>
        <a href="<?php echo e(route('contacts.create')); ?>" class="btn btn-primary">Add Contact</a>
    </div>
    <hr />
    <?php if(Session::has('success')): ?>
        <div class="alert alert-success" role="alert">
            <?php echo e(Session::get('success')); ?>

        </div>
    <?php endif; ?>

    <!-- Search Form -->
    <form action="<?php echo e(route('contacts.search')); ?>" method="GET" class="mb-3">
        <div class="input-group">
            <input type="text" name="search" class="form-control" placeholder="Search...">
            <button type="submit" class="btn btn-outline-primary">Search</button>
        </div>
    </form>

    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>No</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php if($contacts->count() > 0): ?>
                <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($loop->iteration); ?></td>
                        <td><?php echo e($contact->first_name); ?></td>
                        <td><?php echo e($contact->last_name); ?></td>
                        <td><?php echo e($contact->email); ?></td>
                        <td><?php echo e($contact->phone); ?></td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="<?php echo e(route('contacts.show', $contact->id)); ?>" type="button" class="btn btn-secondary ">Detail</a>
                                <a href="<?php echo e(route('contacts.edit', $contact->id)); ?>" type="button" class="btn btn-warning">Edit</a>
                                <form action="<?php echo e(route('contacts.destroy', $contact->id)); ?>" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="btn btn-danger m-0">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
                <tr>
                    <td class="text-center" colspan="6">Contact not found</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Ainur Rofik\Documents\#KuliahS4\PPL\tugas-ppl\tugas-ppl\resources\views/contacts/index.blade.php ENDPATH**/ ?>