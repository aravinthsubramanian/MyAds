<?php $page = Route::current()->getName(); ?>


@if ($page == 'admin.profile')
    <!-- jQuery -->
    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
    <!-- Select 2 JS-->
    <script src="{{ asset('assets/js/select2.min.js') }}"></script>
    <!-- Bootstrap Core JS -->
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Bootstrap Tagsinput JS -->
    <script src="{{ asset('assets/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.js') }}"></script>
    <!-- Feather Icon JS -->
    <script src="{{ asset('assets/js/feather.min.js') }}"></script>
    <!-- Datatable JS -->
    <script src="{{ asset('assets/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/dataTables.bootstrap4.min.js') }}"></script>
    <!-- Slimscroll JS -->
    <script src="{{ asset('assets/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
    <!-- Custom JS -->
    <script src="{{ asset('assets/js/admin.js') }}"></script>
    <!-- Croppie JS -->
    <script src="{{ asset('assets/js/croppie.js')}}"></script>
    <!-- Page JS -->
    <script src="{{ asset('assets/js/page_profile.js')}}"></script>
@endif

@if ($page == 'admin.categories')
    <!-- jQuery -->
    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
    <!-- Select 2 JS-->
    <script src="{{ asset('assets/js/select2.min.js') }}"></script>
    <!-- Bootstrap Core JS -->
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Bootstrap Tagsinput JS -->
    <script src="{{ asset('assets/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.js') }}"></script>
    <!-- Feather Icon JS -->
    <script src="{{ asset('assets/js/feather.min.js') }}"></script>
    <!-- Datatable JS -->
    <script src="{{ asset('assets/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/dataTables.bootstrap4.min.js') }}"></script>
    <!-- Slimscroll JS -->
    <script src="{{ asset('assets/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
    <!-- Custom JS -->
    <script src="{{ asset('assets/js/admin.js') }}"></script>
    <!-- Page JS -->
    <script src="{{ asset('assets/js/page_category.js') }}"></script>
@endif