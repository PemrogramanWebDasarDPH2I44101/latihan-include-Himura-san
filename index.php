<?php
    require_once("header.php");
    if (isset($_GET['content'])) {
        if ($_GET['content'] == "user")
            require_once("hal_user.php");
        if ($_GET['content'] == "admin")
            require_once("hal_admin.php");
    } else {
        require("login.php");
    }
    require_once("footer.php");
?>