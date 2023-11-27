<?php

final class EmailService
{
    public function __construct(private readonly EmailProviderInterface $emailProvider)
    {
    }

    public function sendEmail(string $to, string $subject, string $body): bool
    {
        return $this->emailProvider->sendEmail(to: $to, subject: $subject, body: $body);
    }
}

