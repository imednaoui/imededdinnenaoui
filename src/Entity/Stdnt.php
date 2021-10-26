<?php

namespace App\Entity;

use App\Repository\StdntRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=StdntRepository::class)
 */
class Stdnt
{
    /**
     * @ORM\Id

     * @ORM\Column(type="integer")
     */
    private $nce;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $frstname;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $lstname;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $mail;

    /**
     * @ORM\ManyToOne(targetEntity=Classroom::class, inversedBy="student")
     */
    private $classroom;

    /**
     * @return mixed
     */
    public function getNce()
    {
        return $this->nce;
    }

    /**
     * @param mixed $nce
     */
    public function setNce($nce): void
    {
        $this->nce = $nce;
    }



    public function getFrstname(): ?string
    {
        return $this->frstname;
    }

    public function setFrstname(string $frstname): self
    {
        $this->frstname = $frstname;

        return $this;
    }

    public function getLstname(): ?string
    {
        return $this->lstname;
    }

    public function setLstname(string $lstname): self
    {
        $this->lstname = $lstname;

        return $this;
    }

    public function getMail(): ?string
    {
        return $this->mail;
    }

    public function setMail(string $mail): self
    {
        $this->mail = $mail;

        return $this;
    }

    public function getClassroom(): ?Classroom
    {
        return $this->classroom;
    }

    public function setClassroom(?Classroom $classroom): self
    {
        $this->classroom = $classroom;

        return $this;
    }
}
