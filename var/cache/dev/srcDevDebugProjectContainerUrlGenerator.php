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
        'admin_panel' => array(array(), array('_controller' => 'App\\Controller\\AdminPanelController::index'), array(), array(array('text', '/admin')), array(), array()),
        'admin_panel_users' => array(array(), array('_controller' => 'App\\Controller\\AdminPanelController::users'), array(), array(array('text', '/admin/users')), array(), array()),
        'delete_user' => array(array(), array('_controller' => 'App\\Controller\\AdminPanelController::delete'), array(), array(array('text', '/admin/delete_user')), array(), array()),
        'ban_user' => array(array(), array('_controller' => 'App\\Controller\\AdminPanelController::ban'), array(), array(array('text', '/admin/ban_user')), array(), array()),
        'user_type' => array(array(), array('_controller' => 'App\\Controller\\AdminPanelController::changeType'), array(), array(array('text', '/admin/user_type')), array(), array()),
        'comment' => array(array(), array('_controller' => 'App\\Controller\\CommentController::index'), array(), array(array('text', '/comment/new')), array(), array()),
        'edit_com' => array(array(), array('_controller' => 'App\\Controller\\CommentController::edit'), array(), array(array('text', '/comment/edit')), array(), array()),
        'contact' => array(array(), array('_controller' => 'App\\Controller\\ContactController::index'), array(), array(array('text', '/contact')), array(), array()),
        'contracts' => array(array(), array('_controller' => 'App\\Controller\\ContractController::index'), array(), array(array('text', '/contracts')), array(), array()),
        'delete_sutartis' => array(array(), array('_controller' => 'App\\Controller\\ContractController::dalete'), array(), array(array('text', '/contracts/dalete')), array(), array()),
        'siusti_kopija' => array(array(), array('_controller' => 'App\\Controller\\ContractController::siusti'), array(), array(array('text', '/contracts/siusti')), array(), array()),
        'send_email_proc' => array(array(), array('_controller' => 'App\\Controller\\ContractController::siusti_proc'), array(), array(array('text', '/contracts/siusti_proc')), array(), array()),
        'sign_contracts' => array(array(), array('_controller' => 'App\\Controller\\ContractController::sign'), array(), array(array('text', '/contracts/sign')), array(), array()),
        'sign_contracts_proc' => array(array(), array('_controller' => 'App\\Controller\\ContractController::sign_proc'), array(), array(array('text', '/contracts/sign_porc')), array(), array()),
        'edit_contracts' => array(array(), array('_controller' => 'App\\Controller\\ContractController::edit'), array(), array(array('text', '/contracts/edit')), array(), array()),
        'edit_contracts_proc' => array(array(), array('_controller' => 'App\\Controller\\ContractController::edit_proc'), array(), array(array('text', '/contracts/edit_contracts_proc')), array(), array()),
        'home' => array(array(), array('_controller' => 'App\\Controller\\HomeController::index'), array(), array(array('text', '/')), array(), array()),
        'login' => array(array(), array('_controller' => 'App\\Controller\\LoginController::index'), array(), array(array('text', '/login')), array(), array()),
        'log' => array(array(), array('_controller' => 'App\\Controller\\LoginController::logUserIn'), array(), array(array('text', '/log')), array(), array()),
        'logout' => array(array(), array('_controller' => 'App\\Controller\\LoginController::logout'), array(), array(array('text', '/logout')), array(), array()),
        'index' => array(array(), array('_controller' => 'App\\Controller\\ModeratorController::index'), array(), array(array('text', '/moderator')), array(), array()),
        'rikiuoti' => array(array(), array('_controller' => 'App\\Controller\\ModeratorController::rikiuoti'), array(), array(array('text', '/moderator/rikiuoti')), array(), array()),
        'filtruoti' => array(array(), array('_controller' => 'App\\Controller\\ModeratorController::fitruoti'), array(), array(array('text', '/moderator/filtruoti')), array(), array()),
        'profile' => array(array('id'), array('_controller' => 'App\\Controller\\ProfileController::index'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/profile')), array(), array()),
        'edit_profile' => array(array(), array('_controller' => 'App\\Controller\\ProfileController::edit'), array(), array(array('text', '/profile_edit')), array(), array()),
        'edit_profile_proc' => array(array(), array('_controller' => 'App\\Controller\\ProfileController::editProc'), array(), array(array('text', '/profile_edit_proc')), array(), array()),
        'registration' => array(array(), array('_controller' => 'App\\Controller\\RegistrationController::index'), array(), array(array('text', '/registration')), array(), array()),
        'register' => array(array(), array('_controller' => 'App\\Controller\\RegistrationController::register'), array(), array(array('text', '/register')), array(), array()),
        'remember_pass' => array(array(), array('_controller' => 'App\\Controller\\RememberPassController::index'), array(), array(array('text', '/remember_pass')), array(), array()),
        'remember_pass_proc' => array(array(), array('_controller' => 'App\\Controller\\RememberPassController::proc'), array(), array(array('text', '/remember_pass_proc')), array(), array()),
        'skelbimai' => array(array(), array('_controller' => 'App\\Controller\\SkelbimaiController::index'), array(), array(array('text', '/skelbimai')), array(), array()),
        'newskelbimas' => array(array(), array('_controller' => 'App\\Controller\\SkelbimaiController::new'), array(), array(array('text', '/newskelbimas')), array(), array()),
        'newskelbimasproc' => array(array(), array('_controller' => 'App\\Controller\\SkelbimaiController::newproc'), array(), array(array('text', '/newskelbimasproc')), array(), array()),
        'editskelbimas' => array(array(), array('_controller' => 'App\\Controller\\SkelbimaiController::edit'), array(), array(array('text', '/skelbimai/editskelbimas')), array(), array()),
        'editskelbimasproc' => array(array(), array('_controller' => 'App\\Controller\\SkelbimaiController::edit_proc'), array(), array(array('text', '/skelbimai/editskelbimasproc')), array(), array()),
        'removeskelbimas' => array(array(), array('_controller' => 'App\\Controller\\SkelbimaiController::remove'), array(), array(array('text', '/skelbimai/removeskelbimas')), array(), array()),
        'skelbimai_home' => array(array(), array('_controller' => 'App\\Controller\\SkelbimaiHomeController::index'), array(), array(array('text', '/skelbimai/home')), array(), array()),
        '_twig_error_test' => array(array('code', '_format'), array('_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'), array('code' => '\\d+'), array(array('variable', '.', '[^/]++', '_format'), array('variable', '/', '\\d+', 'code'), array('text', '/_error')), array(), array()),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        $locale = $parameters['_locale']
            ?? $this->context->getParameter('_locale')
            ?: $this->defaultLocale;

        if (null !== $locale && (self::$declaredRoutes[$name.'.'.$locale][1]['_canonical_route'] ?? null) === $name && null !== $name) {
            unset($parameters['_locale']);
            $name .= '.'.$locale;
        } elseif (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
