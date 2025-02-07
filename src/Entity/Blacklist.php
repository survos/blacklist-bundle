<?php declare(strict_types = 1);

namespace LSBProject\BlacklistBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @codeCoverageIgnore
 */
#[ORM\Entity(repositoryClass: \LSBProject\BlacklistBundle\Repository\BlacklistRepository::class)]
#[ORM\Table]
#[ORM\UniqueConstraint(name: 'assignment_unique', columns: ['type', 'value'])]
class Blacklist
{
    /**
     * @var int
     */
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'AUTO')]
    #[ORM\Column(type: 'integer')]
    protected $id;

    /**
     * @var string|null
     */
    #[ORM\Column(type: 'string', length: 255, nullable: false)]
    #[Assert\NotBlank]
    protected $type;

    /**
     * @var string|null
     */
    #[ORM\Column(type: 'string', nullable: false)]
    #[Assert\NotBlank]
    protected $value;

    public function __construct(string $value, string $type)
    {
        $this->value = $value;
        $this->type = $type;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getValue(): string
    {
        return $this->value ?? '';
    }

    public function getType(): string
    {
        return $this->type ?? '';
    }
}
