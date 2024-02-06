<?php 

    $admins = ["Osama", "Ahmed", "Sayed"];

    // Input Name "Osama"
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "The Request Method Is Post And Username Is " . $_POST['user'];
        echo "<br />";
        if (in_array($_POST['user'], $admins)) {
            echo "This Username ". $_POST['user'] ." Is Admin";
        }
    }

    // Needed Output
    // "The Request Method Is Post And Username Is Osama"
    // "This Username Osama Is Admin"

?>

<form action="" method="POST">
  <input type="text" name="user">
  <input type="submit" value="Send">
</form>