<?php

try {
    $conn = new mysqli('localhost', 'root', 'Katchisera', 'skydentdesigns') or dir('Connection Error Plz try again');
} catch (Exception $e) {
    echo "Connection Error ! Plz try again later";
}
