<?php include "func.php";?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
<body>
    <div>
        <?php
        $res = showallData();
        while ($row = mysqli_fetch_assoc($res)) {
        ?>
            <pre>
                <?php
                print_r($row);
                ?>
            </pre>
        <?php
        }
        ?>
    </div>

</body>
</html>