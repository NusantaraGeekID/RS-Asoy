<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RS. Santuy - <?= $title; ?></title>
    <?php require_once "style.php" ?>
</head>

<?php echo (isset($_GET["page"]) && !empty($_GET["page"])) ? '<body id="body-pd">' : '<body>'; ?>