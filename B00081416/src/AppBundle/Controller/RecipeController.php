<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use AppBundle\RecipeRepository;

class RecipeController extends Controller
{
    /**
     * @Route("/recipes/list")
     */
    public function listAction(Request $request, $recipes)
    {
        $recipeRepository = new RecipeRepository();
        $recipes = $recipeRepository->getAll();

        $argsArray = [
            'recipes' => $recipes
        ];

        $templateName = 'recipes/list';
        return $this->render($templateName . '.html.twig', $argsArray);
    }
}
