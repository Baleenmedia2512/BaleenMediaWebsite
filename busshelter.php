<?php
include('include/top_bus_shelter.php');
?>
<style>
	 /* =================================================================================banner css */
/* =================================================================================banner css rgba(241, 234, 254, 0.7), rgba(224, 206, 253, 0.7)*/ 
    .service-banner{
        background: linear-gradient(-45deg, #AA60C8 , #D69ADE, #EABDE6, #FFDFEF, #D17D98);//#8F87F1, #C68EFD, #E9A5F1, #FED2E2);//#F6B2E1, #F1EAFEB3, #E0CEFDB3, #F7E1FF, #EFD9F9, #DCC8F5, #C6B3F0, #58126A);
        background-size: 400% 400%;
        animation: gradient 15s ease infinite;
        background-position: center;
        padding-top:30px;
        border:0px;
        justify-content: space-between;
    }

    @keyframes gradient {
    0% {
        background-position: 0% 50%;
    }
    25% {
        background-position: 50% 100%;
    }
    50% {
        background-position: 100% 50%;
    }
    75% {
        background-position: 50% 0%;
    }
    100% {
        background-position: 0% 50%;
    }
    }
.service-banner h1 {
    font-family: "Poppins", sans-serif;
    text-align: left;
    font-size: 22px;
    font-weight: 600;
    border-bottom: 2px solid black;
    padding-bottom: 10px;
    margin-bottom: 20px;
}
.service-banner p{
    font-size:14px;
    font-weight:bold;
    font-family: "Nunito", sans-serif;
    text-align:justify;
    line-height:1.4;
    color:#3d3d3d;
}

@media (min-width: 1000px){

.service-banner h1{
    font-family: "poppins", sans-serif;
    text-align:left;
    font-size: 30px;
    font-weight:600;
    border-bottom:2px solid black;
    padding-bottom:10px;
    margin-bottom:20px;
}
.service-banner p{
    font-size:16px;
    font-weight:bold;
    font-family: "Nunito", sans-serif;
    text-align:justify;
    line-height:1.6;
    color:#3d3d3d;
}

}

.wave{
    width:100%;
}
/* =================================================================================banner css end*/
/* =================================================================================service-about css*/
.service-bg {
    display: flex;
    background: linear-gradient(white, #FAF8FE);
    justify-content: center;
    align-items: center;
    padding-bottom: 20px; 
}

.service-bg h2{
    font-family: "poppins", sans-serif;
    text-align: left;
    font-size: 24px;
    font-weight:600;
    border-bottom:2px solid #5C2594;
    padding-bottom:10px;
    margin-bottom:20px;
    color: #5C2594;
    /*max-width: 80%;*/
}

.service-bg p{
  font-size:18px;
	font-weight:550;
	padding:0px 20px;
	font-family: "Nunito", sans-serif;
	color:#5D4D7A;
}

.service-bg h3{
    font-family: "poppins", sans-serif;
    text-align: left;
    padding:0px 20px;
    font-size: 24px;
    font-weight:600;
    margin: 10px 10px;
}

.service-about-bg{
	background:  #FAF8FE;
	display:flex;
	flex-direction:row;
    max-width: 100%;
	justify-content:center;
	align-items:center;
	padding-bottom:20px;
}

.service-about-bg h2{
    font-family: "poppins", sans-serif;
    margin: 10px 10px;
    text-align: center;
    font-size: 24px;
    font-weight:600;
    border-bottom:2px solid #5C2594;
    padding-bottom:10px;
    margin-bottom:20px;
    text-align: left;
    color: #5C2594;
}

.service-about-bg h3{
    font-family: "poppins", sans-serif;
    text-align: left;
    padding:0px 20px;
    font-size: 24px;
    font-weight:600;
    margin: 10px 10px;
    color: #5C2594;
}

@media (max-width: 780px){
    .service-about-bg {
        flex-direction: column-reverse;
    }
    .service-bg {
        flex-direction: column-reverse;
    }
    .row1 {
        flex-direction: column;
    }
    .center-div {
        text-align: center;
        max-width: 100%;
    }
}
.head-text {
    font-family: "poppins", sans-serif;
    margin: 10px 10px;
    text-align: left;
    font-size: 30px;
    font-weight:600;
    border-bottom:2px solid black;
    padding-bottom:10px;
    margin-bottom:20px;
}

.service-about-bg p, li{
	font-size:18px;
    margin: 10px 10px;
	font-weight:550;
	padding:0px 20px;
	font-family:nunito;
    text-align: left;
	color:#5D4D7A;
}
.service-about-bg span{
	font-family: "Gloria Hallelujah", cursive;
    font-weight: 600;
    font-style: italic;
    font-size: 18.5px;
	
}

.row1 {
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: space-evenly;
  max-width: 1200px;
  margin: auto;
  flex-wrap: wrap;
  }

.We-work-with-bg{
	background:#fffbf5;
}
.section-padding{
    zoom:40%;
}
@media (min-width:1000px){
    .section-padding{
    zoom:150%;
}  
}
@media (min-width: 580px) {
    .section-padding{
    zoom:160%;
}  
}
.img-cards {
    padding: 20px 20px; 
}
.cta-buttons {
  display: flex;
  gap: 15px;
  margin-top: 20px;
  flex-wrap: wrap;
}

.btn {
  padding: 10px 20px;
  text-decoration: none;
  border-radius: 6px;
  font-weight: bold;
  font-size: 14px;
  transition: background 0.3s;
}

.primary-btn {
  background-color: #201f54;
  color: #fff;
}

.primary-btn:hover {
  background-color: #fff;
  color: #201f54;
}

.secondary-btn {
  background-color: #fff;
  color: #201f54;
  border: 2px solid #201f54;
}

.secondary-btn:hover {
  background-color: #f0f0f0;
}

html {
  scroll-behavior: smooth;
}

.center-div {
    text-align: center;
    max-width: 80%;
}

#benefits {
  background-color: #FAF8FE;     /* Very light lavender */
  color: #3D1562;                /* Deep purple for base text */
  padding: 60px 20px;
  font-family: "Poppins", sans-serif;
}

#benefits h2 {
  text-align: left;
  font-size: 36px;
  border-bottom: 2px solid #5C2594;
  max-width: 80%;
  margin-bottom: 50px;
  font-weight: 600;
  color: #5C2594;                /* Mid‑tone purple */
}

