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

        if (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admin/ad')) {
                // _admin_ads
                if ($pathinfo === '/admin/ads') {
                    return array (  '_controller' => 'damainpotepuh\\AdminBundle\\Controller\\AdController::adsAction',  '_route' => '_admin_ads',);
                }

                // _admin_delete_ad
                if (0 === strpos($pathinfo, '/admin/ad/delete') && preg_match('#^/admin/ad/delete/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_admin_delete_ad')), array (  '_controller' => 'damainpotepuh\\AdminBundle\\Controller\\AdController::deleteAdAction',));
                }

                // _admin_add_ad
                if ($pathinfo === '/admin/ad/add') {
                    return array (  'id' => NULL,  '_controller' => 'damainpotepuh\\AdminBundle\\Controller\\AdController::editAdAction',  '_route' => '_admin_add_ad',);
                }

                // _admin_edit_ad
                if (0 === strpos($pathinfo, '/admin/ad/edit') && preg_match('#^/admin/ad/edit(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_admin_edit_ad')), array (  'id' => NULL,  '_controller' => 'damainpotepuh\\AdminBundle\\Controller\\AdController::editAdAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/category')) {
                // _admin_categorys
                if ($pathinfo === '/admin/categorys') {
                    return array (  '_controller' => 'damainpotepuh\\AdminBundle\\Controller\\CategoryController::categorysAction',  '_route' => '_admin_categorys',);
                }

                // _admin_delete_category
                if (0 === strpos($pathinfo, '/admin/category/delete') && preg_match('#^/admin/category/delete/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_admin_delete_category')), array (  '_controller' => 'damainpotepuh\\AdminBundle\\Controller\\CategoryController::deleteCategoryAction',));
                }

            }

            // _admin_delete_subcategory
            if (0 === strpos($pathinfo, '/admin/subcategory/delete') && preg_match('#^/admin/subcategory/delete/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_admin_delete_subcategory')), array (  '_controller' => 'damainpotepuh\\AdminBundle\\Controller\\CategoryController::deleteSubcategoryAction',));
            }

            if (0 === strpos($pathinfo, '/admin/category')) {
                // _admin_add_category
                if ($pathinfo === '/admin/category/add') {
                    return array (  'id' => NULL,  '_controller' => 'damainpotepuh\\AdminBundle\\Controller\\CategoryController::editCategoryAction',  '_route' => '_admin_add_category',);
                }

                // _admin_edit_category
                if (0 === strpos($pathinfo, '/admin/category/edit') && preg_match('#^/admin/category/edit(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_admin_edit_category')), array (  'id' => NULL,  '_controller' => 'damainpotepuh\\AdminBundle\\Controller\\CategoryController::editCategoryAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/subcategory')) {
                // _admin_add_subcategory
                if ($pathinfo === '/admin/subcategory/add') {
                    return array (  'id' => NULL,  '_controller' => 'damainpotepuh\\AdminBundle\\Controller\\CategoryController::editSubcategoryAction',  '_route' => '_admin_add_subcategory',);
                }

                // _admin_edit_subcategory
                if (0 === strpos($pathinfo, '/admin/subcategory/edit') && preg_match('#^/admin/subcategory/edit(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_admin_edit_subcategory')), array (  'id' => NULL,  '_controller' => 'damainpotepuh\\AdminBundle\\Controller\\CategoryController::editSubcategoryAction',));
                }

            }

            // _admin_home
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_admin_home');
                }

                return array (  '_controller' => 'damainpotepuh\\AdminBundle\\Controller\\DefaultController::homeAction',  '_route' => '_admin_home',);
            }

            if (0 === strpos($pathinfo, '/admin/image')) {
                // _admin_images
                if ($pathinfo === '/admin/images') {
                    return array (  '_controller' => 'damainpotepuh\\AdminBundle\\Controller\\ImageController::imagesAction',  '_route' => '_admin_images',);
                }

                // _admin_delete_image
                if (0 === strpos($pathinfo, '/admin/image/delete') && preg_match('#^/admin/image/delete/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_admin_delete_image')), array (  '_controller' => 'damainpotepuh\\AdminBundle\\Controller\\ImageController::deleteImageAction',));
                }

                // _admin_add_image
                if ($pathinfo === '/admin/image/add') {
                    return array (  'id' => NULL,  '_controller' => 'damainpotepuh\\AdminBundle\\Controller\\ImageController::editImageAction',  '_route' => '_admin_add_image',);
                }

                // _admin_edit_image
                if (0 === strpos($pathinfo, '/admin/image/edit') && preg_match('#^/admin/image/edit(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_admin_edit_image')), array (  'id' => NULL,  '_controller' => 'damainpotepuh\\AdminBundle\\Controller\\ImageController::editImageAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/product')) {
                // _admin_products
                if ($pathinfo === '/admin/products') {
                    return array (  '_controller' => 'damainpotepuh\\AdminBundle\\Controller\\ProductController::productsAction',  '_route' => '_admin_products',);
                }

                // _admin_delete_product
                if (0 === strpos($pathinfo, '/admin/product/delete') && preg_match('#^/admin/product/delete/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_admin_delete_product')), array (  '_controller' => 'damainpotepuh\\AdminBundle\\Controller\\ProductController::deleteProductAction',));
                }

                // _admin_add_product
                if ($pathinfo === '/admin/product/add') {
                    return array (  'id' => NULL,  '_controller' => 'damainpotepuh\\AdminBundle\\Controller\\ProductController::editProductAction',  '_route' => '_admin_add_product',);
                }

                // _admin_edit_product
                if (0 === strpos($pathinfo, '/admin/product/edit') && preg_match('#^/admin/product/edit(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_admin_edit_product')), array (  'id' => NULL,  '_controller' => 'damainpotepuh\\AdminBundle\\Controller\\ProductController::editProductAction',));
                }

            }

        }

        // _zmenkarije
        if ($pathinfo === '/zmenkarije') {
            return array (  '_controller' => 'damainpotepuh\\StaticBundle\\Controller\\AdController::AdsAction',  '_route' => '_zmenkarije',);
        }

        if (0 === strpos($pathinfo, '/ad')) {
            // _add_ad
            if ($pathinfo === '/ad/add') {
                return array (  'id' => NULL,  '_controller' => 'damainpotepuh\\StaticBundle\\Controller\\AdController::editAdAction',  '_route' => '_add_ad',);
            }

            // _edit_ad
            if (0 === strpos($pathinfo, '/ad/edit') && preg_match('#^/ad/edit(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_edit_ad')), array (  'id' => NULL,  '_controller' => 'damainpotepuh\\StaticBundle\\Controller\\AdController::editAdAction',));
            }

        }

        // _home
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_home');
            }

            return array (  '_controller' => 'damainpotepuh\\StaticBundle\\Controller\\DefaultController::indexAction',  '_route' => '_home',);
        }

        // _o_nas
        if ($pathinfo === '/o_nas') {
            return array (  '_controller' => 'damainpotepuh\\StaticBundle\\Controller\\DefaultController::aboutAction',  '_route' => '_o_nas',);
        }

        // _galerija
        if ($pathinfo === '/galerija') {
            return array (  '_controller' => 'damainpotepuh\\StaticBundle\\Controller\\DefaultController::galleryAction',  '_route' => '_galerija',);
        }

        // _kontakt
        if ($pathinfo === '/kontakt') {
            return array (  '_controller' => 'damainpotepuh\\StaticBundle\\Controller\\DefaultController::contactAction',  '_route' => '_kontakt',);
        }

        if (0 === strpos($pathinfo, '/artikli')) {
            // _artikli
            if ($pathinfo === '/artikli') {
                return array (  '_controller' => 'damainpotepuh\\StaticBundle\\Controller\\ProductController::productsAction',  '_route' => '_artikli',);
            }

            // _dogs
            if ($pathinfo === '/artikli/psi') {
                return array (  '_controller' => 'damainpotepuh\\StaticBundle\\Controller\\ProductController::dogsAction',  '_route' => '_dogs',);
            }

            // _cats
            if ($pathinfo === '/artikli/mačke') {
                return array (  '_controller' => 'damainpotepuh\\StaticBundle\\Controller\\ProductController::catsAction',  '_route' => '_cats',);
            }

            // _birds
            if ($pathinfo === '/artikli/ptiči') {
                return array (  '_controller' => 'damainpotepuh\\StaticBundle\\Controller\\ProductController::birdsAction',  '_route' => '_birds',);
            }

            // _rodents
            if ($pathinfo === '/artikli/glodalci') {
                return array (  '_controller' => 'damainpotepuh\\StaticBundle\\Controller\\ProductController::rodentsAction',  '_route' => '_rodents',);
            }

            // _fishes
            if ($pathinfo === '/artikli/ribe') {
                return array (  '_controller' => 'damainpotepuh\\StaticBundle\\Controller\\ProductController::fishesAction',  '_route' => '_fishes',);
            }

            // _action_products
            if ($pathinfo === '/artikli/akcijski_izdelki') {
                return array (  '_controller' => 'damainpotepuh\\StaticBundle\\Controller\\ProductController::action_productsAction',  '_route' => '_action_products',);
            }

            // _new_products
            if ($pathinfo === '/artikli/novi_izdelki') {
                return array (  '_controller' => 'damainpotepuh\\StaticBundle\\Controller\\ProductController::new_productsAction',  '_route' => '_new_products',);
            }

            // _fancy
            if ($pathinfo === '/artikli/smensi-fensi') {
                return array (  '_controller' => 'damainpotepuh\\StaticBundle\\Controller\\ProductController::fancyAction',  '_route' => '_fancy',);
            }

            // _product_subcategory
            if (preg_match('#^/artikli/(?P<categoryName>[^/]++)/(?P<subcategoryName>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_product_subcategory')), array (  '_controller' => 'damainpotepuh\\StaticBundle\\Controller\\ProductController::subcategoryAction',));
            }

            // _single_product
            if (preg_match('#^/artikli/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_single_product')), array (  '_controller' => 'damainpotepuh\\StaticBundle\\Controller\\ProductController::singleProductAction',));
            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
