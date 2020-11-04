<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Admin</title>
<link rel="stylesheet" type="text/css" href="{{ asset('css/reset.css') }}" media="screen" />
<link rel="stylesheet" type="text/css" href="{{ asset('css/text.css') }}" media="screen" />
<link rel="stylesheet" type="text/css" href="{{ asset('css/grid.css') }}" media="screen" />
<link rel="stylesheet" type="text/css" href="{{ asset('css/layout.css') }}" media="screen" />
<link rel="stylesheet" type="text/css" href="{{ asset('css/nav.css') }}" media="screen" />
<link href="{{ asset('css/table/demo_page.css') }}" rel="stylesheet" type="text/css" />
<!-- BEGIN: load jquery -->
<script src="{{ asset('js/jquery-1.6.4.min.js') }}" type="text/javascript"></script>
<script type="text/javascript" src="{{ asset('js/jquery-ui/jquery.ui.core.min.js') }}"></script>
<script src="{{ asset('js/jquery-ui/jquery.ui.widget.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/jquery-ui/jquery.ui.accordion.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/jquery-ui/jquery.effects.core.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/jquery-ui/jquery.effects.slide.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/jquery-ui/jquery.ui.mouse.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/jquery-ui/jquery.ui.sortable.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/table/jquery.dataTables.min.js') }}" type="text/javascript"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
<!-- END: load jquery -->
<script type="text/javascript" src="{{ asset('js/table/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('js/setup.js') }}" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function() {
        setupLeftMenu();
        setSidebarHeight();
    });

</script>
