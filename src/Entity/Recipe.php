<?php

namespace App\Entity;

use App\Repository\RecipeRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RecipeRepository::class)
 */
class Recipe
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $time_prepare;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $time_cooking;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $time_rest;

    /**
     * @ORM\Column(type="array")
     */
    private $ingredients = [];

    /**
     * @ORM\Column(type="array", nullable=true)
     */
    private $tools = [];

    /**
     * @ORM\Column(type="array")
     */
    private $steps = [];

    /**
     * @ORM\Column(type="integer")
     */
    private $id_author;

    /**
     * @ORM\Column(type="time")
     */
    private $created_time;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getTimePrepare(): ?string
    {
        return $this->time_prepare;
    }

    public function setTimePrepare(string $time_prepare): self
    {
        $this->time_prepare = $time_prepare;

        return $this;
    }

    public function getTimeCooking(): ?string
    {
        return $this->time_cooking;
    }

    public function setTimeCooking(string $time_cooking): self
    {
        $this->time_cooking = $time_cooking;

        return $this;
    }

    public function getTimeRest(): ?string
    {
        return $this->time_rest;
    }

    public function setTimeRest(?string $time_rest): self
    {
        $this->time_rest = $time_rest;

        return $this;
    }

    public function getIngredients(): ?array
    {
        return $this->ingredients;
    }

    public function setIngredients(array $ingredients): self
    {
        $this->ingredients = $ingredients;

        return $this;
    }

    public function getTools(): ?array
    {
        return $this->tools;
    }

    public function setTools(?array $tools): self
    {
        $this->tools = $tools;

        return $this;
    }

    public function getSteps(): ?array
    {
        return $this->steps;
    }

    public function setSteps(array $steps): self
    {
        $this->steps = $steps;

        return $this;
    }

    public function getIdAuthor(): ?int
    {
        return $this->id_author;
    }

    public function setIdAuthor(int $id_author): self
    {
        $this->id_author = $id_author;

        return $this;
    }

    public function getCreatedTime(): ?\DateTimeInterface
    {
        return $this->created_time;
    }

    public function setCreatedTime(\DateTimeInterface $created_time): self
    {
        $this->created_time = $created_time;

        return $this;
    }
}
