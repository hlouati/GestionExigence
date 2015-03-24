<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

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
