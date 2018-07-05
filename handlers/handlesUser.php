<?php
require_once '../core/Db_conn.php';
$res = $pdo->query("SELECT users.id, users.name, users.last_name, users.patronymic FROM users");
$res = $res->FETCHALL(PDO::FETCH_ASSOC);
echo json_encode ($res);