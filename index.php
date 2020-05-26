<?php
require __DIR__ . '/lib/site.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>MixYours: The Cocktail Sharing Site</title>
</head>

<body>
    <h1>Welcome to MixYours</h1>
    <p><a href="#">Login</a></p>
    <?php echo "<p>" . $site->getEmail() . "</p>"; ?>
</body>
</html>