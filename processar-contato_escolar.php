<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$btnEnvia = filter_input(INPUT_POST, 'btnEnvia', FILTER_SANITIZE_STRING);
if($btnEnvia){

    require 'vendor/autoload.php';

    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $funcao_escola = filter_input(INPUT_POST, 'funcao_escola', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
    $telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
    $endereco = filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_STRING);
    $quantidade_alunos = filter_input(INPUT_POST, 'quantidade_alunos', FILTER_SANITIZE_STRING);
    $seguro = filter_input(INPUT_POST, 'seguro', FILTER_SANITIZE_STRING);
    $qual = filter_input(INPUT_POST, 'qual', FILTER_SANITIZE_STRING);
    // $servicos_interesse = filter_input(INPUT_POST, 'servicos_interesse', FILTER_SANITIZE_STRING); 
    $obs = filter_input(INPUT_POST, 'obs', FILTER_SANITIZE_STRING);

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
        $mail->Subject = 'URMES - Novo Contato! (Medicina Escolar)';
        $mail->Body    = '';
        $mail->Body    = '<p>Nome: ' . $nome . '</p>'. 
                         '<p>Função na Escola: ' . $funcao_escola . '</p>'.
                         '<p>Email: ' . $email . '</p>'. 
                         '<p>Telefone: ' . $telefone . '</p>'. 
                         '<p>Endereço: ' . $endereco . '</p>'.
                         '<p>Quantidade de Alunos: ' . $quantidade_alunos . '</p>'.
                         '<p>Seguro: ' . $seguro . '</p>'. 
                         '<p>Qual? ' . $qual . '</p>'. 
                         // '<p>Serviços de Interesse: ' . $servicos_interesse . '</p>'. 
                         '<p>Observações: ' . $obs . '</p>';
        $mail->send();
        
        $_SESSION['status'] = "<div class='alert alert-success'><b>Sucesso!</b> Email enviado com êxito. </div>";

        header('location:contato_escolar.php#content');

    } catch (Exception $e) {
        echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
    }
}

?>