<?php

if (empty($_POST['nombre']) || empty($_POST['email']) || empty($_POST['mensaje'])) {
    header('Location: formulario.php?error=1');
    exit;
}

if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    header('Location: formulario.php?error=2');
    exit;
}

