<?php

namespace App\Repository\User;

use App\Entity\User;

interface UserRepositoryInterface
{
    public function find(mixed $id, \Doctrine\DBAL\LockMode|int|null $lockMode = null, int|null $lockVersion = null): ?object;
    public function findOneBy(array $criteria, ?array $orderBy = null): ?object;
    public function findBy(array $criteria, ?array $orderBy = null, ?int $limit = null, ?int $offset = null): ?array;
}