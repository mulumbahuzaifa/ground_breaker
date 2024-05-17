<div class="vc-container">
    <div class="wpb-content-wrapper">
        <div class="vc-row-container vc-row-container--stretch-content-no-spaces">
            <div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid vc_row-no-padding">
                <div class="gb-index-header wpb_column vc_column_container vc_col-sm-12">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                            <div class="wpb_raw_code wpb_content_element wpb_raw_html vc_custom_1708601054970 video-background">
                                <div class="wpb_wrapper">
                                    <video poster="/wp-content/uploads/2024/02/Introvideo_Banner_Website_Groundbreaker_2024-02.jpg" playsinline autoplay="autoplay" loop="loop" muted="" preload="meta" width="300" height="150">
                                    <source src="/wp-content/uploads/2024/02/Introvideo_Banner_Website_Groundbreaker_2024-02.mp4" type="video/mp4" media="all and (min-width:992px)" />
                                    <source src="/wp-content/uploads/2024/02/Introvideo_Banner_Website_Groundbreaker_2024-02.mp4" type="video/mp4" media="all and (max-width:991px)" />
                                    <source src="/wp-content/uploads/2024/02/Introvideo_Banner_Website_Groundbreaker_2024-02.ogv" type="video/ogg" />
                                    <source src="/wp-content/uploads/2024/02/Introvideo_Banner_Website_Groundbreaker_2024-02.webm" type="video/webm" />
                                    </video>
                                    <div class="gb-index-header-headline">
                                        <h1>Foundation as a Service</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vc_row-full-width vc_clearfix"></div>
        </div>
        <div class="vc-row-container container parent--white-font">
            <div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid white-font wpb_animate_when_almost_visible wpb_fadeIn fadeIn vc_custom_1659621064138 vc_row-has-fill row-stretch">
                <div class="wpb_column vc_column_container vc_col-sm-2">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper"></div>
                    </div>
                </div>
                <div class="wpb_column vc_column_container vc_col-sm-8">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                            <div class="wpb_text_column wpb_content_element  post-formatting ">
                                <div class="wpb_wrapper">
                                    <p style="text-align: center;"><span style="font-weight: 400;">Do you want to make a difference but don’t know where to start?<br />
                                    No need to set up your own foundation: We as Groundbreaker give you direct impact– as simple and straightforward as possible, and without having to bear administrative costs.<br />
                                    We offer a free, nonprofit service and act as a matchmaker between you as a motivated donor and small local initiatives in the Global South. Groundbreaker fully supports your efforts while you are contributing to a fairer and more protected planet.</span></p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wpb_column vc_column_container vc_col-sm-2">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper"></div>
                    </div>
                </div>
            </div>
            <div class="vc_row-full-width vc_clearfix"></div>
        </div>
        <div class="vc-row-container container">
            <div class="vc_row wpb_row vc_row-fluid vc_custom_1627549168763">
                <div class="wpb_animate_when_almost_visible wpb_fadeIn fadeIn wpb_column vc_column_container vc_col-sm-12">
                    <div class="vc_column-inner vc_custom_1646397503797">
                        <div class="wpb_wrapper">
                            <h2 style="text-align: center" class="vc_custom_heading welcome-title">Latest news</h2>
                            <div id="blogposts-817166127c424939a" class="row lab-blog-posts cols-3 posts-layout-top">
                                @foreach ($blogs as $blog)
                                    <div class="blog-post-column">
                                        <div class="blog-post-entry post-9374 post type-post status-publish format-standard has-post-thumbnail hentry category-behind-the-scenes category-general-news tag-gender-equality tag-inspire-inclusion tag-international-womens-day">
                                            <div class="blog-post-image">
                                                <a href="#" target="" rel="bookmark">

                                                <span class="image-placeholder" style="padding-bottom:62.50000000%;background-color:#eeeeee"><style>.ball-scale-random > span { background-color:#ffffff }</style><span class="loader align-center" data-id="ball-scale-random"><span class="loader-row"><span class="loader-inner ball-scale-random"><span></span><span></span><span></span></span></span></span>
                                                <img class="img-responsive  img-1 lazyload" width="400" height="250" alt="International Women&#039;s Day 2024" title="International Women&#039;s Day 2024" loading="lazy" data-src="{{ asset('image/blogs') }}/{{ $blog->image }}" /></span>
                                                <span class="hover-display">
                                                                                        <span class="custom-hover-icon"></span>																	</span>
                                            </a>
                                            </div>
                                            <div class="blog-post-content-container">

                                                <div class="blog-post-date">
                                                    {{ $blog->created_at->format('F d, Y') }} </div>

                                                <h3 class="blog-post-title">
                                                    <a href="#" target="" rel="bookmark">{{ $blog->title }}</a>
                                                </h3>



                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>



                            <div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1645113042120 container-fixed">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <div class="vc_btn3-container vc_btn3-center"><a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-rounded vc_btn3-style-modern vc_btn3-color-peacoc" href="/news/" title="See more news">See More News</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="vc-row-container container"></div>
        <div class="vc-row-container container">
            <div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1704987117888 vc_row-has-fill row-stretch">
                <div class="wpb_animate_when_almost_visible wpb_fadeIn fadeIn wpb_column vc_column_container vc_col-sm-12">
                    <div class="vc_column-inner vc_custom_1678870655882">
                        <div class="wpb_wrapper">
                            <div class="vc_row wpb_row vc_inner vc_row-fluid container-fixed">
                                <div class="wpb_column vc_column_container vc_col-sm-5 vc_col-xs-12">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <div class="wpb_single_image wpb_content_element vc_align_center  vc_custom_1678894905022">

                                                <figure class="wpb_wrapper vc_figure">
                                                    <div class="vc_single_image-wrapper   vc_box_border_grey"><img decoding="async" loading="lazy" width="500" height="500" src="https://groundbreaker.org/wp-content/uploads/2023/03/talents-visual-500x500-1.jpg" class="vc_single_image-img attachment-full"
                                                            alt="Groundbreaker Talents Visual" title="Groundbreaker Talents Visual" srcset="https://groundbreaker.org/wp-content/uploads/2023/03/talents-visual-500x500-1.jpg 500w, https://groundbreaker.org/wp-content/uploads/2023/03/talents-visual-500x500-1-300x300.jpg 300w, https://groundbreaker.org/wp-content/uploads/2023/03/talents-visual-500x500-1-150x150.jpg 150w, https://groundbreaker.org/wp-content/uploads/2023/03/talents-visual-500x500-1-468x468.jpg 468w"
                                                            sizes="(max-width: 500px) 100vw, 500px" /></div>
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wpb_column vc_column_container vc_col-sm-7 vc_col-xs-12">
                                    <div class="vc_column-inner vc_custom_1678870885926">
                                        <div class="wpb_wrapper">
                                            <div class="wpb_single_image wpb_content_element vc_align_left">

                                                <figure class="wpb_wrapper vc_figure">
                                                    <div class="vc_single_image-wrapper   vc_box_border_grey"><img decoding="async" loading="lazy" class="vc_single_image-img " src="https://groundbreaker.org/wp-content/uploads/2023/03/Groundbreaker_Talents_Logo_RGB-440x85.png" width="440" height="85"
                                                            alt="Groundbreaker Talents Logo" title="Groundbreaker Talents Logo" loading="lazy" /></div>
                                                </figure>
                                            </div>

                                            <div class="wpb_text_column wpb_content_element  post-formatting ">
                                                <div class="wpb_wrapper">
                                                    <h3>Give the gift of opportunity!</h3>
                                                    <p>Fund full-time scholarships in Software Engineering for young female talents from financially challenged backgrounds in Uganda and engage your employees in our mentorship program.<br /> Implement
                                                        a progressive form of corporate giving that creates multiple win-win situations for everyone involved.</p>
                                                    <p>Let’s work together to give Ugandan students an opportunity for a better quality of life through knowledge and skill development!</p>

                                                </div>
                                            </div>
                                            <div class="vc_btn3-container vc_btn3-left"><a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-rounded vc_btn3-style-modern vc_btn3-color-purple" href="/talents/" title="">Find Out More Here</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vc_row-full-width vc_clearfix"></div>
        </div>
        <div class="vc-row-container vc-row-container--stretch-content"></div>
        <div class="vc-row-container vc-row-container--stretch-content">
            <div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid wpb_animate_when_almost_visible wpb_fadeInUp fadeInUp vc_custom_1683122953401">
                <div class="wpb_animate_when_almost_visible wpb_fadeInUp fadeInUp wpb_column vc_column_container vc_col-sm-12">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                            <div class="vc_row wpb_row vc_inner vc_row-fluid container-fixed">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <h2 style="color: #4f4d49;text-align: center" class="vc_custom_heading welcome-title vc_custom_1646917590874">Focus Areas</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="vc_row wpb_row vc_inner vc_row-fluid container-fixed">
                                <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-md-4">
                                    <div class="vc_column-inner vc_custom_1665653392356">
                                        <div class="wpb_wrapper">
                                            <div class="jag-himg-wrapper YjLSGdyXPB gb-hover-image-box gb-hover-image-box-spaces">
                                                <div class="jag-hoverimage-card jag-himg-s4 jag-title-default" onclick="">
                                                    <div class="jag-hoverimage-image2"></div>
                                                    <div class="jag-hoverimage-overlay"></div>
                                                    <div class="jag-hover-content-wrapper">
                                                        <div class="jag-hoverimage-content jag-align-left jag-align-middle">
                                                            <i class="jag-himg-icon fas fa-info-circle jag_icon_small" aria-hidden="true"></i>
                                                            <div class="jag-title-default-wrapper">
                                                                <div class="clearfix"></div>
                                                                <div class="jag-hoverimage-short-desc">
                                                                    We facilitate the new construction, renovation as well as the expansion of school infrastructure and the implementation of digitalization and edutec. Profound education requires an appropriate learning environment for students.</p>
                                                                    <p>
                                                                </div>
                                                                <div class="clearfix"></div>
                                                                <div class="jag-himg-readmore-wrapper">
                                                                    <a class="jag-himg-readmore jag-btn-small jag-btn-fill" href=/spaces/> More information </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-md-4">
                                    <div class="vc_column-inner vc_custom_1645112615913">
                                        <div class="wpb_wrapper">
                                            <div class="jag-himg-wrapper rAtQVfGpVH gb-hover-image-box gb-hover-image-box-talents">
                                                <div class="jag-hoverimage-card jag-himg-s4 jag-title-default" onclick="">
                                                    <div class="jag-hoverimage-overlay"></div>
                                                    <div class="jag-hover-content-wrapper">
                                                        <div class="jag-hoverimage-content jag-align-left jag-align-middle">
                                                            <i class="jag-himg-icon fas fa-info-circle jag_icon_small" aria-hidden="true"></i>
                                                            <div class="jag-title-default-wrapper">
                                                                <div class="clearfix"></div>
                                                                <div class="jag-hoverimage-short-desc">
                                                                    <span class="s1ppyq">Groundbreaker Talents is a full-time </span><span class="s1ppyq"><span lang="EN-US">residential </span>IT scholarship program tailored to provide </span>
                                                                    <span
                                                                        class="s1ppyq"><span lang="EN-US">women</span> from underprivileged communities </span><span class="s1ppyq"><span lang="EN-US">in Uganda </span>with the opportunity to exploit their full potential
                                                                        and </span><span class="s1ppyq"><span lang="EN-US">enter the national and international IT market</span>.</span>
                                                                        </p>
                                                                        <p>
                                                                </div>
                                                                <div class="clearfix"></div>
                                                                <div class="jag-himg-readmore-wrapper">
                                                                    <a class="jag-himg-readmore jag-btn-small jag-btn-fill" href=/talents/> More information </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-md-4">
                                    <div class="vc_column-inner vc_custom_1645112628859">
                                        <div class="wpb_wrapper">
                                            <div class="jag-himg-wrapper YwcLnwLSCO gb-hover-image-box gb-hover-image-box-disaster-relief">
                                                <div class="jag-hoverimage-card jag-himg-s4 jag-title-default" onclick="">
                                                    <div class="jag-hoverimage-overlay"></div>
                                                    <div class="jag-hover-content-wrapper">
                                                        <div class="jag-hoverimage-content jag-align-left jag-align-middle">
                                                            <i class="jag-himg-icon fas fa-info-circle jag_icon_small" aria-hidden="true"></i>
                                                            <div class="jag-title-default-wrapper">
                                                                <div class="clearfix"></div>
                                                                <div class="jag-hoverimage-short-desc">
                                                                    We support humanitarian relief efforts such as food distribution and social trauma recovery in crisis regions. Fortunately, through our broad network, we are able to act extremely quickly.</p>
                                                                    <p>
                                                                </div>
                                                                <div class="clearfix"></div>
                                                                <div class="jag-himg-readmore-wrapper">
                                                                    <a class="jag-himg-readmore jag-btn-small jag-btn-fill" href=/disaster-relief/> More information </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vc_row-full-width vc_clearfix"></div>
        </div>
        <div class="vc-row-container container">
            <div id="desktop" class="vc_row wpb_row vc_row-fluid vc_custom_1663245641493 vc_row-has-fill vc_row-o-equal-height vc_row-o-content-top vc_row-flex">
                <div class="wpb_animate_when_almost_visible wpb_fadeInUp fadeInUp wpb_column vc_column_container vc_col-sm-4 vc_hidden-xs">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                            <div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1644483153729 container-fixed">
                                <div class="wpb_column vc_column_container vc_col-sm-12 vc_hidden-xs">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <div class="wpb_single_image wpb_content_element vc_align_right">

                                                <figure class="wpb_wrapper vc_figure">
                                                    <div class="vc_single_image-wrapper   vc_box_border_grey"><img fetchpriority="high" decoding="async" width="360" height="194" src="https://groundbreaker.org/wp-content/uploads/2022/09/support-puzzle-graphic-01-1.svg" class="vc_single_image-img attachment-full"
                                                            alt="" title="support-puzzle-graphic-01" /></div>
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-md-12 vc_col-sm-offset-0 vc_col-xs-9">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <div class="wpb_text_column wpb_content_element  xs-text-left sm-text-center post-formatting ">
                                                <div class="wpb_wrapper">
                                                    <h3>Your support</h3>
                                                    <p><span style="font-weight: 400;">You want to have a direct impact and know exactly where your money is going. We will find the perfect project for you to support our local partners who know exactly what their communities need.</span></p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wpb_animate_when_almost_visible wpb_fadeInUp fadeInUp wpb_column vc_column_container vc_col-sm-4 vc_col-sm-offset-0 vc_col-xs-12 vc_hidden-xs">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                            <div class="vc_row wpb_row vc_inner vc_row-fluid container-fixed">
                                <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-md-offset-0 vc_col-sm-offset-0 vc_col-xs-offset-3 vc_col-xs-6 vc_hidden-xs">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <div class="wpb_single_image wpb_content_element vc_align_center  vc_custom_1665063868162">

                                                <figure class="wpb_wrapper vc_figure">
                                                    <div class="vc_single_image-wrapper   vc_box_border_grey"><img decoding="async" width="360" height="120" src="https://groundbreaker.org/wp-content/uploads/2022/10/Logo-Startseite-Schaubild-360x120-1.svg" class="vc_single_image-img attachment-full" alt=""
                                                            title="Logo-Startseite-Schaubild-360x120" /></div>
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="auto-type-element  vc_custom_1665053134984">
                                <h3 style="text-align:center; margin-top:0; color:#3fb8b0;">
                                    <div class="lab-autotype-text-entry" id="el_66127c424ddc3"></div>
                                </h3>
                            </div>

                            <script type="text/javascript">
                                jQuery(document).ready(function($) {

                                    jQuery("#el_66127c424ddc3").typed({
                                        "cursorChar": "|",
                                        "contentType": "html",
                                        "loop": true,
                                        "loopCount": 0,
                                        "typeSpeed": 50,
                                        "backSpeed": 20,
                                        "startDelay": 0,
                                        "backDelay": 1500,
                                        "showCursor": true,
                                        "strings": ["As your matchmaker"]
                                    });
                                });
                            </script>
                        </div>
                    </div>
                </div>
                <div class="wpb_animate_when_almost_visible wpb_fadeInUp fadeInUp wpb_column vc_column_container vc_col-sm-4 vc_hidden-xs">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                            <div class="vc_row wpb_row vc_inner vc_row-fluid container-fixed">
                                <div class="wpb_column vc_column_container vc_col-sm-12 vc_hidden-xs">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <div class="wpb_single_image wpb_content_element vc_align_right">

                                                <figure class="wpb_wrapper vc_figure">
                                                    <div class="vc_single_image-wrapper   vc_box_border_grey"><img decoding="async" width="360" height="194" src="https://groundbreaker.org/wp-content/uploads/2022/09/projects-puzzle-graphic-02-1.svg" class="vc_single_image-img attachment-full" alt="" title="projects-puzzle-graphic-02"
                                                        /></div>
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-md-12 vc_col-sm-offset-0 vc_col-xs-9">
                                    <div class="vc_column-inner vc_custom_1646320350610">
                                        <div class="wpb_wrapper">
                                            <div class="wpb_text_column wpb_content_element  xs-text-left sm-text-center post-formatting ">
                                                <div class="wpb_wrapper">
                                                    <h3>Holistic projects</h3>
                                                    <p>Our local partners are running effective and sustainable projects with a holistic approach. They design each project according to the needs of the respective community to achieve maximum impact.</p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="vc-row-container container">
            <div class="vc_row wpb_row vc_row-fluid vc_custom_1664454465825 vc_row-has-fill vc_row-o-equal-height vc_row-o-content-middle vc_row-flex">
                <div class="wpb_animate_when_almost_visible wpb_fadeInUp fadeInUp wpb_column vc_column_container vc_col-sm-12">
                    <div class="vc_column-inner vc_custom_1646321236485">
                        <div class="wpb_wrapper">
                            <div class="vc_row wpb_row vc_inner vc_row-fluid container-fixed">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <div class="vc_btn3-container vc_btn3-center"><a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-rounded vc_btn3-style-modern vc_btn3-color-peacoc" href="/what-we-do/" title="What we do">Learn More About What We Do</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="vc-row-container container">
            <div id="mobile" class="vc_row wpb_row vc_row-fluid vc_custom_1663245111843 vc_row-has-fill vc_row-o-equal-height vc_row-o-content-top vc_row-flex">
                <div class="wpb_animate_when_almost_visible wpb_fadeInUp fadeInUp wpb_column vc_column_container vc_col-sm-12 vc_hidden-lg vc_hidden-md vc_hidden-sm">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                            <div class="wpb_text_column wpb_content_element  vc_custom_1663245411970 xs-text-left sm-text-center post-formatting ">
                                <div class="wpb_wrapper">
                                    <h3 style="text-align: center;">Your support</h3>
                                    <p style="text-align: center;">You want to support educational infrastructure to enable learning in a proper environment or to support reforestation and revive an ecosystem.</p>

                                </div>
                            </div>

                            <div class="wpb_single_image wpb_content_element vc_align_center">

                                <figure class="wpb_wrapper vc_figure">
                                    <div class="vc_single_image-wrapper   vc_box_border_grey"><img loading="lazy" decoding="async" width="300" height="136" src="https://groundbreaker.org/wp-content/uploads/2022/09/support-projects-puzzle-graphic_mobile-01-e1663246054633-300x136.jpg" class="vc_single_image-img attachment-medium"
                                            alt="" title="support-projects-puzzle-graphic_mobile-01" srcset="https://groundbreaker.org/wp-content/uploads/2022/09/support-projects-puzzle-graphic_mobile-01-e1663246054633-300x136.jpg 300w, https://groundbreaker.org/wp-content/uploads/2022/09/support-projects-puzzle-graphic_mobile-01-e1663246054633.jpg 360w"
                                            sizes="(max-width: 300px) 100vw, 300px" /></div>
                                </figure>
                            </div>

                            <div class="wpb_single_image wpb_content_element vc_align_center">

                                <figure class="wpb_wrapper vc_figure">
                                    <div class="vc_single_image-wrapper   vc_box_border_grey"><img loading="lazy" decoding="async" width="300" height="48" src="https://groundbreaker.org/wp-content/uploads/2022/09/support-projects-puzzle-graphic_mobile-03-e1663246450480-300x48.jpg" class="vc_single_image-img attachment-medium"
                                            alt="" title="support-projects-puzzle-graphic_mobile-03" srcset="https://groundbreaker.org/wp-content/uploads/2022/09/support-projects-puzzle-graphic_mobile-03-e1663246450480-300x48.jpg 300w, https://groundbreaker.org/wp-content/uploads/2022/09/support-projects-puzzle-graphic_mobile-03-e1663246450480.jpg 360w"
                                            sizes="(max-width: 300px) 100vw, 300px" /></div>
                                </figure>
                            </div>

                            <div class="wpb_single_image wpb_content_element vc_align_center">

                                <figure class="wpb_wrapper vc_figure">
                                    <div class="vc_single_image-wrapper   vc_box_border_grey"><img loading="lazy" decoding="async" width="300" height="163" src="https://groundbreaker.org/wp-content/uploads/2022/09/support-projects-puzzle-graphic_mobile-02-300x163.jpg" class="vc_single_image-img attachment-medium"
                                            alt="" title="support-projects-puzzle-graphic_mobile-02" srcset="https://groundbreaker.org/wp-content/uploads/2022/09/support-projects-puzzle-graphic_mobile-02-300x163.jpg 300w, https://groundbreaker.org/wp-content/uploads/2022/09/support-projects-puzzle-graphic_mobile-02.jpg 360w"
                                            sizes="(max-width: 300px) 100vw, 300px" /></div>
                                </figure>
                            </div>

                            <div class="wpb_text_column wpb_content_element  vc_custom_1663245418394 xs-text-left sm-text-center post-formatting ">
                                <div class="wpb_wrapper">
                                    <h3 style="text-align: center;">Holistic projects</h3>
                                    <p style="text-align: center;">Our local partners are running effective and sustainable projects with a holistic approach. They design each project according to the needs of the respective community, making sure the individual support is
                                        as meaningful as possible.</p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="vc-row-container vc-row-container--stretch-content"></div>
        <div class="vc-row-container container">
            <div id="responsive-version" class="vc_row wpb_row vc_row-fluid vc_custom_1647357310460 vc_row-has-fill vc_row-o-equal-height vc_row-o-content-middle vc_row-flex">
                <div class="wpb_animate_when_almost_visible wpb_fadeInUp fadeInUp wpb_column vc_column_container vc_col-sm-12 vc_hidden-lg vc_hidden-md vc_hidden-sm vc_hidden-xs">
                    <div class="vc_column-inner vc_custom_1659629331292">
                        <div class="wpb_wrapper">
                            <div class="auto-type-element  vc_custom_1652971072110">
                                <h2 style="text-align:center;">
                                    <div class="lab-autotype-text-entry" id="el_66127c424f51d"></div>
                                </h2>
                            </div>

                            <script type="text/javascript">
                                jQuery(document).ready(function($) {

                                    jQuery("#el_66127c424f51d").typed({
                                        "cursorChar": "|",
                                        "contentType": "html",
                                        "loop": true,
                                        "loopCount": 0,
                                        "typeSpeed": 50,
                                        "backSpeed": 20,
                                        "startDelay": 0,
                                        "backDelay": 1500,
                                        "showCursor": true,
                                        "strings": ["You make a difference.", "We make it happen."]
                                    });
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="vc-row-container container"></div>
        <div class="vc-row-container container">
            <div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid wpb_animate_when_almost_visible wpb_bottom-to-top bottom-to-top vc_custom_1664463540774 vc_row-has-fill vc_row-o-equal-height vc_row-o-content-middle vc_row-flex row-stretch">
                <div class="wpb_animate_when_almost_visible wpb_fadeInUp fadeInUp wpb_column vc_column_container vc_col-sm-12">
                    <div class="vc_column-inner vc_custom_1644484621575">
                        <div class="wpb_wrapper">
                            <h2 style="color: #4f4d49;text-align: center" class="vc_custom_heading welcome-title vc_custom_1681386199217">Where your donation is going</h2>
                            <div class="vc_row wpb_row vc_inner vc_row-fluid container-fixed">
                                <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-md-offset-4 vc_col-md-4 vc_col-sm-offset-3">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <div class="wpb_raw_code wpb_content_element wpb_raw_html">
                                                <div class="wpb_wrapper">
                                                    <ul class="chart-skills chart-skills-1">
                                                        <li>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="vc_row wpb_row vc_inner vc_row-fluid container-fixed">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <div class="wpb_text_column wpb_content_element  post-formatting ">
                                                <div class="wpb_wrapper">
                                                    <p style="text-align: center;"><span style="color: #3fb8b0;"><strong>Projects</strong></span></p>
                                                    <p style="text-align: center;">Our own expenses are covered, so all your donations go directly to our project partner.</p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vc_row-full-width vc_clearfix"></div>
        </div>
        <div class="vc-row-container vc-row-container--stretch-content"></div>
        <div class="vc-row-container container"></div>
        <div class="vc-row-container container">
            <div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1645794748505 row-stretch">
                <div class="wpb_animate_when_almost_visible wpb_fadeInUp fadeInUp wpb_column vc_column_container vc_col-sm-12">
                    <div class="vc_column-inner vc_custom_1637252009586">
                        <div class="wpb_wrapper">
                            <h2 style="color: #4f4d49;text-align: center" class="vc_custom_heading welcome-title vc_custom_1681386180575">Project Overview</h2>
                            <div class="wpb_raw_code wpb_content_element wpb_raw_html">
                                <div class="wpb_wrapper">
                                    <div id="mapplic-id8257" data-mapdata="{&quot;mapwidth&quot;:&quot;1200&quot;,&quot;mapheight&quot;:&quot;760&quot;,&quot;action&quot;:&quot;tooltip&quot;,&quot;fillcolor&quot;:&quot;#1b778c&quot;,&quot;maxscale&quot;:&quot;4&quot;,&quot;basecolor&quot;:&quot;#1b778c&quot;,&quot;accentcolor&quot;:&quot;#ea7501&quot;,&quot;customcss&quot;:&quot;.mapplic-pin { position: absolute !important; }&quot;,&quot;fullscreen&quot;:false,&quot;hovertip&quot;:true,&quot;hovertipdesc&quot;:false,&quot;smartip&quot;:false,&quot;deeplinking&quot;:true,&quot;linknewtab&quot;:false,&quot;minimap&quot;:false,&quot;animations&quot;:false,&quot;zoom&quot;:true,&quot;zoombuttons&quot;:true,&quot;clearbutton&quot;:true,&quot;zoomoutclose&quot;:false,&quot;closezoomout&quot;:false,&quot;mousewheel&quot;:false,&quot;mapfill&quot;:false,&quot;sidebar&quot;:true,&quot;search&quot;:false,&quot;searchdescription&quot;:false,&quot;alphabetic&quot;:true,&quot;thumbholder&quot;:false,&quot;sidebartoggle&quot;:false,&quot;filtersopened&quot;:false,&quot;highlight&quot;:false,&quot;topLat&quot;:&quot;&quot;,&quot;leftLng&quot;:&quot;&quot;,&quot;bottomLat&quot;:&quot;&quot;,&quot;rightLng&quot;:&quot;&quot;,&quot;levels&quot;:[{&quot;id&quot;:&quot;world&quot;,&quot;title&quot;:&quot;World&quot;,&quot;map&quot;:&quot;\/\/n3z.2f0.myftpupload.com\/wp-content\/plugins\/mapplic\/maps\/world.svg&quot;,&quot;minimap&quot;:&quot;&quot;}],&quot;styles&quot;:[{&quot;base&quot;:{&quot;fill&quot;:&quot;#c1deb7&quot;},&quot;hover&quot;:{&quot;fill&quot;:&quot;#c1deb7&quot;},&quot;active&quot;:{&quot;fill&quot;:&quot;#c1deb7&quot;},&quot;class&quot;:&quot;environment&quot;},{&quot;base&quot;:{&quot;fill&quot;:&quot;#8dbbc5&quot;},&quot;hover&quot;:{&quot;fill&quot;:&quot;#1b778c&quot;},&quot;active&quot;:{&quot;fill&quot;:&quot;#1b778c&quot;},&quot;class&quot;:&quot;education&quot;},{&quot;base&quot;:{&quot;fill&quot;:&quot;rgba(164,74,108,0.7)&quot;},&quot;hover&quot;:{&quot;fill&quot;:&quot;#a44a6c&quot;},&quot;active&quot;:{&quot;fill&quot;:&quot;#a44a6c&quot;},&quot;class&quot;:&quot;Talents&quot;}],&quot;categories&quot;:[{&quot;title&quot;:&quot;Environment&quot;,&quot;id&quot;:&quot;environment&quot;,&quot;about&quot;:&quot;&quot;,&quot;icon&quot;:&quot;&quot;,&quot;style&quot;:&quot;&quot;,&quot;color&quot;:&quot;#00a578&quot;},{&quot;title&quot;:&quot;Education&quot;,&quot;id&quot;:&quot;education&quot;,&quot;about&quot;:&quot;&quot;,&quot;icon&quot;:&quot;&quot;,&quot;style&quot;:&quot;&quot;,&quot;color&quot;:&quot;#1b778c&quot;}],&quot;locations&quot;:[{&quot;id&quot;:&quot;za&quot;,&quot;title&quot;:&quot;South Africa, Cape Town&quot;,&quot;fill&quot;:&quot;#1b778c&quot;,&quot;action&quot;:&quot;default&quot;,&quot;x&quot;:&quot;0.5488&quot;,&quot;y&quot;:&quot;0.8386&quot;,&quot;level&quot;:&quot;world&quot;,&quot;color&quot;:&quot;#1b778c&quot;,&quot;pin&quot;:&quot;pin-marker pin-label&quot;,&quot;description&quot;:&quot;&lt;p&gt;Khayelitsha&lt;\/p&gt;&quot;,&quot;style&quot;:&quot;education&quot;,&quot;link&quot;:&quot;\/portfolio\/south-africa-cape-town\/&quot;},{&quot;id&quot;:&quot;mg&quot;,&quot;title&quot;:&quot;Madagascar, Ambalafeno&quot;,&quot;pin&quot;:&quot;pin-marker pin-label&quot;,&quot;style&quot;:&quot;education&quot;,&quot;action&quot;:&quot;default&quot;,&quot;x&quot;:&quot;0.6238&quot;,&quot;y&quot;:&quot;0.7830&quot;,&quot;level&quot;:&quot;world&quot;,&quot;color&quot;:&quot;#1b778c&quot;,&quot;link&quot;:&quot;\/portfolio\/madagascar-ambalafeno\/&quot;},{&quot;id&quot;:&quot;pe&quot;,&quot;title&quot;:&quot;Peru, Nuevo Chimbote&quot;,&quot;pin&quot;:&quot;pin-marker pin-label&quot;,&quot;style&quot;:&quot;education&quot;,&quot;action&quot;:&quot;default&quot;,&quot;x&quot;:&quot;0.2931&quot;,&quot;y&quot;:&quot;0.7398&quot;,&quot;level&quot;:&quot;world&quot;,&quot;color&quot;:&quot;#1b778c&quot;,&quot;link&quot;:&quot;\/portfolio\/peru-nuevo-chimbote\/&quot;},{&quot;id&quot;:&quot;ni&quot;,&quot;title&quot;:&quot;Nicaragua, Ca\u00f1o Los Mart\u00ednez&quot;,&quot;description&quot;:&quot;&lt;p&gt;Ca\u00f1o Los Mart\u00ednez&lt;\/p&gt;&quot;,&quot;pin&quot;:&quot;pin-marker pin-label&quot;,&quot;style&quot;:&quot;education&quot;,&quot;action&quot;:&quot;default&quot;,&quot;x&quot;:&quot;0.2707&quot;,&quot;y&quot;:&quot;0.6453&quot;,&quot;level&quot;:&quot;world&quot;,&quot;color&quot;:&quot;#1b778c&quot;,&quot;link&quot;:&quot;\/portfolio\/nicaragua-cano-los-martinez\/&quot;},{&quot;title&quot;:&quot;Niger, Niamey&quot;,&quot;id&quot;:&quot;ne&quot;,&quot;pin&quot;:&quot;pin-marker pin-label&quot;,&quot;fill&quot;:&quot;#1b778c&quot;,&quot;style&quot;:&quot;education&quot;,&quot;action&quot;:&quot;default&quot;,&quot;x&quot;:&quot;0.5075&quot;,&quot;y&quot;:&quot;0.6352&quot;,&quot;level&quot;:&quot;world&quot;,&quot;color&quot;:&quot;#1b778c&quot;,&quot;link&quot;:&quot;\/portfolio\/niger-niamey\/&quot;},{&quot;title&quot;:&quot;Dominican Republic, Jarabacoa&quot;,&quot;id&quot;:&quot;do&quot;,&quot;pin&quot;:&quot;pin-marker pin-label&quot;,&quot;style&quot;:&quot;education&quot;,&quot;action&quot;:&quot;default&quot;,&quot;x&quot;:&quot;0.3097&quot;,&quot;y&quot;:&quot;0.6207&quot;,&quot;level&quot;:&quot;world&quot;,&quot;color&quot;:&quot;#1b778c&quot;,&quot;link&quot;:&quot;\/portfolio\/dom-rep-jarabacoa\/&quot;},{&quot;title&quot;:&quot;Guatemala, Solol\u00e1&quot;,&quot;id&quot;:&quot;gt&quot;,&quot;style&quot;:&quot;education&quot;,&quot;action&quot;:&quot;default&quot;,&quot;x&quot;:&quot;0.2570&quot;,&quot;y&quot;:&quot;0.6358&quot;,&quot;level&quot;:&quot;world&quot;,&quot;color&quot;:&quot;#1b778c&quot;,&quot;pin&quot;:&quot;pin-marker pin-label&quot;,&quot;link&quot;:&quot;\/portfolio\/guatemala-solola\/&quot;},{&quot;title&quot;:&quot;Senegal, Soupa Serere&quot;,&quot;id&quot;:&quot;sn&quot;,&quot;pin&quot;:&quot;pin-marker pin-label&quot;,&quot;style&quot;:&quot;education&quot;,&quot;action&quot;:&quot;default&quot;,&quot;x&quot;:&quot;0.4603&quot;,&quot;y&quot;:&quot;0.6338&quot;,&quot;level&quot;:&quot;world&quot;,&quot;color&quot;:&quot;#1b778c&quot;,&quot;link&quot;:&quot;\/portfolio\/senegal-soupa-serere\/&quot;},{&quot;title&quot;:&quot;Guatemala, El Rosario&quot;,&quot;id&quot;:&quot;gt-2&quot;,&quot;pin&quot;:&quot;pin-marker pin-label&quot;,&quot;style&quot;:&quot;education&quot;,&quot;action&quot;:&quot;default&quot;,&quot;x&quot;:&quot;0.2615&quot;,&quot;y&quot;:&quot;0.6321&quot;,&quot;level&quot;:&quot;world&quot;,&quot;color&quot;:&quot;#1b778c&quot;,&quot;link&quot;:&quot;\/portfolio\/guatemala-los-encuentros\/&quot;},{&quot;title&quot;:&quot;Sierra Leone, Barbara&quot;,&quot;id&quot;:&quot;sl&quot;,&quot;pin&quot;:&quot;pin-marker pin-label&quot;,&quot;style&quot;:&quot;education&quot;,&quot;action&quot;:&quot;default&quot;,&quot;x&quot;:&quot;0.4680&quot;,&quot;y&quot;:&quot;0.6579&quot;,&quot;level&quot;:&quot;world&quot;,&quot;color&quot;:&quot;#1b778c&quot;,&quot;link&quot;:&quot;https:\/\/groundbreaker.org\/portfolio\/sierra-leone_barbara\/&quot;},{&quot;title&quot;:&quot;Burkina Faso, Kalghin&quot;,&quot;id&quot;:&quot;bf&quot;,&quot;pin&quot;:&quot;pin-marker pin-label&quot;,&quot;style&quot;:&quot;education&quot;,&quot;action&quot;:&quot;default&quot;,&quot;x&quot;:&quot;0.4963&quot;,&quot;y&quot;:&quot;0.6421&quot;,&quot;level&quot;:&quot;world&quot;,&quot;color&quot;:&quot;#1b778c&quot;,&quot;link&quot;:&quot;\/portfolio\/burkina-faso-kalghin\/&quot;},{&quot;title&quot;:&quot;Ghana, Tetrefu&quot;,&quot;id&quot;:&quot;gh&quot;,&quot;pin&quot;:&quot;pin-marker pin-label&quot;,&quot;style&quot;:&quot;education&quot;,&quot;action&quot;:&quot;default&quot;,&quot;x&quot;:&quot;0.4987&quot;,&quot;y&quot;:&quot;0.6636&quot;,&quot;level&quot;:&quot;world&quot;,&quot;color&quot;:&quot;#1b778c&quot;,&quot;link&quot;:&quot;\/portfolio\/ghana-tetrefu\/&quot;},{&quot;title&quot;:&quot;DR Congo, Kinshasa&quot;,&quot;id&quot;:&quot;cd&quot;,&quot;pin&quot;:&quot;pin-marker pin-label&quot;,&quot;style&quot;:&quot;education&quot;,&quot;action&quot;:&quot;default&quot;,&quot;x&quot;:&quot;0.5423&quot;,&quot;y&quot;:&quot;0.7103&quot;,&quot;level&quot;:&quot;world&quot;,&quot;color&quot;:&quot;#1b778c&quot;,&quot;link&quot;:&quot;\/portfolio\/dr-congo-kinshasa\/&quot;},{&quot;title&quot;:&quot;Angola, L\u00e9pi Region&quot;,&quot;id&quot;:&quot;ao&quot;,&quot;pin&quot;:&quot;pin-marker pin-label&quot;,&quot;style&quot;:&quot;education&quot;,&quot;action&quot;:&quot;default&quot;,&quot;x&quot;:&quot;0.5416&quot;,&quot;y&quot;:&quot;0.7464&quot;,&quot;level&quot;:&quot;world&quot;,&quot;color&quot;:&quot;#1b778c&quot;,&quot;link&quot;:&quot;\/portfolio\/angola-lepi&quot;,&quot;category&quot;:&quot;education&quot;},{&quot;title&quot;:&quot;Namibia, Baumgartsbrunn&quot;,&quot;id&quot;:&quot;na&quot;,&quot;pin&quot;:&quot;pin-marker pin-label&quot;,&quot;style&quot;:&quot;education&quot;,&quot;action&quot;:&quot;default&quot;,&quot;x&quot;:&quot;0.5453&quot;,&quot;y&quot;:&quot;0.7889&quot;,&quot;level&quot;:&quot;world&quot;,&quot;color&quot;:&quot;#1b778c&quot;,&quot;link&quot;:&quot;\/portfolio\/namibia-baumgartsbrunn\/&quot;},{&quot;title&quot;:&quot;Tanzania, Loongung&quot;,&quot;id&quot;:&quot;tz&quot;,&quot;pin&quot;:&quot;pin-marker pin-label&quot;,&quot;style&quot;:&quot;education&quot;,&quot;action&quot;:&quot;default&quot;,&quot;x&quot;:&quot;0.5964&quot;,&quot;y&quot;:&quot;0.7082&quot;,&quot;level&quot;:&quot;world&quot;,&quot;color&quot;:&quot;#1b778c&quot;,&quot;link&quot;:&quot;\/portfolio\/tanzania-loongung\/&quot;},{&quot;title&quot;:&quot;Tanzania, Lemooti&quot;,&quot;id&quot;:&quot;tzle&quot;,&quot;pin&quot;:&quot;pin-marker pin-label&quot;,&quot;style&quot;:&quot;education&quot;,&quot;action&quot;:&quot;default&quot;,&quot;x&quot;:&quot;0.5984&quot;,&quot;y&quot;:&quot;0.7135&quot;,&quot;level&quot;:&quot;world&quot;,&quot;color&quot;:&quot;#1b778c&quot;,&quot;link&quot;:&quot;\/portfolio\/tanzania-lemooti-village\/&quot;},{&quot;title&quot;:&quot;Tanzania, Bukoba&quot;,&quot;id&quot;:&quot;tzbu&quot;,&quot;pin&quot;:&quot;pin-marker pin-label&quot;,&quot;style&quot;:&quot;education&quot;,&quot;action&quot;:&quot;default&quot;,&quot;x&quot;:&quot;0.5858&quot;,&quot;y&quot;:&quot;0.7103&quot;,&quot;level&quot;:&quot;world&quot;,&quot;color&quot;:&quot;#1b778c&quot;,&quot;link&quot;:&quot;\/portfolio\/tanzania-bukoba\/&quot;},{&quot;title&quot;:&quot;Yemen, Dhamar&quot;,&quot;id&quot;:&quot;ye&quot;,&quot;pin&quot;:&quot;pin-marker pin-label&quot;,&quot;style&quot;:&quot;education&quot;,&quot;action&quot;:&quot;default&quot;,&quot;x&quot;:&quot;0.6181&quot;,&quot;y&quot;:&quot;0.6326&quot;,&quot;level&quot;:&quot;world&quot;,&quot;color&quot;:&quot;#1b778c&quot;,&quot;link&quot;:&quot;\/portfolio\/yemen-dhamar\/&quot;},{&quot;title&quot;:&quot;Lebanon, Barr Elias&quot;,&quot;id&quot;:&quot;lb&quot;,&quot;pin&quot;:&quot;pin-marker pin-label&quot;,&quot;style&quot;:&quot;education&quot;,&quot;action&quot;:&quot;default&quot;,&quot;x&quot;:&quot;0.5962&quot;,&quot;y&quot;:&quot;0.5425&quot;,&quot;level&quot;:&quot;world&quot;,&quot;color&quot;:&quot;#1b778c&quot;,&quot;link&quot;:&quot;\/portfolio\/lebanon-barr-elias\/&quot;},{&quot;title&quot;:&quot;India, Lucknow&quot;,&quot;id&quot;:&quot;in&quot;,&quot;pin&quot;:&quot;pin-marker pin-label&quot;,&quot;style&quot;:&quot;education&quot;,&quot;action&quot;:&quot;default&quot;,&quot;x&quot;:&quot;0.7096&quot;,&quot;y&quot;:&quot;0.5799&quot;,&quot;level&quot;:&quot;world&quot;,&quot;color&quot;:&quot;#1b778c&quot;,&quot;link&quot;:&quot;\/portfolio\/india-lucknow\/&quot;},{&quot;title&quot;:&quot;Nepal, Rajipur Chaumala&quot;,&quot;id&quot;:&quot;np&quot;,&quot;pin&quot;:&quot;pin-marker pin-label&quot;,&quot;style&quot;:&quot;education&quot;,&quot;action&quot;:&quot;default&quot;,&quot;x&quot;:&quot;0.7133&quot;,&quot;y&quot;:&quot;0.5692&quot;,&quot;level&quot;:&quot;world&quot;,&quot;color&quot;:&quot;#1b778c&quot;,&quot;link&quot;:&quot;\/portfolio\/nepal-rajipur-chaumala\/&quot;},{&quot;title&quot;:&quot;Myanmar, Ata&quot;,&quot;id&quot;:&quot;mm&quot;,&quot;pin&quot;:&quot;pin-marker pin-label&quot;,&quot;style&quot;:&quot;education&quot;,&quot;action&quot;:&quot;default&quot;,&quot;x&quot;:&quot;0.7512&quot;,&quot;y&quot;:&quot;0.6250&quot;,&quot;level&quot;:&quot;world&quot;,&quot;color&quot;:&quot;#1b778c&quot;,&quot;link&quot;:&quot;\/portfolio\/myanmar-ata\/&quot;},{&quot;title&quot;:&quot;Laos, Dong Nah Kham&quot;,&quot;id&quot;:&quot;la&quot;,&quot;pin&quot;:&quot;pin-marker pin-label&quot;,&quot;style&quot;:&quot;education&quot;,&quot;action&quot;:&quot;default&quot;,&quot;x&quot;:&quot;0.7772&quot;,&quot;y&quot;:&quot;0.6259&quot;,&quot;level&quot;:&quot;world&quot;,&quot;color&quot;:&quot;#1b778c&quot;,&quot;link&quot;:&quot;\/portfolio\/laos-dong-na-kham\/&quot;},{&quot;title&quot;:&quot;Cambodia, Prei Changha&quot;,&quot;id&quot;:&quot;kh&quot;,&quot;pin&quot;:&quot;pin-marker pin-label&quot;,&quot;style&quot;:&quot;education&quot;,&quot;action&quot;:&quot;default&quot;,&quot;x&quot;:&quot;0.7711&quot;,&quot;y&quot;:&quot;0.6374&quot;,&quot;level&quot;:&quot;world&quot;,&quot;color&quot;:&quot;#1b778c&quot;,&quot;link&quot;:&quot;\/portfolio\/cambodia-prei-changha\/&quot;},{&quot;title&quot;:&quot;Indonesia, Sumba Barat Daya&quot;,&quot;id&quot;:&quot;id&quot;,&quot;pin&quot;:&quot;pin-marker pin-label&quot;,&quot;style&quot;:&quot;education&quot;,&quot;action&quot;:&quot;default&quot;,&quot;x&quot;:&quot;0.8120&quot;,&quot;y&quot;:&quot;0.7344&quot;,&quot;level&quot;:&quot;world&quot;,&quot;color&quot;:&quot;#1b778c&quot;,&quot;link&quot;:&quot;\/portfolio\/indonesia_suma-barat-daya\/&quot;},{&quot;title&quot;:&quot;Kenya, Mombasa&quot;,&quot;id&quot;:&quot;ke&quot;,&quot;pin&quot;:&quot;pin-marker pin-label&quot;,&quot;link&quot;:&quot;\/portfolio\/kenya_mombasa\/&quot;,&quot;style&quot;:&quot;education&quot;,&quot;action&quot;:&quot;default&quot;,&quot;x&quot;:&quot;0.6050&quot;,&quot;y&quot;:&quot;0.7093&quot;,&quot;level&quot;:&quot;world&quot;,&quot;color&quot;:&quot;#1b778c&quot;},{&quot;title&quot;:&quot;Mexico, Chiapas&quot;,&quot;id&quot;:&quot;mx&quot;,&quot;pin&quot;:&quot;pin-marker pin-label&quot;,&quot;style&quot;:&quot;education&quot;,&quot;action&quot;:&quot;default&quot;,&quot;x&quot;:&quot;0.2250&quot;,&quot;y&quot;:&quot;0.5974&quot;,&quot;level&quot;:&quot;world&quot;,&quot;color&quot;:&quot;#1b778c&quot;,&quot;category&quot;:&quot;education&quot;,&quot;link&quot;:&quot;\/portfolio\/mexico-chiapas\/&quot;},{&quot;title&quot;:&quot;Haiti, Lac Azuei&quot;,&quot;id&quot;:&quot;ht&quot;,&quot;pin&quot;:&quot;pin-marker pin-label&quot;,&quot;link&quot;:&quot;\/portfolio\/haiti_lac-azuei\/&quot;,&quot;style&quot;:&quot;education&quot;,&quot;action&quot;:&quot;default&quot;,&quot;x&quot;:&quot;0.3061&quot;,&quot;y&quot;:&quot;0.6181&quot;,&quot;level&quot;:&quot;world&quot;,&quot;color&quot;:&quot;#1b778c&quot;},{&quot;title&quot;:&quot;Guatemala, Solal\u00e1 Phase 2&quot;,&quot;id&quot;:&quot;gt&quot;,&quot;pin&quot;:&quot;pin-marker pin-label&quot;,&quot;link&quot;:&quot;\/portfolio\/guatemala_solola-phase-2\/&quot;,&quot;action&quot;:&quot;default&quot;,&quot;x&quot;:&quot;0.2660&quot;,&quot;y&quot;:&quot;0.6370&quot;,&quot;level&quot;:&quot;world&quot;},{&quot;title&quot;:&quot;Honduras, Santa Fe&quot;,&quot;id&quot;:&quot;hn&quot;,&quot;pin&quot;:&quot;pin-marker pin-label&quot;,&quot;link&quot;:&quot;\/portfolio\/honduras_santa-fe\/&quot;,&quot;style&quot;:&quot;education&quot;,&quot;action&quot;:&quot;default&quot;,&quot;x&quot;:&quot;0.2647&quot;,&quot;y&quot;:&quot;0.6376&quot;,&quot;level&quot;:&quot;world&quot;,&quot;color&quot;:&quot;#1b778c&quot;},{&quot;title&quot;:&quot;Cambodia, Damnak Thmey Village&quot;,&quot;id&quot;:&quot;Ca&quot;,&quot;pin&quot;:&quot;pin-marker pin-label&quot;,&quot;link&quot;:&quot;\/portfolio\/cambodia_damnak-thmey-village\/&quot;,&quot;style&quot;:&quot;education&quot;,&quot;action&quot;:&quot;default&quot;,&quot;x&quot;:&quot;0.7749&quot;,&quot;y&quot;:&quot;0.6470&quot;,&quot;level&quot;:&quot;world&quot;,&quot;color&quot;:&quot;#1b778c&quot;},{&quot;title&quot;:&quot;Tanzania, Upper Kitete Village&quot;,&quot;id&quot;:&quot;Tzup&quot;,&quot;pin&quot;:&quot;pin-marker pin-label&quot;,&quot;link&quot;:&quot;\/portfolio\/upper-kitete-village\/&quot;,&quot;style&quot;:&quot;education&quot;,&quot;action&quot;:&quot;default&quot;,&quot;x&quot;:&quot;0.5859&quot;,&quot;y&quot;:&quot;0.7006&quot;,&quot;level&quot;:&quot;world&quot;,&quot;color&quot;:&quot;#1b778c&quot;},{&quot;title&quot;:&quot;Malawi, Zeza&quot;,&quot;id&quot;:&quot;mz&quot;,&quot;pin&quot;:&quot;pin-marker pin-label&quot;,&quot;link&quot;:&quot;\/portfolio\/malawi_zeza\/&quot;,&quot;style&quot;:&quot;education&quot;,&quot;action&quot;:&quot;default&quot;,&quot;x&quot;:&quot;0.5963&quot;,&quot;y&quot;:&quot;0.7481&quot;,&quot;level&quot;:&quot;world&quot;,&quot;color&quot;:&quot;#1b778c&quot;},{&quot;title&quot;:&quot;Papua New Guinea, Kokoda College&quot;,&quot;id&quot;:&quot;pg&quot;,&quot;pin&quot;:&quot;pin-marker pin-label&quot;,&quot;link&quot;:&quot;\/portfolio\/papua-new-guinea-kokoda-college\/&quot;,&quot;category&quot;:&quot;education&quot;,&quot;action&quot;:&quot;default&quot;,&quot;x&quot;:&quot;0.8854&quot;,&quot;y&quot;:&quot;0.7304&quot;,&quot;level&quot;:&quot;world&quot;,&quot;color&quot;:&quot;#1b778c&quot;,&quot;style&quot;:&quot;education&quot;},{&quot;title&quot;:&quot;Thailand, Ban Tha Ta Fang&quot;,&quot;id&quot;:&quot;th&quot;,&quot;pin&quot;:&quot;pin-marker pin-label&quot;,&quot;link&quot;:&quot;https:\/\/groundbreaker.org\/portfolio\/thailand_ban-tha-ta-fang\/&quot;,&quot;style&quot;:&quot;education&quot;,&quot;action&quot;:&quot;default&quot;,&quot;x&quot;:&quot;0.7647&quot;,&quot;y&quot;:&quot;0.6256&quot;,&quot;level&quot;:&quot;world&quot;,&quot;color&quot;:&quot;#1b778c&quot;},{&quot;title&quot;:&quot;Dominican Republic, Cabarete&quot;,&quot;id&quot;:&quot;dr-c&quot;,&quot;pin&quot;:&quot;pin-marker pin-label&quot;,&quot;link&quot;:&quot;\/portfolio\/dominican-republic-cabarete\/&quot;,&quot;style&quot;:&quot;education&quot;,&quot;action&quot;:&quot;default&quot;,&quot;x&quot;:&quot;0.3113&quot;,&quot;y&quot;:&quot;0.6170&quot;,&quot;level&quot;:&quot;world&quot;,&quot;color&quot;:&quot;#1b778c&quot;},{&quot;title&quot;:&quot;Indonesia, Reda Pada Village&quot;,&quot;id&quot;:&quot;id-2&quot;,&quot;pin&quot;:&quot;pin-marker pin-label&quot;,&quot;link&quot;:&quot;\/portfolio\/indonesia-reda-pade-village\/&quot;,&quot;style&quot;:&quot;education&quot;,&quot;action&quot;:&quot;default&quot;,&quot;x&quot;:&quot;0.8114&quot;,&quot;y&quot;:&quot;0.7357&quot;,&quot;level&quot;:&quot;world&quot;,&quot;color&quot;:&quot;#1b778c&quot;},{&quot;title&quot;:&quot;Tanzania, Ngongongare Village&quot;,&quot;id&quot;:&quot;tzng&quot;,&quot;pin&quot;:&quot;pin-marker pin-label&quot;,&quot;link&quot;:&quot;\/portfolio\/tanzania-ngongongare-village\/&quot;,&quot;style&quot;:&quot;education&quot;,&quot;action&quot;:&quot;default&quot;,&quot;x&quot;:&quot;0.6002&quot;,&quot;y&quot;:&quot;0.7099&quot;,&quot;level&quot;:&quot;world&quot;,&quot;color&quot;:&quot;#1b778c&quot;},{&quot;title&quot;:&quot;Uganda, Groundbreaker Talents&quot;,&quot;id&quot;:&quot;ug&quot;,&quot;pin&quot;:&quot;pin-marker pin-label&quot;,&quot;fill&quot;:&quot;rgba(163,89,116,0.8)&quot;,&quot;action&quot;:&quot;default&quot;,&quot;x&quot;:&quot;0.5882&quot;,&quot;y&quot;:&quot;0.6883&quot;,&quot;level&quot;:&quot;world&quot;,&quot;color&quot;:&quot;rgba(163,89,116,0.8)&quot;,&quot;style&quot;:&quot;Talents&quot;,&quot;link&quot;:&quot;https:\/\/groundbreaker.org\/talents\/&quot;},{&quot;title&quot;:&quot;Uganda, Kampala&quot;,&quot;id&quot;:&quot;ug-2&quot;,&quot;pin&quot;:&quot;pin-marker pin-label&quot;,&quot;fill&quot;:&quot;#1b778c&quot;,&quot;style&quot;:&quot;education&quot;,&quot;action&quot;:&quot;default&quot;,&quot;x&quot;:&quot;0.5857&quot;,&quot;y&quot;:&quot;0.6909&quot;,&quot;level&quot;:&quot;world&quot;,&quot;color&quot;:&quot;#1b778c&quot;,&quot;link&quot;:&quot;https:\/\/groundbreaker.org\/portfolio\/uganda_kampala\/&quot;}]}"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vc_row-full-width vc_clearfix"></div>
        </div>
        <div class="vc-row-container vc-row-container--stretch-content">
            <div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid wpb_animate_when_almost_visible wpb_fadeInUp fadeInUp vc_custom_1683123479899 vc_row-o-content-middle vc_row-flex">
                <div class="mittig wpb_animate_when_almost_visible wpb_fadeInUp fadeInUp wpb_column vc_column_container vc_col-sm-12">
                    <div class="vc_column-inner vc_custom_1659627806549">
                        <div class="wpb_wrapper">
                            <div class="wpb_raw_code wpb_content_element wpb_raw_html">
                                <div class="wpb_wrapper">


                                    <style type="text/css">
                                        .slider-info-5855.bafg-slider-info .bafg-slider-title {
                                            font-size: 22px;
                                        }

                                        .slider-info-5855.bafg-slider-info .bafg-slider-description {}

                                        .slider-info-5855.bafg-slider-info .bafg_slider_readmore_button {
                                            text-align: center;
                                        }

                                        .slider-info-5855.bafg-slider-info .bafg_slider_readmore_button:hover {}
                                    </style>

                                    <div class="bafg-twentytwenty-container slider-5855  " bafg-orientation="horizontal" bafg-default-offset="0.7" bafg-before-label="Before" bafg-after-label="After" bafg-overlay="1" bafg-move-slider-on-hover="" bafg-click-to-move="">

                                        <img class="skip-lazy" data-skip-lazy src="{{ asset('wp-content/uploads/2022/08/bukoba-startseite-vorher.jpg') }}" alt="School Before">
                                        <img class="skip-lazy" data-skip-lazy src="{{ asset('wp-content/uploads/2022/08/bukoba-startseite-nachher.jpg') }}" alt="School after">

                                    </div>

                                    <div class="bafg-slider-info-wraper">
                                        <div style="" class="slider-info-5855 bafg-slider-info">
                                        </div>
                                    </div>

                                    <style type="text/css">
                                    </style>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="vc_row-full-width vc_clearfix"></div> --}}
        </div>
        <div class="vc-row-container container">
            <div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1683123543813 vc_row-o-equal-height vc_row-o-content-middle vc_row-flex row-stretch">
                <div class="wpb_column vc_column_container vc_col-sm-12">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                            <div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1683123637985 container-fixed">
                                <div class="wpb_column vc_column_container vc_col-sm-2">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper"></div>
                                    </div>
                                </div>
                                <div class="wpb_column vc_column_container vc_col-sm-8">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <h2 style="text-align: center" class="vc_custom_heading vc_custom_1665054129578">Let's support the UN's Sustainable Development Goals together</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="wpb_column vc_column_container vc_col-sm-2">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vc_row-full-width vc_clearfix"></div>
        </div>
        <div class="vc-row-container vc-row-container--stretch-content-no-spaces parent--gb-sdg-img-container">
            <div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid gb-sdg-img-container vc_custom_1683123632135 vc_row-no-padding vc_row-o-equal-height vc_row-o-content-middle vc_row-flex">
                <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-offset-1 vc_col-lg-4 vc_col-md-offset-1 vc_col-md-10 vc_col-xs-12">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                            <div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1665054445952">
                                <div class="wpb_column vc_column_container vc_col-sm-4 vc_col-xs-4">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <div class="wpb_single_image wpb_content_element vc_align_left   gb-sdg-img">

                                                <figure class="wpb_wrapper vc_figure">
                                                    <div class="vc_single_image-wrapper   vc_box_border_grey"><img decoding="async" loading="lazy" width="300" height="300" src="https://groundbreaker.org/wp-content/uploads/2021/07/SDG_Icons_Inverted_Transparent_WEB-01-300x300.png" class="vc_single_image-img attachment-medium"
                                                            alt="" title="SDG_Icons_Inverted_Transparent_WEB-01" srcset="https://groundbreaker.org/wp-content/uploads/2021/07/SDG_Icons_Inverted_Transparent_WEB-01-300x300.png 300w, https://groundbreaker.org/wp-content/uploads/2021/07/SDG_Icons_Inverted_Transparent_WEB-01-1024x1024.png 1024w, https://groundbreaker.org/wp-content/uploads/2021/07/SDG_Icons_Inverted_Transparent_WEB-01-150x150.png 150w, https://groundbreaker.org/wp-content/uploads/2021/07/SDG_Icons_Inverted_Transparent_WEB-01-768x768.png 768w, https://groundbreaker.org/wp-content/uploads/2021/07/SDG_Icons_Inverted_Transparent_WEB-01-468x468.png 468w, https://groundbreaker.org/wp-content/uploads/2021/07/SDG_Icons_Inverted_Transparent_WEB-01-1116x1116.png 1116w, https://groundbreaker.org/wp-content/uploads/2021/07/SDG_Icons_Inverted_Transparent_WEB-01-806x806.png 806w, https://groundbreaker.org/wp-content/uploads/2021/07/SDG_Icons_Inverted_Transparent_WEB-01-558x558.png 558w, https://groundbreaker.org/wp-content/uploads/2021/07/SDG_Icons_Inverted_Transparent_WEB-01-655x655.png 655w, https://groundbreaker.org/wp-content/uploads/2021/07/SDG_Icons_Inverted_Transparent_WEB-01.png 1500w"
                                                            sizes="(max-width: 300px) 100vw, 300px" /></div>
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wpb_column vc_column_container vc_col-sm-4 vc_col-xs-4">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <div class="wpb_single_image wpb_content_element vc_align_left   gb-sdg-img">

                                                <figure class="wpb_wrapper vc_figure">
                                                    <div class="vc_single_image-wrapper   vc_box_border_grey"><img decoding="async" loading="lazy" width="300" height="300" src="https://groundbreaker.org/wp-content/uploads/2022/09/SDG_Icons_Inverted_Transparent_WEB-02-300x300.png" class="vc_single_image-img attachment-medium"
                                                            alt="" title="SDG_Icons_Inverted_Transparent_WEB-02" srcset="https://groundbreaker.org/wp-content/uploads/2022/09/SDG_Icons_Inverted_Transparent_WEB-02-300x300.png 300w, https://groundbreaker.org/wp-content/uploads/2022/09/SDG_Icons_Inverted_Transparent_WEB-02-1024x1024.png 1024w, https://groundbreaker.org/wp-content/uploads/2022/09/SDG_Icons_Inverted_Transparent_WEB-02-150x150.png 150w, https://groundbreaker.org/wp-content/uploads/2022/09/SDG_Icons_Inverted_Transparent_WEB-02-768x768.png 768w, https://groundbreaker.org/wp-content/uploads/2022/09/SDG_Icons_Inverted_Transparent_WEB-02-468x468.png 468w, https://groundbreaker.org/wp-content/uploads/2022/09/SDG_Icons_Inverted_Transparent_WEB-02-1116x1116.png 1116w, https://groundbreaker.org/wp-content/uploads/2022/09/SDG_Icons_Inverted_Transparent_WEB-02-806x806.png 806w, https://groundbreaker.org/wp-content/uploads/2022/09/SDG_Icons_Inverted_Transparent_WEB-02-558x558.png 558w, https://groundbreaker.org/wp-content/uploads/2022/09/SDG_Icons_Inverted_Transparent_WEB-02-655x655.png 655w, https://groundbreaker.org/wp-content/uploads/2022/09/SDG_Icons_Inverted_Transparent_WEB-02.png 1500w"
                                                            sizes="(max-width: 300px) 100vw, 300px" /></div>
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wpb_column vc_column_container vc_col-sm-4 vc_col-xs-4">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <div class="wpb_single_image wpb_content_element vc_align_left">

                                                <figure class="wpb_wrapper vc_figure">
                                                    <div class="vc_single_image-wrapper   vc_box_border_grey"><img loading="lazy" decoding="async" width="300" height="300" src="https://groundbreaker.org/wp-content/uploads/2022/09/SDG_Icons_Inverted_Transparent_WEB-03-300x300.png" class="vc_single_image-img attachment-medium"
                                                            alt="" title="SDG_Icons_Inverted_Transparent_WEB-03" srcset="https://groundbreaker.org/wp-content/uploads/2022/09/SDG_Icons_Inverted_Transparent_WEB-03-300x300.png 300w, https://groundbreaker.org/wp-content/uploads/2022/09/SDG_Icons_Inverted_Transparent_WEB-03-1024x1024.png 1024w, https://groundbreaker.org/wp-content/uploads/2022/09/SDG_Icons_Inverted_Transparent_WEB-03-150x150.png 150w, https://groundbreaker.org/wp-content/uploads/2022/09/SDG_Icons_Inverted_Transparent_WEB-03-768x768.png 768w, https://groundbreaker.org/wp-content/uploads/2022/09/SDG_Icons_Inverted_Transparent_WEB-03-468x468.png 468w, https://groundbreaker.org/wp-content/uploads/2022/09/SDG_Icons_Inverted_Transparent_WEB-03-1116x1116.png 1116w, https://groundbreaker.org/wp-content/uploads/2022/09/SDG_Icons_Inverted_Transparent_WEB-03-806x806.png 806w, https://groundbreaker.org/wp-content/uploads/2022/09/SDG_Icons_Inverted_Transparent_WEB-03-558x558.png 558w, https://groundbreaker.org/wp-content/uploads/2022/09/SDG_Icons_Inverted_Transparent_WEB-03-655x655.png 655w, https://groundbreaker.org/wp-content/uploads/2022/09/SDG_Icons_Inverted_Transparent_WEB-03.png 1500w"
                                                            sizes="(max-width: 300px) 100vw, 300px" /></div>
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-2 vc_col-md-3 vc_col-xs-12 vc_col-has-fill">
                    <div class="vc_column-inner vc_custom_1681386052902">
                        <div class="wpb_wrapper">
                            <div class="wpb_single_image wpb_content_element vc_align_center  vc_custom_1681386086433  active">

                                <figure class="wpb_wrapper vc_figure">
                                    <div class="vc_single_image-wrapper   vc_box_border_grey"><img loading="lazy" decoding="async" width="300" height="300" src="https://groundbreaker.org/wp-content/uploads/2021/07/SDG_Icons_Inverted_Transparent_WEB-04-300x300.png" class="vc_single_image-img attachment-medium"
                                            alt="" title="SDG_Icons_Inverted_Transparent_WEB-04" srcset="https://groundbreaker.org/wp-content/uploads/2021/07/SDG_Icons_Inverted_Transparent_WEB-04-300x300.png 300w, https://groundbreaker.org/wp-content/uploads/2021/07/SDG_Icons_Inverted_Transparent_WEB-04-1024x1024.png 1024w, https://groundbreaker.org/wp-content/uploads/2021/07/SDG_Icons_Inverted_Transparent_WEB-04-150x150.png 150w, https://groundbreaker.org/wp-content/uploads/2021/07/SDG_Icons_Inverted_Transparent_WEB-04-768x768.png 768w, https://groundbreaker.org/wp-content/uploads/2021/07/SDG_Icons_Inverted_Transparent_WEB-04-468x468.png 468w, https://groundbreaker.org/wp-content/uploads/2021/07/SDG_Icons_Inverted_Transparent_WEB-04-1116x1116.png 1116w, https://groundbreaker.org/wp-content/uploads/2021/07/SDG_Icons_Inverted_Transparent_WEB-04-806x806.png 806w, https://groundbreaker.org/wp-content/uploads/2021/07/SDG_Icons_Inverted_Transparent_WEB-04-558x558.png 558w, https://groundbreaker.org/wp-content/uploads/2021/07/SDG_Icons_Inverted_Transparent_WEB-04-655x655.png 655w, https://groundbreaker.org/wp-content/uploads/2021/07/SDG_Icons_Inverted_Transparent_WEB-04.png 1500w"
                                            sizes="(max-width: 300px) 100vw, 300px" /></div>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-offset-0 vc_col-lg-4 vc_col-md-offset-0 vc_col-md-9 vc_col-xs-12">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                            <div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1665054451676">
                                <div class="wpb_column vc_column_container vc_col-sm-4 vc_col-xs-4">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <div class="wpb_single_image wpb_content_element vc_align_left">

                                                <figure class="wpb_wrapper vc_figure">
                                                    <div class="vc_single_image-wrapper   vc_box_border_grey"><img loading="lazy" decoding="async" width="300" height="300" src="https://groundbreaker.org/wp-content/uploads/2021/07/SDG_Icons_Inverted_Transparent_WEB-05-300x300.png" class="vc_single_image-img attachment-medium"
                                                            alt="" title="SDG_Icons_Inverted_Transparent_WEB-05" srcset="https://groundbreaker.org/wp-content/uploads/2021/07/SDG_Icons_Inverted_Transparent_WEB-05-300x300.png 300w, https://groundbreaker.org/wp-content/uploads/2021/07/SDG_Icons_Inverted_Transparent_WEB-05-1024x1024.png 1024w, https://groundbreaker.org/wp-content/uploads/2021/07/SDG_Icons_Inverted_Transparent_WEB-05-150x150.png 150w, https://groundbreaker.org/wp-content/uploads/2021/07/SDG_Icons_Inverted_Transparent_WEB-05-768x768.png 768w, https://groundbreaker.org/wp-content/uploads/2021/07/SDG_Icons_Inverted_Transparent_WEB-05-468x468.png 468w, https://groundbreaker.org/wp-content/uploads/2021/07/SDG_Icons_Inverted_Transparent_WEB-05-1116x1116.png 1116w, https://groundbreaker.org/wp-content/uploads/2021/07/SDG_Icons_Inverted_Transparent_WEB-05-806x806.png 806w, https://groundbreaker.org/wp-content/uploads/2021/07/SDG_Icons_Inverted_Transparent_WEB-05-558x558.png 558w, https://groundbreaker.org/wp-content/uploads/2021/07/SDG_Icons_Inverted_Transparent_WEB-05-655x655.png 655w, https://groundbreaker.org/wp-content/uploads/2021/07/SDG_Icons_Inverted_Transparent_WEB-05.png 1500w"
                                                            sizes="(max-width: 300px) 100vw, 300px" /></div>
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wpb_column vc_column_container vc_col-sm-4 vc_col-xs-4">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <div class="wpb_single_image wpb_content_element vc_align_left">

                                                <figure class="wpb_wrapper vc_figure">
                                                    <div class="vc_single_image-wrapper   vc_box_border_grey"><img loading="lazy" decoding="async" width="300" height="300" src="https://groundbreaker.org/wp-content/uploads/2021/07/SDG_Icons_Inverted_Transparent_WEB-10-300x300.png" class="vc_single_image-img attachment-medium"
                                                            alt="" title="SDG_Icons_Inverted_Transparent_WEB-10" srcset="https://groundbreaker.org/wp-content/uploads/2021/07/SDG_Icons_Inverted_Transparent_WEB-10-300x300.png 300w, https://groundbreaker.org/wp-content/uploads/2021/07/SDG_Icons_Inverted_Transparent_WEB-10-1024x1024.png 1024w, https://groundbreaker.org/wp-content/uploads/2021/07/SDG_Icons_Inverted_Transparent_WEB-10-150x150.png 150w, https://groundbreaker.org/wp-content/uploads/2021/07/SDG_Icons_Inverted_Transparent_WEB-10-768x768.png 768w, https://groundbreaker.org/wp-content/uploads/2021/07/SDG_Icons_Inverted_Transparent_WEB-10-468x468.png 468w, https://groundbreaker.org/wp-content/uploads/2021/07/SDG_Icons_Inverted_Transparent_WEB-10-1116x1116.png 1116w, https://groundbreaker.org/wp-content/uploads/2021/07/SDG_Icons_Inverted_Transparent_WEB-10-806x806.png 806w, https://groundbreaker.org/wp-content/uploads/2021/07/SDG_Icons_Inverted_Transparent_WEB-10-558x558.png 558w, https://groundbreaker.org/wp-content/uploads/2021/07/SDG_Icons_Inverted_Transparent_WEB-10-655x655.png 655w, https://groundbreaker.org/wp-content/uploads/2021/07/SDG_Icons_Inverted_Transparent_WEB-10.png 1500w"
                                                            sizes="(max-width: 300px) 100vw, 300px" /></div>
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wpb_column vc_column_container vc_col-sm-4 vc_col-xs-4">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <div class="wpb_single_image wpb_content_element vc_align_left">

                                                <figure class="wpb_wrapper vc_figure">
                                                    <div class="vc_single_image-wrapper   vc_box_border_grey"><img loading="lazy" decoding="async" width="300" height="300" src="https://groundbreaker.org/wp-content/uploads/2021/07/SDG_Icons_Inverted_Transparent_WEB-17-300x300.png" class="vc_single_image-img attachment-medium"
                                                            alt="" title="SDG_Icons_Inverted_Transparent_WEB-17" srcset="https://groundbreaker.org/wp-content/uploads/2021/07/SDG_Icons_Inverted_Transparent_WEB-17-300x300.png 300w, https://groundbreaker.org/wp-content/uploads/2021/07/SDG_Icons_Inverted_Transparent_WEB-17-1024x1024.png 1024w, https://groundbreaker.org/wp-content/uploads/2021/07/SDG_Icons_Inverted_Transparent_WEB-17-150x150.png 150w, https://groundbreaker.org/wp-content/uploads/2021/07/SDG_Icons_Inverted_Transparent_WEB-17-768x768.png 768w, https://groundbreaker.org/wp-content/uploads/2021/07/SDG_Icons_Inverted_Transparent_WEB-17-468x468.png 468w, https://groundbreaker.org/wp-content/uploads/2021/07/SDG_Icons_Inverted_Transparent_WEB-17-1116x1116.png 1116w, https://groundbreaker.org/wp-content/uploads/2021/07/SDG_Icons_Inverted_Transparent_WEB-17-806x806.png 806w, https://groundbreaker.org/wp-content/uploads/2021/07/SDG_Icons_Inverted_Transparent_WEB-17-558x558.png 558w, https://groundbreaker.org/wp-content/uploads/2021/07/SDG_Icons_Inverted_Transparent_WEB-17-655x655.png 655w, https://groundbreaker.org/wp-content/uploads/2021/07/SDG_Icons_Inverted_Transparent_WEB-17.png 1500w"
                                                            sizes="(max-width: 300px) 100vw, 300px" /></div>
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vc_row-full-width vc_clearfix"></div>
        </div>
        <div class="vc-row-container container"></div>
        <div class="vc-row-container container"></div>
        <div class="vc-row-container container parent--testimonial-fix-height"></div>
        <div class="vc-row-container container parent--testimonial-fix-height">
            <div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid testimonial-fix-height vc_custom_1665653346989 vc_row-has-fill vc_row-o-content-top vc_row-flex row-stretch">
                <div class="wpb_animate_when_almost_visible wpb_fadeInUp fadeInUp wpb_column vc_column_container vc_col-sm-12 vc_col-lg-offset-1 vc_col-lg-10 vc_col-md-offset-0 vc_col-md-12 vc_col-sm-offset-0">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                            <h2 style="color: #ffffff;text-align: center" class="vc_custom_heading welcome-title">WHAT PARTNERS SAY</h2>
                            <div class="vc_empty_space" style="height: 30px"><span class="vc_empty_space_inner"></span></div>
                            <div class="vc_tta-container vc_tta-o-non-responsive" data-vc-action="collapse" data-vc-tta-autoplay="{&quot;delay&quot;:5000}">
                                <div class="vc_general vc_tta vc_tta-tabs vc_tta-o-shape-group vc_tta-has-pagination vc_tta-o-no-fill vc_tta-tabs-position-top  vc_tta-pageable">
                                    <div class="vc_tta-panels-container">
                                        <ul class="vc_general vc_pagination vc_pagination-style-flat vc_pagination-shape-round vc_pagination-color-white">
                                            <li class="vc_pagination-item vc_active" data-vc-tab><a href="#1665058169348-99b78f93-1222" class="vc_pagination-trigger" data-vc-tabs data-vc-container=".vc_tta"></a></li>
                                            <li class="vc_pagination-item" data-vc-tab><a href="#1665058169493-fc18553d-e40a" class="vc_pagination-trigger" data-vc-tabs data-vc-container=".vc_tta"></a></li>
                                            <li class="vc_pagination-item" data-vc-tab><a href="#1665058169626-50cad429-6aae" class="vc_pagination-trigger" data-vc-tabs data-vc-container=".vc_tta"></a></li>
                                        </ul>
                                        <div class="vc_tta-panels">
                                            <div class="vc_tta-panel vc_active" id="1665058169348-99b78f93-1222" data-vc-content=".vc_tta-panel-body">
                                                <div class="vc_tta-panel-body">
                                                    <span class="vc_tta-panel-title">
                                                        <a  data-vc-container=".vc_tta-container" data-vc-accordion="" data-vc-target="#1665058169348-99b78f93-1222"></a>
                                                    </span>
                                                    <div class="vc_row wpb_row vc_inner vc_row-fluid vc_row-o-equal-height vc_row-o-content-middle vc_row-flex container-fixed">
                                                        <div class="wpb_column vc_column_container vc_col-sm-3">
                                                            <div class="vc_column-inner">
                                                                <div class="wpb_wrapper">
                                                                    <div class="wpb_single_image wpb_content_element vc_align_center   testimonials-image">

                                                                        <figure class="wpb_wrapper vc_figure">
                                                                            <div class="vc_single_image-wrapper vc_box_circle  vc_box_border_grey"><img decoding="async" class="vc_single_image-img " src="https://groundbreaker.org/wp-content/uploads/2022/02/Christian-Porträt-farbig-1-200x200.jpg" width="200" height="200"
                                                                                    alt="Christian Porträt farbig" title="Christian Porträt farbig" loading="lazy" /></div>
                                                                        </figure>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="wpb_column vc_column_container vc_col-sm-9">
                                                            <div class="vc_column-inner">
                                                                <div class="wpb_wrapper">
                                                                    <div class="wpb_text_column wpb_content_element  white-font post-formatting ">
                                                                        <div class="wpb_wrapper">
                                                                            <p style="text-align: left;">&#8222;At our events, we always see how motivated our community is to give back to society. With Groundbreaker we found a trustworthy charity partner supporting us to
                                                                                make use of the power of our community and possibilities we can create together.“</p>
                                                                            <p style="text-align: right;"><strong> <span class="ILfuVd"><span class="hgKElc">— </span></span>Christian Jaeger • CEO CloudFest<br />
                                                                            </strong></p>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="vc_tta-panel" id="1665058169493-fc18553d-e40a" data-vc-content=".vc_tta-panel-body">
                                                <div class="vc_tta-panel-body">
                                                    <span class="vc_tta-panel-title">
                                                        <a  data-vc-container=".vc_tta-container" data-vc-accordion="" data-vc-target="#1665058169493-fc18553d-e40a"></a>
                                                    </span>
                                                    <div class="vc_row wpb_row vc_inner vc_row-fluid vc_row-o-content-middle vc_row-flex container-fixed">
                                                        <div class="wpb_column vc_column_container vc_col-sm-3">
                                                            <div class="vc_column-inner">
                                                                <div class="wpb_wrapper">
                                                                    <div class="wpb_single_image wpb_content_element vc_align_center   testimonials-image">

                                                                        <figure class="wpb_wrapper vc_figure">
                                                                            <div class="vc_single_image-wrapper vc_box_circle  vc_box_border_grey"><img decoding="async" class="vc_single_image-img " src="https://groundbreaker.org/wp-content/uploads/2022/02/Dr-Rethabile-Mashale-Sonibare-1-200x200.jpeg" width="200"
                                                                                    height="200" alt="Dr-Rethabile-Mashale-Sonibare" title="Dr-Rethabile-Mashale-Sonibare" loading="lazy" /></div>
                                                                        </figure>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="wpb_column vc_column_container vc_col-sm-9">
                                                            <div class="vc_column-inner">
                                                                <div class="wpb_wrapper">
                                                                    <div class="wpb_text_column wpb_content_element  white-font post-formatting ">
                                                                        <div class="wpb_wrapper">
                                                                            <p style="text-align: left;"><span style="font-weight: 400;">“Thanks to Groundbreaker, we are connected with donors who make it very easy and flexible for us to receive funding for our school.&#8220;</span></p>
                                                                            <p style="text-align: right;"><strong><span class="ILfuVd"><span class="hgKElc">—</span></span> Rethabile <b>Mashale</b> Sonibare • School principal of Molo Mhlaba Schools</strong></p>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="vc_tta-panel" id="1665058169626-50cad429-6aae" data-vc-content=".vc_tta-panel-body">
                                                <div class="vc_tta-panel-body">
                                                    <span class="vc_tta-panel-title">
                                                        <a  data-vc-container=".vc_tta-container" data-vc-accordion="" data-vc-target="#1665058169626-50cad429-6aae"></a>
                                                    </span>
                                                    <div class="vc_row wpb_row vc_inner vc_row-fluid vc_row-o-equal-height vc_row-o-content-middle vc_row-flex container-fixed">
                                                        <div class="wpb_column vc_column_container vc_col-sm-3 vc_col-lg-offset-0 vc_col-md-offset-0 vc_col-sm-offset-0">
                                                            <div class="vc_column-inner">
                                                                <div class="wpb_wrapper">
                                                                    <div class="wpb_single_image wpb_content_element vc_align_center   testimonials-image">

                                                                        <figure class="wpb_wrapper vc_figure">
                                                                            <div class="vc_single_image-wrapper vc_box_circle  vc_box_border_grey"><img decoding="async" class="vc_single_image-img " src="https://groundbreaker.org/wp-content/uploads/2021/10/sebastian-noelting-200x200.png" width="200" height="200" alt="sebastian-noelting"
                                                                                    title="sebastian-noelting" loading="lazy" /></div>
                                                                        </figure>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="wpb_column vc_column_container vc_col-sm-9">
                                                            <div class="vc_column-inner">
                                                                <div class="wpb_wrapper">
                                                                    <div class="wpb_text_column wpb_content_element  white-font post-formatting ">
                                                                        <div class="wpb_wrapper">
                                                                            <p style="text-align: left;">“I have been looking for a suitable charity project for RNT Rausch for quite some time. We are convinced that problems such as poverty and hunger can only be solved sustainably
                                                                                through education. With Groundbreaker we were able to implement our idea easily and are happy that so many children have access to a new school now.”</p>
                                                                            <p style="text-align: right;"><strong><span class="ILfuVd"><span class="hgKElc">— </span></span>Sebastian Noelting • CEO, RNT Rausch<br />
                                                                            </strong></p>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vc_row-full-width vc_clearfix"></div>
        </div>
        <div class="vc-row-container container">
            <div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1647008750893 row-stretch">
                <div class="wpb_animate_when_almost_visible wpb_fadeInUp fadeInUp wpb_column vc_column_container vc_col-sm-12">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                            <h2 style="text-align: center" class="vc_custom_heading welcome-title vc_custom_1683206786229">Some of our supporters</h2>
                            <div id="client-logos-126615" class="lab-clients-logos logos-holder  no-spacing-cols no-image-borders">

                                <div class="client-logos-col col-1-7 opacity-on-hover">

                                    <div class="c-logo wow fadeInLab" data-wow-duration="1s" data-wow-delay="0s">
                                        <img decoding="async" loading="lazy" width="228" height="150" src="https://groundbreaker.org/wp-content/uploads/2021/07/acronis.png" class="img-responsive attachment-full" alt="" title="acronis" />
                                    </div>

                                </div>
                                <div class="client-logos-col col-1-7 opacity-on-hover">

                                    <div class="c-logo wow fadeInLab" data-wow-duration="1s" data-wow-delay="0.1s">
                                        <img decoding="async" loading="lazy" width="228" height="150" src="https://groundbreaker.org/wp-content/uploads/2021/07/cloudfest-1.png" class="img-responsive attachment-full" alt="" title="cloudfest" />
                                    </div>

                                </div>
                                <div class="client-logos-col col-1-7 opacity-on-hover">

                                    <div class="c-logo wow fadeInLab" data-wow-duration="1s" data-wow-delay="0.2s">
                                        <img decoding="async" loading="lazy" width="228" height="150" src="https://groundbreaker.org/wp-content/uploads/2021/07/flock.png" class="img-responsive attachment-full" alt="" title="flock" />
                                    </div>

                                </div>
                                <div class="client-logos-col col-1-7 opacity-on-hover">

                                    <div class="c-logo wow fadeInLab" data-wow-duration="1s" data-wow-delay="0.3s">
                                        <img decoding="async" loading="lazy" width="228" height="150" src="https://groundbreaker.org/wp-content/uploads/2023/04/Virtuozzo.png" class="img-responsive attachment-full" alt="Logo Virtuozzo" title="Virtuozzo" />
                                    </div>

                                </div>
                                <div class="client-logos-col col-1-7 opacity-on-hover">

                                    <div class="c-logo wow fadeInLab" data-wow-duration="1s" data-wow-delay="0.4s">
                                        <img decoding="async" loading="lazy" width="228" height="150" src="https://groundbreaker.org/wp-content/uploads/2021/07/hostinger.png" class="img-responsive attachment-full" alt="" title="hostinger" />
                                    </div>

                                </div>
                                <div class="client-logos-col col-1-7 opacity-on-hover">

                                    <div class="c-logo wow fadeInLab" data-wow-duration="1s" data-wow-delay="0.5s">
                                        <img decoding="async" loading="lazy" width="228" height="150" src="https://groundbreaker.org/wp-content/uploads/2021/07/rnt.png" class="img-responsive attachment-full" alt="" title="rnt" />
                                    </div>

                                </div>
                                <div class="client-logos-col col-1-7 opacity-on-hover">

                                    <div class="c-logo wow fadeInLab" data-wow-duration="1s" data-wow-delay="0.6s">
                                        <img decoding="async" loading="lazy" width="228" height="150" src="https://groundbreaker.org/wp-content/uploads/2021/07/lindhorst.png" class="img-responsive attachment-full" alt="" title="lindhorst" />
                                    </div>

                                </div>
                                <div class="client-logos-col col-1-7 opacity-on-hover">

                                    <div class="c-logo wow fadeInLab" data-wow-duration="1s" data-wow-delay="0.7s">
                                        <img decoding="async" loading="lazy" width="228" height="150" src="https://groundbreaker.org/wp-content/uploads/2021/07/daisy.png" class="img-responsive attachment-full" alt="" title="daisy" />
                                    </div>

                                </div>
                                <div class="client-logos-col col-1-7 opacity-on-hover">

                                    <div class="c-logo wow fadeInLab" data-wow-duration="1s" data-wow-delay="0.8s">
                                        <img decoding="async" loading="lazy" width="228" height="150" src="https://groundbreaker.org/wp-content/uploads/2021/07/ox.png" class="img-responsive attachment-full" alt="" title="ox" />
                                    </div>

                                </div>
                                <div class="client-logos-col col-1-7 opacity-on-hover">

                                    <div class="c-logo wow fadeInLab" data-wow-duration="1s" data-wow-delay="0.9s">
                                        <img decoding="async" loading="lazy" width="228" height="150" src="https://groundbreaker.org/wp-content/uploads/2021/07/namescon.png" class="img-responsive attachment-full" alt="" title="namescon" />
                                    </div>

                                </div>
                                <div class="client-logos-col col-1-7 opacity-on-hover">

                                    <div class="c-logo wow fadeInLab" data-wow-duration="1s" data-wow-delay="1s">
                                        <img decoding="async" loading="lazy" width="228" height="150" src="https://groundbreaker.org/wp-content/uploads/2021/07/intel.png" class="img-responsive attachment-full" alt="" title="intel" />
                                    </div>

                                </div>
                                <div class="client-logos-col col-1-7 opacity-on-hover">

                                    <div class="c-logo wow fadeInLab" data-wow-duration="1s" data-wow-delay="1.1s">
                                        <img decoding="async" loading="lazy" width="228" height="150" src="https://groundbreaker.org/wp-content/uploads/2021/07/godaddy.png" class="img-responsive attachment-full" alt="" title="godaddy" />
                                    </div>

                                </div>
                                <div class="client-logos-col col-1-7 opacity-on-hover">

                                    <div class="c-logo wow fadeInLab" data-wow-duration="1s" data-wow-delay="1.2s">
                                        <img decoding="async" loading="lazy" width="150" height="150" src="https://groundbreaker.org/wp-content/uploads/2022/01/cureus.png" class="img-responsive attachment-full" alt="" title="cureus" />
                                    </div>

                                </div>
                                <div class="client-logos-col col-1-7 opacity-on-hover">

                                    <div class="c-logo wow fadeInLab" data-wow-duration="1s" data-wow-delay="1.3s">
                                        <img decoding="async" loading="lazy" width="150" height="150" src="https://groundbreaker.org/wp-content/uploads/2022/01/gerl_dental.png" class="img-responsive attachment-full" alt="" title="gerl_dental" />
                                    </div>

                                </div>

                            </div>
                            <h4 style="text-align: center" class="vc_custom_heading welcome-title vc_custom_1647008714496">And many more private donors</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vc_row-full-width vc_clearfix"></div>
        </div>
        <div class="vc-row-container container">
            <div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1646391631813 vc_row-has-fill vc_row-o-equal-height vc_row-o-content-middle vc_row-flex row-stretch">
                <div class="wpb_column vc_column_container vc_col-sm-12">
                    <div class="vc_column-inner vc_custom_1646391699798">
                        <div class="wpb_wrapper">
                            <div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1646392170323 vc_row-o-equal-height vc_row-o-content-top vc_row-flex container-fixed">
                                <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-md-4 vc_hidden-xs vc_col-has-fill">
                                    <div class="vc_column-inner vc_custom_1667492531661">
                                        <div class="wpb_wrapper"></div>
                                    </div>
                                </div>
                                <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-md-8">
                                    <div class="vc_column-inner vc_custom_1647341353846">
                                        <div class="wpb_wrapper">
                                            <h3 style="color: #ffffff;text-align: left" class="vc_custom_heading">Subscribe To Our Newsletter</h3>
                                            <div class="wpb_text_column wpb_content_element  white-font post-formatting ">
                                                <div class="wpb_wrapper">
                                                    <p>Sign up for our monthly newsletter and stay informed about the most recent project updates, donor interviews, inspirational stories, and inside knowledge.</p>

                                                    <form id="sib_signup_form_2" method="post" class="sib_signup_form">
                                                        <div class="sib_loader" style="display:none;"><img src="https://groundbreaker.org/wp-includes/images/spinner.gif" alt="loader"></div>
                                                        <input type="hidden" name="sib_form_action" value="subscribe_form_submit">
                                                        <input type="hidden" name="sib_form_id" value="2">
                                                        <input type="hidden" name="sib_form_alert_notice" value="Please fill out this field.">
                                                        <input type="hidden" name="sib_form_invalid_email_notice" value="Your email address is invalid.">
                                                        <input type="hidden" name="sib_security" value="d4774d4e5c">
                                                        <div class="sib_signup_box_inside_2">
                                                            <div style="/*display:none*/" class="sib_msg_disp">
                                                            </div>
                                                            <div class="vc_row wpb_row">
                                                                <div class="vc_column-inner">
                                                                    <div class="wpb_column vc_column_container vc_col-xs-6 vc_col-sm-6 vc_col-md-4 vc_col-lg-4">
                                                                        <div class="vc_column-inner">
                                                                            <p class="sib-VORNAME-area">
                                                                                <input type="text" class="sib-VORNAME-area" name="VORNAME" placeholder="First Name">
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="wpb_column vc_column_container vc_col-xs-6 vc_col-sm-6 vc_col-md-4 vc_col-lg-4">
                                                                        <div class="vc_column-inner">
                                                                            <p class="sib-NACHNAME-area">
                                                                                <input type="text" class="sib-NACHNAME-area" name="NACHNAME" placeholder="Last Name">
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="wpb_column vc_column_container vc_col-xs-6 vc_col-sm-6 vc_col-md-4 vc_col-lg-4">
                                                                        <div class="vc_column-inner">
                                                                            <p class="sib-email-area">
                                                                                <input type="email" class="sib-email-area" name="email" placeholder="E-mail address*" required="required">
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <p class="small" style="color:#FFF;margin-top:10px">
                                                                <input type="checkbox" name="terms" required="required"><span style="color:#FFF">I accept the <a href="/privacy-policy/">terms and conditions</a>. I agree that my e-mail address is only used to send me your newsletter and information about the activities of Groundbreaker. I can always use the unsubscribe link included in the newsletter.</span>
                                                            </p>
                                                            <p><input type="submit" class="sib-default-btn vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-rounded vc_btn3-style-modern vc_btn3-color-peacoc" value="Subscribe"></p>
                                                        </div>
                                                    </form>
                                                    <style>
                                                        form#sib_signup_form_2 p.sib-alert-message {
                                                            padding: 6px 12px;
                                                            margin-bottom: 20px;
                                                            border: 1px solid transparent;
                                                            border-radius: 4px;
                                                            -webkit-box-sizing: border-box;
                                                            -moz-box-sizing: border-box;
                                                            box-sizing: border-box;
                                                        }

                                                        form#sib_signup_form_2 p.sib-alert-message-error {
                                                            background-color: #f2dede;
                                                            border-color: #ebccd1;
                                                            color: #a94442;
                                                        }

                                                        form#sib_signup_form_2 p.sib-alert-message-success {
                                                            background-color: #dff0d8;
                                                            border-color: #d6e9c6;
                                                            color: #3c763d;
                                                        }

                                                        form#sib_signup_form_2 p.sib-alert-message-warning {
                                                            background-color: #fcf8e3;
                                                            border-color: #faebcc;
                                                            color: #8a6d3b;
                                                        }
                                                    </style>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vc_row-full-width vc_clearfix"></div>
        </div>
    </div>
</div>
