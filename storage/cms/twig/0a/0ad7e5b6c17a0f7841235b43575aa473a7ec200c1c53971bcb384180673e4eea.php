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

/* /Users/bola/Downloads/e-cargo/themes/spotlayer/pages/home.htm */
class __TwigTemplate_bad2bac54312dc5f4565b6f42d262110a44074046161da8f7fa0a578ceea4d02 extends \Twig\Template
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
    <link href=\"https://fonts.googleapis.com/css2?family=Oregano:ital@0;1&display=swap\" rel=\"stylesheet\">
</head>


 <div class=\"kt-grid kt-grid--ver kt-grid--root kt-page\">
     <div class=\"kt-grid kt-grid--hor kt-grid--root  kt-login kt-login--v5 kt-logitn--signin\" id=\"kt_login\">
         <div class=\"kt-grid__item kt-grid__item--fluid kt-grid kt-grid--desktop kt-grid--ver-desktop kt-grid--hor-tablet-and-mobile\">

             <div class=\"kt-login__right\">
                 <div class=\"kt-login__wrapper\">
                     <div class=\"kt-login__signin\">
                         <div class=\"kt-login__head\">
                             <div class=\"kt-login__title\">
                                 <!---
                                 <a class=\"kt-login__logo \" href=\"";
        // line 18
        echo url("/");
        echo "\">
                                     <img style=\"max-height:90px;max-width:80%;width:auto;height:auto\" src=\"";
        // line 19
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "logo", [], "any", false, false, false, 19)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "logo", [], "any", false, false, false, 19), "path", [], "any", false, false, false, 19), "html", null, true);
        } else {
            echo "./admin/media/logos/logo.svg";
        }
        echo "\">
                                 </a>
                                -->
                                <img style=\"max-height:500px; max-width: 80%; width:auto;height:auto\" src=\"ecargologo.jpg\">

                                <!--<img src=\"ecargologo.jpg\">-->
                            
                                
                                 <h3 style=\"font-family: 'Oregano', cursive;\" class=\"kt-margin-t-30\">";
        // line 27
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sign In"]);
        echo "</h3>
                             </div>
                         </div>
                         <div class=\"kt-login__form\">
                             <form class=\"kt-form\" action=\"\">

                                 ";
        $_type = isset($context["type"]) ? $context["type"] : null;        $_message = isset($context["message"]) ? $context["message"] : null;        // line 33
        foreach (Flash::getMessages() as $type => $messages) {
            foreach ($messages as $message) {
                $context["type"] = $type;                $context["message"] = $message;                // line 34
                echo "                                    <div class=\"kt-alert kt-alert--outline alert alert-";
                if ((($context["type"] ?? null) == "error")) {
                    echo "danger";
                } else {
                    echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
                }
                echo " alert-dismissible\" role=\"alert\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"";
                // line 35
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Close"]);
                echo "\"></button>
                                        <span>";
                // line 36
                echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
                echo "</span>
                                    </div>
                                 ";
            }
        }
        $context["type"] = $_type;        $context["message"] = $_message;        // line 39
        echo "                                 <div class=\"form-group\">
                                     <input style=\"font-family: 'Oregano', cursive; font-size:25px; color:black\" class=\"form-control\" type=\"text\" placeholder=\"";
        // line 40
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), [($context["loginAttributeLabel"] ?? null)]);
        echo "\" name=\"login\" id=\"userSigninLogin\" autocomplete=\"off\">
                                 </div>
                                 <div class=\"form-group\">
                                     <input style=\"font-family: 'Oregano', cursive; font-size:25px; color:black\" class=\"form-control form-control-last\" type=\"Password\" placeholder=\"";
        // line 43
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Password"]);
        echo "\" id=\"userSigninPassword\" name=\"password\">
                                 </div>
                                 <div class=\"row kt-login__extra\">
                                     ";
        // line 46
        if ((($context["rememberLoginMode"] ?? null) == "ask")) {
            // line 47
            echo "                                     <div class=\"col kt-align-left\">
                                         <label class=\"kt-checkbox\">
                                             <input name=\"remember\" type=\"checkbox\" value=\"1\"> ";
            // line 49
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Remember me"]);
            echo "
                                             <span></span>
                                         </label>
                                     </div>
                                     ";
        }
        // line 54
        echo "                                     <div class=\"col kt-align-right \">
                                         <button style=\"font-family: 'Oregano', cursive; font-size:22px; color:white; background-color: mediumpurple; border:mediumpurple\" id=\"kt_login_signin_submit\" class=\"btn btn-brand btn-pill btn-elevate\">";
        // line 55
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sign In"]);
        echo "</button>
                                         <a href=\"javascript:;\" id=\"kt_login_forgot\" class=\"kt-link kt-hidden\">";
        // line 56
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Forget Password ?"]);
        echo "</a>
                                     </div>
                                 </div>
                                 <div class=\"kt-login__actions kt-margin-t-10\">
                  \t\t\t\t\t<span style=\"font-family: 'Oregano', cursive; font-size:22px; color:black;\"class=\"kt-login__account-msg\">
                  \t\t\t\t\t\t";
        // line 61
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Don't have an account yet ?"]);
        echo "
                  \t\t\t\t\t</span>
                  \t\t\t\t\t&nbsp;&nbsp;
                  \t\t\t\t\t<a style=\"font-family: 'Oregano', cursive; font-size:22px; color:black;\" href=\"javascript:;\" id=\"kt_login_signup\" class=\"kt-login__account-link\">";
        // line 64
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sign Up!"]);
        echo "</a>
                  \t\t\t\t</div>
                                 <div class=\"kt-login__actions\">
                  \t\t\t\t\t<span style=\"font-family: 'Oregano', cursive; font-size:22px; color:black;\"class=\"kt-login__account-msg\">
                  \t\t\t\t\t\t";
        // line 68
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Do you have a tracking number ?"]);
        echo "
                  \t\t\t\t\t</span>
                  \t\t\t\t\t&nbsp;&nbsp;
                  \t\t\t\t\t<a style=\"font-family: 'Oregano', cursive; font-size:22px; color:black;\" href=\"";
        // line 71
        echo url("tracking");
        echo "\"  class=\"kt-login__account-link\">";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Track shipment"]);
        echo "</a>
                  \t\t\t\t</div>

                             </form>
                         </div>
                     </div>
