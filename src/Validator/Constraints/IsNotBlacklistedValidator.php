<?php declare(strict_types = 1);

namespace LSBProject\BlacklistBundle\Validator\Constraints;

use LSBProject\BlacklistBundle\Entity\BlacklistManagerInterface;
use LSBProject\BlacklistBundle\Type\TypeInterface;
use LSBProject\BlacklistBundle\Utils\TypeExtractorInterface;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;
use Symfony\Component\Validator\Exception\UnexpectedTypeException;

class IsNotBlacklistedValidator extends ConstraintValidator
{
    public function __construct(private readonly BlacklistManagerInterface $blacklistManager, private readonly TypeExtractorInterface $typeExtractor)
    {
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

        $types = $this->typeExtractor->extractSupported($constraint->type);

        foreach ($types as $type) {
            $this->validateType($type, $constraint, $value);
        }

        if (0 === count($types)) {
            $this->validateType(
                $this->typeExtractor->extractDefault(),
                $constraint,
                $value
            );
        }
    }

    private function validateType(TypeInterface $type, Constraint $constraint, string $value): void
    {
        if ($type->supports($constraint->type)) {
            if (!$type->satisfies($value)) {
                throw new \InvalidArgumentException(
                    sprintf("Value '%s' doesn't satisfy '%s' type", $value, $constraint->type)
                );
            }

            $type->validate($value, $constraint, $this->context, $this->blacklistManager);
        }
    }
}
