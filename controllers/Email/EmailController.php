<?php

namespace Controllers\Email;

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

class SendEmailController
{
    public function sendEmail($userMail, $userName, $valueSent)
    {
        try {
            // Intancia de PHPMailer
            $mail = new PHPMailer();

            // Es necesario para poder usar un servidor SMTP como gmail
            $mail->isSMTP();

            //Set the hostname of the mail server
            $mail->Host          = 'smtp.gmail.com';
            $mail->Port          = 465;

            // Propiedad para establecer la seguridad de encripción de la comunicación
            $mail->SMTPSecure    = PHPMailer::ENCRYPTION_SMTPS;

            // Para activar la autenticación smtp del servidor
            $mail->SMTPAuth      = true;

            // Credenciales de la cuenta
            $email              = 'email@gmail.com';
            $mail->Username     = $email;
            $mail->Password     = '***************';

            // Quien envía este mensaje
            $mail->setFrom($email, 'BANCA RAPIDA');

            // Destinatario
            $mail->addAddress($userMail, 'Hola ', $userName);

            // Asunto del correo
            $mail->Subject = 'BancaRapida le informa';

            // Contenido
            $mail->IsHTML(true);
            $mail->CharSet = 'UTF-8';
            $mail->Body    = "
            <!DOCTYPE html>
            <html>
              <head>
                <title> </title>
              </head>
              <body style='background-color: #f9f9f9'>
                <div style='background-color: #f9f9f9'>
                  <div
                    style='
                      background: #f9f9f9;
                      background-color: #f9f9f9;
                      margin: 0px auto;
                      max-width: 600px;
                    '
                  >
                    <table
                      align='center'
                      border='0'
                      cellpadding='0'
                      cellspacing='0'
                      role='presentation'
                      style='background: #f9f9f9; background-color: #f9f9f9; width: 100%'
                    >
                      <tbody>
                        <tr>
                          <td
                            style='
                              border-bottom: #333957 solid 5px;
                              direction: ltr;
                              font-size: 0px;
                              padding: 20px 0;
                              text-align: center;
                              vertical-align: top;
                            '
                          ></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                
                  <div
                    style='
                      background: #fff;
                      background-color: #fff;
                      margin: 0px auto;
                      max-width: 600px;
                    '
                  >
                    <table
                      align='center'
                      border='0'
                      cellpadding='0'
                      cellspacing='0'
                      role='presentation'
                      style='background: #fff; background-color: #fff; width: 100%'
                    >
                      <tbody>
                        <tr>
                          <td
                            style='
                              border: #dddddd solid 1px;
                              border-top: 0px;
                              direction: ltr;
                              font-size: 0px;
                              padding: 20px 0;
                              text-align: center;
                              vertical-align: top;
                            '
                          >
                            <div
                              class='mj-column-per-100 outlook-group-fix'
                              style='
                                font-size: 13px;
                                text-align: left;
                                direction: ltr;
                                display: inline-block;
                                vertical-align: bottom;
                                width: 100%;
                              '
                            >
                              <table
                                border='0'
                                cellpadding='0'
                                cellspacing='0'
                                role='presentation'
                                style='vertical-align: bottom'
                                width='100%'
                              >
                                <tr>
                                  <td
                                    align='center'
                                    style='
                                      font-size: 0px;
                                      padding: 10px 25px;
                                      word-break: break-word;
                                    '
                                  >
                                    <table
                                      align='center'
                                      border='0'
                                      cellpadding='0'
                                      cellspacing='0'
                                      role='presentation'
                                      style='border-collapse: collapse; border-spacing: 0px'
                                    >
                                      <tbody>
                                        <tr>
                                        <td style='width: 150px'>
                                        <img
                                          height='auto'
                                          src='https://cdn.discordapp.com/attachments/1027325078150594611/1028724631173083266/unknown.png'
                                              style='
                                                border: 0;
                                                display: block;
                                                outline: none;
                                                text-decoration: none;
                                                width: 100%;
                                              '
                                              width='64'
                                            />
                                          </td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </td>
                                </tr>
                
                                <tr>
                                  <td
                                    align='center'
                                    style='
                                      font-size: 0px;
                                      padding: 10px 25px;
                                      word-break: break-word;
                                    '
                                  >
                                    <div
                                      style='
                                        font-size: 24px;
                                        font-weight: bold;
                                        line-height: 22px;
                                        text-align: center;
                                        color: #525252;
                                      '
                                    >
                                        Transaccion exitosa
                                    </div>
                                  </td>
                                </tr>
                
                                <tr>
                                  <td
                                    align='left'
                                    style='
                                      font-size: 0px;
                                      padding: 10px 25px;
                                      word-break: break-word;
                                    '
                                  >
                                    <div
                                      style='
                                        font-size: 14px;
                                        line-height: 22px;
                                        text-align: left;
                                        color: #525252;
                                      '
                                    >
                                      <p>Hola " . $userName . "</p>
                
                                      <p>
                                      Bancarapida le informa que su transaccion fue exitosa, 
                                      continuacion vera los datos de la transaccion gracias por confiar en nosotros
                                       (灬♥ω♥灬)
                                      </p>
                                    </div>
                                  </td>
                                </tr>
                
                                <tr>
                                  <td
                                    align='left'
                                    style='
                                      font-size: 0px;
                                      padding: 10px 25px;
                                      word-break: break-word;
                                    '
                                  >
                                    <table
                                      border='0'
                                      style='
                                        color: #000;
                                        font-size: 13px;
                                        line-height: 22px;
                                        table-layout: auto;
                                        width: 100%;
                                      '
                                    >
                                      <tr
                                        style='
                                          border-bottom: 1px solid #ecedee;
                                          text-align: left;
                                        '
                                      >
                                        <th style='padding: 0 15px 10px 0'>Datos</th>
                                        <th style='padding: 0 15px'></th>
                                        <th style='padding: 0 0 0 15px' align='right'>
                                          Dinero
                                        </th>
                                      </tr>
                                      <tr>
                                        <td style='padding: 5px 15px 5px 0'>Dinero enviado</td>
                                        <td style='padding: 0 15px'></td>
                                        <td style='padding: 0 0 0 15px' align='right'>
                                          $" . $valueSent . "
                                        </td>
                                      </tr>
                                      <tr>
                                        <td style='padding: 0 15px 5px 0'>Costo de la transaccion</td>
                                        <td style='padding: 0 15px'></td>
                                        <td style='padding: 0 0 0 15px' align='right'>
                                          $0
                                        </td>
                                      </tr>
                                      <tr
                                        style='
                                          border-bottom: 2px solid #ecedee;
                                          text-align: left;
                                          padding: 15px 0;
                                        '
                                      >
                                        <td
                                          style='padding: 5px 15px 5px 0; font-weight: bold'
                                        >
                                          TOTAL
                                        </td>
                                        <td style='padding: 0 15px'></td>
                                        <td
                                          style='padding: 0 0 0 15px; font-weight: bold'
                                          align='right'
                                        >
                                            $" . $valueSent . "
                                        </td>
                                      </tr>
                                    </table>
                                  </td>
                                </tr>
                
                                <tr>
                                  <td
                                    align='left'
                                    style='
                                      font-size: 0px;
                                      padding: 10px 25px;
                                      word-break: break-word;
                                    '
                                  ></td>
                                </tr>
                
                                <tr>
                                  <td
                                    align='left'
                                    style='
                                      font-size: 0px;
                                      padding: 10px 25px;
                                      word-break: break-word;
                                    '
                                  >
                                    <div
                                      style='
                                        font-size: 14px;
                                        line-height: 20px;
                                        text-align: left;
                                        color: #525252;
                                      '
                                    >
                                      BANCARAPIDA<br />DW2<br />
                                      <a
                                        href='#'
                                        style='color: #2f67f6'
                                        >BANCARAPIDA.net</a
                                      >
                                    </div>
                                  </td>
                                </tr>
                              </table>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                </body>
            </html>
            
            
            ";

            // Texto alternativo
            $mail->AltBody = 'BANCA RAPIDA LE INFORMA';

            // Agregar algún adjunto
            //$mail->addAttachment(IMAGES_PATH.'logo.png');

            // Enviar el correo
            if (!$mail->send()) {
                throw new Exception($mail->ErrorInfo);
            }

            return 'Correo enviado';
        } catch (Exception $e) {
            throw new Exception($e);
        }
    }
}
