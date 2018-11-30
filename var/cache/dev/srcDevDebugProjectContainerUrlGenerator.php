<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcDevDebugProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;
    private $defaultLocale;

    public function __construct(RequestContext $context, LoggerInterface $logger = null, string $defaultLocale = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        $this->defaultLocale = $defaultLocale;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'add' => array(array('id'), array('_controller' => 'App\\Controller\\AddController::index'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/add')), array(), array()),
        'new_add' => array(array(), array('_controller' => 'App\\Controller\\AddController::new'), array(), array(array('text', '/new_add')), array(), array()),
        'edit_add' => array(array(), array('_controller' => 'App\\Controller\\AddController::edit'), array(), array(array('text', '/edit_add')), array(), array()),
        'user_ads' => array(array(), array('_controller' => 'App\\Controller\\AddController::userAdds'), array(), array(array('text', '/user_ads')), array(), array()),
        'admin_panel' => array(array(), array('_controller' => 'App\\Controller\\AdminPanelController::index'), array(), array(array('text', '/admin')), array(), array()),
        'admin_panel_users' => array(array(), array('_controller' => 'App\\Controller\\AdminPanelController::users'), array(), array(array('text', '/admin/users')), array(), array()),
        'comment' => array(array(), array('_controller' => 'App\\Controller\\CommentController::index'), array(), array(array('text', '/comment/new')), array(), array()),
        'edit_com' => array(array(), array('_controller' => 'App\\Controller\\CommentController::edit'), array(), array(array('text', '/comment/edit')), array(), array()),
        'contact' => array(array(), array('_controller' => 'App\\Controller\\ContactController::index'), array(), array(array('text', '/contact')), array(), array()),
        'contracts' => array(array(), array('_controller' => 'App\\Controller\\ContractController::index'), array(), array(array('text', '/contracts')), array(), array()),
        'sign_contracts' => array(array(), array('_controller' => 'App\\Controller\\ContractController::sign'), array(), array(array('text', '/contracts/sign')), array(), array()),
        'edit_contracts' => array(array(), array('_controller' => 'App\\Controller\\ContractController::edit'), array(), array(array('text', '/contracts/edit')), array(), array()),
        'home' => array(array(), array('_controller' => 'App\\Controller\\HomeController::index'), array(), array(array('text', '/')), array(), array()),
        'login' => array(array(), array('_controller' => 'App\\Controller\\LoginController::index'), array(), array(array('text', '/login')), array(), array()),
        'log' => array(array(), array('_controller' => 'App\\Controller\\LoginController::log'), array(), array(array('text', '/log')), array(), array()),
        'logout' => array(array(), array('_controller' => 'App\\Controller\\LoginController::logout'), array(), array(array('text', '/logout')), array(), array()),
        'profile' => array(array(), array('_controller' => 'App\\Controller\\ProfileController::index'), array(), array(array('text', '/profile')), array(), array()),
        'edit_profile' => array(array(), array('_controller' => 'App\\Controller\\ProfileController::edit'), array(), array(array('text', '/profile/edit')), array(), array()),
        'registration' => array(array(), array('_controller' => 'App\\Controller\\RegistrationController::index'), array(), array(array('text', '/registration')), array(), array()),
        'remember_pass' => array(array(), array('_controller' => 'App\\Controller\\RememberPassController::index'), array(), array(array('text', '/remember_pass')), array(), array()),
        '_twig_error_test' => array(array('code', '_format'), array('_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'), array('code' => '\\d+'), array(array('variable', '.', '[^/]++', '_format'), array('variable', '/', '\\d+', 'code'), array('text', '/_error')), array(), array()),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        $locale = $parameters['_locale']
            ?? $this->context->getParameter('_locale')
            ?: $this->defaultLocale;

        if (null !== $locale && (self::$declaredRoutes[$name.'.'.$locale][1]['_canonical_route'] ?? null) === $name) {
            unset($parameters['_locale']);
            $name .= '.'.$locale;
        } elseif (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
