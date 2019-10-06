<?php declare(strict_types=1);

namespace LSBProject\BlacklistBundle\Type;

use LSBProject\BlacklistBundle\Entity\BlacklistManagerInterface;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

/**
 * Default type used to be a fallback type for validator
 *
 * Class DefaultType
 * @package LSBProject\BlacklistBundle\Type
 */
class DefaultType implements TypeInterface
{
    /** @var BlacklistManagerInterface */
    private $blacklistManager;

    public function __construct(BlacklistManagerInterface $blacklistManager)
    {
        $this->blacklistManager = $blacklistManager;
    }

    /**
     * {@inheritDoc}
     */
    public function satisfies(string $value): bool
    {
        return true;
    }

    /**
     * {@inheritDoc}
     */
    public function supports(string $type): bool
    {
        return true;
    }

    /**
     * {@inheritDoc}
     */
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
