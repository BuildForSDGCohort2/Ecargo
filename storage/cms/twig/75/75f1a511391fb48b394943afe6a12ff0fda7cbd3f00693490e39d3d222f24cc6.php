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

/* C:\xampp\htdocs\e-cargo/themes/spotlayer/partials/listingwidget.htm */
class __TwigTemplate_18d97767adba8ece9feccc6a57b02e73f39442d581d2a875b6f80c626d9232d4 extends \Twig\Template
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
        echo "<div class=\"kt-datatable\"></div>

<script>
function listing(){
    \$('.kt-datatable').KTDatatable({
        translate: {
            records: {
                processing: '";
        // line 8
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please wait"]);
        echo "...',
                noRecords: '";
        // line 9
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["No records found"]);
        echo "'
            },
            toolbar: {
                pagination: {
                    items: {
                        default: {
                            first: '";
        // line 15
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["First"]);
        echo "',
                            prev: '";
        // line 16
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Previous"]);
        echo "',
                            next: '";
        // line 17
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Next"]);
        echo "',
                            last: '";
        // line 18
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Last"]);
        echo "',
                            more: '";
        // line 19
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["More pages"]);
        echo "',
                            input: '";
        // line 20
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Page number"]);
        echo "',
                            select: '";
        // line 21
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Select page size"]);
        echo "'
                        },

                        info: \"";
        // line 24
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
        // line 49
        echo url("api/dashboardshipments");
        echo "',
                    params: {
                      start: '";
        // line 51
        echo twig_escape_filter($this->env, ($context["start"] ?? null), "html", null, true);
        echo "',
                      end: '";
        // line 52
        echo twig_escape_filter($this->env, ($context["end"] ?? null), "html", null, true);
        echo "'
                    }
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
                field: \"number\",
                title: \"";
        // line 65
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Tracking"]);
        echo "\",
                sortable: true,
                width: 100,
                template: function(row) {
                    return '<a href=\"";
        // line 69
        echo url("dashboard/shipments");
        echo "/'+row.id+'/view\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "tracking", [], "any", false, false, false, 69), "prefix_order", [], "any", false, false, false, 69), "html", null, true);
        echo "'+row.shipping_number+'</a>';
                }
            },
            {
                field: \"details\",
                title: \"";
        // line 74
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
        // line 82
        if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "client", 1 => "r"], "method", false, false, false, 82)) {
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
        // line 85
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["From"]);
        echo ":</b> ' + data.shipping_from_area + '</span>';
                                }
                    }else{
                        var output  = '\\
                                <div class=\"kt-user-card-v2 kt-user-card-v2--uncircle\">\\
                                    <div class=\"kt-user-card-v2__details\">\\
                                        <a href=\"javascript:;\" class=\"kt-user-card-v2__name\"><b class=\"kt-font-boldest\">";
        // line 91
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sender"]);
        echo ":</b> ' + data.sender_name + '</a>';
                      if(+ data.shipping_from_area && + data.shipping_from_area != '-'){
                          output      += '\\
                                          <span class=\"kt-user-card-v2__email\"><b class=\"kt-font-boldest\">";
        // line 94
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["From"]);
        echo ":</b> ' + data.shipping_from_area + '</span>';
                      }
                    }
                    if(data.receiver && data.receiver.name && data.receiver.name != '-'){
                        output      += '\\
                                    <a href=\"";
        // line 99
        if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "client", 1 => "r"], "method", false, false, false, 99)) {
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
        // line 102
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["To"]);
        echo ":</b> ' + data.shipping_to_area + '</span>';
                      }
                    }else if(data.receiver_name && data.receiver_name != '-'){
                        output  += '\\
                                <div class=\"kt-user-card-v2 kt-user-card-v2--uncircle\">\\
                                    <div class=\"kt-user-card-v2__details\">\\
                                        <a href=\"javascript:;\" class=\"kt-user-card-v2__name\"><b class=\"kt-font-boldest\">";
        // line 108
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Receiver"]);
        echo ":</b> ' + data.receiver_name + '</a>';
                        if(data.shipping_to_area && + data.shipping_to_area != '-'){
                            output      += '\\
                                            <span class=\"kt-user-card-v2__email\"><b class=\"kt-font-boldest\">";
        // line 111
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
        // line 122
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
        // line 131
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Status"]);
        echo "\",
                sortable: false,
                width: 'auto',
                template: function(row) {
                    if(row.requested == 100){
                        var output = '<span class=\"btn btn-bold btn-sm btn-label-primary\">";
        // line 136
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Saved"]);
        echo "</span>';
                    }else{
                        var output = '<span class=\"btn btn-bold btn-sm btn-label-' + row.status.color + '\">' + row.status.name + '</span>';
                        if(row.delayed == 1){
                            output  += '&nbsp;<span class=\"btn btn-bold btn-sm btn-label-danger\">";
        // line 140
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delayed"]);
        echo "</span>';
                        }
                        if(row.requested == 10 || row.requested == 11){
                            output  += '&nbsp;<span class=\"btn btn-bold btn-sm btn-label-warning\">";
        // line 143
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Returning Discards"]);
        echo "</span>';
                        }
                        if(row.requested == 12 && row.status.equal != 12){
                            output  += '&nbsp;<span class=\"btn btn-bold btn-sm btn-label-success\">";
        // line 146
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Supplied"]);
        echo "</span>';
                        }
                    }

                    return output;
                }
            },
            {
                field: \"created_at_date\",
                title: \"";
        // line 155
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Date"]);
        echo "\",
                sortable: false,
                width: 100,
            },
            {
                field: \"Actions\",
                width: 100,
                title: \"";
        // line 162
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Actions"]);
        echo "\",
                sortable: false,
                overflow: 'visible',
                template: function (data) {
                    var output = '' +
                    '<div class=\"btn-group btn-group\" role=\"group\" aria-label=\"...\">'+
                        '<a href=\"";
        // line 168
        echo url("dashboard/shipments");
        echo "/'+data.id+'/view\" class=\"btn btn-brand btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["View Shipment"]);
        echo "\"><i class=\"la la-eye\"></i></button>';
                        ";
        // line 169
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "order", 1 => "u"], "method", false, false, false, 169) && (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 169) != 5))) {
            // line 170
            echo "                            if(data.requested   ==  0 || data.requested == 1 || data.requested == 100){
                                output += '<a href=\"";
            // line 171
            echo url("dashboard/shipments");
            echo "/'+data.id+'/edit\" class=\"btn btn-brand btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Edit Shipment"]);
            echo "\"><i class=\"la la-edit\"></i></button>';
                            }
                        ";
        }
        // line 174
        echo "                        ";
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 174) == 5)) {
            // line 175
            echo "                            if((data.requested   ==  0 || data.requested == 100) && data.sender_id == ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 175), "html", null, true);
            echo "){
                                output += '<a href=\"";
            // line 176
            echo url("dashboard/shipments");
            echo "/'+data.id+'/edit\" class=\"btn btn-brand btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Edit Shipment"]);
            echo "\"><i class=\"la la-edit\"></i></button>';
                            }
                        ";
        }
        // line 179
        echo "                            if((data.requested   !=  0 && data.requested   !=  1 && data.requested != 100)){
                                output += '<a href=\"";
        // line 180
        echo url("dashboard/shipments");
        echo "/'+data.id+'/print/shipment\" target=\"_blank\" class=\"btn btn-info btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Print Shipment"]);
        echo "\"><i class=\"la la-print\"></i></button>';
                            }
                        ";
        // line 182
        if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "order", 1 => "u"], "method", false, false, false, 182)) {
            // line 183
            echo "                            if((data.requested   ==  100 || data.requested   ==  0 || data.requested == 1)){
                                output += '<a href=\"";
            // line 184
            echo url("dashboard/shipments");
            echo "/'+data.id+'/print/label\" class=\"btn btn-info btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Print Label"]);
            echo "\" target=\"_blank\" ><i class=\"la la-qrcode\"></i></button>';
                            }
                        ";
        }
        // line 187
        echo "                        ";
        if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "order", 1 => "u"], "method", false, false, false, 187)) {
            // line 188
            echo "                            if((data.requested   ==  3 || data.requested   ==  5 || data.requested == 6 || data.requested == 7 || data.requested == 9)){
                                output += '<a href=\"";
            // line 189
            echo url("dashboard/shipments");
            echo "/'+data.id+'/update\" class=\"btn btn-info btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Update Status"]);
            echo "\"><i class=\"la la-street-view\"></i></button>';
                            }
                        ";
        }
        // line 192
        echo "
                        ";
        // line 193
        if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "order", 1 => "u"], "method", false, false, false, 193)) {
            // line 194
            echo "                            if((data.requested   ==  9 || data.requested   ==  3)){
                                output += '<a href=\"";
            // line 195
            echo url("dashboard/shipments");
            echo "/'+data.id+'/deliver\" class=\"btn btn-success btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Mark as delivered"]);
            echo "\"><i class=\"la la-smile-o\"></i></button>';
                            }
                        ";
        }
        // line 198
        echo "                        ";
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "order", 1 => "d"], "method", false, false, false, 198) && (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 198) != 5))) {
            // line 199
            echo "                            if(data.requested   ==  0 || data.requested == 100 || data.requested == 1){
                                output += '<a href=\"javascript:void(0);\" class=\"btn btn-danger btn-sm delete_record kt-font-light btn-icon\" rel=\"'+data.id+'\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"";
            // line 200
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delete Shipment"]);
            echo "\"><i class=\"la la-remove\"></i></a>';
                            }
                        ";
        }
        // line 203
        echo "                        ";
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 203) == 5)) {
            // line 204
            echo "                            if((data.requested   ==  0 || data.requested == 100) && data.sender_id != ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 204), "html", null, true);
            echo "){
                                output += '<a href=\"javascript:void(0);\" class=\"btn btn-danger btn-sm delete_record kt-font-light btn-icon\" rel=\"'+data.id+'\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"";
            // line 205
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delete Shipment"]);
            echo "\"><i class=\"la la-remove\"></i></a>';
                            }
                        ";
        }
        // line 208
        echo "                    output +='</div>';

                    return output;
                    },
                }

        ]
    });
    \$('body').tooltip({selector: '[data-toggle=\"kt-tooltip\"]'});
    \$('body').on('click','.delete_record',function(){
        var id      = \$(this).attr('rel');
        var type    = \$(this).attr('data-type');
        swal.fire({
            buttonsStyling: false,

            text: \"";
        // line 223
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Are you sure to delete this item ?"]);
        echo "\",
            type: \"question\",

            confirmButtonText: \"";
        // line 226
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Yes, delete!"]);
        echo "\",
            confirmButtonClass: \"btn btn-sm btn-bold btn-danger\",

            showCancelButton: true,
            cancelButtonText: '";
        // line 230
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
        // line 239
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Deleted!"]);
        echo "',
                            text: '";
        // line 240
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Your selected record has been deleted! :("]);
        echo "',
                            type: 'success',
                            buttonsStyling: false,
                            confirmButtonText: '";
        // line 243
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
        // line 253
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Cancelled"]);
        echo "',
                    text: '";
        // line 254
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["You selected record has not been deleted! :)"]);
        echo "',
                    type: 'error',
                    buttonsStyling: false,
                    confirmButtonText: '";
        // line 257
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["OK"]);
        echo "',
                    confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                });
            }
        });
    });
}
</script>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\e-cargo/themes/spotlayer/partials/listingwidget.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  521 => 257,  515 => 254,  511 => 253,  498 => 243,  492 => 240,  488 => 239,  476 => 230,  469 => 226,  463 => 223,  446 => 208,  440 => 205,  435 => 204,  432 => 203,  426 => 200,  423 => 199,  420 => 198,  412 => 195,  409 => 194,  407 => 193,  404 => 192,  396 => 189,  393 => 188,  390 => 187,  382 => 184,  379 => 183,  377 => 182,  370 => 180,  367 => 179,  359 => 176,  354 => 175,  351 => 174,  343 => 171,  340 => 170,  338 => 169,  332 => 168,  323 => 162,  313 => 155,  301 => 146,  295 => 143,  289 => 140,  282 => 136,  274 => 131,  262 => 122,  248 => 111,  242 => 108,  233 => 102,  220 => 99,  212 => 94,  206 => 91,  197 => 85,  184 => 82,  173 => 74,  163 => 69,  156 => 65,  140 => 52,  136 => 51,  131 => 49,  89 => 24,  83 => 21,  79 => 20,  75 => 19,  71 => 18,  67 => 17,  63 => 16,  59 => 15,  50 => 9,  46 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"kt-datatable\"></div>

