<html>
    <body>
        <h1>Hello, A new customer has contacted. Below are the details of customer:</h1>
		
		<h3>Customer Information</h3>
		<p>Name : <?php echo e($f_name); ?> <?php echo e($l_name); ?></p>
		<p>Phone : <?php echo e($Pno); ?></p>
		<p>Email : <?php echo e($email); ?></p>
		<p>Address : <?php echo e($add.",".$city.",".$state); ?></p>
		<p>Alternate Phone : <?php echo e($AlPno); ?></p>
		<p>Best Time : <?php echo e($bestTime); ?></p>
		<p>Contact Time : <?php echo e($contactBy); ?></p>
    </body>
</html><?php /**PATH /home2/younguxc/public_html/fairfax/resources/views/emails/contactEmail.blade.php ENDPATH**/ ?>