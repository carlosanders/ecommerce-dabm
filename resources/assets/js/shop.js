// Remember to invoke within jQuery(window).load(...)
// If you don't, Jcrop may not initialize properly
// $(function () {
//
//        $('#jcrop_target').Jcrop({
//            onChange: showPreview,
//            onSelect: showPreview,
//            onRelease: hidePreview,
//            aspectRatio: 1
//        });
//
//   var $preview = $('#preview');
//   // Our simple event handler, called from onChange and onSelect
//   // event handlers, as per the Jcrop invocation above
//   function showPreview(coords) {
//     if (parseInt(coords.w) > 0) {
//       var rx = 100 / coords.w;
//       var ry = 100 / coords.h;
//
//       $preview.css({
//         width: Math.round(rx * 500) + 'px',
//         height: Math.round(ry * 370) + 'px',
//         marginLeft: '-' + Math.round(rx * coords.x) + 'px',
//         marginTop: '-' + Math.round(ry * coords.y) + 'px'
//       }).show();
//     }
//   }
//
//        function hidePreview()
//        {
//            $preview.stop().fadeOut('fast');
//        }
//
// });
