<?php
require_once "connect.php";
require_once "productData.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/Style/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<div class="contener">
    <form action="" method="post">
        <div class="form-group">
            <input class="form-control" type="text" placeholder="Please enter name" name="name" id="name">
        </div>
        <div class="form-group">
            <input class="form-control" type="text" placeholder="Please enter price" name="price" id="price">
        </div>
        <div class="form-group">
            <input class="form-control" type="text" placeholder=" Please enter thumbnail" name="thumbnail" id="thumbnail">
        </div>
        <div class="form-group">
            <button class="btn btn-primary" id="submit">Submit</button>
        </div>
    </form>
</div>
<script src="Script/bootstrap.min.js"></script>
<script src="Script/jquery.min.js"></script>
</body>
</html>



