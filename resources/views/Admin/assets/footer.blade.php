<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
<script src="{{asset('Adminassets/assets/js/libs/jquery-3.1.1.min.js')}}"></script>
    <script src="{{asset('Adminassets/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{asset('Adminassets/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('Adminassets/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('Adminassets/assets/js/app.js')}}"></script>
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="{{asset('Adminassets/assets/js/custom.js')}}"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src="{{asset('Adminassets/plugins/apex/apexcharts.min.js')}}"></script>
    <script src="{{asset('Adminassets/assets/js/dashboard/dash_1.js')}}"></script>
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
     <!-- BEGIN PAGE LEVEL CUSTOM SCRIPTS -->
     <script src="{{asset('Adminassets/assets/js/scrollspyNav.js')}}"></script>
    <script>
        checkall('todoAll', 'todochkbox');
        $('[data-toggle="tooltip"]').tooltip()
    </script>
    <!-- END PAGE LEVEL CUSTOM SCRIPTS -->
    @include('sweetalert::alert')

</body>
</html>