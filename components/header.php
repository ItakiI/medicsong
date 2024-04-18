<?php 

require_once dirname(__DIR__) . '/function/navbar_template_fn.php';

if (empty($_SESSION['role'])) {
    echo navUsers();
} elseif ($_SESSION['role'] === 'utilisateur') {
    echo navUsersConnect();
} elseif ($_SESSION['role'] === 'admin') {
    echo navAdminConnect();
}