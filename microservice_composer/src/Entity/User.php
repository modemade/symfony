<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[ORM\Table(name: '`user`')]
class User
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 50, nullable: true)]
    private $name;

    #[ORM\Column(type: 'string', length: 50, nullable: true)]
    private $firs_name;

    #[ORM\Column(type: 'string', length: 50, nullable: true)]
    private $login;

    #[ORM\Column(type: 'string', length: 100, nullable: true)]
    private $mdp;

    #[ORM\OneToMany(mappedBy: 'fli', targetEntity: task::class)]
    private $azertt;

    #[ORM\Column(type: 'string', length: 255)]
    private $no;

    public function __construct()
    {
        $this->azertt = new ArrayCollection();
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

    public function getFirsName(): ?string
    {
        return $this->firs_name;
    }

    public function setFirsName(?string $firs_name): self
    {
        $this->firs_name = $firs_name;

        return $this;
    }

    public function getLogin(): ?string
    {
        return $this->login;
    }

    public function setLogin(?string $login): self
    {
        $this->login = $login;

        return $this;
    }

    public function getMdp(): ?string
    {
        return $this->mdp;
    }

    public function setMdp(?string $mdp): self
    {
        $this->mdp = $mdp;

        return $this;
    }

    /**
     * @return Collection<int, task>
     */
    public function getAzertt(): Collection
    {
        return $this->azertt;
    }

    public function addAzertt(task $azertt): self
    {
        if (!$this->azertt->contains($azertt)) {
            $this->azertt[] = $azertt;
            $azertt->setFli($this);
        }

        return $this;
    }

    public function removeAzertt(task $azertt): self
    {
        if ($this->azertt->removeElement($azertt)) {
            // set the owning side to null (unless already changed)
            if ($azertt->getFli() === $this) {
                $azertt->setFli(null);
            }
        }

        return $this;
    }

    public function getNo(): ?string
    {
        return $this->no;
    }

    public function setNo(string $no): self
    {
        $this->no = $no;

        return $this;
    }
}
