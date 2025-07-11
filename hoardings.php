<?php
include('include/top_hoardings.php');
?>
<style>
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
  font-size:16px;
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

.service-bg h3{
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
}

.benefit-card {
  background-color: #FFFFFF;     /* Pure white cards */
  border: 2px solid #9E5CCB;     /* Soft purple border */
  border-radius: 12px;
  padding: 30px 20px;
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
  <div class="row1">
    <div class="col-md-6 fade-in-up">
      <h1>Hoardings Advertising in Chennai</h1>
      <p>Elevate your brand's presence with eye-catching hoardings strategically placed in Chennai’s busiest districts. Reach thousands of commuters, shoppers and motorists around the clock with large-format visuals that drive recall and amplify your messaging. From premium corridors like Anna Salai and OMR to thriving neighborhood hubs, our end-to-end service handles design, permits and maintenance—so you can focus on results.</p>
      <div class="cta-buttons">
        <a href="/ContactUs" class="btn primary-btn">Get a Quote</a>
        <a href="#hoarding-details" class="btn secondary-btn">Know More</a>
      </div>
    </div>
    <div class="col-md-6 fade-in-right">
      <img src="assets/images/hoarding.png" alt="Hoardings in Chennai" class="img-fluid">
    </div>
  </div>
  <img src="assets/images/wave1.png" class="wave"> 
</section>

<section id="what-is-hoarding" class="service-bg">
  <div class="container benefits-wrapper">
    <h2>
      What Is Hoarding Advertising?
    </h2>

    <h3>
      Definition & Overview
    </h3>
    <p>
      Hoarding advertising—also known as billboard advertising—is a form of outdoor media that uses large printed or digital displays mounted on structures at high-traffic locations. In Chennai, these hoardings are positioned along major roads, junctions, and commercial hubs to ensure your message is seen by thousands of commuters, pedestrians, and motorists every day.
    </p>

    <h3>
      Static vs. Digital Hoardings
    </h3>
    <p>
      <strong>Static Hoardings</strong> are traditional printed vinyl or flex boards, ideal for long-term campaigns with high-resolution graphics.<br>
      <strong>Digital Hoardings</strong> use LED screens to rotate multiple creatives, supporting video, animation, and real-time updates for dynamic storytelling.
    </p>

    <h3>
      Key Features
    </h3>
    <ul style="margin-left:20px; line-height:1.6;">
      <li><strong>Massive Format:</strong> Sizes range from 10x20 ft to 20x60 ft+, ensuring high impact.</li>
      <li><strong>Premium Placements:</strong> Located at busy junctions, highways, shopping districts, and transit points.</li>
      <li><strong>Round-the-Clock Exposure:</strong> Static hoardings display 24/7; digital hoardings can be scheduled by time of day.</li>
      <li><strong>High Recall:</strong> Large visuals and repeated daily impressions drive brand memory.</li>
    </ul>

    <h3 style="font-size:24px; font-family:Montserrat; margin-top:20px; font-weight:500;">
      Why It Matters for Your Brand
    </h3>
    <p>
      Outdoor hoardings cut through digital clutter—delivering your message in the public eye with zero ad-blocking. They’re perfect for product launches, event promotions, brand re-launches, and ongoing awareness campaigns, giving you both breadth and frequency in one package.
    </p>

    <p class="cta" style="text-align:center; font-size:18px; margin-top:30px;">
      Ready to harness the power of hoarding advertising? <a href="/ContactUs" class="btn primary-btn">Get in Touch</a> and let’s craft your next big outdoor campaign!
    </p>
  </div>
</section>


 <!-- ============================================================================================================================================= -->
<section id="benefits">
  <div class="benefits-wrapper">
    <h2>Benefits of Hoarding Advertising in Chennai</h2>
    <div class="benefit-cards">

      <div class="benefit-card">
        <i class="fas fa-eye"></i>
        <h3>Maximum Visibility</h3>
        <p>Large-format hoardings in key corridors guarantee your brand is seen by thousands of commuters every day.</p>
      </div>

      <div class="benefit-card">
        <i class="fas fa-map-marker-alt"></i>
        <h3>Prime Locations</h3>
        <p>Strategically placed at hotspots like Anna Salai, T Nagar, and OMR to capture high footfall and vehicular traffic.</p>
      </div>

      <div class="benefit-card">
        <i class="fas fa-clock"></i>
        <h3>24/7 Exposure</h3>
        <p>Round-the-clock presence—your message works day and night, building stronger brand recall over the campaign period.</p>
      </div>

      <div class="benefit-card">
        <i class="fas fa-dollar-sign"></i>
        <h3>Cost-Effective Reach</h3>
        <p>Competitive rates and flexible booking periods make hoarding advertising a high-impact, budget-friendly choice.</p>
      </div>

    </div>
  </div>
</section>

<!-- Why Choose Baleen Media Section -->
<!-- Types of Hoardings Section (Content List) -->
<section id="types-of-hoardings" class="service-about-bg">
  <div class="container">
    <h2 style="font-size:32px; font-family:Montserrat; font-weight:600; text-align:center; margin-bottom:20px;">
      Types of Hoardings
    </h2>
    <ul style="font-size:16px; line-height:1.8; margin-left:20px;">
      <li>
        <strong>Static Hoardings:</strong> Traditional vinyl or flex-print boards, ideal for long-term branding campaigns requiring bold, high-resolution graphics that remain visible day and night.
      </li>
      <li>
        <strong>Digital Hoardings:</strong> LED/LCD screens capable of rotating multiple creatives, playing video or animation, and updating messages in real time to keep your audience engaged.
      </li>
      <li>
        <strong>Mobile Hoardings:</strong> Mounted on trucks or buses, these hoardings traverse neighbourhoods and hotspots across Chennai, delivering hyperlocal impact wherever they go.
      </li>
      <li>
        <strong>Wallscapes:</strong> Giant murals wrapped around building façades, offering landmark exposure and a canvas large enough for truly immersive brand storytelling.
      </li>
      <li>
        <strong>Illuminated Hoardings:</strong> Backlit or front-lit displays that ensure your message cuts through the night or the monsoon gloom, maintaining 24/7 visibility.
      </li>
    </ul>
  </div>
</section>

<!-- Why Choose Hoardings with Baleen Media Section (Paragraphs) -->
<section id="why-baleen-media" class="service-bg">
  <div class="container">
    <h2 style="font-size:32px; font-family:Montserrat; font-weight:600; text-align:center; margin-bottom:20px;">
      Why Choose Hoardings with Baleen Media?
    </h2>
    <p style="font-size:16px; line-height:1.8; margin-bottom:15px;">
      <strong>Extensive Network:</strong> We offer access to the widest portfolio of premium hoarding spaces across Chennai—from key arterial roads like Anna Salai and Mount Road to emerging suburban hubs.
    </p>
    <p style="font-size:16px; line-height:1.8; margin-bottom:15px;">
      <strong>Creative Excellence:</strong> Our in-house design team crafts bespoke visuals and motion-graphic content that cut through the clutter and captivate your target audience.
    </p>
    <p style="font-size:16px; line-height:1.8; margin-bottom:15px;">
      <strong>End-to-End Management:</strong> From site surveys and permit procurement to installation, lighting, and ongoing maintenance—our turnkey service makes outdoor advertising effortless.
    </p>
    <p style="font-size:16px; line-height:1.8; margin-bottom:15px;">
      <strong>Data-Driven Strategy:</strong> We leverage traffic analytics, demographic insights, and location performance data to recommend placements that maximize footfall exposure and dwell time.
    </p>
    <p style="font-size:16px; line-height:1.8; margin-bottom:15px;">
      <strong>Measurable ROI:</strong> With flexible packages, transparent reporting, and performance tracking, you’ll always know exactly how your hoarding investment translates into brand recall and business results.
    </p>
  </div>
</section>

<section class="faq-bg">
  <div class="container">
    <h2>
      Frequently Asked Questions About Hoarding Advertising in Chennai
    </h2>
    <br>
    <div class="faq-container">

      <!-- FAQ 1 -->
      <div class="faqbtn-div">
        <button class="faqbtn" type="button" data-toggle="collapse" data-target="#faq1" aria-expanded="false">
          What is hoarding advertising and how can it boost my brand in Chennai?
        </button>
      </div>
      <div class="faqcard-div">
        <div class="collapse" id="faq1">
          <div class="faq-card">
            <p>Hoarding advertising involves placing large static or digital billboards at high-traffic locations across Chennai. It’s effective because:</p>
            <ul>
              <li><strong>Massive Reach:</strong> Captures thousands of daily commuters, pedestrians, and motorists.</li>
              <li><strong>24/7 Exposure:</strong> Your message remains live around the clock, day and night.</li>
              <li><strong>High Impact:</strong> Oversized visuals command attention and drive recall.</li>
              <li><strong>Local Targeting:</strong> Focus on key corridors like Anna Salai, T Nagar, OMR, and more.</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- FAQ 2 -->
      <div class="faqbtn-div">
        <button class="faqbtn" type="button" data-toggle="collapse" data-target="#faq2" aria-expanded="false">
          How much does hoarding advertising cost in Chennai?
        </button>
      </div>
      <div class="faqcard-div">
        <div class="collapse" id="faq2">
          <div class="faq-card">
            <p>Costs vary based on location, size, and duration. Typical ranges include:</p>
            <ul>
              <li><strong>Standard Static Hoardings:</strong> ₹15,000 – ₹40,000 per month.</li>
              <li><strong>Large Wallscapes:</strong> ₹50,000 – ₹1,00,000+ per month.</li>
              <li><strong>Digital Hoardings (LED):</strong> ₹60,000 – ₹1,50,000 per month.</li>
            </ul>
            <p>Contact <strong>Baleen Media</strong> for a tailored quote based on your exact requirements and campaign goals.</p>
          </div>
        </div>
      </div>

      <!-- FAQ 3 -->
      <div class="faqbtn-div">
        <button class="faqbtn" type="button" data-toggle="collapse" data-target="#faq3" aria-expanded="false">
          What types of hoardings are available?
        </button>
      </div>
      <div class="faqcard-div">
        <div class="collapse" id="faq3">
          <div class="faq-card">
            <p>We offer a variety of formats to suit every campaign:</p>
            <ul>
              <li><strong>Static Vinyl Hoardings:</strong> Long-term, high-resolution prints.</li>
              <li><strong>Digital LED Hoardings:</strong> Dynamic content, video, and real-time updates.</li>
              <li><strong>Wallscapes:</strong> Massive façade wraps on buildings.</li>
              <li><strong>Illuminated Hoardings:</strong> Backlit displays for night-time visibility.</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- FAQ 4 -->
      <div class="faqbtn-div">
        <button class="faqbtn" type="button" data-toggle="collapse" data-target="#faq4" aria-expanded="false">
          How long should I book a hoarding to see results?
        </button>
      </div>
      <div class="faqcard-div">
        <div class="collapse" id="faq4">
          <div class="faq-card">
            <p>An optimal campaign runs for at least 3 months to build strong recall. However:</p>
            <ul>
              <li><strong>1–2 months:</strong> Suitable for short promotions or event announcements.</li>
              <li><strong>3–6 months:</strong> Ideal for sustained brand awareness.</li>
              <li><strong>6+ months:</strong> Best value per month and highest long-term recall.</li>
            </ul>
            <p>Longer durations also unlock package discounts and premium location access.</p>
          </div>
        </div>
      </div>

      <!-- FAQ 5 -->
      <div class="faqbtn-div">
        <button class="faqbtn" type="button" data-toggle="collapse" data-target="#faq5" aria-expanded="false">
          Do hoarding campaigns require government approval?
        </button>
      </div>
      <div class="faqcard-div">
        <div class="collapse" id="faq5">
          <div class="faq-card">
            <p>Yes. All hoarding installations in Chennai must comply with municipal regulations. We handle:</p>
            <ul>
              <li>Obtaining permits from Chennai Corporation and relevant authorities.</li>
              <li>Ensuring structural and safety compliance.</li>
              <li>Managing renewals and audits so your campaign runs smoothly.</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- FAQ 6 -->
      <div class="faqbtn-div">
        <button class="faqbtn" type="button" data-toggle="collapse" data-target="#faq6" aria-expanded="false">
          Why choose Baleen Media for my hoarding campaign?
        </button>
      </div>
      <div class="faqcard-div">
        <div class="collapse" id="faq6">
          <div class="faq-card">
            <p>Baleen Media stands out because of:</p>
            <ul>
              <li><strong>Deep Local Expertise:</strong> Over 100 successful Chennai hoarding campaigns.</li>
              <li><strong>Comprehensive Services:</strong> From site scouting and creative design to installation and maintenance.</li>
              <li><strong>Transparent Pricing:</strong> No hidden fees—clear, competitive packages.</li>
              <li><strong>Proven ROI:</strong> Data-backed placement strategies ensuring measurable brand lift.</li>
            </ul>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>


 <!-- =========================================================================================================================================== -->
    <section class="service-about-bg" style="background: linear-gradient(#FAF8FE, #f8f9fa); flex-direction: column;">
        <h2 style=" text-align: center; font-size: 24px; margin-left: 10px;">Check some of our famous brandings</h2>
        <div class="service-about-bg" style="background: none;">
            <div class="row">
                <!-- card1 -->
                <div class="col-md-4">
                    <div class="smp">
                        <img src="assets/images/digital_marketing_hero.jpg" loading="lazy" alt="Digital Marketing" class="img-fluid bg-img-services">
                        <a href="digital-marketing-agency-chennai.php" class="services-text">Digital Marketing</a>
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
                        <img src="assets/images/service cards/generaldis.jpeg" loading="lazy" alt="Newspaper Advertising" class="img-fluid">
                        <a href="newspaper-advertisement-agency-in-chennai.php" class="services-text">Newspaper Advertising</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!--<section class="container pb-5 sl">
<h2 style="font-size: 40px; font-family:Montserrat;  padding:30px 0px;">Service locations </h2> 
<div class="dropdown">
  <button class="dropbtn">Chennai</button>
  <div class="dropdown-content">
    <a href="#">T-nagar</a>
    <a href="#">Adyar</a>
    <a href="#">Chrompet</a>
  </div>
</div>
</section>-->

<div class="empty-space" style="height:100px; background-image: linear-gradient(white, #f8f9fa);"></div>

<?php
include('include/footer.php');
?>