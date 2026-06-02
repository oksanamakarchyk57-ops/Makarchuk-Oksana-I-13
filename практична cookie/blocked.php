<?php
session_start();
if (!isset($_COOKIE['blocked'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Доступ заблоковано</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center p-4">
    <div class="w-full max-w-md bg-white p-8 rounded-lg shadow-md text-center">
        <div class="text-red-500 mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
            </svg>
        </div>
        <h2 class="text-2xl font-bold mb-4 text-gray-800">Доступ заблоковано</h2>
        <p class="text-gray-600">Ви заблоковані на 5 хвилин через неправильні спроби входу.</p>
        <p class="mt-4 text-sm text-gray-400">Будь ласка, зачекайте або зверніться до адміністратора.</p>
    </div>
</body>
</html>