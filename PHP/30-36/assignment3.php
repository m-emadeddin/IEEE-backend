
<form action="" method="POST">
    <input type="text" name="user">
    <input type="submit" value="Send">
</form>

<?php

    $admins = ["Osama", "Ahmed", "Sayed"];
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        echo "The Request Method Is Post And Username Is ".$_POST['user'];
        echo "<br>";
        if(in_array($_POST['user'],$admins)){
            echo "This Username ". $_POST['user']. " is Admin";
        }
    }