<script>
function listing(){
    \$('.kt-datatable').KTDatatable({
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
                    url: '{{url(\"api/dashboardshipments\")}}',
                    params: {
                      start: '{{start}}',
                      end: '{{end}}'
                    }
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

                        {% if user.hasUserPermission('order', 'u') %}
                            if((data.requested   ==  9 || data.requested   ==  3)){
                                output += '<a href=\"{{url(\"dashboard/shipments\")}}/'+data.id+'/deliver\" class=\"btn btn-success btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"{{\"Mark as delivered\"|__}}\"><i class=\"la la-smile-o\"></i></button>';
                            }
                        {% endif %}
                        {% if user.hasUserPermission('order', 'd') and user.role_id != 5 %}
                            if(data.requested   ==  0 || data.requested == 100 || data.requested == 1){
                                output += '<a href=\"javascript:void(0);\" class=\"btn btn-danger btn-sm delete_record kt-font-light btn-icon\" rel=\"'+data.id+'\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"{{\"Delete Shipment\"|__}}\"><i class=\"la la-remove\"></i></a>';
                            }
                        {% endif %}
                        {% if user.role_id == 5 %}
                            if((data.requested   ==  0 || data.requested == 100) && data.sender_id != {{user.id}}){
                                output += '<a href=\"javascript:void(0);\" class=\"btn btn-danger btn-sm delete_record kt-font-light btn-icon\" rel=\"'+data.id+'\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"{{\"Delete Shipment\"|__}}\"><i class=\"la la-remove\"></i></a>';
                            }
                        {% endif %}
                    output +='</div>';

                    return output;
                    },
                }

        ]
    });
    \$('body').tooltip({selector: '[data-toggle=\"kt-tooltip\"]'});
    \$('body').on('click','.delete_record',function(){
        var id      = \$(this).attr('rel');
        var type    = \$(this).attr('data-type');
        swal.fire({
            buttonsStyling: false,

            text: \"{{'Are you sure to delete this item ?'|__}}\",
            type: \"question\",

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
</script>", "C:\\xampp\\htdocs\\e-cargo/themes/spotlayer/partials/listingwidget.htm", "");
    }
}
