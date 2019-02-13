
<div align="center" style="width:500px; max-width:500px; border: 0;margin-left: auto; margin-right: auto;">
        <img style="width: 120px;" src="/images/ornament.png">
        <h1 align="center" style="text-align: center; color: #535045; font-weight: 100;">NEW BOOKING REQUEST</h1><br/>
        <p align="center" style="color: #535045; font-size: 18px; padding-bottom:15px; border-bottom: 1px solid;"><b>Name: </b> <?php echo e($_POST["name"]); ?> </p> <br/>
        <p align="center" style="color: #535045; font-size: 18px; padding-bottom:15px; border-bottom: 1px solid; text-decoration:none;"><b>Email: </b><?php echo e($_POST["email"]); ?></p> <br/>

        
        <p align="center" style="color: #535045; font-size: 18px; padding-bottom:15px; border-bottom: 1px solid;"><b>Countries: </b>
        <?php $__currentLoopData = $_POST["countries"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        	<span><?php echo e($country); ?>, </span>
		 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </p> <br/>
      
        <p align="center" style="color: #535045; font-size: 18px; padding-bottom:15px; border-bottom: 1px solid;"><b>Message: </b> <?php echo e($_POST["message"]); ?></p> 
</div>