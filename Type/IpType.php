<?php declare(strict_types=1);

namespace LSBProject\BlacklistBundle\Type;

class IpType extends DefaultType implements TypeInterface
{
    /**
     * {@inheritDoc}
     */
    public function satisfies(string $value): bool
    {
        return filter_var($value, FILTER_VALIDATE_IP);
    }

    /**
     * {@inheritDoc}
     */
    public function supports(string $type): bool
    {
        return $type === 'ip';
    }
}
