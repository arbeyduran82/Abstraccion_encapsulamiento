<?php
    require_once ("ClassUser.php");

    $objUser = new User("Arbey Duran", "arbeyduran@hotmail.com", "Admin");
    echo "Name: " . $objUser->getName() . "<br>";
    echo "Email: " . $objUser->getEmail() . "<br>";
    echo "Password: " . $objUser->getPassword() . "<br> <br>";

    $objUser2 = new User("Carlos Perez", "carlos@info.com", "123456");
    echo "Name: " . $objUser2->getName() . "<br>";
    echo "Email: " . $objUser2->getEmail() . "<br>";
    echo "Password: " . $objUser2->getPassword() . "<br>";

    $objUser2->setPasswordChange("Clave123456789");

    echo "<br>";
    echo "Name: " . $objUser2->getName() . "<br>";
    echo "Email: " . $objUser2->getEmail() . "<br>";
    echo "Password: " . $objUser2->getPassword() . "<br>";


?>