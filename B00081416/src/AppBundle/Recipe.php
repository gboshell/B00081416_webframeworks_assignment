<?php

namespace AppBundle;


class Recipe
{
    private $id;
    private $name;
    private $ingredients;
    private $instructions;

    public function __construct($id, $name, $ingredients, $instructions){
        $this->id = $id;
        $this->name = $name;
        $this->ingredients = $ingredients;
        $this->instructions = $instructions;
    }

    /**
     * @return mixed
     */
    public function getIngredients()
    {
        return $this->ingredients;
    }

    /**
     * @return mixed
     */
    public function getInstructions()
    {
        return $this->instructions;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }
}