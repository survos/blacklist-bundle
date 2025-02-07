<?php declare(strict_types = 1);

namespace LSBProject\BlacklistBundle\src\Utils;

use LSBProject\BlacklistBundle\src\Type\TypeInterface;

interface TypeExtractorInterface
{
    public function extract(): array;
    public function extractDefault(): TypeInterface;
    public function extractSupported(string $type): array;
}
