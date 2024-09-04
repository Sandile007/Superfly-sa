<?php
    if (isset($_POST['submit'])) {
        $fname=$_POST[fname];
        $lname=$_POST[lname];
        $product=$_POST[product];
        $email=$_POST[email];
        $phone=$_POST[phone];
        $msg=$_POST[msg];

        $to='shop@superfly-sa.co.za'
        $subject='From Submission';
        $message="First Name: ".$fname."\n"."Last Name: ".$lname."\n"."Product: ".$product."\n"."Phone: ".$phone."\n"."Wrote the following: "."\n\n\n\n".$msg;
        $headers="From: ".$email;

        if (mail($to, $subject, $headers)) {
            echo "<h1>Your Order Was Successfully Sent! Thank You" ." ".$fname.".".$lname.", We will contact you shortly!</h1>";
        }

        else{
            echo "Your Order Was Unsuccessfully Sent"
        }
    }
?>