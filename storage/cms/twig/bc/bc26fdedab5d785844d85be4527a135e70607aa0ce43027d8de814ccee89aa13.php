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

/* /home/splayer/domains/spotlayer.com/public_html/newDemo/themes/spotlayer/partials/notificationsmenu.htm */
class __TwigTemplate_68d3ee907fe6efd95fa389b7dc603821660cbce1e91ee316a3b255f6c0c8b90e extends \Twig\Template
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
        echo "<div class=\"kt-header__topbar-wrapper\" data-toggle=\"dropdown\" data-offset=\"30px,0px\" aria-expanded=\"true\">
    <span class=\"kt-header__topbar-icon kt-pulse kt-pulse--brand\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\" class=\"kt-svg-icon\">
            <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                <rect id=\"bound\" x=\"0\" y=\"0\" width=\"24\" height=\"24\"/>
                <path d=\"M2.56066017,10.6819805 L4.68198052,8.56066017 C5.26776695,7.97487373 6.21751442,7.97487373 6.80330086,8.56066017 L8.9246212,10.6819805 C9.51040764,11.267767 9.51040764,12.2175144 8.9246212,12.8033009 L6.80330086,14.9246212 C6.21751442,15.5104076 5.26776695,15.5104076 4.68198052,14.9246212 L2.56066017,12.8033009 C1.97487373,12.2175144 1.97487373,11.267767 2.56066017,10.6819805 Z M14.5606602,10.6819805 L16.6819805,8.56066017 C17.267767,7.97487373 18.2175144,7.97487373 18.8033009,8.56066017 L20.9246212,10.6819805 C21.5104076,11.267767 21.5104076,12.2175144 20.9246212,12.8033009 L18.8033009,14.9246212 C18.2175144,15.5104076 17.267767,15.5104076 16.6819805,14.9246212 L14.5606602,12.8033009 C13.9748737,12.2175144 13.9748737,11.267767 14.5606602,10.6819805 Z\" id=\"Combined-Shape\" fill=\"#000000\" opacity=\"0.3\"/>
                <path d=\"M8.56066017,16.6819805 L10.6819805,14.5606602 C11.267767,13.9748737 12.2175144,13.9748737 12.8033009,14.5606602 L14.9246212,16.6819805 C15.5104076,17.267767 15.5104076,18.2175144 14.9246212,18.8033009 L12.8033009,20.9246212 C12.2175144,21.5104076 11.267767,21.5104076 10.6819805,20.9246212 L8.56066017,18.8033009 C7.97487373,18.2175144 7.97487373,17.267767 8.56066017,16.6819805 Z M8.56066017,4.68198052 L10.6819805,2.56066017 C11.267767,1.97487373 12.2175144,1.97487373 12.8033009,2.56066017 L14.9246212,4.68198052 C15.5104076,5.26776695 15.5104076,6.21751442 14.9246212,6.80330086 L12.8033009,8.9246212 C12.2175144,9.51040764 11.267767,9.51040764 10.6819805,8.9246212 L8.56066017,6.80330086 C7.97487373,6.21751442 7.97487373,5.26776695 8.56066017,4.68198052 Z\" id=\"Combined-Shape\" fill=\"#000000\"/>
            </g>
        </svg>
        ";
        // line 10
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "where", [0 => "read_at", 1 => null], "method", false, false, false, 10)) > 0)) {
            // line 11
            echo "            <span class=\"kt-pulse__ring\"></span>
        ";
        }
        // line 13
        echo "    </span>

    <span class=\"";
        // line 15
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "where", [0 => "read_at", 1 => null], "method", false, false, false, 15)) == 0)) {
            echo "kt-hidden";
        }
        echo " kt-badge kt-badge--danger\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "where", [0 => "read_at", 1 => null], "method", false, false, false, 15), "count", [], "method", false, false, false, 15), "html", null, true);
        echo "</span>
