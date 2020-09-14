<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* /Users/bola/Downloads/e-cargo/themes/spotlayer/pages/login.htm */
class __TwigTemplate_1d7a6ecc40d478422a4269b2b6708c953587397095eaacb50ed12e5aff0d6904 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!-- begin:: Page -->
<!DOCTYPE html>
<head>
<link href=\"https://fonts.googleapis.com/css2?family=Yanone+Kaffeesatz&display=swap\" rel=\"stylesheet\">
</head>

 <div class=\"kt-grid kt-grid--ver kt-grid--root kt-page\">
     <div class=\"kt-grid kt-grid--hor kt-grid--root  kt-login kt-login--v5 kt-login--signin\" id=\"kt_login\">
         <div class=\"kt-grid__item kt-grid__item--fluid kt-grid kt-grid--desktop kt-grid--ver-desktop kt-grid--hor-tablet-and-mobile\">

             <div class=\"kt-login__right\">
                 <div class=\"kt-login__wrapper\">
                     <div class=\"kt-login__signin\">
                         <div class=\"kt-login__head\">
                             <div class=\"kt-login__title\">
                                 <!--
                                 <a class=\"kt-login__logo \" href=\"";
        // line 17
        echo url("/");
        echo "\">
                                     <img style=\"height:90px;width:auto\" src=\"";
        // line 18
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "logo", [], "any", false, false, false, 18)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "logo", [], "any", false, false, false, 18), "path", [], "any", false, false, false, 18), "html", null, true);
        } else {
            echo "./admin/media/logos/logo.svg";
        }
        echo "\">
                                 </a>
                                -->
                                 <h3 class=\"kt-margin-t-30\">";
        // line 21
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sign In"]);
        echo "</h3>
                             </div>
                         </div>
                         <div class=\"kt-login__form\">
                             <form class=\"kt-form\" action=\"\">

                                 ";
        $_type = isset($context["type"]) ? $context["type"] : null;        $_message = isset($context["message"]) ? $context["message"] : null;        // line 27
        foreach (Flash::getMessages() as $type => $messages) {
            foreach ($messages as $message) {
                $context["type"] = $type;                $context["message"] = $message;                // line 28
                echo "                                    <div class=\"kt-alert kt-alert--outline alert alert-";
                if ((($context["type"] ?? null) == "error")) {
                    echo "danger";
                } else {
                    echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
                }
                echo " alert-dismissible\" role=\"alert\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"";
                // line 29
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Close"]);
                echo "\"></button>
                                        <span>";
                // line 30
                echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
                echo "</span>
                                    </div>
                                 ";
            }
        }
        $context["type"] = $_type;        $context["message"] = $_message;        // line 33
        echo "                                 <div class=\"form-group\">
                                     <input class=\"form-control\" type=\"text\" placeholder=\"";
        // line 34
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), [($context["loginAttributeLabel"] ?? null)]);
        echo "\" name=\"login\" id=\"userSigninLogin\" autocomplete=\"off\">
                                 </div>
                                 <div class=\"form-group\">
                                     <input class=\"form-control form-control-last\" type=\"Password\" placeholder=\"";
        // line 37
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Password"]);
        echo "\" id=\"userSigninPassword\" name=\"password\">
                                 </div>
                                 <div class=\"row kt-login__extra\">
                                     ";
        // line 40
        if ((($context["rememberLoginMode"] ?? null) == "ask")) {
            // line 41
            echo "                                     <div class=\"col kt-align-left\">
                                         <label class=\"kt-checkbox\">
                                             <input name=\"remember\" type=\"checkbox\" value=\"1\"> ";
            // line 43
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Remember me"]);
            echo "
                                             <span></span>
                                         </label>
                                     </div>
                                     ";
        }
        // line 48
        echo "                                     <div class=\"col kt-align-right \">
                                         <button id=\"kt_login_signin_submit\" class=\"btn btn-brand btn-pill btn-elevate\">";
        // line 49
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sign In"]);
        echo "</button>
                                         <a href=\"javascript:;\" id=\"kt_login_forgot\" class=\"kt-link kt-hidden\">";
        // line 50
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Forget Password ?"]);
        echo "</a>
                                     </div>
                                 </div>
                                 <div class=\"kt-login__actions text-center\">
                  \t\t\t\t\t<span class=\"kt-login__account-msg\">
                  \t\t\t\t\t\t";
        // line 55
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Don't have an account yet ?"]);
        echo "
                  \t\t\t\t\t</span>
                  \t\t\t\t\t&nbsp;&nbsp;
                  \t\t\t\t\t<a href=\"javascript:;\" id=\"kt_login_signup\" class=\"kt-login__account-link\">";
        // line 58
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sign Up!"]);
        echo "</a>
                  \t\t\t\t</div>

                             </form>
                         </div>
                     </div>
