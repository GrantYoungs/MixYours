<?php
require __DIR__ . '/lib/site.inc.php';

$user = $_SESSION[MixYours\User::SESSION_NAME];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>MixYours: The Cocktail Sharing Site</title>
</head>

<body>
    <h1>Welcome to MixYours</h1>
    <?php echo "<p>Welcome " . $user->getName() . "</p>"; ?>
</body>
</html>