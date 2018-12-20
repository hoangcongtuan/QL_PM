<?php
    session_start();
    define('ADMIN_TYPE', 'admin');
    define('USER_TYPE', 'user');
    define('TYPE', 'type');

    define('USER', 'user');

    function isSigned() {
        return isset($_SESSION[TYPE]);
    }

    function isAdmin() {
        return isSigned() && $_SESSION[TYPE] == ADMIN_TYPE;
    }
    function isUser() {
        return isSigned() && $_SESSION[TYPE] == USER_TYPE;
    }
?>