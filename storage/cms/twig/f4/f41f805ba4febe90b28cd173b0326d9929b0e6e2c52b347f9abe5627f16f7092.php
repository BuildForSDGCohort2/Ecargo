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

/* /Users/bola/Downloads/e-cargo/themes/spotlayer/layouts/admin.htm */
class __TwigTemplate_540f37f976b285a43a5c0fb64ccb189afb50fb326a6349a350e377593c985a43 extends \Twig\Template
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
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, ($context["currentLang"] ?? null), "html", null, true);
        echo "\" ";
        if ((($context["currentLang"] ?? null) == "ar")) {
            echo "direction=\"rtl\" dir=\"rtl\" style=\"direction: rtl\"";
        }
        echo " >

    <!-- begin::Head -->
    <head><!--begin::Base Path (base relative path for assets of this page) -->
        <base href=\"";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/admin");
        echo "\"><!--end::Base Path -->
        <meta charset=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 7), "charset", [], "any", false, false, false, 7), "html", null, true);
        echo "\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <title>";
        // line 9
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 9), "title", [], "any", false, false, false, 9)]);
        echo " | ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 9), "title", [], "any", false, false, false, 9)) {
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 9), "title", [], "any", false, false, false, 9)]);
        } else {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 9), "title", [], "any", false, false, false, 9), "html", null, true);
        }
        echo "</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
     <meta name=\"keywords\" content=\"";
        // line 11
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 11), "keywords", [], "any", false, false, false, 11)) {
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 11), "keywords", [], "any", false, false, false, 11)]);
        } else {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 11), "keywords", [], "any", false, false, false, 11), "html", null, true);
        }
        echo "\" />
     <meta name=\"description\" content=\"";
        // line 12
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 12), "description", [], "any", false, false, false, 12)) {
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 12), "description", [], "any", false, false, false, 12)]);
        } else {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 12), "description", [], "any", false, false, false, 12), "html", null, true);
        }
        echo "\">
        <meta name=\"author\" content=\"\"/>

        <link rel=\"icon\" href=\"";
        // line 15
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "favicon", [], "any", false, false, false, 15)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "favicon", [], "any", false, false, false, 15), "path", [], "any", false, false, false, 15), "html", null, true);
        } else {
            echo "./admin/media/logos/logo.ico";
        }
        echo "\" type=\"image/png\">
        <link rel=\"apple-touch-icon\" href=\"";
        // line 16
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "favicon", [], "any", false, false, false, 16)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "favicon", [], "any", false, false, false, 16), "path", [], "any", false, false, false, 16), "html", null, true);
        } else {
            echo "./admin/media/logos/logo.ico";
        }
        echo "\"/>
        <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"";
        // line 17
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "favicon", [], "any", false, false, false, 17)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "favicon", [], "any", false, false, false, 17), "thumb", [0 => 72, 1 => 72], "method", false, false, false, 17), "html", null, true);
        } else {
            echo "./admin/media/logos/logo.ico";
        }
        echo "\"/>
        <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"";
        // line 18
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "favicon", [], "any", false, false, false, 18)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "favicon", [], "any", false, false, false, 18), "thumb", [0 => 114, 1 => 114], "method", false, false, false, 18), "html", null, true);
        } else {
            echo "./admin/media/logos/logo.ico";
        }
        echo "\"/>
        <link rel=\"apple-touch-icon\" sizes=\"144x144\" href=\"";
        // line 19
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "favicon", [], "any", false, false, false, 19)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "favicon", [], "any", false, false, false, 19), "thumb", [0 => 144, 1 => 144], "method", false, false, false, 19), "html", null, true);
        } else {
            echo "./admin/media/logos/logo.ico";
        }
        echo "\"/>

        <!--begin::Fonts -->
        <link href=\"//fonts.googleapis.com/css?family=Nunito|Roboto\" rel=\"stylesheet\">
        <!--end::Fonts -->


        <!--begin::Global Theme Styles(used by all pages) -->
            <link href=\"./admin/vendors/global/vendors.bundle.css\" rel=\"stylesheet\" type=\"text/css\" />
            ";
        // line 28
        if ((($context["currentLang"] ?? null) == "ar")) {
            // line 29
            echo "                <link href=\"./admin/css/demo1/style.bundle.rtl.css\" rel=\"stylesheet\" type=\"text/css\" />
                <link href=\"./admin/vendors/custom/notifications/css/ns-default.rtl.css\" rel=\"stylesheet\" type=\"text/css\" />
                <link href=\"./admin/vendors/custom/notifications/css/ns-style-other.rtl.css\" rel=\"stylesheet\" type=\"text/css\" />
                <link href=\"//fonts.googleapis.com/css?family=Cairo:300,400,600,700\" rel=\"stylesheet\">


                <!--begin::Layout Skins(used by all pages) -->
                <link href=\"./admin/css/demo1/skins/header/base/light.rtl.css\" rel=\"stylesheet\" type=\"text/css\" />
                <link href=\"./admin/css/demo1/skins/header/menu/light.rtl.css\" rel=\"stylesheet\" type=\"text/css\" />
                <link href=\"./admin/css/demo1/skins/brand/light.rtl.css\" rel=\"stylesheet\" type=\"text/css\" />
                <link href=\"./admin/css/demo1/skins/aside/light.rtl.css\" rel=\"stylesheet\" type=\"text/css\" />
                <!--end::Layout Skins -->
            ";
        } else {
            // line 42
            echo "                <link href=\"./admin/css/demo1/style.bundle.css\" rel=\"stylesheet\" type=\"text/css\" />
                <link href=\"./admin/vendors/custom/notifications/css/ns-default.css\" rel=\"stylesheet\" type=\"text/css\" />
                <link href=\"./admin/vendors/custom/notifications/css/ns-style-other.css\" rel=\"stylesheet\" type=\"text/css\" />

                <!--begin::Layout Skins(used by all pages) -->
                <link href=\"./admin/css/demo1/skins/header/base/light.css\" rel=\"stylesheet\" type=\"text/css\" />
                <link href=\"./admin/css/demo1/skins/header/menu/light.css\" rel=\"stylesheet\" type=\"text/css\" />
                <link href=\"./admin/css/demo1/skins/brand/light.css\" rel=\"stylesheet\" type=\"text/css\" />
                <link href=\"./admin/css/demo1/skins/aside/light.css\" rel=\"stylesheet\" type=\"text/css\" />
                <!--end::Layout Skins -->
            ";
        }
        // line 53
        echo "        <!--end::Global Theme Styles -->

        <!--begin::Layout Skins(used by all pages) -->
        <!--end::Layout Skins -->
        ";
        // line 57
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 58
        echo "
        <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-25459653-14\"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-25459653-14');
