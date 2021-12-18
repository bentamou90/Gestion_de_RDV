<?php

namespace App\Entity;

use App\Entity\Administrateur; 
use App\Repository\MedecinRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MedecinRepository::class)
 */
class Medecin extends Administrateur
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    protected $id;

    

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Specialite;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSpecialite(): ?string
    {
        return $this->Specialite;
    }

    public function setSpecialite(string $Specialite): self
    {
        $this->Specialite = $Specialite;

        return $this;
    }

   
}