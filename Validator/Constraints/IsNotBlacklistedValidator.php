<?php declare(strict_types = 1);

namespace LSBProject\Blacklist\Validator\Constraints;

use LSBProject\Blacklist\Entity\BlacklistManagerInterface;
use LSBProject\Type\TypeInterface;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;
use Symfony\Component\Validator\Exception\UnexpectedTypeException;

class IsNotBlacklistedValidator extends ConstraintValidator
{
    /** @var BlacklistManagerInterface */
    private $blacklistManager;

    /** @var TypeInterface */
    private $type;

    public function __construct(
        BlacklistManagerInterface $blacklistManager,
        TypeInterface $type
    ) {
        $this->blacklistManager = $blacklistManager;
        $this->type = $type;
    }

    /**
     * {@inheritDoc}
     *
     * @param $constraint IsNotBlacklisted
     */
    public function validate($value, Constraint $constraint): void
    {
        if (!is_string($value)) {
            throw new UnexpectedTypeException($value, 'string');
        }

        if ($this->type->supports($constraint->type)) {
            $this->type->validate($value, $constraint, $this->context, $this->blacklistManager);
        }
    }
}
