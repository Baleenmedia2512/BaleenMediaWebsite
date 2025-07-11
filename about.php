<?php
include('include/top_about.php');
?>
<style>
    @media screen and (min-width:1204px) {
       body .about-section_about h1 {
        font-family: "poppins", sans-serif;
         
            text-align:left;
            font-size: 60px;
            font-weight:400;
            /* text-align:right; */
            border-bottom:2px solid black;
            /* text-wrap:wrap; */  
      }
      body .about-section_about p {
        font-weight:500;
        font-size: 18.5px;
            
        }
       body  .about-section_about span{
            font-family: "Gloria Hallelujah", cursive;
            font-weight: 700;
            font-style: italic;
            font-size:23px;
            text-wrap:nowrap;   
        }
        body .about-section_about .about-img{
            margin-top:70px;
            margin-left:50px;
        }
        body .vmt{
            margin-top:80px;
        }
              body .wwd-card-in ul li {
    margin-bottom: 10px;
    font-size: 25px;
}
body .vertical-line{
    height:170px;
    border:1px solid gray;
    margin:0px 20px; 
}
        
}
.about-section_about {
          /* background-attachment: fixed; */
          
         padding-top:50px;
          /* box-shadow: 0px 0px 5px #4d4c4c7a; */
          background-color:#F1EAFF;
      }
      .about-section_about h1 {
        font-family: "poppins", sans-serif;
            /* font-family: "Cormorant Upright", serif; */
            text-align:center;
            font-size: 50px;
            font-weight:500;
            /* text-align:right; */
            border-bottom:1px solid black;
            /* text-wrap:wrap; */
          
      }
      .about-section_about p {
        font-size:15.5px;
            font-weight:bold;
            margin-bottom:20px;
            font-family: "Nunito", sans-serif;
            text-align:justify;
            line-height:1.4;
            color:#3d3d3d;
              
        }
        .about-section_about span{
            font-family: "Gloria Hallelujah", cursive;
            font-weight: 700;
            font-style: italic;
            font-size: 18.5px;  
        }
        .about-section_about .about-img{
            margin-top:40px;
        }
      .wave{
            width: 100%;
        }
        .vmt{
            margin-top:50px;
        }
        
    .vmt-card{
        background-color:#a783ed;
        padding:20px;
        border-radius:20px;
      
    }
    .vmt-card h1{
        font-family:"poppins";
        font-weight:800;
        font-size:30px;
        margin:10px;
        text-align:center;
    }
    .vmt-card p{
        color:whitesmoke;
        font-size:16px;
    font-family:'Nunito';
    font-weight:bold;
    line-height:1.4;
    }
    /*---------------------------------------------------------------------------------- groups-------- */

/* --------------------------------------------------groups-new */
.groups{
    background-color:   #ccc9e3;
            padding:20px 0px;
}
.grp-card{
    background-color:white;
    padding:20px;
    text-align:center;
    border-radius:20px;
}
.grp-card h1{
    font-size:30px;
    margin-bottom:20px;
    border-bottom:1px solid;
    padding-bottom:10px;
}
.grp-card p{
    font-size:18px;
}
/* --------------------------------------------------leadercard */
.profile-card-content span{
    font-size:20px;
}
.profile-card-content h5{
    font-size:30px;
}
.profile-card-content a {
    font-size:20px;
    color:gray; 
}
.profile-card-content .list-inline li a:hover{
    color:black;
    font-size:22px;
}
.portfolio{
    background-color:#f8f9fa;
}  
  /*-----------------------------------------WWD--------------------------------------  */
/* Container for the section */
.wwd {
    background-color: #F0ECE3;
    padding: 50px 0;
}

/* Heading Style */
.wwd h2 {
    font-size: 50px;
    font-family: 'Montserrat', sans-serif;
    text-align: center;
    margin-bottom: 40px;
    color: #333;
}

/* Card Styling */
.wwd-card2 {
    background-color: #d8cadf;
    margin-right:5px;
    border-radius: 12px;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    transition: all 0.3s ease;
    border: 1px solid #e0e0e0;
    display: flex;
    justify-content: center;
    flex-direction: column;
    align-items: center;
    
}

.wwd-card2:hover {
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
    transform: translateY(-5px);
}

.wwd-card2 h2 {
    font-family: 'Poppins', sans-serif;
    font-size: 26px;
    font-weight:bold;
    padding: 20px;
    margin: 0;
    background-color: #d8cadf;
    color: #333;
    border-bottom: 1px solid #e0e0e0;
}

.wwd-card2 p {
    font-size: 16px;
    font-family: 'Nunito', sans-serif;
    color: #666;
    padding: 20px;
    margin: 0;
    line-height: 1.6;
}

.wwd-card-in {
    background-color: #d8cadf;
    padding: 10px;
    border-top: 1px solid #e0e0e0;
    

}

