@extends('layouts.index')


    @section('css')

    <style>


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
        <h1 class="h1-www3s-s">Are You a Wholesaler &amp; Great at Finding Deals?</h1>
      </div>
    </div>
    <div class="">
      <div class="text-who-se-white">
        <p>
          We’re looking to partner with wholesalers and bird dogs that are
          great at finding deals. We can buy them, help you sell them, or
          give you the experience to work them yourself.
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
          <p class="sunb-bms-head">Ways We Can Work Together</p>
        </div>
      </div>
      <div class="">
        <div class="new-scor-colr">
          <p>
            As a wholesaler or bird dog, you come across properties with
            all types of issues. We are professional home buyers with
            hundreds of deals under our belt and can help you navigate the
            most complex situations. We believe in building relationships
            and here are some of the common scenarios in which Leave The
            Key Homebuyers can collaborate with wholesalers.
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
              <span>We'll Be the Buyer</span>
            </h3>
            <div class="new-scor-colr">
              <p>
                We’re looking to buy more properties than ever before and
                we’ll gladly buy your deals as long as the numbers work.
                We use our own cash and are ready to close as soon as we
                have title.
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
              <span>Let's JV</span>
            </h3>
            <div class="new-scor-colr">
              <p>
                You are great at finding deals, but what about selling
                them? As one of the top home buyers in the area, we have a
                network of investors, agents, and other cash buyers that
                we can leverage to help you assign the contracts you lock
                up. We can provide the proof of funds, deposit, attorney,
                and handle dispositions for you.
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
              <span>Training From an Experienced Investor</span>
            </h3>
            <div class="new-scor-colr">
              <p>
                If you are still new and want someone experienced by your
                side, we’ll happily help underwrite your deal, go on the
                seller appointment/call with you, help you structure an
                offer, and estimate repairs.
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
    Why Leave The Key is Better
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
            Competitive cash offer in 24 hours
            <span>
              <img
                style="padding-left: 4px"
                src="{{asset('assets/images/tick.png')}}"
                alt=""
              />
            </span>
          </div>
          <div class="green-list">
            No listing, prep work, or showings
            <span>
              <img
                style="padding-left: 4px"
                src="{{asset('assets/images/tick.png')}}"
                alt=""
              />
            </span>
          </div>
          <div class="green-list">
            Skip the repair work & deduct costs
            <span>
              <img
                style="padding-left: 4px"
                src="{{asset('assets/images/tick.png')}}"
                alt=""
              />
            </span>
          </div>
          <div class="green-list">
            Sell on your schedule
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
            Risk of buyer financing fall-through
          </div>

          <div class="red-list">
            <span>
              <img
                src="{{asset('assets/images/warning.png')}}"
                alt=""
              />
            </span>
            Hours of prep work and home showings
          </div>

          <div class="red-list">
            <span>
              <img
                src="{{asset('assets/images/warning.png')}}"
                alt=""
              />
            </span>
            Manage repairs yourself
          </div>

          <div class="red-list">
            <span>
              <img
                src="{{asset('assets/images/warning.png')}}"
                alt=""
              />
            </span>
            Uncertain closing timeline
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
            What We’re Looking to Buy / Our Buying Criteria
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
              <span>The Numbers</span>
            </h3>
            <div class="new-scor-colr">
              <ul class="ul-sl-ex-e">
                <li>Fix &amp; Flip</li>
                <li>Short Sales</li>
                <li>REOs</li>
                <li>Buy &amp; Hold Single-Family</li>
                <li>Land</li>
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
            <h3 class="new-scor-colr">
              <span>Let's JV</span>
            </h3>
            <div class="new-scor-colr">
              <ul class="ul-sl-ex-e">
                <li>Fix &amp; Flip</li>
                <li>Short Sales</li>
                <li>REOs</li>
                <li>Buy &amp; Hold Single-Family</li>
                <li>Land</li>
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
            <h3 class="new-scor-colr">
              <span>Territory</span>
            </h3>
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
          Common Questions we get from Wholesalers
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
        <h5 class="et_pb_toggle_title">How do I get paid?</h5>
        <div id="acor-1" class="tog-cles-sc">
          <div class="ks-sd-plus clls-bnt"></div>
        </div>
      </div>
      <div id="acor-1" class="sms-cacorind-nd acc-conate">
        <p>
          Every situation is unique – if we buy, you’ll receive your
          assignment fee, and if we help you sell it to one of our buyers,
          we’ll do some split of the assignment fee. So contact us about a
          property or a way you want to partner and we’ll discuss an
          arrangement that works for everyone.
        </p>
      </div>
    </div>
    <div
      class="et_pb_module et_pb_toggle et_pb_toggle_1 et_pb_toggle_item et_pb_toggle_close"
    >
      <div class="se-c-e2c">
        <h5 class="et_pb_toggle_title">
          Can I trust bringing you a deal I don't have in contract?
        </h5>
        <div id="acor-2" class="tog-cles-sc">
          <div class="ks-sd-plus clls-bnt"></div>
        </div>
      </div>
      <div id="acor-2" class="sms-cacorind-nd acc-conate">
        <p>
          We believe this is a business of abundance and that there is
          more than enough to go around without screwing each other over.
          Integrity is one of our core values and treating everyone fairly
          is a top priority.
        </p>
        <p>
          We’ve done $10+ million of business with people, just over a
          handshake, and we have no intention or desire to take from
          others. Our reputation and reviews are of utmost importance and
          we’d never do anything to risk that.
        </p>
        <p>
          If you bring us a deal that’s not in contract we can help advise
          you on what you should offer, what we would pay, and can help
          you bring the deal across the finish line with our attorneys.
        </p>
      </div>
    </div>
    <div
      class="et_pb_module et_pb_toggle et_pb_toggle_2 et_pb_toggle_item et_pb_toggle_close"
    >
      <div class="se-c-e2c">
        <h5 class="et_pb_toggle_title">
          What kind of deals should I send you?
        </h5>
        <div id="acor-3" class="tog-cles-sc">
          <div class="ks-sd-plus clls-bnt"></div>
        </div>
      </div>
      <div id="acor-3" class="sms-cacorind-nd acc-conate">
        <p>
          You can send us pretty much anything. If it fits our buying
          criteria, we may be a buyer for you. If not, we can always
          assist you in locking it up and/or co-wholesaling it.
        </p>
        <p>
          However, please don’t waste our time and send us properties that
          are listed on MLS/Zillow unless you’ve already spoken with the
          agent/homeowner or already have an “in.”
        </p>
      </div>
    </div>
    <div
      class="et_pb_module et_pb_toggle et_pb_toggle_3 et_pb_toggle_item et_pb_toggle_close"
    >
      <div class="se-c-e2c">
        <h5 class="et_pb_toggle_title">
          Why work with Leave The Key Homebuyers?
        </h5>
        <div id="acor-4" class="tog-cles-sc">
          <div class="ks-sd-plus clls-bnt"></div>
        </div>
      </div>
      <div id="acor-4" class="sms-cacorind-nd acc-conate">
        <p>
          <span
            >We pride ourselves on being ethical, honest, and genuine.
          </span>
        </p>
        <p>
          <span
            >We are experienced investors that have purchased, flipped,
            rented, and sold hundreds of homes all over Long Island,
            Queens, and Brooklyn.
          </span>
        </p>
        <p>
          <span
            >We are well-funded so that closing is never an issue.</span
          >
        </p>
        <p>
          Take a look at our
          <a href="http://localhost:8000/we-buy-houses-reviews"
            >positive reviews</a
          >
          to see what some of our sellers and partners have to say about
          working with us.
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