.benefit-cards {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 30px;
  max-width: 1100px;
  margin: auto;
  margin-bottom: 10px;
}

.benefit-card {
  background-color: #FFFFFF;     /* Pure white cards */
  border: 2px solid #9E5CCB;     /* Soft purple border */
  border-radius: 12px;
  padding: 20px 10px;
  text-align: center;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.benefit-card:hover {
  transform: translateY(-6px);
  box-shadow: 0 8px 24px rgba(62, 21, 98, 0.15);
}

.benefit-card i {
  font-size: 36px;
  margin-bottom: 20px;
  color: #9E5CCB;                /* Orchid accent */
}

.benefit-card h3 {
  font-size: 20px;
  margin-bottom: 10px;
  text-align: center;
  font-weight: 600;
  color: #3D1562;                /* Deep purple title */
}

.benefit-card p {
  font-size: 16px;
  color: #5D4D7A;                /* Muted purple‑grey for body copy */
}

.benefits-wrapper {
  max-width: 80%;
  margin: 0 auto;
}

/* Responsive tweaks */
@media (max-width: 600px) {
  #benefits h2 {
    font-size: 28px;
    max-with: 100%;
  }
  .benefit-card h3 {
    font-size: 18px;
  }
  .benefit-card p {
    font-size: 14px;
  }
}

    /* Base animation styles */
    .fade-in-up {
    animation: fadeInUp 1s ease-in forwards;
    opacity: 0;
    }
    .fade-in-right {
    animation: fadeInRight 1s ease-in forwards;
    opacity: 0;
    }
    .fade-in {
    animation: fadeIn 1.2s ease-out forwards;
    opacity: 0;
    }

    /* Delay (optional for staggered entrance) */
    .fade-in-up {
    animation-delay: 0.2s;
    }
    .fade-in-right {
    animation-delay: 0.5s;
    }
    .fade-in {
    animation-delay: 0.8s;
    }

    /* Keyframes */
    @keyframes fadeInUp {
    0% {
        opacity: 0;
        transform: translateY(60px);
    }
    100% {
        opacity: 1;
        transform: translateY(0);
    }
    }

    @keyframes fadeInRight {
    0% {
        opacity: 0;
        transform: translateX(60px);
    }
    100% {
        opacity: 1;
        transform: translateX(0);
    }
    }

    @keyframes fadeIn {
    from {
        opacity: 0;
    }
    to {
        opacity: 1;
    }
    }
    .card {
    background: #fff;
    border-radius: 8px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    overflow: hidden;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }
  .card:hover {
    transform: translateY(-8px);
    box-shadow: 0 8px 20px rgba(0,0,0,0.15);
  }

  .card-img-top {
    width: 100%;
    display: block;
  }
  .card-body {
    padding: 20px;
  }

  .text-center {
    text-align: center;
  }


  .img-cards {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 30px;
    width: 100%;
    max-width: 1200px;
  }

  .card-title {
    font-size: 22px;
    font-weight: 600;
    margin: 16px 0 8px;
    color: #5C2594;
  }

  .card-text {
    font-size: 16px;
    color: #5D4D7A;
    margin: 0;
  }

  @media (max-width: 600px) {
    .head-text {
      font-size: 28px;
    }
    .card-title {
      font-size: 20px;
    }
    .card-text {
      font-size: 14px;
    }
  }

   .faq-container{
    display:flex;
    flex-direction:column;
    justify-content:center;
    align-items:center;
    
    
    }
    .faq-card p {
        font-family: 'Ariel', sans-serif;
        color: black;
        font-weight: 400;
        font-size: 18px;
    }

    .faq-card li {
    color: black;
    font-family: 'Ariel', sans-serif;
    font-weight: 400;
    font-size: 18px;
    }
    .faq-container button{
    border:0px solid black;
    
    background-color:whitesmoke;
    font-size:20px;
    
    }
    .faqbtn-div{
        padding:20px;
        margin-bottom:10px;
        background-color:whitesmoke;
        border-bottom:5px solid #B99470;
        border-radius:15px;
        width:90%;
        font-family: 'Ariel', sans-serif;
    }
    .faqcard-div{
    width:90%;
    font-size:16px;
    text-wrap:wrap;
    margin:0px 20px;
    margin-bottom:10px;
    }
    .faqbtn-div:hover{
    box-shadow: 0 20px 30px -30px rgba(0, 0, 0, 1);
    width:91%;
    }
    .faq-card{
    padding:20px;
    border-radius:1px 20px 20px 20px;
    border-bottom:5px solid #B99470;
    /* background-color:#874430; */
    background-color:#F7EFE5;
    color:black;
    }
    @media screen and (min-width:1025px){
    .faqbtn-div{
    padding:20px;
    margin-bottom:10px;
    background-color:whitesmoke;
    border-bottom:5px solid #B99470;
    border-radius:15px;
    width:70%;
    }
    .faqbtn-div:hover{
    box-shadow: 0 20px 30px -30px rgba(0, 0, 0, 1);
    width:71%;
    }
    .faqcard-div{
    width:70%;
    font-size:16px;
    text-wrap:wrap;
    margin:0px 20px;
    margin-bottom:10px;
    }
    
    
    }
    .faq-bg{
    background-color:#FAF8FE;
    padding:20px 0px;
    }
    .faq-bg h2{
    font-family: "poppins", sans-serif;
    text-align: left;
    font-size: 24px;
    font-weight:600;
    border-bottom:2px solid #5C2594;
    padding-bottom:10px;
    margin-bottom:20px;
    color: #5C2594;
    /*max-width: 80%;*/
}
    .smp {
        margin-top: 10px;
        width: 100%;
        border-radius: 10px;
        background: white;
        height: 95%;
        text-align: center;
        padding: 10px;
    }
    .smp img {
        border-radius: 9px;
        width: 100%;
        height: 250px;
    }
    .smp h2 {
        margin-top: 20px;
        font-size: 20px;
        font-weight: 600;
        padding: 10px;
        text-align: center;
        font-family: 'Montserrat', sans-serif;
        color: #5C2594;
    }

    .smp a {
        font-size: 20px;
        font-family: "Montserrat", sans-serif;
        font-weight: 600;
        margin-top: 10px;
        margin-bottom: 10px;
        color: #333;
        text-align: left;
        color: #5C2594;
    }
    .smp p {
        font-family: 'Montserrat', sans-serif;
        text-align: left;
        font-size: 14px;
        font-weight: 200;
        margin: 5px;
        color: #5C2594;
    }
    @media (min-width: 1000px) {
        .We-work-with-bg h2 {
            font-size: 36px;
        }
        .service-about-bg h2{
            font-size: 36px;
            max-width: 100%;
        }
        .service-bg h2 {
          font-size: 36px;
          max-width: 100%;
        }
        .smp h2{
            font-size: 22px;
        }
        .smp p {
            font-size: 16px;
        }
        .smp a {
            font-size: 25px;
        }
    }
