
<!-- Required vendors -->
<script src="{{asset('dashboard/vendor/global/global.min.js')}}"></script>
<script src="{{asset('dashboard/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
<script src="{{asset('dashboard/vendor/chart.js/Chart.bundle.min.js')}}"></script>
<script src="{{asset('dashboard/js/custom.min.js')}}"></script>
<script src="{{asset('dashboard/js/deznav-init.js')}}"></script>

<!-- Counter Up -->
<script src="{{asset('dashboard/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('dashboard/vendor/jquery.counterup/jquery.counterup.min.js')}}"></script>	
    
<!-- Apex Chart -->
<script src="{{asset('dashboard/vendor/apexchart/apexchart.js')}}"></script>	

<!-- Chart piety plugin files -->
<script src="{{asset('dashboard/vendor/peity/jquery.peity.min.js')}}"></script>

<!-- Dashboard 1 -->
<script src="{{asset('dashboard/js/dashboard/dashboard-1.js')}}"></script>

    <!-- Toastr -->
    <script src="{{asset('dashboard/vendor/toastr/js/toastr.min.js')}}"></script>

    <!-- All init script -->
    <script src="{{asset('dashboard/js/plugins-init/toastr-init.js')}}"></script>
<!--Internal  Notify js -->
<script src="{{URL::asset('dashboard/notify/js/notifIt.js')}}"></script>
<script src="{{URL::asset('dashboard/notify/js/notifit-custom.js')}}"></script>

@yield('script')