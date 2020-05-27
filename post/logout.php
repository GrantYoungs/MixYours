<?php
require '../lib/site.inc.php';

unset($_SESSION[MixYours\User::SESSION_NAME]);

$root = $site->getRoot();
header("location: $root/");
exit;