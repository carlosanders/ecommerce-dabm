<!-- REQUIRED JS SCRIPTS -->
<!-- Laravel App -->
{{--<script src="{{ asset('/vendor/bootstrap/js/jquery.js') }}"></script>--}}
{{--<script src="{{ asset('/vendor/bootstrap/js/bootstrap.min.js') }}"></script>--}}
<script src="{{ asset('/common/js/vendor.js') }}"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
      Both of these plugins are recommended to enhance the
      user experience. Slimscroll is required when using the
      fixed layout. -->
<script>
    window.Laravel = {!! json_encode([
        'csrfToken' => csrf_token(),
    ]) !!};

    $('.carousel').carousel({
        interval: 3500
    });
</script>
