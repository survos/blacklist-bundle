<?php declare(strict_types = 1);

namespace LSBProject\BlacklistBundle\src\Entity;

use Doctrine\ORM\EntityManagerInterface;
use LSBProject\BlacklistBundle\src\Repository\BlacklistRepository;

class BlacklistManager implements BlacklistManagerInterface
{
    /** @var BlacklistRepository */
    private $repository;

    public function __construct(private readonly EntityManagerInterface $em)
    {
        $this->repository = $this->em->getRepository(Blacklist::class);
    }

    public function isBlacklisted(string $value, string $type, bool $sensetive = true): bool
    {
        return $this->repository->matchValue($value, $type, $sensetive);
    }

    public function addToBlacklist(string $value, string $type, bool $flush = true): void
    {
        $this->add($value, $type);

        if ($flush) {
            $this->em->flush();
        }
    }

    /** {@inheritDoc} */
    public function getList(?string $type = null): array
    {
        if (!$type) {
            return $this->repository->findAll();
        }

        return $this->repository->findBy([
            'type' => $type,
        ]);
    }

    private function add(string $value, string $type): void
    {
        $this->em->persist(new Blacklist($value, $type));
    }
}
