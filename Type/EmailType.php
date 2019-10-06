<?php declare(strict_types=1);

namespace LSBProject\BlacklistBundle\Type;

class EmailType extends DefaultType implements TypeInterface
{
    /**
     * {@inheritDoc}
     */
    public function satisfies(string $value): bool
    {
        return filter_var($value, FILTER_VALIDATE_EMAIL);
    }

    /**
     * {@inheritDoc}
     */
    public function supports(string $type): bool
    {
        return $type === 'email';
    }
}
