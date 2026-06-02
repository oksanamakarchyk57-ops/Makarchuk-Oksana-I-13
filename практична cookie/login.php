<?php
session_start();

if (isset($_SESSION['user'])) {
    header("Location: secure.php");
    exit();
}
if (isset($_COOKIE['blocked'])) {
    header("Location: blocked.php");
    exit();
}

$error = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    if ($username === 'admin' && $password === '1234') {
        $_SESSION['user'] = 'admin';
        $_SESSION['attempts'] = 0;
        setcookie('blocked', '', time() - 3600); 
        header("Location: secure.php");
        exit();
    } else {
        if (!isset($_SESSION['attempts'])) {
            $_SESSION['attempts'] = 0;
        }
        $_SESSION['attempts']++;

        if ($_SESSION['attempts'] >= 3) {
            setcookie('blocked', 'true', time() + 300);
            header("Location: blocked.php");
            exit();
        }
        $error = "Неправильний логін або пароль!";
    }
}
?>
<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Вхід у систему</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center p-4">
    <div class="w-full max-w-md bg-white p-8 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold mb-6 text-center text-gray-800">Вхід у систему</h2>
        <form method="POST" class="space-y-4">
            <div>
                <label class="block text-sm font-medium text-gray-700">Логін</label>
                <input type="text" name="username" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500" required>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">Пароль</label>
                <input type="password" name="password" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500" required>
            </div>
            <?php if ($error): ?>
                <div class="text-red-500 text-sm"><?php echo $error; ?></div>
            <?php endif; ?>
            <button type="submit" class="w-full bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 transition duration-200">Увійти</button>
        </form>
    </div>
</body>
</html>