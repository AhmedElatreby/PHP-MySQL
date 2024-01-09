<?php


if (isset($_POST["submit"])) {

    // Check the email is not empty
    if (empty($_POST["email"])) {
        echo "An Email is required <br/>";
    } else {
        $email = $_POST["email"];
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo " email must be a viled email address <br/>";
        }
    }

    // Check the title is not empty
    if (empty($_POST["title"])) {
        echo "An title is required <br/>";
    } else {
        echo htmlspecialchars($_POST["title"]);
    }

    // Check the ingredients is not empty
    if (empty($_POST["ingredients"])) {
        echo "An ingredients is required <br/>";
    } else {
        echo htmlspecialchars($_POST["ingredients"]);
    }
} // end of POST check


?>

<!DOCTYPE html>
<html>

<?php include "templates/header.php"; ?>
<section class="container grey-text">
    <h4 class="center">Add A Pizza</h4>
    <form action="add.php" method="POST" class="white">
        <label>Your Email:</label>
        <input type="text" name="email">

        <label>Pizza Title:</label>
        <input type="text" name="title">

        <label>Ingredients (comma separated):</label>
        <input type="text" name="ingredients">
        <div class="center">
            <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
        </div>
    </form>
</section>

<?php include "templates/footer.php"; ?>



</html>