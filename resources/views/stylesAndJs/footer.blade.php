{!! Html::script('assets/js/jquery-2.0.0.min.js') !!}
{!! Html::script('assets/plugins/prettyphoto/js/prettyphoto.js') !!}
{!! Html::script('assets/js/helper-plugins.js') !!}
{!! Html::script('assets/js/bootstrap.js') !!}
{!! Html::script('assets/js/waypoints.js') !!}
{!! Html::script('assets/plugins/mediaelement/mediaelement-and-player.min.js') !!}
{!! Html::script('assets/js/init.js') !!}
{!! Html::script('assets/plugins/flexslider/js/jquery.flexslider.js') !!}
{!! Html::script('assets/plugins/countdown/js/jquery.countdown.min.js') !!}
{!! Html::script('plugins/nivoslider/jquery.nivo.slider.js') !!}
{!! Html::script('assets/plugins/rs-plugin/js/jquery.themepunch.tools.min.js') !!}
{!! Html::script('assets/plugins/rs-plugin/js/jquery.themepunch.revolution.min.js') !!}

{{--<script src="assets/js/jquery-2.0.0.min.js"></script> <!-- Jquery Library Call -->
<script src="assets/plugins/prettyphoto/js/prettyphoto.js"></script> <!-- PrettyPhoto Plugin -->
<script src="assets/js/helper-plugins.js"></script> <!-- Plugins -->
<script src="assets/js/bootstrap.js"></script> <!-- UI -->
<script src="assets/js/waypoints.js"></script> <!-- Waypoints -->
<script src="assets/plugins/mediaelement/mediaelement-and-player.min.js"></script> <!-- MediaElements -->
<script src="assets/js/init.js"></script> <!-- All Scripts -->
<script src="assets/plugins/flexslider/js/jquery.flexslider.js"></script> <!-- FlexSlider -->
<script src="assets/plugins/countdown/js/jquery.countdown.min.js"></script> <!-- Jquery Timer -->
<script src="plugins/nivoslider/jquery.nivo.slider.js"></script> <!-- NivoSlider -->







<!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
<script type="text/javascript" src="assets/plugins/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="assets/plugins/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>--}}
<script type="text/javascript">
    jQuery(document).ready(function() {
        jQuery('.tp-banner').show().revolution(
                {
                    dottedOverlay:"none",
                    delay:9000,
                    startwidth:1060,
                    startheight:500,
                    hideThumbs:200,

                    thumbWidth:100,
                    thumbHeight:50,
                    thumbAmount:5,

                    navigationType:"none",
                    navigationArrows:"solo",
                    navigationStyle:"preview2",

                    touchenabled:"on",
                    onHoverStop:"on",

                    swipe_velocity: 0.7,
                    swipe_min_touches: 1,
                    swipe_max_touches: 1,
                    drag_block_vertical: false,


                    keyboardNavigation:"on",

                    navigationHAlign:"center",
                    navigationVAlign:"bottom",
                    navigationHOffset:0,
                    navigationVOffset:20,

                    soloArrowLeftHalign:"left",
                    soloArrowLeftValign:"center",
                    soloArrowLeftHOffset:20,
                    soloArrowLeftVOffset:0,

                    soloArrowRightHalign:"right",
                    soloArrowRightValign:"center",
                    soloArrowRightHOffset:20,
                    soloArrowRightVOffset:0,

                    shadow:0,
                    fullWidth:"on",
                    fullScreen:"off",

                    spinner:"spinner0",

                    stopLoop:"off",
                    stopAfterLoops:-1,
                    stopAtSlide:-1,

                    shuffle:"off",

                    autoHeight:"off",
                    forceFullWidth:"off",



                    hideThumbsOnMobile:"off",
                    hideNavDelayOnMobile:1500,
                    hideBulletsOnMobile:"off",
                    hideArrowsOnMobile:"off",
                    hideThumbsUnderResolution:0,

                    hideSliderAtLimit:0,
                    hideCaptionAtLimit:0,
                    hideAllCaptionAtLilmit:0,
                    startWithSlide:0
                });
    });	//ready
</script>



