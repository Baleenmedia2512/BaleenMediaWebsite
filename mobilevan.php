<?php
include('include/top_mobile_van.php');
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

<!-- ========================== Banner Section ================================ -->
<section class="service-banner"> 
    <div class="row1 justify-content-between">
        <div class="col-md-6 fade-in-up">
            <h1>Mobile Van Advertising in Chennai - On-the-Go Branding by Baleen Media</h1>
            <p>
                Want to take your brand message to the streets? <strong>Mobile Van Advertising in Chennai</strong> is a dynamic and impactful way to reach audiences across every corner of the city. At Baleen Media, we specialize in high-impact <strong>Mobile Van Branding services</strong> that transform ordinary vehicles into attention-grabbing mobile billboards. Whether for product launches, brand promotions, or event announcements, we ensure your message never stays parked.
            </p>
            <div class="cta-buttons">
                <a href="/ContactUs" class="btn primary-btn">Get a Quote</a>
                <a href="#mobilevan-advertising-details" class="btn secondary-btn">Know More</a>
            </div>
        </div>
        <div class="col-md-6 fade-in-right">
            <img src="assets/images/mobilevan pic.webp" alt="Mobile Van Advertising in Chennai" class="img-fluid pb-5 pt-5">
        </div>
    </div>
    <img src="assets/images/wave1.png" class="wave"> 
</section>

<div class="empty-space" style="height:50px;background: white;"></div>

<section id="mobilevan-advertising-details" class="service-bg">
    <div class="benefits-wrapper">
        <h2>What is Mobile Van Advertising?</h2>
        <p>
            <strong>Mobile Van Advertising in Chennai</strong> is a high-visibility marketing strategy where branded vans travel through city streets, targeting high-footfall zones and neighborhoods. As a leading <strong>Mobile Van Advertising Agency in Chennai</strong>, Baleen Media provides customized van branding solutions that deliver your message directly to your audience. From LED screen vans to static vinyl-wrapped vehicles, our <strong>mobile van ads services</strong> ensure consistent brand presence on the move. 
        </p>
    </div>
</section>

<section id="benefits">
    <div class="benefits-wrapper">
        <h2>Benefits of Mobile Van Branding in Chennai</h2>
        <div class="benefit-cards">

            <div class="benefit-card">
                <i class="fas fa-eye"></i>
                <h3>High Reach</h3>
                <p>Mobile vans can access crowded marketplaces, business districts, and remote areas, ensuring your brand travels citywide.</p>
            </div>

            <div class="benefit-card">
                <i class="fas fa-wallet"></i>
                <h3>Cost-Effective</h3>
                <p>Compared to traditional media, mobile van ads deliver greater flexibility and ROI at lower cost.</p>
            </div>

            <div class="benefit-card">
                <i class="fas fa-route"></i>
                <h3>Targeted Promotion</h3>
                <p>Choose specific zones and timing for your campaign. Perfect for hyperlocal marketing in Chennai.</p>
            </div>

            <div class="benefit-card">
                <i class="fas fa-bolt"></i>
                <h3>Real-Time Engagement</h3>
                <p>Van campaigns can include LED displays, music, and promotional staff for on-ground activation.</p>
            </div>
        </div>
    </div>
</section>

<section class="service-about-bg">
    <div class="benefits-wrapper">
        <h2 class="head-text">Types of Mobile Van Advertising We Offer</h2>
        <div class="img-cards">
            <div class="card">
                <img src="assets/images/portfolio/work/work16.jpg" class="card-img-top img-fluid" alt="Static Van Branding">
                <div class="card-body text-center">
                    <h3 class="card-title">Static Van Branding</h3>
                    <p class="card-text">Vinyl-wrapped vans with bold creatives that move through key routes across Chennai.</p>
                </div>
            </div>
            <div class="card">
                <img src="assets/images/portfolio/work/work17.jpg" class="card-img-top img-fluid" alt="LED Van Campaigns">
                <div class="card-body text-center">
                    <h3 class="card-title">LED Van Campaigns</h3>
                    <p class="card-text">Mobile LED screens displaying ads and videos—perfect for evening and night-time promotions.</p>
                </div>
            </div>
            <div class="card">
                <img src="assets/images/portfolio/work/work7.jpg" class="card-img-top img-fluid" alt="Live Activation Vans">
                <div class="card-body text-center">
                    <h3 class="card-title">Live Activation Vans</h3>
                    <p class="card-text">Branded vans with promoters, audio announcements, and sampling activities for real-time engagement.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="why-choose" class="service-about-bg">
    <div class="col-md-6">
        <h2>Why Choose Baleen Media for Mobile Van Ads in Chennai?</h2>
        <p>As one of the <strong>best mobile van advertising agencies in Chennai</strong>, Baleen Media offers end-to-end campaign execution with a focus on creativity, visibility, and ROI. Our clients trust us because:</p>
        <ul>
            <li><strong>Route Planning Expertise:</strong> We strategically select high-footfall zones to maximize exposure.</li>
            <li><strong>Custom Campaigns:</strong> Every mobile van branding campaign is tailored to your audience and budget.</li>
            <li><strong>Creative Design:</strong> Our designs stand out and get noticed, even in Chennai’s busy streets.</li>
            <li><strong>Real-Time Reporting:</strong> Get updates, photos, and data throughout the campaign duration.</li>
        </ul>
    </div>
    <div>
        <img src="assets/images/mobilevan2.png" class="img-fluid pb-5 pt-5" alt="Why Choose Baleen Media for Mobile Van Advertising">
    </div>
