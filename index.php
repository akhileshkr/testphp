<?php
// $con=mysqli_connect("localhost","root","","mail");



// if(isset($_GET['sub']))
// {

// $email=$_GET['mailbox'];
// $pass=$_GET['param1'];
	 $email="";//to mail id 
	 
	 
$from="";//from mail id
$account="";//from account id
$password="";//from mail password

$to=$email;
$fromc="";//from cc mail id
$from_name="Secureshare";
$msg="<strong>Your account has been verified and accepted <br />
</strong>"; // HTML message
$subject="Accept Verification";


//error_reporting(0);
include("class.phpmailer.php");
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->CharSet = 'UTF-8';
$mail->Host = "smtp.gmail.com";
//$mail->Host = "www.vtrio.com";
$mail->SMTPAuth= true;
$mail->Port = 465; // Or 587
$mail->Username= $account;
$mail->Password= $password;
$mail->SMTPSecure = 'ssl';
$mail->From = $fromc;
$mail->FromName= $from_name;
$mail->isHTML(true);
$mail->Subject = $subject;
$mail->Body = $msg;
$mail->addAddress($to);
//$mail->AddAttachment("Scan5.pdf");

//$mail->AddAttachment("logo.gif");
if(!$mail->send()){
 echo "Mailer Error: " . $mail->ErrorInfo;
}else{
?>
<script>
//alert("Message send to the Mail ID");
//window.location="inbox.php"; 
</script>
<?php
echo "E-Mail has been sent";
}
// }
?>