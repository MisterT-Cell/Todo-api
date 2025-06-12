<?php

namespace App\Entity;

use App\Repository\TodosRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Metadata\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: TodosRepository::class)]
#[ApiResource(
    normalizationContext: ['groups' => ['todo:read']],
    denormalizationContext: ['groups' => ['todo:write']],
)]

class Todos
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(['todo:read'])]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'Titel mag niet leeg zijn.')]
    #[Groups(['todo:read', 'todo:write'])]
    private ?string $title;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    #[Groups(['todo:read', 'todo:write'])]
    private ?string $description = null;

    #[ORM\Column(type: Types::BOOLEAN)]
    #[Groups(['todo:read', 'todo:write'])]
    private ?bool $finished;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): static
    {
        $this->id = $id;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): static
    {
        $this->title = $title;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function isFinished(): ?bool
    {
        return $this->finished;
    }

    public function setFinished(bool $finished): static
    {
        $this->finished = $finished;

        return $this;
    }
}