</style>
<!-- ==========================banner ================================-->
<section class="service-banner"> 
    <div class="row1 justify-content-between">
        <div class="col-md-6 fade-in-up">
            <h1>Maximize Your Reach with Bus Shelter Advertising in Chennai</h1>
            <p>Capture the attention of thousands of daily commuters with high-visibility ads at premium bus shelters across Chennai. Our end-to-end service—from creative design to installation—ensures your brand message makes a lasting impact.</p>
            <div class="cta-buttons">
                <a href="/ContactUs" class="btn primary-btn">Get a Quote</a>
                <a href="#bus-shelter-details" class="btn secondary-btn">Know More</a>
            </div>
        </div>
        <div class="col-md-6 fade-in-right">
            <img src="assets/images/busstop.png" alt="" class="img-fluid pb-5 pt-5">
        </div>
    </div>
<img src="assets/images/wave1.png" class="wave"> 
 </section>
 <!-- ============================================================================================================================================= -->
 <div class="empty-space" style="height:50px; background: white;"></div>
 <section id="what-is-bus-shelter-advertising" class="service-bg ">
 <div class="benefits-wrapper">
 <h2>What Is Bus Shelter Advertising?</h2>
        <p>
          Bus shelter advertising—also called <strong>transit shelter ads</strong> or <strong>outdoor advertising Chennai</strong>—is a high-impact medium that puts your brand message directly in front of daily commuters. From <strong>Chennai bus stop advertising</strong> and <strong>bus bay advertisement in Chennai</strong> to <strong>Government bus stand advertising</strong>, these strategically placed ads deliver exceptional visibility at key transit hubs.
        </p>
        <p>
          With <strong>bus stop branding, you can transform ordinary bus shelters into immersive brand experiences. Whether you’re running a short-term promotion or a year-round campaign, our <strong>commuter advertising</strong> solutions ensure your message resonates with thousands of potential customers every day.
        </p>
        <div class="benefit-cards">
          <div class="benefit-card">
            <i class="fas fa-eye fa-2x mb-2"></i>
            <h3>High Visibility</h3>
            <p>Bus ads traverse high-traffic areas across Chennai, offering unmatched brand exposure and daily impressions.</p>
          </div>

          <div class="benefit-card">
            <i class="fas fa-wallet fa-2x mb-2"></i>
            <h3>Cost-Effective</h3>
            <p>More affordable than traditional media, bus branding ensures ROI with long-lasting, recurring visibility.</p>
          </div>

          <div class="benefit-card">
            <i class="fas fa-map-marker-alt fa-2x mb-2"></i>
            <h3>Targeted Reach</h3>
            <p>Advertise directly to local Chennai residents with route-specific MTC bus ads and hyperlocal messaging.</p>
          </div>

          <div class="benefit-card">
            <i class="fas fa-clock fa-2x mb-2"></i>
            <h3>Continuous Exposure</h3>
            <p>Your ads stay visible 24/7 as buses operate from early morning to late night, keeping your brand top-of-mind.</p>
          </div>
        </div>
        <p>
          Ready to elevate your next campaign with <strong>high-impact outdoor ads</strong>? Partner with us for end-to-end service—from creative design and production to installation and maintenance—so your brand stands out where it matters most.
        </p>
        </div>
 </section>
 <!-- “Bus Shelter Lit Advertising” Section -->
