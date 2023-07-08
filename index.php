<?php
require_once 'Database.php';

$users = Database::getInstance()->query("SELECT * FROM users");