.wwd-card-in h4 {
    font-size: 18px;
    text-align: center;
    font-weight: bold;
    margin-bottom: 15px;
    color: #333;
}

.wwd-card-in ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.wwd-card-in ul li {
    margin-bottom: 10px;
    font-size: 13px;
    font-weight: 600;
}

.wwd-card-in ul li a {
    text-decoration: none;
    color:black;
    transition: color 0.3s;
}

.wwd-card-in ul li a:hover {
    /* color: #0056b3; */
}
.pan{
    display:flex;
}
.vertical-line{
    height:105px;
    border:1px solid gray;
    margin:0px 15px; 
}
</style>
    <!-- breadcrumb -->
    <section class="about-section_about">
        <div class="container">
            <div class="row">
                
                <div class="col-md-6 col-sm-12 ">
                    <h1>About Us</h1><br>
                    <p class="justify">Baleen Media is an advertising Company. We help our Clients to publish Ads in Newspapers, TV, Radio, Mobile/Canter Vans, Buses, Auto Rickshaws, No Parking Boards, lamp posts, Apartment Screens & Hoardings.</p>

                    <p class="justify"> Driven by the leaders with 20+ years of experience in the advertising industry. Baleen Media is known for creating bigger values and top-notch customer satisfaction through innovative ideas. Baleen Media customer base expands around 4000+ clients in last 9 years.  
By providing its customers high quality services, Baleen Media is one of the best Ad Agencies in Chennai. This made the company to have 4.7/5 Google Rating. Reaching the right audience, understanding customers’ needs and yielding high returns for every single penny paid.</p>
                        <!-- Baleen Media is driven by 16+ years of valuable experience in Advertising Industry where the Focus being Top-class Customer Satisfaction & creating bigger values to them through Innovative ideas. Baleen Media began its Show on Jan'15 with an objective to provide High-quality Service with a great passion of Living the words what with committed to its Customers. Its Team possesses highly skilled professionals with a great Attitude on understanding Customer Needs and providing the best consulting service to reach their right target-audience. Baleen Media most values its Client's each single Money and promises the best to yield great returns for it. -->

                   <span> Baleen Media renders its ATL Services across India Locations & BTL Services across Tamilnadu locations</span><br>
                </div><br>

                <div class="col-md-6 col-sm-12 ">
                    <img class="about-img" src="assets/images/teamwork-concept-landing-page.png" style="width:100%;"  alt="img" >
                    
                </div>
            </div>
        </div>
        <div class="empty-space" style="height:80px;"></div>
    <img src="assets/images/wave1.png" class="wave ">
    </section>

    <!-- --------------------------------------------------------------vmt -->
	
   <div class="vmt"> 
   <div class="container">
        <div class="row">
            <!-- -------------------------------card1 -->
            <div class="col-md-4 mb-4">
                <div class="vmt-card">
                    <h1>Vision</h1>
                    <img src="assets/images/vision.png" alt="" class="img-fluid">
                    <p>To Keep every Advertiser Happy and Satisfied through Dedication, Commitment and Quality.</p>
                </div>
            </div>
            <!-- --------------------------------card2 -->
            <div class="col-md-4 mb-4">
                <div class="vmt-card">
                    <h1>Mission</h1>
                    <img src="assets/images/mission.png" alt="" class="img-fluid mb-4">
                    <p>To Create "Trustworthy System" which reciprocates Customer Satisfaction, Publication Comfort & Employee Recognition.</p>
                </div>
            </div>
            <!-- ----------------------------card3 -->
            <div class="col-md-4 mb-4">
                <div class="vmt-card">
                    <h1>Team Baleen Media</h1>
                    <img src="assets/images/teambaleen.png" alt="" class="img-fluid mb-4">
                    <p>Each Project is well executed by our promising multi-functional team which comprises of Business Development, Client Servicing & Quality Assurance Group.</p>
                </div>
            </div>
            <!-- ---------xxxx------------- -->
        </div>
     </div>
	</div>

    <!-- vmt cards -->
    

    <div class="empty-space" style="height: 40px"></div>
<!-- -----------------------------------------------------------------------------------groups -->
 <!-- ------------------------------------------------------------------------------------------ -->
    
<!-- ----------------------------------------------------------------------------------- -->
<!---------------------------------------------------------------------------- groups-new -->


<!-- -----------------------------------------------------------WWD----------------------- -->
    
