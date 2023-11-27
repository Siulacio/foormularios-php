<?php

require 'vendor/autoload.php';
require __DIR__ . '/EmailService.php';
require __DIR__ . '/MailtrapProvider.php';

if (empty($_POST['nombre']) || empty($_POST['email']) || empty($_POST['mensaje'])) {
    header('Location: formulario.php?error=1');
    exit;
}

if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    header('Location: formulario.php?error=2');
    exit;
}

$emailService = new EmailService(new MailtrapProvider);

$sentEmail = $emailService->sendEmail(
    to: $_POST['email'],
    subject: 'Formulario de contacto',
    body: $_POST['mensaje'],
);

if ($sentEmail) {
    header('Location: formulario.php?success=1');
    exit;
}

header('Location: formulario.php?error=3');

