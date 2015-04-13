<!DOCTYPE html>
<html>
<head>
    <base href="<?= BASE ?>">
    <title><?= TITLE ?></title>
    <link rel="stylesheet" href="<?= CSS ?>bootstrap.min.css" type='text/css'>
    <link rel="stylesheet" href="<?= CSS ?>main.css" type='text/css'>
    <link rel="stylesheet" href="<?= CSS ?>normalize.css" type='text/css'>
    <script type="text/javascript" src="<?= JS ?>jquery-2.1.3.js"></script>
    <script type="text/javascript" src="<?= JS ?>lang.js"></script>
    <script type="text/javascript" src="http://scriptjava.net/source/scriptjava/scriptjava.js"></script>
</head>
<body>

<?php if ( ( $_GET[ 'login' ] ) ) { ?>
    <script type="text/javascript"> $('#loginModal').modal('show'); </script>
<?php } ?>

<?php include 'app/views/modal_view.php';?>

<div id="wrapper">

<?php include 'app/views/header_view.php';?>
<?php include 'app/views/' . $content_view; ?>
<?php //echo $content_view; ?>
<?php include 'app/views/footer_view.php';?>

</div>

<script type="text/javascript" src="<?= JS ?>bootstrap.min.js"></script>
<script type="text/javascript" src="<?= JS ?>modal.js"></script>
<!--end wrapper-->
</body>
</html>
