<?php

class Logout extends Controller
{
    public static function logoutnow()
    {
        session_start();
        session_destroy();
        header("Location: /");
    }
}