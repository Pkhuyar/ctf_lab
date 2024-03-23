<?php
session_start();
session_unset();
session_destroy();
header("Location: secret_login.html");
exit();
?>