<?php declare(strict_types = 1);

namespace LSBProject\BlacklistBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Table(uniqueConstraints={
 *     @ORM\UniqueConstraint(name="assignment_unique", columns={"type", "value"})
 * })
 * @ORM\Entity(repositoryClass="LSBProject\BlacklistBundle\Repository\BlacklistRepository")
 * @codeCoverageIgnore
 */
class Blacklist
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     * @var int
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=false)
     * @Assert\NotBlank()
     * @var string|null
     */
    protected $type;

    /**
     * @ORM\Column(type="string", nullable=false)
     * @Assert\NotBlank()
     * @var string|null
     */
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
