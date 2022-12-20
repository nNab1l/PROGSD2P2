<?php include '../../private/init.php'; ?>
<?php include SHARED_PATH . '/header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basis formulier</title>
</head>
<body>
    <section class="">
    <form class="input__form" method="post" action="voorbeeld.php">
        <input class="input__name" type="text" name="user" placeholder="Naam" id="user" required>
        <input class="input__email" type="text" name="email" placeholder="Email" id="email" required>
        <input class="input__text" type="text" name="email" placeholder="Commentaar" id="email" required>
        <input class="input__submit" type="submit" value="Abonneer" name="submit">
    </form>
</body>
</html>

<?php include SHARED_PATH . '/footer.php'; ?>