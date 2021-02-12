<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/fav.png">
    <!-- Author Meta -->
    <meta name="author" content="">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>FairFex | Email</title>

   <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500&display=swap" rel="stylesheet">

    <!--
CSS
============================================= -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    
</head>
<body>
	<table style="max-width:530px;width:100%;padding:16px 0px;margin:10px auto;background:#ccc;font-family:'Montserrat', sans-serif;" width="100%">
		<tr>
			<td style="text-align:center;">
				<img src="img\logo.png" alt="" style="max-width:200px;width:100%;margin-bottom:16px;">
			</td>
		</tr>
		<tr>
			<td><h3 style="border-bottom:1px dotted #000;text-align:center;margin:0px;">LEAD INFO</h3></td>
		</tr>
		<tr>
			<td>
				<p style="text-align:center;margin:4px;"><b>Captured On:</b> <a href="fairfaxlending.com" style="color:red">fairfaxlending.com</a></p>
			</td>
		</tr>
		<tr>
			<td>
				<p style="text-align:center;margin:4px;"><b>Lead Date:</b><?php echo date("M")?>.<?php echo date("d"); ?>,<?php echo date("Y");?>,<?php echo date("h:i:sa"); ?> PST</p>
			</td>
		</tr>
		<tr>
			<td>
				<p style="text-align:center;margin:4px;"><b>Lead Type:</b> Short Application</p>
			</td>
		</tr>
		<tr>
			<td>
				<p style="text-align:center;margin:4px;"><b>Loan Purpose:</b> Lower Interest Rate</p>
			</td>
		</tr>
		<tr>
			<td>
				<p style="text-align:center;margin:4px;"><b>Loan Type:</b> Home Refinance</p>
			</td>
		</tr>
		<tr>
			<td><h3 style="border-bottom:1px dotted #000;text-align:center;margin:20px 0px 0px 0px;">BORROWER INFO</h3></td>
		</tr>
		<tr>
			<td>
				<p style="text-align:center;margin:4px;"><b>Name: </b> <?php echo e($f_name); ?> <?php echo e($l_name); ?></p>
			</td>
		</tr>
		<tr>
			<td>
				<p style="text-align:center;margin:4px;"><b>Email Address:</b> <a href="<?php echo e($email); ?>" style="color:red"><?php echo e($email); ?></a></p>
			</td>
		</tr>
		<tr>
			<td>
				<p style="text-align:center;margin:4px;"><b>Phone:</b> <?php echo e($phone); ?></p>
			</td>
		</tr>
		<tr>
			<td>
				<p style="text-align:center;margin:4px;"><b>Alternate Phone:</b> <?php echo e($alternate_phone); ?></p>
			</td>
		</tr>
		<tr>
			<td>
				<p style="text-align:center;margin:4px;"><b>Contact Time:</b> <?php echo e($contact_time); ?></p>
			</td>
		</tr>
		<tr>
			<td>
				<p style="text-align:center;margin:4px;"><b>Credit Score:</b> <?php echo e($credit_score); ?></p>
			</td>
		</tr>
		<!--<tr>-->
		<!--	<td>-->
		<!--		<p style="text-align:center;margin:4px;"><b>Do You Currenty Have a Loan:</b> No</p>-->
		<!--	</td>-->
		<!--</tr>-->
		<tr>
			<td>
				<p style="text-align:center;margin:4px;"><b>Military Service:</b><?php echo e($military_service); ?> </p>
			</td>
		</tr>
		<!--<tr>
			<td>
				<p style="text-align:center;margin:4px;"><b>Loan Amount:</b> $70,001 - $80,000</p>
			</td>
		</tr>-->
		<!--<tr>
			<td>
				<p style="text-align:center;margin:4px;"><b>Property Value:</b> $80,001 - $90,000</p>
			</td>
		</tr>-->
		<tr>
			<td>
				<p style="text-align:center;margin:4px;"><b>Property Type:</b><?php echo e($property_type); ?></p>
			</td>
		</tr>
		<tr>
			<td>
				<p style="text-align:center;margin:4px;"><b>Property Use:</b><?php echo e($property_use); ?></p>
			</td>
		</tr>
		<!--<tr>-->
		<!--	<td>-->
		<!--		<p style="text-align:center;margin:4px;"><b>Have You Already Found a Home:</b> No</p>-->
		<!--	</td>-->
		<!--</tr>-->
		<!--<tr>-->
		<!--	<td>-->
		<!--		<p style="text-align:center;margin:4px;"><b>Estimated Purchase Price:</b> <?php echo e($estimated_purchase_price); ?></p>-->
		<!--	</td>-->
		<!--</tr>-->
		<!--<tr>-->
		<!--	<td>-->
		<!--		<p style="text-align:center;margin:4px;"><b>Downpayment:</b> <?php echo e($downpayment); ?></p>-->
		<!--	</td>-->
		<!--</tr>-->
		<!--<tr>-->
		<!--	<td>-->
		<!--		<p style="text-align:center;margin:4px;"><b>You Expect To Buy Within:</b> <?php echo e($expected_buy_time); ?></p>-->
		<!--	</td>-->
		<!--</tr>-->
		<tr>
			<td><h3 style="border-bottom:1px dotted #000;text-align:center;margin:20px 0px 0px 0px;">Property Address</h3></td>
		</tr>
		<tr>
			<td>
				<p style="text-align:center;margin:4px;"><b>Address:</b> <?php echo e($address); ?></p>
			</td>
		</tr>
		<tr>
			<td>
				<p style="text-align:center;margin:4px;"><b>City:</b> <?php echo e($city); ?></p>
			</td>
		</tr>
		<tr>
			<td>
				<p style="text-align:center;margin:4px;"><b>State:</b> <?php echo e($state); ?></p>
			</td>
		</tr>
		<tr>
			<td>
				<p style="text-align:center;margin:4px;"><b>Pin Code:</b> <?php echo e($zip); ?></p>
			</td>
		</tr>
	</table>

</body>

</html><?php /**PATH /home2/younguxc/public_html/fairfax/resources/views/emails/homeRefinance.blade.php ENDPATH**/ ?>