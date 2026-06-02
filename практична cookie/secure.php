<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Захищена сторінка</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center p-4">
    <div class="w-full max-w-md bg-white p-8 rounded-lg shadow-md text-center">
        <h2 class="text-2xl font-bold mb-4 text-gray-800">Вітаємо, адміністраторе!</h2>
        <p class="text-gray-600 mb-6">Ви успішно увійшли в захищену зону.</p>
        <a href="logout.php" class="inline-block bg-red-500 text-white py-2 px-4 rounded-md hover:bg-red-600 transition duration-200">Вийти</a>
    </div>
</body>
</html>