<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes = array(
        'project_homepage' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'projectBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/hello',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'project_list' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'projectBundle\\Controller\\DefaultController::listProjectAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/projets',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Projet_inter' => array (  0 =>   array (    0 => 'idprojet',  ),  1 =>   array (    '_controller' => 'projectBundle\\Controller\\DefaultController::ProjetinterAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '=',      2 => '[^/]++',      3 => 'idprojet',    ),    1 =>     array (      0 => 'text',      1 => '/projet/intervenant/idprojet',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Projet_interCl' => array (  0 =>   array (    0 => 'idprojet',  ),  1 =>   array (    '_controller' => 'projectBundle\\Controller\\DefaultController::ProjetinterClAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '=',      2 => '[^/]++',      3 => 'idprojet',    ),    1 =>     array (      0 => 'text',      1 => '/projet/intervenant/ajouter/intercl/idprojet',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Projet_interCap' => array (  0 =>   array (    0 => 'idprojet',  ),  1 =>   array (    '_controller' => 'projectBundle\\Controller\\DefaultController::ProjetinterCapAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '=',      2 => '[^/]++',      3 => 'idprojet',    ),    1 =>     array (      0 => 'text',      1 => '/projet/intervenant/ajouter/intercap/idprojet',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Besoin_list' => array (  0 =>   array (    0 => 'idprojet',  ),  1 =>   array (    '_controller' => 'projectBundle\\Controller\\DefaultController::listBesoinAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '=',      2 => '[^/]++',      3 => 'idprojet',    ),    1 =>     array (      0 => 'text',      1 => '/projet/besoin/projet',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Besoin_add' => array (  0 =>   array (    0 => 'idprojet',  ),  1 =>   array (    '_controller' => 'projectBundle\\Controller\\DefaultController::addBesoinAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '=',      2 => '[^/]++',      3 => 'idprojet',    ),    1 =>     array (      0 => 'text',      1 => '/projet/besoin/ajouter/projet',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Vbesoin_add' => array (  0 =>   array (    0 => 'idprojet',    1 => 'idbesoin',  ),  1 =>   array (    '_controller' => 'projectBundle\\Controller\\DefaultController::addVersionBesoinAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '=',      2 => '[^/]++',      3 => 'idbesoin',    ),    1 =>     array (      0 => 'text',      1 => '/b',    ),    2 =>     array (      0 => 'variable',      1 => '=',      2 => '[^/]++',      3 => 'idprojet',    ),    3 =>     array (      0 => 'text',      1 => '/projet/besoin/version/ajouter/projet',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Doc_add' => array (  0 =>   array (    0 => 'idprojet',    1 => 'vBesoin',  ),  1 =>   array (    '_controller' => 'projectBundle\\Controller\\DefaultController::uploadAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '=',      2 => '[^/]++',      3 => 'vBesoin',    ),    1 =>     array (      0 => 'text',      1 => '/vBesoin',    ),    2 =>     array (      0 => 'variable',      1 => '=',      2 => '[^/]++',      3 => 'idprojet',    ),    3 =>     array (      0 => 'text',      1 => '/projet/besoin/version/doc/projet',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Exigence_add' => array (  0 =>   array (    0 => 'idprojet',    1 => 'vBesoin',  ),  1 =>   array (    '_controller' => 'projectBundle\\Controller\\DefaultController::addExigenceAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '=',      2 => '[^/]++',      3 => 'vBesoin',    ),    1 =>     array (      0 => 'text',      1 => '/vBesoin',    ),    2 =>     array (      0 => 'variable',      1 => '=',      2 => '[^/]++',      3 => 'idprojet',    ),    3 =>     array (      0 => 'text',      1 => '/projet/exigence/ajouter/projet',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Exigence_list' => array (  0 =>   array (    0 => 'idprojet',    1 => 'vBesoin',  ),  1 =>   array (    '_controller' => 'projectBundle\\Controller\\DefaultController::listExigenceAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '=',      2 => '[^/]++',      3 => 'vBesoin',    ),    1 =>     array (      0 => 'text',      1 => '/vBesoin',    ),    2 =>     array (      0 => 'variable',      1 => '=',      2 => '[^/]++',      3 => 'idprojet',    ),    3 =>     array (      0 => 'text',      1 => '/projet/exigence/projet',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'projet_add' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'projectBundle\\Controller\\DefaultController::addProjectAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/projet/ajouter',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'projet_archive' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'projectBundle\\Controller\\DefaultController::achiverProjetAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/projet/archiver',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'VExigence_add' => array (  0 =>   array (    0 => 'idprojet',    1 => 'vBesoin',    2 => 'idExig',  ),  1 =>   array (    '_controller' => 'projectBundle\\Controller\\DefaultController::addVexigenceAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '=',      2 => '[^/]++',      3 => 'idExig',    ),    1 =>     array (      0 => 'text',      1 => '/idExig',    ),    2 =>     array (      0 => 'variable',      1 => '=',      2 => '[^/]++',      3 => 'vBesoin',    ),    3 =>     array (      0 => 'text',      1 => '/vBesoin',    ),    4 =>     array (      0 => 'variable',      1 => '=',      2 => '[^/]++',      3 => 'idprojet',    ),    5 =>     array (      0 => 'text',      1 => '/projet/exigence/version/ajouter/projet',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Client_add' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'projectBundle\\Controller\\DefaultController::addClientAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/projet/client/ajouter',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Client_list' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'projectBundle\\Controller\\DefaultController::listClientAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/projet/client/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'profile_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'profileBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/dashbord',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'profile_voir' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'profileBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'userBundle\\Controller\\UserController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_login_check' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'userBundle\\Controller\\UserController::logoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_dashboard' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'userBundle\\Controller\\UserController::dashboardAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/dashboard',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_table' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'userBundle\\Controller\\UserController::tableAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/dashboard/table',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_gestion' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'userBundle\\Controller\\UserController::listAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/utilisateur',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_add' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'userBundle\\Controller\\UserController::addAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/utilisateur/ajouter',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/app/example',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
