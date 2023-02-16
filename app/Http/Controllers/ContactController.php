<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class ContactController extends Controller
{

    public function formsubmit(Request $request)
    {

        $f_name = $request->f_name;
        $subject = $request->subject;
        $email= $request->email;
        $phone = $request->phone;
        $message = $request->message;

        require base_path("vendor/autoload.php");
                $mail = new PHPMailer(true);     // Passing `true` enables exceptions

                try {

                    // Email server settings
                    $mail->SMTPDebug = 0;
                    $mail->isSMTP();
                    $mail->Host = 'smtp.gmail.com';             //  smtp host
                    $mail->SMTPAuth = true;
                    $mail->Username = 'saitechnosolutionscbe@gmail.com';
                    $mail->Password = 'lwysjixcfqanrtgr';
                    $mail->SMTPSecure = 'tls';                  // encryption - ssl/tls
                    $mail->Port = 587;                          // port - 587/465

                    $mail->setFrom('fivestargarden@gmail.com', 'Five Star Garden');
                    $mail->addAddress('kesavaraj@saitechnosolutions.net');
                    // $mail->addCC($request->emailCc);
                    // $mail->addBCC($request->emailBcc);

                    // $mail->addReplyTo('kesavaraj@saitechnosolutions.net', 'SenderReplyName');

                    // if(isset($_FILES['emailAttachments'])) {
                    //     for ($i=0; $i < count($_FILES['emailAttachments']['tmp_name']); $i++) {
                    //         $mail->addAttachment($_FILES['emailAttachments']['tmp_name'][$i], $_FILES['emailAttachments']['name'][$i]);
                    //     }
                    // }

                        $description =
                        "<html>
                        <body>
                            <table class='table table-bordered' style='width:100%'>
                                <tr>
                                    <td>Name</td>
                                    <td>$f_name</td>
                                </tr>
                                <tr>
                                    <td>E-mail</td>
                                    <td>$email</td>
                                </tr>
                                <tr>
                                    <td>Phone Number</td>
                                    <td>$phone</td>
                                </tr>
                                <tr>
                                    <td>Message</td>
                                    <td>$message</td>
                                </tr>
                            </table>
                        </body>

                        ";
                    $mail->isHTML(true);                // Set email content format to HTML

                    $mail->Subject = $subject;
                    $mail->Body    = $description;

                    // $mail->AltBody = plain text version of email body;

                    if( !$mail->send() ) {
                        return back()->with("failed", "Email not sent.")->withErrors($mail->ErrorInfo);
                    }
                    else {
                        return back()->with("success", "Email has been sent.");
                    }

                } catch (Exception $e) {
                     return back()->with('error','Message could not be sent.');
                }
    }
}

