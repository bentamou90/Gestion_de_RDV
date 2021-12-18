<?php

namespace App\Entity;

use App\Repository\AdministrateurRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AdministrateurRepository::class)
 */
class Administrateur
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, unique=true)
     */
    private $ID_Admin;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom_Admin;

    /**
     * @ORM\Column(type="integer")
     */
    private $contact;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIDAdmin(): ?string
    {
        return $this->ID_Admin;
    }

    public function setIDAdmin(string $ID_Admin): self
    {
        $this->ID_Admin = $ID_Admin;

        return $this;
    }

    public function getNomAdmin(): ?string
    {
        return $this->nom_Admin;
    }

    public function setNomAdmin(string $nom_Admin): self
    {
        $this->nom_Admin = $nom_Admin;

        return $this;
    }

    public function getContact(): ?int
    {
        return $this->contact;
    }

    public function setContact(int $contact): self
    {
        $this->contact = $contact;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }
}