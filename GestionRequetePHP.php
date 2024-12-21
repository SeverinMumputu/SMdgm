
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    $to = "contact@dgm-rdc.cd";
    $headers = "From: $email";
    $body = "Nom: $name\nEmail: $email\n\n$message";

    if (mail($to, $subject, $body, $headers)) {
        echo "Votre message a été envoyé avec succès !";
    } else {
        echo "Une erreur s'est produite. Veuillez réessayer.";
    }
}
?>

