<!-- Start Content -->
<div class="main" role="main">
    <div id="content" class="content full">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <header class="single-post-header clearfix">
                        <div class="pull-right sermon-actions">
                            <a href="https://vimeo.com/19564018"
                                                                  class="play-video-link" data-placement="top"
                                                                  data-toggle="tooltip" data-original-title="Video"><i
                                        class="fa fa-video-camera"></i></a>
                            <a href="audio/Miaow-02-Hidden.mp3"
                                                                               class="play-audio-link"
                                                                               data-placement="top"
                                                                               data-toggle="tooltip"
                                                                               data-original-title="Audio"><i
                                        class="fa fa-headphones"></i></a> <a href="#" data-placement="top"
                                                                             data-toggle="tooltip"
                                                                             data-original-title="Download Audio"><i
                                        class="fa fa-download"></i></a> <a href="#" data-placement="top"
                                                                           data-toggle="tooltip"
                                                                           data-original-title="Download PDF"><i
                                        class="fa fa-book"></i></a></div>
                        <h2 class="post-title">Sermon Title</h2>
                    </header>
                    <article class="post-content">
                        <div class="video-container">
                            <iframe width="200" height="150" frameborder="0"
                                    src="http://player.vimeo.com/video/19564018?title=0&amp;byline=0&autoplay=0&amp;color=007F7B"></iframe>
                        </div>
                        <div class="audio-container">
                            <audio class="audio-player" src="http://www.filedropper.com/song_14" type="audio/mp3"
                                   controls></audio>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus.
                            Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam. Lorem
                            ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec
                            facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam.</p>
                        <div class="post-meta"><i class="fa fa-tags"></i> <a href="#">Faith</a>, <a href="#">Heart</a>,
                            <a href="#">Love</a>, <a href="#">Praise</a>, <a href="#">Sin</a>, <a href="#">Soul</a>
                        </div>
                    </article>


                    {{--                    @include('sermons.single.comments')--}}
                </div>
                <!-- Start Sidebar -->
                <div class="col-md-3 sidebar">
                    @include('partialPages.sermonSerice')
                    @include('partialPages.sermonSpeakers')
                </div>
            </div>
        </div>
    </div>
</div>