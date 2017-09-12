<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/images/523d556')) {
            // _assetic_523d556
            if ($pathinfo === '/images/523d556.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '523d556',  'pos' => NULL,  '_format' => 'jpg',  '_route' => '_assetic_523d556',);
            }

            // _assetic_523d556_0
            if ($pathinfo === '/images/523d556_index_1.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '523d556',  'pos' => 0,  '_format' => 'jpg',  '_route' => '_assetic_523d556_0',);
            }

        }

        if (0 === strpos($pathinfo, '/css')) {
            if (0 === strpos($pathinfo, '/css/3')) {
                if (0 === strpos($pathinfo, '/css/3e7b5a2')) {
                    // _assetic_3e7b5a2
                    if ($pathinfo === '/css/3e7b5a2.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '3e7b5a2',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_3e7b5a2',);
                    }

                    if (0 === strpos($pathinfo, '/css/3e7b5a2_part_1_')) {
                        // _assetic_3e7b5a2_0
                        if ($pathinfo === '/css/3e7b5a2_part_1_dashboard_1.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '3e7b5a2',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_3e7b5a2_0',);
                        }

                        // _assetic_3e7b5a2_1
                        if ($pathinfo === '/css/3e7b5a2_part_1_index_2.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '3e7b5a2',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_3e7b5a2_1',);
                        }

                    }

                }

                if (0 === strpos($pathinfo, '/css/3a78334')) {
                    // _assetic_3a78334
                    if ($pathinfo === '/css/3a78334.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '3a78334',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_3a78334',);
                    }

                    if (0 === strpos($pathinfo, '/css/3a78334_part_1_bootstrap')) {
                        if (0 === strpos($pathinfo, '/css/3a78334_part_1_bootstrap-theme')) {
                            // _assetic_3a78334_0
                            if ($pathinfo === '/css/3a78334_part_1_bootstrap-theme_1.css') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '3a78334',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_3a78334_0',);
                            }

                            if (0 === strpos($pathinfo, '/css/3a78334_part_1_bootstrap-theme.')) {
                                // _assetic_3a78334_1
                                if ($pathinfo === '/css/3a78334_part_1_bootstrap-theme.css_2.css') {
                                    return array (  '_controller' => 'assetic.controller:render',  'name' => '3a78334',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_3a78334_1',);
                                }

                                if (0 === strpos($pathinfo, '/css/3a78334_part_1_bootstrap-theme.min')) {
                                    // _assetic_3a78334_2
                                    if ($pathinfo === '/css/3a78334_part_1_bootstrap-theme.min_3.css') {
                                        return array (  '_controller' => 'assetic.controller:render',  'name' => '3a78334',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_3a78334_2',);
                                    }

                                    // _assetic_3a78334_3
                                    if ($pathinfo === '/css/3a78334_part_1_bootstrap-theme.min.css_4.css') {
                                        return array (  '_controller' => 'assetic.controller:render',  'name' => '3a78334',  'pos' => 3,  '_format' => 'css',  '_route' => '_assetic_3a78334_3',);
                                    }

                                }

                            }

                        }

                        // _assetic_3a78334_4
                        if ($pathinfo === '/css/3a78334_part_1_bootstrap_5.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '3a78334',  'pos' => 4,  '_format' => 'css',  '_route' => '_assetic_3a78334_4',);
                        }

                        if (0 === strpos($pathinfo, '/css/3a78334_part_1_bootstrap.')) {
                            // _assetic_3a78334_5
                            if ($pathinfo === '/css/3a78334_part_1_bootstrap.css_6.css') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '3a78334',  'pos' => 5,  '_format' => 'css',  '_route' => '_assetic_3a78334_5',);
                            }

                            if (0 === strpos($pathinfo, '/css/3a78334_part_1_bootstrap.min')) {
                                // _assetic_3a78334_6
                                if ($pathinfo === '/css/3a78334_part_1_bootstrap.min_7.css') {
                                    return array (  '_controller' => 'assetic.controller:render',  'name' => '3a78334',  'pos' => 6,  '_format' => 'css',  '_route' => '_assetic_3a78334_6',);
                                }

                                // _assetic_3a78334_7
                                if ($pathinfo === '/css/3a78334_part_1_bootstrap.min.css_8.css') {
                                    return array (  '_controller' => 'assetic.controller:render',  'name' => '3a78334',  'pos' => 7,  '_format' => 'css',  '_route' => '_assetic_3a78334_7',);
                                }

                            }

                        }

                    }

                }

            }

            if (0 === strpos($pathinfo, '/css/992eca5')) {
                // _assetic_992eca5
                if ($pathinfo === '/css/992eca5.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '992eca5',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_992eca5',);
                }

                // _assetic_992eca5_0
                if ($pathinfo === '/css/992eca5_holder.min_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '992eca5',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_992eca5_0',);
                }

            }

        }

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

        if (0 === strpos($pathinfo, '/pedido')) {
            // searchPedido
            if ($pathinfo === '/pedido/search') {
                return array (  '_controller' => 'AppBundle\\Controller\\PedidoController::searchAction',  '_locale' => 'es',  '_route' => 'searchPedido',);
            }

            // editPedido
            if (0 === strpos($pathinfo, '/pedido/edit') && preg_match('#^/pedido/edit/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'editPedido')), array (  '_controller' => 'AppBundle\\Controller\\PedidoController::editAction',  '_locale' => 'es',));
            }

            // showPedido
            if (0 === strpos($pathinfo, '/pedido/show') && preg_match('#^/pedido/show/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'showPedido')), array (  '_controller' => 'AppBundle\\Controller\\PedidoController::showAction',  '_locale' => 'es',));
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
