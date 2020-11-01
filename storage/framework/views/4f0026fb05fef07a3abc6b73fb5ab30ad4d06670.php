<?php $__env->startSection('pageTitle'); ?>
    All Vendor list
<?php $__env->stopSection(); ?>
<?php $__env->startSection('mainContent'); ?>

    <div class="box-body">
        <div class="table-responsive" >
            <table id="example1" class="table table-bordered table-striped table-responsive ">
                <thead>
                <tr>
                    <th>Sl</th>

                    <th >Name </th>

                    <th >Email </th>
                    <th >Phone </th>
                    <th >Shop Name </th>
                    <th>Total Product</th>
                    <th >Vendor Percent </th>
                    <th >Status </th>
                    <th>First Verify</th>
                    <th>Second Verify</th>
                    <th >date </th>
                    <th >Action </th>
                </tr>
                </thead>
                <tbody>

                <?php if(isset($vendors)): ?>
                    <?php $i=0;?>
                    <?php $__currentLoopData = $vendors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e(++$i); ?></td>

                            <td><?php echo e($user->vendor_f_name.' '.$user->vendor_l_name); ?> </td>
                            <td><?php echo e($user->vendor_email); ?> </td>
                            <td><?php echo e($user->vendor_phone); ?> </td>
                            <td><?php echo e($user->vendor_shop); ?> </td>
                            <td>
                                <?php
                                    $Total=DB::table('product')->where('vendor_id', $user->vendor_id)->count();
                                    echo $Total;
                                ?>
                            </td>
                            <td><?php echo e($user->vendor_percent); ?> </td>

                            <td>
                                <?php

                            if($user->status==0){
                            ?>
                                <label class="label label-danger">Pending</label>
                                <?php } else { ?>
                                    <label class="label label-success">Active</label>
                                <?php } ?>
                            </td>
                            <td>
                                <?php
                                    if($user->nid_image=='' && $user->bank_image==''){
                                ?>
                                <label class="label label-danger">Not Insert</label>
                                <?php
                                    }else if($user->first_verify=='1'){
                                ?>
                                <label class="label label-success">Complete</label>
                                <?php
                                    }else{
                                ?>
                                <label class="label label-info">Waiting verify</label>
                                <?php
                                    }
                                ?>

                            </td>
                            <td>
                                <?php
                                if($user->m_name==''||$user->b_name==''){
                                ?>
                                <label class="label label-danger">Not Insert</label>
                                <?php
                                }else if($user->m_number==''||$user->b_number==''){
                                ?>
                                <label class="label label-danger">Not Insert</label>
                                <?php
                                }else if($user->m_type==''||$user->b_branch==''){
                                ?>
                                <label class="label label-danger">Not Insert</label>
                                <?php
                                }else if($user->m_service==''||$user->b_bank==''){
                                ?>
                                <label class="label label-danger">Not Insert</label>
                                <?php
                                    }else if($user->second_verify=='1'){
                                ?>
                                <label class="label label-success">Complete</label>
                                <?php
                                    }else{
                                ?>
                                <label class="label label-info">Waiting verify</label>
                                <?php
                                    }
                                ?>
                            </td>
                            <td><?php echo e(date('d-m-Y',strtotime($user->registered_date))); ?></td>
                            <td>
                                <a title="edit" class="btn btn-success" href="<?php echo e(url('/admin/vendor/active')); ?>/<?php echo e($user->vendor_id); ?>">
                                    Active
                                </a>

                                <a title="edit" href="<?php echo e(url('/admin/vendor/edit')); ?>/<?php echo e($user->vendor_id); ?>" >
                                    <span class="glyphicon glyphicon-edit btn btn-success"></span>
                                </a>
                                <a title="edit"  class="btn btn-danger"href="<?php echo e(url('/admin/vendor/inactive')); ?>/<?php echo e($user->vendor_id); ?>">
                                    Inactive
                                </a>
                                <a title="delete" href="<?php echo e(url('/admin/vendor/delete')); ?>/<?php echo e($user->vendor_id); ?>" onclick="return confirm('Are you want to delete this information :press Ok for delete otherwise Cancel')">
                                    <span class="glyphicon glyphicon-trash btn btn-danger"></span>
                                </a>
                                <button type="button" class="mt-1 btn btn-default btn-sm " data-toggle="modal" data-target="#myModal<?php echo e($user->vendor_id); ?>">
                                  <span class="glyphicon glyphicon-eye-open"></span> 
                                </button>
                            </td>
                        </tr>

                        <div id="myModal<?php echo e($user->vendor_id); ?>" class="modal fade" role="dialog">
                          <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                              <div class="modal-header">
                                
                                <h4 class="modal-title">Address</h4>
                              </div>
                              <div class="modal-body">
                                <p><?php echo e($user->vendor_address); ?></p>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                              </div>
                            </div>

                          </div>
                        </div>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
                </tbody>

            </table>

        </div>



    </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\SXampp\htdocs\suhojbuy.com\resources\views/admin/vendor/vendor_users.blade.php ENDPATH**/ ?>