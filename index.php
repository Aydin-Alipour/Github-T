<?php
declare(strict_types=1);

function greet(string $name): string
{
    return "سلام {$name}! این اولین پروژه‌ی من روی گیت‌هابه.";
}

$visitors = ["علی", "سارا", "رضا"];

foreach ($visitors as $visitor) {
    echo greet($visitor) . "\n";
}

echo "hello";
echo "Hi i'm amir";
echo "hello";
echo "Hi i'm maria";
