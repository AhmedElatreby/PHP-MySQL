<?php

include("config/connect_db.php");

// check GET request id param
if (isset($_GET["id"])) {

    // escape sql chars
    $id = mysqli_real_escape_string($conn, $_GET['id']);

    // make sql query
    $sql = "SELECT * FROM pizzas WHERE id = $id";

    // get the query result
    $result = mysqli_query($conn, $sql);

    // fetch the result in array format
    $pizza = mysqli_fetch_assoc($result);

    // free result from memory
    mysqli_free_result($result);

    // close connection
    mysqli_close($conn);

}

?>
<!DOCTYPE html>
<html lang="en">



<?php include "templates/header.php"; ?>
<div class="container center">
    <?php if($pizza): ?>
        <h4><?php echo htmlspecialchars($pizza["title"]); ?></h4>
        <p>Created by: <?php echo htmlspecialchars($pizza["email"]); ?></p>
        <p>Date: <?php echo date($pizza["created_at"]); ?></p>
        <h5>Ingredients:</h5>
        <p><?php echo htmlspecialchars($pizza["ingredients"]); ?></p>

    <?php else: ?>
        <h5>No such pizza exists!</h5>

    <?php endif;?>
</div>
<?php include "templates/footer.php"; ?>



</html>