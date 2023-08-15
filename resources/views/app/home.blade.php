@extends('layouts.index')

@section('css')

<style>
  .yt-image{
    width:460px !important;
    max-width: 100%;
  }
  #div_block-1642-106{
    width: 50% !important;
  }
  #div_block-1641-106{
    width: 50% !important;
  }
  .nw-dose-wews{
    margin-bottom:30px !important; 
  }
  .ct-div-block{
    margin-left:auto; 
    margin-right:auto; 
  }
  .et_pb_text_7.et_pb_text {
    color: #131a4a!important;
  }
  .custom-blu-nbum{
    color: #4887bf !important
  }
  .nas-adslasd{
    text-align: center;
    padding:20px 0px;
    display:flex;
    flex-direction:column;
    gap:12px;
  }
  .nas-adslasd div{
    text-align: start;
    display: flex;
    gap: 5px;
    flex-direction: row;
  }

  @media (min-width:741px){

    .nas-adslasd{
      padding-left: 18px !important;
    }
    
    .nas-adslasd.green-list-wett{
      align-items: flex-end !important;
      padding-right: 18px !important;
  }
  
}
  @media (max-width:740px){
    .nas-adslasd .green-list{
        flex-direction:row-reverse !important; 
  }
  .nas-adslasd.green-list-wett{
    align-items: flex-start !important;
  }
}

.sf-efon-a span:first-child{
  color: #e65e49 !important
}

  
.sms-esud-ebp{
  align-items: flex-start !important;
}
.my-suc-reur{
  background: #ffffff1e !important;
}
.my-suc-reur label{
  color: #fff !important;
}

.hjovers-neww:hover{
  transition: .3s all ease-in-out;
  background: rgba(15, 48, 67, 0.952) !important;
}

#section-2-224{
        background-image: linear-gradient(90deg,rgba(51,51,51,0.65) 0%,rgba(51,51,51,0.3) 100%),
        url('{{asset('assets/images/home_1.jpg')}}')!important ;
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        padding:24px;
    }


    
.sf-efon-a{
  font-size: 32px;
  font-weight: 600;
}
#text_block-1402-106 img{
max-width: 100%;
}
@media(min-width:986px){
  #div_block-1399-106{
    width: 40% !important;
  }
  #text_block-1397-106{
    text-wrap: nowrap;
  }
  /* #div_block-1395-106{
    align-items: flex-start !important;
  } */
}










</style>



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
    text-indent: 40px;
    margin-bottom: 0px !important;
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




  @media (max-width:768px){
 
    #text_block-1377-106{
    text-align: start !important;
  }
  }
  #text_block-1377-106{
    text-align: end;
  }
  #div_block-1194-106{
    padding: 0px !important;
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
    .ct-section-inner-wrap.sms-esud-ebp{
      padding-left:0px !important; 
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
    outline: none !important;
  }
  #headline-4-224{
    font-weight: 700 !important;
    font-size: 45px;
  }
  .he-mda0ned-esx{
    font-family: 'Lato',Helvetica,Arial,Lucida,sans-serif;
    font-size: 17px;
    background-color: #cecece;
    border-radius: 6px;
    overflow: hidden;
    padding: 7px 10px !important;
    max-width: 400px;
    margin-top:10px;
  }
  .ex0xtoopsmain-banner{
    padding-top:78px !important;  
    padding-bottom:70px !important; 
  }
  .ez-feac-ute-form-ban{
    display: flex;
    gap: 18px;
    margin-top: 24px;
  }
  .ez-feac-ute-form-ban img{
    max-width: 100%;
  }
  #headline-4-224{
    margin-left: 0px !important; 
  }
</style>



    
@endsection

@section("content")

