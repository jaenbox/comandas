<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        // login
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'login');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            // logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'logout');
            }

            // login_check
            if ($pathinfo === '/login_check') {
                return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login_check',);
            }

        }

        // index
        if ($pathinfo === '/index') {
            return array (  '_controller' => 'AppBundle\\Controller\\InitController::indexAction',  '_locale' => 'es',  '_route' => 'index',);
        }

        if (0 === strpos($pathinfo, '/admin')) {
            // newAdmin
            if ($pathinfo === '/admin/new') {
                return array (  '_controller' => 'AppBundle\\Controller\\AdminController::newAction',  '_locale' => 'es',  '_route' => 'newAdmin',);
            }

            // editAdmin
            if (0 === strpos($pathinfo, '/admin/edit') && preg_match('#^/admin/edit/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'editAdmin')), array (  '_controller' => 'AppBundle\\Controller\\AdminController::editAction',  '_locale' => 'es',));
            }

            // deleteAdmin
            if (0 === strpos($pathinfo, '/admin/delete') && preg_match('#^/admin/delete/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'deleteAdmin')), array (  '_controller' => 'AppBundle\\Controller\\AdminController::deleteAction',  '_locale' => 'es',));
            }

            // showAdmin
            if (0 === strpos($pathinfo, '/admin/show') && preg_match('#^/admin/show/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'showAdmin')), array (  '_controller' => 'AppBundle\\Controller\\AdminController::showAction',  '_locale' => 'es',));
            }

            // listAdmin
            if ($pathinfo === '/admin/list') {
                return array (  '_controller' => 'AppBundle\\Controller\\AdminController::listAction',  '_locale' => 'es',  '_route' => 'listAdmin',);
            }

        }

        if (0 === strpos($pathinfo, '/c')) {
            if (0 === strpos($pathinfo, '/camarero')) {
                // newCamarero
                if ($pathinfo === '/camarero/new') {
                    return array (  '_controller' => 'AppBundle\\Controller\\CamareroController::newAction',  '_locale' => 'es',  '_route' => 'newCamarero',);
                }

                // editCamarero
                if (0 === strpos($pathinfo, '/camarero/edit') && preg_match('#^/camarero/edit/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'editCamarero')), array (  '_controller' => 'AppBundle\\Controller\\CamareroController::editAction',  '_locale' => 'es',));
                }

                // deleteCamarero
                if (0 === strpos($pathinfo, '/camarero/delete') && preg_match('#^/camarero/delete/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'deleteCamarero')), array (  '_controller' => 'AppBundle\\Controller\\CamareroController::deleteAction',  '_locale' => 'es',));
                }

                // showCamarero
                if (0 === strpos($pathinfo, '/camarero/show') && preg_match('#^/camarero/show/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'showCamarero')), array (  '_controller' => 'AppBundle\\Controller\\CamareroController::showAction',  '_locale' => 'es',));
                }

                // listCamarero
                if ($pathinfo === '/camarero/list') {
                    return array (  '_controller' => 'AppBundle\\Controller\\CamareroController::listAction',  '_locale' => 'es',  '_route' => 'listCamarero',);
                }

            }

            // editCocinero
            if (0 === strpos($pathinfo, '/cocinero/edit') && preg_match('#^/cocinero/edit/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'editCocinero')), array (  '_controller' => 'AppBundle\\Controller\\CocineroController::editAction',  '_locale' => 'es',));
            }

        }

        // showCocinero
        if (0 === strpos($pathinfo, '/show') && preg_match('#^/show/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'showCocinero')), array (  '_controller' => 'AppBundle\\Controller\\CocineroController::showAction',  '_locale' => 'es',));
        }

        // listCocinero
        if ($pathinfo === '/cocinero/list') {
            return array (  '_controller' => 'AppBundle\\Controller\\CocineroController::listAction',  '_locale' => 'es',  '_route' => 'listCocinero',);
        }

        if (0 === strpos($pathinfo, '/plato')) {
            // newPlato
            if ($pathinfo === '/plato/new') {
                return array (  '_controller' => 'AppBundle\\Controller\\PlatoController::newAction',  '_locale' => 'es',  '_route' => 'newPlato',);
            }

            // editPlato
            if (0 === strpos($pathinfo, '/plato/edit') && preg_match('#^/plato/edit/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'editPlato')), array (  '_controller' => 'AppBundle\\Controller\\PlatoController::editAction',));
            }

            // deletePlato
            if (0 === strpos($pathinfo, '/plato/delete') && preg_match('#^/plato/delete/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'deletePlato')), array (  '_controller' => 'AppBundle\\Controller\\PlatoController::deleteAction',));
            }

            // showPlato
            if (0 === strpos($pathinfo, '/plato/show') && preg_match('#^/plato/show/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'showPlato')), array (  '_controller' => 'AppBundle\\Controller\\PlatoController::showAction',));
            }

            // listPlato
            if ($pathinfo === '/plato/list') {
                return array (  '_controller' => 'AppBundle\\Controller\\PlatoController::listAction',  '_locale' => 'es',  '_route' => 'listPlato',);
            }

        }

        if (0 === strpos($pathinfo, '/mesa')) {
            // newMesa
            if ($pathinfo === '/mesa/new') {
                return array (  '_controller' => 'AppBundle\\Controller\\MesaController::newAction',  '_locale' => 'es',  '_route' => 'newMesa',);
            }

            // editMesa
            if (0 === strpos($pathinfo, '/mesa/edit') && preg_match('#^/mesa/edit/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'editMesa')), array (  '_controller' => 'AppBundle\\Controller\\MesaController::editAction',));
            }

            // deleteMesa
            if (0 === strpos($pathinfo, '/mesa/delete') && preg_match('#^/mesa/delete/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'deleteMesa')), array (  '_controller' => 'AppBundle\\Controller\\MesaController::deleteAction',));
            }

            // showMesa
            if (0 === strpos($pathinfo, '/mesa/show') && preg_match('#^/mesa/show/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'showMesa')), array (  '_controller' => 'AppBundle\\Controller\\MesaController::showAction',));
            }

            // listMesa
            if ($pathinfo === '/mesa/list') {
                return array (  '_controller' => 'AppBundle\\Controller\\MesaController::listAction',  '_locale' => 'es',  '_route' => 'listMesa',);
            }

        }

        // editComanda
        if (0 === strpos($pathinfo, '/comanda/edit') && preg_match('#^/comanda/edit/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'editComanda')), array (  '_controller' => 'AppBundle\\Controller\\ComandaController::editAction',  '_locale' => 'es',));
        }

        // searchPedido
        if ($pathinfo === '/pedido/search') {
            return array (  '_controller' => 'AppBundle\\Controller\\PedidoController::searchAction',  '_locale' => 'es',  '_route' => 'searchPedido',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
