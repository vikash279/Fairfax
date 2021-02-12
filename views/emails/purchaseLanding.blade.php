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
				<p style="text-align:center;margin:4px;"><b>Loan Type:</b> Home Purchase</p>
			</td>
		</tr>
		<tr>
			<td><h3 style="border-bottom:1px dotted #000;text-align:center;margin:20px 0px 0px 0px;">BORROWER INFO</h3></td>
		</tr>
		<tr>
			<td>
				<p style="text-align:center;margin:4px;"><b>Name: </b> {{ $name }}</p>
			</td>
		</tr>
		<tr>
			<td>
				<p style="text-align:center;margin:4px;"><b>Email Address:</b> <a href="{{ $email}}" style="color:red">{{ $email}}</a></p>
			</td>
		</tr>
		<tr>
			<td>
				<p style="text-align:center;margin:4px;"><b>Phone:</b> {{ $phone}}</p>
			</td>
		</tr>
       <tr>
			<td>
				<p style="text-align:center;margin:4px;"><b>Mortgage Type:</b> {{$mortgage_type}}</p>
			</td>
		</tr>
		<tr>
			<td>
				<p style="text-align:center;margin:4px;"><b>Credit Score:</b> {{$credit_score}}</p>
			</td>
		</tr>
		<tr>
			<td>
				<p style="text-align:center;margin:4px;"><b>Veteran:</b>{{$veteran}}</p>
			</td>
		</tr>
		<!--<tr>-->
		<!--	<td>-->
		<!--		<p style="text-align:center;margin:4px;"><b>Military Service:</b></p>-->
		<!--	</td>-->
		<!--</tr>-->
		<tr>
			<td>
				<p style="text-align:center;margin:4px;"><b>Work With Realtor:</b>{{$realtor}}</p>
			</td>
		</tr>
		<!--<tr>
			<td>
				<p style="text-align:center;margin:4px;"><b>Property Value:</b> $80,001 - $90,000</p>
			</td>
		</tr>-->
		<!--<tr>-->
		<!--	<td>-->
		<!--		<p style="text-align:center;margin:4px;"><b>Property Type:</b></p>-->
		<!--	</td>-->
		<!--</tr>-->
		<!--<tr>-->
		<!--	<td>-->
		<!--		<p style="text-align:center;margin:4px;"><b>Property Use:</b></p>-->
		<!--	</td>-->
		<!--</tr>-->
		<tr>
			<td>
				<p style="text-align:center;margin:4px;"><b>Have You Already Found a Home:</b>{{$found_home}}</p>
			</td>
		</tr>
		<tr>
			<td>
				<p style="text-align:center;margin:4px;"><b>Estimated Purchase Price:</b> {{$purchase_price}}</p>
			</td>
		</tr>
		<tr>
			<td>
				<p style="text-align:center;margin:4px;"><b>Downpayment:</b> {{$downpayment}}</p>
			</td>
		</tr>
		<tr>
			<td>
				<p style="text-align:center;margin:4px;"><b>Signed The Contract:</b> {{$signed_contract}}</p>
			</td>
		</tr>
		<!--<tr>
			<td><h3 style="border-bottom:1px dotted #000;text-align:center;margin:20px 0px 0px 0px;">Property Address</h3></td>
		</tr>
		<tr>
			<td>
				<p style="text-align:center;margin:4px;"><b>Address:</b> 4001 Virginia Beach Boulevard, Suite 112</p>
			</td>
		</tr>
		<tr>
			<td>
				<p style="text-align:center;margin:4px;"><b>City:</b> Dulles</p>
			</td>
		</tr>
		<tr>
			<td>
				<p style="text-align:center;margin:4px;"><b>State:</b> Virginia</p>
			</td>
		</tr>
		<tr>
			<td>
				<p style="text-align:center;margin:4px;"><b>Pin Code:</b> 20103</p>
			</td>
		</tr>-->
	</table>

</body>

</html>