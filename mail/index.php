<?php 

$s=mail(
     'shubhamkapoor9798@gmail.com',
     'Works!',
     'mail is again send to your email.An email has been generated from
      your localhost, congratulations!');

if($s)
	echo "mail sent";
else
	echo "not send";