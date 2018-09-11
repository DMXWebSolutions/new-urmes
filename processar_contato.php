<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$btnEnvia = filter_input(INPUT_POST, 'btnEnvia', FILTER_SANITIZE_STRING);
if($btnEnvia){

    require 'vendor/autoload.php';

    $nome = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
    $telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
    $assunto = filter_input(INPUT_POST, 'assunto', FILTER_SANITIZE_STRING);
    $mensagem = filter_input(INPUT_POST, 'mensagem', FILTER_SANITIZE_STRING);

    $mail = new PHPMailer(true);
                                  
    try {

        $mail->SMTPDebug = 0;                                 
        $mail->isSMTP();                                      
        $mail->Host = 'smtp.urmes.com.br';              
        $mail->SMTPAuth = true;                               
        $mail->Username = 'urmes@urmes.com.br';                 
        $mail->Password = 'Aak6*67q';                           
        // $mail->SMTPSecure = 'tls';                            
        $mail->Port = 587;                                   
        $mail->CharSet = 'UTF-8';
        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );

        $mail->setFrom("urmes@urmes.com.br", "URMES");
        $mail->addAddress('vendas@urmes.com.br', $nome);   
        $mail->addReplyTo('urmes@urmes.com.br', 'Information');

        $mail->isHTML(true);                                  
        $mail->Subject = 'URMES - Nova Solicitação de Contato!';
        $mail->Body    = '';
        $mail->Body    = '<p>Nome: ' . $nome . '</p>'. 
                         '<p>Email: ' . $email . '</p>'.
                         '<p>Telefone: ' . $telefone . '</p>'. 
                         '<p>Assunto: ' . $assunto . '</p>'.
                         '<p>Mensagem: ' . $mensagem . '</p>';

        $mail->send();
        
        $_SESSION['status'] = "<div class='alert alert-success'><b>Sucesso!</b> Email enviado com êxito. </div>";

        header('location:contato.php#content');

    } catch (Exception $e) {
        echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
    }
}

?>