<?php
declare(strict_types=1);

echo sprintf("[%s] Generador iniciado.\n", date('Y-m-d H:i:s'));

while (true) {
    $randomString = bin2hex(random_bytes(16));
    echo sprintf("[%s] %s\n", date('Y-m-d H:i:s'), $randomString);
    flush();
    sleep(5);
}