</script>

    </head>

    <body  class=\"kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed\"  >


     <!-- begin:: Page -->
        <!-- begin:: Header Mobile -->
        <div id=\"kt_header_mobile\" class=\"kt-header-mobile  kt-header-mobile--fixed \" >
            <div class=\"kt-header-mobile__logo\">
          <a href=\"";
        // line 78
        echo url("/");
        echo "\">
           <!--<img alt=\"Logo\" src=\"";
        // line 79
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "mobile_logo", [], "any", false, false, false, 79)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "mobile_logo", [], "any", false, false, false, 79), "path", [], "any", false, false, false, 79), "html", null, true);
        } else {
            echo "./admin/media/logos/logo.svg";
        }
        echo "\" style=\"max-height:40px\"/>-->
           <img style=\"max-height:500px; max-width: 80%; width:auto;height:auto\" src=\"ecargologo.jpg\">

             </a>
            </div>
            <div class=\"kt-header-mobile__toolbar\">
    <button class=\"kt-header-mobile__toggler kt-header-mobile__toggler--left\" id=\"kt_aside_mobile_toggler\"><span></span></button>
    <button class=\"kt-header-mobile__toggler\" id=\"kt_header_mobile_toggler\"><span></span></button>
             <button class=\"kt-header-mobile__topbar-toggler\" id=\"kt_header_mobile_topbar_toggler\"><i class=\"flaticon-more\"></i></button>
            </div>
        </div>
        <!-- end:: Header Mobile -->
        <div class=\"kt-grid kt-grid--hor kt-grid--root\">
      <div class=\"kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page\">
                <!-- begin:: Aside -->
                <button class=\"kt-aside-close \" id=\"kt_aside_close_btn\"><i class=\"la la-close\"></i></button>

                <div class=\"kt-aside  kt-aside--fixed  kt-grid__item kt-grid kt-grid--desktop kt-grid--hor-desktop\" id=\"kt_aside\">
                 <!-- begin:: Aside -->
                    <div class=\"kt-aside__brand kt-grid__item \" id=\"kt_aside_brand\">
                     <div class=\"kt-aside__brand-logo\">
                      <a href=\"";
        // line 100
        echo url("dashboard");
        echo "\">
                       <!--<img alt=\"Logo\" src=\"";
        // line 101
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "logo", [], "any", false, false, false, 101)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "logo", [], "any", false, false, false, 101), "path", [], "any", false, false, false, 101), "html", null, true);
        } else {
            echo "./admin/media/logos/logo.svg";
        }
        echo "\" style=\"max-height:50px;\"/>-->
                       <img style=\"max-height:500px; max-width: 80%; width:auto;height:auto\" src=\"ecargologo.jpg\">

                      </a>
                     </div>

               <div class=\"kt-aside__brand-tools\">
                   <button class=\"kt-aside__brand-aside-toggler\" id=\"kt_aside_toggler\">
                    <span>
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\" class=\"kt-svg-icon\">
                                        <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                                            <polygon id=\"Shape\" points=\"0 0 24 0 24 24 0 24\"/>
                                            <path d=\"M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z\" id=\"Path-94\" fill=\"#000000\" fill-rule=\"nonzero\" transform=\"translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999) \"/>
                                            <path d=\"M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z\" id=\"Path-94\" fill=\"#000000\" fill-rule=\"nonzero\" opacity=\"0.3\" transform=\"translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999) \"/>
                                        </g>
                                    </svg>
                                </span>
                    <span>
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\" class=\"kt-svg-icon\">
                                        <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                                            <polygon id=\"Shape\" points=\"0 0 24 0 24 24 0 24\"/>
                                            <path d=\"M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z\" id=\"Path-94\" fill=\"#000000\" fill-rule=\"nonzero\"/>
                                            <path d=\"M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z\" id=\"Path-94\" fill=\"#000000\" fill-rule=\"nonzero\" opacity=\"0.3\" transform=\"translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999) \"/>
                                        </g>
                                    </svg>
                                </span>
                   </button>
                   <!--
                   <button class=\"kt-aside__brand-aside-toggler kt-aside__brand-aside-toggler--left\" id=\"kt_aside_toggler\"><span></span></button>
                   -->
                  </div>
                 </div>
                    <!-- end:: Aside -->
                    <!-- begin:: Aside Menu -->
                    <div class=\"kt-aside-menu-wrapper kt-grid__item kt-grid__item--fluid\" id=\"kt_aside_menu_wrapper\">

                     <div id=\"kt_aside_menu\" class=\"kt-aside-menu \" data-ktmenu-vertical=\"1\" data-ktmenu-scroll=\"1\" data-ktmenu-dropdown-timeout=\"500\">

                            <div class=\"kt-widget kt-widget--user-profile-1 kt-padding-l-20 kt-padding-r-20 kt-padding-b-0\">
                                <div class=\"kt-widget__head\">
                                    ";
        // line 141
        if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "avatar", [], "any", false, false, false, 141)) {
            // line 142
            echo "                                        <div class=\"kt-widget__media\">
                                            <img src=\"";
            // line 143
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "avatar", [], "any", false, false, false, 143), "thumb", [0 => 100, 1 => 100, 2 => "crop"], "method", false, false, false, 143), "html", null, true);
            echo "\" alt=\"image\">
                                        </div>
                                   ";
        } else {
            // line 146
            echo "                                       <span class=\"kt-media kt-media--lg kt-media--brand \">
                                            <span>";
            // line 147
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", [], "any", false, false, false, 147)), 0, 2), "html", null, true);
            echo "</span>
                                        </span>
                                   ";
        }
        // line 150
        echo "                                    <div class=\"kt-widget__content kt-padding-t-10\">
                                        <div class=\"kt-widget__section\">
                                            <a href=\"javascript:;\" class=\"kt-widget__username\">
                                                ";
        // line 153
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", [], "any", false, false, false, 153)), "html", null, true);
        echo "
                                            </a>
                                            <span class=\"kt-widget__subtitle\">
                                                ";
        // line 156
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Welcome back"]);
        echo ",
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class=\"kt-widget__footer kt-margin-t-15\">
                                    <a href=\"";
        // line 163
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("dashboard/order-create");
        echo "\" class=\"btn btn-label-brand btn-lg btn-upper btn-block\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\" class=\"kt-svg-icon kt-svg-icon--light\">
                                            <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                                                <rect id=\"bound\" x=\"0\" y=\"0\" width=\"24\" height=\"24\"/>
                                                <circle id=\"Oval-5\" fill=\"#000000\" opacity=\"0.3\" cx=\"12\" cy=\"12\" r=\"10\"/>
                                                <path d=\"M11,11 L11,7 C11,6.44771525 11.4477153,6 12,6 C12.5522847,6 13,6.44771525 13,7 L13,11 L17,11 C17.5522847,11 18,11.4477153 18,12 C18,12.5522847 17.5522847,13 17,13 L13,13 L13,17 C13,17.5522847 12.5522847,18 12,18 C11.4477153,18 11,17.5522847 11,17 L11,13 L7,13 C6.44771525,13 6,12.5522847 6,12 C6,11.4477153 6.44771525,11 7,11 L11,11 Z\" id=\"Combined-Shape\" fill=\"#000000\"/>
                                            </g>
                                        </svg>
                                         <span>";
        // line 171
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Add Shipment"]);
        echo "</span>
                                     </a>
                                </div>
                            </div>

                            ";
        // line 176
        if (twig_get_attribute($this->env, $this->source, ($context["mainMenu"] ?? null), "menuItems", [], "any", false, false, false, 176)) {
            // line 177
            echo "                          <ul class=\"kt-menu__nav \">
                                    ";
            // line 178
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["mainMenu"] ?? null), "menuItems", [], "any", false, false, false, 178));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "viewBag", [], "any", false, false, false, 178), "isHidden", [], "any", false, false, false, 178)) {
                    // line 179
                    echo "                                        ";
                    if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => twig_get_attribute($this->env, $this->source, $context["item"], "code", [], "any", false, false, false, 179), 1 => "r"], "method", false, false, false, 179) || twig_test_empty(twig_get_attribute($this->env, $this->source, $context["item"], "code", [], "any", false, false, false, 179)))) {
                        // line 180
                        echo "                                   <li class=\"kt-menu__item  ";
                        echo ((((twig_get_attribute($this->env, $this->source, $context["item"], "isActive", [], "any", false, false, false, 180) || twig_get_attribute($this->env, $this->source, $context["item"], "isChildActive", [], "any", false, false, false, 180)) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 180), "menu_breadcrumb", [], "any", false, false, false, 180) == twig_get_attribute($this->env, $this->source, $context["item"], "code", [], "any", false, false, false, 180)))) ? ("kt-menu__item--open kt-menu__item--here") : (""));
                        echo " kt-menu__item--submenu kt-menu__item--rel\" ";
                        if (twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 180)) {
                            echo "data-ktmenu-submenu-toggle=\"hover\" aria-haspopup=\"true\"";
                        }
                        echo ">
                                                <a href=\"";
                        // line 181
                        if (twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 181)) {
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 181), "html", null, true);
                        } else {
                            echo "#";
                        }
                        echo "\" class=\"kt-menu__link ";
                        if (twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 181)) {
                            echo "kt-menu__toggle";
                        }
                        echo "\" ";
                        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "viewBag", [], "any", false, false, false, 181), "isExternal", [], "any", false, false, false, 181)) ? ("target=\"_blank\"") : (""));
                        echo ">
                                                    <span class=\"kt-menu__link-icon\">
                                                        ";
                        // line 183
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "viewBag", [], "any", false, false, false, 183), "icon", [], "any", false, false, false, 183);
                        echo "
                                                    </span>
                                                    <span class=\"kt-menu__link-text\">";
                        // line 185
                        echo call_user_func_array($this->env->getFilter('__')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 185)]);
                        echo "</span>
                                                    ";
                        // line 186
                        if (twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 186)) {
                            // line 187
                            echo "                                                        <i class=\"kt-menu__ver-arrow la la-angle-right\"></i>
                                                    ";
                        }
                        // line 189
                        echo "                                                </a>
                                                ";
                        // line 190
                        if (twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 190)) {
                            // line 191
                            echo "                                                    <div class=\"kt-menu__submenu \">
                                                        <span class=\"kt-menu__arrow\"></span>
                                                        <ul class=\"kt-menu__subnav\">
                                                            ";
                            // line 194
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 194));
                            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                                if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "viewBag", [], "any", false, false, false, 194), "isHidden", [], "any", false, false, false, 194)) {
                                    // line 195
                                    echo "                                                                ";
                                    if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => twig_get_attribute($this->env, $this->source, $context["item"], "code", [], "any", false, false, false, 195), 1 => "r"], "method", false, false, false, 195) || twig_test_empty(twig_get_attribute($this->env, $this->source, $context["item"], "code", [], "any", false, false, false, 195)))) {
                                        // line 196
                                        echo "                                                                    <li class=\"kt-menu__item ";
                                        echo ((((twig_get_attribute($this->env, $this->source, $context["item"], "isActive", [], "any", false, false, false, 196) || twig_get_attribute($this->env, $this->source, $context["item"], "isChildActive", [], "any", false, false, false, 196)) || (($context["currentPageUrl"] ?? null) == twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 196), ["[url]" => url("/")])))) ? ("kt-menu__item--open kt-menu__item--here") : (""));
                                        echo "\"  aria-haspopup=\"true\">
                                                                        <a  href=\"";
                                        // line 197
                                        if (twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 197)) {
                                            echo twig_escape_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 197), ["[url]" => url("/")]), "html", null, true);
                                        } else {
                                            echo "javascript:;";
                                        }
                                        echo "\" class=\"kt-menu__link \">
                                                                            ";
                                        // line 198
                                        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "viewBag", [], "any", false, false, false, 198), "icon", [], "any", false, false, false, 198) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "viewBag", [], "any", false, false, false, 198), "icon", [], "any", false, false, false, 198) != ""))) {
                                            // line 199
                                            echo "                                                                                ";
                                            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "viewBag", [], "any", false, false, false, 199), "icon", [], "any", false, false, false, 199);
                                            echo "
                                                                            ";
                                        } else {
                                            // line 201
                                            echo "                                                                                <i class=\"kt-menu__link-bullet kt-menu__link-bullet--dot\"><span></span></i>
                                                                            ";
                                        }
                                        // line 203
                                        echo "                                                                            <span class=\"kt-menu__link-text\">";
                                        echo call_user_func_array($this->env->getFilter('__')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 203)]);
                                        echo "</span>
                                                                        </a>
                                                                    </li>
                                                                ";
                                    }
                                    // line 207
                                    echo "                                                            ";
                                }
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 208
                            echo "                                                        </ul>
                                                    </div>
                                                ";
                        }
                        // line 211
                        echo "                                            </li>
                                        ";
                    }
                    // line 213
                    echo "                                    ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 214
            echo "                                </ul>
                            ";
        }
        // line 216
        echo "                     </div>
                    </div>
                    <!-- end:: Aside Menu -->
                </div>
                <!-- end:: Aside -->

       <div class=\"kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper\" id=\"kt_wrapper\">
        <!-- begin:: Header -->
                    <div id=\"kt_header\" class=\"kt-header kt-grid__item  kt-header--fixed \" >
                        <!-- begin:: Header Menu -->
                        <button class=\"kt-header-menu-wrapper-close\" id=\"kt_header_menu_mobile_close_btn\"><i class=\"la la-close\"></i></button>
                        <div class=\"kt-header-menu-wrapper\" id=\"kt_header_menu_wrapper\">

                         <div id=\"kt_header_menu\" class=\"kt-header-menu kt-header-menu-mobile  kt-header-menu--layout-default \"  >
                          <ul class=\"kt-menu__nav \">
                           <li class=\"kt-menu__item\">
                                        <a  href=\"javascript:;\" class=\"kt-menu__link kt-menu__time\">
                                            <i class=\"kt-menu__link-icon flaticon-clock-1\"></i>
                                            <span class=\"kt-menu__link-text\">
                                                <div class='time-frame'>
                                                    <div id='date-part' style=\"display: inline-block;\"></div>
                                                    <div id='time-part' style=\"display: inline-block;\"></div>
                                                </div>
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                         </div>
                        </div>
                        <!-- end:: Header Menu -->
                        <!-- begin:: Header Topbar -->
                        <div class=\"kt-header__topbar\">
                            <!--begin: Search -->
                            <div class=\"kt-header__topbar-item kt-header__topbar-item--search dropdown\" id=\"kt_quick_search_toggle\">
                                <div class=\"kt-header__topbar-wrapper\" data-toggle=\"dropdown\" data-offset=\"10px,0px\">
                                    <span class=\"kt-header__topbar-icon\">
             <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\" class=\"kt-svg-icon\">
                                            <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                                                <rect id=\"bound\" x=\"0\" y=\"0\" width=\"24\" height=\"24\"/>
                                                <path d=\"M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z\" id=\"Path-2\" fill=\"#000000\" fill-rule=\"nonzero\" opacity=\"0.3\"/>
                                                <path d=\"M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z\" id=\"Path\" fill=\"#000000\" fill-rule=\"nonzero\"/>
                                            </g>
                                        </svg>
                                    </span>
                                </div>
                                <div class=\"dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-lg\">
                                    <div class=\"kt-quick-search kt-quick-search--dropdown kt-quick-search--result-compact\" id=\"kt_quick_search_dropdown\">
                                        <form method=\"GET\" action=\"";
        // line 263
        echo url("dashboard/search");
        echo "\"class=\"kt-quick-search__form\">
                                            ";
        // line 264
        echo call_user_func_array($this->env->getFunction('form_token')->getCallable(), ["token"]);
        echo "
                                            ";
        // line 265
        echo call_user_func_array($this->env->getFunction('form_sessionKey')->getCallable(), ["sessionKey"]);
        echo "
                                            <div class=\"input-group\">
                                                <div class=\"input-group-prepend\"><span class=\"input-group-text\"><i class=\"flaticon2-search-1\"></i></span></div>
                                                <input type=\"text\" class=\"form-control kt-quick-search__input\" placeholder=\"";
        // line 268
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["quick search"]);
        echo "...\" name=\"quicksearch\" >
                                                <div class=\"input-group-append\"><span class=\"input-group-text\"><i class=\"la la-close kt-quick-search__close\"></i></span></div>
                                            </div>
                                        </form>
                                        <div class=\"kt-quick-search__wrapper kt-scroll\" data-scroll=\"true\" data-height=\"325\" data-mobile-height=\"200\" style=\"direction: ltr;\">

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end: Search -->

                            <!--begin: Notifications -->
                            <div id=\"notificationsmenu\" class=\"kt-header__topbar-item dropdown\">
                                ";
        // line 282
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("notificationsmenu"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 283
        echo "                            </div>
                            <!--end: Notifications -->
                            ";
        // line 285
        if (($context["locales"] ?? null)) {
            // line 286
            echo "                                <!--begin: Language bar -->
                                <div class=\"kt-header__topbar-item kt-header__topbar-item--langs\">
                                    <div class=\"kt-header__topbar-wrapper\" data-toggle=\"dropdown\" data-offset=\"10px,0px\">
                                        <span class=\"kt-header__topbar-icon kt-header__topbar-icon--info\">
                                            ";
            // line 290
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["locales"] ?? null));
            foreach ($context['_seq'] as $context["code"] => $context["name"]) {
                if ((($context["activeLocale"] ?? null) == $context["code"])) {
                    // line 291
                    echo "                                                <img class=\"\" src=\"./admin/media/flags/";
                    echo twig_escape_filter($this->env, $context["code"], "html", null, true);
                    echo ".svg\" alt=\"\" />
                                            ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['code'], $context['name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 293
            echo "                                        </span>
                                    </div>
                                    <div class=\"dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim\">
                                        <ul class=\"kt-nav kt-margin-t-10 kt-margin-b-10\">
                                            ";
            // line 297
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["locales"] ?? null));
            foreach ($context['_seq'] as $context["code"] => $context["name"]) {
                // line 298
                echo "                                                <li class=\"kt-nav__item ";
                if ((($context["activeLocale"] ?? null) == $context["code"])) {
                    echo "kt-nav__item--active";
                }
                echo " locale\" rel=\"";
                echo twig_escape_filter($this->env, $context["code"], "html", null, true);
                echo "\">
                                                    <a href=\"#\" class=\"kt-nav__link\">
                                                        <span class=\"kt-nav__link-icon\"><img src=\"./admin/media/flags/";
                // line 300
                echo twig_escape_filter($this->env, $context["code"], "html", null, true);
                echo ".svg\" alt=\"\" /></span>
                                                        <span class=\"kt-nav__link-text\">";
                // line 301
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "</span>
                                                    </a>
                                                </li>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['code'], $context['name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 305
            echo "                                        </ul>
                                    </div>
                                </div>
                                <!--end: Language bar -->
                            ";
        }
        // line 310
        echo "
                            <!--begin: User bar -->
                            <div class=\"kt-header__topbar-item kt-header__topbar-item--user\">
                                <div class=\"kt-header__topbar-wrapper\" data-toggle=\"dropdown\" data-offset=\"10px,0px\">
                                    <div class=\"kt-header__topbar-user\">
                                        <span class=\"kt-header__topbar-welcome\">";
        // line 315
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Hi"]);
        echo ",</span>
                                        <span class=\"kt-header__topbar-username\">";
        // line 316
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", [], "any", false, false, false, 316)), "html", null, true);
        echo "</span>
                                        ";
        // line 317
        if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "avatar", [], "any", false, false, false, 317)) {
            // line 318
            echo "                                             <img alt=\"Pic\" src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "avatar", [], "any", false, false, false, 318), "thumb", [0 => 25, 1 => 25, 2 => "crop"], "method", false, false, false, 318), "html", null, true);
            echo "\" />
                                        ";
        } else {
            // line 320
            echo "                                           <span class=\"kt-badge kt-badge--username kt-badge--unified-brand kt-badge--lg kt-badge--rounded kt-font-light kt-badge--bold\">";
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", [], "any", false, false, false, 320)), 0, 2), "html", null, true);
            echo "</span>
                                        ";
        }
        // line 322
        echo "                                    </div>
                                </div>
                                <div class=\"dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-xl\">
                                    <!--begin: Head -->
                                    <div class=\"kt-user-card kt-user-card--skin-light kt-notification-item-padding-x\">
                                        <div class=\"kt-user-card__avatar\">
                                            ";
        // line 328
        if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "avatar", [], "any", false, false, false, 328)) {
            // line 329
            echo "                                                 <img alt=\"Pic\" src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "avatar", [], "any", false, false, false, 329), "thumb", [0 => 60, 1 => 60, 2 => "crop"], "method", false, false, false, 329), "html", null, true);
            echo "\" />
                                            ";
        } else {
            // line 331
            echo "                                                <span class=\"kt-badge kt-badge--username kt-badge--unified-success kt-badge--lg kt-badge--rounded kt-badge--bold\">";
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", [], "any", false, false, false, 331)), 0, 1), "html", null, true);
            echo "</span>
                                             ";
        }
        // line 333
        echo "                                        </div>
                                        <div class=\"kt-user-card__name\">
                                            ";
        // line 335
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", [], "any", false, false, false, 335)), "html", null, true);
        echo "
                                        </div>
                                        <!--<div class=\"kt-user-card__badge kt-hidden\">
                                            <span class=\"btn btn-";
        // line 338
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "messages", [], "any", false, false, false, 338), "where", [0 => "read_at", 1 => null], "method", false, false, false, 338)) > 0)) {
            echo "danger";
        } else {
            echo "success";
        }
        echo " btn-sm btn-bold btn-font-md\">";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "messages", [], "any", false, false, false, 338), "where", [0 => "read_at", 1 => null], "method", false, false, false, 338)), "html", null, true);
        echo " ";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["messages"]);
        echo "</span>
                                        </div>-->
                                    </div>
                                    <!--end: Head -->

                                    <!--begin: Navigation -->
                                    <div class=\"kt-notification\">
                                        <a href=\"";
        // line 345
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("dashboard/profile");
        echo "\" class=\"kt-notification__item\">
                                            <div class=\"kt-notification__item-icon\">
                                                <i class=\"flaticon2-calendar-3 kt-font-success\"></i>
                                            </div>
                                            <div class=\"kt-notification__item-details\">
                                                <div class=\"kt-notification__item-title kt-font-bold\">
                                                    ";
        // line 351
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["My Profile"]);
        echo "
                                                </div>
                                                <div class=\"kt-notification__item-time\">
                                                    ";
        // line 354
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Account settings and more"]);
        echo "
                                                </div>
                                            </div>
                                        </a>
                                        <!--
                                            ";
        // line 359
        if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "message", 1 => "r"], "method", false, false, false, 359)) {
            // line 360
            echo "                                                <a href=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("dashboard/inbox");
            echo "\" class=\"kt-notification__item\">
                                                    <div class=\"kt-notification__item-icon\">
                                                        <i class=\"flaticon2-mail kt-font-warning\"></i>
                                                    </div>
                                                    <div class=\"kt-notification__item-details\">
                                                        <div class=\"kt-notification__item-title kt-font-bold\">
                                                            ";
            // line 366
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Messages"]);
            echo "
                                                        </div>
                                                        <div class=\"kt-notification__item-time\">
                                                            ";
            // line 369
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Customers messages from website"]);
            if ((($context["unreaded"] ?? null) > 0)) {
                echo " <span class=\"kt-badge kt-badge--danger kt-badge--inline kt-badge--pill kt-badge--rounded\">";
                echo twig_escape_filter($this->env, ($context["unreaded"] ?? null), "html", null, true);
                echo " ";
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Unreaded"]);
                echo "</span>";
            }
            // line 370
            echo "                                                        </div>
                                                    </div>
                                                </a>
                                            ";
        }
        // line 374
        echo "                                        -->
                                        <a href=\"";
        // line 375
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("dashboard/notifications");
        echo "\" class=\"kt-notification__item\">
                                            <div class=\"kt-notification__item-icon\">
                                                <i class=\"flaticon2-rocket-1 kt-font-danger\"></i>
                                            </div>
                                            <div class=\"kt-notification__item-details\">
                                                <div class=\"kt-notification__item-title kt-font-bold\">
                                                    ";
        // line 381
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["My Notifications"]);
        echo "
                                                </div>
                                                <div class=\"kt-notification__item-time\">
                                                    ";
        // line 384
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["all pervious notifications"]);
        echo "
                                                </div>
                                            </div>
                                        </a>
                                        <a href=\"#\" class=\"kt-notification__item kt-hidden\">
                                            <div class=\"kt-notification__item-icon\">
                                                <i class=\"flaticon2-hourglass kt-font-brand\"></i>
                                            </div>
                                            <div class=\"kt-notification__item-details\">
                                                <div class=\"kt-notification__item-title kt-font-bold\">
                                                    ";
        // line 394
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["My Tasks"]);
        echo "
                                                </div>
                                                <div class=\"kt-notification__item-time\">
                                                    ";
        // line 397
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["latest tasks and requests"]);
        echo "
                                                </div>
                                            </div>
                                        </a>
                                        <a href=\"#\" class=\"kt-hidden kt-notification__item\">
                                            <div class=\"kt-notification__item-icon\">
                                                <i class=\"flaticon2-cardiogram kt-font-warning\"></i>
                                            </div>
                                            <div class=\"kt-notification__item-details\">
                                                <div class=\"kt-notification__item-title kt-font-bold\">
                                                    ";
        // line 407
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Billing"]);
        echo "
                                                </div>
                                                <div class=\"kt-notification__item-time\">
                                                    ";
        // line 410
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["billing & statements"]);
        echo " <span class=\"kt-badge kt-badge--danger kt-badge--inline kt-badge--pill kt-badge--rounded\">2 ";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["pending"]);
        echo "</span>
                                                </div>
                                            </div>
                                        </a>
                                        <div class=\"kt-notification__custom kt-space-between\">
                                            <a class=\"btn btn-danger btn-block btn-bold kt-font-light\" data-request=\"onLogout\" data-request-data=\"redirect: '/'\">";
        // line 415
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sign Out"]);
        echo "</a>
                                            <a href=\"#\" target=\"_blank\" class=\"btn btn-clean btn-sm btn-bold kt-hidden\">";
        // line 416
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Upgrade Plan"]);
        echo "</a>
                                        </div>
                                    </div>
                                    <!--end: Navigation -->
                                </div>
                            </div>
                            <!--end: User bar -->
                        </div>
                        <!-- end:: Header Topbar -->
                    </div>
                    <!-- end:: Header -->
        <div class=\"kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor\" id=\"kt_content\">
                        <!-- begin:: Content Head -->
                        <div class=\"kt-subheader   kt-grid__item\" id=\"kt_subheader\">
                            <div class=\"kt-container  kt-container--fluid  \">
                                <div class=\"kt-subheader__main\">
                                    ";
        // line 432
        $context["crumbOptions"] = twig_get_attribute($this->env, $this->source, ($context["breadcrumbs"] ?? null), "options", [], "any", false, false, false, 432);
        // line 433
        echo "                                    <h3 class=\"kt-subheader__title\"><button class=\"kt-subheader__mobile-toggle kt-subheader__mobile-toggle--left\" id=\"kt_subheader_mobile_toggle\"><span></span></button>";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 433), "title", [], "any", false, false, false, 433)]);
        echo "</h3>

                                    ";
        // line 435
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 435), "description", [], "any", false, false, false, 435)) {
            // line 436
            echo "                                        <span class=\"kt-subheader__desc\">";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 436), "description", [], "any", false, false, false, 436)]);
            echo "</span>
                                    ";
        }
        // line 438
        echo "                                    <span class=\"kt-subheader__separator kt-subheader__separator--v\"></span>
                                    ";
        // line 439
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 439), "listing", [], "any", false, false, false, 439)) {
            // line 440
            echo "                                        <div class=\"kt-subheader__group\" id=\"kt_subheader_search\">
                                            <span class=\"kt-subheader__desc\" id=\"kt_subheader_total\">";
            // line 441
            if (($context["total_records"] ?? null)) {
                echo twig_escape_filter($this->env, ($context["total_records"] ?? null), "html", null, true);
                echo " ";
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Total"]);
            }
            echo "</span>
                                            <form class=\"kt-margin-l-20\" id=\"kt_subheader_search_form\" style=\"margin-left:10px !important \">
                                                ";
            // line 443
            echo call_user_func_array($this->env->getFunction('form_token')->getCallable(), ["token"]);
            echo "
                                                ";
            // line 444
            echo call_user_func_array($this->env->getFunction('form_sessionKey')->getCallable(), ["sessionKey"]);
            echo "
                                                <div class=\"kt-input-icon kt-input-icon--right kt-subheader__search\">
                                                    <input type=\"text\" class=\"form-control\" placeholder=\"";
            // line 446
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Quick Search"]);
            echo "\" id=\"generalSearch\">
                                                    <span class=\"kt-input-icon__icon kt-input-icon__icon--right\">
                                                        <span><svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\" class=\"kt-svg-icon\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><rect id=\"bound\" x=\"0\" y=\"0\" width=\"24\" height=\"24\"/><path d=\"M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z\" id=\"Path-2\" fill=\"#000000\" fill-rule=\"nonzero\" opacity=\"0.3\"/><path d=\"M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z\" id=\"Path\" fill=\"#000000\" fill-rule=\"nonzero\"/></g></svg></span>
                                                    </span>
                                                </div>
                                            </form>
                                        </div>
                                        ";
            // line 453
            if (($context["filter_statuses"] ?? null)) {
                // line 454
                echo "                                            <div class=\"kt-subheader__group\" id=\"kt_subheader_search\">
                                                <div class=\"btn-toolbar kt-margin-l-20\">
                                                    <div class=\"dropdown\" id=\"kt_subheader_group_actions_filter_change\">
                                                        <button type=\"button\" class=\"btn btn-label-brand btn-bold btn-sm dropdown-toggle\" data-toggle=\"dropdown\">";
                // line 457
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Filter By"]);
                echo "<span id=\"filter_selected\"></span></button>
                                                        <div class=\"dropdown-menu kt-padding-t-0 kt-padding-b-0\">
                                                            <ul class=\"kt-nav kt-padding-t-0 kt-padding-b-10\">
                                                                <li class=\"kt-nav__section kt-nav__section--first\">
                                                                    <span class=\"kt-nav__section-text kt-font-boldest kt-padding-b-10\">";
                // line 461
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Only show"]);
                echo ":</span>
                                                                    <br />
                                                                    ";
                // line 463
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["filter_statuses"] ?? null));
                foreach ($context['_seq'] as $context["id"] => $context["name"]) {
                    // line 464
                    echo "                                                                        <form class=\"kt_subheader_filter_form\">
                                                                            ";
                    // line 465
                    echo call_user_func_array($this->env->getFunction('form_token')->getCallable(), ["token"]);
                    echo "
                                                                            ";
                    // line 466
                    echo call_user_func_array($this->env->getFunction('form_sessionKey')->getCallable(), ["sessionKey"]);
                    echo "
                                                                            <li class=\"kt-nav__item\">
                                                                                <input type='hidden' class=\"filter\" value=\"";
                    // line 468
                    echo twig_escape_filter($this->env, $context["id"], "html", null, true);
                    echo "\" />
                                                                                <button class=\"btn btn-outline-dark btn-wide\" style=\"display: block;width: 100%;\" type=\"submit\">";
                    // line 469
                    echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                    echo "</button>
                                                                            </li>
                                                                        </form>
                                                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['id'], $context['name'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 473
                echo "                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        ";
            }
            // line 480
            echo "                                        <div class=\"kt-subheader__group kt-hidden\" id=\"kt_subheader_group_actions\">
                                            <div class=\"kt-subheader__desc\"><span id=\"kt_subheader_group_selected_rows\"></span> ";
            // line 481
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Selected"]);
            echo ":</div>
                                            <div class=\"btn-toolbar kt-margin-l-20\">
                                                ";
            // line 483
            if (($context["statuses"] ?? null)) {
                // line 484
                echo "                                                    <div class=\"dropdown\" id=\"kt_subheader_group_actions_status_change\">
                                                        <button type=\"button\" class=\"btn btn-label-brand btn-bold btn-sm dropdown-toggle\" data-toggle=\"dropdown\">";
                // line 485
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Update Status"]);
                echo "</button>
                                                        <div class=\"dropdown-menu\">
                                                            <ul class=\"kt-nav\">
                                                                <li class=\"kt-nav__section kt-nav__section--first\"><span class=\"kt-nav__section-text\">";
                // line 488
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Change status to"]);
                echo ":</span></li>
                                                                ";
                // line 489
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["statuses"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["status"]) {
                    // line 490
                    echo "                                                                    <li class=\"kt-nav__item\">
                                                                        <a href=\"#\" class=\"kt-nav__link\" data-toggle=\"status-change\" data-status=\"";
                    // line 491
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["status"], "value", [], "any", false, false, false, 491), "html", null, true);
                    echo "\">
                                                                            <span class=\"kt-nav__link-text\"><span class=\"kt-badge kt-badge--unified-success kt-badge--inline kt-badge--bold\">";
                    // line 492
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["status"], "name", [], "any", false, false, false, 492), "html", null, true);
                    echo "</span></span>
                                                                        </a>
                                                                    </li>
                                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['status'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 496
                echo "                                                            </ul>
                                                        </div>
                                                    </div>
                                                ";
            }
            // line 500
            echo "                                                ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true, false, 500), "actions", [], "any", false, true, false, 500), "listing", [], "any", true, true, false, 500)) {
                // line 501
                echo "                                                <div class=\"dropdown\" id=\"kt_subheader_group_actions_shipment_change\">
                                                        <button type=\"button\" class=\"btn btn-label-brand btn-bold btn-sm dropdown-toggle\" data-toggle=\"dropdown\">";
                // line 502
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Selected Actions"]);
                echo "<span id=\"filter_selected\"></span></button>
                                                        <div class=\"dropdown-menu kt-padding-t-0 kt-padding-b-0\">
                                                            <ul class=\"kt-nav kt-padding-t-0 kt-padding-b-10\">
                                                                <li class=\"kt-nav__section kt-nav__section--first\">
                                                                ";
                // line 506
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 506), "actions", [], "any", false, false, false, 506), "listing", [], "any", false, false, false, 506));
                foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
                    // line 507
                    echo "                                                                    <button class=\"btn btn-outline-dark btn-sm btn-bold \" id=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["button"], "id", [], "any", false, false, false, 507), "html", null, true);
                    echo "\" style=\"display: block;width: 100%;\" >";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["button"], "title", [], "any", false, false, false, 507)]);
                    echo "</button>
                                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 509
                echo "                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                ";
            }
            // line 514
            echo "                                                ";
            if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true, false, 514), "actions", [], "any", false, true, false, 514), "delete", [], "any", true, true, false, 514)) {
                // line 515
                echo "                                                    <button class=\"btn btn-label-danger btn-bold btn-sm btn-icon-h\" id=\"kt_subheader_group_actions_delete_all\">";
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delete All"]);
                echo "</button>
                                                ";
            }
            // line 517
            echo "                                            </div>
                                        </div>
                                    ";
        } else {
            // line 520
            echo "                                        ";
            if (twig_get_attribute($this->env, $this->source, ($context["currentCrumb"] ?? null), "show_crumb", [], "any", false, false, false, 520)) {
                // line 521
                echo "                                            <div class=\"kt-subheader__breadcrumbs\">
                                                ";
                // line 522
                $context["activeCrumb"] = "";
                // line 523
                echo "                                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["crumb"]) {
                    // line 524
                    echo "                                                    ";
                    if (twig_get_attribute($this->env, $this->source, $context["crumb"], "in_crumb_trail", [], "any", false, false, false, 524)) {
                        // line 525
                        echo "                                                        ";
                        if (( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 525) &&  !twig_get_attribute($this->env, $this->source, $context["crumb"], "crumb_disabled", [], "any", false, false, false, 525))) {
                            // line 526
                            echo "                                                            <a href=\"";
                            echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, $context["crumb"], "baseFileName", [], "any", false, false, false, 526));
                            echo "\" class=\"kt-subheader__breadcrumbs-home\">
                                                                ";
                            // line 527
                            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 527)) {
                                // line 528
                                echo "                                                                    <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\" class=\"kt-svg-icon\">
                                                                        <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                                                                            <rect id=\"bound\" x=\"0\" y=\"0\" width=\"24\" height=\"24\"/>
                                                                            <path d=\"M3.95709826,8.41510662 L11.47855,3.81866389 C11.7986624,3.62303967 12.2013376,3.62303967 12.52145,3.81866389 L20.0429,8.41510557 C20.6374094,8.77841684 21,9.42493654 21,10.1216692 L21,19.0000642 C21,20.1046337 20.1045695,21.0000642 19,21.0000642 L4.99998155,21.0000673 C3.89541205,21.0000673 2.99998155,20.1046368 2.99998155,19.0000673 L2.99999828,10.1216672 C2.99999935,9.42493561 3.36258984,8.77841732 3.95709826,8.41510662 Z M10,13 C9.44771525,13 9,13.4477153 9,14 L9,17 C9,17.5522847 9.44771525,18 10,18 L14,18 C14.5522847,18 15,17.5522847 15,17 L15,14 C15,13.4477153 14.5522847,13 14,13 L10,13 Z\" id=\"Combined-Shape\" fill=\"#000000\"/>
                                                                        </g>
                                                                    </svg>
                                                                ";
                            } else {
                                // line 534
                                echo call_user_func_array($this->env->getFilter('__')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["crumb"], "title", [], "any", false, false, false, 534)]);
                            }
                            echo "</a>
                                                        ";
                        } else {
                            // line 536
                            echo "                                                            <span class=\"kt-subheader__breadcrumbs-link kt-subheader__breadcrumbs-link--active\">";
                            echo call_user_func_array($this->env->getFilter('__')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["crumb"], "title", [], "any", false, false, false, 536)]);
                            echo "</span>
                                                        ";
                        }
                        // line 538
                        echo "                                                    ";
                    }
                    // line 539
                    echo "                                                    ";
                    if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 539)) {
                        // line 540
                        echo "                                                        ";
                        $context["activeCrumb"] = $context["crumb"];
                        // line 541
                        echo "                                                    ";
                    }
                    // line 542
                    echo "                                                ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['crumb'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 543
                echo "                                            </div>
                                        ";
            }
            // line 545
            echo "                                    ";
        }
        // line 546
        echo "                                </div>
                                <div class=\"kt-subheader__toolbar\">
                                    <div class=\"kt-subheader__wrapper\">
                                        ";
        // line 549
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 549), "daterange", [], "any", false, false, false, 549) == 1)) {
            // line 550
            echo "                                            <div class=\"btn kt-subheader__btn-daterange\" id=\"kt_dashboard_daterangepicker\" data-toggle=\"kt-tooltip\" title=\"";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Select dashboard daterange"]);
            echo "\" data-placement=\"left\">
                                                <span class=\"kt-subheader__btn-daterange-title\" id=\"kt_dashboard_daterangepicker_title\">";
            // line 551
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Today"]);
            echo "</span>&nbsp;
                                                <span class=\"kt-subheader__btn-daterange-date\" id=\"kt_dashboard_daterangepicker_date\">";
            // line 552
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d M"), "html", null, true);
            echo "</span>
                                                <i class=\"flaticon2-calendar-1\"></i>
                                            </div>
                                        ";
        } else {
            // line 556
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 556), "actions", [], "any", false, false, false, 556)) {
                // line 557
                echo "                                                ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true, false, 557), "actions", [], "any", false, true, false, 557), "add", [], "any", true, true, false, 557)) {
                    // line 558
                    echo "                                                    <a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 558), "actions", [], "any", false, false, false, 558), "add", [], "any", false, false, false, 558), "html", null, true);
                    echo "\" class=\"btn btn-label-success btn-bold\" id=\"add_new_btn\">";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Add new"]);
                    echo "&nbsp;<i class=\"flaticon2-add\"></i></a>
                                                ";
                }
                // line 560
                echo "
                                                ";
                // line 561
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true, false, 561), "actions", [], "any", false, true, false, 561), "filter", [], "any", true, true, false, 561)) {
                    // line 562
                    echo "                                                    <a href=\"#\" class=\"btn btn-label-success btn-bold\" id=\"filter\">";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Filter"]);
                    echo "&nbsp;<i class=\"flaticon2-search\"></i></a>
                                                ";
                }
                // line 564
                echo "                                                ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true, false, 564), "actions", [], "any", false, true, false, 564), "buttons", [], "any", true, true, false, 564)) {
                    // line 565
                    echo "                                                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 565), "actions", [], "any", false, false, false, 565), "buttons", [], "any", false, false, false, 565));
                    foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
                        // line 566
                        echo "                                                        <a href=\"";
                        if (twig_get_attribute($this->env, $this->source, $context["button"], "url", [], "any", false, false, false, 566)) {
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["button"], "url", [], "any", false, false, false, 566), "html", null, true);
                        } else {
                            echo "#";
                        }
                        echo "\" class=\"btn btn-label-";
                        if (twig_get_attribute($this->env, $this->source, $context["button"], "type", [], "any", false, false, false, 566)) {
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["button"], "type", [], "any", false, false, false, 566), "html", null, true);
                        } else {
                            echo "primary";
                        }
                        echo " btn-bold\" id=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["button"], "id", [], "any", false, false, false, 566), "html", null, true);
                        echo "\">";
                        echo call_user_func_array($this->env->getFilter('__')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["button"], "title", [], "any", false, false, false, 566)]);
                        echo "&nbsp;<i class=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["button"], "icon", [], "any", false, false, false, 566), "html", null, true);
                        echo "\"></i></a>
                                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 568
                    echo "                                                ";
                }
                // line 569
                echo "                                                ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true, false, 569), "actions", [], "any", false, true, false, 569), "other", [], "any", true, true, false, 569)) {
                    // line 570
                    echo "                                                    <div class=\"dropdown dropdown-inline\" data-toggle-=\"kt-tooltip\" title=\"Quick actions\" data-placement=\"left\">
                                                        <a href=\"#\" class=\"btn kt-subheader__btn-primary\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                                            ";
                    // line 572
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Other Actions"]);
                    echo " &nbsp;

                                                            <!--<i class=\"flaticon2-calendar-1\"></i>-->
                                                            <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\" class=\"kt-svg-icon kt-svg-icon--sm\">
                                                                <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                                                                    <rect id=\"bound\" x=\"0\" y=\"0\" width=\"24\" height=\"24\" />
                                                                    <rect id=\"Rectangle-8\" fill=\"#000000\" x=\"4\" y=\"5\" width=\"16\" height=\"3\" rx=\"1.5\" />
                                                                    <path d=\"M7.5,11 L16.5,11 C17.3284271,11 18,11.6715729 18,12.5 C18,13.3284271 17.3284271,14 16.5,14 L7.5,14 C6.67157288,14 6,13.3284271 6,12.5 C6,11.6715729 6.67157288,11 7.5,11 Z M10.5,17 L13.5,17 C14.3284271,17 15,17.6715729 15,18.5 C15,19.3284271 14.3284271,20 13.5,20 L10.5,20 C9.67157288,20 9,19.3284271 9,18.5 C9,17.6715729 9.67157288,17 10.5,17 Z\" id=\"Combined-Shape\" fill=\"#000000\" opacity=\"0.3\" />
                                                                </g>
                                                            </svg>
                                                        </a>
                                                        <div class=\"dropdown-menu dropdown-menu-fit dropdown-menu-md dropdown-menu-right\">

                                                            <!--begin::Nav-->
                                                            <ul class=\"kt-nav\">
                                                                ";
                    // line 587
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 587), "actions", [], "any", false, false, false, 587), "other", [], "any", false, false, false, 587));
                    foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
                        // line 588
                        echo "                                                                    <li class=\"kt-nav__item\">
                                                                        <a href=\"";
                        // line 589
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["link"], "url", [], "any", false, false, false, 589), "html", null, true);
                        echo "\" class=\"kt-nav__link\">
                                                                            <i class=\"kt-nav__link-icon ";
                        // line 590
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["link"], "icon", [], "any", false, false, false, 590), "html", null, true);
                        echo "\"></i>
                                                                            <span class=\"kt-nav__link-text\">";
                        // line 591
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["link"], "name", [], "any", false, false, false, 591), "html", null, true);
                        echo "</span>
                                                                        </a>
                                                                    </li>
                                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 595
                    echo "                                                            </ul>

                                                            <!--end::Nav-->
                                                        </div>
                                                    </div>
                                                ";
                }
                // line 601
                echo "                                            ";
            }
            // line 602
            echo "                                        ";
        }
        // line 603
        echo "                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end:: Content Head -->
                        <!-- begin:: Content -->
                     <div class=\"kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid\">



                       ";
        // line 613
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "demo_mode", [], "any", false, false, false, 613)) {
            // line 614
            echo "                         <div class=\"alert alert-warning\" role=\"alert\">
                                 ";
            // line 615
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please be aware that data will be replaced on this demo every 6 hours so that every one can test this demo as he needs without corrupting the data."]);
            echo "
                          </div>
                      ";
        }
        // line 618
        echo "
                       ";
        // line 619
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "google", [], "any", false, false, false, 619), "map", [], "any", false, false, false, 619), "key", [], "any", false, false, false, 619) == "")) {
            // line 620
            echo "                          <div class=\"alert alert-warning\" role=\"alert\">
                            ";
            // line 621
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Google maps functions will not be activated until you enter your google key"]);
            echo " <a href=\"";
            echo url("dashboard/settings/google");
            echo "\">&nbsp;";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Here"]);
            echo "</a>, ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["you can follow this tutorial to generate one"]);
            echo " <a href=\"https://developers.google.com/maps/documentation/embed/get-api-key\" target=\"_blank\">&nbsp;";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Get an API Key"]);
            echo "</a>
                          </div>
                      ";
        }
        // line 624
        echo "


                            ";
        // line 627
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 628
        echo "               </div>
                        <!-- end:: Content -->
                    </div>

        <!-- begin:: Footer -->
                    <div class=\"kt-footer  kt-grid__item kt-grid kt-grid--desktop kt-grid--ver-desktop\" id=\"kt_footer\">
                     <div class=\"kt-container  kt-container--fluid \">
                      <div class=\"kt-footer__copyright\">
                       ";
        // line 636
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "&nbsp;&copy;&nbsp;<a href=\"//spotlayer.com\" target=\"_blank\" class=\"kt-link\">";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Powered By Spotlayer"]);
        echo "</a>.
                      </div>
                      <div class=\"kt-footer__menu\">
                       <a href=\"//spotlayer.com/#contact\" target=\"_blank\" class=\"kt-link\">";
        // line 639
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Support"]);
        echo "</a>
                      </div>
                     </div>
                    </div>
                    <!-- end:: Footer -->
                </div>
      </div>
     </div>
        <!-- end:: Page -->


        <!-- begin::Scrolltop -->
        <div id=\"kt_scrolltop\" class=\"kt-scrolltop\">
         <i class=\"fa fa-arrow-up\"></i>
        </div>
        <!-- end::Scrolltop -->

        <!-- begin::Global Config(global config for global JS sciprts) -->
        <script>
            ";
        // line 658
        $context["timezone"] = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "timezone_offset", [], "any", false, false, false, 658), ":");
        // line 659
        echo "            ";
        $context["timezone_offset"] = ((twig_get_attribute($this->env, $this->source, ($context["timezone"] ?? null), 0, [], "any", false, false, false, 659) * 60) + twig_get_attribute($this->env, $this->source, ($context["timezone"] ?? null), 1, [], "any", false, false, false, 659));
        // line 660
        echo "            ";
        $context["timezone_offset_hours"] = (($context["timezone_offset"] ?? null) / 60);
        // line 661
        echo "
            var KTAppOptions = {
                \"colors\":{
                    \"state\":{
                        \"brand\":\"#5d78ff\",
                        \"light\":\"#ffffff\",
                        \"dark\":\"#282a3c\",
                        \"primary\":\"#5867dd\",
                        \"success\":\"#34bfa3\",
                        \"info\":\"#36a3f7\",
                        \"warning\":\"#ffb822\",
                        \"danger\":\"#fd3995\"
                    },
                    \"base\":{
                        \"label\":[
                            \"#c5cbe3\",
                            \"#a1a8c3\",
                            \"#3d4465\",
                            \"#3e4466\"
                        ],
                        \"shape\":[
                            \"#f0f3ff\",
                            \"#d9dffa\",
                            \"#afb4d4\",
                            \"#646c9a\"
                        ]
                    }
                },
                \"text\":{
                    'loading' : '";
        // line 690
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Loading ..."]);
        echo "'
                },
                \"timezone_offset\": \"";
        // line 692
        echo twig_escape_filter($this->env, ($context["timezone_offset"] ?? null), "html", null, true);
        echo "\",
                \"timezone_offset_hours\": \"";
        // line 693
        echo twig_escape_filter($this->env, ($context["timezone_offset_hours"] ?? null), "html", null, true);
        echo "\",
                \"dateformat\": \"";
        // line 694
        echo twig_escape_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "dateformat", [], "any", false, false, false, 694), ["d" => "dd", "m" => "mm", "Y" => "yyyy"]), "html", null, true);
        echo "\",
                \"daterangeformat\": \"";
        // line 695
        echo twig_escape_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "dateformat", [], "any", false, false, false, 695), ["d" => "DD", "m" => "MM", "M" => "MMM"]), "html", null, true);
        echo "\"
            };
        </script>
        <!-- end::Global Config -->

     <!--begin::Global Theme Bundle(used by all pages) -->
            <script src=\"./admin/vendors/custom/notifications/js/modernizr.custom.js\" type=\"text/javascript\"></script>
            <script src=\"./admin/vendors/custom/notifications/js/classie.js\" type=\"text/javascript\"></script>
            <script src=\"./admin/vendors/custom/notifications/js/notificationFx.js\" type=\"text/javascript\"></script>
        <script src=\"./admin/vendors/global/vendors.bundle.js\" type=\"text/javascript\"></script>
        <script src=\"./admin/js/demo1/scripts.bundle.js\" type=\"text/javascript\"></script>
           ";
        // line 706
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "notifications", [], "any", false, false, false, 706), "live", [], "any", false, false, false, 706) == 1)) {
            // line 707
            echo "               <script src=\"//js.pusher.com/5.0/pusher.min.js\"></script>
           ";
        }
        // line 709
        echo "  <!--end::Global Theme Bundle -->

        <!--begin::Page Scripts(used by this page) -->
            ";
        // line 712
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="' . Request::getBasePath() .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 713
        echo "            ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 714
        echo "            <script type=\"text/javascript\">
                function flashRequest(type,message){

                    swal.fire({
                        buttonsStyling: false,
                        title: message,
                        type: type,
                        showConfirmButton: false,
                        timer: 3000
                    });
                }
                KTUtil.ready(function () {

                    \$.validator.addMethod(\"customDateValidator\", function(value, element) {
                            // parseDate throws exception if the value is invalid
                            try{\$.datepicker.parseDate( KTAppOptions.dateformat, value);return true;}
                            catch(e){return false;}
                        },
                        \"";
        // line 732
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please enter a valid date"]);
        echo "\"
                    );

                    if('dd/mm/yyyy' == KTAppOptions.dateformat){
                        console.log(KTAppOptions.dateformat);
                        \$.validator.methods.date = function (value, element) {
                            value = dateValue(value);
                            return this.optional(element) || !/Invalid|NaN/.test(new Date(value).toString());;
                        }

                        function dateValue(value) {
                            var date = value.split(\"/\");
                            return date[2] + \"/\" + date[1] + \"/\" + date[0]
                        }
                    }

                    \$('body').on('click', '.locale', function(e){
                        e.preventDefault();
                        var selected = \$(this).attr('rel');
                        if(selected != ''){
                            \$.request('onSwitchLocale', {
                                data: {locale: selected}
                            });
                        }
                    });
                    \$('select').selectpicker({
                        noneSelectedText: '";
        // line 758
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Nothing selected"]);
        echo "',
                    });
                    if (KTUtil.get('kt_quick_search_dropdown')) {
                        KTQuickSearch().init(KTUtil.get('kt_quick_search_dropdown'));
                    }

                    if (KTUtil.get('kt_quick_search_inline')) {
                        KTQuickSearchInline().init(KTUtil.get('kt_quick_search_inline'));
                    }

                    if (KTUtil.get('kt_quick_search_offcanvas')) {
                        KTQuickSearchOffcanvas().init(KTUtil.get('kt_quick_search_offcanvas'));
                    }

                    \$('input.decimal').blur(function(){
                        var num = parseFloat(\$(this).val());
                        var cleanNum = num.toFixed(";
        // line 774
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "initbiz_money_fraction_digits", [], "any", false, false, false, 774), "html", null, true);
        echo ");
                        \$(this).val(cleanNum);
                    });

                    var arrows;
                    if (KTUtil.isRTL()) {
                        arrows = {
                            leftArrow: '<i class=\"la la-angle-right\"></i>',
                            rightArrow: '<i class=\"la la-angle-left\"></i>'
                        }
                    } else {
                        arrows = {
                            leftArrow: '<i class=\"la la-angle-left\"></i>',
                            rightArrow: '<i class=\"la la-angle-right\"></i>'
                        }
                    }

                    \$.fn.datepicker.dates['";
        // line 791
        echo twig_escape_filter($this->env, ($context["currentLang"] ?? null), "html", null, true);
        echo "'] = {
                        days: [\"";
        // line 792
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sunday"]);
        echo "\", \"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Monday"]);
        echo "\", \"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Tuesday"]);
        echo "\", \"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Wednesday"]);
        echo "\", \"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Thursday"]);
        echo "\", \"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Friday"]);
        echo "\", \"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Saturday"]);
        echo "\"],
                        daysShort: [\"";
        // line 793
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sun"]);
        echo "\", \"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Mon"]);
        echo "\", \"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Tue"]);
        echo "\", \"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Wed"]);
        echo "\", \"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Thu"]);
        echo "\", \"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Fri"]);
        echo "\", \"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sat"]);
        echo "\"],
                        daysMin: [\"";
        // line 794
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Su"]);
        echo "\", \"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Mo"]);
        echo "\", \"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Tu"]);
        echo "\", \"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["We"]);
        echo "\", \"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Th"]);
        echo "\", \"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Fr"]);
        echo "\", \"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sa"]);
        echo "\"],
                        months: [\"";
        // line 795
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["January"]);
        echo "\", \"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["February"]);
        echo "\", \"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["March"]);
        echo "\", \"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["April"]);
        echo "\", \"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["May"]);
        echo "\", \"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["June"]);
        echo "\", \"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["July"]);
        echo "\", \"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["August"]);
        echo "\", \"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["September"]);
        echo "\", \"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["October"]);
        echo "\", \"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["November"]);
        echo "\", \"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["December"]);
        echo "\"],
                        monthsShort: [\"";
        // line 796
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Jan"]);
        echo "\", \"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Feb"]);
        echo "\", \"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Mar"]);
        echo "\", \"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Apr"]);
        echo "\", \"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["May"]);
        echo "\", \"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Jun"]);
        echo "\", \"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Jul"]);
        echo "\", \"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Aug"]);
        echo "\", \"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sep"]);
        echo "\", \"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Oct"]);
        echo "\", \"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Nov"]);
        echo "\", \"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Dec"]);
        echo "\"],
                        today: \"";
        // line 797
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Today"]);
        echo "\",
                        clear: \"";
        // line 798
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Clear"]);
        echo "\",
                        format: KTAppOptions.dateformat,
                        titleFormat: KTAppOptions.dateformat, /* Leverages same syntax as 'format' */
                        weekStart: 0
                    };
                    \$('.date').datepicker({
                        rtl: KTUtil.isRTL(),
                        language: '";
        // line 805
        echo twig_escape_filter($this->env, ($context["currentLang"] ?? null), "html", null, true);
        echo "',
                        format: KTAppOptions.dateformat,
                        todayHighlight: true,
                        orientation: \"bottom left\",
                        templates: arrows
                    });

                        var momentNow = moment();

                    console.log(";
        // line 814
        echo twig_escape_filter($this->env, ($context["timezone_offset"] ?? null), "html", null, true);
        echo ");
                    console.log(";
        // line 815
        echo twig_escape_filter($this->env, ($context["timezone_offset_hours"] ?? null), "html", null, true);
        echo ");
                    console.log(momentNow.utcOffset(4));
                    console.log(momentNow.utcOffset(";
        // line 817
        echo twig_escape_filter($this->env, ($context["timezone_offset_hours"] ?? null), "html", null, true);
        echo "));
                    var interval = setInterval(function() {
                        if('ar' == '";
        // line 819
        echo twig_escape_filter($this->env, ($context["currentLang"] ?? null), "html", null, true);
        echo "'){
                            moment.locale('ar-sa');
                        }
                        var momentNow = moment();
                        \$('#date-part').html(momentNow.utcOffset(";
        // line 823
        echo twig_escape_filter($this->env, ($context["timezone_offset_hours"] ?? null), "html", null, true);
        echo ").format(KTAppOptions.daterangeformat) + ' ');
                        \$('#time-part').html(momentNow.utcOffset(";
        // line 824
        echo twig_escape_filter($this->env, ($context["timezone_offset_hours"] ?? null), "html", null, true);
        echo ").format('hh:mm:ss A'));
                    }, 100);

                });

                \"use strict\";

                var KTQuickSearch = function() {
                    var target;
                    var form;
                    var input;
                    var closeIcon;
                    var resultWrapper;
                    var resultDropdown;
                    var resultDropdownToggle;
                    var inputGroup;
                    var query = '';

                    var hasResult = false;
                    var timeout = false;
                    var isProcessing = false;
                    var requestTimeout = 200; // ajax request fire timeout in milliseconds
                    var spinnerClass = 'kt-spinner kt-spinner--input kt-spinner--sm kt-spinner--brand kt-spinner--right';
                    var resultClass = 'kt-quick-search--has-result';
                    var minLength = 2;

                    var showProgress = function() {
                        isProcessing = true;
                        KTUtil.addClass(inputGroup, spinnerClass);

                        if (closeIcon) {
                            KTUtil.hide(closeIcon);
                        }
                    }

                    var hideProgress = function() {
                        isProcessing = false;
                        KTUtil.removeClass(inputGroup, spinnerClass);

                        if (closeIcon) {
                            if (input.value.length < minLength) {
                                KTUtil.hide(closeIcon);
                            } else {
                                KTUtil.show(closeIcon, 'flex');
                            }
                        }
                    }

                    var showDropdown = function() {
                        if (resultDropdownToggle && !KTUtil.hasClass(resultDropdown, 'show')) {
                            \$(resultDropdownToggle).dropdown('toggle');
                            \$(resultDropdownToggle).dropdown('update');
                        }
                    }

                    var hideDropdown = function() {
                        if (resultDropdownToggle && KTUtil.hasClass(resultDropdown, 'show')) {
                            \$(resultDropdownToggle).dropdown('toggle');
                        }
                    }

                    var processSearch = function() {
                        if (hasResult && query === input.value) {
                            hideProgress();
                            KTUtil.addClass(target, resultClass);
                            showDropdown();
                            KTUtil.scrollUpdate(resultWrapper);

                            return;
                        }

                        query = input.value;

                        KTUtil.removeClass(target, resultClass);
                        showProgress();
                        hideDropdown();

                        \$.request('onQuicksearch', {
                            data: {query: query},
                            success: function(res) {
                                hasResult = true;
                                hideProgress();
                                KTUtil.addClass(target, resultClass);
                                KTUtil.setHTML(resultWrapper, res.result);
                                showDropdown();
                                KTUtil.scrollUpdate(resultWrapper);
                            },
                            error: function(res) {
                                hasResult = false;
                                hideProgress();
                                KTUtil.addClass(target, resultClass);
                                KTUtil.setHTML(resultWrapper, '<span class=\"kt-quick-search__message kt-font-danger\">";
        // line 915
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Connection error. Pleae try again later"]);
        echo ".</div>');
                                showDropdown();
                                KTUtil.scrollUpdate(resultWrapper);
                            }
                        });
                    }

                    var handleCancel = function(e) {
                        input.value = '';
                        query = '';
                        hasResult = false;
                        KTUtil.hide(closeIcon);
                        KTUtil.removeClass(target, resultClass);
                        hideDropdown();
                    }

                    var handleSearch = function() {
                        if (input.value.length < minLength) {
                            hideProgress();
                            hideDropdown();

                            return;
                        }

                        if (isProcessing == true) {
                            return;
                        }

                        if (timeout) {
                            clearTimeout(timeout);
                        }

                        timeout = setTimeout(function() {
                            processSearch();
                        }, requestTimeout);
                    }

                    return {
                        init: function(element) {
                            // Init
                            target = element;
                            form = KTUtil.find(target, '.kt-quick-search__form');
                            input = KTUtil.find(target, '.kt-quick-search__input');
                            closeIcon = KTUtil.find(target, '.kt-quick-search__close');
                            resultWrapper = KTUtil.find(target, '.kt-quick-search__wrapper');
                            resultDropdown = KTUtil.find(target, '.dropdown-menu');
                            resultDropdownToggle = KTUtil.find(target, '[data-toggle=\"dropdown\"]');
                            inputGroup = KTUtil.find(target, '.input-group');

                            // Attach input keyup handler
                            KTUtil.addEvent(input, 'keyup', handleSearch);
                            KTUtil.addEvent(input, 'focus', handleSearch);

                            // Prevent enter click
                            form.onkeypress = function(e) {
                                var key = e.charCode || e.keyCode || 0;
                                if (key == 13) {
                                    e.preventDefault();
                                }
                            }

                            KTUtil.addEvent(closeIcon, 'click', handleCancel);
                        }
                    };
                };

                var KTQuickSearchInline = KTQuickSearch;
                var KTQuickSearchOffcanvas = KTQuickSearch;
                ";
        // line 983
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "notifications", [], "any", false, false, false, 983), "live", [], "any", false, false, false, 983) == 1)) {
            // line 984
            echo "                    var pusher = new Pusher('";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "notifications", [], "any", false, false, false, 984), "pusher", [], "any", false, false, false, 984), "key", [], "any", false, false, false, 984), "html", null, true);
            echo "', {cluster: '";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "notifications", [], "any", false, false, false, 984), "pusher", [], "any", false, false, false, 984), "cluster", [], "any", false, false, false, 984), "html", null, true);
            echo "',forceTLS: true});
                    var presenceChannel = pusher.subscribe('spotlayer');
                    presenceChannel.bind('notification', function(data) {
                        //if(data.id != ";
            // line 987
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 987), "html", null, true);
            echo "){
                        if(data.for_userid == ";
            // line 988
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 988), "html", null, true);
            echo "){
                            setTimeout( function() {
                                // create the notification
                                // check if the reciever is the targeted user
                                if(data.thumb == 'icon'){
                                    var thumb_content = '<i class=\"'+data.icon+'\"></i>';
                                }else{
                                    var thumb_content = '<img src=\"./admin/vendors/custom/notifications/img/default.jpg\"/>';
                                }
                                var notification = new NotificationFx({
                                    message : '<div class=\"ns-thumb '+data.thumb+'\">'+thumb_content+'</div><div class=\"ns-content notice\"><p><a href=\"";
            // line 998
            echo url("dashboard/notifications");
            echo "\">'+data.sender.name+'</a> '+data.subject+'.</p></div>',
                                    layout : 'other',
                                    ttl : 5000,
                                    effect : 'thumbslider',
                                    type : 'notice', // notice, warning, error or success
                                    onClose : function() {
                                        //dismiss notification and make it as readed;
                                    }
                                });
                                // show the notification
                                notification.show();
                                if(data.sound){
                                    let audio = new Audio('./admin/media/notifications/notification.mp3');
                                    audio.play();
                                }
                                \$.request('onRefreshTime', {
                                    data: {id: ";
            // line 1014
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 1014), "html", null, true);
            echo "},
                                    update: { notificationsmenu: '#notificationsmenu' },
                                    complete: function(e) {
                                        notificationPanel();
                                    }
                                });
                            }, 4000 );
                        }


                    });
                ";
        }
        // line 1026
        echo "            </script>
        <!--end::Page Scripts -->
    </body>
    <!-- end::Body -->
