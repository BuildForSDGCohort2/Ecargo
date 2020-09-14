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

/* /Users/bola/Downloads/e-cargo/themes/spotlayer/pages/dashboard/dashboard.htm */
class __TwigTemplate_556a3a5e3a6af09c21b2793b834b4585a0688b6910b4bf96e0e07b5e1f8fc237 extends \Twig\Template
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
        echo "<!--Begin::Section-->

<div class=\"row\">
    <div class=\"col-xl-12\">
        <!--begin:: Widgets/Applications/User/Profile3-->
        <div class=\"kt-portlet kt-portlet--height-fluid\">
            <div class=\"kt-portlet__body\">
                <div class=\"kt-widget kt-widget--user-profile-3\">
                    <div class=\"kt-widget__top\">
                        ";
        // line 10
        if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "avatar", [], "any", false, false, false, 10)) {
            // line 11
            echo "                            <div class=\"kt-widget__media\">
                                <!--<img src=\"";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "avatar", [], "any", false, false, false, 12), "thumb", [0 => 100, 1 => 100, 2 => "crop"], "method", false, false, false, 12), "html", null, true);
            echo "\" alt=\"image\">-->
                            </div>
                       ";
        } else {
            // line 15
            echo "                            <div class=\"kt-widget__pic kt-widget__pic--brand kt-font-boldest kt-font-light\">
                                ";
            // line 16
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", [], "any", false, false, false, 16)), 0, 2), "html", null, true);
            echo "
                            </div>
                       ";
        }
        // line 19
        echo "                        <div class=\"kt-widget__content\">
                            <div class=\"kt-widget__head\">
                                <a href=\"javascript:;\" class=\"kt-widget__username\">
                                    ";
        // line 22
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", [], "any", false, false, false, 22)), "html", null, true);
        echo "
                                </a>

                                <div class=\"kt-widget__action\">
                                    <a href=\"";
        // line 26
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("dashboard/profile");
        echo "\" class=\"btn btn-brand btn-sm btn-upper\">";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Edit"]);
        echo "</a>
                                </div>
                            </div>

                            <div class=\"kt-widget__subhead\">
                                ";
        // line 31
        if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "mobile", [], "any", false, false, false, 31)) {
            // line 32
            echo "                                    <a href=\"javascript:;\"><i class=\"flaticon-alarm-1\"></i>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "mobile", [], "any", false, false, false, 32), "html", null, true);
            echo "</a>
                                ";
        } elseif (twig_get_attribute($this->env, $this->source,         // line 33
($context["user"] ?? null), "email", [], "any", false, false, false, 33)) {
            // line 34
            echo "                                    <a href=\"javascript:;\"><i class=\"flaticon2-new-email\"></i>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "email", [], "any", false, false, false, 34), "html", null, true);
            echo "</a>
                                ";
        } else {
            // line 36
            echo "                                    <a href=\"javascript:;\"><i class=\"flaticon-user-settings\"></i>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "username", [], "any", false, false, false, 36), "html", null, true);
            echo "</a>
                                ";
        }
        // line 38
        echo "                                <a href=\"javascript:;\"><i class=\"flaticon2-calendar-3\"></i>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role", [], "any", false, false, false, 38), "name", [], "any", false, false, false, 38), "html", null, true);
        echo " </a>
                                ";
        // line 39
        if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "branch", [], "any", false, false, false, 39)) {
            // line 40
            echo "                                    <a href=\"javascript:;\"><i class=\"flaticon2-placeholder\"></i>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "branch", [], "any", false, false, false, 40), "name", [], "any", false, false, false, 40), "html", null, true);
            echo "</a>
                                ";
        }
        // line 42
        echo "                            </div>

                            <div class=\"kt-widget__info\">
                                <div class=\"kt-widget__desc\">
                                    ";
        // line 46
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 46) == 5)) {
            // line 47
            echo "                                        ";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "addresses", [], "any", false, false, false, 47))) {
                // line 48
                echo "                                        ";
                $context["address"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "addresses", [], "any", false, false, false, 48), "where", [0 => "default", 1 => 1], "method", false, false, false, 48), "first", [], "any", false, false, false, 48);
                // line 49
                echo "                                        ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "street", [], "any", false, false, false, 49), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "thecity", [], "any", false, false, false, 49), "name", [], "any", false, false, false, 49), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "zipcode", [], "any", false, false, false, 49), "html", null, true);
                echo "
                                        <br> ";
                // line 50
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "thestate", [], "any", false, false, false, 50), "name", [], "any", false, false, false, 50), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "thecountry", [], "any", false, false, false, 50), "name", [], "any", false, false, false, 50), "html", null, true);
                echo "
                                        ";
            }
            // line 52
            echo "                                    ";
        } else {
            // line 53
            echo "                                        ";
            if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "street_addr", [], "any", false, false, false, 53)) {
                // line 54
                echo "                                            ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "street_addr", [], "any", false, false, false, 54), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "city", [], "any", false, false, false, 54), "name", [], "any", false, false, false, 54), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "zip", [], "any", false, false, false, 54), "html", null, true);
                echo "
                                            <br> ";
                // line 55
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "state", [], "any", false, false, false, 55), "name", [], "any", false, false, false, 55), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "country", [], "any", false, false, false, 55), "name", [], "any", false, false, false, 55), "html", null, true);
                echo "
                                        ";
            }
            // line 57
            echo "                                    ";
        }
        // line 58
        echo "                                </div>
                                ";
        // line 59
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 59) != 1)) {
            // line 60
            echo "                                    <div class=\"kt-widget__progress\">
                                        <div class=\"kt-widget__text\">
                                            ";
            // line 62
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Progress"]);
            echo "
                                        </div>
                                        <div class=\"progress\" style=\"height: 5px;width: 100%;\">
                                            <div class=\"progress-bar kt-bg-";
            // line 65
            echo twig_escape_filter($this->env, ($context["progress_status"] ?? null), "html", null, true);
            echo "\" role=\"progressbar\" style=\"width: ";
            echo twig_escape_filter($this->env, ($context["progress_value"] ?? null), "html", null, true);
            echo "%;\" aria-valuenow=\"";
            echo twig_escape_filter($this->env, ($context["progress_value"] ?? null), "html", null, true);
            echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                        </div>
                                        <div class=\"kt-widget__stats\">
                                            ";
            // line 68
            echo twig_escape_filter($this->env, ($context["progress_value"] ?? null), "html", null, true);
            echo "%
                                        </div>
                                    </div>
                                ";
        }
        // line 72
        echo "                            </div>
                        </div>
                    </div>
                    <div class=\"kt-widget__bottom\">
                        <a href=\"";
        // line 76
        echo url("dashboard/shipments/approved");
        echo "\" class=\"kt-widget__item\">
                            <div class=\"kt-widget__icon\">
                                <i class=\"flaticon-map-location\"></i>
                            </div>
                            <div class=\"kt-widget__details\">
                                <span class=\"kt-widget__title\">";
        // line 81
        echo twig_escape_filter($this->env, ($context["approved"] ?? null), "html", null, true);
        echo " ";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["shipment"]);
        echo "</span>
                                <span class=\"kt-widget__value\">";
        // line 82
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Approved List"]);
        echo "</span>
                            </div>
                        </a>

                        <a href=\"";
        // line 86
        echo url("dashboard/shipments/delivered");
        echo "\" class=\"kt-widget__item\">
                            <div class=\"kt-widget__icon\">
                                <i class=\"flaticon-truck\"></i>
                            </div>
                            <div class=\"kt-widget__details\">
                                <span class=\"kt-widget__title\">";
        // line 91
        echo twig_escape_filter($this->env, ($context["stocked"] ?? null), "html", null, true);
        echo " ";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["shipment"]);
        echo "</span>
                                <span class=\"kt-widget__value\">";
        // line 92
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["In Stock List"]);
        echo "</span>
                            </div>
                        </a>

                        <a href=\"";
        // line 96
        echo url("dashboard/shipments/delivered");
        echo "\" class=\"kt-widget__item\">
                            <div class=\"kt-widget__icon\">
                                <i class=\"flaticon-bag\"></i>
                            </div>
                            <div class=\"kt-widget__details\">
                                <span class=\"kt-widget__title\">";
        // line 101
        echo twig_escape_filter($this->env, ($context["delivered"] ?? null), "html", null, true);
        echo " ";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["shipment"]);
        echo "</span>
                                <span class=\"kt-widget__value\">";
        // line 102
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delivered List"]);
        echo "</span>
                            </div>
                        </a>

                        <div class=\"kt-widget__item\">
                            <div class=\"kt-widget__icon\">
                                <i class=\"flaticon-file-2\"></i>
                            </div>
                            <div class=\"kt-widget__details\">
                                ";
        // line 111
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 111) == 5)) {
            // line 112
            echo "                                    <span class=\"kt-widget__title\">";
            echo twig_escape_filter($this->env, ($context["saved"] ?? null), "html", null, true);
            echo " ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Saved Shipments"]);
            echo "</span>
                                    <a href=\"";
            // line 113
            echo url("dashboard/shipments/saved");
            echo "\" class=\"kt-widget__value kt-font-brand\">";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["View"]);
            echo "</a>
                                ";
        } else {
            // line 115
            echo "                                    <span class=\"kt-widget__title\">";
            echo twig_escape_filter($this->env, ($context["new"] ?? null), "html", null, true);
            echo " ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["New Shipment Request"]);
            echo "</span>
                                    <a href=\"";
            // line 116
            echo url("dashboard/shipments/requests");
            echo "\" class=\"kt-widget__value kt-font-brand\">";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["View"]);
            echo "</a>
                                ";
        }
        // line 118
        echo "                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!--end:: Widgets/Applications/User/Profile3-->
    </div>
