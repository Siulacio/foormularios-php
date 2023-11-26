<?php

interface EmailProviderInterface
{
    public function sendEmail(string $to, string $subject, string $body): bool;
}
