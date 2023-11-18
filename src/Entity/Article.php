<?php

namespace App\Entity;

use App\Repository\ArticleRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/** 
 * @ORM\Entity(repositoryClass="App\Repository\ArticleRepository") 
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
     * @ORM\Column(type="string", length=255)
     * @Assert\Length( * min = 5, * max = 50, 
     * minMessage = "Le nom d'un article doit comporter au moins {{ limit }} caractères", 
     * maxMessage = "Le nom d'un article doit comporter au plus {{ limit }} caractères" 
     * ) 
    */
    private $nom;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=0) 
     * @Assert\NotEqualTo( * value = 0, 
     * message = "Le prix d’un article ne doit pas être égal à 0 " 
     * ) 
    */
    private $prix;

    /**
     * @ORM\ManyToOne(targetEntity=Category::class, inversedBy="articles")
     */
    private $category;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrix(): ?string
    {
        return $this->prix;
    }

    public function setPrix(string $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getCategory(): ?Category
    {
        return $this->category;
    }

    public function setCategory(?Category $category): self
    {
        $this->category = $category;

        return $this;
    }
}
