<?php declare(strict_types = 1);

namespace LSBProject\BlacklistBundle\src\Type;

class EmailType extends DefaultType implements TypeInterface
{
    public function satisfies(string $value): bool
    {
        return filter_var($value, FILTER_VALIDATE_EMAIL);
    }

    public function supports(string $type): bool
    {
        return 'email' === $type;
    }
}
