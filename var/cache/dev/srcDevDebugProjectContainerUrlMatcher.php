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
                    '/new_add' => array(array('_route' => 'new_add', '_controller' => 'App\\Controller\\AddController::new'), null, null, null, false),
                    '/edit_add' => array(array('_route' => 'edit_add', '_controller' => 'App\\Controller\\AddController::edit'), null, null, null, false),
                    '/user_ads' => array(array('_route' => 'user_ads', '_controller' => 'App\\Controller\\AddController::userAdds'), null, null, null, false),
                    '/admin' => array(array('_route' => 'admin_panel', '_controller' => 'App\\Controller\\AdminPanelController::index'), null, null, null, false),
                    '/admin/users' => array(array('_route' => 'admin_panel_users', '_controller' => 'App\\Controller\\AdminPanelController::users'), null, null, null, false),
                    '/comment/new' => array(array('_route' => 'comment', '_controller' => 'App\\Controller\\CommentController::index'), null, null, null, false),
                    '/comment/edit' => array(array('_route' => 'edit_com', '_controller' => 'App\\Controller\\CommentController::edit'), null, null, null, false),
                    '/contact' => array(array('_route' => 'contact', '_controller' => 'App\\Controller\\ContactController::index'), null, null, null, false),
                    '/contracts' => array(array('_route' => 'contracts', '_controller' => 'App\\Controller\\ContractController::index'), null, null, null, false),
                    '/contracts/sign' => array(array('_route' => 'sign_contracts', '_controller' => 'App\\Controller\\ContractController::sign'), null, null, null, false),
                    '/contracts/edit' => array(array('_route' => 'edit_contracts', '_controller' => 'App\\Controller\\ContractController::edit'), null, null, null, false),
                    '/' => array(array('_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'), null, null, null, false),
                    '/login' => array(array('_route' => 'login', '_controller' => 'App\\Controller\\LoginController::index'), null, null, null, false),
                    '/log' => array(array('_route' => 'log', '_controller' => 'App\\Controller\\LoginController::logUserIn'), null, null, null, false),
                    '/logout' => array(array('_route' => 'logout', '_controller' => 'App\\Controller\\LoginController::logout'), null, null, null, false),
                    '/profile' => array(array('_route' => 'profile', '_controller' => 'App\\Controller\\ProfileController::index'), null, null, null, false),
                    '/profile/edit' => array(array('_route' => 'edit_profile', '_controller' => 'App\\Controller\\ProfileController::edit'), null, null, null, false),
                    '/registration' => array(array('_route' => 'registration', '_controller' => 'App\\Controller\\RegistrationController::index'), null, null, null, false),
                    '/register' => array(array('_route' => 'register', '_controller' => 'App\\Controller\\RegistrationController::register'), null, null, null, false),
                    '/remember_pass' => array(array('_route' => 'remember_pass', '_controller' => 'App\\Controller\\RememberPassController::index'), null, null, null, false),
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
                    .'|/add/([^/]++)(*:20)'
                    .'|/_error/(\\d+)(?:\\.([^/]++))?(*:55)'
                .')(?:/?)$}sD',
        );

        foreach ($regexList as $offset => $regex) {
            while (preg_match($regex, $matchedPathinfo, $matches)) {
                switch ($m = (int) $matches['MARK']) {
                    default:
                        $routes = array(
                            20 => array(array('_route' => 'add', '_controller' => 'App\\Controller\\AddController::index'), array('id'), null, null, false),
                            55 => array(array('_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'), array('code', '_format'), null, null, false),
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

                if (55 === $m) {
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
