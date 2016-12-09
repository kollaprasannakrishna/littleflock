<script src="assets/js/jquery-2.0.0.min.js"></script> <!-- Jquery Library Call -->
<script src="assets/plugins/prettyphoto/js/prettyphoto.js"></script> <!-- PrettyPhoto Plugin -->
<script src="assets/js/helper-plugins.js"></script> <!-- Plugins -->
<script src="assets/js/bootstrap.js"></script> <!-- UI -->
<script src="assets/js/waypoints.js"></script> <!-- Waypoints -->
<script src="assets/plugins/mediaelement/mediaelement-and-player.min.js"></script> <!-- MediaElements -->
<script src="assets/js/init.js"></script> <!-- All Scripts -->
<script src="assets/plugins/flexslider/js/jquery.flexslider.js"></script> <!-- FlexSlider -->
<script src="assets/plugins/countdown/js/jquery.countdown.min.js"></script> <!-- Jquery Timer -->
<script src="plugins/nivoslider/jquery.nivo.slider.js"></script> <!-- NivoSlider -->





<script src='assets/plugins/fullcalendar/lib/moment.min.js'></script>
<script src='assets/plugins/fullcalendar/jquery-ui.custom.min.js'></script>
<script src='assets/plugins/fullcalendar/fullcalendar.min.js'></script>
<script>

    $(document).ready(function() {

        $('#calendar').fullCalendar({
            defaultDate: '2014-11-12',
            editable: true,
            eventLimit: true, // allow "more" link when too many events
            events: [
                {
                    title: 'All Day Event',
                    start: '2014-11-01'
                },
                {
                    title: 'Long Event',
                    start: '2014-11-07',
                    end: '2014-11-10'
                },
                {
                    id: 999,
                    title: 'Repeating Event',
                    start: '2014-11-09T16:00:00'
                },
                {
                    id: 999,
                    title: 'Repeating Event',
                    start: '2014-11-16T16:00:00'
                },
                {
                    title: 'Conference',
                    start: '2014-11-11',
                    end: '2014-11-13'
                },
                {
                    title: 'Meeting',
                    start: '2014-11-12T10:30:00',
                    end: '2014-11-12T12:30:00'
                },
                {
                    title: 'Lunch',
                    start: '2014-11-12T12:00:00'
                },
                {
                    title: 'Meeting',
                    start: '2014-11-12T14:30:00'
                },
                {
                    title: 'Happy Hour',
                    start: '2014-11-12T17:30:00'
                },
                {
                    title: 'Dinner',
                    start: '2014-11-12T20:00:00'
                },
                {
                    title: 'Birthday Party',
                    start: '2014-11-13T07:00:00'
                },
                {
                    title: 'Click for Google',
                    url: 'http://google.com/',
                    start: '2014-11-28'
                }
            ]
        });

    });

</script>

<!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
<script type="text/javascript" src="assets/plugins/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="assets/plugins/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
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



