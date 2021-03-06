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
<div class="container-fluid">
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Price</th>
            <th>Thumbnail</th>
        </tr>
        </thead>
        <tbody>
        <?php if (isset($result)) {
            while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?php echo ($row['id']) ?></td>
                    <td><?php echo ($row['name']) ?></td>
                    <td><?php echo ($row['price']) ?></td>
                    <td><img src="<?php echo $row['thumbnail']; ?>" alt="" width="200" height="200"></td>
                </tr>
            <?php endwhile;
        } ?>
        </tbody>
    </table>
</div>
<script src="Script/bootstrap.min.js"></script>
<script src="Script/jquery.min.js"></script>
</body>
</html>
