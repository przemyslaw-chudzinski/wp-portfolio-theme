<?php

function send_email_ajax()
{
    $to = 'kontakt@przemyslawchudzinski.pl';
    $subject = 'Wiadomość ze strony przemyslawchudzinski.pl';
    $message = '';
    $headers = ['Content-Type: text/html; charset=UTF-8'];
    $attachments = [];
    $response = [
        'success' => true,
        'message' => '',
        'type' => 'success'
    ];

    if (!isset($_POST['name'])) {
        die;
    }

    if (!isset($_POST['email'])) {
        die;
    }

    if(!isset($_POST['message'])) {
        die;
    }

    $_POST['name'] = wp_kses(esc_html($_POST['name']));
    $_POST['email'] = wp_kses(esc_html($_POST['email']));
    $_POST['message'] = wp_kses(esc_html($_POST['message']));
    $_POST['phone'] = wp_kses(esc_html($_POST['phone']));

    $subject = 'Wiadomość ze strony przemyslawchudzinski.pl --- ' . $_POST['name'];

    $message = '';
    $message .= "<div style='padding: 10px; background-color: blue; color: #fff;'>";
    $message .= "<h2>Wiadomość od: <strong>{$_POST['name']}</strong></h2>";
    $message .= "<h2>Adres email: <strong>{$_POST['email']}</strong> </h2>";
    if (isset($_POST['phone'])) $message .= "<h2>Telefon: <strong>{$_POST['phone']}</strong></h2>";
    $message .= "</div>";
    $message .= "<div style='margin-top: 20px; font-size: 16px; background-color: #e2e2e2; padding: 10px;'>";
    $message .= $_POST['message'];
    $message .= "</div>";

    if (wp_mail($to, $subject, $message, $headers, $attachments)) $response['message'] = 'Dziękuję! Wiadomośc została wysłana poprawnie.';
    else {
        $response['success'] = false;
        $response['type'] = 'danger';
        $response['message'] = 'Ups! Coś poszło nie tak. Jeżeli błąd będzie się powtarzał, alternatywnie możesz skorzytać z adresów email podanych na stronie kontakt';
    }

    echo json_encode($response);
    die;
}
add_action('wp_ajax_nopriv_sendUserEmail', 'send_email_ajax');
