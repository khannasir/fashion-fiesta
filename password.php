<?php

 //The original palin text password	

 $password='test123';

 //Hash it with BCRYPT

 //$passwordHashed=md5($password);
 $passwordHashed=password_hash($password, PASSWORD_BCRYPT);

 //print it out
 echo "$passwordHashed";
?>