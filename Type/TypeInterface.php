<?php declare(strict_types=1);

namespace LSBProject\Type;

use LSBProject\Blacklist\Entity\BlacklistManagerInterface;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

interface TypeInterface
{
    /**
     * Describes if type supported by current class
     *
     * @param string $type
     * @return bool
     */
    public function supports(string $type): bool;

    /**
     * Validates current value.
     * Used to implement custom storage validator
     *
     * @param string $value
     * @param Constraint $constraint
     * @param ExecutionContextInterface $context
     * @param BlacklistManagerInterface $manager
     */
    public function validate(
        string $value,
        Constraint $constraint,
        ExecutionContextInterface &$context,
        BlacklistManagerInterface $manager
    ): void;
}