\t\t             <div class=\"kt-login__signup\">
                         ";
        // line 65
        if (($context["canRegister"] ?? null)) {
            // line 66
            echo "                             <div class=\"kt-login__head\">
                                 <div class=\"kt-login__title\">
                                     <!--<a class=\"kt-login__logo \" href=\"";
            // line 68
            echo url("/");
            echo "\">
                                         <img style=\"height:90px;width:auto\" src=\"";
            // line 69
            if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "logo", [], "any", false, false, false, 69)) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "logo", [], "any", false, false, false, 69), "path", [], "any", false, false, false, 69), "html", null, true);
            } else {
                echo "./admin/media/logos/logo.svg";
            }
            echo "\">
                                     </a>-->
                                     <img style=\"max-height:500px; max-width: 80%; width:auto;height:auto\" src=\"ecargologo.jpg\">
                                        
                                     <h3 class=\"kt-margin-t-30\">";
            // line 73
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sign Up"]);
            echo "</h3>
             \t\t\t\t\t\t<div class=\"kt-login__desc\">";
            // line 74
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Enter your details to create your account"]);
            echo ":</div>
                                 </div>
                             </div>
                            <form class=\"kt-form\" action=\"\">
        \t\t\t\t\t\t<div class=\"input-group\">
        \t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" id=\"registerName\" placeholder=\"";
            // line 79
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Full Name"]);
            echo "\" name=\"name\" required>
        \t\t\t\t\t\t</div>
        \t\t\t\t\t\t<div class=\"input-group\">
        \t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" placeholder=\"";
            // line 82
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Email"]);
            echo "\" id=\"registerEmail\" name=\"email\" autocomplete=\"off\" required>
        \t\t\t\t\t\t</div>
                                ";
            // line 84
            if ((($context["loginAttribute"] ?? null) == "username")) {
                // line 85
                echo "            \t\t\t\t\t\t<div class=\"input-group\">
            \t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" placeholder=\"";
                // line 86
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Enter your username"]);
                echo "\" id=\"registerUsername\" name=\"username\" autocomplete=\"off\" required>
            \t\t\t\t\t\t</div>
                                ";
            }
            // line 89
            echo "        \t\t\t\t\t\t<div class=\"input-group\">
        \t\t\t\t\t\t\t<input class=\"form-control\" type=\"password\" placeholder=\"";
            // line 90
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Choose a Password"]);
            echo "\" id=\"registerPassword\" name=\"password\" required>
        \t\t\t\t\t\t</div>
        \t\t\t\t\t\t<div class=\"input-group\">
        \t\t\t\t\t\t\t<input class=\"form-control\" type=\"password\" placeholder=\"";
            // line 93
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Confirm Password"]);
            echo "\" name=\"rpassword\" id=\"rpassword\" required>
        \t\t\t\t\t\t</div>
        \t\t\t\t\t\t<div class=\"row kt-login__extra kt-hidden\">
        \t\t\t\t\t\t\t<div class=\"col kt-align-left\">
        \t\t\t\t\t\t\t\t<label class=\"kt-checkbox\">
        \t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"agree\" id=\"agreement\" checked required>";
            // line 98
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["I Agree to the"]);
            echo " <a href=\"#\" data-toggle=\"modal\" data-target=\"#kt_modal_6\" class=\"kt-link kt-login__link kt-font-bold\">";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["terms and conditions"]);
            echo "</a>.
        \t\t\t\t\t\t\t\t\t<span></span>
        \t\t\t\t\t\t\t\t</label>
        \t\t\t\t\t\t\t\t<span class=\"form-text text-muted\"></span>
        \t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t</div>
        \t\t\t\t\t\t<div class=\"kt-login__actions\">
        \t\t\t\t\t\t\t<button id=\"kt_login_signup_submit\" type=\"submit\" class=\"btn btn-brand btn-pill kt-login__btn-primary\">";
            // line 105
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sign Up"]);
            echo "</button>&nbsp;&nbsp;
        \t\t\t\t\t\t\t<button id=\"kt_login_signup_cancel\" class=\"btn btn-secondary btn-pill kt-login__btn-secondary\">";
            // line 106
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Cancel"]);
            echo "</button>
        \t\t\t\t\t\t</div>
        \t\t\t\t\t</form>
                        ";
        } else {
            // line 110
            echo "                            <!-- Registration is disabled. -->
                        ";
        }
        // line 112
        echo "    \t\t\t\t</div>
                     <div class=\"kt-login__forgot\">
                         <div class=\"kt-login__head\">
                             <h3 class=\"kt-login__title\">";
        // line 115
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Forgotten Password ?"]);
        echo "</h3>
                             <div class=\"kt-login__desc\">";
        // line 116
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Enter your email to reset your password"]);
        echo ":</div>
                         </div>
                         <div class=\"kt-login__form\">

                             <form class=\"kt-form\" data-request=\"";
        // line 120
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "::onRestorePassword\" data-request-update=\"'";
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "::reset': '#partialUserResetForm'\">
                                 <div class=\"form-group\">
                                     <input class=\"form-control\" type=\"email\" placeholder=\"";
        // line 122
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Email"]);
        echo "\" name=\"email\" id=\"userRestoreEmail\" autocomplete=\"off\">
                                 </div>
                                 <div class=\"kt-login__actions\">
                                     <button id=\"kt_login_forgot_submit\" class=\"btn btn-brand btn-pill btn-elevate\">";
        // line 125
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Request"]);
        echo "</button>
                                     <button id=\"kt_login_forgot_cancel\" class=\"btn btn-outline-brand btn-pill\">";
        // line 126
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Cancel"]);
        echo "</button>
                                 </div>
                             </form>

                         </div>
                     </div>



                      ";
        // line 135
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "demo_mode", [], "any", false, false, false, 135)) {
            // line 136
            echo "                      <!--begin::Divider-->
                      <div class=\"kt-login__divider\">
                          <div class=\"kt-divider\">
                              <span></span>
                              <span>";
            // line 140
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["OR"]);
            echo "</span>
                              <span></span>
                          </div>
                      </div>
                      <!--end::Divider-->

                      <!--begin::Options-->
                       <div class=\"row\">
                          <div class=\"col-xl-12\">
                              <!--begin:: Widgets/Applications/User/Profile3-->
                              <div class=\"kt-portlet kt-portlet--height-fluid\">
                                  <div class=\"kt-portlet__body\">
                                      <div class=\"kt-widget kt-widget--user-profile-3\">
                                          <div class=\"kt-widget__bottom\">
                                              <div class=\"kt-widget__item\">
                                                  <div class=\"kt-widget__icon\">
                                                      <i class=\"flaticon-user-settings\"></i>
                                                  </div>
                                                  <div class=\"kt-widget__details\">
                                                      <span class=\"kt-widget__title\">";
            // line 159
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Admin"]);
            echo "</span>
                                                      <a href=\"javascript:;\" id=\"admin\" class=\"kt-widget__value kt-font-brand signin_as\">";
            // line 160
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Login as"]);
            echo "</a>
                                                  </div>
                                              </div>

                                              <div class=\"kt-widget__item\">
                                                  <div class=\"kt-widget__icon\">
                                                      <i class=\"flaticon-businesswoman\"></i>
                                                  </div>
                                                  <div class=\"kt-widget__details\">
                                                      <span class=\"kt-widget__title\">";
            // line 169
            echo "Employee";
            echo "</span>
                                                      <a href=\"javascript:;\" id=\"employee\" class=\"kt-widget__value kt-font-brand signin_as\">";
            // line 170
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Login as"]);
            echo "</a>
                                                  </div>
                                              </div>

                                              <div class=\"kt-widget__item\">
                                                  <div class=\"kt-widget__icon\">
                                                      <i class=\"flaticon-truck\"></i>
                                                  </div>
                                                  <div class=\"kt-widget__details\">
                                                      <span class=\"kt-widget__title\">";
            // line 179
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Driver"]);
            echo "</span>
                                                      <a href=\"javascript:;\" id=\"driver\" class=\"kt-widget__value kt-font-brand signin_as\">";
            // line 180
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Login as"]);
            echo "</a>
                                                  </div>
                                              </div>

                                              <div class=\"kt-widget__item\">
                                                  <div class=\"kt-widget__icon\">
                                                      <i class=\"flaticon-avatar\"></i>
                                                  </div>
                                                  <div class=\"kt-widget__details\">
                                                      <span class=\"kt-widget__title\">";
            // line 189
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Client"]);
            echo "</span>
                                                      <a href=\"javascript:;\" id=\"client\" class=\"kt-widget__value kt-font-brand signin_as\">";
            // line 190
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Login as"]);
            echo "</a>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <!--end:: Widgets/Applications/User/Profile3-->
                          </div>
                      </div>
                      <!--end::Options-->

                      ";
        }
        // line 203
        echo "                      
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- Modal -->
 <div class=\"modal fade\" id=\"kt_modal_6\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
     <div class=\"modal-dialog modal-dialog-centered modal-lg\" role=\"document\">
         <div class=\"modal-content\">
             <div class=\"modal-header\">
                 <h5 class=\"modal-title\" id=\"exampleModalLongTitle\">";
        // line 214
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Terms and conditions"]);
        echo "</h5>
                 <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                 </button>
             </div>
             <div class=\"modal-body\">
                 <div class=\"kt-scroll\" data-scroll=\"true\" data-height=\"200\">
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                 </div>
             </div>
             <div class=\"modal-footer\">
                 <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">";
        // line 228
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Don't Agree"]);
        echo "</button>
                 <button type=\"button\" class=\"btn btn-primary\" id=\"agree\" data-dismiss=\"modal\">";
        // line 229
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Agree"]);
        echo "</button>
             </div>
         </div>
     </div>
 </div>
 ";
        // line 234
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('styles'        );
        // line 235
        echo "     <link href=\"./admin/css/demo10/pages/login/login-5.css\" rel=\"stylesheet\" type=\"text/css\" />
     <style>
         .kt-header__topbar-item--langs {
             display: -webkit-box;
             display: -ms-flexbox;
             display: flex;
             -webkit-box-flex: 1;
             -ms-flex: 1;
             flex: 1;
             width: 100%;
             -webkit-box-align: center;
             -ms-flex-align: center;
             align-items: center;
             -webkit-box-pack: center;
             -ms-flex-pack: center;
             justify-content: center;
         }
         .kt-header__topbar-item--langs .kt-header__topbar-icon img {
             width: 25px;
         }
     </style>
 ";
        // line 234
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
        // line 257
        echo " ";
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 258
        echo " <script type=\"text/javascript\">
     \"use strict\";

    // Class Definition
    var KTLoginGeneral = function() {

        var login = \$('#kt_login');

        var showErrorMsg = function(form, type, msg) {
            var alert = \$('<div class=\"kt-alert kt-alert--outline alert alert-' + type + ' alert-dismissible\" role=\"alert\">\\
    \t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"></button>\\
    \t\t\t<span></span>\\
    \t\t</div>');

            form.find('.alert').remove();
            alert.prependTo(form);
            //alert.animateClass('fadeIn animated');
            KTUtil.animateClass(alert[0], 'fadeIn animated');
            alert.find('span').html(msg);
        }

        // Private Functions
        var displaySignUpForm = function() {
            login.removeClass('kt-login--forgot');
            login.removeClass('kt-login--signin');

            login.addClass('kt-login--signup');
            KTUtil.animateClass(login.find('.kt-login__signup')[0], 'flipInX animated');
        }

        var displaySignInForm = function() {
            login.removeClass('kt-login--forgot');
            login.removeClass('kt-login--signup');

            login.addClass('kt-login--signin');
            KTUtil.animateClass(login.find('.kt-login__signin')[0], 'flipInX animated');
            //login.find('.kt-login__signin').animateClass('flipInX animated');
        }

        var displayForgotForm = function() {
            login.removeClass('kt-login--signin');
            login.removeClass('kt-login--signup');

            login.addClass('kt-login--forgot');
            //login.find('.kt-login--forgot').animateClass('flipInX animated');
            KTUtil.animateClass(login.find('.kt-login__forgot')[0], 'flipInX animated');

        }

        var handleFormSwitch = function() {
            \$('#kt_login_forgot').click(function(e) {
                e.preventDefault();
                displayForgotForm();
            });

            \$('#kt_login_forgot_cancel').click(function(e) {
                e.preventDefault();
                displaySignInForm();
            });

            \$('#kt_login_signup').click(function(e) {
                e.preventDefault();
                displaySignUpForm();
            });

            \$('#kt_login_signup_cancel').click(function(e) {
                e.preventDefault();
                displaySignInForm();
            });
        }

        var handleSignInFormSubmit = function() {
            \$('#kt_login_signin_submit').click(function(e) {
                e.preventDefault();
                var btn = \$(this);
                var form = \$(this).closest('form');

                form.validate({
                    rules: {
                        login: {
                            required: true
                        },
                        password: {
                            required: true
                        }
                    },
                    messages: {
                        \"login\": {
                            required: '";
        // line 346
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["This field is required!"]);
        echo "',
                        },
                        \"password\": {
                            required: '";
        // line 349
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["This field is required!"]);
        echo "',
                        },
                    }
                });

                if (!form.valid()) {
                    return;
                }

                btn.addClass('kt-spinner kt-spinner--right kt-spinner--sm kt-spinner--light').attr('disabled', true);


                \$.request('onSignin', {
                    data: {login: \$('#userSigninLogin').val(), password: \$('#userSigninPassword').val()},
                    error: function(e,response) {
                        btn.removeClass('kt-spinner kt-spinner--right kt-spinner--sm kt-spinner--light').attr('disabled', false);
                        console.log(e);
                        if(typeof e.responseJSON !== 'undefined'){
                            showErrorMsg(form, 'danger', e.responseJSON.X_OCTOBER_ERROR_MESSAGE);
                        }else{
                            showErrorMsg(form, 'danger', e.responseText);
                        }
                    },
                    success: function(response, status, xhr, \$form) {
                    \t// similate 2s delay
                    \tsetTimeout(function() {
    \t                    btn.removeClass('kt-spinner kt-spinner--right kt-spinner--sm kt-spinner--light').attr('disabled', false);
                           showErrorMsg(form, 'success', '";
        // line 376
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Correct, you are being redirect"]);
        echo ".');
                           location.href = \"";
        // line 377
        echo url("dashboard");
        echo "\";
                        }, 2000);
                    }
                });
            });
        }

        var handleSignUpFormSubmit = function() {
            \$('#kt_login_signup_submit').click(function(e) {
                e.preventDefault();

                var btn = \$(this);
                var form = \$(this).closest('form');

                form.validate({
                    rules: {
                        fullname: {
                            required: true
                        },
                        email: {
                            required: true,
                            email: true
                        },
                        password: {
                            required: true
                        },
                        rpassword: {
                            required: true
                        },
                        agree: {
                            required: true
                        }
                    }
                });

                if (!form.valid()) {
                    return;
                }

                btn.addClass('kt-spinner kt-spinner--right kt-spinner--sm kt-spinner--light').attr('disabled', true);

                \$.request('onRegister', {
                    ";
        // line 419
        if ((($context["loginAttribute"] ?? null) == "username")) {
            // line 420
            echo "                        data: {name: \$('#registerName').val(), email: \$('#registerEmail').val(), username: \$('#registerUsername').val(), password: \$('#registerPassword').val(), password_confirmation: \$('#rpassword').val()},
                    ";
        } else {
            // line 422
            echo "                        data: {name: \$('#registerName').val(), email: \$('#registerEmail').val(), password: \$('#registerPassword').val(), password_confirmation: \$('#rpassword').val()},
                    ";
        }
        // line 424
        echo "                    error: function(e,response) {
                        btn.removeClass('kt-spinner kt-spinner--right kt-spinner--sm kt-spinner--light').attr('disabled', false);
                        showErrorMsg(form, 'danger', e.responseJSON.X_OCTOBER_ERROR_MESSAGE);
                    },
                    success: function(response, status, xhr, \$form) {
                    \t// similate 2s delay
                    \tsetTimeout(function() {
    \t                    btn.removeClass('kt-spinner kt-spinner--right kt-spinner--sm kt-spinner--light').attr('disabled', false);
                            ";
        // line 432
        if ((($context["requireActivation"] ?? null) && (null === ($context["automaticActivation"] ?? null)))) {
            // line 433
            echo "    \t                       showErrorMsg(form, 'success', '";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Thank you. To complete your registration please check your email"]);
            echo ".');
                            ";
        } else {
            // line 435
            echo "                               showErrorMsg(form, 'success', '";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Correct, you are being redirect"]);
            echo ".');
                               location.href = \"";
            // line 436
            echo url("dashboard");
            echo "\";
                           ";
        }
        // line 438
        echo "                        }, 2000);
                    }
                });
            });
        }

        var handleForgotFormSubmit = function() {
            \$('#kt_login_forgot_submit').click(function(e) {
                e.preventDefault();

                var btn = \$(this);
                var form = \$(this).closest('form');

                form.validate({
                    rules: {
                        email: {
                            required: true,
                            email: true
                        }
                    }
                });

                if (!form.valid()) {
                    return;
                }

                btn.addClass('kt-spinner kt-spinner--right kt-spinner--sm kt-spinner--light').attr('disabled', true);

                \$.request('onRestorePassword', {
                    data: {email: \$('#userRestoreEmail').val()},
                    error: function(e,response) {
                        btn.removeClass('kt-spinner kt-spinner--right kt-spinner--sm kt-spinner--light').attr('disabled', false);
                        showErrorMsg(form, 'danger', e.responseJSON.X_OCTOBER_ERROR_MESSAGE);
                    },
                    success: function(response, status, xhr, \$form) {
                    \t// similate 2s delay
                    \tsetTimeout(function() {
\t                           btn.removeClass('kt-spinner kt-spinner--right kt-spinner--sm kt-spinner--light').attr('disabled', false);
                               showErrorMsg(form, 'success', '";
        // line 476
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Cool! Password recovery instruction has been sent to your email"]);
        echo ".');
                        }, 2000);
                    }
                });
            });
        }

        // Public Functions
        return {
            // public functions
            init: function() {
                handleFormSwitch();
                handleSignInFormSubmit();
                handleSignUpFormSubmit();
                handleForgotFormSubmit();
            }
        };
    }();

     // Class Initialization
     KTUtil.ready(function () {
         KTLoginGeneral.init();

         \$('body').on('click','#agree', function(e){
             \$( \"#agreement\" ).prop( \"checked\", true );
         });

         ";
        // line 503
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "demo_mode", [], "any", false, false, false, 503)) {
            // line 504
            echo "          \$('body').on('click','.signin_as', function(e){
              var type = \$(this).attr('id');
              if(type == 'admin'){
                  \$('#userSigninLogin').val('admin');
                  \$('#userSigninPassword').val('123456');
                  \$('#kt_login_signin_submit').trigger('click');
              }else if(type == 'employee'){
                  \$('#userSigninLogin').val('employee');
                  \$('#userSigninPassword').val('123456');
                  \$('#kt_login_signin_submit').trigger('click');
              }else if(type == 'driver'){
                  \$('#userSigninLogin').val('driver');
                  \$('#userSigninPassword').val('123456');
                  \$('#kt_login_signin_submit').trigger('click');
              }else if(type == 'client'){
                  \$('#userSigninLogin').val('client');
                  \$('#userSigninPassword').val('123456');
                  \$('#kt_login_signin_submit').trigger('click');
              }
          });
          ";
        }
        // line 525
        echo "     });
 </script>
 ";
        // line 257
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
        // line 528
        echo "</html>";
    }

    public function getTemplateName()
    {
        return "/Users/bola/Downloads/e-cargo/themes/spotlayer/pages/login.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  789 => 528,  787 => 257,  783 => 525,  760 => 504,  758 => 503,  728 => 476,  688 => 438,  683 => 436,  678 => 435,  672 => 433,  670 => 432,  660 => 424,  656 => 422,  652 => 420,  650 => 419,  605 => 377,  601 => 376,  571 => 349,  565 => 346,  475 => 258,  472 => 257,  470 => 234,  447 => 235,  445 => 234,  437 => 229,  433 => 228,  416 => 214,  403 => 203,  387 => 190,  383 => 189,  371 => 180,  367 => 179,  355 => 170,  351 => 169,  339 => 160,  335 => 159,  313 => 140,  307 => 136,  305 => 135,  293 => 126,  289 => 125,  283 => 122,  276 => 120,  269 => 116,  265 => 115,  260 => 112,  256 => 110,  249 => 106,  245 => 105,  233 => 98,  225 => 93,  219 => 90,  216 => 89,  210 => 86,  207 => 85,  205 => 84,  200 => 82,  194 => 79,  186 => 74,  182 => 73,  171 => 69,  167 => 68,  163 => 66,  161 => 65,  151 => 58,  145 => 55,  137 => 50,  133 => 49,  130 => 48,  122 => 43,  118 => 41,  116 => 40,  110 => 37,  104 => 34,  101 => 33,  94 => 30,  90 => 29,  81 => 28,  78 => 27,  69 => 21,  59 => 18,  55 => 17,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- begin:: Page -->
<!DOCTYPE html>
<head>
<link href=\"https://fonts.googleapis.com/css2?family=Yanone+Kaffeesatz&display=swap\" rel=\"stylesheet\">
</head>

 <div class=\"kt-grid kt-grid--ver kt-grid--root kt-page\">
     <div class=\"kt-grid kt-grid--hor kt-grid--root  kt-login kt-login--v5 kt-login--signin\" id=\"kt_login\">
         <div class=\"kt-grid__item kt-grid__item--fluid kt-grid kt-grid--desktop kt-grid--ver-desktop kt-grid--hor-tablet-and-mobile\">

             <div class=\"kt-login__right\">
                 <div class=\"kt-login__wrapper\">
                     <div class=\"kt-login__signin\">
                         <div class=\"kt-login__head\">
                             <div class=\"kt-login__title\">
                                 <!--
                                 <a class=\"kt-login__logo \" href=\"{{url('/')}}\">
                                     <img style=\"height:90px;width:auto\" src=\"{% if settings.logo %}{{ settings.logo.path }}{% else %}./admin/media/logos/logo.svg{% endif %}\">
                                 </a>
                                -->
                                 <h3 class=\"kt-margin-t-30\">{{\"Sign In\"|__}}</h3>
                             </div>
                         </div>
                         <div class=\"kt-login__form\">
                             <form class=\"kt-form\" action=\"\">

                                 {% flash %}
                                    <div class=\"kt-alert kt-alert--outline alert alert-{% if type == 'error' %}danger{% else %}{{type}}{% endif %} alert-dismissible\" role=\"alert\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"{{'Close'|__}}\"></button>
                                        <span>{{ message }}</span>
                                    </div>
                                 {% endflash %}
                                 <div class=\"form-group\">
                                     <input class=\"form-control\" type=\"text\" placeholder=\"{{ loginAttributeLabel|__ }}\" name=\"login\" id=\"userSigninLogin\" autocomplete=\"off\">
                                 </div>
                                 <div class=\"form-group\">
                                     <input class=\"form-control form-control-last\" type=\"Password\" placeholder=\"{{'Password'|__}}\" id=\"userSigninPassword\" name=\"password\">
                                 </div>
                                 <div class=\"row kt-login__extra\">
                                     {% if rememberLoginMode == 'ask' %}
                                     <div class=\"col kt-align-left\">
                                         <label class=\"kt-checkbox\">
                                             <input name=\"remember\" type=\"checkbox\" value=\"1\"> {{'Remember me'|__}}
                                             <span></span>
                                         </label>
                                     </div>
                                     {% endif %}
                                     <div class=\"col kt-align-right \">
                                         <button id=\"kt_login_signin_submit\" class=\"btn btn-brand btn-pill btn-elevate\">{{'Sign In'|__}}</button>
                                         <a href=\"javascript:;\" id=\"kt_login_forgot\" class=\"kt-link kt-hidden\">{{'Forget Password ?'|__}}</a>
                                     </div>
                                 </div>
                                 <div class=\"kt-login__actions text-center\">
                  \t\t\t\t\t<span class=\"kt-login__account-msg\">
                  \t\t\t\t\t\t{{\"Don't have an account yet ?\"|__}}
                  \t\t\t\t\t</span>
                  \t\t\t\t\t&nbsp;&nbsp;
                  \t\t\t\t\t<a href=\"javascript:;\" id=\"kt_login_signup\" class=\"kt-login__account-link\">{{\"Sign Up!\"|__}}</a>
                  \t\t\t\t</div>

                             </form>
                         </div>
                     </div>
\t\t             <div class=\"kt-login__signup\">
                         {% if canRegister %}
                             <div class=\"kt-login__head\">
                                 <div class=\"kt-login__title\">
                                     <!--<a class=\"kt-login__logo \" href=\"{{url('/')}}\">
                                         <img style=\"height:90px;width:auto\" src=\"{% if settings.logo %}{{ settings.logo.path }}{% else %}./admin/media/logos/logo.svg{% endif %}\">
                                     </a>-->
                                     <img style=\"max-height:500px; max-width: 80%; width:auto;height:auto\" src=\"ecargologo.jpg\">
                                        
                                     <h3 class=\"kt-margin-t-30\">{{\"Sign Up\"|__}}</h3>
             \t\t\t\t\t\t<div class=\"kt-login__desc\">{{'Enter your details to create your account'|__}}:</div>
                                 </div>
                             </div>
                            <form class=\"kt-form\" action=\"\">
        \t\t\t\t\t\t<div class=\"input-group\">
        \t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" id=\"registerName\" placeholder=\"{{'Full Name'|__}}\" name=\"name\" required>
        \t\t\t\t\t\t</div>
        \t\t\t\t\t\t<div class=\"input-group\">
        \t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" placeholder=\"{{'Email'|__}}\" id=\"registerEmail\" name=\"email\" autocomplete=\"off\" required>
        \t\t\t\t\t\t</div>
                                {% if loginAttribute == \"username\" %}
            \t\t\t\t\t\t<div class=\"input-group\">
            \t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" placeholder=\"{{'Enter your username'|__}}\" id=\"registerUsername\" name=\"username\" autocomplete=\"off\" required>
            \t\t\t\t\t\t</div>
                                {% endif %}
        \t\t\t\t\t\t<div class=\"input-group\">
        \t\t\t\t\t\t\t<input class=\"form-control\" type=\"password\" placeholder=\"{{'Choose a Password'|__}}\" id=\"registerPassword\" name=\"password\" required>
        \t\t\t\t\t\t</div>
        \t\t\t\t\t\t<div class=\"input-group\">
        \t\t\t\t\t\t\t<input class=\"form-control\" type=\"password\" placeholder=\"{{'Confirm Password'|__}}\" name=\"rpassword\" id=\"rpassword\" required>
        \t\t\t\t\t\t</div>
        \t\t\t\t\t\t<div class=\"row kt-login__extra kt-hidden\">
        \t\t\t\t\t\t\t<div class=\"col kt-align-left\">
        \t\t\t\t\t\t\t\t<label class=\"kt-checkbox\">
        \t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"agree\" id=\"agreement\" checked required>{{'I Agree to the'|__}} <a href=\"#\" data-toggle=\"modal\" data-target=\"#kt_modal_6\" class=\"kt-link kt-login__link kt-font-bold\">{{'terms and conditions'|__}}</a>.
        \t\t\t\t\t\t\t\t\t<span></span>
        \t\t\t\t\t\t\t\t</label>
        \t\t\t\t\t\t\t\t<span class=\"form-text text-muted\"></span>
        \t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t</div>
        \t\t\t\t\t\t<div class=\"kt-login__actions\">
        \t\t\t\t\t\t\t<button id=\"kt_login_signup_submit\" type=\"submit\" class=\"btn btn-brand btn-pill kt-login__btn-primary\">{{'Sign Up'|__}}</button>&nbsp;&nbsp;
        \t\t\t\t\t\t\t<button id=\"kt_login_signup_cancel\" class=\"btn btn-secondary btn-pill kt-login__btn-secondary\">{{'Cancel'|__}}</button>
        \t\t\t\t\t\t</div>
        \t\t\t\t\t</form>
                        {% else %}
                            <!-- Registration is disabled. -->
                        {% endif %}
    \t\t\t\t</div>
                     <div class=\"kt-login__forgot\">
                         <div class=\"kt-login__head\">
                             <h3 class=\"kt-login__title\">{{'Forgotten Password ?'|__}}</h3>
                             <div class=\"kt-login__desc\">{{'Enter your email to reset your password'|__}}:</div>
                         </div>
                         <div class=\"kt-login__form\">

                             <form class=\"kt-form\" data-request=\"{{ __SELF__ }}::onRestorePassword\" data-request-update=\"'{{ __SELF__ }}::reset': '#partialUserResetForm'\">
                                 <div class=\"form-group\">
                                     <input class=\"form-control\" type=\"email\" placeholder=\"{{'Email'|__}}\" name=\"email\" id=\"userRestoreEmail\" autocomplete=\"off\">
                                 </div>
                                 <div class=\"kt-login__actions\">
                                     <button id=\"kt_login_forgot_submit\" class=\"btn btn-brand btn-pill btn-elevate\">{{'Request'|__}}</button>
                                     <button id=\"kt_login_forgot_cancel\" class=\"btn btn-outline-brand btn-pill\">{{'Cancel'|__}}</button>
                                 </div>
                             </form>

                         </div>
                     </div>



                      {% if settings.demo_mode %}
                      <!--begin::Divider-->
                      <div class=\"kt-login__divider\">
                          <div class=\"kt-divider\">
                              <span></span>
                              <span>{{\"OR\"|__}}</span>
                              <span></span>
                          </div>
                      </div>
                      <!--end::Divider-->

                      <!--begin::Options-->
                       <div class=\"row\">
                          <div class=\"col-xl-12\">
                              <!--begin:: Widgets/Applications/User/Profile3-->
                              <div class=\"kt-portlet kt-portlet--height-fluid\">
                                  <div class=\"kt-portlet__body\">
                                      <div class=\"kt-widget kt-widget--user-profile-3\">
                                          <div class=\"kt-widget__bottom\">
                                              <div class=\"kt-widget__item\">
                                                  <div class=\"kt-widget__icon\">
                                                      <i class=\"flaticon-user-settings\"></i>
                                                  </div>
                                                  <div class=\"kt-widget__details\">
                                                      <span class=\"kt-widget__title\">{{'Admin'|__}}</span>
                                                      <a href=\"javascript:;\" id=\"admin\" class=\"kt-widget__value kt-font-brand signin_as\">{{'Login as'|__}}</a>
                                                  </div>
                                              </div>

                                              <div class=\"kt-widget__item\">
                                                  <div class=\"kt-widget__icon\">
                                                      <i class=\"flaticon-businesswoman\"></i>
                                                  </div>
                                                  <div class=\"kt-widget__details\">
                                                      <span class=\"kt-widget__title\">{{'Employee'}}</span>
                                                      <a href=\"javascript:;\" id=\"employee\" class=\"kt-widget__value kt-font-brand signin_as\">{{'Login as'|__}}</a>
                                                  </div>
                                              </div>

                                              <div class=\"kt-widget__item\">
                                                  <div class=\"kt-widget__icon\">
                                                      <i class=\"flaticon-truck\"></i>
                                                  </div>
                                                  <div class=\"kt-widget__details\">
                                                      <span class=\"kt-widget__title\">{{'Driver'|__}}</span>
                                                      <a href=\"javascript:;\" id=\"driver\" class=\"kt-widget__value kt-font-brand signin_as\">{{'Login as'|__}}</a>
                                                  </div>
                                              </div>

                                              <div class=\"kt-widget__item\">
                                                  <div class=\"kt-widget__icon\">
                                                      <i class=\"flaticon-avatar\"></i>
                                                  </div>
                                                  <div class=\"kt-widget__details\">
                                                      <span class=\"kt-widget__title\">{{'Client'|__}}</span>
                                                      <a href=\"javascript:;\" id=\"client\" class=\"kt-widget__value kt-font-brand signin_as\">{{'Login as'|__}}</a>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <!--end:: Widgets/Applications/User/Profile3-->
                          </div>
                      </div>
                      <!--end::Options-->

                      {% endif %}
                      
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- Modal -->
 <div class=\"modal fade\" id=\"kt_modal_6\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
     <div class=\"modal-dialog modal-dialog-centered modal-lg\" role=\"document\">
         <div class=\"modal-content\">
             <div class=\"modal-header\">
                 <h5 class=\"modal-title\" id=\"exampleModalLongTitle\">{{'Terms and conditions'|__}}</h5>
                 <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                 </button>
             </div>
             <div class=\"modal-body\">
                 <div class=\"kt-scroll\" data-scroll=\"true\" data-height=\"200\">
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                 </div>
             </div>
             <div class=\"modal-footer\">
                 <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">{{\"Don't Agree\"|__}}</button>
                 <button type=\"button\" class=\"btn btn-primary\" id=\"agree\" data-dismiss=\"modal\">{{'Agree'|__}}</button>
             </div>
         </div>
     </div>
 </div>
 {% put styles %}
     <link href=\"./admin/css/demo10/pages/login/login-5.css\" rel=\"stylesheet\" type=\"text/css\" />
     <style>
         .kt-header__topbar-item--langs {
             display: -webkit-box;
             display: -ms-flexbox;
             display: flex;
             -webkit-box-flex: 1;
             -ms-flex: 1;
             flex: 1;
             width: 100%;
             -webkit-box-align: center;
             -ms-flex-align: center;
             align-items: center;
             -webkit-box-pack: center;
             -ms-flex-pack: center;
             justify-content: center;
         }
         .kt-header__topbar-item--langs .kt-header__topbar-icon img {
             width: 25px;
         }
     </style>
 {% endput %}
 {% put scripts %}
 <script type=\"text/javascript\">
     \"use strict\";

    // Class Definition
    var KTLoginGeneral = function() {

        var login = \$('#kt_login');

        var showErrorMsg = function(form, type, msg) {
            var alert = \$('<div class=\"kt-alert kt-alert--outline alert alert-' + type + ' alert-dismissible\" role=\"alert\">\\
    \t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"></button>\\
    \t\t\t<span></span>\\
    \t\t</div>');

            form.find('.alert').remove();
            alert.prependTo(form);
            //alert.animateClass('fadeIn animated');
            KTUtil.animateClass(alert[0], 'fadeIn animated');
            alert.find('span').html(msg);
        }

        // Private Functions
        var displaySignUpForm = function() {
            login.removeClass('kt-login--forgot');
            login.removeClass('kt-login--signin');

            login.addClass('kt-login--signup');
            KTUtil.animateClass(login.find('.kt-login__signup')[0], 'flipInX animated');
        }

        var displaySignInForm = function() {
            login.removeClass('kt-login--forgot');
            login.removeClass('kt-login--signup');

            login.addClass('kt-login--signin');
            KTUtil.animateClass(login.find('.kt-login__signin')[0], 'flipInX animated');
            //login.find('.kt-login__signin').animateClass('flipInX animated');
        }

        var displayForgotForm = function() {
            login.removeClass('kt-login--signin');
            login.removeClass('kt-login--signup');

            login.addClass('kt-login--forgot');
            //login.find('.kt-login--forgot').animateClass('flipInX animated');
            KTUtil.animateClass(login.find('.kt-login__forgot')[0], 'flipInX animated');

        }

        var handleFormSwitch = function() {
            \$('#kt_login_forgot').click(function(e) {
                e.preventDefault();
                displayForgotForm();
            });

            \$('#kt_login_forgot_cancel').click(function(e) {
                e.preventDefault();
                displaySignInForm();
            });

            \$('#kt_login_signup').click(function(e) {
                e.preventDefault();
                displaySignUpForm();
            });

            \$('#kt_login_signup_cancel').click(function(e) {
                e.preventDefault();
                displaySignInForm();
            });
        }

        var handleSignInFormSubmit = function() {
            \$('#kt_login_signin_submit').click(function(e) {
                e.preventDefault();
                var btn = \$(this);
                var form = \$(this).closest('form');

                form.validate({
                    rules: {
                        login: {
                            required: true
                        },
                        password: {
                            required: true
                        }
                    },
                    messages: {
                        \"login\": {
                            required: '{{\"This field is required!\"|__}}',
                        },
                        \"password\": {
                            required: '{{\"This field is required!\"|__}}',
                        },
                    }
                });

                if (!form.valid()) {
                    return;
                }

                btn.addClass('kt-spinner kt-spinner--right kt-spinner--sm kt-spinner--light').attr('disabled', true);


                \$.request('onSignin', {
                    data: {login: \$('#userSigninLogin').val(), password: \$('#userSigninPassword').val()},
                    error: function(e,response) {
                        btn.removeClass('kt-spinner kt-spinner--right kt-spinner--sm kt-spinner--light').attr('disabled', false);
                        console.log(e);
                        if(typeof e.responseJSON !== 'undefined'){
                            showErrorMsg(form, 'danger', e.responseJSON.X_OCTOBER_ERROR_MESSAGE);
                        }else{
                            showErrorMsg(form, 'danger', e.responseText);
                        }
                    },
                    success: function(response, status, xhr, \$form) {
                    \t// similate 2s delay
                    \tsetTimeout(function() {
    \t                    btn.removeClass('kt-spinner kt-spinner--right kt-spinner--sm kt-spinner--light').attr('disabled', false);
                           showErrorMsg(form, 'success', '{{\"Correct, you are being redirect\"|__}}.');
                           location.href = \"{{url('dashboard')}}\";
                        }, 2000);
                    }
                });
            });
        }

        var handleSignUpFormSubmit = function() {
            \$('#kt_login_signup_submit').click(function(e) {
                e.preventDefault();

                var btn = \$(this);
                var form = \$(this).closest('form');

                form.validate({
                    rules: {
                        fullname: {
                            required: true
                        },
                        email: {
                            required: true,
                            email: true
                        },
                        password: {
                            required: true
                        },
                        rpassword: {
                            required: true
                        },
                        agree: {
                            required: true
                        }
                    }
                });

                if (!form.valid()) {
                    return;
                }

                btn.addClass('kt-spinner kt-spinner--right kt-spinner--sm kt-spinner--light').attr('disabled', true);

                \$.request('onRegister', {
                    {% if loginAttribute == \"username\" %}
                        data: {name: \$('#registerName').val(), email: \$('#registerEmail').val(), username: \$('#registerUsername').val(), password: \$('#registerPassword').val(), password_confirmation: \$('#rpassword').val()},
                    {% else %}
                        data: {name: \$('#registerName').val(), email: \$('#registerEmail').val(), password: \$('#registerPassword').val(), password_confirmation: \$('#rpassword').val()},
                    {% endif %}
                    error: function(e,response) {
                        btn.removeClass('kt-spinner kt-spinner--right kt-spinner--sm kt-spinner--light').attr('disabled', false);
                        showErrorMsg(form, 'danger', e.responseJSON.X_OCTOBER_ERROR_MESSAGE);
                    },
                    success: function(response, status, xhr, \$form) {
                    \t// similate 2s delay
                    \tsetTimeout(function() {
    \t                    btn.removeClass('kt-spinner kt-spinner--right kt-spinner--sm kt-spinner--light').attr('disabled', false);
                            {% if (requireActivation and automaticActivation is null) %}
    \t                       showErrorMsg(form, 'success', '{{\"Thank you. To complete your registration please check your email\"|__}}.');
                            {% else %}
                               showErrorMsg(form, 'success', '{{\"Correct, you are being redirect\"|__}}.');
                               location.href = \"{{url('dashboard')}}\";
                           {% endif %}
                        }, 2000);
                    }
                });
            });
        }

        var handleForgotFormSubmit = function() {
            \$('#kt_login_forgot_submit').click(function(e) {
                e.preventDefault();

                var btn = \$(this);
                var form = \$(this).closest('form');

                form.validate({
                    rules: {
                        email: {
                            required: true,
                            email: true
                        }
                    }
                });

                if (!form.valid()) {
                    return;
                }

                btn.addClass('kt-spinner kt-spinner--right kt-spinner--sm kt-spinner--light').attr('disabled', true);

                \$.request('onRestorePassword', {
                    data: {email: \$('#userRestoreEmail').val()},
                    error: function(e,response) {
                        btn.removeClass('kt-spinner kt-spinner--right kt-spinner--sm kt-spinner--light').attr('disabled', false);
                        showErrorMsg(form, 'danger', e.responseJSON.X_OCTOBER_ERROR_MESSAGE);
                    },
                    success: function(response, status, xhr, \$form) {
                    \t// similate 2s delay
                    \tsetTimeout(function() {
\t                           btn.removeClass('kt-spinner kt-spinner--right kt-spinner--sm kt-spinner--light').attr('disabled', false);
                               showErrorMsg(form, 'success', '{{\"Cool! Password recovery instruction has been sent to your email\"|__}}.');
                        }, 2000);
                    }
                });
            });
        }

        // Public Functions
        return {
            // public functions
            init: function() {
                handleFormSwitch();
                handleSignInFormSubmit();
                handleSignUpFormSubmit();
                handleForgotFormSubmit();
            }
        };
    }();

     // Class Initialization
     KTUtil.ready(function () {
         KTLoginGeneral.init();

         \$('body').on('click','#agree', function(e){
             \$( \"#agreement\" ).prop( \"checked\", true );
         });

         {% if settings.demo_mode %}
          \$('body').on('click','.signin_as', function(e){
              var type = \$(this).attr('id');
              if(type == 'admin'){
                  \$('#userSigninLogin').val('admin');
                  \$('#userSigninPassword').val('123456');
                  \$('#kt_login_signin_submit').trigger('click');
              }else if(type == 'employee'){
                  \$('#userSigninLogin').val('employee');
                  \$('#userSigninPassword').val('123456');
                  \$('#kt_login_signin_submit').trigger('click');
              }else if(type == 'driver'){
                  \$('#userSigninLogin').val('driver');
                  \$('#userSigninPassword').val('123456');
                  \$('#kt_login_signin_submit').trigger('click');
              }else if(type == 'client'){
                  \$('#userSigninLogin').val('client');
                  \$('#userSigninPassword').val('123456');
                  \$('#kt_login_signin_submit').trigger('click');
              }
          });
          {% endif %}
     });
 </script>
 {% endput %}
</html>", "/Users/bola/Downloads/e-cargo/themes/spotlayer/pages/login.htm", "");
    }
}
