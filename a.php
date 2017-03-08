<?php
$token = "370254025:AAHpMZpmYwzkBqTTMHwID5zJFyX4yzqC5G8";
$userbot = json_decode(file_get_contents('https://api.telegram.org/bot'.$token .'/getme'));
print_r($userbot->result->username);
