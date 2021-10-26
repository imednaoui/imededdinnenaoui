<?php

namespace App\Entity;

use App\Repository\UpdateRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UpdateRepository::class)
 * @ORM\Table(name="`update`")
 */
class Update
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="boolean")
     */
    private $enabeld;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEnabeld(): ?bool
    {
        return $this->enabeld;
    }

    public function setEnabeld(bool $enabeld): self
    {
        $this->enabeld = $enabeld;

        return $this;
    }
}
