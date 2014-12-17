<?php
$pjax = isset($_SERVER['HTTP_X_PJAX']);

if ( ! $pjax) { ?>
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    <body>
    <nav>
        <a href="http://localhost/pjax/">Details</a>
        <a href="http://localhost/pjax/charges.php">Charges</a>
        <a href="http://localhost/pjax/tasks.php">Tasks</a>
    </nav>
    <section role="main" id="content">
<?php } ?>