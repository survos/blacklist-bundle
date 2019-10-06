<?php declare(strict_types=1);

namespace LSBProject\Type;

use LSBProject\Blacklist\Entity\BlacklistManagerInterface;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

class DefaultType implements TypeInterface
{
    /** @var BlacklistManagerInterface */
    private $blacklistManager;

    public function __construct(BlacklistManagerInterface $blacklistManager)
    {
        $this->blacklistManager = $blacklistManager;
    }

    public function supports(string $type): bool
    {
        return true;
    }

    public function validate(
        string $value,
        Constraint $constraint,
        ExecutionContextInterface &$context,
        BlacklistManagerInterface $manager
    ): void {
        if ($manager->isBlacklisted($value, $constraint->type, $constraint->caseSensetive)) {
            $context->buildViolation($constraint->message)->addViolation();
        }
    }
}
