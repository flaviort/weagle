<?php

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    require 'vendor/autoload.php';

    header('Access-Control-Allow-Origin: *');
    header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
    header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");

    $emailSender = "senzsender@gmail.com";
    require "passcode.php";
    $emailPassword = $passcode;

    $emailAddress = "flavioczuk@gmail.com";
    $emailName = "Essence Business";

    if(isset($_POST['send-contact'])) {

        $mail = new PHPMailer(true);

        try {
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = $emailSender;
            $mail->Password   = $emailPassword;
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port       = 465;

            // variables
            $name = $_POST['Nome'];
            $email = $_POST['Email'];
            $phone = $_POST['Telefone'];
            $message = $_POST['Mensagem'];

            // recipients
            $mail->setFrom($emailSender, $emailName);
            $mail->addAddress($emailAddress, $emailName);
            $mail->addReplyTo($emailAddress, $emailName);

            // content
            $mail->isHTML(true);
            $mail->Subject = 'Form de Contato - Essence Business';

            $body = "
                <html>
                    <head>
                        <meta charset='UTF-8'>
                        <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
                        
                        <title>
                            Mensagem enviada através do fomrulário de contato do site
                        </title>
                
                        <style type='text/css'>
                            body {
                                margin: 30px;
                                text-align: left;
                                padding: 0;
                                height: auto!important;
                                max-width: 600px!important;
                                width: 100%!important;
                                font-family: 'Arial', sans-serif;
                                background-color: #f8f8f8;
                            }
                
                            p {
                                font-family: 'Arial', sans-serif;
                                font-size: 14px;
                                line-height: 1.6;
                                color: #222;
                                margin: 0;
                            }
                
                            @media only screen and (max-width: 690px) {
                                p { 
                                    box-sizing: border-box!important;
                                    width: 100%!important;
                                    margin-left: 0!important;
                                    margin-right: 0!important;
                                }
                
                                table {
                                    width: 100%!important;
                                }
                            }
                        </style>
                
                    </head>
                
                    <body>
                        <table width='600' cellpadding='0' cellspacing='0' border='0' bgcolor='#ffffff' style='padding: 20px'>
                
                            <tr>
                                <td>
                                    <p>
                                        <b>Mensagem enviada através do fomrulário de contato do site:</b>
                                    </p>
                                </td>
                            </tr>
                
                            <tr>
                                <td>
                                    <br/><hr><br/>
                                </td>
                            </tr>
                
                            <tr>
                                <td>
                                    <table width='600' cellpadding='0' cellspacing='0' border='0' align='center' bgcolor='#ffffff'>
                
                                        <tr>
                                            
                                            <td>
                                                <p style='padding: 5px 0'>
                                                    Nome:
                                                </p>
                                            </td>
                
                                            <td>
                                                <p style='padding: 5px 0'>
                                                    <b>$name</b>
                                                </p>
                                            </td>
                
                                        </tr>
                
                                        <tr>
                                            
                                            <td>
                                                <p style='padding: 5px 0'>
                                                    Email:
                                                </p>
                                            </td>
                
                                            <td>
                                                <p style='padding: 5px 0'>
                                                    <b>$email</b>
                                                </p>
                                            </td>
                                            
                                        </tr>
                
                                        <tr>
                                            
                                            <td>
                                                <p style='padding: 5px 0'>
                                                    Telefone:
                                                </p>
                                            </td>
                
                                            <td>
                                                <p style='padding: 5px 0'>
                                                    <b>$phone</b>
                                                </p>
                                            </td>
                                            
                                        </tr>
                
                                        <tr>
                                            
                                            <td>
                                                <p style='padding: 5px 0'>
                                                    Mensagem:
                                                </p>
                                            </td>
                
                                            <td>
                                                <p style='padding: 5px 0'>
                                                    <b>$message</b>
                                                </p>
                                            </td>
                                            
                                        </tr>
                
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </body>
                </html>
            ";

            $mail->Body = $body;
            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }

    }
    
    if(isset($_POST['send-work'])) {

        $mail = new PHPMailer(true);

        try {
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = $emailSender;
            $mail->Password   = $emailPassword;
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port       = 465;

            // variables
            $area = $_POST['Area'];
            $name = $_POST['Nome'];
            $email = $_POST['Email'];
            $phone = $_POST['Telefone'];

            // recipients
            $mail->setFrom($emailSender, $emailName);
            $mail->addAddress($emailAddress, $emailName);
            $mail->addReplyTo($emailAddress, $emailName);

            // attachments
            $mail->addAttachment($_FILES['attachment']['tmp_name'], $_FILES['attachment']['name']);

            // content
            $mail->isHTML(true);
            $mail->Subject = 'Form de Trabalhe Conosco - Essence Business';

            $body = "
                <html>
                    <head>
                        <meta charset='UTF-8'>
                        <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
                        
                        <title>
                            Mensagem enviada através do fomrulário de Trabalhe Conosco do site
                        </title>
                
                        <style type='text/css'>
                            body {
                                margin: 30px;
                                text-align: left;
                                padding: 0;
                                height: auto!important;
                                max-width: 600px!important;
                                width: 100%!important;
                                font-family: 'Arial', sans-serif;
                                background-color: #f8f8f8;
                            }
                
                            p {
                                font-family: 'Arial', sans-serif;
                                font-size: 14px;
                                line-height: 1.6;
                                color: #222;
                                margin: 0;
                            }
                
                            @media only screen and (max-width: 690px) {
                                p { 
                                    box-sizing: border-box!important;
                                    width: 100%!important;
                                    margin-left: 0!important;
                                    margin-right: 0!important;
                                }
                
                                table {
                                    width: 100%!important;
                                }
                            }
                        </style>
                
                    </head>
                
                    <body>
                        <table width='600' cellpadding='0' cellspacing='0' border='0' bgcolor='#ffffff' style='padding: 20px'>
                
                            <tr>
                                <td>
                                    <p>
                                        <b>Mensagem enviada através do fomrulário de Trabalhe Conosco do site:</b>
                                    </p>
                                </td>
                            </tr>
                
                            <tr>
                                <td>
                                    <br/><hr><br/>
                                </td>
                            </tr>
                
                            <tr>
                                <td>
                                    <table width='600' cellpadding='0' cellspacing='0' border='0' align='center' bgcolor='#ffffff'>

                                        <tr>
                                                
                                            <td>
                                                <p style='padding: 5px 0'>
                                                    Área de Atuação:
                                                </p>
                                            </td>
                
                                            <td>
                                                <p style='padding: 5px 0'>
                                                    <b>$area</b>
                                                </p>
                                            </td>
                
                                        </tr>
                
                                        <tr>
                                            
                                            <td>
                                                <p style='padding: 5px 0'>
                                                    Nome:
                                                </p>
                                            </td>
                
                                            <td>
                                                <p style='padding: 5px 0'>
                                                    <b>$name</b>
                                                </p>
                                            </td>
                
                                        </tr>
                
                                        <tr>
                                            
                                            <td>
                                                <p style='padding: 5px 0'>
                                                    Email:
                                                </p>
                                            </td>
                
                                            <td>
                                                <p style='padding: 5px 0'>
                                                    <b>$email</b>
                                                </p>
                                            </td>
                                            
                                        </tr>
                
                                        <tr>
                                            
                                            <td>
                                                <p style='padding: 5px 0'>
                                                    Telefone:
                                                </p>
                                            </td>
                
                                            <td>
                                                <p style='padding: 5px 0'>
                                                    <b>$phone</b>
                                                </p>
                                            </td>
                                            
                                        </tr>
                
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </body>
                </html>
            ";

            $mail->Body = $body;
            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }

    } else {
        echo "PHP Error";
    }