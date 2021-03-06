<!-- Start Content -->
<div class="main" role="main">
    <div id="content" class="content full">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <header class="single-post-header clearfix">
                        <h2 class="post-title">Our Location</h2>
                    </header>
                    <div class="post-content">
                        <div id="gmap">
                            <iframe src="https://maps.google.com/?ie=UTF8&amp;ll=40.717989,-74.002705&amp;spn=0.043846,0.077162&amp;t=m&amp;z=14&amp;output=embed"></iframe>
                        </div>
                        <div class="row">
                            <form method="post" id="contactform" name="contactform" class="contact-form" action="mail/contact.php">
                                <div class="col-md-6 margin-15">
                                    <div class="form-group">
                                        <input type="text" id="name" name="name"  class="form-control input-lg" placeholder="Name*">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" id="email" name="email"  class="form-control input-lg" placeholder="Email*">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" id="phone" name="phone" class="form-control input-lg" placeholder="Phone">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <textarea cols="6" rows="7" id="comments" name="comments" class="form-control input-lg" placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <input id="submit" name="submit" type="submit" class="btn btn-primary btn-lg pull-right" value="Submit now!">
                                </div>
                            </form>
                            <div class="clearfix"></div>
                            <div class="col-md-12">
                                <div id="message"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Start Sidebar -->
                <div class="col-md-3 sidebar">
                    <!-- Recent Posts Widget -->
                   @include('partialPages.posts')
                </div>
            </div>
        </div>
    </div>
</div>