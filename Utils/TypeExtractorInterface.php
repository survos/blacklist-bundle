<?php declare(strict_types=1);

namespace LSBProject\BlacklistBundle\Utils;

use LSBProject\BlacklistBundle\Type\TypeInterface;

interface TypeExtractorInterface
{
    public function extract(): array;
    public function extractDefault(): TypeInterface;
    public function extractSupported(string $type): array;
}