\t\t             <div class=\"kt-login__signup\">
                         ";
        // line 78
        if (($context["canRegister"] ?? null)) {
            // line 79
            echo "                             <div class=\"kt-login__head\">
                                 <div class=\"kt-login__title\">
                                     <a class=\"kt-login__logo \" href=\"";
            // line 81
            echo url("/");
            echo "\">
                                         <!--<img style=\"max-height:90px;max-width:80%;width:auto;height:auto\" src=\"";
            // line 82
            if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "logo", [], "any", false, false, false, 82)) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "logo", [], "any", false, false, false, 82), "path", [], "any", false, false, false, 82), "html", null, true);
            } else {
                echo "./admin/media/logos/logo.svg";
            }
            echo "\">-->
                                         <img style=\"max-height:500px; max-width: 80%; width:auto;height:auto\" src=\"ecargologo.jpg\">

                                     </a>
                                     <h3 class=\"kt-margin-t-30\">";
            // line 86
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sign Up"]);
            echo "</h3>
             \t\t\t\t\t\t<div class=\"kt-login__desc\">";
            // line 87
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Enter your details to create your account"]);
            echo ":</div>
                                 </div>
                             </div>
                            <form class=\"kt-form\" action=\"\">
        \t\t\t\t\t\t<div class=\"input-group\">
        \t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" id=\"registerName\" placeholder=\"";
            // line 92
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Full Name"]);
            echo "\" name=\"name\" required>
        \t\t\t\t\t\t</div>
        \t\t\t\t\t\t<div class=\"input-group\">
        \t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" placeholder=\"";
            // line 95
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Email"]);
            echo "\" id=\"registerEmail\" name=\"email\" autocomplete=\"off\" required>
        \t\t\t\t\t\t</div>
                                ";
            // line 97
            if ((($context["loginAttribute"] ?? null) == "username")) {
                // line 98
                echo "            \t\t\t\t\t\t<div class=\"input-group\">
            \t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" placeholder=\"";
                // line 99
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Enter your username"]);
                echo "\" id=\"registerUsername\" name=\"username\" autocomplete=\"off\" required>
            \t\t\t\t\t\t</div>
                                ";
            }
            // line 102
            echo "        \t\t\t\t\t\t<div class=\"input-group\">
        \t\t\t\t\t\t\t<input class=\"form-control\" type=\"password\" placeholder=\"";
            // line 103
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Choose a Password"]);
            echo "\" id=\"registerPassword\" name=\"password\" required>
        \t\t\t\t\t\t</div>
        \t\t\t\t\t\t<div class=\"input-group\">
        \t\t\t\t\t\t\t<input class=\"form-control\" type=\"password\" placeholder=\"";
            // line 106
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Confirm Password"]);
            echo "\" name=\"rpassword\" id=\"rpassword\" required>
        \t\t\t\t\t\t</div>
        \t\t\t\t\t\t<div class=\"row kt-login__extra kt-hidden\">
        \t\t\t\t\t\t\t<div class=\"col kt-align-left\">
        \t\t\t\t\t\t\t\t<label class=\"kt-checkbox\">
        \t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"agree\" id=\"agreement\" checked required>";
            // line 111
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["I Agree the"]);
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
            // line 118
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sign Up"]);
            echo "</button>&nbsp;&nbsp;
        \t\t\t\t\t\t\t<button id=\"kt_login_signup_cancel\" class=\"btn btn-secondary btn-pill kt-login__btn-secondary\">";
            // line 119
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Cancel"]);
            echo "</button>
        \t\t\t\t\t\t</div>
        \t\t\t\t\t</form>
                        ";
        } else {
            // line 123
            echo "                            <!-- Registration is disabled. -->
                        ";
        }
        // line 125
        echo "    \t\t\t\t</div>
                     <div class=\"kt-login__forgot\">
                         <div class=\"kt-login__head\">
                             <h3 class=\"kt-login__title\">";
        // line 128
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Forgotten Password ?"]);
        echo "</h3>
                             <div class=\"kt-login__desc\">";
        // line 129
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Enter your email to reset your password"]);
        echo ":</div>
                         </div>
                         <div class=\"kt-login__form\">

                             <form class=\"kt-form\" data-request=\"";
        // line 133
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "::onRestorePassword\" data-request-update=\"'";
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "::reset': '#partialUserResetForm'\">
                                 <div class=\"form-group\">
                                     <input class=\"form-control\" type=\"email\" placeholder=\"";
        // line 135
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Email"]);
        echo "\" name=\"email\" id=\"userRestoreEmail\" autocomplete=\"off\">
                                 </div>
                                 <div class=\"kt-login__actions\">
                                     <button id=\"kt_login_forgot_submit\" class=\"btn btn-brand btn-pill btn-elevate\">";
        // line 138
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Request"]);
        echo "</button>
                                     <button id=\"kt_login_forgot_cancel\" class=\"btn btn-outline-brand btn-pill\">";
        // line 139
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Cancel"]);
        echo "</button>
                                 </div>
                             </form>

                         </div>
                     </div>


                      ";
        // line 147
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "demo_mode", [], "any", false, false, false, 147)) {
            // line 148
            echo "                      <!--begin::Divider-->
                      <div class=\"kt-login__divider\">
                          <div class=\"kt-divider\">
                              <span></span>
                              <span>";
            // line 152
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
            // line 171
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Admin"]);
            echo "</span>
                                                      <a href=\"javascript:;\" id=\"admin\" class=\"kt-widget__value kt-font-brand signin_as\">";
            // line 172
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
            // line 181
            echo "Employee";
            echo "</span>
                                                      <a href=\"javascript:;\" id=\"employee\" class=\"kt-widget__value kt-font-brand signin_as\">";
            // line 182
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
            // line 191
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Driver"]);
            echo "</span>
                                                      <a href=\"javascript:;\" id=\"driver\" class=\"kt-widget__value kt-font-brand signin_as\">";
            // line 192
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
            // line 201
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Client"]);
            echo "</span>
                                                      <a href=\"javascript:;\" id=\"client\" class=\"kt-widget__value kt-font-brand signin_as\">";
            // line 202
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
        // line 215
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
        // line 226
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
        // line 240
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Don't Agree"]);
        echo "</button>
                 <button type=\"button\" class=\"btn btn-primary\" id=\"agree\" data-dismiss=\"modal\">";
        // line 241
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Agree"]);
        echo "</button>
             </div>
         </div>
     </div>
 </div>
 ";
        // line 246
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('styles'        );
        // line 247
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
        // line 246
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
        // line 269
        echo " ";
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 270
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
        // line 358
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["This field is required!"]);
        echo "',
                        },
                        \"password\": {
                            required: '";
        // line 361
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
        // line 388
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Correct, you are being redirect"]);
        echo ".');
                           location.href = \"";
        // line 389
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
        // line 431
        if ((($context["loginAttribute"] ?? null) == "username")) {
            // line 432
            echo "                        data: {name: \$('#registerName').val(), email: \$('#registerEmail').val(), username: \$('#registerUsername').val(), password: \$('#registerPassword').val(), password_confirmation: \$('#rpassword').val()},
                    ";
        } else {
            // line 434
            echo "                        data: {name: \$('#registerName').val(), email: \$('#registerEmail').val(), password: \$('#registerPassword').val(), password_confirmation: \$('#rpassword').val()},
                    ";
        }
        // line 436
        echo "                    error: function(e,response) {
                        btn.removeClass('kt-spinner kt-spinner--right kt-spinner--sm kt-spinner--light').attr('disabled', false);
                        showErrorMsg(form, 'danger', e.responseJSON.X_OCTOBER_ERROR_MESSAGE);
                    },
                    success: function(response, status, xhr, \$form) {
                    \t// similate 2s delay
                    \tsetTimeout(function() {
    \t                    btn.removeClass('kt-spinner kt-spinner--right kt-spinner--sm kt-spinner--light').attr('disabled', false);
                            ";
        // line 444
        if ((($context["requireActivation"] ?? null) && (null === ($context["automaticActivation"] ?? null)))) {
            // line 445
            echo "    \t                       showErrorMsg(form, 'success', '";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Thank you. To complete your registration please check your email"]);
            echo ".');
                            ";
        } else {
            // line 447
            echo "                               showErrorMsg(form, 'success', '";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Correct, you are being redirect"]);
            echo ".');
                               location.href = \"";
            // line 448
            echo url("dashboard");
            echo "\";
                           ";
        }
        // line 450
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
        // line 488
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
        // line 515
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "demo_mode", [], "any", false, false, false, 515)) {
            // line 516
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
        // line 537
        echo "     });
 </script>
 ";
        // line 269
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "/Users/bola/Downloads/e-cargo/themes/spotlayer/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  807 => 269,  803 => 537,  780 => 516,  778 => 515,  748 => 488,  708 => 450,  703 => 448,  698 => 447,  692 => 445,  690 => 444,  680 => 436,  676 => 434,  672 => 432,  670 => 431,  625 => 389,  621 => 388,  591 => 361,  585 => 358,  495 => 270,  492 => 269,  490 => 246,  467 => 247,  465 => 246,  457 => 241,  453 => 240,  436 => 226,  423 => 215,  407 => 202,  403 => 201,  391 => 192,  387 => 191,  375 => 182,  371 => 181,  359 => 172,  355 => 171,  333 => 152,  327 => 148,  325 => 147,  314 => 139,  310 => 138,  304 => 135,  297 => 133,  290 => 129,  286 => 128,  281 => 125,  277 => 123,  270 => 119,  266 => 118,  254 => 111,  246 => 106,  240 => 103,  237 => 102,  231 => 99,  228 => 98,  226 => 97,  221 => 95,  215 => 92,  207 => 87,  203 => 86,  192 => 82,  188 => 81,  184 => 79,  182 => 78,  170 => 71,  164 => 68,  157 => 64,  151 => 61,  143 => 56,  139 => 55,  136 => 54,  128 => 49,  124 => 47,  122 => 46,  116 => 43,  110 => 40,  107 => 39,  100 => 36,  96 => 35,  87 => 34,  84 => 33,  75 => 27,  60 => 19,  56 => 18,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- begin:: Page -->
<!DOCTYPE html>
<head>
    <link href=\"https://fonts.googleapis.com/css2?family=Oregano:ital@0;1&display=swap\" rel=\"stylesheet\">
</head>


 <div class=\"kt-grid kt-grid--ver kt-grid--root kt-page\">
     <div class=\"kt-grid kt-grid--hor kt-grid--root  kt-login kt-login--v5 kt-logitn--signin\" id=\"kt_login\">
         <div class=\"kt-grid__item kt-grid__item--fluid kt-grid kt-grid--desktop kt-grid--ver-desktop kt-grid--hor-tablet-and-mobile\">

             <div class=\"kt-login__right\">
                 <div class=\"kt-login__wrapper\">
                     <div class=\"kt-login__signin\">
                         <div class=\"kt-login__head\">
                             <div class=\"kt-login__title\">
                                 <!---
                                 <a class=\"kt-login__logo \" href=\"{{url('/')}}\">
                                     <img style=\"max-height:90px;max-width:80%;width:auto;height:auto\" src=\"{% if settings.logo %}{{ settings.logo.path }}{% else %}./admin/media/logos/logo.svg{% endif %}\">
                                 </a>
                                -->
                                <img style=\"max-height:500px; max-width: 80%; width:auto;height:auto\" src=\"ecargologo.jpg\">

                                <!--<img src=\"ecargologo.jpg\">-->
                            
                                
                                 <h3 style=\"font-family: 'Oregano', cursive;\" class=\"kt-margin-t-30\">{{\"Sign In\"|__}}</h3>
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
                                     <input style=\"font-family: 'Oregano', cursive; font-size:25px; color:black\" class=\"form-control\" type=\"text\" placeholder=\"{{ loginAttributeLabel|__ }}\" name=\"login\" id=\"userSigninLogin\" autocomplete=\"off\">
                                 </div>
                                 <div class=\"form-group\">
                                     <input style=\"font-family: 'Oregano', cursive; font-size:25px; color:black\" class=\"form-control form-control-last\" type=\"Password\" placeholder=\"{{'Password'|__}}\" id=\"userSigninPassword\" name=\"password\">
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
                                         <button style=\"font-family: 'Oregano', cursive; font-size:22px; color:white; background-color: mediumpurple; border:mediumpurple\" id=\"kt_login_signin_submit\" class=\"btn btn-brand btn-pill btn-elevate\">{{'Sign In'|__}}</button>
                                         <a href=\"javascript:;\" id=\"kt_login_forgot\" class=\"kt-link kt-hidden\">{{'Forget Password ?'|__}}</a>
                                     </div>
                                 </div>
                                 <div class=\"kt-login__actions kt-margin-t-10\">
                  \t\t\t\t\t<span style=\"font-family: 'Oregano', cursive; font-size:22px; color:black;\"class=\"kt-login__account-msg\">
                  \t\t\t\t\t\t{{\"Don't have an account yet ?\"|__}}
                  \t\t\t\t\t</span>
                  \t\t\t\t\t&nbsp;&nbsp;
                  \t\t\t\t\t<a style=\"font-family: 'Oregano', cursive; font-size:22px; color:black;\" href=\"javascript:;\" id=\"kt_login_signup\" class=\"kt-login__account-link\">{{\"Sign Up!\"|__}}</a>
                  \t\t\t\t</div>
                                 <div class=\"kt-login__actions\">
                  \t\t\t\t\t<span style=\"font-family: 'Oregano', cursive; font-size:22px; color:black;\"class=\"kt-login__account-msg\">
                  \t\t\t\t\t\t{{\"Do you have a tracking number ?\"|__}}
                  \t\t\t\t\t</span>
                  \t\t\t\t\t&nbsp;&nbsp;
                  \t\t\t\t\t<a style=\"font-family: 'Oregano', cursive; font-size:22px; color:black;\" href=\"{{url('tracking')}}\"  class=\"kt-login__account-link\">{{\"Track shipment\"|__}}</a>
                  \t\t\t\t</div>

                             </form>
                         </div>
                     </div>
\t\t             <div class=\"kt-login__signup\">
                         {% if canRegister %}
                             <div class=\"kt-login__head\">
                                 <div class=\"kt-login__title\">
                                     <a class=\"kt-login__logo \" href=\"{{url('/')}}\">
                                         <!--<img style=\"max-height:90px;max-width:80%;width:auto;height:auto\" src=\"{% if settings.logo %}{{ settings.logo.path }}{% else %}./admin/media/logos/logo.svg{% endif %}\">-->
                                         <img style=\"max-height:500px; max-width: 80%; width:auto;height:auto\" src=\"ecargologo.jpg\">

                                     </a>
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
        \t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"agree\" id=\"agreement\" checked required>{{'I Agree the'|__}} <a href=\"#\" data-toggle=\"modal\" data-target=\"#kt_modal_6\" class=\"kt-link kt-login__link kt-font-bold\">{{'terms and conditions'|__}}</a>.
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
 {% endput %}", "/Users/bola/Downloads/e-cargo/themes/spotlayer/pages/home.htm", "");
    }
}
