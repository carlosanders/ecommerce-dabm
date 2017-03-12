<!-- REQUIRED JS SCRIPTS -->
<!-- Laravel App -->
<script type="text/javascript" src="{{ asset('/common/js/vendor.js') }}"></script>
<script type="text/javascript" src="{{ asset('/vendor/easyui/jquery.easyui.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('/common/js/loja-all.js') }}"></script>
{{--<script type="text/javascript" src="http://jcrop-cdn.tapmodo.com/v0.9.12/js/jquery.Jcrop.min.js"></script>--}}

<!-- Optionally, you can add Slimscroll and FastClick plugins.
      Both of these plugins are recommended to enhance the
      user experience. Slimscroll is required when using the
      fixed layout. -->
<script type="text/javascript">
    window.Laravel = {!! json_encode([
        'csrfToken' => csrf_token(),
    ]) !!};

    $('.carousel').carousel({
        interval: 3500
    });
</script>
