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

/* /Users/bola/Downloads/e-cargo/themes/spotlayer/pages/dashboard/shipments.htm */
class __TwigTemplate_123ad302683a658fe1019204bd9df8143dad686c4b951a2771de85b5f6ba34e5 extends \Twig\Template
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
        echo "<!--begin::Portlet-->
<div class=\"kt-portlet kt-portlet--tabs\">
    <div class=\"kt-portlet__head\">
        <div class=\"kt-portlet__head-toolbar\">
            <ul class=\"nav nav-tabs nav-tabs-line nav-tabs-line-brand nav-tabs-line-2x nav-tabs-line-right nav-tabs-bold\" role=\"tablist\">
                ";
        // line 6
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 6) == 5)) {
            // line 7
            echo "                <li class=\"nav-item\">
                    <a class=\"nav-link ";
            // line 8
            if (((twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 8), "type", [], "any", false, false, false, 8)) && (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 8) == 5)) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 8), "type", [], "any", false, false, false, 8) == "saved"))) {
                echo "active";
            }
            echo "\" data-toggle=\"tab\" href=\"#saved\" role=\"tab\">
                        <i class=\"flaticon-folder-2\" aria-hidden=\"true\"></i>";
            // line 9
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Saved"]);
            echo "
                    </a>
                </li>
                ";
        }
        // line 13
        echo "                <li class=\"nav-item\">
                    <a class=\"nav-link ";
        // line 14
        if (((twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 14), "type", [], "any", false, false, false, 14)) && (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 14) != 5)) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 14), "type", [], "any", false, false, false, 14) == "requests"))) {
            echo "active";
        }
        echo "\" data-toggle=\"tab\" href=\"#requests\" role=\"tab\">
                        <i class=\"flaticon-alert\" aria-hidden=\"true\"></i>";
        // line 15
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["New Requests"]);
        echo "
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link ";
        // line 19
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 19), "type", [], "any", false, false, false, 19) == "approved")) {
            echo "active";
        }
        echo "\" data-toggle=\"tab\" href=\"#approved\" role=\"tab\">
                        <i class=\"flaticon-like\" aria-hidden=\"true\"></i>";
        // line 20
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Approved"]);
        echo "
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link ";
        // line 24
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 24), "type", [], "any", false, false, false, 24) == "assigned")) {
            echo "active";
        }
        echo "\" data-toggle=\"tab\" href=\"#assigned\" role=\"tab\">
                        <i class=\"flaticon-network\" aria-hidden=\"true\"></i>";
        // line 25
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Assigned Shipments"]);
        echo "
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link ";
        // line 29
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 29), "type", [], "any", false, false, false, 29) == "withdriver")) {
            echo "active";
        }
        echo "\" data-toggle=\"tab\" href=\"#withdriver\" role=\"tab\">
                        <i class=\"flaticon-suitcase\" aria-hidden=\"true\"></i>";
        // line 30
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delivered To Driver"]);
        echo "
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link ";
        // line 34
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 34), "type", [], "any", false, false, false, 34) == "stock")) {
            echo "active";
        }
        echo "\" data-toggle=\"tab\" href=\"#stock\" role=\"tab\">
                        <i class=\"flaticon-home-2\" aria-hidden=\"true\"></i>";
        // line 35
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["In Stock"]);
        echo "
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link ";
        // line 39
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 39), "type", [], "any", false, false, false, 39) == "custom")) {
            echo "active";
        }
        echo "\" data-toggle=\"tab\" href=\"#custom\" role=\"tab\">
                        <i class=\"flaticon-home-2\" aria-hidden=\"true\"></i>";
        // line 40
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["In Custom"]);
        echo "
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link ";
        // line 44
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 44), "type", [], "any", false, false, false, 44) == "postponed")) {
            echo "active";
        }
        echo "\" data-toggle=\"tab\" href=\"#postponed\" role=\"tab\">
                        <i class=\"flaticon-stopwatch\" aria-hidden=\"true\"></i>";
        // line 45
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Postponed"]);
        echo "
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link ";
        // line 49
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 49), "type", [], "any", false, false, false, 49) == "delivered")) {
            echo "active";
        }
        echo "\" data-toggle=\"tab\" href=\"#delivered\" role=\"tab\">
                        <i class=\"flaticon-open-box\" aria-hidden=\"true\"></i>";
        // line 50
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delivered"]);
        echo "
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link ";
        // line 54
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 54), "type", [], "any", false, false, false, 54) == "supplied")) {
            echo "active";
        }
        echo "\" data-toggle=\"tab\" href=\"#supplied\" role=\"tab\">
                        <i class=\"flaticon-piggy-bank\" aria-hidden=\"true\"></i>";
        // line 55
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Supplied"]);
        echo "
                    </a>
                </li>
                ";
        // line 58
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 58) != 5)) {
            // line 59
            echo "                    <li class=\"nav-item\">
                        <a class=\"nav-link ";
            // line 60
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 60), "type", [], "any", false, false, false, 60) == "manifest")) {
                echo "active";
            }
            echo "\" data-toggle=\"tab\" href=\"#manifest\" role=\"tab\">
                            <i class=\"flaticon-truck\" aria-hidden=\"true\"></i>";
            // line 61
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Manifest"]);
            echo "
                        </a>
                    </li>
                ";
        }
        // line 65
        echo "                <li class=\"nav-item\">
                    <a class=\"nav-link ";
        // line 66
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 66), "type", [], "any", false, false, false, 66) == "all")) {
            echo "active";
        }
        echo "\" data-toggle=\"tab\" href=\"#all\" role=\"tab\">
                        <i class=\"flaticon-shopping-basket\" aria-hidden=\"true\"></i>";
        // line 67
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["All Shipments"]);
        echo "
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class=\"kt-portlet__body\">
        <div class=\"tab-content\">
            ";
        // line 75
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 75) == 5)) {
            // line 76
            echo "                <div class=\"tab-pane  ";
            if (((twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 76), "type", [], "any", false, false, false, 76)) && (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 76) == 5)) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 76), "type", [], "any", false, false, false, 76) == "saved"))) {
                echo "active";
            }
            echo "\" id=\"saved\" role=\"tabpanel\">
                    <div class=\"kt-datatable-saved\"></div>
                </div>
            ";
        }
        // line 80
        echo "            <div class=\"tab-pane  ";
        if ((twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 80), "type", [], "any", false, false, false, 80)) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 80), "type", [], "any", false, false, false, 80) == "requests"))) {
            echo "active";
        }
        echo "\" id=\"requests\" role=\"tabpanel\">
                <div class=\"kt-datatable-requests\"></div>
            </div>
            <div class=\"tab-pane ";
        // line 83
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 83), "type", [], "any", false, false, false, 83) == "approved")) {
            echo "active";
        }
        echo "\" id=\"approved\" role=\"tabpanel\">
                <div class=\"kt-datatable-approved\"></div>
            </div>
            <div class=\"tab-pane ";
        // line 86
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 86), "type", [], "any", false, false, false, 86) == "assigned")) {
            echo "active";
        }
        echo "\" id=\"assigned\" role=\"tabpanel\">
                <div class=\"kt-datatable-assigned\"></div>
            </div>
            <div class=\"tab-pane ";
        // line 89
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 89), "type", [], "any", false, false, false, 89) == "withdriver")) {
            echo "active";
        }
        echo "\" id=\"withdriver\" role=\"tabpanel\">
                <div class=\"kt-datatable-withdriver\"></div>
            </div>
            <div class=\"tab-pane ";
        // line 92
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 92), "type", [], "any", false, false, false, 92) == "stock")) {
            echo "active";
        }
        echo "\" id=\"stock\" role=\"tabpanel\">
                <div class=\"kt-datatable-stock\"></div>
            </div>
            <div class=\"tab-pane ";
        // line 95
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 95), "type", [], "any", false, false, false, 95) == "custom")) {
            echo "active";
        }
        echo "\" id=\"custom\" role=\"tabpanel\">
                <div class=\"kt-datatable-custom\"></div>
            </div>
            <div class=\"tab-pane ";
        // line 98
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 98), "type", [], "any", false, false, false, 98) == "postponed")) {
            echo "active";
        }
        echo "\" id=\"postponed\" role=\"tabpanel\">
                <div class=\"kt-datatable-postponed\"></div>
            </div>
            <div class=\"tab-pane ";
        // line 101
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 101), "type", [], "any", false, false, false, 101) == "supplied")) {
            echo "active";
        }
        echo "\" id=\"supplied\" role=\"tabpanel\">
                <div class=\"kt-datatable-supplied\"></div>
            </div>
            <div class=\"tab-pane ";
        // line 104
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 104), "type", [], "any", false, false, false, 104) == "delivered")) {
            echo "active";
        }
        echo "\" id=\"delivered\" role=\"tabpanel\">
                <div class=\"kt-datatable-delivered\"></div>
            </div>
            ";
        // line 107
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 107) != 5)) {
            // line 108
            echo "                <div class=\"tab-pane ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 108), "type", [], "any", false, false, false, 108) == "manifest")) {
                echo "active";
            }
            echo "\" id=\"manifest\" role=\"tabpanel\">
                    <div class=\"kt-datatable-manifest\"></div>
                </div>
            ";
        }
        // line 112
        echo "            <div class=\"tab-pane ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 112), "type", [], "any", false, false, false, 112) == "all")) {
            echo "active";
        }
        echo "\" id=\"all\" role=\"tabpanel\">
                <div class=\"kt-datatable-all\"></div>
            </div>
        </div>
    </div>
</div>
<!--end::Portlet-->
<div class=\"modal fade\" id=\"manifest_modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" >";
        // line 123
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Manifest information"]);
        echo "</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                </button>
            </div>

            ";
        // line 128
        echo call_user_func_array($this->env->getFunction('form_ajax')->getCallable(), ["ajax", "onSavemanifest", ["flash" => true, "novalidate" => true]]);
        echo "
                <div class=\"modal-body\">
                    <div class=\"row\">
                        <input type=\"hidden\" id=\"manifest_id\" class=\"form-control\" name=\"ids\" />
                        <div class=\"form-group col-lg-12\">
                            <label>";
        // line 133
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Date"]);
        echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                            <div class=\"input-group date\">
                                <input type=\"text\" class=\"form-control date\" readonly=\"\" name=\"ship_date\" value=\"";
        // line 135
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_modify_filter($this->env, ($context["now"] ?? null), "+1 day"), twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "dateformat", [], "any", false, false, false, 135)), "html", null, true);
        echo "\" required>
                                <div class=\"input-group-append\">
                                    <span class=\"input-group-text\">
                                        <i class=\"la la-calendar\"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class=\"form-group col-lg-12\">
                            <label>";
        // line 144
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Assign to specifc car?"]);
        echo "</label>
                            <div class=\"kt-checkbox-single\">
                                <label class=\"kt-checkbox\">
                                    <input type=\"checkbox\" id=\"car\" class=\"form-control\"  value=\"1\">
                                    <span></span>
                                </label>
                            </div>
                        </div>
                        <div class=\"form-group col-lg-12 employee_container\">
                            <label>";
        // line 153
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Employee"]);
        echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                            <select class=\"form-control\" id=\"employee_id\" name=\"employee_id\" data-live-search=\"true\" required>
                                <option data-hidden=\"true\"></option>
                                ";
        // line 156
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["employees"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["employee"]) {
            // line 157
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employee"], "id", [], "any", false, false, false, 157), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employee"], "name", [], "any", false, false, false, 157), "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['employee'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 159
        echo "                            </select>
                        </div>
                        <div class=\"form-group col-lg-12 kt-hidden car_container\">
                            <label>";
        // line 162
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Car"]);
        echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                            <select class=\"form-control\" id=\"car_id\" name=\"car_id\" data-live-search=\"true\" required>
                                <option data-hidden=\"true\"></option>
                                ";
        // line 165
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cars"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["car"]) {
            // line 166
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["car"], "id", [], "any", false, false, false, 166), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["car"], "name", [], "any", false, false, false, 166), "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['car'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 168
        echo "                            </select>
                        </div>
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">";
        // line 173
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Close"]);
        echo "</button>
                    <button type=\"submit\" class=\"btn btn-primary\">";
        // line 174
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Assign"]);
        echo "</button>
                </div>
            ";
        // line 176
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
        echo "
        </div>
    </div>
</div>
<div class=\"modal fade\" id=\"chooseEmployee\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" >";
        // line 184
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Print Employee Orders"]);
        echo "</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                </button>
            </div>

            ";
        // line 189
        echo call_user_func_array($this->env->getFunction('form_ajax')->getCallable(), ["ajax", "onPrint", ["success" => "created successfully!", "flash" => true, "class" => "kt_form", "novalidate" => true]]);
        echo "
                <div class=\"modal-body\">
                    <div class=\"row\">
                        <div class=\"form-group col-lg-12\">
                            <label>";
        // line 193
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Date"]);
        echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                            <div class=\"input-group date\">
                                <input type=\"text\" class=\"form-control date\" readonly=\"\" name=\"date\" value=\"";
        // line 195
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["now"] ?? null), twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "dateformat", [], "any", false, false, false, 195)), "html", null, true);
        echo "\" required>
                                <div class=\"input-group-append\">
                                    <span class=\"input-group-text\">
                                        <i class=\"la la-calendar\"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        ";
        // line 203
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 203) != 4)) {
            // line 204
            echo "                            <div class=\"form-group col-lg-12\">
                                <label>";
            // line 205
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Employee"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                <select class=\"form-control\"name=\"employee_id\" data-live-search=\"true\" required>
                                    <option data-hidden=\"true\"></option>
                                    ";
            // line 208
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["employees"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["employee"]) {
                // line 209
                echo "                                        <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employee"], "id", [], "any", false, false, false, 209), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employee"], "name", [], "any", false, false, false, 209), "html", null, true);
                echo "</option>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['employee'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 211
            echo "                                </select>
                            </div>
                        ";
        }
        // line 214
        echo "                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">";
        // line 217
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Close"]);
        echo "</button>
                    <button type=\"button\" class=\"btn btn-primary print\">";
        // line 218
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Print"]);
        echo "</button>
                </div>
            ";
        // line 220
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
        echo "
        </div>
    </div>
</div>

