<?php    
    if (!isset($_POST['name'])) {
        echo json_encode(['status' => 'error']);
        die();
    }

    $name    = $_POST['name'];
    $email   = $_POST['email'];
    $message = $_POST['message'];

    require 'vendor/autoload.php';
    use PHPMailer\PHPMailer\PHPMailer;

    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->SMTPDebug = 0;
    $mail->Host     = 'smtp.hostinger.com';
    $mail->Port     = 587;
    $mail->SMTPAuth = true;
    $mail->Username = 'info@mzdev.com.ar';
    $mail->Password = 'mzd457+PFR';
    $mail->setFrom('info@mzdev.com.ar', 'Milton Zini Portfolio');
    $mail->addReplyTo($email, $name);
    $mail->addAddress('info@mzdev.com.ar', 'Milton Zini Portfolio');
    $mail->CharSet = 'UTF-8';
    $mail->Subject = 'Nuevo mensaje desde el portfolio';
    $mail->isHTML(true);

    $contenidoHtml  = '<html>';
    $contenidoHtml .= '<h2>Nuevo mensaje desde tu portfolio</h2>';
    $contenidoHtml .= '<p><b>Nombre: </b>' . $name . '</p>';
    $contenidoHtml .= '<p><b>Email: </b>' . $email . '</p>';
    $contenidoHtml .= '<p><b>Mensaje: </b></p>';
    $contenidoHtml .= '<p>' . nl2br($message) . '</p>';
    $contenidoHtml .= '</html>';
    $mail->Body    = $contenidoHtml;
    $mail->AltBody = "Nombre: $name || Email: $email || Mensaje: $message";

    if (!$mail->send()) {
        echo json_encode(['status' => 'error']);
    } else {
        echo json_encode(['status' => 'success']);
    }
?>