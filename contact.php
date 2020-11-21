<?php
// Variable Settings 
$name = $_REQUEST['Contactname'];
$mail =$_REQUEST['Contactmail'];
$massege =$_REQUEST['Contactmsg'];
//  Checking Input Feilds 
if(empty($name) ||empty($mail) || empty($massege) )
{
    echo "PLease Fill The All Feild" ;
}
else
{
    mail("shivrajkhetri7@gmail.com","Web Portfolio",$massege,"From : $name <$mail>");
    echo "<script type='text/javascript'>alert('Email Send Successfully');
    window.history.log(-1); </script>";
}
?>