<section class="wwd">
<h2 style="font-size: 50px; font-family:Montserrat;"> Our Services </h2><br>
    <div class="container">
        <div class="row">
            <!-- --------------------------------1st -->
            <div class="col-md-12 mb-4">
           
             <div class="wwd-card2">

            <div class="wwd-card-in">
                <h4>Services</h4>   
            <div class="pan">
            <ul>
                <li><a href=""><i class="fa-solid fa-arrow-right" style="color: #ffffff;margin-right:5px; "></i> Newspapers & Magazines</a></li>
                <li><a href=""><i class="fa-solid fa-arrow-right" style="color: #ffffff;margin-right:5px; "></i> Radio Advertisement</a></li>
                <li><a href=""><i class="fa-solid fa-arrow-right" style="color: #ffffff;margin-right:5px; "></i> Telivision Advertisement</a></li>
                <li><a href=""><i class="fa-solid fa-arrow-right" style="color: #ffffff;margin-right:5px; "></i> Ad flims </a></li>
             </ul>
             <div class="vertical-line"></div> 
             <ul>
                <li><a href="" style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;";> Pan-India</a></li>
                <li><a href="" style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;";>Pan-India </a></li>
                <li><a href="" style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;";> Pan-India</a></li>
                <li><a href="" style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;";> Pan-India </a></li>
             </ul>
             </div>

             <ul>  
                <li><a href=""><i class="fa-solid fa-arrow-right" style="color: #ffffff;margin-right:5px; "></i> No parking boards</a></li>
                <li><a href=""><i class="fa-solid fa-arrow-right" style="color: #ffffff;margin-right:5px; "></i> Mobile van advertisement</a></li>
                <li><a href=""><i class="fa-solid fa-arrow-right" style="color: #ffffff;margin-right:5px; "></i> Pamplets</a></li>
                <li><a href=""><i class="fa-solid fa-arrow-right" style="color: #ffffff;margin-right:5px; "></i> Paper insertion</a></li>                  
                <li><a href=""><i class="fa-solid fa-arrow-right" style="color: #ffffff;margin-right:5px; "></i> Radio Advertisement</a></li>
                <li><a href=""><i class="fa-solid fa-arrow-right" style="color: #ffffff;margin-right:5px; "></i> Local channel Advertisement</a></li>
                <li><a href=""><i class="fa-solid fa-arrow-right" style="color: #ffffff;margin-right:5px; "></i> Bus back panel (Also bangalore)</a></li>
                <li><a href=""><i class="fa-solid fa-arrow-right" style="color: #ffffff;margin-right:5px; "></i> Full bus branding (Also bangalore)</a></li>
                <li><a href=""><i class="fa-solid fa-arrow-right" style="color: #ffffff;margin-right:5px; "></i> Lamp post boards</a></li>
                <li><a href=""><i class="fa-solid fa-arrow-right" style="color: #ffffff;margin-right:5px; "></i> Bus shelters</a></li>
                <li><a href=""><i class="fa-solid fa-arrow-right" style="color: #ffffff;margin-right:5px; "></i> Traffic awareness boards</a></li>
                <li><a href=""><i class="fa-solid fa-arrow-right" style="color: #ffffff;margin-right:5px; "></i> Apartment screen advertisement</a></li>
                <li><a href=""><i class="fa-solid fa-arrow-right" style="color: #ffffff;margin-right:5px; "></i> Auto Rickshaw full/back</a></li>
            </ul>
             </div>
            </div>
            </div>
           
            
            </div>
            <!--  -->
         </div>
   </div>
</section>
<!--------------------------------------------------------XXXX----------------------------  -->
	<!-- section title starts -->
    <section class="portfolio">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="">
                    <div class="title">
                    <h2 style="font-size: 50px; font-family:Montserrat;">Meet Our Leader </h2><br>
                    </div>                    
                </div>
                <!-- section_title starts -->
            </div>
        </div>
    </div>
     <div class="empty-space" style="height: 30px"></div>
    <div class="container">
        <div class="row">
			           <div class="col-md-4"></div>
            <div class="col-md-4 col-sm-4">
                <div class="profile-card">
                    <img class="img-fluid" src="assets/images/Leenah.jpg" alt="img">
                    <div class="profile-card-content">
                        <div class="text-center">
                            <span>Proprietrix</span>
                        </div>
                        <h5>Leenah Grace . L</h5>
                        <ul class="list-inline">
                            <li class="list-inline-item"><a href="https://www.facebook.com/baleenmediaa/?ref=br_rs" target="_blank"><i class="fa fa-lg fa-facebook"></i></a></li>
                            <li class="list-inline-item"><a href="https://www.instagram.com/baleenmediaofficial/" target="_blank"><i class="fa fa-lg fa-instagram"></i></a></li>
                            <li class="list-inline-item"><a href="https://wa.me/919566031113" target="_blank"><i class="fa fa-lg fa-whatsapp"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-lg-4">                
            </div>            
        </div>
    </div>
    </section>
    <!-- /.team -->
	<!-- .empty-soace -->
    <!-- /.empty-soace -->
    

<!-- section title starts -->
    
       
	

<?php
include('include/footer.php');
?>