<footer class="footer footer-static footer-light navbar-border navbar-shadow">
    <div class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">2020  &copy; Copyright <a class="text-bold-800 grey darken-2" href="#">9Yards</a></span>
        <ul class="list-inline float-md-right d-block d-md-inline-blockd-none d-lg-block mb-0">
            <li class="list-inline-item"><a class="my-1" href="#"> Sales Reports Application version 1.0.0</a></li>
        </ul>
    </div>
</footer>

<!-- BEGIN VENDOR JS-->
<script src="{{asset('assets/theme-assets/vendors/js/vendors.min.js')}}" type="text/javascript"></script>
<!-- BEGIN VENDOR JS-->
<!-- BEGIN PAGE VENDOR JS-->
<script src="{{asset('assets/theme-assets/vendors/js/charts/chart.min.js')}}" type="text/javascript"></script>
<!-- END PAGE VENDOR JS-->

<!-- BEGIN CHAMELEON  JS-->
<script src="{{asset('assets/theme-assets/js/core/app-menu-lite.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/theme-assets/js/core/app-lite.js')}}" type="text/javascript"></script>
<!-- END CHAMELEON  JS-->
<!-- BEGIN PAGE LEVEL JS-->
<script src="{{asset('assets/theme-assets/vendors/js/charts/chartist.min.js')}}" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>
<script src="{{asset('assets/theme-assets/vendors/js/charts/chartist-plugin-tooltip.min.js')}}" type="text/javascript"></script>
<!-- END PAGE LEVEL JS-->
<script src="{{asset('assets/theme-assets/js/scripts/pages/dashboard-lite.js')}}" type="tphp artisan make:chart {Name}ext/javascript"></script>
<!-- BEGIN PAGE LEVEL JS-->
<script src="{{asset('assets/theme-assets/js/scripts/charts/chartjs/bar/column.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/theme-assets/js/scripts/charts/chartjs/bar/bar.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/theme-assets/js/scripts/charts/chartjs/line/line.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/theme-assets/js/scripts/charts/chartjs/pie-doughnut/pie-simple.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/theme-assets/js/scripts/charts/chartjs/pie-doughnut/doughnut-simple.js')}}" type="text/javascript"></script>
{{--<script src="{{asset('assets/theme-assets/js/scripts/modal/components-modal.min.js')}}" type="text/javascript"></script>--}}
<!-- END PAGE LEVEL JS-->
@yield('scripts')
<script type="text/javascript">

    $(".toggle").on('click',function(){
        $('#addForm').slideToggle("slow");
    });

    $(".alert-success").fadeTo(2000, 5000).slideUp(500, function(){
        $(".alert-success").slideUp(500);
    });

    $(".alert-danger").fadeTo(2000, 500).slideUp(500, function(){
        $(".alert-danger").slideUp(500);
    });
    $(".alert-info").fadeTo(2000, 500).slideUp(500, function(){
        $(".alert-info").slideUp(500);
    });
    $('#userConfirmDelete').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget);
        var user_id = button.data('userid');
        var modal = $(this);
        modal.find('.modal-body #user_id').val(user_id);
    });
    //===================Roles Page=============================
    $(".toggle").on('click',function(){
        $('#addRole').slideToggle("slow");
    });

    $('#deleteRole_confirm').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget);
        var role_id = button.data('roleid');
        var modal = $(this);
        modal.find('.modal-body #role_id').val(role_id);
    });
    //================Edit Modal Role Table Scripts=============
    $('#editRole').on('show.bs.modal', function(event){
        var button = $(event.relatedTarget);
        var role_id = button.data('roleid');
        var name = button.data('editname');
        var modal = $(this);
        modal.find('.modal-body #name').val(name);
        modal.find('.modal-body #role_id').val(role_id);
    });
    //================End Edit Modal Role Table Scripts=========
    //====================End Roles Page========================
    //=====================Categories Page======================
    $('#deleteCat_confirm').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget);
        var cat_id = button.data('categoryid');
        var modal = $(this);
        modal.find('.modal-body #cat_id').val(cat_id);
    });
    //================Edit Modal Categories Table Scripts=============
    $('#editCategory').on('show.bs.modal', function(event){
        var button = $(event.relatedTarget);
        var cat_id = button.data('categoryid');
        var name = button.data('categoryname');
        var modal = $(this);
        modal.find('.modal-body #name').val(name);
        modal.find('.modal-body #cat_id').val(cat_id);
    });
    //================End Edit Modal Categories Table Scripts=========
    //=====================End Categories Page==================
    //=====================Status Page================================
    $(".toggle").on('click',function(){
        $('#addStatus').slideToggle("slow");
    });
    $('#deleteStatus_confirm').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget);
        var status_id = button.data('statusid');
        var modal = $(this);
        modal.find('.modal-body #status_id').val(status_id);
    });
    $('#editStatus').on('show.bs.modal', function(event){
        var button = $(event.relatedTarget);
        var status_id = button.data('statusid');
        var name = button.data('statusname');
        var modal = $(this);
        modal.find('.modal-body #name').val(name);
        modal.find('.modal-body #status_id').val(status_id);
    });
    //=====================End Status Page============================
    //=====================Inquiry Page===============================

    //=====================End Inquiry Page===========================

</script>
</body>
</html>