</div>
<!--End::Section-->
";
        // line 129
        if (((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 129) == 1) || (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 129) == 6))) {
            // line 130
            echo "    <div class=\"row\">
        <div class=\"col-lg-4\">
            <!--begin:: Widgets/Latest Updates-->
            <div class=\"kt-portlet kt-portlet--height-fluid \" id=\"summary_container\">
            \t<div class=\"kt-portlet__head\">
            \t\t<div class=\"kt-portlet__head-label\">
            \t\t\t<h3 class=\"kt-portlet__head-title\">
            \t\t\t\t";
            // line 137
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Summary"]);
            echo " <small>";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Statistical summary"]);
            echo "</small>
            \t\t\t</h3>
            \t\t</div>
            \t\t<!--
                        <div class=\"kt-portlet__head-toolbar\">
                \t\t\t<a href=\"javascript:;\" class=\"btn btn-label-brand btn-bold btn-sm dropdown-toggle\" data-toggle=\"dropdown\">
                \t\t\t\t<i class=\"kt-nav__link-icon flaticon2-calendar-8\"></i>
                \t\t\t</a>
                \t\t\t<div class=\"dropdown-menu dropdown-menu-right dropdown-menu-fit dropdown-menu-md\">
                                <ul class=\"kt-nav\">
                                    <li class=\"kt-nav__item\">
                                        <a href=\"javascript:;\" class=\"kt-nav__link\">
                                            <i class=\"kt-nav__link-icon flaticon2-drop\"></i>
                                            <span class=\"kt-nav__link-text\">";
            // line 150
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Last Month Summary"]);
            echo "</span>
                                        </a>
                                    </li>
                                    <li class=\"kt-nav__item\">
                                        <a href=\"javascript:;\" class=\"kt-nav__link\">
                                            <i class=\"kt-nav__link-icon flaticon2-calendar-8\"></i>
                                            <span class=\"kt-nav__link-text\">";
            // line 156
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Consolidated List"]);
            echo "</span>
                                        </a>
                                    </li>
                                    <li class=\"kt-nav__item\">
                                        <a href=\"javascript:;\" class=\"kt-nav__link\">
                                            <i class=\"kt-nav__link-icon flaticon2-telegram-logo\"></i>
                                            <span class=\"kt-nav__link-text\">";
            // line 162
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delivered List"]);
            echo "</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                \t\t</div>
                    -->
            \t</div>
            \t<!--full height portlet body-->
            \t<div class=\"kt-portlet__body kt-portlet__body--fluid kt-portlet__body--fit\">
            \t\t<div class=\"kt-widget4 kt-widget4--sticky\">
            \t\t\t<div class=\"kt-widget4__items kt-portlet__space-x kt-margin-t-15\" id=\"summary\">
                            ";
            // line 174
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("summarywidget"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 175
            echo "                        </div>
            \t\t</div>
            \t</div>
            </div>
            <!--end:: Widgets/Latest Updates-->
        </div>
        <div class=\"col-lg-8\">
    \t\t<!--begin:: Widgets/Quick Stats-->
            <div class=\"row row-full-height\" id=\"charts\">
                ";
            // line 184
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("chartswidget"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 185
            echo "            </div>
            <!--end:: Widgets/Quick Stats-->
        </div>
    </div>
";
        }
        // line 190
        echo "
<div class=\"row\">
    <div class=\"col-lg-12\">
        <div class=\"kt-portlet kt-portlet--height-fluid\" id=\"listing_container\">
        \t<div class=\"kt-portlet__head\">
        \t\t<div class=\"kt-portlet__head-label\">
        \t\t\t<h3 class=\"kt-portlet__head-title\">
        \t\t\t\t";
        // line 197
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Latest shipments"]);
        echo "
        \t\t\t</h3>
        \t\t</div>
        \t</div>
        \t<div class=\"kt-portlet__body\">
\t\t\t\t<div class=\"kt-widget11\">
\t\t\t\t\t<div class=\"table-responsive\" id=\"listing\">
                        ";
        // line 204
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("listingwidget"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 205
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"kt-widget11__action kt-align-right\">
\t\t\t\t\t\t<a href=\"";
        // line 208
        echo url("dashboard/shipments/all");
        echo "\" class=\"btn btn-label-success btn-sm btn-bold\">";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["View All Shipments"]);
        echo "</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
        \t</div>
        </div>
    </div>
</div>


";
        // line 217
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 218
        echo "<script>
\"use strict\";

// Class definition
var KTDashboard = function() {

    // Daterangepicker Init
    var daterangepickerInit = function() {
        if (\$('#kt_dashboard_daterangepicker').length == 0) {
            return;
        }

        moment.locale('";
        // line 230
        echo twig_escape_filter($this->env, ($context["currentLang"] ?? null), "html", null, true);
        echo "');
        moment.updateLocale('";
        // line 231
        echo twig_escape_filter($this->env, ($context["currentLang"] ?? null), "html", null, true);
        echo "', {
            months : [
                \"";
        // line 233
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
        echo "\",
                \"";
        // line 234
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["August"]);
        echo "\", \"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["September"]);
        echo "\", \"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["October"]);
        echo "\", \"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["November"]);
        echo "\", \"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["December"]);
        echo "\"
            ]
        });
        var picker = \$('#kt_dashboard_daterangepicker');
        var start = moment().utcOffset(KTAppOptions.timezone_offset).startOf('month');
        var end = moment().utcOffset(KTAppOptions.timezone_offset).endOf('month');

        function cb(start, end, label) {
            var title = '';
            var range = '';

            if ((end - start) < 100 || label == 'Today') {
                title = '";
        // line 246
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Today"]);
        echo ":';
                range = start.format(KTAppOptions.daterangeformat);
            } else if (label == '";
        // line 248
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Yesterday"]);
        echo "') {
                title = '";
        // line 249
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Yesterday"]);
        echo ":';
                range = start.format(KTAppOptions.daterangeformat);
            } else {
                range = start.format(KTAppOptions.daterangeformat) + ' - ' + end.format(KTAppOptions.daterangeformat);
            }

            \$('#kt_dashboard_daterangepicker_date').html(range);
            \$('#kt_dashboard_daterangepicker_title').html(title);

            //List All Widgets in dashboard
            KTApp.block('#summary_container', {});
            KTApp.block('#charts', {});
            KTApp.block('#listing_container', {});
            \$.request('onRefreshTime', {
                data: {start: start.format(KTAppOptions.daterangeformat), end: end.format(KTAppOptions.daterangeformat)},
                update: { summarywidget: '#summary',chartswidget: '#charts', listingwidget: '#listing' },
                complete: function(e) {
                    Chart.helpers.each(Chart.instances, function (instance) {
                         instance.destroy();
                    });

                    ";
        // line 270
        if (((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 270) == 1) || (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 270) == 6))) {
            // line 271
            echo "                        quickStats();
                    ";
        }
        // line 273
        echo "                    listing();
                    KTApp.unblock('#summary_container');
                    KTApp.unblock('#listing_container');
                }
            });
        }

        picker.daterangepicker({
            direction: KTUtil.isRTL(),
            locale: {
                \"format\": KTAppOptions.daterangeformat,
                \"separator\": \" - \",
                \"applyLabel\": \"";
        // line 285
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Apply"]);
        echo "\",
                \"cancelLabel\": \"";
        // line 286
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Cancel"]);
        echo "\",
                \"fromLabel\": \"";
        // line 287
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["From"]);
        echo "\",
                \"toLabel\": \"";
        // line 288
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["To"]);
        echo "\",
                \"customRangeLabel\": \"";
        // line 289
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Custom"]);
        echo "\",
                \"daysOfWeek\": [
                    \"";
        // line 291
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Su"]);
        echo "\",
                    \"";
        // line 292
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Mo"]);
        echo "\",
                    \"";
        // line 293
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Tu"]);
        echo "\",
                    \"";
        // line 294
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["We"]);
        echo "\",
                    \"";
        // line 295
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Th"]);
        echo "\",
                    \"";
        // line 296
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Fr"]);
        echo "\",
                    \"";
        // line 297
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sa"]);
        echo "\"
                ],
                \"monthNames\": [
                    \"";
        // line 300
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["January"]);
        echo "\",
                    \"";
        // line 301
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["February"]);
        echo "\",
                    \"";
        // line 302
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["March"]);
        echo "\",
                    \"";
        // line 303
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["April"]);
        echo "\",
                    \"";
        // line 304
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["May"]);
        echo "\",
                    \"";
        // line 305
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["June"]);
        echo "\",
                    \"";
        // line 306
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["July"]);
        echo "\",
                    \"";
        // line 307
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["August"]);
        echo "\",
                    \"";
        // line 308
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["September"]);
        echo "\",
                    \"";
        // line 309
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["October"]);
        echo "\",
                    \"";
        // line 310
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["November"]);
        echo "\",
                    \"";
        // line 311
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["December"]);
        echo "\"
                ],
                \"monthsShort\": [
                    \"";
        // line 314
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["January"]);
        echo "\",
                    \"";
        // line 315
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["February"]);
        echo "\",
                    \"";
        // line 316
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["March"]);
        echo "\",
                    \"";
        // line 317
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["April"]);
        echo "\",
                    \"";
        // line 318
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["May"]);
        echo "\",
                    \"";
        // line 319
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["June"]);
        echo "\",
                    \"";
        // line 320
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["July"]);
        echo "\",
                    \"";
        // line 321
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["August"]);
        echo "\",
                    \"";
        // line 322
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["September"]);
        echo "\",
                    \"";
        // line 323
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["October"]);
        echo "\",
                    \"";
        // line 324
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["November"]);
        echo "\",
                    \"";
        // line 325
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["December"]);
        echo "\"
                ],
                \"firstDay\": 1
            },
            startDate: start,
            endDate: end,
            opens: 'left',
            ranges: {
                '";
        // line 333
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Today"]);
        echo "': [moment().utcOffset(KTAppOptions.timezone_offset), moment().utcOffset(KTAppOptions.timezone_offset)],
                '";
        // line 334
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Yesterday"]);
        echo "': [moment().utcOffset(KTAppOptions.timezone_offset).subtract(1, 'days'), moment().utcOffset(KTAppOptions.timezone_offset).subtract(1, 'days')],
                '";
        // line 335
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Last 7 Days"]);
        echo "': [moment().utcOffset(KTAppOptions.timezone_offset).subtract(6, 'days'), moment().utcOffset(KTAppOptions.timezone_offset)],
                '";
        // line 336
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Last 30 Days"]);
        echo "': [moment().utcOffset(KTAppOptions.timezone_offset).subtract(29, 'days'), moment().utcOffset(KTAppOptions.timezone_offset)],
                '";
        // line 337
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["This Month"]);
        echo "': [moment().utcOffset(KTAppOptions.timezone_offset).startOf('month'), moment().utcOffset(KTAppOptions.timezone_offset).endOf('month')],
                '";
        // line 338
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Last Month"]);
        echo "': [moment().utcOffset(KTAppOptions.timezone_offset).subtract(1, 'month').startOf('month'), moment().utcOffset(KTAppOptions.timezone_offset).subtract(1, 'month').endOf('month')]
            }
        }, cb);

        cb(start, end, '');
    }

    return {
        // Init demos
        init: function() {
            daterangepickerInit();
            var loading = new KTDialog({'type': 'loader', 'placement': 'top center', 'message': KTAppOptions.text.loading});
            loading.show();

            setTimeout(function() {
                loading.hide();
            }, 3000);
        }
    };
}();