<section id="lit-shelter-ads" class="service-about-bg">
  <div class="benefits-wrapper">
    <div class="row1 mb-4 text-center">
      <div class="col-md-12">
        <h2>Bus Shelter Lit Advertising</h2>
        <p>
          Illuminate your brand 24/7 with our premium <strong>lit shelter ads</strong>. Strategically placed at high-traffic bus stops across Chennai, these backlit hoardings deliver stellar visibility both day and night. Ideal for promotions that demand constant exposure and unmatched impact.
        </p>
      </div>
    </div>

    <div class="row image-gallery">
      <div class="col-md-3 mb-4">
        <figure class="gallery-item">
          <img src="assets/images/service cards/Bus-Shelter-1.jpg" alt="Backlit bus shelter ad on a busy Chennai street" class="img-fluid rounded shadow-sm">
        </figure>
      </div>
      <div class="col-md-3 mb-4">
        <figure class="gallery-item">
          <img src="assets/images/service cards/Bus-Shelter-2.jpg" alt="Illuminated bus stop branding at night" class="img-fluid rounded shadow-sm">
        </figure>
      </div>
      <div class="col-md-3 mb-4">
        <figure class="gallery-item">
          <img src="assets/images/service cards/Bus-Shelter-2.jpg" alt="High-impact lit transit shelter advertisement" class="img-fluid rounded shadow-sm">
        </figure>
      </div>
      <div class="col-md-3 mb-4">
        <figure class="gallery-item">
          <img src="assets/images/service cards/Bus-Shelter-3.jpg" alt="Backlit unipole ad near a bus bay in Chennai" class="img-fluid rounded shadow-sm">
        </figure>
      </div>
    </div>

    <div class="row1 mt-4">
        <h3>Why Choose Lit Bus Shelter Ads?</h3>
        <ul class="list-unstyled">
          <li><strong>24/7 Illumination:</strong> Your message shines through all hours—no more lost impressions after sunset.</li>
          <li><strong>Enhanced Brand Recall:</strong> Bright, vivid colors and backlit graphics make your ad unforgettable.</li>
          <li><strong>Weather-Resistant Quality:</strong> Durable, water-proof materials ensure consistent brightness in Chennai’s heat and monsoon.</li>
          <li><strong>Premium Placement:</strong> Positioned at key bus shelters and bays for maximum commuter engagement.</li>
        </ul>
    </div>
  </div>
