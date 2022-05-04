<?php
session_start();
//session_abort(); - finaliza a sessão e discarta o array
session_destroy();//apaga os dados
header('location: login.php');
