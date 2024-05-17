<div class="vc-container">
    <div class="wpb-content-wrapper">
      <div class="vc-row-container container">
        <div
          data-vc-full-width="true"
          data-vc-full-width-init="true"
          data-vc-parallax="1.5"
          data-vc-parallax-image="https://groundbreaker.org/wp-content/uploads/2023/03/Webbanner_Talents_1600x500-1.jpg"
          class="vc_row wpb_row vc_row-fluid vc_custom_1678268192854 vc_row-has-fill vc_general vc_parallax vc_parallax-content-moving row-stretch"
          style="
            position: relative;
            left: 0px;
            box-sizing: border-box;
            width: 737px;
            max-width: 737px;
            padding-left: 0px;
            padding-right: 0px;
          "
        >
          <div class="wpb_column vc_column_container vc_col-sm-12">
            <div class="vc_column-inner">
              <div class="wpb_wrapper">
                <h1
                  style="color: #ffffff; line-height: 1.2; text-align: left"
                  class="vc_custom_heading wpb_animate_when_almost_visible wpb_top-to-bottom top-to-bottom wpb_start_animation animated"
                >
                  Talents Application
                </h1>
                <div
                  class="wpb_text_column wpb_content_element white-font post-formatting"
                >
                  <div class="wpb_wrapper">
                    <p style="text-align: left">
                      <em
                        ><span style="font-size: 24px"
                          >Intake 2024 – Apply today!</span
                        ></em
                      >
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div
            class="vc_parallax-inner skrollable skrollable-after"
            data-bottom-top="top: -50%;"
            data-top-bottom="top: 0%;"
            style="
              height: 150%;
              background-image: url('wp-content/uploads/2023/03/Webbanner_Talents_1600x500-1.jpg');
              top: 0%;
            "
          ></div>
        </div>
        <div class="vc_row-full-width vc_clearfix"></div>
      </div>
      <div class="vc-row-container container " style="background: rgb(245, 245, 245);">
        <div
          id="form-talents-application"
          class="vc_row wpb_row vc_row-fluid vc_custom_1682428697822 vc_row-has-fill vc_row-o-equal-height vc_row-flex"
        >
          <div class="wpb_column vc_column_container vc_col-sm-12">
            <div class="vc_column-inner">
              <div class="wpb_wrapper">
                <div class="wpb_text_column wpb_content_element post-formatting">
                  <div class="wpb_wrapper">
                    <div
                      class="wpcf7 js"
                      id="wpcf7-f8768-p8179-o1"
                      lang="de-DE"
                      dir="ltr"
                    >
                      <div class="screen-reader-response">
                        <p
                          role="status"
                          aria-live="polite"
                          aria-atomic="true"
                        ></p>
                        <ul></ul>
                      </div>
                        @if (Session::has('message'))
                            <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                        @endif
                      <form
                            action=""
                            enctype="multipart/form-data"
                            wire:submit.prevent="sendApplication"
                            class="wpcf7-form init"
                            {{-- aria-label="Kontaktformular"
                            novalidate="novalidate"
                            data-status="init" --}}
                        >

                        <h3>Application</h3>
                        <p>
                          Please note that this information will be kept
                          confidential. Make sure you have all required documents
                          ready before submitting the form.
                        </p>
                        <div class="vc_row">
                          <div class="vc_col-sm-12">
                            <h4>General Information</h4>
                          </div>
                        </div>
                        <div class="vc_row">
                          <div class="vc_col-sm-12 vc_col-md-6">
                            <p>
                              <label
                                >Your first name<br />
                                <span
                                  class="wpcf7-form-control-wrap"
                                  data-name="first_name"
                                  >
                                  <input
                                    size="40"
                                    class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                    autocomplete="first_name"
                                    aria-required="true"
                                    aria-invalid="false"
                                    type="text"
                                    required
                                    name="first_name" wire:model="first_name" /></span
                              ></label>
                            </p>
                            @error('first_name') <p class="text-danger">{{ $message }}</p> @enderror
                          </div>
                          <div class="vc_col-sm-12 vc_col-md-6">
                            <p>
                              <label
                                >Your last name<br />
                                <span
                                  class="wpcf7-form-control-wrap"
                                  data-name="last_name"
                                  ><input
                                    size="40"
                                    class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                    autocomplete="last_name"
                                    {{-- aria-required="true"
                                    aria-invalid="false" --}}
                                    type="text"
                                    required
                                    name="last_name" wire:model="last_name" /></span
                              ></label>
                            </p>
                            @error('last_name') <p class="text-danger">{{ $message }}</p> @enderror
                          </div>
                        </div>
                        <div class="vc_row">
                            <div class="vc_col-sm-12 vc_col-md-6">
                                <p>
                                  <label
                                    >Email<br />
                                    <span
                                      class="wpcf7-form-control-wrap"
                                      data-name="email"
                                      ><input
                                        size="40"
                                        class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                        autocomplete="email"
                                        {{-- aria-required="true"
                                        aria-invalid="false" --}}
                                        type="text"
                                        required
                                        name="email" wire:model="email" /></span
                                  ></label>
                                </p>
                                @error('email') <p class="text-danger">{{ $message }}</p> @enderror
                              </div>
                          <div class="vc_col-sm-12 vc_col-md-6">
                            <p>
                              <label
                                >What is your date of birth?<br />
                                <span
                                  class="wpcf7-form-control-wrap"
                                  data-name="dob"
                                  ><input
                                    class="wpcf7-form-control wpcf7-date wpcf7-validates-as-required wpcf7-validates-as-date"
                                    min="1999-04-01"
                                    max="2005-06-30"
                                    {{-- aria-required="true"
                                    aria-invalid="false" --}}
                                    required
                                    type="date"
                                    name="dob" wire:model="dob"/></span
                              ></label>
                            </p>
                            @error('dob') <p class="text-danger">{{ $message }}</p> @enderror

                          </div>
                          <div class="vc_col-sm-12 vc_col-md-9">
                            <div class="vc_row">
                              <div class="vc_col-sm-12 vc_col-md-6">
                                <p>
                                  <label
                                    >Telephone number<br />
                                    <span
                                      class="wpcf7-form-control-wrap"
                                      data-name="phone_number"
                                      ><input
                                        size="40"
                                        class="wpcf7-form-control wpcf7-tel wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-tel"
                                        aria-required="true"
                                        aria-invalid="false"
                                        type="tel"
                                        required
                                        name="phone_number" wire:model="phone_number" /></span
                                  ></label>
                                </p>
                                @error('phone_number') <p class="text-danger">{{ $message }}</p> @enderror

                              </div>
                              <div class="vc_col-sm-12 vc_col-md-6">
                                <p>
                                  <label
                                    >WhatsApp number<br />
                                    <span
                                      class="wpcf7-form-control-wrap"
                                      data-name="whatsapp_number"
                                      ><input
                                        size="40"
                                        class="wpcf7-form-control wpcf7-tel wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-tel"
                                        aria-required="true"
                                        aria-invalid="false"
                                        type="tel"
                                        required
                                        name="whatsapp_number" wire:model="whatsapp_number" /></span
                                  ></label>
                                </p>
                                @error('whatsapp_number') <p class="text-danger">{{ $message }}</p> @enderror

                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="vc_row">
                          <div class="vc_col-sm-12">
                            <p>
                              <label
                                >Please indicate where you’re applying from
                                (District, Village)<br />
                                <span
                                  class="wpcf7-form-control-wrap"
                                  data-name="region"
                                  ><input
                                    size="40"
                                    class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                    aria-required="true"
                                    aria-invalid="false"
                                    type="text"
                                    required
                                    name="region" wire:model="region" /></span
                              ></label>
                            </p>
                            @error('region') <p class="text-danger">{{ $message }}</p> @enderror
                          </div>
                        </div>
                        <div class="vc_row">
                          <div class="vc_col-sm-12 vc_col-md-6">
                            <p>
                              <label
                                >How are you applying for this scholarship?
                                <span
                                  class="wpcf7-form-control-wrap"
                                  data-name="applying-by"
                                  ><select
                                    class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required"
                                    aria-required="true"
                                    aria-invalid="false"
                                    name="applying_by"
                                    required
                                    wire:model="applying_by"
                                  >
                                    <option value="Using a smartphone">
                                      Using a smartphone
                                    </option>
                                    <option value="Using a laptop">
                                      Using a laptop
                                    </option>
                                    <option value="Using a desktop computer">
                                      Using a desktop computer
                                    </option>
                                  </select></span
                                ></label
                              >
                            </p>
                            @error('applying_by') <p class="text-danger">{{ $message }}</p> @enderror

                          </div>
                          <div class="vc_col-sm-12 vc_col-md-6">
                            <p>
                              <label
                                >How did you hear about this scholarship?<br />
                                <span
                                  class="wpcf7-form-control-wrap"
                                  data-name="about_us"
                                  ><input
                                    size="40"
                                    class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                    aria-required="true"
                                    aria-invalid="false"
                                    type="text"
                                    required
                                    name="about_us" wire:model="about_us" /></span
                              ></label>
                            </p>
                            @error('about_us') <p class="text-danger">{{ $message }}</p> @enderror
                          </div>
                        </div>
                        <div class="vc_row">
                          <div class="vc_col-sm-12">
                            <h4 style="margin-top: 40px">
                              Your Personal Background
                            </h4>
                            <p>
                              <label
                                >Describe your current living situation.
                                <span
                                  class="wpcf7-form-control-wrap"
                                  data-name="living_situation"
                                >
                                  <textarea
                                    cols="40"
                                    rows="10"
                                    class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required"
                                    aria-required="true"
                                    aria-invalid="false"
                                    name="living_situation"
                                    required
                                    wire:model="living_situation"
                                  ></textarea></span></label
                              ><br />
                              <label
                                >Tell us how you have been fuflling your fees obligation
                                <span
                                  class="wpcf7-form-control-wrap"
                                  data-name="about_family"
                                >
                                  <textarea
                                    cols="40"
                                    rows="10"
                                    class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required"
                                    aria-required="true"
                                    aria-invalid="false"
                                    name="about_family"
                                    required
                                    wire:model="about_family"
                                  ></textarea></span></label
                              ><br />
                              <label
                                >Why do you deserve this scholarship? [Please note
                                that this information will be kept confidential]
                                <span
                                  class="wpcf7-form-control-wrap"
                                  data-name="deserve"
                                >
                                  <textarea
                                    cols="40"
                                    rows="10"
                                    class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required"
                                    aria-required="true"
                                    aria-invalid="false"
                                    name="deserve"
                                    wire:model="deserve"
                                    required
                                  ></textarea></span></label
                              ><br />
                              <label
                                >What are challenges you faced while growing up?
                                <span
                                  class="wpcf7-form-control-wrap"
                                  data-name="challenges"
                                >
                                  <textarea
                                    cols="40"
                                    rows="10"
                                    class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required"
                                    aria-required="true"
                                    aria-invalid="false"
                                    name="challenges"
                                    required
                                    wire:model="challenges"
                                  ></textarea></span
                              ></label>
                            </p>
                          </div>
                        </div>
                        <div class="vc_row">
                          <div class="vc_col-sm-12">
                            <h4 style="margin-top: 40px">
                              Your Education &amp; Experience
                            </h4>
                            <p>
                              <label
                                >What is your highest level of education?
                                <span
                                  class="wpcf7-form-control-wrap"
                                  data-name="level_of_education"
                                  ><input
                                    size="40"
                                    class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                    aria-required="true"
                                    aria-invalid="false"
                                    type="text"
                                    name="level_of_education"
                                    required
                                    wire:model="level_of_education"
                                     /></span></label
                              ><br />
                              <label
                                >What were your selected subject/combination in
                                school?
                                <span
                                  class="wpcf7-form-control-wrap"
                                  data-name="combination"
                                  ><input
                                    size="40"
                                    class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                    aria-required="true"
                                    aria-invalid="false"
                                    type="text"
                                    required
                                    name="combination" wire:model="combination" /></span></label
                              ><br />
                              <label
                                >How many points did you achieve at Senior 6?
                                <span
                                  class="wpcf7-form-control-wrap"
                                  data-name="points"
                                  ><input
                                    size="40"
                                    class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                    aria-required="true"
                                    aria-invalid="false"
                                    type="text"
                                    required
                                    name="points" wire:model="points" /></span></label
                              ><br />
                              <label
                                >How would your teachers describe you?
                                <span
                                  class="wpcf7-form-control-wrap"
                                  data-name="your-education-04"
                                >
                                  <textarea
                                    cols="40"
                                    rows="10"
                                    class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required"
                                    aria-required="true"
                                    aria-invalid="false"
                                    name="your-education-04"
                                    wire:model="your-education-04"
                                  ></textarea></span></label
                              ><br />
                              <label
                                >What is your experience in IT?
                                <span
                                  class="wpcf7-form-control-wrap"
                                  data-name="experience"
                                >
                                  <textarea
                                    cols="40"
                                    rows="10"
                                    class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required"
                                    aria-required="true"
                                    aria-invalid="false"
                                    name="experience"
                                    required
                                    wire:model="experience"
                                  ></textarea></span></label
                              ><br />
                              <label
                                >Explain us your passion of tech - how did it show
                                in the past?
                                <span
                                  class="wpcf7-form-control-wrap"
                                  data-name="passion_of_tech"
                                >
                                  <textarea
                                    cols="40"
                                    rows="10"
                                    class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required"
                                    aria-required="true"
                                    aria-invalid="false"
                                    name="passion_of_tech"
                                    required
                                    wire:model="passion_of_tech"
                                  ></textarea></span></label
                              ><br />
                              <label
                                >How do you believe your previous experiences have
                                prepared you for a career in software engineering
                                and innovation?
                                <span
                                  class="wpcf7-form-control-wrap"
                                  data-name="prepared"
                                >
                                  <textarea
                                    cols="40"
                                    rows="10"
                                    class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required"
                                    aria-required="true"
                                    aria-invalid="false"
                                    name="prepared"
                                    required
                                    wire:model="prepared"
                                  ></textarea></span
                              ></label>
                            </p>
                          </div>
                        </div>
                        <div class="vc_row">
                          <div class="vc_col-sm-12">
                            <h4 style="margin-top: 40px">Your Motivation</h4>
                            <p>
                              <label
                                >What motivated you to apply for the Groundbreaker
                                Talents program, and what do you hope to gain from
                                it?
                                <span
                                  class="wpcf7-form-control-wrap"
                                  data-name="motivated"
                                >
                                  <textarea
                                    cols="40"
                                    rows="10"
                                    class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required"
                                    aria-required="true"
                                    aria-invalid="false"
                                    name="motivated"
                                    required
                                    wire:model="motivated"
                                  ></textarea></span></label
                              ><br />
                              <label
                                >How do you plan to contribute to the program and
                                support fellow participants throughout the
                                residential program?
                                <span
                                  class="wpcf7-form-control-wrap"
                                  data-name="plan_to_contribute"
                                >
                                  <textarea
                                    cols="40"
                                    rows="10"
                                    class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required"
                                    aria-required="true"
                                    aria-invalid="false"
                                    name="plan_to_contribute"
                                    required
                                    wire:model="plan_to_contribute"
                                  ></textarea></span
                              ></label>
                            </p>
                          </div>
                        </div>
                        <div class="vc_row">
                          <div class="vc_col-sm-12">
                            <h4 style="margin-top: 40px">Your Skills</h4>
                            <p>
                              The following questions can be answered in outline
                              or essay form.
                            </p>
                            <p>
                              <label
                                >You are part of Groundbreaker Talents and work on
                                designing an application for a parking lot in
                                Kampala with 5 of your colleauges. One of your
                                team members does not show up to the meetings
                                while the other one is constantly creating
                                conflict using aggressive language. How do you
                                deal with the situation?
                                <span
                                  class="wpcf7-form-control-wrap"
                                  data-name="question1"
                                >
                                  <textarea
                                    cols="40"
                                    rows="10"
                                    class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required"
                                    aria-required="true"
                                    aria-invalid="false"
                                    name="question1"
                                    required
                                    wire:model="question1"
                                  ></textarea></span></label
                              ><br />
                              <label
                                >Describe a successful team project you were a
                                part of. What role did you play, and how did your
                                contributions impact the team's success?
                                <span
                                  class="wpcf7-form-control-wrap"
                                  data-name="question2"
                                >
                                  <textarea
                                    cols="40"
                                    rows="10"
                                    class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required"
                                    aria-required="true"
                                    aria-invalid="false"
                                    name="question2"
                                    required
                                    wire:model="question2"
                                  ></textarea></span></label
                              ><br />
                              <label
                                >Describe a situation where you initiated or were
                                a part of a change that had a positive impact on
                                your community or environment.
                                <span
                                  class="wpcf7-form-control-wrap"
                                  data-name="question3"
                                >
                                  <textarea
                                    cols="40"
                                    rows="10"
                                    class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required"
                                    aria-required="true"
                                    aria-invalid="false"
                                    name="question3"
                                    required
                                    wire:model="question3"
                                  ></textarea></span></label
                              ><br />
                              <label
                                >You receive 300m UGX to create positive change in
                                your community/country involving technology - what
                                would you do?
                                <span
                                  class="wpcf7-form-control-wrap"
                                  data-name="question4"
                                >
                                  <textarea
                                    cols="40"
                                    rows="10"
                                    class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required"
                                    aria-required="true"
                                    aria-invalid="false"
                                    name="question4"
                                    required
                                    wire:model="question4"
                                  ></textarea></span
                              ></label>
                            </p>
                          </div>
                        </div>
                        <h4 style="margin-top: 40px">
                          Any Additional Information
                        </h4>
                        <p>
                          <label
                            >Is there any additional information or aspect of your
                            background, experiences, or aspirations that you would
                            like to share with us?
                            <span
                              class="wpcf7-form-control-wrap"
                              data-name="additional_information"
                            >
                              <textarea
                                cols="40"
                                rows="10"
                                class="wpcf7-form-control wpcf7-textarea"
                                aria-invalid="false"
                                name="additional_information"
                                required
                                wire:model="additional_information"
                              ></textarea></span
                          ></label>
                        </p>
                        <h4 style="margin-top: 40px">Uploads</h4>
                        <div class="vc_row">
                          <div class="vc_col-sm-12 vc_col-md-6">
                            <p>
                              <label
                                >Upload any other certificate that can support
                                your application
                                <span
                                  class="wpcf7-form-control-wrap"
                                  data-name="certificate"
                                  ><input
                                    size="40"
                                    class="wpcf7-form-control wpcf7-file wpcf7-validates-as-required"
                                    accept=".jpg,.png,.gif,.tif,.pdf,.doc,.docx,.txt,.svg,.odt"
                                    aria-required="true"
                                    aria-invalid="false"
                                    type="file"
                                    required
                                    name="certificate" wire:model="certificate" /></span
                              ></label>
                            </p>
                          </div>
                          <div class="vc_col-sm-12 vc_col-md-6">
                            <p>
                              <label
                                >Upload letter of recommendation with contact
                                details
                                <span
                                  class="wpcf7-form-control-wrap"
                                  data-name="recommendation_letter"
                                  ><input
                                    size="40"
                                    class="wpcf7-form-control wpcf7-file wpcf7-validates-as-required"
                                    accept=".jpg,.png,.gif,.tif,.pdf,.doc,.docx,.txt,.svg,.odt"
                                    aria-required="true"
                                    aria-invalid="false"
                                    type="file"
                                    required
                                    name="recommendation_letter" wire:model="recommendation_letter" /></span
                              ></label>
                            </p>
                          </div>
                        </div>
                        <div class="vc_row">
                          <div class="vc_col-sm-12 vc_col-md-12">
                            <p>
                              <label
                                >Please take time and recommend to your friends this program
                                <span
                                  class="wpcf7-form-control-wrap"
                                  data-name="recommend_friend"
                                  ><input
                                    size="40"
                                    class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                    aria-required="true"
                                    aria-invalid="false"
                                    type="text"
                                    placeholder="john doe johndoe@gmail.com 07## #######, doe john doe@gmail.com 07## #######."
                                    name="recommend_friend" wire:model="recommend_friend"  /></span
                              ></label>
                            </p>
                          </div>
                          {{-- <div class="vc_col-sm-12 vc_col-md-6">
                            <p>
                              <label
                                >Please provide your recommenders phone number
                                <span
                                  class="wpcf7-form-control-wrap"
                                  data-name="recommender-phone"
                                  ><input
                                    size="40"
                                    class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                    aria-required="true"
                                    aria-invalid="false"
                                    type="text"
                                    name="recommender-phone" /></span
                              ></label>
                            </p>
                          </div> --}}
                        </div>
                        <div class="vc_row">
                          <div class="vc_col-sm-12 vc_col-md-6">
                            <p>
                              <label
                                >Please provide a parent's/guardian's name
                                <span
                                  class="wpcf7-form-control-wrap"
                                  data-name="guardian_name"
                                  ><input
                                    size="40"
                                    class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                    aria-required="true"
                                    aria-invalid="false"
                                    type="text"
                                    name="guardian_name" wire:model="guardian_name" /></span
                              ></label>
                            </p>
                          </div>
                          <div class="vc_col-sm-12 vc_col-md-6">
                            <p>
                              <label
                                >Please provide a parent's/guardian's phone number
                                <span
                                  class="wpcf7-form-control-wrap"
                                  data-name="guardian_number"
                                  ><input
                                    size="40"
                                    class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                    aria-required="true"
                                    aria-invalid="false"
                                    type="text"
                                    name="guardian_number" wire:model="guardian_number" /></span
                              ></label>
                            </p>
                          </div>
                        </div>
                        <h4 style="margin-top: 40px">Declaration</h4>
                        <p>
                          <label
                            ><span
                              class="wpcf7-form-control-wrap"
                              data-name="accept"
                              ><span class="wpcf7-form-control wpcf7-acceptance"
                                ><span class="wpcf7-list-item"
                                  ><input
                                    type="checkbox"
                                    name="accept"
                                    value="1"
                                    aria-invalid="false"
                                    wire:model="accept"
                                    /></span></span
                            ></span>
                            I understand that this program is a full-time
                            residential scholarship, so I'm able and willing to
                            commit myself fully to it.</label
                          >
                        </p>
                        <h4 style="margin-top: 40px">Financial Assistance</h4>
                        <p>
                          This residential scholarship is fully funded and all
                          accepted applicants will be required to pay a commitment
                          fee of UGX 200,000 once for the whole duration of the
                          program. The commitment fee can be paid all at once or
                          in instalments. In case you can show that this amount
                          exceeds your possibilities reach out to this number
                          (+256 756948969/ +256 784462913) and you may receive a
                          fully funded stipend.
                        </p>
                          <input
                            class="wpcf7-form-control wpcf7-submit has-spinner vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-rounded vc_btn3-style-modern vc_btn3-color-purple"
                            type="submit"
                            value="Submit"
                          />
                          {{-- <button type="submit" name="send" class="button">
                            <span class="pre-submit">Send</span>
                        </button> --}}
                          {{-- <span class="wpcf7-spinner"></span> --}}
                        {{-- <div
                          class="wpcf7-response-output"
                          aria-hidden="true"
                        ></div> --}}
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="vc-row-container container"></div>
    </div>
  </div>
