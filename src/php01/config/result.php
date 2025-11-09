<?php
$customer = htmlspecialchars($_POST['customer'], ENT_QUOTES);
$set = htmlspecialchars($_POST['set'], ENT_QUOTES);
$number = htmlspecialchars($_POST['number'], ENT_QUOTES);
print "私の名前は、" . $customer . "<br />";
print "ご希望の商品は、" . $set . "<br />";
print "注文数は、" . $number;