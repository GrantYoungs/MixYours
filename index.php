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
    <?php echo "<p>" . $site->getEmail() . "</p>"; ?>
    <form method="post" action="post/login.php">
        <p>
            <label for="email">Email: </label>
            <input type="email" name="email" placeholder="Email">
        </p>
        <p>
            <label for="password">Password: </label>
            <input type="password" name="password" placeholder="password">
        </p>
        <?php if(isset($_SESSION['e'])) {
            echo "<p>" . $_SESSION['e'] . "</p>";
        } ?>
        <p>
            <input type="submit" value="Log in">
        </p>
    </form>
</body>
</html>