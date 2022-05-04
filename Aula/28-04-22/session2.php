<?php

//controle de usuário

session_start(); /*o php faz o controle de seção (grava cookies). (como se fosse um código de ID). 
Cada vez que chama o serve a info de 'id' é mandado */

echo $_SESSION['nome'];