</html>";
    }

    public function getTemplateName()
    {
        return "/Users/bola/Downloads/e-cargo/themes/spotlayer/layouts/admin.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1955 => 1026,  1940 => 1014,  1921 => 998,  1908 => 988,  1904 => 987,  1895 => 984,  1893 => 983,  1822 => 915,  1728 => 824,  1724 => 823,  1717 => 819,  1712 => 817,  1707 => 815,  1703 => 814,  1691 => 805,  1681 => 798,  1677 => 797,  1651 => 796,  1625 => 795,  1609 => 794,  1593 => 793,  1577 => 792,  1573 => 791,  1553 => 774,  1534 => 758,  1505 => 732,  1485 => 714,  1481 => 713,  1470 => 712,  1465 => 709,  1461 => 707,  1459 => 706,  1445 => 695,  1441 => 694,  1437 => 693,  1433 => 692,  1428 => 690,  1397 => 661,  1394 => 660,  1391 => 659,  1389 => 658,  1367 => 639,  1359 => 636,  1349 => 628,  1347 => 627,  1342 => 624,  1328 => 621,  1325 => 620,  1323 => 619,  1320 => 618,  1314 => 615,  1311 => 614,  1309 => 613,  1297 => 603,  1294 => 602,  1291 => 601,  1283 => 595,  1273 => 591,  1269 => 590,  1265 => 589,  1262 => 588,  1258 => 587,  1240 => 572,  1236 => 570,  1233 => 569,  1230 => 568,  1205 => 566,  1200 => 565,  1197 => 564,  1191 => 562,  1189 => 561,  1186 => 560,  1178 => 558,  1175 => 557,  1172 => 556,  1165 => 552,  1161 => 551,  1156 => 550,  1154 => 549,  1149 => 546,  1146 => 545,  1142 => 543,  1128 => 542,  1125 => 541,  1122 => 540,  1119 => 539,  1116 => 538,  1110 => 536,  1104 => 534,  1095 => 528,  1093 => 527,  1088 => 526,  1085 => 525,  1082 => 524,  1064 => 523,  1062 => 522,  1059 => 521,  1056 => 520,  1051 => 517,  1045 => 515,  1042 => 514,  1035 => 509,  1024 => 507,  1020 => 506,  1013 => 502,  1010 => 501,  1007 => 500,  1001 => 496,  991 => 492,  987 => 491,  984 => 490,  980 => 489,  976 => 488,  970 => 485,  967 => 484,  965 => 483,  960 => 481,  957 => 480,  948 => 473,  938 => 469,  934 => 468,  929 => 466,  925 => 465,  922 => 464,  918 => 463,  913 => 461,  906 => 457,  901 => 454,  899 => 453,  889 => 446,  884 => 444,  880 => 443,  871 => 441,  868 => 440,  866 => 439,  863 => 438,  857 => 436,  855 => 435,  849 => 433,  847 => 432,  828 => 416,  824 => 415,  814 => 410,  808 => 407,  795 => 397,  789 => 394,  776 => 384,  770 => 381,  761 => 375,  758 => 374,  752 => 370,  743 => 369,  737 => 366,  727 => 360,  725 => 359,  717 => 354,  711 => 351,  702 => 345,  684 => 338,  678 => 335,  674 => 333,  668 => 331,  662 => 329,  660 => 328,  652 => 322,  646 => 320,  640 => 318,  638 => 317,  634 => 316,  630 => 315,  623 => 310,  616 => 305,  606 => 301,  602 => 300,  592 => 298,  588 => 297,  582 => 293,  572 => 291,  567 => 290,  561 => 286,  559 => 285,  555 => 283,  551 => 282,  534 => 268,  528 => 265,  524 => 264,  520 => 263,  471 => 216,  467 => 214,  460 => 213,  456 => 211,  451 => 208,  444 => 207,  436 => 203,  432 => 201,  426 => 199,  424 => 198,  416 => 197,  411 => 196,  408 => 195,  403 => 194,  398 => 191,  396 => 190,  393 => 189,  389 => 187,  387 => 186,  383 => 185,  378 => 183,  363 => 181,  354 => 180,  351 => 179,  346 => 178,  343 => 177,  341 => 176,  333 => 171,  322 => 163,  312 => 156,  306 => 153,  301 => 150,  295 => 147,  292 => 146,  286 => 143,  283 => 142,  281 => 141,  234 => 101,  230 => 100,  202 => 79,  198 => 78,  176 => 58,  173 => 57,  167 => 53,  154 => 42,  139 => 29,  137 => 28,  121 => 19,  113 => 18,  105 => 17,  97 => 16,  89 => 15,  79 => 12,  71 => 11,  60 => 9,  55 => 7,  51 => 6,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"{{currentLang}}\" {% if currentLang == 'ar'%}direction=\"rtl\" dir=\"rtl\" style=\"direction: rtl\"{% endif %} >

    <!-- begin::Head -->
    <head><!--begin::Base Path (base relative path for assets of this page) -->
        <base href=\"{{ 'assets/admin'|theme }}\"><!--end::Base Path -->
        <meta charset=\"{{ settings.company.charset }}\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <title>{{ this.page.title|__ }} | {% if settings.company.title %}{{ settings.company.title|__ }}{% else %}{{ settings.company.title }}{% endif %}</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
     <meta name=\"keywords\" content=\"{% if settings.company.keywords %}{{ settings.company.keywords|__ }}{% else %}{{ settings.company.keywords }}{% endif %}\" />
     <meta name=\"description\" content=\"{% if settings.company.description %}{{ settings.company.description|__ }}{% else %}{{ settings.company.description }}{% endif %}\">
        <meta name=\"author\" content=\"\"/>

        <link rel=\"icon\" href=\"{% if settings.favicon %}{{ settings.favicon.path }}{% else %}./admin/media/logos/logo.ico{% endif %}\" type=\"image/png\">
        <link rel=\"apple-touch-icon\" href=\"{% if settings.favicon %}{{ settings.favicon.path }}{% else %}./admin/media/logos/logo.ico{% endif %}\"/>
        <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"{% if settings.favicon %}{{ settings.favicon.thumb(72,72) }}{% else %}./admin/media/logos/logo.ico{% endif %}\"/>
        <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"{% if settings.favicon %}{{ settings.favicon.thumb(114,114) }}{% else %}./admin/media/logos/logo.ico{% endif %}\"/>
        <link rel=\"apple-touch-icon\" sizes=\"144x144\" href=\"{% if settings.favicon %}{{ settings.favicon.thumb(144,144) }}{% else %}./admin/media/logos/logo.ico{% endif %}\"/>

        <!--begin::Fonts -->
        <link href=\"//fonts.googleapis.com/css?family=Nunito|Roboto\" rel=\"stylesheet\">
        <!--end::Fonts -->


        <!--begin::Global Theme Styles(used by all pages) -->
            <link href=\"./admin/vendors/global/vendors.bundle.css\" rel=\"stylesheet\" type=\"text/css\" />
            {% if currentLang == 'ar'%}
                <link href=\"./admin/css/demo1/style.bundle.rtl.css\" rel=\"stylesheet\" type=\"text/css\" />
                <link href=\"./admin/vendors/custom/notifications/css/ns-default.rtl.css\" rel=\"stylesheet\" type=\"text/css\" />
                <link href=\"./admin/vendors/custom/notifications/css/ns-style-other.rtl.css\" rel=\"stylesheet\" type=\"text/css\" />
                <link href=\"//fonts.googleapis.com/css?family=Cairo:300,400,600,700\" rel=\"stylesheet\">


                <!--begin::Layout Skins(used by all pages) -->
                <link href=\"./admin/css/demo1/skins/header/base/light.rtl.css\" rel=\"stylesheet\" type=\"text/css\" />
                <link href=\"./admin/css/demo1/skins/header/menu/light.rtl.css\" rel=\"stylesheet\" type=\"text/css\" />
                <link href=\"./admin/css/demo1/skins/brand/light.rtl.css\" rel=\"stylesheet\" type=\"text/css\" />
                <link href=\"./admin/css/demo1/skins/aside/light.rtl.css\" rel=\"stylesheet\" type=\"text/css\" />
                <!--end::Layout Skins -->
            {% else %}
                <link href=\"./admin/css/demo1/style.bundle.css\" rel=\"stylesheet\" type=\"text/css\" />
                <link href=\"./admin/vendors/custom/notifications/css/ns-default.css\" rel=\"stylesheet\" type=\"text/css\" />
                <link href=\"./admin/vendors/custom/notifications/css/ns-style-other.css\" rel=\"stylesheet\" type=\"text/css\" />

                <!--begin::Layout Skins(used by all pages) -->
                <link href=\"./admin/css/demo1/skins/header/base/light.css\" rel=\"stylesheet\" type=\"text/css\" />
                <link href=\"./admin/css/demo1/skins/header/menu/light.css\" rel=\"stylesheet\" type=\"text/css\" />
                <link href=\"./admin/css/demo1/skins/brand/light.css\" rel=\"stylesheet\" type=\"text/css\" />
                <link href=\"./admin/css/demo1/skins/aside/light.css\" rel=\"stylesheet\" type=\"text/css\" />
                <!--end::Layout Skins -->
            {% endif %}
        <!--end::Global Theme Styles -->

        <!--begin::Layout Skins(used by all pages) -->
        <!--end::Layout Skins -->
        {% styles %}

        <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-25459653-14\"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-25459653-14');
</script>

    </head>

    <body  class=\"kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed\"  >


     <!-- begin:: Page -->
        <!-- begin:: Header Mobile -->
        <div id=\"kt_header_mobile\" class=\"kt-header-mobile  kt-header-mobile--fixed \" >
            <div class=\"kt-header-mobile__logo\">
          <a href=\"{{url('/')}}\">
           <!--<img alt=\"Logo\" src=\"{% if settings.mobile_logo %}{{ settings.mobile_logo.path }}{% else %}./admin/media/logos/logo.svg{% endif %}\" style=\"max-height:40px\"/>-->
           <img style=\"max-height:500px; max-width: 80%; width:auto;height:auto\" src=\"ecargologo.jpg\">

             </a>
            </div>
            <div class=\"kt-header-mobile__toolbar\">
    <button class=\"kt-header-mobile__toggler kt-header-mobile__toggler--left\" id=\"kt_aside_mobile_toggler\"><span></span></button>
    <button class=\"kt-header-mobile__toggler\" id=\"kt_header_mobile_toggler\"><span></span></button>
             <button class=\"kt-header-mobile__topbar-toggler\" id=\"kt_header_mobile_topbar_toggler\"><i class=\"flaticon-more\"></i></button>
            </div>
        </div>
        <!-- end:: Header Mobile -->
        <div class=\"kt-grid kt-grid--hor kt-grid--root\">
      <div class=\"kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page\">
                <!-- begin:: Aside -->
                <button class=\"kt-aside-close \" id=\"kt_aside_close_btn\"><i class=\"la la-close\"></i></button>

                <div class=\"kt-aside  kt-aside--fixed  kt-grid__item kt-grid kt-grid--desktop kt-grid--hor-desktop\" id=\"kt_aside\">
                 <!-- begin:: Aside -->
                    <div class=\"kt-aside__brand kt-grid__item \" id=\"kt_aside_brand\">
                     <div class=\"kt-aside__brand-logo\">
                      <a href=\"{{url('dashboard')}}\">
                       <!--<img alt=\"Logo\" src=\"{% if settings.logo %}{{ settings.logo.path }}{% else %}./admin/media/logos/logo.svg{% endif %}\" style=\"max-height:50px;\"/>-->
                       <img style=\"max-height:500px; max-width: 80%; width:auto;height:auto\" src=\"ecargologo.jpg\">

                      </a>
                     </div>

               <div class=\"kt-aside__brand-tools\">
                   <button class=\"kt-aside__brand-aside-toggler\" id=\"kt_aside_toggler\">
                    <span>
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\" class=\"kt-svg-icon\">
                                        <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                                            <polygon id=\"Shape\" points=\"0 0 24 0 24 24 0 24\"/>
                                            <path d=\"M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z\" id=\"Path-94\" fill=\"#000000\" fill-rule=\"nonzero\" transform=\"translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999) \"/>
                                            <path d=\"M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z\" id=\"Path-94\" fill=\"#000000\" fill-rule=\"nonzero\" opacity=\"0.3\" transform=\"translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999) \"/>
                                        </g>
                                    </svg>
                                </span>
                    <span>
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\" class=\"kt-svg-icon\">
                                        <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                                            <polygon id=\"Shape\" points=\"0 0 24 0 24 24 0 24\"/>
                                            <path d=\"M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z\" id=\"Path-94\" fill=\"#000000\" fill-rule=\"nonzero\"/>
                                            <path d=\"M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z\" id=\"Path-94\" fill=\"#000000\" fill-rule=\"nonzero\" opacity=\"0.3\" transform=\"translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999) \"/>
                                        </g>
                                    </svg>
                                </span>
                   </button>
                   <!--
                   <button class=\"kt-aside__brand-aside-toggler kt-aside__brand-aside-toggler--left\" id=\"kt_aside_toggler\"><span></span></button>
                   -->
                  </div>
                 </div>
                    <!-- end:: Aside -->
                    <!-- begin:: Aside Menu -->
                    <div class=\"kt-aside-menu-wrapper kt-grid__item kt-grid__item--fluid\" id=\"kt_aside_menu_wrapper\">

                     <div id=\"kt_aside_menu\" class=\"kt-aside-menu \" data-ktmenu-vertical=\"1\" data-ktmenu-scroll=\"1\" data-ktmenu-dropdown-timeout=\"500\">

                            <div class=\"kt-widget kt-widget--user-profile-1 kt-padding-l-20 kt-padding-r-20 kt-padding-b-0\">
                                <div class=\"kt-widget__head\">
                                    {% if user.avatar %}
                                        <div class=\"kt-widget__media\">
                                            <img src=\"{{user.avatar.thumb(100, 100,'crop')}}\" alt=\"image\">
                                        </div>
                                   {% else %}
                                       <span class=\"kt-media kt-media--lg kt-media--brand \">
                                            <span>{{user.name|upper|slice(0,2)}}</span>
                                        </span>
                                   {% endif %}
                                    <div class=\"kt-widget__content kt-padding-t-10\">
                                        <div class=\"kt-widget__section\">
                                            <a href=\"javascript:;\" class=\"kt-widget__username\">
                                                {{user.name|capitalize}}
                                            </a>
                                            <span class=\"kt-widget__subtitle\">
                                                {{'Welcome back'|__}},
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class=\"kt-widget__footer kt-margin-t-15\">
                                    <a href=\"{{'dashboard/order-create'|page}}\" class=\"btn btn-label-brand btn-lg btn-upper btn-block\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\" class=\"kt-svg-icon kt-svg-icon--light\">
                                            <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                                                <rect id=\"bound\" x=\"0\" y=\"0\" width=\"24\" height=\"24\"/>
                                                <circle id=\"Oval-5\" fill=\"#000000\" opacity=\"0.3\" cx=\"12\" cy=\"12\" r=\"10\"/>
                                                <path d=\"M11,11 L11,7 C11,6.44771525 11.4477153,6 12,6 C12.5522847,6 13,6.44771525 13,7 L13,11 L17,11 C17.5522847,11 18,11.4477153 18,12 C18,12.5522847 17.5522847,13 17,13 L13,13 L13,17 C13,17.5522847 12.5522847,18 12,18 C11.4477153,18 11,17.5522847 11,17 L11,13 L7,13 C6.44771525,13 6,12.5522847 6,12 C6,11.4477153 6.44771525,11 7,11 L11,11 Z\" id=\"Combined-Shape\" fill=\"#000000\"/>
                                            </g>
                                        </svg>
                                         <span>{{'Add Shipment'|__}}</span>
                                     </a>
                                </div>
                            </div>

                            {% if mainMenu.menuItems %}
                          <ul class=\"kt-menu__nav \">
                                    {% for item in mainMenu.menuItems if not item.viewBag.isHidden %}
                                        {% if user.hasUserPermission(item.code, 'r') or item.code is empty %}
                                   <li class=\"kt-menu__item  {{ item.isActive or item.isChildActive or this.page.menu_breadcrumb == item.code ? 'kt-menu__item--open kt-menu__item--here' : '' }} kt-menu__item--submenu kt-menu__item--rel\" {% if item.items %}data-ktmenu-submenu-toggle=\"hover\" aria-haspopup=\"true\"{% endif %}>
                                                <a href=\"{% if item.url %}{{ item.url }}{% else %}#{% endif %}\" class=\"kt-menu__link {% if item.items %}kt-menu__toggle{% endif %}\" {{ item.viewBag.isExternal ? 'target=\"_blank\"' }}>
                                                    <span class=\"kt-menu__link-icon\">
                                                        {{ item.viewBag.icon|raw }}
                                                    </span>
                                                    <span class=\"kt-menu__link-text\">{{ item.title|__ }}</span>
                                                    {% if item.items %}
                                                        <i class=\"kt-menu__ver-arrow la la-angle-right\"></i>
                                                    {% endif %}
                                                </a>
                                                {% if item.items %}
                                                    <div class=\"kt-menu__submenu \">
                                                        <span class=\"kt-menu__arrow\"></span>
                                                        <ul class=\"kt-menu__subnav\">
                                                            {% for item in item.items if not item.viewBag.isHidden %}
                                                                {% if user.hasUserPermission(item.code, 'r') or item.code is empty %}
                                                                    <li class=\"kt-menu__item {{ item.isActive or item.isChildActive or (currentPageUrl == item.url|replace({'[url]': url('/')})) ? 'kt-menu__item--open kt-menu__item--here' : '' }}\"  aria-haspopup=\"true\">
                                                                        <a  href=\"{% if item.url %}{{ item.url|replace({'[url]': url('/')}) }}{% else %}javascript:;{% endif %}\" class=\"kt-menu__link \">
                                                                            {% if item.viewBag.icon and item.viewBag.icon != '' %}
                                                                                {{ item.viewBag.icon|raw }}
                                                                            {% else %}
                                                                                <i class=\"kt-menu__link-bullet kt-menu__link-bullet--dot\"><span></span></i>
                                                                            {% endif %}
                                                                            <span class=\"kt-menu__link-text\">{{ item.title|__ }}</span>
                                                                        </a>
                                                                    </li>
                                                                {% endif %}
                                                            {% endfor %}
                                                        </ul>
                                                    </div>
                                                {% endif %}
                                            </li>
                                        {% endif %}
                                    {% endfor %}
                                </ul>
                            {% endif %}
                     </div>
                    </div>
                    <!-- end:: Aside Menu -->
                </div>
                <!-- end:: Aside -->

       <div class=\"kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper\" id=\"kt_wrapper\">
        <!-- begin:: Header -->
                    <div id=\"kt_header\" class=\"kt-header kt-grid__item  kt-header--fixed \" >
                        <!-- begin:: Header Menu -->
                        <button class=\"kt-header-menu-wrapper-close\" id=\"kt_header_menu_mobile_close_btn\"><i class=\"la la-close\"></i></button>
                        <div class=\"kt-header-menu-wrapper\" id=\"kt_header_menu_wrapper\">

                         <div id=\"kt_header_menu\" class=\"kt-header-menu kt-header-menu-mobile  kt-header-menu--layout-default \"  >
                          <ul class=\"kt-menu__nav \">
                           <li class=\"kt-menu__item\">
                                        <a  href=\"javascript:;\" class=\"kt-menu__link kt-menu__time\">
                                            <i class=\"kt-menu__link-icon flaticon-clock-1\"></i>
                                            <span class=\"kt-menu__link-text\">
                                                <div class='time-frame'>
                                                    <div id='date-part' style=\"display: inline-block;\"></div>
                                                    <div id='time-part' style=\"display: inline-block;\"></div>
                                                </div>
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                         </div>
                        </div>
                        <!-- end:: Header Menu -->
                        <!-- begin:: Header Topbar -->
                        <div class=\"kt-header__topbar\">
                            <!--begin: Search -->
                            <div class=\"kt-header__topbar-item kt-header__topbar-item--search dropdown\" id=\"kt_quick_search_toggle\">
                                <div class=\"kt-header__topbar-wrapper\" data-toggle=\"dropdown\" data-offset=\"10px,0px\">
                                    <span class=\"kt-header__topbar-icon\">
             <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\" class=\"kt-svg-icon\">
                                            <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                                                <rect id=\"bound\" x=\"0\" y=\"0\" width=\"24\" height=\"24\"/>
                                                <path d=\"M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z\" id=\"Path-2\" fill=\"#000000\" fill-rule=\"nonzero\" opacity=\"0.3\"/>
                                                <path d=\"M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z\" id=\"Path\" fill=\"#000000\" fill-rule=\"nonzero\"/>
                                            </g>
                                        </svg>
                                    </span>
                                </div>
                                <div class=\"dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-lg\">
                                    <div class=\"kt-quick-search kt-quick-search--dropdown kt-quick-search--result-compact\" id=\"kt_quick_search_dropdown\">
                                        <form method=\"GET\" action=\"{{url('dashboard/search')}}\"class=\"kt-quick-search__form\">
                                            {{form_token()}}
                                            {{form_sessionKey()}}
                                            <div class=\"input-group\">
                                                <div class=\"input-group-prepend\"><span class=\"input-group-text\"><i class=\"flaticon2-search-1\"></i></span></div>
                                                <input type=\"text\" class=\"form-control kt-quick-search__input\" placeholder=\"{{'quick search'|__}}...\" name=\"quicksearch\" >
                                                <div class=\"input-group-append\"><span class=\"input-group-text\"><i class=\"la la-close kt-quick-search__close\"></i></span></div>
                                            </div>
                                        </form>
                                        <div class=\"kt-quick-search__wrapper kt-scroll\" data-scroll=\"true\" data-height=\"325\" data-mobile-height=\"200\" style=\"direction: ltr;\">

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end: Search -->

                            <!--begin: Notifications -->
                            <div id=\"notificationsmenu\" class=\"kt-header__topbar-item dropdown\">
                                {% partial 'notificationsmenu' %}
                            </div>
                            <!--end: Notifications -->
                            {% if locales %}
                                <!--begin: Language bar -->
                                <div class=\"kt-header__topbar-item kt-header__topbar-item--langs\">
                                    <div class=\"kt-header__topbar-wrapper\" data-toggle=\"dropdown\" data-offset=\"10px,0px\">
                                        <span class=\"kt-header__topbar-icon kt-header__topbar-icon--info\">
                                            {% for code, name in locales if activeLocale == code %}
                                                <img class=\"\" src=\"./admin/media/flags/{{code}}.svg\" alt=\"\" />
                                            {% endfor %}
                                        </span>
                                    </div>
                                    <div class=\"dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim\">
                                        <ul class=\"kt-nav kt-margin-t-10 kt-margin-b-10\">
                                            {% for code, name in locales %}
                                                <li class=\"kt-nav__item {% if activeLocale == code %}kt-nav__item--active{% endif %} locale\" rel=\"{{code}}\">
                                                    <a href=\"#\" class=\"kt-nav__link\">
                                                        <span class=\"kt-nav__link-icon\"><img src=\"./admin/media/flags/{{code}}.svg\" alt=\"\" /></span>
                                                        <span class=\"kt-nav__link-text\">{{ name }}</span>
                                                    </a>
                                                </li>
                                            {% endfor %}
                                        </ul>
                                    </div>
                                </div>
                                <!--end: Language bar -->
                            {% endif %}

                            <!--begin: User bar -->
                            <div class=\"kt-header__topbar-item kt-header__topbar-item--user\">
                                <div class=\"kt-header__topbar-wrapper\" data-toggle=\"dropdown\" data-offset=\"10px,0px\">
                                    <div class=\"kt-header__topbar-user\">
                                        <span class=\"kt-header__topbar-welcome\">{{'Hi'|__}},</span>
                                        <span class=\"kt-header__topbar-username\">{{user.name|capitalize}}</span>
                                        {% if user.avatar %}
                                             <img alt=\"Pic\" src=\"{{user.avatar.thumb(25, 25,'crop')}}\" />
                                        {% else %}
                                           <span class=\"kt-badge kt-badge--username kt-badge--unified-brand kt-badge--lg kt-badge--rounded kt-font-light kt-badge--bold\">{{user.name|upper|slice(0,2)}}</span>
                                        {% endif %}
                                    </div>
                                </div>
                                <div class=\"dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-xl\">
                                    <!--begin: Head -->
                                    <div class=\"kt-user-card kt-user-card--skin-light kt-notification-item-padding-x\">
                                        <div class=\"kt-user-card__avatar\">
                                            {% if user.avatar %}
                                                 <img alt=\"Pic\" src=\"{{user.avatar.thumb(60, 60,'crop')}}\" />
                                            {% else %}
                                                <span class=\"kt-badge kt-badge--username kt-badge--unified-success kt-badge--lg kt-badge--rounded kt-badge--bold\">{{user.name|capitalize|slice(0,1)}}</span>
                                             {% endif %}
                                        </div>
                                        <div class=\"kt-user-card__name\">
                                            {{user.name|capitalize}}
                                        </div>
                                        <!--<div class=\"kt-user-card__badge kt-hidden\">
                                            <span class=\"btn btn-{% if user.messages.where('read_at', null)|length > 0 %}danger{% else %}success{% endif %} btn-sm btn-bold btn-font-md\">{{user.messages.where('read_at', null)|length}} {{'messages'|__}}</span>
                                        </div>-->
                                    </div>
                                    <!--end: Head -->

                                    <!--begin: Navigation -->
                                    <div class=\"kt-notification\">
                                        <a href=\"{{'dashboard/profile'|page}}\" class=\"kt-notification__item\">
                                            <div class=\"kt-notification__item-icon\">
                                                <i class=\"flaticon2-calendar-3 kt-font-success\"></i>
                                            </div>
                                            <div class=\"kt-notification__item-details\">
                                                <div class=\"kt-notification__item-title kt-font-bold\">
                                                    {{'My Profile'|__}}
                                                </div>
                                                <div class=\"kt-notification__item-time\">
                                                    {{'Account settings and more'|__}}
                                                </div>
                                            </div>
                                        </a>
                                        <!--
                                            {% if user.hasUserPermission('message', 'r') %}
                                                <a href=\"{{'dashboard/inbox'|page}}\" class=\"kt-notification__item\">
                                                    <div class=\"kt-notification__item-icon\">
                                                        <i class=\"flaticon2-mail kt-font-warning\"></i>
                                                    </div>
                                                    <div class=\"kt-notification__item-details\">
                                                        <div class=\"kt-notification__item-title kt-font-bold\">
                                                            {{'Messages'|__}}
                                                        </div>
                                                        <div class=\"kt-notification__item-time\">
                                                            {{'Customers messages from website'|__}}{% if unreaded > 0 %} <span class=\"kt-badge kt-badge--danger kt-badge--inline kt-badge--pill kt-badge--rounded\">{{unreaded}} {{'Unreaded'|__}}</span>{% endif %}
                                                        </div>
                                                    </div>
                                                </a>
                                            {% endif %}
                                        -->
                                        <a href=\"{{'dashboard/notifications'|page}}\" class=\"kt-notification__item\">
                                            <div class=\"kt-notification__item-icon\">
                                                <i class=\"flaticon2-rocket-1 kt-font-danger\"></i>
                                            </div>
                                            <div class=\"kt-notification__item-details\">
                                                <div class=\"kt-notification__item-title kt-font-bold\">
                                                    {{'My Notifications'|__}}
                                                </div>
                                                <div class=\"kt-notification__item-time\">
                                                    {{'all pervious notifications'|__}}
                                                </div>
                                            </div>
                                        </a>
                                        <a href=\"#\" class=\"kt-notification__item kt-hidden\">
                                            <div class=\"kt-notification__item-icon\">
                                                <i class=\"flaticon2-hourglass kt-font-brand\"></i>
                                            </div>
                                            <div class=\"kt-notification__item-details\">
                                                <div class=\"kt-notification__item-title kt-font-bold\">
                                                    {{'My Tasks'|__}}
                                                </div>
                                                <div class=\"kt-notification__item-time\">
                                                    {{'latest tasks and requests'|__}}
                                                </div>
                                            </div>
                                        </a>
                                        <a href=\"#\" class=\"kt-hidden kt-notification__item\">
                                            <div class=\"kt-notification__item-icon\">
                                                <i class=\"flaticon2-cardiogram kt-font-warning\"></i>
                                            </div>
                                            <div class=\"kt-notification__item-details\">
                                                <div class=\"kt-notification__item-title kt-font-bold\">
                                                    {{'Billing'|__}}
                                                </div>
                                                <div class=\"kt-notification__item-time\">
                                                    {{'billing & statements'|__}} <span class=\"kt-badge kt-badge--danger kt-badge--inline kt-badge--pill kt-badge--rounded\">2 {{'pending'|__}}</span>
                                                </div>
                                            </div>
                                        </a>
                                        <div class=\"kt-notification__custom kt-space-between\">
                                            <a class=\"btn btn-danger btn-block btn-bold kt-font-light\" data-request=\"onLogout\" data-request-data=\"redirect: '/'\">{{'Sign Out'|__}}</a>
                                            <a href=\"#\" target=\"_blank\" class=\"btn btn-clean btn-sm btn-bold kt-hidden\">{{'Upgrade Plan'|__}}</a>
                                        </div>
                                    </div>
                                    <!--end: Navigation -->
                                </div>
                            </div>
                            <!--end: User bar -->
                        </div>
                        <!-- end:: Header Topbar -->
                    </div>
                    <!-- end:: Header -->
        <div class=\"kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor\" id=\"kt_content\">
                        <!-- begin:: Content Head -->
                        <div class=\"kt-subheader   kt-grid__item\" id=\"kt_subheader\">
                            <div class=\"kt-container  kt-container--fluid  \">
                                <div class=\"kt-subheader__main\">
                                    {% set crumbOptions = breadcrumbs.options %}
                                    <h3 class=\"kt-subheader__title\"><button class=\"kt-subheader__mobile-toggle kt-subheader__mobile-toggle--left\" id=\"kt_subheader_mobile_toggle\"><span></span></button>{{ this.page.title|__ }}</h3>

                                    {% if this.page.description %}
                                        <span class=\"kt-subheader__desc\">{{ this.page.description|__ }}</span>
                                    {% endif %}
                                    <span class=\"kt-subheader__separator kt-subheader__separator--v\"></span>
                                    {% if this.page.listing %}
                                        <div class=\"kt-subheader__group\" id=\"kt_subheader_search\">
                                            <span class=\"kt-subheader__desc\" id=\"kt_subheader_total\">{% if total_records %}{{total_records}} {{'Total'|__}}{% endif %}</span>
                                            <form class=\"kt-margin-l-20\" id=\"kt_subheader_search_form\" style=\"margin-left:10px !important \">
                                                {{form_token()}}
                                                {{form_sessionKey()}}
                                                <div class=\"kt-input-icon kt-input-icon--right kt-subheader__search\">
                                                    <input type=\"text\" class=\"form-control\" placeholder=\"{{'Quick Search'|__}}\" id=\"generalSearch\">
                                                    <span class=\"kt-input-icon__icon kt-input-icon__icon--right\">
                                                        <span><svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\" class=\"kt-svg-icon\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><rect id=\"bound\" x=\"0\" y=\"0\" width=\"24\" height=\"24\"/><path d=\"M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z\" id=\"Path-2\" fill=\"#000000\" fill-rule=\"nonzero\" opacity=\"0.3\"/><path d=\"M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z\" id=\"Path\" fill=\"#000000\" fill-rule=\"nonzero\"/></g></svg></span>
                                                    </span>
                                                </div>
                                            </form>
                                        </div>
                                        {% if filter_statuses %}
                                            <div class=\"kt-subheader__group\" id=\"kt_subheader_search\">
                                                <div class=\"btn-toolbar kt-margin-l-20\">
                                                    <div class=\"dropdown\" id=\"kt_subheader_group_actions_filter_change\">
                                                        <button type=\"button\" class=\"btn btn-label-brand btn-bold btn-sm dropdown-toggle\" data-toggle=\"dropdown\">{{'Filter By'|__}}<span id=\"filter_selected\"></span></button>
                                                        <div class=\"dropdown-menu kt-padding-t-0 kt-padding-b-0\">
                                                            <ul class=\"kt-nav kt-padding-t-0 kt-padding-b-10\">
                                                                <li class=\"kt-nav__section kt-nav__section--first\">
                                                                    <span class=\"kt-nav__section-text kt-font-boldest kt-padding-b-10\">{{'Only show'|__}}:</span>
                                                                    <br />
                                                                    {% for id,name in filter_statuses %}
                                                                        <form class=\"kt_subheader_filter_form\">
                                                                            {{form_token()}}
                                                                            {{form_sessionKey()}}
                                                                            <li class=\"kt-nav__item\">
                                                                                <input type='hidden' class=\"filter\" value=\"{{id}}\" />
                                                                                <button class=\"btn btn-outline-dark btn-wide\" style=\"display: block;width: 100%;\" type=\"submit\">{{name}}</button>
                                                                            </li>
                                                                        </form>
                                                                    {% endfor %}
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        {% endif %}
                                        <div class=\"kt-subheader__group kt-hidden\" id=\"kt_subheader_group_actions\">
                                            <div class=\"kt-subheader__desc\"><span id=\"kt_subheader_group_selected_rows\"></span> {{'Selected'|__}}:</div>
                                            <div class=\"btn-toolbar kt-margin-l-20\">
                                                {% if statuses %}
                                                    <div class=\"dropdown\" id=\"kt_subheader_group_actions_status_change\">
                                                        <button type=\"button\" class=\"btn btn-label-brand btn-bold btn-sm dropdown-toggle\" data-toggle=\"dropdown\">{{'Update Status'|__}}</button>
                                                        <div class=\"dropdown-menu\">
                                                            <ul class=\"kt-nav\">
                                                                <li class=\"kt-nav__section kt-nav__section--first\"><span class=\"kt-nav__section-text\">{{'Change status to'|__}}:</span></li>
                                                                {% for status in statuses %}
                                                                    <li class=\"kt-nav__item\">
                                                                        <a href=\"#\" class=\"kt-nav__link\" data-toggle=\"status-change\" data-status=\"{{status.value}}\">
                                                                            <span class=\"kt-nav__link-text\"><span class=\"kt-badge kt-badge--unified-success kt-badge--inline kt-badge--bold\">{{status.name}}</span></span>
                                                                        </a>
                                                                    </li>
                                                                {% endfor %}
                                                            </ul>
                                                        </div>
                                                    </div>
                                                {% endif %}
                                                {% if this.page.actions.listing  is defined %}
                                                <div class=\"dropdown\" id=\"kt_subheader_group_actions_shipment_change\">
                                                        <button type=\"button\" class=\"btn btn-label-brand btn-bold btn-sm dropdown-toggle\" data-toggle=\"dropdown\">{{'Selected Actions'|__}}<span id=\"filter_selected\"></span></button>
                                                        <div class=\"dropdown-menu kt-padding-t-0 kt-padding-b-0\">
                                                            <ul class=\"kt-nav kt-padding-t-0 kt-padding-b-10\">
                                                                <li class=\"kt-nav__section kt-nav__section--first\">
                                                                {% for button in this.page.actions.listing %}
                                                                    <button class=\"btn btn-outline-dark btn-sm btn-bold \" id=\"{{button.id}}\" style=\"display: block;width: 100%;\" >{{button.title|__}}</button>
                                                                {% endfor %}
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                {% endif %}
                                                {% if this.page.actions.delete is not defined %}
                                                    <button class=\"btn btn-label-danger btn-bold btn-sm btn-icon-h\" id=\"kt_subheader_group_actions_delete_all\">{{'Delete All'|__}}</button>
                                                {% endif %}
                                            </div>
                                        </div>
                                    {% else %}
                                        {% if currentCrumb.show_crumb %}
                                            <div class=\"kt-subheader__breadcrumbs\">
                                                {% set activeCrumb = '' %}
                                                {% for crumb in breadcrumbs %}
                                                    {% if crumb.in_crumb_trail %}
                                                        {% if not loop.last and not crumb.crumb_disabled %}
                                                            <a href=\"{{crumb.baseFileName | page}}\" class=\"kt-subheader__breadcrumbs-home\">
                                                                {% if loop.first %}
                                                                    <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\" class=\"kt-svg-icon\">
                                                                        <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                                                                            <rect id=\"bound\" x=\"0\" y=\"0\" width=\"24\" height=\"24\"/>
                                                                            <path d=\"M3.95709826,8.41510662 L11.47855,3.81866389 C11.7986624,3.62303967 12.2013376,3.62303967 12.52145,3.81866389 L20.0429,8.41510557 C20.6374094,8.77841684 21,9.42493654 21,10.1216692 L21,19.0000642 C21,20.1046337 20.1045695,21.0000642 19,21.0000642 L4.99998155,21.0000673 C3.89541205,21.0000673 2.99998155,20.1046368 2.99998155,19.0000673 L2.99999828,10.1216672 C2.99999935,9.42493561 3.36258984,8.77841732 3.95709826,8.41510662 Z M10,13 C9.44771525,13 9,13.4477153 9,14 L9,17 C9,17.5522847 9.44771525,18 10,18 L14,18 C14.5522847,18 15,17.5522847 15,17 L15,14 C15,13.4477153 14.5522847,13 14,13 L10,13 Z\" id=\"Combined-Shape\" fill=\"#000000\"/>
                                                                        </g>
                                                                    </svg>
                                                                {% else %}{{crumb.title|__}}{% endif %}</a>
                                                        {% else %}
                                                            <span class=\"kt-subheader__breadcrumbs-link kt-subheader__breadcrumbs-link--active\">{{crumb.title|__}}</span>
                                                        {% endif %}
                                                    {% endif %}
                                                    {% if not loop.last %}
                                                        {% set activeCrumb = crumb %}
                                                    {% endif %}
                                                {% endfor %}
                                            </div>
                                        {% endif %}
                                    {% endif %}
                                </div>
                                <div class=\"kt-subheader__toolbar\">
                                    <div class=\"kt-subheader__wrapper\">
                                        {% if this.page.daterange == 1 %}
                                            <div class=\"btn kt-subheader__btn-daterange\" id=\"kt_dashboard_daterangepicker\" data-toggle=\"kt-tooltip\" title=\"{{'Select dashboard daterange'|__}}\" data-placement=\"left\">
                                                <span class=\"kt-subheader__btn-daterange-title\" id=\"kt_dashboard_daterangepicker_title\">{{'Today'|__}}</span>&nbsp;
                                                <span class=\"kt-subheader__btn-daterange-date\" id=\"kt_dashboard_daterangepicker_date\">{{'now'|date('d M')}}</span>
                                                <i class=\"flaticon2-calendar-1\"></i>
                                            </div>
                                        {% else %}
                                            {% if this.page.actions %}
                                                {% if this.page.actions.add is defined %}
                                                    <a href=\"{{this.page.actions.add}}\" class=\"btn btn-label-success btn-bold\" id=\"add_new_btn\">{{'Add new'|__}}&nbsp;<i class=\"flaticon2-add\"></i></a>
                                                {% endif %}

                                                {% if this.page.actions.filter is defined %}
                                                    <a href=\"#\" class=\"btn btn-label-success btn-bold\" id=\"filter\">{{'Filter'|__}}&nbsp;<i class=\"flaticon2-search\"></i></a>
                                                {% endif %}
                                                {% if this.page.actions.buttons is defined %}
                                                    {% for button in this.page.actions.buttons %}
                                                        <a href=\"{% if button.url %}{{button.url}}{% else %}#{% endif %}\" class=\"btn btn-label-{% if button.type %}{{button.type}}{% else %}primary{% endif %} btn-bold\" id=\"{{button.id}}\">{{button.title|__}}&nbsp;<i class=\"{{button.icon}}\"></i></a>
                                                    {% endfor %}
                                                {% endif %}
                                                {% if this.page.actions.other is defined %}
                                                    <div class=\"dropdown dropdown-inline\" data-toggle-=\"kt-tooltip\" title=\"Quick actions\" data-placement=\"left\">
                                                        <a href=\"#\" class=\"btn kt-subheader__btn-primary\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                                            {{'Other Actions'|__}} &nbsp;

                                                            <!--<i class=\"flaticon2-calendar-1\"></i>-->
                                                            <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\" class=\"kt-svg-icon kt-svg-icon--sm\">
                                                                <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                                                                    <rect id=\"bound\" x=\"0\" y=\"0\" width=\"24\" height=\"24\" />
                                                                    <rect id=\"Rectangle-8\" fill=\"#000000\" x=\"4\" y=\"5\" width=\"16\" height=\"3\" rx=\"1.5\" />
                                                                    <path d=\"M7.5,11 L16.5,11 C17.3284271,11 18,11.6715729 18,12.5 C18,13.3284271 17.3284271,14 16.5,14 L7.5,14 C6.67157288,14 6,13.3284271 6,12.5 C6,11.6715729 6.67157288,11 7.5,11 Z M10.5,17 L13.5,17 C14.3284271,17 15,17.6715729 15,18.5 C15,19.3284271 14.3284271,20 13.5,20 L10.5,20 C9.67157288,20 9,19.3284271 9,18.5 C9,17.6715729 9.67157288,17 10.5,17 Z\" id=\"Combined-Shape\" fill=\"#000000\" opacity=\"0.3\" />
                                                                </g>
                                                            </svg>
                                                        </a>
                                                        <div class=\"dropdown-menu dropdown-menu-fit dropdown-menu-md dropdown-menu-right\">

                                                            <!--begin::Nav-->
                                                            <ul class=\"kt-nav\">
                                                                {% for link in this.page.actions.other %}
                                                                    <li class=\"kt-nav__item\">
                                                                        <a href=\"{{link.url}}\" class=\"kt-nav__link\">
                                                                            <i class=\"kt-nav__link-icon {{link.icon}}\"></i>
                                                                            <span class=\"kt-nav__link-text\">{{link.name}}</span>
                                                                        </a>
                                                                    </li>
                                                                {% endfor %}
                                                            </ul>

                                                            <!--end::Nav-->
                                                        </div>
                                                    </div>
                                                {% endif %}
                                            {% endif %}
                                        {% endif %}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end:: Content Head -->
                        <!-- begin:: Content -->
                     <div class=\"kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid\">



                       {% if settings.demo_mode %}
                         <div class=\"alert alert-warning\" role=\"alert\">
                                 {{'Please be aware that data will be replaced on this demo every 6 hours so that every one can test this demo as he needs without corrupting the data.'|__}}
                          </div>
                      {% endif %}

                       {% if settings.google.map.key == '' %}
                          <div class=\"alert alert-warning\" role=\"alert\">
                            {{'Google maps functions will not be activated until you enter your google key'|__}} <a href=\"{{url('dashboard/settings/google')}}\">&nbsp;{{'Here'|__}}</a>, {{'you can follow this tutorial to generate one'|__}} <a href=\"https://developers.google.com/maps/documentation/embed/get-api-key\" target=\"_blank\">&nbsp;{{'Get an API Key'|__}}</a>
                          </div>
                      {% endif %}



                            {% page %}
               </div>
                        <!-- end:: Content -->
                    </div>

        <!-- begin:: Footer -->
                    <div class=\"kt-footer  kt-grid__item kt-grid kt-grid--desktop kt-grid--ver-desktop\" id=\"kt_footer\">
                     <div class=\"kt-container  kt-container--fluid \">
                      <div class=\"kt-footer__copyright\">
                       {{ \"now\"|date(\"Y\") }}&nbsp;&copy;&nbsp;<a href=\"//spotlayer.com\" target=\"_blank\" class=\"kt-link\">{{'Powered By Spotlayer'|__}}</a>.
                      </div>
                      <div class=\"kt-footer__menu\">
                       <a href=\"//spotlayer.com/#contact\" target=\"_blank\" class=\"kt-link\">{{ 'Support'|__ }}</a>
                      </div>
                     </div>
                    </div>
                    <!-- end:: Footer -->
                </div>
      </div>
     </div>
        <!-- end:: Page -->


        <!-- begin::Scrolltop -->
        <div id=\"kt_scrolltop\" class=\"kt-scrolltop\">
         <i class=\"fa fa-arrow-up\"></i>
        </div>
        <!-- end::Scrolltop -->

        <!-- begin::Global Config(global config for global JS sciprts) -->
        <script>
            {% set timezone = settings.timezone_offset|split(':') %}
            {% set timezone_offset = (timezone.0*60) + (timezone.1) %}
            {% set timezone_offset_hours = (timezone_offset/60) %}

            var KTAppOptions = {
                \"colors\":{
                    \"state\":{
                        \"brand\":\"#5d78ff\",
                        \"light\":\"#ffffff\",
                        \"dark\":\"#282a3c\",
                        \"primary\":\"#5867dd\",
                        \"success\":\"#34bfa3\",
                        \"info\":\"#36a3f7\",
                        \"warning\":\"#ffb822\",
                        \"danger\":\"#fd3995\"
                    },
                    \"base\":{
                        \"label\":[
                            \"#c5cbe3\",
                            \"#a1a8c3\",
                            \"#3d4465\",
                            \"#3e4466\"
                        ],
                        \"shape\":[
                            \"#f0f3ff\",
                            \"#d9dffa\",
                            \"#afb4d4\",
                            \"#646c9a\"
                        ]
                    }
                },
                \"text\":{
                    'loading' : '{{\"Loading ...\"|__}}'
                },
                \"timezone_offset\": \"{{timezone_offset}}\",
                \"timezone_offset_hours\": \"{{timezone_offset_hours}}\",
                \"dateformat\": \"{{settings.dateformat|replace({'d':'dd', 'm':'mm', 'Y':'yyyy'})}}\",
                \"daterangeformat\": \"{{settings.dateformat|replace({'d':'DD', 'm':'MM', 'M':'MMM'})}}\"
            };
        </script>
        <!-- end::Global Config -->

     <!--begin::Global Theme Bundle(used by all pages) -->
            <script src=\"./admin/vendors/custom/notifications/js/modernizr.custom.js\" type=\"text/javascript\"></script>
            <script src=\"./admin/vendors/custom/notifications/js/classie.js\" type=\"text/javascript\"></script>
            <script src=\"./admin/vendors/custom/notifications/js/notificationFx.js\" type=\"text/javascript\"></script>
        <script src=\"./admin/vendors/global/vendors.bundle.js\" type=\"text/javascript\"></script>
        <script src=\"./admin/js/demo1/scripts.bundle.js\" type=\"text/javascript\"></script>
           {% if settings.notifications.live == 1 %}
               <script src=\"//js.pusher.com/5.0/pusher.min.js\"></script>
           {% endif %}
  <!--end::Global Theme Bundle -->

        <!--begin::Page Scripts(used by this page) -->
            {% framework extras %}
            {% scripts %}
            <script type=\"text/javascript\">
                function flashRequest(type,message){

                    swal.fire({
                        buttonsStyling: false,
                        title: message,
                        type: type,
                        showConfirmButton: false,
                        timer: 3000
                    });
                }
                KTUtil.ready(function () {

                    \$.validator.addMethod(\"customDateValidator\", function(value, element) {
                            // parseDate throws exception if the value is invalid
                            try{\$.datepicker.parseDate( KTAppOptions.dateformat, value);return true;}
                            catch(e){return false;}
                        },
                        \"{{'Please enter a valid date'|__}}\"
                    );

                    if('dd/mm/yyyy' == KTAppOptions.dateformat){
                        console.log(KTAppOptions.dateformat);
                        \$.validator.methods.date = function (value, element) {
                            value = dateValue(value);
                            return this.optional(element) || !/Invalid|NaN/.test(new Date(value).toString());;
                        }

                        function dateValue(value) {
                            var date = value.split(\"/\");
                            return date[2] + \"/\" + date[1] + \"/\" + date[0]
                        }
                    }

                    \$('body').on('click', '.locale', function(e){
                        e.preventDefault();
                        var selected = \$(this).attr('rel');
                        if(selected != ''){
                            \$.request('onSwitchLocale', {
                                data: {locale: selected}
                            });
                        }
                    });
                    \$('select').selectpicker({
                        noneSelectedText: '{{\"Nothing selected\"|__}}',
                    });
                    if (KTUtil.get('kt_quick_search_dropdown')) {
                        KTQuickSearch().init(KTUtil.get('kt_quick_search_dropdown'));
                    }

                    if (KTUtil.get('kt_quick_search_inline')) {
                        KTQuickSearchInline().init(KTUtil.get('kt_quick_search_inline'));
                    }

                    if (KTUtil.get('kt_quick_search_offcanvas')) {
                        KTQuickSearchOffcanvas().init(KTUtil.get('kt_quick_search_offcanvas'));
                    }

                    \$('input.decimal').blur(function(){
                        var num = parseFloat(\$(this).val());
                        var cleanNum = num.toFixed({{primary_currency.initbiz_money_fraction_digits}});
                        \$(this).val(cleanNum);
                    });

                    var arrows;
                    if (KTUtil.isRTL()) {
                        arrows = {
                            leftArrow: '<i class=\"la la-angle-right\"></i>',
                            rightArrow: '<i class=\"la la-angle-left\"></i>'
                        }
                    } else {
                        arrows = {
                            leftArrow: '<i class=\"la la-angle-left\"></i>',
                            rightArrow: '<i class=\"la la-angle-right\"></i>'
                        }
                    }

                    \$.fn.datepicker.dates['{{currentLang}}'] = {
                        days: [\"{{'Sunday'|__}}\", \"{{'Monday'|__}}\", \"{{'Tuesday'|__}}\", \"{{'Wednesday'|__}}\", \"{{'Thursday'|__}}\", \"{{'Friday'|__}}\", \"{{'Saturday'|__}}\"],
                        daysShort: [\"{{'Sun'|__}}\", \"{{'Mon'|__}}\", \"{{'Tue'|__}}\", \"{{'Wed'|__}}\", \"{{'Thu'|__}}\", \"{{'Fri'|__}}\", \"{{'Sat'|__}}\"],
                        daysMin: [\"{{'Su'|__}}\", \"{{'Mo'|__}}\", \"{{'Tu'|__}}\", \"{{'We'|__}}\", \"{{'Th'|__}}\", \"{{'Fr'|__}}\", \"{{'Sa'|__}}\"],
                        months: [\"{{'January'|__}}\", \"{{'February'|__}}\", \"{{'March'|__}}\", \"{{'April'|__}}\", \"{{'May'|__}}\", \"{{'June'|__}}\", \"{{'July'|__}}\", \"{{'August'|__}}\", \"{{'September'|__}}\", \"{{'October'|__}}\", \"{{'November'|__}}\", \"{{'December'|__}}\"],
                        monthsShort: [\"{{'Jan'|__}}\", \"{{'Feb'|__}}\", \"{{'Mar'|__}}\", \"{{'Apr'|__}}\", \"{{'May'|__}}\", \"{{'Jun'|__}}\", \"{{'Jul'|__}}\", \"{{'Aug'|__}}\", \"{{'Sep'|__}}\", \"{{'Oct'|__}}\", \"{{'Nov'|__}}\", \"{{'Dec'|__}}\"],
                        today: \"{{'Today'|__}}\",
                        clear: \"{{'Clear'|__}}\",
                        format: KTAppOptions.dateformat,
                        titleFormat: KTAppOptions.dateformat, /* Leverages same syntax as 'format' */
                        weekStart: 0
                    };
                    \$('.date').datepicker({
                        rtl: KTUtil.isRTL(),
                        language: '{{currentLang}}',
                        format: KTAppOptions.dateformat,
                        todayHighlight: true,
                        orientation: \"bottom left\",
                        templates: arrows
                    });

                        var momentNow = moment();

                    console.log({{timezone_offset}});
                    console.log({{timezone_offset_hours}});
                    console.log(momentNow.utcOffset(4));
                    console.log(momentNow.utcOffset({{timezone_offset_hours}}));
                    var interval = setInterval(function() {
                        if('ar' == '{{currentLang}}'){
                            moment.locale('ar-sa');
                        }
                        var momentNow = moment();
                        \$('#date-part').html(momentNow.utcOffset({{timezone_offset_hours}}).format(KTAppOptions.daterangeformat) + ' ');
                        \$('#time-part').html(momentNow.utcOffset({{timezone_offset_hours}}).format('hh:mm:ss A'));
                    }, 100);

                });

                \"use strict\";

                var KTQuickSearch = function() {
                    var target;
                    var form;
                    var input;
                    var closeIcon;
                    var resultWrapper;
                    var resultDropdown;
                    var resultDropdownToggle;
                    var inputGroup;
                    var query = '';

                    var hasResult = false;
                    var timeout = false;
                    var isProcessing = false;
                    var requestTimeout = 200; // ajax request fire timeout in milliseconds
                    var spinnerClass = 'kt-spinner kt-spinner--input kt-spinner--sm kt-spinner--brand kt-spinner--right';
                    var resultClass = 'kt-quick-search--has-result';
                    var minLength = 2;

                    var showProgress = function() {
                        isProcessing = true;
                        KTUtil.addClass(inputGroup, spinnerClass);

                        if (closeIcon) {
                            KTUtil.hide(closeIcon);
                        }
                    }

                    var hideProgress = function() {
                        isProcessing = false;
                        KTUtil.removeClass(inputGroup, spinnerClass);

                        if (closeIcon) {
                            if (input.value.length < minLength) {
                                KTUtil.hide(closeIcon);
                            } else {
                                KTUtil.show(closeIcon, 'flex');
                            }
                        }
                    }

                    var showDropdown = function() {
                        if (resultDropdownToggle && !KTUtil.hasClass(resultDropdown, 'show')) {
                            \$(resultDropdownToggle).dropdown('toggle');
                            \$(resultDropdownToggle).dropdown('update');
                        }
                    }

                    var hideDropdown = function() {
                        if (resultDropdownToggle && KTUtil.hasClass(resultDropdown, 'show')) {
                            \$(resultDropdownToggle).dropdown('toggle');
                        }
                    }

                    var processSearch = function() {
                        if (hasResult && query === input.value) {
                            hideProgress();
                            KTUtil.addClass(target, resultClass);
                            showDropdown();
                            KTUtil.scrollUpdate(resultWrapper);

                            return;
                        }

                        query = input.value;

                        KTUtil.removeClass(target, resultClass);
                        showProgress();
                        hideDropdown();

                        \$.request('onQuicksearch', {
                            data: {query: query},
                            success: function(res) {
                                hasResult = true;
                                hideProgress();
                                KTUtil.addClass(target, resultClass);
                                KTUtil.setHTML(resultWrapper, res.result);
                                showDropdown();
                                KTUtil.scrollUpdate(resultWrapper);
                            },
                            error: function(res) {
                                hasResult = false;
                                hideProgress();
                                KTUtil.addClass(target, resultClass);
                                KTUtil.setHTML(resultWrapper, '<span class=\"kt-quick-search__message kt-font-danger\">{{\"Connection error. Pleae try again later\"|__}}.</div>');
                                showDropdown();
                                KTUtil.scrollUpdate(resultWrapper);
                            }
                        });
                    }

                    var handleCancel = function(e) {
                        input.value = '';
                        query = '';
                        hasResult = false;
                        KTUtil.hide(closeIcon);
                        KTUtil.removeClass(target, resultClass);
                        hideDropdown();
                    }

                    var handleSearch = function() {
                        if (input.value.length < minLength) {
                            hideProgress();
                            hideDropdown();

                            return;
                        }

                        if (isProcessing == true) {
                            return;
                        }

                        if (timeout) {
                            clearTimeout(timeout);
                        }

                        timeout = setTimeout(function() {
                            processSearch();
                        }, requestTimeout);
                    }

                    return {
                        init: function(element) {
                            // Init
                            target = element;
                            form = KTUtil.find(target, '.kt-quick-search__form');
                            input = KTUtil.find(target, '.kt-quick-search__input');
                            closeIcon = KTUtil.find(target, '.kt-quick-search__close');
                            resultWrapper = KTUtil.find(target, '.kt-quick-search__wrapper');
                            resultDropdown = KTUtil.find(target, '.dropdown-menu');
                            resultDropdownToggle = KTUtil.find(target, '[data-toggle=\"dropdown\"]');
                            inputGroup = KTUtil.find(target, '.input-group');

                            // Attach input keyup handler
                            KTUtil.addEvent(input, 'keyup', handleSearch);
                            KTUtil.addEvent(input, 'focus', handleSearch);

                            // Prevent enter click
                            form.onkeypress = function(e) {
                                var key = e.charCode || e.keyCode || 0;
                                if (key == 13) {
                                    e.preventDefault();
                                }
                            }

                            KTUtil.addEvent(closeIcon, 'click', handleCancel);
                        }
                    };
                };

                var KTQuickSearchInline = KTQuickSearch;
                var KTQuickSearchOffcanvas = KTQuickSearch;
                {% if settings.notifications.live == 1 %}
                    var pusher = new Pusher('{{ settings.notifications.pusher.key }}', {cluster: '{{ settings.notifications.pusher.cluster }}',forceTLS: true});
                    var presenceChannel = pusher.subscribe('spotlayer');
                    presenceChannel.bind('notification', function(data) {
                        //if(data.id != {{user.id}}){
                        if(data.for_userid == {{user.id}}){
                            setTimeout( function() {
                                // create the notification
                                // check if the reciever is the targeted user
                                if(data.thumb == 'icon'){
                                    var thumb_content = '<i class=\"'+data.icon+'\"></i>';
                                }else{
                                    var thumb_content = '<img src=\"./admin/vendors/custom/notifications/img/default.jpg\"/>';
                                }
                                var notification = new NotificationFx({
                                    message : '<div class=\"ns-thumb '+data.thumb+'\">'+thumb_content+'</div><div class=\"ns-content notice\"><p><a href=\"{{url('dashboard/notifications')}}\">'+data.sender.name+'</a> '+data.subject+'.</p></div>',
                                    layout : 'other',
                                    ttl : 5000,
                                    effect : 'thumbslider',
                                    type : 'notice', // notice, warning, error or success
                                    onClose : function() {
                                        //dismiss notification and make it as readed;
                                    }
                                });
                                // show the notification
                                notification.show();
                                if(data.sound){
                                    let audio = new Audio('./admin/media/notifications/notification.mp3');
                                    audio.play();
                                }
                                \$.request('onRefreshTime', {
                                    data: {id: {{user.id}}},
                                    update: { notificationsmenu: '#notificationsmenu' },
                                    complete: function(e) {
                                        notificationPanel();
                                    }
                                });
                            }, 4000 );
                        }


                    });
                {% endif %}
            </script>
        <!--end::Page Scripts -->
    </body>
    <!-- end::Body -->
</html>", "/Users/bola/Downloads/e-cargo/themes/spotlayer/layouts/admin.htm", "");
    }
}
