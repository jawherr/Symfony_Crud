<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

class CategorySearch
{

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Category")
     */
    private $category;


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