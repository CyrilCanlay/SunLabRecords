<?php

$form_name = filter_input(INPUT_POST, "InputName");
$form_mail = filter_input(INPUT_POST, "InputEmail");
$form_subject = filter_input(INPUT_POST, "InputSubject");
$form_message = filter_input(INPUT_POST, "InputText");

$to = "sunlabrecords@alwaysdata.net";
$subject = $form_name . " - " . $form_subject;
$txt = $form_message;
$headers = "From: $form_mail" . "\r\n" .
    "CC: sunlabrecords@alwaysdata.net";

/*echo "<h1>to -> $to</h1>";
echo "<h2>subject -> $subject</h2>";
echo "<h3>headers -> $headers</h3>";
echo "<p>txt -> $txt</p>";*/

mail($to, $subject, $txt, $headers);

?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style type="text/css">
        .center {
            padding-top: 20%;
            text-align: center;
        }
    </style>

    <title>SunLab Records</title>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bubbly-bg@1.0.0/dist/bubbly-bg.js"></script>
<script>bubbly();</script>


<div class="center">
    <h5>Votre message a bien été envoyée</h5>
    <form action="../#contact">
        <input type="submit" value="Retourner sur le site"/>
    </form>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>
