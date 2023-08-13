@extends('layouts.index')


    @section('css')

    <style>
        .ks-dewsse {
          background-color: #ecf4ff !important;
        }
    
        .con-tss-e,
        .con-tss-e a {
          font-size: 32px;
          font-weight: 600;
          color: #131a4a !important;
          text-decoration: none;
        }
        .ks-dewsse {
          padding: 35px;
        }
        .name_field {
          background-position: left 15px center !important;
          background-image: url('{{asset('assets/images/person.png')}}') !important;
          background-repeat: no-repeat !important;
          margin-bottom: 14px !important;
        }
        .sse-et2-sd-binp {
          width: 100%;
          border: 1px solid #e3ebfc ;
          box-shadow: 0px 0px 20px 0px rgba(54, 141, 254, 0.15);
          min-height: 55px;
          line-height: 55px;
          font-size: 16px;
          color: #656776 !important;
          text-indent: 45px;
          margin-bottom: 10px !important;
        }
        .fasd-flex-folex {
          display: flex;
          gap: 16px;
          margin-top: 18px;
        }
        .fasd-flex-folex div {
            width: 100%;
        }
        @media (max-width: 786px) {
          .fasd-flex-folex {
            flex-direction: column !important;
            margin-top: 0px;
            gap: 8px;
          }
        }
        .fore-maeomain p {
          margin: 0px !important;
        }
        .email_field {
          background-position: left 15px center !important;
          background-image: url('{{asset('assets/images/email.png')}}') !important;
          background-repeat: no-repeat !important;
          padding: 0px !important;
        }
        .phone_field {
          background-position: left 15px center !important;
          background-image: url('{{asset('assets/images/phone.png')}}') !important;
          background-repeat: no-repeat !important;
          padding: 0px !important;
        }
        .btu-submit-3s {
          margin-top: 0px;
          min-height: 55px;
          border: 0px;
          width: 100%;
          background: #ff5100;
          color: #fff !important;
          font-size: 20px;
          margin: auto;
          font-weight: bold;
          cursor: pointer;
        }
        .fore-maeomain {
          display: flex;
          flex-direction: column;
          max-width: 700px;
          margin: auto;
          justify-content: center;
          gap: 8px;
        }
    
        h5{
            font-size: 20px !important;
        }
    
    
      </style>
  
