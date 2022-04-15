<?php

session_start();

$_SESSION['nome'] = 'bono';

echo $_SESSION['nome'];