<?php
    require_once ("ClassUser.php");

    $objUser = new User("Arbey Duran", "arbeyduran@hotmail.com", "Admin");
    echo "Name: " . $objUser->getName() . "<br>";
    echo "Email: " . $objUser->getEmail() . "<br>";
    echo "Password: " . $objUser->getPassword() . "<br>";

?>