<?php

require __DIR__ . '/model.php';

$page = isset($_GET['page']) ? $_GET['page'] : 2;
$perPage = isset($_GET['per_page']) ? $_GET['per_page'] : 4;

sleep(4);

echo json_encode([
    'entities' => getItems($page, $perPage),
    'total' => getTotal(),
    'page' => $page,
    'perPage' => $perPage
]);