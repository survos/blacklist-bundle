<?php declare(strict_types = 1);

namespace LSBProject\BlacklistBundle\Utils;

use LSBProject\BlacklistBundle\Type\TypeInterface;

class TypeExtractor implements TypeExtractorInterface
{
    /** @var TypeInterface[] */
    private $types;

    /** @var TypeInterface */
    private $defaultType;

    public function __construct(array $types, TypeInterface $defaultType)
    {
        $this->types = $types;
        $this->defaultType = $defaultType;
    }

    public function extract(): array
    {
        return $this->types;
    }

    public function extractDefault(): TypeInterface
    {
        return $this->defaultType;
    }

    public function extractSupported(string $type): array
    {
        return array_filter($this->types, function (TypeInterface $typeObject) use ($type) {
            return $typeObject->supports($type);
        });
    }
}
