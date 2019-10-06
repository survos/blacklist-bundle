<?php declare(strict_types=1);

namespace LSBProject\BlacklistBundle\Utils;

interface TypeExtractorInterface
{
    public function extract(): array;
    public function extractSupported(string $type): array;
}
