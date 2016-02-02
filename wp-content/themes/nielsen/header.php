<?php
/**
 * This file belongs to the YIT Framework.
 *
 * This source file is subject to the GNU GENERAL PUBLIC LICENSE (GPL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://www.gnu.org/licenses/gpl-3.0.txt
 */

/**
 * @package    WordPress
 * @subpackage Your Inspiration Themes
 * @author     Your Inspiration Themes Team <info@yithemes.com>
 *
 */

?><!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?> xmlns="http://www.w3.org/1999/xhtml" prefix="og: http://ogp.me/ns# fb: http://www.facebook.com/2008/fbml" >

<!-- START HEAD -->
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <?php if( yit_get_option( 'general-activate-responsive' ) == 'yes' ) : ?>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php endif; ?>

    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="<?php echo YIT_CORE_ASSETS_URL ?>/js/html5shiv.js"></script>
      <script src="<?php echo YIT_CORE_ASSETS_URL ?>/js/respond.min.js"></script>
    <![endif]-->
    <?php wp_head() ?>
</head>
<!-- END HEAD -->

<!-- START BODY -->
<body <?php body_class() ?> id="home">
   
<div id="topbar" class="visible">
  <div class="container">
    <div class="clearfix header-wrapper">
      <div id="topbar-left">
        <div id="yit_text_image-4" class="widget yit_text_image">
          <div class="clearfix widget-wrap" style="margin-bottom: 20px;">
            <div>
              <div class="clearfix widget_image left">
                <i data-font="retinaicon-font" data-name="&#xe292;"
                  data-key="retina-lifestyle-033" data-icon="&#xe292;"></i>
              </div>
              <div class="widget_text left">
                <p>
                  CHÀO MỪNG QUÝ KHÁCH ĐẾN HEDSPI SHOP!
                </p>
              </div>
            </div>
          </div>
        </div>
        <div id="yit_text_image-5" class="widget yit_text_image">
          <div class="clearfix widget-wrap" style="margin-bottom: 20px;">
            <div>
              <div class="clearfix widget_image left">
                <i data-font="retinaicon-font" data-name="&#xe0ab;"
                  data-key="retina-communication-002" data-icon="&#xe0ab;"></i>
              </div>
              <div class="widget_text left">
                <p>HÃY GỌI CHO CHÚNG TÔI: <b style="color:#F50707;">0123456789</b></p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div id="topbar-right">
        <!-- <div id="welcome-menu-login" class="nav">
          <ul id="menu-welcome-login">
            <li class="menu-item login-menu dropdown"><a
              href="http://live.yithemes.com/nielsen/my-account/">Login/Register</a>

              <div class="submenu clearfix">
                <div class="clearfix login-box with_registration">
                  <div id="customer_login">
                    <div class="customer-login-box customer-login-box1">

                      <form method="post" class="login">


                        <div class="form-group">
                          <label for="username">Username or email address <span
                            class="required">*</span></label> <input type="text"
                            class="form-control" name="username" id="username" />
                        </div>

                        <div class="form-group">
                          <label for="password">Password <span
                            class="required">*</span></label> <input class="form-control"
                            type="password" name="password" id="password" />
                        </div>


                        <div class="form-group login-submit">
                          <input type="hidden" id="_wpnonce" name="_wpnonce"
                            value="0b080f2029" /><input type="hidden"
                            name="_wp_http_referer" value="/nielsen/" /> <input
                            type="submit" class="button btn btn-flat-red button-login"
                            name="login" value="Login" />
                          <p class="lost_password">
                            <a
                              href="http://live.yithemes.com/nielsen/my-account/lost-password/">Lost
                              password?</a><br /> New Customer ? <a class="signup"
                              href="http://live.yithemes.com/nielsen/my-account/">Sign
                              up</a>
                          </p>
                          <!-- <label for="rememberme" class="inline">
                                                        <input name="rememberme" type="checkbox" id="rememberme" value="forever" /> Remember me                                                    </label> -->
                        </div>


                        <!--
  wsl_render_auth_widget
  WordPress Social Login 2.2.3.
  http://wordpress.org/plugins/wordpress-social-login/
--> 

                        <style type="text/css">
#wp-social-login-connect-with {
  font-weight: bold
}

#wp-social-login-connect-options {
  padding: 10px
}

#wp-social-login-connect-options a {
  text-decoration: none
}

#wp-social-login-connect-options img {
  border: 0 none
}

.wsl_connect_with_provider {
  
}
</style>

                        <!-- <div class="wp-social-login-widget">

  <div class="wp-social-login-connect-with">Connect with:</div>

  <div class="wp-social-login-provider-list">
            <a rel="nofollow" href="http://live.yithemes.com/nielsen/wp-login.php?action=wordpress_social_authenticate&#038;provider=Facebook&#038;redirect_to=http%3A%2F%2Flive.yithemes.com%2Fnielsen%2F" title="Connect with Facebook" class="with-tooltip wsl_connect_with_provider link_socials">
                <i class="fa fa-facebook"></i>
            </a>
                    <a rel="nofollow" href="http://live.yithemes.com/nielsen/wp-login.php?action=wordpress_social_authenticate&#038;provider=Google&#038;redirect_to=http%3A%2F%2Flive.yithemes.com%2Fnielsen%2F" title="Connect with Google" class="with-tooltip wsl_connect_with_provider link_socials">
                <i class="fa fa-google-plus"></i>
            </a>
                    <a rel="nofollow" href="http://live.yithemes.com/nielsen/wp-login.php?action=wordpress_social_authenticate&#038;provider=Twitter&#038;redirect_to=http%3A%2F%2Flive.yithemes.com%2Fnielsen%2F" title="Connect with Twitter" class="with-tooltip wsl_connect_with_provider link_socials">
                <i class="fa fa-twitter"></i>
            </a>
        
  </div> 

  <div class="wp-social-login-widget-clearing"></div>

</div> -->

                        <!-- wsl_render_auth_widget -->


                      </form>
                    </div>
                  </div>
                </div>

              </div></li>
          </ul>
        </div>
        <!-- <div class="nav whislist_nav">
          <ul>
            <li><a
              href="http://live.yithemes.com/nielsen/my-account/myaccount-wishlist/">My
                Wishlist</a></li>
          </ul>
        </div> -->
        <!-- <div id="lang_sel">
          <ul>
            <li><a href="#" class="lang_sel_sel icl-en"> <span
                class="icl_lang_sel_current">EN</span></a>
              <ul>
                <li class="icl-en"><a href="#"> <span
                    class="icl_lang_sel_native">EN</span>
                </a></li>
                <li class="icl-es"><a href="#"> <span
                    class="icl_lang_sel_native">ES</span>
                </a></li>
                <li class="icl-fr"><a href="#"> <span
                    class="icl_lang_sel_native">FR</span>
                </a></li>
                <li class="icl-it"><a href="#"> <span
                    class="icl_lang_sel_native">IT</span>
                </a></li>
              </ul></li>
          </ul>
        </div> -->

        <!-- <div id="wcml_currency_switcher">
          <ul>
            <li><select class="wcml_currency_switcher"><option
                  value="GBP" selected="selected">&pound;</option>
                <option value="USD">&#36;</option>
                <option value="EUR">&euro;</option></select></li>
          </ul>
        </div> -->
      </div>


    </div>
  </div>
</div>
<!-- END TOPBAR -->

    <?php
    /**
     * @see yit_header
     */
    do_action( 'yit_header' ) ?>