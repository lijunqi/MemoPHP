<?php include "db.php";?>
<?php
function showallData() {
    global $conn;
    $query = "SELECT * FROM users";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die('Query Failed' . mysqli_error($conn));
    }
    return $result;
}
?>