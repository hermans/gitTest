<?php
include 'db.php';
include 'payment.php';


echo 'testing';

# for loop
for($i =0;$i<=1;$i++){
	echo '<li>testing</li>';
}

echo '<br>';
echo 'This for testing only';

# test connect to database
$db = new db();
$db->connectToDb();
$db->closeDb();


# test payment method
$payment = new PaymentMethod();

