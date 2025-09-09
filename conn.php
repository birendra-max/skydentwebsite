<?php

try {

    $conn = new mysqli('localhost', 'root', 'vicky@vicky-zed-air-cx3', 'skydentwebsite') or dir('Connection Error Plz try again');
} catch (Exception $e) {
    echo "Connection Error ! Plz try again later";
}
