<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'App\Controller\CommentController' shared autowired service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\framework-bundle\\Controller\\ControllerTrait.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\framework-bundle\\Controller\\AbstractController.php';
include_once $this->targetDirs[3].'\\src\\Controller\\CommentController.php';

$this->services['App\Controller\CommentController'] = $instance = new \App\Controller\CommentController();

$instance->setContainer(($this->privates['.service_locator.ychIlgF'] ?? $this->load('get_ServiceLocator_YchIlgFService.php'))->withContext('App\\Controller\\CommentController', $this));

return $instance;
