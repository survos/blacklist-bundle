<?php declare(strict_types = 1);

namespace LSBProject\BlacklistBundle\Entity;

interface BlacklistManagerInterface
{
    public function isBlacklisted(string $value, string $type, bool $sensetive = true): bool;
    public function addToBlacklist(string $value, string $type, bool $flush = true): void;

    /** @return array<Blacklist> */
    public function getList(?string $type = null): array;
}
