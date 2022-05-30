<?php

namespace App\Entity;

use App\Repository\TaskRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TaskRepository::class)]
class Task
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 50, nullable: true)]
    private $nam;

    #[ORM\Column(type: 'text', nullable: true)]
    private $content;

    #[ORM\Column(type: 'date', nullable: true)]
    private $date;

    #[ORM\ManyToOne(targetEntity: cat::class)]
    private $add;

    #[ORM\ManyToOne(targetEntity: user::class)]
    #[ORM\JoinColumn(nullable: false)]
    private $foll;

    #[ORM\Column(type: 'string', length: 255)]
    private $no;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'azertt')]
    private $fli;

    #[ORM\ManyToOne(targetEntity: Cat::class, inversedBy: 'zerty')]
    #[ORM\JoinColumn(nullable: false)]
    private $ok;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNam(): ?string
    {
        return $this->nam;
    }

    public function setNam(?string $nam): self
    {
        $this->nam = $nam;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(?string $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(?\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getAdd(): ?cat
    {
        return $this->add;
    }

    public function setAdd(?cat $add): self
    {
        $this->add = $add;

        return $this;
    }

    public function getFoll(): ?user
    {
        return $this->foll;
    }

    public function setFoll(?user $foll): self
    {
        $this->foll = $foll;

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

    public function getFli(): ?User
    {
        return $this->fli;
    }

    public function setFli(?User $fli): self
    {
        $this->fli = $fli;

        return $this;
    }

    public function getOk(): ?Cat
    {
        return $this->ok;
    }

    public function setOk(?Cat $ok): self
    {
        $this->ok = $ok;

        return $this;
    }
}