<style>
    .kud-essex2 {
      padding-top: 100px;
      padding-bottom: 8%;
      background-color: #ecf4ff !important;
    }

    .stmdouls-xddee,
    .et_pb_posts_nav a,
    .et_pb_tab,
    .et_pb_with_background {
      position: relative;
      background-size: cover;
      background-position: 50%;
      background-repeat: no-repeat;
    }
    .sts-xddee.section_has_divider.et_pb_top_divider .et_pb_top_inside_divider {
      background-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDBweCIgdmlld0JveD0iMCAwIDEyODAgMTQwIiBwcmVzZXJ2ZUFzcGVjdFJhdGlvPSJub25lIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxnIGZpbGw9IiNmZmZmZmYiPjxwYXRoIGQ9Ik0xMjgwIDBsLTI2NiA5MS41MmE3Mi41OSA3Mi41OSAwIDAgMS0zMC43NiAzLjcxTDAgMHYxNDBoMTI4MHoiIGZpbGwtb3BhY2l0eT0iLjUiLz48cGF0aCBkPSJNMTI4MCAwbC0yNjIuMSAxMTYuMjZhNzMuMjkgNzMuMjkgMCAwIDEtMzkuMDkgNkwwIDB2MTQwaDEyODB6Ii8+PC9nPjwvc3ZnPg==);
      background-size: 100% 100px;
      top: 0;
      height: 100px;
      z-index: 1;
      transform: scale(-1, -1);
    }
    .et_pb_bottom_inside_divider,
    .et_pb_top_inside_divider {
      display: block;
      background-repeat-y: no-repeat;
      position: absolute;
      pointer-events: none;
      width: 100%;
      left: 0;
      right: 0;
    }
    .et_pb_row_1.et_pb_row {
      margin-top: -2% !important;
      margin-bottom: -1% !important;
      margin-left: auto !important;
      margin-right: auto !important;
    }
    .section_has_divider .et_pb_row {
      z-index: 9999;
    }
    .et_pb_row_1 {
      height: 3%;
      max-height: 5%;
      align-items: center;
    }
    @media (min-width: 981px) {
      .et_pb_gutters3 .et_pb_column,
      .et_pb_gutters3.et_pb_row .et_pb_column {
        margin-right: 5.5%;
      }
    }
    .et_pb_team_member_1.et_pb_team_member,
    .et_pb_team_member_2.et_pb_team_member,
    .et_pb_team_member_3.et_pb_team_member,
    .et_pb_team_member_0.et_pb_team_member {
      font-size: 18px;
    }
    .et-waypoint.et_pb_animation_off,
    .et-waypoint:not(.et_pb_counters).et_pb_animation_off,
    .et_pb_animation_off {
      opacity: 1;
    }
    .et_pb_team_member_1 .et_pb_team_member_image:hover,
    .et_pb_team_member_2 .et_pb_team_member_image:hover,
    .et_pb_team_member_0 .et_pb_team_member_image:hover,
    .et_pb_team_member_3 .et_pb_team_member_image:hover {
      filter: hue-rotate(0deg) saturate(100%) brightness(100%) contrast(100%)
        invert(0%) sepia(0%) opacity(100%) blur(0px);
      backface-visibility: hidden;
    }
    .et_pb_team_member_3 .et_pb_team_member_image,
    .et_pb_team_member_1 .et_pb_team_member_image,
    .et_pb_team_member_2 .et_pb_team_member_image,
    .et_pb_team_member_0 .et_pb_team_member_image {
      transition: filter 300ms ease 0ms;
      filter: hue-rotate(0deg) saturate(0%) brightness(100%) contrast(100%)
        invert(0%) sepia(0%) opacity(100%) blur(0px);
      backface-visibility: hidden;
    }
    .et_pb_team_member_image {
      max-width: 320px;
      margin-right: 30px;
      line-height: 0 !important;
      position: relative;
    }
    img {
      max-width: 100%;
      height: auto;
    }
    .et_pb_team_member_1.et_pb_team_member .et_pb_team_member_description,
    .et_pb_team_member_2.et_pb_team_member .et_pb_team_member_description,
    .et_pb_team_member_3.et_pb_team_member .et_pb_team_member_description,
    .et_pb_team_member_0.et_pb_team_member .et_pb_team_member_description {
      border-left: 8px solid #2ea3f2;
      padding: 0px 10px;
    }
    .ad-upe-ckas {
      font-weight: 700;
      text-transform: uppercase;
      font-size: 23px;
    }
    .d-re-sfle-xl {
      padding-top: 40px;
      display: flex;
      justify-content: space-between;
      gap: 40px;
    }
    @media (max-width: 768px) {
      .d-re-sfle-xl {
        flex-direction: column;
        padding: 0 18px;
        align-items: center;
      }
      .et-waypoint.et_pb_animation_off,
      .et-waypoint:not(.et_pb_counters).et_pb_animation_off,
      .et_pb_animation_off {
        opacity: 1;
        margin: auto;
      }
    }
    .heid-instn-2 {
      font-family: "Lato", Helvetica, Arial, Lucida, sans-serif;
      font-weight: 700;
      font-size: 42px;
      color: #000 !important;
      line-height: 1.5em;
    }
    .ms-eh-ein {
      text-align: center;
    }
    .ma-swepe {
      max-width: 1240px !important;
      margin: auto;
    }
    @media (min-width: 769px) {
      .wso-wif {
        width: 50%;
      }
    }

    .d-dr-dr {
      background-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDBweCIgdmlld0JveD0iMCAwIDEyODAgMTQwIiBwcmVzZXJ2ZUFzcGVjdFJhdGlvPSJub25lIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxnIGZpbGw9IiNmZmZmZmYiPjxwYXRoIGQ9Ik0xMjgwIDBsLTI2NiA5MS41MmE3Mi41OSA3Mi41OSAwIDAgMS0zMC43NiAzLjcxTDAgMHYxNDBoMTI4MHoiIGZpbGwtb3BhY2l0eT0iLjUiLz48cGF0aCBkPSJNMTI4MCAwbC0yNjIuMSAxMTYuMjZhNzMuMjkgNzMuMjkgMCAwIDEtMzkuMDkgNkwwIDB2MTQwaDEyODB6Ii8+PC9nPjwvc3ZnPg==);
      background-size: 100% 100px;
      bottom: 0;
      height: 100px;
      z-index: 10;
      transform: scale(1, 1);
    }
    .et_pb_bottom_inside_divider,
    .et_pb_top_inside_divider {
      display: block;
      background-repeat-y: no-repeat;
      position: absolute;
      pointer-events: none;
      width: 100%;
      left: 0;
      right: 0;
    }

    .heid-instn-2 {
      font-family: "Lato", Helvetica, Arial, Lucida, sans-serif;
      font-weight: 700;
      font-size: 42px;
      color: #000 !important;
      line-height: 1.5em;
    }
    .ps-serdcd {
      color: #898f99 !important;
      max-width: 790px;
      text-align: center;
      margin: auto;
      padding: 45px 14px;
    }

    .xnas- {
      max-width: 1250px;
      margin: auto;
      padding: 45px 14px;
    }
    .cus-max-width-1080{
        max-width: 1080px;
        margin: auto;
    }
    .afasd-h223 {
      font-weight: 700;
      font-size: 18px;
      text-align: center;
    }
    .fs-maind-e .lazy-load-div {
      object-fit: cover;
      text-align: center
    }
    .ms-eh-ein {
      text-align: center;
    }
    .js-cen-between {
      justify-content: space-between;
    }
    .msc-cetn-tex {
      text-align: center;
    }
    .our-ccoma-banner {
      letter-spacing: 2px;
      padding-bottom: 80px;
      padding-top: 80px;
      text-shadow: 0em 0.1em 0.1em rgba(0, 0, 0, 0.5) !important;
      background-blend-mode: darken !important;
      background-image: linear-gradient(
          180deg,
          rgba(51, 51, 51, 0.4) 0%,
          rgba(51, 51, 51, 0.4) 100%
        ),
        url('{{asset('assets/images/we-pay-cash-for-houses-in-New-York (2).jpg')}}') !important;
      background-repeat: no-repeat;
      background-position: center;
      background-size: cover;
    }
    .h1-asw3s-s {
      font-weight: 600;
      font-size: 44px;
      text-align: center;
      color: #ffffff !important;
    }
    h3{
        margin-bottom: 18px !important;
    }
  </style>



    @endsection


