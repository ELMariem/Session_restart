<?php
require_once "session.php";
session_start();
$session=new SessionCounter();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
<h1 class="display-6 text-center"><?php echo $session->salutation(); ?></h1>
<div class="d-flex justify-content-center align-items-start vh-100 mt-5">
    <a href="restart.php" class="btn btn-primary" role="button">Réinitialiser la session</a>
</div>
</body>
</html>