<!-- statuses modal -->
<div class=\"modal fade\" id=\"change_status\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" >";
        // line 230
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Edit Shipments Statuses"]);
        echo "</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                </button>
            </div>

            ";
        // line 235
        echo call_user_func_array($this->env->getFunction('form_ajax')->getCallable(), ["ajax", "onEditStatus", ["success" => "created successfully!", "flash" => true, "class" => "kt_form", "novalidate" => true]]);
        echo "
                <div class=\"modal-body\">
                    <div class=\"row\">
                        <input type=\"hidden\" id=\"shipments_statuses_id\" class=\"form-control\" name=\"ids\" />
                        ";
        // line 239
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 239) != 4)) {
            // line 240
            echo "                            <div class=\"form-group col-lg-12\">
                                <label>";
            // line 241
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Status"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                <select class=\"form-control\"name=\"status_id\" data-live-search=\"true\" required>
                                    <option data-hidden=\"true\"></option>
                                    ";
            // line 244
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["shipmentStatuses"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["status"]) {
                // line 245
                echo "                                        <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["status"], "id", [], "any", false, false, false, 245), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["status"], "name", [], "any", false, false, false, 245), "html", null, true);
                echo "</option>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['status'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 247
            echo "                                </select>
                            </div>
                        ";
        }
        // line 250
        echo "                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">";
        // line 253
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Close"]);
        echo "</button>
                    <button type=\"submit\" class=\"btn btn-primary print\">";
        // line 254
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Update"]);
        echo "</button>
                </div>
            ";
        // line 256
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
        echo "
        </div>
    </div>
</div>

<!-- assign employee -->
<div class=\"modal fade\" id=\"assign_employee\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" >";
        // line 266
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Assign Shipments to "]);
        echo "</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                </button>
            </div>

            ";
        // line 271
        echo call_user_func_array($this->env->getFunction('form_ajax')->getCallable(), ["ajax", "onAssignEmployee", ["success" => "created successfully!", "flash" => true, "class" => "kt_form", "novalidate" => true]]);
        echo "
                <div class=\"modal-body\">
                    <div class=\"row\">
                        <input type=\"hidden\" id=\"shipments_employee_id\" class=\"form-control\" name=\"ids\" />
                        ";
        // line 275
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 275) != 4)) {
            // line 276
            echo "                            <div class=\"form-group col-lg-12\">
                                <label>";
            // line 277
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Employee"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                <select class=\"form-control\" name=\"employee_id\" data-live-search=\"true\" required>
                                    <option data-hidden=\"true\"></option>
                                    ";
            // line 280
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["employees"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["employee"]) {
                // line 281
                echo "                                        <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employee"], "id", [], "any", false, false, false, 281), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employee"], "name", [], "any", false, false, false, 281), "html", null, true);
                echo "</option>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['employee'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 283
            echo "                                </select>
                            </div>
                        ";
        }
        // line 286
        echo "                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">";
        // line 289
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Close"]);
        echo "</button>
                    <button type=\"submit\" class=\"btn btn-primary print\">";
        // line 290
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Assign"]);
        echo "</button>
                </div>
            ";
        // line 292
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
        echo "
        </div>
    </div>
</div>


<!-- print shipments label -->
<div class=\"modal fade\" id=\"print_lable\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" >";
        // line 303
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Print Shipments Label "]);
        echo "</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                </button>
            </div>

            ";
        // line 308
        echo call_user_func_array($this->env->getFunction('form_ajax')->getCallable(), ["ajax", "onPrintShipments", ["success" => "created successfully!", "flash" => true, "class" => "kt_form", "novalidate" => true]]);
        echo "
                <div class=\"modal-body\">
                    <div class=\"row\">
                        <input type=\"hidden\" id=\"shipments_label_id\" class=\"form-control\" name=\"ids\" />
                        ";
        // line 312
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 312) != 4)) {
            // line 313
            echo "                            <div class=\"form-group col-lg-12\">
                                <p>Are you sure to print <span id=\"shipments_length\"></span>  selected records ?</p>
                            </div>
                        ";
        }
        // line 317
        echo "                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">";
        // line 320
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Close"]);
        echo "</button>
                    <button type=\"submit\" class=\"btn btn-primary print\">";
        // line 321
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Print"]);
        echo "</button>
                </div>
            ";
        // line 323
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
        echo "
        </div>
    </div>
</div>

";
        // line 328
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 329
        echo "<script type=\"text/javascript\">