function _initSparklineChart(src, data, color, border) {
    if (src.length == 0) {
        return;
    }

    var config = {
        type: 'line',
        data: {
            labels: [\"";
        // line 367
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
        echo "\"],
            datasets: [{
                label: \"\",
                borderColor: color,
                borderWidth: border,

                pointHoverRadius: 4,
                pointHoverBorderWidth: 12,
                pointBackgroundColor: Chart.helpers.color('#000000').alpha(0).rgbString(),
                pointBorderColor: Chart.helpers.color('#000000').alpha(0).rgbString(),
                pointHoverBackgroundColor: KTApp.getStateColor('danger'),
                pointHoverBorderColor: Chart.helpers.color('#000000').alpha(0.1).rgbString(),
                fill: false,
                data: data,
            }]
        },
        options: {
            title: {
                display: false,
            },
            tooltips: {
                enabled: false,
                intersect: false,
                mode: 'nearest',
                xPadding: 10,
                yPadding: 10,
                caretPadding: 10
            },
            legend: {
                display: false,
                labels: {
                    usePointStyle: false
                }
            },
            responsive: true,
            maintainAspectRatio: true,
            hover: {
                mode: 'index'
            },
            scales: {
                xAxes: [{
                    display: false,
                    gridLines: false,
                    scaleLabel: {
                        display: true,
                        labelString: '";
        // line 412
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Month"]);
        echo "'
                    }
                }],
                yAxes: [{
                    display: false,
                    gridLines: false,
                    scaleLabel: {
                        display: true,
                        labelString: '";
        // line 420
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Value"]);
        echo "'
                    },
                    ticks: {
                        beginAtZero: true
                    }
                }]
            },

            elements: {
                point: {
                    radius: 4,
                    borderWidth: 12
                },
            },

            layout: {
                padding: {
                    left: 0,
                    right: 10,
                    top: 5,
                    bottom: 0
                }
            }
        }
    };

    new Chart(src, config);
}
// Class initialization on page load
jQuery(document).ready(function() {
    KTDashboard.init();
});
</script>
";
        // line 217
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "/Users/bola/Downloads/e-cargo/themes/spotlayer/pages/dashboard/dashboard.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  896 => 217,  860 => 420,  849 => 412,  783 => 367,  751 => 338,  747 => 337,  743 => 336,  739 => 335,  735 => 334,  731 => 333,  720 => 325,  716 => 324,  712 => 323,  708 => 322,  704 => 321,  700 => 320,  696 => 319,  692 => 318,  688 => 317,  684 => 316,  680 => 315,  676 => 314,  670 => 311,  666 => 310,  662 => 309,  658 => 308,  654 => 307,  650 => 306,  646 => 305,  642 => 304,  638 => 303,  634 => 302,  630 => 301,  626 => 300,  620 => 297,  616 => 296,  612 => 295,  608 => 294,  604 => 293,  600 => 292,  596 => 291,  591 => 289,  587 => 288,  583 => 287,  579 => 286,  575 => 285,  561 => 273,  557 => 271,  555 => 270,  531 => 249,  527 => 248,  522 => 246,  499 => 234,  483 => 233,  478 => 231,  474 => 230,  460 => 218,  458 => 217,  444 => 208,  439 => 205,  435 => 204,  425 => 197,  416 => 190,  409 => 185,  405 => 184,  394 => 175,  390 => 174,  375 => 162,  366 => 156,  357 => 150,  339 => 137,  330 => 130,  328 => 129,  315 => 118,  308 => 116,  301 => 115,  294 => 113,  287 => 112,  285 => 111,  273 => 102,  267 => 101,  259 => 96,  252 => 92,  246 => 91,  238 => 86,  231 => 82,  225 => 81,  217 => 76,  211 => 72,  204 => 68,  194 => 65,  188 => 62,  184 => 60,  182 => 59,  179 => 58,  176 => 57,  169 => 55,  160 => 54,  157 => 53,  154 => 52,  147 => 50,  138 => 49,  135 => 48,  132 => 47,  130 => 46,  124 => 42,  118 => 40,  116 => 39,  111 => 38,  105 => 36,  99 => 34,  97 => 33,  92 => 32,  90 => 31,  80 => 26,  73 => 22,  68 => 19,  62 => 16,  59 => 15,  53 => 12,  50 => 11,  48 => 10,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!--Begin::Section-->

<div class=\"row\">
    <div class=\"col-xl-12\">
        <!--begin:: Widgets/Applications/User/Profile3-->
        <div class=\"kt-portlet kt-portlet--height-fluid\">
            <div class=\"kt-portlet__body\">
                <div class=\"kt-widget kt-widget--user-profile-3\">
                    <div class=\"kt-widget__top\">
                        {% if user.avatar %}
                            <div class=\"kt-widget__media\">
                                <!--<img src=\"{{user.avatar.thumb(100, 100,'crop')}}\" alt=\"image\">-->
                            </div>
                       {% else %}
                            <div class=\"kt-widget__pic kt-widget__pic--brand kt-font-boldest kt-font-light\">
                                {{user.name|upper|slice(0,2)}}
                            </div>
                       {% endif %}
                        <div class=\"kt-widget__content\">
                            <div class=\"kt-widget__head\">
                                <a href=\"javascript:;\" class=\"kt-widget__username\">
                                    {{user.name|capitalize}}
                                </a>

                                <div class=\"kt-widget__action\">
                                    <a href=\"{{'dashboard/profile'|page}}\" class=\"btn btn-brand btn-sm btn-upper\">{{'Edit'|__}}</a>
                                </div>
                            </div>

                            <div class=\"kt-widget__subhead\">
                                {% if user.mobile %}
                                    <a href=\"javascript:;\"><i class=\"flaticon-alarm-1\"></i>{{user.mobile}}</a>
                                {% elseif user.email %}
                                    <a href=\"javascript:;\"><i class=\"flaticon2-new-email\"></i>{{user.email}}</a>
                                {% else %}
                                    <a href=\"javascript:;\"><i class=\"flaticon-user-settings\"></i>{{user.username}}</a>
                                {% endif %}
                                <a href=\"javascript:;\"><i class=\"flaticon2-calendar-3\"></i>{{user.role.name}} </a>
                                {% if user.branch %}
                                    <a href=\"javascript:;\"><i class=\"flaticon2-placeholder\"></i>{{user.branch.name}}</a>
                                {% endif %}
                            </div>

                            <div class=\"kt-widget__info\">
                                <div class=\"kt-widget__desc\">
                                    {% if user.role_id == 5 %}
                                        {% if user.addresses is not empty %}
                                        {% set address = user.addresses.where('default', 1).first %}
                                        {{address.street}}, {{address.thecity.name}} {{address.zipcode}}
                                        <br> {{address.thestate.name}}, {{address.thecountry.name}}
                                        {% endif %}
                                    {% else %}
                                        {% if user.street_addr %}
                                            {{user.street_addr}}, {{user.city.name}} {{user.zip}}
                                            <br> {{user.state.name}}, {{user.country.name}}
                                        {% endif %}
                                    {% endif %}
                                </div>
                                {% if user.role_id != 1 %}
                                    <div class=\"kt-widget__progress\">
                                        <div class=\"kt-widget__text\">
                                            {{'Progress'|__}}
                                        </div>
                                        <div class=\"progress\" style=\"height: 5px;width: 100%;\">
                                            <div class=\"progress-bar kt-bg-{{progress_status}}\" role=\"progressbar\" style=\"width: {{progress_value}}%;\" aria-valuenow=\"{{progress_value}}\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                        </div>
                                        <div class=\"kt-widget__stats\">
                                            {{progress_value}}%
                                        </div>
                                    </div>
                                {% endif %}
                            </div>
                        </div>
                    </div>
                    <div class=\"kt-widget__bottom\">
                        <a href=\"{{url('dashboard/shipments/approved')}}\" class=\"kt-widget__item\">
                            <div class=\"kt-widget__icon\">
                                <i class=\"flaticon-map-location\"></i>
                            </div>
                            <div class=\"kt-widget__details\">
                                <span class=\"kt-widget__title\">{{approved}} {{'shipment'|__}}</span>
                                <span class=\"kt-widget__value\">{{'Approved List'|__}}</span>
                            </div>
                        </a>

                        <a href=\"{{url('dashboard/shipments/delivered')}}\" class=\"kt-widget__item\">
                            <div class=\"kt-widget__icon\">
                                <i class=\"flaticon-truck\"></i>
                            </div>
                            <div class=\"kt-widget__details\">
                                <span class=\"kt-widget__title\">{{stocked}} {{'shipment'|__}}</span>
                                <span class=\"kt-widget__value\">{{'In Stock List'|__}}</span>
                            </div>
                        </a>

                        <a href=\"{{url('dashboard/shipments/delivered')}}\" class=\"kt-widget__item\">
                            <div class=\"kt-widget__icon\">
                                <i class=\"flaticon-bag\"></i>
                            </div>
                            <div class=\"kt-widget__details\">
                                <span class=\"kt-widget__title\">{{delivered}} {{'shipment'|__}}</span>
                                <span class=\"kt-widget__value\">{{'Delivered List'|__}}</span>
                            </div>
                        </a>

                        <div class=\"kt-widget__item\">
                            <div class=\"kt-widget__icon\">
                                <i class=\"flaticon-file-2\"></i>
                            </div>
                            <div class=\"kt-widget__details\">
                                {% if user.role_id == 5 %}
                                    <span class=\"kt-widget__title\">{{saved}} {{'Saved Shipments'|__}}</span>
                                    <a href=\"{{url('dashboard/shipments/saved')}}\" class=\"kt-widget__value kt-font-brand\">{{'View'|__}}</a>
                                {% else %}
                                    <span class=\"kt-widget__title\">{{new}} {{'New Shipment Request'|__}}</span>
                                    <a href=\"{{url('dashboard/shipments/requests')}}\" class=\"kt-widget__value kt-font-brand\">{{'View'|__}}</a>
                                {% endif %}
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!--end:: Widgets/Applications/User/Profile3-->
    </div>
</div>
<!--End::Section-->
{% if user.role_id == 1 or user.role_id == 6 %}
    <div class=\"row\">
        <div class=\"col-lg-4\">
            <!--begin:: Widgets/Latest Updates-->
            <div class=\"kt-portlet kt-portlet--height-fluid \" id=\"summary_container\">
            \t<div class=\"kt-portlet__head\">
            \t\t<div class=\"kt-portlet__head-label\">
            \t\t\t<h3 class=\"kt-portlet__head-title\">
            \t\t\t\t{{'Summary'|__}} <small>{{'Statistical summary'|__}}</small>
            \t\t\t</h3>
            \t\t</div>
            \t\t<!--
                        <div class=\"kt-portlet__head-toolbar\">
                \t\t\t<a href=\"javascript:;\" class=\"btn btn-label-brand btn-bold btn-sm dropdown-toggle\" data-toggle=\"dropdown\">
                \t\t\t\t<i class=\"kt-nav__link-icon flaticon2-calendar-8\"></i>
                \t\t\t</a>
                \t\t\t<div class=\"dropdown-menu dropdown-menu-right dropdown-menu-fit dropdown-menu-md\">
                                <ul class=\"kt-nav\">
                                    <li class=\"kt-nav__item\">
                                        <a href=\"javascript:;\" class=\"kt-nav__link\">
                                            <i class=\"kt-nav__link-icon flaticon2-drop\"></i>
                                            <span class=\"kt-nav__link-text\">{{'Last Month Summary'|__}}</span>
                                        </a>
                                    </li>
                                    <li class=\"kt-nav__item\">
                                        <a href=\"javascript:;\" class=\"kt-nav__link\">
                                            <i class=\"kt-nav__link-icon flaticon2-calendar-8\"></i>
                                            <span class=\"kt-nav__link-text\">{{'Consolidated List'|__}}</span>
                                        </a>
                                    </li>
                                    <li class=\"kt-nav__item\">
                                        <a href=\"javascript:;\" class=\"kt-nav__link\">
                                            <i class=\"kt-nav__link-icon flaticon2-telegram-logo\"></i>
                                            <span class=\"kt-nav__link-text\">{{'Delivered List'|__}}</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                \t\t</div>
                    -->
            \t</div>
            \t<!--full height portlet body-->
            \t<div class=\"kt-portlet__body kt-portlet__body--fluid kt-portlet__body--fit\">
            \t\t<div class=\"kt-widget4 kt-widget4--sticky\">
            \t\t\t<div class=\"kt-widget4__items kt-portlet__space-x kt-margin-t-15\" id=\"summary\">
                            {% partial 'summarywidget' %}
                        </div>
            \t\t</div>
            \t</div>
            </div>
            <!--end:: Widgets/Latest Updates-->
        </div>
        <div class=\"col-lg-8\">
    \t\t<!--begin:: Widgets/Quick Stats-->
            <div class=\"row row-full-height\" id=\"charts\">
                {% partial 'chartswidget' %}
            </div>
            <!--end:: Widgets/Quick Stats-->
        </div>
    </div>
{% endif %}

<div class=\"row\">
    <div class=\"col-lg-12\">
        <div class=\"kt-portlet kt-portlet--height-fluid\" id=\"listing_container\">
        \t<div class=\"kt-portlet__head\">
        \t\t<div class=\"kt-portlet__head-label\">
        \t\t\t<h3 class=\"kt-portlet__head-title\">
        \t\t\t\t{{'Latest shipments'|__}}
        \t\t\t</h3>
        \t\t</div>
        \t</div>
        \t<div class=\"kt-portlet__body\">
\t\t\t\t<div class=\"kt-widget11\">
\t\t\t\t\t<div class=\"table-responsive\" id=\"listing\">
                        {% partial 'listingwidget' %}

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"kt-widget11__action kt-align-right\">
\t\t\t\t\t\t<a href=\"{{url('dashboard/shipments/all')}}\" class=\"btn btn-label-success btn-sm btn-bold\">{{'View All Shipments'|__}}</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
        \t</div>
        </div>
    </div>
</div>


{% put scripts %}
<script>
\"use strict\";

// Class definition
var KTDashboard = function() {

    // Daterangepicker Init
    var daterangepickerInit = function() {
        if (\$('#kt_dashboard_daterangepicker').length == 0) {
            return;
        }

        moment.locale('{{currentLang}}');
        moment.updateLocale('{{currentLang}}', {
            months : [
                \"{{'January'|__}}\", \"{{'February'|__}}\", \"{{'March'|__}}\", \"{{'April'|__}}\", \"{{'May'|__}}\", \"{{'June'|__}}\", \"{{'July'|__}}\",
                \"{{'August'|__}}\", \"{{'September'|__}}\", \"{{'October'|__}}\", \"{{'November'|__}}\", \"{{'December'|__}}\"
            ]
        });
        var picker = \$('#kt_dashboard_daterangepicker');
        var start = moment().utcOffset(KTAppOptions.timezone_offset).startOf('month');
        var end = moment().utcOffset(KTAppOptions.timezone_offset).endOf('month');

        function cb(start, end, label) {
            var title = '';
            var range = '';

            if ((end - start) < 100 || label == 'Today') {
                title = '{{\"Today\"|__}}:';
                range = start.format(KTAppOptions.daterangeformat);
            } else if (label == '{{\"Yesterday\"|__}}') {
                title = '{{\"Yesterday\"|__}}:';
                range = start.format(KTAppOptions.daterangeformat);
            } else {
                range = start.format(KTAppOptions.daterangeformat) + ' - ' + end.format(KTAppOptions.daterangeformat);
            }

            \$('#kt_dashboard_daterangepicker_date').html(range);
            \$('#kt_dashboard_daterangepicker_title').html(title);

            //List All Widgets in dashboard
            KTApp.block('#summary_container', {});
            KTApp.block('#charts', {});
            KTApp.block('#listing_container', {});
            \$.request('onRefreshTime', {
                data: {start: start.format(KTAppOptions.daterangeformat), end: end.format(KTAppOptions.daterangeformat)},
                update: { summarywidget: '#summary',chartswidget: '#charts', listingwidget: '#listing' },
                complete: function(e) {
                    Chart.helpers.each(Chart.instances, function (instance) {
                         instance.destroy();
                    });

                    {% if user.role_id == 1 or user.role_id == 6 %}
                        quickStats();
                    {% endif %}
                    listing();
                    KTApp.unblock('#summary_container');
                    KTApp.unblock('#listing_container');
                }
            });
        }

        picker.daterangepicker({
            direction: KTUtil.isRTL(),
            locale: {
                \"format\": KTAppOptions.daterangeformat,
                \"separator\": \" - \",
                \"applyLabel\": \"{{'Apply'|__}}\",
                \"cancelLabel\": \"{{'Cancel'|__}}\",
                \"fromLabel\": \"{{'From'|__}}\",
                \"toLabel\": \"{{'To'|__}}\",
                \"customRangeLabel\": \"{{'Custom'|__}}\",
                \"daysOfWeek\": [
                    \"{{'Su'|__}}\",
                    \"{{'Mo'|__}}\",
                    \"{{'Tu'|__}}\",
                    \"{{'We'|__}}\",
                    \"{{'Th'|__}}\",
                    \"{{'Fr'|__}}\",
                    \"{{'Sa'|__}}\"
                ],
                \"monthNames\": [
                    \"{{'January'|__}}\",
                    \"{{'February'|__}}\",
                    \"{{'March'|__}}\",
                    \"{{'April'|__}}\",
                    \"{{'May'|__}}\",
                    \"{{'June'|__}}\",
                    \"{{'July'|__}}\",
                    \"{{'August'|__}}\",
                    \"{{'September'|__}}\",
                    \"{{'October'|__}}\",
                    \"{{'November'|__}}\",
                    \"{{'December'|__}}\"
                ],
                \"monthsShort\": [
                    \"{{'January'|__}}\",
                    \"{{'February'|__}}\",
                    \"{{'March'|__}}\",
                    \"{{'April'|__}}\",
                    \"{{'May'|__}}\",
                    \"{{'June'|__}}\",
                    \"{{'July'|__}}\",
                    \"{{'August'|__}}\",
                    \"{{'September'|__}}\",
                    \"{{'October'|__}}\",
                    \"{{'November'|__}}\",
                    \"{{'December'|__}}\"
                ],
                \"firstDay\": 1
            },
            startDate: start,
            endDate: end,
            opens: 'left',
            ranges: {
                '{{\"Today\"|__}}': [moment().utcOffset(KTAppOptions.timezone_offset), moment().utcOffset(KTAppOptions.timezone_offset)],
                '{{\"Yesterday\"|__}}': [moment().utcOffset(KTAppOptions.timezone_offset).subtract(1, 'days'), moment().utcOffset(KTAppOptions.timezone_offset).subtract(1, 'days')],
                '{{\"Last 7 Days\"|__}}': [moment().utcOffset(KTAppOptions.timezone_offset).subtract(6, 'days'), moment().utcOffset(KTAppOptions.timezone_offset)],
                '{{\"Last 30 Days\"|__}}': [moment().utcOffset(KTAppOptions.timezone_offset).subtract(29, 'days'), moment().utcOffset(KTAppOptions.timezone_offset)],
                '{{\"This Month\"|__}}': [moment().utcOffset(KTAppOptions.timezone_offset).startOf('month'), moment().utcOffset(KTAppOptions.timezone_offset).endOf('month')],
                '{{\"Last Month\"|__}}': [moment().utcOffset(KTAppOptions.timezone_offset).subtract(1, 'month').startOf('month'), moment().utcOffset(KTAppOptions.timezone_offset).subtract(1, 'month').endOf('month')]
            }
        }, cb);

        cb(start, end, '');
    }

    return {
        // Init demos
        init: function() {
            daterangepickerInit();
            var loading = new KTDialog({'type': 'loader', 'placement': 'top center', 'message': KTAppOptions.text.loading});
            loading.show();

            setTimeout(function() {
                loading.hide();
            }, 3000);
        }
    };
}();

