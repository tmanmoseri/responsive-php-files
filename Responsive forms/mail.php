<?php

//Taking all values
$fname 		= $_POST['fname'];
$email 		= $_POST['email'];
$subject 	= $_POST['subject'];
$msg 		= $_POST['msg'];
$output 	= "Name: ".$fname."\n\nSubject: ".$subject."\n\nMessage: ".$msg;

$to 		= 'chotompona@gmail.com';
$headers	= 'FROM: "'.$email.'"';

$send		= mail($to, $fname, $output."\n\n***This message has been sent from contact form", $headers);

if($send){
    echo '<script language="javascript">';
            echo 'alert("Email send successfully!!")';
            echo '</script>';
            
           echo "<script>window.top.location='http://www.saachs.org/contact.php'</script>";
           
}
else{
    echo '<script language="javascript">';
            echo 'alert("email not send!!")';
            echo '</script>';
            
           echo "<script>window.top.location='http://www.saachs.org/contact.php'</script>";
            
}