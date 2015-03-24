<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // project_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'project_homepage')), array (  '_controller' => 'projectBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/projet')) {
            // project_list
            if ($pathinfo === '/projets') {
                return array (  '_controller' => 'projectBundle\\Controller\\DefaultController::listProjectAction',  '_route' => 'project_list',);
            }

            if (0 === strpos($pathinfo, '/projet/intervenant')) {
                // Projet_inter
                if (0 === strpos($pathinfo, '/projet/intervenant/idprojet') && preg_match('#^/projet/intervenant/idprojet\\=(?P<idprojet>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'Projet_inter')), array (  '_controller' => 'projectBundle\\Controller\\DefaultController::ProjetinterAction',));
                }

                if (0 === strpos($pathinfo, '/projet/intervenant/ajouter/interc')) {
                    // Projet_interCl
                    if (0 === strpos($pathinfo, '/projet/intervenant/ajouter/intercl/idprojet') && preg_match('#^/projet/intervenant/ajouter/intercl/idprojet\\=(?P<idprojet>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'Projet_interCl')), array (  '_controller' => 'projectBundle\\Controller\\DefaultController::ProjetinterClAction',));
                    }

                    // Projet_interCap
                    if (0 === strpos($pathinfo, '/projet/intervenant/ajouter/intercap/idprojet') && preg_match('#^/projet/intervenant/ajouter/intercap/idprojet\\=(?P<idprojet>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'Projet_interCap')), array (  '_controller' => 'projectBundle\\Controller\\DefaultController::ProjetinterCapAction',));
                    }

                }

            }

            if (0 === strpos($pathinfo, '/projet/besoin')) {
                // Besoin_list
                if (0 === strpos($pathinfo, '/projet/besoin/projet') && preg_match('#^/projet/besoin/projet\\=(?P<idprojet>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'Besoin_list')), array (  '_controller' => 'projectBundle\\Controller\\DefaultController::listBesoinAction',));
                }

                // Besoin_add
                if (0 === strpos($pathinfo, '/projet/besoin/ajouter/projet') && preg_match('#^/projet/besoin/ajouter/projet\\=(?P<idprojet>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'Besoin_add')), array (  '_controller' => 'projectBundle\\Controller\\DefaultController::addBesoinAction',));
                }

                if (0 === strpos($pathinfo, '/projet/besoin/version')) {
                    // Vbesoin_add
                    if (0 === strpos($pathinfo, '/projet/besoin/version/ajouter/projet') && preg_match('#^/projet/besoin/version/ajouter/projet\\=(?P<idprojet>[^/]++)/b\\=(?P<idbesoin>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'Vbesoin_add')), array (  '_controller' => 'projectBundle\\Controller\\DefaultController::addVersionBesoinAction',));
                    }

                    // Doc_add
                    if (0 === strpos($pathinfo, '/projet/besoin/version/doc/projet') && preg_match('#^/projet/besoin/version/doc/projet\\=(?P<idprojet>[^/]++)/vBesoin\\=(?P<vBesoin>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'Doc_add')), array (  '_controller' => 'projectBundle\\Controller\\DefaultController::uploadAction',));
                    }

                }

            }

            if (0 === strpos($pathinfo, '/projet/exigence')) {
                // Exigence_add
                if (0 === strpos($pathinfo, '/projet/exigence/ajouter/projet') && preg_match('#^/projet/exigence/ajouter/projet\\=(?P<idprojet>[^/]++)/vBesoin\\=(?P<vBesoin>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'Exigence_add')), array (  '_controller' => 'projectBundle\\Controller\\DefaultController::addExigenceAction',));
                }

                // Exigence_list
                if (0 === strpos($pathinfo, '/projet/exigence/projet') && preg_match('#^/projet/exigence/projet\\=(?P<idprojet>[^/]++)/vBesoin\\=(?P<vBesoin>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'Exigence_list')), array (  '_controller' => 'projectBundle\\Controller\\DefaultController::listExigenceAction',));
                }

            }

            if (0 === strpos($pathinfo, '/projet/a')) {
                // projet_add
                if ($pathinfo === '/projet/ajouter') {
                    return array (  '_controller' => 'projectBundle\\Controller\\DefaultController::addProjectAction',  '_route' => 'projet_add',);
                }

                // projet_archive
                if ($pathinfo === '/projet/archiver') {
                    return array (  '_controller' => 'projectBundle\\Controller\\DefaultController::achiverProjetAction',  '_route' => 'projet_archive',);
                }

            }

            // VExigence_add
            if (0 === strpos($pathinfo, '/projet/exigence/version/ajouter/projet') && preg_match('#^/projet/exigence/version/ajouter/projet\\=(?P<idprojet>[^/]++)/vBesoin\\=(?P<vBesoin>[^/]++)/idExig\\=(?P<idExig>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'VExigence_add')), array (  '_controller' => 'projectBundle\\Controller\\DefaultController::addVexigenceAction',));
            }

            if (0 === strpos($pathinfo, '/projet/client')) {
                // Client_add
                if ($pathinfo === '/projet/client/ajouter') {
                    return array (  '_controller' => 'projectBundle\\Controller\\DefaultController::addClientAction',  '_route' => 'Client_add',);
                }

                // Client_list
                if (rtrim($pathinfo, '/') === '/projet/client') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'Client_list');
                    }

                    return array (  '_controller' => 'projectBundle\\Controller\\DefaultController::listClientAction',  '_route' => 'Client_list',);
                }

            }

        }

        // profile_homepage
        if ($pathinfo === '/dashbord') {
            return array (  '_controller' => 'profileBundle\\Controller\\DefaultController::indexAction',  '_route' => 'profile_homepage',);
        }

        // profile_voir
        if ($pathinfo === '/profile') {
            return array (  '_controller' => 'profileBundle\\Controller\\DefaultController::indexAction',  '_route' => 'profile_voir',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // user_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'userBundle\\Controller\\UserController::loginAction',  '_route' => 'user_login',);
                }

                // user_login_check
                if ($pathinfo === '/login_check') {
                    return array('_route' => 'user_login_check');
                }

            }

            // user_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'userBundle\\Controller\\UserController::logoutAction',  '_route' => 'user_logout',);
            }

        }

        if (0 === strpos($pathinfo, '/dashboard')) {
            // user_dashboard
            if ($pathinfo === '/dashboard') {
                return array (  '_controller' => 'userBundle\\Controller\\UserController::dashboardAction',  '_route' => 'user_dashboard',);
            }

            // user_table
            if ($pathinfo === '/dashboard/table') {
                return array (  '_controller' => 'userBundle\\Controller\\UserController::tableAction',  '_route' => 'user_table',);
            }

        }

        if (0 === strpos($pathinfo, '/utilisateur')) {
            // user_gestion
            if ($pathinfo === '/utilisateur') {
                return array (  '_controller' => 'userBundle\\Controller\\UserController::listAction',  '_route' => 'user_gestion',);
            }

            // user_add
            if ($pathinfo === '/utilisateur/ajouter') {
                return array (  '_controller' => 'userBundle\\Controller\\UserController::addAction',  '_route' => 'user_add',);
            }

        }

        // homepage
        if ($pathinfo === '/app/example') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
