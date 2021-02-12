<html>
    <body>
        <h1>Hello, <?php echo e($f_name); ?> <?php echo e($l_name); ?></h1>
		
		<h3>Customer Information</h3>
		<p>Name : <?php echo e($f_name); ?> <?php echo e($l_name); ?></p>
		<p>Phone : <?php echo e($phone); ?></p>
		<p>Email : <?php echo e($email); ?></p>
		<p>State : <?php echo e($state); ?></p>
		<?php foreach($loan_purpose as $val) { ?>
		<p>Loan purpose : <?php echo e($val); ?></p>
		<?php } ?>
    </body>
</html><?php /**PATH /home2/younguxc/public_html/fairfax/resources/views/emails/welcome.blade.php ENDPATH**/ ?>