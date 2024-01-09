<?php

// connect to db
$conn = mysqli_connect("localhost", "ahmed", "test123", "pizza");

// check connection

if (!$conn) {
    echo "Connection error: " . mysqli_connect_error();
}

// write query for all pizza
$sql = 'SELECT title, ingredients, id FROM pizzas';

// make query and get result
$result = mysqli_query($conn, $sql);

// fetch the resulting rows as an array
$pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

print_r($pizzas);

?>

<!DOCTYPE html>
<html>

<?php include "templates/header.php"; ?>
<?php include "templates/footer.php"; ?>



</html>