<?php

namespace App\Entity;

use App\Repository\YourBundleYourEntityRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: YourBundleYourEntityRepository::class)]
class YourBundleYourEntity
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(nullable: true)]
    private array $name = [];

    #[ORM\Column]
    private array $no = [];

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): array
    {
        return $this->name;
    }

    public function setName(?array $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getNo(): array
    {
        return $this->no;
    }

    public function setNo(array $no): self
    {
        $this->no = $no;

        return $this;
    }
}
