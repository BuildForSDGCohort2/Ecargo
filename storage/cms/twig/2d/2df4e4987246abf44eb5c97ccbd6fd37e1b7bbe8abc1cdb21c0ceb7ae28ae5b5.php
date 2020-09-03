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

/* /home/splayer/domains/spotlayer.com/public_html/newDemo/themes/spotlayer/pages/dashboard/settings.htm */
class __TwigTemplate_bf3efbcbbda03e4b85a2323a897fd83cb3b4e58f19810250c472bcf274313d0b extends \Twig\Template
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
        echo "<div class=\"kt-grid kt-grid--desktop kt-grid--ver kt-grid--ver-desktop kt-app\">

    <!--Begin:: App Aside Mobile Toggle-->
    <button class=\"kt-app__aside-close\" id=\"kt_user_profile_aside_close\">
        <i class=\"la la-close\"></i>
    </button>
    <!--End:: App Aside Mobile Toggle-->

    <!-- begin:: Aside -->
    ";
        // line 10
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("settingsmenu"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 11
        echo "    <!-- end:: Aside -->
    <!--End::Aside-->

    <!--Begin:: Inbox List-->
    <div class=\"kt-grid__item kt-grid__item--fluid    kt-portlet    kt-inbox__list kt-inbox__list--shown\" id=\"kt_inbox_list\">
        <div class=\"kt-portlet__head\">
    \t\t<div class=\"kt-portlet__head-label\">
    \t\t\t<h3 class=\"kt-portlet__head-title\">
    \t\t\t\t";
        // line 19
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 19), "title", [], "any", false, false, false, 19)]);
        echo "
    \t\t\t</h3>
    \t\t</div>
        </div>
        <div class=\"kt-portlet__body kt-portlet__body--fit-x\">
           \t<div class=\"col-lg-12\">
                ";
        // line 25
        echo call_user_func_array($this->env->getFunction('form_ajax')->getCallable(), ["ajax", "onSave", ["id" => "kt_form", "class" => "kt-form"]]);
        echo "
    \t\t\t\t<div class=\"row\">
    \t\t\t\t\t<div class=\"col-xl-12\">
\t\t\t\t\t\t\t<div class=\"form-group kt-hidden\" id=\"kt-form_msg\">
                                <div class=\"alert alert-danger\" role=\"alert\">
\t\t\t\t\t\t\t\t\t";
        // line 30
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Oh snap! Change a few things up and try submitting again."]);
        echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
                        </div>
                    </div>
                    ";
        // line 35
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 35), "page", [], "any", false, false, false, 35) == "general") || twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 35), "page", [], "any", false, false, false, 35)))) {
            // line 36
            echo "        \t\t\t\t<div class=\"row\">
        \t\t\t\t\t<div class=\"col-xl-2\"></div>
        \t\t\t\t\t<div class=\"col-xl-8\">
        \t\t\t\t\t\t<div class=\"kt-section kt-section--first\">
                                    <h3 class=\"kt-section__title kt-section__title-lg\">";
            // line 40
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["General"]);
            echo ":</h3>
        \t\t\t\t\t\t\t<div class=\"kt-section__body\">
        \t\t\t\t\t\t\t\t<div class=\"form-group row\">
        \t\t\t\t\t\t\t\t\t<label class=\"col-xl-3 col-lg-3 col-form-label\">";
            // line 43
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Default Language"]);
            echo "</label>
        \t\t\t\t\t\t\t\t\t<div class=\"col-lg-9 col-xl-6\">
        \t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"language\" required>
                                                    <option data-hidden=\"true\"></option>
                                                    ";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["locales"] ?? null));
            foreach ($context['_seq'] as $context["code"] => $context["name"]) {
                // line 48
                echo "        \t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, $context["code"], "html", null, true);
                echo "\" ";
                if ((($context["language"] ?? null) == $context["code"])) {
                    echo "selected";
                }
                echo " data-live-search=\"true\">";
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "</option>
                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['code'], $context['name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "                                                </select>
        \t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t<div class=\"form-group row\">
        \t\t\t\t\t\t\t\t\t<label class=\"col-xl-3 col-lg-3 col-form-label\">";
            // line 54
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["TimeZone"]);
            echo "</label>
        \t\t\t\t\t\t\t\t\t<div class=\"col-lg-9 col-xl-6\">
        \t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"timezone_offset\" data-live-search=\"true\" required>
                                                    <option data-hidden=\"true\"></option>
                                                \t<option value=\"-12:00\" ";
            // line 58
            if ((($context["timezone_offset"] ?? null) == "-12:00")) {
                echo "selected";
            }
            echo ">(GMT -12:00) ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Eniwetok, Kwajalein"]);
            echo "</option>
                                                \t<option value=\"-11:00\" ";
            // line 59
            if ((($context["timezone_offset"] ?? null) == "-11:00")) {
                echo "selected";
            }
            echo ">(GMT -11:00) ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Midway Island, Samoa"]);
            echo "</option>
                                                \t<option value=\"-10:00\" ";
            // line 60
            if ((($context["timezone_offset"] ?? null) == "-10:00")) {
                echo "selected";
            }
            echo ">(GMT -10:00) ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Hawaii"]);
            echo "</option>
                                                \t<option value=\"-09:50\" ";
            // line 61
            if ((($context["timezone_offset"] ?? null) == "-09:50")) {
                echo "selected";
            }
            echo ">(GMT -9:30) ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Taiohae"]);
            echo "</option>
                                                \t<option value=\"-09:00\" ";
            // line 62
            if ((($context["timezone_offset"] ?? null) == "-09:00")) {
                echo "selected";
            }
            echo ">(GMT -9:00) ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Alaska"]);
            echo "</option>
                                                \t<option value=\"-08:00\" ";
            // line 63
            if ((($context["timezone_offset"] ?? null) == "-08:00")) {
                echo "selected";
            }
            echo ">(GMT -8:00) ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Pacific Time (US &amp; Canada)"]);
            echo "</option>
                                                \t<option value=\"-07:00\" ";
            // line 64
            if ((($context["timezone_offset"] ?? null) == "-07:00")) {
                echo "selected";
            }
            echo ">(GMT -7:00) ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Mountain Time (US &amp; Canada)"]);
            echo "</option>
                                                \t<option value=\"-06:00\" ";
            // line 65
            if ((($context["timezone_offset"] ?? null) == "-06:00")) {
                echo "selected";
            }
            echo ">(GMT -6:00) ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Central Time (US &amp; Canada), Mexico City"]);
            echo "</option>
                                                \t<option value=\"-05:00\" ";
            // line 66
            if ((($context["timezone_offset"] ?? null) == "-05:00")) {
                echo "selected";
            }
            echo ">(GMT -5:00) ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Eastern Time (US &amp; Canada), Bogota, Lima"]);
            echo "</option>
                                                \t<option value=\"-04:50\" ";
            // line 67
            if ((($context["timezone_offset"] ?? null) == "-04:50")) {
                echo "selected";
            }
            echo ">(GMT -4:30) ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Caracas"]);
            echo "</option>
                                                \t<option value=\"-04:00\" ";
            // line 68
            if ((($context["timezone_offset"] ?? null) == "-04:00")) {
                echo "selected";
            }
            echo ">(GMT -4:00) ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Atlantic Time (Canada), Caracas, La Paz"]);
            echo "</option>
                                                \t<option value=\"-03:50\" ";
            // line 69
            if ((($context["timezone_offset"] ?? null) == "-03:50")) {
                echo "selected";
            }
            echo ">(GMT -3:30) ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Newfoundland"]);
            echo "</option>
                                                \t<option value=\"-03:00\" ";
            // line 70
            if ((($context["timezone_offset"] ?? null) == "-03:00")) {
                echo "selected";
            }
            echo ">(GMT -3:00) ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Brazil, Buenos Aires, Georgetown"]);
            echo "</option>
                                                \t<option value=\"-02:00\" ";
            // line 71
            if ((($context["timezone_offset"] ?? null) == "-02:00")) {
                echo "selected";
            }
            echo ">(GMT -2:00) ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Mid-Atlantic"]);
            echo "</option>
                                                \t<option value=\"-01:00\" ";
            // line 72
            if ((($context["timezone_offset"] ?? null) == "-01:00")) {
                echo "selected";
            }
            echo ">(GMT -1:00) ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Azores, Cape Verde Islands"]);
            echo "</option>
                                                \t<option value=\"+00:00\" ";
            // line 73
            if ((($context["timezone_offset"] ?? null) == "+00:00")) {
                echo "selected";
            }
            echo ">(GMT) Western Europe Time, London, Lisbon, Casablanca</option>
                                                \t<option value=\"+01:00\" ";
            // line 74
            if ((($context["timezone_offset"] ?? null) == "+01:00")) {
                echo "selected";
            }
            echo ">(GMT +1:00) ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Brussels, Copenhagen, Madrid, Paris"]);
            echo "</option>
                                                \t<option value=\"+02:00\" ";
            // line 75
            if ((($context["timezone_offset"] ?? null) == "+02:00")) {
                echo "selected";
            }
            echo ">(GMT +2:00) ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Cairo, Kaliningrad, South Africa"]);
            echo "</option>
                                                \t<option value=\"+03:00\" ";
            // line 76
            if ((($context["timezone_offset"] ?? null) == "+03:00")) {
                echo "selected";
            }
            echo ">(GMT +3:00) ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Baghdad, Riyadh, Moscow, St. Petersburg"]);
            echo "</option>
                                                \t<option value=\"+03:50\" ";
            // line 77
            if ((($context["timezone_offset"] ?? null) == "+03:50")) {
                echo "selected";
            }
            echo ">(GMT +3:30) ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Tehran"]);
            echo "</option>
                                                \t<option value=\"+04:00\" ";
            // line 78
            if ((($context["timezone_offset"] ?? null) == "+04:00")) {
                echo "selected";
            }
            echo ">(GMT +4:00) ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Abu Dhabi, Muscat, Baku, Tbilisi"]);
            echo "</option>
                                                \t<option value=\"+04:50\" ";
            // line 79
            if ((($context["timezone_offset"] ?? null) == "+04:50")) {
                echo "selected";
            }
            echo ">(GMT +4:30) ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Kabul"]);
            echo "</option>
                                                \t<option value=\"+05:00\" ";
            // line 80
            if ((($context["timezone_offset"] ?? null) == "+05:00")) {
                echo "selected";
            }
            echo ">(GMT +5:00) ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Ekaterinburg, Islamabad, Karachi, Tashkent"]);
            echo "</option>
                                                \t<option value=\"+05:50\" ";
            // line 81
            if ((($context["timezone_offset"] ?? null) == "+05:50")) {
                echo "selected";
            }
            echo ">(GMT +5:30) ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Bombay, Calcutta, Madras, New Delhi"]);
            echo "</option>
                                                \t<option value=\"+05:75\" ";
            // line 82
            if ((($context["timezone_offset"] ?? null) == "+05:75")) {
                echo "selected";
            }
            echo ">(GMT +5:45) ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Kathmandu, Pokhara"]);
            echo "</option>
                                                \t<option value=\"+06:00\" ";
            // line 83
            if ((($context["timezone_offset"] ?? null) == "+06:00")) {
                echo "selected";
            }
            echo ">(GMT +6:00) ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Almaty, Dhaka, Colombo"]);
            echo "</option>
                                                \t<option value=\"+06:50\" ";
            // line 84
            if ((($context["timezone_offset"] ?? null) == "+06:50")) {
                echo "selected";
            }
            echo ">(GMT +6:30) ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Yangon, Mandalay"]);
            echo "</option>
                                                \t<option value=\"+07:00\" ";
            // line 85
            if ((($context["timezone_offset"] ?? null) == "+07:00")) {
                echo "selected";
            }
            echo ">(GMT +7:00) ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Bangkok, Hanoi, Jakarta"]);
            echo "</option>
                                                \t<option value=\"+08:00\" ";
            // line 86
            if ((($context["timezone_offset"] ?? null) == "+08:00")) {
                echo "selected";
            }
            echo ">(GMT +8:00) ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Beijing, Perth, Singapore, Hong Kong"]);
            echo "</option>
                                                \t<option value=\"+08:75\" ";
            // line 87
            if ((($context["timezone_offset"] ?? null) == "+08:75")) {
                echo "selected";
            }
            echo ">(GMT +8:45) ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Eucla"]);
            echo "</option>
                                                \t<option value=\"+09:00\" ";
            // line 88
            if ((($context["timezone_offset"] ?? null) == "+09:00")) {
                echo "selected";
            }
            echo ">(GMT +9:00) ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Tokyo, Seoul, Osaka, Sapporo, Yakutsk"]);
            echo "</option>
                                                \t<option value=\"+09:50\" ";
            // line 89
            if ((($context["timezone_offset"] ?? null) == "+09:50")) {
                echo "selected";
            }
            echo ">(GMT +9:30) ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Adelaide, Darwin"]);
            echo "</option>
                                                \t<option value=\"+10:00\" ";
            // line 90
            if ((($context["timezone_offset"] ?? null) == "+10:00")) {
                echo "selected";
            }
            echo ">(GMT +10:00) ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Eastern Australia, Guam, Vladivostok"]);
            echo "</option>
                                                \t<option value=\"+10:50\" ";
            // line 91
            if ((($context["timezone_offset"] ?? null) == "+10:50")) {
                echo "selected";
            }
            echo ">(GMT +10:30) ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Lord Howe Island"]);
            echo "</option>
                                                \t<option value=\"+11:00\" ";
            // line 92
            if ((($context["timezone_offset"] ?? null) == "+11:00")) {
                echo "selected";
            }
            echo ">(GMT +11:00) ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Magadan, Solomon Islands, New Caledonia"]);
            echo "</option>
                                                \t<option value=\"+11:50\" ";
            // line 93
            if ((($context["timezone_offset"] ?? null) == "+11:50")) {
                echo "selected";
            }
            echo ">(GMT +11:30) ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Norfolk Island"]);
            echo "</option>
                                                \t<option value=\"+12:00\" ";
            // line 94
            if ((($context["timezone_offset"] ?? null) == "+12:00")) {
                echo "selected";
            }
            echo ">(GMT +12:00) ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Auckland, Wellington, Fiji, Kamchatka"]);
            echo "</option>
                                                \t<option value=\"+12:75\" ";
            // line 95
            if ((($context["timezone_offset"] ?? null) == "+12:75")) {
                echo "selected";
            }
            echo ">(GMT +12:45) ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Chatham Islands"]);
            echo "</option>
                                                \t<option value=\"+13:00\" ";
            // line 96
            if ((($context["timezone_offset"] ?? null) == "+13:00")) {
                echo "selected";
            }
            echo ">(GMT +13:00) ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Apia, Nukualofa"]);
            echo "</option>
                                                \t<option value=\"+14:00\" ";
            // line 97
            if ((($context["timezone_offset"] ?? null) == "+14:00")) {
                echo "selected";
            }
            echo ">(GMT +14:00) ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Line Islands, Tokelau"]);
            echo "</option>
                                                </select>
        \t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t<div class=\"form-group row\">
        \t\t\t\t\t\t\t\t\t<label class=\"col-xl-3 col-lg-3 col-form-label\">";
            // line 102
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Date Format"]);
            echo "</label>
        \t\t\t\t\t\t\t\t\t<div class=\"col-lg-9 col-xl-6\">
        \t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"dateformat\" required>
                                                    <option data-hidden=\"true\"></option>
                                                    <option value=\"d/m/Y\" ";
            // line 106
            if ((($context["dateformat"] ?? null) == "d/m/Y")) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d/m/Y"), "html", null, true);
            echo "</option>
                                                    <option value=\"m/d/Y\" ";
            // line 107
            if ((($context["dateformat"] ?? null) == "m/d/Y")) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "m/d/Y"), "html", null, true);
            echo "</option>
                                                    <option value=\"d M, Y\" ";
            // line 108
            if ((($context["dateformat"] ?? null) == "d M, Y")) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d M, Y"), "html", null, true);
            echo "</option>
                                                    <option value=\"M d, Y\" ";
            // line 109
            if ((($context["dateformat"] ?? null) == "M d, Y")) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "M d, Y"), "html", null, true);
            echo "</option>
                                                </select>
        \t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t<div class=\"form-group row\">
        \t\t\t\t\t\t\t\t\t<label class=\"col-xl-3 col-lg-3 col-form-label\">";
            // line 114
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Currency"]);
            echo "</label>
        \t\t\t\t\t\t\t\t\t<div class=\"col-lg-9 col-xl-6\">
        \t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" id=\"currency\" name=\"currency\" data-live-search=\"true\" required>
                                                    <option data-hidden=\"true\"></option>
                                                    ";
            // line 118
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["currencies"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
                // line 119
                echo "                                                        <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["currency"], "id", [], "any", false, false, false, 119), "html", null, true);
                echo "\" ";
                if ((twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "id", [], "any", false, false, false, 119) == twig_get_attribute($this->env, $this->source, $context["currency"], "id", [], "any", false, false, false, 119))) {
                    echo "selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["currency"], "name", [], "any", false, false, false, 119), "html", null, true);
                echo "</option>
                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 121
            echo "                                                </select>
        \t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t<div class=\"form-group row\">
        \t\t\t\t\t\t\t\t\t<label class=\"col-xl-3 col-lg-3 col-form-label\"></label>
        \t\t\t\t\t\t\t\t\t<div class=\"col-lg-9 col-xl-6\">
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" id=\"place_symbol_before\" name=\"place_symbol_before\" ";
            // line 129
            if (twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "place_symbol_before", [], "any", false, false, false, 129)) {
                echo "checked";
            }
            echo "> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Place symbol before number"]);
            echo "
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" id=\"with_space\" name=\"with_space\" ";
            // line 135
            if (twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "with_space", [], "any", false, false, false, 135)) {
                echo "checked";
            }
            echo "> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Place symbol with space"]);
            echo "
                                                        <span></span>
                                                    </label>
                                                </div>
        \t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t<div class=\"form-group row\">
        \t\t\t\t\t\t\t\t\t<label class=\"col-xl-3 col-lg-3 col-form-label\">";
            // line 142
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Decimal Point"]);
            echo "</label>
        \t\t\t\t\t\t\t\t\t<div class=\"col-lg-9 col-xl-6\">
        \t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" id=\"decimal_point\" name=\"decimal_point\" value=\"";
            // line 144
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "decimal_point", [], "any", false, false, false, 144), "html", null, true);
            echo "\" required>
        \t\t\t\t\t\t\t\t\t\t<span class=\"form-text text-muted\">";
            // line 145
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Character to use as decimal point"]);
            echo ".</span>
        \t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t<div class=\"form-group row\">
        \t\t\t\t\t\t\t\t\t<label class=\"col-xl-3 col-lg-3 col-form-label\">";
            // line 149
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Thousand Separator"]);
            echo "</label>
        \t\t\t\t\t\t\t\t\t<div class=\"col-lg-9 col-xl-6\">
        \t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" id=\"thousand_separator\" name=\"thousand_separator\" value=\"";
            // line 151
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "thousand_separator", [], "any", false, false, false, 151), "html", null, true);
            echo "\" required>
        \t\t\t\t\t\t\t\t\t\t<span class=\"form-text text-muted\">";
            // line 152
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Character to separate thousands"]);
            echo ".</span>
        \t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t<div class=\"form-group row\">
        \t\t\t\t\t\t\t\t\t<label class=\"col-xl-3 col-lg-3 col-form-label\">";
            // line 156
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Number of fraction digits"]);
            echo "</label>
        \t\t\t\t\t\t\t\t\t<div class=\"col-lg-9 col-xl-6\">
        \t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" id=\"initbiz_money_fraction_digits\" name=\"initbiz_money_fraction_digits\" value=\"";
            // line 158
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "initbiz_money_fraction_digits", [], "any", false, false, false, 158), "html", null, true);
            echo "\" required>
        \t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t</div>
                                        <!-- add shipment form -->
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">";
            // line 163
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Add Shipment Form"]);
            echo "</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"radio\" id=\"add_form_simple\" value=\"add_form_simple\" name=\"add_form\" ";
            // line 167
            if ((($context["addShipmentForm"] ?? null) == "add_form_simple")) {
                echo "checked";
            } else {
                echo "disabled";
            }
            echo "> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Simple"]);
            echo " 
                                                        ";
            // line 168
            if ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "demo_mode", [], "any", false, false, false, 168) && (($context["addShipmentForm"] ?? null) != "add_form_simple"))) {
                // line 169
                echo "                                                         <a href=\"https://cargosimple.spotlayer.com/\" target=\"_blank\">";
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Click here to view Simple Form Demo"]);
                echo "</a>
                                                        ";
            }
            // line 171
            echo "                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"radio\" id=\"add_form_advance\" value=\"add_form_advance\" name=\"add_form\" ";
            // line 176
            if ((($context["addShipmentForm"] ?? null) == "add_form_advance")) {
                echo "checked";
            } else {
                echo "disabled";
            }
            echo "> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Advance"]);
            echo " 
                                                        ";
            // line 177
            if ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "demo_mode", [], "any", false, false, false, 177) && (($context["addShipmentForm"] ?? null) != "add_form_advance"))) {
                // line 178
                echo "                                                         <a href=\"https://cargo.spotlayer.com/\" target=\"_blank\">";
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Click here to view Advanced Form Demo"]);
                echo "</a>
                                                        ";
            }
            // line 180
            echo "                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"radio\" id=\"add_form_normal\" value=\"add_form_normal\" name=\"add_form\" ";
            // line 185
            if ((($context["addShipmentForm"] ?? null) == "add_form_normal")) {
                echo "checked";
            } else {
                echo "disabled";
            }
            echo "> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Normal"]);
            echo "
                                                        ";
            // line 186
            if ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "demo_mode", [], "any", false, false, false, 186) && (($context["addShipmentForm"] ?? null) != "add_form_simple"))) {
                // line 187
                echo "                                                         <a href=\"https://cargonormal.spotlayer.com/\" target=\"_blank\">";
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Click here to view Normal Form Demo"]);
                echo "</a>
                                                        ";
            }
            // line 189
            echo "                                                        <span></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- create user with shipment  -->
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">";
            // line 197
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Save Sender Details"]);
            echo "</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"radio\" id=\"exist_user\" value=\"1\" name=\"add_user\" ";
            // line 201
            if ((($context["addUserSHipment"] ?? null) == "1")) {
                echo "checked";
            }
            echo "> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Yes"]);
            echo "
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"radio\" id=\"no_user\" value=\"2\" name=\"add_user\" ";
            // line 207
            if ((($context["addUserSHipment"] ?? null) == "2")) {
                echo "checked";
            }
            echo "> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["No"]);
            echo "
                                                        <span></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>


                                        <!-- update shipment form -->
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">";
            // line 217
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Update Shipment Form"]);
            echo "</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"radio\" id=\"update_form_simple\" value=\"update_form_simple\" name=\"update_form\" ";
            // line 221
            if ((($context["updateShipmentForm"] ?? null) == "update_form_simple")) {
                echo "checked";
            }
            echo "> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Simple"]);
            echo "
                                                        ";
            // line 222
            if ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "demo_mode", [], "any", false, false, false, 222) && (($context["addShipmentForm"] ?? null) != "add_form_simple"))) {
                // line 223
                echo "                                                         <a href=\"https://cargosimple.spotlayer.com/\" target=\"_blank\">";
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Click here to view Simple Form Demo"]);
                echo "</a>
                                                        ";
            }
            // line 225
            echo "                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"radio\" id=\"update_form_advance\" value=\"update_form_advance\" name=\"update_form\" ";
            // line 230
            if ((($context["updateShipmentForm"] ?? null) == "update_form_advance")) {
                echo "checked";
            }
            echo "> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Advance"]);
            echo "
                                                        ";
            // line 231
            if ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "demo_mode", [], "any", false, false, false, 231) && (($context["updateShipmentForm"] ?? null) != "update_form_advance"))) {
                // line 232
                echo "                                                         <a href=\"https://cargo.spotlayer.com/\" target=\"_blank\">";
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Click here to view Advanced Form Demo"]);
                echo "</a>
                                                        ";
            }
            // line 234
            echo "                                                        <span></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- shipment print template -->
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">";
            // line 241
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Shipment Print Template"]);
            echo "</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"radio\" id=\"print_template_simple\" value=\"print_template_simple\" name=\"print_template\" ";
            // line 245
            if ((($context["printTemplate"] ?? null) == "print_template_simple")) {
                echo "checked";
            }
            echo "> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Simple"]);
            echo "
                                                        ";
            // line 246
            if ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "demo_mode", [], "any", false, false, false, 246) && (($context["printTemplate"] ?? null) != "print_template_simple"))) {
                // line 247
                echo "                                                         <a href=\"https://cargosimple.spotlayer.com/\" target=\"_blank\">";
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Click here to view Simple Print Template"]);
                echo "</a>
                                                        ";
            }
            // line 249
            echo "                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"radio\" id=\"print_template_advance\" value=\"print_template_advance\" name=\"print_template\" ";
            // line 254
            if ((($context["printTemplate"] ?? null) == "print_template_advance")) {
                echo "checked";
            }
            echo "> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Advance"]);
            echo "
                                                        ";
            // line 255
            if ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "demo_mode", [], "any", false, false, false, 255) && (($context["printTemplate"] ?? null) != "print_template_simple"))) {
                // line 256
                echo "                                                         <a href=\"https://cargo.spotlayer.com/\" target=\"_blank\">";
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Click here to view Advanced Print Template"]);
                echo "</a>
                                                        ";
            }
            // line 258
            echo "                                                        <span></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
        \t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t</div>
        \t\t\t\t\t</div>
        \t\t\t\t\t<div class=\"col-xl-2\"></div>
        \t\t\t\t</div>
        \t\t\t\t<div class=\"row\">
        \t\t\t\t\t<div class=\"col-xl-4\"></div>
        \t\t\t\t\t<div class=\"col-xl-8\">
                                <div class=\"form-group\">
                                    <button type=\"submit\" class=\"btn btn-primary\">";
            // line 272
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Save"]);
            echo "</button>
                                </div>
                            </div>
                        </div>
                    ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 276
($context["this"] ?? null), "param", [], "any", false, false, false, 276), "page", [], "any", false, false, false, 276) == "company")) {
            // line 277
            echo "        \t\t\t\t<div class=\"row\">
        \t\t\t\t\t<div class=\"col-xl-2\"></div>
        \t\t\t\t\t<div class=\"col-xl-8\">
        \t\t\t\t\t\t<div class=\"kt-section kt-section--first\">
                                    <h3 class=\"kt-section__title kt-section__title-lg\">";
            // line 281
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Company Settings"]);
            echo ":</h3>
        \t\t\t\t\t\t\t<div class=\"kt-section__body\">
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">";
            // line 284
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Website Name"]);
            echo "</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <input class=\"form-control\" type=\"text\" name=\"company[title]\" value=\"";
            // line 286
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "title", [], "any", false, false, false, 286), "html", null, true);
            echo "\" required>
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">";
            // line 290
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Website charset"]);
            echo "</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <input class=\"form-control\" type=\"text\" name=\"company[charset]\" value=\"";
            // line 292
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "charset", [], "any", false, false, false, 292), "html", null, true);
            echo "\" required>
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">";
            // line 296
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Website Description"]);
            echo "</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <textarea class=\"form-control\" name=\"company[description]\" required>";
            // line 298
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "description", [], "any", false, false, false, 298), "html", null, true);
            echo "</textarea>
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">";
            // line 302
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Website Keywords"]);
            echo "</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <input id=\"kt_tagify_2\" class=\"tagify\" placeholder='";
            // line 304
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["type"]);
            echo "...' value='";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "keywords", [], "any", false, false, false, 304), "html", null, true);
            echo "' name=\"company[keywords]\" />
                                                <span class=\"form-text text-muted\">";
            // line 305
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Seprate with comma"]);
            echo " ,</span>
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">";
            // line 309
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Primary Email"]);
            echo "</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <div class=\"input-group\">
    \t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\"><span class=\"input-group-text\"><i class=\"la la-at\"></i></span></div>
    \t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"company[primary_email]\" value=\"";
            // line 313
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "primary_email", [], "any", false, false, false, 313), "html", null, true);
            echo "\" placeholder=\"";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Email"]);
            echo "\" aria-describedby=\"basic-addon1\">
    \t\t\t\t\t\t\t\t\t\t\t</div>
                                                <span class=\"form-text text-muted\">";
            // line 315
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["This is the main email notices will be sent to. It is also used as the from email when emailing other automatic emails"]);
            echo ".</span>
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">";
            // line 319
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Tax Identification Number"]);
            echo "</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <input class=\"form-control\" type=\"text\" name=\"company[tax_number]\" value=\"";
            // line 321
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "tax_number", [], "any", false, false, false, 321), "html", null, true);
            echo "\" required>
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">";
            // line 325
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Company Phone"]);
            echo "</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <div class=\"input-group\">
    \t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\"><span class=\"input-group-text\"><i class=\"la la-phone\"></i></span></div>
    \t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"company[company_phone]\" value=\"";
            // line 329
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "company_phone", [], "any", false, false, false, 329), "html", null, true);
            echo "\" placeholder=\"";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Phone"]);
            echo "\" aria-describedby=\"basic-addon1\">
    \t\t\t\t\t\t\t\t\t\t\t</div>
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">";
            // line 334
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Company Phone 2"]);
            echo "</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <div class=\"input-group\">
    \t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\"><span class=\"input-group-text\"><i class=\"la la-phone\"></i></span></div>
    \t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"company[company_phone_2]\" value=\"";
            // line 338
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "company_phone_2", [], "any", false, false, false, 338), "html", null, true);
            echo "\" placeholder=\"";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Phone"]);
            echo "\" aria-describedby=\"basic-addon1\">
    \t\t\t\t\t\t\t\t\t\t\t</div>
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">";
            // line 343
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Company Phone 3"]);
            echo "</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <div class=\"input-group\">
    \t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\"><span class=\"input-group-text\"><i class=\"la la-phone\"></i></span></div>
    \t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"company[company_phone_3]\" value=\"";
            // line 347
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "company_phone_3", [], "any", false, false, false, 347), "html", null, true);
            echo "\" placeholder=\"";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Phone"]);
            echo "\" aria-describedby=\"basic-addon1\">
    \t\t\t\t\t\t\t\t\t\t\t</div>
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">";
            // line 352
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Facebook"]);
            echo "</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <input class=\"form-control\" type=\"text\" name=\"company[facebook]\" value=\"";
            // line 354
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "facebook", [], "any", false, false, false, 354), "html", null, true);
            echo "\" required>
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">";
            // line 358
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Twitter"]);
            echo "</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <input class=\"form-control\" type=\"text\" name=\"company[twitter]\" value=\"";
            // line 360
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "twitter", [], "any", false, false, false, 360), "html", null, true);
            echo "\" required>
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">";
            // line 364
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Instagram"]);
            echo "</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <input class=\"form-control\" type=\"text\" name=\"company[instagram]\" value=\"";
            // line 366
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "instagram", [], "any", false, false, false, 366), "html", null, true);
            echo "\" required>
                                            </div>
                                        </div>
                                        <div class=\"location-complete\">
                                            <div class=\"form-group row\">
                                                <label class=\"col-xl-3 col-lg-3 col-form-label\">";
            // line 371
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Company Official Address"]);
            echo "</label>
                                                <div class=\"col-lg-9 col-xl-6\">
                                                    <input type=\"text\" class=\"form-control\" id=\"address\" name=\"address\" value=\"";
            // line 373
            if (twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "address", [], "any", false, false, false, 373)) {
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "address", [], "any", false, false, false, 373)]);
            }
            echo "\"/>
                                                    <input type=\"hidden\" class=\"form-control\" name=\"lat\" value=\"";
            // line 374
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "lat", [], "any", false, false, false, 374), "html", null, true);
            echo "\"/>
                                                    <input type=\"hidden\" class=\"form-control\" name=\"lng\" value=\"";
            // line 375
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "lng", [], "any", false, false, false, 375), "html", null, true);
            echo "\"/>
                                                </div>
                                            </div>
                                            <div class=\"form-group row\">
                                                <label class=\"col-xl-3 col-lg-3 col-form-label\">";
            // line 379
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Google Map"]);
            echo "</label>
                                                <div class=\"col-lg-9 col-xl-6\">
                                                    <div id=\"map_canvas\" class=\"col-sm-12\"></div>
                                                    <span class=\"form-text text-muted\">";
            // line 382
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Change the pin to select the right location"]);
            echo "</span>
                                                </div>
                                            </div>
                                            <div class=\"form-group row\">
                                                <label class=\"col-xl-3 col-lg-3 col-form-label\">";
            // line 386
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["County"]);
            echo "</label>
                                                <div class=\"col-lg-9 col-xl-6\">
                                                    <input class=\"form-control\" type=\"text\" name=\"sublocality\" value=\"";
            // line 388
            if (twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "county", [], "any", false, false, false, 388)) {
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "county", [], "any", false, false, false, 388)]);
            }
            echo "\">
                                                </div>
                                            </div>
                                            <div class=\"form-group row\">
                                                <label class=\"col-xl-3 col-lg-3 col-form-label\">";
            // line 392
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["City"]);
            echo "</label>
                                                <div class=\"col-lg-9 col-xl-6\">
                                                    <input class=\"form-control\" type=\"text\" name=\"locality\" value=\"";
            // line 394
            if (twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "city", [], "any", false, false, false, 394)) {
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "city", [], "any", false, false, false, 394)]);
            }
            echo "\">
                                                </div>
                                            </div>
                                            <div class=\"form-group row\">
                                                <label class=\"col-xl-3 col-lg-3 col-form-label\">";
            // line 398
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["State / Region"]);
            echo "</label>
                                                <div class=\"col-lg-9 col-xl-6\">
                                                    <input class=\"form-control\" type=\"text\" name=\"administrative_area_level_1\" value=\"";
            // line 400
            if (twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "state", [], "any", false, false, false, 400)) {
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "state", [], "any", false, false, false, 400)]);
            }
            echo "\">
                                                </div>
                                            </div>
                                            <div class=\"form-group row\">
                                                <label class=\"col-xl-3 col-lg-3 col-form-label\">";
            // line 404
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Postal Code"]);
            echo "</label>
                                                <div class=\"col-lg-9 col-xl-6\">
                                                    <input class=\"form-control\" type=\"text\" name=\"postal_code\" value=\"";
            // line 406
            if (twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "postal_code", [], "any", false, false, false, 406)) {
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "postal_code", [], "any", false, false, false, 406)]);
            }
            echo "\">
                                                </div>
                                            </div>
                                            <div class=\"form-group row\">
                                                <label class=\"col-xl-3 col-lg-3 col-form-label\">";
            // line 410
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Country"]);
            echo "</label>
                                                <div class=\"col-lg-9 col-xl-6\">
                                                    <input class=\"form-control\" type=\"text\" name=\"country\" value=\"";
            // line 412
            if (twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "country", [], "any", false, false, false, 412)) {
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "country", [], "any", false, false, false, 412)]);
            }
            echo "\">
                                                </div>
                                            </div>
            \t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t</div>
                                            
                                ";
            // line 419
            if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "demo_mode", [], "any", false, false, false, 419)) {
                // line 420
                echo "                                    <div class=\"kt-section\">
                                        <div class=\"kt-section__body\">
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">";
                // line 423
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Company Logo"]);
                echo "</label>
                                            <div class=\"col-lg-9 col-xl-6\">

                                                <div class=\"alert alert-danger\" role=\"alert\">
                                                    ";
                // line 427
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Not allowed to change it in demo."]);
                echo "
                                                </div>

                                                <span class=\"form-text text-muted\">";
                // line 430
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Perfered Size"]);
                echo " 180 x 30.</span>
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">";
                // line 434
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Mobile Logo"]);
                echo "</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                                                            <div class=\"alert alert-danger\" role=\"alert\">
                                                                                                ";
                // line 437
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Not allowed to change it in demo."]);
                echo "
                                                                                            </div>

                                                <span class=\"form-text text-muted\">";
                // line 440
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Max Height"]);
                echo " 40px.</span>
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">";
                // line 444
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Company Favicon"]);
                echo "</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                                                            <div class=\"alert alert-danger\" role=\"alert\">
                                                                                                ";
                // line 447
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Not allowed to change it in demo."]);
                echo "
                                                                                            </div>

                                                <span class=\"form-text text-muted\">";
                // line 450
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Size"]);
                echo " 48 x 48.</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                ";
            } else {
                // line 456
                echo "                                    <div class=\"kt-section\">
                                        <div class=\"kt-section__body\">
                                            <div class=\"form-group row\">
                                                <label class=\"col-xl-3 col-lg-3 col-form-label\">";
                // line 459
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Company Logo"]);
                echo "</label>
                                                <div class=\"col-lg-9 col-xl-6\">
                                                    ";
                // line 461
                if (twig_get_attribute($this->env, $this->source, ($context["Logo"] ?? null), "isMulti", [], "any", false, false, false, 461)) {
                    // line 462
                    echo "                                                        ";
                    $context['__cms_partial_params'] = [];
                    echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["Logo"] ?? null) . "::image-multi")                    , $context['__cms_partial_params']                    , true                    );
                    unset($context['__cms_partial_params']);
                    // line 463
                    echo "                                                    ";
                } else {
                    // line 464
                    echo "                                                        ";
                    $context['__cms_partial_params'] = [];
                    echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["Logo"] ?? null) . "::image-single")                    , $context['__cms_partial_params']                    , true                    );
                    unset($context['__cms_partial_params']);
                    // line 465
                    echo "                                                    ";
                }
                // line 466
                echo "                                                    <span class=\"form-text text-muted\">";
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Perfered Size"]);
                echo " 180 x 30.</span>
                                                </div>
                                            </div>
                                            <div class=\"form-group row\">
                                                <label class=\"col-xl-3 col-lg-3 col-form-label\">";
                // line 470
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Mobile Logo"]);
                echo "</label>
                                                <div class=\"col-lg-9 col-xl-6\">
                                                    ";
                // line 472
                if (twig_get_attribute($this->env, $this->source, ($context["MobileLogo"] ?? null), "isMulti", [], "any", false, false, false, 472)) {
                    // line 473
                    echo "                                                        ";
                    $context['__cms_partial_params'] = [];
                    echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["MobileLogo"] ?? null) . "::image-multi")                    , $context['__cms_partial_params']                    , true                    );
                    unset($context['__cms_partial_params']);
                    // line 474
                    echo "                                                    ";
                } else {
                    // line 475
                    echo "                                                        ";
                    $context['__cms_partial_params'] = [];
                    echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["MobileLogo"] ?? null) . "::image-single")                    , $context['__cms_partial_params']                    , true                    );
                    unset($context['__cms_partial_params']);
                    // line 476
                    echo "                                                    ";
                }
                // line 477
                echo "                                                    <span class=\"form-text text-muted\">";
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Max Height"]);
                echo " 40px.</span>
                                                </div>
                                            </div>
                                            <div class=\"form-group row\">
                                                <label class=\"col-xl-3 col-lg-3 col-form-label\">";
                // line 481
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Company Favicon"]);
                echo "</label>
                                                <div class=\"col-lg-9 col-xl-6\">
                                                    ";
                // line 483
                if (twig_get_attribute($this->env, $this->source, ($context["Favicon"] ?? null), "isMulti", [], "any", false, false, false, 483)) {
                    // line 484
                    echo "                                                        ";
                    $context['__cms_partial_params'] = [];
                    echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["Favicon"] ?? null) . "::image-multi")                    , $context['__cms_partial_params']                    , true                    );
                    unset($context['__cms_partial_params']);
                    // line 485
                    echo "                                                    ";
                } else {
                    // line 486
                    echo "                                                        ";
                    $context['__cms_partial_params'] = [];
                    echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["Favicon"] ?? null) . "::image-single")                    , $context['__cms_partial_params']                    , true                    );
                    unset($context['__cms_partial_params']);
                    // line 487
                    echo "                                                    ";
                }
                // line 488
                echo "                                                    <span class=\"form-text text-muted\">";
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Size"]);
                echo " 48 x 48.</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                ";
            }
            // line 494
            echo "        \t\t\t\t\t</div>
        \t\t\t\t\t<div class=\"col-xl-2\"></div>
        \t\t\t\t</div>
        \t\t\t\t<div class=\"row\">
        \t\t\t\t\t<div class=\"col-xl-4\"></div>
        \t\t\t\t\t<div class=\"col-xl-8\">
                                <div class=\"form-group\">
                                    <button type=\"submit\" class=\"btn btn-primary\">";
            // line 501
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Save"]);
            echo "</button>
                                </div>
                            </div>
                        </div>
                    ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 505
($context["this"] ?? null), "param", [], "any", false, false, false, 505), "page", [], "any", false, false, false, 505) == "fees")) {
            // line 506
            echo "        \t\t\t\t<div class=\"row\">
        \t\t\t\t\t<div class=\"col-xl-2\"></div>
        \t\t\t\t\t<div class=\"col-xl-8\">
        \t\t\t\t\t\t<div class=\"kt-section kt-section--first\">
                                    <h3 class=\"kt-section__title kt-section__title-lg\">";
            // line 510
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Taxes and fees"]);
            echo ":</h3>
        \t\t\t\t\t\t\t<div class=\"kt-section__body\">
                                        <div class=\"kt-section\">
                        \t\t\t\t\t<h5 class=\"kt-section__title kt-margin-b-20\">
                        \t\t\t\t\t\t";
            // line 514
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Taxes"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span>
                        \t\t\t\t\t</h5>
                        \t\t\t\t\t<div class=\"kt-section__content\">
                \t\t\t\t\t\t\t\t<div class=\"row\">
                    \t\t\t\t\t\t\t\t<div class=\"form-group col-lg-6\">
                    \t\t\t\t\t\t\t\t\t<label>";
            // line 519
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Tax Percentage"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></label>
                                                        <div class=\"input-group\">
                                    \t\t\t\t\t\t<div class=\"input-group-prepend\"><span class=\"input-group-text\">%</span></div>
                    \t\t\t\t\t\t\t\t\t\t<input class=\"form-control bootstrap-touchspin-vertical-btn\" type=\"text\" name=\"taxes[percent]\" value=\"";
            // line 522
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["taxes"] ?? null), "percent", [], "any", false, false, false, 522), "html", null, true);
            echo "\" required>
                                    \t\t\t\t\t</div>
                    \t\t\t\t\t\t\t\t</div>
                    \t\t\t\t\t\t\t\t<div class=\"form-group col-lg-6\">
                    \t\t\t\t\t\t\t\t\t<label>";
            // line 526
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Shipping Insurance Percentage"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></label>
                                                        <div class=\"input-group\">
                                    \t\t\t\t\t\t<div class=\"input-group-prepend\"><span class=\"input-group-text\">%</span></div>
                    \t\t\t\t\t\t\t\t\t\t<input class=\"form-control bootstrap-touchspin-vertical-btn\" type=\"text\" name=\"taxes[insurance]\" value=\"";
            // line 529
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["taxes"] ?? null), "insurance", [], "any", false, false, false, 529), "html", null, true);
            echo "\" required>
                                    \t\t\t\t\t</div>
                    \t\t\t\t\t\t\t\t</div>
                \t\t\t\t\t\t\t\t</div>
                                            </div>
                                        </div>
                                        <div class=\"kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit\"></div>
                                        <div class=\"kt-section\">
                        \t\t\t\t\t<h5 class=\"kt-section__title kt-margin-b-20\">
                        \t\t\t\t\t\t";
            // line 538
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Default Fees"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span>
                        \t\t\t\t\t</h5>
                        \t\t\t\t\t<div class=\"kt-section__content\">
                \t\t\t\t\t\t\t\t<div class=\"row\">
                    \t\t\t\t\t\t\t\t<div class=\"form-group col-lg-6\">
                    \t\t\t\t\t\t\t\t\t<label>";
            // line 543
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Shipping cost"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></label>
                                                        <div class=\"input-group\">
                                                            ";
            // line 545
            if ((twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "place_symbol_before", [], "any", false, false, false, 545) == 1)) {
                // line 546
                echo "                                        \t\t\t\t\t\t<div class=\"input-group-prepend\"><span class=\"input-group-text\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "currency_symbol", [], "any", false, false, false, 546), "html", null, true);
                echo "</span></div>
                                                            ";
            }
            // line 548
            echo "                    \t\t\t\t\t\t\t\t\t\t<input class=\"form-control decimal\" type=\"text\" name=\"fees[delivery_cost]\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fees"] ?? null), "delivery_cost", [], "any", false, false, false, 548), "html", null, true);
            echo "\" required>
                                                            ";
            // line 549
            if ((twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "place_symbol_before", [], "any", false, false, false, 549) == 0)) {
                // line 550
                echo "                                        \t\t\t\t\t\t<div class=\"input-group-append\"><span class=\"input-group-text\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "currency_symbol", [], "any", false, false, false, 550), "html", null, true);
                echo "</span></div>
                                                            ";
            }
            // line 552
            echo "                                    \t\t\t\t\t</div>
                \t\t\t\t\t\t\t\t\t\t<span class=\"form-text text-muted\">";
            // line 553
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["The default cost to deliver the package"]);
            echo "</span>
                    \t\t\t\t\t\t\t\t</div>
                    \t\t\t\t\t\t\t\t<div class=\"form-group col-lg-6\">
                    \t\t\t\t\t\t\t\t\t<label>";
            // line 556
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Pickup cost"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></label>
                                                        <div class=\"input-group\">
                                                            ";
            // line 558
            if ((twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "place_symbol_before", [], "any", false, false, false, 558) == 1)) {
                // line 559
                echo "                                        \t\t\t\t\t\t<div class=\"input-group-prepend\"><span class=\"input-group-text\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "currency_symbol", [], "any", false, false, false, 559), "html", null, true);
                echo "</span></div>
                                                            ";
            }
            // line 561
            echo "                    \t\t\t\t\t\t\t\t\t\t<input class=\"form-control decimal\" type=\"text\" name=\"fees[pickup_cost]\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fees"] ?? null), "pickup_cost", [], "any", false, false, false, 561), "html", null, true);
            echo "\" required>
                                                            ";
            // line 562
            if ((twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "place_symbol_before", [], "any", false, false, false, 562) == 0)) {
                // line 563
                echo "                                        \t\t\t\t\t\t<div class=\"input-group-append\"><span class=\"input-group-text\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "currency_symbol", [], "any", false, false, false, 563), "html", null, true);
                echo "</span></div>
                                                            ";
            }
            // line 565
            echo "                                    \t\t\t\t\t</div>
                \t\t\t\t\t\t\t\t\t\t<span class=\"form-text text-muted\">";
            // line 566
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["The default cost to receive the package from the sender"]);
            echo "</span>
                    \t\t\t\t\t\t\t\t</div>
                \t\t\t\t\t\t\t\t</div>
                \t\t\t\t\t\t\t\t<div class=\"row\">
                                                    <div class=\"form-group col-lg-6\">
                                                        <label>";
            // line 571
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delivery back cost by sender"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></label>
                                                        <div class=\"input-group\">
                                                            ";
            // line 573
            if ((twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "place_symbol_before", [], "any", false, false, false, 573) == 1)) {
                // line 574
                echo "                                                                <div class=\"input-group-prepend\"><span class=\"input-group-text\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "currency_symbol", [], "any", false, false, false, 574), "html", null, true);
                echo "</span></div>
                                                            ";
            }
            // line 576
            echo "                                                            <input class=\"form-control decimal \" type=\"text\" name=\"fees[delivery_cost_back_sender]\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fees"] ?? null), "delivery_cost_back_sender", [], "any", false, false, false, 576), "html", null, true);
            echo "\" required>
                                                            ";
            // line 577
            if ((twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "place_symbol_before", [], "any", false, false, false, 577) == 0)) {
                // line 578
                echo "                                                                <div class=\"input-group-append\"><span class=\"input-group-text\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "currency_symbol", [], "any", false, false, false, 578), "html", null, true);
                echo "</span></div>
                                                            ";
            }
            // line 580
            echo "                                                        </div>
                \t\t\t\t\t\t\t\t\t\t<span class=\"form-text text-muted\">";
            // line 581
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["The default cost to return the package fees to the sender"]);
            echo "</span>
                                                    </div>
                    \t\t\t\t\t\t\t\t<div class=\"form-group col-lg-6\">
                    \t\t\t\t\t\t\t\t\t<label>";
            // line 584
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delivery back cost by receiver"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></label>
                                                        <div class=\"input-group\">
                                                            ";
            // line 586
            if ((twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "place_symbol_before", [], "any", false, false, false, 586) == 1)) {
                // line 587
                echo "                                        \t\t\t\t\t\t<div class=\"input-group-prepend\"><span class=\"input-group-text\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "currency_symbol", [], "any", false, false, false, 587), "html", null, true);
                echo "</span></div>
                                                            ";
            }
            // line 589
            echo "                    \t\t\t\t\t\t\t\t\t\t<input class=\"form-control decimal \" type=\"text\" name=\"fees[delivery_cost_back_receiver]\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fees"] ?? null), "delivery_cost_back_receiver", [], "any", false, false, false, 589), "html", null, true);
            echo "\" required>
                                                            ";
            // line 590
            if ((twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "place_symbol_before", [], "any", false, false, false, 590) == 0)) {
                // line 591
                echo "                                        \t\t\t\t\t\t<div class=\"input-group-append\"><span class=\"input-group-text\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "currency_symbol", [], "any", false, false, false, 591), "html", null, true);
                echo "</span></div>
                                                            ";
            }
            // line 593
            echo "                                    \t\t\t\t\t</div>
                \t\t\t\t\t\t\t\t\t\t<span class=\"form-text text-muted\">";
            // line 594
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["The default cost to return the package fees to the sender"]);
            echo "</span>
                    \t\t\t\t\t\t\t\t</div>
                \t\t\t\t\t\t\t\t</div>
                                            </div>
                                        </div>
                                        <div class=\"kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit\"></div>
        \t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t</div>
        \t\t\t\t\t</div>
        \t\t\t\t\t<div class=\"col-xl-2\"></div>
        \t\t\t\t</div>
        \t\t\t\t<div class=\"row\">
        \t\t\t\t\t<div class=\"col-xl-4\"></div>
        \t\t\t\t\t<div class=\"col-xl-8\">
                                <div class=\"form-group\">
                                    <button type=\"submit\" class=\"btn btn-primary\">";
            // line 609
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Save"]);
            echo "</button>
                                </div>
                            </div>
                        </div>
        \t\t\t\t<div class=\"row\">
                            <div class=\"col-xl-2\"></div>
        \t\t\t\t\t<div class=\"col-xl-8\">

                                <div class=\"kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit\"></div>
                                <div class=\"kt-section\">
                                    <h5 class=\"kt-section__title kt-margin-b-20\">
                                        ";
            // line 620
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Fees by places"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span>
                                        <div class=\"kt-section__toolbar\">
                                            <a href=\"";
            // line 622
            echo url("dashboard/settings/fees/create");
            echo "\" class=\"btn btn-success\">";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Add New Fees"]);
            echo "</a>
                                        </div>
                                    </h5>
                                    <div class=\"kt-section__content\">
                                        <div class=\"kt-datatable\"></div>
                                    </div>
                                </div>
                            </div>
        \t\t\t\t\t<div class=\"col-xl-2\"></div>
                        </div>
                    ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 632
($context["this"] ?? null), "param", [], "any", false, false, false, 632), "page", [], "any", false, false, false, 632) == "invoice")) {
            // line 633
            echo "        \t\t\t\t<div class=\"row\">
        \t\t\t\t\t<div class=\"col-xl-2\"></div>
        \t\t\t\t\t<div class=\"col-xl-8\">
        \t\t\t\t\t\t<div class=\"kt-section kt-section--first\">
                                    <h3 class=\"kt-section__title kt-section__title-lg\">";
            // line 637
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Tracking and Invoice"]);
            echo ":</h3>
        \t\t\t\t\t\t\t<div class=\"kt-section__body\">
                                        <div class=\"kt-section\">
                        \t\t\t\t\t<h5 class=\"kt-section__title kt-margin-b-20\">
                        \t\t\t\t\t\t";
            // line 641
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Tracking"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span>
                        \t\t\t\t\t</h5>
                        \t\t\t\t\t<div class=\"kt-section__content\">
                \t\t\t\t\t\t\t\t<div class=\"row\">
                    \t\t\t\t\t\t\t\t<div class=\"form-group col-lg-6\">
                    \t\t\t\t\t\t\t\t\t<label>";
            // line 646
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Shipment Prefix"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></label>
                \t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" name=\"tracking[prefix_order]\" value=\"";
            // line 647
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["tracking"] ?? null), "prefix_order", [], "any", false, false, false, 647), "html", null, true);
            echo "\" required>
                    \t\t\t\t\t\t\t\t</div>
                    \t\t\t\t\t\t\t\t<div class=\"form-group col-lg-6\">
                    \t\t\t\t\t\t\t\t\t<label>";
            // line 650
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Shipment Number of digits in the tracking"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></label>
                \t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"number\" max=\"10\" name=\"tracking[numbers_order]\" value=\"";
            // line 651
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["tracking"] ?? null), "numbers_order", [], "any", false, false, false, 651), "html", null, true);
            echo "\" required>
                \t\t\t\t\t\t\t\t\t\t<span class=\"form-text text-muted\">";
            // line 652
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["EXAMPLE"]);
            echo ": 0000001</span>
                    \t\t\t\t\t\t\t\t</div>
                \t\t\t\t\t\t\t\t</div>
                                                <!--
                    \t\t\t\t\t\t\t\t<div class=\"row\">
                        \t\t\t\t\t\t\t\t<div class=\"form-group col-lg-6\">
                        \t\t\t\t\t\t\t\t\t<label>";
            // line 658
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Container Prefix"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></label>
                    \t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" name=\"tracking[prefix_container]\" value=\"";
            // line 659
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["tracking"] ?? null), "prefix_container", [], "any", false, false, false, 659), "html", null, true);
            echo "\" required>
                        \t\t\t\t\t\t\t\t</div>
                        \t\t\t\t\t\t\t\t<div class=\"form-group col-lg-6\">
                        \t\t\t\t\t\t\t\t\t<label>";
            // line 662
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Container Number of digits in the tracking"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></label>
                    \t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"number\" max=\"10\" min=\"5\" name=\"tracking[numbers_container]\" value=\"";
            // line 663
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["tracking"] ?? null), "numbers_container", [], "any", false, false, false, 663), "html", null, true);
            echo "\" required>
                    \t\t\t\t\t\t\t\t\t\t<span class=\"form-text text-muted\">";
            // line 664
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["EXAMPLE"]);
            echo ": 0000001</span>
                        \t\t\t\t\t\t\t\t</div>
                                                    </div>
                                                -->
                                                <div class=\"row\">
                    \t\t\t\t\t\t\t\t<div class=\"form-group col-lg-6\">
                    \t\t\t\t\t\t\t\t\t<label>";
            // line 670
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Default Delivery Time"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></label>
                \t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"tracking[default_deliverytime]\" required>
                                                            <option data-hidden=\"true\"></option>
                                                            ";
            // line 673
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["deliverytimes"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["time"]) {
                // line 674
                echo "                \t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["time"], "id", [], "any", false, false, false, 674), "html", null, true);
                echo "\" ";
                if ((twig_get_attribute($this->env, $this->source, ($context["tracking"] ?? null), "default_deliverytime", [], "any", false, false, false, 674) == twig_get_attribute($this->env, $this->source, $context["time"], "id", [], "any", false, false, false, 674))) {
                    echo "selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["time"], "name", [], "any", false, false, false, 674), "html", null, true);
                echo "</option>
                                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['time'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 676
            echo "                                                        </select>
                    \t\t\t\t\t\t\t\t</div>
                    \t\t\t\t\t\t\t\t<div class=\"form-group col-lg-6\">
                    \t\t\t\t\t\t\t\t\t<label>";
            // line 679
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Default Status Time"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></label>
                \t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"tracking[default_status]\" required>
                                                            <option data-hidden=\"true\"></option>
                                                            ";
            // line 682
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["statuses"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["status"]) {
                // line 683
                echo "                \t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["status"], "id", [], "any", false, false, false, 683), "html", null, true);
                echo "\" ";
                if ((twig_get_attribute($this->env, $this->source, ($context["tracking"] ?? null), "default_status", [], "any", false, false, false, 683) == twig_get_attribute($this->env, $this->source, $context["status"], "id", [], "any", false, false, false, 683))) {
                    echo "selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["status"], "name", [], "any", false, false, false, 683), "html", null, true);
                echo "</option>
                                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['status'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 685
            echo "                                                        </select>
                    \t\t\t\t\t\t\t\t</div>
                                                </div>
                                                <div class=\"row\">
                    \t\t\t\t\t\t\t\t<div class=\"form-group col-lg-12\">
                    \t\t\t\t\t\t\t\t\t<label>";
            // line 690
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Default Tracking ID"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></label>
                \t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"tracking[default_tracking_id]\" required>
                                                            <option data-hidden=\"true\"></option>
            \t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" ";
            // line 693
            if ((twig_get_attribute($this->env, $this->source, ($context["tracking"] ?? null), "default_tracking_id", [], "any", false, false, false, 693) == 1)) {
                echo "selected";
            }
            echo ">";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Country"]);
            echo "</option>
            \t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\" ";
            // line 694
            if ((twig_get_attribute($this->env, $this->source, ($context["tracking"] ?? null), "default_tracking_id", [], "any", false, false, false, 694) == 2)) {
                echo "selected";
            }
            echo ">";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["State"]);
            echo "</option>
            \t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\" ";
            // line 695
            if ((twig_get_attribute($this->env, $this->source, ($context["tracking"] ?? null), "default_tracking_id", [], "any", false, false, false, 695) == 3)) {
                echo "selected";
            }
            echo ">";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["City"]);
            echo "</option>
            \t\t\t\t\t\t\t\t\t\t\t\t<option value=\"4\" ";
            // line 696
            if ((twig_get_attribute($this->env, $this->source, ($context["tracking"] ?? null), "default_tracking_id", [], "any", false, false, false, 696) == 4)) {
                echo "selected";
            }
            echo ">";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Area"]);
            echo "</option>
                                                        </select>
                \t\t\t\t\t\t\t\t\t\t<span class=\"form-text text-muted\">";
            // line 698
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["The id that will be shown on your print label so you can detect by the id from and where this shipment will go through"]);
            echo "</span>
                    \t\t\t\t\t\t\t\t</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit\"></div>
                                        <div class=\"kt-section\">
                        \t\t\t\t\t<h5 class=\"kt-section__title kt-margin-b-20\">
                        \t\t\t\t\t\t";
            // line 706
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Invoice"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span>
                        \t\t\t\t\t</h5>
                        \t\t\t\t\t<div class=\"kt-section__content\">
                                                <div class=\"row\">
                    \t\t\t\t\t\t\t\t<div class=\"form-group col-lg-12\">
                    \t\t\t\t\t\t\t\t\t<label>";
            // line 711
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Default Invoice Terms"]);
            echo "</label>
                \t\t\t\t\t\t\t\t\t\t<textarea class=\"form-control\" name=\"invoice[terms]\">";
            // line 712
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "terms", [], "any", false, false, false, 712), "html", null, true);
            echo "</textarea>
                    \t\t\t\t\t\t\t\t</div>
                                                </div>
                                                <div class=\"row\">
                    \t\t\t\t\t\t\t\t<div class=\"form-group col-lg-6\">
                    \t\t\t\t\t\t\t\t\t<label>";
            // line 717
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Invoice Company Signing"]);
            echo "</label>
                                                        <input class=\"form-control\" type=\"text\" name=\"invoice[signing_company]\" value=\"";
            // line 718
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "signing_company", [], "any", false, false, false, 718), "html", null, true);
            echo "\">
                    \t\t\t\t\t\t\t\t</div>
                    \t\t\t\t\t\t\t\t<div class=\"form-group col-lg-6\">
                    \t\t\t\t\t\t\t\t\t<label>";
            // line 721
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Invoice Customer Signing"]);
            echo "</label>
                                                        <input class=\"form-control\" type=\"text\" name=\"invoice[signing_customer]\" value=\"";
            // line 722
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "signing_customer", [], "any", false, false, false, 722), "html", null, true);
            echo "\">
                    \t\t\t\t\t\t\t\t</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit\"></div>
        \t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t</div>
        \t\t\t\t\t</div>
        \t\t\t\t\t<div class=\"col-xl-2\"></div>
        \t\t\t\t</div>
        \t\t\t\t<div class=\"row\">
        \t\t\t\t\t<div class=\"col-xl-4\"></div>
        \t\t\t\t\t<div class=\"col-xl-8\">
                                <div class=\"form-group\">
                                    <button type=\"submit\" class=\"btn btn-primary\">";
            // line 737
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Save"]);
            echo "</button>
                                </div>
                            </div>
                        </div>
                    ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 741
($context["this"] ?? null), "param", [], "any", false, false, false, 741), "page", [], "any", false, false, false, 741) == "branches")) {
            // line 742
            echo "                        <div class=\"kt-section kt-section--first\">
                            <div class=\"kt-section__body\">
                                <div class=\"kt-datatable\"></div>
                            </div>
                        </div>
                    ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 747
($context["this"] ?? null), "param", [], "any", false, false, false, 747), "page", [], "any", false, false, false, 747) == "cars")) {
            // line 748
            echo "                        <div class=\"kt-section kt-section--first\">
                            <div class=\"kt-section__body\">
                                <div class=\"kt-datatable\"></div>
                            </div>
                        </div>
                    ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 753
($context["this"] ?? null), "param", [], "any", false, false, false, 753), "page", [], "any", false, false, false, 753) == "destination")) {
            // line 754
            echo "                        <div class=\"kt-section kt-section--first\">
                            <div class=\"kt-section__body\">
                                <div class=\"kt-datatable\"></div>
                            </div>
                        </div>
                    ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 759
($context["this"] ?? null), "param", [], "any", false, false, false, 759), "page", [], "any", false, false, false, 759) == "location")) {
            // line 760
            echo "                        <div class=\"kt-section kt-section--first\">
                            <div class=\"kt-section__body\">
                                <div class=\"kt-datatable\"></div>
                            </div>
                        </div>
                    ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 765
($context["this"] ?? null), "param", [], "any", false, false, false, 765), "page", [], "any", false, false, false, 765) == "statuscontainer")) {
            // line 766
            echo "                        <div class=\"kt-section kt-section--first\">
                            <div class=\"kt-section__body\">
                                <div class=\"kt-datatable\"></div>
                            </div>
                        </div>     
                    ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 771
($context["this"] ?? null), "param", [], "any", false, false, false, 771), "page", [], "any", false, false, false, 771) == "reasonarrival")) {
            // line 772
            echo "                        <div class=\"kt-section kt-section--first\">
                            <div class=\"kt-section__body\">
                                <div class=\"kt-datatable\"></div>
                            </div>
                        </div> 
                    ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 777
($context["this"] ?? null), "param", [], "any", false, false, false, 777), "page", [], "any", false, false, false, 777) == "size")) {
            // line 778
            echo "                        <div class=\"kt-section kt-section--first\">
                            <div class=\"kt-section__body\">
                                <div class=\"kt-datatable\"></div>
                            </div>
                        </div>                  
                    ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 783
($context["this"] ?? null), "param", [], "any", false, false, false, 783), "page", [], "any", false, false, false, 783) == "statuses")) {
            // line 784
            echo "                        <div class=\"kt-section kt-section--first\">
                            <div class=\"kt-section__body\">
                                <div class=\"kt-datatable\"></div>
                            </div>
                        </div>
                    ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 789
($context["this"] ?? null), "param", [], "any", false, false, false, 789), "page", [], "any", false, false, false, 789) == "Stockstatuses")) {
            // line 790
            echo "                        <div class=\"kt-section kt-section--first\">
                            <div class=\"kt-section__body\">
                                <div class=\"kt-datatable\"></div>
                            </div>
                        </div>
                    ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 795
($context["this"] ?? null), "param", [], "any", false, false, false, 795), "page", [], "any", false, false, false, 795) == "Customstatuses")) {
            // line 796
            echo "                        <div class=\"kt-section kt-section--first\">
                            <div class=\"kt-section__body\">
                                <div class=\"kt-datatable\"></div>
                            </div>
                        </div>        
                    ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 801
($context["this"] ?? null), "param", [], "any", false, false, false, 801), "page", [], "any", false, false, false, 801) == "treasury")) {
            // line 802
            echo "                        <div class=\"kt-section kt-section--first\">
                            <div class=\"kt-section__body\">
                                <div class=\"kt-datatable\"></div>
                            </div>
                        </div>
                    ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 807
($context["this"] ?? null), "param", [], "any", false, false, false, 807), "page", [], "any", false, false, false, 807) == "categories")) {
            // line 808
            echo "                        <div class=\"kt-section kt-section--first\">
                            <div class=\"kt-section__body\">
                                <div class=\"kt-datatable\"></div>
                            </div>
                        </div>
                    ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 813
($context["this"] ?? null), "param", [], "any", false, false, false, 813), "page", [], "any", false, false, false, 813) == "couriers")) {
            // line 814
            echo "                        <div class=\"kt-section kt-section--first\">
                            <div class=\"kt-section__body\">
                                <div class=\"kt-datatable\"></div>
                            </div>
                        </div>
                    ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 819
($context["this"] ?? null), "param", [], "any", false, false, false, 819), "page", [], "any", false, false, false, 819) == "deliverytimes")) {
            // line 820
            echo "                        <div class=\"kt-section kt-section--first\">
                            <div class=\"kt-section__body\">
                                <div class=\"kt-datatable\"></div>
                            </div>
                        </div>
                    ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 825
($context["this"] ?? null), "param", [], "any", false, false, false, 825), "page", [], "any", false, false, false, 825) == "shipping")) {
            // line 826
            echo "                        <div class=\"kt-section kt-section--first\">
                            <div class=\"kt-section__body\">
                                <div class=\"kt-datatable\"></div>
                            </div>
                        </div>
                    ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 831
($context["this"] ?? null), "param", [], "any", false, false, false, 831), "page", [], "any", false, false, false, 831) == "labels")) {
            // line 832
            echo "                        <div class=\"kt-section kt-section--first\">
                            <div class=\"kt-section__body\">
                                <div class=\"kt-datatable\"></div>
                            </div>
                        </div> 
                    ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 837
($context["this"] ?? null), "param", [], "any", false, false, false, 837), "page", [], "any", false, false, false, 837) == "handler")) {
            // line 838
            echo "                        <div class=\"kt-section kt-section--first\">
                            <div class=\"kt-section__body\">
                                <div class=\"kt-datatable\"></div>
                            </div>
                        </div>
                    ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 843
($context["this"] ?? null), "param", [], "any", false, false, false, 843), "page", [], "any", false, false, false, 843) == "break")) {
            // line 844
            echo "                        <div class=\"kt-section kt-section--first\">
                            <div class=\"kt-section__body\">
                                <div class=\"kt-datatable\"></div>
                            </div>
                        </div>           
                    ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 849
($context["this"] ?? null), "param", [], "any", false, false, false, 849), "page", [], "any", false, false, false, 849) == "packaging")) {
            // line 850
            echo "                        <div class=\"kt-section kt-section--first\">
                            <div class=\"kt-section__body\">
                                <div class=\"kt-datatable\"></div>
                            </div>
                        </div>
                    ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 855
($context["this"] ?? null), "param", [], "any", false, false, false, 855), "page", [], "any", false, false, false, 855) == "countries")) {
            // line 856
            echo "                        <div class=\"kt-section kt-section--first\">
                            <div class=\"kt-section__body\">
                                <div class=\"kt-datatable\"></div>
                            </div>
                        </div>
                    ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 861
($context["this"] ?? null), "param", [], "any", false, false, false, 861), "page", [], "any", false, false, false, 861) == "states")) {
            // line 862
            echo "                        <div class=\"kt-section kt-section--first\">
                            <div class=\"kt-section__body\">
                                <div class=\"kt-datatable\"></div>
                            </div>
                        </div>
                    ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 867
($context["this"] ?? null), "param", [], "any", false, false, false, 867), "page", [], "any", false, false, false, 867) == "cities")) {
            // line 868
            echo "                        <div class=\"kt-section kt-section--first\">
                            <div class=\"kt-section__body\">
                                <div class=\"kt-datatable\"></div>
                            </div>
                        </div>
                    ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 873
($context["this"] ?? null), "param", [], "any", false, false, false, 873), "page", [], "any", false, false, false, 873) == "areas")) {
            // line 874
            echo "                        <div class=\"kt-section kt-section--first\">
                            <div class=\"kt-section__body\">
                                <div class=\"kt-datatable\"></div>
                            </div>
                        </div>
                    ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 879
($context["this"] ?? null), "param", [], "any", false, false, false, 879), "page", [], "any", false, false, false, 879) == "sms")) {
            // line 880
            echo "        \t\t\t\t<div class=\"row\">
        \t\t\t\t\t<div class=\"col-xl-2\"></div>
        \t\t\t\t\t<div class=\"col-xl-8\">
        \t\t\t\t\t\t<div class=\"kt-section kt-section--first\">
                                    <h3 class=\"kt-section__title kt-section__title-lg\">";
            // line 884
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["SMS"]);
            echo ":</h3>
        \t\t\t\t\t\t\t<div class=\"kt-section__body\">
        \t\t\t\t\t\t\t\t<div class=\"form-group row\">
        \t\t\t\t\t\t\t\t\t<label class=\"col-xl-3 col-lg-3 col-form-label\">";
            // line 887
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Enable SMS"]);
            echo "</label>
        \t\t\t\t\t\t\t\t\t<div class=\"col-lg-9 col-xl-6\">
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" id=\"enable_sms_notification\" name=\"enable\" ";
            // line 891
            if ((twig_get_attribute($this->env, $this->source, ($context["sms"] ?? null), "enable", [], "any", false, false, false, 891) == 1)) {
                echo "checked";
            }
            echo "> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Yes"]);
            echo "
                                                        <span></span>
                                                    </label>
                                                </div>
        \t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t<div class=\"";
            // line 897
            if ((twig_get_attribute($this->env, $this->source, ($context["sms"] ?? null), "enable", [], "any", false, false, false, 897) != 1)) {
                echo "kt-hidden";
            }
            echo "\" id=\"sms_notification\">
            \t\t\t\t\t\t\t\t<div class=\"form-group row\">
            \t\t\t\t\t\t\t\t\t<label class=\"col-xl-3 col-lg-3 col-form-label\">";
            // line 899
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["SMS Provider"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
            \t\t\t\t\t\t\t\t\t<div class=\"col-lg-9 col-xl-6\">
            \t\t\t\t\t\t\t\t\t\t<select class=\"form-control gateway\" name=\"gateway\" required>
                                                        <option data-hidden=\"true\"></option>
        \t\t\t\t\t\t\t\t\t\t\t\t<option value=\"clickatell\" ";
            // line 903
            if ((twig_get_attribute($this->env, $this->source, ($context["sms"] ?? null), "gateway", [], "any", false, false, false, 903) == "clickatell")) {
                echo "selected";
            }
            echo ">Clickatell</option>
        \t\t\t\t\t\t\t\t\t\t\t\t<option value=\"smsala\" ";
            // line 904
            if ((twig_get_attribute($this->env, $this->source, ($context["sms"] ?? null), "gateway", [], "any", false, false, false, 904) == "smsala")) {
                echo "selected";
            }
            echo ">SMS ALA</option>
        \t\t\t\t\t\t\t\t\t\t\t\t<option value=\"twilio\" ";
            // line 905
            if ((twig_get_attribute($this->env, $this->source, ($context["sms"] ?? null), "gateway", [], "any", false, false, false, 905) == "twilio")) {
                echo "selected";
            }
            echo ">Twilio</option>
                                                    </select>
            \t\t\t\t\t\t\t\t\t</div>
            \t\t\t\t\t\t\t\t</div>
            \t\t\t\t\t\t\t\t<div class=\"twilio ";
            // line 909
            if ((twig_get_attribute($this->env, $this->source, ($context["sms"] ?? null), "gateway", [], "any", false, false, false, 909) != "twilio")) {
                echo "kt-hidden";
            }
            echo "\">
                \t\t\t\t\t\t\t\t<div class=\"form-group row\">
                \t\t\t\t\t\t\t\t\t<label class=\"col-xl-3 col-lg-3 col-form-label\">";
            // line 911
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["SID"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                \t\t\t\t\t\t\t\t\t<div class=\"col-lg-9 col-xl-6\">
                \t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" name=\"twilio_sid\" value=\"";
            // line 913
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["sms"] ?? null), "twilio_sid", [], "any", false, false, false, 913), "html", null, true);
            echo "\" required>
                \t\t\t\t\t\t\t\t\t</div>
                \t\t\t\t\t\t\t\t</div>
                \t\t\t\t\t\t\t\t<div class=\"form-group row\">
                \t\t\t\t\t\t\t\t\t<label class=\"col-xl-3 col-lg-3 col-form-label\">";
            // line 917
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Token"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                \t\t\t\t\t\t\t\t\t<div class=\"col-lg-9 col-xl-6\">
                \t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" name=\"twilio_token\" value=\"";
            // line 919
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["sms"] ?? null), "twilio_token", [], "any", false, false, false, 919), "html", null, true);
            echo "\" required>
                \t\t\t\t\t\t\t\t\t</div>
                \t\t\t\t\t\t\t\t</div>
            \t\t\t\t\t\t\t\t</div>
            \t\t\t\t\t\t\t\t<div class=\"clickatell ";
            // line 923
            if ((twig_get_attribute($this->env, $this->source, ($context["sms"] ?? null), "gateway", [], "any", false, false, false, 923) != "clickatell")) {
                echo "kt-hidden";
            }
            echo "\">
                \t\t\t\t\t\t\t\t<div class=\"form-group row\">
                \t\t\t\t\t\t\t\t\t<label class=\"col-xl-3 col-lg-3 col-form-label\">";
            // line 925
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["App ID"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                \t\t\t\t\t\t\t\t\t<div class=\"col-lg-9 col-xl-6\">
                \t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" name=\"clickatell_api_id\" value=\"";
            // line 927
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["sms"] ?? null), "clickatell_api_id", [], "any", false, false, false, 927), "html", null, true);
            echo "\" required>
                \t\t\t\t\t\t\t\t\t</div>
                \t\t\t\t\t\t\t\t</div>
            \t\t\t\t\t\t\t\t</div>
            \t\t\t\t\t\t\t\t<div class=\"smsala ";
            // line 931
            if ((twig_get_attribute($this->env, $this->source, ($context["sms"] ?? null), "gateway", [], "any", false, false, false, 931) != "smsala")) {
                echo "kt-hidden";
            }
            echo "\">
                \t\t\t\t\t\t\t\t<div class=\"form-group row\">
                \t\t\t\t\t\t\t\t\t<label class=\"col-xl-3 col-lg-3 col-form-label\">";
            // line 933
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["App ID"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                \t\t\t\t\t\t\t\t\t<div class=\"col-lg-9 col-xl-6\">
                \t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" name=\"smsala_api_id\" value=\"";
            // line 935
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["sms"] ?? null), "smsala_api_id", [], "any", false, false, false, 935), "html", null, true);
            echo "\" required>
                \t\t\t\t\t\t\t\t\t</div>
                \t\t\t\t\t\t\t\t</div>
                \t\t\t\t\t\t\t\t<div class=\"form-group row\">
                \t\t\t\t\t\t\t\t\t<label class=\"col-xl-3 col-lg-3 col-form-label\">";
            // line 939
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["App Password"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                \t\t\t\t\t\t\t\t\t<div class=\"col-lg-9 col-xl-6\">
                \t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" name=\"smsala_api_password\" value=\"";
            // line 941
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["sms"] ?? null), "smsala_api_password", [], "any", false, false, false, 941), "html", null, true);
            echo "\" required>
                \t\t\t\t\t\t\t\t\t</div>
                \t\t\t\t\t\t\t\t</div>
                \t\t\t\t\t\t\t\t<div class=\"form-group row\">
                \t\t\t\t\t\t\t\t\t<label class=\"col-xl-3 col-lg-3 col-form-label\">";
            // line 945
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["SMS Type"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                \t\t\t\t\t\t\t\t\t<div class=\"col-lg-9 col-xl-6\">
                \t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"smsala_sms_type\" required>
                                                            <option data-hidden=\"true\"></option>
            \t\t\t\t\t\t\t\t\t\t\t\t<option value=\"P\" ";
            // line 949
            if ((twig_get_attribute($this->env, $this->source, ($context["sms"] ?? null), "smsala_sms_type", [], "any", false, false, false, 949) == "P")) {
                echo "selected";
            }
            echo ">Promotional</option>
            \t\t\t\t\t\t\t\t\t\t\t\t<option value=\"T\" ";
            // line 950
            if ((twig_get_attribute($this->env, $this->source, ($context["sms"] ?? null), "smsala_sms_type", [], "any", false, false, false, 950) == "T")) {
                echo "selected";
            }
            echo ">Transactional</option>
                                                        </select>
                \t\t\t\t\t\t\t\t\t</div>
                \t\t\t\t\t\t\t\t</div>
                \t\t\t\t\t\t\t\t<div class=\"form-group row\">
                \t\t\t\t\t\t\t\t\t<label class=\"col-xl-3 col-lg-3 col-form-label\">";
            // line 955
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["encoding"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                \t\t\t\t\t\t\t\t\t<div class=\"col-lg-9 col-xl-6\">
                \t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"smsala_encoding\" required>
                                                            <option data-hidden=\"true\"></option>
            \t\t\t\t\t\t\t\t\t\t\t\t<option value=\"T\" ";
            // line 959
            if ((twig_get_attribute($this->env, $this->source, ($context["sms"] ?? null), "smsala_encoding", [], "any", false, false, false, 959) == "T")) {
                echo "selected";
            }
            echo ">Text</option>
            \t\t\t\t\t\t\t\t\t\t\t\t<option value=\"U\" ";
            // line 960
            if ((twig_get_attribute($this->env, $this->source, ($context["sms"] ?? null), "smsala_encoding", [], "any", false, false, false, 960) == "U")) {
                echo "selected";
            }
            echo ">Unicode</option>
                                                        </select>
                \t\t\t\t\t\t\t\t\t</div>
                \t\t\t\t\t\t\t\t</div>
                \t\t\t\t\t\t\t\t<div class=\"form-group row\">
                \t\t\t\t\t\t\t\t\t<label class=\"col-xl-3 col-lg-3 col-form-label\">";
            // line 965
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sender ID"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                \t\t\t\t\t\t\t\t\t<div class=\"col-lg-9 col-xl-6\">
                \t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" name=\"smsala_sender_id\" value=\"";
            // line 967
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["sms"] ?? null), "smsala_sender_id", [], "any", false, false, false, 967), "html", null, true);
            echo "\" required>
                \t\t\t\t\t\t\t\t\t</div>
                \t\t\t\t\t\t\t\t</div>
            \t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t</div>
        \t\t\t\t\t</div>
        \t\t\t\t\t<div class=\"col-xl-2\"></div>
        \t\t\t\t</div>
        \t\t\t\t<div class=\"row\">
        \t\t\t\t\t<div class=\"col-xl-4\"></div>
        \t\t\t\t\t<div class=\"col-xl-8\">
                                <div class=\"form-group\">
                                    <button type=\"submit\" class=\"btn btn-primary\">";
            // line 981
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Save"]);
            echo "</button>
                                </div>
                            </div>
                        </div>
                    ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 985
($context["this"] ?? null), "param", [], "any", false, false, false, 985), "page", [], "any", false, false, false, 985) == "payment")) {
            // line 986
            echo "        \t\t\t\t<div class=\"row\">
        \t\t\t\t\t<div class=\"col-xl-2\"></div>
        \t\t\t\t\t<div class=\"col-xl-8\">
        \t\t\t\t\t\t<div class=\"kt-section kt-section--first\">
                                    <h3 class=\"kt-section__title kt-section__title-lg\">";
            // line 990
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Online Payment"]);
            echo ":</h3>
        \t\t\t\t\t\t\t<div class=\"kt-section__body\">
        \t\t\t\t\t\t\t\t<div class=\"form-group row\">
        \t\t\t\t\t\t\t\t\t<label class=\"col-xl-3 col-lg-3 col-form-label\">";
            // line 993
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Enable online payment"]);
            echo "</label>
        \t\t\t\t\t\t\t\t\t<div class=\"col-lg-9 col-xl-6\">
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" id=\"enable_payment_gateway\" name=\"enable\" ";
            // line 997
            if ((twig_get_attribute($this->env, $this->source, ($context["payment"] ?? null), "enable", [], "any", false, false, false, 997) == 1)) {
                echo "checked";
            }
            echo "> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Yes"]);
            echo "
                                                        <span></span>
                                                    </label>
                                                </div>
        \t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t<div class=\"";
            // line 1003
            if ((twig_get_attribute($this->env, $this->source, ($context["payment"] ?? null), "enable", [], "any", false, false, false, 1003) != 1)) {
                echo "kt-hidden";
            }
            echo "\" id=\"payment_gateway\">
            \t\t\t\t\t\t\t\t<div class=\"form-group row\">
            \t\t\t\t\t\t\t\t\t<label class=\"col-xl-3 col-lg-3 col-form-label\">";
            // line 1005
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Payment Gateway"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
            \t\t\t\t\t\t\t\t\t<div class=\"col-lg-9 col-xl-6\">
            \t\t\t\t\t\t\t\t\t\t<select class=\"form-control gateway\" name=\"gateways[]\" multiple required>
                                                        <option data-hidden=\"true\"></option>
        \t\t\t\t\t\t\t\t\t\t\t\t<option value=\"paystack\" ";
            // line 1009
            if (twig_in_filter("paystack", twig_get_attribute($this->env, $this->source, ($context["payment"] ?? null), "gateways", [], "any", false, false, false, 1009))) {
                echo "selected";
            }
            echo ">Paystack</option>
                                                    </select>
            \t\t\t\t\t\t\t\t\t</div>
            \t\t\t\t\t\t\t\t</div>
            \t\t\t\t\t\t\t\t<div class=\"paystack ";
            // line 1013
            if (!twig_in_filter("paystack", twig_get_attribute($this->env, $this->source, ($context["payment"] ?? null), "gateways", [], "any", false, false, false, 1013))) {
                echo "kt-hidden";
            }
            echo "\">
                                                <div class=\"kt-portlet kt-portlet--bordered kt-portlet--head--noborder\">
                                \t\t\t\t\t<div class=\"kt-portlet__head\">
                                \t\t\t\t\t\t<div class=\"kt-portlet__head-label\">
                                \t\t\t\t\t\t\t<h3 class=\"kt-portlet__head-title kt-font-bolder\">
                                \t\t\t\t\t\t\t\t";
            // line 1018
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Paystack"]);
            echo "
                                \t\t\t\t\t\t\t</h3>
                                \t\t\t\t\t\t</div>
                                \t\t\t\t\t</div>
                                \t\t\t\t\t<div class=\"kt-portlet__body\">
                        \t\t\t\t\t\t\t\t<div class=\"form-group row\">
                        \t\t\t\t\t\t\t\t\t<label class=\"col-xl-3 col-lg-3 col-form-label\">";
            // line 1024
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Paystack public key"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                        \t\t\t\t\t\t\t\t\t<div class=\"col-lg-9 col-xl-6\">
                                                                ";
            // line 1026
            if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "demo_mode", [], "any", false, false, false, 1026)) {
                // line 1027
                echo "                                                                    <div class=\"alert alert-danger\" role=\"alert\">
                                                                        ";
                // line 1028
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Not allowed to change it in demo."]);
                echo "
                                                                    </div>
                                                                ";
            } else {
                // line 1031
                echo "                                                                    <input class=\"form-control\" type=\"text\" name=\"paystack_key\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["payment"] ?? null), "paystack_key", [], "any", false, false, false, 1031), "html", null, true);
                echo "\" required>
                                                                ";
            }
            // line 1033
            echo "                        \t\t\t\t\t\t\t\t\t</div>
                        \t\t\t\t\t\t\t\t</div>
                        \t\t\t\t\t\t\t\t<div class=\"form-group row\">
                        \t\t\t\t\t\t\t\t\t<label class=\"col-xl-3 col-lg-3 col-form-label\">";
            // line 1036
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Paystack secret key"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                        \t\t\t\t\t\t\t\t\t<div class=\"col-lg-9 col-xl-6\">
                                                                ";
            // line 1038
            if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "demo_mode", [], "any", false, false, false, 1038)) {
                // line 1039
                echo "                                                                    <div class=\"alert alert-danger\" role=\"alert\">
                                                                        ";
                // line 1040
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Not allowed to change it in demo."]);
                echo "
                                                                    </div>
                                                                ";
            } else {
                // line 1043
                echo "                                                                    <input class=\"form-control\" type=\"text\" name=\"paystack_secret\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["payment"] ?? null), "paystack_secret", [], "any", false, false, false, 1043), "html", null, true);
                echo "\" required>
                                                                ";
            }
            // line 1045
            echo "                        \t\t\t\t\t\t\t\t\t</div>
                        \t\t\t\t\t\t\t\t</div>
                                \t\t\t\t\t</div>
                                \t\t\t\t</div>
            \t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t</div>
        \t\t\t\t\t</div>
        \t\t\t\t\t<div class=\"col-xl-2\"></div>
        \t\t\t\t</div>
        \t\t\t\t<div class=\"row\">
        \t\t\t\t\t<div class=\"col-xl-4\"></div>
        \t\t\t\t\t<div class=\"col-xl-8\">
                                <div class=\"form-group\">
                                    <button type=\"submit\" class=\"btn btn-primary\">";
            // line 1060
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Save"]);
            echo "</button>
                                </div>
                            </div>
                        </div>
                    ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 1064
($context["this"] ?? null), "param", [], "any", false, false, false, 1064), "page", [], "any", false, false, false, 1064) == "notifications")) {
            // line 1065
            echo "        \t\t\t\t<div class=\"row\">
        \t\t\t\t\t<div class=\"col-xl-2\"></div>
        \t\t\t\t\t<div class=\"col-xl-8\">
        \t\t\t\t\t\t<div class=\"kt-section kt-section--first\">
                                    <h3 class=\"kt-section__title kt-section__title-lg\">";
            // line 1069
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Notifications"]);
            echo ":</h3>
        \t\t\t\t\t\t\t<div class=\"kt-section__body\">
        \t\t\t\t\t\t\t\t<div class=\"form-group row\">
        \t\t\t\t\t\t\t\t\t<label class=\"col-xl-3 col-lg-3 col-form-label\">";
            // line 1072
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Enable Live Notification"]);
            echo "</label>
        \t\t\t\t\t\t\t\t\t<div class=\"col-lg-9 col-xl-6\">
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" id=\"enable_live_notification\" name=\"live\" ";
            // line 1076
            if ((twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "live", [], "any", false, false, false, 1076) == 1)) {
                echo "checked";
            }
            echo "> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Yes"]);
            echo "
                                                        <span></span>
                                                    </label>
                                                </div>
        \t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t<div class=\"";
            // line 1082
            if ((twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "live", [], "any", false, false, false, 1082) != 1)) {
                echo "kt-hidden";
            }
            echo "\" id=\"live_notification\">
            \t\t\t\t\t\t\t\t<div class=\"form-group row\">
            \t\t\t\t\t\t\t\t\t<label class=\"col-xl-3 col-lg-3 col-form-label\">";
            // line 1084
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Live Notification Provider"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
            \t\t\t\t\t\t\t\t\t<div class=\"col-lg-9 col-xl-6\">
            \t\t\t\t\t\t\t\t\t\t<select class=\"form-control provider\" name=\"provider\" required>
                                                        <option data-hidden=\"true\"></option>
        \t\t\t\t\t\t\t\t\t\t\t\t<option value=\"pusher\" ";
            // line 1088
            if ((twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "provider", [], "any", false, false, false, 1088) == "pusher")) {
                echo "selected";
            }
            echo ">Pusher</option>
                                                    </select>
            \t\t\t\t\t\t\t\t\t</div>
            \t\t\t\t\t\t\t\t</div>
            \t\t\t\t\t\t\t\t<div class=\"pusher ";
            // line 1092
            if ((twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "provider", [], "any", false, false, false, 1092) != "pusher")) {
                echo "kt-hidden";
            }
            echo "\">
                \t\t\t\t\t\t\t\t<div class=\"form-group row\">
                \t\t\t\t\t\t\t\t\t<label class=\"col-xl-3 col-lg-3 col-form-label\">";
            // line 1094
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["App ID"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                \t\t\t\t\t\t\t\t\t<div class=\"col-lg-9 col-xl-6\">
                                                        ";
            // line 1096
            if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "demo_mode", [], "any", false, false, false, 1096)) {
                // line 1097
                echo "                                                            <div class=\"alert alert-danger\" role=\"alert\">
                                                                ";
                // line 1098
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Not allowed to change it in demo."]);
                echo "
                                                            </div>
                                                        ";
            } else {
                // line 1101
                echo "                                                            <input class=\"form-control\" type=\"text\" name=\"pusher[app_id]\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "pusher", [], "any", false, false, false, 1101), "app_id", [], "any", false, false, false, 1101), "html", null, true);
                echo "\" required>
                                                        ";
            }
            // line 1103
            echo "                \t\t\t\t\t\t\t\t\t</div>
                \t\t\t\t\t\t\t\t</div>
                \t\t\t\t\t\t\t\t<div class=\"form-group row\">
                \t\t\t\t\t\t\t\t\t<label class=\"col-xl-3 col-lg-3 col-form-label\">";
            // line 1106
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Key"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                \t\t\t\t\t\t\t\t\t<div class=\"col-lg-9 col-xl-6\">
                                                        ";
            // line 1108
            if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "demo_mode", [], "any", false, false, false, 1108)) {
                // line 1109
                echo "                                                            <div class=\"alert alert-danger\" role=\"alert\">
                                                                ";
                // line 1110
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Not allowed to change it in demo."]);
                echo "
                                                            </div>
                                                        ";
            } else {
                // line 1113
                echo "                                                            <input class=\"form-control\" type=\"text\" name=\"pusher[key]\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "pusher", [], "any", false, false, false, 1113), "key", [], "any", false, false, false, 1113), "html", null, true);
                echo "\" required>
                                                        ";
            }
            // line 1115
            echo "                \t\t\t\t\t\t\t\t\t</div>
                \t\t\t\t\t\t\t\t</div>
                \t\t\t\t\t\t\t\t<div class=\"form-group row\">
                \t\t\t\t\t\t\t\t\t<label class=\"col-xl-3 col-lg-3 col-form-label\">";
            // line 1118
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Secret"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                \t\t\t\t\t\t\t\t\t<div class=\"col-lg-9 col-xl-6\">
                                                        ";
            // line 1120
            if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "demo_mode", [], "any", false, false, false, 1120)) {
                // line 1121
                echo "                                                            <div class=\"alert alert-danger\" role=\"alert\">
                                                                ";
                // line 1122
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Not allowed to change it in demo."]);
                echo "
                                                            </div>
                                                        ";
            } else {
                // line 1125
                echo "                                                            <input class=\"form-control\" type=\"text\" name=\"pusher[secret]\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "pusher", [], "any", false, false, false, 1125), "secret", [], "any", false, false, false, 1125), "html", null, true);
                echo "\" required>
                                                        ";
            }
            // line 1127
            echo "                \t\t\t\t\t\t\t\t\t</div>
                \t\t\t\t\t\t\t\t</div>
                \t\t\t\t\t\t\t\t<div class=\"form-group row\">
                \t\t\t\t\t\t\t\t\t<label class=\"col-xl-3 col-lg-3 col-form-label\">";
            // line 1130
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Cluster"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                \t\t\t\t\t\t\t\t\t<div class=\"col-lg-9 col-xl-6\">
                                                        ";
            // line 1132
            if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "demo_mode", [], "any", false, false, false, 1132)) {
                // line 1133
                echo "                                                            <div class=\"alert alert-danger\" role=\"alert\">
                                                            ";
                // line 1134
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Not allowed to change it in demo."]);
                echo "
                                                            </div>
                                                        ";
            } else {
                // line 1137
                echo "                                                            <select class=\"form-control\" name=\"pusher[cluster]\" required>
                                                                <option data-hidden=\"true\"></option>
                                                                <option ";
                // line 1139
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "pusher", [], "any", false, false, false, 1139), "cluster", [], "any", false, false, false, 1139) == "mt1")) {
                    echo "selected";
                }
                echo " value=\"mt1\">mt1 (US East (N. Virginia))</option>
                                                                <option ";
                // line 1140
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "pusher", [], "any", false, false, false, 1140), "cluster", [], "any", false, false, false, 1140) == "ap1")) {
                    echo "selected";
                }
                echo " value=\"ap1\">ap1 (Asia Pacific (Singapore))</option>
                                                                <option ";
                // line 1141
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "pusher", [], "any", false, false, false, 1141), "cluster", [], "any", false, false, false, 1141) == "ap2")) {
                    echo "selected";
                }
                echo " value=\"ap2\">ap2 (Asia Pacific (Mumbai))</option>
                                                                <option ";
                // line 1142
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "pusher", [], "any", false, false, false, 1142), "cluster", [], "any", false, false, false, 1142) == "us2")) {
                    echo "selected";
                }
                echo " value=\"us2\">us2 (US East (Ohio))</option>
                                                                <option ";
                // line 1143
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "pusher", [], "any", false, false, false, 1143), "cluster", [], "any", false, false, false, 1143) == "ap3")) {
                    echo "selected";
                }
                echo " value=\"ap3\">ap3 (Asia Pacific (Tokyo))</option>
                                                                <option ";
                // line 1144
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "pusher", [], "any", false, false, false, 1144), "cluster", [], "any", false, false, false, 1144) == "us3")) {
                    echo "selected";
                }
                echo " value=\"us3\">us3 (US West (Oregon))</option>
                                                                <option ";
                // line 1145
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "pusher", [], "any", false, false, false, 1145), "cluster", [], "any", false, false, false, 1145) == "ap4")) {
                    echo "selected";
                }
                echo " value=\"ap4\">ap4 (Asia Pacific (Sydney))</option>
                                                                <option ";
                // line 1146
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "pusher", [], "any", false, false, false, 1146), "cluster", [], "any", false, false, false, 1146) == "eu")) {
                    echo "selected";
                }
                echo " value=\"eu\">eu (EU (Ireland))</option></select>
                                                            </select>
                                                        ";
            }
            // line 1149
            echo "                \t\t\t\t\t\t\t\t\t</div>
                \t\t\t\t\t\t\t\t</div>
            \t\t\t\t\t\t\t\t</div>
            \t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t</div>


                                <div class=\"kt-section kt-section--first\">
                                    <h3 class=\"kt-section__title kt-section__title-lg\">";
            // line 1158
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Push Notifications"]);
            echo ":</h3>
                                    <div class=\"kt-section__body\">
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">";
            // line 1161
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Enable Push Notification"]);
            echo "</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" id=\"enable_push_notification\" name=\"push\" ";
            // line 1165
            if ((twig_get_attribute($this->env, $this->source, ($context["push_notifications"] ?? null), "push", [], "any", false, false, false, 1165) == 1)) {
                echo "checked";
            }
            echo "> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Yes"]);
            echo "
                                                        <span></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"";
            // line 1171
            if ((twig_get_attribute($this->env, $this->source, ($context["push_notifications"] ?? null), "push", [], "any", false, false, false, 1171) != 1)) {
                echo "kt-hidden";
            }
            echo "\" id=\"push_notification\">
                                            <div class=\"form-group row\">
                                                <label class=\"col-xl-3 col-lg-3 col-form-label\">";
            // line 1173
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Push Notification Provider"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                <div class=\"col-lg-9 col-xl-6\">
                                                    <select class=\"form-control push_provider\" name=\"push_provider\" required>
                                                        <option data-hidden=\"true\"></option>
                                                        <option value=\"fcm\" ";
            // line 1177
            if ((twig_get_attribute($this->env, $this->source, ($context["push_notifications"] ?? null), "push_provider", [], "any", false, false, false, 1177) == "fcm")) {
                echo "selected";
            }
            echo ">FCM</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class=\"fcm ";
            // line 1181
            if ((twig_get_attribute($this->env, $this->source, ($context["push_notifications"] ?? null), "push_provider", [], "any", false, false, false, 1181) != "fcm")) {
                echo "kt-hidden";
            }
            echo "\"> 
                                                <div class=\"form-group row\">
                                                    <label class=\"col-xl-3 col-lg-3 col-form-label\">";
            // line 1183
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Customer App Key"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                    <div class=\"col-lg-9 col-xl-6\">
                                                       ";
            // line 1185
            if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "demo_mode", [], "any", false, false, false, 1185)) {
                // line 1186
                echo "                                                           <div class=\"alert alert-danger\" role=\"alert\">
                                                            ";
                // line 1187
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Not allowed to change it in demo."]);
                echo "
                                                          </div>
                                                        ";
            } else {
                // line 1190
                echo "                                                            <input class=\"form-control\" type=\"text\" name=\"fcm[customer_key]\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["push_notifications"] ?? null), "fcm", [], "any", false, false, false, 1190), "customer_key", [], "any", false, false, false, 1190), "html", null, true);
                echo "\" required>
                                                        ";
            }
            // line 1192
            echo "                                                    </div>
                                                </div>
                                                <div class=\"form-group row\">
                                                    <label class=\"col-xl-3 col-lg-3 col-form-label\">";
            // line 1195
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Employee App Key"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                    <div class=\"col-lg-9 col-xl-6\">
                                                       ";
            // line 1197
            if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "demo_mode", [], "any", false, false, false, 1197)) {
                // line 1198
                echo "                                                           <div class=\"alert alert-danger\" role=\"alert\">
                                                            ";
                // line 1199
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Not allowed to change it in demo."]);
                echo "
                                                          </div>
                                                        ";
            } else {
                // line 1202
                echo "                                                            <input class=\"form-control\"  type=\"text\" name=\"fcm[employee_key]\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["push_notifications"] ?? null), "fcm", [], "any", false, false, false, 1202), "employee_key", [], "any", false, false, false, 1202), "html", null, true);
                echo "\" required>
                                                        ";
            }
            // line 1204
            echo "                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>




        \t\t\t\t\t\t<div class=\"kt-section kt-section--first\">
                                    <h3 class=\"kt-section__title kt-section__title-lg\">";
            // line 1215
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Notifications Responsibility"]);
            echo ":</h3>
        \t\t\t\t\t\t\t<div class=\"kt-section__body\">
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">";
            // line 1218
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["New Shipments Notifications"]);
            echo "</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[new_shipments][]\" ";
            // line 1222
            if (twig_in_filter(1, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1222), "new_shipments", [], "any", false, false, false, 1222))) {
                echo "checked";
            }
            echo " value=\"1\" required> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["System Administrators"]);
            echo "
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[new_shipments][]\" ";
            // line 1228
            if (twig_in_filter(2, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1228), "new_shipments", [], "any", false, false, false, 1228))) {
                echo "checked";
            }
            echo " value=\"2\" required> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Supervisors"]);
            echo "
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" class=\"select_departments\" name=\"responsibility[new_shipments][]\" ";
            // line 1234
            if (twig_in_filter(3, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1234), "new_shipments", [], "any", false, false, false, 1234))) {
                echo "checked";
            }
            echo " value=\"3\" required> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Departments Moderators"]);
            echo "
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" class=\"select_departments\" name=\"responsibility[new_shipments][]\" ";
            // line 1240
            if (twig_in_filter(4, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1240), "new_shipments", [], "any", false, false, false, 1240))) {
                echo "checked";
            }
            echo " value=\"4\" required> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Departments Employees"]);
            echo "
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single kt-padding-b-10 show_departments ";
            // line 1244
            if ((!twig_in_filter(3, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1244), "new_shipments", [], "any", false, false, false, 1244)) && !twig_in_filter(4, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1244), "new_shipments", [], "any", false, false, false, 1244)))) {
                echo "kt-hidden";
            }
            echo "\">
            \t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"responsibility[new_shipments][departments][]\" data-live-search=\"true\" multiple title=\"";
            // line 1245
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Choose the departments"]);
            echo "\" required>
                                                        <option data-hidden=\"true\"></option>
                                                        ";
            // line 1247
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["departments"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["department"]) {
                // line 1248
                echo "                                                            <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["department"], "id", [], "any", false, false, false, 1248), "html", null, true);
                echo "\" ";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["department"], "id", [], "any", false, false, false, 1248), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1248), "new_shipments", [], "any", false, false, false, 1248), "departments", [], "any", false, false, false, 1248))) {
                    echo "selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["department"], "name", [], "any", false, false, false, 1248), "html", null, true);
                echo "</option>
                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['department'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1250
            echo "                                                    </select>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" class=\"select_employees\" name=\"responsibility[new_shipments][]\" ";
            // line 1254
            if (twig_in_filter(5, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1254), "new_shipments", [], "any", false, false, false, 1254))) {
                echo "checked";
            }
            echo " value=\"5\" required> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Employees"]);
            echo "
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single kt-padding-b-10 show_employees ";
            // line 1258
            if (!twig_in_filter(5, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1258), "new_shipments", [], "any", false, false, false, 1258))) {
                echo "kt-hidden";
            }
            echo "\">
            \t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"responsibility[new_shipments][employees][]\" data-live-search=\"true\" multiple title=\"";
            // line 1259
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Choose the employees"]);
            echo "\" required>
                                                        <option data-hidden=\"true\"></option>
                                                        ";
            // line 1261
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["employees"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["employee"]) {
                // line 1262
                echo "                                                            <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employee"], "id", [], "any", false, false, false, 1262), "html", null, true);
                echo "\" ";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["employee"], "id", [], "any", false, false, false, 1262), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1262), "new_shipments", [], "any", false, false, false, 1262), "employees", [], "any", false, false, false, 1262))) {
                    echo "selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employee"], "name", [], "any", false, false, false, 1262), "html", null, true);
                echo "</option>
                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['employee'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1264
            echo "                                                    </select>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[new_shipments][]\" ";
            // line 1268
            if (twig_in_filter(6, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1268), "new_shipments", [], "any", false, false, false, 1268))) {
                echo "checked";
            }
            echo " value=\"6\" required> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sender"]);
            echo " [";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Client"]);
            echo "]
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[new_shipments][]\" ";
            // line 1274
            if (twig_in_filter(7, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1274), "new_shipments", [], "any", false, false, false, 1274))) {
                echo "checked";
            }
            echo " value=\"7\" required> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Receiver"]);
            echo " [";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Client"]);
            echo "]
                                                        <span></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">";
            // line 1281
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["New Shipments Note Notifications"]);
            echo "</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[new_note][]\" ";
            // line 1285
            if (twig_in_filter(1, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1285), "new_note", [], "any", false, false, false, 1285))) {
                echo "checked";
            }
            echo " value=\"1\" required> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["System Administrators"]);
            echo "
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[new_note][]\" ";
            // line 1291
            if (twig_in_filter(2, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1291), "new_note", [], "any", false, false, false, 1291))) {
                echo "checked";
            }
            echo " value=\"2\" required> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Supervisors"]);
            echo "
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" class=\"select_departments\" name=\"responsibility[new_note][]\" ";
            // line 1297
            if (twig_in_filter(3, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1297), "new_note", [], "any", false, false, false, 1297))) {
                echo "checked";
            }
            echo " value=\"3\" required> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Departments Moderators"]);
            echo "
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" class=\"select_departments\" name=\"responsibility[new_note][]\" ";
            // line 1303
            if (twig_in_filter(4, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1303), "new_note", [], "any", false, false, false, 1303))) {
                echo "checked";
            }
            echo " value=\"4\" required> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Departments Employees"]);
            echo "
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single kt-padding-b-10 show_departments ";
            // line 1307
            if ((!twig_in_filter(3, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1307), "new_note", [], "any", false, false, false, 1307)) && !twig_in_filter(4, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1307), "new_note", [], "any", false, false, false, 1307)))) {
                echo "kt-hidden";
            }
            echo "\">
            \t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"responsibility[new_note][departments][]\" data-live-search=\"true\" multiple title=\"";
            // line 1308
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Choose the departments"]);
            echo "\" required>
                                                        <option data-hidden=\"true\"></option>
                                                        ";
            // line 1310
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["departments"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["department"]) {
                // line 1311
                echo "                                                            <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["department"], "id", [], "any", false, false, false, 1311), "html", null, true);
                echo "\" ";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["department"], "id", [], "any", false, false, false, 1311), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1311), "new_note", [], "any", false, false, false, 1311), "departments", [], "any", false, false, false, 1311))) {
                    echo "selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["department"], "name", [], "any", false, false, false, 1311), "html", null, true);
                echo "</option>
                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['department'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1313
            echo "                                                    </select>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" class=\"select_employees\" name=\"responsibility[new_note][]\" ";
            // line 1317
            if (twig_in_filter(5, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1317), "new_note", [], "any", false, false, false, 1317))) {
                echo "checked";
            }
            echo " value=\"5\" required> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Employees"]);
            echo "
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single kt-padding-b-10 show_employees ";
            // line 1321
            if (!twig_in_filter(5, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1321), "new_note", [], "any", false, false, false, 1321))) {
                echo "kt-hidden";
            }
            echo "\">
            \t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"responsibility[new_note][employees][]\" data-live-search=\"true\" multiple title=\"";
            // line 1322
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Choose the employees"]);
            echo "\" required>
                                                        <option data-hidden=\"true\"></option>
                                                        ";
            // line 1324
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["employees"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["employee"]) {
                // line 1325
                echo "                                                            <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employee"], "id", [], "any", false, false, false, 1325), "html", null, true);
                echo "\" ";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["employee"], "id", [], "any", false, false, false, 1325), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1325), "new_note", [], "any", false, false, false, 1325), "employees", [], "any", false, false, false, 1325))) {
                    echo "selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employee"], "name", [], "any", false, false, false, 1325), "html", null, true);
                echo "</option>
                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['employee'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1327
            echo "                                                    </select>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[new_note][]\" ";
            // line 1331
            if (twig_in_filter(6, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1331), "new_note", [], "any", false, false, false, 1331))) {
                echo "checked";
            }
            echo " value=\"6\" required> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sender"]);
            echo " [";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Client"]);
            echo "]
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[new_note][]\" ";
            // line 1337
            if (twig_in_filter(7, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1337), "new_note", [], "any", false, false, false, 1337))) {
                echo "checked";
            }
            echo " value=\"7\" required> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Receiver"]);
            echo " [";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Client"]);
            echo "]
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[new_note][]\" ";
            // line 1343
            if (twig_in_filter(8, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1343), "new_note", [], "any", false, false, false, 1343))) {
                echo "checked";
            }
            echo " value=\"8\" required> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Responsible"]);
            echo "
                                                        <span></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">";
            // line 1350
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Update Shipments Notifications"]);
            echo "</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[update_shipment][]\" ";
            // line 1354
            if (twig_in_filter(1, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1354), "update_shipment", [], "any", false, false, false, 1354))) {
                echo "checked";
            }
            echo " value=\"1\" required> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["System Administrators"]);
            echo "
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[update_shipment][]\" ";
            // line 1360
            if (twig_in_filter(2, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1360), "update_shipment", [], "any", false, false, false, 1360))) {
                echo "checked";
            }
            echo " value=\"2\" required> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Supervisors"]);
            echo "
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" class=\"select_departments\" name=\"responsibility[update_shipment][]\" ";
            // line 1366
            if (twig_in_filter(3, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1366), "update_shipment", [], "any", false, false, false, 1366))) {
                echo "checked";
            }
            echo " value=\"3\" required> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Departments Moderators"]);
            echo "
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" class=\"select_departments\" name=\"responsibility[update_shipment][]\" ";
            // line 1372
            if (twig_in_filter(4, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1372), "update_shipment", [], "any", false, false, false, 1372))) {
                echo "checked";
            }
            echo " value=\"4\" required> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Departments Employees"]);
            echo "
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single kt-padding-b-10 show_departments ";
            // line 1376
            if ((!twig_in_filter(3, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1376), "update_shipment", [], "any", false, false, false, 1376)) && !twig_in_filter(4, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1376), "update_shipment", [], "any", false, false, false, 1376)))) {
                echo "kt-hidden";
            }
            echo "\">
            \t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"responsibility[update_shipment][departments][]\" data-live-search=\"true\" multiple title=\"";
            // line 1377
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Choose the departments"]);
            echo "\" required>
                                                        <option data-hidden=\"true\"></option>
                                                        ";
            // line 1379
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["departments"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["department"]) {
                // line 1380
                echo "                                                            <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["department"], "id", [], "any", false, false, false, 1380), "html", null, true);
                echo "\" ";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["department"], "id", [], "any", false, false, false, 1380), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1380), "update_shipment", [], "any", false, false, false, 1380), "departments", [], "any", false, false, false, 1380))) {
                    echo "selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["department"], "name", [], "any", false, false, false, 1380), "html", null, true);
                echo "</option>
                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['department'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1382
            echo "                                                    </select>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" class=\"select_employees\" name=\"responsibility[update_shipment][]\" ";
            // line 1386
            if (twig_in_filter(5, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1386), "update_shipment", [], "any", false, false, false, 1386))) {
                echo "checked";
            }
            echo " value=\"5\" required> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Employees"]);
            echo "
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single kt-padding-b-10 show_employees ";
            // line 1390
            if (!twig_in_filter(5, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1390), "update_shipment", [], "any", false, false, false, 1390))) {
                echo "kt-hidden";
            }
            echo "\">
            \t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"responsibility[update_shipment][employees][]\" data-live-search=\"true\" multiple title=\"";
            // line 1391
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Choose the employees"]);
            echo "\" required>
                                                        <option data-hidden=\"true\"></option>
                                                        ";
            // line 1393
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["employees"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["employee"]) {
                // line 1394
                echo "                                                            <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employee"], "id", [], "any", false, false, false, 1394), "html", null, true);
                echo "\" ";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["employee"], "id", [], "any", false, false, false, 1394), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1394), "update_shipment", [], "any", false, false, false, 1394), "employees", [], "any", false, false, false, 1394))) {
                    echo "selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employee"], "name", [], "any", false, false, false, 1394), "html", null, true);
                echo "</option>
                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['employee'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1396
            echo "                                                    </select>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[update_shipment][]\" ";
            // line 1400
            if (twig_in_filter(6, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1400), "update_shipment", [], "any", false, false, false, 1400))) {
                echo "checked";
            }
            echo " value=\"6\" required> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sender"]);
            echo " [";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Client"]);
            echo "]
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[update_shipment][]\" ";
            // line 1406
            if (twig_in_filter(7, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1406), "update_shipment", [], "any", false, false, false, 1406))) {
                echo "checked";
            }
            echo " value=\"7\" required> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Receiver"]);
            echo " [";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Client"]);
            echo "]
                                                        <span></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">";
            // line 1413
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Approved Shipments Notifications"]);
            echo "</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[approved_shipment][]\" ";
            // line 1417
            if (twig_in_filter(1, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1417), "approved_shipment", [], "any", false, false, false, 1417))) {
                echo "checked";
            }
            echo " value=\"1\" required> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["System Administrators"]);
            echo "
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[approved_shipment][]\" ";
            // line 1423
            if (twig_in_filter(2, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1423), "approved_shipment", [], "any", false, false, false, 1423))) {
                echo "checked";
            }
            echo " value=\"2\" required> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Supervisors"]);
            echo "
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" class=\"select_departments\" name=\"responsibility[approved_shipment][]\" ";
            // line 1429
            if (twig_in_filter(3, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1429), "approved_shipment", [], "any", false, false, false, 1429))) {
                echo "checked";
            }
            echo " value=\"3\" required> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Departments Moderators"]);
            echo "
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" class=\"select_departments\" name=\"responsibility[approved_shipment][]\" ";
            // line 1435
            if (twig_in_filter(4, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1435), "approved_shipment", [], "any", false, false, false, 1435))) {
                echo "checked";
            }
            echo " value=\"4\" required> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Departments Employees"]);
            echo "
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single kt-padding-b-10 show_departments ";
            // line 1439
            if ((!twig_in_filter(3, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1439), "approved_shipment", [], "any", false, false, false, 1439)) && !twig_in_filter(4, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1439), "approved_shipment", [], "any", false, false, false, 1439)))) {
                echo "kt-hidden";
            }
            echo "\">
            \t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"responsibility[approved_shipment][departments][]\" data-live-search=\"true\" multiple title=\"";
            // line 1440
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Choose the departments"]);
            echo "\" required>
                                                        <option data-hidden=\"true\"></option>
                                                        ";
            // line 1442
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["departments"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["department"]) {
                // line 1443
                echo "                                                            <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["department"], "id", [], "any", false, false, false, 1443), "html", null, true);
                echo "\" ";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["department"], "id", [], "any", false, false, false, 1443), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1443), "approved_shipment", [], "any", false, false, false, 1443), "departments", [], "any", false, false, false, 1443))) {
                    echo "selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["department"], "name", [], "any", false, false, false, 1443), "html", null, true);
                echo "</option>
                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['department'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1445
            echo "                                                    </select>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" class=\"select_employees\" name=\"responsibility[approved_shipment][]\" ";
            // line 1449
            if (twig_in_filter(5, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1449), "approved_shipment", [], "any", false, false, false, 1449))) {
                echo "checked";
            }
            echo " value=\"5\" required> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Employees"]);
            echo "
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single kt-padding-b-10 show_employees ";
            // line 1453
            if (!twig_in_filter(5, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1453), "approved_shipment", [], "any", false, false, false, 1453))) {
                echo "kt-hidden";
            }
            echo "\">
            \t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"responsibility[approved_shipment][employees][]\" data-live-search=\"true\" multiple title=\"";
            // line 1454
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Choose the employees"]);
            echo "\" required>
                                                        <option data-hidden=\"true\"></option>
                                                        ";
            // line 1456
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["employees"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["employee"]) {
                // line 1457
                echo "                                                            <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employee"], "id", [], "any", false, false, false, 1457), "html", null, true);
                echo "\" ";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["employee"], "id", [], "any", false, false, false, 1457), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1457), "approved_shipment", [], "any", false, false, false, 1457), "employees", [], "any", false, false, false, 1457))) {
                    echo "selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employee"], "name", [], "any", false, false, false, 1457), "html", null, true);
                echo "</option>
                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['employee'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1459
            echo "                                                    </select>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[approved_shipment][]\" ";
            // line 1463
            if (twig_in_filter(6, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1463), "approved_shipment", [], "any", false, false, false, 1463))) {
                echo "checked";
            }
            echo " value=\"6\" required> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sender"]);
            echo " [";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Client"]);
            echo "]
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[approved_shipment][]\" ";
            // line 1469
            if (twig_in_filter(7, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1469), "approved_shipment", [], "any", false, false, false, 1469))) {
                echo "checked";
            }
            echo " value=\"7\" required> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Receiver"]);
            echo " [";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Client"]);
            echo "]
                                                        <span></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">";
            // line 1476
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Refused Shipments Notifications"]);
            echo "</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[refused_shipment][]\" ";
            // line 1480
            if (twig_in_filter(1, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1480), "refused_shipment", [], "any", false, false, false, 1480))) {
                echo "checked";
            }
            echo " value=\"1\" required> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["System Administrators"]);
            echo "
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[refused_shipment][]\" ";
            // line 1486
            if (twig_in_filter(2, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1486), "refused_shipment", [], "any", false, false, false, 1486))) {
                echo "checked";
            }
            echo " value=\"2\" required> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Supervisors"]);
            echo "
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" class=\"select_departments\" name=\"responsibility[refused_shipment][]\" ";
            // line 1492
            if (twig_in_filter(3, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1492), "refused_shipment", [], "any", false, false, false, 1492))) {
                echo "checked";
            }
            echo " value=\"3\" required> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Departments Moderators"]);
            echo "
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" class=\"select_departments\" name=\"responsibility[refused_shipment][]\" ";
            // line 1498
            if (twig_in_filter(4, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1498), "refused_shipment", [], "any", false, false, false, 1498))) {
                echo "checked";
            }
            echo " value=\"4\" required> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Departments Employees"]);
            echo "
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single kt-padding-b-10 show_departments ";
            // line 1502
            if ((!twig_in_filter(3, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1502), "refused_shipment", [], "any", false, false, false, 1502)) && !twig_in_filter(4, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1502), "refused_shipment", [], "any", false, false, false, 1502)))) {
                echo "kt-hidden";
            }
            echo "\">
            \t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"responsibility[refused_shipment][departments][]\" data-live-search=\"true\" multiple title=\"";
            // line 1503
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Choose the departments"]);
            echo "\" required>
                                                        <option data-hidden=\"true\"></option>
                                                        ";
            // line 1505
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["departments"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["department"]) {
                // line 1506
                echo "                                                            <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["department"], "id", [], "any", false, false, false, 1506), "html", null, true);
                echo "\" ";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["department"], "id", [], "any", false, false, false, 1506), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1506), "refused_shipment", [], "any", false, false, false, 1506), "departments", [], "any", false, false, false, 1506))) {
                    echo "selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["department"], "name", [], "any", false, false, false, 1506), "html", null, true);
                echo "</option>
                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['department'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1508
            echo "                                                    </select>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" class=\"select_employees\" name=\"responsibility[refused_shipment][]\" ";
            // line 1512
            if (twig_in_filter(5, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1512), "refused_shipment", [], "any", false, false, false, 1512))) {
                echo "checked";
            }
            echo " value=\"5\" required> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Employees"]);
            echo "
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single kt-padding-b-10 show_employees ";
            // line 1516
            if (!twig_in_filter(5, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1516), "refused_shipment", [], "any", false, false, false, 1516))) {
                echo "kt-hidden";
            }
            echo "\">
            \t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"responsibility[refused_shipment][employees][]\" data-live-search=\"true\" multiple title=\"";
            // line 1517
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Choose the employees"]);
            echo "\" required>
                                                        <option data-hidden=\"true\"></option>
                                                        ";
            // line 1519
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["employees"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["employee"]) {
                // line 1520
                echo "                                                            <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employee"], "id", [], "any", false, false, false, 1520), "html", null, true);
                echo "\" ";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["employee"], "id", [], "any", false, false, false, 1520), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1520), "refused_shipment", [], "any", false, false, false, 1520), "employees", [], "any", false, false, false, 1520))) {
                    echo "selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employee"], "name", [], "any", false, false, false, 1520), "html", null, true);
                echo "</option>
                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['employee'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1522
            echo "                                                    </select>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[refused_shipment][]\" ";
            // line 1526
            if (twig_in_filter(6, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1526), "refused_shipment", [], "any", false, false, false, 1526))) {
                echo "checked";
            }
            echo " value=\"6\" required> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sender"]);
            echo " [";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Client"]);
            echo "]
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[refused_shipment][]\" ";
            // line 1532
            if (twig_in_filter(7, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1532), "refused_shipment", [], "any", false, false, false, 1532))) {
                echo "checked";
            }
            echo " value=\"7\" required> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Receiver"]);
            echo " [";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Client"]);
            echo "]
                                                        <span></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">";
            // line 1539
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Postponed Shipments Notifications"]);
            echo "</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[postponed_shipment][]\" ";
            // line 1543
            if (twig_in_filter(1, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1543), "postponed_shipment", [], "any", false, false, false, 1543))) {
                echo "checked";
            }
            echo " value=\"1\" required> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["System Administrators"]);
            echo "
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[postponed_shipment][]\" ";
            // line 1549
            if (twig_in_filter(2, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1549), "postponed_shipment", [], "any", false, false, false, 1549))) {
                echo "checked";
            }
            echo " value=\"2\" required> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Supervisors"]);
            echo "
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" class=\"select_departments\" name=\"responsibility[postponed_shipment][]\" ";
            // line 1555
            if (twig_in_filter(3, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1555), "postponed_shipment", [], "any", false, false, false, 1555))) {
                echo "checked";
            }
            echo " value=\"3\" required> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Departments Moderators"]);
            echo "
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" class=\"select_departments\" name=\"responsibility[postponed_shipment][]\" ";
            // line 1561
            if (twig_in_filter(4, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1561), "postponed_shipment", [], "any", false, false, false, 1561))) {
                echo "checked";
            }
            echo " value=\"4\" required> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Departments Employees"]);
            echo "
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single kt-padding-b-10 show_departments ";
            // line 1565
            if ((!twig_in_filter(3, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1565), "postponed_shipment", [], "any", false, false, false, 1565)) && !twig_in_filter(4, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1565), "postponed_shipment", [], "any", false, false, false, 1565)))) {
                echo "kt-hidden";
            }
            echo "\">
            \t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"responsibility[postponed_shipment][departments][]\" data-live-search=\"true\" multiple title=\"";
            // line 1566
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Choose the departments"]);
            echo "\" required>
                                                        <option data-hidden=\"true\"></option>
                                                        ";
            // line 1568
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["departments"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["department"]) {
                // line 1569
                echo "                                                            <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["department"], "id", [], "any", false, false, false, 1569), "html", null, true);
                echo "\" ";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["department"], "id", [], "any", false, false, false, 1569), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1569), "postponed_shipment", [], "any", false, false, false, 1569), "departments", [], "any", false, false, false, 1569))) {
                    echo "selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["department"], "name", [], "any", false, false, false, 1569), "html", null, true);
                echo "</option>
                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['department'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1571
            echo "                                                    </select>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" class=\"select_employees\" name=\"responsibility[postponed_shipment][]\" ";
            // line 1575
            if (twig_in_filter(5, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1575), "postponed_shipment", [], "any", false, false, false, 1575))) {
                echo "checked";
            }
            echo " value=\"5\" required> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Employees"]);
            echo "
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single kt-padding-b-10 show_employees ";
            // line 1579
            if (!twig_in_filter(5, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1579), "postponed_shipment", [], "any", false, false, false, 1579))) {
                echo "kt-hidden";
            }
            echo "\">
            \t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"responsibility[postponed_shipment][employees][]\" data-live-search=\"true\" multiple title=\"";
            // line 1580
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Choose the employees"]);
            echo "\" required>
                                                        <option data-hidden=\"true\"></option>
                                                        ";
            // line 1582
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["employees"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["employee"]) {
                // line 1583
                echo "                                                            <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employee"], "id", [], "any", false, false, false, 1583), "html", null, true);
                echo "\" ";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["employee"], "id", [], "any", false, false, false, 1583), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1583), "postponed_shipment", [], "any", false, false, false, 1583), "employees", [], "any", false, false, false, 1583))) {
                    echo "selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employee"], "name", [], "any", false, false, false, 1583), "html", null, true);
                echo "</option>
                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['employee'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1585
            echo "                                                    </select>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[postponed_shipment][]\" ";
            // line 1589
            if (twig_in_filter(6, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1589), "postponed_shipment", [], "any", false, false, false, 1589))) {
                echo "checked";
            }
            echo " value=\"6\" required> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sender"]);
            echo " [";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Client"]);
            echo "]
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[postponed_shipment][]\" ";
            // line 1595
            if (twig_in_filter(7, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1595), "postponed_shipment", [], "any", false, false, false, 1595))) {
                echo "checked";
            }
            echo " value=\"7\" required> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Receiver"]);
            echo " [";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Client"]);
            echo "]
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[postponed_shipment][]\" ";
            // line 1601
            if (twig_in_filter(8, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1601), "postponed_shipment", [], "any", false, false, false, 1601))) {
                echo "checked";
            }
            echo " value=\"8\" required> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Responsible"]);
            echo "
                                                        <span></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">";
            // line 1608
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Transfered Shipments Notifications"]);
            echo "</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[transfered_shipment][]\" ";
            // line 1612
            if (twig_in_filter(1, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1612), "transfered_shipment", [], "any", false, false, false, 1612))) {
                echo "checked";
            }
            echo " value=\"1\" required> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["System Administrators"]);
            echo "
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[transfered_shipment][]\" ";
            // line 1618
            if (twig_in_filter(2, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1618), "transfered_shipment", [], "any", false, false, false, 1618))) {
                echo "checked";
            }
            echo " value=\"2\" required> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Supervisors"]);
            echo "
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" class=\"select_departments\" name=\"responsibility[transfered_shipment][]\" ";
            // line 1624
            if (twig_in_filter(3, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1624), "transfered_shipment", [], "any", false, false, false, 1624))) {
                echo "checked";
            }
            echo " value=\"3\" required> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Departments Moderators"]);
            echo "
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" class=\"select_departments\" name=\"responsibility[transfered_shipment][]\" ";
            // line 1630
            if (twig_in_filter(4, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1630), "transfered_shipment", [], "any", false, false, false, 1630))) {
                echo "checked";
            }
            echo " value=\"4\" required> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Departments Employees"]);
            echo "
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single kt-padding-b-10 show_departments ";
            // line 1634
            if ((!twig_in_filter(3, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1634), "transfered_shipment", [], "any", false, false, false, 1634)) && !twig_in_filter(4, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1634), "transfered_shipment", [], "any", false, false, false, 1634)))) {
                echo "kt-hidden";
            }
            echo "\">
            \t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"responsibility[transfered_shipment][departments][]\" data-live-search=\"true\" multiple title=\"";
            // line 1635
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Choose the departments"]);
            echo "\" required>
                                                        <option data-hidden=\"true\"></option>
                                                        ";
            // line 1637
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["departments"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["department"]) {
                // line 1638
                echo "                                                            <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["department"], "id", [], "any", false, false, false, 1638), "html", null, true);
                echo "\" ";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["department"], "id", [], "any", false, false, false, 1638), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1638), "transfered_shipment", [], "any", false, false, false, 1638), "departments", [], "any", false, false, false, 1638))) {
                    echo "selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["department"], "name", [], "any", false, false, false, 1638), "html", null, true);
                echo "</option>
                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['department'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1640
            echo "                                                    </select>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" class=\"select_employees\" name=\"responsibility[transfered_shipment][]\" ";
            // line 1644
            if (twig_in_filter(5, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1644), "transfered_shipment", [], "any", false, false, false, 1644))) {
                echo "checked";
            }
            echo " value=\"5\" required> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Employees"]);
            echo "
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single kt-padding-b-10 show_employees ";
            // line 1648
            if (!twig_in_filter(5, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1648), "transfered_shipment", [], "any", false, false, false, 1648))) {
                echo "kt-hidden";
            }
            echo "\">
            \t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"responsibility[transfered_shipment][employees][]\" data-live-search=\"true\" multiple title=\"";
            // line 1649
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Choose the employees"]);
            echo "\" required>
                                                        <option data-hidden=\"true\"></option>
                                                        ";
            // line 1651
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["employees"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["employee"]) {
                // line 1652
                echo "                                                            <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employee"], "id", [], "any", false, false, false, 1652), "html", null, true);
                echo "\" ";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["employee"], "id", [], "any", false, false, false, 1652), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1652), "transfered_shipment", [], "any", false, false, false, 1652), "employees", [], "any", false, false, false, 1652))) {
                    echo "selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employee"], "name", [], "any", false, false, false, 1652), "html", null, true);
                echo "</option>
                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['employee'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1654
            echo "                                                    </select>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[transfered_shipment][]\" ";
            // line 1658
            if (twig_in_filter(6, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1658), "transfered_shipment", [], "any", false, false, false, 1658))) {
                echo "checked";
            }
            echo " value=\"6\" required> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sender"]);
            echo " [";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Client"]);
            echo "]
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[transfered_shipment][]\" ";
            // line 1664
            if (twig_in_filter(7, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1664), "transfered_shipment", [], "any", false, false, false, 1664))) {
                echo "checked";
            }
            echo " value=\"7\" required> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Receiver"]);
            echo " [";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Client"]);
            echo "]
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[transfered_shipment][]\" ";
            // line 1670
            if (twig_in_filter(8, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1670), "transfered_shipment", [], "any", false, false, false, 1670))) {
                echo "checked";
            }
            echo " value=\"8\" required> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Responsible"]);
            echo "
                                                        <span></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">";
            // line 1677
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Assigned Shipments Notifications"]);
            echo "</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[assign_shipment][]\" ";
            // line 1681
            if (twig_in_filter(1, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1681), "assign_shipment", [], "any", false, false, false, 1681))) {
                echo "checked";
            }
            echo " value=\"1\" required> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["System Administrators"]);
            echo "
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[assign_shipment][]\" ";
            // line 1687
            if (twig_in_filter(2, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1687), "assign_shipment", [], "any", false, false, false, 1687))) {
                echo "checked";
            }
            echo " value=\"2\" required> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Supervisors"]);
            echo "
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" class=\"select_departments\" name=\"responsibility[assign_shipment][]\" ";
            // line 1693
            if (twig_in_filter(3, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1693), "assign_shipment", [], "any", false, false, false, 1693))) {
                echo "checked";
            }
            echo " value=\"3\" required> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Departments Moderators"]);
            echo "
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" class=\"select_departments\" name=\"responsibility[assign_shipment][]\" ";
            // line 1699
            if (twig_in_filter(4, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1699), "assign_shipment", [], "any", false, false, false, 1699))) {
                echo "checked";
            }
            echo " value=\"4\" required> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Departments Employees"]);
            echo "
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single kt-padding-b-10 show_departments ";
            // line 1703
            if ((!twig_in_filter(3, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1703), "assign_shipment", [], "any", false, false, false, 1703)) && !twig_in_filter(4, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1703), "assign_shipment", [], "any", false, false, false, 1703)))) {
                echo "kt-hidden";
            }
            echo "\">
            \t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"responsibility[assign_shipment][departments][]\" data-live-search=\"true\" multiple title=\"";
            // line 1704
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Choose the departments"]);
            echo "\" required>
                                                        <option data-hidden=\"true\"></option>
                                                        ";
            // line 1706
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["departments"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["department"]) {
                // line 1707
                echo "                                                            <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["department"], "id", [], "any", false, false, false, 1707), "html", null, true);
                echo "\" ";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["department"], "id", [], "any", false, false, false, 1707), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1707), "assign_shipment", [], "any", false, false, false, 1707), "departments", [], "any", false, false, false, 1707))) {
                    echo "selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["department"], "name", [], "any", false, false, false, 1707), "html", null, true);
                echo "</option>
                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['department'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1709
            echo "                                                    </select>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" class=\"select_employees\" name=\"responsibility[assign_shipment][]\" ";
            // line 1713
            if (twig_in_filter(5, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1713), "assign_shipment", [], "any", false, false, false, 1713))) {
                echo "checked";
            }
            echo " value=\"5\" required> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Employees"]);
            echo "
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single kt-padding-b-10 show_employees ";
            // line 1717
            if (!twig_in_filter(5, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1717), "assign_shipment", [], "any", false, false, false, 1717))) {
                echo "kt-hidden";
            }
            echo "\">
            \t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"responsibility[assign_shipment][employees][]\" data-live-search=\"true\" multiple title=\"";
            // line 1718
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Choose the employees"]);
            echo "\" required>
                                                        <option data-hidden=\"true\"></option>
                                                        ";
            // line 1720
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["employees"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["employee"]) {
                // line 1721
                echo "                                                            <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employee"], "id", [], "any", false, false, false, 1721), "html", null, true);
                echo "\" ";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["employee"], "id", [], "any", false, false, false, 1721), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1721), "assign_shipment", [], "any", false, false, false, 1721), "employees", [], "any", false, false, false, 1721))) {
                    echo "selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employee"], "name", [], "any", false, false, false, 1721), "html", null, true);
                echo "</option>
                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['employee'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1723
            echo "                                                    </select>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[assign_shipment][]\" ";
            // line 1727
            if (twig_in_filter(6, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1727), "assign_shipment", [], "any", false, false, false, 1727))) {
                echo "checked";
            }
            echo " value=\"6\" required> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sender"]);
            echo " [";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Client"]);
            echo "]
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[assign_shipment][]\" ";
            // line 1733
            if (twig_in_filter(7, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1733), "assign_shipment", [], "any", false, false, false, 1733))) {
                echo "checked";
            }
            echo " value=\"7\" required> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Receiver"]);
            echo " [";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Client"]);
            echo "]
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[assign_shipment][]\" ";
            // line 1739
            if (twig_in_filter(8, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1739), "assign_shipment", [], "any", false, false, false, 1739))) {
                echo "checked";
            }
            echo " value=\"8\" required> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Responsible"]);
            echo "
                                                        <span></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">";
            // line 1746
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Driver Received Notifications"]);
            echo "</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[driver_received][]\" ";
            // line 1750
            if (twig_in_filter(1, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1750), "driver_received", [], "any", false, false, false, 1750))) {
                echo "checked";
            }
            echo " value=\"1\" required> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["System Administrators"]);
            echo "
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[driver_received][]\" ";
            // line 1756
            if (twig_in_filter(2, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1756), "driver_received", [], "any", false, false, false, 1756))) {
                echo "checked";
            }
            echo " value=\"2\" required> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Supervisors"]);
            echo "
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" class=\"select_departments\" name=\"responsibility[driver_received][]\" ";
            // line 1762
            if (twig_in_filter(3, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1762), "driver_received", [], "any", false, false, false, 1762))) {
                echo "checked";
            }
            echo " value=\"3\" required> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Departments Moderators"]);
            echo "
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" class=\"select_departments\" name=\"responsibility[driver_received][]\" ";
            // line 1768
            if (twig_in_filter(4, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1768), "driver_received", [], "any", false, false, false, 1768))) {
                echo "checked";
            }
            echo " value=\"4\" required> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Departments Employees"]);
            echo "
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single kt-padding-b-10 show_departments ";
            // line 1772
            if ((!twig_in_filter(3, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1772), "driver_received", [], "any", false, false, false, 1772)) && !twig_in_filter(4, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1772), "driver_received", [], "any", false, false, false, 1772)))) {
                echo "kt-hidden";
            }
            echo "\">
            \t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"responsibility[driver_received][departments][]\" data-live-search=\"true\" multiple title=\"";
            // line 1773
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Choose the departments"]);
            echo "\" required>
                                                        <option data-hidden=\"true\"></option>
                                                        ";
            // line 1775
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["departments"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["department"]) {
                // line 1776
                echo "                                                            <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["department"], "id", [], "any", false, false, false, 1776), "html", null, true);
                echo "\" ";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["department"], "id", [], "any", false, false, false, 1776), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1776), "driver_received", [], "any", false, false, false, 1776), "departments", [], "any", false, false, false, 1776))) {
                    echo "selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["department"], "name", [], "any", false, false, false, 1776), "html", null, true);
                echo "</option>
                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['department'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1778
            echo "                                                    </select>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" class=\"select_employees\" name=\"responsibility[driver_received][]\" ";
            // line 1782
            if (twig_in_filter(5, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1782), "driver_received", [], "any", false, false, false, 1782))) {
                echo "checked";
            }
            echo " value=\"5\" required> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Employees"]);
            echo "
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single kt-padding-b-10 show_employees ";
            // line 1786
            if (!twig_in_filter(5, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1786), "driver_received", [], "any", false, false, false, 1786))) {
                echo "kt-hidden";
            }
            echo "\">
            \t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"responsibility[driver_received][employees][]\" data-live-search=\"true\" multiple title=\"";
            // line 1787
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Choose the employees"]);
            echo "\" required>
                                                        <option data-hidden=\"true\"></option>
                                                        ";
            // line 1789
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["employees"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["employee"]) {
                // line 1790
                echo "                                                            <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employee"], "id", [], "any", false, false, false, 1790), "html", null, true);
                echo "\" ";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["employee"], "id", [], "any", false, false, false, 1790), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1790), "assign_shipment", [], "any", false, false, false, 1790), "employees", [], "any", false, false, false, 1790))) {
                    echo "selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employee"], "name", [], "any", false, false, false, 1790), "html", null, true);
                echo "</option>
                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['employee'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1792
            echo "                                                    </select>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[driver_received][]\" ";
            // line 1796
            if (twig_in_filter(6, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1796), "driver_received", [], "any", false, false, false, 1796))) {
                echo "checked";
            }
            echo " value=\"6\" required> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sender"]);
            echo " [";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Client"]);
            echo "]
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[driver_received][]\" ";
            // line 1802
            if (twig_in_filter(7, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1802), "driver_received", [], "any", false, false, false, 1802))) {
                echo "checked";
            }
            echo " value=\"7\" required> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Receiver"]);
            echo " [";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Client"]);
            echo "]
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[driver_received][]\" ";
            // line 1808
            if (twig_in_filter(8, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1808), "driver_received", [], "any", false, false, false, 1808))) {
                echo "checked";
            }
            echo " value=\"8\" required> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Responsible"]);
            echo "
                                                        <span></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">";
            // line 1815
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Discards Request Notifications"]);
            echo "</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[discards_request][]\" ";
            // line 1819
            if (twig_in_filter(1, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1819), "discards_request", [], "any", false, false, false, 1819))) {
                echo "checked";
            }
            echo " value=\"1\" required> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["System Administrators"]);
            echo "
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[discards_request][]\" ";
            // line 1825
            if (twig_in_filter(2, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1825), "discards_request", [], "any", false, false, false, 1825))) {
                echo "checked";
            }
            echo " value=\"2\" required> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Supervisors"]);
            echo "
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" class=\"select_departments\" name=\"responsibility[discards_request][]\" ";
            // line 1831
            if (twig_in_filter(3, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1831), "discards_request", [], "any", false, false, false, 1831))) {
                echo "checked";
            }
            echo " value=\"3\" required> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Departments Moderators"]);
            echo "
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" class=\"select_departments\" name=\"responsibility[discards_request][]\" ";
            // line 1837
            if (twig_in_filter(4, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1837), "discards_request", [], "any", false, false, false, 1837))) {
                echo "checked";
            }
            echo " value=\"4\" required> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Departments Employees"]);
            echo "
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single kt-padding-b-10 show_departments ";
            // line 1841
            if ((!twig_in_filter(3, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1841), "discards_request", [], "any", false, false, false, 1841)) && !twig_in_filter(4, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1841), "discards_request", [], "any", false, false, false, 1841)))) {
                echo "kt-hidden";
            }
            echo "\">
            \t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"responsibility[discards_request][departments][]\" data-live-search=\"true\" multiple title=\"";
            // line 1842
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Choose the departments"]);
            echo "\" required>
                                                        <option data-hidden=\"true\"></option>
                                                        ";
            // line 1844
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["departments"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["department"]) {
                // line 1845
                echo "                                                            <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["department"], "id", [], "any", false, false, false, 1845), "html", null, true);
                echo "\" ";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["department"], "id", [], "any", false, false, false, 1845), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1845), "discards_request", [], "any", false, false, false, 1845), "departments", [], "any", false, false, false, 1845))) {
                    echo "selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["department"], "name", [], "any", false, false, false, 1845), "html", null, true);
                echo "</option>
                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['department'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1847
            echo "                                                    </select>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" class=\"select_employees\" name=\"responsibility[discards_request][]\" ";
            // line 1851
            if (twig_in_filter(5, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1851), "discards_request", [], "any", false, false, false, 1851))) {
                echo "checked";
            }
            echo " value=\"5\" required> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Employees"]);
            echo "
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single kt-padding-b-10 show_employees ";
            // line 1855
            if (!twig_in_filter(5, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1855), "discards_request", [], "any", false, false, false, 1855))) {
                echo "kt-hidden";
            }
            echo "\">
            \t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"responsibility[discards_request][employees][]\" data-live-search=\"true\" multiple title=\"";
            // line 1856
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Choose the employees"]);
            echo "\" required>
                                                        <option data-hidden=\"true\"></option>
                                                        ";
            // line 1858
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["employees"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["employee"]) {
                // line 1859
                echo "                                                            <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employee"], "id", [], "any", false, false, false, 1859), "html", null, true);
                echo "\" ";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["employee"], "id", [], "any", false, false, false, 1859), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1859), "assign_shipment", [], "any", false, false, false, 1859), "employees", [], "any", false, false, false, 1859))) {
                    echo "selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employee"], "name", [], "any", false, false, false, 1859), "html", null, true);
                echo "</option>
                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['employee'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1861
            echo "                                                    </select>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[discards_request][]\" ";
            // line 1865
            if (twig_in_filter(6, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1865), "discards_request", [], "any", false, false, false, 1865))) {
                echo "checked";
            }
            echo " value=\"6\" required> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sender"]);
            echo " [";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Client"]);
            echo "]
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[discards_request][]\" ";
            // line 1871
            if (twig_in_filter(7, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1871), "discards_request", [], "any", false, false, false, 1871))) {
                echo "checked";
            }
            echo " value=\"7\" required> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Receiver"]);
            echo " [";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Client"]);
            echo "]
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[discards_request][]\" ";
            // line 1877
            if (twig_in_filter(8, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1877), "discards_request", [], "any", false, false, false, 1877))) {
                echo "checked";
            }
            echo " value=\"8\" required> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Responsible"]);
            echo "
                                                        <span></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">";
            // line 1884
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Received Notifications"]);
            echo "</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[received][]\" ";
            // line 1888
            if (twig_in_filter(1, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1888), "received", [], "any", false, false, false, 1888))) {
                echo "checked";
            }
            echo " value=\"1\" required> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["System Administrators"]);
            echo "
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[received][]\" ";
            // line 1894
            if (twig_in_filter(2, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1894), "received", [], "any", false, false, false, 1894))) {
                echo "checked";
            }
            echo " value=\"2\" required> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Supervisors"]);
            echo "
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" class=\"select_departments\" name=\"responsibility[received][]\" ";
            // line 1900
            if (twig_in_filter(3, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1900), "received", [], "any", false, false, false, 1900))) {
                echo "checked";
            }
            echo " value=\"3\" required> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Departments Moderators"]);
            echo "
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" class=\"select_departments\" name=\"responsibility[received][]\" ";
            // line 1906
            if (twig_in_filter(4, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1906), "received", [], "any", false, false, false, 1906))) {
                echo "checked";
            }
            echo " value=\"4\" required> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Departments Employees"]);
            echo "
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single kt-padding-b-10 show_departments ";
            // line 1910
            if ((!twig_in_filter(3, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1910), "received", [], "any", false, false, false, 1910)) && !twig_in_filter(4, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1910), "received", [], "any", false, false, false, 1910)))) {
                echo "kt-hidden";
            }
            echo "\">
            \t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"responsibility[received][departments][]\" data-live-search=\"true\" multiple title=\"";
            // line 1911
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Choose the departments"]);
            echo "\" required>
                                                        <option data-hidden=\"true\"></option>
                                                        ";
            // line 1913
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["departments"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["department"]) {
                // line 1914
                echo "                                                            <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["department"], "id", [], "any", false, false, false, 1914), "html", null, true);
                echo "\" ";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["department"], "id", [], "any", false, false, false, 1914), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1914), "received", [], "any", false, false, false, 1914), "departments", [], "any", false, false, false, 1914))) {
                    echo "selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["department"], "name", [], "any", false, false, false, 1914), "html", null, true);
                echo "</option>
                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['department'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1916
            echo "                                                    </select>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" class=\"select_employees\" name=\"responsibility[received][]\" ";
            // line 1920
            if (twig_in_filter(5, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1920), "received", [], "any", false, false, false, 1920))) {
                echo "checked";
            }
            echo " value=\"5\" required> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Employees"]);
            echo "
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single kt-padding-b-10 show_employees ";
            // line 1924
            if (!twig_in_filter(5, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1924), "received", [], "any", false, false, false, 1924))) {
                echo "kt-hidden";
            }
            echo "\">
            \t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"responsibility[received][employees][]\" data-live-search=\"true\" multiple title=\"";
            // line 1925
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Choose the employees"]);
            echo "\" required>
                                                        <option data-hidden=\"true\"></option>
                                                        ";
            // line 1927
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["employees"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["employee"]) {
                // line 1928
                echo "                                                            <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employee"], "id", [], "any", false, false, false, 1928), "html", null, true);
                echo "\" ";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["employee"], "id", [], "any", false, false, false, 1928), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1928), "assign_shipment", [], "any", false, false, false, 1928), "employees", [], "any", false, false, false, 1928))) {
                    echo "selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employee"], "name", [], "any", false, false, false, 1928), "html", null, true);
                echo "</option>
                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['employee'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1930
            echo "                                                    </select>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[received][]\" ";
            // line 1934
            if (twig_in_filter(6, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1934), "received", [], "any", false, false, false, 1934))) {
                echo "checked";
            }
            echo " value=\"6\" required> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sender"]);
            echo " [";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Client"]);
            echo "]
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[received][]\" ";
            // line 1940
            if (twig_in_filter(7, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1940), "received", [], "any", false, false, false, 1940))) {
                echo "checked";
            }
            echo " value=\"7\" required> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Receiver"]);
            echo " [";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Client"]);
            echo "]
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[received][]\" ";
            // line 1946
            if (twig_in_filter(8, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1946), "received", [], "any", false, false, false, 1946))) {
                echo "checked";
            }
            echo " value=\"8\" required> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Responsible"]);
            echo "
                                                        <span></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">";
            // line 1953
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Manifest Notifications"]);
            echo "</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[manifest_assigned][]\" ";
            // line 1957
            if (twig_in_filter(1, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1957), "manifest_assigned", [], "any", false, false, false, 1957))) {
                echo "checked";
            }
            echo " value=\"1\" required> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["System Administrators"]);
            echo "
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[manifest_assigned][]\" ";
            // line 1963
            if (twig_in_filter(2, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1963), "manifest_assigned", [], "any", false, false, false, 1963))) {
                echo "checked";
            }
            echo " value=\"2\" required> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Supervisors"]);
            echo "
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" class=\"select_departments\" name=\"responsibility[manifest_assigned][]\" ";
            // line 1969
            if (twig_in_filter(3, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1969), "manifest_assigned", [], "any", false, false, false, 1969))) {
                echo "checked";
            }
            echo " value=\"3\" required> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Departments Moderators"]);
            echo "
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" class=\"select_departments\" name=\"responsibility[manifest_assigned][]\" ";
            // line 1975
            if (twig_in_filter(4, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1975), "manifest_assigned", [], "any", false, false, false, 1975))) {
                echo "checked";
            }
            echo " value=\"4\" required> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Departments Employees"]);
            echo "
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single kt-padding-b-10 show_departments ";
            // line 1979
            if ((!twig_in_filter(3, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1979), "manifest_assigned", [], "any", false, false, false, 1979)) && !twig_in_filter(4, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1979), "manifest_assigned", [], "any", false, false, false, 1979)))) {
                echo "kt-hidden";
            }
            echo "\">
            \t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"responsibility[manifest_assigned][departments][]\" data-live-search=\"true\" multiple title=\"";
            // line 1980
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Choose the departments"]);
            echo "\" required>
                                                        <option data-hidden=\"true\"></option>
                                                        ";
            // line 1982
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["departments"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["department"]) {
                // line 1983
                echo "                                                            <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["department"], "id", [], "any", false, false, false, 1983), "html", null, true);
                echo "\" ";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["department"], "id", [], "any", false, false, false, 1983), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1983), "manifest_assigned", [], "any", false, false, false, 1983), "departments", [], "any", false, false, false, 1983))) {
                    echo "selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["department"], "name", [], "any", false, false, false, 1983), "html", null, true);
                echo "</option>
                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['department'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1985
            echo "                                                    </select>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" class=\"select_employees\" name=\"responsibility[manifest_assigned][]\" ";
            // line 1989
            if (twig_in_filter(5, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1989), "manifest_assigned", [], "any", false, false, false, 1989))) {
                echo "checked";
            }
            echo " value=\"5\" required> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Employees"]);
            echo "
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single kt-padding-b-10 show_employees ";
            // line 1993
            if (!twig_in_filter(5, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1993), "manifest_assigned", [], "any", false, false, false, 1993))) {
                echo "kt-hidden";
            }
            echo "\">
            \t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"responsibility[manifest_assigned][employees][]\" data-live-search=\"true\" multiple title=\"";
            // line 1994
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Choose the employees"]);
            echo "\" required>
                                                        <option data-hidden=\"true\"></option>
                                                        ";
            // line 1996
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["employees"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["employee"]) {
                // line 1997
                echo "                                                            <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employee"], "id", [], "any", false, false, false, 1997), "html", null, true);
                echo "\" ";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["employee"], "id", [], "any", false, false, false, 1997), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 1997), "assign_shipment", [], "any", false, false, false, 1997), "employees", [], "any", false, false, false, 1997))) {
                    echo "selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employee"], "name", [], "any", false, false, false, 1997), "html", null, true);
                echo "</option>
                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['employee'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1999
            echo "                                                    </select>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[manifest_assigned][]\" ";
            // line 2003
            if (twig_in_filter(6, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 2003), "manifest_assigned", [], "any", false, false, false, 2003))) {
                echo "checked";
            }
            echo " value=\"6\" required> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sender"]);
            echo " [";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Client"]);
            echo "]
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[manifest_assigned][]\" ";
            // line 2009
            if (twig_in_filter(7, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 2009), "manifest_assigned", [], "any", false, false, false, 2009))) {
                echo "checked";
            }
            echo " value=\"7\" required> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Receiver"]);
            echo " [";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Client"]);
            echo "]
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[manifest_assigned][]\" ";
            // line 2015
            if (twig_in_filter(8, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 2015), "manifest_assigned", [], "any", false, false, false, 2015))) {
                echo "checked";
            }
            echo " value=\"8\" required> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Responsible"]);
            echo "
                                                        <span></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">";
            // line 2022
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Saved in stock Notifications"]);
            echo "</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[stock_saved][]\" ";
            // line 2026
            if (twig_in_filter(1, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 2026), "stock_saved", [], "any", false, false, false, 2026))) {
                echo "checked";
            }
            echo " value=\"1\" required> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["System Administrators"]);
            echo "
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[stock_saved][]\" ";
            // line 2032
            if (twig_in_filter(2, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 2032), "stock_saved", [], "any", false, false, false, 2032))) {
                echo "checked";
            }
            echo " value=\"2\" required> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Supervisors"]);
            echo "
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" class=\"select_departments\" name=\"responsibility[stock_saved][]\" ";
            // line 2038
            if (twig_in_filter(3, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 2038), "stock_saved", [], "any", false, false, false, 2038))) {
                echo "checked";
            }
            echo " value=\"3\" required> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Departments Moderators"]);
            echo "
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" class=\"select_departments\" name=\"responsibility[stock_saved][]\" ";
            // line 2044
            if (twig_in_filter(4, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 2044), "stock_saved", [], "any", false, false, false, 2044))) {
                echo "checked";
            }
            echo " value=\"4\" required> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Departments Employees"]);
            echo "
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single kt-padding-b-10 show_departments ";
            // line 2048
            if ((!twig_in_filter(3, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 2048), "stock_saved", [], "any", false, false, false, 2048)) && !twig_in_filter(4, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 2048), "stock_saved", [], "any", false, false, false, 2048)))) {
                echo "kt-hidden";
            }
            echo "\">
            \t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"responsibility[stock_saved][departments][]\" data-live-search=\"true\" multiple title=\"";
            // line 2049
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Choose the departments"]);
            echo "\" required>
                                                        <option data-hidden=\"true\"></option>
                                                        ";
            // line 2051
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["departments"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["department"]) {
                // line 2052
                echo "                                                            <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["department"], "id", [], "any", false, false, false, 2052), "html", null, true);
                echo "\" ";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["department"], "id", [], "any", false, false, false, 2052), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 2052), "stock_saved", [], "any", false, false, false, 2052), "departments", [], "any", false, false, false, 2052))) {
                    echo "selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["department"], "name", [], "any", false, false, false, 2052), "html", null, true);
                echo "</option>
                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['department'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2054
            echo "                                                    </select>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" class=\"select_employees\" name=\"responsibility[stock_saved][]\" ";
            // line 2058
            if (twig_in_filter(5, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 2058), "stock_saved", [], "any", false, false, false, 2058))) {
                echo "checked";
            }
            echo " value=\"5\" required> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Employees"]);
            echo "
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single kt-padding-b-10 show_employees ";
            // line 2062
            if (!twig_in_filter(5, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 2062), "stock_saved", [], "any", false, false, false, 2062))) {
                echo "kt-hidden";
            }
            echo "\">
            \t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"responsibility[stock_saved][employees][]\" data-live-search=\"true\" multiple title=\"";
            // line 2063
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Choose the employees"]);
            echo "\" required>
                                                        <option data-hidden=\"true\"></option>
                                                        ";
            // line 2065
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["employees"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["employee"]) {
                // line 2066
                echo "                                                            <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employee"], "id", [], "any", false, false, false, 2066), "html", null, true);
                echo "\" ";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["employee"], "id", [], "any", false, false, false, 2066), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 2066), "assign_shipment", [], "any", false, false, false, 2066), "employees", [], "any", false, false, false, 2066))) {
                    echo "selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employee"], "name", [], "any", false, false, false, 2066), "html", null, true);
                echo "</option>
                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['employee'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2068
            echo "                                                    </select>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[stock_saved][]\" ";
            // line 2072
            if (twig_in_filter(6, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 2072), "stock_saved", [], "any", false, false, false, 2072))) {
                echo "checked";
            }
            echo " value=\"6\" required> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sender"]);
            echo " [";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Client"]);
            echo "]
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[stock_saved][]\" ";
            // line 2078
            if (twig_in_filter(7, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 2078), "stock_saved", [], "any", false, false, false, 2078))) {
                echo "checked";
            }
            echo " value=\"7\" required> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Receiver"]);
            echo " [";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Client"]);
            echo "]
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[stock_saved][]\" ";
            // line 2084
            if (twig_in_filter(8, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 2084), "stock_saved", [], "any", false, false, false, 2084))) {
                echo "checked";
            }
            echo " value=\"8\" required> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Responsible"]);
            echo "
                                                        <span></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">";
            // line 2091
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Returned Notifications"]);
            echo "</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[returned][]\" ";
            // line 2095
            if (twig_in_filter(1, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 2095), "returned", [], "any", false, false, false, 2095))) {
                echo "checked";
            }
            echo " value=\"1\" required> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["System Administrators"]);
            echo "
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[returned][]\" ";
            // line 2101
            if (twig_in_filter(2, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 2101), "returned", [], "any", false, false, false, 2101))) {
                echo "checked";
            }
            echo " value=\"2\" required> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Supervisors"]);
            echo "
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" class=\"select_departments\" name=\"responsibility[returned][]\" ";
            // line 2107
            if (twig_in_filter(3, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 2107), "returned", [], "any", false, false, false, 2107))) {
                echo "checked";
            }
            echo " value=\"3\" required> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Departments Moderators"]);
            echo "
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" class=\"select_departments\" name=\"responsibility[returned][]\" ";
            // line 2113
            if (twig_in_filter(4, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 2113), "returned", [], "any", false, false, false, 2113))) {
                echo "checked";
            }
            echo " value=\"4\" required> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Departments Employees"]);
            echo "
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single kt-padding-b-10 show_departments ";
            // line 2117
            if ((!twig_in_filter(3, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 2117), "returned", [], "any", false, false, false, 2117)) && !twig_in_filter(4, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 2117), "returned", [], "any", false, false, false, 2117)))) {
                echo "kt-hidden";
            }
            echo "\">
            \t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"responsibility[returned][departments][]\" data-live-search=\"true\" multiple title=\"";
            // line 2118
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Choose the departments"]);
            echo "\" required>
                                                        <option data-hidden=\"true\"></option>
                                                        ";
            // line 2120
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["departments"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["department"]) {
                // line 2121
                echo "                                                            <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["department"], "id", [], "any", false, false, false, 2121), "html", null, true);
                echo "\" ";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["department"], "id", [], "any", false, false, false, 2121), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 2121), "returned", [], "any", false, false, false, 2121), "departments", [], "any", false, false, false, 2121))) {
                    echo "selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["department"], "name", [], "any", false, false, false, 2121), "html", null, true);
                echo "</option>
                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['department'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2123
            echo "                                                    </select>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" class=\"select_employees\" name=\"responsibility[returned][]\" ";
            // line 2127
            if (twig_in_filter(5, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 2127), "returned", [], "any", false, false, false, 2127))) {
                echo "checked";
            }
            echo " value=\"5\" required> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Employees"]);
            echo "
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single kt-padding-b-10 show_employees ";
            // line 2131
            if (!twig_in_filter(5, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 2131), "returned", [], "any", false, false, false, 2131))) {
                echo "kt-hidden";
            }
            echo "\">
            \t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"responsibility[returned][employees][]\" data-live-search=\"true\" multiple title=\"";
            // line 2132
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Choose the employees"]);
            echo "\" required>
                                                        <option data-hidden=\"true\"></option>
                                                        ";
            // line 2134
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["employees"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["employee"]) {
                // line 2135
                echo "                                                            <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employee"], "id", [], "any", false, false, false, 2135), "html", null, true);
                echo "\" ";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["employee"], "id", [], "any", false, false, false, 2135), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 2135), "assign_shipment", [], "any", false, false, false, 2135), "employees", [], "any", false, false, false, 2135))) {
                    echo "selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employee"], "name", [], "any", false, false, false, 2135), "html", null, true);
                echo "</option>
                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['employee'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2137
            echo "                                                    </select>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[returned][]\" ";
            // line 2141
            if (twig_in_filter(6, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 2141), "returned", [], "any", false, false, false, 2141))) {
                echo "checked";
            }
            echo " value=\"6\" required> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sender"]);
            echo " [";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Client"]);
            echo "]
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[returned][]\" ";
            // line 2147
            if (twig_in_filter(7, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 2147), "returned", [], "any", false, false, false, 2147))) {
                echo "checked";
            }
            echo " value=\"7\" required> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Receiver"]);
            echo " [";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Client"]);
            echo "]
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[returned][]\" ";
            // line 2153
            if (twig_in_filter(8, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 2153), "returned", [], "any", false, false, false, 2153))) {
                echo "checked";
            }
            echo " value=\"8\" required> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Responsible"]);
            echo "
                                                        <span></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">";
            // line 2160
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delivered Notifications"]);
            echo "</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[delivered][]\" ";
            // line 2164
            if (twig_in_filter(1, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 2164), "delivered", [], "any", false, false, false, 2164))) {
                echo "checked";
            }
            echo " value=\"1\" required> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["System Administrators"]);
            echo "
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[delivered][]\" ";
            // line 2170
            if (twig_in_filter(2, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 2170), "delivered", [], "any", false, false, false, 2170))) {
                echo "checked";
            }
            echo " value=\"2\" required> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Supervisors"]);
            echo "
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" class=\"select_departments\" name=\"responsibility[delivered][]\" ";
            // line 2176
            if (twig_in_filter(3, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 2176), "delivered", [], "any", false, false, false, 2176))) {
                echo "checked";
            }
            echo " value=\"3\" required> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Departments Moderators"]);
            echo "
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" class=\"select_departments\" name=\"responsibility[delivered][]\" ";
            // line 2182
            if (twig_in_filter(4, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 2182), "delivered", [], "any", false, false, false, 2182))) {
                echo "checked";
            }
            echo " value=\"4\" required> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Departments Employees"]);
            echo "
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single kt-padding-b-10 show_departments ";
            // line 2186
            if ((!twig_in_filter(3, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 2186), "delivered", [], "any", false, false, false, 2186)) && !twig_in_filter(4, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 2186), "delivered", [], "any", false, false, false, 2186)))) {
                echo "kt-hidden";
            }
            echo "\">
            \t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"responsibility[delivered][departments][]\" data-live-search=\"true\" multiple title=\"";
            // line 2187
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Choose the departments"]);
            echo "\" required>
                                                        <option data-hidden=\"true\"></option>
                                                        ";
            // line 2189
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["departments"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["department"]) {
                // line 2190
                echo "                                                            <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["department"], "id", [], "any", false, false, false, 2190), "html", null, true);
                echo "\" ";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["department"], "id", [], "any", false, false, false, 2190), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 2190), "delivered", [], "any", false, false, false, 2190), "departments", [], "any", false, false, false, 2190))) {
                    echo "selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["department"], "name", [], "any", false, false, false, 2190), "html", null, true);
                echo "</option>
                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['department'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2192
            echo "                                                    </select>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" class=\"select_employees\" name=\"responsibility[delivered][]\" ";
            // line 2196
            if (twig_in_filter(5, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 2196), "delivered", [], "any", false, false, false, 2196))) {
                echo "checked";
            }
            echo " value=\"5\" required> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Employees"]);
            echo "
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single kt-padding-b-10 show_employees ";
            // line 2200
            if (!twig_in_filter(5, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 2200), "delivered", [], "any", false, false, false, 2200))) {
                echo "kt-hidden";
            }
            echo "\">
            \t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"responsibility[delivered][employees][]\" data-live-search=\"true\" multiple title=\"";
            // line 2201
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Choose the employees"]);
            echo "\" required>
                                                        <option data-hidden=\"true\"></option>
                                                        ";
            // line 2203
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["employees"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["employee"]) {
                // line 2204
                echo "                                                            <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employee"], "id", [], "any", false, false, false, 2204), "html", null, true);
                echo "\" ";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["employee"], "id", [], "any", false, false, false, 2204), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 2204), "assign_shipment", [], "any", false, false, false, 2204), "employees", [], "any", false, false, false, 2204))) {
                    echo "selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employee"], "name", [], "any", false, false, false, 2204), "html", null, true);
                echo "</option>
                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['employee'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2206
            echo "                                                    </select>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[delivered][]\" ";
            // line 2210
            if (twig_in_filter(6, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 2210), "delivered", [], "any", false, false, false, 2210))) {
                echo "checked";
            }
            echo " value=\"6\" required> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sender"]);
            echo " [";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Client"]);
            echo "]
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[delivered][]\" ";
            // line 2216
            if (twig_in_filter(7, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 2216), "delivered", [], "any", false, false, false, 2216))) {
                echo "checked";
            }
            echo " value=\"7\" required> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Receiver"]);
            echo " [";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Client"]);
            echo "]
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[delivered][]\" ";
            // line 2222
            if (twig_in_filter(8, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 2222), "delivered", [], "any", false, false, false, 2222))) {
                echo "checked";
            }
            echo " value=\"8\" required> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Responsible"]);
            echo "
                                                        <span></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">";
            // line 2229
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Return Discards Notifications"]);
            echo "</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[return_discards][]\" ";
            // line 2233
            if (twig_in_filter(1, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 2233), "return_discards", [], "any", false, false, false, 2233))) {
                echo "checked";
            }
            echo " value=\"1\" required> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["System Administrators"]);
            echo "
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[return_discards][]\" ";
            // line 2239
            if (twig_in_filter(2, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 2239), "return_discards", [], "any", false, false, false, 2239))) {
                echo "checked";
            }
            echo " value=\"2\" required> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Supervisors"]);
            echo "
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" class=\"select_departments\" name=\"responsibility[return_discards][]\" ";
            // line 2245
            if (twig_in_filter(3, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 2245), "return_discards", [], "any", false, false, false, 2245))) {
                echo "checked";
            }
            echo " value=\"3\" required> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Departments Moderators"]);
            echo "
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" class=\"select_departments\" name=\"responsibility[return_discards][]\" ";
            // line 2251
            if (twig_in_filter(4, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 2251), "return_discards", [], "any", false, false, false, 2251))) {
                echo "checked";
            }
            echo " value=\"4\" required> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Departments Employees"]);
            echo "
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single kt-padding-b-10 show_departments ";
            // line 2255
            if ((!twig_in_filter(3, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 2255), "return_discards", [], "any", false, false, false, 2255)) && !twig_in_filter(4, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 2255), "return_discards", [], "any", false, false, false, 2255)))) {
                echo "kt-hidden";
            }
            echo "\">
            \t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"responsibility[return_discards][departments][]\" data-live-search=\"true\" multiple title=\"";
            // line 2256
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Choose the departments"]);
            echo "\" required>
                                                        <option data-hidden=\"true\"></option>
                                                        ";
            // line 2258
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["departments"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["department"]) {
                // line 2259
                echo "                                                            <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["department"], "id", [], "any", false, false, false, 2259), "html", null, true);
                echo "\" ";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["department"], "id", [], "any", false, false, false, 2259), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 2259), "return_discards", [], "any", false, false, false, 2259), "departments", [], "any", false, false, false, 2259))) {
                    echo "selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["department"], "name", [], "any", false, false, false, 2259), "html", null, true);
                echo "</option>
                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['department'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2261
            echo "                                                    </select>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" class=\"select_employees\" name=\"responsibility[return_discards][]\" ";
            // line 2265
            if (twig_in_filter(5, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 2265), "return_discards", [], "any", false, false, false, 2265))) {
                echo "checked";
            }
            echo " value=\"5\" required> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Employees"]);
            echo "
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single kt-padding-b-10 show_employees ";
            // line 2269
            if (!twig_in_filter(5, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 2269), "return_discards", [], "any", false, false, false, 2269))) {
                echo "kt-hidden";
            }
            echo "\">
            \t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"responsibility[return_discards][employees][]\" data-live-search=\"true\" multiple title=\"";
            // line 2270
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Choose the employees"]);
            echo "\" required>
                                                        <option data-hidden=\"true\"></option>
                                                        ";
            // line 2272
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["employees"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["employee"]) {
                // line 2273
                echo "                                                            <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employee"], "id", [], "any", false, false, false, 2273), "html", null, true);
                echo "\" ";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["employee"], "id", [], "any", false, false, false, 2273), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 2273), "assign_shipment", [], "any", false, false, false, 2273), "employees", [], "any", false, false, false, 2273))) {
                    echo "selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employee"], "name", [], "any", false, false, false, 2273), "html", null, true);
                echo "</option>
                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['employee'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2275
            echo "                                                    </select>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[return_discards][]\" ";
            // line 2279
            if (twig_in_filter(6, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 2279), "return_discards", [], "any", false, false, false, 2279))) {
                echo "checked";
            }
            echo " value=\"6\" required> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sender"]);
            echo " [";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Client"]);
            echo "]
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[return_discards][]\" ";
            // line 2285
            if (twig_in_filter(7, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 2285), "return_discards", [], "any", false, false, false, 2285))) {
                echo "checked";
            }
            echo " value=\"7\" required> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Receiver"]);
            echo " [";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Client"]);
            echo "]
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[return_discards][]\" ";
            // line 2291
            if (twig_in_filter(8, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "responsibility", [], "any", false, false, false, 2291), "return_discards", [], "any", false, false, false, 2291))) {
                echo "checked";
            }
            echo " value=\"8\" required> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Responsible"]);
            echo "
                                                        <span></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
        \t\t\t\t\t</div>
        \t\t\t\t\t<div class=\"col-xl-2\"></div>
        \t\t\t\t</div>
        \t\t\t\t<div class=\"row\">
        \t\t\t\t\t<div class=\"col-xl-4\"></div>
        \t\t\t\t\t<div class=\"col-xl-8\">
                                <div class=\"form-group\">
                                    <button type=\"submit\" class=\"btn btn-primary\">";
            // line 2306
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Save"]);
            echo "</button>
                                </div>
                            </div>
                        </div>
                    ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 2310
($context["this"] ?? null), "param", [], "any", false, false, false, 2310), "page", [], "any", false, false, false, 2310) == "google")) {
            // line 2311
            echo "        \t\t\t\t<div class=\"row\">
        \t\t\t\t\t<div class=\"col-xl-2\"></div>
        \t\t\t\t\t<div class=\"col-xl-8\">
        \t\t\t\t\t\t<div class=\"kt-section kt-section--first\">
                                    <h3 class=\"kt-section__title kt-section__title-lg\">";
            // line 2315
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Google APIs"]);
            echo ":</h3>
        \t\t\t\t\t\t\t<div class=\"kt-section__body\">
                                        <div class=\"kt-section\">
                        \t\t\t\t\t<h5 class=\"kt-section__title kt-margin-b-20\">
                        \t\t\t\t\t\t";
            // line 2319
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Google Maps"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span>
                        \t\t\t\t\t</h5>
                        \t\t\t\t\t<div class=\"kt-section__content\">
                                                <div class=\"form-group row\">
                                                    <label class=\"col-xl-3 col-lg-3 col-form-label\">";
            // line 2323
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Key"]);
            echo "</label>
                                                    <div class=\"col-lg-9 col-xl-6\">
                                                       ";
            // line 2325
            if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "demo_mode", [], "any", false, false, false, 2325)) {
                // line 2326
                echo "                                                           <div class=\"alert alert-danger\" role=\"alert\">
                                                            ";
                // line 2327
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Not allowed to change it in demo."]);
                echo "
                                                          </div>
                                                        ";
            } else {
                // line 2330
                echo "                                                            <input class=\"form-control\" type=\"text\" name=\"map[key]\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["google"] ?? null), "map", [], "any", false, false, false, 2330), "key", [], "any", false, false, false, 2330), "html", null, true);
                echo "\" required>
                                                        ";
            }
            // line 2332
            echo "                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit\"></div>
        \t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t</div>
        \t\t\t\t\t</div>
        \t\t\t\t\t<div class=\"col-xl-2\"></div>
        \t\t\t\t</div>
        \t\t\t\t<div class=\"row\">
        \t\t\t\t\t<div class=\"col-xl-4\"></div>
        \t\t\t\t\t<div class=\"col-xl-8\">
                                <div class=\"form-group\">
                                    <button type=\"submit\" class=\"btn btn-primary\">";
            // line 2346
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Save"]);
            echo "</button>
                                </div>
                            </div>
                        </div>
                    ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 2350
($context["this"] ?? null), "param", [], "any", false, false, false, 2350), "page", [], "any", false, false, false, 2350) == "currencies")) {
            // line 2351
            echo "                        <div class=\"kt-section kt-section--first\">
                            <div class=\"kt-section__body\">
                                <div class=\"kt-datatable\"></div>
                            </div>
                        </div>
                    ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 2356
($context["this"] ?? null), "param", [], "any", false, false, false, 2356), "page", [], "any", false, false, false, 2356) == "languages")) {
            // line 2357
            echo "                        <div class=\"kt-section kt-section--first\">
                            <div class=\"kt-section__body\">
                                <div class=\"kt-datatable\"></div>
                            </div>
                        </div>
                    ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 2362
($context["this"] ?? null), "param", [], "any", false, false, false, 2362), "page", [], "any", false, false, false, 2362) == "departments")) {
            // line 2363
            echo "                        <div class=\"kt-section kt-section--first\">
                            <div class=\"kt-section__body\">
                                <div class=\"kt-datatable\"></div>
                            </div>
                        </div>
                    ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 2368
($context["this"] ?? null), "param", [], "any", false, false, false, 2368), "page", [], "any", false, false, false, 2368) == "employees")) {
            // line 2369
            echo "                        <div class=\"kt-section kt-section--first\">
                            <div class=\"kt-section__body\">
                                <div class=\"kt-datatable\"></div>
                            </div>
                        </div>
                    ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 2374
($context["this"] ?? null), "param", [], "any", false, false, false, 2374), "page", [], "any", false, false, false, 2374) == "translate")) {
            // line 2375
            echo "                        <div class=\"kt-section kt-section--first\">
                            <div class=\"kt-section__body\">
                                <table class=\"table table-striped- table-bordered table-hover table-checkable\" id=\"kt_table_1\">
                                \t<thead>
                                \t\t<tr>
                                \t\t\t";
            // line 2380
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 2381
                echo "                                \t\t\t\t<th>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lang"], "name", [], "any", false, false, false, 2381), "html", null, true);
                echo "</th>
                                \t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2383
            echo "                                \t\t</tr>
                                \t</thead>
                                </table>
                            </div>
                        </div>
                    ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 2388
($context["this"] ?? null), "param", [], "any", false, false, false, 2388), "page", [], "any", false, false, false, 2388) == "backup")) {
            // line 2389
            echo "                        <div class=\"kt-section kt-section--first\">
                            <div class=\"kt-section__body\">
                                <div class=\"kt-datatable\"></div>
                            </div>
                        </div>
                    ";
        }
        // line 2395
        echo "                ";
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
        echo "
        \t</div>
        </div>
    </div>
</div>


";
        // line 2402
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('styles'        );
        // line 2403
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 2403), "page", [], "any", false, false, false, 2403) == "company")) {
            // line 2404
            echo "        <style>
            #map_canvas {
              height: 350px;
            }
        </style>
    ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 2409
($context["this"] ?? null), "param", [], "any", false, false, false, 2409), "page", [], "any", false, false, false, 2409) == "translate")) {
            // line 2410
            echo "        <style>
            label.translate {
                display: block;
                width: 100%;
                line-height: 24px;
                min-height: 24px;
            }
        </style>
    ";
        }
        // line 2402
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
        // line 2420
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 2421
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 2421), "page", [], "any", false, false, false, 2421) == "company")) {
            // line 2422
            echo "    <script src=\"";
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/admin/vendors/custom/geocomplete/jquery.geocomplete.js");
            echo "\" type=\"text/javascript\"></script>
    <script src=\"//maps.googleapis.com/maps/api/js?libraries=places&key=";
            // line 2423
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "google", [], "any", false, false, false, 2423), "map", [], "any", false, false, false, 2423), "key", [], "any", false, false, false, 2423), "html", null, true);
            echo "\"></script>
";
        } elseif ((((((((((((((((((((((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 2424
($context["this"] ?? null), "param", [], "any", false, false, false, 2424), "page", [], "any", false, false, false, 2424) == "translate") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 2424), "page", [], "any", false, false, false, 2424) == "backup")) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 2424), "page", [], "any", false, false, false, 2424) == "languages")) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 2424), "page", [], "any", false, false, false, 2424) == "currencies")) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 2424), "page", [], "any", false, false, false, 2424) == "departments")) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 2424), "page", [], "any", false, false, false, 2424) == "branches")) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 2424), "page", [], "any", false, false, false, 2424) == "branches")) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 2424), "page", [], "any", false, false, false, 2424) == "cars")) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 2424), "page", [], "any", false, false, false, 2424) == "cars")) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 2424), "page", [], "any", false, false, false, 2424) == "packaging")) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 2424), "page", [], "any", false, false, false, 2424) == "countries")) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 2424), "page", [], "any", false, false, false, 2424) == "states")) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 2424), "page", [], "any", false, false, false, 2424) == "cities")) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 2424), "page", [], "any", false, false, false, 2424) == "areas")) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 2424), "page", [], "any", false, false, false, 2424) == "fees")) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 2424), "page", [], "any", false, false, false, 2424) == "destination")) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 2424), "page", [], "any", false, false, false, 2424) == "location")) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 2424), "page", [], "any", false, false, false, 2424) == "statuscontainer")) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 2424), "page", [], "any", false, false, false, 2424) == "reasonarrival")) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 2424), "page", [], "any", false, false, false, 2424) == "size")) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 2424), "page", [], "any", false, false, false, 2424) == "labels")) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 2424), "page", [], "any", false, false, false, 2424) == "handler")) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 2424), "page", [], "any", false, false, false, 2424) == "break"))) {
            // line 2425
            echo "    <script src=\"";
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/admin/vendors/custom/datatables/datatables.bundle.js");
            echo "\" type=\"text/javascript\"></script>
";
        }
        // line 2427
        echo "


<script>
\"use strict\";
var KTAppUserListDatatable = function () {
    // variables
    var datatable;
    // init
    var init = function () {
        // init the datatables. Learn more: //keenthemes.com/metronic/?page=docs&section=datatable
        datatable = \$('.kt-datatable').KTDatatable({
            translate: {
                records: {
                    processing: '";
        // line 2441
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please wait"]);
        echo "...',
                    noRecords: '";
        // line 2442
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["No records found"]);
        echo "'
                },
                toolbar: {
                    pagination: {
                        items: {
                            default: {
                                first: '";
        // line 2448
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["First"]);
        echo "',
                                prev: '";
        // line 2449
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Previous"]);
        echo "',
                                next: '";
        // line 2450
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Next"]);
        echo "',
                                last: '";
        // line 2451
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Last"]);
        echo "',
                                more: '";
        // line 2452
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["More pages"]);
        echo "',
                                input: '";
        // line 2453
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Page number"]);
        echo "',
                                select: '";
        // line 2454
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Select page size"]);
        echo "'
                            },

                            //info: \"";
        // line 2457
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Displaying"]);
        echo " ";
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, ($context["start"] ?? null), "js"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, ($context["end"] ?? null), "html", null, true);
        echo " ";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["of"]);
        echo " ";
        echo twig_escape_filter($this->env, ($context["total"] ?? null), "html", null, true);
        echo " ";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["records"]);
        echo "\"
                        }
                    }
                }
            },

            // layout definition
            layout: {
                scroll: false, // enable/disable datatable scroll both horizontal and vertical when needed.
                footer: false, // display/hide footer
            },

            // column sorting
            sortable: true,

            pagination: true,

            search: {
                input: \$('#generalSearch'),
                delay: 400,
            },
            ";
        // line 2478
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 2478), "page", [], "any", false, false, false, 2478) == "languages")) {
            // line 2479
            echo "                // datasource definition
                data: {
                    type: 'remote',
                    source: {
                        read: {
                            url: '";
            // line 2484
            echo url("api/languages");
            echo "',
                        },
                    },
                    pageSize: 10, // display 20 records per page
                    serverPaging: true,
                    serverFiltering: true,
                    serverSorting: true,
                },
                // columns definition
                columns: [
                    {
                        field: 'id',
                        title: '#',
                        sortable: false,
                        width: 20,
                        selector: {
                            class: 'kt-checkbox--solid'
                        },
                        textAlign: 'center',
                    },
                    {
                        field: \"name\",
                        title: \"";
            // line 2506
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Name"]);
            echo "\",
                        autoHide: false,
                        sortable: false,
                        width: 'auto',
                    },
                    {
                        field: \"code\",
                        title: \"";
            // line 2513
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Code"]);
            echo "\",
                        autoHide: false,
                        sortable: false,
                        width: 'auto',
                    },
                    {
                        field: \"is_enabled\",
                        title: \"";
            // line 2520
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Enabled"]);
            echo "\",
                        autoHide: false,
                        sortable: false,
                        width: 'auto',
        \t\t\t\t// callback function support for column rendering
        \t\t\t\ttemplate: function(row) {

        \t\t\t\t\tvar status = {
                                1: {
                                    'title': '";
            // line 2529
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Yes"]);
            echo "',
                                    'class': 'success'
                                },
        \t\t\t\t\t\t0: {
        \t\t\t\t\t\t\t'title': '";
            // line 2533
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["No"]);
            echo "',
        \t\t\t\t\t\t\t'class': 'danger'
        \t\t\t\t\t\t},
        \t\t\t\t\t\t'null': {
        \t\t\t\t\t\t\t'title': '";
            // line 2537
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["No"]);
            echo "',
        \t\t\t\t\t\t\t'class': 'danger'
        \t\t\t\t\t\t},
        \t\t\t\t\t};
                            return '<span class=\"kt-badge kt-badge--' + status[row.is_enabled].class + ' kt-badge--dot\"></span>&nbsp;<span class=\"kt-font-bold kt-font-' + status[row.is_enabled].class + '\">' + status[row.is_enabled].title + '</span>';
        \t\t\t\t}
                    },{
        \t\t\t\tfield: \"is_default\",
        \t\t\t\ttitle: \"";
            // line 2545
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Default"]);
            echo "\",
        \t\t\t\twidth: 'auto',
                        sortable: true,
                        width: 120,
        \t\t\t\t// callback function support for column rendering
        \t\t\t\ttemplate: function(row) {

        \t\t\t\t\tvar status = {
                                1: {
                                    'title': '";
            // line 2554
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Yes"]);
            echo "',
                                    'class': 'success'
                                },
        \t\t\t\t\t\t0: {
        \t\t\t\t\t\t\t'title': '";
            // line 2558
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["No"]);
            echo "',
        \t\t\t\t\t\t\t'class': 'danger'
        \t\t\t\t\t\t},
        \t\t\t\t\t\t'null': {
        \t\t\t\t\t\t\t'title': '";
            // line 2562
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["No"]);
            echo "',
        \t\t\t\t\t\t\t'class': 'danger'
        \t\t\t\t\t\t},
        \t\t\t\t\t};
                            return '<span class=\"kt-badge kt-badge--' + status[row.is_default].class + ' kt-badge--dot\"></span>&nbsp;<span class=\"kt-font-bold kt-font-' + status[row.is_default].class + '\">' + status[row.is_default].title + '</span>';
        \t\t\t\t}
                    },
                    {
                        field: \"Actions\",
                        width: 'auto',
                        title: \"";
            // line 2572
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Actions"]);
            echo "\",
                        sortable: false,
                        autoHide: false,
                        overflow: 'visible',
                        template: function (data) {
                                ";
            // line 2577
            if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "languages", 1 => "u"], "method", false, false, false, 2577) || twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "languages", 1 => "d"], "method", false, false, false, 2577))) {
                // line 2578
                echo "                                    return '' +
                                    '<div class=\"btn-group btn-group\" role=\"group\" aria-label=\"...\">'+
                                        ";
                // line 2580
                if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "languages", 1 => "d"], "method", false, false, false, 2580)) {
                    // line 2581
                    echo "                                        '<a href=\"javascript:void(0);\" class=\"btn btn-danger btn-sm delete_record kt-font-light\" rel=\"'+data.id+'\" data-type=\"languages\"><i class=\"flaticon2-delete\"></i>&nbsp;";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delete"]);
                    echo "</a>'+
                                        ";
                }
                // line 2583
                echo "                                    '</div>';
                                ";
            } else {
                // line 2585
                echo "                                    return '-';
                                ";
            }
            // line 2587
            echo "                        },
                    }
                ]
            ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 2590
($context["this"] ?? null), "param", [], "any", false, false, false, 2590), "page", [], "any", false, false, false, 2590) == "currencies")) {
            // line 2591
            echo "                // datasource definition
                data: {
                    type: 'remote',
                    source: {
                        read: {
                            url: '";
            // line 2596
            echo url("api/currencies");
            echo "',
                        },
                    },
                    pageSize: 10, // display 20 records per page
                    serverPaging: true,
                    serverFiltering: true,
                    serverSorting: true,
                },
                // columns definition
                columns: [
                    {
                        field: 'id',
                        title: '#',
                        sortable: false,
                        width: 20,
                        selector: {
                            class: 'kt-checkbox--solid'
                        },
                        textAlign: 'center',
                    },
                    {
                        field: \"name\",
                        title: \"";
            // line 2618
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Name"]);
            echo "\",
                        autoHide: false,
                        sortable: false,
                        width: 'auto',
                    },
                    {
                        field: \"code\",
                        title: \"";
            // line 2625
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Code"]);
            echo "\",
                        autoHide: false,
                        sortable: false,
                        width: 'auto',
                    },
                    {
                        field: \"is_enabled\",
                        title: \"";
            // line 2632
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Enabled"]);
            echo "\",
                        autoHide: false,
                        sortable: false,
                        width: 'auto',
        \t\t\t\t// callback function support for column rendering
        \t\t\t\ttemplate: function(row) {

        \t\t\t\t\tvar status = {
                                1: {
                                    'title': '";
            // line 2641
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Yes"]);
            echo "',
                                    'class': 'success'
                                },
        \t\t\t\t\t\t0: {
        \t\t\t\t\t\t\t'title': '";
            // line 2645
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["No"]);
            echo "',
        \t\t\t\t\t\t\t'class': 'danger'
        \t\t\t\t\t\t},
        \t\t\t\t\t\t'null': {
        \t\t\t\t\t\t\t'title': '";
            // line 2649
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["No"]);
            echo "',
        \t\t\t\t\t\t\t'class': 'danger'
        \t\t\t\t\t\t},
        \t\t\t\t\t};
                            return '<span class=\"kt-badge kt-badge--' + status[row.is_enabled].class + ' kt-badge--dot\"></span>&nbsp;<span class=\"kt-font-bold kt-font-' + status[row.is_enabled].class + '\">' + status[row.is_enabled].title + '</span>';
        \t\t\t\t}
                    },{
        \t\t\t\tfield: \"is_default\",
        \t\t\t\ttitle: \"";
            // line 2657
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Default"]);
            echo "\",
        \t\t\t\twidth: 'auto',
                        sortable: true,
                        width: 120,
        \t\t\t\t// callback function support for column rendering
        \t\t\t\ttemplate: function(row) {

        \t\t\t\t\tvar status = {
                                1: {
                                    'title': '";
            // line 2666
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Yes"]);
            echo "',
                                    'class': 'success'
                                },
        \t\t\t\t\t\t0: {
        \t\t\t\t\t\t\t'title': '";
            // line 2670
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["No"]);
            echo "',
        \t\t\t\t\t\t\t'class': 'danger'
        \t\t\t\t\t\t},
        \t\t\t\t\t\t'null': {
        \t\t\t\t\t\t\t'title': '";
            // line 2674
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["No"]);
            echo "',
        \t\t\t\t\t\t\t'class': 'danger'
        \t\t\t\t\t\t},
        \t\t\t\t\t};
                            return '<span class=\"kt-badge kt-badge--' + status[row.is_default].class + ' kt-badge--dot\"></span>&nbsp;<span class=\"kt-font-bold kt-font-' + status[row.is_default].class + '\">' + status[row.is_default].title + '</span>';
        \t\t\t\t}
                    },
                    {
                        field: \"Actions\",
                        width: 'auto',
                        title: \"";
            // line 2684
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Actions"]);
            echo "\",
                        sortable: false,
                        autoHide: false,
                        overflow: 'visible',
                        template: function (data) {
                                ";
            // line 2689
            if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "currencies", 1 => "u"], "method", false, false, false, 2689) || twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "currencies", 1 => "d"], "method", false, false, false, 2689))) {
                // line 2690
                echo "                                    return '' +
                                    '<div class=\"btn-group btn-group\" role=\"group\" aria-label=\"...\">'+
                                        ";
                // line 2692
                if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "currencies", 1 => "u"], "method", false, false, false, 2692)) {
                    // line 2693
                    echo "                                        '<a href=\"";
                    echo url("dashboard/settings/currencies");
                    echo "/'+data.id+'/edit\" class=\"btn btn-info btn-sm\"><i class=\"flaticon-edit\"></i>&nbsp;";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Edit"]);
                    echo "</button>'+
                                        ";
                }
                // line 2695
                echo "                                        ";
                if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "currencies", 1 => "d"], "method", false, false, false, 2695)) {
                    // line 2696
                    echo "                                        '<a href=\"javascript:void(0);\" class=\"btn btn-danger btn-sm delete_record kt-font-light\" rel=\"'+data.id+'\" data-type=\"currencies\"><i class=\"flaticon2-delete\"></i>&nbsp;";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delete"]);
                    echo "</a>'+
                                        ";
                }
                // line 2698
                echo "                                    '</div>';
                                ";
            } else {
                // line 2700
                echo "                                    return '-';
                                ";
            }
            // line 2702
            echo "                        },
                    }
                ]
            ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 2705
($context["this"] ?? null), "param", [], "any", false, false, false, 2705), "page", [], "any", false, false, false, 2705) == "departments")) {
            // line 2706
            echo "                // datasource definition
                data: {
                    type: 'remote',
                    source: {
                        read: {
                            url: '";
            // line 2711
            echo url("api/departments");
            echo "',
                        },
                    },
                    pageSize: 10, // display 20 records per page
                    serverPaging: true,
                    serverFiltering: true,
                    serverSorting: true,
                },
                // columns definition
                columns: [
                    {
                        field: 'id',
                        title: '#',
                        sortable: false,
                        width: 20,
                        selector: {
                            class: 'kt-checkbox--solid'
                        },
                        textAlign: 'center',
                    },
                    {
                        field: \"name\",
                        title: \"";
            // line 2733
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Name"]);
            echo "\",
                        autoHide: false,
                        sortable: false,
                        width: 'auto',
                    },
                    {
                        field: \"code\",
                        title: \"";
            // line 2740
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Code"]);
            echo "\",
                        autoHide: false,
                        sortable: false,
                        width: 'auto',
                    },
                    {
                        field: \"Actions\",
                        width: 'auto',
                        title: \"";
            // line 2748
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Actions"]);
            echo "\",
                        sortable: false,
                        autoHide: false,
                        overflow: 'visible',
                        template: function (data) {
                                ";
            // line 2753
            if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "departments", 1 => "u"], "method", false, false, false, 2753) || twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "departments", 1 => "d"], "method", false, false, false, 2753))) {
                // line 2754
                echo "                                    return '' +
                                    '<div class=\"btn-group btn-group\" role=\"group\" aria-label=\"...\">'+
                                        ";
                // line 2756
                if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "departments", 1 => "u"], "method", false, false, false, 2756)) {
                    // line 2757
                    echo "                                        '<a href=\"";
                    echo url("dashboard/settings/departments");
                    echo "/'+data.id+'/edit\" class=\"btn btn-info btn-sm\"><i class=\"flaticon-edit\"></i>&nbsp;";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Edit"]);
                    echo "</button>'+
                                        ";
                }
                // line 2759
                echo "                                        ";
                if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "departments", 1 => "d"], "method", false, false, false, 2759)) {
                    // line 2760
                    echo "                                        '<a href=\"javascript:void(0);\" class=\"btn btn-danger btn-sm delete_record kt-font-light\" rel=\"'+data.id+'\" data-type=\"departments\"><i class=\"flaticon2-delete\"></i>&nbsp;";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delete"]);
                    echo "</a>'+
                                        ";
                }
                // line 2762
                echo "                                    '</div>';
                                ";
            } else {
                // line 2764
                echo "                                    return '-';
                                ";
            }
            // line 2766
            echo "                        },
                    }
                ]
            ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 2769
($context["this"] ?? null), "param", [], "any", false, false, false, 2769), "page", [], "any", false, false, false, 2769) == "branches")) {
            // line 2770
            echo "                // datasource definition
                data: {
                    type: 'remote',
                    source: {
                        read: {
                            url: '";
            // line 2775
            echo url("api/branches");
            echo "',
                        },
                    },
                    pageSize: 10, // display 20 records per page
                    serverPaging: true,
                    serverFiltering: true,
                    serverSorting: true,
                },
                // columns definition
                columns: [
                    {
                        field: 'id',
                        title: '#',
                        sortable: false,
                        width: 20,
                        selector: {
                            class: 'kt-checkbox--solid'
                        },
                        textAlign: 'center',
                    },
                    {
                        field: \"name\",
                        title: \"";
            // line 2797
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Name"]);
            echo "\",
                        autoHide: false,
                        sortable: false,
                        width: 'auto',
                    },
                    {
                        field: \"Actions\",
                        width: 'auto',
                        title: \"";
            // line 2805
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Actions"]);
            echo "\",
                        sortable: false,
                        autoHide: false,
                        overflow: 'visible',
                        template: function (data) {
                                ";
            // line 2810
            if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "branches", 1 => "u"], "method", false, false, false, 2810) || twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "packaging", 1 => "d"], "method", false, false, false, 2810))) {
                // line 2811
                echo "                                    return '' +
                                    '<div class=\"btn-group btn-group\" role=\"group\" aria-label=\"...\">'+
                                        ";
                // line 2813
                if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "branches", 1 => "u"], "method", false, false, false, 2813)) {
                    // line 2814
                    echo "                                        '<a href=\"";
                    echo url("dashboard/settings/branches");
                    echo "/'+data.id+'/edit\" class=\"btn btn-info btn-sm\"><i class=\"flaticon-edit\"></i>&nbsp;";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Edit"]);
                    echo "</button>'+
                                        ";
                }
                // line 2816
                echo "                                        ";
                if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "branches", 1 => "d"], "method", false, false, false, 2816)) {
                    // line 2817
                    echo "                                        '<a href=\"javascript:void(0);\" class=\"btn btn-danger btn-sm delete_record kt-font-light\" rel=\"'+data.id+'\" data-type=\"branches\"><i class=\"flaticon2-delete\"></i>&nbsp;";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delete"]);
                    echo "</a>'+
                                        ";
                }
                // line 2819
                echo "                                    '</div>';
                                ";
            } else {
                // line 2821
                echo "                                    return '-';
                                ";
            }
            // line 2823
            echo "                        },
                    }
                ]
            ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 2826
($context["this"] ?? null), "param", [], "any", false, false, false, 2826), "page", [], "any", false, false, false, 2826) == "destination")) {
            // line 2827
            echo "
                // datasource definition
                data: {
                    type: 'remote',
                    source: {
                        read: {
                            url: '";
            // line 2833
            echo url("api/destination");
            echo "',
                        },
                    },
                    pageSize: 10, // display 20 records per page
                    serverPaging: true,
                    serverFiltering: true,
                    serverSorting: true,
                },
                // columns definition
                columns: [
                    {
                        field: 'id',
                        title: '#',
                        sortable: false,
                        width: 20,
                        selector: {
                            class: 'kt-checkbox--solid'
                        },
                        textAlign: 'center',
                    },
                    {
                        field: \"name\",
                        title: \"";
            // line 2855
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Name"]);
            echo "\",
                        autoHide: false,
                        sortable: false,
                        width: 'auto',
                    },
                    {
                        field: \"Actions\",
                        width: 'auto',
                        title: \"";
            // line 2863
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Actions"]);
            echo "\",
                        sortable: false,
                        autoHide: false,
                        overflow: 'visible',
                        template: function (data) {
                                ";
            // line 2868
            if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "destination", 1 => "u"], "method", false, false, false, 2868)) {
                // line 2869
                echo "                                    return '' +
                                    '<div class=\"btn-group btn-group\" role=\"group\" aria-label=\"...\">'+
                                        ";
                // line 2871
                if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "destination", 1 => "u"], "method", false, false, false, 2871)) {
                    // line 2872
                    echo "                                        '<a href=\"";
                    echo url("dashboard/settings/destination");
                    echo "/'+data.id+'/edit\" class=\"btn btn-info btn-sm\"><i class=\"flaticon-edit\"></i>&nbsp;";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Edit"]);
                    echo "</button>'+
                                        ";
                }
                // line 2874
                echo "                                        ";
                if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "destination", 1 => "d"], "method", false, false, false, 2874)) {
                    // line 2875
                    echo "                                        '<a href=\"javascript:void(0);\" class=\"btn btn-danger btn-sm delete_record kt-font-light\" rel=\"'+data.id+'\" data-type=\"destination\"><i class=\"flaticon2-delete\"></i>&nbsp;";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delete"]);
                    echo "</a>'+
                                        ";
                }
                // line 2877
                echo "                                    '</div>';
                                ";
            } else {
                // line 2879
                echo "                                    return '-';
                                ";
            }
            // line 2881
            echo "                        },
                    }
                ] 
            ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 2884
($context["this"] ?? null), "param", [], "any", false, false, false, 2884), "page", [], "any", false, false, false, 2884) == "location")) {
            // line 2885
            echo "                // datasource definition
                data: {
                    type: 'remote',
                    source: {
                        read: {
                            url: '";
            // line 2890
            echo url("api/location");
            echo "',
                        },
                    },
                    pageSize: 10, // display 20 records per page
                    serverPaging: true,
                    serverFiltering: true,
                    serverSorting: true,
                },
                // columns definition
                columns: [
                    {
                        field: 'id',
                        title: '#',
                        sortable: false,
                        width: 20,
                        selector: {
                            class: 'kt-checkbox--solid'
                        },
                        textAlign: 'center',
                    },
                    {
                        field: \"name\",
                        title: \"";
            // line 2912
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Name"]);
            echo "\",
                        autoHide: false,
                        sortable: false,
                        width: 'auto',
                    },
                    {
                        field: \"Actions\",
                        width: 'auto',
                        title: \"";
            // line 2920
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Actions"]);
            echo "\",
                        sortable: false,
                        autoHide: false,
                        overflow: 'visible',
                        template: function (data) {
                                ";
            // line 2925
            if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "location", 1 => "u"], "method", false, false, false, 2925)) {
                // line 2926
                echo "                                    return '' +
                                    '<div class=\"btn-group btn-group\" role=\"group\" aria-label=\"...\">'+
                                        ";
                // line 2928
                if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "location", 1 => "u"], "method", false, false, false, 2928)) {
                    // line 2929
                    echo "                                        '<a href=\"";
                    echo url("dashboard/settings/location");
                    echo "/'+data.id+'/edit\" class=\"btn btn-info btn-sm\"><i class=\"flaticon-edit\"></i>&nbsp;";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Edit"]);
                    echo "</button>'+
                                        ";
                }
                // line 2931
                echo "                                        ";
                if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "location", 1 => "d"], "method", false, false, false, 2931)) {
                    // line 2932
                    echo "                                        '<a href=\"javascript:void(0);\" class=\"btn btn-danger btn-sm delete_record kt-font-light\" rel=\"'+data.id+'\" data-type=\"location\"><i class=\"flaticon2-delete\"></i>&nbsp;";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delete"]);
                    echo "</a>'+
                                        ";
                }
                // line 2934
                echo "                                    '</div>';
                                ";
            } else {
                // line 2936
                echo "                                    return '-';
                                ";
            }
            // line 2938
            echo "                        },
                    }
                ]
            ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 2941
($context["this"] ?? null), "param", [], "any", false, false, false, 2941), "page", [], "any", false, false, false, 2941) == "statuscontainer")) {
            // line 2942
            echo "                // datasource definition
                data: {
                    type: 'remote',
                    source: {
                        read: {
                            url: '";
            // line 2947
            echo url("api/statuscontainer");
            echo "',
                        },
                    },
                    pageSize: 10, // display 20 records per page
                    serverPaging: true,
                    serverFiltering: true,
                    serverSorting: true,
                },
                // columns definition
                columns: [
                    {
                        field: 'id',
                        title: '#',
                        sortable: false,
                        width: 20,
                        selector: {
                            class: 'kt-checkbox--solid'
                        },
                        textAlign: 'center',
                    },
                    {
                        field: \"name\",
                        title: \"";
            // line 2969
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Name"]);
            echo "\",
                        autoHide: false,
                        sortable: false,
                        width: 'auto',
                    },
                    {
                        field: \"Actions\",
                        width: 'auto',
                        title: \"";
            // line 2977
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Actions"]);
            echo "\",
                        sortable: false,
                        autoHide: false,
                        overflow: 'visible',
                        template: function (data) {
                                ";
            // line 2982
            if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "statuscontainer", 1 => "u"], "method", false, false, false, 2982)) {
                // line 2983
                echo "                                    return '' +
                                    '<div class=\"btn-group btn-group\" role=\"group\" aria-label=\"...\">'+
                                        ";
                // line 2985
                if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "statuscontainer", 1 => "u"], "method", false, false, false, 2985)) {
                    // line 2986
                    echo "                                        '<a href=\"";
                    echo url("dashboard/settings/statuscontainer");
                    echo "/'+data.id+'/edit\" class=\"btn btn-info btn-sm\"><i class=\"flaticon-edit\"></i>&nbsp;";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Edit"]);
                    echo "</button>'+
                                        ";
                }
                // line 2988
                echo "                                        ";
                if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "statuscontainer", 1 => "d"], "method", false, false, false, 2988)) {
                    // line 2989
                    echo "                                        '<a href=\"javascript:void(0);\" class=\"btn btn-danger btn-sm delete_record kt-font-light\" rel=\"'+data.id+'\" data-type=\"statuscontainer\"><i class=\"flaticon2-delete\"></i>&nbsp;";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delete"]);
                    echo "</a>'+
                                        ";
                }
                // line 2991
                echo "                                    '</div>';
                                ";
            } else {
                // line 2993
                echo "                                    return '-';
                                ";
            }
            // line 2995
            echo "                        },
                    }
                ] 
            ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 2998
($context["this"] ?? null), "param", [], "any", false, false, false, 2998), "page", [], "any", false, false, false, 2998) == "reasonarrival")) {
            // line 2999
            echo "                // datasource definition
                data: {
                    type: 'remote',
                    source: {
                        read: {
                            url: '";
            // line 3004
            echo url("api/reasonarrival");
            echo "',
                        },
                    },
                    pageSize: 10, // display 20 records per page
                    serverPaging: true,
                    serverFiltering: true,
                    serverSorting: true,
                },
                // columns definition
                columns: [
                    {
                        field: 'id',
                        title: '#',
                        sortable: false,
                        width: 20,
                        selector: {
                            class: 'kt-checkbox--solid'
                        },
                        textAlign: 'center',
                    },
                    {
                        field: \"name\",
                        title: \"";
            // line 3026
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Name"]);
            echo "\",
                        autoHide: false,
                        sortable: false,
                        width: 'auto',
                    },
                    {
                        field: \"Actions\",
                        width: 'auto',
                        title: \"";
            // line 3034
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Actions"]);
            echo "\",
                        sortable: false,
                        autoHide: false,
                        overflow: 'visible',
                        template: function (data) {
                                ";
            // line 3039
            if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "reasonarrival", 1 => "u"], "method", false, false, false, 3039)) {
                // line 3040
                echo "                                    return '' +
                                    '<div class=\"btn-group btn-group\" role=\"group\" aria-label=\"...\">'+
                                        ";
                // line 3042
                if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "reasonarrival", 1 => "u"], "method", false, false, false, 3042)) {
                    // line 3043
                    echo "                                        '<a href=\"";
                    echo url("dashboard/settings/reasonarrival");
                    echo "/'+data.id+'/edit\" class=\"btn btn-info btn-sm\"><i class=\"flaticon-edit\"></i>&nbsp;";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Edit"]);
                    echo "</button>'+
                                        ";
                }
                // line 3045
                echo "                                        ";
                if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "reasonarrival", 1 => "d"], "method", false, false, false, 3045)) {
                    // line 3046
                    echo "                                        '<a href=\"javascript:void(0);\" class=\"btn btn-danger btn-sm delete_record kt-font-light\" rel=\"'+data.id+'\" data-type=\"reasonarrival\"><i class=\"flaticon2-delete\"></i>&nbsp;";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delete"]);
                    echo "</a>'+
                                        ";
                }
                // line 3048
                echo "                                    '</div>';
                                ";
            } else {
                // line 3050
                echo "                                    return '-';
                                ";
            }
            // line 3052
            echo "                        },
                    }
                ]  
            ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 3055
($context["this"] ?? null), "param", [], "any", false, false, false, 3055), "page", [], "any", false, false, false, 3055) == "size")) {
            // line 3056
            echo "                // datasource definition
                data: {
                    type: 'remote',
                    source: {
                        read: {
                            url: '";
            // line 3061
            echo url("api/size");
            echo "',
                        },
                    },
                    pageSize: 10, // display 20 records per page
                    serverPaging: true,
                    serverFiltering: true,
                    serverSorting: true,
                },
                // columns definition
                columns: [
                    {
                        field: 'id',
                        title: '#',
                        sortable: false,
                        width: 20,
                        selector: {
                            class: 'kt-checkbox--solid'
                        },
                        textAlign: 'center',
                    },
                    {
                        field: \"name\",
                        title: \"";
            // line 3083
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Name"]);
            echo "\",
                        autoHide: false,
                        sortable: false,
                        width: 'auto',
                    },
                    {
                        field: \"Actions\",
                        width: 'auto',
                        title: \"";
            // line 3091
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Actions"]);
            echo "\",
                        sortable: false,
                        autoHide: false,
                        overflow: 'visible',
                        template: function (data) {
                                ";
            // line 3096
            if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "size", 1 => "u"], "method", false, false, false, 3096)) {
                // line 3097
                echo "                                    return '' +
                                    '<div class=\"btn-group btn-group\" role=\"group\" aria-label=\"...\">'+
                                        ";
                // line 3099
                if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "size", 1 => "u"], "method", false, false, false, 3099)) {
                    // line 3100
                    echo "                                        '<a href=\"";
                    echo url("dashboard/settings/size");
                    echo "/'+data.id+'/edit\" class=\"btn btn-info btn-sm\"><i class=\"flaticon-edit\"></i>&nbsp;";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Edit"]);
                    echo "</button>'+
                                        ";
                }
                // line 3102
                echo "                                        ";
                if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "size", 1 => "d"], "method", false, false, false, 3102)) {
                    // line 3103
                    echo "                                        '<a href=\"javascript:void(0);\" class=\"btn btn-danger btn-sm delete_record kt-font-light\" rel=\"'+data.id+'\" data-type=\"size\"><i class=\"flaticon2-delete\"></i>&nbsp;";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delete"]);
                    echo "</a>'+
                                        ";
                }
                // line 3105
                echo "                                    '</div>';
                                ";
            } else {
                // line 3107
                echo "                                    return '-';
                                ";
            }
            // line 3109
            echo "                        },
                    }
                ]          
            ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 3112
($context["this"] ?? null), "param", [], "any", false, false, false, 3112), "page", [], "any", false, false, false, 3112) == "cars")) {
            // line 3113
            echo "                // datasource definition
                data: {
                    type: 'remote',
                    source: {
                        read: {
                            url: '";
            // line 3118
            echo url("api/cars");
            echo "',
                        },
                    },
                    pageSize: 10, // display 20 records per page
                    serverPaging: true,
                    serverFiltering: true,
                    serverSorting: true,
                },
                // columns definition
                columns: [
                    {
                        field: 'id',
                        title: '#',
                        sortable: false,
                        width: 20,
                        selector: {
                            class: 'kt-checkbox--solid'
                        },
                        textAlign: 'center',
                    },
                    // {
                    //     field: \"name\",
                    //     title: \"";
            // line 3140
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Name"]);
            echo "\",
                    //     autoHide: false,
                    //     sortable: false,
                    //     width: 'auto',
                    // },
                    {
                        field: \"license_plate\",
                        title: \"";
            // line 3147
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["License Plate"]);
            echo "\",
                        autoHide: false,
                        sortable: false,
                        width: 'auto',
                    },
                    {
                        field: \"destination\",
                        title: \"";
            // line 3154
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Destination"]);
            echo "\",
                        autoHide: false,
                        sortable: false,
                        width: 100,
                        template: function(row) {
                            return row.destination.name;
                        },
                    },
                    {
                        field: \"transport\",
                        title: \"";
            // line 3164
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Transport Company"]);
            echo "\",
                        autoHide: false,
                        sortable: false,
                        width: 'auto',
                        template: function(row) {
                            return row.transport.name; 
                        },
                    },
                    {
                        field: \"transport_date\",
                        title: \"";
            // line 3174
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Transport Date"]);
            echo "\",
                        autoHide: false,
                        sortable: false,
                        width: 100,
                    },
                    {
                        field: \"Actions\",
                        width: 100,
                        title: \"";
            // line 3182
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Actions"]);
            echo "\",
                        sortable: false,
                        autoHide: false,
                        overflow: 'visible',
                        template: function (data) {
                                ";
            // line 3187
            if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "cars", 1 => "u"], "method", false, false, false, 3187) || twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "packaging", 1 => "d"], "method", false, false, false, 3187))) {
                // line 3188
                echo "                                    return '' +
                                    '<div class=\"btn-group btn-group\" role=\"group\" aria-label=\"...\">'+
                                        ";
                // line 3190
                if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "cars", 1 => "u"], "method", false, false, false, 3190)) {
                    // line 3191
                    echo "                                        '<a href=\"";
                    echo url("dashboard/settings/cars");
                    echo "/'+data.id+'/edit\" class=\"btn btn-info btn-sm btn-icon\" data-placement=\"top\" title=\"";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Edit"]);
                    echo "\"><i class=\"flaticon-edit\"></i>&nbsp;</a>'+
                                        ";
                }
                // line 3193
                echo "                                        ";
                if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "cars", 1 => "d"], "method", false, false, false, 3193)) {
                    // line 3194
                    echo "                                        '<a href=\"javascript:void(0);\" class=\"btn btn-danger btn-sm delete_record kt-font-light btn-icon\" rel=\"'+data.id+'\" data-type=\"cars\" data-placement=\"top\" title=\"";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delete"]);
                    echo "\"><i class=\"flaticon2-delete\"></i>&nbsp;</a>'+
                                        ";
                }
                // line 3196
                echo "                                    '</div>';
                                ";
            } else {
                // line 3198
                echo "                                    return '-';
                                ";
            }
            // line 3200
            echo "                        },
                    }
                ]
            ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 3203
($context["this"] ?? null), "param", [], "any", false, false, false, 3203), "page", [], "any", false, false, false, 3203) == "statuses")) {
            // line 3204
            echo "                // datasource definition
                data: {
                    type: 'remote',
                    source: {
                        read: {
                            url: '";
            // line 3209
            echo url("api/statuses");
            echo "',
                        },
                    },
                    pageSize: 10, // display 20 records per page
                    serverPaging: true,
                    serverFiltering: true,
                    serverSorting: true,
                },
                // columns definition
                columns: [
                    {
                        field: 'id',
                        title: '#',
                        sortable: false,
                        width: 20,
                        selector: {
                            class: 'kt-checkbox--solid'
                        },
                        textAlign: 'center',
                    },
                    {
                        field: \"name\",
                        title: \"";
            // line 3231
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Name"]);
            echo "\",
                        autoHide: false,
                        sortable: false,
                        width: 'auto',
                    },
                    {
                        field: \"Actions\",
                        width: 'auto',
                        title: \"";
            // line 3239
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Actions"]);
            echo "\",
                        sortable: false,
                        autoHide: false,
                        overflow: 'visible',
                        template: function (data) {
                                ";
            // line 3244
            if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "statuses", 1 => "u"], "method", false, false, false, 3244) || twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "statuses", 1 => "d"], "method", false, false, false, 3244))) {
                // line 3245
                echo "                                    return '' +
                                    '<div class=\"btn-group btn-group\" role=\"group\" aria-label=\"...\">'+
                                        ";
                // line 3247
                if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "statuses", 1 => "u"], "method", false, false, false, 3247)) {
                    // line 3248
                    echo "                                        '<a href=\"";
                    echo url("dashboard/settings/statuses");
                    echo "/'+data.id+'/edit/statuses\" class=\"btn btn-info btn-sm\"><i class=\"flaticon-edit\"></i>&nbsp;";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Edit"]);
                    echo "</button>'+
                                        ";
                }
                // line 3250
                echo "                                        ";
                if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "statuses", 1 => "d"], "method", false, false, false, 3250)) {
                    // line 3251
                    echo "                                        '<a href=\"javascript:void(0);\" class=\"btn btn-danger btn-sm delete_record kt-font-light\" rel=\"'+data.id+'\" data-type=\"statuses\"><i class=\"flaticon2-delete\"></i>&nbsp;";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delete"]);
                    echo "</a>'+
                                        ";
                }
                // line 3253
                echo "                                    '</div>';
                                ";
            } else {
                // line 3255
                echo "                                    return '-';
                                ";
            }
            // line 3257
            echo "                        },
                    }
                ]
            ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 3260
($context["this"] ?? null), "param", [], "any", false, false, false, 3260), "page", [], "any", false, false, false, 3260) == "Stockstatuses")) {
            // line 3261
            echo "                // datasource definition
                data: {
                    type: 'remote',
                    source: {
                        read: {
                            url: '";
            // line 3266
            echo url("api/Stockstatuses");
            echo "',
                        },
                    },
                    pageSize: 10, // display 20 records per page
                    serverPaging: true,
                    serverFiltering: true,
                    serverSorting: true,
                },
                // columns definition
                columns: [
                    {
                        field: 'id',
                        title: '#',
                        sortable: false,
                        width: 20,
                        selector: {
                            class: 'kt-checkbox--solid'
                        },
                        textAlign: 'center',
                    },
                    {
                        field: \"name\",
                        title: \"";
            // line 3288
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Name"]);
            echo "\",
                        autoHide: false,
                        sortable: false,
                        width: 'auto',
                    },
                    {
                        field: \"Actions\",
                        width: 'auto',
                        title: \"";
            // line 3296
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Actions"]);
            echo "\",
                        sortable: false,
                        autoHide: false,
                        overflow: 'visible',
                        template: function (data) {
                                ";
            // line 3301
            if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "statuses", 1 => "u"], "method", false, false, false, 3301) || twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "statuses", 1 => "d"], "method", false, false, false, 3301))) {
                // line 3302
                echo "                                    return '' +
                                    '<div class=\"btn-group btn-group\" role=\"group\" aria-label=\"...\">'+
                                        ";
                // line 3304
                if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "statuses", 1 => "u"], "method", false, false, false, 3304)) {
                    // line 3305
                    echo "                                        '<a href=\"";
                    echo url("dashboard/settings/statuses");
                    echo "/'+data.id+'/edit/Stockstatuses\" class=\"btn btn-info btn-sm\"><i class=\"flaticon-edit\"></i>&nbsp;";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Edit"]);
                    echo "</button>'+
                                        ";
                }
                // line 3307
                echo "                                        ";
                if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "statuses", 1 => "d"], "method", false, false, false, 3307)) {
                    // line 3308
                    echo "                                        '<a href=\"javascript:void(0);\" class=\"btn btn-danger btn-sm delete_record kt-font-light\" rel=\"'+data.id+'\" data-type=\"statuses\"><i class=\"flaticon2-delete\"></i>&nbsp;";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delete"]);
                    echo "</a>'+
                                        ";
                }
                // line 3310
                echo "                                    '</div>';
                                ";
            } else {
                // line 3312
                echo "                                    return '-';
                                ";
            }
            // line 3314
            echo "                        },
                    }
                ]
            ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 3317
($context["this"] ?? null), "param", [], "any", false, false, false, 3317), "page", [], "any", false, false, false, 3317) == "Customstatuses")) {
            // line 3318
            echo "                // datasource definition
                data: {
                    type: 'remote',
                    source: {
                        read: {
                            url: '";
            // line 3323
            echo url("api/Customstatuses");
            echo "',
                        },
                    },
                    pageSize: 10, // display 20 records per page
                    serverPaging: true,
                    serverFiltering: true,
                    serverSorting: true,
                },
                // columns definition
                columns: [
                    {
                        field: 'id',
                        title: '#',
                        sortable: false,
                        width: 20,
                        selector: {
                            class: 'kt-checkbox--solid'
                        },
                        textAlign: 'center',
                    },
                    {
                        field: \"name\",
                        title: \"";
            // line 3345
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Name"]);
            echo "\",
                        autoHide: false,
                        sortable: false,
                        width: 'auto',
                    },
                    {
                        field: \"Actions\",
                        width: 'auto',
                        title: \"";
            // line 3353
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Actions"]);
            echo "\",
                        sortable: false,
                        autoHide: false,
                        overflow: 'visible',
                        template: function (data) {
                                ";
            // line 3358
            if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "statuses", 1 => "u"], "method", false, false, false, 3358) || twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "statuses", 1 => "d"], "method", false, false, false, 3358))) {
                // line 3359
                echo "                                    return '' +
                                    '<div class=\"btn-group btn-group\" role=\"group\" aria-label=\"...\">'+
                                        ";
                // line 3361
                if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "statuses", 1 => "u"], "method", false, false, false, 3361)) {
                    // line 3362
                    echo "                                        '<a href=\"";
                    echo url("dashboard/settings/statuses");
                    echo "/'+data.id+'/edit/Customstatuses\" class=\"btn btn-info btn-sm\"><i class=\"flaticon-edit\"></i>&nbsp;";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Edit"]);
                    echo "</button>'+
                                        ";
                }
                // line 3364
                echo "                                        ";
                if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "statuses", 1 => "d"], "method", false, false, false, 3364)) {
                    // line 3365
                    echo "                                        '<a href=\"javascript:void(0);\" class=\"btn btn-danger btn-sm delete_record kt-font-light\" rel=\"'+data.id+'\" data-type=\"statuses\"><i class=\"flaticon2-delete\"></i>&nbsp;";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delete"]);
                    echo "</a>'+
                                        ";
                }
                // line 3367
                echo "                                    '</div>';
                                ";
            } else {
                // line 3369
                echo "                                    return '-';
                                ";
            }
            // line 3371
            echo "                        },
                    }
                ]         
            ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 3374
($context["this"] ?? null), "param", [], "any", false, false, false, 3374), "page", [], "any", false, false, false, 3374) == "treasury")) {
            // line 3375
            echo "                // datasource definition
                data: {
                    type: 'remote',
                    source: {
                        read: {
                            url: '";
            // line 3380
            echo url("api/treasury");
            echo "',
                        },
                    },
                    pageSize: 10, // display 20 records per page
                    serverPaging: true,
                    serverFiltering: true,
                    serverSorting: true,
                },
                // columns definition
                columns: [
                    {
                        field: 'id',
                        title: '#',
                        sortable: false,
                        width: 20,
                        selector: {
                            class: 'kt-checkbox--solid'
                        },
                        textAlign: 'center',
                    },
                    {
                        field: \"name\",
                        title: \"";
            // line 3402
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Name"]);
            echo "\",
                        autoHide: false,
                        sortable: false,
                        width: 'auto',
                        template: function (data) {
                            return '<a href=\"";
            // line 3407
            echo url("dashboard/treasury");
            echo "/' + data.id + '/view\">' + data.name + '</a>';
                        },
                    },
                    {
                        field: \"balance\",
                        title: \"";
            // line 3412
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Balance"]);
            echo "\",
                        autoHide: false,
                        sortable: false,
                        width: 'auto',
                    },
                    {
                        field: \"office\",
                        title: \"";
            // line 3419
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Office"]);
            echo "\",
                        autoHide: false,
                        sortable: false,
                        width: 'auto',
                    },
                    {
                        field: \"Actions\",
                        width: 'auto',
                        title: \"";
            // line 3427
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Actions"]);
            echo "\",
                        sortable: false,
                        autoHide: false,
                        overflow: 'visible',
                        template: function (data) {
                                ";
            // line 3432
            if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "treasury", 1 => "u"], "method", false, false, false, 3432) || twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "treasury", 1 => "d"], "method", false, false, false, 3432))) {
                // line 3433
                echo "                                    return '' +
                                    '<div class=\"btn-group btn-group\" role=\"group\" aria-label=\"...\">'+
                                        ";
                // line 3435
                if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "treasury", 1 => "u"], "method", false, false, false, 3435)) {
                    // line 3436
                    echo "                                        '<a href=\"";
                    echo url("dashboard/settings/treasury");
                    echo "/'+data.id+'/edit\" class=\"btn btn-info btn-sm\"><i class=\"flaticon-edit\"></i>&nbsp;";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Edit"]);
                    echo "</button>'+
                                        ";
                }
                // line 3438
                echo "                                        ";
                if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "treasury", 1 => "d"], "method", false, false, false, 3438)) {
                    // line 3439
                    echo "                                        '<a href=\"javascript:void(0);\" class=\"btn btn-danger btn-sm delete_record kt-font-light\" rel=\"'+data.id+'\" data-type=\"treasury\"><i class=\"flaticon2-delete\"></i>&nbsp;";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delete"]);
                    echo "</a>'+
                                        ";
                }
                // line 3441
                echo "                                    '</div>';
                                ";
            } else {
                // line 3443
                echo "                                    return '-';
                                ";
            }
            // line 3445
            echo "                        },
                    }
                ]
            ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 3448
($context["this"] ?? null), "param", [], "any", false, false, false, 3448), "page", [], "any", false, false, false, 3448) == "categories")) {
            // line 3449
            echo "                // datasource definition
                data: {
                    type: 'remote',
                    source: {
                        read: {
                            url: '";
            // line 3454
            echo url("api/categories");
            echo "',
                        },
                    },
                    pageSize: 10, // display 20 records per page
                    serverPaging: true,
                    serverFiltering: true,
                    serverSorting: true,
                },
                // columns definition
                columns: [
                    {
                        field: 'id',
                        title: '#',
                        sortable: false,
                        width: 20,
                        selector: {
                            class: 'kt-checkbox--solid'
                        },
                        textAlign: 'center',
                    },
                    {
                        field: \"name\",
                        title: \"";
            // line 3476
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Name"]);
            echo "\",
                        autoHide: false,
                        sortable: false,
                        width: 'auto',
                    },
                    {
                        field: \"Actions\",
                        width: 'auto',
                        title: \"";
            // line 3484
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Actions"]);
            echo "\",
                        sortable: false,
                        autoHide: false,
                        overflow: 'visible',
                        template: function (data) {
                                ";
            // line 3489
            if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "category", 1 => "u"], "method", false, false, false, 3489) || twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "category", 1 => "d"], "method", false, false, false, 3489))) {
                // line 3490
                echo "                                    return '' +
                                    '<div class=\"btn-group btn-group\" role=\"group\" aria-label=\"...\">'+
                                        ";
                // line 3492
                if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "category", 1 => "u"], "method", false, false, false, 3492)) {
                    // line 3493
                    echo "                                        '<a href=\"";
                    echo url("dashboard/settings/categories");
                    echo "/'+data.id+'/edit\" class=\"btn btn-info btn-sm\"><i class=\"flaticon-edit\"></i>&nbsp;";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Edit"]);
                    echo "</button>'+
                                        ";
                }
                // line 3495
                echo "                                        ";
                if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "category", 1 => "d"], "method", false, false, false, 3495)) {
                    // line 3496
                    echo "                                        '<a href=\"javascript:void(0);\" class=\"btn btn-danger btn-sm delete_record kt-font-light\" rel=\"'+data.id+'\" data-type=\"categories\"><i class=\"flaticon2-delete\"></i>&nbsp;";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delete"]);
                    echo "</a>'+
                                        ";
                }
                // line 3498
                echo "                                    '</div>';
                                ";
            } else {
                // line 3500
                echo "                                    return '-';
                                ";
            }
            // line 3502
            echo "                        },
                    }
                ]
            ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 3505
($context["this"] ?? null), "param", [], "any", false, false, false, 3505), "page", [], "any", false, false, false, 3505) == "couriers")) {
            // line 3506
            echo "                // datasource definition
                data: {
                    type: 'remote',
                    source: {
                        read: {
                            url: '";
            // line 3511
            echo url("api/couriers");
            echo "',
                        },
                    },
                    pageSize: 10, // display 20 records per page
                    serverPaging: true,
                    serverFiltering: true,
                    serverSorting: true,
                },
                // columns definition
                columns: [
                    {
                        field: 'id',
                        title: '#',
                        sortable: false,
                        width: 20,
                        selector: {
                            class: 'kt-checkbox--solid'
                        },
                        textAlign: 'center',
                    },
                    {
                        field: \"name\",
                        title: \"";
            // line 3533
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Name"]);
            echo "\",
                        autoHide: false,
                        sortable: false,
                        width: 'auto',
                    },
                    {
                        field: \"Actions\",
                        width: 'auto',
                        title: \"";
            // line 3541
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Actions"]);
            echo "\",
                        sortable: false,
                        autoHide: false,
                        overflow: 'visible',
                        template: function (data) {
                                ";
            // line 3546
            if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "couriers", 1 => "u"], "method", false, false, false, 3546) || twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "couriers", 1 => "d"], "method", false, false, false, 3546))) {
                // line 3547
                echo "                                    return '' +
                                    '<div class=\"btn-group btn-group\" role=\"group\" aria-label=\"...\">'+
                                        ";
                // line 3549
                if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "category", 1 => "u"], "method", false, false, false, 3549)) {
                    // line 3550
                    echo "                                        '<a href=\"";
                    echo url("dashboard/settings/couriers");
                    echo "/'+data.id+'/edit\" class=\"btn btn-info btn-sm\"><i class=\"flaticon-edit\"></i>&nbsp;";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Edit"]);
                    echo "</button>'+
                                        ";
                }
                // line 3552
                echo "                                        ";
                if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "couriers", 1 => "d"], "method", false, false, false, 3552)) {
                    // line 3553
                    echo "                                        '<a href=\"javascript:void(0);\" class=\"btn btn-danger btn-sm delete_record kt-font-light\" rel=\"'+data.id+'\" data-type=\"couriers\"><i class=\"flaticon2-delete\"></i>&nbsp;";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delete"]);
                    echo "</a>'+
                                        ";
                }
                // line 3555
                echo "                                    '</div>';
                                ";
            } else {
                // line 3557
                echo "                                    return '-';
                                ";
            }
            // line 3559
            echo "                        },
                    }
                ]
            ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 3562
($context["this"] ?? null), "param", [], "any", false, false, false, 3562), "page", [], "any", false, false, false, 3562) == "deliverytimes")) {
            // line 3563
            echo "                // datasource definition
                data: {
                    type: 'remote',
                    source: {
                        read: {
                            url: '";
            // line 3568
            echo url("api/deliverytimes");
            echo "',
                        },
                    },
                    pageSize: 10, // display 20 records per page
                    serverPaging: true,
                    serverFiltering: true,
                    serverSorting: true,
                },
                // columns definition
                columns: [
                    {
                        field: 'id',
                        title: '#',
                        sortable: false,
                        width: 20,
                        selector: {
                            class: 'kt-checkbox--solid'
                        },
                        textAlign: 'center',
                    },
                    {
                        field: \"name\",
                        title: \"";
            // line 3590
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Name"]);
            echo "\",
                        autoHide: false,
                        sortable: false,
                        width: 'auto',
                    },
                    {
                        field: \"Actions\",
                        width: 'auto',
                        title: \"";
            // line 3598
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Actions"]);
            echo "\",
                        sortable: false,
                        autoHide: false,
                        overflow: 'visible',
                        template: function (data) {
                                ";
            // line 3603
            if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "deliverytimes", 1 => "u"], "method", false, false, false, 3603) || twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "deliverytimes", 1 => "d"], "method", false, false, false, 3603))) {
                // line 3604
                echo "                                    return '' +
                                    '<div class=\"btn-group btn-group\" role=\"group\" aria-label=\"...\">'+
                                        ";
                // line 3606
                if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "category", 1 => "u"], "method", false, false, false, 3606)) {
                    // line 3607
                    echo "                                        '<a href=\"";
                    echo url("dashboard/settings/deliverytimes");
                    echo "/'+data.id+'/edit\" class=\"btn btn-info btn-sm\"><i class=\"flaticon-edit\"></i>&nbsp;";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Edit"]);
                    echo "</button>'+
                                        ";
                }
                // line 3609
                echo "                                        ";
                if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "deliverytimes", 1 => "d"], "method", false, false, false, 3609)) {
                    // line 3610
                    echo "                                        '<a href=\"javascript:void(0);\" class=\"btn btn-danger btn-sm delete_record kt-font-light\" rel=\"'+data.id+'\" data-type=\"deliverytimes\"><i class=\"flaticon2-delete\"></i>&nbsp;";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delete"]);
                    echo "</a>'+
                                        ";
                }
                // line 3612
                echo "                                    '</div>';
                                ";
            } else {
                // line 3614
                echo "                                    return '-';
                                ";
            }
            // line 3616
            echo "                        },
                    }
                ]
            ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 3619
($context["this"] ?? null), "param", [], "any", false, false, false, 3619), "page", [], "any", false, false, false, 3619) == "shipping")) {
            // line 3620
            echo "                // datasource definition
                data: {
                    type: 'remote',
                    source: {
                        read: {
                            url: '";
            // line 3625
            echo url("api/shipping");
            echo "',
                        },
                    },
                    pageSize: 10, // display 20 records per page
                    serverPaging: true,
                    serverFiltering: true,
                    serverSorting: true,
                },
                // columns definition
                columns: [
                    {
                        field: 'id',
                        title: '#',
                        sortable: false,
                        width: 20,
                        selector: {
                            class: 'kt-checkbox--solid'
                        },
                        textAlign: 'center',
                    },
                    {
                        field: \"name\",
                        title: \"";
            // line 3647
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Name"]);
            echo "\",
                        autoHide: false,
                        sortable: false,
                        width: 'auto',
                    },
                    {
                        field: \"Actions\",
                        width: 'auto',
                        title: \"";
            // line 3655
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Actions"]);
            echo "\",
                        sortable: false,
                        autoHide: false,
                        overflow: 'visible',
                        template: function (data) {
                                ";
            // line 3660
            if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "shipping", 1 => "u"], "method", false, false, false, 3660) || twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "shipping", 1 => "d"], "method", false, false, false, 3660))) {
                // line 3661
                echo "                                    return '' +
                                    '<div class=\"btn-group btn-group\" role=\"group\" aria-label=\"...\">'+
                                        ";
                // line 3663
                if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "shipping", 1 => "u"], "method", false, false, false, 3663)) {
                    // line 3664
                    echo "                                        '<a href=\"";
                    echo url("dashboard/settings/shipping");
                    echo "/'+data.id+'/edit\" class=\"btn btn-info btn-sm\"><i class=\"flaticon-edit\"></i>&nbsp;";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Edit"]);
                    echo "</button>'+
                                        ";
                }
                // line 3666
                echo "                                        ";
                if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "shipping", 1 => "d"], "method", false, false, false, 3666)) {
                    // line 3667
                    echo "                                        '<a href=\"javascript:void(0);\" class=\"btn btn-danger btn-sm delete_record kt-font-light\" rel=\"'+data.id+'\" data-type=\"shipping\"><i class=\"flaticon2-delete\"></i>&nbsp;";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delete"]);
                    echo "</a>'+
                                        ";
                }
                // line 3669
                echo "                                    '</div>';
                                ";
            } else {
                // line 3671
                echo "                                    return '-';
                                ";
            }
            // line 3673
            echo "                        },
                    }
                ]
            ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 3676
($context["this"] ?? null), "param", [], "any", false, false, false, 3676), "page", [], "any", false, false, false, 3676) == "labels")) {
            // line 3677
            echo "                // datasource definition
                data: {
                    type: 'remote',
                    source: {
                        read: {
                            url: '";
            // line 3682
            echo url("api/labels");
            echo "',
                        },
                    },
                    pageSize: 10, // display 20 records per page
                    serverPaging: true,
                    serverFiltering: true,
                    serverSorting: true,
                },
                // columns definition
                columns: [
                    {
                        field: 'id',
                        title: '#',
                        sortable: false,
                        width: 20,
                        selector: {
                            class: 'kt-checkbox--solid'
                        },
                        textAlign: 'center',
                    },
                    {
                        field: \"name\",
                        title: \"";
            // line 3704
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Name"]);
            echo "\",
                        autoHide: false,
                        sortable: false,
                        width: 'auto',
                    },
                    {
                        field: \"Actions\",
                        width: 'auto',
                        title: \"";
            // line 3712
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Actions"]);
            echo "\",
                        sortable: false,
                        autoHide: false,
                        overflow: 'visible',
                        template: function (data) {
                                ";
            // line 3717
            if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "labels", 1 => "u"], "method", false, false, false, 3717) || twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "labels", 1 => "d"], "method", false, false, false, 3717))) {
                // line 3718
                echo "                                    return '' +
                                    '<div class=\"btn-group btn-group\" role=\"group\" aria-label=\"...\">'+
                                        ";
                // line 3720
                if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "labels", 1 => "u"], "method", false, false, false, 3720)) {
                    // line 3721
                    echo "                                        '<a href=\"";
                    echo url("dashboard/settings/labels");
                    echo "/'+data.id+'/edit\" class=\"btn btn-info btn-sm\"><i class=\"flaticon-edit\"></i>&nbsp;";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Edit"]);
                    echo "</button>'+
                                        ";
                }
                // line 3723
                echo "                                        ";
                if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "labels", 1 => "d"], "method", false, false, false, 3723)) {
                    // line 3724
                    echo "                                        '<a href=\"javascript:void(0);\" class=\"btn btn-danger btn-sm delete_record kt-font-light\" rel=\"'+data.id+'\" data-type=\"labels\"><i class=\"flaticon2-delete\"></i>&nbsp;";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delete"]);
                    echo "</a>'+
                                        ";
                }
                // line 3726
                echo "                                    '</div>';
                                ";
            } else {
                // line 3728
                echo "                                    return '-';
                                ";
            }
            // line 3730
            echo "                        },
                    }
                ]
            ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 3733
($context["this"] ?? null), "param", [], "any", false, false, false, 3733), "page", [], "any", false, false, false, 3733) == "handler")) {
            // line 3734
            echo "                // datasource definition
                data: {
                    type: 'remote',
                    source: {
                        read: {
                            url: '";
            // line 3739
            echo url("api/handler");
            echo "',
                        },
                    },
                    pageSize: 10, // display 20 records per page
                    serverPaging: true,
                    serverFiltering: true,
                    serverSorting: true,
                },
                // columns definition
                columns: [
                    {
                        field: 'id',
                        title: '#',
                        sortable: false,
                        width: 20,
                        selector: {
                            class: 'kt-checkbox--solid'
                        },
                        textAlign: 'center',
                    },
                    {
                        field: \"name\",
                        title: \"";
            // line 3761
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Name"]);
            echo "\",
                        autoHide: false,
                        sortable: false,
                        width: 'auto',
                    },
                    {
                        field: \"Actions\",
                        width: 'auto',
                        title: \"";
            // line 3769
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Actions"]);
            echo "\",
                        sortable: false,
                        autoHide: false,
                        overflow: 'visible',
                        template: function (data) {
                                ";
            // line 3774
            if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "handler", 1 => "u"], "method", false, false, false, 3774) || twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "handler", 1 => "d"], "method", false, false, false, 3774))) {
                // line 3775
                echo "                                    return '' +
                                    '<div class=\"btn-group btn-group\" role=\"group\" aria-label=\"...\">'+
                                        ";
                // line 3777
                if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "handler", 1 => "u"], "method", false, false, false, 3777)) {
                    // line 3778
                    echo "                                        '<a href=\"";
                    echo url("dashboard/settings/handler");
                    echo "/'+data.id+'/edit\" class=\"btn btn-info btn-sm\"><i class=\"flaticon-edit\"></i>&nbsp;";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Edit"]);
                    echo "</button>'+
                                        ";
                }
                // line 3780
                echo "                                        ";
                if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "handler", 1 => "d"], "method", false, false, false, 3780)) {
                    // line 3781
                    echo "                                        '<a href=\"javascript:void(0);\" class=\"btn btn-danger btn-sm delete_record kt-font-light\" rel=\"'+data.id+'\" data-type=\"handler\"><i class=\"flaticon2-delete\"></i>&nbsp;";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delete"]);
                    echo "</a>'+
                                        ";
                }
                // line 3783
                echo "                                    '</div>';
                                ";
            } else {
                // line 3785
                echo "                                    return '-';
                                ";
            }
            // line 3787
            echo "                        },
                    }
                ]
            ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 3790
($context["this"] ?? null), "param", [], "any", false, false, false, 3790), "page", [], "any", false, false, false, 3790) == "break")) {
            // line 3791
            echo "                // datasource definition
                data: {
                    type: 'remote',
                    source: {
                        read: {
                            url: '";
            // line 3796
            echo url("api/break");
            echo "',
                        },
                    },
                    pageSize: 10, // display 20 records per page
                    serverPaging: true,
                    serverFiltering: true,
                    serverSorting: true,
                },
                // columns definition
                columns: [
                    {
                        field: 'id',
                        title: '#',
                        sortable: false,
                        width: 20,
                        selector: {
                            class: 'kt-checkbox--solid'
                        },
                        textAlign: 'center',
                    },
                    {
                        field: \"name\",
                        title: \"";
            // line 3818
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Name"]);
            echo "\",
                        autoHide: false,
                        sortable: false,
                        width: 'auto',
                    },
                    {
                        field: \"Actions\",
                        width: 'auto',
                        title: \"";
            // line 3826
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Actions"]);
            echo "\",
                        sortable: false,
                        autoHide: false,
                        overflow: 'visible',
                        template: function (data) {
                                ";
            // line 3831
            if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "break", 1 => "u"], "method", false, false, false, 3831) || twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "break", 1 => "d"], "method", false, false, false, 3831))) {
                // line 3832
                echo "                                    return '' +
                                    '<div class=\"btn-group btn-group\" role=\"group\" aria-label=\"...\">'+
                                        ";
                // line 3834
                if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "break", 1 => "u"], "method", false, false, false, 3834)) {
                    // line 3835
                    echo "                                        '<a href=\"";
                    echo url("dashboard/settings/break");
                    echo "/'+data.id+'/edit\" class=\"btn btn-info btn-sm\"><i class=\"flaticon-edit\"></i>&nbsp;";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Edit"]);
                    echo "</button>'+
                                        ";
                }
                // line 3837
                echo "                                        ";
                if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "break", 1 => "d"], "method", false, false, false, 3837)) {
                    // line 3838
                    echo "                                        '<a href=\"javascript:void(0);\" class=\"btn btn-danger btn-sm delete_record kt-font-light\" rel=\"'+data.id+'\" data-type=\"break\"><i class=\"flaticon2-delete\"></i>&nbsp;";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delete"]);
                    echo "</a>'+
                                        ";
                }
                // line 3840
                echo "                                    '</div>';
                                ";
            } else {
                // line 3842
                echo "                                    return '-';
                                ";
            }
            // line 3844
            echo "                        },
                    }
                ]            
            ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 3847
($context["this"] ?? null), "param", [], "any", false, false, false, 3847), "page", [], "any", false, false, false, 3847) == "packaging")) {
            // line 3848
            echo "                // datasource definition
                data: {
                    type: 'remote',
                    source: {
                        read: {
                            url: '";
            // line 3853
            echo url("api/packaging");
            echo "',
                        },
                    },
                    pageSize: 10, // display 20 records per page
                    serverPaging: true,
                    serverFiltering: true,
                    serverSorting: true,
                },
                // columns definition
                columns: [
                    {
                        field: 'id',
                        title: '#',
                        sortable: false,
                        width: 20,
                        selector: {
                            class: 'kt-checkbox--solid'
                        },
                        textAlign: 'center',
                    },
                    {
                        field: \"name\",
                        title: \"";
            // line 3875
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Name"]);
            echo "\",
                        autoHide: false,
                        sortable: false,
                        width: 'auto',
                    },
                    {
                        field: \"Actions\",
                        width: 'auto',
                        title: \"";
            // line 3883
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Actions"]);
            echo "\",
                        sortable: false,
                        autoHide: false,
                        overflow: 'visible',
                        template: function (data) {
                                ";
            // line 3888
            if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "packaging", 1 => "u"], "method", false, false, false, 3888) || twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "packaging", 1 => "d"], "method", false, false, false, 3888))) {
                // line 3889
                echo "                                    return '' +
                                    '<div class=\"btn-group btn-group\" role=\"group\" aria-label=\"...\">'+
                                        ";
                // line 3891
                if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "packaging", 1 => "u"], "method", false, false, false, 3891)) {
                    // line 3892
                    echo "                                        '<a href=\"";
                    echo url("dashboard/settings/packaging");
                    echo "/'+data.id+'/edit\" class=\"btn btn-info btn-sm\"><i class=\"flaticon-edit\"></i>&nbsp;";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Edit"]);
                    echo "</button>'+
                                        ";
                }
                // line 3894
                echo "                                        ";
                if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "packaging", 1 => "d"], "method", false, false, false, 3894)) {
                    // line 3895
                    echo "                                        '<a href=\"javascript:void(0);\" class=\"btn btn-danger btn-sm delete_record kt-font-light\" rel=\"'+data.id+'\" data-type=\"packaging\"><i class=\"flaticon2-delete\"></i>&nbsp;";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delete"]);
                    echo "</a>'+
                                        ";
                }
                // line 3897
                echo "                                    '</div>';
                                ";
            } else {
                // line 3899
                echo "                                    return '-';
                                ";
            }
            // line 3901
            echo "                        },
                    }
                ]
            ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 3904
($context["this"] ?? null), "param", [], "any", false, false, false, 3904), "page", [], "any", false, false, false, 3904) == "countries")) {
            // line 3905
            echo "                // datasource definition
                data: {
                    type: 'remote',
                    source: {
                        read: {
                            url: '";
            // line 3910
            echo url("api/countries");
            echo "',
                        },
                    },
                    pageSize: 10, // display 20 records per page
                    serverPaging: true,
                    serverFiltering: true,
                    serverSorting: true,
                },
                // columns definition
                columns: [
                    {
                        field: 'id',
                        title: '#',
                        sortable: false,
                        width: 20,
                        selector: {
                            class: 'kt-checkbox--solid'
                        },
                        textAlign: 'center',
                    },
                    {
                        field: \"number\",
                        title: \"";
            // line 3932
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["ID"]);
            echo "\",
                        autoHide: false,
                        sortable: false,
                        width: 'auto',
                        template: function (data) {
                            return data.id;
                        },
                    },
                    {
                        field: \"name\",
                        title: \"";
            // line 3942
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Name"]);
            echo "\",
                        autoHide: false,
                        sortable: false,
                        width: 'auto',
                    },
                    {
                        field: \"Actions\",
                        width: 'auto',
                        title: \"";
            // line 3950
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Actions"]);
            echo "\",
                        sortable: false,
                        autoHide: false,
                        overflow: 'visible',
                        template: function (data) {
                                ";
            // line 3955
            if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "countries", 1 => "u"], "method", false, false, false, 3955) || twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "countries", 1 => "d"], "method", false, false, false, 3955))) {
                // line 3956
                echo "                                    return '' +
                                    '<div class=\"btn-group btn-group\" role=\"group\" aria-label=\"...\">'+
                                        ";
                // line 3958
                if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "countries", 1 => "u"], "method", false, false, false, 3958)) {
                    // line 3959
                    echo "                                        '<a href=\"";
                    echo url("dashboard/settings/countries");
                    echo "/'+data.id+'/edit\" class=\"btn btn-info btn-sm\"><i class=\"flaticon-edit\"></i>&nbsp;";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Edit"]);
                    echo "</button>'+
                                        ";
                }
                // line 3961
                echo "                                        ";
                if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "countries", 1 => "d"], "method", false, false, false, 3961)) {
                    // line 3962
                    echo "                                        '<a href=\"javascript:void(0);\" class=\"btn btn-danger btn-sm delete_record kt-font-light\" rel=\"'+data.id+'\" data-type=\"countries\"><i class=\"flaticon2-delete\"></i>&nbsp;";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delete"]);
                    echo "</a>'+
                                        ";
                }
                // line 3964
                echo "                                    '</div>';
                                ";
            } else {
                // line 3966
                echo "                                    return '-';
                                ";
            }
            // line 3968
            echo "                        },
                    }
                ]
            ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 3971
($context["this"] ?? null), "param", [], "any", false, false, false, 3971), "page", [], "any", false, false, false, 3971) == "states")) {
            // line 3972
            echo "                // datasource definition
                data: {
                    type: 'remote',
                    source: {
                        read: {
                            url: '";
            // line 3977
            echo url("api/states");
            echo "',
                        },
                    },
                    pageSize: 10, // display 20 records per page
                    serverPaging: true,
                    serverFiltering: true,
                    serverSorting: true,
                },
                // columns definition
                columns: [
                    {
                        field: 'id',
                        title: '#',
                        sortable: false,
                        width: 20,
                        selector: {
                            class: 'kt-checkbox--solid'
                        },
                        textAlign: 'center',
                    },
                    {
                        field: \"number\",
                        title: \"";
            // line 3999
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["ID"]);
            echo "\",
                        autoHide: false,
                        sortable: false,
                        width: 'auto',
                        template: function (data) {
                            return data.id;
                        },
                    },
                    {
                        field: \"name\",
                        title: \"";
            // line 4009
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Name"]);
            echo "\",
                        autoHide: false,
                        sortable: false,
                        width: 'auto',
                    },
                    {
                        field: \"place\",
                        title: \"";
            // line 4016
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Place"]);
            echo "\",
                        autoHide: false,
                        sortable: false,
                        width: 'auto',
                    },
                    {
                        field: \"Actions\",
                        width: 'auto',
                        title: \"";
            // line 4024
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Actions"]);
            echo "\",
                        sortable: false,
                        autoHide: false,
                        overflow: 'visible',
                        template: function (data) {
                                ";
            // line 4029
            if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "states", 1 => "u"], "method", false, false, false, 4029) || twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "states", 1 => "d"], "method", false, false, false, 4029))) {
                // line 4030
                echo "                                    return '' +
                                    '<div class=\"btn-group btn-group\" role=\"group\" aria-label=\"...\">'+
                                        ";
                // line 4032
                if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "states", 1 => "u"], "method", false, false, false, 4032)) {
                    // line 4033
                    echo "                                        '<a href=\"";
                    echo url("dashboard/settings/states");
                    echo "/'+data.id+'/edit\" class=\"btn btn-info btn-sm\"><i class=\"flaticon-edit\"></i>&nbsp;";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Edit"]);
                    echo "</button>'+
                                        ";
                }
                // line 4035
                echo "                                        ";
                if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "states", 1 => "d"], "method", false, false, false, 4035)) {
                    // line 4036
                    echo "                                        '<a href=\"javascript:void(0);\" class=\"btn btn-danger btn-sm delete_record kt-font-light\" rel=\"'+data.id+'\" data-type=\"states\"><i class=\"flaticon2-delete\"></i>&nbsp;";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delete"]);
                    echo "</a>'+
                                        ";
                }
                // line 4038
                echo "                                    '</div>';
                                ";
            } else {
                // line 4040
                echo "                                    return '-';
                                ";
            }
            // line 4042
            echo "                        },
                    }
                ]
            ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 4045
($context["this"] ?? null), "param", [], "any", false, false, false, 4045), "page", [], "any", false, false, false, 4045) == "cities")) {
            // line 4046
            echo "                // datasource definition
                data: {
                    type: 'remote',
                    source: {
                        read: {
                            url: '";
            // line 4051
            echo url("api/cities");
            echo "',
                        },
                    },
                    pageSize: 10, // display 20 records per page
                    serverPaging: true,
                    serverFiltering: true,
                    serverSorting: true,
                },
                // columns definition
                columns: [
                    {
                        field: 'id',
                        title: '#',
                        sortable: false,
                        width: 20,
                        selector: {
                            class: 'kt-checkbox--solid'
                        },
                        textAlign: 'center',
                    },
                    {
                        field: \"number\",
                        title: \"";
            // line 4073
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["ID"]);
            echo "\",
                        autoHide: false,
                        sortable: false,
                        width: 'auto',
                        template: function (data) {
                            return data.id;
                        },
                    },
                    {
                        field: \"name\",
                        title: \"";
            // line 4083
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Name"]);
            echo "\",
                        autoHide: false,
                        sortable: false,
                        width: 'auto',
                    },
                    {
                        field: \"place\",
                        title: \"";
            // line 4090
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Place"]);
            echo "\",
                        autoHide: false,
                        sortable: false,
                        width: 'auto',
                    },
                    {
                        field: \"Actions\",
                        width: 'auto',
                        title: \"";
            // line 4098
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Actions"]);
            echo "\",
                        sortable: false,
                        autoHide: false,
                        overflow: 'visible',
                        template: function (data) {
                                ";
            // line 4103
            if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "cities", 1 => "u"], "method", false, false, false, 4103) || twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "cities", 1 => "d"], "method", false, false, false, 4103))) {
                // line 4104
                echo "                                    return '' +
                                    '<div class=\"btn-group btn-group\" role=\"group\" aria-label=\"...\">'+
                                        ";
                // line 4106
                if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "cities", 1 => "u"], "method", false, false, false, 4106)) {
                    // line 4107
                    echo "                                        '<a href=\"";
                    echo url("dashboard/settings/cities");
                    echo "/'+data.id+'/edit\" class=\"btn btn-info btn-sm\"><i class=\"flaticon-edit\"></i>&nbsp;";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Edit"]);
                    echo "</button>'+
                                        ";
                }
                // line 4109
                echo "                                        ";
                if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "cities", 1 => "d"], "method", false, false, false, 4109)) {
                    // line 4110
                    echo "                                        '<a href=\"javascript:void(0);\" class=\"btn btn-danger btn-sm delete_record kt-font-light\" rel=\"'+data.id+'\" data-type=\"cities\"><i class=\"flaticon2-delete\"></i>&nbsp;";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delete"]);
                    echo "</a>'+
                                        ";
                }
                // line 4112
                echo "                                    '</div>';
                                ";
            } else {
                // line 4114
                echo "                                    return '-';
                                ";
            }
            // line 4116
            echo "                        },
                    }
                ]
            ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 4119
($context["this"] ?? null), "param", [], "any", false, false, false, 4119), "page", [], "any", false, false, false, 4119) == "areas")) {
            // line 4120
            echo "                // datasource definition
                data: {
                    type: 'remote',
                    source: {
                        read: {
                            url: '";
            // line 4125
            echo url("api/areas");
            echo "',
                        },
                    },
                    pageSize: 10, // display 20 records per page
                    serverPaging: true,
                    serverFiltering: true,
                    serverSorting: true,
                },
                // columns definition
                columns: [
                    {
                        field: 'id',
                        title: '#',
                        sortable: false,
                        width: 20,
                        selector: {
                            class: 'kt-checkbox--solid'
                        },
                        textAlign: 'center',
                    },
                    {
                        field: \"number\",
                        title: \"";
            // line 4147
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["ID"]);
            echo "\",
                        autoHide: false,
                        sortable: false,
                        width: 'auto',
                        template: function (data) {
                            return data.id;
                        },
                    },
                    {
                        field: \"name\",
                        title: \"";
            // line 4157
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Name"]);
            echo "\",
                        autoHide: false,
                        sortable: false,
                        width: 'auto',
                    },
                    {
                        field: \"place\",
                        title: \"";
            // line 4164
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Place"]);
            echo "\",
                        autoHide: false,
                        sortable: false,
                        width: 'auto',
                    },
                    {
                        field: \"Actions\",
                        width: 'auto',
                        title: \"";
            // line 4172
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Actions"]);
            echo "\",
                        sortable: false,
                        autoHide: false,
                        overflow: 'visible',
                        template: function (data) {
                                ";
            // line 4177
            if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "areas", 1 => "u"], "method", false, false, false, 4177) || twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "areas", 1 => "d"], "method", false, false, false, 4177))) {
                // line 4178
                echo "                                    return '' +
                                    '<div class=\"btn-group btn-group\" role=\"group\" aria-label=\"...\">'+
                                        ";
                // line 4180
                if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "areas", 1 => "u"], "method", false, false, false, 4180)) {
                    // line 4181
                    echo "                                        '<a href=\"";
                    echo url("dashboard/settings/areas");
                    echo "/'+data.id+'/edit\" class=\"btn btn-info btn-sm\"><i class=\"flaticon-edit\"></i>&nbsp;";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Edit"]);
                    echo "</button>'+
                                        ";
                }
                // line 4183
                echo "                                        ";
                if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "areas", 1 => "d"], "method", false, false, false, 4183)) {
                    // line 4184
                    echo "                                        '<a href=\"javascript:void(0);\" class=\"btn btn-danger btn-sm delete_record kt-font-light\" rel=\"'+data.id+'\" data-type=\"areas\"><i class=\"flaticon2-delete\"></i>&nbsp;";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delete"]);
                    echo "</a>'+
                                        ";
                }
                // line 4186
                echo "                                    '</div>';
                                ";
            } else {
                // line 4188
                echo "                                    return '-';
                                ";
            }
            // line 4190
            echo "                        },
                    }
                ]
            ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 4193
($context["this"] ?? null), "param", [], "any", false, false, false, 4193), "page", [], "any", false, false, false, 4193) == "fees")) {
            // line 4194
            echo "                // datasource definition
                data: {
                    type: 'remote',
                    source: {
                        read: {
                            url: '";
            // line 4199
            echo url("api/fees");
            echo "',
                        },
                    },
                    pageSize: 10, // display 20 records per page
                    serverPaging: true,
                    serverFiltering: true,
                    serverSorting: true,
                },
                // columns definition
                columns: [
                    {
                        field: 'id',
                        title: '#',
                        sortable: false,
                        width: 20,
                        selector: {
                            class: 'kt-checkbox--solid'
                        },
                        textAlign: 'center',
                    },
                    {
                        field: \"from\",
                        title: \"";
            // line 4221
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["From"]);
            echo "\",
                        autoHide: false,
                        sortable: false,
                        width: 'auto',
                    },
                    {
                        field: \"to\",
                        title: \"";
            // line 4228
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["To"]);
            echo "\",
                        autoHide: false,
                        sortable: false,
                        width: 'auto',
                    },
                    {
                        field: \"Actions\",
                        width: 'auto',
                        title: \"";
            // line 4236
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Actions"]);
            echo "\",
                        sortable: false,
                        autoHide: false,
                        overflow: 'visible',
                        template: function (data) {
                                ";
            // line 4241
            if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "fees", 1 => "u"], "method", false, false, false, 4241) || twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "fees", 1 => "d"], "method", false, false, false, 4241))) {
                // line 4242
                echo "                                    return '' +
                                    '<div class=\"btn-group btn-group\" role=\"group\" aria-label=\"...\">'+
                                        ";
                // line 4244
                if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "fees", 1 => "u"], "method", false, false, false, 4244)) {
                    // line 4245
                    echo "                                        '<a href=\"";
                    echo url("dashboard/settings/fees");
                    echo "/'+data.id+'/edit\" class=\"btn btn-info btn-sm\"><i class=\"flaticon-edit\"></i>&nbsp;";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Edit"]);
                    echo "</button>'+
                                        ";
                }
                // line 4247
                echo "                                        ";
                if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "fees", 1 => "d"], "method", false, false, false, 4247)) {
                    // line 4248
                    echo "                                        '<a href=\"javascript:void(0);\" class=\"btn btn-danger btn-sm delete_record kt-font-light\" rel=\"'+data.id+'\" data-type=\"fees\"><i class=\"flaticon2-delete\"></i>&nbsp;";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delete"]);
                    echo "</a>'+
                                        ";
                }
                // line 4250
                echo "                                    '</div>';
                                ";
            } else {
                // line 4252
                echo "                                    return '-';
                                ";
            }
            // line 4254
            echo "                        },
                    }
                ]
            ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 4257
($context["this"] ?? null), "param", [], "any", false, false, false, 4257), "page", [], "any", false, false, false, 4257) == "employees")) {
            // line 4258
            echo "                // datasource definition
                data: {
                    type: 'remote',
                    source: {
                        read: {
                            url: '";
            // line 4263
            echo url("api/employees");
            echo "',
                        },
                    },
                    pageSize: 10, // display 20 records per page
                    serverPaging: true,
                    serverFiltering: true,
                    serverSorting: true,
                },
                // columns definition
                columns: [
                    {
                        field: 'id',
                        title: '#',
                        sortable: false,
                        width: 20,
                        selector: {
                            class: 'kt-checkbox--solid'
                        },
                        textAlign: 'center',
                    },
                    {
                        field: \"name\",
                        title: \"";
            // line 4285
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Name"]);
            echo "\",
                        autoHide: false,
                        sortable: false,
                        width: 'auto',
                    },
                    {
                        field: \"role\",
                        title: \"";
            // line 4292
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Role"]);
            echo "\",
                        autoHide: false,
                        sortable: false,
                        width: 'auto',
                    },
                    {
                        field: \"groups\",
                        title: \"";
            // line 4299
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Departments"]);
            echo "\",
                        autoHide: false,
                        sortable: false,
                        width: 'auto',
                        template: function (data) {
                            if(data.groups){
                                var i;
                                var text = '-';
                                for (i = 0; i < data.groups.length; i++) {
                                    if(text == '-'){
                                        text = data.groups[i];
                                    }else{
                                        if(i < data.groups.length){
                                            text += ', ';
                                        }
                                        text += data.groups[i];
                                    }
                                }
                                return text;
                            }else{
                                return '-';
                            }
                        },
                    },
                    {
                        field: \"Actions\",
                        width: 'auto',
                        title: \"";
            // line 4326
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Actions"]);
            echo "\",
                        sortable: false,
                        autoHide: false,
                        overflow: 'visible',
                        template: function (data) {
                                ";
            // line 4331
            if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "employees", 1 => "u"], "method", false, false, false, 4331) || twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "employees", 1 => "d"], "method", false, false, false, 4331))) {
                // line 4332
                echo "                                    return '' +
                                    '<div class=\"btn-group btn-group\" role=\"group\" aria-label=\"...\">'+
                                        ";
                // line 4334
                if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "employees", 1 => "u"], "method", false, false, false, 4334)) {
                    // line 4335
                    echo "                                        '<a href=\"";
                    echo url("dashboard/settings/employees");
                    echo "/'+data.id+'/edit\" class=\"btn btn-info btn-sm\"><i class=\"flaticon-edit\"></i>&nbsp;";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Edit"]);
                    echo "</button>'+
                                        ";
                }
                // line 4337
                echo "                                        ";
                if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "employees", 1 => "d"], "method", false, false, false, 4337)) {
                    // line 4338
                    echo "                                        '<a href=\"javascript:void(0);\" class=\"btn btn-danger btn-sm delete_record kt-font-light\" rel=\"'+data.id+'\" data-type=\"employees\"><i class=\"flaticon2-delete\"></i>&nbsp;";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delete"]);
                    echo "</a>'+
                                        ";
                }
                // line 4340
                echo "                                    '</div>';
                                ";
            } else {
                // line 4342
                echo "                                    return '-';
                                ";
            }
            // line 4344
            echo "                        },
                    }
                ]
            ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 4347
($context["this"] ?? null), "param", [], "any", false, false, false, 4347), "page", [], "any", false, false, false, 4347) == "backup")) {
            // line 4348
            echo "                // datasource definition
                data: {
                    type: 'remote',
                    source: {
                        read: {
                            url: '";
            // line 4353
            echo url("api/backups");
            echo "',
                        },
                    },
                    pageSize: 10, // display 20 records per page
                    serverPaging: true,
                    serverFiltering: true,
                    serverSorting: true,
                },
                // columns definition
                columns: [
                    {
                        field: \"fileInfo\",
                        title: \"";
            // line 4365
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Name"]);
            echo "\",
                        autoHide: false,
                        sortable: false,
                        width: 'auto',
                        template: function (data) {
                            return '<a href=\"";
            // line 4370
            echo twig_escape_filter($this->env, twig_replace_filter($this->extensions['System\Twig\Extension']->mediaFilter("app/uploads/panakour-backup"), ["app/media/" => ""]), "html", null, true);
            echo "/' + data.fileInfo.basename + '\" download>' + data.fileInfo.basename + '</a>';
                        },
                    },
                    {
                        field: \"size\",
                        title: \"";
            // line 4375
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Size"]);
            echo "\",
                        autoHide: false,
                        sortable: false,
                        width: 'auto',
                        template: function (data) {
                            return data.size + ' ";
            // line 4380
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["KB"]);
            echo "';
                        },
                    },
                    {
                        field: \"lastModified\",
                        title: \"";
            // line 4385
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Created Date"]);
            echo "\",
                        autoHide: false,
                        sortable: false,
                        width: 'auto',
                    },
                    {
                        field: \"Actions\",
                        width: 'auto',
                        title: \"";
            // line 4393
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Actions"]);
            echo "\",
                        sortable: false,
                        autoHide: false,
                        overflow: 'visible',
                        template: function (data) {
                                ";
            // line 4398
            if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "backups", 1 => "d"], "method", false, false, false, 4398)) {
                // line 4399
                echo "                                    return '' +
                                    '<div class=\"btn-group btn-group\" role=\"group\" aria-label=\"...\">'+
                                        ";
                // line 4401
                if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "backups", 1 => "d"], "method", false, false, false, 4401)) {
                    // line 4402
                    echo "                                        '<a href=\"javascript:void(0);\" class=\"btn btn-danger btn-sm delete_record kt-font-light\" rel=\"'+data.fileInfo.basename+'\" data-type=\"backup\"><i class=\"flaticon2-delete\"></i>&nbsp;";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delete"]);
                    echo "</a>'+
                                        ";
                }
                // line 4404
                echo "                                    '</div>';
                                ";
            } else {
                // line 4406
                echo "                                    return '-';
                                ";
            }
            // line 4408
            echo "                        },
                    }
                ]
            ";
        }
        // line 4412
        echo "        });
    };

    // search
    var search = function () {
        \$('#filter_form select,#filter_form input').each(function(){
            \$(this).on('change', function () {
                datatable.search(\$(this).val().toLowerCase(), \$(this).attr('name'));
            });
        });
        \$('#reset').on('click', function () {
            datatable.destroy();
            \$('#filter_form select,#filter_form input').each(function(){
                \$(this).val('');
            });
            \$('#filter_form select').each(function(){
                \$(this).selectpicker(\"refresh\");
            });
            init();
        });
    };

    // selection
    var selection = function () {
        // init form controls
        //\$('#kt_form_status, #kt_form_type').selectpicker();

        // event handler on check and uncheck on records
        datatable.on('kt-datatable--on-check kt-datatable--on-uncheck kt-datatable--on-layout-updated', function (e) {
            var checkedNodes = datatable.rows('.kt-datatable__row--active').nodes(); // get selected records
            var count = checkedNodes.length; // selected records count

            \$('#kt_subheader_group_selected_rows').html(count);

            if (count > 0) {
                \$('#kt_subheader_search').addClass('kt-hidden');
                \$('#kt_subheader_group_actions').removeClass('kt-hidden');
            } else {
                \$('#kt_subheader_search').removeClass('kt-hidden');
                \$('#kt_subheader_group_actions').addClass('kt-hidden');
            }
        });
    }

    // selected records status update
    var selectedStatusUpdate = function () {
        \$('#kt_subheader_group_actions_status_change').on('click', \"[data-toggle='status-change']\", function () {
            var status = \$(this).find(\".kt-nav__link-text\").html();

            // fetch selected IDs
            var ids = datatable.rows('.kt-datatable__row--active').nodes().find('.kt-checkbox--single > [type=\"checkbox\"]').map(function (i, chk) {
                return \$(chk).val();
            });

            if (ids.length > 0) {
                // learn more: //sweetalert2.github.io/
                swal.fire({
                    buttonsStyling: false,

                    html: \"";
        // line 4471
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Are you sure to update"]);
        echo " \" + ids.length + \" ";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["selected records status to"]);
        echo " \" + status + \" ?\",
                    type: \"info\",

                    confirmButtonText: \"";
        // line 4474
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Yes, update"]);
        echo "!\",
                    confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",

                    showCancelButton: true,
                    cancelButtonText: \"";
        // line 4478
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["No, cancel"]);
        echo "\",
                    cancelButtonClass: \"btn btn-sm btn-bold btn-default\"
                }).then(function (result) {
                    if (result.value) {
                        swal.fire({
                            title: '";
        // line 4483
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Deleted"]);
        echo "!',
                            text: '";
        // line 4484
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Your selected records statuses have been updated"]);
        echo "!',
                            type: 'success',
                            buttonsStyling: false,
                            confirmButtonText: \"";
        // line 4487
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["OK"]);
        echo "\",
                            confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                        })
                        // result.dismiss can be 'cancel', 'overlay',
                        // 'close', and 'timer'
                    } else if (result.dismiss === 'cancel') {
                        swal.fire({
                            title: '";
        // line 4494
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Cancelled"]);
        echo "',
                            text: '";
        // line 4495
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["You selected records statuses have not been updated"]);
        echo "!',
                            type: 'error',
                            buttonsStyling: false,
                            confirmButtonText: \"";
        // line 4498
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["OK"]);
        echo "\",
                            confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                        });
                    }
                });
            }
        });
    }

    // selected records delete
    var selectedDelete = function () {
        \$('#kt_subheader_group_actions_delete_all').on('click', function () {
            // fetch selected IDs
            var selected = [];
            var type    = \$('.delete_record').attr('data-type');
            var ids = datatable.rows('.kt-datatable__row--active').nodes().find('.kt-checkbox--single > [type=\"checkbox\"]').map(function (i, chk) {
                selected[\$(chk).val()] = \$(chk).val();
                return \$(chk).val();
            });

            if (ids.length > 0) {
                // learn more: //sweetalert2.github.io/
                swal.fire({
                    buttonsStyling: false,

                    text: \"";
        // line 4523
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Are you sure to delete"]);
        echo " \" + ids.length + \" ";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["selected records ?"]);
        echo "\",
                    type: \"danger\",

                    confirmButtonText: \"";
        // line 4526
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Yes, delete!"]);
        echo "\",
                    confirmButtonClass: \"btn btn-sm btn-bold btn-danger\",

                    showCancelButton: true,
                    cancelButtonText: '";
        // line 4530
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["No, cancel"]);
        echo "',
                    cancelButtonClass: \"btn btn-sm btn-bold btn-brand\"
                }).then(function (result) {
                    if (result.value) {
                        \$.request('onDelete', {
                            data: {id: selected,type: type},
                            success: function(data) {
                                swal.fire({
                                    title: '";
        // line 4538
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Deleted!"]);
        echo "',
                                    text: '";
        // line 4539
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Your selected records have been deleted! :("]);
        echo "',
                                    type: 'success',
                                    buttonsStyling: false,
                                    confirmButtonText: '";
        // line 4542
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["OK"]);
        echo "',
                                    confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                                });
                                datatable.reload();
                            }
                        });
                        // result.dismiss can be 'cancel', 'overlay',
                        // 'close', and 'timer'
                    } else if (result.dismiss === 'cancel') {
                        swal.fire({
                            title: '";
        // line 4552
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Cancelled"]);
        echo "',
                            text: '";
        // line 4553
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["You selected records have not been deleted! :)"]);
        echo "',
                            type: 'error',
                            buttonsStyling: false,
                            confirmButtonText: '";
        // line 4556
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["OK"]);
        echo "',
                            confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                        });
                    }
                });
            }
        });


        \$('body').on('click','.delete_record',function(){
            var id      = \$(this).attr('rel');
            var type    = \$(this).attr('data-type');
            swal.fire({
                buttonsStyling: false,

                text: \"";
        // line 4571
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Are you sure to delete this item ?"]);
        echo "\",
                type: \"danger\",

                confirmButtonText: \"";
        // line 4574
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Yes, delete!"]);
        echo "\",
                confirmButtonClass: \"btn btn-sm btn-bold btn-danger\",

                showCancelButton: true,
                cancelButtonText: '";
        // line 4578
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["No, cancel"]);
        echo "',
                cancelButtonClass: \"btn btn-sm btn-bold btn-brand\"
            }).then(function (result) {
                if (result.value) {
                    \$.request('onDelete', {
                        data: {id: id, type: type},
                        success: function(data) {

                            swal.fire({
                                title: '";
        // line 4587
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Deleted!"]);
        echo "',
                                text: '";
        // line 4588
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Your selected record has been deleted! :("]);
        echo "',
                                type: 'success',
                                buttonsStyling: false,
                                confirmButtonText: '";
        // line 4591
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["OK"]);
        echo "',
                                confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                            });
                            datatable.reload();
                        }
                    });
                    // result.dismiss can be 'cancel', 'overlay',
                    // 'close', and 'timer'
                } else if (result.dismiss === 'cancel') {
                    swal.fire({
                        title: '";
        // line 4601
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Cancelled"]);
        echo "',
                        text: '";
        // line 4602
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["You selected record has not been deleted! :)"]);
        echo "',
                        type: 'error',
                        buttonsStyling: false,
                        confirmButtonText: '";
        // line 4605
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["OK"]);
        echo "',
                        confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                    });
                }
            });
        });
    }

    var updateTotal = function () {
        datatable.on('kt-datatable--on-layout-updated', function () {
            \$('#kt_subheader_total').html(datatable.getTotalRows() + ' ";
        // line 4615
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Total"]);
        echo "');
        });
    };

    var reload = function () {
        datatable.reload();
    };

    return {
        // public functions
        init: function () {
            init();
            search();
            selection();
            selectedStatusUpdate();
            selectedDelete();
            updateTotal();
        },

        reload: function(){
            reload();
        }
    };
}();
var KTDatatablesExtensions = function() {

\tvar initTable1 = function() {
\t\tvar table = \$('#kt_table_1');

        ";
        // line 4644
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 4644), "page", [], "any", false, false, false, 4644) == "translate")) {
            // line 4645
            echo "    \t\t// begin first table
    \t\ttable.DataTable({
    \t\t\tresponsive: true,
                dom: \"<'row'<'col-md-6' f><'col-md-6 text-right'>>\\n\\t\\t\\t<'row'<'col-md-12'tr>>\\n\\t\\t\\t<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7 dataTables_pager'>>\",
                language: {
                    lengthMenu:     \"";
            // line 4650
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Display"]);
            echo " _MENU_\",
                    emptyTable:     \"";
            // line 4651
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["No data available in table"]);
            echo "\",
                    info:           \"";
            // line 4652
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Showing"]);
            echo " _START_ ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["to"]);
            echo " _END_ ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["of"]);
            echo " _TOTAL_ ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["entries"]);
            echo "\",
                    infoEmpty:      \"";
            // line 4653
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Showing"]);
            echo " 0 ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["to"]);
            echo " 0 ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["of"]);
            echo " 0 ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["entries"]);
            echo "\",
                    loadingRecords: \"";
            // line 4654
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Loading"]);
            echo "...\",
                    processing:     \"";
            // line 4655
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Processing"]);
            echo "...\",
                    search:         \"";
            // line 4656
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Search"]);
            echo "\",
                    infoFiltered:   \"(";
            // line 4657
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["filtered from"]);
            echo " _MAX_ ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["total entries"]);
            echo ")\",
                },
                ajax: {
                    url: '";
            // line 4660
            echo url("api/translatemessages");
            echo "',
                    type: \"POST\",
                },
    \t\t\tdeferRender: true,
    \t\t\tscrollY: '500px',
    \t\t\tscrollCollapse: true,
    \t\t\tscroller: true,
    \t\t\tcolumns: [
        \t\t\t";
            // line 4668
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 4669
                echo "        \t\t\t\t{data: '";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lang"], "name", [], "any", false, false, false, 4669), "html", null, true);
                echo "'},
        \t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 4671
            echo "    \t\t\t],
    \t\t});
        ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 4673
($context["this"] ?? null), "param", [], "any", false, false, false, 4673), "page", [], "any", false, false, false, 4673) == "backup")) {
            // line 4674
            echo "            table.DataTable({
    \t\t\tresponsive: true,
                dom: \"<'row'<'col-md-6'><'col-md-6 text-right'>>\\n\\t\\t\\t<'row'<'col-md-12'tr>>\\n\\t\\t\\t<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7 dataTables_pager'lp>>\",
                buttons: [
                    {extend: 'copy',exportOptions: {columns: [2,3,4,5]}},
                    {extend: 'excel',exportOptions: {columns: [2,3,4,5]}},
                    {extend: 'pdf',exportOptions: {columns: [2,3,4,5]}},
                    {extend: 'print',exportOptions: {columns: [2,3,4,5]}
                }],
                lengthMenu: [5, 10, 25, 50],
                pageLength: 10,
                language: {
                    lengthMenu: \"";
            // line 4686
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Display"]);
            echo " _MENU_\",
                    emptyTable:     \"";
            // line 4687
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["No data available in table"]);
            echo "\",
                    info:           \"";
            // line 4688
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Showing"]);
            echo " _START_ ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["to"]);
            echo " _END_ ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["of"]);
            echo " _TOTAL_ ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["entries"]);
            echo "\",
                    infoEmpty:      \"";
            // line 4689
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Showing"]);
            echo " 0 ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["to"]);
            echo " 0 ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["of"]);
            echo " 0 ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["entries"]);
            echo "\",
                    loadingRecords: \"";
            // line 4690
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Loading"]);
            echo "...\",
                    processing:     \"";
            // line 4691
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Processing"]);
            echo "...\",
                    search:         \"";
            // line 4692
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Search"]);
            echo "\",
                    infoFiltered:   \"(";
            // line 4693
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["filtered from"]);
            echo " _MAX_ ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["total entries"]);
            echo ")\",
                },
                searchDelay: 500,
                processing: true,
                serverSide: true,
                ajax: {
                    url: '";
            // line 4699
            echo url("api/backups");
            echo "',
                    type: \"POST\",
                },
                columns: [
                {
                    data: \"fileInfo\",
                    'orderable':false,
                    'render': function (data, type, full, meta){
                        return '<a href=\"";
            // line 4707
            echo twig_escape_filter($this->env, twig_replace_filter($this->extensions['System\Twig\Extension']->mediaFilter("app/uploads/panakour-backup"), ["app/media/" => ""]), "html", null, true);
            echo "/' + full.fileInfo.basename + '\" download>' + full.fileInfo.basename + '</a>';
                    }
                },
                {
                    data: \"size\",
                    'orderable':false,
                    'render': function (data, type, full, meta){
                        return full.size + ' ";
            // line 4714
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["KB"]);
            echo "';
                    }
                },
                {
                    data: \"lastModified\",
                    'orderable':true
                },
                {
                    data: \"actions\",
                    'orderable':false
                }],
                columnDefs: [{
                   'targets': -1,
                   'searchable':false,
                   'orderable':false,
                   'className': 'dt-body-center',
                   'render': function (data, type, full, meta){
                        return '<div class=\"btn-group m-btn-group\" role=\"group\" aria-label=\"...\"><button class=\"btn btn-danger delete_record\" rel=\"' + full.fileInfo.basename + '\" data-type=\"backup\" ><span><i class=\"la la-times\"></i> <span>";
            // line 4731
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delete"]);
            echo "</span></span></button></div>';
                    }
                }]
            });
        ";
        }
        // line 4736
        echo "




\t};

\treturn {

\t\t//main function to initiate the module
\t\tinit: function() {
\t\t\tinitTable1();
\t\t},

\t};

}();

// Class definition
var KTUserProfile = function () {
\t// Base elements
\tvar avatar;
\tvar offcanvas;

\t// Private functions
\tvar initAside = function () {
\t\t// Mobile offcanvas for mobile mode
\t\toffcanvas = new KTOffcanvas('kt_user_profile_aside', {
            overlay: true,
            baseClass: 'kt-app__aside',
            closeBy: 'kt_user_profile_aside_close',
            toggleBy: 'kt_subheader_mobile_toggle'
        });
        \$('#kt_subheader_mobile_toggle').show();
\t}

\tvar initUserForm = function() {
\t\tavatar = new KTAvatar('kt_user_avatar');
\t}

\treturn {
\t\t// public functions
\t\tinit: function() {
\t\t\tinitAside();
\t\t\tinitUserForm();
\t\t}
\t};
}();

KTUtil.ready(function() {
\tKTUserProfile.init();

    \$( \"#kt_form\" ).validate({
        ignore: \":hidden\",
        invalidHandler: function(event, validator) {
            var alert = \$('#kt-form_msg');
            alert.removeClass('kt-hidden').show();
            KTUtil.scrollTop();
        },
    });

    ";
        // line 4797
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 4797), "page", [], "any", false, false, false, 4797) == "general") || twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 4797), "page", [], "any", false, false, false, 4797)))) {
            // line 4798
            echo "        \$('body').on('changed.bs.select', '#currency', function(e, clickedIndex, newValue, oldValue){
            var selected = \$(e.currentTarget).val();
            if(selected != ''){
                \$.request('onGetCurrency', {
                    data: {id: selected},
                    success: function(data) {
                        if(data.currency.place_symbol_before == true){
                            \$('#place_symbol_before').prop('checked', true);
                        }else {
                            \$('#place_symbol_before').prop('checked', false);
                        }
                        if(data.currency.with_space == true){
                            \$('#with_space').prop('checked', true);
                        }else {
                            \$('#with_space').prop('checked', false);
                        }
                        \$('#decimal_point').val(data.currency.decimal_point);
                        \$('#thousand_separator').val(data.currency.thousand_separator);
                        \$('#initbiz_money_fraction_digits').val(data.currency.initbiz_money_fraction_digits);
                    }
                });
            }
        });
    ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 4821
($context["this"] ?? null), "param", [], "any", false, false, false, 4821), "page", [], "any", false, false, false, 4821) == "company")) {
            // line 4822
            echo "        \$(\"#address\").geocomplete({
            map: \"#map_canvas\",
            mapOptions: {
                zoom: 18
            },
            markerOptions: {
                draggable: true
            },
            details: \".location-complete\",
            ";
            // line 4831
            if (twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "lat", [], "any", false, false, false, 4831)) {
                // line 4832
                echo "                location: [";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "lat", [], "any", false, false, false, 4832), "html", null, true);
                echo ",";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "lng", [], "any", false, false, false, 4832), "html", null, true);
                echo "]
            ";
            }
            // line 4834
            echo "        });
        \$(\"#address\").bind(\"geocode:dragged\", function(event, latLng){
            \$(\"input[name=lat]\").val(latLng.lat());
            \$(\"input[name=lng]\").val(latLng.lng());
            \$(\"#reset\").show();
        });

        var input = document.getElementById('kt_tagify_2');
        new Tagify(input);
    ";
        } elseif ((((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 4843
($context["this"] ?? null), "param", [], "any", false, false, false, 4843), "page", [], "any", false, false, false, 4843) == "languages") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 4843), "page", [], "any", false, false, false, 4843) == "departments")) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 4843), "page", [], "any", false, false, false, 4843) == "employees")) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 4843), "page", [], "any", false, false, false, 4843) == "currencies")) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 4843), "page", [], "any", false, false, false, 4843) == "packaging"))) {
            // line 4844
            echo "        KTAppUserListDatatable.init();
    ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 4845
($context["this"] ?? null), "param", [], "any", false, false, false, 4845), "page", [], "any", false, false, false, 4845) == "sms")) {
            // line 4846
            echo "        \$('body').on('click', '#enable_sms_notification', function(){
            \$('#sms_notification').addClass('kt-hidden');
            if(\$(this).is(':checked')){
                \$('#sms_notification').removeClass('kt-hidden');
            }
        });
        \$('body').on('changed.bs.select', '.gateway', function(e, clickedIndex, newValue, oldValue){
            var selected = \$(e.currentTarget).val();

            if(selected != ''){
                \$('.clickatell').addClass('kt-hidden');
                \$('.smsala').addClass('kt-hidden');
                \$('.twilio').addClass('kt-hidden');
                if(selected == 'clickatell'){
                    \$('.clickatell').removeClass('kt-hidden');
                }else if(selected == 'smsala'){
                    \$('.smsala').removeClass('kt-hidden');
                }else if(selected == 'twilio'){
                    \$('.twilio').removeClass('kt-hidden');
                }
            }
        });
    ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 4868
($context["this"] ?? null), "param", [], "any", false, false, false, 4868), "page", [], "any", false, false, false, 4868) == "payment")) {
            // line 4869
            echo "        \$('body').on('click', '#enable_payment_gateway', function(){
            \$('#payment_gateway').addClass('kt-hidden');
            if(\$(this).is(':checked')){
                \$('#payment_gateway').removeClass('kt-hidden');
            }
        });
        \$('body').on('changed.bs.select', '.gateway', function(e, clickedIndex, newValue, oldValue){
            var selected = \$(e.currentTarget).val();

            if(selected != ''){
                console.log(selected);
                \$('.paystack').addClass('kt-hidden');
                if(selected == 'paystack'){
                    \$('.paystack').removeClass('kt-hidden');
                }
            }
        });
    ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 4886
($context["this"] ?? null), "param", [], "any", false, false, false, 4886), "page", [], "any", false, false, false, 4886) == "notifications")) {
            // line 4887
            echo "        \$('body').on('changed.bs.select', '.provider', function(e, clickedIndex, newValue, oldValue){
            var selected = \$(e.currentTarget).val();
            if(selected != ''){
                if(selected == 'pusher'){
                    \$('.pusher').removeClass('kt-hidden');
                }else{
                    \$('.pusher').addClass('kt-hidden');
                }
            }
        });
        \$('body').on('click', '#enable_live_notification', function(){
            \$('#live_notification').addClass('kt-hidden');
            if(\$(this).is(':checked')){
                \$('#live_notification').removeClass('kt-hidden');
            }
        });

        \$('body').on('changed.bs.select', '.push_provider', function(e, clickedIndex, newValue, oldValue){
            var selected = \$(e.currentTarget).val();
            if(selected != ''){
                if(selected == 'fcm'){
                    \$('.fcm').removeClass('kt-hidden');
                }else{
                    \$('.fcm').addClass('kt-hidden');
                }
            }
        });
        \$('body').on('click', '#enable_push_notification', function(){
            \$('#push_notification').addClass('kt-hidden');
            if(\$(this).is(':checked')){
                \$('#push_notification').removeClass('kt-hidden');
            }
        });

        \$('body').on('click', '.select_departments', function(){
            \$('.show_departments').addClass('kt-hidden');
            if(\$(this).is(':checked')){
                \$('.show_departments').removeClass('kt-hidden');
            }
        });
        \$('body').on('click', '.select_employees', function(){
            \$('.show_employees').addClass('kt-hidden');
            if(\$(this).is(':checked')){
                \$('.show_employees').removeClass('kt-hidden');
            }
        });
    ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 4933
($context["this"] ?? null), "param", [], "any", false, false, false, 4933), "page", [], "any", false, false, false, 4933) == "backup")) {
            // line 4934
            echo "    
        KTAppUserListDatatable.init();

       ";
            // line 4937
            if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "demo_mode", [], "any", false, false, false, 4937)) {
                // line 4938
                echo "         \$('body').on('click', '#database', function(e){
             swal.fire({
                 title: '";
                // line 4940
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Error"]);
                echo "',
                 text: '";
                // line 4941
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["This feature is not allowed in demo"]);
                echo "',
                 type: 'error',
                 buttonsStyling: false,
                 confirmButtonText: '";
                // line 4944
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["OK"]);
                echo "',
                 confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
             });
         });
         \$('body').on('click', '#files', function(e){
             swal.fire({
                 title: '";
                // line 4950
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Error"]);
                echo "',
                 text: '";
                // line 4951
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["This feature is not allowed in demo"]);
                echo "',
                 type: 'error',
                 buttonsStyling: false,
                 confirmButtonText: '";
                // line 4954
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["OK"]);
                echo "',
                 confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
             });
         });
         \$('body').on('click', '#whole', function(e){
             swal.fire({
                 title: '";
                // line 4960
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Error"]);
                echo "',
                 text: '";
                // line 4961
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["This feature is not allowed in demo"]);
                echo "',
                 type: 'error',
                 buttonsStyling: false,
                 confirmButtonText: '";
                // line 4964
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["OK"]);
                echo "',
                 confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
             });
         });
        ";
            } else {
                // line 4969
                echo "          \$('body').on('click', '#database', function(e){
              KTApp.blockPage({
                  overlayColor: '#000000',
                  type: 'v2',
                  state: 'primary',
                  message: '";
                // line 4974
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Processing, please wait"]);
                echo "...'
              });
              e.preventDefault();
               \$.request('onBackup', {
                   data: {type: 'db'},
                   success: function(response, status, xhr, \$form) {
                       console.log(response.result);
                       swal.fire({
                           title: '";
                // line 4982
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Success!"]);
                echo "',
                           text: response.result,
                           type: 'success',
                           buttonsStyling: false,
                           confirmButtonText: '";
                // line 4986
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["OK"]);
                echo "',
                           confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                       });
                       KTAppUserListDatatable.reload();
                       KTApp.unblockPage();
                   }
               });
          });
          \$('body').on('click', '#files', function(e){
          \tKTDatatablesExtensions.init();
              KTApp.blockPage({
                  overlayColor: '#000000',
                  type: 'v2',
                  state: 'primary',
                  message: '";
                // line 5000
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Processing, please wait"]);
                echo "...'
              });
              e.preventDefault();
               \$.request('onBackup', {
                   data: {type: 'files'},
                   success: function(response, status, xhr, \$form) {
                       console.log(response.result);
                       swal.fire({
                           title: '";
                // line 5008
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Success!"]);
                echo "',
                           text: response.result,
                           type: 'success',
                           buttonsStyling: false,
                           confirmButtonText: '";
                // line 5012
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["OK"]);
                echo "',
                           confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                       });
                       KTAppUserListDatatable.reload();
                       KTApp.unblockPage();
                   }
               });
          });
          \$('body').on('click', '#whole', function(e){
              KTApp.blockPage({
                  overlayColor: '#000000',
                  type: 'v2',
                  state: 'primary',
                  message: '";
                // line 5025
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Processing, please wait"]);
                echo "...'
              });
              e.preventDefault();
               \$.request('onBackup', {
                   data: {type: 'whole'},
                   success: function(response, status, xhr, \$form) {
                       console.log(response.result);
                       swal.fire({
                           title: '";
                // line 5033
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Success!"]);
                echo "',
                           text: response.result,
                           type: 'success',
                           buttonsStyling: false,
                           confirmButtonText: '";
                // line 5037
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["OK"]);
                echo "',
                           confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                       });
                       KTAppUserListDatatable.reload();
                       KTApp.unblockPage();
                   }
               });
          });
          window.onbeforeunload = function() {
                return \"Did you save your stuff?\"
          }
        ";
            }
            // line 5049
            echo "    ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 5049), "page", [], "any", false, false, false, 5049) == "fees")) {
            // line 5050
            echo "        \$('.bootstrap-touchspin-vertical-btn').TouchSpin({
            buttondown_class: 'btn btn-secondary',
            buttonup_class: 'btn btn-secondary',
            verticalbuttons: true,
            verticalup: '<i class=\"la la-plus\"></i>',
            verticaldown: '<i class=\"la la-minus\"></i>'
        });
        KTAppUserListDatatable.init();
    ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 5058
($context["this"] ?? null), "param", [], "any", false, false, false, 5058), "page", [], "any", false, false, false, 5058) == "translate")) {
            // line 5059
            echo "        // Activate an inline edit on click of a table cell
        \$('#kt_table_1').on( 'click', 'tbody td .translate', function (e) {
            if(\$(this).find('.inline_edit').length == 0){
                \$(this).html('<input type=\"text\" class=\"form-control inline_edit\" value=\"'+\$(this).html()+'\" />');
                \$('.inline_edit').focus().select();
            }
        });
        \$('#kt_table_1').on('change', '.inline_edit', function(e){
            var element = \$(this);
            var label = element.parent('.translate');
            label.addClass('kt-spinner kt-spinner--right kt-spinner--sm kt-spinner--success');
            var id = label.attr('rel');
            var lang = label.attr('data-language');
             \$.request('onTranslate', {
                 data: {translate: \$(this).val(), lang: lang, id: id},
                 success: function(response, status, xhr, \$form) {
                     label.removeClass('kt-spinner kt-spinner--right kt-spinner--sm kt-spinner--success');
                     element.replaceWith(element.val());
                 }
             });
        });
        \$('#kt_table_1').on('blur', '.inline_edit', function(e){
            var element = \$(this);
            element.replaceWith(element.val());
        });
    \tKTDatatablesExtensions.init();
    ";
        } elseif (((((((((((((((((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 5085
($context["this"] ?? null), "param", [], "any", false, false, false, 5085), "page", [], "any", false, false, false, 5085) == "statuses") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 5085), "page", [], "any", false, false, false, 5085) == "Stockstatuses")) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 5085), "page", [], "any", false, false, false, 5085) == "Customstatuses")) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 5085), "page", [], "any", false, false, false, 5085) == "treasury")) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 5085), "page", [], "any", false, false, false, 5085) == "categories")) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 5085), "page", [], "any", false, false, false, 5085) == "couriers")) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 5085), "page", [], "any", false, false, false, 5085) == "deliverytimes")) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 5085), "page", [], "any", false, false, false, 5085) == "shipping")) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 5085), "page", [], "any", false, false, false, 5085) == "branches")) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 5085), "page", [], "any", false, false, false, 5085) == "cars")) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 5085), "page", [], "any", false, false, false, 5085) == "destination")) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 5085), "page", [], "any", false, false, false, 5085) == "location")) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 5085), "page", [], "any", false, false, false, 5085) == "statuscontainer")) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 5086
($context["this"] ?? null), "param", [], "any", false, false, false, 5086), "page", [], "any", false, false, false, 5086) == "reasonarrival")) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 5086), "page", [], "any", false, false, false, 5086) == "size")) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 5086), "page", [], "any", false, false, false, 5086) == "labels")) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 5086), "page", [], "any", false, false, false, 5086) == "handler")) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 5086), "page", [], "any", false, false, false, 5086) == "break"))) {
            // line 5087
            echo "        KTAppUserListDatatable.init();
    ";
        } elseif (((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 5088
($context["this"] ?? null), "param", [], "any", false, false, false, 5088), "page", [], "any", false, false, false, 5088) == "areas") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 5088), "page", [], "any", false, false, false, 5088) == "cities")) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 5088), "page", [], "any", false, false, false, 5088) == "states")) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 5088), "page", [], "any", false, false, false, 5088) == "countries"))) {
            // line 5089
            echo "        KTAppUserListDatatable.init();
    ";
        }
        // line 5091
        echo "});
</script>
";
        // line 2420
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "/home/splayer/domains/spotlayer.com/public_html/newDemo/themes/spotlayer/pages/dashboard/settings.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  9979 => 2420,  9975 => 5091,  9971 => 5089,  9969 => 5088,  9966 => 5087,  9964 => 5086,  9963 => 5085,  9935 => 5059,  9933 => 5058,  9923 => 5050,  9920 => 5049,  9905 => 5037,  9898 => 5033,  9887 => 5025,  9871 => 5012,  9864 => 5008,  9853 => 5000,  9836 => 4986,  9829 => 4982,  9818 => 4974,  9811 => 4969,  9803 => 4964,  9797 => 4961,  9793 => 4960,  9784 => 4954,  9778 => 4951,  9774 => 4950,  9765 => 4944,  9759 => 4941,  9755 => 4940,  9751 => 4938,  9749 => 4937,  9744 => 4934,  9742 => 4933,  9694 => 4887,  9692 => 4886,  9673 => 4869,  9671 => 4868,  9647 => 4846,  9645 => 4845,  9642 => 4844,  9640 => 4843,  9629 => 4834,  9621 => 4832,  9619 => 4831,  9608 => 4822,  9606 => 4821,  9581 => 4798,  9579 => 4797,  9516 => 4736,  9508 => 4731,  9488 => 4714,  9478 => 4707,  9467 => 4699,  9456 => 4693,  9452 => 4692,  9448 => 4691,  9444 => 4690,  9434 => 4689,  9424 => 4688,  9420 => 4687,  9416 => 4686,  9402 => 4674,  9400 => 4673,  9396 => 4671,  9387 => 4669,  9383 => 4668,  9372 => 4660,  9364 => 4657,  9360 => 4656,  9356 => 4655,  9352 => 4654,  9342 => 4653,  9332 => 4652,  9328 => 4651,  9324 => 4650,  9317 => 4645,  9315 => 4644,  9283 => 4615,  9270 => 4605,  9264 => 4602,  9260 => 4601,  9247 => 4591,  9241 => 4588,  9237 => 4587,  9225 => 4578,  9218 => 4574,  9212 => 4571,  9194 => 4556,  9188 => 4553,  9184 => 4552,  9171 => 4542,  9165 => 4539,  9161 => 4538,  9150 => 4530,  9143 => 4526,  9135 => 4523,  9107 => 4498,  9101 => 4495,  9097 => 4494,  9087 => 4487,  9081 => 4484,  9077 => 4483,  9069 => 4478,  9062 => 4474,  9054 => 4471,  8993 => 4412,  8987 => 4408,  8983 => 4406,  8979 => 4404,  8973 => 4402,  8971 => 4401,  8967 => 4399,  8965 => 4398,  8957 => 4393,  8946 => 4385,  8938 => 4380,  8930 => 4375,  8922 => 4370,  8914 => 4365,  8899 => 4353,  8892 => 4348,  8890 => 4347,  8885 => 4344,  8881 => 4342,  8877 => 4340,  8871 => 4338,  8868 => 4337,  8860 => 4335,  8858 => 4334,  8854 => 4332,  8852 => 4331,  8844 => 4326,  8814 => 4299,  8804 => 4292,  8794 => 4285,  8769 => 4263,  8762 => 4258,  8760 => 4257,  8755 => 4254,  8751 => 4252,  8747 => 4250,  8741 => 4248,  8738 => 4247,  8730 => 4245,  8728 => 4244,  8724 => 4242,  8722 => 4241,  8714 => 4236,  8703 => 4228,  8693 => 4221,  8668 => 4199,  8661 => 4194,  8659 => 4193,  8654 => 4190,  8650 => 4188,  8646 => 4186,  8640 => 4184,  8637 => 4183,  8629 => 4181,  8627 => 4180,  8623 => 4178,  8621 => 4177,  8613 => 4172,  8602 => 4164,  8592 => 4157,  8579 => 4147,  8554 => 4125,  8547 => 4120,  8545 => 4119,  8540 => 4116,  8536 => 4114,  8532 => 4112,  8526 => 4110,  8523 => 4109,  8515 => 4107,  8513 => 4106,  8509 => 4104,  8507 => 4103,  8499 => 4098,  8488 => 4090,  8478 => 4083,  8465 => 4073,  8440 => 4051,  8433 => 4046,  8431 => 4045,  8426 => 4042,  8422 => 4040,  8418 => 4038,  8412 => 4036,  8409 => 4035,  8401 => 4033,  8399 => 4032,  8395 => 4030,  8393 => 4029,  8385 => 4024,  8374 => 4016,  8364 => 4009,  8351 => 3999,  8326 => 3977,  8319 => 3972,  8317 => 3971,  8312 => 3968,  8308 => 3966,  8304 => 3964,  8298 => 3962,  8295 => 3961,  8287 => 3959,  8285 => 3958,  8281 => 3956,  8279 => 3955,  8271 => 3950,  8260 => 3942,  8247 => 3932,  8222 => 3910,  8215 => 3905,  8213 => 3904,  8208 => 3901,  8204 => 3899,  8200 => 3897,  8194 => 3895,  8191 => 3894,  8183 => 3892,  8181 => 3891,  8177 => 3889,  8175 => 3888,  8167 => 3883,  8156 => 3875,  8131 => 3853,  8124 => 3848,  8122 => 3847,  8117 => 3844,  8113 => 3842,  8109 => 3840,  8103 => 3838,  8100 => 3837,  8092 => 3835,  8090 => 3834,  8086 => 3832,  8084 => 3831,  8076 => 3826,  8065 => 3818,  8040 => 3796,  8033 => 3791,  8031 => 3790,  8026 => 3787,  8022 => 3785,  8018 => 3783,  8012 => 3781,  8009 => 3780,  8001 => 3778,  7999 => 3777,  7995 => 3775,  7993 => 3774,  7985 => 3769,  7974 => 3761,  7949 => 3739,  7942 => 3734,  7940 => 3733,  7935 => 3730,  7931 => 3728,  7927 => 3726,  7921 => 3724,  7918 => 3723,  7910 => 3721,  7908 => 3720,  7904 => 3718,  7902 => 3717,  7894 => 3712,  7883 => 3704,  7858 => 3682,  7851 => 3677,  7849 => 3676,  7844 => 3673,  7840 => 3671,  7836 => 3669,  7830 => 3667,  7827 => 3666,  7819 => 3664,  7817 => 3663,  7813 => 3661,  7811 => 3660,  7803 => 3655,  7792 => 3647,  7767 => 3625,  7760 => 3620,  7758 => 3619,  7753 => 3616,  7749 => 3614,  7745 => 3612,  7739 => 3610,  7736 => 3609,  7728 => 3607,  7726 => 3606,  7722 => 3604,  7720 => 3603,  7712 => 3598,  7701 => 3590,  7676 => 3568,  7669 => 3563,  7667 => 3562,  7662 => 3559,  7658 => 3557,  7654 => 3555,  7648 => 3553,  7645 => 3552,  7637 => 3550,  7635 => 3549,  7631 => 3547,  7629 => 3546,  7621 => 3541,  7610 => 3533,  7585 => 3511,  7578 => 3506,  7576 => 3505,  7571 => 3502,  7567 => 3500,  7563 => 3498,  7557 => 3496,  7554 => 3495,  7546 => 3493,  7544 => 3492,  7540 => 3490,  7538 => 3489,  7530 => 3484,  7519 => 3476,  7494 => 3454,  7487 => 3449,  7485 => 3448,  7480 => 3445,  7476 => 3443,  7472 => 3441,  7466 => 3439,  7463 => 3438,  7455 => 3436,  7453 => 3435,  7449 => 3433,  7447 => 3432,  7439 => 3427,  7428 => 3419,  7418 => 3412,  7410 => 3407,  7402 => 3402,  7377 => 3380,  7370 => 3375,  7368 => 3374,  7363 => 3371,  7359 => 3369,  7355 => 3367,  7349 => 3365,  7346 => 3364,  7338 => 3362,  7336 => 3361,  7332 => 3359,  7330 => 3358,  7322 => 3353,  7311 => 3345,  7286 => 3323,  7279 => 3318,  7277 => 3317,  7272 => 3314,  7268 => 3312,  7264 => 3310,  7258 => 3308,  7255 => 3307,  7247 => 3305,  7245 => 3304,  7241 => 3302,  7239 => 3301,  7231 => 3296,  7220 => 3288,  7195 => 3266,  7188 => 3261,  7186 => 3260,  7181 => 3257,  7177 => 3255,  7173 => 3253,  7167 => 3251,  7164 => 3250,  7156 => 3248,  7154 => 3247,  7150 => 3245,  7148 => 3244,  7140 => 3239,  7129 => 3231,  7104 => 3209,  7097 => 3204,  7095 => 3203,  7090 => 3200,  7086 => 3198,  7082 => 3196,  7076 => 3194,  7073 => 3193,  7065 => 3191,  7063 => 3190,  7059 => 3188,  7057 => 3187,  7049 => 3182,  7038 => 3174,  7025 => 3164,  7012 => 3154,  7002 => 3147,  6992 => 3140,  6967 => 3118,  6960 => 3113,  6958 => 3112,  6953 => 3109,  6949 => 3107,  6945 => 3105,  6939 => 3103,  6936 => 3102,  6928 => 3100,  6926 => 3099,  6922 => 3097,  6920 => 3096,  6912 => 3091,  6901 => 3083,  6876 => 3061,  6869 => 3056,  6867 => 3055,  6862 => 3052,  6858 => 3050,  6854 => 3048,  6848 => 3046,  6845 => 3045,  6837 => 3043,  6835 => 3042,  6831 => 3040,  6829 => 3039,  6821 => 3034,  6810 => 3026,  6785 => 3004,  6778 => 2999,  6776 => 2998,  6771 => 2995,  6767 => 2993,  6763 => 2991,  6757 => 2989,  6754 => 2988,  6746 => 2986,  6744 => 2985,  6740 => 2983,  6738 => 2982,  6730 => 2977,  6719 => 2969,  6694 => 2947,  6687 => 2942,  6685 => 2941,  6680 => 2938,  6676 => 2936,  6672 => 2934,  6666 => 2932,  6663 => 2931,  6655 => 2929,  6653 => 2928,  6649 => 2926,  6647 => 2925,  6639 => 2920,  6628 => 2912,  6603 => 2890,  6596 => 2885,  6594 => 2884,  6589 => 2881,  6585 => 2879,  6581 => 2877,  6575 => 2875,  6572 => 2874,  6564 => 2872,  6562 => 2871,  6558 => 2869,  6556 => 2868,  6548 => 2863,  6537 => 2855,  6512 => 2833,  6504 => 2827,  6502 => 2826,  6497 => 2823,  6493 => 2821,  6489 => 2819,  6483 => 2817,  6480 => 2816,  6472 => 2814,  6470 => 2813,  6466 => 2811,  6464 => 2810,  6456 => 2805,  6445 => 2797,  6420 => 2775,  6413 => 2770,  6411 => 2769,  6406 => 2766,  6402 => 2764,  6398 => 2762,  6392 => 2760,  6389 => 2759,  6381 => 2757,  6379 => 2756,  6375 => 2754,  6373 => 2753,  6365 => 2748,  6354 => 2740,  6344 => 2733,  6319 => 2711,  6312 => 2706,  6310 => 2705,  6305 => 2702,  6301 => 2700,  6297 => 2698,  6291 => 2696,  6288 => 2695,  6280 => 2693,  6278 => 2692,  6274 => 2690,  6272 => 2689,  6264 => 2684,  6251 => 2674,  6244 => 2670,  6237 => 2666,  6225 => 2657,  6214 => 2649,  6207 => 2645,  6200 => 2641,  6188 => 2632,  6178 => 2625,  6168 => 2618,  6143 => 2596,  6136 => 2591,  6134 => 2590,  6129 => 2587,  6125 => 2585,  6121 => 2583,  6115 => 2581,  6113 => 2580,  6109 => 2578,  6107 => 2577,  6099 => 2572,  6086 => 2562,  6079 => 2558,  6072 => 2554,  6060 => 2545,  6049 => 2537,  6042 => 2533,  6035 => 2529,  6023 => 2520,  6013 => 2513,  6003 => 2506,  5978 => 2484,  5971 => 2479,  5969 => 2478,  5935 => 2457,  5929 => 2454,  5925 => 2453,  5921 => 2452,  5917 => 2451,  5913 => 2450,  5909 => 2449,  5905 => 2448,  5896 => 2442,  5892 => 2441,  5876 => 2427,  5870 => 2425,  5868 => 2424,  5864 => 2423,  5859 => 2422,  5857 => 2421,  5855 => 2420,  5853 => 2402,  5842 => 2410,  5840 => 2409,  5833 => 2404,  5830 => 2403,  5828 => 2402,  5817 => 2395,  5809 => 2389,  5807 => 2388,  5800 => 2383,  5791 => 2381,  5787 => 2380,  5780 => 2375,  5778 => 2374,  5771 => 2369,  5769 => 2368,  5762 => 2363,  5760 => 2362,  5753 => 2357,  5751 => 2356,  5744 => 2351,  5742 => 2350,  5735 => 2346,  5719 => 2332,  5713 => 2330,  5707 => 2327,  5704 => 2326,  5702 => 2325,  5697 => 2323,  5690 => 2319,  5683 => 2315,  5677 => 2311,  5675 => 2310,  5668 => 2306,  5646 => 2291,  5631 => 2285,  5616 => 2279,  5610 => 2275,  5595 => 2273,  5591 => 2272,  5586 => 2270,  5580 => 2269,  5569 => 2265,  5563 => 2261,  5548 => 2259,  5544 => 2258,  5539 => 2256,  5533 => 2255,  5522 => 2251,  5509 => 2245,  5496 => 2239,  5483 => 2233,  5476 => 2229,  5462 => 2222,  5447 => 2216,  5432 => 2210,  5426 => 2206,  5411 => 2204,  5407 => 2203,  5402 => 2201,  5396 => 2200,  5385 => 2196,  5379 => 2192,  5364 => 2190,  5360 => 2189,  5355 => 2187,  5349 => 2186,  5338 => 2182,  5325 => 2176,  5312 => 2170,  5299 => 2164,  5292 => 2160,  5278 => 2153,  5263 => 2147,  5248 => 2141,  5242 => 2137,  5227 => 2135,  5223 => 2134,  5218 => 2132,  5212 => 2131,  5201 => 2127,  5195 => 2123,  5180 => 2121,  5176 => 2120,  5171 => 2118,  5165 => 2117,  5154 => 2113,  5141 => 2107,  5128 => 2101,  5115 => 2095,  5108 => 2091,  5094 => 2084,  5079 => 2078,  5064 => 2072,  5058 => 2068,  5043 => 2066,  5039 => 2065,  5034 => 2063,  5028 => 2062,  5017 => 2058,  5011 => 2054,  4996 => 2052,  4992 => 2051,  4987 => 2049,  4981 => 2048,  4970 => 2044,  4957 => 2038,  4944 => 2032,  4931 => 2026,  4924 => 2022,  4910 => 2015,  4895 => 2009,  4880 => 2003,  4874 => 1999,  4859 => 1997,  4855 => 1996,  4850 => 1994,  4844 => 1993,  4833 => 1989,  4827 => 1985,  4812 => 1983,  4808 => 1982,  4803 => 1980,  4797 => 1979,  4786 => 1975,  4773 => 1969,  4760 => 1963,  4747 => 1957,  4740 => 1953,  4726 => 1946,  4711 => 1940,  4696 => 1934,  4690 => 1930,  4675 => 1928,  4671 => 1927,  4666 => 1925,  4660 => 1924,  4649 => 1920,  4643 => 1916,  4628 => 1914,  4624 => 1913,  4619 => 1911,  4613 => 1910,  4602 => 1906,  4589 => 1900,  4576 => 1894,  4563 => 1888,  4556 => 1884,  4542 => 1877,  4527 => 1871,  4512 => 1865,  4506 => 1861,  4491 => 1859,  4487 => 1858,  4482 => 1856,  4476 => 1855,  4465 => 1851,  4459 => 1847,  4444 => 1845,  4440 => 1844,  4435 => 1842,  4429 => 1841,  4418 => 1837,  4405 => 1831,  4392 => 1825,  4379 => 1819,  4372 => 1815,  4358 => 1808,  4343 => 1802,  4328 => 1796,  4322 => 1792,  4307 => 1790,  4303 => 1789,  4298 => 1787,  4292 => 1786,  4281 => 1782,  4275 => 1778,  4260 => 1776,  4256 => 1775,  4251 => 1773,  4245 => 1772,  4234 => 1768,  4221 => 1762,  4208 => 1756,  4195 => 1750,  4188 => 1746,  4174 => 1739,  4159 => 1733,  4144 => 1727,  4138 => 1723,  4123 => 1721,  4119 => 1720,  4114 => 1718,  4108 => 1717,  4097 => 1713,  4091 => 1709,  4076 => 1707,  4072 => 1706,  4067 => 1704,  4061 => 1703,  4050 => 1699,  4037 => 1693,  4024 => 1687,  4011 => 1681,  4004 => 1677,  3990 => 1670,  3975 => 1664,  3960 => 1658,  3954 => 1654,  3939 => 1652,  3935 => 1651,  3930 => 1649,  3924 => 1648,  3913 => 1644,  3907 => 1640,  3892 => 1638,  3888 => 1637,  3883 => 1635,  3877 => 1634,  3866 => 1630,  3853 => 1624,  3840 => 1618,  3827 => 1612,  3820 => 1608,  3806 => 1601,  3791 => 1595,  3776 => 1589,  3770 => 1585,  3755 => 1583,  3751 => 1582,  3746 => 1580,  3740 => 1579,  3729 => 1575,  3723 => 1571,  3708 => 1569,  3704 => 1568,  3699 => 1566,  3693 => 1565,  3682 => 1561,  3669 => 1555,  3656 => 1549,  3643 => 1543,  3636 => 1539,  3620 => 1532,  3605 => 1526,  3599 => 1522,  3584 => 1520,  3580 => 1519,  3575 => 1517,  3569 => 1516,  3558 => 1512,  3552 => 1508,  3537 => 1506,  3533 => 1505,  3528 => 1503,  3522 => 1502,  3511 => 1498,  3498 => 1492,  3485 => 1486,  3472 => 1480,  3465 => 1476,  3449 => 1469,  3434 => 1463,  3428 => 1459,  3413 => 1457,  3409 => 1456,  3404 => 1454,  3398 => 1453,  3387 => 1449,  3381 => 1445,  3366 => 1443,  3362 => 1442,  3357 => 1440,  3351 => 1439,  3340 => 1435,  3327 => 1429,  3314 => 1423,  3301 => 1417,  3294 => 1413,  3278 => 1406,  3263 => 1400,  3257 => 1396,  3242 => 1394,  3238 => 1393,  3233 => 1391,  3227 => 1390,  3216 => 1386,  3210 => 1382,  3195 => 1380,  3191 => 1379,  3186 => 1377,  3180 => 1376,  3169 => 1372,  3156 => 1366,  3143 => 1360,  3130 => 1354,  3123 => 1350,  3109 => 1343,  3094 => 1337,  3079 => 1331,  3073 => 1327,  3058 => 1325,  3054 => 1324,  3049 => 1322,  3043 => 1321,  3032 => 1317,  3026 => 1313,  3011 => 1311,  3007 => 1310,  3002 => 1308,  2996 => 1307,  2985 => 1303,  2972 => 1297,  2959 => 1291,  2946 => 1285,  2939 => 1281,  2923 => 1274,  2908 => 1268,  2902 => 1264,  2887 => 1262,  2883 => 1261,  2878 => 1259,  2872 => 1258,  2861 => 1254,  2855 => 1250,  2840 => 1248,  2836 => 1247,  2831 => 1245,  2825 => 1244,  2814 => 1240,  2801 => 1234,  2788 => 1228,  2775 => 1222,  2768 => 1218,  2762 => 1215,  2749 => 1204,  2743 => 1202,  2737 => 1199,  2734 => 1198,  2732 => 1197,  2727 => 1195,  2722 => 1192,  2716 => 1190,  2710 => 1187,  2707 => 1186,  2705 => 1185,  2700 => 1183,  2693 => 1181,  2684 => 1177,  2677 => 1173,  2670 => 1171,  2657 => 1165,  2650 => 1161,  2644 => 1158,  2633 => 1149,  2625 => 1146,  2619 => 1145,  2613 => 1144,  2607 => 1143,  2601 => 1142,  2595 => 1141,  2589 => 1140,  2583 => 1139,  2579 => 1137,  2573 => 1134,  2570 => 1133,  2568 => 1132,  2563 => 1130,  2558 => 1127,  2552 => 1125,  2546 => 1122,  2543 => 1121,  2541 => 1120,  2536 => 1118,  2531 => 1115,  2525 => 1113,  2519 => 1110,  2516 => 1109,  2514 => 1108,  2509 => 1106,  2504 => 1103,  2498 => 1101,  2492 => 1098,  2489 => 1097,  2487 => 1096,  2482 => 1094,  2475 => 1092,  2466 => 1088,  2459 => 1084,  2452 => 1082,  2439 => 1076,  2432 => 1072,  2426 => 1069,  2420 => 1065,  2418 => 1064,  2411 => 1060,  2394 => 1045,  2388 => 1043,  2382 => 1040,  2379 => 1039,  2377 => 1038,  2372 => 1036,  2367 => 1033,  2361 => 1031,  2355 => 1028,  2352 => 1027,  2350 => 1026,  2345 => 1024,  2336 => 1018,  2326 => 1013,  2317 => 1009,  2310 => 1005,  2303 => 1003,  2290 => 997,  2283 => 993,  2277 => 990,  2271 => 986,  2269 => 985,  2262 => 981,  2245 => 967,  2240 => 965,  2230 => 960,  2224 => 959,  2217 => 955,  2207 => 950,  2201 => 949,  2194 => 945,  2187 => 941,  2182 => 939,  2175 => 935,  2170 => 933,  2163 => 931,  2156 => 927,  2151 => 925,  2144 => 923,  2137 => 919,  2132 => 917,  2125 => 913,  2120 => 911,  2113 => 909,  2104 => 905,  2098 => 904,  2092 => 903,  2085 => 899,  2078 => 897,  2065 => 891,  2058 => 887,  2052 => 884,  2046 => 880,  2044 => 879,  2037 => 874,  2035 => 873,  2028 => 868,  2026 => 867,  2019 => 862,  2017 => 861,  2010 => 856,  2008 => 855,  2001 => 850,  1999 => 849,  1992 => 844,  1990 => 843,  1983 => 838,  1981 => 837,  1974 => 832,  1972 => 831,  1965 => 826,  1963 => 825,  1956 => 820,  1954 => 819,  1947 => 814,  1945 => 813,  1938 => 808,  1936 => 807,  1929 => 802,  1927 => 801,  1920 => 796,  1918 => 795,  1911 => 790,  1909 => 789,  1902 => 784,  1900 => 783,  1893 => 778,  1891 => 777,  1884 => 772,  1882 => 771,  1875 => 766,  1873 => 765,  1866 => 760,  1864 => 759,  1857 => 754,  1855 => 753,  1848 => 748,  1846 => 747,  1839 => 742,  1837 => 741,  1830 => 737,  1812 => 722,  1808 => 721,  1802 => 718,  1798 => 717,  1790 => 712,  1786 => 711,  1778 => 706,  1767 => 698,  1758 => 696,  1750 => 695,  1742 => 694,  1734 => 693,  1728 => 690,  1721 => 685,  1706 => 683,  1702 => 682,  1696 => 679,  1691 => 676,  1676 => 674,  1672 => 673,  1666 => 670,  1657 => 664,  1653 => 663,  1649 => 662,  1643 => 659,  1639 => 658,  1630 => 652,  1626 => 651,  1622 => 650,  1616 => 647,  1612 => 646,  1604 => 641,  1597 => 637,  1591 => 633,  1589 => 632,  1574 => 622,  1569 => 620,  1555 => 609,  1537 => 594,  1534 => 593,  1528 => 591,  1526 => 590,  1521 => 589,  1515 => 587,  1513 => 586,  1508 => 584,  1502 => 581,  1499 => 580,  1493 => 578,  1491 => 577,  1486 => 576,  1480 => 574,  1478 => 573,  1473 => 571,  1465 => 566,  1462 => 565,  1456 => 563,  1454 => 562,  1449 => 561,  1443 => 559,  1441 => 558,  1436 => 556,  1430 => 553,  1427 => 552,  1421 => 550,  1419 => 549,  1414 => 548,  1408 => 546,  1406 => 545,  1401 => 543,  1393 => 538,  1381 => 529,  1375 => 526,  1368 => 522,  1362 => 519,  1354 => 514,  1347 => 510,  1341 => 506,  1339 => 505,  1332 => 501,  1323 => 494,  1313 => 488,  1310 => 487,  1305 => 486,  1302 => 485,  1297 => 484,  1295 => 483,  1290 => 481,  1282 => 477,  1279 => 476,  1274 => 475,  1271 => 474,  1266 => 473,  1264 => 472,  1259 => 470,  1251 => 466,  1248 => 465,  1243 => 464,  1240 => 463,  1235 => 462,  1233 => 461,  1228 => 459,  1223 => 456,  1214 => 450,  1208 => 447,  1202 => 444,  1195 => 440,  1189 => 437,  1183 => 434,  1176 => 430,  1170 => 427,  1163 => 423,  1158 => 420,  1156 => 419,  1144 => 412,  1139 => 410,  1130 => 406,  1125 => 404,  1116 => 400,  1111 => 398,  1102 => 394,  1097 => 392,  1088 => 388,  1083 => 386,  1076 => 382,  1070 => 379,  1063 => 375,  1059 => 374,  1053 => 373,  1048 => 371,  1040 => 366,  1035 => 364,  1028 => 360,  1023 => 358,  1016 => 354,  1011 => 352,  1001 => 347,  994 => 343,  984 => 338,  977 => 334,  967 => 329,  960 => 325,  953 => 321,  948 => 319,  941 => 315,  934 => 313,  927 => 309,  920 => 305,  914 => 304,  909 => 302,  902 => 298,  897 => 296,  890 => 292,  885 => 290,  878 => 286,  873 => 284,  867 => 281,  861 => 277,  859 => 276,  852 => 272,  836 => 258,  830 => 256,  828 => 255,  820 => 254,  813 => 249,  807 => 247,  805 => 246,  797 => 245,  790 => 241,  781 => 234,  775 => 232,  773 => 231,  765 => 230,  758 => 225,  752 => 223,  750 => 222,  742 => 221,  735 => 217,  718 => 207,  705 => 201,  698 => 197,  688 => 189,  682 => 187,  680 => 186,  670 => 185,  663 => 180,  657 => 178,  655 => 177,  645 => 176,  638 => 171,  632 => 169,  630 => 168,  620 => 167,  613 => 163,  605 => 158,  600 => 156,  593 => 152,  589 => 151,  584 => 149,  577 => 145,  573 => 144,  568 => 142,  554 => 135,  541 => 129,  531 => 121,  516 => 119,  512 => 118,  505 => 114,  493 => 109,  485 => 108,  477 => 107,  469 => 106,  462 => 102,  450 => 97,  442 => 96,  434 => 95,  426 => 94,  418 => 93,  410 => 92,  402 => 91,  394 => 90,  386 => 89,  378 => 88,  370 => 87,  362 => 86,  354 => 85,  346 => 84,  338 => 83,  330 => 82,  322 => 81,  314 => 80,  306 => 79,  298 => 78,  290 => 77,  282 => 76,  274 => 75,  266 => 74,  260 => 73,  252 => 72,  244 => 71,  236 => 70,  228 => 69,  220 => 68,  212 => 67,  204 => 66,  196 => 65,  188 => 64,  180 => 63,  172 => 62,  164 => 61,  156 => 60,  148 => 59,  140 => 58,  133 => 54,  127 => 50,  112 => 48,  108 => 47,  101 => 43,  95 => 40,  89 => 36,  87 => 35,  79 => 30,  71 => 25,  62 => 19,  52 => 11,  48 => 10,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"kt-grid kt-grid--desktop kt-grid--ver kt-grid--ver-desktop kt-app\">

    <!--Begin:: App Aside Mobile Toggle-->
    <button class=\"kt-app__aside-close\" id=\"kt_user_profile_aside_close\">
        <i class=\"la la-close\"></i>
    </button>
    <!--End:: App Aside Mobile Toggle-->

    <!-- begin:: Aside -->
    {% partial 'settingsmenu' %}
    <!-- end:: Aside -->
    <!--End::Aside-->

    <!--Begin:: Inbox List-->
    <div class=\"kt-grid__item kt-grid__item--fluid    kt-portlet    kt-inbox__list kt-inbox__list--shown\" id=\"kt_inbox_list\">
        <div class=\"kt-portlet__head\">
    \t\t<div class=\"kt-portlet__head-label\">
    \t\t\t<h3 class=\"kt-portlet__head-title\">
    \t\t\t\t{{this.page.title|__}}
    \t\t\t</h3>
    \t\t</div>
        </div>
        <div class=\"kt-portlet__body kt-portlet__body--fit-x\">
           \t<div class=\"col-lg-12\">
                {{ form_ajax('onSave', { id: 'kt_form', class:'kt-form' }) }}
    \t\t\t\t<div class=\"row\">
    \t\t\t\t\t<div class=\"col-xl-12\">
\t\t\t\t\t\t\t<div class=\"form-group kt-hidden\" id=\"kt-form_msg\">
                                <div class=\"alert alert-danger\" role=\"alert\">
\t\t\t\t\t\t\t\t\t{{'Oh snap! Change a few things up and try submitting again.'|__}}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
                        </div>
                    </div>
                    {% if this.param.page == 'general' or this.param.page is empty %}
        \t\t\t\t<div class=\"row\">
        \t\t\t\t\t<div class=\"col-xl-2\"></div>
        \t\t\t\t\t<div class=\"col-xl-8\">
        \t\t\t\t\t\t<div class=\"kt-section kt-section--first\">
                                    <h3 class=\"kt-section__title kt-section__title-lg\">{{'General'|__}}:</h3>
        \t\t\t\t\t\t\t<div class=\"kt-section__body\">
        \t\t\t\t\t\t\t\t<div class=\"form-group row\">
        \t\t\t\t\t\t\t\t\t<label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Default Language'|__}}</label>
        \t\t\t\t\t\t\t\t\t<div class=\"col-lg-9 col-xl-6\">
        \t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"language\" required>
                                                    <option data-hidden=\"true\"></option>
                                                    {% for code, name in locales %}
        \t\t\t\t\t\t\t\t\t\t\t\t<option value=\"{{code}}\" {% if language == code %}selected{% endif %} data-live-search=\"true\">{{ name }}</option>
                                                    {% endfor %}
                                                </select>
        \t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t<div class=\"form-group row\">
        \t\t\t\t\t\t\t\t\t<label class=\"col-xl-3 col-lg-3 col-form-label\">{{'TimeZone'|__}}</label>
        \t\t\t\t\t\t\t\t\t<div class=\"col-lg-9 col-xl-6\">
        \t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"timezone_offset\" data-live-search=\"true\" required>
                                                    <option data-hidden=\"true\"></option>
                                                \t<option value=\"-12:00\" {% if timezone_offset == \"-12:00\" %}selected{% endif %}>(GMT -12:00) {{\"Eniwetok, Kwajalein\"|__}}</option>
                                                \t<option value=\"-11:00\" {% if timezone_offset == \"-11:00\" %}selected{% endif %}>(GMT -11:00) {{\"Midway Island, Samoa\"|__}}</option>
                                                \t<option value=\"-10:00\" {% if timezone_offset == \"-10:00\" %}selected{% endif %}>(GMT -10:00) {{\"Hawaii\"|__}}</option>
                                                \t<option value=\"-09:50\" {% if timezone_offset == \"-09:50\" %}selected{% endif %}>(GMT -9:30) {{\"Taiohae\"|__}}</option>
                                                \t<option value=\"-09:00\" {% if timezone_offset == \"-09:00\" %}selected{% endif %}>(GMT -9:00) {{\"Alaska\"|__}}</option>
                                                \t<option value=\"-08:00\" {% if timezone_offset == \"-08:00\" %}selected{% endif %}>(GMT -8:00) {{\"Pacific Time (US &amp; Canada)\"|__}}</option>
                                                \t<option value=\"-07:00\" {% if timezone_offset == \"-07:00\" %}selected{% endif %}>(GMT -7:00) {{\"Mountain Time (US &amp; Canada)\"|__}}</option>
                                                \t<option value=\"-06:00\" {% if timezone_offset == \"-06:00\" %}selected{% endif %}>(GMT -6:00) {{\"Central Time (US &amp; Canada), Mexico City\"|__}}</option>
                                                \t<option value=\"-05:00\" {% if timezone_offset == \"-05:00\" %}selected{% endif %}>(GMT -5:00) {{\"Eastern Time (US &amp; Canada), Bogota, Lima\"|__}}</option>
                                                \t<option value=\"-04:50\" {% if timezone_offset == \"-04:50\" %}selected{% endif %}>(GMT -4:30) {{\"Caracas\"|__}}</option>
                                                \t<option value=\"-04:00\" {% if timezone_offset == \"-04:00\" %}selected{% endif %}>(GMT -4:00) {{\"Atlantic Time (Canada), Caracas, La Paz\"|__}}</option>
                                                \t<option value=\"-03:50\" {% if timezone_offset == \"-03:50\" %}selected{% endif %}>(GMT -3:30) {{\"Newfoundland\"|__}}</option>
                                                \t<option value=\"-03:00\" {% if timezone_offset == \"-03:00\" %}selected{% endif %}>(GMT -3:00) {{\"Brazil, Buenos Aires, Georgetown\"|__}}</option>
                                                \t<option value=\"-02:00\" {% if timezone_offset == \"-02:00\" %}selected{% endif %}>(GMT -2:00) {{\"Mid-Atlantic\"|__}}</option>
                                                \t<option value=\"-01:00\" {% if timezone_offset == \"-01:00\" %}selected{% endif %}>(GMT -1:00) {{\"Azores, Cape Verde Islands\"|__}}</option>
                                                \t<option value=\"+00:00\" {% if timezone_offset == \"+00:00\" %}selected{% endif %}>(GMT) Western Europe Time, London, Lisbon, Casablanca</option>
                                                \t<option value=\"+01:00\" {% if timezone_offset == \"+01:00\" %}selected{% endif %}>(GMT +1:00) {{\"Brussels, Copenhagen, Madrid, Paris\"|__}}</option>
                                                \t<option value=\"+02:00\" {% if timezone_offset == \"+02:00\" %}selected{% endif %}>(GMT +2:00) {{\"Cairo, Kaliningrad, South Africa\"|__}}</option>
                                                \t<option value=\"+03:00\" {% if timezone_offset == \"+03:00\" %}selected{% endif %}>(GMT +3:00) {{\"Baghdad, Riyadh, Moscow, St. Petersburg\"|__}}</option>
                                                \t<option value=\"+03:50\" {% if timezone_offset == \"+03:50\" %}selected{% endif %}>(GMT +3:30) {{\"Tehran\"|__}}</option>
                                                \t<option value=\"+04:00\" {% if timezone_offset == \"+04:00\" %}selected{% endif %}>(GMT +4:00) {{\"Abu Dhabi, Muscat, Baku, Tbilisi\"|__}}</option>
                                                \t<option value=\"+04:50\" {% if timezone_offset == \"+04:50\" %}selected{% endif %}>(GMT +4:30) {{\"Kabul\"|__}}</option>
                                                \t<option value=\"+05:00\" {% if timezone_offset == \"+05:00\" %}selected{% endif %}>(GMT +5:00) {{\"Ekaterinburg, Islamabad, Karachi, Tashkent\"|__}}</option>
                                                \t<option value=\"+05:50\" {% if timezone_offset == \"+05:50\" %}selected{% endif %}>(GMT +5:30) {{\"Bombay, Calcutta, Madras, New Delhi\"|__}}</option>
                                                \t<option value=\"+05:75\" {% if timezone_offset == \"+05:75\" %}selected{% endif %}>(GMT +5:45) {{\"Kathmandu, Pokhara\"|__}}</option>
                                                \t<option value=\"+06:00\" {% if timezone_offset == \"+06:00\" %}selected{% endif %}>(GMT +6:00) {{\"Almaty, Dhaka, Colombo\"|__}}</option>
                                                \t<option value=\"+06:50\" {% if timezone_offset == \"+06:50\" %}selected{% endif %}>(GMT +6:30) {{\"Yangon, Mandalay\"|__}}</option>
                                                \t<option value=\"+07:00\" {% if timezone_offset == \"+07:00\" %}selected{% endif %}>(GMT +7:00) {{\"Bangkok, Hanoi, Jakarta\"|__}}</option>
                                                \t<option value=\"+08:00\" {% if timezone_offset == \"+08:00\" %}selected{% endif %}>(GMT +8:00) {{\"Beijing, Perth, Singapore, Hong Kong\"|__}}</option>
                                                \t<option value=\"+08:75\" {% if timezone_offset == \"+08:75\" %}selected{% endif %}>(GMT +8:45) {{\"Eucla\"|__}}</option>
                                                \t<option value=\"+09:00\" {% if timezone_offset == \"+09:00\" %}selected{% endif %}>(GMT +9:00) {{\"Tokyo, Seoul, Osaka, Sapporo, Yakutsk\"|__}}</option>
                                                \t<option value=\"+09:50\" {% if timezone_offset == \"+09:50\" %}selected{% endif %}>(GMT +9:30) {{\"Adelaide, Darwin\"|__}}</option>
                                                \t<option value=\"+10:00\" {% if timezone_offset == \"+10:00\" %}selected{% endif %}>(GMT +10:00) {{\"Eastern Australia, Guam, Vladivostok\"|__}}</option>
                                                \t<option value=\"+10:50\" {% if timezone_offset == \"+10:50\" %}selected{% endif %}>(GMT +10:30) {{\"Lord Howe Island\"|__}}</option>
                                                \t<option value=\"+11:00\" {% if timezone_offset == \"+11:00\" %}selected{% endif %}>(GMT +11:00) {{\"Magadan, Solomon Islands, New Caledonia\"|__}}</option>
                                                \t<option value=\"+11:50\" {% if timezone_offset == \"+11:50\" %}selected{% endif %}>(GMT +11:30) {{\"Norfolk Island\"|__}}</option>
                                                \t<option value=\"+12:00\" {% if timezone_offset == \"+12:00\" %}selected{% endif %}>(GMT +12:00) {{\"Auckland, Wellington, Fiji, Kamchatka\"|__}}</option>
                                                \t<option value=\"+12:75\" {% if timezone_offset == \"+12:75\" %}selected{% endif %}>(GMT +12:45) {{\"Chatham Islands\"|__}}</option>
                                                \t<option value=\"+13:00\" {% if timezone_offset == \"+13:00\" %}selected{% endif %}>(GMT +13:00) {{\"Apia, Nukualofa\"|__}}</option>
                                                \t<option value=\"+14:00\" {% if timezone_offset == \"+14:00\" %}selected{% endif %}>(GMT +14:00) {{\"Line Islands, Tokelau\"|__}}</option>
                                                </select>
        \t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t<div class=\"form-group row\">
        \t\t\t\t\t\t\t\t\t<label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Date Format'|__}}</label>
        \t\t\t\t\t\t\t\t\t<div class=\"col-lg-9 col-xl-6\">
        \t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"dateformat\" required>
                                                    <option data-hidden=\"true\"></option>
                                                    <option value=\"d/m/Y\" {% if dateformat == \"d/m/Y\" %}selected{% endif %}>{{'now'|date('d/m/Y')}}</option>
                                                    <option value=\"m/d/Y\" {% if dateformat == \"m/d/Y\" %}selected{% endif %}>{{'now'|date('m/d/Y')}}</option>
                                                    <option value=\"d M, Y\" {% if dateformat == \"d M, Y\" %}selected{% endif %}>{{'now'|date('d M, Y')}}</option>
                                                    <option value=\"M d, Y\" {% if dateformat == \"M d, Y\" %}selected{% endif %}>{{'now'|date('M d, Y')}}</option>
                                                </select>
        \t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t<div class=\"form-group row\">
        \t\t\t\t\t\t\t\t\t<label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Currency'|__}}</label>
        \t\t\t\t\t\t\t\t\t<div class=\"col-lg-9 col-xl-6\">
        \t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" id=\"currency\" name=\"currency\" data-live-search=\"true\" required>
                                                    <option data-hidden=\"true\"></option>
                                                    {% for currency in currencies %}
                                                        <option value=\"{{currency.id}}\" {% if primary_currency.id == currency.id %}selected{% endif %}>{{currency.name}}</option>
                                                    {% endfor %}
                                                </select>
        \t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t<div class=\"form-group row\">
        \t\t\t\t\t\t\t\t\t<label class=\"col-xl-3 col-lg-3 col-form-label\"></label>
        \t\t\t\t\t\t\t\t\t<div class=\"col-lg-9 col-xl-6\">
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" id=\"place_symbol_before\" name=\"place_symbol_before\" {% if primary_currency.place_symbol_before %}checked{% endif %}> {{'Place symbol before number'|__}}
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" id=\"with_space\" name=\"with_space\" {% if primary_currency.with_space %}checked{% endif %}> {{'Place symbol with space'|__}}
                                                        <span></span>
                                                    </label>
                                                </div>
        \t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t<div class=\"form-group row\">
        \t\t\t\t\t\t\t\t\t<label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Decimal Point'|__}}</label>
        \t\t\t\t\t\t\t\t\t<div class=\"col-lg-9 col-xl-6\">
        \t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" id=\"decimal_point\" name=\"decimal_point\" value=\"{{primary_currency.decimal_point}}\" required>
        \t\t\t\t\t\t\t\t\t\t<span class=\"form-text text-muted\">{{'Character to use as decimal point'|__}}.</span>
        \t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t<div class=\"form-group row\">
        \t\t\t\t\t\t\t\t\t<label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Thousand Separator'|__}}</label>
        \t\t\t\t\t\t\t\t\t<div class=\"col-lg-9 col-xl-6\">
        \t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" id=\"thousand_separator\" name=\"thousand_separator\" value=\"{{primary_currency.thousand_separator}}\" required>
        \t\t\t\t\t\t\t\t\t\t<span class=\"form-text text-muted\">{{'Character to separate thousands'|__}}.</span>
        \t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t<div class=\"form-group row\">
        \t\t\t\t\t\t\t\t\t<label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Number of fraction digits'|__}}</label>
        \t\t\t\t\t\t\t\t\t<div class=\"col-lg-9 col-xl-6\">
        \t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" id=\"initbiz_money_fraction_digits\" name=\"initbiz_money_fraction_digits\" value=\"{{primary_currency.initbiz_money_fraction_digits}}\" required>
        \t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t</div>
                                        <!-- add shipment form -->
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Add Shipment Form'|__}}</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"radio\" id=\"add_form_simple\" value=\"add_form_simple\" name=\"add_form\" {% if addShipmentForm == \"add_form_simple\" %}checked{% else %}disabled{% endif %}> {{'Simple'|__}} 
                                                        {% if settings.demo_mode and addShipmentForm != \"add_form_simple\" %}
                                                         <a href=\"https://cargosimple.spotlayer.com/\" target=\"_blank\">{{'Click here to view Simple Form Demo'|__}}</a>
                                                        {% endif %}
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"radio\" id=\"add_form_advance\" value=\"add_form_advance\" name=\"add_form\" {% if addShipmentForm == \"add_form_advance\" %}checked{% else %}disabled{% endif %}> {{'Advance'|__}} 
                                                        {% if settings.demo_mode and addShipmentForm != \"add_form_advance\" %}
                                                         <a href=\"https://cargo.spotlayer.com/\" target=\"_blank\">{{'Click here to view Advanced Form Demo'|__}}</a>
                                                        {% endif %}
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"radio\" id=\"add_form_normal\" value=\"add_form_normal\" name=\"add_form\" {% if addShipmentForm == \"add_form_normal\" %}checked{% else %}disabled{% endif %}> {{'Normal'|__}}
                                                        {% if settings.demo_mode and addShipmentForm != \"add_form_simple\" %}
                                                         <a href=\"https://cargonormal.spotlayer.com/\" target=\"_blank\">{{'Click here to view Normal Form Demo'|__}}</a>
                                                        {% endif %}
                                                        <span></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- create user with shipment  -->
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Save Sender Details'|__}}</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"radio\" id=\"exist_user\" value=\"1\" name=\"add_user\" {% if addUserSHipment == \"1\" %}checked{% endif %}> {{'Yes'|__}}
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"radio\" id=\"no_user\" value=\"2\" name=\"add_user\" {% if addUserSHipment == \"2\" %}checked{% endif %}> {{'No'|__}}
                                                        <span></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>


                                        <!-- update shipment form -->
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Update Shipment Form'|__}}</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"radio\" id=\"update_form_simple\" value=\"update_form_simple\" name=\"update_form\" {% if updateShipmentForm == \"update_form_simple\" %}checked{% endif %}> {{'Simple'|__}}
                                                        {% if settings.demo_mode and addShipmentForm != \"add_form_simple\" %}
                                                         <a href=\"https://cargosimple.spotlayer.com/\" target=\"_blank\">{{'Click here to view Simple Form Demo'|__}}</a>
                                                        {% endif %}
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"radio\" id=\"update_form_advance\" value=\"update_form_advance\" name=\"update_form\" {% if updateShipmentForm == \"update_form_advance\" %}checked{% endif %}> {{'Advance'|__}}
                                                        {% if settings.demo_mode and updateShipmentForm != \"update_form_advance\" %}
                                                         <a href=\"https://cargo.spotlayer.com/\" target=\"_blank\">{{'Click here to view Advanced Form Demo'|__}}</a>
                                                        {% endif %}
                                                        <span></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- shipment print template -->
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Shipment Print Template'|__}}</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"radio\" id=\"print_template_simple\" value=\"print_template_simple\" name=\"print_template\" {% if printTemplate == \"print_template_simple\" %}checked{% endif %}> {{'Simple'|__}}
                                                        {% if settings.demo_mode and printTemplate != \"print_template_simple\" %}
                                                         <a href=\"https://cargosimple.spotlayer.com/\" target=\"_blank\">{{'Click here to view Simple Print Template'|__}}</a>
                                                        {% endif %}
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"radio\" id=\"print_template_advance\" value=\"print_template_advance\" name=\"print_template\" {% if printTemplate == \"print_template_advance\" %}checked{% endif %}> {{'Advance'|__}}
                                                        {% if settings.demo_mode and printTemplate != \"print_template_simple\" %}
                                                         <a href=\"https://cargo.spotlayer.com/\" target=\"_blank\">{{'Click here to view Advanced Print Template'|__}}</a>
                                                        {% endif %}
                                                        <span></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
        \t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t</div>
        \t\t\t\t\t</div>
        \t\t\t\t\t<div class=\"col-xl-2\"></div>
        \t\t\t\t</div>
        \t\t\t\t<div class=\"row\">
        \t\t\t\t\t<div class=\"col-xl-4\"></div>
        \t\t\t\t\t<div class=\"col-xl-8\">
                                <div class=\"form-group\">
                                    <button type=\"submit\" class=\"btn btn-primary\">{{'Save'|__}}</button>
                                </div>
                            </div>
                        </div>
                    {% elseif this.param.page == 'company' %}
        \t\t\t\t<div class=\"row\">
        \t\t\t\t\t<div class=\"col-xl-2\"></div>
        \t\t\t\t\t<div class=\"col-xl-8\">
        \t\t\t\t\t\t<div class=\"kt-section kt-section--first\">
                                    <h3 class=\"kt-section__title kt-section__title-lg\">{{'Company Settings'|__}}:</h3>
        \t\t\t\t\t\t\t<div class=\"kt-section__body\">
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Website Name'|__}}</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <input class=\"form-control\" type=\"text\" name=\"company[title]\" value=\"{{company.title}}\" required>
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Website charset'|__}}</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <input class=\"form-control\" type=\"text\" name=\"company[charset]\" value=\"{{company.charset}}\" required>
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Website Description'|__}}</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <textarea class=\"form-control\" name=\"company[description]\" required>{{company.description}}</textarea>
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Website Keywords'|__}}</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <input id=\"kt_tagify_2\" class=\"tagify\" placeholder='{{\"type\"|__}}...' value='{{company.keywords}}' name=\"company[keywords]\" />
                                                <span class=\"form-text text-muted\">{{'Seprate with comma'|__}} ,</span>
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Primary Email'|__}}</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <div class=\"input-group\">
    \t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\"><span class=\"input-group-text\"><i class=\"la la-at\"></i></span></div>
    \t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"company[primary_email]\" value=\"{{company.primary_email}}\" placeholder=\"{{'Email'|__}}\" aria-describedby=\"basic-addon1\">
    \t\t\t\t\t\t\t\t\t\t\t</div>
                                                <span class=\"form-text text-muted\">{{'This is the main email notices will be sent to. It is also used as the from email when emailing other automatic emails'|__}}.</span>
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Tax Identification Number'|__}}</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <input class=\"form-control\" type=\"text\" name=\"company[tax_number]\" value=\"{{company.tax_number}}\" required>
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Company Phone'|__}}</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <div class=\"input-group\">
    \t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\"><span class=\"input-group-text\"><i class=\"la la-phone\"></i></span></div>
    \t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"company[company_phone]\" value=\"{{company.company_phone}}\" placeholder=\"{{'Phone'|__}}\" aria-describedby=\"basic-addon1\">
    \t\t\t\t\t\t\t\t\t\t\t</div>
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Company Phone 2'|__}}</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <div class=\"input-group\">
    \t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\"><span class=\"input-group-text\"><i class=\"la la-phone\"></i></span></div>
    \t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"company[company_phone_2]\" value=\"{{company.company_phone_2}}\" placeholder=\"{{'Phone'|__}}\" aria-describedby=\"basic-addon1\">
    \t\t\t\t\t\t\t\t\t\t\t</div>
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Company Phone 3'|__}}</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <div class=\"input-group\">
    \t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\"><span class=\"input-group-text\"><i class=\"la la-phone\"></i></span></div>
    \t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"company[company_phone_3]\" value=\"{{company.company_phone_3}}\" placeholder=\"{{'Phone'|__}}\" aria-describedby=\"basic-addon1\">
    \t\t\t\t\t\t\t\t\t\t\t</div>
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Facebook'|__}}</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <input class=\"form-control\" type=\"text\" name=\"company[facebook]\" value=\"{{company.facebook}}\" required>
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Twitter'|__}}</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <input class=\"form-control\" type=\"text\" name=\"company[twitter]\" value=\"{{company.twitter}}\" required>
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Instagram'|__}}</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <input class=\"form-control\" type=\"text\" name=\"company[instagram]\" value=\"{{company.instagram}}\" required>
                                            </div>
                                        </div>
                                        <div class=\"location-complete\">
                                            <div class=\"form-group row\">
                                                <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Company Official Address'|__}}</label>
                                                <div class=\"col-lg-9 col-xl-6\">
                                                    <input type=\"text\" class=\"form-control\" id=\"address\" name=\"address\" value=\"{% if company.address %}{{company.address|__}}{% endif %}\"/>
                                                    <input type=\"hidden\" class=\"form-control\" name=\"lat\" value=\"{{company.lat}}\"/>
                                                    <input type=\"hidden\" class=\"form-control\" name=\"lng\" value=\"{{company.lng}}\"/>
                                                </div>
                                            </div>
                                            <div class=\"form-group row\">
                                                <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Google Map'|__}}</label>
                                                <div class=\"col-lg-9 col-xl-6\">
                                                    <div id=\"map_canvas\" class=\"col-sm-12\"></div>
                                                    <span class=\"form-text text-muted\">{{'Change the pin to select the right location'|__}}</span>
                                                </div>
                                            </div>
                                            <div class=\"form-group row\">
                                                <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'County'|__}}</label>
                                                <div class=\"col-lg-9 col-xl-6\">
                                                    <input class=\"form-control\" type=\"text\" name=\"sublocality\" value=\"{% if company.county %}{{company.county|__}}{% endif %}\">
                                                </div>
                                            </div>
                                            <div class=\"form-group row\">
                                                <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'City'|__}}</label>
                                                <div class=\"col-lg-9 col-xl-6\">
                                                    <input class=\"form-control\" type=\"text\" name=\"locality\" value=\"{% if company.city %}{{company.city|__}}{% endif %}\">
                                                </div>
                                            </div>
                                            <div class=\"form-group row\">
                                                <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'State / Region'|__}}</label>
                                                <div class=\"col-lg-9 col-xl-6\">
                                                    <input class=\"form-control\" type=\"text\" name=\"administrative_area_level_1\" value=\"{% if company.state %}{{company.state|__}}{% endif %}\">
                                                </div>
                                            </div>
                                            <div class=\"form-group row\">
                                                <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Postal Code'|__}}</label>
                                                <div class=\"col-lg-9 col-xl-6\">
                                                    <input class=\"form-control\" type=\"text\" name=\"postal_code\" value=\"{% if company.postal_code %}{{company.postal_code|__}}{% endif %}\">
                                                </div>
                                            </div>
                                            <div class=\"form-group row\">
                                                <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Country'|__}}</label>
                                                <div class=\"col-lg-9 col-xl-6\">
                                                    <input class=\"form-control\" type=\"text\" name=\"country\" value=\"{% if company.country %}{{company.country|__}}{% endif %}\">
                                                </div>
                                            </div>
            \t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t</div>
                                            
                                {% if settings.demo_mode %}
                                    <div class=\"kt-section\">
                                        <div class=\"kt-section__body\">
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Company Logo'|__}}</label>
                                            <div class=\"col-lg-9 col-xl-6\">

                                                <div class=\"alert alert-danger\" role=\"alert\">
                                                    {{'Not allowed to change it in demo.'|__}}
                                                </div>

                                                <span class=\"form-text text-muted\">{{'Perfered Size'|__}} 180 x 30.</span>
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Mobile Logo'|__}}</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                                                            <div class=\"alert alert-danger\" role=\"alert\">
                                                                                                {{'Not allowed to change it in demo.'|__}}
                                                                                            </div>

                                                <span class=\"form-text text-muted\">{{'Max Height'|__}} 40px.</span>
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Company Favicon'|__}}</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                                                            <div class=\"alert alert-danger\" role=\"alert\">
                                                                                                {{'Not allowed to change it in demo.'|__}}
                                                                                            </div>

                                                <span class=\"form-text text-muted\">{{'Size'|__}} 48 x 48.</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {% else %}
                                    <div class=\"kt-section\">
                                        <div class=\"kt-section__body\">
                                            <div class=\"form-group row\">
                                                <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Company Logo'|__}}</label>
                                                <div class=\"col-lg-9 col-xl-6\">
                                                    {% if Logo.isMulti %}
                                                        {% partial Logo ~ '::image-multi' %}
                                                    {% else %}
                                                        {% partial Logo ~ '::image-single' %}
                                                    {% endif %}
                                                    <span class=\"form-text text-muted\">{{'Perfered Size'|__}} 180 x 30.</span>
                                                </div>
                                            </div>
                                            <div class=\"form-group row\">
                                                <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Mobile Logo'|__}}</label>
                                                <div class=\"col-lg-9 col-xl-6\">
                                                    {% if MobileLogo.isMulti %}
                                                        {% partial MobileLogo ~ '::image-multi' %}
                                                    {% else %}
                                                        {% partial MobileLogo ~ '::image-single' %}
                                                    {% endif %}
                                                    <span class=\"form-text text-muted\">{{'Max Height'|__}} 40px.</span>
                                                </div>
                                            </div>
                                            <div class=\"form-group row\">
                                                <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Company Favicon'|__}}</label>
                                                <div class=\"col-lg-9 col-xl-6\">
                                                    {% if Favicon.isMulti %}
                                                        {% partial Favicon ~ '::image-multi' %}
                                                    {% else %}
                                                        {% partial Favicon ~ '::image-single' %}
                                                    {% endif %}
                                                    <span class=\"form-text text-muted\">{{'Size'|__}} 48 x 48.</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                {% endif %}
        \t\t\t\t\t</div>
        \t\t\t\t\t<div class=\"col-xl-2\"></div>
        \t\t\t\t</div>
        \t\t\t\t<div class=\"row\">
        \t\t\t\t\t<div class=\"col-xl-4\"></div>
        \t\t\t\t\t<div class=\"col-xl-8\">
                                <div class=\"form-group\">
                                    <button type=\"submit\" class=\"btn btn-primary\">{{'Save'|__}}</button>
                                </div>
                            </div>
                        </div>
                    {% elseif this.param.page == 'fees' %}
        \t\t\t\t<div class=\"row\">
        \t\t\t\t\t<div class=\"col-xl-2\"></div>
        \t\t\t\t\t<div class=\"col-xl-8\">
        \t\t\t\t\t\t<div class=\"kt-section kt-section--first\">
                                    <h3 class=\"kt-section__title kt-section__title-lg\">{{'Taxes and fees'|__}}:</h3>
        \t\t\t\t\t\t\t<div class=\"kt-section__body\">
                                        <div class=\"kt-section\">
                        \t\t\t\t\t<h5 class=\"kt-section__title kt-margin-b-20\">
                        \t\t\t\t\t\t{{'Taxes'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span>
                        \t\t\t\t\t</h5>
                        \t\t\t\t\t<div class=\"kt-section__content\">
                \t\t\t\t\t\t\t\t<div class=\"row\">
                    \t\t\t\t\t\t\t\t<div class=\"form-group col-lg-6\">
                    \t\t\t\t\t\t\t\t\t<label>{{'Tax Percentage'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></label>
                                                        <div class=\"input-group\">
                                    \t\t\t\t\t\t<div class=\"input-group-prepend\"><span class=\"input-group-text\">%</span></div>
                    \t\t\t\t\t\t\t\t\t\t<input class=\"form-control bootstrap-touchspin-vertical-btn\" type=\"text\" name=\"taxes[percent]\" value=\"{{taxes.percent}}\" required>
                                    \t\t\t\t\t</div>
                    \t\t\t\t\t\t\t\t</div>
                    \t\t\t\t\t\t\t\t<div class=\"form-group col-lg-6\">
                    \t\t\t\t\t\t\t\t\t<label>{{'Shipping Insurance Percentage'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></label>
                                                        <div class=\"input-group\">
                                    \t\t\t\t\t\t<div class=\"input-group-prepend\"><span class=\"input-group-text\">%</span></div>
                    \t\t\t\t\t\t\t\t\t\t<input class=\"form-control bootstrap-touchspin-vertical-btn\" type=\"text\" name=\"taxes[insurance]\" value=\"{{taxes.insurance}}\" required>
                                    \t\t\t\t\t</div>
                    \t\t\t\t\t\t\t\t</div>
                \t\t\t\t\t\t\t\t</div>
                                            </div>
                                        </div>
                                        <div class=\"kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit\"></div>
                                        <div class=\"kt-section\">
                        \t\t\t\t\t<h5 class=\"kt-section__title kt-margin-b-20\">
                        \t\t\t\t\t\t{{'Default Fees'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span>
                        \t\t\t\t\t</h5>
                        \t\t\t\t\t<div class=\"kt-section__content\">
                \t\t\t\t\t\t\t\t<div class=\"row\">
                    \t\t\t\t\t\t\t\t<div class=\"form-group col-lg-6\">
                    \t\t\t\t\t\t\t\t\t<label>{{'Shipping cost'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></label>
                                                        <div class=\"input-group\">
                                                            {% if primary_currency.place_symbol_before == 1 %}
                                        \t\t\t\t\t\t<div class=\"input-group-prepend\"><span class=\"input-group-text\">{{primary_currency.currency_symbol}}</span></div>
                                                            {% endif %}
                    \t\t\t\t\t\t\t\t\t\t<input class=\"form-control decimal\" type=\"text\" name=\"fees[delivery_cost]\" value=\"{{fees.delivery_cost}}\" required>
                                                            {% if primary_currency.place_symbol_before == 0 %}
                                        \t\t\t\t\t\t<div class=\"input-group-append\"><span class=\"input-group-text\">{{primary_currency.currency_symbol}}</span></div>
                                                            {% endif %}
                                    \t\t\t\t\t</div>
                \t\t\t\t\t\t\t\t\t\t<span class=\"form-text text-muted\">{{'The default cost to deliver the package'|__}}</span>
                    \t\t\t\t\t\t\t\t</div>
                    \t\t\t\t\t\t\t\t<div class=\"form-group col-lg-6\">
                    \t\t\t\t\t\t\t\t\t<label>{{'Pickup cost'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></label>
                                                        <div class=\"input-group\">
                                                            {% if primary_currency.place_symbol_before == 1 %}
                                        \t\t\t\t\t\t<div class=\"input-group-prepend\"><span class=\"input-group-text\">{{primary_currency.currency_symbol}}</span></div>
                                                            {% endif %}
                    \t\t\t\t\t\t\t\t\t\t<input class=\"form-control decimal\" type=\"text\" name=\"fees[pickup_cost]\" value=\"{{fees.pickup_cost}}\" required>
                                                            {% if primary_currency.place_symbol_before == 0 %}
                                        \t\t\t\t\t\t<div class=\"input-group-append\"><span class=\"input-group-text\">{{primary_currency.currency_symbol}}</span></div>
                                                            {% endif %}
                                    \t\t\t\t\t</div>
                \t\t\t\t\t\t\t\t\t\t<span class=\"form-text text-muted\">{{'The default cost to receive the package from the sender'|__}}</span>
                    \t\t\t\t\t\t\t\t</div>
                \t\t\t\t\t\t\t\t</div>
                \t\t\t\t\t\t\t\t<div class=\"row\">
                                                    <div class=\"form-group col-lg-6\">
                                                        <label>{{'Delivery back cost by sender'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></label>
                                                        <div class=\"input-group\">
                                                            {% if primary_currency.place_symbol_before == 1 %}
                                                                <div class=\"input-group-prepend\"><span class=\"input-group-text\">{{primary_currency.currency_symbol}}</span></div>
                                                            {% endif %}
                                                            <input class=\"form-control decimal \" type=\"text\" name=\"fees[delivery_cost_back_sender]\" value=\"{{fees.delivery_cost_back_sender}}\" required>
                                                            {% if primary_currency.place_symbol_before == 0 %}
                                                                <div class=\"input-group-append\"><span class=\"input-group-text\">{{primary_currency.currency_symbol}}</span></div>
                                                            {% endif %}
                                                        </div>
                \t\t\t\t\t\t\t\t\t\t<span class=\"form-text text-muted\">{{'The default cost to return the package fees to the sender'|__}}</span>
                                                    </div>
                    \t\t\t\t\t\t\t\t<div class=\"form-group col-lg-6\">
                    \t\t\t\t\t\t\t\t\t<label>{{'Delivery back cost by receiver'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></label>
                                                        <div class=\"input-group\">
                                                            {% if primary_currency.place_symbol_before == 1 %}
                                        \t\t\t\t\t\t<div class=\"input-group-prepend\"><span class=\"input-group-text\">{{primary_currency.currency_symbol}}</span></div>
                                                            {% endif %}
                    \t\t\t\t\t\t\t\t\t\t<input class=\"form-control decimal \" type=\"text\" name=\"fees[delivery_cost_back_receiver]\" value=\"{{fees.delivery_cost_back_receiver}}\" required>
                                                            {% if primary_currency.place_symbol_before == 0 %}
                                        \t\t\t\t\t\t<div class=\"input-group-append\"><span class=\"input-group-text\">{{primary_currency.currency_symbol}}</span></div>
                                                            {% endif %}
                                    \t\t\t\t\t</div>
                \t\t\t\t\t\t\t\t\t\t<span class=\"form-text text-muted\">{{'The default cost to return the package fees to the sender'|__}}</span>
                    \t\t\t\t\t\t\t\t</div>
                \t\t\t\t\t\t\t\t</div>
                                            </div>
                                        </div>
                                        <div class=\"kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit\"></div>
        \t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t</div>
        \t\t\t\t\t</div>
        \t\t\t\t\t<div class=\"col-xl-2\"></div>
        \t\t\t\t</div>
        \t\t\t\t<div class=\"row\">
        \t\t\t\t\t<div class=\"col-xl-4\"></div>
        \t\t\t\t\t<div class=\"col-xl-8\">
                                <div class=\"form-group\">
                                    <button type=\"submit\" class=\"btn btn-primary\">{{'Save'|__}}</button>
                                </div>
                            </div>
                        </div>
        \t\t\t\t<div class=\"row\">
                            <div class=\"col-xl-2\"></div>
        \t\t\t\t\t<div class=\"col-xl-8\">

                                <div class=\"kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit\"></div>
                                <div class=\"kt-section\">
                                    <h5 class=\"kt-section__title kt-margin-b-20\">
                                        {{'Fees by places'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span>
                                        <div class=\"kt-section__toolbar\">
                                            <a href=\"{{url('dashboard/settings/fees/create')}}\" class=\"btn btn-success\">{{'Add New Fees'|__}}</a>
                                        </div>
                                    </h5>
                                    <div class=\"kt-section__content\">
                                        <div class=\"kt-datatable\"></div>
                                    </div>
                                </div>
                            </div>
        \t\t\t\t\t<div class=\"col-xl-2\"></div>
                        </div>
                    {% elseif this.param.page == 'invoice' %}
        \t\t\t\t<div class=\"row\">
        \t\t\t\t\t<div class=\"col-xl-2\"></div>
        \t\t\t\t\t<div class=\"col-xl-8\">
        \t\t\t\t\t\t<div class=\"kt-section kt-section--first\">
                                    <h3 class=\"kt-section__title kt-section__title-lg\">{{'Tracking and Invoice'|__}}:</h3>
        \t\t\t\t\t\t\t<div class=\"kt-section__body\">
                                        <div class=\"kt-section\">
                        \t\t\t\t\t<h5 class=\"kt-section__title kt-margin-b-20\">
                        \t\t\t\t\t\t{{'Tracking'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span>
                        \t\t\t\t\t</h5>
                        \t\t\t\t\t<div class=\"kt-section__content\">
                \t\t\t\t\t\t\t\t<div class=\"row\">
                    \t\t\t\t\t\t\t\t<div class=\"form-group col-lg-6\">
                    \t\t\t\t\t\t\t\t\t<label>{{'Shipment Prefix'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></label>
                \t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" name=\"tracking[prefix_order]\" value=\"{{tracking.prefix_order}}\" required>
                    \t\t\t\t\t\t\t\t</div>
                    \t\t\t\t\t\t\t\t<div class=\"form-group col-lg-6\">
                    \t\t\t\t\t\t\t\t\t<label>{{'Shipment Number of digits in the tracking'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></label>
                \t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"number\" max=\"10\" name=\"tracking[numbers_order]\" value=\"{{tracking.numbers_order}}\" required>
                \t\t\t\t\t\t\t\t\t\t<span class=\"form-text text-muted\">{{'EXAMPLE'|__}}: 0000001</span>
                    \t\t\t\t\t\t\t\t</div>
                \t\t\t\t\t\t\t\t</div>
                                                <!--
                    \t\t\t\t\t\t\t\t<div class=\"row\">
                        \t\t\t\t\t\t\t\t<div class=\"form-group col-lg-6\">
                        \t\t\t\t\t\t\t\t\t<label>{{'Container Prefix'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></label>
                    \t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" name=\"tracking[prefix_container]\" value=\"{{tracking.prefix_container}}\" required>
                        \t\t\t\t\t\t\t\t</div>
                        \t\t\t\t\t\t\t\t<div class=\"form-group col-lg-6\">
                        \t\t\t\t\t\t\t\t\t<label>{{'Container Number of digits in the tracking'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></label>
                    \t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"number\" max=\"10\" min=\"5\" name=\"tracking[numbers_container]\" value=\"{{tracking.numbers_container}}\" required>
                    \t\t\t\t\t\t\t\t\t\t<span class=\"form-text text-muted\">{{'EXAMPLE'|__}}: 0000001</span>
                        \t\t\t\t\t\t\t\t</div>
                                                    </div>
                                                -->
                                                <div class=\"row\">
                    \t\t\t\t\t\t\t\t<div class=\"form-group col-lg-6\">
                    \t\t\t\t\t\t\t\t\t<label>{{'Default Delivery Time'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></label>
                \t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"tracking[default_deliverytime]\" required>
                                                            <option data-hidden=\"true\"></option>
                                                            {% for time in deliverytimes %}
                \t\t\t\t\t\t\t\t\t\t\t\t<option value=\"{{time.id}}\" {% if tracking.default_deliverytime == time.id %}selected{% endif %}>{{time.name}}</option>
                                                            {% endfor %}
                                                        </select>
                    \t\t\t\t\t\t\t\t</div>
                    \t\t\t\t\t\t\t\t<div class=\"form-group col-lg-6\">
                    \t\t\t\t\t\t\t\t\t<label>{{'Default Status Time'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></label>
                \t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"tracking[default_status]\" required>
                                                            <option data-hidden=\"true\"></option>
                                                            {% for status in statuses %}
                \t\t\t\t\t\t\t\t\t\t\t\t<option value=\"{{status.id}}\" {% if tracking.default_status == status.id %}selected{% endif %}>{{status.name}}</option>
                                                            {% endfor %}
                                                        </select>
                    \t\t\t\t\t\t\t\t</div>
                                                </div>
                                                <div class=\"row\">
                    \t\t\t\t\t\t\t\t<div class=\"form-group col-lg-12\">
                    \t\t\t\t\t\t\t\t\t<label>{{'Default Tracking ID'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></label>
                \t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"tracking[default_tracking_id]\" required>
                                                            <option data-hidden=\"true\"></option>
            \t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" {% if tracking.default_tracking_id == 1 %}selected{% endif %}>{{'Country'|__}}</option>
            \t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\" {% if tracking.default_tracking_id == 2 %}selected{% endif %}>{{'State'|__}}</option>
            \t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\" {% if tracking.default_tracking_id == 3 %}selected{% endif %}>{{'City'|__}}</option>
            \t\t\t\t\t\t\t\t\t\t\t\t<option value=\"4\" {% if tracking.default_tracking_id == 4 %}selected{% endif %}>{{'Area'|__}}</option>
                                                        </select>
                \t\t\t\t\t\t\t\t\t\t<span class=\"form-text text-muted\">{{'The id that will be shown on your print label so you can detect by the id from and where this shipment will go through'|__}}</span>
                    \t\t\t\t\t\t\t\t</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit\"></div>
                                        <div class=\"kt-section\">
                        \t\t\t\t\t<h5 class=\"kt-section__title kt-margin-b-20\">
                        \t\t\t\t\t\t{{'Invoice'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span>
                        \t\t\t\t\t</h5>
                        \t\t\t\t\t<div class=\"kt-section__content\">
                                                <div class=\"row\">
                    \t\t\t\t\t\t\t\t<div class=\"form-group col-lg-12\">
                    \t\t\t\t\t\t\t\t\t<label>{{'Default Invoice Terms'|__}}</label>
                \t\t\t\t\t\t\t\t\t\t<textarea class=\"form-control\" name=\"invoice[terms]\">{{invoice.terms}}</textarea>
                    \t\t\t\t\t\t\t\t</div>
                                                </div>
                                                <div class=\"row\">
                    \t\t\t\t\t\t\t\t<div class=\"form-group col-lg-6\">
                    \t\t\t\t\t\t\t\t\t<label>{{'Invoice Company Signing'|__}}</label>
                                                        <input class=\"form-control\" type=\"text\" name=\"invoice[signing_company]\" value=\"{{invoice.signing_company}}\">
                    \t\t\t\t\t\t\t\t</div>
                    \t\t\t\t\t\t\t\t<div class=\"form-group col-lg-6\">
                    \t\t\t\t\t\t\t\t\t<label>{{'Invoice Customer Signing'|__}}</label>
                                                        <input class=\"form-control\" type=\"text\" name=\"invoice[signing_customer]\" value=\"{{invoice.signing_customer}}\">
                    \t\t\t\t\t\t\t\t</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit\"></div>
        \t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t</div>
        \t\t\t\t\t</div>
        \t\t\t\t\t<div class=\"col-xl-2\"></div>
        \t\t\t\t</div>
        \t\t\t\t<div class=\"row\">
        \t\t\t\t\t<div class=\"col-xl-4\"></div>
        \t\t\t\t\t<div class=\"col-xl-8\">
                                <div class=\"form-group\">
                                    <button type=\"submit\" class=\"btn btn-primary\">{{'Save'|__}}</button>
                                </div>
                            </div>
                        </div>
                    {% elseif this.param.page == 'branches' %}
                        <div class=\"kt-section kt-section--first\">
                            <div class=\"kt-section__body\">
                                <div class=\"kt-datatable\"></div>
                            </div>
                        </div>
                    {% elseif this.param.page == 'cars' %}
                        <div class=\"kt-section kt-section--first\">
                            <div class=\"kt-section__body\">
                                <div class=\"kt-datatable\"></div>
                            </div>
                        </div>
                    {% elseif this.param.page == 'destination' %}
                        <div class=\"kt-section kt-section--first\">
                            <div class=\"kt-section__body\">
                                <div class=\"kt-datatable\"></div>
                            </div>
                        </div>
                    {% elseif this.param.page == 'location' %}
                        <div class=\"kt-section kt-section--first\">
                            <div class=\"kt-section__body\">
                                <div class=\"kt-datatable\"></div>
                            </div>
                        </div>
                    {% elseif this.param.page == 'statuscontainer' %}
                        <div class=\"kt-section kt-section--first\">
                            <div class=\"kt-section__body\">
                                <div class=\"kt-datatable\"></div>
                            </div>
                        </div>     
                    {% elseif this.param.page == 'reasonarrival' %}
                        <div class=\"kt-section kt-section--first\">
                            <div class=\"kt-section__body\">
                                <div class=\"kt-datatable\"></div>
                            </div>
                        </div> 
                    {% elseif this.param.page == 'size' %}
                        <div class=\"kt-section kt-section--first\">
                            <div class=\"kt-section__body\">
                                <div class=\"kt-datatable\"></div>
                            </div>
                        </div>                  
                    {% elseif this.param.page == 'statuses' %}
                        <div class=\"kt-section kt-section--first\">
                            <div class=\"kt-section__body\">
                                <div class=\"kt-datatable\"></div>
                            </div>
                        </div>
                    {% elseif this.param.page == 'Stockstatuses' %}
                        <div class=\"kt-section kt-section--first\">
                            <div class=\"kt-section__body\">
                                <div class=\"kt-datatable\"></div>
                            </div>
                        </div>
                    {% elseif this.param.page == 'Customstatuses' %}
                        <div class=\"kt-section kt-section--first\">
                            <div class=\"kt-section__body\">
                                <div class=\"kt-datatable\"></div>
                            </div>
                        </div>        
                    {% elseif this.param.page == 'treasury' %}
                        <div class=\"kt-section kt-section--first\">
                            <div class=\"kt-section__body\">
                                <div class=\"kt-datatable\"></div>
                            </div>
                        </div>
                    {% elseif this.param.page == 'categories' %}
                        <div class=\"kt-section kt-section--first\">
                            <div class=\"kt-section__body\">
                                <div class=\"kt-datatable\"></div>
                            </div>
                        </div>
                    {% elseif this.param.page == 'couriers' %}
                        <div class=\"kt-section kt-section--first\">
                            <div class=\"kt-section__body\">
                                <div class=\"kt-datatable\"></div>
                            </div>
                        </div>
                    {% elseif this.param.page == 'deliverytimes' %}
                        <div class=\"kt-section kt-section--first\">
                            <div class=\"kt-section__body\">
                                <div class=\"kt-datatable\"></div>
                            </div>
                        </div>
                    {% elseif this.param.page == 'shipping' %}
                        <div class=\"kt-section kt-section--first\">
                            <div class=\"kt-section__body\">
                                <div class=\"kt-datatable\"></div>
                            </div>
                        </div>
                    {% elseif this.param.page == 'labels' %}
                        <div class=\"kt-section kt-section--first\">
                            <div class=\"kt-section__body\">
                                <div class=\"kt-datatable\"></div>
                            </div>
                        </div> 
                    {% elseif this.param.page == 'handler' %}
                        <div class=\"kt-section kt-section--first\">
                            <div class=\"kt-section__body\">
                                <div class=\"kt-datatable\"></div>
                            </div>
                        </div>
                    {% elseif this.param.page == 'break' %}
                        <div class=\"kt-section kt-section--first\">
                            <div class=\"kt-section__body\">
                                <div class=\"kt-datatable\"></div>
                            </div>
                        </div>           
                    {% elseif this.param.page == 'packaging' %}
                        <div class=\"kt-section kt-section--first\">
                            <div class=\"kt-section__body\">
                                <div class=\"kt-datatable\"></div>
                            </div>
                        </div>
                    {% elseif this.param.page == 'countries' %}
                        <div class=\"kt-section kt-section--first\">
                            <div class=\"kt-section__body\">
                                <div class=\"kt-datatable\"></div>
                            </div>
                        </div>
                    {% elseif this.param.page == 'states' %}
                        <div class=\"kt-section kt-section--first\">
                            <div class=\"kt-section__body\">
                                <div class=\"kt-datatable\"></div>
                            </div>
                        </div>
                    {% elseif this.param.page == 'cities' %}
                        <div class=\"kt-section kt-section--first\">
                            <div class=\"kt-section__body\">
                                <div class=\"kt-datatable\"></div>
                            </div>
                        </div>
                    {% elseif this.param.page == 'areas' %}
                        <div class=\"kt-section kt-section--first\">
                            <div class=\"kt-section__body\">
                                <div class=\"kt-datatable\"></div>
                            </div>
                        </div>
                    {% elseif this.param.page == 'sms' %}
        \t\t\t\t<div class=\"row\">
        \t\t\t\t\t<div class=\"col-xl-2\"></div>
        \t\t\t\t\t<div class=\"col-xl-8\">
        \t\t\t\t\t\t<div class=\"kt-section kt-section--first\">
                                    <h3 class=\"kt-section__title kt-section__title-lg\">{{'SMS'|__}}:</h3>
        \t\t\t\t\t\t\t<div class=\"kt-section__body\">
        \t\t\t\t\t\t\t\t<div class=\"form-group row\">
        \t\t\t\t\t\t\t\t\t<label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Enable SMS'|__}}</label>
        \t\t\t\t\t\t\t\t\t<div class=\"col-lg-9 col-xl-6\">
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" id=\"enable_sms_notification\" name=\"enable\" {% if sms.enable == 1 %}checked{% endif %}> {{'Yes'|__}}
                                                        <span></span>
                                                    </label>
                                                </div>
        \t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t<div class=\"{% if sms.enable != 1 %}kt-hidden{% endif %}\" id=\"sms_notification\">
            \t\t\t\t\t\t\t\t<div class=\"form-group row\">
            \t\t\t\t\t\t\t\t\t<label class=\"col-xl-3 col-lg-3 col-form-label\">{{'SMS Provider'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
            \t\t\t\t\t\t\t\t\t<div class=\"col-lg-9 col-xl-6\">
            \t\t\t\t\t\t\t\t\t\t<select class=\"form-control gateway\" name=\"gateway\" required>
                                                        <option data-hidden=\"true\"></option>
        \t\t\t\t\t\t\t\t\t\t\t\t<option value=\"clickatell\" {% if sms.gateway == 'clickatell' %}selected{% endif %}>Clickatell</option>
        \t\t\t\t\t\t\t\t\t\t\t\t<option value=\"smsala\" {% if sms.gateway == 'smsala' %}selected{% endif %}>SMS ALA</option>
        \t\t\t\t\t\t\t\t\t\t\t\t<option value=\"twilio\" {% if sms.gateway == 'twilio' %}selected{% endif %}>Twilio</option>
                                                    </select>
            \t\t\t\t\t\t\t\t\t</div>
            \t\t\t\t\t\t\t\t</div>
            \t\t\t\t\t\t\t\t<div class=\"twilio {% if sms.gateway != 'twilio' %}kt-hidden{% endif %}\">
                \t\t\t\t\t\t\t\t<div class=\"form-group row\">
                \t\t\t\t\t\t\t\t\t<label class=\"col-xl-3 col-lg-3 col-form-label\">{{'SID'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                \t\t\t\t\t\t\t\t\t<div class=\"col-lg-9 col-xl-6\">
                \t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" name=\"twilio_sid\" value=\"{{sms.twilio_sid}}\" required>
                \t\t\t\t\t\t\t\t\t</div>
                \t\t\t\t\t\t\t\t</div>
                \t\t\t\t\t\t\t\t<div class=\"form-group row\">
                \t\t\t\t\t\t\t\t\t<label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Token'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                \t\t\t\t\t\t\t\t\t<div class=\"col-lg-9 col-xl-6\">
                \t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" name=\"twilio_token\" value=\"{{sms.twilio_token}}\" required>
                \t\t\t\t\t\t\t\t\t</div>
                \t\t\t\t\t\t\t\t</div>
            \t\t\t\t\t\t\t\t</div>
            \t\t\t\t\t\t\t\t<div class=\"clickatell {% if sms.gateway != 'clickatell' %}kt-hidden{% endif %}\">
                \t\t\t\t\t\t\t\t<div class=\"form-group row\">
                \t\t\t\t\t\t\t\t\t<label class=\"col-xl-3 col-lg-3 col-form-label\">{{'App ID'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                \t\t\t\t\t\t\t\t\t<div class=\"col-lg-9 col-xl-6\">
                \t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" name=\"clickatell_api_id\" value=\"{{sms.clickatell_api_id}}\" required>
                \t\t\t\t\t\t\t\t\t</div>
                \t\t\t\t\t\t\t\t</div>
            \t\t\t\t\t\t\t\t</div>
            \t\t\t\t\t\t\t\t<div class=\"smsala {% if sms.gateway != 'smsala' %}kt-hidden{% endif %}\">
                \t\t\t\t\t\t\t\t<div class=\"form-group row\">
                \t\t\t\t\t\t\t\t\t<label class=\"col-xl-3 col-lg-3 col-form-label\">{{'App ID'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                \t\t\t\t\t\t\t\t\t<div class=\"col-lg-9 col-xl-6\">
                \t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" name=\"smsala_api_id\" value=\"{{sms.smsala_api_id}}\" required>
                \t\t\t\t\t\t\t\t\t</div>
                \t\t\t\t\t\t\t\t</div>
                \t\t\t\t\t\t\t\t<div class=\"form-group row\">
                \t\t\t\t\t\t\t\t\t<label class=\"col-xl-3 col-lg-3 col-form-label\">{{'App Password'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                \t\t\t\t\t\t\t\t\t<div class=\"col-lg-9 col-xl-6\">
                \t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" name=\"smsala_api_password\" value=\"{{sms.smsala_api_password}}\" required>
                \t\t\t\t\t\t\t\t\t</div>
                \t\t\t\t\t\t\t\t</div>
                \t\t\t\t\t\t\t\t<div class=\"form-group row\">
                \t\t\t\t\t\t\t\t\t<label class=\"col-xl-3 col-lg-3 col-form-label\">{{'SMS Type'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                \t\t\t\t\t\t\t\t\t<div class=\"col-lg-9 col-xl-6\">
                \t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"smsala_sms_type\" required>
                                                            <option data-hidden=\"true\"></option>
            \t\t\t\t\t\t\t\t\t\t\t\t<option value=\"P\" {% if sms.smsala_sms_type == 'P' %}selected{% endif %}>Promotional</option>
            \t\t\t\t\t\t\t\t\t\t\t\t<option value=\"T\" {% if sms.smsala_sms_type == 'T' %}selected{% endif %}>Transactional</option>
                                                        </select>
                \t\t\t\t\t\t\t\t\t</div>
                \t\t\t\t\t\t\t\t</div>
                \t\t\t\t\t\t\t\t<div class=\"form-group row\">
                \t\t\t\t\t\t\t\t\t<label class=\"col-xl-3 col-lg-3 col-form-label\">{{'encoding'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                \t\t\t\t\t\t\t\t\t<div class=\"col-lg-9 col-xl-6\">
                \t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"smsala_encoding\" required>
                                                            <option data-hidden=\"true\"></option>
            \t\t\t\t\t\t\t\t\t\t\t\t<option value=\"T\" {% if sms.smsala_encoding == 'T' %}selected{% endif %}>Text</option>
            \t\t\t\t\t\t\t\t\t\t\t\t<option value=\"U\" {% if sms.smsala_encoding == 'U' %}selected{% endif %}>Unicode</option>
                                                        </select>
                \t\t\t\t\t\t\t\t\t</div>
                \t\t\t\t\t\t\t\t</div>
                \t\t\t\t\t\t\t\t<div class=\"form-group row\">
                \t\t\t\t\t\t\t\t\t<label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Sender ID'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                \t\t\t\t\t\t\t\t\t<div class=\"col-lg-9 col-xl-6\">
                \t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" name=\"smsala_sender_id\" value=\"{{sms.smsala_sender_id}}\" required>
                \t\t\t\t\t\t\t\t\t</div>
                \t\t\t\t\t\t\t\t</div>
            \t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t</div>
        \t\t\t\t\t</div>
        \t\t\t\t\t<div class=\"col-xl-2\"></div>
        \t\t\t\t</div>
        \t\t\t\t<div class=\"row\">
        \t\t\t\t\t<div class=\"col-xl-4\"></div>
        \t\t\t\t\t<div class=\"col-xl-8\">
                                <div class=\"form-group\">
                                    <button type=\"submit\" class=\"btn btn-primary\">{{'Save'|__}}</button>
                                </div>
                            </div>
                        </div>
                    {% elseif this.param.page == 'payment' %}
        \t\t\t\t<div class=\"row\">
        \t\t\t\t\t<div class=\"col-xl-2\"></div>
        \t\t\t\t\t<div class=\"col-xl-8\">
        \t\t\t\t\t\t<div class=\"kt-section kt-section--first\">
                                    <h3 class=\"kt-section__title kt-section__title-lg\">{{'Online Payment'|__}}:</h3>
        \t\t\t\t\t\t\t<div class=\"kt-section__body\">
        \t\t\t\t\t\t\t\t<div class=\"form-group row\">
        \t\t\t\t\t\t\t\t\t<label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Enable online payment'|__}}</label>
        \t\t\t\t\t\t\t\t\t<div class=\"col-lg-9 col-xl-6\">
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" id=\"enable_payment_gateway\" name=\"enable\" {% if payment.enable == 1 %}checked{% endif %}> {{'Yes'|__}}
                                                        <span></span>
                                                    </label>
                                                </div>
        \t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t<div class=\"{% if payment.enable != 1 %}kt-hidden{% endif %}\" id=\"payment_gateway\">
            \t\t\t\t\t\t\t\t<div class=\"form-group row\">
            \t\t\t\t\t\t\t\t\t<label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Payment Gateway'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
            \t\t\t\t\t\t\t\t\t<div class=\"col-lg-9 col-xl-6\">
            \t\t\t\t\t\t\t\t\t\t<select class=\"form-control gateway\" name=\"gateways[]\" multiple required>
                                                        <option data-hidden=\"true\"></option>
        \t\t\t\t\t\t\t\t\t\t\t\t<option value=\"paystack\" {% if 'paystack' in payment.gateways %}selected{% endif %}>Paystack</option>
                                                    </select>
            \t\t\t\t\t\t\t\t\t</div>
            \t\t\t\t\t\t\t\t</div>
            \t\t\t\t\t\t\t\t<div class=\"paystack {% if 'paystack' not in payment.gateways %}kt-hidden{% endif %}\">
                                                <div class=\"kt-portlet kt-portlet--bordered kt-portlet--head--noborder\">
                                \t\t\t\t\t<div class=\"kt-portlet__head\">
                                \t\t\t\t\t\t<div class=\"kt-portlet__head-label\">
                                \t\t\t\t\t\t\t<h3 class=\"kt-portlet__head-title kt-font-bolder\">
                                \t\t\t\t\t\t\t\t{{'Paystack'|__}}
                                \t\t\t\t\t\t\t</h3>
                                \t\t\t\t\t\t</div>
                                \t\t\t\t\t</div>
                                \t\t\t\t\t<div class=\"kt-portlet__body\">
                        \t\t\t\t\t\t\t\t<div class=\"form-group row\">
                        \t\t\t\t\t\t\t\t\t<label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Paystack public key'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                        \t\t\t\t\t\t\t\t\t<div class=\"col-lg-9 col-xl-6\">
                                                                {% if settings.demo_mode %}
                                                                    <div class=\"alert alert-danger\" role=\"alert\">
                                                                        {{'Not allowed to change it in demo.'|__}}
                                                                    </div>
                                                                {% else %}
                                                                    <input class=\"form-control\" type=\"text\" name=\"paystack_key\" value=\"{{payment.paystack_key}}\" required>
                                                                {% endif %}
                        \t\t\t\t\t\t\t\t\t</div>
                        \t\t\t\t\t\t\t\t</div>
                        \t\t\t\t\t\t\t\t<div class=\"form-group row\">
                        \t\t\t\t\t\t\t\t\t<label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Paystack secret key'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                        \t\t\t\t\t\t\t\t\t<div class=\"col-lg-9 col-xl-6\">
                                                                {% if settings.demo_mode %}
                                                                    <div class=\"alert alert-danger\" role=\"alert\">
                                                                        {{'Not allowed to change it in demo.'|__}}
                                                                    </div>
                                                                {% else %}
                                                                    <input class=\"form-control\" type=\"text\" name=\"paystack_secret\" value=\"{{payment.paystack_secret}}\" required>
                                                                {% endif %}
                        \t\t\t\t\t\t\t\t\t</div>
                        \t\t\t\t\t\t\t\t</div>
                                \t\t\t\t\t</div>
                                \t\t\t\t</div>
            \t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t</div>
        \t\t\t\t\t</div>
        \t\t\t\t\t<div class=\"col-xl-2\"></div>
        \t\t\t\t</div>
        \t\t\t\t<div class=\"row\">
        \t\t\t\t\t<div class=\"col-xl-4\"></div>
        \t\t\t\t\t<div class=\"col-xl-8\">
                                <div class=\"form-group\">
                                    <button type=\"submit\" class=\"btn btn-primary\">{{'Save'|__}}</button>
                                </div>
                            </div>
                        </div>
                    {% elseif this.param.page == 'notifications' %}
        \t\t\t\t<div class=\"row\">
        \t\t\t\t\t<div class=\"col-xl-2\"></div>
        \t\t\t\t\t<div class=\"col-xl-8\">
        \t\t\t\t\t\t<div class=\"kt-section kt-section--first\">
                                    <h3 class=\"kt-section__title kt-section__title-lg\">{{'Notifications'|__}}:</h3>
        \t\t\t\t\t\t\t<div class=\"kt-section__body\">
        \t\t\t\t\t\t\t\t<div class=\"form-group row\">
        \t\t\t\t\t\t\t\t\t<label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Enable Live Notification'|__}}</label>
        \t\t\t\t\t\t\t\t\t<div class=\"col-lg-9 col-xl-6\">
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" id=\"enable_live_notification\" name=\"live\" {% if notifications.live == 1 %}checked{% endif %}> {{'Yes'|__}}
                                                        <span></span>
                                                    </label>
                                                </div>
        \t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t<div class=\"{% if notifications.live != 1 %}kt-hidden{% endif %}\" id=\"live_notification\">
            \t\t\t\t\t\t\t\t<div class=\"form-group row\">
            \t\t\t\t\t\t\t\t\t<label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Live Notification Provider'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
            \t\t\t\t\t\t\t\t\t<div class=\"col-lg-9 col-xl-6\">
            \t\t\t\t\t\t\t\t\t\t<select class=\"form-control provider\" name=\"provider\" required>
                                                        <option data-hidden=\"true\"></option>
        \t\t\t\t\t\t\t\t\t\t\t\t<option value=\"pusher\" {% if notifications.provider == 'pusher' %}selected{% endif %}>Pusher</option>
                                                    </select>
            \t\t\t\t\t\t\t\t\t</div>
            \t\t\t\t\t\t\t\t</div>
            \t\t\t\t\t\t\t\t<div class=\"pusher {% if notifications.provider != 'pusher' %}kt-hidden{% endif %}\">
                \t\t\t\t\t\t\t\t<div class=\"form-group row\">
                \t\t\t\t\t\t\t\t\t<label class=\"col-xl-3 col-lg-3 col-form-label\">{{'App ID'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                \t\t\t\t\t\t\t\t\t<div class=\"col-lg-9 col-xl-6\">
                                                        {% if settings.demo_mode %}
                                                            <div class=\"alert alert-danger\" role=\"alert\">
                                                                {{'Not allowed to change it in demo.'|__}}
                                                            </div>
                                                        {% else %}
                                                            <input class=\"form-control\" type=\"text\" name=\"pusher[app_id]\" value=\"{{notifications.pusher.app_id}}\" required>
                                                        {% endif %}
                \t\t\t\t\t\t\t\t\t</div>
                \t\t\t\t\t\t\t\t</div>
                \t\t\t\t\t\t\t\t<div class=\"form-group row\">
                \t\t\t\t\t\t\t\t\t<label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Key'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                \t\t\t\t\t\t\t\t\t<div class=\"col-lg-9 col-xl-6\">
                                                        {% if settings.demo_mode %}
                                                            <div class=\"alert alert-danger\" role=\"alert\">
                                                                {{'Not allowed to change it in demo.'|__}}
                                                            </div>
                                                        {% else %}
                                                            <input class=\"form-control\" type=\"text\" name=\"pusher[key]\" value=\"{{notifications.pusher.key}}\" required>
                                                        {% endif %}
                \t\t\t\t\t\t\t\t\t</div>
                \t\t\t\t\t\t\t\t</div>
                \t\t\t\t\t\t\t\t<div class=\"form-group row\">
                \t\t\t\t\t\t\t\t\t<label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Secret'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                \t\t\t\t\t\t\t\t\t<div class=\"col-lg-9 col-xl-6\">
                                                        {% if settings.demo_mode %}
                                                            <div class=\"alert alert-danger\" role=\"alert\">
                                                                {{'Not allowed to change it in demo.'|__}}
                                                            </div>
                                                        {% else %}
                                                            <input class=\"form-control\" type=\"text\" name=\"pusher[secret]\" value=\"{{notifications.pusher.secret}}\" required>
                                                        {% endif %}
                \t\t\t\t\t\t\t\t\t</div>
                \t\t\t\t\t\t\t\t</div>
                \t\t\t\t\t\t\t\t<div class=\"form-group row\">
                \t\t\t\t\t\t\t\t\t<label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Cluster'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                \t\t\t\t\t\t\t\t\t<div class=\"col-lg-9 col-xl-6\">
                                                        {% if settings.demo_mode %}
                                                            <div class=\"alert alert-danger\" role=\"alert\">
                                                            {{'Not allowed to change it in demo.'|__}}
                                                            </div>
                                                        {% else %}
                                                            <select class=\"form-control\" name=\"pusher[cluster]\" required>
                                                                <option data-hidden=\"true\"></option>
                                                                <option {% if notifications.pusher.cluster == 'mt1' %}selected{% endif %} value=\"mt1\">mt1 (US East (N. Virginia))</option>
                                                                <option {% if notifications.pusher.cluster == 'ap1' %}selected{% endif %} value=\"ap1\">ap1 (Asia Pacific (Singapore))</option>
                                                                <option {% if notifications.pusher.cluster == 'ap2' %}selected{% endif %} value=\"ap2\">ap2 (Asia Pacific (Mumbai))</option>
                                                                <option {% if notifications.pusher.cluster == 'us2' %}selected{% endif %} value=\"us2\">us2 (US East (Ohio))</option>
                                                                <option {% if notifications.pusher.cluster == 'ap3' %}selected{% endif %} value=\"ap3\">ap3 (Asia Pacific (Tokyo))</option>
                                                                <option {% if notifications.pusher.cluster == 'us3' %}selected{% endif %} value=\"us3\">us3 (US West (Oregon))</option>
                                                                <option {% if notifications.pusher.cluster == 'ap4' %}selected{% endif %} value=\"ap4\">ap4 (Asia Pacific (Sydney))</option>
                                                                <option {% if notifications.pusher.cluster == 'eu' %}selected{% endif %} value=\"eu\">eu (EU (Ireland))</option></select>
                                                            </select>
                                                        {% endif %}
                \t\t\t\t\t\t\t\t\t</div>
                \t\t\t\t\t\t\t\t</div>
            \t\t\t\t\t\t\t\t</div>
            \t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t</div>


                                <div class=\"kt-section kt-section--first\">
                                    <h3 class=\"kt-section__title kt-section__title-lg\">{{'Push Notifications'|__}}:</h3>
                                    <div class=\"kt-section__body\">
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Enable Push Notification'|__}}</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" id=\"enable_push_notification\" name=\"push\" {% if push_notifications.push == 1 %}checked{% endif %}> {{'Yes'|__}}
                                                        <span></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"{% if push_notifications.push != 1 %}kt-hidden{% endif %}\" id=\"push_notification\">
                                            <div class=\"form-group row\">
                                                <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Push Notification Provider'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                <div class=\"col-lg-9 col-xl-6\">
                                                    <select class=\"form-control push_provider\" name=\"push_provider\" required>
                                                        <option data-hidden=\"true\"></option>
                                                        <option value=\"fcm\" {% if push_notifications.push_provider == 'fcm' %}selected{% endif %}>FCM</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class=\"fcm {% if push_notifications.push_provider != 'fcm' %}kt-hidden{% endif %}\"> 
                                                <div class=\"form-group row\">
                                                    <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Customer App Key'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                    <div class=\"col-lg-9 col-xl-6\">
                                                       {% if settings.demo_mode %}
                                                           <div class=\"alert alert-danger\" role=\"alert\">
                                                            {{'Not allowed to change it in demo.'|__}}
                                                          </div>
                                                        {% else %}
                                                            <input class=\"form-control\" type=\"text\" name=\"fcm[customer_key]\" value=\"{{push_notifications.fcm.customer_key}}\" required>
                                                        {% endif %}
                                                    </div>
                                                </div>
                                                <div class=\"form-group row\">
                                                    <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Employee App Key'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                    <div class=\"col-lg-9 col-xl-6\">
                                                       {% if settings.demo_mode %}
                                                           <div class=\"alert alert-danger\" role=\"alert\">
                                                            {{'Not allowed to change it in demo.'|__}}
                                                          </div>
                                                        {% else %}
                                                            <input class=\"form-control\"  type=\"text\" name=\"fcm[employee_key]\" value=\"{{push_notifications.fcm.employee_key}}\" required>
                                                        {% endif %}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>




        \t\t\t\t\t\t<div class=\"kt-section kt-section--first\">
                                    <h3 class=\"kt-section__title kt-section__title-lg\">{{'Notifications Responsibility'|__}}:</h3>
        \t\t\t\t\t\t\t<div class=\"kt-section__body\">
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'New Shipments Notifications'|__}}</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[new_shipments][]\" {% if 1 in notifications.responsibility.new_shipments %}checked{% endif %} value=\"1\" required> {{'System Administrators'|__}}
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[new_shipments][]\" {% if 2 in notifications.responsibility.new_shipments %}checked{% endif %} value=\"2\" required> {{'Supervisors'|__}}
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" class=\"select_departments\" name=\"responsibility[new_shipments][]\" {% if 3 in notifications.responsibility.new_shipments %}checked{% endif %} value=\"3\" required> {{'Departments Moderators'|__}}
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" class=\"select_departments\" name=\"responsibility[new_shipments][]\" {% if 4 in notifications.responsibility.new_shipments %}checked{% endif %} value=\"4\" required> {{'Departments Employees'|__}}
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single kt-padding-b-10 show_departments {% if 3 not in notifications.responsibility.new_shipments and 4 not in notifications.responsibility.new_shipments %}kt-hidden{% endif %}\">
            \t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"responsibility[new_shipments][departments][]\" data-live-search=\"true\" multiple title=\"{{'Choose the departments'|__}}\" required>
                                                        <option data-hidden=\"true\"></option>
                                                        {% for department in departments %}
                                                            <option value=\"{{department.id}}\" {% if department.id in notifications.responsibility.new_shipments.departments %}selected{% endif %}>{{department.name}}</option>
                                                        {% endfor %}
                                                    </select>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" class=\"select_employees\" name=\"responsibility[new_shipments][]\" {% if 5 in notifications.responsibility.new_shipments %}checked{% endif %} value=\"5\" required> {{'Employees'|__}}
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single kt-padding-b-10 show_employees {% if 5 not in notifications.responsibility.new_shipments %}kt-hidden{% endif %}\">
            \t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"responsibility[new_shipments][employees][]\" data-live-search=\"true\" multiple title=\"{{'Choose the employees'|__}}\" required>
                                                        <option data-hidden=\"true\"></option>
                                                        {% for employee in employees %}
                                                            <option value=\"{{employee.id}}\" {% if employee.id in notifications.responsibility.new_shipments.employees %}selected{% endif %}>{{employee.name}}</option>
                                                        {% endfor %}
                                                    </select>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[new_shipments][]\" {% if 6 in notifications.responsibility.new_shipments %}checked{% endif %} value=\"6\" required> {{'Sender'|__}} [{{'Client'|__}}]
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[new_shipments][]\" {% if 7 in notifications.responsibility.new_shipments %}checked{% endif %} value=\"7\" required> {{'Receiver'|__}} [{{'Client'|__}}]
                                                        <span></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'New Shipments Note Notifications'|__}}</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[new_note][]\" {% if 1 in notifications.responsibility.new_note %}checked{% endif %} value=\"1\" required> {{'System Administrators'|__}}
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[new_note][]\" {% if 2 in notifications.responsibility.new_note %}checked{% endif %} value=\"2\" required> {{'Supervisors'|__}}
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" class=\"select_departments\" name=\"responsibility[new_note][]\" {% if 3 in notifications.responsibility.new_note %}checked{% endif %} value=\"3\" required> {{'Departments Moderators'|__}}
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" class=\"select_departments\" name=\"responsibility[new_note][]\" {% if 4 in notifications.responsibility.new_note %}checked{% endif %} value=\"4\" required> {{'Departments Employees'|__}}
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single kt-padding-b-10 show_departments {% if 3 not in notifications.responsibility.new_note and 4 not in notifications.responsibility.new_note %}kt-hidden{% endif %}\">
            \t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"responsibility[new_note][departments][]\" data-live-search=\"true\" multiple title=\"{{'Choose the departments'|__}}\" required>
                                                        <option data-hidden=\"true\"></option>
                                                        {% for department in departments %}
                                                            <option value=\"{{department.id}}\" {% if department.id in notifications.responsibility.new_note.departments %}selected{% endif %}>{{department.name}}</option>
                                                        {% endfor %}
                                                    </select>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" class=\"select_employees\" name=\"responsibility[new_note][]\" {% if 5 in notifications.responsibility.new_note %}checked{% endif %} value=\"5\" required> {{'Employees'|__}}
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single kt-padding-b-10 show_employees {% if 5 not in notifications.responsibility.new_note %}kt-hidden{% endif %}\">
            \t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"responsibility[new_note][employees][]\" data-live-search=\"true\" multiple title=\"{{'Choose the employees'|__}}\" required>
                                                        <option data-hidden=\"true\"></option>
                                                        {% for employee in employees %}
                                                            <option value=\"{{employee.id}}\" {% if employee.id in notifications.responsibility.new_note.employees %}selected{% endif %}>{{employee.name}}</option>
                                                        {% endfor %}
                                                    </select>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[new_note][]\" {% if 6 in notifications.responsibility.new_note %}checked{% endif %} value=\"6\" required> {{'Sender'|__}} [{{'Client'|__}}]
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[new_note][]\" {% if 7 in notifications.responsibility.new_note %}checked{% endif %} value=\"7\" required> {{'Receiver'|__}} [{{'Client'|__}}]
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[new_note][]\" {% if 8 in notifications.responsibility.new_note %}checked{% endif %} value=\"8\" required> {{'Responsible'|__}}
                                                        <span></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Update Shipments Notifications'|__}}</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[update_shipment][]\" {% if 1 in notifications.responsibility.update_shipment %}checked{% endif %} value=\"1\" required> {{'System Administrators'|__}}
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[update_shipment][]\" {% if 2 in notifications.responsibility.update_shipment %}checked{% endif %} value=\"2\" required> {{'Supervisors'|__}}
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" class=\"select_departments\" name=\"responsibility[update_shipment][]\" {% if 3 in notifications.responsibility.update_shipment %}checked{% endif %} value=\"3\" required> {{'Departments Moderators'|__}}
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" class=\"select_departments\" name=\"responsibility[update_shipment][]\" {% if 4 in notifications.responsibility.update_shipment %}checked{% endif %} value=\"4\" required> {{'Departments Employees'|__}}
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single kt-padding-b-10 show_departments {% if 3 not in notifications.responsibility.update_shipment and 4 not in notifications.responsibility.update_shipment %}kt-hidden{% endif %}\">
            \t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"responsibility[update_shipment][departments][]\" data-live-search=\"true\" multiple title=\"{{'Choose the departments'|__}}\" required>
                                                        <option data-hidden=\"true\"></option>
                                                        {% for department in departments %}
                                                            <option value=\"{{department.id}}\" {% if department.id in notifications.responsibility.update_shipment.departments %}selected{% endif %}>{{department.name}}</option>
                                                        {% endfor %}
                                                    </select>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" class=\"select_employees\" name=\"responsibility[update_shipment][]\" {% if 5 in notifications.responsibility.update_shipment %}checked{% endif %} value=\"5\" required> {{'Employees'|__}}
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single kt-padding-b-10 show_employees {% if 5 not in notifications.responsibility.update_shipment %}kt-hidden{% endif %}\">
            \t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"responsibility[update_shipment][employees][]\" data-live-search=\"true\" multiple title=\"{{'Choose the employees'|__}}\" required>
                                                        <option data-hidden=\"true\"></option>
                                                        {% for employee in employees %}
                                                            <option value=\"{{employee.id}}\" {% if employee.id in notifications.responsibility.update_shipment.employees %}selected{% endif %}>{{employee.name}}</option>
                                                        {% endfor %}
                                                    </select>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[update_shipment][]\" {% if 6 in notifications.responsibility.update_shipment %}checked{% endif %} value=\"6\" required> {{'Sender'|__}} [{{'Client'|__}}]
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[update_shipment][]\" {% if 7 in notifications.responsibility.update_shipment %}checked{% endif %} value=\"7\" required> {{'Receiver'|__}} [{{'Client'|__}}]
                                                        <span></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Approved Shipments Notifications'|__}}</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[approved_shipment][]\" {% if 1 in notifications.responsibility.approved_shipment %}checked{% endif %} value=\"1\" required> {{'System Administrators'|__}}
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[approved_shipment][]\" {% if 2 in notifications.responsibility.approved_shipment %}checked{% endif %} value=\"2\" required> {{'Supervisors'|__}}
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" class=\"select_departments\" name=\"responsibility[approved_shipment][]\" {% if 3 in notifications.responsibility.approved_shipment %}checked{% endif %} value=\"3\" required> {{'Departments Moderators'|__}}
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" class=\"select_departments\" name=\"responsibility[approved_shipment][]\" {% if 4 in notifications.responsibility.approved_shipment %}checked{% endif %} value=\"4\" required> {{'Departments Employees'|__}}
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single kt-padding-b-10 show_departments {% if 3 not in notifications.responsibility.approved_shipment and 4 not in notifications.responsibility.approved_shipment %}kt-hidden{% endif %}\">
            \t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"responsibility[approved_shipment][departments][]\" data-live-search=\"true\" multiple title=\"{{'Choose the departments'|__}}\" required>
                                                        <option data-hidden=\"true\"></option>
                                                        {% for department in departments %}
                                                            <option value=\"{{department.id}}\" {% if department.id in notifications.responsibility.approved_shipment.departments %}selected{% endif %}>{{department.name}}</option>
                                                        {% endfor %}
                                                    </select>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" class=\"select_employees\" name=\"responsibility[approved_shipment][]\" {% if 5 in notifications.responsibility.approved_shipment %}checked{% endif %} value=\"5\" required> {{'Employees'|__}}
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single kt-padding-b-10 show_employees {% if 5 not in notifications.responsibility.approved_shipment %}kt-hidden{% endif %}\">
            \t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"responsibility[approved_shipment][employees][]\" data-live-search=\"true\" multiple title=\"{{'Choose the employees'|__}}\" required>
                                                        <option data-hidden=\"true\"></option>
                                                        {% for employee in employees %}
                                                            <option value=\"{{employee.id}}\" {% if employee.id in notifications.responsibility.approved_shipment.employees %}selected{% endif %}>{{employee.name}}</option>
                                                        {% endfor %}
                                                    </select>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[approved_shipment][]\" {% if 6 in notifications.responsibility.approved_shipment %}checked{% endif %} value=\"6\" required> {{'Sender'|__}} [{{'Client'|__}}]
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[approved_shipment][]\" {% if 7 in notifications.responsibility.approved_shipment %}checked{% endif %} value=\"7\" required> {{'Receiver'|__}} [{{'Client'|__}}]
                                                        <span></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Refused Shipments Notifications'|__}}</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[refused_shipment][]\" {% if 1 in notifications.responsibility.refused_shipment %}checked{% endif %} value=\"1\" required> {{'System Administrators'|__}}
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[refused_shipment][]\" {% if 2 in notifications.responsibility.refused_shipment %}checked{% endif %} value=\"2\" required> {{'Supervisors'|__}}
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" class=\"select_departments\" name=\"responsibility[refused_shipment][]\" {% if 3 in notifications.responsibility.refused_shipment %}checked{% endif %} value=\"3\" required> {{'Departments Moderators'|__}}
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" class=\"select_departments\" name=\"responsibility[refused_shipment][]\" {% if 4 in notifications.responsibility.refused_shipment %}checked{% endif %} value=\"4\" required> {{'Departments Employees'|__}}
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single kt-padding-b-10 show_departments {% if 3 not in notifications.responsibility.refused_shipment and 4 not in notifications.responsibility.refused_shipment %}kt-hidden{% endif %}\">
            \t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"responsibility[refused_shipment][departments][]\" data-live-search=\"true\" multiple title=\"{{'Choose the departments'|__}}\" required>
                                                        <option data-hidden=\"true\"></option>
                                                        {% for department in departments %}
                                                            <option value=\"{{department.id}}\" {% if department.id in notifications.responsibility.refused_shipment.departments %}selected{% endif %}>{{department.name}}</option>
                                                        {% endfor %}
                                                    </select>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" class=\"select_employees\" name=\"responsibility[refused_shipment][]\" {% if 5 in notifications.responsibility.refused_shipment %}checked{% endif %} value=\"5\" required> {{'Employees'|__}}
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single kt-padding-b-10 show_employees {% if 5 not in notifications.responsibility.refused_shipment %}kt-hidden{% endif %}\">
            \t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"responsibility[refused_shipment][employees][]\" data-live-search=\"true\" multiple title=\"{{'Choose the employees'|__}}\" required>
                                                        <option data-hidden=\"true\"></option>
                                                        {% for employee in employees %}
                                                            <option value=\"{{employee.id}}\" {% if employee.id in notifications.responsibility.refused_shipment.employees %}selected{% endif %}>{{employee.name}}</option>
                                                        {% endfor %}
                                                    </select>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[refused_shipment][]\" {% if 6 in notifications.responsibility.refused_shipment %}checked{% endif %} value=\"6\" required> {{'Sender'|__}} [{{'Client'|__}}]
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[refused_shipment][]\" {% if 7 in notifications.responsibility.refused_shipment %}checked{% endif %} value=\"7\" required> {{'Receiver'|__}} [{{'Client'|__}}]
                                                        <span></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Postponed Shipments Notifications'|__}}</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[postponed_shipment][]\" {% if 1 in notifications.responsibility.postponed_shipment %}checked{% endif %} value=\"1\" required> {{'System Administrators'|__}}
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[postponed_shipment][]\" {% if 2 in notifications.responsibility.postponed_shipment %}checked{% endif %} value=\"2\" required> {{'Supervisors'|__}}
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" class=\"select_departments\" name=\"responsibility[postponed_shipment][]\" {% if 3 in notifications.responsibility.postponed_shipment %}checked{% endif %} value=\"3\" required> {{'Departments Moderators'|__}}
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" class=\"select_departments\" name=\"responsibility[postponed_shipment][]\" {% if 4 in notifications.responsibility.postponed_shipment %}checked{% endif %} value=\"4\" required> {{'Departments Employees'|__}}
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single kt-padding-b-10 show_departments {% if 3 not in notifications.responsibility.postponed_shipment and 4 not in notifications.responsibility.postponed_shipment %}kt-hidden{% endif %}\">
            \t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"responsibility[postponed_shipment][departments][]\" data-live-search=\"true\" multiple title=\"{{'Choose the departments'|__}}\" required>
                                                        <option data-hidden=\"true\"></option>
                                                        {% for department in departments %}
                                                            <option value=\"{{department.id}}\" {% if department.id in notifications.responsibility.postponed_shipment.departments %}selected{% endif %}>{{department.name}}</option>
                                                        {% endfor %}
                                                    </select>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" class=\"select_employees\" name=\"responsibility[postponed_shipment][]\" {% if 5 in notifications.responsibility.postponed_shipment %}checked{% endif %} value=\"5\" required> {{'Employees'|__}}
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single kt-padding-b-10 show_employees {% if 5 not in notifications.responsibility.postponed_shipment %}kt-hidden{% endif %}\">
            \t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"responsibility[postponed_shipment][employees][]\" data-live-search=\"true\" multiple title=\"{{'Choose the employees'|__}}\" required>
                                                        <option data-hidden=\"true\"></option>
                                                        {% for employee in employees %}
                                                            <option value=\"{{employee.id}}\" {% if employee.id in notifications.responsibility.postponed_shipment.employees %}selected{% endif %}>{{employee.name}}</option>
                                                        {% endfor %}
                                                    </select>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[postponed_shipment][]\" {% if 6 in notifications.responsibility.postponed_shipment %}checked{% endif %} value=\"6\" required> {{'Sender'|__}} [{{'Client'|__}}]
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[postponed_shipment][]\" {% if 7 in notifications.responsibility.postponed_shipment %}checked{% endif %} value=\"7\" required> {{'Receiver'|__}} [{{'Client'|__}}]
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[postponed_shipment][]\" {% if 8 in notifications.responsibility.postponed_shipment %}checked{% endif %} value=\"8\" required> {{'Responsible'|__}}
                                                        <span></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Transfered Shipments Notifications'|__}}</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[transfered_shipment][]\" {% if 1 in notifications.responsibility.transfered_shipment %}checked{% endif %} value=\"1\" required> {{'System Administrators'|__}}
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[transfered_shipment][]\" {% if 2 in notifications.responsibility.transfered_shipment %}checked{% endif %} value=\"2\" required> {{'Supervisors'|__}}
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" class=\"select_departments\" name=\"responsibility[transfered_shipment][]\" {% if 3 in notifications.responsibility.transfered_shipment %}checked{% endif %} value=\"3\" required> {{'Departments Moderators'|__}}
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" class=\"select_departments\" name=\"responsibility[transfered_shipment][]\" {% if 4 in notifications.responsibility.transfered_shipment %}checked{% endif %} value=\"4\" required> {{'Departments Employees'|__}}
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single kt-padding-b-10 show_departments {% if 3 not in notifications.responsibility.transfered_shipment and 4 not in notifications.responsibility.transfered_shipment %}kt-hidden{% endif %}\">
            \t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"responsibility[transfered_shipment][departments][]\" data-live-search=\"true\" multiple title=\"{{'Choose the departments'|__}}\" required>
                                                        <option data-hidden=\"true\"></option>
                                                        {% for department in departments %}
                                                            <option value=\"{{department.id}}\" {% if department.id in notifications.responsibility.transfered_shipment.departments %}selected{% endif %}>{{department.name}}</option>
                                                        {% endfor %}
                                                    </select>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" class=\"select_employees\" name=\"responsibility[transfered_shipment][]\" {% if 5 in notifications.responsibility.transfered_shipment %}checked{% endif %} value=\"5\" required> {{'Employees'|__}}
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single kt-padding-b-10 show_employees {% if 5 not in notifications.responsibility.transfered_shipment %}kt-hidden{% endif %}\">
            \t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"responsibility[transfered_shipment][employees][]\" data-live-search=\"true\" multiple title=\"{{'Choose the employees'|__}}\" required>
                                                        <option data-hidden=\"true\"></option>
                                                        {% for employee in employees %}
                                                            <option value=\"{{employee.id}}\" {% if employee.id in notifications.responsibility.transfered_shipment.employees %}selected{% endif %}>{{employee.name}}</option>
                                                        {% endfor %}
                                                    </select>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[transfered_shipment][]\" {% if 6 in notifications.responsibility.transfered_shipment %}checked{% endif %} value=\"6\" required> {{'Sender'|__}} [{{'Client'|__}}]
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[transfered_shipment][]\" {% if 7 in notifications.responsibility.transfered_shipment %}checked{% endif %} value=\"7\" required> {{'Receiver'|__}} [{{'Client'|__}}]
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[transfered_shipment][]\" {% if 8 in notifications.responsibility.transfered_shipment %}checked{% endif %} value=\"8\" required> {{'Responsible'|__}}
                                                        <span></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Assigned Shipments Notifications'|__}}</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[assign_shipment][]\" {% if 1 in notifications.responsibility.assign_shipment %}checked{% endif %} value=\"1\" required> {{'System Administrators'|__}}
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[assign_shipment][]\" {% if 2 in notifications.responsibility.assign_shipment %}checked{% endif %} value=\"2\" required> {{'Supervisors'|__}}
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" class=\"select_departments\" name=\"responsibility[assign_shipment][]\" {% if 3 in notifications.responsibility.assign_shipment %}checked{% endif %} value=\"3\" required> {{'Departments Moderators'|__}}
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" class=\"select_departments\" name=\"responsibility[assign_shipment][]\" {% if 4 in notifications.responsibility.assign_shipment %}checked{% endif %} value=\"4\" required> {{'Departments Employees'|__}}
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single kt-padding-b-10 show_departments {% if 3 not in notifications.responsibility.assign_shipment and 4 not in notifications.responsibility.assign_shipment %}kt-hidden{% endif %}\">
            \t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"responsibility[assign_shipment][departments][]\" data-live-search=\"true\" multiple title=\"{{'Choose the departments'|__}}\" required>
                                                        <option data-hidden=\"true\"></option>
                                                        {% for department in departments %}
                                                            <option value=\"{{department.id}}\" {% if department.id in notifications.responsibility.assign_shipment.departments %}selected{% endif %}>{{department.name}}</option>
                                                        {% endfor %}
                                                    </select>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" class=\"select_employees\" name=\"responsibility[assign_shipment][]\" {% if 5 in notifications.responsibility.assign_shipment %}checked{% endif %} value=\"5\" required> {{'Employees'|__}}
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single kt-padding-b-10 show_employees {% if 5 not in notifications.responsibility.assign_shipment %}kt-hidden{% endif %}\">
            \t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"responsibility[assign_shipment][employees][]\" data-live-search=\"true\" multiple title=\"{{'Choose the employees'|__}}\" required>
                                                        <option data-hidden=\"true\"></option>
                                                        {% for employee in employees %}
                                                            <option value=\"{{employee.id}}\" {% if employee.id in notifications.responsibility.assign_shipment.employees %}selected{% endif %}>{{employee.name}}</option>
                                                        {% endfor %}
                                                    </select>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[assign_shipment][]\" {% if 6 in notifications.responsibility.assign_shipment %}checked{% endif %} value=\"6\" required> {{'Sender'|__}} [{{'Client'|__}}]
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[assign_shipment][]\" {% if 7 in notifications.responsibility.assign_shipment %}checked{% endif %} value=\"7\" required> {{'Receiver'|__}} [{{'Client'|__}}]
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[assign_shipment][]\" {% if 8 in notifications.responsibility.assign_shipment %}checked{% endif %} value=\"8\" required> {{'Responsible'|__}}
                                                        <span></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Driver Received Notifications'|__}}</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[driver_received][]\" {% if 1 in notifications.responsibility.driver_received %}checked{% endif %} value=\"1\" required> {{'System Administrators'|__}}
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[driver_received][]\" {% if 2 in notifications.responsibility.driver_received %}checked{% endif %} value=\"2\" required> {{'Supervisors'|__}}
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" class=\"select_departments\" name=\"responsibility[driver_received][]\" {% if 3 in notifications.responsibility.driver_received %}checked{% endif %} value=\"3\" required> {{'Departments Moderators'|__}}
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" class=\"select_departments\" name=\"responsibility[driver_received][]\" {% if 4 in notifications.responsibility.driver_received %}checked{% endif %} value=\"4\" required> {{'Departments Employees'|__}}
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single kt-padding-b-10 show_departments {% if 3 not in notifications.responsibility.driver_received and 4 not in notifications.responsibility.driver_received %}kt-hidden{% endif %}\">
            \t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"responsibility[driver_received][departments][]\" data-live-search=\"true\" multiple title=\"{{'Choose the departments'|__}}\" required>
                                                        <option data-hidden=\"true\"></option>
                                                        {% for department in departments %}
                                                            <option value=\"{{department.id}}\" {% if department.id in notifications.responsibility.driver_received.departments %}selected{% endif %}>{{department.name}}</option>
                                                        {% endfor %}
                                                    </select>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" class=\"select_employees\" name=\"responsibility[driver_received][]\" {% if 5 in notifications.responsibility.driver_received %}checked{% endif %} value=\"5\" required> {{'Employees'|__}}
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single kt-padding-b-10 show_employees {% if 5 not in notifications.responsibility.driver_received %}kt-hidden{% endif %}\">
            \t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"responsibility[driver_received][employees][]\" data-live-search=\"true\" multiple title=\"{{'Choose the employees'|__}}\" required>
                                                        <option data-hidden=\"true\"></option>
                                                        {% for employee in employees %}
                                                            <option value=\"{{employee.id}}\" {% if employee.id in notifications.responsibility.assign_shipment.employees %}selected{% endif %}>{{employee.name}}</option>
                                                        {% endfor %}
                                                    </select>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[driver_received][]\" {% if 6 in notifications.responsibility.driver_received %}checked{% endif %} value=\"6\" required> {{'Sender'|__}} [{{'Client'|__}}]
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[driver_received][]\" {% if 7 in notifications.responsibility.driver_received %}checked{% endif %} value=\"7\" required> {{'Receiver'|__}} [{{'Client'|__}}]
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[driver_received][]\" {% if 8 in notifications.responsibility.driver_received %}checked{% endif %} value=\"8\" required> {{'Responsible'|__}}
                                                        <span></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Discards Request Notifications'|__}}</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[discards_request][]\" {% if 1 in notifications.responsibility.discards_request %}checked{% endif %} value=\"1\" required> {{'System Administrators'|__}}
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[discards_request][]\" {% if 2 in notifications.responsibility.discards_request %}checked{% endif %} value=\"2\" required> {{'Supervisors'|__}}
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" class=\"select_departments\" name=\"responsibility[discards_request][]\" {% if 3 in notifications.responsibility.discards_request %}checked{% endif %} value=\"3\" required> {{'Departments Moderators'|__}}
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" class=\"select_departments\" name=\"responsibility[discards_request][]\" {% if 4 in notifications.responsibility.discards_request %}checked{% endif %} value=\"4\" required> {{'Departments Employees'|__}}
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single kt-padding-b-10 show_departments {% if 3 not in notifications.responsibility.discards_request and 4 not in notifications.responsibility.discards_request %}kt-hidden{% endif %}\">
            \t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"responsibility[discards_request][departments][]\" data-live-search=\"true\" multiple title=\"{{'Choose the departments'|__}}\" required>
                                                        <option data-hidden=\"true\"></option>
                                                        {% for department in departments %}
                                                            <option value=\"{{department.id}}\" {% if department.id in notifications.responsibility.discards_request.departments %}selected{% endif %}>{{department.name}}</option>
                                                        {% endfor %}
                                                    </select>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" class=\"select_employees\" name=\"responsibility[discards_request][]\" {% if 5 in notifications.responsibility.discards_request %}checked{% endif %} value=\"5\" required> {{'Employees'|__}}
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single kt-padding-b-10 show_employees {% if 5 not in notifications.responsibility.discards_request %}kt-hidden{% endif %}\">
            \t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"responsibility[discards_request][employees][]\" data-live-search=\"true\" multiple title=\"{{'Choose the employees'|__}}\" required>
                                                        <option data-hidden=\"true\"></option>
                                                        {% for employee in employees %}
                                                            <option value=\"{{employee.id}}\" {% if employee.id in notifications.responsibility.assign_shipment.employees %}selected{% endif %}>{{employee.name}}</option>
                                                        {% endfor %}
                                                    </select>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[discards_request][]\" {% if 6 in notifications.responsibility.discards_request %}checked{% endif %} value=\"6\" required> {{'Sender'|__}} [{{'Client'|__}}]
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[discards_request][]\" {% if 7 in notifications.responsibility.discards_request %}checked{% endif %} value=\"7\" required> {{'Receiver'|__}} [{{'Client'|__}}]
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[discards_request][]\" {% if 8 in notifications.responsibility.discards_request %}checked{% endif %} value=\"8\" required> {{'Responsible'|__}}
                                                        <span></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Received Notifications'|__}}</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[received][]\" {% if 1 in notifications.responsibility.received %}checked{% endif %} value=\"1\" required> {{'System Administrators'|__}}
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[received][]\" {% if 2 in notifications.responsibility.received %}checked{% endif %} value=\"2\" required> {{'Supervisors'|__}}
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" class=\"select_departments\" name=\"responsibility[received][]\" {% if 3 in notifications.responsibility.received %}checked{% endif %} value=\"3\" required> {{'Departments Moderators'|__}}
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" class=\"select_departments\" name=\"responsibility[received][]\" {% if 4 in notifications.responsibility.received %}checked{% endif %} value=\"4\" required> {{'Departments Employees'|__}}
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single kt-padding-b-10 show_departments {% if 3 not in notifications.responsibility.received and 4 not in notifications.responsibility.received %}kt-hidden{% endif %}\">
            \t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"responsibility[received][departments][]\" data-live-search=\"true\" multiple title=\"{{'Choose the departments'|__}}\" required>
                                                        <option data-hidden=\"true\"></option>
                                                        {% for department in departments %}
                                                            <option value=\"{{department.id}}\" {% if department.id in notifications.responsibility.received.departments %}selected{% endif %}>{{department.name}}</option>
                                                        {% endfor %}
                                                    </select>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" class=\"select_employees\" name=\"responsibility[received][]\" {% if 5 in notifications.responsibility.received %}checked{% endif %} value=\"5\" required> {{'Employees'|__}}
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single kt-padding-b-10 show_employees {% if 5 not in notifications.responsibility.received %}kt-hidden{% endif %}\">
            \t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"responsibility[received][employees][]\" data-live-search=\"true\" multiple title=\"{{'Choose the employees'|__}}\" required>
                                                        <option data-hidden=\"true\"></option>
                                                        {% for employee in employees %}
                                                            <option value=\"{{employee.id}}\" {% if employee.id in notifications.responsibility.assign_shipment.employees %}selected{% endif %}>{{employee.name}}</option>
                                                        {% endfor %}
                                                    </select>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[received][]\" {% if 6 in notifications.responsibility.received %}checked{% endif %} value=\"6\" required> {{'Sender'|__}} [{{'Client'|__}}]
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[received][]\" {% if 7 in notifications.responsibility.received %}checked{% endif %} value=\"7\" required> {{'Receiver'|__}} [{{'Client'|__}}]
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[received][]\" {% if 8 in notifications.responsibility.received %}checked{% endif %} value=\"8\" required> {{'Responsible'|__}}
                                                        <span></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Manifest Notifications'|__}}</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[manifest_assigned][]\" {% if 1 in notifications.responsibility.manifest_assigned %}checked{% endif %} value=\"1\" required> {{'System Administrators'|__}}
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[manifest_assigned][]\" {% if 2 in notifications.responsibility.manifest_assigned %}checked{% endif %} value=\"2\" required> {{'Supervisors'|__}}
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" class=\"select_departments\" name=\"responsibility[manifest_assigned][]\" {% if 3 in notifications.responsibility.manifest_assigned %}checked{% endif %} value=\"3\" required> {{'Departments Moderators'|__}}
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" class=\"select_departments\" name=\"responsibility[manifest_assigned][]\" {% if 4 in notifications.responsibility.manifest_assigned %}checked{% endif %} value=\"4\" required> {{'Departments Employees'|__}}
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single kt-padding-b-10 show_departments {% if 3 not in notifications.responsibility.manifest_assigned and 4 not in notifications.responsibility.manifest_assigned %}kt-hidden{% endif %}\">
            \t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"responsibility[manifest_assigned][departments][]\" data-live-search=\"true\" multiple title=\"{{'Choose the departments'|__}}\" required>
                                                        <option data-hidden=\"true\"></option>
                                                        {% for department in departments %}
                                                            <option value=\"{{department.id}}\" {% if department.id in notifications.responsibility.manifest_assigned.departments %}selected{% endif %}>{{department.name}}</option>
                                                        {% endfor %}
                                                    </select>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" class=\"select_employees\" name=\"responsibility[manifest_assigned][]\" {% if 5 in notifications.responsibility.manifest_assigned %}checked{% endif %} value=\"5\" required> {{'Employees'|__}}
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single kt-padding-b-10 show_employees {% if 5 not in notifications.responsibility.manifest_assigned %}kt-hidden{% endif %}\">
            \t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"responsibility[manifest_assigned][employees][]\" data-live-search=\"true\" multiple title=\"{{'Choose the employees'|__}}\" required>
                                                        <option data-hidden=\"true\"></option>
                                                        {% for employee in employees %}
                                                            <option value=\"{{employee.id}}\" {% if employee.id in notifications.responsibility.assign_shipment.employees %}selected{% endif %}>{{employee.name}}</option>
                                                        {% endfor %}
                                                    </select>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[manifest_assigned][]\" {% if 6 in notifications.responsibility.manifest_assigned %}checked{% endif %} value=\"6\" required> {{'Sender'|__}} [{{'Client'|__}}]
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[manifest_assigned][]\" {% if 7 in notifications.responsibility.manifest_assigned %}checked{% endif %} value=\"7\" required> {{'Receiver'|__}} [{{'Client'|__}}]
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[manifest_assigned][]\" {% if 8 in notifications.responsibility.manifest_assigned %}checked{% endif %} value=\"8\" required> {{'Responsible'|__}}
                                                        <span></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Saved in stock Notifications'|__}}</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[stock_saved][]\" {% if 1 in notifications.responsibility.stock_saved %}checked{% endif %} value=\"1\" required> {{'System Administrators'|__}}
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[stock_saved][]\" {% if 2 in notifications.responsibility.stock_saved %}checked{% endif %} value=\"2\" required> {{'Supervisors'|__}}
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" class=\"select_departments\" name=\"responsibility[stock_saved][]\" {% if 3 in notifications.responsibility.stock_saved %}checked{% endif %} value=\"3\" required> {{'Departments Moderators'|__}}
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" class=\"select_departments\" name=\"responsibility[stock_saved][]\" {% if 4 in notifications.responsibility.stock_saved %}checked{% endif %} value=\"4\" required> {{'Departments Employees'|__}}
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single kt-padding-b-10 show_departments {% if 3 not in notifications.responsibility.stock_saved and 4 not in notifications.responsibility.stock_saved %}kt-hidden{% endif %}\">
            \t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"responsibility[stock_saved][departments][]\" data-live-search=\"true\" multiple title=\"{{'Choose the departments'|__}}\" required>
                                                        <option data-hidden=\"true\"></option>
                                                        {% for department in departments %}
                                                            <option value=\"{{department.id}}\" {% if department.id in notifications.responsibility.stock_saved.departments %}selected{% endif %}>{{department.name}}</option>
                                                        {% endfor %}
                                                    </select>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" class=\"select_employees\" name=\"responsibility[stock_saved][]\" {% if 5 in notifications.responsibility.stock_saved %}checked{% endif %} value=\"5\" required> {{'Employees'|__}}
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single kt-padding-b-10 show_employees {% if 5 not in notifications.responsibility.stock_saved %}kt-hidden{% endif %}\">
            \t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"responsibility[stock_saved][employees][]\" data-live-search=\"true\" multiple title=\"{{'Choose the employees'|__}}\" required>
                                                        <option data-hidden=\"true\"></option>
                                                        {% for employee in employees %}
                                                            <option value=\"{{employee.id}}\" {% if employee.id in notifications.responsibility.assign_shipment.employees %}selected{% endif %}>{{employee.name}}</option>
                                                        {% endfor %}
                                                    </select>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[stock_saved][]\" {% if 6 in notifications.responsibility.stock_saved %}checked{% endif %} value=\"6\" required> {{'Sender'|__}} [{{'Client'|__}}]
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[stock_saved][]\" {% if 7 in notifications.responsibility.stock_saved %}checked{% endif %} value=\"7\" required> {{'Receiver'|__}} [{{'Client'|__}}]
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[stock_saved][]\" {% if 8 in notifications.responsibility.stock_saved %}checked{% endif %} value=\"8\" required> {{'Responsible'|__}}
                                                        <span></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Returned Notifications'|__}}</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[returned][]\" {% if 1 in notifications.responsibility.returned %}checked{% endif %} value=\"1\" required> {{'System Administrators'|__}}
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[returned][]\" {% if 2 in notifications.responsibility.returned %}checked{% endif %} value=\"2\" required> {{'Supervisors'|__}}
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" class=\"select_departments\" name=\"responsibility[returned][]\" {% if 3 in notifications.responsibility.returned %}checked{% endif %} value=\"3\" required> {{'Departments Moderators'|__}}
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" class=\"select_departments\" name=\"responsibility[returned][]\" {% if 4 in notifications.responsibility.returned %}checked{% endif %} value=\"4\" required> {{'Departments Employees'|__}}
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single kt-padding-b-10 show_departments {% if 3 not in notifications.responsibility.returned and 4 not in notifications.responsibility.returned %}kt-hidden{% endif %}\">
            \t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"responsibility[returned][departments][]\" data-live-search=\"true\" multiple title=\"{{'Choose the departments'|__}}\" required>
                                                        <option data-hidden=\"true\"></option>
                                                        {% for department in departments %}
                                                            <option value=\"{{department.id}}\" {% if department.id in notifications.responsibility.returned.departments %}selected{% endif %}>{{department.name}}</option>
                                                        {% endfor %}
                                                    </select>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" class=\"select_employees\" name=\"responsibility[returned][]\" {% if 5 in notifications.responsibility.returned %}checked{% endif %} value=\"5\" required> {{'Employees'|__}}
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single kt-padding-b-10 show_employees {% if 5 not in notifications.responsibility.returned %}kt-hidden{% endif %}\">
            \t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"responsibility[returned][employees][]\" data-live-search=\"true\" multiple title=\"{{'Choose the employees'|__}}\" required>
                                                        <option data-hidden=\"true\"></option>
                                                        {% for employee in employees %}
                                                            <option value=\"{{employee.id}}\" {% if employee.id in notifications.responsibility.assign_shipment.employees %}selected{% endif %}>{{employee.name}}</option>
                                                        {% endfor %}
                                                    </select>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[returned][]\" {% if 6 in notifications.responsibility.returned %}checked{% endif %} value=\"6\" required> {{'Sender'|__}} [{{'Client'|__}}]
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[returned][]\" {% if 7 in notifications.responsibility.returned %}checked{% endif %} value=\"7\" required> {{'Receiver'|__}} [{{'Client'|__}}]
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[returned][]\" {% if 8 in notifications.responsibility.returned %}checked{% endif %} value=\"8\" required> {{'Responsible'|__}}
                                                        <span></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Delivered Notifications'|__}}</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[delivered][]\" {% if 1 in notifications.responsibility.delivered %}checked{% endif %} value=\"1\" required> {{'System Administrators'|__}}
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[delivered][]\" {% if 2 in notifications.responsibility.delivered %}checked{% endif %} value=\"2\" required> {{'Supervisors'|__}}
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" class=\"select_departments\" name=\"responsibility[delivered][]\" {% if 3 in notifications.responsibility.delivered %}checked{% endif %} value=\"3\" required> {{'Departments Moderators'|__}}
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" class=\"select_departments\" name=\"responsibility[delivered][]\" {% if 4 in notifications.responsibility.delivered %}checked{% endif %} value=\"4\" required> {{'Departments Employees'|__}}
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single kt-padding-b-10 show_departments {% if 3 not in notifications.responsibility.delivered and 4 not in notifications.responsibility.delivered %}kt-hidden{% endif %}\">
            \t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"responsibility[delivered][departments][]\" data-live-search=\"true\" multiple title=\"{{'Choose the departments'|__}}\" required>
                                                        <option data-hidden=\"true\"></option>
                                                        {% for department in departments %}
                                                            <option value=\"{{department.id}}\" {% if department.id in notifications.responsibility.delivered.departments %}selected{% endif %}>{{department.name}}</option>
                                                        {% endfor %}
                                                    </select>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" class=\"select_employees\" name=\"responsibility[delivered][]\" {% if 5 in notifications.responsibility.delivered %}checked{% endif %} value=\"5\" required> {{'Employees'|__}}
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single kt-padding-b-10 show_employees {% if 5 not in notifications.responsibility.delivered %}kt-hidden{% endif %}\">
            \t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"responsibility[delivered][employees][]\" data-live-search=\"true\" multiple title=\"{{'Choose the employees'|__}}\" required>
                                                        <option data-hidden=\"true\"></option>
                                                        {% for employee in employees %}
                                                            <option value=\"{{employee.id}}\" {% if employee.id in notifications.responsibility.assign_shipment.employees %}selected{% endif %}>{{employee.name}}</option>
                                                        {% endfor %}
                                                    </select>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[delivered][]\" {% if 6 in notifications.responsibility.delivered %}checked{% endif %} value=\"6\" required> {{'Sender'|__}} [{{'Client'|__}}]
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[delivered][]\" {% if 7 in notifications.responsibility.delivered %}checked{% endif %} value=\"7\" required> {{'Receiver'|__}} [{{'Client'|__}}]
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[delivered][]\" {% if 8 in notifications.responsibility.delivered %}checked{% endif %} value=\"8\" required> {{'Responsible'|__}}
                                                        <span></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Return Discards Notifications'|__}}</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[return_discards][]\" {% if 1 in notifications.responsibility.return_discards %}checked{% endif %} value=\"1\" required> {{'System Administrators'|__}}
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[return_discards][]\" {% if 2 in notifications.responsibility.return_discards %}checked{% endif %} value=\"2\" required> {{'Supervisors'|__}}
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" class=\"select_departments\" name=\"responsibility[return_discards][]\" {% if 3 in notifications.responsibility.return_discards %}checked{% endif %} value=\"3\" required> {{'Departments Moderators'|__}}
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" class=\"select_departments\" name=\"responsibility[return_discards][]\" {% if 4 in notifications.responsibility.return_discards %}checked{% endif %} value=\"4\" required> {{'Departments Employees'|__}}
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single kt-padding-b-10 show_departments {% if 3 not in notifications.responsibility.return_discards and 4 not in notifications.responsibility.return_discards %}kt-hidden{% endif %}\">
            \t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"responsibility[return_discards][departments][]\" data-live-search=\"true\" multiple title=\"{{'Choose the departments'|__}}\" required>
                                                        <option data-hidden=\"true\"></option>
                                                        {% for department in departments %}
                                                            <option value=\"{{department.id}}\" {% if department.id in notifications.responsibility.return_discards.departments %}selected{% endif %}>{{department.name}}</option>
                                                        {% endfor %}
                                                    </select>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" class=\"select_employees\" name=\"responsibility[return_discards][]\" {% if 5 in notifications.responsibility.return_discards %}checked{% endif %} value=\"5\" required> {{'Employees'|__}}
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single kt-padding-b-10 show_employees {% if 5 not in notifications.responsibility.return_discards %}kt-hidden{% endif %}\">
            \t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"responsibility[return_discards][employees][]\" data-live-search=\"true\" multiple title=\"{{'Choose the employees'|__}}\" required>
                                                        <option data-hidden=\"true\"></option>
                                                        {% for employee in employees %}
                                                            <option value=\"{{employee.id}}\" {% if employee.id in notifications.responsibility.assign_shipment.employees %}selected{% endif %}>{{employee.name}}</option>
                                                        {% endfor %}
                                                    </select>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[return_discards][]\" {% if 6 in notifications.responsibility.return_discards %}checked{% endif %} value=\"6\" required> {{'Sender'|__}} [{{'Client'|__}}]
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[return_discards][]\" {% if 7 in notifications.responsibility.return_discards %}checked{% endif %} value=\"7\" required> {{'Receiver'|__}} [{{'Client'|__}}]
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"responsibility[return_discards][]\" {% if 8 in notifications.responsibility.return_discards %}checked{% endif %} value=\"8\" required> {{'Responsible'|__}}
                                                        <span></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
        \t\t\t\t\t</div>
        \t\t\t\t\t<div class=\"col-xl-2\"></div>
        \t\t\t\t</div>
        \t\t\t\t<div class=\"row\">
        \t\t\t\t\t<div class=\"col-xl-4\"></div>
        \t\t\t\t\t<div class=\"col-xl-8\">
                                <div class=\"form-group\">
                                    <button type=\"submit\" class=\"btn btn-primary\">{{'Save'|__}}</button>
                                </div>
                            </div>
                        </div>
                    {% elseif this.param.page == 'google' %}
        \t\t\t\t<div class=\"row\">
        \t\t\t\t\t<div class=\"col-xl-2\"></div>
        \t\t\t\t\t<div class=\"col-xl-8\">
        \t\t\t\t\t\t<div class=\"kt-section kt-section--first\">
                                    <h3 class=\"kt-section__title kt-section__title-lg\">{{'Google APIs'|__}}:</h3>
        \t\t\t\t\t\t\t<div class=\"kt-section__body\">
                                        <div class=\"kt-section\">
                        \t\t\t\t\t<h5 class=\"kt-section__title kt-margin-b-20\">
                        \t\t\t\t\t\t{{'Google Maps'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span>
                        \t\t\t\t\t</h5>
                        \t\t\t\t\t<div class=\"kt-section__content\">
                                                <div class=\"form-group row\">
                                                    <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Key'|__}}</label>
                                                    <div class=\"col-lg-9 col-xl-6\">
                                                       {% if settings.demo_mode %}
                                                           <div class=\"alert alert-danger\" role=\"alert\">
                                                            {{'Not allowed to change it in demo.'|__}}
                                                          </div>
                                                        {% else %}
                                                            <input class=\"form-control\" type=\"text\" name=\"map[key]\" value=\"{{google.map.key}}\" required>
                                                        {% endif %}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit\"></div>
        \t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t</div>
        \t\t\t\t\t</div>
        \t\t\t\t\t<div class=\"col-xl-2\"></div>
        \t\t\t\t</div>
        \t\t\t\t<div class=\"row\">
        \t\t\t\t\t<div class=\"col-xl-4\"></div>
        \t\t\t\t\t<div class=\"col-xl-8\">
                                <div class=\"form-group\">
                                    <button type=\"submit\" class=\"btn btn-primary\">{{'Save'|__}}</button>
                                </div>
                            </div>
                        </div>
                    {% elseif this.param.page == 'currencies' %}
                        <div class=\"kt-section kt-section--first\">
                            <div class=\"kt-section__body\">
                                <div class=\"kt-datatable\"></div>
                            </div>
                        </div>
                    {% elseif this.param.page == 'languages' %}
                        <div class=\"kt-section kt-section--first\">
                            <div class=\"kt-section__body\">
                                <div class=\"kt-datatable\"></div>
                            </div>
                        </div>
                    {% elseif this.param.page == 'departments' %}
                        <div class=\"kt-section kt-section--first\">
                            <div class=\"kt-section__body\">
                                <div class=\"kt-datatable\"></div>
                            </div>
                        </div>
                    {% elseif this.param.page == 'employees' %}
                        <div class=\"kt-section kt-section--first\">
                            <div class=\"kt-section__body\">
                                <div class=\"kt-datatable\"></div>
                            </div>
                        </div>
                    {% elseif this.param.page == 'translate' %}
                        <div class=\"kt-section kt-section--first\">
                            <div class=\"kt-section__body\">
                                <table class=\"table table-striped- table-bordered table-hover table-checkable\" id=\"kt_table_1\">
                                \t<thead>
                                \t\t<tr>
                                \t\t\t{% for lang in languages %}
                                \t\t\t\t<th>{{lang.name}}</th>
                                \t\t\t{% endfor %}
                                \t\t</tr>
                                \t</thead>
                                </table>
                            </div>
                        </div>
                    {% elseif this.param.page == 'backup' %}
                        <div class=\"kt-section kt-section--first\">
                            <div class=\"kt-section__body\">
                                <div class=\"kt-datatable\"></div>
                            </div>
                        </div>
                    {% endif %}
                {{ form_close() }}
        \t</div>
        </div>
    </div>
</div>


{% put styles %}
    {% if this.param.page == 'company' %}
        <style>
            #map_canvas {
              height: 350px;
            }
        </style>
    {% elseif this.param.page == 'translate' %}
        <style>
            label.translate {
                display: block;
                width: 100%;
                line-height: 24px;
                min-height: 24px;
            }
        </style>
    {% endif %}
{% endput %}
{% put scripts %}
{% if this.param.page == 'company' %}
    <script src=\"{{ 'assets/admin/vendors/custom/geocomplete/jquery.geocomplete.js'|theme }}\" type=\"text/javascript\"></script>
    <script src=\"//maps.googleapis.com/maps/api/js?libraries=places&key={{settings.google.map.key}}\"></script>
{% elseif (this.param.page == 'translate' or this.param.page == 'backup' or this.param.page == 'languages' or this.param.page == 'currencies' or this.param.page == 'departments' or this.param.page == 'branches' or this.param.page == 'branches' or this.param.page == 'cars' or this.param.page == 'cars' or this.param.page == 'packaging' or this.param.page == 'countries' or this.param.page == 'states' or this.param.page == 'cities' or this.param.page == 'areas' or this.param.page == 'fees' or this.param.page == 'destination' or this.param.page == 'location' or this.param.page == 'statuscontainer' or this.param.page == 'reasonarrival' or this.param.page == 'size' or this.param.page == 'labels' or this.param.page == 'handler' or this.param.page == 'break' ) %}
    <script src=\"{{ 'assets/admin/vendors/custom/datatables/datatables.bundle.js'|theme }}\" type=\"text/javascript\"></script>
{% endif %}



<script>
\"use strict\";
var KTAppUserListDatatable = function () {
    // variables
    var datatable;
    // init
    var init = function () {
        // init the datatables. Learn more: //keenthemes.com/metronic/?page=docs&section=datatable
        datatable = \$('.kt-datatable').KTDatatable({
            translate: {
                records: {
                    processing: '{{\"Please wait\"|__}}...',
                    noRecords: '{{\"No records found\"|__}}'
                },
                toolbar: {
                    pagination: {
                        items: {
                            default: {
                                first: '{{\"First\"|__}}',
                                prev: '{{\"Previous\"|__}}',
                                next: '{{\"Next\"|__}}',
                                last: '{{\"Last\"|__}}',
                                more: '{{\"More pages\"|__}}',
                                input: '{{\"Page number\"|__}}',
                                select: '{{\"Select page size\"|__}}'
                            },

                            //info: \"{{\"Displaying\"|__}} {{start|escape('js')}} - {{end}} {{\"of\"|__}} {{total}} {{\"records\"|__}}\"
                        }
                    }
                }
            },

            // layout definition
            layout: {
                scroll: false, // enable/disable datatable scroll both horizontal and vertical when needed.
                footer: false, // display/hide footer
            },

            // column sorting
            sortable: true,

            pagination: true,

            search: {
                input: \$('#generalSearch'),
                delay: 400,
            },
            {% if this.param.page == 'languages' %}
                // datasource definition
                data: {
                    type: 'remote',
                    source: {
                        read: {
                            url: '{{url(\"api/languages\")}}',
                        },
                    },
                    pageSize: 10, // display 20 records per page
                    serverPaging: true,
                    serverFiltering: true,
                    serverSorting: true,
                },
                // columns definition
                columns: [
                    {
                        field: 'id',
                        title: '#',
                        sortable: false,
                        width: 20,
                        selector: {
                            class: 'kt-checkbox--solid'
                        },
                        textAlign: 'center',
                    },
                    {
                        field: \"name\",
                        title: \"{{'Name'|__}}\",
                        autoHide: false,
                        sortable: false,
                        width: 'auto',
                    },
                    {
                        field: \"code\",
                        title: \"{{'Code'|__}}\",
                        autoHide: false,
                        sortable: false,
                        width: 'auto',
                    },
                    {
                        field: \"is_enabled\",
                        title: \"{{'Enabled'|__}}\",
                        autoHide: false,
                        sortable: false,
                        width: 'auto',
        \t\t\t\t// callback function support for column rendering
        \t\t\t\ttemplate: function(row) {

        \t\t\t\t\tvar status = {
                                1: {
                                    'title': '{{\"Yes\"|__}}',
                                    'class': 'success'
                                },
        \t\t\t\t\t\t0: {
        \t\t\t\t\t\t\t'title': '{{\"No\"|__}}',
        \t\t\t\t\t\t\t'class': 'danger'
        \t\t\t\t\t\t},
        \t\t\t\t\t\t'null': {
        \t\t\t\t\t\t\t'title': '{{\"No\"|__}}',
        \t\t\t\t\t\t\t'class': 'danger'
        \t\t\t\t\t\t},
        \t\t\t\t\t};
                            return '<span class=\"kt-badge kt-badge--' + status[row.is_enabled].class + ' kt-badge--dot\"></span>&nbsp;<span class=\"kt-font-bold kt-font-' + status[row.is_enabled].class + '\">' + status[row.is_enabled].title + '</span>';
        \t\t\t\t}
                    },{
        \t\t\t\tfield: \"is_default\",
        \t\t\t\ttitle: \"{{'Default'|__}}\",
        \t\t\t\twidth: 'auto',
                        sortable: true,
                        width: 120,
        \t\t\t\t// callback function support for column rendering
        \t\t\t\ttemplate: function(row) {

        \t\t\t\t\tvar status = {
                                1: {
                                    'title': '{{\"Yes\"|__}}',
                                    'class': 'success'
                                },
        \t\t\t\t\t\t0: {
        \t\t\t\t\t\t\t'title': '{{\"No\"|__}}',
        \t\t\t\t\t\t\t'class': 'danger'
        \t\t\t\t\t\t},
        \t\t\t\t\t\t'null': {
        \t\t\t\t\t\t\t'title': '{{\"No\"|__}}',
        \t\t\t\t\t\t\t'class': 'danger'
        \t\t\t\t\t\t},
        \t\t\t\t\t};
                            return '<span class=\"kt-badge kt-badge--' + status[row.is_default].class + ' kt-badge--dot\"></span>&nbsp;<span class=\"kt-font-bold kt-font-' + status[row.is_default].class + '\">' + status[row.is_default].title + '</span>';
        \t\t\t\t}
                    },
                    {
                        field: \"Actions\",
                        width: 'auto',
                        title: \"{{'Actions'|__}}\",
                        sortable: false,
                        autoHide: false,
                        overflow: 'visible',
                        template: function (data) {
                                {% if (user.hasUserPermission('languages', 'u') or user.hasUserPermission('languages', 'd')) %}
                                    return '' +
                                    '<div class=\"btn-group btn-group\" role=\"group\" aria-label=\"...\">'+
                                        {% if user.hasUserPermission('languages', 'd') %}
                                        '<a href=\"javascript:void(0);\" class=\"btn btn-danger btn-sm delete_record kt-font-light\" rel=\"'+data.id+'\" data-type=\"languages\"><i class=\"flaticon2-delete\"></i>&nbsp;{{\"Delete\"|__}}</a>'+
                                        {% endif %}
                                    '</div>';
                                {% else %}
                                    return '-';
                                {% endif %}
                        },
                    }
                ]
            {% elseif this.param.page == 'currencies' %}
                // datasource definition
                data: {
                    type: 'remote',
                    source: {
                        read: {
                            url: '{{url(\"api/currencies\")}}',
                        },
                    },
                    pageSize: 10, // display 20 records per page
                    serverPaging: true,
                    serverFiltering: true,
                    serverSorting: true,
                },
                // columns definition
                columns: [
                    {
                        field: 'id',
                        title: '#',
                        sortable: false,
                        width: 20,
                        selector: {
                            class: 'kt-checkbox--solid'
                        },
                        textAlign: 'center',
                    },
                    {
                        field: \"name\",
                        title: \"{{'Name'|__}}\",
                        autoHide: false,
                        sortable: false,
                        width: 'auto',
                    },
                    {
                        field: \"code\",
                        title: \"{{'Code'|__}}\",
                        autoHide: false,
                        sortable: false,
                        width: 'auto',
                    },
                    {
                        field: \"is_enabled\",
                        title: \"{{'Enabled'|__}}\",
                        autoHide: false,
                        sortable: false,
                        width: 'auto',
        \t\t\t\t// callback function support for column rendering
        \t\t\t\ttemplate: function(row) {

        \t\t\t\t\tvar status = {
                                1: {
                                    'title': '{{\"Yes\"|__}}',
                                    'class': 'success'
                                },
        \t\t\t\t\t\t0: {
        \t\t\t\t\t\t\t'title': '{{\"No\"|__}}',
        \t\t\t\t\t\t\t'class': 'danger'
        \t\t\t\t\t\t},
        \t\t\t\t\t\t'null': {
        \t\t\t\t\t\t\t'title': '{{\"No\"|__}}',
        \t\t\t\t\t\t\t'class': 'danger'
        \t\t\t\t\t\t},
        \t\t\t\t\t};
                            return '<span class=\"kt-badge kt-badge--' + status[row.is_enabled].class + ' kt-badge--dot\"></span>&nbsp;<span class=\"kt-font-bold kt-font-' + status[row.is_enabled].class + '\">' + status[row.is_enabled].title + '</span>';
        \t\t\t\t}
                    },{
        \t\t\t\tfield: \"is_default\",
        \t\t\t\ttitle: \"{{'Default'|__}}\",
        \t\t\t\twidth: 'auto',
                        sortable: true,
                        width: 120,
        \t\t\t\t// callback function support for column rendering
        \t\t\t\ttemplate: function(row) {

        \t\t\t\t\tvar status = {
                                1: {
                                    'title': '{{\"Yes\"|__}}',
                                    'class': 'success'
                                },
        \t\t\t\t\t\t0: {
        \t\t\t\t\t\t\t'title': '{{\"No\"|__}}',
        \t\t\t\t\t\t\t'class': 'danger'
        \t\t\t\t\t\t},
        \t\t\t\t\t\t'null': {
        \t\t\t\t\t\t\t'title': '{{\"No\"|__}}',
        \t\t\t\t\t\t\t'class': 'danger'
        \t\t\t\t\t\t},
        \t\t\t\t\t};
                            return '<span class=\"kt-badge kt-badge--' + status[row.is_default].class + ' kt-badge--dot\"></span>&nbsp;<span class=\"kt-font-bold kt-font-' + status[row.is_default].class + '\">' + status[row.is_default].title + '</span>';
        \t\t\t\t}
                    },
                    {
                        field: \"Actions\",
                        width: 'auto',
                        title: \"{{'Actions'|__}}\",
                        sortable: false,
                        autoHide: false,
                        overflow: 'visible',
                        template: function (data) {
                                {% if (user.hasUserPermission('currencies', 'u') or user.hasUserPermission('currencies', 'd')) %}
                                    return '' +
                                    '<div class=\"btn-group btn-group\" role=\"group\" aria-label=\"...\">'+
                                        {% if user.hasUserPermission('currencies', 'u') %}
                                        '<a href=\"{{url(\"dashboard/settings/currencies\")}}/'+data.id+'/edit\" class=\"btn btn-info btn-sm\"><i class=\"flaticon-edit\"></i>&nbsp;{{\"Edit\"|__}}</button>'+
                                        {% endif %}
                                        {% if user.hasUserPermission('currencies', 'd') %}
                                        '<a href=\"javascript:void(0);\" class=\"btn btn-danger btn-sm delete_record kt-font-light\" rel=\"'+data.id+'\" data-type=\"currencies\"><i class=\"flaticon2-delete\"></i>&nbsp;{{\"Delete\"|__}}</a>'+
                                        {% endif %}
                                    '</div>';
                                {% else %}
                                    return '-';
                                {% endif %}
                        },
                    }
                ]
            {% elseif this.param.page == 'departments' %}
                // datasource definition
                data: {
                    type: 'remote',
                    source: {
                        read: {
                            url: '{{url(\"api/departments\")}}',
                        },
                    },
                    pageSize: 10, // display 20 records per page
                    serverPaging: true,
                    serverFiltering: true,
                    serverSorting: true,
                },
                // columns definition
                columns: [
                    {
                        field: 'id',
                        title: '#',
                        sortable: false,
                        width: 20,
                        selector: {
                            class: 'kt-checkbox--solid'
                        },
                        textAlign: 'center',
                    },
                    {
                        field: \"name\",
                        title: \"{{'Name'|__}}\",
                        autoHide: false,
                        sortable: false,
                        width: 'auto',
                    },
                    {
                        field: \"code\",
                        title: \"{{'Code'|__}}\",
                        autoHide: false,
                        sortable: false,
                        width: 'auto',
                    },
                    {
                        field: \"Actions\",
                        width: 'auto',
                        title: \"{{'Actions'|__}}\",
                        sortable: false,
                        autoHide: false,
                        overflow: 'visible',
                        template: function (data) {
                                {% if (user.hasUserPermission('departments', 'u') or user.hasUserPermission('departments', 'd')) %}
                                    return '' +
                                    '<div class=\"btn-group btn-group\" role=\"group\" aria-label=\"...\">'+
                                        {% if user.hasUserPermission('departments', 'u') %}
                                        '<a href=\"{{url(\"dashboard/settings/departments\")}}/'+data.id+'/edit\" class=\"btn btn-info btn-sm\"><i class=\"flaticon-edit\"></i>&nbsp;{{\"Edit\"|__}}</button>'+
                                        {% endif %}
                                        {% if user.hasUserPermission('departments', 'd') %}
                                        '<a href=\"javascript:void(0);\" class=\"btn btn-danger btn-sm delete_record kt-font-light\" rel=\"'+data.id+'\" data-type=\"departments\"><i class=\"flaticon2-delete\"></i>&nbsp;{{\"Delete\"|__}}</a>'+
                                        {% endif %}
                                    '</div>';
                                {% else %}
                                    return '-';
                                {% endif %}
                        },
                    }
                ]
            {% elseif this.param.page == 'branches' %}
                // datasource definition
                data: {
                    type: 'remote',
                    source: {
                        read: {
                            url: '{{url(\"api/branches\")}}',
                        },
                    },
                    pageSize: 10, // display 20 records per page
                    serverPaging: true,
                    serverFiltering: true,
                    serverSorting: true,
                },
                // columns definition
                columns: [
                    {
                        field: 'id',
                        title: '#',
                        sortable: false,
                        width: 20,
                        selector: {
                            class: 'kt-checkbox--solid'
                        },
                        textAlign: 'center',
                    },
                    {
                        field: \"name\",
                        title: \"{{'Name'|__}}\",
                        autoHide: false,
                        sortable: false,
                        width: 'auto',
                    },
                    {
                        field: \"Actions\",
                        width: 'auto',
                        title: \"{{'Actions'|__}}\",
                        sortable: false,
                        autoHide: false,
                        overflow: 'visible',
                        template: function (data) {
                                {% if (user.hasUserPermission('branches', 'u') or user.hasUserPermission('packaging', 'd')) %}
                                    return '' +
                                    '<div class=\"btn-group btn-group\" role=\"group\" aria-label=\"...\">'+
                                        {% if user.hasUserPermission('branches', 'u') %}
                                        '<a href=\"{{url(\"dashboard/settings/branches\")}}/'+data.id+'/edit\" class=\"btn btn-info btn-sm\"><i class=\"flaticon-edit\"></i>&nbsp;{{\"Edit\"|__}}</button>'+
                                        {% endif %}
                                        {% if user.hasUserPermission('branches', 'd') %}
                                        '<a href=\"javascript:void(0);\" class=\"btn btn-danger btn-sm delete_record kt-font-light\" rel=\"'+data.id+'\" data-type=\"branches\"><i class=\"flaticon2-delete\"></i>&nbsp;{{\"Delete\"|__}}</a>'+
                                        {% endif %}
                                    '</div>';
                                {% else %}
                                    return '-';
                                {% endif %}
                        },
                    }
                ]
            {% elseif this.param.page == 'destination' %}

                // datasource definition
                data: {
                    type: 'remote',
                    source: {
                        read: {
                            url: '{{url(\"api/destination\")}}',
                        },
                    },
                    pageSize: 10, // display 20 records per page
                    serverPaging: true,
                    serverFiltering: true,
                    serverSorting: true,
                },
                // columns definition
                columns: [
                    {
                        field: 'id',
                        title: '#',
                        sortable: false,
                        width: 20,
                        selector: {
                            class: 'kt-checkbox--solid'
                        },
                        textAlign: 'center',
                    },
                    {
                        field: \"name\",
                        title: \"{{'Name'|__}}\",
                        autoHide: false,
                        sortable: false,
                        width: 'auto',
                    },
                    {
                        field: \"Actions\",
                        width: 'auto',
                        title: \"{{'Actions'|__}}\",
                        sortable: false,
                        autoHide: false,
                        overflow: 'visible',
                        template: function (data) {
                                {% if (user.hasUserPermission('destination', 'u') ) %}
                                    return '' +
                                    '<div class=\"btn-group btn-group\" role=\"group\" aria-label=\"...\">'+
                                        {% if user.hasUserPermission('destination', 'u') %}
                                        '<a href=\"{{url(\"dashboard/settings/destination\")}}/'+data.id+'/edit\" class=\"btn btn-info btn-sm\"><i class=\"flaticon-edit\"></i>&nbsp;{{\"Edit\"|__}}</button>'+
                                        {% endif %}
                                        {% if user.hasUserPermission('destination', 'd') %}
                                        '<a href=\"javascript:void(0);\" class=\"btn btn-danger btn-sm delete_record kt-font-light\" rel=\"'+data.id+'\" data-type=\"destination\"><i class=\"flaticon2-delete\"></i>&nbsp;{{\"Delete\"|__}}</a>'+
                                        {% endif %}
                                    '</div>';
                                {% else %}
                                    return '-';
                                {% endif %}
                        },
                    }
                ] 
            {% elseif this.param.page == 'location' %}
                // datasource definition
                data: {
                    type: 'remote',
                    source: {
                        read: {
                            url: '{{url(\"api/location\")}}',
                        },
                    },
                    pageSize: 10, // display 20 records per page
                    serverPaging: true,
                    serverFiltering: true,
                    serverSorting: true,
                },
                // columns definition
                columns: [
                    {
                        field: 'id',
                        title: '#',
                        sortable: false,
                        width: 20,
                        selector: {
                            class: 'kt-checkbox--solid'
                        },
                        textAlign: 'center',
                    },
                    {
                        field: \"name\",
                        title: \"{{'Name'|__}}\",
                        autoHide: false,
                        sortable: false,
                        width: 'auto',
                    },
                    {
                        field: \"Actions\",
                        width: 'auto',
                        title: \"{{'Actions'|__}}\",
                        sortable: false,
                        autoHide: false,
                        overflow: 'visible',
                        template: function (data) {
                                {% if (user.hasUserPermission('location', 'u') ) %}
                                    return '' +
                                    '<div class=\"btn-group btn-group\" role=\"group\" aria-label=\"...\">'+
                                        {% if user.hasUserPermission('location', 'u') %}
                                        '<a href=\"{{url(\"dashboard/settings/location\")}}/'+data.id+'/edit\" class=\"btn btn-info btn-sm\"><i class=\"flaticon-edit\"></i>&nbsp;{{\"Edit\"|__}}</button>'+
                                        {% endif %}
                                        {% if user.hasUserPermission('location', 'd') %}
                                        '<a href=\"javascript:void(0);\" class=\"btn btn-danger btn-sm delete_record kt-font-light\" rel=\"'+data.id+'\" data-type=\"location\"><i class=\"flaticon2-delete\"></i>&nbsp;{{\"Delete\"|__}}</a>'+
                                        {% endif %}
                                    '</div>';
                                {% else %}
                                    return '-';
                                {% endif %}
                        },
                    }
                ]
            {% elseif this.param.page == 'statuscontainer' %}
                // datasource definition
                data: {
                    type: 'remote',
                    source: {
                        read: {
                            url: '{{url(\"api/statuscontainer\")}}',
                        },
                    },
                    pageSize: 10, // display 20 records per page
                    serverPaging: true,
                    serverFiltering: true,
                    serverSorting: true,
                },
                // columns definition
                columns: [
                    {
                        field: 'id',
                        title: '#',
                        sortable: false,
                        width: 20,
                        selector: {
                            class: 'kt-checkbox--solid'
                        },
                        textAlign: 'center',
                    },
                    {
                        field: \"name\",
                        title: \"{{'Name'|__}}\",
                        autoHide: false,
                        sortable: false,
                        width: 'auto',
                    },
                    {
                        field: \"Actions\",
                        width: 'auto',
                        title: \"{{'Actions'|__}}\",
                        sortable: false,
                        autoHide: false,
                        overflow: 'visible',
                        template: function (data) {
                                {% if (user.hasUserPermission('statuscontainer', 'u')) %}
                                    return '' +
                                    '<div class=\"btn-group btn-group\" role=\"group\" aria-label=\"...\">'+
                                        {% if user.hasUserPermission('statuscontainer', 'u') %}
                                        '<a href=\"{{url(\"dashboard/settings/statuscontainer\")}}/'+data.id+'/edit\" class=\"btn btn-info btn-sm\"><i class=\"flaticon-edit\"></i>&nbsp;{{\"Edit\"|__}}</button>'+
                                        {% endif %}
                                        {% if user.hasUserPermission('statuscontainer', 'd') %}
                                        '<a href=\"javascript:void(0);\" class=\"btn btn-danger btn-sm delete_record kt-font-light\" rel=\"'+data.id+'\" data-type=\"statuscontainer\"><i class=\"flaticon2-delete\"></i>&nbsp;{{\"Delete\"|__}}</a>'+
                                        {% endif %}
                                    '</div>';
                                {% else %}
                                    return '-';
                                {% endif %}
                        },
                    }
                ] 
            {% elseif this.param.page == 'reasonarrival' %}
                // datasource definition
                data: {
                    type: 'remote',
                    source: {
                        read: {
                            url: '{{url(\"api/reasonarrival\")}}',
                        },
                    },
                    pageSize: 10, // display 20 records per page
                    serverPaging: true,
                    serverFiltering: true,
                    serverSorting: true,
                },
                // columns definition
                columns: [
                    {
                        field: 'id',
                        title: '#',
                        sortable: false,
                        width: 20,
                        selector: {
                            class: 'kt-checkbox--solid'
                        },
                        textAlign: 'center',
                    },
                    {
                        field: \"name\",
                        title: \"{{'Name'|__}}\",
                        autoHide: false,
                        sortable: false,
                        width: 'auto',
                    },
                    {
                        field: \"Actions\",
                        width: 'auto',
                        title: \"{{'Actions'|__}}\",
                        sortable: false,
                        autoHide: false,
                        overflow: 'visible',
                        template: function (data) {
                                {% if (user.hasUserPermission('reasonarrival', 'u') ) %}
                                    return '' +
                                    '<div class=\"btn-group btn-group\" role=\"group\" aria-label=\"...\">'+
                                        {% if user.hasUserPermission('reasonarrival', 'u') %}
                                        '<a href=\"{{url(\"dashboard/settings/reasonarrival\")}}/'+data.id+'/edit\" class=\"btn btn-info btn-sm\"><i class=\"flaticon-edit\"></i>&nbsp;{{\"Edit\"|__}}</button>'+
                                        {% endif %}
                                        {% if user.hasUserPermission('reasonarrival', 'd') %}
                                        '<a href=\"javascript:void(0);\" class=\"btn btn-danger btn-sm delete_record kt-font-light\" rel=\"'+data.id+'\" data-type=\"reasonarrival\"><i class=\"flaticon2-delete\"></i>&nbsp;{{\"Delete\"|__}}</a>'+
                                        {% endif %}
                                    '</div>';
                                {% else %}
                                    return '-';
                                {% endif %}
                        },
                    }
                ]  
            {% elseif this.param.page == 'size' %}
                // datasource definition
                data: {
                    type: 'remote',
                    source: {
                        read: {
                            url: '{{url(\"api/size\")}}',
                        },
                    },
                    pageSize: 10, // display 20 records per page
                    serverPaging: true,
                    serverFiltering: true,
                    serverSorting: true,
                },
                // columns definition
                columns: [
                    {
                        field: 'id',
                        title: '#',
                        sortable: false,
                        width: 20,
                        selector: {
                            class: 'kt-checkbox--solid'
                        },
                        textAlign: 'center',
                    },
                    {
                        field: \"name\",
                        title: \"{{'Name'|__}}\",
                        autoHide: false,
                        sortable: false,
                        width: 'auto',
                    },
                    {
                        field: \"Actions\",
                        width: 'auto',
                        title: \"{{'Actions'|__}}\",
                        sortable: false,
                        autoHide: false,
                        overflow: 'visible',
                        template: function (data) {
                                {% if (user.hasUserPermission('size', 'u') ) %}
                                    return '' +
                                    '<div class=\"btn-group btn-group\" role=\"group\" aria-label=\"...\">'+
                                        {% if user.hasUserPermission('size', 'u') %}
                                        '<a href=\"{{url(\"dashboard/settings/size\")}}/'+data.id+'/edit\" class=\"btn btn-info btn-sm\"><i class=\"flaticon-edit\"></i>&nbsp;{{\"Edit\"|__}}</button>'+
                                        {% endif %}
                                        {% if user.hasUserPermission('size', 'd') %}
                                        '<a href=\"javascript:void(0);\" class=\"btn btn-danger btn-sm delete_record kt-font-light\" rel=\"'+data.id+'\" data-type=\"size\"><i class=\"flaticon2-delete\"></i>&nbsp;{{\"Delete\"|__}}</a>'+
                                        {% endif %}
                                    '</div>';
                                {% else %}
                                    return '-';
                                {% endif %}
                        },
                    }
                ]          
            {% elseif this.param.page == 'cars' %}
                // datasource definition
                data: {
                    type: 'remote',
                    source: {
                        read: {
                            url: '{{url(\"api/cars\")}}',
                        },
                    },
                    pageSize: 10, // display 20 records per page
                    serverPaging: true,
                    serverFiltering: true,
                    serverSorting: true,
                },
                // columns definition
                columns: [
                    {
                        field: 'id',
                        title: '#',
                        sortable: false,
                        width: 20,
                        selector: {
                            class: 'kt-checkbox--solid'
                        },
                        textAlign: 'center',
                    },
                    // {
                    //     field: \"name\",
                    //     title: \"{{'Name'|__}}\",
                    //     autoHide: false,
                    //     sortable: false,
                    //     width: 'auto',
                    // },
                    {
                        field: \"license_plate\",
                        title: \"{{'License Plate'|__}}\",
                        autoHide: false,
                        sortable: false,
                        width: 'auto',
                    },
                    {
                        field: \"destination\",
                        title: \"{{'Destination'|__}}\",
                        autoHide: false,
                        sortable: false,
                        width: 100,
                        template: function(row) {
                            return row.destination.name;
                        },
                    },
                    {
                        field: \"transport\",
                        title: \"{{'Transport Company'|__}}\",
                        autoHide: false,
                        sortable: false,
                        width: 'auto',
                        template: function(row) {
                            return row.transport.name; 
                        },
                    },
                    {
                        field: \"transport_date\",
                        title: \"{{'Transport Date'|__}}\",
                        autoHide: false,
                        sortable: false,
                        width: 100,
                    },
                    {
                        field: \"Actions\",
                        width: 100,
                        title: \"{{'Actions'|__}}\",
                        sortable: false,
                        autoHide: false,
                        overflow: 'visible',
                        template: function (data) {
                                {% if (user.hasUserPermission('cars', 'u') or user.hasUserPermission('packaging', 'd')) %}
                                    return '' +
                                    '<div class=\"btn-group btn-group\" role=\"group\" aria-label=\"...\">'+
                                        {% if user.hasUserPermission('cars', 'u') %}
                                        '<a href=\"{{url(\"dashboard/settings/cars\")}}/'+data.id+'/edit\" class=\"btn btn-info btn-sm btn-icon\" data-placement=\"top\" title=\"{{\"Edit\"|__}}\"><i class=\"flaticon-edit\"></i>&nbsp;</a>'+
                                        {% endif %}
                                        {% if user.hasUserPermission('cars', 'd') %}
                                        '<a href=\"javascript:void(0);\" class=\"btn btn-danger btn-sm delete_record kt-font-light btn-icon\" rel=\"'+data.id+'\" data-type=\"cars\" data-placement=\"top\" title=\"{{\"Delete\"|__}}\"><i class=\"flaticon2-delete\"></i>&nbsp;</a>'+
                                        {% endif %}
                                    '</div>';
                                {% else %}
                                    return '-';
                                {% endif %}
                        },
                    }
                ]
            {% elseif this.param.page == 'statuses' %}
                // datasource definition
                data: {
                    type: 'remote',
                    source: {
                        read: {
                            url: '{{url(\"api/statuses\")}}',
                        },
                    },
                    pageSize: 10, // display 20 records per page
                    serverPaging: true,
                    serverFiltering: true,
                    serverSorting: true,
                },
                // columns definition
                columns: [
                    {
                        field: 'id',
                        title: '#',
                        sortable: false,
                        width: 20,
                        selector: {
                            class: 'kt-checkbox--solid'
                        },
                        textAlign: 'center',
                    },
                    {
                        field: \"name\",
                        title: \"{{'Name'|__}}\",
                        autoHide: false,
                        sortable: false,
                        width: 'auto',
                    },
                    {
                        field: \"Actions\",
                        width: 'auto',
                        title: \"{{'Actions'|__}}\",
                        sortable: false,
                        autoHide: false,
                        overflow: 'visible',
                        template: function (data) {
                                {% if (user.hasUserPermission('statuses', 'u') or user.hasUserPermission('statuses', 'd')) %}
                                    return '' +
                                    '<div class=\"btn-group btn-group\" role=\"group\" aria-label=\"...\">'+
                                        {% if user.hasUserPermission('statuses', 'u') %}
                                        '<a href=\"{{url(\"dashboard/settings/statuses\")}}/'+data.id+'/edit/statuses\" class=\"btn btn-info btn-sm\"><i class=\"flaticon-edit\"></i>&nbsp;{{\"Edit\"|__}}</button>'+
                                        {% endif %}
                                        {% if user.hasUserPermission('statuses', 'd') %}
                                        '<a href=\"javascript:void(0);\" class=\"btn btn-danger btn-sm delete_record kt-font-light\" rel=\"'+data.id+'\" data-type=\"statuses\"><i class=\"flaticon2-delete\"></i>&nbsp;{{\"Delete\"|__}}</a>'+
                                        {% endif %}
                                    '</div>';
                                {% else %}
                                    return '-';
                                {% endif %}
                        },
                    }
                ]
            {% elseif this.param.page == 'Stockstatuses' %}
                // datasource definition
                data: {
                    type: 'remote',
                    source: {
                        read: {
                            url: '{{url(\"api/Stockstatuses\")}}',
                        },
                    },
                    pageSize: 10, // display 20 records per page
                    serverPaging: true,
                    serverFiltering: true,
                    serverSorting: true,
                },
                // columns definition
                columns: [
                    {
                        field: 'id',
                        title: '#',
                        sortable: false,
                        width: 20,
                        selector: {
                            class: 'kt-checkbox--solid'
                        },
                        textAlign: 'center',
                    },
                    {
                        field: \"name\",
                        title: \"{{'Name'|__}}\",
                        autoHide: false,
                        sortable: false,
                        width: 'auto',
                    },
                    {
                        field: \"Actions\",
                        width: 'auto',
                        title: \"{{'Actions'|__}}\",
                        sortable: false,
                        autoHide: false,
                        overflow: 'visible',
                        template: function (data) {
                                {% if (user.hasUserPermission('statuses', 'u') or user.hasUserPermission('statuses', 'd')) %}
                                    return '' +
                                    '<div class=\"btn-group btn-group\" role=\"group\" aria-label=\"...\">'+
                                        {% if user.hasUserPermission('statuses', 'u') %}
                                        '<a href=\"{{url(\"dashboard/settings/statuses\")}}/'+data.id+'/edit/Stockstatuses\" class=\"btn btn-info btn-sm\"><i class=\"flaticon-edit\"></i>&nbsp;{{\"Edit\"|__}}</button>'+
                                        {% endif %}
                                        {% if user.hasUserPermission('statuses', 'd') %}
                                        '<a href=\"javascript:void(0);\" class=\"btn btn-danger btn-sm delete_record kt-font-light\" rel=\"'+data.id+'\" data-type=\"statuses\"><i class=\"flaticon2-delete\"></i>&nbsp;{{\"Delete\"|__}}</a>'+
                                        {% endif %}
                                    '</div>';
                                {% else %}
                                    return '-';
                                {% endif %}
                        },
                    }
                ]
            {% elseif this.param.page == 'Customstatuses' %}
                // datasource definition
                data: {
                    type: 'remote',
                    source: {
                        read: {
                            url: '{{url(\"api/Customstatuses\")}}',
                        },
                    },
                    pageSize: 10, // display 20 records per page
                    serverPaging: true,
                    serverFiltering: true,
                    serverSorting: true,
                },
                // columns definition
                columns: [
                    {
                        field: 'id',
                        title: '#',
                        sortable: false,
                        width: 20,
                        selector: {
                            class: 'kt-checkbox--solid'
                        },
                        textAlign: 'center',
                    },
                    {
                        field: \"name\",
                        title: \"{{'Name'|__}}\",
                        autoHide: false,
                        sortable: false,
                        width: 'auto',
                    },
                    {
                        field: \"Actions\",
                        width: 'auto',
                        title: \"{{'Actions'|__}}\",
                        sortable: false,
                        autoHide: false,
                        overflow: 'visible',
                        template: function (data) {
                                {% if (user.hasUserPermission('statuses', 'u') or user.hasUserPermission('statuses', 'd')) %}
                                    return '' +
                                    '<div class=\"btn-group btn-group\" role=\"group\" aria-label=\"...\">'+
                                        {% if user.hasUserPermission('statuses', 'u') %}
                                        '<a href=\"{{url(\"dashboard/settings/statuses\")}}/'+data.id+'/edit/Customstatuses\" class=\"btn btn-info btn-sm\"><i class=\"flaticon-edit\"></i>&nbsp;{{\"Edit\"|__}}</button>'+
                                        {% endif %}
                                        {% if user.hasUserPermission('statuses', 'd') %}
                                        '<a href=\"javascript:void(0);\" class=\"btn btn-danger btn-sm delete_record kt-font-light\" rel=\"'+data.id+'\" data-type=\"statuses\"><i class=\"flaticon2-delete\"></i>&nbsp;{{\"Delete\"|__}}</a>'+
                                        {% endif %}
                                    '</div>';
                                {% else %}
                                    return '-';
                                {% endif %}
                        },
                    }
                ]         
            {% elseif this.param.page == 'treasury' %}
                // datasource definition
                data: {
                    type: 'remote',
                    source: {
                        read: {
                            url: '{{url(\"api/treasury\")}}',
                        },
                    },
                    pageSize: 10, // display 20 records per page
                    serverPaging: true,
                    serverFiltering: true,
                    serverSorting: true,
                },
                // columns definition
                columns: [
                    {
                        field: 'id',
                        title: '#',
                        sortable: false,
                        width: 20,
                        selector: {
                            class: 'kt-checkbox--solid'
                        },
                        textAlign: 'center',
                    },
                    {
                        field: \"name\",
                        title: \"{{'Name'|__}}\",
                        autoHide: false,
                        sortable: false,
                        width: 'auto',
                        template: function (data) {
                            return '<a href=\"{{url(\"dashboard/treasury\")}}/' + data.id + '/view\">' + data.name + '</a>';
                        },
                    },
                    {
                        field: \"balance\",
                        title: \"{{'Balance'|__}}\",
                        autoHide: false,
                        sortable: false,
                        width: 'auto',
                    },
                    {
                        field: \"office\",
                        title: \"{{'Office'|__}}\",
                        autoHide: false,
                        sortable: false,
                        width: 'auto',
                    },
                    {
                        field: \"Actions\",
                        width: 'auto',
                        title: \"{{'Actions'|__}}\",
                        sortable: false,
                        autoHide: false,
                        overflow: 'visible',
                        template: function (data) {
                                {% if (user.hasUserPermission('treasury', 'u') or user.hasUserPermission('treasury', 'd')) %}
                                    return '' +
                                    '<div class=\"btn-group btn-group\" role=\"group\" aria-label=\"...\">'+
                                        {% if user.hasUserPermission('treasury', 'u') %}
                                        '<a href=\"{{url(\"dashboard/settings/treasury\")}}/'+data.id+'/edit\" class=\"btn btn-info btn-sm\"><i class=\"flaticon-edit\"></i>&nbsp;{{\"Edit\"|__}}</button>'+
                                        {% endif %}
                                        {% if user.hasUserPermission('treasury', 'd') %}
                                        '<a href=\"javascript:void(0);\" class=\"btn btn-danger btn-sm delete_record kt-font-light\" rel=\"'+data.id+'\" data-type=\"treasury\"><i class=\"flaticon2-delete\"></i>&nbsp;{{\"Delete\"|__}}</a>'+
                                        {% endif %}
                                    '</div>';
                                {% else %}
                                    return '-';
                                {% endif %}
                        },
                    }
                ]
            {% elseif this.param.page == 'categories' %}
                // datasource definition
                data: {
                    type: 'remote',
                    source: {
                        read: {
                            url: '{{url(\"api/categories\")}}',
                        },
                    },
                    pageSize: 10, // display 20 records per page
                    serverPaging: true,
                    serverFiltering: true,
                    serverSorting: true,
                },
                // columns definition
                columns: [
                    {
                        field: 'id',
                        title: '#',
                        sortable: false,
                        width: 20,
                        selector: {
                            class: 'kt-checkbox--solid'
                        },
                        textAlign: 'center',
                    },
                    {
                        field: \"name\",
                        title: \"{{'Name'|__}}\",
                        autoHide: false,
                        sortable: false,
                        width: 'auto',
                    },
                    {
                        field: \"Actions\",
                        width: 'auto',
                        title: \"{{'Actions'|__}}\",
                        sortable: false,
                        autoHide: false,
                        overflow: 'visible',
                        template: function (data) {
                                {% if (user.hasUserPermission('category', 'u') or user.hasUserPermission('category', 'd')) %}
                                    return '' +
                                    '<div class=\"btn-group btn-group\" role=\"group\" aria-label=\"...\">'+
                                        {% if user.hasUserPermission('category', 'u') %}
                                        '<a href=\"{{url(\"dashboard/settings/categories\")}}/'+data.id+'/edit\" class=\"btn btn-info btn-sm\"><i class=\"flaticon-edit\"></i>&nbsp;{{\"Edit\"|__}}</button>'+
                                        {% endif %}
                                        {% if user.hasUserPermission('category', 'd') %}
                                        '<a href=\"javascript:void(0);\" class=\"btn btn-danger btn-sm delete_record kt-font-light\" rel=\"'+data.id+'\" data-type=\"categories\"><i class=\"flaticon2-delete\"></i>&nbsp;{{\"Delete\"|__}}</a>'+
                                        {% endif %}
                                    '</div>';
                                {% else %}
                                    return '-';
                                {% endif %}
                        },
                    }
                ]
            {% elseif this.param.page == 'couriers' %}
                // datasource definition
                data: {
                    type: 'remote',
                    source: {
                        read: {
                            url: '{{url(\"api/couriers\")}}',
                        },
                    },
                    pageSize: 10, // display 20 records per page
                    serverPaging: true,
                    serverFiltering: true,
                    serverSorting: true,
                },
                // columns definition
                columns: [
                    {
                        field: 'id',
                        title: '#',
                        sortable: false,
                        width: 20,
                        selector: {
                            class: 'kt-checkbox--solid'
                        },
                        textAlign: 'center',
                    },
                    {
                        field: \"name\",
                        title: \"{{'Name'|__}}\",
                        autoHide: false,
                        sortable: false,
                        width: 'auto',
                    },
                    {
                        field: \"Actions\",
                        width: 'auto',
                        title: \"{{'Actions'|__}}\",
                        sortable: false,
                        autoHide: false,
                        overflow: 'visible',
                        template: function (data) {
                                {% if (user.hasUserPermission('couriers', 'u') or user.hasUserPermission('couriers', 'd')) %}
                                    return '' +
                                    '<div class=\"btn-group btn-group\" role=\"group\" aria-label=\"...\">'+
                                        {% if user.hasUserPermission('category', 'u') %}
                                        '<a href=\"{{url(\"dashboard/settings/couriers\")}}/'+data.id+'/edit\" class=\"btn btn-info btn-sm\"><i class=\"flaticon-edit\"></i>&nbsp;{{\"Edit\"|__}}</button>'+
                                        {% endif %}
                                        {% if user.hasUserPermission('couriers', 'd') %}
                                        '<a href=\"javascript:void(0);\" class=\"btn btn-danger btn-sm delete_record kt-font-light\" rel=\"'+data.id+'\" data-type=\"couriers\"><i class=\"flaticon2-delete\"></i>&nbsp;{{\"Delete\"|__}}</a>'+
                                        {% endif %}
                                    '</div>';
                                {% else %}
                                    return '-';
                                {% endif %}
                        },
                    }
                ]
            {% elseif this.param.page == 'deliverytimes' %}
                // datasource definition
                data: {
                    type: 'remote',
                    source: {
                        read: {
                            url: '{{url(\"api/deliverytimes\")}}',
                        },
                    },
                    pageSize: 10, // display 20 records per page
                    serverPaging: true,
                    serverFiltering: true,
                    serverSorting: true,
                },
                // columns definition
                columns: [
                    {
                        field: 'id',
                        title: '#',
                        sortable: false,
                        width: 20,
                        selector: {
                            class: 'kt-checkbox--solid'
                        },
                        textAlign: 'center',
                    },
                    {
                        field: \"name\",
                        title: \"{{'Name'|__}}\",
                        autoHide: false,
                        sortable: false,
                        width: 'auto',
                    },
                    {
                        field: \"Actions\",
                        width: 'auto',
                        title: \"{{'Actions'|__}}\",
                        sortable: false,
                        autoHide: false,
                        overflow: 'visible',
                        template: function (data) {
                                {% if (user.hasUserPermission('deliverytimes', 'u') or user.hasUserPermission('deliverytimes', 'd')) %}
                                    return '' +
                                    '<div class=\"btn-group btn-group\" role=\"group\" aria-label=\"...\">'+
                                        {% if user.hasUserPermission('category', 'u') %}
                                        '<a href=\"{{url(\"dashboard/settings/deliverytimes\")}}/'+data.id+'/edit\" class=\"btn btn-info btn-sm\"><i class=\"flaticon-edit\"></i>&nbsp;{{\"Edit\"|__}}</button>'+
                                        {% endif %}
                                        {% if user.hasUserPermission('deliverytimes', 'd') %}
                                        '<a href=\"javascript:void(0);\" class=\"btn btn-danger btn-sm delete_record kt-font-light\" rel=\"'+data.id+'\" data-type=\"deliverytimes\"><i class=\"flaticon2-delete\"></i>&nbsp;{{\"Delete\"|__}}</a>'+
                                        {% endif %}
                                    '</div>';
                                {% else %}
                                    return '-';
                                {% endif %}
                        },
                    }
                ]
            {% elseif this.param.page == 'shipping' %}
                // datasource definition
                data: {
                    type: 'remote',
                    source: {
                        read: {
                            url: '{{url(\"api/shipping\")}}',
                        },
                    },
                    pageSize: 10, // display 20 records per page
                    serverPaging: true,
                    serverFiltering: true,
                    serverSorting: true,
                },
                // columns definition
                columns: [
                    {
                        field: 'id',
                        title: '#',
                        sortable: false,
                        width: 20,
                        selector: {
                            class: 'kt-checkbox--solid'
                        },
                        textAlign: 'center',
                    },
                    {
                        field: \"name\",
                        title: \"{{'Name'|__}}\",
                        autoHide: false,
                        sortable: false,
                        width: 'auto',
                    },
                    {
                        field: \"Actions\",
                        width: 'auto',
                        title: \"{{'Actions'|__}}\",
                        sortable: false,
                        autoHide: false,
                        overflow: 'visible',
                        template: function (data) {
                                {% if (user.hasUserPermission('shipping', 'u') or user.hasUserPermission('shipping', 'd')) %}
                                    return '' +
                                    '<div class=\"btn-group btn-group\" role=\"group\" aria-label=\"...\">'+
                                        {% if user.hasUserPermission('shipping', 'u') %}
                                        '<a href=\"{{url(\"dashboard/settings/shipping\")}}/'+data.id+'/edit\" class=\"btn btn-info btn-sm\"><i class=\"flaticon-edit\"></i>&nbsp;{{\"Edit\"|__}}</button>'+
                                        {% endif %}
                                        {% if user.hasUserPermission('shipping', 'd') %}
                                        '<a href=\"javascript:void(0);\" class=\"btn btn-danger btn-sm delete_record kt-font-light\" rel=\"'+data.id+'\" data-type=\"shipping\"><i class=\"flaticon2-delete\"></i>&nbsp;{{\"Delete\"|__}}</a>'+
                                        {% endif %}
                                    '</div>';
                                {% else %}
                                    return '-';
                                {% endif %}
                        },
                    }
                ]
            {% elseif this.param.page == 'labels' %}
                // datasource definition
                data: {
                    type: 'remote',
                    source: {
                        read: {
                            url: '{{url(\"api/labels\")}}',
                        },
                    },
                    pageSize: 10, // display 20 records per page
                    serverPaging: true,
                    serverFiltering: true,
                    serverSorting: true,
                },
                // columns definition
                columns: [
                    {
                        field: 'id',
                        title: '#',
                        sortable: false,
                        width: 20,
                        selector: {
                            class: 'kt-checkbox--solid'
                        },
                        textAlign: 'center',
                    },
                    {
                        field: \"name\",
                        title: \"{{'Name'|__}}\",
                        autoHide: false,
                        sortable: false,
                        width: 'auto',
                    },
                    {
                        field: \"Actions\",
                        width: 'auto',
                        title: \"{{'Actions'|__}}\",
                        sortable: false,
                        autoHide: false,
                        overflow: 'visible',
                        template: function (data) {
                                {% if (user.hasUserPermission('labels', 'u') or user.hasUserPermission('labels', 'd')) %}
                                    return '' +
                                    '<div class=\"btn-group btn-group\" role=\"group\" aria-label=\"...\">'+
                                        {% if user.hasUserPermission('labels', 'u') %}
                                        '<a href=\"{{url(\"dashboard/settings/labels\")}}/'+data.id+'/edit\" class=\"btn btn-info btn-sm\"><i class=\"flaticon-edit\"></i>&nbsp;{{\"Edit\"|__}}</button>'+
                                        {% endif %}
                                        {% if user.hasUserPermission('labels', 'd') %}
                                        '<a href=\"javascript:void(0);\" class=\"btn btn-danger btn-sm delete_record kt-font-light\" rel=\"'+data.id+'\" data-type=\"labels\"><i class=\"flaticon2-delete\"></i>&nbsp;{{\"Delete\"|__}}</a>'+
                                        {% endif %}
                                    '</div>';
                                {% else %}
                                    return '-';
                                {% endif %}
                        },
                    }
                ]
            {% elseif this.param.page == 'handler' %}
                // datasource definition
                data: {
                    type: 'remote',
                    source: {
                        read: {
                            url: '{{url(\"api/handler\")}}',
                        },
                    },
                    pageSize: 10, // display 20 records per page
                    serverPaging: true,
                    serverFiltering: true,
                    serverSorting: true,
                },
                // columns definition
                columns: [
                    {
                        field: 'id',
                        title: '#',
                        sortable: false,
                        width: 20,
                        selector: {
                            class: 'kt-checkbox--solid'
                        },
                        textAlign: 'center',
                    },
                    {
                        field: \"name\",
                        title: \"{{'Name'|__}}\",
                        autoHide: false,
                        sortable: false,
                        width: 'auto',
                    },
                    {
                        field: \"Actions\",
                        width: 'auto',
                        title: \"{{'Actions'|__}}\",
                        sortable: false,
                        autoHide: false,
                        overflow: 'visible',
                        template: function (data) {
                                {% if (user.hasUserPermission('handler', 'u') or user.hasUserPermission('handler', 'd')) %}
                                    return '' +
                                    '<div class=\"btn-group btn-group\" role=\"group\" aria-label=\"...\">'+
                                        {% if user.hasUserPermission('handler', 'u') %}
                                        '<a href=\"{{url(\"dashboard/settings/handler\")}}/'+data.id+'/edit\" class=\"btn btn-info btn-sm\"><i class=\"flaticon-edit\"></i>&nbsp;{{\"Edit\"|__}}</button>'+
                                        {% endif %}
                                        {% if user.hasUserPermission('handler', 'd') %}
                                        '<a href=\"javascript:void(0);\" class=\"btn btn-danger btn-sm delete_record kt-font-light\" rel=\"'+data.id+'\" data-type=\"handler\"><i class=\"flaticon2-delete\"></i>&nbsp;{{\"Delete\"|__}}</a>'+
                                        {% endif %}
                                    '</div>';
                                {% else %}
                                    return '-';
                                {% endif %}
                        },
                    }
                ]
            {% elseif this.param.page == 'break' %}
                // datasource definition
                data: {
                    type: 'remote',
                    source: {
                        read: {
                            url: '{{url(\"api/break\")}}',
                        },
                    },
                    pageSize: 10, // display 20 records per page
                    serverPaging: true,
                    serverFiltering: true,
                    serverSorting: true,
                },
                // columns definition
                columns: [
                    {
                        field: 'id',
                        title: '#',
                        sortable: false,
                        width: 20,
                        selector: {
                            class: 'kt-checkbox--solid'
                        },
                        textAlign: 'center',
                    },
                    {
                        field: \"name\",
                        title: \"{{'Name'|__}}\",
                        autoHide: false,
                        sortable: false,
                        width: 'auto',
                    },
                    {
                        field: \"Actions\",
                        width: 'auto',
                        title: \"{{'Actions'|__}}\",
                        sortable: false,
                        autoHide: false,
                        overflow: 'visible',
                        template: function (data) {
                                {% if (user.hasUserPermission('break', 'u') or user.hasUserPermission('break', 'd')) %}
                                    return '' +
                                    '<div class=\"btn-group btn-group\" role=\"group\" aria-label=\"...\">'+
                                        {% if user.hasUserPermission('break', 'u') %}
                                        '<a href=\"{{url(\"dashboard/settings/break\")}}/'+data.id+'/edit\" class=\"btn btn-info btn-sm\"><i class=\"flaticon-edit\"></i>&nbsp;{{\"Edit\"|__}}</button>'+
                                        {% endif %}
                                        {% if user.hasUserPermission('break', 'd') %}
                                        '<a href=\"javascript:void(0);\" class=\"btn btn-danger btn-sm delete_record kt-font-light\" rel=\"'+data.id+'\" data-type=\"break\"><i class=\"flaticon2-delete\"></i>&nbsp;{{\"Delete\"|__}}</a>'+
                                        {% endif %}
                                    '</div>';
                                {% else %}
                                    return '-';
                                {% endif %}
                        },
                    }
                ]            
            {% elseif this.param.page == 'packaging' %}
                // datasource definition
                data: {
                    type: 'remote',
                    source: {
                        read: {
                            url: '{{url(\"api/packaging\")}}',
                        },
                    },
                    pageSize: 10, // display 20 records per page
                    serverPaging: true,
                    serverFiltering: true,
                    serverSorting: true,
                },
                // columns definition
                columns: [
                    {
                        field: 'id',
                        title: '#',
                        sortable: false,
                        width: 20,
                        selector: {
                            class: 'kt-checkbox--solid'
                        },
                        textAlign: 'center',
                    },
                    {
                        field: \"name\",
                        title: \"{{'Name'|__}}\",
                        autoHide: false,
                        sortable: false,
                        width: 'auto',
                    },
                    {
                        field: \"Actions\",
                        width: 'auto',
                        title: \"{{'Actions'|__}}\",
                        sortable: false,
                        autoHide: false,
                        overflow: 'visible',
                        template: function (data) {
                                {% if (user.hasUserPermission('packaging', 'u') or user.hasUserPermission('packaging', 'd')) %}
                                    return '' +
                                    '<div class=\"btn-group btn-group\" role=\"group\" aria-label=\"...\">'+
                                        {% if user.hasUserPermission('packaging', 'u') %}
                                        '<a href=\"{{url(\"dashboard/settings/packaging\")}}/'+data.id+'/edit\" class=\"btn btn-info btn-sm\"><i class=\"flaticon-edit\"></i>&nbsp;{{\"Edit\"|__}}</button>'+
                                        {% endif %}
                                        {% if user.hasUserPermission('packaging', 'd') %}
                                        '<a href=\"javascript:void(0);\" class=\"btn btn-danger btn-sm delete_record kt-font-light\" rel=\"'+data.id+'\" data-type=\"packaging\"><i class=\"flaticon2-delete\"></i>&nbsp;{{\"Delete\"|__}}</a>'+
                                        {% endif %}
                                    '</div>';
                                {% else %}
                                    return '-';
                                {% endif %}
                        },
                    }
                ]
            {% elseif this.param.page == 'countries' %}
                // datasource definition
                data: {
                    type: 'remote',
                    source: {
                        read: {
                            url: '{{url(\"api/countries\")}}',
                        },
                    },
                    pageSize: 10, // display 20 records per page
                    serverPaging: true,
                    serverFiltering: true,
                    serverSorting: true,
                },
                // columns definition
                columns: [
                    {
                        field: 'id',
                        title: '#',
                        sortable: false,
                        width: 20,
                        selector: {
                            class: 'kt-checkbox--solid'
                        },
                        textAlign: 'center',
                    },
                    {
                        field: \"number\",
                        title: \"{{'ID'|__}}\",
                        autoHide: false,
                        sortable: false,
                        width: 'auto',
                        template: function (data) {
                            return data.id;
                        },
                    },
                    {
                        field: \"name\",
                        title: \"{{'Name'|__}}\",
                        autoHide: false,
                        sortable: false,
                        width: 'auto',
                    },
                    {
                        field: \"Actions\",
                        width: 'auto',
                        title: \"{{'Actions'|__}}\",
                        sortable: false,
                        autoHide: false,
                        overflow: 'visible',
                        template: function (data) {
                                {% if (user.hasUserPermission('countries', 'u') or user.hasUserPermission('countries', 'd')) %}
                                    return '' +
                                    '<div class=\"btn-group btn-group\" role=\"group\" aria-label=\"...\">'+
                                        {% if user.hasUserPermission('countries', 'u') %}
                                        '<a href=\"{{url(\"dashboard/settings/countries\")}}/'+data.id+'/edit\" class=\"btn btn-info btn-sm\"><i class=\"flaticon-edit\"></i>&nbsp;{{\"Edit\"|__}}</button>'+
                                        {% endif %}
                                        {% if user.hasUserPermission('countries', 'd') %}
                                        '<a href=\"javascript:void(0);\" class=\"btn btn-danger btn-sm delete_record kt-font-light\" rel=\"'+data.id+'\" data-type=\"countries\"><i class=\"flaticon2-delete\"></i>&nbsp;{{\"Delete\"|__}}</a>'+
                                        {% endif %}
                                    '</div>';
                                {% else %}
                                    return '-';
                                {% endif %}
                        },
                    }
                ]
            {% elseif this.param.page == 'states' %}
                // datasource definition
                data: {
                    type: 'remote',
                    source: {
                        read: {
                            url: '{{url(\"api/states\")}}',
                        },
                    },
                    pageSize: 10, // display 20 records per page
                    serverPaging: true,
                    serverFiltering: true,
                    serverSorting: true,
                },
                // columns definition
                columns: [
                    {
                        field: 'id',
                        title: '#',
                        sortable: false,
                        width: 20,
                        selector: {
                            class: 'kt-checkbox--solid'
                        },
                        textAlign: 'center',
                    },
                    {
                        field: \"number\",
                        title: \"{{'ID'|__}}\",
                        autoHide: false,
                        sortable: false,
                        width: 'auto',
                        template: function (data) {
                            return data.id;
                        },
                    },
                    {
                        field: \"name\",
                        title: \"{{'Name'|__}}\",
                        autoHide: false,
                        sortable: false,
                        width: 'auto',
                    },
                    {
                        field: \"place\",
                        title: \"{{'Place'|__}}\",
                        autoHide: false,
                        sortable: false,
                        width: 'auto',
                    },
                    {
                        field: \"Actions\",
                        width: 'auto',
                        title: \"{{'Actions'|__}}\",
                        sortable: false,
                        autoHide: false,
                        overflow: 'visible',
                        template: function (data) {
                                {% if (user.hasUserPermission('states', 'u') or user.hasUserPermission('states', 'd')) %}
                                    return '' +
                                    '<div class=\"btn-group btn-group\" role=\"group\" aria-label=\"...\">'+
                                        {% if user.hasUserPermission('states', 'u') %}
                                        '<a href=\"{{url(\"dashboard/settings/states\")}}/'+data.id+'/edit\" class=\"btn btn-info btn-sm\"><i class=\"flaticon-edit\"></i>&nbsp;{{\"Edit\"|__}}</button>'+
                                        {% endif %}
                                        {% if user.hasUserPermission('states', 'd') %}
                                        '<a href=\"javascript:void(0);\" class=\"btn btn-danger btn-sm delete_record kt-font-light\" rel=\"'+data.id+'\" data-type=\"states\"><i class=\"flaticon2-delete\"></i>&nbsp;{{\"Delete\"|__}}</a>'+
                                        {% endif %}
                                    '</div>';
                                {% else %}
                                    return '-';
                                {% endif %}
                        },
                    }
                ]
            {% elseif this.param.page == 'cities' %}
                // datasource definition
                data: {
                    type: 'remote',
                    source: {
                        read: {
                            url: '{{url(\"api/cities\")}}',
                        },
                    },
                    pageSize: 10, // display 20 records per page
                    serverPaging: true,
                    serverFiltering: true,
                    serverSorting: true,
                },
                // columns definition
                columns: [
                    {
                        field: 'id',
                        title: '#',
                        sortable: false,
                        width: 20,
                        selector: {
                            class: 'kt-checkbox--solid'
                        },
                        textAlign: 'center',
                    },
                    {
                        field: \"number\",
                        title: \"{{'ID'|__}}\",
                        autoHide: false,
                        sortable: false,
                        width: 'auto',
                        template: function (data) {
                            return data.id;
                        },
                    },
                    {
                        field: \"name\",
                        title: \"{{'Name'|__}}\",
                        autoHide: false,
                        sortable: false,
                        width: 'auto',
                    },
                    {
                        field: \"place\",
                        title: \"{{'Place'|__}}\",
                        autoHide: false,
                        sortable: false,
                        width: 'auto',
                    },
                    {
                        field: \"Actions\",
                        width: 'auto',
                        title: \"{{'Actions'|__}}\",
                        sortable: false,
                        autoHide: false,
                        overflow: 'visible',
                        template: function (data) {
                                {% if (user.hasUserPermission('cities', 'u') or user.hasUserPermission('cities', 'd')) %}
                                    return '' +
                                    '<div class=\"btn-group btn-group\" role=\"group\" aria-label=\"...\">'+
                                        {% if user.hasUserPermission('cities', 'u') %}
                                        '<a href=\"{{url(\"dashboard/settings/cities\")}}/'+data.id+'/edit\" class=\"btn btn-info btn-sm\"><i class=\"flaticon-edit\"></i>&nbsp;{{\"Edit\"|__}}</button>'+
                                        {% endif %}
                                        {% if user.hasUserPermission('cities', 'd') %}
                                        '<a href=\"javascript:void(0);\" class=\"btn btn-danger btn-sm delete_record kt-font-light\" rel=\"'+data.id+'\" data-type=\"cities\"><i class=\"flaticon2-delete\"></i>&nbsp;{{\"Delete\"|__}}</a>'+
                                        {% endif %}
                                    '</div>';
                                {% else %}
                                    return '-';
                                {% endif %}
                        },
                    }
                ]
            {% elseif this.param.page == 'areas' %}
                // datasource definition
                data: {
                    type: 'remote',
                    source: {
                        read: {
                            url: '{{url(\"api/areas\")}}',
                        },
                    },
                    pageSize: 10, // display 20 records per page
                    serverPaging: true,
                    serverFiltering: true,
                    serverSorting: true,
                },
                // columns definition
                columns: [
                    {
                        field: 'id',
                        title: '#',
                        sortable: false,
                        width: 20,
                        selector: {
                            class: 'kt-checkbox--solid'
                        },
                        textAlign: 'center',
                    },
                    {
                        field: \"number\",
                        title: \"{{'ID'|__}}\",
                        autoHide: false,
                        sortable: false,
                        width: 'auto',
                        template: function (data) {
                            return data.id;
                        },
                    },
                    {
                        field: \"name\",
                        title: \"{{'Name'|__}}\",
                        autoHide: false,
                        sortable: false,
                        width: 'auto',
                    },
                    {
                        field: \"place\",
                        title: \"{{'Place'|__}}\",
                        autoHide: false,
                        sortable: false,
                        width: 'auto',
                    },
                    {
                        field: \"Actions\",
                        width: 'auto',
                        title: \"{{'Actions'|__}}\",
                        sortable: false,
                        autoHide: false,
                        overflow: 'visible',
                        template: function (data) {
                                {% if (user.hasUserPermission('areas', 'u') or user.hasUserPermission('areas', 'd')) %}
                                    return '' +
                                    '<div class=\"btn-group btn-group\" role=\"group\" aria-label=\"...\">'+
                                        {% if user.hasUserPermission('areas', 'u') %}
                                        '<a href=\"{{url(\"dashboard/settings/areas\")}}/'+data.id+'/edit\" class=\"btn btn-info btn-sm\"><i class=\"flaticon-edit\"></i>&nbsp;{{\"Edit\"|__}}</button>'+
                                        {% endif %}
                                        {% if user.hasUserPermission('areas', 'd') %}
                                        '<a href=\"javascript:void(0);\" class=\"btn btn-danger btn-sm delete_record kt-font-light\" rel=\"'+data.id+'\" data-type=\"areas\"><i class=\"flaticon2-delete\"></i>&nbsp;{{\"Delete\"|__}}</a>'+
                                        {% endif %}
                                    '</div>';
                                {% else %}
                                    return '-';
                                {% endif %}
                        },
                    }
                ]
            {% elseif this.param.page == 'fees' %}
                // datasource definition
                data: {
                    type: 'remote',
                    source: {
                        read: {
                            url: '{{url(\"api/fees\")}}',
                        },
                    },
                    pageSize: 10, // display 20 records per page
                    serverPaging: true,
                    serverFiltering: true,
                    serverSorting: true,
                },
                // columns definition
                columns: [
                    {
                        field: 'id',
                        title: '#',
                        sortable: false,
                        width: 20,
                        selector: {
                            class: 'kt-checkbox--solid'
                        },
                        textAlign: 'center',
                    },
                    {
                        field: \"from\",
                        title: \"{{'From'|__}}\",
                        autoHide: false,
                        sortable: false,
                        width: 'auto',
                    },
                    {
                        field: \"to\",
                        title: \"{{'To'|__}}\",
                        autoHide: false,
                        sortable: false,
                        width: 'auto',
                    },
                    {
                        field: \"Actions\",
                        width: 'auto',
                        title: \"{{'Actions'|__}}\",
                        sortable: false,
                        autoHide: false,
                        overflow: 'visible',
                        template: function (data) {
                                {% if (user.hasUserPermission('fees', 'u') or user.hasUserPermission('fees', 'd')) %}
                                    return '' +
                                    '<div class=\"btn-group btn-group\" role=\"group\" aria-label=\"...\">'+
                                        {% if user.hasUserPermission('fees', 'u') %}
                                        '<a href=\"{{url(\"dashboard/settings/fees\")}}/'+data.id+'/edit\" class=\"btn btn-info btn-sm\"><i class=\"flaticon-edit\"></i>&nbsp;{{\"Edit\"|__}}</button>'+
                                        {% endif %}
                                        {% if user.hasUserPermission('fees', 'd') %}
                                        '<a href=\"javascript:void(0);\" class=\"btn btn-danger btn-sm delete_record kt-font-light\" rel=\"'+data.id+'\" data-type=\"fees\"><i class=\"flaticon2-delete\"></i>&nbsp;{{\"Delete\"|__}}</a>'+
                                        {% endif %}
                                    '</div>';
                                {% else %}
                                    return '-';
                                {% endif %}
                        },
                    }
                ]
            {% elseif this.param.page == 'employees' %}
                // datasource definition
                data: {
                    type: 'remote',
                    source: {
                        read: {
                            url: '{{url(\"api/employees\")}}',
                        },
                    },
                    pageSize: 10, // display 20 records per page
                    serverPaging: true,
                    serverFiltering: true,
                    serverSorting: true,
                },
                // columns definition
                columns: [
                    {
                        field: 'id',
                        title: '#',
                        sortable: false,
                        width: 20,
                        selector: {
                            class: 'kt-checkbox--solid'
                        },
                        textAlign: 'center',
                    },
                    {
                        field: \"name\",
                        title: \"{{'Name'|__}}\",
                        autoHide: false,
                        sortable: false,
                        width: 'auto',
                    },
                    {
                        field: \"role\",
                        title: \"{{'Role'|__}}\",
                        autoHide: false,
                        sortable: false,
                        width: 'auto',
                    },
                    {
                        field: \"groups\",
                        title: \"{{'Departments'|__}}\",
                        autoHide: false,
                        sortable: false,
                        width: 'auto',
                        template: function (data) {
                            if(data.groups){
                                var i;
                                var text = '-';
                                for (i = 0; i < data.groups.length; i++) {
                                    if(text == '-'){
                                        text = data.groups[i];
                                    }else{
                                        if(i < data.groups.length){
                                            text += ', ';
                                        }
                                        text += data.groups[i];
                                    }
                                }
                                return text;
                            }else{
                                return '-';
                            }
                        },
                    },
                    {
                        field: \"Actions\",
                        width: 'auto',
                        title: \"{{'Actions'|__}}\",
                        sortable: false,
                        autoHide: false,
                        overflow: 'visible',
                        template: function (data) {
                                {% if (user.hasUserPermission('employees', 'u') or user.hasUserPermission('employees', 'd')) %}
                                    return '' +
                                    '<div class=\"btn-group btn-group\" role=\"group\" aria-label=\"...\">'+
                                        {% if user.hasUserPermission('employees', 'u') %}
                                        '<a href=\"{{url(\"dashboard/settings/employees\")}}/'+data.id+'/edit\" class=\"btn btn-info btn-sm\"><i class=\"flaticon-edit\"></i>&nbsp;{{\"Edit\"|__}}</button>'+
                                        {% endif %}
                                        {% if user.hasUserPermission('employees', 'd') %}
                                        '<a href=\"javascript:void(0);\" class=\"btn btn-danger btn-sm delete_record kt-font-light\" rel=\"'+data.id+'\" data-type=\"employees\"><i class=\"flaticon2-delete\"></i>&nbsp;{{\"Delete\"|__}}</a>'+
                                        {% endif %}
                                    '</div>';
                                {% else %}
                                    return '-';
                                {% endif %}
                        },
                    }
                ]
            {% elseif this.param.page == 'backup' %}
                // datasource definition
                data: {
                    type: 'remote',
                    source: {
                        read: {
                            url: '{{url(\"api/backups\")}}',
                        },
                    },
                    pageSize: 10, // display 20 records per page
                    serverPaging: true,
                    serverFiltering: true,
                    serverSorting: true,
                },
                // columns definition
                columns: [
                    {
                        field: \"fileInfo\",
                        title: \"{{'Name'|__}}\",
                        autoHide: false,
                        sortable: false,
                        width: 'auto',
                        template: function (data) {
                            return '<a href=\"{{\"app/uploads/panakour-backup\"|media|replace({\"app/media/\": \"\"})}}/' + data.fileInfo.basename + '\" download>' + data.fileInfo.basename + '</a>';
                        },
                    },
                    {
                        field: \"size\",
                        title: \"{{'Size'|__}}\",
                        autoHide: false,
                        sortable: false,
                        width: 'auto',
                        template: function (data) {
                            return data.size + ' {{\"KB\"|__}}';
                        },
                    },
                    {
                        field: \"lastModified\",
                        title: \"{{'Created Date'|__}}\",
                        autoHide: false,
                        sortable: false,
                        width: 'auto',
                    },
                    {
                        field: \"Actions\",
                        width: 'auto',
                        title: \"{{'Actions'|__}}\",
                        sortable: false,
                        autoHide: false,
                        overflow: 'visible',
                        template: function (data) {
                                {% if (user.hasUserPermission('backups', 'd')) %}
                                    return '' +
                                    '<div class=\"btn-group btn-group\" role=\"group\" aria-label=\"...\">'+
                                        {% if user.hasUserPermission('backups', 'd') %}
                                        '<a href=\"javascript:void(0);\" class=\"btn btn-danger btn-sm delete_record kt-font-light\" rel=\"'+data.fileInfo.basename+'\" data-type=\"backup\"><i class=\"flaticon2-delete\"></i>&nbsp;{{\"Delete\"|__}}</a>'+
                                        {% endif %}
                                    '</div>';
                                {% else %}
                                    return '-';
                                {% endif %}
                        },
                    }
                ]
            {% endif %}
        });
    };

    // search
    var search = function () {
        \$('#filter_form select,#filter_form input').each(function(){
            \$(this).on('change', function () {
                datatable.search(\$(this).val().toLowerCase(), \$(this).attr('name'));
            });
        });
        \$('#reset').on('click', function () {
            datatable.destroy();
            \$('#filter_form select,#filter_form input').each(function(){
                \$(this).val('');
            });
            \$('#filter_form select').each(function(){
                \$(this).selectpicker(\"refresh\");
            });
            init();
        });
    };

    // selection
    var selection = function () {
        // init form controls
        //\$('#kt_form_status, #kt_form_type').selectpicker();

        // event handler on check and uncheck on records
        datatable.on('kt-datatable--on-check kt-datatable--on-uncheck kt-datatable--on-layout-updated', function (e) {
            var checkedNodes = datatable.rows('.kt-datatable__row--active').nodes(); // get selected records
            var count = checkedNodes.length; // selected records count

            \$('#kt_subheader_group_selected_rows').html(count);

            if (count > 0) {
                \$('#kt_subheader_search').addClass('kt-hidden');
                \$('#kt_subheader_group_actions').removeClass('kt-hidden');
            } else {
                \$('#kt_subheader_search').removeClass('kt-hidden');
                \$('#kt_subheader_group_actions').addClass('kt-hidden');
            }
        });
    }

    // selected records status update
    var selectedStatusUpdate = function () {
        \$('#kt_subheader_group_actions_status_change').on('click', \"[data-toggle='status-change']\", function () {
            var status = \$(this).find(\".kt-nav__link-text\").html();

            // fetch selected IDs
            var ids = datatable.rows('.kt-datatable__row--active').nodes().find('.kt-checkbox--single > [type=\"checkbox\"]').map(function (i, chk) {
                return \$(chk).val();
            });

            if (ids.length > 0) {
                // learn more: //sweetalert2.github.io/
                swal.fire({
                    buttonsStyling: false,

                    html: \"{{\"Are you sure to update\"|__}} \" + ids.length + \" {{\"selected records status to\"|__}} \" + status + \" ?\",
                    type: \"info\",

                    confirmButtonText: \"{{\"Yes, update\"|__}}!\",
                    confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",

                    showCancelButton: true,
                    cancelButtonText: \"{{\"No, cancel\"|__}}\",
                    cancelButtonClass: \"btn btn-sm btn-bold btn-default\"
                }).then(function (result) {
                    if (result.value) {
                        swal.fire({
                            title: '{{\"Deleted\"|__}}!',
                            text: '{{\"Your selected records statuses have been updated\"|__}}!',
                            type: 'success',
                            buttonsStyling: false,
                            confirmButtonText: \"{{\"OK\"|__}}\",
                            confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                        })
                        // result.dismiss can be 'cancel', 'overlay',
                        // 'close', and 'timer'
                    } else if (result.dismiss === 'cancel') {
                        swal.fire({
                            title: '{{\"Cancelled\"|__}}',
                            text: '{{\"You selected records statuses have not been updated\"|__}}!',
                            type: 'error',
                            buttonsStyling: false,
                            confirmButtonText: \"{{\"OK\"|__}}\",
                            confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                        });
                    }
                });
            }
        });
    }

    // selected records delete
    var selectedDelete = function () {
        \$('#kt_subheader_group_actions_delete_all').on('click', function () {
            // fetch selected IDs
            var selected = [];
            var type    = \$('.delete_record').attr('data-type');
            var ids = datatable.rows('.kt-datatable__row--active').nodes().find('.kt-checkbox--single > [type=\"checkbox\"]').map(function (i, chk) {
                selected[\$(chk).val()] = \$(chk).val();
                return \$(chk).val();
            });

            if (ids.length > 0) {
                // learn more: //sweetalert2.github.io/
                swal.fire({
                    buttonsStyling: false,

                    text: \"{{'Are you sure to delete'|__}} \" + ids.length + \" {{'selected records ?'|__}}\",
                    type: \"danger\",

                    confirmButtonText: \"{{'Yes, delete!'|__}}\",
                    confirmButtonClass: \"btn btn-sm btn-bold btn-danger\",

                    showCancelButton: true,
                    cancelButtonText: '{{\"No, cancel\"|__}}',
                    cancelButtonClass: \"btn btn-sm btn-bold btn-brand\"
                }).then(function (result) {
                    if (result.value) {
                        \$.request('onDelete', {
                            data: {id: selected,type: type},
                            success: function(data) {
                                swal.fire({
                                    title: '{{\"Deleted!\"|__}}',
                                    text: '{{\"Your selected records have been deleted! :(\"|__}}',
                                    type: 'success',
                                    buttonsStyling: false,
                                    confirmButtonText: '{{\"OK\"|__}}',
                                    confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                                });
                                datatable.reload();
                            }
                        });
                        // result.dismiss can be 'cancel', 'overlay',
                        // 'close', and 'timer'
                    } else if (result.dismiss === 'cancel') {
                        swal.fire({
                            title: '{{\"Cancelled\"|__}}',
                            text: '{{\"You selected records have not been deleted! :)\"|__}}',
                            type: 'error',
                            buttonsStyling: false,
                            confirmButtonText: '{{\"OK\"|__}}',
                            confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                        });
                    }
                });
            }
        });


        \$('body').on('click','.delete_record',function(){
            var id      = \$(this).attr('rel');
            var type    = \$(this).attr('data-type');
            swal.fire({
                buttonsStyling: false,

                text: \"{{'Are you sure to delete this item ?'|__}}\",
                type: \"danger\",

                confirmButtonText: \"{{'Yes, delete!'|__}}\",
                confirmButtonClass: \"btn btn-sm btn-bold btn-danger\",

                showCancelButton: true,
                cancelButtonText: '{{\"No, cancel\"|__}}',
                cancelButtonClass: \"btn btn-sm btn-bold btn-brand\"
            }).then(function (result) {
                if (result.value) {
                    \$.request('onDelete', {
                        data: {id: id, type: type},
                        success: function(data) {

                            swal.fire({
                                title: '{{\"Deleted!\"|__}}',
                                text: '{{\"Your selected record has been deleted! :(\"|__}}',
                                type: 'success',
                                buttonsStyling: false,
                                confirmButtonText: '{{\"OK\"|__}}',
                                confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                            });
                            datatable.reload();
                        }
                    });
                    // result.dismiss can be 'cancel', 'overlay',
                    // 'close', and 'timer'
                } else if (result.dismiss === 'cancel') {
                    swal.fire({
                        title: '{{\"Cancelled\"|__}}',
                        text: '{{\"You selected record has not been deleted! :)\"|__}}',
                        type: 'error',
                        buttonsStyling: false,
                        confirmButtonText: '{{\"OK\"|__}}',
                        confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                    });
                }
            });
        });
    }

    var updateTotal = function () {
        datatable.on('kt-datatable--on-layout-updated', function () {
            \$('#kt_subheader_total').html(datatable.getTotalRows() + ' {{\"Total\"|__}}');
        });
    };

    var reload = function () {
        datatable.reload();
    };

    return {
        // public functions
        init: function () {
            init();
            search();
            selection();
            selectedStatusUpdate();
            selectedDelete();
            updateTotal();
        },

        reload: function(){
            reload();
        }
    };
}();
var KTDatatablesExtensions = function() {

\tvar initTable1 = function() {
\t\tvar table = \$('#kt_table_1');

        {% if this.param.page == 'translate' %}
    \t\t// begin first table
    \t\ttable.DataTable({
    \t\t\tresponsive: true,
                dom: \"<'row'<'col-md-6' f><'col-md-6 text-right'>>\\n\\t\\t\\t<'row'<'col-md-12'tr>>\\n\\t\\t\\t<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7 dataTables_pager'>>\",
                language: {
                    lengthMenu:     \"{{'Display'|__}} _MENU_\",
                    emptyTable:     \"{{'No data available in table'|__}}\",
                    info:           \"{{'Showing'|__}} _START_ {{'to'|__}} _END_ {{'of'|__}} _TOTAL_ {{'entries'|__}}\",
                    infoEmpty:      \"{{'Showing'|__}} 0 {{'to'|__}} 0 {{'of'|__}} 0 {{'entries'|__}}\",
                    loadingRecords: \"{{'Loading'|__}}...\",
                    processing:     \"{{'Processing'|__}}...\",
                    search:         \"{{'Search'|__}}\",
                    infoFiltered:   \"({{'filtered from'|__}} _MAX_ {{'total entries'|__}})\",
                },
                ajax: {
                    url: '{{url(\"api/translatemessages\")}}',
                    type: \"POST\",
                },
    \t\t\tdeferRender: true,
    \t\t\tscrollY: '500px',
    \t\t\tscrollCollapse: true,
    \t\t\tscroller: true,
    \t\t\tcolumns: [
        \t\t\t{% for lang in languages %}
        \t\t\t\t{data: '{{lang.name}}'},
        \t\t\t{% endfor %}
    \t\t\t],
    \t\t});
        {% elseif this.param.page == 'backup' %}
            table.DataTable({
    \t\t\tresponsive: true,
                dom: \"<'row'<'col-md-6'><'col-md-6 text-right'>>\\n\\t\\t\\t<'row'<'col-md-12'tr>>\\n\\t\\t\\t<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7 dataTables_pager'lp>>\",
                buttons: [
                    {extend: 'copy',exportOptions: {columns: [2,3,4,5]}},
                    {extend: 'excel',exportOptions: {columns: [2,3,4,5]}},
                    {extend: 'pdf',exportOptions: {columns: [2,3,4,5]}},
                    {extend: 'print',exportOptions: {columns: [2,3,4,5]}
                }],
                lengthMenu: [5, 10, 25, 50],
                pageLength: 10,
                language: {
                    lengthMenu: \"{{'Display'|__}} _MENU_\",
                    emptyTable:     \"{{'No data available in table'|__}}\",
                    info:           \"{{'Showing'|__}} _START_ {{'to'|__}} _END_ {{'of'|__}} _TOTAL_ {{'entries'|__}}\",
                    infoEmpty:      \"{{'Showing'|__}} 0 {{'to'|__}} 0 {{'of'|__}} 0 {{'entries'|__}}\",
                    loadingRecords: \"{{'Loading'|__}}...\",
                    processing:     \"{{'Processing'|__}}...\",
                    search:         \"{{'Search'|__}}\",
                    infoFiltered:   \"({{'filtered from'|__}} _MAX_ {{'total entries'|__}})\",
                },
                searchDelay: 500,
                processing: true,
                serverSide: true,
                ajax: {
                    url: '{{url(\"api/backups\")}}',
                    type: \"POST\",
                },
                columns: [
                {
                    data: \"fileInfo\",
                    'orderable':false,
                    'render': function (data, type, full, meta){
                        return '<a href=\"{{\"app/uploads/panakour-backup\"|media|replace({\"app/media/\": \"\"})}}/' + full.fileInfo.basename + '\" download>' + full.fileInfo.basename + '</a>';
                    }
                },
                {
                    data: \"size\",
                    'orderable':false,
                    'render': function (data, type, full, meta){
                        return full.size + ' {{\"KB\"|__}}';
                    }
                },
                {
                    data: \"lastModified\",
                    'orderable':true
                },
                {
                    data: \"actions\",
                    'orderable':false
                }],
                columnDefs: [{
                   'targets': -1,
                   'searchable':false,
                   'orderable':false,
                   'className': 'dt-body-center',
                   'render': function (data, type, full, meta){
                        return '<div class=\"btn-group m-btn-group\" role=\"group\" aria-label=\"...\"><button class=\"btn btn-danger delete_record\" rel=\"' + full.fileInfo.basename + '\" data-type=\"backup\" ><span><i class=\"la la-times\"></i> <span>{{\"Delete\"|__}}</span></span></button></div>';
                    }
                }]
            });
        {% endif %}





\t};

\treturn {

\t\t//main function to initiate the module
\t\tinit: function() {
\t\t\tinitTable1();
\t\t},

\t};

}();

// Class definition
var KTUserProfile = function () {
\t// Base elements
\tvar avatar;
\tvar offcanvas;

\t// Private functions
\tvar initAside = function () {
\t\t// Mobile offcanvas for mobile mode
\t\toffcanvas = new KTOffcanvas('kt_user_profile_aside', {
            overlay: true,
            baseClass: 'kt-app__aside',
            closeBy: 'kt_user_profile_aside_close',
            toggleBy: 'kt_subheader_mobile_toggle'
        });
        \$('#kt_subheader_mobile_toggle').show();
\t}

\tvar initUserForm = function() {
\t\tavatar = new KTAvatar('kt_user_avatar');
\t}

\treturn {
\t\t// public functions
\t\tinit: function() {
\t\t\tinitAside();
\t\t\tinitUserForm();
\t\t}
\t};
}();

KTUtil.ready(function() {
\tKTUserProfile.init();

    \$( \"#kt_form\" ).validate({
        ignore: \":hidden\",
        invalidHandler: function(event, validator) {
            var alert = \$('#kt-form_msg');
            alert.removeClass('kt-hidden').show();
            KTUtil.scrollTop();
        },
    });

    {% if this.param.page == 'general' or this.param.page is empty %}
        \$('body').on('changed.bs.select', '#currency', function(e, clickedIndex, newValue, oldValue){
            var selected = \$(e.currentTarget).val();
            if(selected != ''){
                \$.request('onGetCurrency', {
                    data: {id: selected},
                    success: function(data) {
                        if(data.currency.place_symbol_before == true){
                            \$('#place_symbol_before').prop('checked', true);
                        }else {
                            \$('#place_symbol_before').prop('checked', false);
                        }
                        if(data.currency.with_space == true){
                            \$('#with_space').prop('checked', true);
                        }else {
                            \$('#with_space').prop('checked', false);
                        }
                        \$('#decimal_point').val(data.currency.decimal_point);
                        \$('#thousand_separator').val(data.currency.thousand_separator);
                        \$('#initbiz_money_fraction_digits').val(data.currency.initbiz_money_fraction_digits);
                    }
                });
            }
        });
    {% elseif this.param.page == 'company' %}
        \$(\"#address\").geocomplete({
            map: \"#map_canvas\",
            mapOptions: {
                zoom: 18
            },
            markerOptions: {
                draggable: true
            },
            details: \".location-complete\",
            {% if company.lat %}
                location: [{{company.lat}},{{company.lng}}]
            {% endif %}
        });
        \$(\"#address\").bind(\"geocode:dragged\", function(event, latLng){
            \$(\"input[name=lat]\").val(latLng.lat());
            \$(\"input[name=lng]\").val(latLng.lng());
            \$(\"#reset\").show();
        });

        var input = document.getElementById('kt_tagify_2');
        new Tagify(input);
    {% elseif this.param.page == 'languages' or this.param.page == 'departments' or this.param.page == 'employees' or this.param.page == 'currencies' or this.param.page == 'packaging' %}
        KTAppUserListDatatable.init();
    {% elseif this.param.page == 'sms' %}
        \$('body').on('click', '#enable_sms_notification', function(){
            \$('#sms_notification').addClass('kt-hidden');
            if(\$(this).is(':checked')){
                \$('#sms_notification').removeClass('kt-hidden');
            }
        });
        \$('body').on('changed.bs.select', '.gateway', function(e, clickedIndex, newValue, oldValue){
            var selected = \$(e.currentTarget).val();

            if(selected != ''){
                \$('.clickatell').addClass('kt-hidden');
                \$('.smsala').addClass('kt-hidden');
                \$('.twilio').addClass('kt-hidden');
                if(selected == 'clickatell'){
                    \$('.clickatell').removeClass('kt-hidden');
                }else if(selected == 'smsala'){
                    \$('.smsala').removeClass('kt-hidden');
                }else if(selected == 'twilio'){
                    \$('.twilio').removeClass('kt-hidden');
                }
            }
        });
    {% elseif this.param.page == 'payment' %}
        \$('body').on('click', '#enable_payment_gateway', function(){
            \$('#payment_gateway').addClass('kt-hidden');
            if(\$(this).is(':checked')){
                \$('#payment_gateway').removeClass('kt-hidden');
            }
        });
        \$('body').on('changed.bs.select', '.gateway', function(e, clickedIndex, newValue, oldValue){
            var selected = \$(e.currentTarget).val();

            if(selected != ''){
                console.log(selected);
                \$('.paystack').addClass('kt-hidden');
                if(selected == 'paystack'){
                    \$('.paystack').removeClass('kt-hidden');
                }
            }
        });
    {% elseif this.param.page == 'notifications' %}
        \$('body').on('changed.bs.select', '.provider', function(e, clickedIndex, newValue, oldValue){
            var selected = \$(e.currentTarget).val();
            if(selected != ''){
                if(selected == 'pusher'){
                    \$('.pusher').removeClass('kt-hidden');
                }else{
                    \$('.pusher').addClass('kt-hidden');
                }
            }
        });
        \$('body').on('click', '#enable_live_notification', function(){
            \$('#live_notification').addClass('kt-hidden');
            if(\$(this).is(':checked')){
                \$('#live_notification').removeClass('kt-hidden');
            }
        });

        \$('body').on('changed.bs.select', '.push_provider', function(e, clickedIndex, newValue, oldValue){
            var selected = \$(e.currentTarget).val();
            if(selected != ''){
                if(selected == 'fcm'){
                    \$('.fcm').removeClass('kt-hidden');
                }else{
                    \$('.fcm').addClass('kt-hidden');
                }
            }
        });
        \$('body').on('click', '#enable_push_notification', function(){
            \$('#push_notification').addClass('kt-hidden');
            if(\$(this).is(':checked')){
                \$('#push_notification').removeClass('kt-hidden');
            }
        });

        \$('body').on('click', '.select_departments', function(){
            \$('.show_departments').addClass('kt-hidden');
            if(\$(this).is(':checked')){
                \$('.show_departments').removeClass('kt-hidden');
            }
        });
        \$('body').on('click', '.select_employees', function(){
            \$('.show_employees').addClass('kt-hidden');
            if(\$(this).is(':checked')){
                \$('.show_employees').removeClass('kt-hidden');
            }
        });
    {% elseif this.param.page == 'backup' %}
    
        KTAppUserListDatatable.init();

       {% if settings.demo_mode %}
         \$('body').on('click', '#database', function(e){
             swal.fire({
                 title: '{{\"Error\"|__}}',
                 text: '{{\"This feature is not allowed in demo\"|__}}',
                 type: 'error',
                 buttonsStyling: false,
                 confirmButtonText: '{{\"OK\"|__}}',
                 confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
             });
         });
         \$('body').on('click', '#files', function(e){
             swal.fire({
                 title: '{{\"Error\"|__}}',
                 text: '{{\"This feature is not allowed in demo\"|__}}',
                 type: 'error',
                 buttonsStyling: false,
                 confirmButtonText: '{{\"OK\"|__}}',
                 confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
             });
         });
         \$('body').on('click', '#whole', function(e){
             swal.fire({
                 title: '{{\"Error\"|__}}',
                 text: '{{\"This feature is not allowed in demo\"|__}}',
                 type: 'error',
                 buttonsStyling: false,
                 confirmButtonText: '{{\"OK\"|__}}',
                 confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
             });
         });
        {% else %}
          \$('body').on('click', '#database', function(e){
              KTApp.blockPage({
                  overlayColor: '#000000',
                  type: 'v2',
                  state: 'primary',
                  message: '{{\"Processing, please wait\"|__}}...'
              });
              e.preventDefault();
               \$.request('onBackup', {
                   data: {type: 'db'},
                   success: function(response, status, xhr, \$form) {
                       console.log(response.result);
                       swal.fire({
                           title: '{{\"Success!\"|__}}',
                           text: response.result,
                           type: 'success',
                           buttonsStyling: false,
                           confirmButtonText: '{{\"OK\"|__}}',
                           confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                       });
                       KTAppUserListDatatable.reload();
                       KTApp.unblockPage();
                   }
               });
          });
          \$('body').on('click', '#files', function(e){
          \tKTDatatablesExtensions.init();
              KTApp.blockPage({
                  overlayColor: '#000000',
                  type: 'v2',
                  state: 'primary',
                  message: '{{\"Processing, please wait\"|__}}...'
              });
              e.preventDefault();
               \$.request('onBackup', {
                   data: {type: 'files'},
                   success: function(response, status, xhr, \$form) {
                       console.log(response.result);
                       swal.fire({
                           title: '{{\"Success!\"|__}}',
                           text: response.result,
                           type: 'success',
                           buttonsStyling: false,
                           confirmButtonText: '{{\"OK\"|__}}',
                           confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                       });
                       KTAppUserListDatatable.reload();
                       KTApp.unblockPage();
                   }
               });
          });
          \$('body').on('click', '#whole', function(e){
              KTApp.blockPage({
                  overlayColor: '#000000',
                  type: 'v2',
                  state: 'primary',
                  message: '{{\"Processing, please wait\"|__}}...'
              });
              e.preventDefault();
               \$.request('onBackup', {
                   data: {type: 'whole'},
                   success: function(response, status, xhr, \$form) {
                       console.log(response.result);
                       swal.fire({
                           title: '{{\"Success!\"|__}}',
                           text: response.result,
                           type: 'success',
                           buttonsStyling: false,
                           confirmButtonText: '{{\"OK\"|__}}',
                           confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                       });
                       KTAppUserListDatatable.reload();
                       KTApp.unblockPage();
                   }
               });
          });
          window.onbeforeunload = function() {
                return \"Did you save your stuff?\"
          }
        {% endif %}
    {% elseif this.param.page == 'fees' %}
        \$('.bootstrap-touchspin-vertical-btn').TouchSpin({
            buttondown_class: 'btn btn-secondary',
            buttonup_class: 'btn btn-secondary',
            verticalbuttons: true,
            verticalup: '<i class=\"la la-plus\"></i>',
            verticaldown: '<i class=\"la la-minus\"></i>'
        });
        KTAppUserListDatatable.init();
    {% elseif this.param.page == 'translate' %}
        // Activate an inline edit on click of a table cell
        \$('#kt_table_1').on( 'click', 'tbody td .translate', function (e) {
            if(\$(this).find('.inline_edit').length == 0){
                \$(this).html('<input type=\"text\" class=\"form-control inline_edit\" value=\"'+\$(this).html()+'\" />');
                \$('.inline_edit').focus().select();
            }
        });
        \$('#kt_table_1').on('change', '.inline_edit', function(e){
            var element = \$(this);
            var label = element.parent('.translate');
            label.addClass('kt-spinner kt-spinner--right kt-spinner--sm kt-spinner--success');
            var id = label.attr('rel');
            var lang = label.attr('data-language');
             \$.request('onTranslate', {
                 data: {translate: \$(this).val(), lang: lang, id: id},
                 success: function(response, status, xhr, \$form) {
                     label.removeClass('kt-spinner kt-spinner--right kt-spinner--sm kt-spinner--success');
                     element.replaceWith(element.val());
                 }
             });
        });
        \$('#kt_table_1').on('blur', '.inline_edit', function(e){
            var element = \$(this);
            element.replaceWith(element.val());
        });
    \tKTDatatablesExtensions.init();
    {% elseif this.param.page == 'statuses' or this.param.page == 'Stockstatuses' or this.param.page == 'Customstatuses' or this.param.page == 'treasury'  or this.param.page == 'categories' or this.param.page == 'couriers' or this.param.page == 'deliverytimes' or this.param.page == 'shipping' or this.param.page == 'branches' or this.param.page == 'cars' or this.param.page == 'destination' or this.param.page == 'location' or this.param.page == 'statuscontainer'
        or this.param.page == 'reasonarrival' or this.param.page == 'size' or this.param.page == 'labels' or this.param.page == 'handler' or this.param.page == 'break' %}
        KTAppUserListDatatable.init();
    {% elseif this.param.page == 'areas' or this.param.page == 'cities' or this.param.page == 'states' or this.param.page == 'countries' %}
        KTAppUserListDatatable.init();
    {% endif %}
});
</script>
{% endput %}", "/home/splayer/domains/spotlayer.com/public_html/newDemo/themes/spotlayer/pages/dashboard/settings.htm", "");
    }
}