@section('content')

<div id="et-boc" class="et-boc">
    <div id="et-main-area">
    <div id="main-content">
    <article id="post-505" class="post-505 page type-page status-publish has-post-thumbnail hentry">
    <div class="entry-content">
    <div class="et-l et-l--post">
    <div class="et_builder_inner_content et_pb_gutters3">
        <div class="our-ccoma-banner" style="position: relative;">
            <div class="">
              <div class="">
                <h1 class="h1-asw3s-s">The Foremost Home Buyers in Long Island</h1>
              </div>
            </div>
            <div id="-shape-divider-913-13" class="oxy-shape-divider ">
                <div class="oxy_shape_divider">
                    <svg style="color: #fff" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" preserveAspectRatio="none">
                        <path fill="currentColor" fill-opacity="1" d="M0,288L1440,0L1440,320L0,320Z"></path>
                    </svg>
                </div>
            </div>
          </div>
    <div class="">
        <div class="">
          <div class="">
            <div class="ps-serdcd">
              <div class="">
                <h2 class="heid-instn-2">Our Journey</h2>
                <p>
                  At Leave The Key Homebuyers, our foundation is built upon ethical, honest, and authentic principles.
                   We view the process of selling your home as a consultative journey, always ready to address any queries
                    to facilitate your desired outcome.
                   Whether your aim is a swift sale, overcoming financial challenges, or any other motive, we're here to assist.
                </p>
                <p>
                  Leave The Key Homebuyers, a family-owned enterprise, emerged to offer an alternative avenue for New York homeowners
                   seeking to sell their properties. Over the past years, we've been privileged to assist numerous delighted homeowners.
                </p>
                <p>
                  <em
                    >
                    Our objective centers on streamlining and expediting the sale of your home, ensuring a seamless and stress-free experience.
                    </em
                  >
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div
      class="kud-essex2 sts-xddee et_pb_with_background et_section_regular section_has_divider et_pb_bottom_divider et_pb_top_divider"
    >
      <div class="et_pb_top_inside_divider" style=""></div>
      <!-- max-widt -->
      <div class="ma-swepe">
        <div class="et_pb_row et_pb_row_1">
          <div
            class="et_pb_column et_pb_column_4_4 et_pb_column_1 et_pb_css_mix_blend_mode_passthrough et-last-child"
          >
            <div
              class="stmdouls-xddee et_pb_text et_pb_text_1 et_pb_text_align_left et_pb_bg_layout_light"
            >
              <div class="ms-eh-ein">
                <h2 class="heid-instn-2">Our Family</h2>
              </div>
            </div>
          </div>
        </div>
        <div class="d-re-sfle-xl">
          <div
            class="wso-wif et_pb_column et_pb_column_1_2 et_pb_column_2 et_pb_css_mix_blend_mode_passthrough"
          >
            <div
              class="stmdouls-xddee et_pb_team_member et_pb_team_member_0 clearfix et_pb_bg_layout_light"
            >
              <div
                class="et_pb_team_member_image et-waypoint et_pb_animation_off et-animated"
              >
                <img
                  decoding="async"
                  width="600"
                  height="600"
                  src="{{asset('assets/images/Larry-Wagner-sq.png')}}"
                  alt="Larry Wagner"
                  class="wp-image-4530 entered lazyloaded"
                 
                  data-ll-status="loaded"
                />
              </div>
              <div class="et_pb_team_member_description">
                <h4 class="ad-upe-ckas">Larry Wagner</h4>
                <p class="et_pb_member_position">Owner, Acquisitions</p>
                <div>
                  <p>
                    Larry spent most of the past ten years acquiring,
                    renovating, and selling single family homes and multifamily
                    properties with his late father, David. Real estate
                    investing is the perfect career for Larry, it allows him to
                    combine the design and construction skills he cultivated
                    over ten years as a custom cabinet builder with the
                    financial skills he developed over three decades in
                    financial services helping clients manage and invest their
                    assets.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div
         
            class="wso-wif et_pb_column et_pb_column_1_2 et_pb_column_3 et_pb_css_mix_blend_mode_passthrough et-last-child"
          >
            <div
              class="stmdouls-xddee et_pb_team_member et_pb_team_member_1 clearfix et_pb_bg_layout_light"
            >
              <div
                class="et_pb_team_member_image et-waypoint et_pb_animation_off et-animated"
              >
                <img
                  decoding="async"
                  width="600"
                  height="600"
                  src="{{asset('assets/images/Ben-sq.png')}}"
                  alt="Ben Wagner"
                  class="wp-image-4531 entered lazyloaded"
                  data-ll-status="loaded"
                />
              </div>
              <div class="et_pb_team_member_description">
                <h4 class="ad-upe-ckas">Ben Wagner</h4>
                <p class="et_pb_member_position">
                  Owner, Marketing &amp; Operations
                </p>
                <div>
                  <p>
                    Before getting involved in real estate, Ben spent over 10
                    years living in Boston and working in the&nbsp;technology
                    field at a range of startup companies. After his
                    grandfather’s passing, Ben decided to move back home to New
                    York to join his father and become the 3rd generation in the
                    real estate business. Ben focuses on our lead generation
                    and&nbsp;incorporating technology into our business to keep
                    it running smoothly.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="d-re-sfle-xl">
          <div
            class="et_pb_column et_pb_column_1_2 et_pb_column_4 et_pb_css_mix_blend_mode_passthrough"
          >
            <div
              class="stmdouls-xddee et_pb_team_member et_pb_team_member_2 clearfix et_pb_bg_layout_light"
            >
              <div
                class="et_pb_team_member_image et-waypoint et_pb_animation_off et-animated"
              >
                <img
                  decoding="async"
                  width="390"
                  height="390"
                  src="{{asset('assets/images/Rudy-sq.png')}}"
                  alt="Rudy"
                  class="wp-image-4529 entered lazyloaded"
                  data-ll-status="loaded"
                />
              </div>
              <div class="et_pb_team_member_description">
                <h4 class="ad-upe-ckas">Rudy</h4>
                <p class="et_pb_member_position">Acquisitions</p>
              </div>
            </div>
          </div>
          <div class="wso-wif" style="margin-bottom: 40px;">
            <div
              class="et_pb_module et_pb_team_member et_pb_team_member_3 clearfix et_pb_bg_layout_light"
            >
              <div
                class="et_pb_team_member_image et-waypoint et_pb_animation_off et-animated"
              >
                <img
                  decoding="async"
                  width="390"
                  height="390"
                  src="{{asset('assets/images/Bruce-sq.png')}}"
                  alt="Bruce"
                  class="wp-image-4527 entered lazyloaded"
                  data-ll-status="loaded"
                />
              </div>
              <div class="et_pb_team_member_description">
                <h4 class="ad-upe-ckas">Bruce</h4>
                <p class="et_pb_member_position">Project Management</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="et_pb_bottom_inside_divider d-dr-dr" style=""></div>
    </div>
   
    <div class="">
        <div class="">
          <div class="">
            <div class="ps-serdcd">
              <div class="">
                <h2 class="heid-instn-2">The Significance Behind Our Name & Logo</h2>
                <p>
                  We opted for the name "Leave The Key Homebuyers" to epitomize the effortless process of selling your home – a mere act of leaving the key, while entrusting all the intricacies to us.
                </p>
                <p>
                  Irrespective of the motivating factors behind your decision to sell your home, the bird within our symbol embodies the liberation attained when you're unshackled from the weight of property responsibilities.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div> 
      <div class="">
        <div class="xnas-">
          <div class="ms-eh-ein">
            <h3>Get To Know Us Through Video</h3>
          </div>
  
          <div class="fasd-flex-folex js-cen-between">
            <div class="">
              <div class="">
                <div class="">
                  <div class="msc-cetn-tex">
                    <a
                      href="#"
                      class="fs-maind-e"
                      data-video-title="About Leave The Key Homebuyers | Top-Rated Cash Home Buyers in New York"
                      title='Play video "About Leave The Key Homebuyers | Top-Rated Cash Home Buyers in New York"'
                      target="_blank"
                      rel="noopener"
                      height="200px"
                      width="356px"
                      style="height: 200px; width: 356px; max-width: 100%"
                    >
                      <img
                        aria-hidden="true"
                        src="{{asset('assets/images/sddefault (1).jpg')}}"
                        class="lazy-load-div"
                        height="200px"
                        width="356px"
                        style="height: 200px; width: 356px; max-width: 100%"
                      />
                    </a>
                  </div>
                </div>
              </div>
              <div class="">
                <div class="afasd-h223">
                  <h5>About Us &amp; Why We Do What We Do</h5>
                </div>
              </div>
            </div>
            <div class="">
              <div class="">
                <div class="">
                  <div class="msc-cetn-tex">
                    <a
                      href="#"
                      class="fs-maind-e"
                      data-video-title="Leave The Key Real Estate Radio - Ep 04 - Seller Situations w Ben Wagner | LI News Radio Long Island"
                      title='Play video "Leave The Key Real Estate Radio - Ep 04 - Seller Situations w Ben Wagner | LI News Radio Long Island"'
                      target="_blank"
                      rel="noopener"
                      height="200px"
                      width="356px"
                      style="height: 200px; width: 356px"
                    >
                      <img
                        aria-hidden="true"
                        src="{{asset('assets/images/sddefault (1).jpg')}}"
                        class="lazy-load-div"
                        height="200px"
                        width="356px"
                        style="height: 200px; width: 356px; max-width: 100%"
                      />
                    </a>
                  </div>
                </div>
              </div>
              <div class="">
                <div class="afasd-h223">
                  <h5>Our Radio Show on LI News Radio</h5>
                </div>
              </div>
            </div>
            
            <div class="">
              <div class="">
                <div class="">
                  <div class="msc-cetn-tex">
                    <a
                      href="#"
                      class="fs-maind-e"
                      data-video-title="Leave The Key Real Estate Radio - Ep 04 - Seller Situations w Ben Wagner | LI News Radio Long Island"
                      title='Play video "Leave The Key Real Estate Radio - Ep 04 - Seller Situations w Ben Wagner | LI News Radio Long Island"'
                      target="_blank"
                      rel="noopener"
                      height="200px"
                      width="356px"
                      style="height: 200px; width: 356px"
                    >
                      <img
                        aria-hidden="true"
                        src="{{asset('assets/images/sddefault (1).jpg')}}"
                        class="lazy-load-div"
                        height="200px"
                        width="356px"
                        style="height: 200px; width: 356px; max-width: 100%"
                      />
                    </a>
                  </div>
                </div>
              </div>
              <div class="">
                <div class="afasd-h223">
                  <h5>
                    Featured On: Nationwide Real Estate Investor Podcast
                  </h5>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
      <div class="ks-dewsse">
        <div class="se-se3sd">
          <div class="">
            <div class="">
              <div class="con-tss-e">
                <p style="text-align: center">
                 
                Complete this straightforward form, you can contact us at 
                <a href="#">
                  xxx-xxx-xxxx
                </a>
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="se-se3sd">
          <div class="">
            <div class="">
              <div class="">
                <div class="" id="-o2" lang="en-US" dir="ltr">
                  <form
                    action="/"
                    class="fore-maeomain"
                    aria-label="Contact form"
                    novalidate="novalidate"
                    data-status="init"
                  >
                    <p>
                      <span class="" data-name="full_name"
                        ><input
                          size="40"
                          class="sse-et2-sd-binp name_field"
                          aria-required="true"
                          aria-invalid="false"
                          placeholder="Name *"
                          value=""
                          type="text"
                          name="full_name"
                      /></span>
                    </p>
                    <div class="fasd-flex-folex">
                      <div class="">
                        <p>
                          <span class="" data-name="real_email"
                            ><input
                              size="40"
                              class="sse-et2-sd-binp email_field"
                              aria-required="true"
                              aria-invalid="false"
                              placeholder="Email *"
                              value=""
                              type="email"
                              name="real_email"
                          /></span>
                        </p>
                      </div>
                      <div class="">
                        <p>
                          <span class="" data-name="phone"
                            ><input
                              size="40"
                              class="sse-et2-sd-binp phone_field"
                              aria-required="true"
                              aria-invalid="false"
                              placeholder="Phone Number *"
                              value=""
                              type="text"
                              name="phone"
                          /></span>
                        </p>
                      </div>
                    </div>
                    <div class="full_col">
                      <p>
                        <input
                          class="sse-et2-sd-binp btu-submit-3s"
                          type="submit"
                          value="Let's Work Together"
                        />
                      </p>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </article>
    </div>
   
    </div>
    </div>
    @endsection

@section('js')

@endsection
