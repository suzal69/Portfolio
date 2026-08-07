<?php
$db = new PDO('sqlite:' . __DIR__ . '/database/database.sqlite');
$rows = $db->query('SELECT id, email, name, password FROM users');
if (!$rows) {
    echo "QUERY_FAILED\n";
    print_r($db->errorInfo());
    exit(1);
}
foreach ($rows as $row) {
    echo implode(' | ', $row) . PHP_EOL;
}