</section>

 <!-- =========================================================================================================================================== -->
<section id="why-choose-baleen" class="service-about-bg py-5">
  <div class="container">
    <div class="row1 mb-4 text-center">
      <div class="col-md-12">
        <h2>Why Choose Baleen Media?</h2>
        <p>
          As Chennai’s leading <strong>bus shelter advertising</strong> specialist, Baleen Media combines local expertise, premium inventory, and measurable results to make your campaign stand out. Here’s what sets us apart:
        </p>
      </div>
    </div>

    <div class="benefit-cards">
      <div class="benefit-card">
        <i class="fas fa-cogs fa-2x mb-3"></i>
        <h3>End-to-End Management</h3>
        <p>From creative design and production to installation and ongoing maintenance, we handle every step so you get hassle-free, high-impact bus stop branding.</p>
      </div>

      <div class="benefit-card">
        <i class="fas fa-map-marker-alt fa-2x mb-3"></i>
        <h3>Local Expertise</h3>
        <p>With deep knowledge of Chennai’s commuter patterns and transit hubs, we position your ads in the most strategic bus shelters across the city.</p>
      </div>

      <div class="benefit-card">
        <i class="fas fa-star fa-2x mb-3"></i>
        <h3>Premium Inventory</h3>
        <p>Gain exclusive access to high-footfall shelters, government bus stand advertising spots, and prime bus bay locations for maximum visibility.</p>
      </div>

      <div class="benefit-card">
        <i class="fas fa-chart-line fa-2x mb-3"></i>
        <h3>Measurable Results</h3>
        <p>Track impressions, audience engagement, and ROI with detailed reports—so you know exactly how your Chennai transit advertising is performing.</p>
      </div>
    </div>

    <div class="row1 mt-4 text-center">
      <div class="col-md-12">
        <a href="/contact" class="btn primary-btn" style="border-radius: 20px; margin: 10px 10px;">Get Started with Baleen Media</a>
      </div>
    </div>
  </div>
</section>

