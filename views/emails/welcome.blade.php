<html>
    <body>
        <h1>Hello, {{ $f_name }} {{ $l_name }}</h1>
		
		<h3>Customer Information</h3>
		<p>Name : {{ $f_name }} {{ $l_name }}</p>
		<p>Phone : {{ $phone}}</p>
		<p>Email : {{ $email}}</p>
		<p>State : {{ $state}}</p>
		<?php foreach($loan_purpose as $val) { ?>
		<p>Loan purpose : {{ $val}}</p>
		<?php } ?>
    </body>
</html>