</div>
<div class=\"dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-top-unround dropdown-menu-lg\">
    <!--begin: Head -->
    <div class=\"kt-head kt-head--skin-light kt-head--fit-x kt-head--fit-b\">
        <h3 class=\"kt-head__title kt-padding-b-30\">
            ";
        // line 21
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Notifications"]);
        echo "
            &nbsp;
            <a href=\"";
        // line 23
        echo url("dashboard/notifications");
        echo "\" class=\"btn btn-label-";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "where", [0 => "read_at", 1 => null], "method", false, false, false, 23)) > 0)) {
            echo "danger";
        } else {
            echo "success";
        }
        echo " btn-sm btn-bold btn-font-md\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "where", [0 => "read_at", 1 => null], "method", false, false, false, 23), "count", [], "method", false, false, false, 23), "html", null, true);
        echo " ";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["new"]);
        echo "</a>
        </h3>
    </div>
    <!--end: Head -->

    <div id=\"topbar_notifications_notifications\">
        ";
        // line 29
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "where", [0 => "read_at", 1 => null], "method", false, false, false, 29), "count", [], "method", false, false, false, 29) > 0)) {
            // line 30
            echo "
            <div class=\"kt-notification kt-margin-t-10 kt-margin-b-10 kt-scroll\" data-scroll=\"true\" data-height=\"300\" data-mobile-height=\"200\">
                ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["notifications"] ?? null), "where", [0 => "read_at", 1 => null], "method", false, false, false, 32));
            foreach ($context['_seq'] as $context["_key"] => $context["notification"]) {
                // line 33
                echo "                    <a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter("dashboard/notifications", ["id" => twig_get_attribute($this->env, $this->source, $context["notification"], "id", [], "any", false, false, false, 33)]);
                echo "\" class=\"kt-notification__item\">
                        <div class=\"kt-notification__item-icon\">
                            <i class=\"";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["notification"], "icon", [], "any", false, false, false, 35), "html", null, true);
                echo " kt-font-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["notification"], "data", [], "any", false, false, false, 35), "badge", [], "any", false, false, false, 35), "html", null, true);
                echo "\"></i>
                        </div>
                        <div class=\"kt-notification__item-details\">
                            <div class=\"kt-notification__item-title\">
                                ";
                // line 39
                if ((twig_get_attribute($this->env, $this->source, $context["notification"], "type", [], "any", false, false, false, 39) == "new_shipments")) {
                    // line 40
                    echo "                                    ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme_lang"] ?? null), "new_shipments", [], "any", false, false, false, 40), "html", null, true);
                    echo "
                                ";
                } else {
                    // line 42
                    echo "                                    ";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["notification"], "body", [], "any", false, false, false, 42)]);
                    echo "
                                ";
                }
                // line 44
                echo "                            </div>
                            <div class=\"kt-notification__item-time kt-font-sm\">
                                ";
                // line 46
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["notification"], "created_at", [], "any", false, false, false, 46), twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "dateformat", [], "any", false, false, false, 46)), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["notification"], "created_at", [], "any", false, false, false, 46), "h:i:s"), "html", null, true);
                echo "
                            </div>
                        </div>
                    </a>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notification'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "
                <a href=\"";
            // line 52
            echo url("dashboard/notifications");
            echo "\" class=\"kt-notification__item kt-align-center\">
                    <div class=\"kt-notification__item-details\">
                        <div class=\"kt-notification__item-title\">
                            <strong>";
            // line 55
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["View all notifications"]);
            echo "</strong>
                        </div>
                    </div>
                </a>

            </div>
        ";
        } else {
            // line 62
            echo "            <div class=\"kt-grid kt-grid--ver\" style=\"min-height: 200px;\">
                <div class=\"kt-grid kt-grid--hor kt-grid__item kt-grid__item--fluid kt-grid__item--middle\">
                    <div class=\"kt-grid__item kt-grid__item--middle kt-align-center\">
                        ";
            // line 65
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["All caught up!"]);
            echo "
                        <br>
                        ";
            // line 67
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["No new notifications."]);
            echo "
                    </div>
                </div>
            </div>
        ";
        }
        // line 72
        echo "    </div>
