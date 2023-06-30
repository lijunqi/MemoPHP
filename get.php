<?php
print_r($_GET)
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
</head>
<body>
    <?php
    $id = 10;
    ?>
    <!-- <a href="get.php?id=10">CLICK HERE</a> -->
    <a href="get.php?id=<?php echo $id;?>">CLICK HERE</a>
</body>
</html>