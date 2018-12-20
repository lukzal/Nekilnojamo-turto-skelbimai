<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = $allowSchemes = array();
        if ($ret = $this->doMatch($pathinfo, $allow, $allowSchemes)) {
            return $ret;
        }
        if ($allow) {
            throw new MethodNotAllowedException(array_keys($allow));
        }
        if (!in_array($this->context->getMethod(), array('HEAD', 'GET'), true)) {
            // no-op
        } elseif ($allowSchemes) {
            redirect_scheme:
            $scheme = $this->context->getScheme();
            $this->context->setScheme(key($allowSchemes));
            try {
                if ($ret = $this->doMatch($pathinfo)) {
                    return $this->redirect($pathinfo, $ret['_route'], $this->context->getScheme()) + $ret;
                }
            } finally {
                $this->context->setScheme($scheme);
            }
        } elseif ('/' !== $pathinfo) {
            $pathinfo = '/' !== $pathinfo[-1] ? $pathinfo.'/' : substr($pathinfo, 0, -1);
            if ($ret = $this->doMatch($pathinfo, $allow, $allowSchemes)) {
                return $this->redirect($pathinfo, $ret['_route']) + $ret;
            }
            if ($allowSchemes) {
                goto redirect_scheme;
            }
        }

        throw new ResourceNotFoundException();
    }

    private function doMatch(string $rawPathinfo, array &$allow = array(), array &$allowSchemes = array()): ?array
    {
        $allow = $allowSchemes = array();
        $pathinfo = rawurldecode($rawPathinfo) ?: '/';
        $context = $this->context;
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        switch ($trimmedPathinfo = '/' !== $pathinfo && '/' === $pathinfo[-1] ? substr($pathinfo, 0, -1) : $pathinfo) {
            default:
                $routes = array(
                    '/admin' => array(array('_route' => 'admin_panel', '_controller' => 'App\\Controller\\AdminPanelController::index'), null, null, null, false),
                    '/admin/users' => array(array('_route' => 'admin_panel_users', '_controller' => 'App\\Controller\\AdminPanelController::users'), null, null, null, false),
                    '/admin/delete_user' => array(array('_route' => 'delete_user', '_controller' => 'App\\Controller\\AdminPanelController::delete'), null, null, null, false),
                    '/admin/ban_user' => array(array('_route' => 'ban_user', '_controller' => 'App\\Controller\\AdminPanelController::ban'), null, null, null, false),
                    '/admin/user_type' => array(array('_route' => 'user_type', '_controller' => 'App\\Controller\\AdminPanelController::changeType'), null, null, null, false),
                    '/comment/new' => array(array('_route' => 'comment', '_controller' => 'App\\Controller\\CommentController::index'), null, null, null, false),
                    '/comment/edit' => array(array('_route' => 'edit_com', '_controller' => 'App\\Controller\\CommentController::edit'), null, null, null, false),
                    '/contact' => array(array('_route' => 'contact', '_controller' => 'App\\Controller\\ContactController::index'), null, null, null, false),
                    '/contracts' => array(array('_route' => 'contracts', '_controller' => 'App\\Controller\\ContractController::index'), null, null, null, false),
                    '/contracts/dalete' => array(array('_route' => 'delete_sutartis', '_controller' => 'App\\Controller\\ContractController::dalete'), null, null, null, false),
                    '/contracts/siusti' => array(array('_route' => 'siusti_kopija', '_controller' => 'App\\Controller\\ContractController::siusti'), null, null, null, false),
                    '/contracts/siusti_proc' => array(array('_route' => 'send_email_proc', '_controller' => 'App\\Controller\\ContractController::siusti_proc'), null, null, null, false),
                    '/contracts/sign' => array(array('_route' => 'sign_contracts', '_controller' => 'App\\Controller\\ContractController::sign'), null, null, null, false),
                    '/contracts/sign_porc' => array(array('_route' => 'sign_contracts_proc', '_controller' => 'App\\Controller\\ContractController::sign_proc'), null, null, null, false),
                    '/contracts/edit' => array(array('_route' => 'edit_contracts', '_controller' => 'App\\Controller\\ContractController::edit'), null, null, null, false),
                    '/contracts/edit_contracts_proc' => array(array('_route' => 'edit_contracts_proc', '_controller' => 'App\\Controller\\ContractController::edit_proc'), null, null, null, false),
                    '/' => array(array('_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'), null, null, null, false),
                    '/login' => array(array('_route' => 'login', '_controller' => 'App\\Controller\\LoginController::index'), null, null, null, false),
                    '/log' => array(array('_route' => 'log', '_controller' => 'App\\Controller\\LoginController::logUserIn'), null, null, null, false),
                    '/logout' => array(array('_route' => 'logout', '_controller' => 'App\\Controller\\LoginController::logout'), null, null, null, false),
                    '/moderator' => array(array('_route' => 'index', '_controller' => 'App\\Controller\\ModeratorController::index'), null, null, null, false),
                    '/moderator/rikiuoti' => array(array('_route' => 'rikiuoti', '_controller' => 'App\\Controller\\ModeratorController::rikiuoti'), null, null, null, false),
                    '/moderator/filtruoti' => array(array('_route' => 'filtruoti', '_controller' => 'App\\Controller\\ModeratorController::fitruoti'), null, null, null, false),
                    '/profile_edit' => array(array('_route' => 'edit_profile', '_controller' => 'App\\Controller\\ProfileController::edit'), null, null, null, false),
                    '/profile_edit_proc' => array(array('_route' => 'edit_profile_proc', '_controller' => 'App\\Controller\\ProfileController::editProc'), null, null, null, false),
                    '/registration' => array(array('_route' => 'registration', '_controller' => 'App\\Controller\\RegistrationController::index'), null, null, null, false),
                    '/register' => array(array('_route' => 'register', '_controller' => 'App\\Controller\\RegistrationController::register'), null, null, null, false),
                    '/remember_pass' => array(array('_route' => 'remember_pass', '_controller' => 'App\\Controller\\RememberPassController::index'), null, null, null, false),
                    '/remember_pass_proc' => array(array('_route' => 'remember_pass_proc', '_controller' => 'App\\Controller\\RememberPassController::proc'), null, null, null, false),
                    '/skelbimai' => array(array('_route' => 'skelbimai', '_controller' => 'App\\Controller\\SkelbimaiController::index'), null, null, null, false),
                    '/newskelbimas' => array(array('_route' => 'newskelbimas', '_controller' => 'App\\Controller\\SkelbimaiController::new'), null, null, null, false),
                    '/newskelbimasproc' => array(array('_route' => 'newskelbimasproc', '_controller' => 'App\\Controller\\SkelbimaiController::newproc'), null, null, null, false),
                    '/skelbimai/editskelbimas' => array(array('_route' => 'editskelbimas', '_controller' => 'App\\Controller\\SkelbimaiController::edit'), null, null, null, false),
                    '/skelbimai/editskelbimasproc' => array(array('_route' => 'editskelbimasproc', '_controller' => 'App\\Controller\\SkelbimaiController::edit_proc'), null, null, null, false),
                    '/skelbimai/removeskelbimas' => array(array('_route' => 'removeskelbimas', '_controller' => 'App\\Controller\\SkelbimaiController::remove'), null, null, null, false),
                    '/skelbimai/home' => array(array('_route' => 'skelbimai_home', '_controller' => 'App\\Controller\\SkelbimaiHomeController::index'), null, null, null, false),
                );
    
                if (!isset($routes[$trimmedPathinfo])) {
                    break;
                }
                list($ret, $requiredHost, $requiredMethods, $requiredSchemes, $hasTrailingSlash) = $routes[$trimmedPathinfo];
    
                if ('/' !== $pathinfo && $hasTrailingSlash !== ('/' === $pathinfo[-1])) {
                    return null;
                }
    
                $hasRequiredScheme = !$requiredSchemes || isset($requiredSchemes[$context->getScheme()]);
                if ($requiredMethods && !isset($requiredMethods[$canonicalMethod]) && !isset($requiredMethods[$requestMethod])) {
                    if ($hasRequiredScheme) {
                        $allow += $requiredMethods;
                    }
                    break;
                }
                if (!$hasRequiredScheme) {
                    $allowSchemes += $requiredSchemes;
                    break;
                }
    
                return $ret;
        }

        $matchedPathinfo = $pathinfo;
        $regexList = array(
            0 => '{^(?'
                    .'|/profile/([^/]++)(*:24)'
                    .'|/_error/(\\d+)(?:\\.([^/]++))?(*:59)'
                .')(?:/?)$}sD',
        );

        foreach ($regexList as $offset => $regex) {
            while (preg_match($regex, $matchedPathinfo, $matches)) {
                switch ($m = (int) $matches['MARK']) {
                    default:
                        $routes = array(
                            24 => array(array('_route' => 'profile', '_controller' => 'App\\Controller\\ProfileController::index'), array('id'), null, null, false),
                            59 => array(array('_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'), array('code', '_format'), null, null, false),
                        );
            
                        list($ret, $vars, $requiredMethods, $requiredSchemes, $hasTrailingSlash) = $routes[$m];
            
                        if ('/' !== $pathinfo && $hasTrailingSlash !== ('/' === $pathinfo[-1])) {
                            return null;
                        }
            
                        foreach ($vars as $i => $v) {
                            if (isset($matches[1 + $i])) {
                                $ret[$v] = $matches[1 + $i];
                            }
                        }
            
                        $hasRequiredScheme = !$requiredSchemes || isset($requiredSchemes[$context->getScheme()]);
                        if ($requiredMethods && !isset($requiredMethods[$canonicalMethod]) && !isset($requiredMethods[$requestMethod])) {
                            if ($hasRequiredScheme) {
                                $allow += $requiredMethods;
                            }
                            break;
                        }
                        if (!$hasRequiredScheme) {
                            $allowSchemes += $requiredSchemes;
                            break;
                        }
            
                        return $ret;
                }

                if (59 === $m) {
                    break;
                }
                $regex = substr_replace($regex, 'F', $m - $offset, 1 + strlen($m));
                $offset += strlen($m);
            }
        }
        if ('/' === $pathinfo && !$allow && !$allowSchemes) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        return null;
    }
}
