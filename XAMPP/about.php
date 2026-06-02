<?php
$name = $email = $message = "";
$nameErr = $emailErr = $messageErr = "";
$success = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Ім’я
    if (empty($_POST["name"])) {
        $nameErr = "Введіть ім’я";
    } else {
        $name = htmlspecialchars(trim($_POST["name"]));
    }

    // Email
    if (empty($_POST["email"])) {
        $emailErr = "Введіть email";
    } else {
        $email = filter_var($_POST["email"], FILTER_VALIDATE_EMAIL);
        if (!$email) {
            $emailErr = "Невалідний email";
        }
    }

    // Повідомлення
    if (empty($_POST["message"])) {
        $messageErr = "Введіть повідомлення";
    } else {
        $message = htmlspecialchars(trim($_POST["message"]));
        if (strlen($message) < 20) {
            $messageErr = "Повідомлення має містити мінімум 20 символів";
        }
    }

    // Якщо помилок немає
    if (empty($nameErr) && empty($emailErr) && empty($messageErr)) {
        $success = "✅ Повідомлення успішно надіслано!";
        
        // Очистити поля
        $name = $email = $message = "";
    }
}
?>

<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Форма зворотного зв’язку</title>
</head>
<body>

<h2>Форма зворотного зв’язку</h2>

<form method="post" action="">
    <label>Ім’я:</label><br>
    <input type="text" name="name" value="<?= $name ?>"><br>
    <span style="color:red"><?= $nameErr ?></span><br><br>

    <label>Email:</label><br>
    <input type="text" name="email" value="<?= $email ?>"><br>
    <span style="color:red"><?= $emailErr ?></span><br><br>

    <label>Повідомлення:</label><br>
    <textarea name="message"><?= $message ?></textarea><br>
    <span style="color:red"><?= $messageErr ?></span><br><br>

    <button type="submit">Надіслати</button>
</form>

<br>
<span style="color:green"><?= $success ?></span>

</body>
</html>