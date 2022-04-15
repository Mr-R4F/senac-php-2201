<?php

session_start();

if (! isset($_SESSION['id'])) // se não
{
    header('location: login.php');
    exit(); //termina o processo;
}