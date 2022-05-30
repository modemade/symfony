<?php

namespace App\Entity;

use App\Repository\CatRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CatRepository::class)]
class Cat
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 50, nullable: true)]
    private $name;

    #[ORM\OneToMany(mappedBy: 'ok', targetEntity: task::class)]
    private $zerty;

    public function __construct()
    {
        $this->zerty = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Collection<int, task>
     */
    public function getZerty(): Collection
    {
        return $this->zerty;
    }

    public function addZerty(task $zerty): self
    {
        if (!$this->zerty->contains($zerty)) {
            $this->zerty[] = $zerty;
            $zerty->setOk($this);
        }

        return $this;
    }

    public function removeZerty(task $zerty): self
    {
        if ($this->zerty->removeElement($zerty)) {
            // set the owning side to null (unless already changed)
            if ($zerty->getOk() === $this) {
                $zerty->setOk(null);
            }
        }

        return $this;
    }
}