\"use strict\";
var KTAppUserListDatatable = function () {
    // variables
    var datatable;

    // init
    var init = function (type) {
        // init the datatables. Learn more: //keenthemes.com/metronic/?page=docs&section=datatable
        if(type == 'manifest'){
            var columns = [
                {
                    field: 'id',
                    title: '#',
                    autoHide: true,
                    sortable: false,
                    width: 20,
                    textAlign: 'center',
                },
                {
                    field: \"created_at\",
                    title: \"";
        // line 350
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Created On"]);
        echo "\",
                    autoHide: false,
                    sortable: false,
                    width: 'auto',
    \t\t\t\ttemplate: function(data, i) {
    \t\t\t\t\tvar output = '\\
                            <div class=\"kt-user-card-v2 kt-user-card-v2--uncircle\">\\
                                <div class=\"kt-user-card-v2__details\">\\
                                    <a href=\"";
        // line 358
        echo url("dashboard/shipments/manifest");
        echo "/'+data.id+'/view\" class=\"kt-user-card-v2__name\">' + data.created_at_date + '</a>\\
                                    <span class=\"kt-user-card-v2__email\">' + data.created_at_time + '</span>\\
                                </div>\\
                            </div>';
    \t\t\t\t\treturn output;
    \t\t\t\t}
                },
                {
                    field: \"details\",
                    title: \"";
        // line 367
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Responsiable"]);
        echo "\",
                    autoHide: true,
                    sortable: false,
                    width: 'auto',
    \t\t\t\ttemplate: function(data, i) {
    \t\t\t\t\tvar output = '\\
                            <div class=\"kt-user-card-v2 kt-user-card-v2--uncircle\">\\
                                <div class=\"kt-user-card-v2__details\">';
                                if(data.car != '-'){
                                    output += '<a href=\"";
        // line 376
        echo url("dashboard/shipments/manifest");
        echo "/'+data.id+'/view\" class=\"kt-user-card-v2__name\">' + data.car + '</a>\\
                                                <span class=\"kt-user-card-v2__email\">' + data.driver + '</span>';
                                }else{
                                    output += '<a href=\"";
        // line 379
        echo url("dashboard/shipments/manifest");
        echo "/'+data.id+'/view\" class=\"kt-user-card-v2__name\">' + data.employee + '</a>';
                                }
                                output += '</div>\\
                            </div>';
    \t\t\t\t\treturn output;
    \t\t\t\t}
                },
                {
                    field: \"user\",
                    title: \"";
        // line 388
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["By"]);
        echo "\",
                    autoHide: true,
                    sortable: false,
                    width: 'auto',
                },
                {
                    field: \"orders\",
                    title: \"";
        // line 395
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["No. Of Orders"]);
        echo "\",
                    autoHide: false,
                    sortable: false,
                    width: 'auto',
                }
            ];
        }else if(type == 'requests' || type == 'delivered' || type == 'assigned' || type == 'withdriver' || type == 'postponed' || type == 'supplied' || type == 'all'){
            var columns = [
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
        // line 415
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Tracking"]);
        echo "\",
                    sortable: true,
                    width: 100,
                    template: function(row) {
                        return '<a href=\"";
        // line 419
        echo url("dashboard/shipments");
        echo "/'+row.id+'/view\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "tracking", [], "any", false, false, false, 419), "prefix_order", [], "any", false, false, false, 419), "html", null, true);
        echo "'+row.shipping_number+'</a>';
                    }
                },
                {
                    field: \"details\",
                    title: \"";
        // line 424
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Shipment Details"]);
        echo "\",
                    sortable: false,
                    width: 'auto',
                    template: function(data, i) {
                        if(data.sender && data.sender.name){
                            var output  = '\\
                                <div class=\"kt-user-card-v2 kt-user-card-v2--uncircle\">\\
                                    <div class=\"kt-user-card-v2__details\">\\
                                        <a href=\"";
        // line 432
        if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "client", 1 => "r"], "method", false, false, false, 432)) {
            echo url("dashboard/clients");
            echo "/'+data.sender.id+'/view";
        } else {
            echo "javascript:;";
        }
        echo "\" class=\"kt-user-card-v2__name\"><b class=\"kt-font-boldest\">";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sender"]);
        echo ":</b> ' + data.sender.name + '</a>';
                          if(+ data.shipping_from_area && + data.shipping_from_area != '-'){
                              output      += '\\
                                        <span class=\"kt-user-card-v2__email\"><b class=\"kt-font-boldest\">";
        // line 435
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["From"]);
        echo ":</b> ' + data.shipping_from_area + '</span>';
                                    }
                        }else{
                            var output  = '\\
                                    <div class=\"kt-user-card-v2 kt-user-card-v2--uncircle\">\\
                                        <div class=\"kt-user-card-v2__details\">\\
                                            <a href=\"javascript:;\" class=\"kt-user-card-v2__name\"><b class=\"kt-font-boldest\">";
        // line 441
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sender"]);
        echo ":</b> ' + data.sender_name + '</a>';
                          if(+ data.shipping_from_area && + data.shipping_from_area != '-'){
                              output      += '\\
                                              <span class=\"kt-user-card-v2__email\"><b class=\"kt-font-boldest\">";
        // line 444
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["From"]);
        echo ":</b> ' + data.shipping_from_area + '</span>';
                          }
                        }
                        if(data.receiver && data.receiver.name && data.receiver.name != '-'){
                            output      += '\\
                                        <a href=\"";
        // line 449
        if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "client", 1 => "r"], "method", false, false, false, 449)) {
            echo url("dashboard/clients");
            echo "/'+data.receiver.id+'/view";
        } else {
            echo "javascript:;";
        }
        echo "\" class=\"kt-margin-t-5 kt-user-card-v2__name\"><b>";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Receiver"]);
        echo ":</b> ' + data.receiver.name + '</a>';
                          if(data.shipping_to_area && + data.shipping_to_area != '-'){
                              output      += '\\
                                        <span class=\"kt-user-card-v2__email\"><b class=\"kt-font-boldest\">";
        // line 452
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["To"]);
        echo ":</b> ' + data.shipping_to_area + '</span>';
                          }
                        }else if(data.receiver_name && data.receiver_name != '-'){
                            output  += '\\
                                    <div class=\"kt-user-card-v2 kt-user-card-v2--uncircle\">\\
                                        <div class=\"kt-user-card-v2__details\">\\
                                            <a href=\"javascript:;\" class=\"kt-user-card-v2__name\"><b class=\"kt-font-boldest\">";
        // line 458
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Receiver"]);
        echo ":</b> ' + data.receiver_name + '</a>';
                            if(data.shipping_to_area && + data.shipping_to_area != '-'){
                                output      += '\\
                                                <span class=\"kt-user-card-v2__email\"><b class=\"kt-font-boldest\">";
        // line 461
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["From"]);
        echo ":</b> ' + data.shipping_to_area + '</span>';
                            }
                        }
                        output      += '\\
                                </div>\\
                            </div>';
                        return output;
                    }
                },
                {
                    field: \"office\",
                    title: \"";
        // line 472
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Branch"]);
        echo "\",
                    sortable: false,
                    width: 100,
                    template: function(data, i) {
                        return '<a href=\"javascript:;\">'+data.office+'</a>';
                    }
                },
                {
                    field: \"status\",
                    title: \"";
        // line 481
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Status"]);
        echo "\",
                    sortable: false,
                    width: 'auto',
                    template: function(row) {
                        if(row.requested == 100){
                            var output = '<span class=\"btn btn-bold btn-sm btn-label-primary\">";
        // line 486
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Saved"]);
        echo "</span>';
                        }else{
                            var output = '<span class=\"btn btn-bold btn-sm btn-label-' + row.status.color + '\">' + row.status.name + '</span>';
                            if(row.delayed == 1){
                                output  += '&nbsp;<span class=\"btn btn-bold btn-sm btn-label-danger\">";
        // line 490
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delayed"]);
        echo "</span>';
                            }
                            if(row.requested == 10 || row.requested == 11){
                                output  += '&nbsp;<span class=\"btn btn-bold btn-sm btn-label-warning\">";
        // line 493
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Returning Discards"]);
        echo "</span>';
                            }
                            if(row.requested == 12 && row.status.equal != 12){
                                output  += '&nbsp;<span class=\"btn btn-bold btn-sm btn-label-success\">";
        // line 496
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Supplied"]);
        echo "</span>';
                            }
                            if(row.requested == 7 || row.requested == 10 || row.requested == 16){
                                output  += '&nbsp;<span class=\"btn btn-bold btn-sm      btn-label-info\">";
        // line 499
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Stock"]);
        echo "</span>';
                            }
                            if(row.requested == 11 || row.requested == 15 || row.requested == 17 || row.requested == 18){
                                output  += '&nbsp;<span class=\"btn btn-bold btn-sm btn-label-success\">";
        // line 502
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Custom"]);
        echo "</span>';
                            }
                        }

                        return output;
                    }
                },
                {
                    field: \"created_at_date\",
                    title: \"";
        // line 511
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Date"]);
        echo "\",
                    sortable: false,
                    width: 100,
                },
                {
                    field: \"Actions\",
                    width: 100,
                    title: \"";
        // line 518
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Actions"]);
        echo "\",
                    sortable: false,
                    overflow: 'visible',
                    template: function (data) {
                        var output = '' +
                        '<div class=\"btn-group btn-group\" role=\"group\" aria-label=\"...\">'+
                            '<a href=\"";
        // line 524
        echo url("dashboard/shipments");
        echo "/'+data.id+'/view\" class=\"btn btn-brand btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["View Shipment"]);
        echo "\"><i class=\"la la-eye\"></i></button>';
                            ";
        // line 525
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "order", 1 => "u"], "method", false, false, false, 525) && (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 525) != 5))) {
            // line 526
            echo "                                if(data.requested   ==  0 || data.requested == 1 || data.requested == 100){
                                    output += '<a href=\"";
            // line 527
            echo url("dashboard/shipments");
            echo "/'+data.id+'/edit\" class=\"btn btn-brand btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Edit Shipment"]);
            echo "\"><i class=\"la la-edit\"></i></button>';
                                }
                            ";
        }
        // line 530
        echo "                            ";
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 530) == 5)) {
            // line 531
            echo "                                if((data.requested   ==  0 || data.requested == 100) && data.sender_id == ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 531), "html", null, true);
            echo "){
                                    output += '<a href=\"";
            // line 532
            echo url("dashboard/shipments");
            echo "/'+data.id+'/edit\" class=\"btn btn-brand btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Edit Shipment"]);
            echo "\"><i class=\"la la-edit\"></i></button>';
                                }
                            ";
        }
        // line 535
        echo "                                if((data.requested   !=  0 && data.requested   !=  1 && data.requested != 100)){
                                    output += '<a href=\"";
        // line 536
        echo url("dashboard/shipments");
        echo "/'+data.id+'/print/shipment\" target=\"_blank\" class=\"btn btn-info btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Print Shipment"]);
        echo "\"><i class=\"la la-print\"></i></button>';
                                }
                            ";
        // line 538
        if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "order", 1 => "u"], "method", false, false, false, 538)) {
            // line 539
            echo "                                if((data.requested   ==  100 || data.requested   ==  0 || data.requested == 1)){
                                    output += '<a href=\"";
            // line 540
            echo url("dashboard/shipments");
            echo "/'+data.id+'/print/label\" class=\"btn btn-info btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Print Label"]);
            echo "\" target=\"_blank\" ><i class=\"la la-qrcode\"></i></button>';
                                }
                            ";
        }
        // line 543
        echo "                            //0 = Pending | 1 = Approved | 2 = Refused | 3 = Delivered to driver | 4 = Delivered | 5 = Return request | 6 = Delivery of discards to the driver | 7 = Supply in stock | 8 = Returned | 9 = received


                            ";
        // line 546
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "order", 1 => "u"], "method", false, false, false, 546) && (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 546) != 5))) {
            // line 547
            echo "                                if((data.requested   ==  1 || data.requested   ==  3 || data.requested   ==  5 || data.requested == 6 || data.requested == 7 || data.requested == 9)){
                                    output += '<a href=\"";
            // line 548
            echo url("dashboard/shipments");
            echo "/'+data.id+'/update\" class=\"btn btn-info btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Update Status"]);
            echo "\"><i class=\"la la-street-view\"></i></button>';
                                }
                            ";
        }
        // line 551
        echo "
                            ";
        // line 552
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "order", 1 => "u"], "method", false, false, false, 552) && (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 552) != 5))) {
            // line 553
            echo "                                if((data.requested   ==  9 || data.requested   ==  3)){
                                    output += '<a href=\"";
            // line 554
            echo url("dashboard/shipments");
            echo "/'+data.id+'/deliver\" class=\"btn btn-success btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Mark as delivered"]);
            echo "\"><i class=\"la la-smile-o\"></i></button>';
                                }
                            ";
        }
        // line 557
        echo "                            ";
        if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "order", 1 => "d"], "method", false, false, false, 557)) {
            // line 558
            echo "                                if(data.requested   ==  0 || data.requested == 100 || data.requested == 1){
                                    output += '<a href=\"javascript:void(0);\" class=\"btn btn-danger btn-sm delete_record kt-font-light btn-icon\" rel=\"'+data.id+'\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"";
            // line 559
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delete Shipment"]);
            echo "\"><i class=\"la la-remove\"></i></a>';
                                }
                            ";
        }
        // line 562
        echo "                            ";
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 562) == 5)) {
            // line 563
            echo "                                if((data.requested   ==  0 || data.requested == 100) && data.sender_id == ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 563), "html", null, true);
            echo "){
                                    output += '<a href=\"javascript:void(0);\" class=\"btn btn-danger btn-sm delete_record kt-font-light btn-icon\" rel=\"'+data.id+'\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"";
            // line 564
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delete Shipment"]);
            echo "\"><i class=\"la la-remove\"></i></a>';
                                }
                            ";
        }
        // line 567
        echo "                        '</div>';

                        return output;
                    },
                }
            ]
        }else{
            var columns = [
                {
                    field: 'id',
                    title: '#',
                    sortable: false,
                    autoHide: true,
                    width: 20,
                    selector: {
                        class: 'kt-checkbox--solid'
                    },
                    textAlign: 'center',
                },
                {
                    field: \"number\",
                    title: \"";
        // line 588
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Tracking"]);
        echo "\",
                    sortable: true,
                    width: 100,
                    template: function(row) {
                        return '<a href=\"";
        // line 592
        echo url("dashboard/shipments");
        echo "/'+row.id+'/view\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "tracking", [], "any", false, false, false, 592), "prefix_order", [], "any", false, false, false, 592), "html", null, true);
        echo "'+row.shipping_number+'</a>';
                    }
                },
                {
                    field: \"details\",
                    title: \"";
        // line 597
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Shipment Details"]);
        echo "\",
                    sortable: false,
                    width: 'auto',
                    template: function(data, i) {
                        if(data.sender && data.sender.name){
                            var output  = '\\
                                <div class=\"kt-user-card-v2 kt-user-card-v2--uncircle\">\\
                                    <div class=\"kt-user-card-v2__details\">\\
                                        <a href=\"";
        // line 605
        if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "client", 1 => "r"], "method", false, false, false, 605)) {
            echo url("dashboard/clients");
            echo "/'+data.sender.id+'/view";
        } else {
            echo "javascript:;";
        }
        echo "\" class=\"kt-user-card-v2__name\"><b class=\"kt-font-boldest\">";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sender"]);
        echo ":</b> ' + data.sender.name + '</a>';
                          if(+ data.shipping_from_area && + data.shipping_from_area != '-'){
                              output      += '\\
                                        <span class=\"kt-user-card-v2__email\"><b class=\"kt-font-boldest\">";
        // line 608
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["From"]);
        echo ":</b> ' + data.shipping_from_area + '</span>';
                                    }
                        }else{
                            var output  = '\\
                                    <div class=\"kt-user-card-v2 kt-user-card-v2--uncircle\">\\
                                        <div class=\"kt-user-card-v2__details\">\\
                                            <a href=\"javascript:;\" class=\"kt-user-card-v2__name\"><b class=\"kt-font-boldest\">";
        // line 614
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sender"]);
        echo ":</b> ' + data.sender_name + '</a>';
                          if(+ data.shipping_from_area && + data.shipping_from_area != '-'){
                              output      += '\\
                                              <span class=\"kt-user-card-v2__email\"><b class=\"kt-font-boldest\">";
        // line 617
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["From"]);
        echo ":</b> ' + data.shipping_from_area + '</span>';
                          }
                        }
                        if(data.receiver && data.receiver.name && data.receiver.name != '-'){
                            output      += '\\
                                        <a href=\"";
        // line 622
        if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "client", 1 => "r"], "method", false, false, false, 622)) {
            echo url("dashboard/clients");
            echo "/'+data.receiver.id+'/view";
        } else {
            echo "javascript:;";
        }
        echo "\" class=\"kt-margin-t-5 kt-user-card-v2__name\"><b>";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Receiver"]);
        echo ":</b> ' + data.receiver.name + '</a>';
                          if(data.shipping_to_area && + data.shipping_to_area != '-'){
                              output      += '\\
                                        <span class=\"kt-user-card-v2__email\"><b class=\"kt-font-boldest\">";
        // line 625
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["To"]);
        echo ":</b> ' + data.shipping_to_area + '</span>';
                          }
                        }else if(data.receiver_name && data.receiver_name != '-'){
                            output  += '\\
                                    <div class=\"kt-user-card-v2 kt-user-card-v2--uncircle\">\\
                                        <div class=\"kt-user-card-v2__details\">\\
                                            <a href=\"javascript:;\" class=\"kt-user-card-v2__name\"><b class=\"kt-font-boldest\">";
        // line 631
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Receiver"]);
        echo ":</b> ' + data.receiver_name + '</a>';
                            if(data.shipping_to_area && + data.shipping_to_area != '-'){
                                output      += '\\
                                                <span class=\"kt-user-card-v2__email\"><b class=\"kt-font-boldest\">";
        // line 634
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["From"]);
        echo ":</b> ' + data.shipping_to_area + '</span>';
                            }
                        }
                        output      += '\\
                                </div>\\
                            </div>';
                        return output;
                    }
                },
                {
                    field: \"office\",
                    title: \"";
        // line 645
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Branch"]);
        echo "\",
                    sortable: false,
                    width: 100,
                    template: function(data, i) {
                        return '<a href=\"javascript:;\">'+data.office+'</a>';
                    }
                },
                {
                    field: \"status\",
                    title: \"";
        // line 654
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Status"]);
        echo "\",
                    sortable: false,
                    width: 'auto',
                    template: function(row) {
                        if(row.requested == 100){
                            var output = '<span class=\"btn btn-bold btn-sm btn-label-primary\">";
        // line 659
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Saved"]);
        echo "</span>';
                        }else{
                            var output = '<span class=\"btn btn-bold btn-sm btn-label-' + row.status.color + '\">' + row.status.name + '</span>';
                            if(row.delayed == 1){
                                output  += '&nbsp;<span class=\"btn btn-bold btn-sm btn-label-danger\">";
        // line 663
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delayed"]);
        echo "</span>';
                            }
                            if(row.requested == 10 || row.requested == 11){
                                output  += '&nbsp;<span class=\"btn btn-bold btn-sm btn-label-warning\">";
        // line 666
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Returning Discards"]);
        echo "</span>';
                            }
                            if(row.requested == 12 && row.status.equal != 12){
                                output  += '&nbsp;<span class=\"btn btn-bold btn-sm btn-label-success\">";
        // line 669
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Supplied"]);
        echo "</span>';
                            }
                            if(row.requested == 7 || row.requested == 10 || row.requested == 16){
                                output  += '&nbsp;<span class=\"btn btn-bold btn-sm      btn-label-info\">";
        // line 672
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Stock"]);
        echo "</span>';
                            }
                            if(row.requested == 11 || row.requested == 15 || row.requested == 17 || row.requested == 18){
                                output  += '&nbsp;<span class=\"btn btn-bold btn-sm btn-label-success\">";
        // line 675
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Custom"]);
        echo "</span>';
                            }
                        }

                        return output;
                    }
                },
                {
                    field: \"created_at_date\",
                    title: \"";
        // line 684
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Date"]);
        echo "\",
                    sortable: false,
                    width: 100,
                },
                {
                    field: \"Actions\",
                    width: 100,
                    title: \"";
        // line 691
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Actions"]);
        echo "\",
                    sortable: false,
                    overflow: 'visible',
                    template: function (data) {
                        var output = '' +
                        '<div class=\"btn-group btn-group\" role=\"group\" aria-label=\"...\">'+
                            '<a href=\"";
        // line 697
        echo url("dashboard/shipments");
        echo "/'+data.id+'/view\" class=\"btn btn-brand btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["View Shipment"]);
        echo "\"><i class=\"la la-eye\"></i></button>';
                            ";
        // line 698
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "order", 1 => "u"], "method", false, false, false, 698) && (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 698) != 5))) {
            // line 699
            echo "                                if(data.requested   ==  0 || data.requested == 1 || data.requested == 100){
                                    output += '<a href=\"";
            // line 700
            echo url("dashboard/shipments");
            echo "/'+data.id+'/edit\" class=\"btn btn-brand btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Edit Shipment"]);
            echo "\"><i class=\"la la-edit\"></i></button>';
                                }
                            ";
        }
        // line 703
        echo "                            ";
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 703) == 5)) {
            // line 704
            echo "                                if((data.requested   ==  0 || data.requested == 100) && data.sender_id == ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 704), "html", null, true);
            echo "){
                                    output += '<a href=\"";
            // line 705
            echo url("dashboard/shipments");
            echo "/'+data.id+'/edit\" class=\"btn btn-brand btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Edit Shipment"]);
            echo "\"><i class=\"la la-edit\"></i></button>';
                                }
                            ";
        }
        // line 708
        echo "                                if((data.requested   !=  0 && data.requested   !=  1 && data.requested != 100)){
                                    output += '<a href=\"";
        // line 709
        echo url("dashboard/shipments");
        echo "/'+data.id+'/print/shipment\" target=\"_blank\" class=\"btn btn-info btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Print Shipment"]);
        echo "\"><i class=\"la la-print\"></i></button>';
                                }
                            ";
        // line 711
        if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "order", 1 => "u"], "method", false, false, false, 711)) {
            // line 712
            echo "                                if((data.requested   ==  100 || data.requested   ==  0 || data.requested == 1)){
                                    output += '<a href=\"";
            // line 713
            echo url("dashboard/shipments");
            echo "/'+data.id+'/print/label\" class=\"btn btn-info btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Print Label"]);
            echo "\" target=\"_blank\" ><i class=\"la la-qrcode\"></i></button>';
                                }
                            ";
        }
        // line 716
        echo "                            ";
        if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "order", 1 => "u"], "method", false, false, false, 716)) {
            // line 717
            echo "                                if((data.requested   ==  3 || data.requested   ==  5 || data.requested == 6 || data.requested == 7 || data.requested == 9)){
                                    output += '<a href=\"";
            // line 718
            echo url("dashboard/shipments");
            echo "/'+data.id+'/update\" class=\"btn btn-info btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Update Status"]);
            echo "\"><i class=\"la la-street-view\"></i></button>';
                                }
                            ";
        }
        // line 721
        echo "                            //0 = Pending | 1 = Approved | 2 = Refused | 3 = Delivered to driver | 4 = Delivered | 5 = Return request | 6 = Delivery of discards to the driver | 7 = Supply in stock | 8 = Returned | 9 = received

                            ";
        // line 723
        if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "order", 1 => "u"], "method", false, false, false, 723)) {
            // line 724
            echo "                                if((data.requested   ==  1 || data.requested   ==  3)){
                                    output += '<a href=\"";
            // line 725
            echo url("dashboard/shipments");
            echo "/'+data.id+'/deliver\" class=\"btn btn-success btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Mark as delivered"]);
            echo "\"><i class=\"la la-smile-o\"></i></button>';
                                }
                            ";
        }
        // line 728
        echo "                            ";
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "order", 1 => "d"], "method", false, false, false, 728) && (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 728) != 5))) {
            // line 729
            echo "                                if(data.requested   ==  0 || data.requested == 100 || data.requested == 1){
                                    output += '<a href=\"javascript:void(0);\" class=\"btn btn-danger btn-sm delete_record kt-font-light btn-icon\" rel=\"'+data.id+'\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"";
            // line 730
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delete Shipment"]);
            echo "\"><i class=\"la la-remove\"></i></a>';
                                }
                            ";
        }
        // line 733
        echo "                            ";
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 733) == 5)) {
            // line 734
            echo "                                if((data.requested   ==  0 || data.requested == 100) && (data.sender_id != ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 734), "html", null, true);
            echo ")){
                                    output += '<a href=\"javascript:void(0);\" class=\"btn btn-danger btn-sm delete_record kt-font-light btn-icon\" rel=\"'+data.id+'\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"";
            // line 735
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delete Shipment"]);
            echo "\"><i class=\"la la-remove\"></i></a>';
                                }
                            ";
        }
        // line 738
        echo "                        '</div>';

                        return output;
                    },
                }
            ]
        }

        datatable = \$('.kt-datatable-'+type).KTDatatable({
            translate: {
                records: {
                    processing: '";
        // line 749
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please wait"]);
        echo "...',
                    noRecords: '";
        // line 750
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["No records found"]);
        echo "'
                },
                toolbar: {
                    pagination: {
                        items: {
                            default: {
                                first: '";
        // line 756
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["First"]);
        echo "',
                                prev: '";
        // line 757
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Previous"]);
        echo "',
                                next: '";
        // line 758
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Next"]);
        echo "',
                                last: '";
        // line 759
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Last"]);
        echo "',
                                more: '";
        // line 760
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["More pages"]);
        echo "',
                                input: '";
        // line 761
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Page number"]);
        echo "',
                                select: '";
        // line 762
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Select page size"]);
        echo "'
                            },

                            info: \"";
        // line 765
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Displaying"]);
        echo " ";
        echo "{{";
        echo "start";
        echo "}}";
        echo " - ";
        echo "{{";
        echo "end";
        echo "}}";
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
                scroll: true, // enable/disable datatable scroll both horizontal and vertical when needed.
                footer: false, // display/hide footer
            },

            // column sorting
            sortable: true,

            pagination: true,

            search: {
                input: \$('#generalSearch'),
                delay: 400,
            },
            data: {
                type: 'remote',
                source: {
                    read: {
                        url: '";
        // line 790
        echo url("api/shipments");
        echo "/'+type,
                    },
                },
                pageSize: 10, // display 20 records per page
                serverPaging: true,
                serverFiltering: true,
                serverSorting: true,
            },
            // columns definition
            columns: columns
        });


        return datatable;
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
            \$('#generalSearch').val('');
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
        // line 863
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Are you sure to update"]);
        echo " \" + ids.length + \" ";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["selected records status to"]);
        echo " \" + status + \" ?\",
                    type: \"info-\",

                    confirmButtonText: \"";
        // line 866
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Yes, update"]);
        echo "!\",
                    confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",

                    showCancelButton: true,
                    cancelButtonText: \"";
        // line 870
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["No, cancel"]);
        echo "\",
                    cancelButtonClass: \"btn btn-sm btn-bold btn-default\"
                }).then(function (result) {
                    if (result.value) {
                        swal.fire({
                            title: '";
        // line 875
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Deleted"]);
        echo "!',
                            text: '";
        // line 876
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Your selected records statuses have been updated"]);
        echo "!',
                            type: 'success',
                            buttonsStyling: false,
                            confirmButtonText: \"";
        // line 879
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["OK"]);
        echo "\",
                            confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                        })
                        // result.dismiss can be 'cancel', 'overlay',
                        // 'close', and 'timer'
                    } else if (result.dismiss === 'cancel') {
                        swal.fire({
                            title: '";
        // line 886
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Cancelled"]);
        echo "',
                            text: '";
        // line 887
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["You selected records statuses have not been updated"]);
        echo "!',
                            type: 'error',
                            buttonsStyling: false,
                            confirmButtonText: \"";
        // line 890
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["OK"]);
        echo "\",
                            confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                        });
                    }
                });
            }
        });
    }
    // selected records status update
    var selectedFilter = function () {
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
        // line 918
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Are you sure to delete"]);
        echo " \" + ids.length + \" ";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["selected records ?"]);
        echo "\",
                    type: \"error\",

                    confirmButtonText: \"";
        // line 921
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Yes, delete!"]);
        echo "\",
                    confirmButtonClass: \"btn btn-sm btn-bold btn-danger\",

                    showCancelButton: true,
                    cancelButtonText: '";
        // line 925
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
        // line 933
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Deleted!"]);
        echo "',
                                    text: '";
        // line 934
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Your selected records have been deleted! :("]);
        echo "',
                                    type: 'success',
                                    buttonsStyling: false,
                                    confirmButtonText: '";
        // line 937
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
        // line 947
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Cancelled"]);
        echo "',
                            text: '";
        // line 948
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["You selected records have not been deleted! :)"]);
        echo "',
                            type: 'error',
                            buttonsStyling: false,
                            confirmButtonText: '";
        // line 951
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
        // line 966
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Are you sure to delete this item ?"]);
        echo "\",
                type: \"danger\",

                confirmButtonText: \"";
        // line 969
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Yes, delete!"]);
        echo "\",
                confirmButtonClass: \"btn btn-sm btn-bold btn-danger\",

                showCancelButton: true,
                cancelButtonText: '";
        // line 973
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
        // line 982
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Deleted!"]);
        echo "',
                                text: '";
        // line 983
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Your selected record has been deleted! :("]);
        echo "',
                                type: 'success',
                                buttonsStyling: false,
                                confirmButtonText: '";
        // line 986
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
        // line 996
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Cancelled"]);
        echo "',
                        text: '";
        // line 997
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["You selected record has not been deleted! :)"]);
        echo "',
                        type: 'error',
                        buttonsStyling: false,
                        confirmButtonText: '";
        // line 1000
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["OK"]);
        echo "',
                        confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                    });
                }
            });
        });


        \$('body').on('click', '#sendAll', function (e) {
            e.preventDefault();

            // fetch selected IDs
            var selected = [];
            var ids = datatable.rows('.kt-datatable__row--active').nodes().find('.kt-checkbox--single > [type=\"checkbox\"]').map(function (i, chk) {
                selected[\$(chk).val()] = \$(chk).val();
                return \$(chk).val();
            });
            if (ids.length > 0) {
                // learn more: //sweetalert2.github.io/
                swal.fire({
                    buttonsStyling: false,

                    text: \"";
        // line 1022
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Are you sure you want to send all"]);
        echo " \" + ids.length + \" ";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["selected records to the company?"]);
        echo "\",
                    type: \"error\",

                    confirmButtonText: \"";
        // line 1025
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Yes!"]);
        echo "\",
                    confirmButtonClass: \"btn btn-sm btn-bold btn-danger\",

                    showCancelButton: true,
                    cancelButtonText: '";
        // line 1029
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["No, cancel"]);
        echo "',
                    cancelButtonClass: \"btn btn-sm btn-bold btn-brand\"
                }).then(function (result) {
                    if (result.value) {
                        \$.request('onSend', {
                            data: {id: selected},
                            success: function(data) {
                                swal.fire({
                                    title: '";
        // line 1037
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sent Successfully!"]);
        echo "',
                                    text: '";
        // line 1038
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Your selected records have been sent to the company!"]);
        echo "',
                                    type: 'success',
                                    buttonsStyling: false,
                                    confirmButtonText: '";
        // line 1041
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["OK"]);
        echo "',
                                    confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                                });
                                datatable.reload();
                            }
                        });
                    } else if (result.dismiss === 'cancel') {
                        swal.fire({
                            title: '";
        // line 1049
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Cancelled"]);
        echo "',
                            text: '";
        // line 1050
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Your shipments not sent, and they still just on your account! :)"]);
        echo "',
                            type: 'error',
                            buttonsStyling: false,
                            confirmButtonText: '";
        // line 1053
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["OK"]);
        echo "',
                            confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                        });
                    }
                });
            }
        });

        \$('body').on('click', '#createManifest', function (e) {
            e.preventDefault();

            // fetch selected IDs
            var selected = [];
            var ids = datatable.rows('.kt-datatable__row--active').nodes().find('.kt-checkbox--single > [type=\"checkbox\"]').map(function (i, chk) {
                selected[\$(chk).val()] = \$(chk).val();
                return \$(chk).val();
            });
            if (ids.length > 0) {
                // learn more: //sweetalert2.github.io/
                swal.fire({
                    buttonsStyling: false,

                    text: \"";
        // line 1075
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Are you sure you want to create new manifest with"]);
        echo " \" + ids.length + \" ";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["selected records ?"]);
        echo "\",
                    type: \"error\",

                    confirmButtonText: \"";
        // line 1078
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Yes!"]);
        echo "\",
                    confirmButtonClass: \"btn btn-sm btn-bold btn-danger\",

                    showCancelButton: true,
                    cancelButtonText: '";
        // line 1082
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["No, cancel"]);
        echo "',
                    cancelButtonClass: \"btn btn-sm btn-bold btn-brand\"
                }).then(function (result) {
                    if (result.value) {
                        \$('#manifest_id').val(selected);
                        \$('#manifest_modal').modal('toggle');
                    } else if (result.dismiss === 'cancel') {
                        swal.fire({
                            title: '";
        // line 1090
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Cancelled"]);
        echo "',
                            text: '";
        // line 1091
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Your manifest not created! :)"]);
        echo "',
                            type: 'error',
                            buttonsStyling: false,
                            confirmButtonText: '";
        // line 1094
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["OK"]);
        echo "',
                            confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                        });
                    }
                });
            }
        });

        // \$('body').on('click', '#updateStatus', function (e) {
        //     \$('#change_status').modal('toggle');
        // });
        \$('body').on('click', '#updateStatus', function (e) {
            e.preventDefault();

            // fetch selected IDs
            var selected = [];
            var ids = datatable.rows('.kt-datatable__row--active').nodes().find('.kt-checkbox--single > [type=\"checkbox\"]').map(function (i, chk) {
                selected[\$(chk).val()] = \$(chk).val();
                return \$(chk).val();
            });
            if (ids.length > 0) {
                // learn more: //sweetalert2.github.io/
                swal.fire({
                    buttonsStyling: false,

                    html: \"";
        // line 1119
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Are you sure to update"]);
        echo " \" + ids.length + \" ";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["selected records status "]);
        echo " ?\",
                    type: \"info\",

                    confirmButtonText: \"";
        // line 1122
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Yes, update"]);
        echo "!\",
                    confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",

                    showCancelButton: true,
                    cancelButtonText: \"";
        // line 1126
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["No, cancel"]);
        echo "\",
                    cancelButtonClass: \"btn btn-sm btn-bold btn-default\"
                }).then(function (result) {
                    if (result.value) {
                        \$('#shipments_statuses_id').val(selected);
                        \$('#change_status').modal('toggle');
                    } else if (result.dismiss === 'cancel') {
                        swal.fire({
                            title: '";
        // line 1134
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Cancelled"]);
        echo "',
                            text: '";
        // line 1135
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Your manifest not created! :)"]);
        echo "',
                            type: 'error',
                            buttonsStyling: false,
                            confirmButtonText: '";
        // line 1138
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["OK"]);
        echo "',
                            confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                        });
                    }
                });
            }
        });




        // \$('body').on('click', '#assignEmployee', function (e) {
        //     \$('#assign_employee').modal('toggle');
        // });
        \$('body').on('click', '#assignEmployee', function (e) {
            e.preventDefault();

            // fetch selected IDs
            var selected = [];
            var ids = datatable.rows('.kt-datatable__row--active').nodes().find('.kt-checkbox--single > [type=\"checkbox\"]').map(function (i, chk) {
                selected[\$(chk).val()] = \$(chk).val();
                return \$(chk).val();
            });
            if (ids.length > 0) {
                // learn more: //sweetalert2.github.io/
                swal.fire({
                    buttonsStyling: false,

                    html: \"";
        // line 1166
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Are you sure to assign"]);
        echo " \" + ids.length + \" ";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["selected records to employee "]);
        echo " ?\",
                    type: \"info\",

                    confirmButtonText: \"";
        // line 1169
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Yes, assign"]);
        echo "!\",
                    confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",

                    showCancelButton: true,
                    cancelButtonText: \"";
        // line 1173
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["No, cancel"]);
        echo "\",
                    cancelButtonClass: \"btn btn-sm btn-bold btn-default\"
                }).then(function (result) {
                    if (result.value) {
                        \$('#shipments_employee_id').val(selected);
                        \$('#assign_employee').modal('toggle');
                    } else if (result.dismiss === 'cancel') {
                        swal.fire({
                            title: '";
        // line 1181
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Cancelled"]);
        echo "',
                            text: '";
        // line 1182
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Your manifest not created! :)"]);
        echo "',
                            type: 'error',
                            buttonsStyling: false,
                            confirmButtonText: '";
        // line 1185
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["OK"]);
        echo "',
                            confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                        });
                    }
                });
            }
        });


        //print shipments label
        \$('body').on('click', '#printShipments', function (e) {
            e.preventDefault();

            // fetch selected IDs
            var selected = [];
            var ids = datatable.rows('.kt-datatable__row--active').nodes().find('.kt-checkbox--single > [type=\"checkbox\"]').map(function (i, chk) {
                selected[\$(chk).val()] = \$(chk).val();
                return \$(chk).val();
            });
            if (ids.length > 0) {
                \$('#shipments_label_id').val(selected);
                \$('#shipments_length').html(ids.length);
                \$('#print_lable').modal('toggle');
            }
        });



        \$('body').on('click', '#PrintEmployeeOrders', function (e) {
            \$('#chooseEmployee').modal('toggle');
        });
        \$('#chooseEmployee').on('click', '.print', function (e) {
            e.preventDefault();
            var parent = \$('#chooseEmployee');
            var validation = 1;
            parent.find('input,select').each(function(){
                if(\$(this).is(':hidden')){
                    return;
                }
                if(\$(this).valid() == false){
                    validation = 0;
                }
            });
            if(validation){
                \$('#chooseEmployee form').submit();
                \$('#chooseEmployee').modal('toggle');
            }
        });

    }

    var updateTotal = function () {
        datatable.on('kt-datatable--on-layout-updated', function () {
            \$('#kt_subheader_total').html(datatable.getTotalRows() + ' ";
        // line 1238
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Total"]);
        echo "');
        });
    };

    var reload = function () {
        datatable.reload();
    };

    var filter = function (status) {
        datatable.search(status, 'type');
    };

    var destroy = function () {
        datatable.destroy();
        \$('#generalSearch').val('');
        \$('#filter_form select,#filter_form input').each(function(){
            \$(this).val('');
        });
        \$('#filter_form select').each(function(){
            \$(this).selectpicker(\"refresh\");
        });
    };

    return {
        // public functions
        init: function (type) {
            init(type);
            search();
            selection();
            selectedStatusUpdate();
            selectedFilter();
            selectedDelete();
            updateTotal();
        },

        reload: function(){
            reload();
        },

        destroy: function(){
            destroy();
        },

        filter: function(status){
            filter(status);
        }
    };
}();

KTUtil.ready(function () {
    \$('.kt_subheader_filter_form').on('submit', function (e) {
        e.preventDefault();
        if(\$(this).find(\"button\").hasClass('active')){
            \$('.kt_subheader_filter_form button').removeClass('active');
            \$(\"#filter_selected\").html('');
            KTAppUserListDatatable.filter(0);
        }else{
            \$('.kt_subheader_filter_form button').removeClass('active');
            \$(\"#filter_selected\").html(':&nbsp;'+\$(this).find(\"button\").text());
            \$(this).find(\"button\").addClass('active');
            var status = \$(this).find(\"input.filter\").val();
            KTAppUserListDatatable.filter(status);
        }
    });

    ";
        // line 1303
        if ((twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 1303), "type", [], "any", false, false, false, 1303)) && (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 1303) == 5))) {
            // line 1304
            echo "        KTAppUserListDatatable.init('saved');
    ";
        } elseif (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 1305
($context["this"] ?? null), "param", [], "any", false, false, false, 1305), "type", [], "any", false, false, false, 1305))) {
            // line 1306
            echo "        KTAppUserListDatatable.init('requests');
    ";
        } else {
            // line 1308
            echo "        KTAppUserListDatatable.init('";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 1308), "type", [], "any", false, false, false, 1308), "html", null, true);
            echo "');

        if('";
            // line 1310
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 1310), "type", [], "any", false, false, false, 1310), "html", null, true);
            echo "' == 'manifest'){
            \$('#addNew').addClass('kt-hidden');
            \$('#sendAll').addClass('kt-hidden');
            \$('#importNew').addClass('kt-hidden');
            \$('#createManifest').addClass('kt-hidden');
            \$('#kt_subheader_group_actions_filter_change').addClass('kt-hidden');
        }else if('";
            // line 1316
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 1316), "type", [], "any", false, false, false, 1316), "html", null, true);
            echo "' == 'saved'){
            \$('#sendAll').removeClass('kt-hidden');
        }else{
            \$('#addNew').removeClass('kt-hidden');
            \$('#importNew').removeClass('kt-hidden');
            \$('#sendAll').addClass('kt-hidden');
            \$('#createManifest').removeClass('kt-hidden');
        }
    ";
        }
        // line 1325
        echo "
    \$('body').on('click', '#car', function(){
        if(\$(this).is(\":checked\")){
            \$('.car_container').removeClass('kt-hidden');
            \$('.employee_container').addClass('kt-hidden');
        }else{
            \$('.employee_container').removeClass('kt-hidden');
            \$('.car_container').addClass('kt-hidden');
        }
    });
    \$('body').on('click', 'a.nav-link',function(){
        \$('.kt_subheader_filter_form button').removeClass('active');
        \$(\"#filter_selected\").html('');
        window.history.pushState(null, null, '";
        // line 1338
        echo url((($context["currentLang"] ?? null) . "/dashboard/shipments"));
        echo "/'+\$(this).attr('href').replace('#',''));
        if(\$(this).attr('href').replace('#','') == 'saved'){
            \$('#kt_subheader h3.kt-subheader__title').html('";
        // line 1340
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Saved Shipments"]);
        echo "');
        }else if(\$(this).attr('href').replace('#','') == 'requests'){
            \$('#kt_subheader h3.kt-subheader__title').html('";
        // line 1342
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Shipments Requests"]);
        echo "');
        }else if(\$(this).attr('href').replace('#','') == 'approved'){
            \$('#kt_subheader h3.kt-subheader__title').html('";
        // line 1344
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Approved Shipments"]);
        echo "');
        }else if(\$(this).attr('href').replace('#','') == 'assigned'){
            \$('#kt_subheader h3.kt-subheader__title').html('";
        // line 1346
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Assigned Shipments"]);
        echo "');
        }else if(\$(this).attr('href').replace('#','') == 'withdriver'){
            \$('#kt_subheader h3.kt-subheader__title').html('";
        // line 1348
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Shipments Delivered To Driver"]);
        echo "');
        }else if(\$(this).attr('href').replace('#','') == 'postponed'){
            \$('#kt_subheader h3.kt-subheader__title').html('";
        // line 1350
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Postponed Shipments"]);
        echo "');
        }else if(\$(this).attr('href').replace('#','') == 'stock'){
            \$('#kt_subheader h3.kt-subheader__title').html('";
        // line 1352
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["In Stock"]);
        echo "');
        }else if(\$(this).attr('href').replace('#','') == 'custom'){
            \$('#kt_subheader h3.kt-subheader__title').html('";
        // line 1354
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["In Custom"]);
        echo "');    
        }else if(\$(this).attr('href').replace('#','') == 'delivered'){
            \$('#kt_subheader h3.kt-subheader__title').html('";
        // line 1356
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delivered"]);
        echo "');
        }else if(\$(this).attr('href').replace('#','') == 'supplied'){
            \$('#kt_subheader h3.kt-subheader__title').html('";
        // line 1358
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Supplied"]);
        echo "');
        }else if(\$(this).attr('href').replace('#','') == 'manifest'){
            \$('#kt_subheader h3.kt-subheader__title').html('";
        // line 1360
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Manifest"]);
        echo "');
        }else if(\$(this).attr('href').replace('#','') == 'all'){
            \$('#kt_subheader h3.kt-subheader__title').html('";
        // line 1362
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["All Shipments"]);
        echo "');
        }

        var url = '";
        // line 1365
        echo url("dashboard/shipments");
        echo "/'+\$(this).attr('href').replace('#','');
        \$('.kt-menu__item.kt-menu__item--open.kt-menu__item--here.kt-menu__item--submenu .kt-menu__submenu .kt-menu__link').each(function(){
            var item = \$(this);
            var parent = item.parent().parent();
            if(item.attr('href') == url){
                parent.find('.kt-menu__item.kt-menu__item--open').removeClass('kt-menu__item--open');
                parent.find('.kt-menu__item.kt-menu__item--here').removeClass('kt-menu__item--here');
                item.parent('.kt-menu__item').addClass('kt-menu__item--open').addClass('kt-menu__item--here');
            }
        });

        KTApp.blockPage({
            overlayColor: '#000000',
            type: 'v2',
            state: 'primary',
            message: '";
        // line 1380
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Processing, please wait"]);
        echo "...'
        });
        KTAppUserListDatatable.destroy();
        KTAppUserListDatatable.init(\$(this).attr('href').replace('#',''));
        KTApp.unblockPage();

        if(\$(this).attr('href').replace('#','') == 'manifest'){
            \$('#addNew').addClass('kt-hidden');
            \$('#importNew').addClass('kt-hidden');
                \$('#sendAll').addClass('kt-hidden');
        }else if(\$(this).attr('href').replace('#','') == 'saved'){
            \$('#sendAll').removeClass('kt-hidden');
        }else{
            \$('#sendAll').addClass('kt-hidden');
            \$('#addNew').removeClass('kt-hidden');
            \$('#importNew').removeClass('kt-hidden');
        }
    });


    \$('#manifest_modal').on('click', '.btn-primary', function(e){
        var parent = \$('#manifest_modal');
        var validation = 1;
        if(validation){
            \$('#manifest_modal').modal('toggle');
            KTApp.blockPage({
                overlayColor: '#000000',
                type: 'v2',
                state: 'success',
                message: '";
        // line 1409
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please wait"]);
        echo "...'
            });
            location.reload();
        }
    });
});
</script>
";
        // line 328
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "/Users/bola/Downloads/e-cargo/themes/spotlayer/pages/dashboard/shipments.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2446 => 328,  2436 => 1409,  2404 => 1380,  2386 => 1365,  2380 => 1362,  2375 => 1360,  2370 => 1358,  2365 => 1356,  2360 => 1354,  2355 => 1352,  2350 => 1350,  2345 => 1348,  2340 => 1346,  2335 => 1344,  2330 => 1342,  2325 => 1340,  2320 => 1338,  2305 => 1325,  2293 => 1316,  2284 => 1310,  2278 => 1308,  2274 => 1306,  2272 => 1305,  2269 => 1304,  2267 => 1303,  2199 => 1238,  2143 => 1185,  2137 => 1182,  2133 => 1181,  2122 => 1173,  2115 => 1169,  2107 => 1166,  2076 => 1138,  2070 => 1135,  2066 => 1134,  2055 => 1126,  2048 => 1122,  2040 => 1119,  2012 => 1094,  2006 => 1091,  2002 => 1090,  1991 => 1082,  1984 => 1078,  1976 => 1075,  1951 => 1053,  1945 => 1050,  1941 => 1049,  1930 => 1041,  1924 => 1038,  1920 => 1037,  1909 => 1029,  1902 => 1025,  1894 => 1022,  1869 => 1000,  1863 => 997,  1859 => 996,  1846 => 986,  1840 => 983,  1836 => 982,  1824 => 973,  1817 => 969,  1811 => 966,  1793 => 951,  1787 => 948,  1783 => 947,  1770 => 937,  1764 => 934,  1760 => 933,  1749 => 925,  1742 => 921,  1734 => 918,  1703 => 890,  1697 => 887,  1693 => 886,  1683 => 879,  1677 => 876,  1673 => 875,  1665 => 870,  1658 => 866,  1650 => 863,  1574 => 790,  1532 => 765,  1526 => 762,  1522 => 761,  1518 => 760,  1514 => 759,  1510 => 758,  1506 => 757,  1502 => 756,  1493 => 750,  1489 => 749,  1476 => 738,  1470 => 735,  1465 => 734,  1462 => 733,  1456 => 730,  1453 => 729,  1450 => 728,  1442 => 725,  1439 => 724,  1437 => 723,  1433 => 721,  1425 => 718,  1422 => 717,  1419 => 716,  1411 => 713,  1408 => 712,  1406 => 711,  1399 => 709,  1396 => 708,  1388 => 705,  1383 => 704,  1380 => 703,  1372 => 700,  1369 => 699,  1367 => 698,  1361 => 697,  1352 => 691,  1342 => 684,  1330 => 675,  1324 => 672,  1318 => 669,  1312 => 666,  1306 => 663,  1299 => 659,  1291 => 654,  1279 => 645,  1265 => 634,  1259 => 631,  1250 => 625,  1237 => 622,  1229 => 617,  1223 => 614,  1214 => 608,  1201 => 605,  1190 => 597,  1180 => 592,  1173 => 588,  1150 => 567,  1144 => 564,  1139 => 563,  1136 => 562,  1130 => 559,  1127 => 558,  1124 => 557,  1116 => 554,  1113 => 553,  1111 => 552,  1108 => 551,  1100 => 548,  1097 => 547,  1095 => 546,  1090 => 543,  1082 => 540,  1079 => 539,  1077 => 538,  1070 => 536,  1067 => 535,  1059 => 532,  1054 => 531,  1051 => 530,  1043 => 527,  1040 => 526,  1038 => 525,  1032 => 524,  1023 => 518,  1013 => 511,  1001 => 502,  995 => 499,  989 => 496,  983 => 493,  977 => 490,  970 => 486,  962 => 481,  950 => 472,  936 => 461,  930 => 458,  921 => 452,  908 => 449,  900 => 444,  894 => 441,  885 => 435,  872 => 432,  861 => 424,  851 => 419,  844 => 415,  821 => 395,  811 => 388,  799 => 379,  793 => 376,  781 => 367,  769 => 358,  758 => 350,  735 => 329,  733 => 328,  725 => 323,  720 => 321,  716 => 320,  711 => 317,  705 => 313,  703 => 312,  696 => 308,  688 => 303,  674 => 292,  669 => 290,  665 => 289,  660 => 286,  655 => 283,  644 => 281,  640 => 280,  634 => 277,  631 => 276,  629 => 275,  622 => 271,  614 => 266,  601 => 256,  596 => 254,  592 => 253,  587 => 250,  582 => 247,  571 => 245,  567 => 244,  561 => 241,  558 => 240,  556 => 239,  549 => 235,  541 => 230,  528 => 220,  523 => 218,  519 => 217,  514 => 214,  509 => 211,  498 => 209,  494 => 208,  488 => 205,  485 => 204,  483 => 203,  472 => 195,  467 => 193,  460 => 189,  452 => 184,  441 => 176,  436 => 174,  432 => 173,  425 => 168,  414 => 166,  410 => 165,  404 => 162,  399 => 159,  388 => 157,  384 => 156,  378 => 153,  366 => 144,  354 => 135,  349 => 133,  341 => 128,  333 => 123,  316 => 112,  306 => 108,  304 => 107,  296 => 104,  288 => 101,  280 => 98,  272 => 95,  264 => 92,  256 => 89,  248 => 86,  240 => 83,  231 => 80,  221 => 76,  219 => 75,  208 => 67,  202 => 66,  199 => 65,  192 => 61,  186 => 60,  183 => 59,  181 => 58,  175 => 55,  169 => 54,  162 => 50,  156 => 49,  149 => 45,  143 => 44,  136 => 40,  130 => 39,  123 => 35,  117 => 34,  110 => 30,  104 => 29,  97 => 25,  91 => 24,  84 => 20,  78 => 19,  71 => 15,  65 => 14,  62 => 13,  55 => 9,  49 => 8,  46 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!--begin::Portlet-->
<div class=\"kt-portlet kt-portlet--tabs\">
    <div class=\"kt-portlet__head\">
        <div class=\"kt-portlet__head-toolbar\">
            <ul class=\"nav nav-tabs nav-tabs-line nav-tabs-line-brand nav-tabs-line-2x nav-tabs-line-right nav-tabs-bold\" role=\"tablist\">
                {% if user.role_id == 5 %}
                <li class=\"nav-item\">
                    <a class=\"nav-link {% if (this.param.type is empty and user.role_id == 5) or this.param.type == 'saved' %}active{% endif %}\" data-toggle=\"tab\" href=\"#saved\" role=\"tab\">
                        <i class=\"flaticon-folder-2\" aria-hidden=\"true\"></i>{{'Saved'|__}}
                    </a>
                </li>
                {% endif %}
                <li class=\"nav-item\">
                    <a class=\"nav-link {% if (this.param.type is empty and user.role_id != 5) or this.param.type == 'requests' %}active{% endif %}\" data-toggle=\"tab\" href=\"#requests\" role=\"tab\">
                        <i class=\"flaticon-alert\" aria-hidden=\"true\"></i>{{'New Requests'|__}}
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link {% if this.param.type == 'approved' %}active{% endif %}\" data-toggle=\"tab\" href=\"#approved\" role=\"tab\">
                        <i class=\"flaticon-like\" aria-hidden=\"true\"></i>{{\"Approved\"|__}}
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link {% if this.param.type == 'assigned' %}active{% endif %}\" data-toggle=\"tab\" href=\"#assigned\" role=\"tab\">
                        <i class=\"flaticon-network\" aria-hidden=\"true\"></i>{{'Assigned Shipments'|__}}
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link {% if this.param.type == 'withdriver' %}active{% endif %}\" data-toggle=\"tab\" href=\"#withdriver\" role=\"tab\">
                        <i class=\"flaticon-suitcase\" aria-hidden=\"true\"></i>{{'Delivered To Driver'|__}}
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link {% if this.param.type == 'stock' %}active{% endif %}\" data-toggle=\"tab\" href=\"#stock\" role=\"tab\">
                        <i class=\"flaticon-home-2\" aria-hidden=\"true\"></i>{{'In Stock'|__}}
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link {% if this.param.type == 'custom' %}active{% endif %}\" data-toggle=\"tab\" href=\"#custom\" role=\"tab\">
                        <i class=\"flaticon-home-2\" aria-hidden=\"true\"></i>{{'In Custom'|__}}
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link {% if this.param.type == 'postponed' %}active{% endif %}\" data-toggle=\"tab\" href=\"#postponed\" role=\"tab\">
                        <i class=\"flaticon-stopwatch\" aria-hidden=\"true\"></i>{{'Postponed'|__}}
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link {% if this.param.type == 'delivered' %}active{% endif %}\" data-toggle=\"tab\" href=\"#delivered\" role=\"tab\">
                        <i class=\"flaticon-open-box\" aria-hidden=\"true\"></i>{{'Delivered'|__}}
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link {% if this.param.type == 'supplied' %}active{% endif %}\" data-toggle=\"tab\" href=\"#supplied\" role=\"tab\">
                        <i class=\"flaticon-piggy-bank\" aria-hidden=\"true\"></i>{{'Supplied'|__}}
                    </a>
                </li>
                {% if user.role_id != 5 %}
                    <li class=\"nav-item\">
                        <a class=\"nav-link {% if this.param.type == 'manifest' %}active{% endif %}\" data-toggle=\"tab\" href=\"#manifest\" role=\"tab\">
                            <i class=\"flaticon-truck\" aria-hidden=\"true\"></i>{{'Manifest'|__}}
                        </a>
                    </li>
                {% endif %}
                <li class=\"nav-item\">
                    <a class=\"nav-link {% if this.param.type == 'all' %}active{% endif %}\" data-toggle=\"tab\" href=\"#all\" role=\"tab\">
                        <i class=\"flaticon-shopping-basket\" aria-hidden=\"true\"></i>{{'All Shipments'|__}}
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class=\"kt-portlet__body\">
        <div class=\"tab-content\">
            {% if user.role_id == 5 %}
                <div class=\"tab-pane  {% if (this.param.type is empty and user.role_id == 5) or this.param.type == 'saved' %}active{% endif %}\" id=\"saved\" role=\"tabpanel\">
                    <div class=\"kt-datatable-saved\"></div>
                </div>
            {% endif %}
            <div class=\"tab-pane  {% if this.param.type is empty or this.param.type == 'requests' %}active{% endif %}\" id=\"requests\" role=\"tabpanel\">
                <div class=\"kt-datatable-requests\"></div>
            </div>
            <div class=\"tab-pane {% if this.param.type == 'approved' %}active{% endif %}\" id=\"approved\" role=\"tabpanel\">
                <div class=\"kt-datatable-approved\"></div>
            </div>
            <div class=\"tab-pane {% if this.param.type == 'assigned' %}active{% endif %}\" id=\"assigned\" role=\"tabpanel\">
                <div class=\"kt-datatable-assigned\"></div>
            </div>
            <div class=\"tab-pane {% if this.param.type == 'withdriver' %}active{% endif %}\" id=\"withdriver\" role=\"tabpanel\">
                <div class=\"kt-datatable-withdriver\"></div>
            </div>
            <div class=\"tab-pane {% if this.param.type == 'stock' %}active{% endif %}\" id=\"stock\" role=\"tabpanel\">
                <div class=\"kt-datatable-stock\"></div>
            </div>
            <div class=\"tab-pane {% if this.param.type == 'custom' %}active{% endif %}\" id=\"custom\" role=\"tabpanel\">
                <div class=\"kt-datatable-custom\"></div>
            </div>
            <div class=\"tab-pane {% if this.param.type == 'postponed' %}active{% endif %}\" id=\"postponed\" role=\"tabpanel\">
                <div class=\"kt-datatable-postponed\"></div>
            </div>
            <div class=\"tab-pane {% if this.param.type == 'supplied' %}active{% endif %}\" id=\"supplied\" role=\"tabpanel\">
                <div class=\"kt-datatable-supplied\"></div>
            </div>
            <div class=\"tab-pane {% if this.param.type == 'delivered' %}active{% endif %}\" id=\"delivered\" role=\"tabpanel\">
                <div class=\"kt-datatable-delivered\"></div>
            </div>
            {% if user.role_id != 5 %}
                <div class=\"tab-pane {% if this.param.type == 'manifest' %}active{% endif %}\" id=\"manifest\" role=\"tabpanel\">
                    <div class=\"kt-datatable-manifest\"></div>
                </div>
            {% endif %}
            <div class=\"tab-pane {% if this.param.type == 'all' %}active{% endif %}\" id=\"all\" role=\"tabpanel\">
                <div class=\"kt-datatable-all\"></div>
            </div>
        </div>
    </div>
</div>
<!--end::Portlet-->
<div class=\"modal fade\" id=\"manifest_modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" >{{'Manifest information'|__}}</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                </button>
            </div>

            {{ form_ajax('onSavemanifest', { flash: true, novalidate: true }) }}
                <div class=\"modal-body\">
                    <div class=\"row\">
                        <input type=\"hidden\" id=\"manifest_id\" class=\"form-control\" name=\"ids\" />
                        <div class=\"form-group col-lg-12\">
                            <label>{{'Date'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                            <div class=\"input-group date\">
                                <input type=\"text\" class=\"form-control date\" readonly=\"\" name=\"ship_date\" value=\"{{now|date_modify(\"+1 day\")|date(settings.dateformat)}}\" required>
                                <div class=\"input-group-append\">
                                    <span class=\"input-group-text\">
                                        <i class=\"la la-calendar\"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class=\"form-group col-lg-12\">
                            <label>{{'Assign to specifc car?'|__}}</label>
                            <div class=\"kt-checkbox-single\">
                                <label class=\"kt-checkbox\">
                                    <input type=\"checkbox\" id=\"car\" class=\"form-control\"  value=\"1\">
                                    <span></span>
                                </label>
                            </div>
                        </div>
                        <div class=\"form-group col-lg-12 employee_container\">
                            <label>{{'Employee'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                            <select class=\"form-control\" id=\"employee_id\" name=\"employee_id\" data-live-search=\"true\" required>
                                <option data-hidden=\"true\"></option>
                                {% for employee in employees %}
                                    <option value=\"{{employee.id}}\">{{employee.name}}</option>
                                {% endfor %}
                            </select>
                        </div>
                        <div class=\"form-group col-lg-12 kt-hidden car_container\">
                            <label>{{'Car'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                            <select class=\"form-control\" id=\"car_id\" name=\"car_id\" data-live-search=\"true\" required>
                                <option data-hidden=\"true\"></option>
                                {% for car in cars %}
                                    <option value=\"{{car.id}}\">{{car.name}}</option>
                                {% endfor %}
                            </select>
                        </div>
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">{{'Close'|__}}</button>
                    <button type=\"submit\" class=\"btn btn-primary\">{{'Assign'|__}}</button>
                </div>
            {{ form_close() }}
        </div>
    </div>
</div>
<div class=\"modal fade\" id=\"chooseEmployee\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" >{{'Print Employee Orders'|__}}</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                </button>
            </div>

            {{ form_ajax('onPrint', { success: 'created successfully!', flash: true, class: 'kt_form', novalidate: true }) }}
                <div class=\"modal-body\">
                    <div class=\"row\">
                        <div class=\"form-group col-lg-12\">
                            <label>{{'Date'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                            <div class=\"input-group date\">
                                <input type=\"text\" class=\"form-control date\" readonly=\"\" name=\"date\" value=\"{{now|date(settings.dateformat)}}\" required>
                                <div class=\"input-group-append\">
                                    <span class=\"input-group-text\">
                                        <i class=\"la la-calendar\"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        {% if user.role_id != 4 %}
                            <div class=\"form-group col-lg-12\">
                                <label>{{'Employee'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                <select class=\"form-control\"name=\"employee_id\" data-live-search=\"true\" required>
                                    <option data-hidden=\"true\"></option>
                                    {% for employee in employees %}
                                        <option value=\"{{employee.id}}\">{{employee.name}}</option>
                                    {% endfor %}
                                </select>
                            </div>
                        {% endif %}
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">{{'Close'|__}}</button>
                    <button type=\"button\" class=\"btn btn-primary print\">{{'Print'|__}}</button>
                </div>
            {{ form_close() }}
        </div>
    </div>
</div>

<!-- statuses modal -->
<div class=\"modal fade\" id=\"change_status\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" >{{'Edit Shipments Statuses'|__}}</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                </button>
            </div>

            {{ form_ajax('onEditStatus', { success: 'created successfully!', flash: true, class: 'kt_form', novalidate: true }) }}
                <div class=\"modal-body\">
                    <div class=\"row\">
                        <input type=\"hidden\" id=\"shipments_statuses_id\" class=\"form-control\" name=\"ids\" />
                        {% if user.role_id != 4 %}
                            <div class=\"form-group col-lg-12\">
                                <label>{{'Status'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                <select class=\"form-control\"name=\"status_id\" data-live-search=\"true\" required>
                                    <option data-hidden=\"true\"></option>
                                    {% for status in shipmentStatuses %}
                                        <option value=\"{{status.id}}\">{{status.name}}</option>
                                    {% endfor %}
                                </select>
                            </div>
                        {% endif %}
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">{{'Close'|__}}</button>
                    <button type=\"submit\" class=\"btn btn-primary print\">{{'Update'|__}}</button>
                </div>
            {{ form_close() }}
        </div>
    </div>
</div>

<!-- assign employee -->
<div class=\"modal fade\" id=\"assign_employee\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" >{{'Assign Shipments to '|__}}</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                </button>
            </div>

            {{ form_ajax('onAssignEmployee', { success: 'created successfully!', flash: true, class: 'kt_form', novalidate: true }) }}
                <div class=\"modal-body\">
                    <div class=\"row\">
                        <input type=\"hidden\" id=\"shipments_employee_id\" class=\"form-control\" name=\"ids\" />
                        {% if user.role_id != 4 %}
                            <div class=\"form-group col-lg-12\">
                                <label>{{'Employee'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                <select class=\"form-control\" name=\"employee_id\" data-live-search=\"true\" required>
                                    <option data-hidden=\"true\"></option>
                                    {% for employee in employees %}
                                        <option value=\"{{employee.id}}\">{{employee.name}}</option>
                                    {% endfor %}
                                </select>
                            </div>
                        {% endif %}
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">{{'Close'|__}}</button>
                    <button type=\"submit\" class=\"btn btn-primary print\">{{'Assign'|__}}</button>
                </div>
            {{ form_close() }}
        </div>
    </div>
</div>


<!-- print shipments label -->
<div class=\"modal fade\" id=\"print_lable\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" >{{'Print Shipments Label '|__}}</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                </button>
            </div>

            {{ form_ajax('onPrintShipments', { success: 'created successfully!', flash: true, class: 'kt_form', novalidate: true }) }}
                <div class=\"modal-body\">
                    <div class=\"row\">
                        <input type=\"hidden\" id=\"shipments_label_id\" class=\"form-control\" name=\"ids\" />
                        {% if user.role_id != 4 %}
                            <div class=\"form-group col-lg-12\">
                                <p>Are you sure to print <span id=\"shipments_length\"></span>  selected records ?</p>
                            </div>
                        {% endif %}
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">{{'Close'|__}}</button>
                    <button type=\"submit\" class=\"btn btn-primary print\">{{'Print'|__}}</button>
                </div>
            {{ form_close() }}
        </div>
    </div>
</div>

{% put scripts %}
<script type=\"text/javascript\">
\"use strict\";
var KTAppUserListDatatable = function () {
    // variables
    var datatable;

    // init
    var init = function (type) {
        // init the datatables. Learn more: //keenthemes.com/metronic/?page=docs&section=datatable
        if(type == 'manifest'){
            var columns = [
                {
                    field: 'id',
                    title: '#',
                    autoHide: true,
                    sortable: false,
                    width: 20,
                    textAlign: 'center',
                },
                {
                    field: \"created_at\",
                    title: \"{{'Created On'|__}}\",
                    autoHide: false,
                    sortable: false,
                    width: 'auto',
    \t\t\t\ttemplate: function(data, i) {
    \t\t\t\t\tvar output = '\\
                            <div class=\"kt-user-card-v2 kt-user-card-v2--uncircle\">\\
                                <div class=\"kt-user-card-v2__details\">\\
                                    <a href=\"{{url('dashboard/shipments/manifest')}}/'+data.id+'/view\" class=\"kt-user-card-v2__name\">' + data.created_at_date + '</a>\\
                                    <span class=\"kt-user-card-v2__email\">' + data.created_at_time + '</span>\\
                                </div>\\
                            </div>';
    \t\t\t\t\treturn output;
    \t\t\t\t}
                },
                {
                    field: \"details\",
                    title: \"{{'Responsiable'|__}}\",
                    autoHide: true,
                    sortable: false,
                    width: 'auto',
    \t\t\t\ttemplate: function(data, i) {
    \t\t\t\t\tvar output = '\\
                            <div class=\"kt-user-card-v2 kt-user-card-v2--uncircle\">\\
                                <div class=\"kt-user-card-v2__details\">';
                                if(data.car != '-'){
                                    output += '<a href=\"{{url('dashboard/shipments/manifest')}}/'+data.id+'/view\" class=\"kt-user-card-v2__name\">' + data.car + '</a>\\
                                                <span class=\"kt-user-card-v2__email\">' + data.driver + '</span>';
                                }else{
                                    output += '<a href=\"{{url('dashboard/shipments/manifest')}}/'+data.id+'/view\" class=\"kt-user-card-v2__name\">' + data.employee + '</a>';
                                }
                                output += '</div>\\
                            </div>';
    \t\t\t\t\treturn output;
    \t\t\t\t}
                },
                {
                    field: \"user\",
                    title: \"{{'By'|__}}\",
                    autoHide: true,
                    sortable: false,
                    width: 'auto',
                },
                {
                    field: \"orders\",
                    title: \"{{'No. Of Orders'|__}}\",
                    autoHide: false,
                    sortable: false,
                    width: 'auto',
                }
            ];
        }else if(type == 'requests' || type == 'delivered' || type == 'assigned' || type == 'withdriver' || type == 'postponed' || type == 'supplied' || type == 'all'){
            var columns = [
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
                    title: \"{{'Tracking'|__}}\",
                    sortable: true,
                    width: 100,
                    template: function(row) {
                        return '<a href=\"{{url('dashboard/shipments')}}/'+row.id+'/view\">{{settings.tracking.prefix_order}}'+row.shipping_number+'</a>';
                    }
                },
                {
                    field: \"details\",
                    title: \"{{'Shipment Details'|__}}\",
                    sortable: false,
                    width: 'auto',
                    template: function(data, i) {
                        if(data.sender && data.sender.name){
                            var output  = '\\
                                <div class=\"kt-user-card-v2 kt-user-card-v2--uncircle\">\\
                                    <div class=\"kt-user-card-v2__details\">\\
                                        <a href=\"{% if user.hasUserPermission('client', 'r') %}{{url('dashboard/clients')}}/'+data.sender.id+'/view{% else %}javascript:;{% endif %}\" class=\"kt-user-card-v2__name\"><b class=\"kt-font-boldest\">{{\"Sender\"|__}}:</b> ' + data.sender.name + '</a>';
                          if(+ data.shipping_from_area && + data.shipping_from_area != '-'){
                              output      += '\\
                                        <span class=\"kt-user-card-v2__email\"><b class=\"kt-font-boldest\">{{\"From\"|__}}:</b> ' + data.shipping_from_area + '</span>';
                                    }
                        }else{
                            var output  = '\\
                                    <div class=\"kt-user-card-v2 kt-user-card-v2--uncircle\">\\
                                        <div class=\"kt-user-card-v2__details\">\\
                                            <a href=\"javascript:;\" class=\"kt-user-card-v2__name\"><b class=\"kt-font-boldest\">{{\"Sender\"|__}}:</b> ' + data.sender_name + '</a>';
                          if(+ data.shipping_from_area && + data.shipping_from_area != '-'){
                              output      += '\\
                                              <span class=\"kt-user-card-v2__email\"><b class=\"kt-font-boldest\">{{\"From\"|__}}:</b> ' + data.shipping_from_area + '</span>';
                          }
                        }
                        if(data.receiver && data.receiver.name && data.receiver.name != '-'){
                            output      += '\\
                                        <a href=\"{% if user.hasUserPermission('client', 'r') %}{{url('dashboard/clients')}}/'+data.receiver.id+'/view{% else %}javascript:;{% endif %}\" class=\"kt-margin-t-5 kt-user-card-v2__name\"><b>{{\"Receiver\"|__}}:</b> ' + data.receiver.name + '</a>';
                          if(data.shipping_to_area && + data.shipping_to_area != '-'){
                              output      += '\\
                                        <span class=\"kt-user-card-v2__email\"><b class=\"kt-font-boldest\">{{\"To\"|__}}:</b> ' + data.shipping_to_area + '</span>';
                          }
                        }else if(data.receiver_name && data.receiver_name != '-'){
                            output  += '\\
                                    <div class=\"kt-user-card-v2 kt-user-card-v2--uncircle\">\\
                                        <div class=\"kt-user-card-v2__details\">\\
                                            <a href=\"javascript:;\" class=\"kt-user-card-v2__name\"><b class=\"kt-font-boldest\">{{\"Receiver\"|__}}:</b> ' + data.receiver_name + '</a>';
                            if(data.shipping_to_area && + data.shipping_to_area != '-'){
                                output      += '\\
                                                <span class=\"kt-user-card-v2__email\"><b class=\"kt-font-boldest\">{{\"From\"|__}}:</b> ' + data.shipping_to_area + '</span>';
                            }
                        }
                        output      += '\\
                                </div>\\
                            </div>';
                        return output;
                    }
                },
                {
                    field: \"office\",
                    title: \"{{'Branch'|__}}\",
                    sortable: false,
                    width: 100,
                    template: function(data, i) {
                        return '<a href=\"javascript:;\">'+data.office+'</a>';
                    }
                },
                {
                    field: \"status\",
                    title: \"{{'Status'|__}}\",
                    sortable: false,
                    width: 'auto',
                    template: function(row) {
                        if(row.requested == 100){
                            var output = '<span class=\"btn btn-bold btn-sm btn-label-primary\">{{\"Saved\"|__}}</span>';
                        }else{
                            var output = '<span class=\"btn btn-bold btn-sm btn-label-' + row.status.color + '\">' + row.status.name + '</span>';
                            if(row.delayed == 1){
                                output  += '&nbsp;<span class=\"btn btn-bold btn-sm btn-label-danger\">{{\"Delayed\"|__}}</span>';
                            }
                            if(row.requested == 10 || row.requested == 11){
                                output  += '&nbsp;<span class=\"btn btn-bold btn-sm btn-label-warning\">{{\"Returning Discards\"|__}}</span>';
                            }
                            if(row.requested == 12 && row.status.equal != 12){
                                output  += '&nbsp;<span class=\"btn btn-bold btn-sm btn-label-success\">{{\"Supplied\"|__}}</span>';
                            }
                            if(row.requested == 7 || row.requested == 10 || row.requested == 16){
                                output  += '&nbsp;<span class=\"btn btn-bold btn-sm      btn-label-info\">{{\"Stock\"|__}}</span>';
                            }
                            if(row.requested == 11 || row.requested == 15 || row.requested == 17 || row.requested == 18){
                                output  += '&nbsp;<span class=\"btn btn-bold btn-sm btn-label-success\">{{\"Custom\"|__}}</span>';
                            }
                        }

                        return output;
                    }
                },
                {
                    field: \"created_at_date\",
                    title: \"{{'Date'|__}}\",
                    sortable: false,
                    width: 100,
                },
                {
                    field: \"Actions\",
                    width: 100,
                    title: \"{{'Actions'|__}}\",
                    sortable: false,
                    overflow: 'visible',
                    template: function (data) {
                        var output = '' +
                        '<div class=\"btn-group btn-group\" role=\"group\" aria-label=\"...\">'+
                            '<a href=\"{{url(\"dashboard/shipments\")}}/'+data.id+'/view\" class=\"btn btn-brand btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"{{\"View Shipment\"|__}}\"><i class=\"la la-eye\"></i></button>';
                            {% if user.hasUserPermission('order', 'u') and user.role_id != 5 %}
                                if(data.requested   ==  0 || data.requested == 1 || data.requested == 100){
                                    output += '<a href=\"{{url(\"dashboard/shipments\")}}/'+data.id+'/edit\" class=\"btn btn-brand btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"{{\"Edit Shipment\"|__}}\"><i class=\"la la-edit\"></i></button>';
                                }
                            {% endif %}
                            {% if user.role_id == 5 %}
                                if((data.requested   ==  0 || data.requested == 100) && data.sender_id == {{user.id}}){
                                    output += '<a href=\"{{url(\"dashboard/shipments\")}}/'+data.id+'/edit\" class=\"btn btn-brand btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"{{\"Edit Shipment\"|__}}\"><i class=\"la la-edit\"></i></button>';
                                }
                            {% endif %}
                                if((data.requested   !=  0 && data.requested   !=  1 && data.requested != 100)){
                                    output += '<a href=\"{{url(\"dashboard/shipments\")}}/'+data.id+'/print/shipment\" target=\"_blank\" class=\"btn btn-info btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"{{\"Print Shipment\"|__}}\"><i class=\"la la-print\"></i></button>';
                                }
                            {% if user.hasUserPermission('order', 'u') %}
                                if((data.requested   ==  100 || data.requested   ==  0 || data.requested == 1)){
                                    output += '<a href=\"{{url(\"dashboard/shipments\")}}/'+data.id+'/print/label\" class=\"btn btn-info btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"{{\"Print Label\"|__}}\" target=\"_blank\" ><i class=\"la la-qrcode\"></i></button>';
                                }
                            {% endif %}
                            //0 = Pending | 1 = Approved | 2 = Refused | 3 = Delivered to driver | 4 = Delivered | 5 = Return request | 6 = Delivery of discards to the driver | 7 = Supply in stock | 8 = Returned | 9 = received


                            {% if user.hasUserPermission('order', 'u') and user.role_id != 5 %}
                                if((data.requested   ==  1 || data.requested   ==  3 || data.requested   ==  5 || data.requested == 6 || data.requested == 7 || data.requested == 9)){
                                    output += '<a href=\"{{url(\"dashboard/shipments\")}}/'+data.id+'/update\" class=\"btn btn-info btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"{{\"Update Status\"|__}}\"><i class=\"la la-street-view\"></i></button>';
                                }
                            {% endif %}

                            {% if user.hasUserPermission('order', 'u') and user.role_id != 5 %}
                                if((data.requested   ==  9 || data.requested   ==  3)){
                                    output += '<a href=\"{{url(\"dashboard/shipments\")}}/'+data.id+'/deliver\" class=\"btn btn-success btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"{{\"Mark as delivered\"|__}}\"><i class=\"la la-smile-o\"></i></button>';
                                }
                            {% endif %}
                            {% if user.hasUserPermission('order', 'd') %}
                                if(data.requested   ==  0 || data.requested == 100 || data.requested == 1){
                                    output += '<a href=\"javascript:void(0);\" class=\"btn btn-danger btn-sm delete_record kt-font-light btn-icon\" rel=\"'+data.id+'\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"{{\"Delete Shipment\"|__}}\"><i class=\"la la-remove\"></i></a>';
                                }
                            {% endif %}
                            {% if user.role_id == 5 %}
                                if((data.requested   ==  0 || data.requested == 100) && data.sender_id == {{user.id}}){
                                    output += '<a href=\"javascript:void(0);\" class=\"btn btn-danger btn-sm delete_record kt-font-light btn-icon\" rel=\"'+data.id+'\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"{{\"Delete Shipment\"|__}}\"><i class=\"la la-remove\"></i></a>';
                                }
                            {% endif %}
                        '</div>';

                        return output;
                    },
                }
            ]
        }else{
            var columns = [
                {
                    field: 'id',
                    title: '#',
                    sortable: false,
                    autoHide: true,
                    width: 20,
                    selector: {
                        class: 'kt-checkbox--solid'
                    },
                    textAlign: 'center',
                },
                {
                    field: \"number\",
                    title: \"{{'Tracking'|__}}\",
                    sortable: true,
                    width: 100,
                    template: function(row) {
                        return '<a href=\"{{url('dashboard/shipments')}}/'+row.id+'/view\">{{settings.tracking.prefix_order}}'+row.shipping_number+'</a>';
                    }
                },
                {
                    field: \"details\",
                    title: \"{{'Shipment Details'|__}}\",
                    sortable: false,
                    width: 'auto',
                    template: function(data, i) {
                        if(data.sender && data.sender.name){
                            var output  = '\\
                                <div class=\"kt-user-card-v2 kt-user-card-v2--uncircle\">\\
                                    <div class=\"kt-user-card-v2__details\">\\
                                        <a href=\"{% if user.hasUserPermission('client', 'r') %}{{url('dashboard/clients')}}/'+data.sender.id+'/view{% else %}javascript:;{% endif %}\" class=\"kt-user-card-v2__name\"><b class=\"kt-font-boldest\">{{\"Sender\"|__}}:</b> ' + data.sender.name + '</a>';
                          if(+ data.shipping_from_area && + data.shipping_from_area != '-'){
                              output      += '\\
                                        <span class=\"kt-user-card-v2__email\"><b class=\"kt-font-boldest\">{{\"From\"|__}}:</b> ' + data.shipping_from_area + '</span>';
                                    }
                        }else{
                            var output  = '\\
                                    <div class=\"kt-user-card-v2 kt-user-card-v2--uncircle\">\\
                                        <div class=\"kt-user-card-v2__details\">\\
                                            <a href=\"javascript:;\" class=\"kt-user-card-v2__name\"><b class=\"kt-font-boldest\">{{\"Sender\"|__}}:</b> ' + data.sender_name + '</a>';
                          if(+ data.shipping_from_area && + data.shipping_from_area != '-'){
                              output      += '\\
                                              <span class=\"kt-user-card-v2__email\"><b class=\"kt-font-boldest\">{{\"From\"|__}}:</b> ' + data.shipping_from_area + '</span>';
                          }
                        }
                        if(data.receiver && data.receiver.name && data.receiver.name != '-'){
                            output      += '\\
                                        <a href=\"{% if user.hasUserPermission('client', 'r') %}{{url('dashboard/clients')}}/'+data.receiver.id+'/view{% else %}javascript:;{% endif %}\" class=\"kt-margin-t-5 kt-user-card-v2__name\"><b>{{\"Receiver\"|__}}:</b> ' + data.receiver.name + '</a>';
                          if(data.shipping_to_area && + data.shipping_to_area != '-'){
                              output      += '\\
                                        <span class=\"kt-user-card-v2__email\"><b class=\"kt-font-boldest\">{{\"To\"|__}}:</b> ' + data.shipping_to_area + '</span>';
                          }
                        }else if(data.receiver_name && data.receiver_name != '-'){
                            output  += '\\
                                    <div class=\"kt-user-card-v2 kt-user-card-v2--uncircle\">\\
                                        <div class=\"kt-user-card-v2__details\">\\
                                            <a href=\"javascript:;\" class=\"kt-user-card-v2__name\"><b class=\"kt-font-boldest\">{{\"Receiver\"|__}}:</b> ' + data.receiver_name + '</a>';
                            if(data.shipping_to_area && + data.shipping_to_area != '-'){
                                output      += '\\
                                                <span class=\"kt-user-card-v2__email\"><b class=\"kt-font-boldest\">{{\"From\"|__}}:</b> ' + data.shipping_to_area + '</span>';
                            }
                        }
                        output      += '\\
                                </div>\\
                            </div>';
                        return output;
                    }
                },
                {
                    field: \"office\",
                    title: \"{{'Branch'|__}}\",
                    sortable: false,
                    width: 100,
                    template: function(data, i) {
                        return '<a href=\"javascript:;\">'+data.office+'</a>';
                    }
                },
                {
                    field: \"status\",
                    title: \"{{'Status'|__}}\",
                    sortable: false,
                    width: 'auto',
                    template: function(row) {
                        if(row.requested == 100){
                            var output = '<span class=\"btn btn-bold btn-sm btn-label-primary\">{{\"Saved\"|__}}</span>';
                        }else{
                            var output = '<span class=\"btn btn-bold btn-sm btn-label-' + row.status.color + '\">' + row.status.name + '</span>';
                            if(row.delayed == 1){
                                output  += '&nbsp;<span class=\"btn btn-bold btn-sm btn-label-danger\">{{\"Delayed\"|__}}</span>';
                            }
                            if(row.requested == 10 || row.requested == 11){
                                output  += '&nbsp;<span class=\"btn btn-bold btn-sm btn-label-warning\">{{\"Returning Discards\"|__}}</span>';
                            }
                            if(row.requested == 12 && row.status.equal != 12){
                                output  += '&nbsp;<span class=\"btn btn-bold btn-sm btn-label-success\">{{\"Supplied\"|__}}</span>';
                            }
                            if(row.requested == 7 || row.requested == 10 || row.requested == 16){
                                output  += '&nbsp;<span class=\"btn btn-bold btn-sm      btn-label-info\">{{\"Stock\"|__}}</span>';
                            }
                            if(row.requested == 11 || row.requested == 15 || row.requested == 17 || row.requested == 18){
                                output  += '&nbsp;<span class=\"btn btn-bold btn-sm btn-label-success\">{{\"Custom\"|__}}</span>';
                            }
                        }

                        return output;
                    }
                },
                {
                    field: \"created_at_date\",
                    title: \"{{'Date'|__}}\",
                    sortable: false,
                    width: 100,
                },
                {
                    field: \"Actions\",
                    width: 100,
                    title: \"{{'Actions'|__}}\",
                    sortable: false,
                    overflow: 'visible',
                    template: function (data) {
                        var output = '' +
                        '<div class=\"btn-group btn-group\" role=\"group\" aria-label=\"...\">'+
                            '<a href=\"{{url(\"dashboard/shipments\")}}/'+data.id+'/view\" class=\"btn btn-brand btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"{{\"View Shipment\"|__}}\"><i class=\"la la-eye\"></i></button>';
                            {% if user.hasUserPermission('order', 'u') and user.role_id != 5 %}
                                if(data.requested   ==  0 || data.requested == 1 || data.requested == 100){
                                    output += '<a href=\"{{url(\"dashboard/shipments\")}}/'+data.id+'/edit\" class=\"btn btn-brand btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"{{\"Edit Shipment\"|__}}\"><i class=\"la la-edit\"></i></button>';
                                }
                            {% endif %}
                            {% if user.role_id == 5 %}
                                if((data.requested   ==  0 || data.requested == 100) && data.sender_id == {{user.id}}){
                                    output += '<a href=\"{{url(\"dashboard/shipments\")}}/'+data.id+'/edit\" class=\"btn btn-brand btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"{{\"Edit Shipment\"|__}}\"><i class=\"la la-edit\"></i></button>';
                                }
                            {% endif %}
                                if((data.requested   !=  0 && data.requested   !=  1 && data.requested != 100)){
                                    output += '<a href=\"{{url(\"dashboard/shipments\")}}/'+data.id+'/print/shipment\" target=\"_blank\" class=\"btn btn-info btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"{{\"Print Shipment\"|__}}\"><i class=\"la la-print\"></i></button>';
                                }
                            {% if user.hasUserPermission('order', 'u') %}
                                if((data.requested   ==  100 || data.requested   ==  0 || data.requested == 1)){
                                    output += '<a href=\"{{url(\"dashboard/shipments\")}}/'+data.id+'/print/label\" class=\"btn btn-info btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"{{\"Print Label\"|__}}\" target=\"_blank\" ><i class=\"la la-qrcode\"></i></button>';
                                }
                            {% endif %}
                            {% if user.hasUserPermission('order', 'u') %}
                                if((data.requested   ==  3 || data.requested   ==  5 || data.requested == 6 || data.requested == 7 || data.requested == 9)){
                                    output += '<a href=\"{{url(\"dashboard/shipments\")}}/'+data.id+'/update\" class=\"btn btn-info btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"{{\"Update Status\"|__}}\"><i class=\"la la-street-view\"></i></button>';
                                }
                            {% endif %}
                            //0 = Pending | 1 = Approved | 2 = Refused | 3 = Delivered to driver | 4 = Delivered | 5 = Return request | 6 = Delivery of discards to the driver | 7 = Supply in stock | 8 = Returned | 9 = received

                            {% if user.hasUserPermission('order', 'u') %}
                                if((data.requested   ==  1 || data.requested   ==  3)){
                                    output += '<a href=\"{{url(\"dashboard/shipments\")}}/'+data.id+'/deliver\" class=\"btn btn-success btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"{{\"Mark as delivered\"|__}}\"><i class=\"la la-smile-o\"></i></button>';
                                }
                            {% endif %}
                            {% if user.hasUserPermission('order', 'd') and user.role_id != 5 %}
                                if(data.requested   ==  0 || data.requested == 100 || data.requested == 1){
                                    output += '<a href=\"javascript:void(0);\" class=\"btn btn-danger btn-sm delete_record kt-font-light btn-icon\" rel=\"'+data.id+'\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"{{\"Delete Shipment\"|__}}\"><i class=\"la la-remove\"></i></a>';
                                }
                            {% endif %}
                            {% if user.role_id == 5 %}
                                if((data.requested   ==  0 || data.requested == 100) && (data.sender_id != {{user.id}})){
                                    output += '<a href=\"javascript:void(0);\" class=\"btn btn-danger btn-sm delete_record kt-font-light btn-icon\" rel=\"'+data.id+'\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"{{\"Delete Shipment\"|__}}\"><i class=\"la la-remove\"></i></a>';
                                }
                            {% endif %}
                        '</div>';

                        return output;
                    },
                }
            ]
        }

        datatable = \$('.kt-datatable-'+type).KTDatatable({
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

                            info: \"{{\"Displaying\"|__}} {{ '{{' }}start{{ '}}' }} - {{ '{{' }}end{{ '}}' }} {{\"of\"|__}} {{total}} {{\"records\"|__}}\"
                        }
                    }
                }
            },

            // layout definition
            layout: {
                scroll: true, // enable/disable datatable scroll both horizontal and vertical when needed.
                footer: false, // display/hide footer
            },

            // column sorting
            sortable: true,

            pagination: true,

            search: {
                input: \$('#generalSearch'),
                delay: 400,
            },
            data: {
                type: 'remote',
                source: {
                    read: {
                        url: '{{url(\"api/shipments\")}}/'+type,
                    },
                },
                pageSize: 10, // display 20 records per page
                serverPaging: true,
                serverFiltering: true,
                serverSorting: true,
            },
            // columns definition
            columns: columns
        });


        return datatable;
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
            \$('#generalSearch').val('');
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
                    type: \"info-\",

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
    // selected records status update
    var selectedFilter = function () {
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
                    type: \"error\",

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


        \$('body').on('click', '#sendAll', function (e) {
            e.preventDefault();

            // fetch selected IDs
            var selected = [];
            var ids = datatable.rows('.kt-datatable__row--active').nodes().find('.kt-checkbox--single > [type=\"checkbox\"]').map(function (i, chk) {
                selected[\$(chk).val()] = \$(chk).val();
                return \$(chk).val();
            });
            if (ids.length > 0) {
                // learn more: //sweetalert2.github.io/
                swal.fire({
                    buttonsStyling: false,

                    text: \"{{'Are you sure you want to send all'|__}} \" + ids.length + \" {{'selected records to the company?'|__}}\",
                    type: \"error\",

                    confirmButtonText: \"{{'Yes!'|__}}\",
                    confirmButtonClass: \"btn btn-sm btn-bold btn-danger\",

                    showCancelButton: true,
                    cancelButtonText: '{{\"No, cancel\"|__}}',
                    cancelButtonClass: \"btn btn-sm btn-bold btn-brand\"
                }).then(function (result) {
                    if (result.value) {
                        \$.request('onSend', {
                            data: {id: selected},
                            success: function(data) {
                                swal.fire({
                                    title: '{{\"Sent Successfully!\"|__}}',
                                    text: '{{\"Your selected records have been sent to the company!\"|__}}',
                                    type: 'success',
                                    buttonsStyling: false,
                                    confirmButtonText: '{{\"OK\"|__}}',
                                    confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                                });
                                datatable.reload();
                            }
                        });
                    } else if (result.dismiss === 'cancel') {
                        swal.fire({
                            title: '{{\"Cancelled\"|__}}',
                            text: '{{\"Your shipments not sent, and they still just on your account! :)\"|__}}',
                            type: 'error',
                            buttonsStyling: false,
                            confirmButtonText: '{{\"OK\"|__}}',
                            confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                        });
                    }
                });
            }
        });

        \$('body').on('click', '#createManifest', function (e) {
            e.preventDefault();

            // fetch selected IDs
            var selected = [];
            var ids = datatable.rows('.kt-datatable__row--active').nodes().find('.kt-checkbox--single > [type=\"checkbox\"]').map(function (i, chk) {
                selected[\$(chk).val()] = \$(chk).val();
                return \$(chk).val();
            });
            if (ids.length > 0) {
                // learn more: //sweetalert2.github.io/
                swal.fire({
                    buttonsStyling: false,

                    text: \"{{'Are you sure you want to create new manifest with'|__}} \" + ids.length + \" {{'selected records ?'|__}}\",
                    type: \"error\",

                    confirmButtonText: \"{{'Yes!'|__}}\",
                    confirmButtonClass: \"btn btn-sm btn-bold btn-danger\",

                    showCancelButton: true,
                    cancelButtonText: '{{\"No, cancel\"|__}}',
                    cancelButtonClass: \"btn btn-sm btn-bold btn-brand\"
                }).then(function (result) {
                    if (result.value) {
                        \$('#manifest_id').val(selected);
                        \$('#manifest_modal').modal('toggle');
                    } else if (result.dismiss === 'cancel') {
                        swal.fire({
                            title: '{{\"Cancelled\"|__}}',
                            text: '{{\"Your manifest not created! :)\"|__}}',
                            type: 'error',
                            buttonsStyling: false,
                            confirmButtonText: '{{\"OK\"|__}}',
                            confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                        });
                    }
                });
            }
        });

        // \$('body').on('click', '#updateStatus', function (e) {
        //     \$('#change_status').modal('toggle');
        // });
        \$('body').on('click', '#updateStatus', function (e) {
            e.preventDefault();

            // fetch selected IDs
            var selected = [];
            var ids = datatable.rows('.kt-datatable__row--active').nodes().find('.kt-checkbox--single > [type=\"checkbox\"]').map(function (i, chk) {
                selected[\$(chk).val()] = \$(chk).val();
                return \$(chk).val();
            });
            if (ids.length > 0) {
                // learn more: //sweetalert2.github.io/
                swal.fire({
                    buttonsStyling: false,

                    html: \"{{\"Are you sure to update\"|__}} \" + ids.length + \" {{\"selected records status \"|__}} ?\",
                    type: \"info\",

                    confirmButtonText: \"{{\"Yes, update\"|__}}!\",
                    confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",

                    showCancelButton: true,
                    cancelButtonText: \"{{\"No, cancel\"|__}}\",
                    cancelButtonClass: \"btn btn-sm btn-bold btn-default\"
                }).then(function (result) {
                    if (result.value) {
                        \$('#shipments_statuses_id').val(selected);
                        \$('#change_status').modal('toggle');
                    } else if (result.dismiss === 'cancel') {
                        swal.fire({
                            title: '{{\"Cancelled\"|__}}',
                            text: '{{\"Your manifest not created! :)\"|__}}',
                            type: 'error',
                            buttonsStyling: false,
                            confirmButtonText: '{{\"OK\"|__}}',
                            confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                        });
                    }
                });
            }
        });




        // \$('body').on('click', '#assignEmployee', function (e) {
        //     \$('#assign_employee').modal('toggle');
        // });
        \$('body').on('click', '#assignEmployee', function (e) {
            e.preventDefault();

            // fetch selected IDs
            var selected = [];
            var ids = datatable.rows('.kt-datatable__row--active').nodes().find('.kt-checkbox--single > [type=\"checkbox\"]').map(function (i, chk) {
                selected[\$(chk).val()] = \$(chk).val();
                return \$(chk).val();
            });
            if (ids.length > 0) {
                // learn more: //sweetalert2.github.io/
                swal.fire({
                    buttonsStyling: false,

                    html: \"{{\"Are you sure to assign\"|__}} \" + ids.length + \" {{\"selected records to employee \"|__}} ?\",
                    type: \"info\",

                    confirmButtonText: \"{{\"Yes, assign\"|__}}!\",
                    confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",

                    showCancelButton: true,
                    cancelButtonText: \"{{\"No, cancel\"|__}}\",
                    cancelButtonClass: \"btn btn-sm btn-bold btn-default\"
                }).then(function (result) {
                    if (result.value) {
                        \$('#shipments_employee_id').val(selected);
                        \$('#assign_employee').modal('toggle');
                    } else if (result.dismiss === 'cancel') {
                        swal.fire({
                            title: '{{\"Cancelled\"|__}}',
                            text: '{{\"Your manifest not created! :)\"|__}}',
                            type: 'error',
                            buttonsStyling: false,
                            confirmButtonText: '{{\"OK\"|__}}',
                            confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                        });
                    }
                });
            }
        });


        //print shipments label
        \$('body').on('click', '#printShipments', function (e) {
            e.preventDefault();

            // fetch selected IDs
            var selected = [];
            var ids = datatable.rows('.kt-datatable__row--active').nodes().find('.kt-checkbox--single > [type=\"checkbox\"]').map(function (i, chk) {
                selected[\$(chk).val()] = \$(chk).val();
                return \$(chk).val();
            });
            if (ids.length > 0) {
                \$('#shipments_label_id').val(selected);
                \$('#shipments_length').html(ids.length);
                \$('#print_lable').modal('toggle');
            }
        });



        \$('body').on('click', '#PrintEmployeeOrders', function (e) {
            \$('#chooseEmployee').modal('toggle');
        });
        \$('#chooseEmployee').on('click', '.print', function (e) {
            e.preventDefault();
            var parent = \$('#chooseEmployee');
            var validation = 1;
            parent.find('input,select').each(function(){
                if(\$(this).is(':hidden')){
                    return;
                }
                if(\$(this).valid() == false){
                    validation = 0;
                }
            });
            if(validation){
                \$('#chooseEmployee form').submit();
                \$('#chooseEmployee').modal('toggle');
            }
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

    var filter = function (status) {
        datatable.search(status, 'type');
    };

    var destroy = function () {
        datatable.destroy();
        \$('#generalSearch').val('');
        \$('#filter_form select,#filter_form input').each(function(){
            \$(this).val('');
        });
        \$('#filter_form select').each(function(){
            \$(this).selectpicker(\"refresh\");
        });
    };

    return {
        // public functions
        init: function (type) {
            init(type);
            search();
            selection();
            selectedStatusUpdate();
            selectedFilter();
            selectedDelete();
            updateTotal();
        },

        reload: function(){
            reload();
        },

        destroy: function(){
            destroy();
        },

        filter: function(status){
            filter(status);
        }
    };
}();

KTUtil.ready(function () {
    \$('.kt_subheader_filter_form').on('submit', function (e) {
        e.preventDefault();
        if(\$(this).find(\"button\").hasClass('active')){
            \$('.kt_subheader_filter_form button').removeClass('active');
            \$(\"#filter_selected\").html('');
            KTAppUserListDatatable.filter(0);
        }else{
            \$('.kt_subheader_filter_form button').removeClass('active');
            \$(\"#filter_selected\").html(':&nbsp;'+\$(this).find(\"button\").text());
            \$(this).find(\"button\").addClass('active');
            var status = \$(this).find(\"input.filter\").val();
            KTAppUserListDatatable.filter(status);
        }
    });

    {% if this.param.type is empty and user.role_id == 5 %}
        KTAppUserListDatatable.init('saved');
    {% elseif this.param.type is empty %}
        KTAppUserListDatatable.init('requests');
    {% else %}
        KTAppUserListDatatable.init('{{this.param.type}}');

        if('{{this.param.type}}' == 'manifest'){
            \$('#addNew').addClass('kt-hidden');
            \$('#sendAll').addClass('kt-hidden');
            \$('#importNew').addClass('kt-hidden');
            \$('#createManifest').addClass('kt-hidden');
            \$('#kt_subheader_group_actions_filter_change').addClass('kt-hidden');
        }else if('{{this.param.type}}' == 'saved'){
            \$('#sendAll').removeClass('kt-hidden');
        }else{
            \$('#addNew').removeClass('kt-hidden');
            \$('#importNew').removeClass('kt-hidden');
            \$('#sendAll').addClass('kt-hidden');
            \$('#createManifest').removeClass('kt-hidden');
        }
    {% endif %}

    \$('body').on('click', '#car', function(){
        if(\$(this).is(\":checked\")){
            \$('.car_container').removeClass('kt-hidden');
            \$('.employee_container').addClass('kt-hidden');
        }else{
            \$('.employee_container').removeClass('kt-hidden');
            \$('.car_container').addClass('kt-hidden');
        }
    });
    \$('body').on('click', 'a.nav-link',function(){
        \$('.kt_subheader_filter_form button').removeClass('active');
        \$(\"#filter_selected\").html('');
        window.history.pushState(null, null, '{{url(currentLang~\"/dashboard/shipments\")}}/'+\$(this).attr('href').replace('#',''));
        if(\$(this).attr('href').replace('#','') == 'saved'){
            \$('#kt_subheader h3.kt-subheader__title').html('{{\"Saved Shipments\"|__}}');
        }else if(\$(this).attr('href').replace('#','') == 'requests'){
            \$('#kt_subheader h3.kt-subheader__title').html('{{\"Shipments Requests\"|__}}');
        }else if(\$(this).attr('href').replace('#','') == 'approved'){
            \$('#kt_subheader h3.kt-subheader__title').html('{{\"Approved Shipments\"|__}}');
        }else if(\$(this).attr('href').replace('#','') == 'assigned'){
            \$('#kt_subheader h3.kt-subheader__title').html('{{\"Assigned Shipments\"|__}}');
        }else if(\$(this).attr('href').replace('#','') == 'withdriver'){
            \$('#kt_subheader h3.kt-subheader__title').html('{{\"Shipments Delivered To Driver\"|__}}');
        }else if(\$(this).attr('href').replace('#','') == 'postponed'){
            \$('#kt_subheader h3.kt-subheader__title').html('{{\"Postponed Shipments\"|__}}');
        }else if(\$(this).attr('href').replace('#','') == 'stock'){
            \$('#kt_subheader h3.kt-subheader__title').html('{{\"In Stock\"|__}}');
        }else if(\$(this).attr('href').replace('#','') == 'custom'){
            \$('#kt_subheader h3.kt-subheader__title').html('{{\"In Custom\"|__}}');    
        }else if(\$(this).attr('href').replace('#','') == 'delivered'){
            \$('#kt_subheader h3.kt-subheader__title').html('{{\"Delivered\"|__}}');
        }else if(\$(this).attr('href').replace('#','') == 'supplied'){
            \$('#kt_subheader h3.kt-subheader__title').html('{{\"Supplied\"|__}}');
        }else if(\$(this).attr('href').replace('#','') == 'manifest'){
            \$('#kt_subheader h3.kt-subheader__title').html('{{\"Manifest\"|__}}');
        }else if(\$(this).attr('href').replace('#','') == 'all'){
            \$('#kt_subheader h3.kt-subheader__title').html('{{\"All Shipments\"|__}}');
        }

        var url = '{{url(\"dashboard/shipments\")}}/'+\$(this).attr('href').replace('#','');
        \$('.kt-menu__item.kt-menu__item--open.kt-menu__item--here.kt-menu__item--submenu .kt-menu__submenu .kt-menu__link').each(function(){
            var item = \$(this);
            var parent = item.parent().parent();
            if(item.attr('href') == url){
                parent.find('.kt-menu__item.kt-menu__item--open').removeClass('kt-menu__item--open');
                parent.find('.kt-menu__item.kt-menu__item--here').removeClass('kt-menu__item--here');
                item.parent('.kt-menu__item').addClass('kt-menu__item--open').addClass('kt-menu__item--here');
            }
        });

        KTApp.blockPage({
            overlayColor: '#000000',
            type: 'v2',
            state: 'primary',
            message: '{{\"Processing, please wait\"|__}}...'
        });
        KTAppUserListDatatable.destroy();
        KTAppUserListDatatable.init(\$(this).attr('href').replace('#',''));
        KTApp.unblockPage();

        if(\$(this).attr('href').replace('#','') == 'manifest'){
            \$('#addNew').addClass('kt-hidden');
            \$('#importNew').addClass('kt-hidden');
                \$('#sendAll').addClass('kt-hidden');
        }else if(\$(this).attr('href').replace('#','') == 'saved'){
            \$('#sendAll').removeClass('kt-hidden');
        }else{
            \$('#sendAll').addClass('kt-hidden');
            \$('#addNew').removeClass('kt-hidden');
            \$('#importNew').removeClass('kt-hidden');
        }
    });


    \$('#manifest_modal').on('click', '.btn-primary', function(e){
        var parent = \$('#manifest_modal');
        var validation = 1;
        if(validation){
            \$('#manifest_modal').modal('toggle');
            KTApp.blockPage({
                overlayColor: '#000000',
                type: 'v2',
                state: 'success',
                message: '{{\"Please wait\"|__}}...'
            });
            location.reload();
        }
    });
});
</script>
{% endput %}", "/Users/bola/Downloads/e-cargo/themes/spotlayer/pages/dashboard/shipments.htm", "");
    }
}
