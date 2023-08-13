@extends('layouts.index')


@section('css')


    

    <style>


h5{
    font-size: 20px !important;
}

      div.et_pb_section.et_pb_section_0 {
        background-position:top; 
        background-size:cover; 
        background-blend-mode: multiply;
        background-image: linear-gradient(
            180deg,
            rgba(51, 51, 51, 0.4) 0%,
            rgba(51, 51, 51, 0.4) 100%
          ),
          url('{{asset('assets/images/real-estate-autumn-home.jpg')}}') !important;

      }
      .et_pb_section_0.et_pb_section {
        padding-top: 100px;
        padding-bottom: 100px;
        background-color: inherit !important;
      }
      @media only screen and (min-width: 1500px) {
        .et_pb_section {
          padding: 60px 0;
        }
        .amfemc-se{
          padding: 60px 14px;
        }
      }
      .et_pb_all_tabs,
      .et_pb_module,
      .et_pb_posts_nav a,
      .et_pb_tab,
      .et_pb_with_background {
        position: relative;
        background-size: cover;
        background-position: 50%;
        background-repeat: no-repeat;
      }
      .et_pb_text_0 {
        line-height: 56px;
        font-family: "Lato", Helvetica, Arial, Lucida, sans-serif;
        font-weight: 900;
        font-size: 45px;
        line-height: 56px;
        margin-bottom: 11px !important;
        color: #ffffff !important;
      }
  
      .et_pb_text_0 h1 {
        font-family: "Lato", Helvetica, Arial, Lucida, sans-serif;
        font-weight: 900;
        font-size: 45px;
        color: #ffffff !important;
        line-height: 56px;
      }
      .et_pb_text_1 {
        font-size: 18px;
      }
      .ks-dewsse {
        background-color: #ecf4ff !important;
      }
  
      .text-who-se-white {
        color: #ffffff;
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
        padding: 0px !important;

      }
      .sse-et2-sd-binp {
        width: 100%;
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
        gap: 10px;
        margin-top: 0px;
      }
      .fasd-flex-folex div {
        width: 100%;
      }
  
      .md-res-flex {
        display: flex;
        gap: 50px;
        justify-content: center;
        align-content: center;
        margin: auto;
        max-width: 1200px;
        padding: 30px;
      }
      @media (max-width: 768px) {
        .md-res-flex {
          flex-direction: column;
        }
        .md-res-flex .aid-flex-ares {
          width: 100% !important;
          margin: auto;
        }
      }
      .md-res-flex .aid-flex-ares {
        width: 50%;
      }
  
      .h1-www3s-s {
        font-family: "Lato", Helvetica, Arial, Lucida, sans-serif;
        font-weight: 900;
        font-size: 45px;
        color: #ffffff !important;
        line-height: 56px;
      }
  
      @media (max-width: 786px) {
        .fasd-flex-folex {
          flex-direction: column !important;
          margin-top: 0px;
          gap: 8px;
        }
        .d-flex-es-ese {
          flex-direction: column;
          gap: 10px !important;
        }
      }
      .fore-maeomain p {
        margin: 0px !important;
      }
      .company_field {
        background-position: left 15px center !important ;
        background-image: url('{{asset('assets/images/company.png')}}') !important;
        background-repeat: no-repeat !important;
        padding: 0px !important;

      }
      .email_field {
        background-position: left 15px center !important ;
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
      }
      .sunb-bms-head {
        color: #131a4a !important;
        line-height: 38px;
        font-family: "Lato", Helvetica, Arial, Lucida, sans-serif;
        font-weight: 900;
        font-size: 34px;
        line-height: 38px;
      }
      .new-scor-colr {
        color: #131a4a !important;
      }
      .ms-hehlae-e {
        padding: 60px 20px;
        max-width: 1020px;
        text-align: center;
        margin: auto;
      }
      .d-flex-es-ese {
        display: flex;
        gap: 40px;
      }
      .d-flex-es-ese div {
        width: 100%;
        text-align: start;
      }
      .ul-sl-ex-e {
        margin: 0px;
        padding: 0px;
        list-style-position: inside;
        color: #656776 !important;
      }
  
      @media (min-width: 981px) {
        .new-container {
          max-width: 76%;
          margin-left: auto;
          margin-right: auto;
          padding: 60px 20px
        }
  
        .et_pb_module {
          margin-bottom: 2.75% !important;
        }
        et_pb_gutters3 .et_pb_column_4_4 .et_pb_module,
        .et_pb_gutters3.et_pb_row .et_pb_column_4_4 .et_pb_module {
          margin-bottom: 2.75%;
        }
      }
  
      .et_pb_module {
        -webkit-animation-timing-function: linear;
        animation-timing-function: linear;
        -webkit-animation-duration: 0.2s;
        animation-duration: 0.2s;
      }
      .et_pb_toggle_close {
        background-color: #f4f4f4;
        padding: 12px 20px;
      }
      .et_pb_toggle_close h5 {
        margin: 0px;
      }
      .et_pb_toggle {
        border: 1px solid #d9d9d9;
      }
  
      .tog-cles-sc {
        width: 27px;
        height: 27px;
        border-radius: 50%;
        background-color: #f0f0f0;
        display: flex;
        justify-content: center;
        align-items: center;
        position: relative;
        cursor: pointer;
      }
  
      .ks-sd-plus,
      .ks-sd-minus {
        width: 12px;
        height: 0px;
        background-color: #707070;
        position: absolute;
      }
  
      .ks-sd-plus::before,
      .ks-sd-plus::after,
      .ks-sd-minus::before {
        content: "";
        width: 12px;
        height: 2px;
        background-color: #707070;
        position: absolute;
        top: 45%;
        left: 0;
      }
  
      .ks-sd-plus::before {
        transform: rotate(90deg);
      }
      .se-c-e2c {
        display: flex;
        align-items: center;
        justify-content: space-between;
      }
      .sms-cacorind-nd {
        max-height: 0px;
        overflow: hidden;
        transition: max-height 0.6s ease-in-out;
      }
      .sld-toglle-acc {
        max-height: 600px !important;
        overflow: visible !important;
        transition: max-height 0.6s ease-in-out;
      }
      .mb-ad-3 {
        padding-bottom: 30px !important;
      }



      #new_columns-1363-106{
        display: flex !important;
        align-items: center;
        justify-content: center;
        gap: 52px;
        padding: 40px 0;
      }
      @media (max-width:768px){
        #new_columns-1363-106{
        flex-direction: column;
        }
        #text_block-1377-106{
        text-align: start !important;
      }
      }
      #new_columns-1363-106 div{
        margin: unset !important;
      }
      #text_block-1377-106{
        text-align: end;
      }

    </style>
    <style>
      .yt-image {
        width: 460px !important;
        max-width: 100%;
      }
      #div_block-1642-106 {
        width: 50% !important;
      }
      #div_block-1641-106 {
        width: 50% !important;
      }
      .nw-dose-wews {
        margin-bottom: 30px !important;
      }
      .ct-div-block {
        margin-left: auto;
        margin-right: auto;
      }
      .et_pb_text_7.et_pb_text {
        color: #131a4a !important;
      }
      .nas-adslasd {
        text-align: center;
        padding: 20px 0px;
        display: flex;
        flex-direction: column;
        gap: 12px;
      }
      .nas-adslasd div {
        text-align: start;
        display: flex;
        gap: 5px;
        flex-direction: row;
      }
  
      @media (min-width: 741px) {
        .nas-adslasd {
          padding-left: 18px !important;
        }
  
        .nas-adslasd.green-list-wett {
          align-items: flex-end !important;
          padding-right: 18px !important;
        }
        .green-list-wett .green-list{
            text-align: end !important;
        }
        .m-srobot-mhu{
        margin-bottom: 110px;
      }
      .tex-wrapnow-bg-no{
        text-wrap:nowrap;
      }
      .m-atop-auto{
        margin-top: auto;
      }

      }
      @media (max-width: 740px) {
        .nas-adslasd .green-list {
          flex-direction: row-reverse !important;
        }
        .nas-adslasd.green-list-wett {
          align-items: flex-start !important;
        }
      }
  
      .new_columns-1363-106 {
        display: flex;
      }
      .sse-et2-sd-binp{
        border: none !important;
      }
      .he-ase2-30px{
        font-size: 28px !important;
      }
      input[type=text], textarea, input[type=password], [type="search"], [type="date"], [type="email"]{
        padding: 0px !important;
        padding-right: 9px !important;
        outline: none;
      }
      .atomic-iconblock-4-text{
        font-size: 18px !important;
      }
      h3, h4, h6 {
        margin-bottom: 12px;
        font-size: 24px !important;
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
      max-width: 1130px !important;
      margin: auto;
    }
    @media (min-width: 769px) {
      .wso-wif {
        width: 33.33%;
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
        url('http://localhost:8000/assets/images/we-pay-cash-for-houses-in-New-York (2).jpg') !important;
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

<div
class="et_pb_section et_pb_section_0 et_pb_with_background et_section_regular"
>
<div class="md-res-flex">
  <div class="aid-flex-ares m-srobot-mhu">
    <div class="">
      <div class="text-who-se-white h1-www3s-s">
        <h1 class="h1-www3s-s tex-wrapnow-bg-no">
          Are You a Licensed Realtor?</h1>
        <h4 class="he-ase2-30px">
          Seeking to 
            <span style="text-decoration: underline">
                3x – 4x your commission
            </span>
            ?</h4>
      </div>
    </div>
    <div class="">
      <div class="text-who-se-white">
        <p>
          We're seeking partnerships with top-tier agents to transform leads unsuitable for traditional sales into 
            <strong>
              substantial commissions.
            </strong>
        </p>
      </div>
    </div>
  </div>
  <div class="aid-flex-ares m-atop-auto">
    <div class="">
      <div class="">
        <div class="" dir="ltr">
          <form
            action="/"
            class="fore-maeomain"
            aria-label="Contact form"
            novalidate="novalidate"
            data-status="init"
          >
      
            <div class="fasd-flex-folex">
              <div class="">
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
              </div>
              <div class="">
                <p>
                  <span class="" data-name="phone"
                    ><input
                      size="40"
                      class="sse-et2-sd-binp company_field"
                      aria-required="true"
                      aria-invalid="false"
                      placeholder="Brokerage *"
                      value=""
                      type="text"
                      name="phone"
                  /></span>
                </p>
              </div>
            </div>
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
                style="text-indent: 0px !important;"
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
<div id="-shape-divider-913-13" class="oxy-shape-divider ">
    <div class="oxy_shape_divider">
        <svg style="color: #fff" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" preserveAspectRatio="none">
            <path fill="currentColor" fill-opacity="1" d="M0,288L1440,0L1440,320L0,320Z"></path>
        </svg>
    </div>
</div>
</div>

<div>
<div class="ms-hehlae-e">
  <div class="">
    <div class="">
      <div class="">
        <div class="">
            <p class="sunb-bms-head">Facilitate Your Seller's Home Sale
            </p>
        </div>
    </div>
    <div class="">
        <div class="new-scor-colr">
            <p>
                If you encounter dilapidated properties suitable for investor flipping, sellers in urgent need of swift sales, or homeowners seeking as-is cash offers for various reasons, we're here to assist in getting your seller's home sold. We purchase homes in their existing condition and aim to close promptly upon title acquisition.
            </p>
        </div>
    </div>
    </div>
  </div>
</div>
</div>


<section style="background-color: #ecf4ff" id="section-1360-106" class="ct-section" style="margin-top: 20px">
    <div class="ct-section-inner-wrap">
      <h2 class="sunb-bms-head" style="text-align: center">
        The Edge of Leave The Key for Agents
      </h2>
      <div id="new_columns-1363-106">
        <div
          id="div_block-1364-106"
          class="ct-div-block atomic-iconblock-4-column"
          style="align-items: flex-end !important"
        >
          <h4 id="text_block-1377-106" class="ct-text-block">
            
Embracing the Leave The Key Approach
          </h4>
          <div
            id="text_block-1367-106"
            class="ct-text-block atomic-iconblock-4-text"
          >
            <div class="nas-adslasd green-list-wett">
              <div class="green-list">
                As-is cash offer with no inspection contingencies
                <span>
                  <img
                    style="padding-left: 4px"
                    src="{{asset('assets/images/tick.png')}}"
                    alt=""
                  />
                </span>
              </div>
              <div class="green-list">
                Demonstrate financial capability for a prompt conclusion.
                <span>
                  <img
                    style="padding-left: 4px"
                    src="{{asset('assets/images/tick.png')}}"
                    alt=""
                  />
                </span>
              </div>
              <div class="green-list">
                Finalize the sale promptly upon title acquisition.
                <span>
                  <img
                    style="padding-left: 4px"
                    src="{{asset('assets/images/tick.png')}}"
                    alt=""
                  />
                </span>
              </div>
              <div class="green-list">
                Unlock the advantage of double-ended commission.
                <span>
                  <img
                    style="padding-left: 4px"
                    src="{{asset('assets/images/tick.png')}}"
                    alt=""
                  />
                </span>
              </div>
              <div class="green-list">
                Boost your commission potential 3-4 times by relisting post-flip.
                <span>
                  <img
                    style="padding-left: 4px"
                    src="{{asset('assets/images/tick.png')}}"
                    alt=""
                  />
                </span>
              </div>
            </div>
          </div>
        </div>
        <div id="div_block-1369-106" class="ct-div-block">
          <h4
            id="text_block-1381-106"
            class="ct-text-block"
            style="text-align: start"
          >
    
Selling to a Conventional Buyer
          </h4>
          <div
            id="text_block-1372-106"
            class="ct-text-block atomic-iconblock-4-text"
          >
            <div class="nas-adslasd">
              <div class="red-list">
                <span>
                  <img
                    src="{{asset('assets/images/warning.png')}}"
                    alt=""
                  />
                </span>
                Potential jeopardy from buyer financing or inspections derailing the deal
              </div>
    
              <div class="red-list">
                <span>
                  <img
                    src="{{asset('assets/images/warning.png')}}"
                    alt=""
                  />
                </span>
                Extensive commitment to open houses and showings
              </div>
    
              <div class="red-list">
                <span>
                  <img
                    src="{{asset('assets/images/warning.png')}}"
                    alt=""
                  />
                </span>
                Managing and negotiating numerous offers
              </div>
    
              <div class="red-list">
                <span>
                  <img
                    src="{{asset('assets/images/warning.png')}}"
                    alt=""
                  />
                </span>
                Navigating through inexperienced and emotionally charged buyers
              </div>
    
              <div class="red-list">
                <span>
                  <img
                    src="{{asset('assets/images/warning.png')}}"
                    alt=""
                  />
                </span>
                Enduring prolonged closing timelines
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>








<div>
<div class="ms-hehlae-e">
  <div class="">
    <div class="">
      <div class="">
        <div class="">
          <p class="sunb-bms-head">Matching Well with Real Estate Agents</p>
        </div>
      </div>
      <div class="">
        <div class="new-scor-colr">
          <p>
            In your role as an agent, you undoubtedly encounter a wide array of property-related challenges, spanning sellers, buyers, lenders, attorneys, and the properties themselves. We are seasoned property purchasers, willing to acquire homes regardless of the complications. Below are typical situations where our expertise can assist real estate agents in facilitating property sales.
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="d-flex-es-ese">
    <div class="">
      <div class="">
        <div class="">
          <div class="">
            <h3 class="new-scor-colr">
              <span>Speedy Transaction</span>
            </h3>
            <div class="new-scor-colr">
              <p>
                


Occasionally, buyers anticipate swift sales that may seem miraculous. As industry professionals, we recognize that conventional transactions involve a time commitment. Allow our cash offer to serve as your expedited route to a swift closing.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="">
      <div class="">
        <div class="">
          <div class="">
            <h3 class="new-scor-colr">
              <span>                
                Addressing Inspection Challenges</span>
            </h3>
            <div class="new-scor-colr">
              <p>


In instances where the buyer's inspection unveils issues the seller is unwilling to address, an as-is cash offer can emerge as a viable solution.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="d-flex-es-ese">
    <div class="">
      <div class="">
        <div class="">
          <div class="">
            <h3 class="new-scor-colr">
              <span>                Unlicensed Enhancements</span>
            </h3>
            <div class="new-scor-colr">
              <p>


In situations where the property lacks a certificate of occupancy or features unpermitted enhancements, deterring a conventional buyer from acquisition, the seller's alternatives become restricted.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="">
      <div class="">
        <div class="">
          <div class="">
            <h3 class="new-scor-colr">
              <span>  Properties Unfit for Mortgage Approval</span>
            </h3>
            <div class="new-scor-colr">
              <p>
              

A property ineligible for bank financing due to its condition or other property-related concerns. Whether it's a hoarder house or one stripped to the studs, we're prepared to make the purchase.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="">
    <div class="">
      <div class="">
        <div class="">
          <div class="">
            <h3 class="new-scor-colr">
              <span>
                              
Buyer Backs Out
              </span>
            </h3>
            <div class="new-scor-colr">
              <p>


When circumstances dictate a seller's urgency to relocate, perhaps due to an existing purchase or contractual commitment, and a buyer unexpectedly withdraws or reneges, we can swiftly finalize the transaction, ensuring the closing adheres to the original schedule.
              </p>
            </div>
          </div>
        </div>
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
                <h2 class="sunb-bms-head" style="text-align: center;padding:40px 0px;">
                   Collaborating with Real Estate Professionals
                  </h2>
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
                  src="{{asset('assets/images/Leave-The-Key-Homebuyers-Step-1.jpg')}}"
                  alt="Larry Wagner"
                  class="wp-image-4530 entered lazyloaded"
                 
                  data-ll-status="loaded"
                />
              </div>
              <div class="et_pb_team_member_description">
                  <p class="et_pb_member_position">STEP 1</p>
                <h5 class="ad-upe-ckas">
                  SUBMIT A PROPERTY FOR A ROUGH ESTIMATE
                </h5>
                <div>
                  <p>
                 

Provide us with some details about the property you're considering selling. Our team will conduct our own assessment based on after repair value (ARV) comparisons, projecting its value after renovation. Rest assured, we're committed to efficiency, and we'll provide a preliminary offer without the need for an on-site visit. Additionally, we'll furnish proof of funds to establish our ability to execute a genuine closing.
                  </p>
                </div>
              </div>
            </div>
          </div>

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
                  src="{{asset('assets/images/Leave-The-Key-Homebuyers-Step-1.jpg')}}"
                  alt="Larry Wagner"
                  class="wp-image-4530 entered lazyloaded"
                 
                  data-ll-status="loaded"
                />
              </div>
              <div class="et_pb_team_member_description">
                  <p class="et_pb_member_position">STEP 2</p>
                <h5 class="ad-upe-ckas">ON-SITE PROPERTY EVALUATION</h5>
                <div>
                  <p>
                    


Our team will conduct an in-person inspection of the property to evaluate its current condition. You needn't concern yourself with tidying up or arranging for the owners to vacate during the visit – our assessment will be swift and thorough. It's important to note that our offer won't be influenced by the property's cleanliness; we're focused on its inherent value and potential.
                  </p>
                </div>
              </div>
            </div>
          </div>

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
                  src="{{asset('assets/images/Leave-The-Key-Homebuyers-Step-1.jpg')}}"
                  alt="Larry Wagner"
                  class="wp-image-4530 entered lazyloaded"
                 
                  data-ll-status="loaded"
                />
              </div>
              <div class="et_pb_team_member_description">
                  <p class="et_pb_member_position">STEP 3</p>
                <h5 class="ad-upe-ckas"> FINALIZING THE TRANSACTION</h5>
                <div>
                  <p>
                   
                    We'll proceed to purchase the property in its current condition. As part of this process, you'll benefit from a double-ended commission. With extensive experience in both property acquisitions and sales, our team has successfully managed hundreds of transactions. To ensure a seamless closing, we've assigned a dedicated transaction coordinator who will streamline the entire process.
                  </p>
                </div>
              </div>
            </div>
          </div>

        </div>
        <div class="d-re-sfle-xl" style="justify-content: center;">
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
                  src="{{asset('assets/images/Leave-The-Key-Homebuyers-Step-1.jpg')}}"
                  alt="Larry Wagner"
                  class="wp-image-4530 entered lazyloaded"
                 
                  data-ll-status="loaded"
                />
              </div>
              <div class="et_pb_team_member_description">
                  <p class="et_pb_member_position">STEP 4</p>
                <h5 class="ad-upe-ckas">          PROPERTY RENOVATION</h5>
                <div>
                  <p>
          

                    Our team of skilled contractors will spring into action, embarking on a comprehensive renovation journey. This endeavor entails a complete overhaul of the property, ensuring compliance with regulations and infusing it with appealing design aesthetics that resonate with prospective buyers. Our commitment is to elevate the property to its finest potential while adhering to code requirements.
                  </p>
                  </div>
              </div>
            </div>
          </div>
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
                src="{{asset('assets/images/Leave-The-Key-Homebuyers-Step-1.jpg')}}"
                alt="Larry Wagner"
                class="wp-image-4530 entered lazyloaded"
               
                data-ll-status="loaded"
              />
            </div>
            <div class="et_pb_team_member_description" style="padding-bottom:60px; ">
                <p class="et_pb_member_position">STEP 5</p>
              <h5 class="ad-upe-ckas">RETURNING THE OPPORTUNITY TO YOU</h5>
              <div>
                <p>
                  Given your instrumental role in initiating the process, we believe in honoring that partnership. Following the meticulous renovation, we entrust you with the privilege of serving as the listing agent. When this magnificently rejuvenated home is prepared to grace the market, you will orchestrate its presentation to potential buyers, ensuring its full potential is realized.
                   
                </p></div>
            </div>
          </div>
        </div>
        
        </div>
      </div>

      <div class="et_pb_bottom_inside_divider d-dr-dr" style=""></div>
    </div>



    <div>
        <div class="ms-hehlae-e">
         <div>
            <img style="    width: 100%;"  src="{{asset('assets/images/sddefault (2).jpg')}}" alt="">
           
         </div>
        </div>
        </div>

        <div class="et_pb_section et_pb_section_6 et_section_regular new-container amfemc-se">
          <div class="mb-ad-3">
              <div class="">
                  <div class="">
                      <div class="et_pb_text_inner">
                          <p class="sunb-bms-head" style="text-align: center;">
                              Frequently Asked Queries from Wholesalers
                          </p>
                      </div>
                  </div>
              </div>
          </div>
          <div class="">
              <div class="">
                  <div class="et_pb_module et_pb_toggle et_pb_toggle_0 et_pb_toggle_item et_pb_toggle_close">
                      <div class="se-c-e2c">
                          <h5 class="et_pb_toggle_title">What's the payment process?</h5>
                          <div id="acor-1" class="tog-cles-sc">
                              <div class="ks-sd-plus clls-bnt"></div>
                          </div>
                      </div>
                      <div id="acor-1" class="sms-cacorind-nd acc-conate">
                          <p>
                              The agent will act as the representative for us, the buyer, and consequently, will be entitled to a double-ended commission upon the property's initial sale to Leave The Key Homebuyers.
                          </p>
                          <p>
                              Subsequently, when the renovated property is ready for sale, we'll collaborate with you to list the house. This provides you with the chance to potentially earn three or four commissions from a single property.
                          </p>
                      </div>
                  </div>
                  <div class="et_pb_module et_pb_toggle et_pb_toggle_1 et_pb_toggle_item et_pb_toggle_close">
                      <div class="se-c-e2c">
                          <h5 class="et_pb_toggle_title">
                              Why is selling to us the best choice for my seller?
                          </h5>
                          <div id="acor-2" class="tog-cles-sc">
                              <div class="ks-sd-plus clls-bnt"></div>
                          </div>
                      </div>
                      <div id="acor-2" class="sms-cacorind-nd acc-conate">
                          <p>
                              Each day, we encounter sellers whose circumstances aren't ideally suited for a conventional real estate agent sale – in fact, catering to such scenarios defines our core business. We even refer those instances where
                              a traditional listing would be more appropriate to other agents. We understand that you also encounter these atypical sellers.
                          </p>
                          <p>
                              While not a universal solution, it effectively fulfills a distinct need.
                          </p>
                          <p>
                              Whether your client seeks a swift closure for a new property purchase, owns a problematic property, or simply desires a straightforward transaction, opting for a cash buyer like us can enable your client to attain
                              their envisioned outcomes.
                          </p>
                      </div>
                  </div>
                  <div class="et_pb_module et_pb_toggle et_pb_toggle_2 et_pb_toggle_item et_pb_toggle_close">
                      <div class="se-c-e2c">
                          <h5 class="et_pb_toggle_title">
                              What are the advantages of having my client sell their home to an investor?
                          </h5>
                          <div id="acor-3" class="tog-cles-sc">
                              <div class="ks-sd-plus clls-bnt"></div>
                          </div>
                      </div>
                      <div id="acor-3" class="sms-cacorind-nd acc-conate">
                          <p>
                              Our objectives as both the agent and investor are harmonious – simplifying the home-selling process for the seller. When choosing us, the seller enjoys the following benefits:
                          </p>
                          <p></p>
                          <div class="et_pb_module et_pb_text et_pb_text_7 et_pb_text_align_center et_pb_bg_layout_light">
                              <div class="et_pb_text_inner">
                                  <ul class="tick">
                                      <li>Prompt competitive cash offer within 24 hours</li>
                                      <li>Bypassing the need for cleaning, open houses, or showings</li>
                                      <li>Eliminating the necessity for repairs or addressing inspection concerns</li>
                                      <li>Securing a double-ended commission</li>
                                      <li>Granting the seller the flexibility to vend on their own timetable, effortlessly coordinating relocation or the acquisition of a new home</li>
                                  </ul>
                              </div>
                          </div>
                          <p></p>
                      </div>
                  </div>
                  <div class="et_pb_module et_pb_toggle et_pb_toggle_3 et_pb_toggle_item et_pb_toggle_close">
                      <div class="se-c-e2c">
                          <h5 class="et_pb_toggle_title">
                              What sets Leave The Key Homebuyers apart?
                          </h5>
                          <div id="acor-4" class="tog-cles-sc">
                              <div class="ks-sd-plus clls-bnt"></div>
                          </div>
                      </div>
                      <div id="acor-4" class="sms-cacorind-nd acc-conate">
                          <p>
                              <span>Ethical, honest, and genuine approach </span>
                          </p>
                          <p>
                              <span>
                                  Seasoned investors with a track record of buying, flipping, renting, and selling numerous homes across Long Island, Queens, and Brooklyn
                              </span>
                          </p>
                          <p>
                              <span>
                                  Strong financial backing ensures smooth and guaranteed closings
                              </span>
                          </p>
                          <p>
                              Explore our positive reviews for insights from satisfied sellers and partners about their experiences working with us.
                          </p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      



    <div>
      <div class="ms-hehlae-e">
         <div class="">
            <div class="">
               <div class="">
                  <div class="">
                     <p class="sunb-bms-head">
                        Properties We're Interested In / Our Acquisition Criteria
                     </p>
                  </div>
               </div>
            </div>
         </div>
         <div class="d-flex-es-ese">
            <div class="">
               <div class="">
                  <div class="">
                     <div class="">
                        <h4 class="new-scor-colr">
                           <span>Our Approaches</span>
                        </h4>
                        <div class="new-scor-colr">
                           <ul class="ul-sl-ex-e">
                              <li>Fix &amp; Flip</li>
                              <li>Short Sales</li>
                              <li>REOs(Real Estate Owned)</li>
                              <li>Buy &amp; Hold Single-Family</li>
                              <li>Land Investments</li>
                              <li>New Construction Opportunities</li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="">
               <div class="">
                  <div class="">
                     <div class="">
                        <h4 class="new-scor-colr">
                           <span>Join Forces for Joint Venture</span>
                        </h4>
                        <div class="new-scor-colr">
                           <ul class="ul-sl-ex-e">
                              <li>$50k – $1.25m purchase price</li>
                              <li>Looking for a 23% margin based on ARV</li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="">
               <div class="">
                  <div class="">
                     <div class="">
                        <h4 class="new-scor-colr">
                           <span>Territory</span>
                        </h4>
                        <div class="new-scor-colr">
                           <ul class="ul-sl-ex-e">
                              <li>Nassau County</li>
                              <li>Suffolk County</li>
                              <li>Queens</li>
                              <li>Brooklyn</li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>



    
@endsection


@section('js')

<script>
  document.querySelectorAll(".tog-cles-sc").forEach((btn) => {
    btn.addEventListener("click", (e) => {
      if (event.target.matches(".tog-cles-sc" || ".clls-bnt")) {
        document.querySelectorAll(".acc-conate").forEach((container) => {
          if (e.target.id === container.id) {
            container.classList.toggle("sld-toglle-acc");
            document
              .getElementsByClassName("clls-bnt")
              .toggle("ks-sd-plus");
          }
        });
      }
    });
  });
</script>
    
@endsection
