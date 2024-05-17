<div>
    <div class="vc-container">
        <div class="wpb-content-wrapper">
            <div class="vc-row-container container">
                <div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-parallax="1.5" data-vc-parallax-o-fade="on" data-vc-parallax-image="wp-content/uploads/2022/02/Verlauf-tuerkis_Banner_1600x500_neu.jpg" class="vc_row wpb_row vc_row-fluid vc_custom_1647264660724 vc_row-has-fill vc_row-o-content-middle vc_row-flex vc_general vc_parallax vc_parallax-content-moving-fade js-vc_parallax-o-fade row-stretch">
                    <div class="wpb_column vc_column_container vc_col-sm-8">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper">
                                <h1 style="color: #000000;line-height: 1.2;text-align: left" class="vc_custom_heading page-title wpb_animate_when_almost_visible wpb_top-to-bottom top-to-bottom">Contact Messages</h1>
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
                                <div class="vc_grid-container-wrapper vc_clearfix vc_grid-animation-fadeIn">
                                    <div class="vc_grid-container vc_clearfix wpb_content_element vc_masonry_grid" data-initial-loading-animation="fadeIn" data-vc-grid-settings="{&quot;page_id&quot;:1623,&quot;style&quot;:&quot;lazy-masonry&quot;,&quot;action&quot;:&quot;vc_get_vc_grid_data&quot;,&quot;shortcode_id&quot;:&quot;1664438016124-0161de8e-3b00-8&quot;,&quot;items_per_page&quot;:&quot;9&quot;,&quot;tag&quot;:&quot;vc_masonry_grid&quot;}"
                                        data-vc-request="wp-admin/admin-ajax.php" data-vc-post-id="1623" data-vc-public-nonce="3dd216c016">
                                        <div class="col-md-12">
                                            <div class="panel panel-default">
                                                <div class="panel-body">
                                                    @if (Session::has('message'))
                                                    <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                                                    @endif
                                                    <table class="table table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Name</th>
                                                                <th>Email</th>
                                                                <th>DOB</th>
                                                                <th>Phone</th>
                                                                <th>Whatsapp</th>
                                                                <th>Address</th>
                                                                <th>Guardian</th>
                                                                <th>Created At</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @php
                                                                $i = 1;
                                                            @endphp
                                                            @foreach ($applications as $application)
                                                                <tr>
                                                                    <td>{{ $i++ }}</td>
                                                                    <td>{{ $application->first_name }} {{ $application->last_name }}</td>
                                                                    <td>{{ $application->email }}</td>
                                                                    <td>{{ $application->dob }}</td>
                                                                    <td>{{ $application->phone_number }}</td>
                                                                    <td>{{ $application->whatsapp_number }}</td>
                                                                    <td>{{ $application->region }}</td>
                                                                    <td>{{ $application->guardian_name }} {{ $application->guardian_number }}</td>
                                                                    <td>{{ $application->created_at }}</td>

                                                                    {{-- <td>
                                                                        <a href="{{ route('admin.editproperty', ['property_slug'=> $property->slug]) }}" ><i class="fa fa-edit fa-1x"></i></a>
                                                                        <a href="#" onclick="confirm('Are you sure, You want to delete this property') || event.stopImmediatePropagation()" wire:click.prevent="deleteProperty({{ $property->id }})" style="margin-left: 10px"><i class="fa fa-times fa-1x text-danger"></i></a>
                                                                    </td> --}}
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                        {{ $applications->links('pagination::bootstrap-4') }}

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
