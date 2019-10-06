<?php declare(strict_types = 1);

namespace LSBProject\BlacklistBundle\Validator\Constraints;

use LSBProject\BlacklistBundle\Entity\BlacklistManagerInterface;
use LSBProject\BlacklistBundle\Type\TypeInterface;
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
            if (!$this->type->satisfies($value)) {
                throw new \InvalidArgumentException(
                    sprintf("Value '%s' doesn't satisfy '%s' type", $value, $constraint->type)
                );
            }

            $this->type->validate($value, $constraint, $this->context, $this->blacklistManager);
        }
    }
}
