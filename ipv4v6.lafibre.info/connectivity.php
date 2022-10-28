<?php
header('Content-Type: application/json');

// See: https://lafibre.info/tcpip/local_port_range/
$isEphemeralPort = ((int) $_SERVER['REMOTE_PORT']) < 32768;

echo json_encode([
    'literal-connectivity' => '<span class="textevert">OK</span>',
    'literal-ip' => ' : IPv4 publique = ' . $_SERVER['REMOTE_ADDR'],
    'literal-remote_port' => ' et <span class="'
        . ($isEphemeralPort ? 'texterouge' : 'textevert') . '">TCP '
        . $_SERVER['REMOTE_PORT']
        . '</span> (via IPv4 littérale)',
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);