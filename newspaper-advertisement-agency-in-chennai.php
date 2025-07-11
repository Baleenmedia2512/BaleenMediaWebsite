<?php
include('include/top_newspaper.php');
?>
<link rel="stylesheet" href="assets/css/style.css"> <!-- Link to a separate CSS file -->

<style>
    /* =================================================================================banner css rgba(241, 234, 254, 0.7), rgba(224, 206, 253, 0.7)*/ 
    .service-banner{
        background: linear-gradient(-45deg, #AA60C8 , #D69ADE, #EABDE6, #FFDFEF, #D17D98);
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
  padding: 10px 0px;
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
  font-size: 18px;
  margin: 20px 0px;
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
    .bg-img-services {
        max-height: 250px;
    }
</style>
<!-- Service Banner -->
<section class="service-banner">
  <div class="container">
    <div class="row1">
      <div class="col-md-6">
        <h1>Your Ad in Every Home</h1>
        <p>Reach your audience through the trusted pages of top newspapers and magazines—where attention is focused, credibility is high, and your message stands out. Whether you're promoting an event, product, or public announcement, print media ensures it lands directly in the hands of engaged readers.</p>
        <div class="cta-buttons">
            <a href="/ContactUs" class="btn primary-btn">Get a Quote</a>
            <a href="#newspaper-advertising-details" class="btn secondary-btn">Know More</a>
        </div>
      </div>
      <div class="col-md-6">
        <img src="assets/images/service cards/newspaper reader.png" alt="Chennai newspaper reader" class="img-fluid" loading="lazy">
      </div>
    </div>
  </div>
  <img src="assets/images/wave1.png" class="wave" alt="Wave design" loading="lazy">
</section>

<section class="service-bg" id="newspaper-advertising-details">
  <div class="container">
    <h2>Why Choose Newspaper Advertising in Chennai?</h2>
    <p> Newspaper advertising continues to be one of the most effective and credible ways to reach a local audience in Chennai. With a loyal and diverse readership across various age groups and demographics, newspapers offer an unmatched platform for businesses looking to make a strong, trusted impression. Whether you’re targeting professionals through English dailies like The Hindu or engaging a broader Tamil-speaking audience through Dinamalar or Dinathanthi, print media ensures your message is seen, remembered, and acted upon. From classified line ads to full-page displays, newspaper ads provide high visibility, focused reach, and excellent return on investment—making it a smart choice for both individuals and brands. </p>
    
    <h2>Our Newspaper Ad Services</h2>
    <p>We help you book ads across Tamil and English newspapers such as The Hindu, Dinamalar, Dinathanthi, Times of India, and more. Our team ensures your ad copy is well-crafted and submitted to publishers on time.</p>
    </div>
    </section>
    <!-- ======================================================service cards -->
    <section class="service-about-bg">
  <div class="benefits-wrapper">
    <h3 style="border-bottom: none; text-align: left;">Types of Newspaper Ads We Offer</h3>
    <div class="benefit-cards">

      <div class="benefit-card">
        <img src="assets/images/service cards/generaldis.jpeg" loading="lazy" alt="General Display Ad" class="img-fluid bg-img-services">
        <h3>General Display Ad</h3>
        <p>Color image-based ad printed at your preferred size in square centimeters.</p>
      </div>

      <div class="benefit-card">
        <img src="assets/images/service cards/singlecol.jpeg" loading="lazy" alt="Single Column Ad" class="img-fluid bg-img-services">
        <h3>Single Column Ad</h3>
        <p>Color image ad placed in the classified section using a single column layout.</p>
      </div>

      <div class="benefit-card">
        <img src="assets/images/service cards/doublecol.jpeg" loading="lazy" alt="Double Column Ad" class="img-fluid bg-img-services">
        <h3>Double Column Ad</h3>
        <p>Color ad in classified section using two columns for better visual impact.</p>
      </div>

      <div class="benefit-card">
        <img src="assets/images/service cards/line ads.jpeg" loading="lazy" alt="Line Ad" class="img-fluid bg-img-services">
        <h3>Line Ad</h3>
        <p>Simple text ad priced by line count, suitable for classifieds and personal notices.</p>
      </div>

      <div class="benefit-card">
        <img src="assets/images/service cards/classified.jpeg" loading="lazy" alt="Classified Display Ad" class="img-fluid bg-img-services">
        <h3>Classified Display Ad</h3>
        <p>Image ad placed in the classified section, customizable to your preferred size.</p>
      </div>

      <div class="benefit-card">
        <img src="assets/images/service cards/classifiedline ads.jpeg" loading="lazy" alt="Classified Line Ad" class="img-fluid bg-img-services">
        <h3>Classified Line Ad</h3>
        <p>Text-only ad placed in the classified column, charged by the number of lines.</p>
      </div>

      <div class="benefit-card">
        <img src="assets/images/service cards/elivationads.jpeg" loading="lazy" alt="Elevation with Content Ad" class="img-fluid bg-img-services">
        <h3>Elevation with Content Ad</h3>
        <p>Creative color ad for single column classified sections, with branded visuals and content.</p>
      </div>

      <div class="benefit-card">
        <img src="assets/images/service cards/fullpage.jpeg" loading="lazy" alt="Full Page Ad" class="img-fluid bg-img-services">
        <h3>Full Page Ad</h3>
        <p>Premium display ad that occupies an entire page—ideal for brand and product campaigns.</p>
      </div>

    </div>
  </div>
  </section>
 <section id="how-it-works" class="service-about-bg" style="padding: 60px 0;">
  <div class="container" style="display: flex; flex-wrap: wrap; align-items: center;">
    <div class="col-md-6">
      <img src="assets/images/newspaper-service.png" alt="Newspaper Advertising Process" class="img-fluid" loading="lazy" style="max-width: 100%; border-radius: 8px;">
    </div>
    <div class="col-md-6" style="padding: 20px;">
      <h2>How It Works</h2>
      <ol style="line-height: 1.8;">
        <li><strong>Select your newspaper & city:</strong> Choose from a wide range of top newspapers and specific city editions based on your audience.</li>
        <li><strong>Send us your content:</strong> Share your ad text or design along with preferred publication dates and any specifications.</li>
        <li><strong>Get a preview:</strong> We’ll share a layout proof for your review. You can request edits before final approval.</li>
        <li><strong>We publish and deliver proof:</strong> Once approved, your ad goes live on the scheduled date and we provide a copy of the published page.</li>
      </ol>
    </div>
  </div>
</section>
    
<section id="why-us" style="padding: 40px 0;" class="service-about-bg">
  <div class="container">
    <h2>Benefits of Working With Us</h2>
    <ul style="line-height: 1.8;">
      <li><strong>Affordable ad rates across major newspapers:</strong> Get competitive pricing with access to leading English and regional newspapers.</li>
      <li><strong>Fast and hassle-free ad booking process:</strong> We simplify your experience from start to finish with dedicated support.</li>
      <li><strong>Dedicated consultants with years of media planning experience:</strong> Our team helps you craft the right message for the right audience at the right time.</li>
      <li><strong>Support for English, Tamil, and other regional language publications:</strong> We help you connect with your audience in the language they prefer, increasing impact and relevance.</li>
      <li><strong>Customized ad formats for branding, recruitment, tenders, and more:</strong> Whether you need a bold full-page display or a precise classified line ad, we tailor it to your campaign goals.</li>
      <li><strong>Transparent service and timely delivery:</strong> You’ll always know what to expect, when to expect it, and receive proof of publication once it’s done.</li>
    </ul>
  </div>
</section>

<section class="faq-bg">
  <div class="container">
    <h2>Frequently Asked Questions About Newspaper Advertising in Chennai</h2>
    <br>
    <div class="faq-container">

      <div class="faqbtn-div">
        <button class="faqbtn" type="button" data-toggle="collapse" data-target="#faq1" aria-expanded="false">
          Which newspapers can I advertise in?
        </button>
      </div>
      <div class="faqcard-div">
        <div class="collapse" id="faq1">
          <div class="faq-card">
            <p>You can choose from leading dailies including The Hindu, Times of India, Dinamalar, Dinathanthi, Deccan Chronicle, and more based on your target location and audience.</p>
          </div>
        </div>
      </div>

      <div class="faqbtn-div">
        <button class="faqbtn" type="button" data-toggle="collapse" data-target="#faq2" aria-expanded="false">
          What type of ads can I publish?
        </button>
      </div>
      <div class="faqcard-div">
        <div class="collapse" id="faq2">
          <div class="faq-card">
            <p>We support all ad types including classified text ads, display ads, display classifieds, and public notice ads. Each format can be tailored to your needs in terms of size and layout.</p>
          </div>
        </div>
      </div>

      <div class="faqbtn-div">
        <button class="faqbtn" type="button" data-toggle="collapse" data-target="#faq3" aria-expanded="false">
          How much does a newspaper ad cost in Chennai?
        </button>
      </div>
      <div class="faqcard-div">
        <div class="collapse" id="faq3">
          <div class="faq-card">
            <p>Ad costs vary depending on the newspaper, size, section, and day of the week. We offer customized packages and special discounts to give you the best value.</p>
          </div>
        </div>
      </div>

      <div class="faqbtn-div">
        <button class="faqbtn" type="button" data-toggle="collapse" data-target="#faq4" aria-expanded="false">
          How early should I book my ad?
        </button>
      </div>
      <div class="faqcard-div">
        <div class="collapse" id="faq4">
          <div class="faq-card">
            <p>We recommend booking your ad at least 2–3 days in advance, especially for high-demand dates like weekends and festival days, to ensure availability and proper placement.</p>
          </div>
        </div>
      </div>

      <div class="faqbtn-div">
        <button class="faqbtn" type="button" data-toggle="collapse" data-target="#faq5" aria-expanded="false">
          Can I advertise in regional language newspapers?
        </button>
      </div>
      <div class="faqcard-div">
        <div class="collapse" id="faq5">
          <div class="faq-card">
            <p>Absolutely. We help place ads in all major Tamil newspapers such as Dinamalar, Dinathanthi, and Maalai Malar, as well as English dailies for broader reach.</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<section class="service-about-bg" style="background: linear-gradient(#FAF8FE, #f8f9fa); flex-direction: column;">
    <h2 style=" text-align: center; font-size: 24px; margin-left: 10px;">Explore Our Other Services</h2>
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
                    <img src="assets/images/portfolio/work/work18.jpg" loading="lazy" alt="Bus Advertising" class="img-fluid bg-img-services">
                    <a href="bus-advertising-in-chennai.php" class="services-text">Bus Advertising</a>
                </div>
            </div>
        </div>
</section>

<!-- Empty Space for Separation -->
<div class="empty-space" style="height:150px; background-image: linear-gradient(white,#ccc9e3);"></div>

<!--=========================================================================================== We work with -->
<section class="We-work-with-bg">
	<!-- section title starts -->
    <h2 style="font-size: 40px; font-family:Montserrat;  padding:30px 0px;">We work with</h2> 
    <!-- /.section title --> 
	
	<section class="section-padding" style="padding: 20px; ">
		<div class="container">		  
		   <section class="customer-logos slider">
			  <div class="slide"><img src="assets/images/vendor/newspaper/1.jpg"></div>
			  <div class="slide"><img src="assets/images/vendor/newspaper/2.jpg"></div>
			  <div class="slide"><img src="assets/images/vendor/newspaper/3.jpg"></div>
			  <div class="slide"><img src="assets/images/vendor/newspaper/4.jpg"></div>
			  <div class="slide"><img src="assets/images/vendor/newspaper/5.jpg"></div>
			  <div class="slide"><img src="assets/images/vendor/newspaper/6.jpg"></div>
			  <div class="slide"><img src="assets/images/vendor/newspaper/7.jpg"></div>
			  <div class="slide"><img src="assets/images/vendor/newspaper/8.jpg"></div>
			  <div class="slide"><img src="assets/images/vendor/newspaper/9.jpg"></div>
			  <div class="slide"><img src="assets/images/vendor/newspaper/10.jpg"></div>
			  <div class="slide"><img src="assets/images/vendor/newspaper/11.jpg"></div>
			  <div class="slide"><img src="assets/images/vendor/newspaper/12.jpg"></div>
			  <div class="slide"><img src="assets/images/vendor/newspaper/13.jpg"></div>
			  <div class="slide"><img src="assets/images/vendor/newspaper/14.jpg"></div>
			  <div class="slide"><img src="assets/images/vendor/newspaper/15.jpg"></div>
			  
		   </section>		
		</div>
    </section>
	
	<section class="section-padding" style="padding: 20px; ">
		<div class="container">		  
		   <section class="customer-logos slider">
			  <div class="slide"><img src="assets/images/vendor/magazine/1.jpg"></div>
			  <div class="slide"><img src="assets/images/vendor/magazine/2.jpg"></div>
			  <div class="slide"><img src="assets/images/vendor/magazine/3.jpg"></div>
			  <div class="slide"><img src="assets/images/vendor/magazine/4.jpg"></div>
			  <div class="slide"><img src="assets/images/vendor/magazine/5.jpg"></div>			  
		   </section>		
		</div>
    </section>
    <section class="service-bg" id="specific-newspaper-booking">
    <div class="container">
        <h2 style="text-align: center; margin-bottom: 30px;">Book Ads in Top Newspapers: Times of India & Daily Thanthi</h2>

        <div class="row" style="display: flex; flex-wrap: wrap; align-items: flex-start; margin-bottom: 40px;">
            <div class="col-md-6" style="padding-right: 20px;">
                <h3>Times of India Ad Booking Made Easy</h3>
                <p>Looking to book an ad in Times of India? Our platform simplifies the entire process. Whether you need to publish a matrimonial, property, recruitment, or public notice ad, we offer seamless **Times of India advertisement booking**. You can quickly find competitive **Times of India ad rates** for various categories and editions. Our intuitive interface allows you to complete your **Times of India ad booking online** from the comfort of your home or office. Don't waste time with complicated procedures; let us help you **post an ad in Times of India** efficiently and effectively.</p>
                <a href="/times-of-india-ad-rates" class="btn primary-btn" style="margin-top: 15px;">View Times of India Ad Rates & Book Online</a>
            </div>
            <div class="col-md-6">
                <img src="assets/images/times-of-india-newspaper.png" alt="Times of India Ad Booking Online" class="img-fluid" loading="lazy" style="max-width: 100%; border-radius: 8px;">
            </div>
        </div>

        <div class="row" style="display: flex; flex-wrap: wrap; align-items: flex-start; flex-direction: row-reverse;">
            <div class="col-md-6" style="padding-left: 20px;">
                <h3>Daily Thanthi Advertisement Booking for Tamil Audience</h3>
                <p>Reach the heart of the Tamil-speaking population with **Daily Thanthi advertisement booking**. We make it incredibly easy to **book an ad in Daily Thanthi**, offering transparent **Daily Thanthi ad rates** for classifieds and display advertisements. Our **Daily Thanthi online ad booking** system is designed for your convenience, ensuring your message is published accurately and on time. From personal announcements to large-scale marketing campaigns, we're your trusted partner to **post an ad in Daily Thanthi** and connect with millions of readers across Tamil Nadu, including Chennai.</p>
                <a href="/daily-thanthi-ad-rates" class="btn primary-btn" style="margin-top: 15px;">Check Daily Thanthi Ad Rates & Book Now</a>
            </div>
            <div class="col-md-6">
                <img src="assets/images/daily-thanthi-newspaper.png" alt="Daily Thanthi Online Ad Booking Chennai" class="img-fluid" loading="lazy" style="max-width: 100%; border-radius: 8px;">
            </div>
        </div>

        <p style="text-align: center; margin-top: 40px; font-size: 1.1em;">No matter your advertising needs, we simplify the process for both **Times of India ad booking online** and **Daily Thanthi online ad booking**, ensuring your ad reaches its intended audience effectively.</p>
    </div>
</section>
</section>

<?php
include('include/footer.php');
?>