<section class="faq-bg">
  <div class="container">
    <h2>
      Frequently Asked Questions About Bus Shelter Advertising in Chennai
    </h2>
    <br>
    <div class="faq-container">

      <!-- FAQ 1 -->
      <div class="faqbtn-div">
        <button class="faqbtn" type="button" data-toggle="collapse" data-target="#faq1" aria-expanded="false">
          What is bus shelter advertising and how does it benefit my brand in Chennai?
        </button>
      </div>
      <div class="faqcard-div">
        <div class="collapse" id="faq1">
          <div class="faq-card">
            <p>
              Bus shelter advertising—also known as <strong>transit shelter ads</strong> or <strong>outdoor advertising Chennai</strong>—places high-impact graphics on shelters at busy bus stops. It benefits your brand by:
            </p>
            <ul>
              <li><strong>Massive Reach:</strong> Targets thousands of daily commuters at prime Chennai transit hubs.</li>
              <li><strong>24/7 Visibility:</strong> Your message stays live day and night, especially with lit shelter ads.</li>
              <li><strong>Cost-Effective:</strong> Lower CPM than TV or print, with long-term brand exposure.</li>
              <li><strong>Local Impact:</strong> Drives footfall and awareness in specific Chennai neighborhoods.</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- FAQ 4 -->
      <div class="faqbtn-div">
        <button class="faqbtn" type="button" data-toggle="collapse" data-target="#faq4" aria-expanded="false">
          How long should a bus shelter campaign run for optimal results?
        </button>
      </div>
      <div class="faqcard-div">
        <div class="collapse" id="faq4">
          <div class="faq-card">
            <p>
              For effective brand recall and sustained awareness:
            </p>
            <ul>
              <li><strong>1–2 Months:</strong> Ideal for product launches or time-sensitive promotions.</li>
              <li><strong>3–6 Months:</strong> Builds stronger local presence and recall.</li>
              <li><strong>6+ Months:</strong> Maximizes ROI with discounted long-term rates and wider coverage.</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- FAQ 5 -->
      <div class="faqbtn-div">
        <button class="faqbtn" type="button" data-toggle="collapse" data-target="#faq5" aria-expanded="false">
          Is bus shelter advertising in Chennai government-approved?
        </button>
      </div>
      <div class="faqcard-div">
        <div class="collapse" id="faq5">
          <div class="faq-card">
            <p>
              Yes. All our bus shelter ads are fully authorized under MTC regulations:
            </p>
            <ul>
              <li>We secure permissions from the Metropolitan Transport Corporation (MTC).</li>
              <li>Designs comply with Chennai municipal advertising guidelines.</li>
              <li>Enjoy hassle-free, legal campaigns with government-approved sites.</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- FAQ 6 -->
      <div class="faqbtn-div">
        <button class="faqbtn" type="button" data-toggle="collapse" data-target="#faq6" aria-expanded="false">
          Why choose Baleen Media for bus shelter advertising in Chennai?
        </button>
      </div>
      <div class="faqcard-div">
        <div class="collapse" id="faq6">
          <div class="faq-card">
            <p>
              As Chennai’s bus shelter advertising experts, Baleen Media stands out with:
            </p>
            <ul>
              <li><strong>Comprehensive Service:</strong> End-to-end creative, production, and installation.</li>
              <li><strong>Exclusive Inventory:</strong> Access to premium, high-footfall shelters and bays.</li>
              <li><strong>Local Insights:</strong> Data-driven location targeting for maximum impact.</li>
              <li><strong>Transparent Reporting:</strong> Detailed metrics on impressions and engagement.</li>
            </ul>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
<section class="service-about-bg" style="background: linear-gradient(#FAF8FE, #f8f9fa); flex-direction: column;">
        <h2 style=" text-align: center; font-size: 24px; margin-left: 10px;">Check some of our famous brandings</h2>
        <div class="service-about-bg" style="background: none;">
            <div class="row">
                <!-- card1 -->
                <div class="col-md-4">
                    <div class="smp">
                        <img src="assets/images/digital_marketing_hero.jpg" loading="lazy" alt="Digital Marketing" class="img-fluid bg-img-services">
                        <a href="/digital-marketing-agency-chennai.php" class="services-text">Digital Marketing</a>
                    </div>
                </div>
                <!-- card2 -->
                <div class="col-md-4">
                    <div class="smp">
                        <img src="assets/images/no parking sample4.jpg" loading="lazy" alt="No Parking Boards" class="img-fluid bg-img-services">
                        <a href="noparking-advertisement-agency-in-chennai.php" class="services-text">No Parking Boards</a>
                    </div>
                </div>
                <!-- card3 -->
                <div class="col-md-4">
                    <div class="smp">
                        <img src="assets/images/portfolio/work/work18.jpg" loading="lazy" alt="Newspaper Advertising" class="img-fluid">
                        <a href="/bus-advertising-in-chennai" class="services-text">Bus Advertising</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

<div class="empty-space" style="height:100px; background-image: linear-gradient(#fffbf5, #f8f9fa);"></div>
<?php
include('include/footer.php');
?>