</section>

<section id="content-strategy" class="service-about-bg">
    <div class="col-md-6">
        <img src="assets/images/bus-route.png" alt="Chennai Van Routes" class="img-fluid p-5"/>
    </div>
    <div>
        <h2>Mobile Van Campaign Strategy in Chennai</h2>

        <h3>Campaign Cost Factors</h3>
        <p>Pricing depends on the number of vans, route coverage, campaign duration, and add-ons like LED screens or promoter staff. We offer budget-friendly mobile van advertising packages tailored to small and large businesses alike.</p>

        <h3>High-Impact Routes</h3>
        <p>We cover high-traffic zones like T Nagar, Anna Salai, Velachery, Perambur, and commercial hubs to maximize visibility throughout Chennai.</p>

        <h3>Success Stories</h3>
        <p>From retail chains to political campaigns, our mobile van ads have helped brands see real ROI. Clients have reported increased footfall, event turnout, and brand recall after our campaigns.</p>

        <h3>Easy Booking Process</h3>
        <p>Ready to roll? <a href="/contact.php">Contact us</a> or call us at +91-9566031113 to plan your mobile van branding campaign in Chennai. Our team is ready to hit the road for your success.</p>
    </div>
</section>

<section class="faq-bg">
    <div class="container">
        <h2>FAQs – Mobile Van Advertising in Chennai</h2>
        <br>
        <div class="faq-container">

            <!-- FAQ 1 -->
            <div class="faqbtn-div">
                <button class="faqbtn" type="button" data-toggle="collapse" data-target="#faq1" aria-expanded="false">
                    What is mobile van advertising and how does it work in Chennai?
                </button>
            </div>
            <div class="faqcard-div">
                <div class="collapse" id="faq1">
                    <div class="faq-card">
                        <p>Mobile van advertising is a form of transit media where your brand message is displayed on a moving vehicle. In Chennai, these branded vans travel through high-traffic areas to ensure city-wide visibility and engagement.</p>
                    </div>
                </div>
            </div>

            <!-- FAQ 2 -->
            <div class="faqbtn-div">
                <button class="faqbtn" type="button" data-toggle="collapse" data-target="#faq2" aria-expanded="false">
                    How much does mobile van branding cost in Chennai?
                </button>
            </div>
            <div class="faqcard-div">
                <div class="collapse" id="faq2">
                    <div class="faq-card">
                        <p>The cost depends on the type of van (static or LED), campaign duration, and the areas you want to target. Baleen Media offers affordable packages customized to your marketing goals.</p>
                    </div>
                </div>
            </div>

            <!-- FAQ 3 -->
            <div class="faqbtn-div">
                <button class="faqbtn" type="button" data-toggle="collapse" data-target="#faq3" aria-expanded="false">
                    What types of businesses can benefit from mobile van ads?
                </button>
            </div>
            <div class="faqcard-div">
                <div class="collapse" id="faq3">
                    <div class="faq-card">
                        <p>Retail stores, real estate, political campaigns, events, educational institutions, FMCG brands, and healthcare providers have all seen success through mobile van advertising in Chennai.</p>
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
                        <img src="assets/images/portfolio/work/work18.jpg" loading="lazy" alt="Bus Advertising" class="img-fluid bg-img-services">
                        <a href="bus-advertising-in-chennai" class="services-text">Bus Advertising</a>
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

<div class="empty-space" style="height:100px; background-image: linear-gradient(#fffbf5, #f8f9fa);"></div>
<?php
include('include/footer.php');
?>
