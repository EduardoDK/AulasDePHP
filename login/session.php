<?php

session_start();

$_SESSION['nome'] = "Eduardo";

echo "Sessão Iniciada";

$sql = "INSERT INTO usuarios  "