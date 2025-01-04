


<?php
function isActive(string $path): string
{
    $currentUri = $_SERVER['REQUEST_URI'] ?? '/';
    return str_contains($currentUri, $path) ? 'active' : '';
}