</div>
<script>
function notificationPanel(){
    var notificationPanel = KTUtil.get('topbar_notifications_notifications');
    var panel = KTUtil.get('kt_quick_panel');
    KTUtil.scrollInit(notificationPanel, {
        mobileNativeScroll: true,
        resetHeightOnDestroy: true,
        handleWindowResize: true,
        height: function() {
            return '300';
        }
    });
}
</script>";
    }

    public function getTemplateName()
    {
        return "/home/splayer/domains/spotlayer.com/public_html/newDemo/themes/spotlayer/partials/notificationsmenu.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 72,  180 => 67,  175 => 65,  170 => 62,  160 => 55,  154 => 52,  151 => 51,  138 => 46,  134 => 44,  128 => 42,  122 => 40,  120 => 39,  111 => 35,  105 => 33,  101 => 32,  97 => 30,  95 => 29,  76 => 23,  71 => 21,  58 => 15,  54 => 13,  50 => 11,  48 => 10,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"kt-header__topbar-wrapper\" data-toggle=\"dropdown\" data-offset=\"30px,0px\" aria-expanded=\"true\">
    <span class=\"kt-header__topbar-icon kt-pulse kt-pulse--brand\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\" class=\"kt-svg-icon\">
            <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                <rect id=\"bound\" x=\"0\" y=\"0\" width=\"24\" height=\"24\"/>
                <path d=\"M2.56066017,10.6819805 L4.68198052,8.56066017 C5.26776695,7.97487373 6.21751442,7.97487373 6.80330086,8.56066017 L8.9246212,10.6819805 C9.51040764,11.267767 9.51040764,12.2175144 8.9246212,12.8033009 L6.80330086,14.9246212 C6.21751442,15.5104076 5.26776695,15.5104076 4.68198052,14.9246212 L2.56066017,12.8033009 C1.97487373,12.2175144 1.97487373,11.267767 2.56066017,10.6819805 Z M14.5606602,10.6819805 L16.6819805,8.56066017 C17.267767,7.97487373 18.2175144,7.97487373 18.8033009,8.56066017 L20.9246212,10.6819805 C21.5104076,11.267767 21.5104076,12.2175144 20.9246212,12.8033009 L18.8033009,14.9246212 C18.2175144,15.5104076 17.267767,15.5104076 16.6819805,14.9246212 L14.5606602,12.8033009 C13.9748737,12.2175144 13.9748737,11.267767 14.5606602,10.6819805 Z\" id=\"Combined-Shape\" fill=\"#000000\" opacity=\"0.3\"/>
                <path d=\"M8.56066017,16.6819805 L10.6819805,14.5606602 C11.267767,13.9748737 12.2175144,13.9748737 12.8033009,14.5606602 L14.9246212,16.6819805 C15.5104076,17.267767 15.5104076,18.2175144 14.9246212,18.8033009 L12.8033009,20.9246212 C12.2175144,21.5104076 11.267767,21.5104076 10.6819805,20.9246212 L8.56066017,18.8033009 C7.97487373,18.2175144 7.97487373,17.267767 8.56066017,16.6819805 Z M8.56066017,4.68198052 L10.6819805,2.56066017 C11.267767,1.97487373 12.2175144,1.97487373 12.8033009,2.56066017 L14.9246212,4.68198052 C15.5104076,5.26776695 15.5104076,6.21751442 14.9246212,6.80330086 L12.8033009,8.9246212 C12.2175144,9.51040764 11.267767,9.51040764 10.6819805,8.9246212 L8.56066017,6.80330086 C7.97487373,6.21751442 7.97487373,5.26776695 8.56066017,4.68198052 Z\" id=\"Combined-Shape\" fill=\"#000000\"/>
            </g>
        </svg>
        {% if notifications.where('read_at', null)|length > 0 %}
            <span class=\"kt-pulse__ring\"></span>
        {% endif %}
    </span>

    <span class=\"{% if notifications.where('read_at', null)|length == 0 %}kt-hidden{% endif %} kt-badge kt-badge--danger\">{{notifications.where('read_at', null).count()}}</span>
</div>
<div class=\"dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-top-unround dropdown-menu-lg\">
    <!--begin: Head -->
    <div class=\"kt-head kt-head--skin-light kt-head--fit-x kt-head--fit-b\">
        <h3 class=\"kt-head__title kt-padding-b-30\">
            {{'Notifications'|__}}
            &nbsp;
            <a href=\"{{url('dashboard/notifications')}}\" class=\"btn btn-label-{% if notifications.where('read_at', null)|length > 0 %}danger{% else %}success{% endif %} btn-sm btn-bold btn-font-md\">{{notifications.where('read_at', null).count()}} {{'new'|__}}</a>
        </h3>
    </div>
    <!--end: Head -->

    <div id=\"topbar_notifications_notifications\">
        {% if notifications.where('read_at', null).count() > 0 %}

            <div class=\"kt-notification kt-margin-t-10 kt-margin-b-10 kt-scroll\" data-scroll=\"true\" data-height=\"300\" data-mobile-height=\"200\">
                {% for notification in notifications.where('read_at', null) %}
                    <a href=\"{{ 'dashboard/notifications'|page({ id: notification.id }) }}\" class=\"kt-notification__item\">
                        <div class=\"kt-notification__item-icon\">
                            <i class=\"{{notification.icon}} kt-font-{{notification.data.badge}}\"></i>
                        </div>
                        <div class=\"kt-notification__item-details\">
                            <div class=\"kt-notification__item-title\">
                                {% if notification.type == 'new_shipments' %}
                                    {{theme_lang.new_shipments}}
                                {% else %}
                                    {{notification.body|__}}
                                {% endif %}
                            </div>
                            <div class=\"kt-notification__item-time kt-font-sm\">
                                {{notification.created_at|date(settings.dateformat)}} {{notification.created_at|date('h:i:s')}}
                            </div>
                        </div>
                    </a>
                {% endfor %}

                <a href=\"{{url('dashboard/notifications')}}\" class=\"kt-notification__item kt-align-center\">
                    <div class=\"kt-notification__item-details\">
                        <div class=\"kt-notification__item-title\">
                            <strong>{{'View all notifications'|__}}</strong>
                        </div>
                    </div>
                </a>

            </div>
        {% else %}
            <div class=\"kt-grid kt-grid--ver\" style=\"min-height: 200px;\">
                <div class=\"kt-grid kt-grid--hor kt-grid__item kt-grid__item--fluid kt-grid__item--middle\">
                    <div class=\"kt-grid__item kt-grid__item--middle kt-align-center\">
                        {{'All caught up!'|__}}
                        <br>
                        {{'No new notifications.'|__}}
                    </div>
                </div>
            </div>
        {% endif %}
    </div>
</div>
<script>
function notificationPanel(){
    var notificationPanel = KTUtil.get('topbar_notifications_notifications');
    var panel = KTUtil.get('kt_quick_panel');
    KTUtil.scrollInit(notificationPanel, {
        mobileNativeScroll: true,
        resetHeightOnDestroy: true,
        handleWindowResize: true,
        height: function() {
            return '300';
        }
    });
}
</script>", "/home/splayer/domains/spotlayer.com/public_html/newDemo/themes/spotlayer/partials/notificationsmenu.htm", "");
    }
}
