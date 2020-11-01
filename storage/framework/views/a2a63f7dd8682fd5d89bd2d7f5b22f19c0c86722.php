<?php $__env->startSection('pageTitle'); ?>
    All Categoreis Users List
<?php $__env->stopSection(); ?>
<?php $__env->startSection('mainContent'); ?>
<div class="box-body">

    <div class="table-responsive">

        <table  class="table table-bordered table-striped   ">
            <thead>
            <tr>
                <th>Sl</th>
                <th> Name</th>
                <th> Address</th>

                <th>Action </th>
            </tr>
            </thead>
            <tbody>
            <?php $i=0;?>

            <?php if($couriers): ?>
                <?php $__currentLoopData = $couriers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e(++$i); ?></td>
                    <td><?php echo e($row->courier_name); ?></td>
                    <td><?php  echo $status= $row->courier_status==1 ? 'Inside Dhaka':'Outside Dhaka';?></td>
                    <td>
                        <a title="edit" href="<?php echo e(url('admin/courier')); ?>/<?php echo e($row->courier_id); ?>">
                            <span class="glyphicon glyphicon-edit btn btn-success"></span>
                        </a>


                        <a title="delete" href="<?php echo e(url('admin/courier/delete')); ?>/<?php echo e($row->courier_id); ?>" onclick="return confirm('Are you want to delete this information ')">
                            <span class="glyphicon glyphicon-trash btn btn-danger"></span>
                        </a></td>

                </tr>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>

            </tbody>

        </table>

    </div>

    <input type="hidden" name="hidden_page" id="hidden_page" value="1" />

</div>

<script>
    $(document).ready(function(){


        function fetch_data(page, query)
        {
            $.ajax({
                type:"GET",
                url:"<?php echo e(url('category/pagination/fetch_data')); ?>?page="+page+"&query="+query,
                success:function(data)
                {
                    $('tbody').html('');
                    $('tbody').html(data);
                }
            })
        }

        $(document).on('keyup', '#serach', function(){
            var query = $('#serach').val();
            var page = $('#hidden_page').val();
            if(query.length >0) {
                fetch_data(page, query);
            } else {
                fetch_data(1, '');
            }
        });


        $(document).on('click', '.pagination a', function(event){
            event.preventDefault();
            var page = $(this).attr('href').split('page=')[1];
            $('#hidden_page').val(page);
            var query = $('#serach').val();
            fetch_data(page, query);
        });

    });
</script>


<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\SXampp\htdocs\suhojbuy.com\resources\views/admin/courier/index.blade.php ENDPATH**/ ?>