<div id='inner_content-19-225' class='ct-inner-content'>
    <section id="section-2-224"
      class=" ct-section ct-section-with-shape-divider">
      
        <div class="ct-section-inner-wrap sms-esud-ebp ex0xtoopsmain-banner">
            <h2 id="headline-4-224"
              class="ct-headline atomic-primary-heading">Get A Cash Offer From The Comfort Of Home</h2>
            <div id="div_block-1194-106" class="">
                <div class="he-mda0ned-esx">
                  No Repairs | No Agents | No Waiting | No Worries
                  </div>
                </div>

                  <div style="margin: 16px 0">
                    <p style="font-size:20px;color: #fff">
                      Just 
                      <em>
                        Leave The Key
                        to us
                      </em>
                    </p>
                  </div>
            
            <div id="shortcode-678-106" class="ct-shortcode">
                <div class="" id="gform_wrapper_1">
                 <form action="/" class="fore-maeomain" aria-label="Contact form" novalidate="novalidate" data-status="init">
                  <p>
                    <span class="" data-name="full_name"><input size="40" class="sse-et2-sd-binp name_field" aria-required="true" aria-invalid="false" placeholder="Name *" value="" type="text" name="full_name"></span>
                  </p>
                  <div class="fasd-flex-folex">
                    <div class="">
                      <p>
                        <span class="" data-name="real_email"><input size="40" class="sse-et2-sd-binp email_field" aria-required="true" aria-invalid="false" placeholder="Email *" value="" type="email" name="real_email"></span>
                      </p>
                    </div>
                    <div class="">
                      <p>
                        <span class="" data-name="phone"><input size="40" class="sse-et2-sd-binp phone_field" aria-required="true" aria-invalid="false" placeholder="Phone Number *" value="" type="text" name="phone"></span>
                      </p>
                    </div>
                  </div>
                  <div class="full_col">
                      <button class="sse-et2-sd-binp btu-submit-3s" type="submit" style="text-indent:0px !important;" >
                        Let's Work Together
                      </button>
                  </div>
                </form>
                <div class="ez-feac-ute-form-ban">
                  <div class="">
                  <span class=" ">
                    <img decoding="async" width="162" height="81" src="https://leavethekey.com/wp-content/uploads/2020/06/5-star-google-reviews-leave-the-key-e1596144504723.png" alt="5 star google reviews leave the key home buyers" title="5 star google reviews leave the key" class="wp-image-3589 entered lazyloaded" data-lazy-src="https://leavethekey.com/wp-content/uploads/2020/06/5-star-google-reviews-leave-the-key-e1596144504723.png" data-ll-status="loaded"><noscript><img decoding="async" width="162" height="81" src="https://leavethekey.com/wp-content/uploads/2020/06/5-star-google-reviews-leave-the-key-e1596144504723.png" alt="5 star google reviews leave the key home buyers" title="5 star google reviews leave the key" class="wp-image-3589" /></noscript></span>
                  </div>
                  <div class="">
                  <span class="">
                    <img decoding="async" width="162" height="74" src="https://leavethekey.com/wp-content/uploads/2020/06/facebook-reviews-Leave-The-Key-e1596144521896.png" alt="Leave The Key Home Buyers facebook reviews" title="facebook-reviews Leave The Key" class="wp-image-3587 entered lazyloaded" data-lazy-src="https://leavethekey.com/wp-content/uploads/2020/06/facebook-reviews-Leave-The-Key-e1596144521896.png" data-ll-status="loaded"><noscript><img decoding="async" width="162" height="74" src="https://leavethekey.com/wp-content/uploads/2020/06/facebook-reviews-Leave-The-Key-e1596144521896.png" alt="Leave The Key Home Buyers facebook reviews" title="facebook-reviews Leave The Key" class="wp-image-3587" /></noscript></span>
                  </div>
                  </div>
                </div>
            
                </div>
            <div id="-shape-divider-1647-106" class="oxy-shape-divider ">
                <div class="oxy_shape_divider">
                    <svg style="transform: scaleX(-1);color:#fff!important;"  xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 1440 320" preserveAspectRatio="none">
                        <path fill="currentColor" fill-opacity="1"
                          d="M0,288L1440,0L1440,320L0,320Z"></path>
                    </svg>
                </div>
            </div>
        </div>
    </section>

    <section id="section-1360-106" class=" ct-section" style="margin-top: 35px;">
      <div class="ct-section-inner-wrap">
          <div id="new_columns-1394-106" class="ct-new-columns">
              <div id="div_block-1395-106" class="ct-div-block atomic-iconblock-4-column" style="justify-content: start !important;padding-top: 0px !important;">
                  <h4 id="text_block-1397-106" class="ct-text-block custom-blu-nbum">
                    Why Sell To  EZ Sell My House Fast?
                    <br></h4>
                  <div id="text_block-1398-106" class="ct-text-block atomic-iconblock-4-text" style="margin-right: auto">
                    <div class="nas-adslasd">
                      <div class="red-list">
                        <span>
                        <img style="padding-left: 12px;" src="{{asset('assets/images/tick.png')}}" alt="">
                        </span>
                          Risk of buyer financing fall-through
                        </div>

                      <div class="red-list">
                        <span>
                        <img style="padding-left: 12px;" src="{{asset('assets/images/tick.png')}}" alt="">
                        </span>
                        Hours of prep work and home showings
                      </div>

                      <div class="red-list">
                        <span>
                        <img style="padding-left: 12px;" src="{{asset('assets/images/tick.png')}}" alt="">
                        </span>
                         Manage repairs yourself</div>

                      <div class="red-list">
                        <span>
                        <img style="padding-left: 12px;" src="{{asset('assets/images/tick.png')}}" alt="">
                        </span>
                        Uncertain closing timeline</div>

                    </div>
                  </div>
              </div>
              <div id="div_block-1399-106" class="ct-div-block atomic-iconblock-4-column">
                <div id="text_block-1402-106" class="ct-text-block atomic-iconblock-4-text">
                  <img src="{{asset('assets/images/hqdefault.jpg')}}" alt="">
                </div>
                <div id="text_block-1402-106" class="ct-text-block atomic-iconblock-4-text">

                  <a href="tel:000-000-000" class="sf-efon-a"><span>Call Now</span> <span>
                    (818) 651-8166
                    </span></a>
                  </div>
              </div>
          </div>
      </div>
  </section>


    <section id="section-353-106" class=" ct-section">
        <div class="ct-section-inner-wrap ">
            <h2 id="headline-354-106"
              class="ct-headline atomic-secondary-heading custom-blu-nbum">Sell My House
                Fast!</h2>
            <p id="text_block-1616-106"
              class="ct-text-block atomic-content-26-text">Need To Sell Your
                House Fast? Our <a href="/how-we-buy-houses/" style="">Home
                    Buying Process</a> Is Simple And Hassle Free. No Real
                Estate Agents. No Fees. No Waiting. We Even Cover Closing
                Costs!</p>
            <div id="div_block-1594-106" class="ct-div-block"></div>
            <p id="text_block-361-106"
              class="ct-text-block atomic-content-26-text">
              Sell My House Fast is your go-to platform when you're looking to sell your house for cash and want a straightforward process.
              As a business that specializes in purchasing homes, we appreciate the value of a swift, cash-based transaction.
              Our aim is to bypass the potential hindrances often associated with dealing with real estate agents.
            </p>
            <p id="text_block-1203-106"
              class="ct-text-block atomic-content-26-text">
              Would you appreciate the opportunity to engage with an investor from your region who is willing to pay cash for
               properties? Once you complete our form, a committed cash buyer familiar with your specific real estate market will make you an offer.
               We invite you to visit us and determine if our cash proposition is the most suitable for your home-selling needs!
            </b></p>
        </div>
    </section>
    {{-- <section id="section-353-106" class=" ct-section bg-lightblue">
      <div class="ct-section-inner-wrap ">
        <div class="ten-scoff-btn-wrapper max-flex-md-column mx-auto py-0 d-flex m-center ">
          <div class="d-flex ">
            <h4><strong>
              Speak with Live
              <br>
               Agent Now
              </strong></h4>
          </div>
          <a href="#" class="ten-scoff-btn mx-lg-4">
            <svg fill="#ffffff" width="35" height="35" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="64px" height="64px" viewBox="0 0 33.834 33.834" xml:space="preserve" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <path d="M32.253,29.334v4.5H1.581v-4.501c0-2.125,1.832-4.741,4.07-5.804l4.98-2.366l3.457,7.204l1.77-4.799 c0.349,0.066,0.695,0.154,1.059,0.154s0.709-0.088,1.059-0.154l1.68,4.563l3.389-7.048l5.141,2.445 C30.421,24.591,32.253,27.207,32.253,29.334z M6.105,13.562v-3.25c0-0.551,0.287-1.034,0.72-1.312c0.581-5.058,4.883-9,10.094-9 s9.514,3.942,10.096,9c0.432,0.278,0.719,0.761,0.719,1.312v3.25c0,0.863-0.699,1.563-1.563,1.563s-1.563-0.7-1.563-1.563v-0.683 c-0.846,4.255-3.961,8.205-7.688,8.205c-3.727,0-6.842-3.95-7.688-8.205v0.683c0,0.7-0.465,1.286-1.1,1.485 c0.622,2.117,2.002,3.946,3.908,5.146c0.352-0.116,0.796-0.094,1.227,0.13c0.692,0.36,1.045,1.06,0.783,1.56 c-0.261,0.5-1.033,0.612-1.729,0.251c-0.508-0.265-0.83-0.71-0.864-1.126c-2.183-1.396-3.731-3.533-4.37-5.998 C6.513,14.78,6.105,14.22,6.105,13.562z M7.89,8.635c0.047,0.003,0.092,0.004,0.137,0.021C8.14,8.698,8.222,8.779,8.279,8.874 c0.339,0.144,0.609,0.407,0.775,0.733C9.515,5.286,12.855,3,16.917,3c4.062,0,7.402,2.286,7.863,6.607 c0.229-0.449,0.664-0.77,1.185-0.837c-0.676-4.393-4.47-7.771-9.048-7.771C12.386,1,8.622,4.309,7.89,8.635z"></path> </g> </g></svg>          <img src="https://real.whippdigital.com/assets/images/live_chat.png" width="180" height="180" alt="">
          Live Agent
          </a>
          </div>          
      </div>
  </section> --}}

    <section id="section-216-106" class=" ct-section">
        <div class="ct-section-inner-wrap">
            <h2 id="headline-217-106"
              class="ct-headline atomic-secondary-heading">How Can I Quickly Sell My Home?</h2>
            <p id="text_block-1565-106"
              class="ct-text-block atomic-content-26-text">
              Sell My House Fast is here to facilitate cash transactions for your home while linking you up with a local cash purchaser! 
              This approach provides sellers an opportunity to cooperate with a house buyer who, due to their familiarity with the locality, can potentially offer more compared to nationwide real estate investors. Our aim is to refine your
               selling journey by introducing you to a cash home buyer who is specifically invested in your local market.
              <br></p>
                <div id="new_columns-219-106" class="ct-new-columns max-md-ps-20px">
                  <div id="div_block-220-106" class="ct-div-block">
                      <div id="step1" class="step-rounded-wrapper">
                        <div class="step-inse-sd">

                          <div>
                            <img width="60" src="{{asset('assets/images/icons/fill_out_form.png')}}" alt="">
                        </div>
                        <p class="step-heading-sde">
                          FILL OUT
                          <br>
                          FORM
                        </p>
                        <p class="step-para-eas">
                          Fill out the form, and we will connect you with a local cash buyer.
                        </p>
                      </div>
                    </div>
                  </div>
                  <div id="div_block-1288-106" class="ct-div-block">
                    <div id="step2" class="step-rounded-wrapper">
                      <div class="step-inse-sd">

                        <div>
                          <img width="60" src="{{asset('assets/images/icons/get_offer.png')}}" alt="">
                      </div>
                      <p class="step-heading-sde">
                        GET 
                        <br>
                        OFFERS
                      </p>
                      <p class="step-para-eas">
                        Receive a CASH offer for your house from a local buyer. No obligations.
                      </p>
                    </div>
                  </div>
                  </div>
                  <div id="div_block-1284-106" class="ct-div-block">
                    <div id="step3" class="step-rounded-wrapper">
                      <div class="step-inse-sd">

                        <div>
                          <img width="60" src="{{asset('assets/images/icons/get_paid.png')}}" alt="">
                      </div>
                      <p class="step-heading-sde">
                        GET 
                        <br>
                        PAID
                      </p>
                      <p class="step-para-eas">
                        Get cash for your house! Close on your timeline. No hassles.
                      </p>
                    </div>
                  </div>
                  </div>
              </div>
            <p id="text_block-1569-106"
              class="ct-text-block atomic-content-26-text">
              Our method for selling homes is straightforward. Instead of dealing with a large property-buying firm or an ibuyer, 
              you'll be cooperating with a local property purchaser who has expertise in your specific market. Such a setup results 
              in increased cash proposals, quicker home transactions, and more satisfied home sellers!
              <b></b><br></p>
        </div>
    </section>
    <section id="section-609-106" class=" ct-section">
        <div class="ct-section-inner-wrap">
            <h2 id="headline-610-106"
              class="ct-headline atomic-secondary-heading"> I'm Eager To Sell My Home Quickly, However... </h2>
            <p id="text_block-1848-106"
              class="ct-text-block atomic-content-26-text">
              No matter the challenges your property presents, Sell My House Fast stands ready to assist all homeowners.
               Be it a situation where your home's debt exceeds its value, you're weary from managing difficult tenants, or you simply wish to accelerate the selling process without 
              engaging a real estate agent, we're prepared to present you with a speedy, all-cash proposal!
              <b></b><br></p>
            <div id="new_columns-612-106" class="ct-new-columns">
                <div id="div_block-613-106" class="ct-div-block"><img
                      loading="lazy" id="image-1048-106"
                      alt="want to sell my house fast"
                      src="{{asset('assets/images/icons/inherited_house.png')}}"
                      class="ct-image"
                      sizes="(max-width: 512px) 100vw, 512px" loading="lazy"
                      alt="want to sell my house fast" />
                    <h4 id="headline-632-106"
                      class="ct-headline atomic-iconblock-12-title">
                        Inherited House</h4><img loading="lazy"
                      id="image-1051-106" alt="want to sell my home fast"
                      src="{{asset('assets/images/icons/damage_proper.png')}}"
                      class="ct-image"
                      sizes="(max-width: 512px) 100vw, 512px" loading="lazy"
                      alt="want to sell my home fast" />
                    <h4 id="headline-625-106"
                      class="ct-headline atomic-iconblock-12-title">Damaged
                        Property</h4>
                </div>
                <div id="div_block-616-106" class="ct-div-block"><img
                      loading="lazy" id="image-1049-106"
                      alt="want to sell house fast"
                      src="{{asset('assets/images/icons/divorce.png')}}"
                      class="ct-image"
                      sizes="(max-width: 512px) 100vw, 512px" loading="lazy"
                      alt="want to sell house fast" />
                    <h4 id="headline-642-106"
                      class="ct-headline atomic-iconblock-12-title">Divorce
                    </h4><img loading="lazy" id="image-1052-106"
                      
                      alt="want to sell home fast"
                      src="{{asset('assets/images/icons/relocation.png')}}"
                      class="ct-image"
                      sizes="(max-width: 512px) 100vw, 512px" loading="lazy"
                      alt="want to sell home fast" />
                    <h4 id="headline-648-106"
                      class="ct-headline atomic-iconblock-12-title">
                        Relocation</h4>
                </div>
                <div id="div_block-618-106" class="ct-div-block"><img
                      loading="lazy" id="image-1050-106"
                      alt="i want to sell my house fast"
                      src="{{asset('assets/images/icons/avoid_foreclosure.png')}}"
                      class="ct-image"
                      sizes="(max-width: 512px) 100vw, 512px" loading="lazy"
                      alt="i want to sell my house fast" />
                    <h4 id="headline-654-106"
                      class="ct-headline atomic-iconblock-12-title">Avoid
                        Foreclosure</h4><img loading="lazy"
                      id="image-1053-106" alt="i want to sell my home fast"
                      src="{{asset('assets/images/icons/bad_real_esta_agaenet.png')}}"
                      class="ct-image"
                      sizes="(max-width: 512px) 100vw, 512px" loading="lazy"
                      alt="i want to sell my home fast" />
                    <h4 id="headline-660-106"
                      class="ct-headline atomic-iconblock-12-title">Bad Real
                        Estate Agent</h4>
                </div>
            </div>
            <p id="text_block-1852-106"
              class="ct-text-block atomic-content-26-text">
              We acquire various forms of real estate encompassing houses, townhouses, apartments, buildings, duplexes, multi-family residences... anything you can think of. If a speedy home sale is your objective, we'll present you with a complimentary, non-binding, cash proposal, and set a closing date according to your preference.
              <br></p>
        </div>
    </section>
    {{-- <section id="section-353-106" class=" ct-section bg-lightblue">
      <div class="ct-section-inner-wrap ">
        <div class="ten-scoff-btn-wrapper max-flex-md-column mx-auto py-0 d-flex m-center ">
          <div class="d-flex ">
            <h4><strong>
              Speak with Live
              <br>
               Agent Now
              </strong></h4>
          </div>
          <a href="#" class="ten-scoff-btn mx-lg-4">
            <svg fill="#ffffff" width="35" height="35" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="64px" height="64px" viewBox="0 0 33.834 33.834" xml:space="preserve" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <path d="M32.253,29.334v4.5H1.581v-4.501c0-2.125,1.832-4.741,4.07-5.804l4.98-2.366l3.457,7.204l1.77-4.799 c0.349,0.066,0.695,0.154,1.059,0.154s0.709-0.088,1.059-0.154l1.68,4.563l3.389-7.048l5.141,2.445 C30.421,24.591,32.253,27.207,32.253,29.334z M6.105,13.562v-3.25c0-0.551,0.287-1.034,0.72-1.312c0.581-5.058,4.883-9,10.094-9 s9.514,3.942,10.096,9c0.432,0.278,0.719,0.761,0.719,1.312v3.25c0,0.863-0.699,1.563-1.563,1.563s-1.563-0.7-1.563-1.563v-0.683 c-0.846,4.255-3.961,8.205-7.688,8.205c-3.727,0-6.842-3.95-7.688-8.205v0.683c0,0.7-0.465,1.286-1.1,1.485 c0.622,2.117,2.002,3.946,3.908,5.146c0.352-0.116,0.796-0.094,1.227,0.13c0.692,0.36,1.045,1.06,0.783,1.56 c-0.261,0.5-1.033,0.612-1.729,0.251c-0.508-0.265-0.83-0.71-0.864-1.126c-2.183-1.396-3.731-3.533-4.37-5.998 C6.513,14.78,6.105,14.22,6.105,13.562z M7.89,8.635c0.047,0.003,0.092,0.004,0.137,0.021C8.14,8.698,8.222,8.779,8.279,8.874 c0.339,0.144,0.609,0.407,0.775,0.733C9.515,5.286,12.855,3,16.917,3c4.062,0,7.402,2.286,7.863,6.607 c0.229-0.449,0.664-0.77,1.185-0.837c-0.676-4.393-4.47-7.771-9.048-7.771C12.386,1,8.622,4.309,7.89,8.635z"></path> </g> </g></svg>         
          Live Agent
          </a>
          </div>          
      </div>
  </section> --}}
    <section id="section-1327-106" class=" ct-section">
        <div class="ct-section-inner-wrap">
            <div id="new_columns-1328-106" class="ct-new-columns">
                <div id="div_block-1331-106" class="ct-div-block">
                    <div id="div_block-1332-106" class="ct-div-block">
                        <h2 id="headline-1333-106"
                          class="ct-headline atomic-secondary-heading">
                            <div style="text-align: center;">
                              Dispose of Your Property Without Listing
                            </div>
                        </h2>
                    </div>
                    <div id="div_block-1656-106" class="ct-div-block">
                        <div id="text_block-1343-106" class="ct-text-block">
                            <u style="">ZERO AGENT CHARGES</u></div>
                        <p id="text_block-1334-106"
                          class="ct-text-block atomic-iconblock-8-text">
                          The advantage of selling your house without an agent is that there's no need for a home listing or payment of fees. 
                          Receiving a cash proposal from us eliminates the waiting time for banks and lenders. Plus, all closing costs are on us!
                            <i>all</i> closing costs! </p>
                        <div id="text_block-1345-106" class="ct-text-block">
                            <u style="">NO INCONVENIENCES</u></div>
                        <p id="text_block-1335-106"
                          class="ct-text-block atomic-iconblock-8-text">
                            <b><i></i></b>
                            Sell My House Fast delivers cash offers for your property directly over the phone. We refrain from autogenerating our proposals. Instead, we 
                            dedicate time to investigate your property in order to generate a fair cash offer reflective of the current market.
                           </p>
                    </div>
                    <div id="div_block-1653-106" class="ct-div-block">
                        <div id="shortcode-1336-106" class="ct-shortcode">
                            <div
                              class='gf_browser_gecko gform_wrapper gravity-theme'
                              id='gform_wrapper_5'>
                                <div id='gf_5' class='gform_anchor'
                                  tabindex='-1'></div>
                                <div class='gform_heading'>
                                    <p class='gform_required_legend'></p>
                                </div>
                                <form method='post'
                                  enctype='multipart/form-data'
                                  target='gform_ajax_frame_5' id='gform_5'
                                  action='/#gf_5' novalidate><input
                                      id=partial_entry_id_5
                                      class="partial_entry_id" type=hidden
                                      name="partial_entry_id"
                                      value="pending" data-form_id="5" />
                                    <div class='gform_body gform-body'>
                                        <div id='gform_fields_5'
                                          class='gform_fields top_label form_sublabel_below description_below'>
                                            <div id="field_5_6"
                                              class="gfield gfield--width-full gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible"
                                              data-js-reload="field_5_6">
                                                <label class='gfield_label'
                                                  for='input_5_6'>Property
                                                    Address<span
                                                      class="gfield_required"><span
                                                          class="gfield_required gfield_required_asterisk">*</span></span></label>
                                                <div
                                                  class='ginput_container ginput_container_text'>
                                                    <input name='input_6'
                                                      id='input_5_6'
                                                      type='text' value=''
                                                      class='large'
                                                      aria-required="true"
                                                      aria-invalid="false" />
                                                </div>
                                            </div>
                                            <fieldset id="field_5_4"
                                              class="gfield gfield--width-full field_sublabel_below field_description_below gfield_visibility_hidden"
                                              data-js-reload="field_5_4">
                                                <div
                                                  class='admin-hidden-markup'>
                                                    <i
                                                      class='gform-icon gform-icon--hidden'></i><span>Hidden</span>
                                                </div>
                                                <legend
                                                  class='gfield_label gfield_label_before_complex'>
                                                    Address Autofill
                                                </legend>
                                                <div
                                                  class='ginput_complex ginput_container has_street has_street2 has_city has_state has_zip has_country ginput_container_address'
                                                  id='input_5_4'>
                                                    <span
                                                      class='ginput_full address_line_1 ginput_address_line_1'
                                                      id='input_5_4_1_container'>
                                                        <input type='text'
                                                          name='input_4.1'
                                                          id='input_5_4_1'
                                                          value=''
                                                          aria-required='false' />
                                                        <label
                                                          for='input_5_4_1'
                                                          id='input_5_4_1_label'>Street
                                                            Address</label>
                                                    </span><span
                                                      class='ginput_full address_line_2 ginput_address_line_2'
                                                      id='input_5_4_2_container'>
                                                        <input type='text'
                                                          name='input_4.2'
                                                          id='input_5_4_2'
                                                          value=''
                                                          aria-required='false' />
                                                        <label
                                                          for='input_5_4_2'
                                                          id='input_5_4_2_label'>Address
                                                            Line 2</label>
                                                    </span><span
                                                      class='ginput_left address_city ginput_address_city'
                                                      id='input_5_4_3_container'>
                                                        <input type='text'
                                                          name='input_4.3'
                                                          id='input_5_4_3'
                                                          value=''
                                                          aria-required='false' />
                                                        <label
                                                          for='input_5_4_3'
                                                          id='input_5_4_3_label'>City</label>
                                                    </span><span
                                                      class='ginput_right address_state ginput_address_state'
                                                      id='input_5_4_4_container'>
                                                        <input type='text'
                                                          name='input_4.4'
                                                          id='input_5_4_4'
                                                          value=''
                                                          aria-required='false' />
                                                        <label
                                                          for='input_5_4_4'
                                                          id='input_5_4_4_label'>State
                                                            / Province /
                                                            Region</label>
                                                    </span><span
                                                      class='ginput_left address_zip ginput_address_zip'
                                                      id='input_5_4_5_container'>
                                                        <input type='text'
                                                          name='input_4.5'
                                                          id='input_5_4_5'
                                                          value=''
                                                          aria-required='false' />
                                                        <label
                                                          for='input_5_4_5'
                                                          id='input_5_4_5_label'>ZIP
                                                            / Postal
                                                            Code</label>
                                                    </span><span
                                                      class='ginput_right address_country ginput_address_country'
                                                      id='input_5_4_6_container'>
                                                        <select
                                                          name='input_4.6'
                                                          id='input_5_4_6'
                                                          aria-required='false'>
                                                            <option value=''
                                                              selected='selected'>
                                                            </option>
                                                            <option
                                                              value='United States'>
                                                                United
                                                                States
                                                            </option>
                                                            <option
                                                              value='Canada'>
                                                                Canada
                                                            </option>
                                                        </select>
                                                        <label
                                                          for='input_5_4_6'
                                                          id='input_5_4_6_label'>Country</label>
                                                    </span>
                                                    <div
                                                      class='gf_clear gf_clear_complex'>
                                                    </div>
                                                </div><input type="hidden"
                                                  name="gpaa_coords_4"
                                                  class="gform_hidden"
                                                  value="">
                                            </fieldset>
                                            <div id="field_5_2"
                                              class="gfield gfield--width-half field_sublabel_below field_description_below gfield_visibility_visible"
                                              data-js-reload="field_5_2">
                                                <label class='gfield_label'
                                                  for='input_5_2'>Phone</label>
                                                <div
                                                  class='ginput_container ginput_container_phone'>
                                                    <input name='input_2'
                                                      id='input_5_2'
                                                      type='tel' value=''
                                                      class='large'
                                                      placeholder='###-###-####'
                                                      aria-invalid="false" />
                                                </div>
                                            </div>
                                            <div id="field_5_3"
                                              class="gfield gfield--width-half gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible"
                                              data-js-reload="field_5_3">
                                                <label class='gfield_label'
                                                  for='input_5_3'>Email<span
                                                      class="gfield_required"><span
                                                          class="gfield_required gfield_required_asterisk">*</span></span></label>
                                                <div
                                                  class='ginput_container ginput_container_email'>
                                                    <input name='input_3'
                                                      id='input_5_3'
                                                      type='email' value=''
                                                      class='large'
                                                      aria-required="true"
                                                      aria-invalid="false" />
                                                </div>
                                            </div>
                                            <div id="field_5_7"
                                              class="gfield gform_hidden field_sublabel_below field_description_below gfield_visibility_visible"
                                              data-js-reload="field_5_7">
                                                <div
                                                  class='ginput_container ginput_container_text'>
                                                    <input name='input_7'
                                                      id='input_5_7'
                                                      type='hidden'
                                                      class='gform_hidden'
                                                      aria-invalid="false"
                                                      value='/' />
                                                </div>
                                            </div>
                                            <div id="field_5_8"
                                              class="gfield gfield--width-full gform_hidden field_sublabel_below field_description_below gfield_visibility_visible"
                                              data-js-reload="field_5_8">
                                                <div
                                                  class='ginput_container ginput_container_text'>
                                                    <input name='input_8'
                                                      id='input_5_8'
                                                      type='hidden'
                                                      class='gform_hidden'
                                                      aria-invalid="false"
                                                      value='' /></div>
                                            </div>
                                            <div id="field_5_9"
                                              class="gfield gfield--width-full gfield_html gfield_html_formatted gfield_no_follows_desc field_sublabel_below field_description_below gfield_visibility_hidden"
                                              data-js-reload="field_5_9">
                                                <input id="input_8"
                                                  name="input_5_8"
                                                  type="hidden" value="">
                                            </div>
                                            <div id="field_5_10"
                                              class="gfield gform_validation_container field_sublabel_below field_description_below gfield_visibility_visible"
                                              data-js-reload="field_5_10">
                                                <label class='gfield_label'
                                                  for='input_5_10'>Email</label>
                                                <div
                                                  class='ginput_container'>
                                                    <input name='input_10'
                                                      id='input_5_10'
                                                      type='text' value=''
                                                      autocomplete='new-password' />
                                                </div>
                                                <div
                                                  class='gfield_description'
                                                  id='gfield_description_5_10'>
                                                    This field is for
                                                    validation purposes and
                                                    should be left
                                                    unchanged.</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gform_footer top_label"> 
                                      <button class="xash-buton">Get My Cash Offer!</button>               
                                    </div>
                                </form>
                            </div>
                           
                        </div>
                    </div>
                </div>
                <div id="div_block-1329-106" class="ct-div-block "><img
                      id="image-1330-106" alt="sell your home fast"
                      src="{{asset('assets/images/redblock_house.webp')}}"
                      class="ct-image" loading="lazy" /></div>
            </div>
        </div>
    </section>
    <section id="section-236-106" class=" ct-section">
        <div class="ct-section-inner-wrap">
            <h2 id="headline-237-106"
              class="ct-headline atomic-secondary-heading">Accelerate Your Home Sale!</h2>
            <div id="new_columns-1640-106" class="ct-new-columns">
                <div id="div_block-1641-106" class="ct-div-block">
                    <p id="text_block-1646-106"
                      class="ct-text-block atomic-content-26-text">
                      Sell My House Fast extends assistance to homeowners nationwide via our network of
                       local real estate investors. We're not confined to a single office. 
                      Our investors are on-site in every market, striving to present you with the most attractive offer!
                      <br></p>
                    <p id="text_block-1882-106"
                      class="ct-text-block atomic-content-26-text">
                      If you're interested in reaping the advantages of a swift, cash-based home sale and an elevated cash
                       proposal from a local real estate purchaser in your market, begin by completing our form!
                      <br></p>
                </div>
                <div id="div_block-1642-106" class="ct-div-block"><img
                      id="image-1358-106" alt="sell your house fast"
                      style="border-radius: 50%;"
                      src="{{asset('assets/images/female_wooden_house.jpg')}}"
                      class="ct-image"
                      sizes="(max-width: 529px) 100vw, 529px"
                      alt="sell your house fast" loading="lazy" /></div>
            </div>
        </div>
    </section>
    <section id="section-1360-106" class=" ct-section">
        <div class="ct-section-inner-wrap">
            <h2 id="headline-1361-106"
              class="ct-headline atomic-secondary-heading">Sell My Home Fast
            </h2>
            <div id="new_columns-1363-106" class="ct-new-columns">
                <div id="div_block-1364-106"
                  class="ct-div-block atomic-iconblock-4-column"><img
                      loading="lazy" id="image-1376-106"
                      alt="sell my home fast"
                      src="{{asset('assets/images/icons/fair_cash_offer.png')}}"
                      class="ct-image"
                      sizes="(max-width: 256px) 100vw, 256px"
                      alt="sell my home fast" />
                    <h3 id="text_block-1377-106" class="ct-text-block">
                      Equitable Cash Proposal
                    </h3>
                    <div id="text_block-1367-106"
                      class="ct-text-block atomic-iconblock-4-text">
                        <div style="text-align: center;">
                          Swiftly sell your home in exchange for a just cash offer! We voice this assurance based on the experience of our local investors who have aided hundreds of homeowners.
                        </div>
                    </div>
                </div>
                <div id="div_block-1369-106"
                  class="ct-div-block atomic-iconblock-4-column"><img
                      loading="lazy" id="image-1380-106"
                      alt="sell home fast"
                      src="{{asset('assets/images/icons/fast-closing.png')}}"
                      class="ct-image"
                      sizes="(max-width: 256px) 100vw, 256px"
                      alt="sell home fast" />
                    <h3 id="text_block-1381-106" class="ct-text-block">
                      Rapid Closing</h3>
                    <div id="text_block-1372-106"
                      class="ct-text-block atomic-iconblock-4-text">
                        <div style="text-align: center;">
                          Sell My House Fast lives up to its name – we acquire your house at your desired pace. Being cash home buyers, we have the capacity to conclude transactions as quickly as within a week!

                        </div>
                    </div>
                </div>
            </div>
            <div id="new_columns-1385-106" class="ct-new-columns">
                <div id="div_block-1386-106"
                  class="ct-div-block atomic-iconblock-4-column"><img
                      loading="lazy" id="image-1387-106"
                      alt="sale homes fast"
                      src="{{asset('assets/images/icons/no_fee.png')}}"
                      class="ct-image"
                      sizes="(max-width: 256px) 100vw, 256px"
                      alt="sale homes fast" />
                    <h3 id="text_block-1388-106" class="ct-text-block">
                      No Agent or iBuyer Expenses
                    </h3>
                    <div id="text_block-1389-106"
                      class="ct-text-block atomic-iconblock-4-text">  
                      <div style="text-align: center;">
                        The cash proposition for your house that we provide is precisely what you'll get at the closing. We absorb all closing expenses. No hidden real estate charges. No agent's commission.
                        </div>
                    </div>
                </div>
                <div id="div_block-1390-106"
                  class="ct-div-block atomic-iconblock-4-column"><img
                      loading="lazy" id="image-1391-106"
                      alt="selling my home"
                      src="{{asset('assets/images/icons/no_home_repairs.png')}}"
                      class="ct-image"
                      sizes="(max-width: 512px) 100vw, 512px"
                      alt="selling my home" />
                    <h3 id="text_block-1392-106" class="ct-text-block">
                        <i></i>No Home Repair Obligations</h3>
                    <div id="text_block-1393-106"
                      class="ct-text-block atomic-iconblock-4-text">
                        <div style="text-align: center;">
                          Put your home on the market without the need to even lift a paintbrush. As cash purchasers, we undertake all renovation and cleaning tasks.
                        </div>
                    </div>
                </div>
            </div>
            <div id="new_columns-1394-106" class="ct-new-columns">
                <div id="div_block-1395-106"
                  class="ct-div-block atomic-iconblock-4-column"><img
                      loading="lazy" id="image-1396-106" alt="sell my home"
                      src="{{asset('assets/images/icons/flexible_closing_time.png')}}"
                      class="ct-image"
                      sizes="(max-width: 256px) 100vw, 256px"
                      alt="sell my home" />
                    <h3 id="text_block-1397-106" class="ct-text-block">
                      Adjustable Closing Schedule<br></h3>
                    <div id="text_block-1398-106"
                      class="ct-text-block atomic-iconblock-4-text">
                        <div style="text-align: center;">
                          Sell My House Fast adapts to any timeline, including those set by homeowners with a tight schedule. You're in charge of determining the closing date!
                        </div>
                    </div>
                </div>
                <div id="div_block-1399-106"
                  class="ct-div-block atomic-iconblock-4-column"><img
                      loading="lazy" id="image-1400-106" alt="sell home"
                      src="{{asset('assets/images/icons/simiple_process.png')}}"
                      class="ct-image"
                      sizes="(max-width: 256px) 100vw, 256px"
                      alt="sell home" />
                    <h3 id="text_block-1401-106" style="text-align: center" class="ct-text-block">
                        <i></i>Uncomplicated Sale Procedure</h3>
                    <div id="text_block-1402-106"
                      class="ct-text-block atomic-iconblock-4-text">
                        <div style="text-align: center;">
                          The operation of Sell My House Fast is built upon our straightforward selling process. This is the primary reason sellers opt for us over an agent or FSBO (For Sale By Owner)! There's no need for a home listing. No headaches.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="section-1596-106" class=" ct-section">
        <div class="ct-section-inner-wrap">
            <div id="div_block-1597-106" class="ct-div-block">
                <div id="code_block-1835-106" class="ct-code-block"><a
                      id="sell-your-house-fast"></a></div>
            </div>
            <div id="div_block-1598-106" class="ct-div-block">
                <h3 id="headline-1599-106" class="ct-headline">Sell My House
                    Fast For Cash!</h3>
            </div>
            <div id="shortcode-1600-106" class="ct-shortcode">
                <div class='gf_browser_gecko gform_wrapper gravity-theme'
                  id='gform_wrapper_6'>
                    <div id='gf_6' class='gform_anchor' tabindex='-1'></div>
                    <div class='gform_heading'>
                        <p class='gform_required_legend'></p>
                    </div>
                    <form method='post' enctype='multipart/form-data'
                      target='gform_ajax_frame_6' id='gform_6'
                      action='/#gf_6' novalidate><input
                          id=partial_entry_id_6 class="partial_entry_id"
                          type=hidden name="partial_entry_id"
                          value="pending" data-form_id="6" />
                        <div class='gform_body gform-body'>
                            <div id='gform_fields_6'
                              class='gform_fields top_label form_sublabel_below description_below'>
                                <div id="field_6_6"
                                  class="gfield gfield--width-full gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible"
                                  data-js-reload="field_6_6"><label
                                      class='gfield_label'
                                      for='input_6_6'>Property Address<span
                                          class="gfield_required"><span
                                              class="gfield_required gfield_required_asterisk">*</span></span></label>
                                    <div
                                      class='ginput_container ginput_container_text'>
                                        <input name='input_6' id='input_6_6'
                                          type='text' value='' class='large'
                                          aria-required="true"
                                          aria-invalid="false" /> </div>
                                </div>
                                <fieldset id="field_6_4"
                                  class="gfield gfield--width-full field_sublabel_below field_description_below gfield_visibility_hidden"
                                  data-js-reload="field_6_4">
                                    <div class='admin-hidden-markup'><i
                                          class='gform-icon gform-icon--hidden'></i><span>Hidden</span>
                                    </div>
                                    <legend
                                      class='gfield_label gfield_label_before_complex'>
                                        Address Autofill</legend>
                                    <div
                                      class='ginput_complex ginput_container has_street has_street2 has_city has_state has_zip has_country ginput_container_address'
                                      id='input_6_4'>
                                        <span
                                          class='ginput_full address_line_1 ginput_address_line_1'
                                          id='input_6_4_1_container'>
                                            <input type='text'
                                              name='input_4.1'
                                              id='input_6_4_1' value=''
                                              aria-required='false' />
                                            <label for='input_6_4_1'
                                              id='input_6_4_1_label'>Street
                                                Address</label>
                                        </span><span
                                          class='ginput_full address_line_2 ginput_address_line_2'
                                          id='input_6_4_2_container'>
                                            <input type='text'
                                              name='input_4.2'
                                              id='input_6_4_2' value=''
                                              aria-required='false' />
                                            <label for='input_6_4_2'
                                              id='input_6_4_2_label'>Address
                                                Line 2</label>
                                        </span><span
                                          class='ginput_left address_city ginput_address_city'
                                          id='input_6_4_3_container'>
                                            <input type='text'
                                              name='input_4.3'
                                              id='input_6_4_3' value=''
                                              aria-required='false' />
                                            <label for='input_6_4_3'
                                              id='input_6_4_3_label'>City</label>
                                        </span><span
                                          class='ginput_right address_state ginput_address_state'
                                          id='input_6_4_4_container'>
                                            <input type='text'
                                              name='input_4.4'
                                              id='input_6_4_4' value=''
                                              aria-required='false' />
                                            <label for='input_6_4_4'
                                              id='input_6_4_4_label'>State /
                                                Province / Region</label>
                                        </span><span
                                          class='ginput_left address_zip ginput_address_zip'
                                          id='input_6_4_5_container'>
                                            <input type='text'
                                              name='input_4.5'
                                              id='input_6_4_5' value=''
                                              aria-required='false' />
                                            <label for='input_6_4_5'
                                              id='input_6_4_5_label'>ZIP /
                                                Postal Code</label>
                                        </span><span
                                          class='ginput_right address_country ginput_address_country'
                                          id='input_6_4_6_container'>
                                            <select name='input_4.6'
                                              id='input_6_4_6'
                                              aria-required='false'>
                                                <option value=''
                                                  selected='selected'>
                                                </option>
                                                <option
                                                  value='United States'>
                                                    United States</option>
                                                <option value='Canada'>
                                                    Canada</option>
                                            </select>
                                            <label for='input_6_4_6'
                                              id='input_6_4_6_label'>Country</label>
                                        </span>
                                        <div
                                          class='gf_clear gf_clear_complex'>
                                        </div>
                                    </div><input type="hidden"
                                      name="gpaa_coords_4"
                                      class="gform_hidden" value="">
                                </fieldset>
                                <div id="field_6_2"
                                  class="gfield gfield--width-half field_sublabel_below field_description_below gfield_visibility_visible"
                                  data-js-reload="field_6_2"><label
                                      class='gfield_label'
                                      for='input_6_2'>Phone</label>
                                    <div
                                      class='ginput_container ginput_container_phone'>
                                        <input name='input_2' id='input_6_2'
                                          type='tel' value='' class='large'
                                          placeholder='###-###-####'
                                          aria-invalid="false" /></div>
                                </div>
                                <div id="field_6_3"
                                  class="gfield gfield--width-half gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible"
                                  data-js-reload="field_6_3"><label
                                      class='gfield_label'
                                      for='input_6_3'>Email<span
                                          class="gfield_required"><span
                                              class="gfield_required gfield_required_asterisk">*</span></span></label>
                                    <div
                                      class='ginput_container ginput_container_email'>
                                        <input name='input_3' id='input_6_3'
                                          type='email' value=''
                                          class='large' aria-required="true"
                                          aria-invalid="false" />
                                    </div>
                                </div>
                                <div id="field_6_7"
                                  class="gfield gform_hidden field_sublabel_below field_description_below gfield_visibility_visible"
                                  data-js-reload="field_6_7">
                                    <div
                                      class='ginput_container ginput_container_text'>
                                        <input name='input_7' id='input_6_7'
                                          type='hidden' class='gform_hidden'
                                          aria-invalid="false"
                                          value='/' />
                                    </div>
                                </div>
                                <div id="field_6_8"
                                  class="gfield gfield--width-full gform_hidden field_sublabel_below field_description_below gfield_visibility_visible"
                                  data-js-reload="field_6_8">
                                    <div
                                      class='ginput_container ginput_container_text'>
                                        <input name='input_8' id='input_6_8'
                                          type='hidden' class='gform_hidden'
                                          aria-invalid="false" value='' />
                                    </div>
                                </div>
                                <div id="field_6_9"
                                  class="gfield gfield--width-full gfield_html gfield_html_formatted gfield_no_follows_desc field_sublabel_below field_description_below gfield_visibility_hidden"
                                  data-js-reload="field_6_9"><input
                                      id="input_8" name="input_6_8"
                                      type="hidden" value=""></div>
                                <div id="field_6_10"
                                  class="gfield gform_validation_container field_sublabel_below field_description_below gfield_visibility_visible"
                                  data-js-reload="field_6_10"><label
                                      class='gfield_label'
                                      for='input_6_10'>Email</label>
                                    <div class='ginput_container'><input
                                          name='input_10' id='input_6_10'
                                          type='text' value=''
                                          autocomplete='new-password' />
                                    </div>
                                    <div class='gfield_description'
                                      id='gfield_description_6_10'>This
                                        field is for validation purposes and
                                        should be left unchanged.</div>
                                </div>
                            </div>
                        </div>
                        <div class="gform_footer top_label"> 
                          <button class="xash-buton">Get My Cash Offer!</button>               
                        </div>
                    </form>
                </div>
                <iframe style='display:none;width:0px;height:0px;'
                  src='about:blank' name='gform_ajax_frame_6'
                  id='gform_ajax_frame_6'
                  title='This iframe contains the logic required to handle Ajax powered Gravity Forms.'></iframe>
            </div>
            <p id="text_block-538-106"
              class="ct-text-block atomic-content-26-text">Or Give Us A Call
                Now! <a href="tel:844-207-0788" style="">(844)
                    207-0788</a><br></p>
        </div>
    </section>

    <section id="section-1360-106" class=" ct-section" style="margin-top: 20px;">
      <div class="ct-section-inner-wrap">
          <h2 id="headline-1361-106" class="ct-headline atomic-secondary-heading">Why Leave The Key is Better
          </h2>
          <div id="new_columns-1363-106" class="ct-new-columns">
              <div id="div_block-1364-106" class="ct-div-block atomic-iconblock-4-column" style="align-items:flex-end !important;">
                  <h4 id="text_block-1377-106" class="ct-text-block">
                    Selling to Leave The Key
                  </h4>
                  <div id="text_block-1367-106" class="ct-text-block atomic-iconblock-4-text" >
                      <div class="py-5 nas-adslasd green-list-wett" >
                        <div class="green-list" >Competitive cash offer in 24 hours 
                          <span>
                            <img style="padding-left: 4px;" src="{{asset('assets/images/tick.png')}}" alt="">
                          </span>
                        </div>
                        <div class="green-list" >No listing, prep work, or showings
                          <span>
                            <img style="padding-left: 4px;" src="{{asset('assets/images/tick.png')}}" alt="">
                          </span>
                        </div>
                        <div class="green-list" >
                          Skip the repair work and deduct the costs 
                          <span>
                            <img  style="padding-left: 4px;" src="{{asset('assets/images/tick.png')}}" alt="">
                          </span>
                        </div>
                        <div class="green-list" >
                          Sell on your schedule
                          <span>
                            <img style="padding-left: 4px;" src="{{asset('assets/images/tick.png')}}" alt="">
                          </span>
                        </div>
                      </div>
                  </div>
              </div>
              <div id="div_block-1369-106" class="ct-div-block ">
                  <h4 id="text_block-1381-106" class="ct-text-block" style="text-align: start">
                    Traditional Home Sale</h4>
                  <div id="text_block-1372-106" class="ct-text-block atomic-iconblock-4-text">
                      <div class="nas-adslasd">
                        <div class="red-list">
                          <span>
                            <img src="{{asset('assets/images/warning.png')}}" alt=""> 
                          </span>
                            Risk of buyer financing fall-through
                          </div>

                        <div class="red-list">
                          <span>

                            <img src="{{asset('assets/images/warning.png')}}" alt="">
                          </span>
                          Hours of prep work and home showings
                        </div class="red-list">

                        <div class="red-list">
                          <span>
                            <img src="{{asset('assets/images/warning.png')}}" alt="">
                          </span>
                           Manage repairs yourself</div>

                        <div class="red-list">
                          <span>
                            <img src="{{asset('assets/images/warning.png')}}" alt="">
                          </span>
                          Uncertain closing timeline</div>

                      </div>
                  </div>
              </div>
          </div>
         
      </div>
  </section>


    <section id="section-530-106" class=" ct-section">
        <div class="ct-section-inner-wrap">
          <div id="div_block-1594-106" class="ct-div-block"></div>

          <div id="new_columns-219-106" class="nw-dose-wews ct-new-columns">
            <div id="div_block-220-106" class="ct-div-block">
                <div id="div_block-221-106" class="p-4 ct-div-block atomic-iconblock-15-wrapper shadow-none">
                   
                  <img loading="lazy"   style="border-radius: 50%;width:240px;height:240px;object-fit:cover;" alt="sale my home fast" src="{{asset('assets/images/relocated.jpg')}}" class="ct-image" sizes="(max-width: 512px) 100vw, 512px">
                  <ul class="bas-ldu-ul text-align-start"><li class="">Relocating</li>
                    <li>Probate</li>
                    <li>Tax Lien</li>
                    <li>Inherited Home</li>
                    <li>Upgrading</li>
                    <li>Health Issues</li>
                    <li>Title Issues</li>
                  </ul>
                </div>
            </div>
            <div id="div_block-220-106" class="ct-div-block">
                <div id="div_block-221-106" class="p-4 ct-div-block atomic-iconblock-15-wrapper shadow-none">
                   
                  <img loading="lazy"   style="border-radius: 50%;width:240px;height:240px;object-fit:cover;" alt="sale my home fast" src="{{asset('assets/images/vacant_home.jpg')}}" class="ct-image" sizes="(max-width: 512px) 100vw, 512px">
                  <ul class="bas-ldu-ul text-align-start">
                    <li><em>Vacant Home</em></li>
                    <li><em>Mold</em></li>
                    <li><em>Hoarder Home</em></li>
                    <li><em>Termite Damage</em></li>
                    <li><em>Divorce</em></li>
                    <li><em>Fire Damage</em></li>
                    <li><em>Major Repairs Needed</em></li>
                    <li><em>Storm Damage</em></li>
                  </ul>
                </div>
            </div>
            <div id="div_block-220-106" class="ct-div-block">
                <div id="div_block-221-106" class="p-4 ct-div-block atomic-iconblock-15-wrapper shadow-none">
                   
                  <img loading="lazy"   style="border-radius: 50%;width:240px;height:240px;object-fit:cover;" alt="sale my home fast" src="{{asset('assets/images/notice.jpg')}}" class="ct-image" sizes="(max-width: 512px) 100vw, 512px">
                  <ul class="bas-ldu-ul text-align-start">
                    <li>Job Loss</li>
                    <li>Expired Listing</li>
                    <li>Bankruptcy</li>
                    <li>Behind On Payments</li>
                    <li>Foreclosure</li>
                    <li>Problems With Tenants</li>
                    <li>Job Transfer</li>
                    <li>Code Violations</li>
                  </ul>
                </div>
            </div>
    
        </div>
            <h2 id="headline-531-106"
              class="ct-headline atomic-secondary-heading">
              Accelerate Your Home Sale Without Involving an Agent
            </h2>
            <div id="new_columns-533-106"
              class="ct-new-columns atomic-content-26-columns">
                <div id="div_block-534-106" class="ct-div-block">
                    <div id="_map-687-106" class="oxy-map" loading="lazy">
                        <iframe class="lozad" 
                          data-src='https://www.google.com/maps/embed/v1/place?key=AIzaSyDVg2FunV8BQLbAyPDoSjP8UQJ7hhv4Tdc&q=United+States&zoom=3'
                          frameborder=0></iframe></div>
                </div>
                <div id="div_block-536-106" class="ct-div-block ">
                    <p id="text_block-1603-106"
                      class="ct-text-block atomic-content-26-text">
                      We purchase properties across every state, leveraging our network of local real estate buyers in each market. In every state, we collaborate with a local title company or real estate attorney who oversees escrow and settlement.
                      <br></p>
                    <p id="text_block-1180-106"
                      class="ct-text-block atomic-content-26-text">
                        There's a real estate buyer ready to assist in every market. With our years of experience in buying homes, we've established connections with numerous cash home buyers eager to promptly buy your property for cash.
                        <br></p>
                    <p id="text_block-1181-106"
                      class="ct-text-block atomic-content-26-text">
                      Embrace the opportunity of a competitive cash offer with Sell My House Fast! We aim for zero seller regrets. We want you to select the optimum offer when it's time to sell your home!
                      <br></p>
                </div>
            </div>
            <div id="new_columns-1672-106" class="ct-new-columns">
                <div id="div_block-1673-106" class="ct-div-block">
                    <div id="div_block-1678-106" class="ct-div-block">
                        <h4 id="headline-1676-106" class="ct-headline">Sell
                            My House Fast!</h4>
                        <ul id="div_block-1679-106" class="ct-div-block">
                          @foreach($lists["list1"] as $list)
                          <li id="text_block-1680-106"
                          class="ct-text-block"><a href="{{ route('service.location', ['slug' => 'we-buy-houses-' . strtolower(str_replace(' ', '-', $list))]) }}">Sell My
                                House Fast
                              </a> 
                              <a href="{{ route('service.location', ['slug' => 'we-buy-houses-' . strtolower(str_replace(' ', '-', $list))]) }}">
                                  {{ $list }}
                                </a>
                          </li>
                          @endforeach
                        </ul>
                    </div>
                </div>
                <div id="div_block-1674-106" class="ct-div-block">
                    <div id="div_block-1684-106" class="ct-div-block">
                        <h3 id="headline-1685-106" class="ct-headline">Sell
                            My Home Fast!</h3>
                        <ul id="div_block-1686-106" class="ct-div-block">

                          @foreach($lists["list2"] as $list)
                          <li id="text_block-1680-106"
                          class="ct-text-block"><a href="{{ route('service.location', ['slug' => 'we-buy-houses-' . strtolower(str_replace(' ', '-', $list))]) }}">Sell My
                                House Fast
                              </a> 
                              <a href="{{ route('service.location', ['slug' => 'we-buy-houses-' . strtolower(str_replace(' ', '-', $list))]) }}">
                                  {{ $list }}
                                </a>
                          </li>
                          @endforeach
                        </ul>
                    </div>
                </div>
                <div id="div_block-1675-106" class="ct-div-block">
                    <div id="div_block-1688-106" class="ct-div-block">
                        <h2 id="headline-1689-106" class="ct-headline">Need
                            To Sell My House Fast!</h2>
                        <ul id="div_block-1690-106" class="ct-div-block">
                          @foreach($lists["list3"] as $list)
                          <li id="text_block-1680-106"
                          class="ct-text-block"><a href="{{ route('service.location', ['slug' => 'we-buy-houses-' . strtolower(str_replace(' ', '-', $list))]) }}">Sell My
                                House Fast
                              </a> 
                              <a href="{{ route('service.location', ['slug' => 'we-buy-houses-' . strtolower(str_replace(' ', '-', $list))]) }}">
                                  {{ $list }}
                                </a>
                          </li>
                          @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="section-1450-106" class=" ct-section">
        <div class="ct-section-inner-wrap">
            <div id="div_block-1580-106" class="ct-div-block"></div>
            <h2 id="headline-1451-106"
              class="ct-headline atomic-secondary-heading">Sell My House
                Fast FAQ</h2>
            <div id="div_block-1497-106" class="ct-div-block m-0">
                <div id="div_block-1853-106" class="ct-div-block m-0">
                    <div id="fancy_icon-1854-106" class="ct-fancy-icon"><svg
                          id="svg-fancy_icon-1854-106">
                            <use xlink:href="#FontAwesomeicon-home"></use>
                        </svg></div>
                    <h3 id="headline-1495-106" class="ct-headline">
                        <div style="text-align: left;">
                          How Can I Expedite the Sale of My House?
                        </div>
                    </h3>
                </div>
                <p id="text_block-1549-106"
                  class="ct-text-block atomic-content-26-text">
                  Accelerate your house sale by opting for a cash purchaser. There's no need to wait for financing or cover the cost of lender-mandated repairs. Unlike dealing with a real estate agent, open houses are a non-issue. Our proposed amount is exactly what you get at the closing. Sell My House Fast can procure homes in a mere 7 days! Start now by completing our form (we just need the property address and your email)!
                  <br></p>
            </div>
            <div id="div_block-1501-106" class="ct-div-block m-0">
                <div id="div_block-1856-106" class="ct-div-block m-0">
                    <div id="fancy_icon-1857-106" class="ct-fancy-icon"><svg
                          id="svg-fancy_icon-1857-106">
                            <use xlink:href="#FontAwesomeicon-home"></use>
                        </svg></div>
                    <h3 id="headline-1502-106" class="ct-headline">
                        <div style="text-align: left;">Which is the Ideal Website to Sell Your House?</div>
                    </h3>
                </div>
                <p id="text_block-1551-106"
                  class="ct-text-block atomic-content-26-text">Choosing the best website to sell your house boils down to personal preference! Several large real estate entities have ventured into the "We buy houses" domain. Plus, there's a multitude of local real estate investors. Normally, you'd fill out a form on a website selling your home to receive a generic cash offer. However, at Sell My House Fast, when you complete our form, we link you with a local buyer who has expertise in your market and will provide you with a considerate cash offer!<br></p>
            </div>
            <div id="div_block-1506-106" class="ct-div-block m-0">
                <div id="div_block-1859-106" class="ct-div-block m-0">
                    <div id="fancy_icon-1860-106" class="ct-fancy-icon"><svg
                          id="svg-fancy_icon-1860-106">
                            <use xlink:href="#FontAwesomeicon-home"></use>
                        </svg></div>
                    <h3 id="headline-1507-106" class="ct-headline">
                        <div style="text-align: left;">
                          How Do I Manage to Sell My House in a Single Day?
                        </div>
                    </h3>
                </div>
                <p id="text_block-1555-106"
                  class="ct-text-block atomic-content-26-text">
                  Achieving a house sale in one day is virtually unfeasible (even with a cash quote online). Typically, home sales, when handled by a real estate agent, span from 30 to 90 days. The conventional method of selling your house involves a listing agent, and title companies or real estate lawyers to oversee the closing procedure. A real estate closing necessitates a title search and resolution of any liens against the property such as mortgages, HOA liens, or tax liens.
                  <br></p>
                <p id="text_block-1890-106"
                  class="ct-text-block atomic-content-26-text">
                  The quickest route to sell your house is through a cash buyer like us! At Sell My House Fast, we can finalize the deal in as little as 7 days! This allows sufficient time for the title to produce the requisite real estate documents, conduct a title search, and arrange a notary.
                  <br></p>
            </div>
            <div id="div_block-1511-106" class="ct-div-block m-0">
                <div id="div_block-1862-106" class="ct-div-block m-0">
                    <div id="fancy_icon-1863-106" class="ct-fancy-icon"><svg
                          id="svg-fancy_icon-1863-106">
                            <use xlink:href="#FontAwesomeicon-home"></use>
                        </svg></div>
                    <h3 id="headline-1512-106" class="ct-headline">
                        <div style="text-align: left;">
                          How Can I Boost My Possibility of Selling My House?
                        </div>
                    </h3>
                </div>
                <p id="text_block-1561-106"
                  class="ct-text-block atomic-content-26-text">
                  Boost your probability of selling your house by partnering with a cash buyer! Sell My House Fast excels at quick home sales! We propose offers for properties of all types and sizes. Whether your house necessitates extensive renovation or is simply dated, we're ready to purchase it. Sounds unbeatable, right?
                  <br></p>
                  <p id="text_block-1890-106"
                  class="ct-text-block atomic-content-26-text">
                  You could also enhance your chances of selling by undertaking home repairs and modernizing the property to attract retail buyers. Shifting to a pricier, top-tier real estate agent could be beneficial. Cleaning up and presenting your house to a wider audience of potential buyers might also help. Of course, these measures will consume time and money, so if they seem overwhelming, check what we can offer for your property in its current condition by completing our online form! It's totally free and carries no obligations.
                  <br></p>
            </div>
        </div>
    </section>
    <section id="section-1584-106" class=" ct-section">
        <div class="ct-section-inner-wrap">
            <div id="code_block-1666-106" class="ct-code-block"><a
                  id="sell-my-house-fast"></a></div>
            <div id="div_block-1592-106" class="ct-div-block"></div>
            <div id="div_block-1586-106" class="ct-div-block">
                <h3 id="headline-1587-106" class="ct-headline">Sell My House
                    Fast For Cash!</h3>
            </div>
            <div id="shortcode-1591-106" class="ct-shortcode">
                <div class='gf_browser_gecko gform_wrapper gravity-theme'
                  id='gform_wrapper_7'>
                    <div id='gf_7' class='gform_anchor' tabindex='-1'></div>
                    <div class='gform_heading'>
                        <p class='gform_required_legend'></p>
                    </div>
                    <form method='post' enctype='multipart/form-data'
                      target='gform_ajax_frame_7' id='gform_7'
                      action='/#gf_7' novalidate><input
                          id=partial_entry_id_7 class="partial_entry_id"
                          type=hidden name="partial_entry_id"
                          value="pending" data-form_id="7" />
                        <div class='gform_body gform-body'>
                            <div id='gform_fields_7'
                              class='gform_fields top_label form_sublabel_below description_below'>
                                <div id="field_7_6"
                                  class="gfield gfield--width-full gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible"
                                  data-js-reload="field_7_6"><label
                                      class='gfield_label'
                                      for='input_7_6'>Property Address<span
                                          class="gfield_required"><span
                                              class="gfield_required gfield_required_asterisk">*</span></span></label>
                                    <div
                                      class='ginput_container ginput_container_text'>
                                        <input name='input_6' id='input_7_6'
                                          type='text' value='' class='large'
                                          aria-required="true"
                                          aria-invalid="false" /> </div>
                                </div>
                                <fieldset id="field_7_4"
                                  class="gfield gfield--width-full field_sublabel_below field_description_below gfield_visibility_hidden"
                                  data-js-reload="field_7_4">
                                    <div class='admin-hidden-markup'><i
                                          class='gform-icon gform-icon--hidden'></i><span>Hidden</span>
                                    </div>
                                    <legend
                                      class='gfield_label gfield_label_before_complex'>
                                        Address Autofill</legend>
                                    <div
                                      class='ginput_complex ginput_container has_street has_street2 has_city has_state has_zip has_country ginput_container_address'
                                      id='input_7_4'>
                                        <span
                                          class='ginput_full address_line_1 ginput_address_line_1'
                                          id='input_7_4_1_container'>
                                            <input type='text'
                                              name='input_4.1'
                                              id='input_7_4_1' value=''
                                              aria-required='false' />
                                            <label for='input_7_4_1'
                                              id='input_7_4_1_label'>Street
                                                Address</label>
                                        </span><span
                                          class='ginput_full address_line_2 ginput_address_line_2'
                                          id='input_7_4_2_container'>
                                            <input type='text'
                                              name='input_4.2'
                                              id='input_7_4_2' value=''
                                              aria-required='false' />
                                            <label for='input_7_4_2'
                                              id='input_7_4_2_label'>Address
                                                Line 2</label>
                                        </span><span
                                          class='ginput_left address_city ginput_address_city'
                                          id='input_7_4_3_container'>
                                            <input type='text'
                                              name='input_4.3'
                                              id='input_7_4_3' value=''
                                              aria-required='false' />
                                            <label for='input_7_4_3'
                                              id='input_7_4_3_label'>City</label>
                                        </span><span
                                          class='ginput_right address_state ginput_address_state'
                                          id='input_7_4_4_container'>
                                            <input type='text'
                                              name='input_4.4'
                                              id='input_7_4_4' value=''
                                              aria-required='false' />
                                            <label for='input_7_4_4'
                                              id='input_7_4_4_label'>State /
                                                Province / Region</label>
                                        </span><span
                                          class='ginput_left address_zip ginput_address_zip'
                                          id='input_7_4_5_container'>
                                            <input type='text'
                                              name='input_4.5'
                                              id='input_7_4_5' value=''
                                              aria-required='false' />
                                            <label for='input_7_4_5'
                                              id='input_7_4_5_label'>ZIP /
                                                Postal Code</label>
                                        </span><span
                                          class='ginput_right address_country ginput_address_country'
                                          id='input_7_4_6_container'>
                                            <select name='input_4.6'
                                              id='input_7_4_6'
                                              aria-required='false'>
                                                <option value=''
                                                  selected='selected'>
                                                </option>
                                                <option
                                                  value='United States'>
                                                    United States</option>
                                                <option value='Canada'>
                                                    Canada</option>
                                            </select>
                                            <label for='input_7_4_6'
                                              id='input_7_4_6_label'>Country</label>
                                        </span>
                                        <div
                                          class='gf_clear gf_clear_complex'>
                                        </div>
                                    </div><input type="hidden"
                                      name="gpaa_coords_4"
                                      class="gform_hidden" value="">
                                </fieldset>
                                <div id="field_7_2"
                                  class="gfield gfield--width-half field_sublabel_below field_description_below gfield_visibility_visible"
                                  data-js-reload="field_7_2"><label
                                      class='gfield_label'
                                      for='input_7_2'>Phone</label>
                                    <div
                                      class='ginput_container ginput_container_phone'>
                                        <input name='input_2' id='input_7_2'
                                          type='tel' value='' class='large'
                                          placeholder='###-###-####'
                                          aria-invalid="false" /></div>
                                </div>
                                <div id="field_7_3"
                                  class="gfield gfield--width-half gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible"
                                  data-js-reload="field_7_3"><label
                                      class='gfield_label'
                                      for='input_7_3'>Email<span
                                          class="gfield_required"><span
                                              class="gfield_required gfield_required_asterisk">*</span></span></label>
                                    <div
                                      class='ginput_container ginput_container_email'>
                                        <input name='input_3' id='input_7_3'
                                          type='email' value=''
                                          class='large' aria-required="true"
                                          aria-invalid="false" />
                                    </div>
                                </div>
                                <div id="field_7_7"
                                  class="gfield gform_hidden field_sublabel_below field_description_below gfield_visibility_visible"
                                  data-js-reload="field_7_7">
                                    <div
                                      class='ginput_container ginput_container_text'>
                                        <input name='input_7' id='input_7_7'
                                          type='hidden' class='gform_hidden'
                                          aria-invalid="false"
                                          value='/' />
                                    </div>
                                </div>
                                <div id="field_7_8"
                                  class="gfield gfield--width-full gform_hidden field_sublabel_below field_description_below gfield_visibility_visible"
                                  data-js-reload="field_7_8">
                                    <div
                                      class='ginput_container ginput_container_text'>
                                        <input name='input_8' id='input_7_8'
                                          type='hidden' class='gform_hidden'
                                          aria-invalid="false" value='' />
                                    </div>
                                </div>
                                <div id="field_7_9"
                                  class="gfield gfield--width-full gfield_html gfield_html_formatted gfield_no_follows_desc field_sublabel_below field_description_below gfield_visibility_hidden"
                                  data-js-reload="field_7_9"><input
                                      id="input_8" name="input_7_8"
                                      type="hidden" value=""></div>
                                <div id="field_7_10"
                                  class="gfield gform_validation_container field_sublabel_below field_description_below gfield_visibility_visible"
                                  data-js-reload="field_7_10"><label
                                      class='gfield_label'
                                      for='input_7_10'>Phone</label>
                                    <div class='ginput_container'><input
                                          name='input_10' id='input_7_10'
                                          type='text' value=''
                                          autocomplete='new-password' />
                                    </div>
                                    <div class='gfield_description'
                                      id='gfield_description_7_10'>This
                                        field is for validation purposes and
                                        should be left unchanged.</div>
                                </div>
                            </div>
                        </div>
                        <div class="gform_footer top_label"> 
                          <button class="xash-buton">Get My Cash Offer!</button>               
                        </div>
                    </form>
                </div>
               
            </div>
        </div>
    </section>
    <section id="section-1524-106" class=" ct-section">
        <div class="ct-section-inner-wrap">
            <div id="div_block-1589-106" class="ct-div-block"></div>
            <h2 id="headline-1529-106" class="ct-headline">
              I Must Accelerate My Home Sale!
               </h2>
            <div id="new_columns-1883-106" class="ct-new-columns">
                <div id="div_block-1884-106" class="ct-div-block">
                    <p id="text_block-1893-106"
                      class="ct-text-block atomic-content-26-text">
                      If the thought, "I need to expedite my house sale!" crosses your mind, we stand ready to provide you with a just cash offer. With our expertise in real estate and problem-solving, we can assist you in navigating any real estate scenario. Whether you're dealing with tax liens on your condo, a property in probate, or a family bereavement, we specialize in quick, stress-free home purchases.
                    </p>
                </div>
                <div id="div_block-1885-106" class="ct-div-block">
                    <div id="video-1886-106" class="ct-video">
                        <div
                          class="oxygen-vsb-responsive-video-wrapper oxygen-vsb-responsive-video-wrapper-custom">
                        
                            </div>
                    </div>
                </div>
            </div>
            <p id="text_block-1897-106"
              class="ct-text-block atomic-content-26-text">
              With Sell My House Fast, don't expect an auto-generated offer... when you complete our form, you'll receive a competitive cash offer from a local buyer in your market! Our aim at Sell My House Fast is to ensure your home sale is equitable and uncomplicated! 🙂
              <br></p>
        </div>
    </section>
</div>

@endsection