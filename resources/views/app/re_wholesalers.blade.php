@extends('layouts.index')


    @section('css')

<style>
 h4{
  font-size: 26px !important;
 }

        h5{
            font-size: 20px !important;
        }

      div.et_pb_section.et_pb_section_0 {
        background-blend-mode: multiply;
        background-image: linear-gradient(
            180deg,
            rgba(51, 51, 51, 0.4) 0%,
            rgba(51, 51, 51, 0.4) 100%
          ),
          url('{{asset('assets/images/Locations-We-Buy-Houses.jpg')}}') !important;
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
        gap: 16px;
        margin-top: 18px;
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
        margin: auto;
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
        gap: 8px;
      }
      .sunb-bms-head {
        color: #131a4a !important;
        line-height: 38px;
        font-family: "Lato", Helvetica, Arial, Lucida, sans-serif;
        font-weight: 900;
        font-size: 36px;
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
    </style>
  
    @endsection


@section('content')

<div
class="et_pb_section et_pb_section_0 et_pb_with_background et_section_regular"
>
<div class="md-res-flex">
  <div class="aid-flex-ares">
    <div class="">
      <div class="text-who-se-white h1-www3s-s">
        <h1 class="h1-www3s-s">Wholesalers & Deal Finders Wanted!</h1>
      </div>
    </div>
    <div class="">
      <div class="text-who-se-white">
        <p>
          Join our partnership if you're adept at finding deals. We're here to buy, assist in selling, or provide experience for your success.
        </p>
      </div>
    </div>
  </div>
  <div class="aid-flex-ares">
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
          <p class="sunb-bms-head">Collaborative Possibilities</p>
        </div>
      </div>
      <div class="">
        <div class="new-scor-colr">
          <p>
            As a skilled wholesaler or diligent bird dog, you encounter properties with a myriad of challenges. With our extensive experience in real estate, encompassing numerous successful deals, we can assist you in tackling even the most intricate scenarios. Our focus on fostering relationships is evident in how Leave The Key Homebuyers can seamlessly collaborate with wholesalers in a variety of common scenarios.
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
              <span>Count on Us as the Buyer</span>
            </h3>
            <div class="new-scor-colr">
              <p>
                Our appetite for property acquisitions is greater than ever, and we're eager to consider your deals if they align with our criteria. With our own funds at the ready, we're prepared to swiftly finalize transactions upon securing title. Rest assured, if the numbers make sense, we're here to be the buyer you can rely on.
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
              <span>                Let's Partner Up</span>
            </h3>
            <div class="new-scor-colr">
              <p>
                


Your knack for deal hunting is impressive, but what about the selling aspect? As a prominent home buyer in the region, we boast an extensive network of investors, agents, and fellow cash buyers. We're poised to assist you in assigning the contracts you secure. Count on us for proof of funds, deposits, legal support, and seamless dispositions – a collaborative solution that streamlines the process.
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
              <span>Learn from Seasoned Experts</span>
            </h3>
            <div class="new-scor-colr">
              <p>
               

For those still finding their footing, we're here to provide guidance. We'll assist in underwriting your deal, accompany you on seller appointments/calls, aid in offer structuring, and offer repair estimates. Count on our experience to bolster your journey.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<section id="section-1360-106" class="ct-section" style="margin-top: 20px">
<div class="ct-section-inner-wrap">
  <h2 class="sunb-bms-head" style="text-align: center">
    Why Choose Leave The Key?
  </h2>
  <div id="new_columns-1363-106">
    <div
      id="div_block-1364-106"
      class="ct-div-block atomic-iconblock-4-column"
      style="align-items: flex-end !important"
    >
      <h4 id="text_block-1377-106" class="ct-text-block">
        Selling to Leave The Key
      </h4>
      <div
        id="text_block-1367-106"
        class="ct-text-block atomic-iconblock-4-text"
      >
        <div class="nas-adslasd green-list-wett">
          <div class="green-list">
            Swift competitive cash offer within 24 hours
            <span>
              <img
                style="padding-left: 4px"
                src="{{asset('assets/images/tick.png')}}"
                alt=""
              />
            </span>
          </div>
          <div class="green-list">
            Avoid listing, preparations, and showings
            <span>
              <img
                style="padding-left: 4px"
                src="{{asset('assets/images/tick.png')}}"
                alt=""
              />
            </span>
          </div>
          <div class="green-list">
            Bypass repair work and subtract associated costs
            <span>
              <img
                style="padding-left: 4px"
                src="{{asset('assets/images/tick.png')}}"
                alt=""
              />
            </span>
          </div>
          <div class="green-list">
            Flexible selling timeline tailored to your needs
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
      Traditional Home Sale
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
            Vulnerability to buyer financing falling through
          </div>

          <div class="red-list">
            <span>
              <img
                src="{{asset('assets/images/warning.png')}}"
                alt=""
              />
            </span>
            Extensive preparations and home showings required
          </div>

          <div class="red-list">
            <span>
              <img
                src="{{asset('assets/images/warning.png')}}"
                alt=""
              />
            </span>
            Responsible for managing repairs
          </div>

          <div class="red-list">
            <span>
              <img
                src="{{asset('assets/images/warning.png')}}"
                alt=""
              />
            </span>
            Uncertain and potentially lengthy closing timeline
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
          <p class="sunb-bms-head">
            Desired Acquisitions: Our Purchasing Standards
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
              <span>Numeric Insights</span>
            </h4>
            <div class="new-scor-colr">
              <ul class="ul-sl-ex-e">
     
  <li>Repair & Resell</li>
  <li>Swift Sale Scenarios</li>
  <li>Bank-Owned Properties</li>
  <li>Acquire & Retain Detached Homes</li>
  <li>Plots of Earth</li>
  <li>Novel Building Prospects</li>
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
              <span>Collaborate in Partnership</span>
            </h4>
            <div class="new-scor-colr">
              <ul class="ul-sl-ex-e">
                <li>Renovate and Resell Ventures</li>
  <li>Quick Sales with a Brief Timeline</li>
  <li>Bank-Owned Property Possibilities</li>
  <li>Acquire and Retain Detached Residences</li>
  <li>Territory to Cultivate</li>
  <li>Innovative Prospects for Fresh Constructions</li>
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

<div class="et_pb_section et_pb_section_6 et_section_regular new-container amfemc-se">
<div class="mb-ad-3">
  <div class="">
    <div class="">
      <div class="et_pb_text_inner">
        <p class="sunb-bms-head" style="text-align: center">
          Frequently Asked Queries from Wholesalers
        </p>
      </div>
    </div>
  </div>
</div>
<div class="">
  <div class="">
    <div
      class="et_pb_module et_pb_toggle et_pb_toggle_0 et_pb_toggle_item et_pb_toggle_close"
    >
      <div class="se-c-e2c">
        <h5 class="et_pb_toggle_title">What's the payment process?</h5>
        <div id="acor-1" class="tog-cles-sc">
          <div class="ks-sd-plus clls-bnt"></div>
        </div>
      </div>
      <div id="acor-1" class="sms-cacorind-nd acc-conate">
        <p>
          Each scenario carries its distinct nature – upon purchase, your assignment fee is disbursed. Conversely, if we facilitate the property's sale to one of our clients, a division of the assignment fee will transpire. Feel free to reach out to us regarding a property or your interest in collaboration, and we shall engage in a conversation to formulate an arrangement that satisfies all parties involved.
        </p>
      </div>
    </div>
    <div
      class="et_pb_module et_pb_toggle et_pb_toggle_1 et_pb_toggle_item et_pb_toggle_close"
    >
      <div class="se-c-e2c">
        <h5 class="et_pb_toggle_title">
          Can I rely on entrusting you with a deal that lacks formal documentation?
        </h5>
        <div id="acor-2" class="tog-cles-sc">
          <div class="ks-sd-plus clls-bnt"></div>
        </div>
      </div>
      <div id="acor-2" class="sms-cacorind-nd acc-conate">
        <p>
          Within our perspective, this venture thrives on abundance, with ample resources to share without resorting to harmful tactics. Our foundation rests on integrity, and ensuring equitable treatment stands as a paramount principle.
        </p>
        <p>
          Our history showcases transactions exceeding $10 million, sealed only through gestures of trust, and our commitment remains unwavering. Preserving our standing and testimonials holds the highest significance, motivating us to shun any jeopardizing actions.
        </p>
        <p>
          Should you present an undocumented deal, we stand ready to offer guidance on your proposition, determine a suitable valuation, and collaborate alongside our legal experts to bring the agreement to fruition.
        </p>
      </div>
    </div>
    <div
      class="et_pb_module et_pb_toggle et_pb_toggle_2 et_pb_toggle_item et_pb_toggle_close"
    >
      <div class="se-c-e2c">
        <h5 class="et_pb_toggle_title">
          What sorts of agreements should I forward to you? 
        </h5>
        <div id="acor-3" class="tog-cles-sc">
          <div class="ks-sd-plus clls-bnt"></div>
        </div>
      </div>
      <div id="acor-3" class="sms-cacorind-nd acc-conate">
        <p>
          Virtually any arrangement holds potential. Should it align with our acquisition standards, there's a chance we'll become your purchaser. In instances where it doesn't align, we're still open to aiding you in securing it or collaborating on wholesaling.
        </p>
        <p>
          Yet, kindly refrain from utilizing our time with offerings tied to MLS/Zillow listings unless you've established communication with the agent/homeowner or possess an existing connection.
        </p>
      </div>
    </div>
    <div
      class="et_pb_module et_pb_toggle et_pb_toggle_3 et_pb_toggle_item et_pb_toggle_close"
    >
      <div class="se-c-e2c">
        <h5 class="et_pb_toggle_title">
          What sets Leave The Key Homebuyers apart as a choice partner?
        </h5>
        <div id="acor-4" class="tog-cles-sc">
          <div class="ks-sd-plus clls-bnt"></div>
        </div>
      </div>
      <div id="acor-4" class="sms-cacorind-nd acc-conate">
        <p>
          <span
            >Our distinctiveness stems from a foundation of unwavering ethics, unwavering honesty, and authenticity.
          </span>
        </p>
        <p>
          <span
            >Our track record boasts seasoned expertise as investors, having engaged in the acquisition, renovation, leasing, and sale of numerous properties spanning Long Island, Queens, and Brooklyn.
          </span>
        </p>
        <p>
          <span
            >
            Financial robustness ensures that the closing process remains seamless without any concerns.
            </span
          >
        </p>
        <p>
          For a tangible testament to our approach, explore the wealth of positive feedback from sellers and collaborators who've experienced the value of our partnership firsthand.
        </p>
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
