<?php 
extract($_POST);
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'recallinfotech985@gmail.com';                     //SMTP username
    $mail->Password   = 'xsifxidpidpeguaq';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('sheelendrakumar1282001@gmail.com', 'Just Enquiry');
    $mail->addAddress('sheelendrakumar1282001@gmail.com','recallinfotech');     //Add a recipient
    // $mail->addcc('sheelendrakumar1282001@gmail.com');

    //Attachments
   //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachmentss
  // $mail->addAttachment('images/thank.png', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Nityavandan';
    $mail->Body    = "<html>
<head>
<title>Nityavandan</title>
</head>
<body>
 
<table border='1'>
<tr>
<th>Name:</th><td>$first_name</td>
</tr>
 
</table>
</body>
</html>
";
    
    $mail->send();
   //echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
 
//Create an instance; passing `true` enables exceptions
$mailto = new PHPMailer(true);

try {
    //Server settings
    // $mailto->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mailto->isSMTP();                                            //Send using SMTP
    $mailto->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mailto->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mailto->Username   = 'recallinfotech985@gmail.com';                     //SMTP username
    $mailto->Password   = 'xsifxidpidpeguaq';                               //SMTP password
    $mailto->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mailto->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
     $mailto->setFrom('sheelendrakumar1282001@gmail.com', 'Just Enquiry');
     $mailto->addAddress($email,$first_name);     //Add a recipient
    // $mailto->addcc('sheelendrakumar1282001@gmail.com');

    //Attachments
   //$mailto->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
   //$mailto->addAttachment('images/thank.png', 'new.jpg');    //Optional name

    //Content
    $mailto->isHTML(true);                                  //Set email format to HTML
    $mailto->Subject = 'Nityavandan';
    $mailto->Body    =  "<br><p>Hello</p>  
                                
                                  
    ";
   

    $mailto->send();
   //echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mailto->ErrorInfo}";
}

?>
 
 

 
<br><br><br>
<div class="pic"> 


    <img src="thank-you-note.jpg" alt="thank u" class="thank" style="margin-top: 50px; width:70%;"><br>
    <h2> <?php echo $_POST['first_name'];?>, we will connect you soon.</h2><br> 
    <a href="<?php echo base_url()?>users/registration" class="btn btn-success">Back to Home</a> <br><br> 
</div>


<style>
.logo1 {
    width: 80%;

    margin: 5px auto;
    text-align: center;
}

.pic {
    width: 80%;

    margin: 0 auto;
    text-align: center;
}

.btn {
    margin-top: 5px;
    background: #f79000;
    color:#fff;
    border: #f79000 solid 1px;
    font-size: 14px;
    padding: 4px 10px;
}

.btn:hover {
    color: white;
}
</style>



   
