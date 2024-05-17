<div class="vc-container">
    <div class="wpb-content-wrapper">
        <div class="vc-row-container container">
            <div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-parallax="1.5" data-vc-parallax-o-fade="on" data-vc-parallax-image="wp-content/uploads/2022/02/Verlauf-tuerkis_Banner_1600x500_neu.jpg" class="vc_row wpb_row vc_row-fluid vc_custom_1647264660724 vc_row-has-fill vc_row-o-content-middle vc_row-flex vc_general vc_parallax vc_parallax-content-moving-fade js-vc_parallax-o-fade row-stretch">
                <div class="wpb_column vc_column_container vc_col-sm-8">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                            <h1 style="color: #ffffff;line-height: 1.2;text-align: left" class="vc_custom_heading page-title wpb_animate_when_almost_visible wpb_top-to-bottom top-to-bottom">News</h1>
                        </div>
                    </div>
                </div>
                <div class="wpb_column vc_column_container vc_col-sm-4">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper"></div>
                    </div>
                </div>
            </div>
            <div class="vc_row-full-width vc_clearfix"></div>
        </div>
        <div class="vc-row-container container">
            <div class="vc_row wpb_row vc_row-fluid vc_custom_1647264653587">
                <div class="wpb_column vc_column_container vc_col-sm-12">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                            <div class="vc_grid-container-wrapper mt-20 vc_clearfix vc_grid-animation-fadeIn">
                                <div class="vc_grid-container vc_clearfix wpb_content_element vc_masonry_grid" data-initial-loading-animation="fadeIn" data-vc-grid-settings="{&quot;page_id&quot;:1623,&quot;style&quot;:&quot;lazy-masonry&quot;,&quot;action&quot;:&quot;vc_get_vc_grid_data&quot;,&quot;shortcode_id&quot;:&quot;1664438016124-0161de8e-3b00-8&quot;,&quot;items_per_page&quot;:&quot;9&quot;,&quot;tag&quot;:&quot;vc_masonry_grid&quot;}"
                                    data-vc-request="wp-admin/admin-ajax.php" data-vc-post-id="1623" data-vc-public-nonce="3dd216c016">

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
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
