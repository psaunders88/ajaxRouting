<?php

namespace PSaunders\Components\Resource\Controller;

use Symfony\Bundle\FrameworkBundle\Templating\EngineInterface;
use Symfony\Component\HttpFoundation\Response;

abstract class AbstractController
{
    /**
     * Templating
     * 
     * @var EngineInterface 
     */
    protected $templating;
    
    /**
     * Class constructor
     * 
     * @param EngineInterface $templating
     */
    public function __construct(EngineInterface $templating) 
    {
        $this->templating = $templating;
    }
    
    /**
     * Render a view with parameters
     * 
     * @param string $view       View name
     * @param array  $parameters The data paramters to be replaced
     *                           in the provided view template
     * @return Response
     */
    public function render($view, $parameters = [])
    {
        return $this->templating->renderResponse($view, $parameters);
    }
}