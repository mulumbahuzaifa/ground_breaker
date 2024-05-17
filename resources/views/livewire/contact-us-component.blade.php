
<div class="vc-container">
    <div class="wpb-content-wrapper">
        <div class="vc-row-container vc-row-container--stretch-content-no-spaces">
            <div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid vc_custom_1625148217697 vc_row-no-padding">
                <div class="wpb_column vc_column_container vc_col-sm-12">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                            <style>
                                #el_66190d2e260d9 {
                                    height: 400px;
                                }
                            </style>
                            <div class="lab-google-map cd-google-map ">
                                <div id="el_66190d2e260d9"></div>
                                <div class="cd-zoom cd-zoom-in hidden"></div>
                                <div class="cd-zoom cd-zoom-out hidden"></div>
                            </div>

                            <script type="text/javascript">
                                var labVcMaps = labVcMaps || [];
                                labVcMaps.push({
                                    id: 'el_66190d2e260d9',

                                    locations: [{
                                        "marker_image": "https:\/\/groundbreaker.org\/wp-content\/themes\/kalium\/assets\/images\/icons\/map\/cd-icon-location.svg",
                                        "retina_marker": "",
                                        "latitude": "50.941140",
                                        "longitude": "6.940440",
                                        "marker_title": "",
                                        "marker_description": "",
                                        "marker_image_size": [44, 44]
                                    }],

                                    zoom: 13,
                                    scrollwheel: false,
                                    dropPins: false,
                                    panBy: [0, 0],
                                    tilt: 0,
                                    heading: 0,

                                    mapType: 'roadmap',

                                    panControl: true,
                                    zoomControl: true,
                                    mapTypeControl: false,
                                    scaleControl: true,
                                    streetViewControl: false,
                                    overviewMapContro: false,
                                    plusMinusZoom: false,
                                    fullscreenControl: true,


                                    styles: [{
                                            "featureType": "administrative",
                                            "elementType": "labels.text.fill",
                                            "stylers": [{
                                                "color": "#444444"
                                            }]
                                        },
                                        {
                                            "featureType": "landscape",
                                            "elementType": "all",
                                            "stylers": [{
                                                "color": "#d1d1d1"
                                            }]
                                        },
                                        {
                                            "featureType": "poi",
                                            "elementType": "all",
                                            "stylers": [{
                                                "visibility": "off"
                                            }]
                                        },
                                        {
                                            "featureType": "road",
                                            "elementType": "all",
                                            "stylers": [{
                                                    "saturation": -100
                                                },
                                                {
                                                    "lightness": 45
                                                }
                                            ]
                                        },
                                        {
                                            "featureType": "road.highway",
                                            "elementType": "all",
                                            "stylers": [{
                                                "visibility": "simplified"
                                            }]
                                        },
                                        {
                                            "featureType": "road.arterial",
                                            "elementType": "labels.icon",
                                            "stylers": [{
                                                "visibility": "off"
                                            }]
                                        },
                                        {
                                            "featureType": "transit",
                                            "elementType": "all",
                                            "stylers": [{
                                                "visibility": "off"
                                            }]
                                        },
                                        {
                                            "featureType": "water",
                                            "elementType": "all",
                                            "stylers": [{
                                                    "color": "#1b778c"
                                                },
                                                {
                                                    "visibility": "on"
                                                }
                                            ]
                                        }
                                    ]
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vc_row-full-width vc_clearfix"></div>
        </div>
        <div class="vc-row-container container">
            <div class="vc_row wpb_row vc_row-fluid vc_custom_1625149253463">
                <div class="wpb_animate_when_almost_visible wpb_fadeIn fadeIn wpb_column vc_column_container vc_col-sm-12">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                            <h1 style="text-align: left" class="vc_custom_heading h3">Connect With Us Today!</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="vc-row-container container">
            <div class="vc_row wpb_row vc_row-fluid vc_custom_1625149246633 vc_column-gap-35 vc_row-o-equal-height vc_row-o-content-top vc_row-flex">
                <div class="wpb_animate_when_almost_visible wpb_fadeIn fadeIn wpb_column vc_column_container vc_col-sm-6">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                            <div class="lab-contact-form contact-form  vc_custom_1657890472759">
                                @if (Session::has('message'))
                                    <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                                @endif
                                <form action="" enctype="multipart/form-data" wire:submit.prevent="sendMessage" class="contact-form" id="el_66190d2e2739a" data-alerts="0" data-alerts-msg="Füllen Sie bitte &quot;%&quot; Feld." data-privacy-error-msg="You must check privacy policy checkbox in order to submit the form." novalidate>

                                    <div class="row">

                                        <div class="col-sm-6">
                                            <div class="form-group labeled-input-row">
                                                <label for="el_66190d2e2739a_name">Name:</label>
                                                <input name="name" id="el_66190d2e2739a_name" type="text" placeholder="" data-label="Name" wire:model="name">
                                                @error('name') <p class="text-danger">{{ $message }}</p> @enderror
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group labeled-input-row">
                                                <label for="el_66190d2e2739a_email">Email:</label>
                                                <input name="email" id="el_66190d2e2739a_email" type="email" placeholder="" data-label="Email" wire:model="email">
                                                @error('email') <p class="text-danger">{{ $message }}</p> @enderror
                                            </div>
                                        </div>


                                        <div class="col-sm-12">
                                            <div class="form-group labeled-textarea-row">
                                                <label for="el_66190d2e2739a_message">Message:</label>
                                                <textarea name="message" id="el_66190d2e2739a_message" placeholder="" data-label="Message" wire:model="message"></textarea>
                                                @error('message') <p class="text-danger">{{ $message }}</p> @enderror
                                            </div>
                                        </div>

                                    </div>
                                    <!-- row -->

                                    {{-- <div class="form-group contact-form-recaptcha">
                                    </div> --}}

                                    <div class="form-group contact-form-privacy-policy">

                                        <label>
                                        <input type="checkbox" name="privacy_policy_check" />
                                        <span>I’ve read and accept the <a href="/privacy-policy/" target="_blank">terms &amp; conditions</a> *</span>
                                    </label>

                                    </div>

                                    <button type="submit" name="send" class="button">
                                        <span class="pre-submit">Send</span>
                                        <span class="success-msg">Thank you #, message sent! We will get back to you shortly. <i class="flaticon-verification24"></i></span>
                                        <span class="loading-bar">
                                            <span></span>
                                        </span>
                                    </button>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="wpb_animate_when_almost_visible wpb_fadeIn fadeIn wpb_column vc_column_container vc_col-sm-6">
                    <div class="vc_column-inner vc_custom_1637254505608">
                        <div class="wpb_wrapper">
                            <div class="wpb_text_column wpb_content_element  vc_custom_1693211857277 post-formatting ">
                                <div class="wpb_wrapper">
                                    <p>Groundbreaker gGmbH<br /> Hohenzollernring 72<br /> 50672 Köln</p>
                                    <p>+49 176 87315463<br /> team@groundbreaker.org
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
