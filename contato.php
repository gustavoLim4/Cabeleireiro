<?php

//Importe classes PHPMailer para o namespace global
//Eles devem estar no topo do seu script, não dentro de uma função
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$ok = 0;

if (isset($_POST['email'])) {

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $fone = $_POST['fone'];
    $mens = $_POST['mens'];
    $assunto = 'Cabeleleiro ';

    require_once('mailer/Exception.php');
    require_once('mailer/PHPMailer.php');
    require_once('mailer/SMTP.php');


    //Crie uma instância; passar `true (verdadeiro)`
    $mail = new PHPMailer(true);


    try {
        //Configurações do servidor
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Habilita saída de depuração detalhada
        $mail->isSMTP(); //Enviar usando SMTP
        $mail->Host = 'smtp.hostinger.com'; //Defina o servidor SMTP para enviar
        $mail->SMTPAuth = true; //Habilitar autenticação SMTP
        $mail->Username = 'vivabem@ti21.smpsistema.com.br'; //SMTP nome de usuário
        $mail->Password = 'Senac@ti21'; //SMTP senha
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; //Habilitar criptografia TLS implícita
        $mail->Port = 465; //Porta TCP para conexão

        //Destinatários
        $mail->setFrom('vivabem@ti21.smpsistema.com.br', $assunto); // Quem dispara o email
        $mail->addAddress('gl6772344@gmail.com'); //Adicionar um destinatário


        //Conteúdo do email
        $mail->isHTML(true); //Defina o formato do e-mail para HTML
        $mail->Subject = $assunto;

        //Conteúdo HTML
        $mail->Body = "        
            <strong>Nome: </strong> $nome <br>
            <strong>Email:</strong> $email <br>
            <strong>Telefone:</strong> $fone <br>
            <strong>Mensagem:</strong> $mens
        ";
        //Sem formatação HTML
        $mail->AltBody = "
            <strong>Nome: </strong> $nome <br>
            <strong>Email:</strong> $email <br>
            <strong>Telefone:</strong> $fone <br>
            <strong>Mensagem:</strong> $mens
        ";

        $mail->send();
        // echo 'Email enviado com Sucesso!';
        $ok = 1;
    } catch (Exception $e) {
        // echo "Error: {$mail->ErrorInfo}";
        $ok = 2;
    }
}

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>opas</title>
    <link rel="stylesheet" href="css/slick.css">

    <link rel="stylesheet" href="css/slick-theme.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">


    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsivo.css">

</head>

<body>

    <?php require_once('conteudos/topo.php'); ?>

    <main>
        <section>
            <div class="maps">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3659.2351195924707!2d-46.4699952!3d-23.4880393!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce61a8e5995059%3A0x82cd3660ce861bcb!2sRua%20Ricardo%20Butarello%2C%20765%20-%20Jardim%20Matarazzo%2C%20S%C3%A3o%20Paulo%20-%20SP%2C%2003813-010!5e0!3m2!1spt-BR!2sbr!4v1696465197013!5m2!1spt-BR!2sbr"
                    width="1820" height="700" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>

        <div class="tudoCON">
            <section class="contato">
                <div class="site">
                    <h2 class="wow animate__animated animate__fadeInUp">Contato</h2>

                    <h4>
                        <?php
                        if ($ok == 1) {
                            echo $nome . ", sua mensagem foi enviada com sucesso !";
                        } else if ($ok == 2) {
                            echo $nome . "Não foi possível enviar sua mensagem. tente mais tarde !";
                        }


                        ?>
                    </h4>
                    <div class="wow animate__animated animate__fadeInUp">
                        <form action="#" method="POST">
                            <div>
                                <div>
                                    <label for="nome">Nome:</label>
                                    <input type="text" name="nome" id="nome" placeholder="*Informe seu nome: " required>
                                </div>
                                <div>
                                    <label for="email">E-mail:</label>
                                    <input type="email" name="email" id="email" placeholder="*Informe seu e-mail: "
                                        required>
                                </div>
                                <div>
                                    <label for="fone">Telefone:</label>
                                    <input type="tel" name="fone" id="fone" placeholder=" *Informe seu telefone: ">
                                </div>
                            </div>

                            <div>
                                <div>
                                    <label for="mens">Mensagem:</label>
                                    <textarea name="mens" id="mens" cols="30" rows="10"
                                        placeholder="*Deixe sua Mensagem aqui:"></textarea>

                                </div>
                                <div class="btnContato">
                                    <input type="submit" value="Enviar por e-mail">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </div>

        <?php require_once('conteudos/sobre.php'); ?>
    </main>

    <?php require_once('conteudos/rodape.php'); ?>


</body>

<!-- SCRIPT -->

<script src="https://code.jquery.com/jquery-3.7.1.js"></script>

<script src="js/slick.min.js"></script>

<script src="js/wow.min.js"></script>


<script src="js/script.js"></script>


</html>