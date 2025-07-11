<?php
include('include/top_bus.php');
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
        <div class="row1 justify-content-between">
            <div class="col-md-6 fade-in-up">
                <h1>Bus Advertising in Chennai - MTC Bus Branding by Baleen Media</h1>
                <p>
                    Looking to grow your brand through impactful outdoor media? <strong>Bus advertising in Chennai</strong> offers unmatched reach across the city’s busiest routes. At Baleen Media, we deliver high-visibility MTC bus branding—from back panel ads to full wraps—designed to keep your message moving 24/7. Partner with us to transform city buses into powerful mobile billboards.
                </p>
                <div class="cta-buttons">
                    <a href="/ContactUs" class="btn primary-btn">Get a Quote</a>
                    <a href="#bus-advertising-details" class="btn secondary-btn">Know More</a>
                </div>
            </div>
            <div class="col-md-6 fade-in-right">
                    <img src="assets/images/BusPNG4.webp" alt="Bus Advertising in Chennai" class="img-fluid pb-5 pt-5">
            </div>
        </div>
    <img src="assets/images/wave1.png" class="wave"> 
</section>

<div class="empty-space" style="height:50px;background: white;"></div> <!--background: linear-gradient(white,#ede3fd);-->

<section id="bus-advertising-details" class="service-bg ">
    <!--<div class="col-md-6 ">
        <img src="assets/images/What-is-bus-advertising.jpg" alt="What is Bus Advertising" class="img-fluid rounded">
    </div> -->
    <div class="benefits-wrapper">
        <h2>What is Bus Advertising?</h2>
        <p style="text-align: left;"><strong>Bus Advertising in Chennai</strong> is one of the most impactful and cost-effective outdoor advertising solutions, enabling brands to gain massive visibility across the city’s busiest streets and localities. As a trusted <strong>bus advertising agency in Chennai</strong>, Baleen Media offers expert <strong>MTC Bus Branding</strong> services that include full bus wraps, side panel ads, and <strong>government bus advertising</strong> approvals for maximum reach. With consistent exposure on high-traffic routes, <strong>bus branding</strong> helps your business connect with local audiences throughout the day. Whether you're a startup or a corporate, our <strong>affordable bus advertising in Chennai</strong> delivers measurable results that drive brand awareness and recall. Experience the power of <strong>Chennai city bus ads</strong> with Baleen Media’s tailored transit advertising strategies.</p>
    </div>
</section>

    <!-- Benefits Section -->
   <section id="benefits">
   <div class="benefits-wrapper">
  <h2>Benefits of Bus Advertising in Chennai</h2>
  <div class="benefit-cards">

    <div class="benefit-card">
      <i class="fas fa-eye"></i>
      <h3>High Visibility</h3>
      <p>Bus ads traverse high-traffic areas across Chennai, offering unmatched brand exposure and daily impressions.</p>
    </div>

    <div class="benefit-card">
      <i class="fas fa-wallet"></i>
      <h3>Cost-Effective</h3>
      <p>More affordable than traditional media, bus branding ensures ROI with long-lasting, recurring visibility.</p>
    </div>

    <div class="benefit-card">
      <i class="fas fa-map-marker-alt"></i>
      <h3>Targeted Reach</h3>
      <p>Advertise directly to local Chennai residents with route-specific MTC bus ads and hyperlocal messaging.</p>
    </div>

    <div class="benefit-card">
      <i class="fas fa-clock"></i>
      <h3>Continuous Exposure</h3>
      <p>Your ads stay visible 24/7 as buses operate from early morning to late night, keeping your brand top-of-mind.</p>
    </div>
    </div>
  </div>
</section>

<section class="service-about-bg" >
<div class="benefits-wrapper">
  <h2 class="head-text" >Types of Bus Ads We Offer</h2>
  <div class="img-cards">
    <!-- Card 1 -->
    <div class="card">
      <img src="assets/images/portfolio/work/work10.jpg" class="card-img-top img-fluid" alt="Bus Back Advertising">
      <div class="card-body text-center">
        <h3 class="card-title">Bus Back Advertising</h3>
        <p class="card-text">Maximize visibility with eye-catching ads on the back panel of city buses.</p>
      </div>
    </div>
    <!-- Card 2 -->
    <div class="card">
      <img src="assets/images/portfolio/work/work18.jpg" class="card-img-top img-fluid" alt="Full Bus Advertising">
      <div class="card-body text-center">
        <h3 class="card-title">Full Bus Advertising</h3>
        <p class="card-text">Turn the entire bus into a moving billboard for maximum brand impact.</p>
      </div>
    </div>
    <!-- Card 3 -->
    <div class="card">
      <img src="assets/images/portfolio/work/work19.jpg" class="card-img-top img-fluid" alt="Side Panel Advertising">
      <div class="card-body text-center">
        <h3 class="card-title">Side Panel Ads</h3>
        <p class="card-text">Engage audiences from every angle with creative side-panel ad formats.</p>
      </div>
    </div>
  </div>
  </div>
</section>

<section id="why-choose" class="service-about-bg">
    <div class="col-md-6">
      <h2>Why Choose Baleen Media for MTC Bus Ads?</h2>
      <p>Baleen Media is a trusted leader in bus advertising in Chennai, known for its creative approach and results-driven campaigns. Our expertise in MTC bus branding allows us to design ads that resonate with local commuters. By choosing us, you benefit from:</p>
      <ul>
        <li><strong>Expertise in Local Markets:</strong> Our deep understanding of Chennai's transit routes and commuter behavior ensures optimal ad placement.</li>
        <li><strong>Creative Campaigns:</strong> We combine innovative design with strategic planning to create memorable ads that boost your brand.</li>
        <li><strong>Competitive Pricing:</strong> With affordable packages starting at just ₹7,499, you get premium service without breaking the bank.</li>
        <li><strong>Proven Results:</strong> Our campaigns have successfully increased brand visibility and customer engagement for numerous local businesses.</li>
      </ul>
    </div>
    <div >
        <img src="assets/images/why-choose-canva.png" class="img-fluid pb-5 pt-5" alt="Why Choose Baleen Media for MTC Bus Ads?">
    </div>
</section>

<section id="content-strategy" class="service-about-bg">
    <div class="col-md-6">
      <img src="assets/images/bus-route.png" alt="Popular Routes for Ads" class="img-fluid p-5"/>
    </div>
    <div>
      <h2>Content Strategy for Bus Advertising in Chennai</h2>
      <h3>Cost Factors in Chennai</h3>
      <p>When planning a bus advertising campaign, factors such as bus routes, ad duration, and design complexity influence the cost. In Chennai, prices vary based on the area and frequency of the ad display. Baleen Media offers transparent pricing models to suit various budget ranges.</p>
      
      <h3>Popular Routes for Ads</h3>
      <p>Our campaigns target high-traffic routes such as Anna Nagar, T Nagar, Velachery, and Adyar. These areas provide maximum exposure due to their dense commuter traffic, ensuring that your brand is seen by thousands every day.</p>
      
      <h3>Case Studies & Testimonials</h3>
      <p>Many local businesses have benefited from our bus advertising solutions. For example, a well-known retail brand reported a significant increase in foot traffic and sales after launching a campaign on Chennai city buses. Testimonials from our satisfied clients highlight our commitment to quality and results.</p>
      
      <h3>How to Book Ads</h3>
      <p>Booking your bus advertising campaign with Baleen Media is simple. Visit our <a href="/contact.php">Contact Us</a> page or call us directly at +91-9566031113 to discuss your requirements. Our team will work with you to design a custom campaign that meets your marketing objectives.</p>
    </div>
</section>

<section class="faq-bg">
  <div class="container">
    <h2 >
      Frequently Asked Questions About Bus Advertising in Chennai
    </h2>
    <br>
    <div class="faq-container">

      <!-- FAQ 1 -->
      <div class="faqbtn-div">
        <button class="faqbtn" type="button" data-toggle="collapse" data-target="#faq1" aria-expanded="false">
          What is Bus Advertising and how does it benefit my brand in Chennai?
        </button>
      </div>
      <div class="faqcard-div">
        <div class="collapse" id="faq1">
          <div class="faq-card">
            <p>Bus advertising is a form of outdoor advertising where promotional graphics are displayed on MTC buses in Chennai. It's effective because:</p>
            <ul>
              <li><strong>Massive Reach:</strong> Targets thousands of daily commuters across major routes in Chennai.</li>
              <li><strong>High Visibility:</strong> Full bus wraps and back panels grab attention 24/7.</li>
              <li><strong>Cost-Effective:</strong> Affordable compared to TV or newspaper ads.</li>
              <li><strong>Local Branding:</strong> Builds recognition within specific Chennai neighborhoods.</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- FAQ 2 -->
      <div class="faqbtn-div">
        <button class="faqbtn" type="button" data-toggle="collapse" data-target="#faq2" aria-expanded="false">
          How much does bus advertising cost in Chennai?
        </button>
      </div>
      <div class="faqcard-div">
        <div class="collapse" id="faq2">
          <div class="faq-card">
            <p>The cost of bus advertising in Chennai depends on factors like ad type, duration, and number of buses:</p>
            <ul>
              <li><strong>Bus Back Panel:</strong> Starts from ₹7,499/month.</li>
              <li><strong>Side Panel Ads:</strong> Around ₹12,000-₹20,000/month.</li>
              <li><strong>Full Bus Wraps:</strong> Premium branding starting ₹27,000/month and above.</li>
            </ul>
            <p>Contact <strong>Baleen Media</strong> for customized pricing based on route coverage and branding goals.</p>
          </div>
        </div>
      </div>

      <!-- FAQ 3 -->
      <div class="faqbtn-div">
        <button class="faqbtn" type="button" data-toggle="collapse" data-target="#faq3" aria-expanded="false">
          What types of MTC bus ads are available in Chennai?
        </button>
      </div>
      <div class="faqcard-div">
        <div class="collapse" id="faq3">
          <div class="faq-card">
            <p>We offer a variety of MTC bus advertising formats to fit your brand strategy:</p>
            <ul>
              <li><strong>Bus Back Panel Ads:</strong> High-visibility spots ideal for brand recall.</li>
              <li><strong>Full Bus Wraps:</strong> Turn the entire bus into a mobile billboard.</li>
              <li><strong>Side Panel Ads:</strong> Cost-effective branding along both sides of the bus.</li>
              <li><strong>Interior Ads:</strong> Engage seated commuters inside the bus.</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- FAQ 4 -->
      <div class="faqbtn-div">
        <button class="faqbtn" type="button" data-toggle="collapse" data-target="#faq4" aria-expanded="false">
          How long should a bus ad campaign run for best results?
        </button>
      </div>
      <div class="faqcard-div">
        <div class="collapse" id="faq4">
          <div class="faq-card">
            <p>We recommend a minimum duration of 1 month for visibility and impact. However:</p>
            <ul>
              <li><strong>1–2 months:</strong> Good for product launches or short promotions.</li>
              <li><strong>3+ months:</strong> Better for long-term brand recall and local awareness.</li>
            </ul>
            <p>Longer campaigns benefit from discounted pricing and wider coverage across Chennai.</p>
          </div>
        </div>
      </div>

      <!-- FAQ 5 -->
      <div class="faqbtn-div">
        <button class="faqbtn" type="button" data-toggle="collapse" data-target="#faq5" aria-expanded="false">
          Is bus advertising in Chennai government-approved?
        </button>
      </div>
      <div class="faqcard-div">
        <div class="collapse" id="faq5">
          <div class="faq-card">
            <p>Yes. All MTC bus advertising through <strong>Baleen Media</strong> is government-approved and legally compliant.</p>
            <ul>
              <li>We obtain permissions from the Metropolitan Transport Corporation (MTC).</li>
              <li>Our team ensures designs and placements follow local ad guidelines.</li>
              <li>You get peace of mind with hassle-free, approved campaigns.</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- FAQ 6 -->
      <div class="faqbtn-div">
        <button class="faqbtn" type="button" data-toggle="collapse" data-target="#faq6" aria-expanded="false">
          What makes Baleen Media the best bus advertising agency in Chennai?
        </button>
      </div>
      <div class="faqcard-div">
        <div class="collapse" id="faq6">
          <div class="faq-card">
            <p>Baleen Media is a trusted name for <strong>bus branding in Chennai</strong> due to:</p>
            <ul>
              <li><strong>Extensive Experience:</strong> 85+ successful MTC campaigns since 2015.</li>
              <li><strong>Customized Packages:</strong> Ads tailored to routes, audience, and budgets.</li>
              <li><strong>Creative Designs:</strong> Eye-catching visuals to maximize commuter engagement.</li>
              <li><strong>Affordable Pricing:</strong> Transparent rates and bulk ad discounts.</li>
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

<div class="empty-space" style="height:100px; background: #f8f9fa;"></div> <!--background: linear-gradient(#fffbf5, #f8f9fa);-->

<?php
include('include/footer.php');
?>
