<?php

    //Importing PHPMailer Libs
    require "./libs/PHPMailer/Exception.php";
    require "./libs/PHPMailer/OAuth.php";
    require "./libs/PHPMailer/PHPMailer.php";
    require "./libs/PHPMailer/POP3.php";
    require "./libs/PHPMailer/SMTP.php";

    //Import PHPMailer classes into the global namespace
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    
    class Message {
        private $from = null;
        private $subject = null;
        private $message = null;
        public $status = array('status_code' => null, 'status_descrip' => '');

        public function __get($attr) {
            return $this->$attr;
        } 

        public function __set($attr, $value) {
            $this->$attr = $value;
        } 

        public function validateMessage() {
            if(empty($this->from) || empty($this->subject) || empty($this->message)) {
                return false;
            }
            return true;
        } 
    }

    $message = new Message();

    $message->__set('from', $_POST['from']);
    $message->__set('subject', $_POST['subject']);
    $message->__set('message', $_POST['message']);

    if(!$message->validateMessage()) {
        //hearder('Location http://localhost/Projeto_SendMail/');      //Return to Index
        echo "<SCRIPT>
            alert('Por favor, preencha todos os campos!');
            window.location.replace(\"http://localhost/Projeto_SendMail/\");
        </SCRIPT>";
    }

    $mail = new PHPMailer(true);
    try {
        //Server settings
        $mail->SMTPDebug = false;                                 // Enable verbose debug output
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';                       // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'xxxxxxxxxx@gmail.com';             // SMTP username
        $mail->Password = '********';                        // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to
    
        //Recipients
        $mail->setFrom($_POST['from'], 'TESTE_F');
        $mail->addAddress('xxxxxxxxxx@gmail.com', 'TESTE_T');     // Add a recipient
        //$mail->addAddress('ellen@example.com');               // Name is optional
        $mail->addReplyTo($_POST['from'], 'TESTE_R');
        //$mail->addCC('cc@example.com');
        //$mail->addBCC('bcc@example.com');
    
        //Attachments
        //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
    
        //Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = $_POST['subject'];
        $mail->Body    = $_POST['message'];
        $mail->AltBody = $_POST['message'];
    
        $mail->send();

        $message->status['status_code'] = 1;
        $message->status['status_descrip'] = 'Mensagem enviada com sucesso.';

    } catch (Exception $e) {
        $message->status['status_code'] = 2;
        $message->status['status_descrip'] = 'Não foi possível enviar este e-mail.' . $mail->ErrorInfo;
    }
    
?>

<html>
    <head>
		<meta charset="utf-8" />
    	<title>App Mail Send</title>

    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    </head>
    <body>

        <div class="container">  

            <div class="py-3 text-center">
                <img class="d-block mx-auto mb-2" src="logo.png" alt="" width="72" height="72">
                <h2>Send Mail</h2>
                <p class="lead">Seu app de envio de e-mails particular!</p>

            </div>  

            <div class="row">
      			<div class="col-md-12">

                    <? if($message->status['status_code'] == 1) { ?>
                        
                        <div class="container">
                            <h1 class="display-4 text-success">Sucesso!</h1>
                            <p><?$message->status['status_descrip']?></p>
                            <a href="http://localhost/Projeto_SendMail/" class="btn btn-success btn-lg mt-5 text-white">Voltar</a>
                    </div>

                    <?}?>

                    <? if($message->status['status_code'] == 2) { ?>
                        
                        <div class="container">
                            <h1 class="display-4 text-danger">Ops!</h1>
                            <p><?$message->status['status_descrip']?></p>
                            <a href="http://localhost/Projeto_SendMail/" class="btn btn-danger btn-lg mt-5 text-white">Voltar</a>
                    </div>

                    <?}?>

                </div>
            </div>

        </div>
    </body>
</html>