<?php
require '../lib/site.inc.php';

$controller = new MixYours\LoginController($site, $_SESSION, $_POST);
header("location: " . $controller->getRedirect());
