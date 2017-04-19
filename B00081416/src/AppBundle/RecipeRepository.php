<?php

namespace AppBundle;


class RecipeRepository
{
    private $recipes = [];

    public function __construct($recipes)
    {
        $r1 = new Recipe(1, 'omlette', 'eggs, milk, cheese', 'added everything together');
        $r2 = new Recipe(2, 'toast', 'bread, butter', 'add everything');
        $r3 = new Recipe(3, 'cake', 'flour, eggs milk', 'mix it together');
        $this->$recipes[]= $r1;
        $this->$recipes[] = $r2;
        $this->$recipes[] = $r3;
    }

    public function getAll()
    {
        return $this->recipes;
    }
}