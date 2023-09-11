<?php
require("dataBase.php");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'Mailer/vendor/autoload.php';

// require 'Mailer/vendor/phpmailer/phpmailer/src/Exception.php';
// require 'Mailer/vendor/phpmailer/phpmailer/src/PHPMailer.php';
// require 'Mailer/vendor/phpmailer/phpmailer/src/SMTP.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

$uname=$_POST["name"];
$umail=$_POST["mail"];
$mailType=$_POST["mailType"];
$subject=$_POST["subject"];
$content=$_POST["content"];
$ending=$_POST["ending"];
$time=date("Y/m/d H:i:s", time());


    $SQL="INSERT INTO cs(cMail, sub, cont, time) VALUE ('$umail', '$subject', '$content', '$time')";
    if($result=mysqli_query($link,$SQL)){

        try {
            //Server settings
            $mail->SMTPDebug = 2;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'ireader2467@gmail.com';                     //SMTP username
            // $mail->Password   = 'imphpa109332467';                               //SMTP password
            $mail->Password   = 'lggjysvufhwqhuso';
            $mail->SMTPSecure = 'ssl';
            // $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            // $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
            $mail->CharSet='UTF-8';
            
            //Recipients
            $mail->setFrom('ireader2467@gmail.com', 'iReader');
            $mail->addAddress($umail, 'User_'.$uname);     //Add a recipient
            
            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = "已收到意見回報!";
            $mail->Body    = "標題: ".$subject."<br/>內文: ".$content."<br/><br/>".$ending."<br>iReader";
            
            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
        echo "<Script type='text/javaScript'>";
        echo "alert('感謝填寫!');";
        echo "</script>";
        echo "<meta http-equiv='refresh' content='0; url=index.php'>";
        // header("location: index.php");
    }else{
        echo "<Script type='text/javaScript'>";
        echo "alert('回報失敗!!!請重填QQ');";
        echo "</script>";
        echo "<meta http-equiv='refresh' content='0; url=contact.php'>";
        // header("location: contact.php");
        
    }
?>