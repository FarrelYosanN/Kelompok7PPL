


<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">List of Addresses</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Street</th>
                                <th>City</th>
                                <th>State</th>
                                <th>Postal Code</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $addresses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $address): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($address->id); ?></td>
                                <td><?php echo e($address->street); ?></td>
                                <td><?php echo e($address->city); ?></td>
                                <td><?php echo e($address->state); ?></td>
                                <td><?php echo e($address->postal_code); ?></td>
                                <td>
                                    <a href="<?php echo e(route('addresses.edit', $address->id)); ?>" class="btn btn-primary btn-sm">Edit</a>
                                    <form action="<?php echo e(route('addresses.destroy', $address->id)); ?>" method="POST" style="display: inline">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                    <a href="<?php echo e(route('addresses.create')); ?>" class="btn btn-success">Add Address</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Ainur Rofik\Documents\#KuliahS4\PPL\tugas-ppl\tugas-ppl\resources\views/features.blade.php ENDPATH**/ ?>