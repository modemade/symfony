<?php

namespace App\Entity;

use App\Repository\ArticleRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ArticleRepository::class)
 */
class Article
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $title;

    /**
     * @ORM\Column(type="text")
     */
    private $contenu;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $image;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createThe;

    /**
     * @ORM\OneToMany(targetEntity=User::class, mappedBy="ecrire")
     */
    private $users;

    /**
     * @ORM\ManyToMany(targetEntity=Category::class, inversedBy="articles")
     */
    private $blabla;

    public function __construct()
    {
        $this->users = new ArrayCollection();
        $this->blabla = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getContenu(): ?string
    {
        return $this->contenu;
    }

    public function setContenu(string $contenu): self
    {
        $this->contenu = $contenu;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getCreateThe(): ?\DateTimeInterface
    {
        return $this->createThe;
    }

    public function setCreateThe(\DateTimeInterface $createThe): self
    {
        $this->createThe = $createThe;

        return $this;
    }

    /**
     * @return Collection<int, User>
     */
    public function getUsers(): Collection
    {
        return $this->users;
    }

    public function addUser(User $user): self
    {
        if (!$this->users->contains($user)) {
            $this->users[] = $user;
            $user->setEcrire($this);
        }

        return $this;
    }

    public function removeUser(User $user): self
    {
        if ($this->users->removeElement($user)) {
            // set the owning side to null (unless already changed)
            if ($user->getEcrire() === $this) {
                $user->setEcrire(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Category>
     */
    public function getBlabla(): Collection
    {
        return $this->blabla;
    }

    public function addBlabla(Category $blabla): self
    {
        if (!$this->blabla->contains($blabla)) {
            $this->blabla[] = $blabla;
        }

        return $this;
    }

    public function removeBlabla(Category $blabla): self
    {
        $this->blabla->removeElement($blabla);

        return $this;
    }
}