function _initSparklineChart(src, data, color, border) {
    if (src.length == 0) {
        return;
    }

    var config = {
        type: 'line',
        data: {
            labels: [\"{{'January'|__}}\", \"{{'February'|__}}\", \"{{'March'|__}}\", \"{{'April'|__}}\", \"{{'May'|__}}\", \"{{'June'|__}}\", \"{{'July'|__}}\", \"{{'August'|__}}\", \"{{'September'|__}}\", \"{{'October'|__}}\"],
            datasets: [{
                label: \"\",
                borderColor: color,
                borderWidth: border,

                pointHoverRadius: 4,
                pointHoverBorderWidth: 12,
                pointBackgroundColor: Chart.helpers.color('#000000').alpha(0).rgbString(),
                pointBorderColor: Chart.helpers.color('#000000').alpha(0).rgbString(),
                pointHoverBackgroundColor: KTApp.getStateColor('danger'),
                pointHoverBorderColor: Chart.helpers.color('#000000').alpha(0.1).rgbString(),
                fill: false,
                data: data,
            }]
        },
        options: {
            title: {
                display: false,
            },
            tooltips: {
                enabled: false,
                intersect: false,
                mode: 'nearest',
                xPadding: 10,
                yPadding: 10,
                caretPadding: 10
            },
            legend: {
                display: false,
                labels: {
                    usePointStyle: false
                }
            },
            responsive: true,
            maintainAspectRatio: true,
            hover: {
                mode: 'index'
            },
            scales: {
                xAxes: [{
                    display: false,
                    gridLines: false,
                    scaleLabel: {
                        display: true,
                        labelString: '{{\"Month\"|__}}'
                    }
                }],
                yAxes: [{
                    display: false,
                    gridLines: false,
                    scaleLabel: {
                        display: true,
                        labelString: '{{\"Value\"|__}}'
                    },
                    ticks: {
                        beginAtZero: true
                    }
                }]
            },

            elements: {
                point: {
                    radius: 4,
                    borderWidth: 12
                },
            },

            layout: {
                padding: {
                    left: 0,
                    right: 10,
                    top: 5,
                    bottom: 0
                }
            }
        }
    };

    new Chart(src, config);
}
// Class initialization on page load
jQuery(document).ready(function() {
    KTDashboard.init();
});
</script>
{% endput %}", "/Users/bola/Downloads/e-cargo/themes/spotlayer/pages/dashboard/dashboard.htm", "");
    }
}
