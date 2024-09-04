<?php
include('include/top.php');
?>
<style>
    /* .about-section_top .container {
        margin-right:0px;
        
    } */
    @media screen and (min-width:1304px){
        body{
            zoom:130%;
        } 
        body .about-section_top p {
            font-family: "Barlow", sans-serif;
            font-size: 25px;
            color:gray;
            padding-bottom:50px; 
        }
        body .gl-review {
            padding-bottom:100px;
        }

    }
    
       .about-section_top{
        
        background-color:#F1EAFF;
            /* background-image:url("assets/images/baleen-bg.jpg" );
            background-position: top;
            background-attachment: fixed;
            background-size:cover; */
            /* box-shadow: 0 0.5px 10px rgba(0, 0, 0, 0.15); */
            /* margin-bottom: 20px; */
            padding-top:50px;
            border:0px;
            /* zoom:150%; */
           
        }
        .about-content_top{
            display:flex;
            flex-direction:column;
            align-items:center;
            justify-content:center;

        }
        .wave{
            width: 100%;
        }
        .about-section_top h1 {
            font-family: "SUSE", sans-serif;
            /* font-family: "Cormorant Upright", serif; */
            font-size: 50px;
            font-weight:200;
            
            animation-name:bannerani;
            animation-duration: 3s;
            
            
        }
        .about-section_top h1 span{
            font-family: "Gloria Hallelujah", cursive;
                font-weight: 800;
                
            /* font-style: italic; */
            animation-name:spanclr;
            animation-duration: 4s;
        }
        .about-section_top p {
            font-family: "Barlow", sans-serif;
            font-size: 18px;
            text-align:left;
            color:gray;
            padding-bottom:50px; 
        }
        @keyframes spanclr {
  0%{color:white;}
  50%{color:gray;}
  100%{color:black;}
}
@keyframes bannerani {
  0%   {padding-top:500px;}
  100%{padding-top:0px;}
}
.gl-review {
padding-bottom:100px;
font-size:25px;
text-align:center;
}
.gl-review h4{
    font-size:25px;
}
.gl-review h6{
    font-size:18px;
}

       

/* -------------------------------------------------------- */
        .about-section_about {
          
           
            
            background-color:white;
        }
        .WhatWeDo{
            
            background-color:#F1EAFF;
        }
        
        

        .about-section_about h1 {
            font-family: "poppins";
           font-weight:bold;
            text-align:left;
            border-bottom:1px solid gray;
            margin-bottom:10px;
            padding-bottom:10px;
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
        .btn{
            margin-bottom:20px;
        }


    

        .about-section {
            padding-top:20px;
            
            background-image:url("");
            
            background-size:cover;
            background-position:bottom;
            box-shadow: 0 0.5px 10px rgba(0, 0, 0, 0.15);
         
        }
      
    
        .about-content {
           
            padding: 2rem;
            border-radius: .5rem;
            
           
        }
        .about-content h1 {
            font-size: 1.75rem;
            font-weight: bold;
            text-transform: uppercase;
            margin-bottom: 1rem;
        }
        .about-content p {
            font-size: 1.125rem; /* Increase font size */
            margin-bottom: 1.5rem;
            margin-top: 0.625rem;
           
        }
        .ConsultYou-btn a {
            font-size: 1.5rem;
            
            font-weight: 700;
            text-decoration: none;
        }
        .service-item {
            background-color:#f6efdd;
            /* background-image: linear-gradient( white,#fbe6b0); */
            border-radius: 0px;
            box-shadow:10px 12px 0px black;
            border:3px solid black;
            /* box-shadow:0px 0px 5px gray; */
            animation-name:example;
            animation-duration: 40s;
        }
        @keyframes example {
  0%   {border:solid black;}
  
  100% {border:solid gold;}
}

        .service-item-content a:hover{
            color:#06a806;
        }

        .service-item .service-icon a {
            background-color: #29556b;
            margin-bottom:10px;
            box-shadow:0px 0px 3px gray;
            
        } 
/* ---------------------------------------------------------------------------------------------testimonials  */
.testimonials { 
    background-color:whitesmoke;
    padding:20px 0px;
    text-align:center;
}
.testimonials img{
    width: 150px;
  
}
.testimonials h4 {
    font-size:25px;
    font-family: "Montserrat";
    font-weight:600;
}
.testimonials p{
    font-size:12px;
    font-family:'Nunito'
}
.card {
   
    border-radius:1px 20px 20px 20px;
    
    margin:5px 0px;
    background-color:white;

}
.card-body{
    display:flex;
    flex-direction:column;
    justify-content:center;
    align-items:center;
}
/* @media screen and (min-width:576px) {
    .carousel-inner{
        display:flex;
    
    justify-content:center;
    align-items:center;
    }
    .carousel-item{
        display:grid;
       
    }
    .card{
        margin:10px;
      
    }
} */

/* -- --------------------------------------------------------------------------new card book -- */
 /* From Uiverse.io by eslam-hany */ 
.book {
  position: relative;
  border-radius: 10px;
  /* width: 220px;
  height: 300px; */
  
  height: 300px;
  background-color: white;
  background-image: linear-gradient(  whitesmoke, #f6efdd);
  /* 
  box-shadow: 1px 1px 12px #000; */
 
  transform: preserve-3d;
  
  perspective: 2000px;
 
  display: flex;
  flex-direction:column;
  align-items: center;
 
  justify-content: center;
  
}
.book .Whatsapp:hover {
    color:#06a806;
    text-decoration: underline
}
.book a{
    color:black;
}

.cover {
  top: 0;
  position: absolute;
  background-color: white;
  width:100%;
  height: 300px;
  border-radius: 10px;
  
  cursor: pointer;
  
  transition: all 0.5s;
 
  transform-origin:-10px;
  
  /* box-shadow: 0px 0px 12px #000; */
 
  display: flex;
  
  align-items: center;
 
  justify-content: center;
  flex-direction:column;
}
.cover img{
    width:250px;
    height: 300px;
    
}

.book:hover .cover {

  transition: all 0.5s;
  
  transform: rotatey(-90deg);
}

.book p {
    padding: 20px;
    padding-bottom:10px;
    font-family:'Nunito';
  font-size: 18px;
  font-weight: 400;
  color:black;
}
.cover h4 {
    font-family: "Montserrat", sans-serif;
    font-size:20px;
    font-weight:500;
    padding:20px ;
}
/* .book a:hover{
color:blue;
} */
.readbtn{
    width: 150px;
    padding:10px;
    border-radius:10px;
    border:inherit;
    background-color:white;
    font-family: "Montserrat", sans-serif;
    font-size:20px;
    font-weight:400;
    margin-bottom:20px;
}
.readbtn:hover {
    box-shadow:0px 0px 8px  #c5c5c594;
    color:purple;
    animation-name:textclr;
    animation-duration: 1s;
}
@keyframes textclr {
  0%   {color: black;}
  
  50% {color: violet;}
  100%{color: purple;}
}
/* ----------------------------------------------------------------------testi */
.testi{
    background-color:#F7EFE5;
    padding-bottom:35px;
    
}
.testicard {
   background-color:white;
   padding:20px;
   margin: 10px 0px;
   box-shadow: 0 20px 30px -30px rgba(5, 5, 5, 0.24);

}
.testitop{
    display:flex;
    align-items:center;
    margin-bottom:20px;
    
}
.avatar{
   background-color:#F1EAFF;
   padding:15px;
   border-radius:50%;
   box-shadow: 0 20px 30px -20px rgba(5, 5, 5, 0.24);
}
.testibody{
    display:flex;
    flex-direction:column;
    justify-content:center;
    align-items:center; 
}
.testibody p {
    font-size:16px;
    font-family:'Nunito';
    font-weight:normal;
    line-height:1.4;
}
.testitop h2{
    font-size:22px;
    font-family: "Poppins";
    font-style:Sans-serif;
    font-weight:bold;
    padding:0px;
    margin:0px;
}
.testitop .name{
    display:flex;
    justify-content:center;
   
    flex-direction:column;
    margin-left:10px;
}
.rating{
    margin:0px;
    
}
.testi  a {
    color:black;
    font-family: "Poppins";
    font-style:Sans-serif;
    font-size:12px;
   
}
.testi  a:hover{
    color:;
}

/*---------------------------------------------------------------------------------- faq-------- */
.faq-container{
    display:flex;
    flex-direction:column;
    justify-content:center;
    align-items:center;
    

}
.faq-container button{
    border:0px  solid black;
    
    background-color:whitesmoke;
    font-size:20px;
    
}
.faqbtn-div{
    padding:20px;
    margin-bottom:10px;
    background-color:whitesmoke;
    border-bottom:5px  solid #B99470;
    border-radius:15px;
    width:90%;
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
    border-bottom:5px  solid #B99470;
    /* background-color:#874430; */
    background-color:#F7EFE5;
    color:black;
}
@media screen and (min-width:1025px){
    .faqbtn-div{
    padding:20px;
    margin-bottom:10px;
    background-color:whitesmoke;
    border-bottom:5px  solid #B99470;
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
            background-color:#F1EAFF;
            padding:20px 0px;
        }
        .foc_bg{
            /* background-image: linear-gradient(  #eeee, #f8f9fa); */
            background-color: #FFFBF5;
        }
/* FAQ carousel------------------- */

        
        /* ---------------------buttton */
       /* From Uiverse.io by cssbuttons-io */ 
.btn1 {
 position: relative;
 font-size: 17px;
 text-transform: uppercase;
 text-decoration: none;
 padding: 1em 2.5em;
 display: inline-block;
 border-radius: 6em;
 transition: all .2s;
 border: none;
 font-family: inherit;
 font-weight: 500;
 color: whitesmoke;
 background-color: #9376E0;
}

.btn1:hover {
 transform: translateY(-3px);
 box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
}

.btn1:active {
 transform: translateY(-1px);
 box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
}

.btn1::after {
 content: "";
 display: inline-block;
 height: 100%;
 width: 100%;
 border-radius: 100px;
 position: absolute;
 top: 0;
 left: 0;
 z-index: -1;
 transition: all .4s;
}

.btn1::after {
 background-color: gray;
}

.btn1:hover::after {
 transform: scaleX(1.4) scaleY(1.6);
 opacity: 0;
}
.customer-logos {
    zoom:50%;
}
     
</style>

<script>

</script>
 
    <section class="about-section_top  " >
        <div class=" container">
            <div class="row ">

                <div class="  col-md-12  "> 
                   <div class="about-content_top  ">
                       
                            <h1>Massive Advertising At <span>Minimal cost</span></h1>
                            <p>
                                Finally, you Have Reached Chennai's Best Advertising Agency.
                            </p> 
                 <div class="gl-review">
                    <h4>Google ratings</h4>
                    <div class="rating">
                             
                            <i class="fa-solid fa-star fa-beat" style="color: #FFD43B;"></i>
                            <i class="fa-solid fa-star fa-beat" style="color: #FFD43B;"></i>
                            <i class="fa-solid fa-star fa-beat" style="color: #FFD43B;"></i>
                            <i class="fa-solid fa-star fa-beat" style="color: #FFD43B;"></i>    
                            <i class="fa-solid fa-star-half fa-beat" style="color: #FFD43B;"></i>
                            <br>
                            <h6>4.7/5</h6>
                            </div>
                            
                        </div>
                            
                    </div> 
                    </div>
                    
                </div>
                <!-- <div class="col-md-6 ">
                <img src="assets/images/ad banner.png" alt="" class="img-fluid">
                </div> -->
            </div>
        </div> 
      
        <img src="assets/images/wave1.png" class="wave "> 
        
    </section>
    
    <section class="about-section_about py-0" >
    
        <div class="container ">
            <div class="row">
                <div class="col-md-6  col-sm-6  "> 
                   <div class="about-content_about text-center ">
                        <div class="wpb_wrapper_top pt-5">
                            <h1>Advertising Agency in Chennai - About Baleen Media</h1>
                            <p >
                                Baleen media is a well-known advertising agency in Chennai that provides services like News paper Advertising, Radio Advertising, Television Advertising, Bus/Auto Advertising, Mobile Van Advertising, No Parking Board Advertising, Lamp Post Advertising & Local Cable TV Advertising. Backed up by the team with 20+ years of experience in the advertising industry. Baleen Media is known for its quality & commitment through a systematic and professional approach. Baleen Media is one of the Best advertising Companies in Chennai. Client-Requirement understanding is its strength. Baleen media renders its services all over India for Above The Line (ATL) Activities. Similarly, for Below The Line (BTL) activities, it renders its services in Chennai & various cities & Towns of Tamilnadu.
                            </p>
                            <div class="btn container">

<a href="about.php" >
<button class="btn1"> Read more
</button>
</a>

</div>

                           
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 text-right  ">
                            <img src="assets/images/home2.png" class="img-fluid ">
                        </div>  
            </div>
        </div>
        <!-- <img src="assets/images/wave1.png" class="wave">   -->
    </section>


 


 
    <!-- /.empty-soace -->
    <!-- section title starts -->
     <section class="WhatWeDo py-0 ">
      
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-titl">
                    <div class="title pt-5">
                        <h2 style="font-size: 40px; font-family:Montserrat; ">WHAT WE DO </h2>
                    </div>                    
                </div>
                <!-- section_title starts -->
            </div>
        </div>
    </div>
    <!-- /.section title -->
    <!-- .empty-soace -->
    <div class="empty-space" style="height: 50px"></div>
    <!-- /.empty-soace -->
    <!-- service -->
    <div class="container justify-content-center ">
        <div class="row">

<!-- --------------------------------------------------------------------------new card book -->
<div class="col-md-3  mb-5">

        <div class="book">
    <p>Print media is one of the powerful ways to reach an audience.</p>
    <a href="newspaper-advertisement-agency-in-chennai.php"> <button class="readbtn">Read More</button></a>
  <a class="Whatsapp social-icon" href="https://wa.me/919566031113" title="Whatsapp" target="_blank" style="font-size: 15px;"><i class=" fa-lg fa fa-whatsapp"></i>  Chat With Baleen </a>
                        
    <div class="cover text-center">
        <img src="assets/images/newspaper ads.png"  alt="">
        <h4>News Paper and Magazine Ads </h4>
    </div>
   </div> 
   </div>
<!-- ---------------------------------------------------card-2 -->
<div class="col-md-3  mb-5">
    
        <div class="book">
    <p>Creates a remarkable impact within the audience with 
    the help of creative videos & Graphics.</p>
    <a href="tv-advertisement-agency-in-chennai.php"> <button class="readbtn">Read More</button></a>
  <a class="Whatsapp social-icon" href="https://wa.me/919566031113" title="Whatsapp" target="_blank" style="font-size: 15px;"><i class=" fa-lg fa fa-whatsapp"></i>  Chat With Baleen </a>
                        
    <div class="cover text-center">
        <img src="assets/images/tv.png"  alt="">
        <h4>Television Ads </h4>
    </div>
   </div> 
   </div>
 <!-- ---------------------------------------------------card-3 -->
 <div class="col-md-3  mb-5">
    
        <div class="book">
    <p>Attracts a good amount of reach through expressive 
    voice – jingles at exact time.</p>
    <a href="radio-advertisement-agency-in-chennai.php"> <button class="readbtn">Read More</button></a>
  <a class="Whatsapp social-icon" href="https://wa.me/919566031113" title="Whatsapp" target="_blank" style="font-size: 15px;"><i class=" fa-lg fa fa-whatsapp"></i>  Chat With Baleen </a>
                        
    <div class="cover text-center">
        <img src="assets/images/radio logo.png"  alt="">
        <h4>Radio Ads </h4>
    </div>
   </div> 
   </div>
  <!-- ---------------------------------------------------card-4 -->
  <div class="col-md-3  mb-5">
    
        <div class="book">
    <p>This action catches an instant 
    attention of newspaper readers.</p>
    <a href="paperinsert-advertisement-agency-in-chennai.php"> <button class="readbtn">Read More</button></a>
  <a class="Whatsapp social-icon" href="https://wa.me/919566031113" title="Whatsapp" target="_blank" style="font-size: 15px;"><i class=" fa-lg fa fa-whatsapp"></i>  Chat With Baleen </a>
                        
    <div class="cover text-center">
        <img src="assets/images/newspaper logo.png"  alt="">
        <h4>Paper Inserts </h4>
    </div>
   </div> 
   </div>
   <!-- ---------------------------------------------------card-5 -->
   <div class="col-md-3  mb-5">
    
        <div class="book">
    <p>It is a dominating 
    Media display.</p>
    <a href="bus-advertisement-agency-in-chennai.php"> <button class="readbtn">Read More</button></a>
  <a class="Whatsapp social-icon" href="https://wa.me/919566031113" title="Whatsapp" target="_blank" style="font-size: 15px;"><i class=" fa-lg fa fa-whatsapp"></i>  Chat With Baleen </a>
                        
    <div class="cover text-center">
        <img src="assets/images/bus.png"  alt="">
        <h4>Bus Back Panel Ads</h4>
    </div>
   </div> 
   </div>
    <!-- ---------------------------------------------------card-6 -->
    <div class="col-md-3  mb-5">
    
    <div class="book">
<p>It is a dominating 
Media display.</p>
<a href="auto-advertisement-agency-in-chennai.php"> <button class="readbtn">Read More</button></a>
<a class="Whatsapp social-icon" href="https://wa.me/919566031113" title="Whatsapp" target="_blank" style="font-size: 15px;"><i class=" fa-lg fa fa-whatsapp"></i>  Chat With Baleen </a>
                    
<div class="cover text-center">
    <img src="assets/images/auto.png"  alt="">
    <h4>Auto Back Panel Ads</h4>
</div>
</div> 
</div>
     <!-- ---------------------------------------------------card-7 -->
     <div class="col-md-3  mb-5">
    
    <div class="book">
<p>An effective way to target the local audience & register.</p>
<a href="noparking-advertisement-agency-in-chennai.php"> <button class="readbtn">Read More</button></a>
<a class="Whatsapp social-icon" href="https://wa.me/919566031113" title="Whatsapp" target="_blank" style="font-size: 15px;"><i class=" fa-lg fa fa-whatsapp"></i>  Chat With Baleen </a>
                    
<div class="cover text-center">
    <img src="assets/images/no parking.png"  alt="">
    <h4>No Parking Board</h4>
</div>
</div> 
</div>
      <!-- ---------------------------------------------------card-8 -->
      <div class="col-md-3  mb-5">
    
    <div class="book">
<p>Software development is crucial for businesses to  enhance customer experiences.</p>
<a href="newspaper-advertisement-agency-in-chennai.php"> <button class="readbtn">Read More</button></a>
<a class="Whatsapp social-icon" href="https://wa.me/919566031113" title="Whatsapp" target="_blank" style="font-size: 15px;"><i class=" fa-lg fa fa-whatsapp"></i>  Chat With Baleen </a>
                    
<div class="cover text-center">
    <img src="assets/images/software.png"  alt="">
    <h4>Software development</h4>
</div>
</div> 
</div>
       <!-- ---------------------------------------------------card-9 -->
       <div class="col-md-3  mb-5">
    
    <div class="book">
<p>A professional website is key to building trust and attracting customers.</p>
<a href="newspaper-advertisement-agency-in-chennai.php"> <button class="readbtn">Read More</button></a>
<a class="Whatsapp social-icon" href="https://wa.me/919566031113" title="Whatsapp" target="_blank" style="font-size: 15px;"><i class=" fa-lg fa fa-whatsapp"></i>  Chat With Baleen </a>
                    
<div class="cover text-center">
    <img src="assets/images/web.png"  alt="">
    <h4>Website development</h4>
</div>
</div> 
</div>
        <!-- ---------------------------------------------------card-10 -->
        <div class="col-md-3  mb-5">
    
    <div class="book">
<p>SEO can drive more organic traffic to your site, increasing both the quantity and quality of visitors.
</p>
<a href="newspaper-advertisement-agency-in-chennai.php"> <button class="readbtn">Read More</button></a>
<a class="Whatsapp social-icon" href="https://wa.me/919566031113" title="Whatsapp" target="_blank" style="font-size: 15px;"><i class=" fa-lg fa fa-whatsapp"></i>  Chat With Baleen </a>
                    
<div class="cover text-center">
    <img src="assets/images/seo.png"  alt="">
    <h4>SEO</h4>
</div>
</div> 
</div>
         <!-- ---------------------------------------------------card-11 -->
         <div class="col-md-3  mb-5">
    
    <div class="book">
<p> SMS campaigns are relatively inexpensive compared to other marketing channels.
</p>
<a href="newspaper-advertisement-agency-in-chennai.php"> <button class="readbtn">Read More</button></a>
<a class="Whatsapp social-icon" href="https://wa.me/919566031113" title="Whatsapp" target="_blank" style="font-size: 15px;"><i class=" fa-lg fa fa-whatsapp"></i>  Chat With Baleen </a>
                    
<div class="cover text-center">
    <img src="assets/images/sms.png"  alt="">
    <h4>WhatsApp & SMS Campaigns</h4>
</div>
</div> 
</div>
          <!-- ---------------------------------------------------card-12 -->
          <div class="col-md-3  mb-5">
    
    <div class="book">
<p> Hoardings allow companies to reach a huge variety of customers with a single advertising tactic.
</p>
<a href="hoardings.php"> <button class="readbtn">Read More</button></a>
<a class="Whatsapp social-icon" href="https://wa.me/919566031113" title="Whatsapp" target="_blank" style="font-size: 15px;"><i class=" fa-lg fa fa-whatsapp"></i>  Chat With Baleen </a>
                    
<div class="cover text-center">
    <img src="assets/images/hoarding.png"  alt="">
    <h4>Hoardings</h4>
</div>
</div> 
</div>
           <!-- ---------------------------------------------------card-13 -->
           <div class="col-md-3  mb-5">
    
    <div class="book">
<p> Bus shelter advertising provides high visibility ad space that occurs at eye level along busy streets.
</p>
<a href="hoardings.php"> <button class="readbtn">Read More</button></a>
<a class="Whatsapp social-icon" href="https://wa.me/919566031113" title="Whatsapp" target="_blank" style="font-size: 15px;"><i class=" fa-lg fa fa-whatsapp"></i>  Chat With Baleen </a>
                    
<div class="cover text-center">
    <img src="assets/images/busstop.png"  alt="">
    <h4>Bus Shelter Ads</h4>
</div>
</div> 
</div>
 <!--- ---------------------------------------------------card-14 -->
            <div class="col-md-3  mb-5">
    
    <div class="book">
<p> One of the most important advantages of digital marketing is increased engagement.
</p>
<a href="newspaper-advertisement-agency-in-chennai.php"> <button class="readbtn">Read More</button></a>
<a class="Whatsapp social-icon" href="https://wa.me/919566031113" title="Whatsapp" target="_blank" style="font-size: 15px;"><i class=" fa-lg fa fa-whatsapp"></i>  Chat With Baleen </a>
                    
<div class="cover text-center">
    <img src="assets/images/apartment.png"  alt="">
    <h4>Apartment Screen Brandings </h4>
</div>
</div> 
</div>

<!-- ------------------------------------------------------------card 15 -->
<div class="col-md-3  mb-5">
    
    <div class="book">
<p> Lamp-post Advertising provides high visibility of the advertisements all day and night, rapidly increasing brand awareness 
</p>
<a href="lamppost.php"> <button class="readbtn">Read More</button></a>
<a class="Whatsapp social-icon" href="https://wa.me/919566031113" title="Whatsapp" target="_blank" style="font-size: 15px;"><i class=" fa-lg fa fa-whatsapp"></i>  Chat With Baleen </a>
                    
<div class="cover text-center">
    <img src="assets/images/lamppost.png"  alt="">
    <h4>Lamp Post Ads </h4>
</div>
</div> 
</div>

<!-- ------------------------------------------------card 16 -->
<div class="col-md-3  mb-5">
    
    <div class="book">
<p>  Traffic campaigns when you want to educate your audience and get them interested in your business.
</p>
<a href="newspaper-advertisement-agency-in-chennai.php"> <button class="readbtn">Read More</button></a>
<a class="Whatsapp social-icon" href="https://wa.me/919566031113" title="Whatsapp" target="_blank" style="font-size: 15px;"><i class=" fa-lg fa fa-whatsapp"></i>  Chat With Baleen </a>
                    
<div class="cover text-center">
    <img src="assets/images/traffic.png"  alt="">
    <h4>Traffic Alerts </h4>
</div>
</div> 
</div>

<!-- -----------------------------------------------------card 17 -->
<div class="col-md-3  mb-5">
    
    <div class="book">
<p> one of the most effective and versatile marketing tools used to inform customers of their services or products. 
</p>
<a href="newspaper-advertisement-agency-in-chennai.php"> <button class="readbtn">Read More</button></a>
<a class="Whatsapp social-icon" href="https://wa.me/919566031113" title="Whatsapp" target="_blank" style="font-size: 15px;"><i class=" fa-lg fa fa-whatsapp"></i>  Chat With Baleen </a>
                    
<div class="cover text-center">
    <img src="assets/images/pamphlets.png"  alt="">
    <h4> Pamphlets</h4>
</div>
</div> 
</div>

<!-- ---------------------------------------------------card 18 -->
<div class="col-md-3  mb-5">
    
    <div class="book">
<p> SMS campaigns are relatively inexpensive compared to other marketing channels.tt
</p>
<a href="newspaper-advertisement-agency-in-chennai.php"> <button class="readbtn">Read More</button></a>
<a class="Whatsapp social-icon" href="https://wa.me/919566031113" title="Whatsapp" target="_blank" style="font-size: 15px;"><i class=" fa-lg fa fa-whatsapp"></i>  Chat With Baleen </a>
                    
<div class="cover text-center">
    <img src="assets/images/sms.png"  alt="">
    <h4>Mobile Van Branding </h4>
</div>
</div> 
</div>
</section>

    <!-- ----------------------------------------------------testimonials--------------------------------- -->
     <section class="testi">
     <h1 style="font-size: 35px; font-family:Montserrat; font-weight:400; padding:20px 0px;" class="text-center">TESTIMONIALS</h1>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3">
                    <div class="testicard">
                     <div class="testitop">
                        <div class="avatar">
                           <i class="testiava fa-solid fa-user fa-2xl"></i>
                        </div>
                        <div class="name">
                         <h2>Arafath M</h2>
                         <div class="rating">
                            <i class="fa-solid fa-star  fa-sm" style="color: #FFD43B;"></i>
                            <i class="fa-solid fa-star  fa-sm" style="color: #FFD43B;"></i>
                            <i class="fa-solid fa-star  fa-sm" style="color: #FFD43B;"></i>
                            <i class="fa-solid fa-star  fa-sm" style="color: #FFD43B;"></i>
                            <i class="fa-solid fa-star fa-beat fa-sm" style="color: #FFD43B;"></i>
                         </div>
                            <a href="https://www.google.com/maps/contrib/110479178167914406605/reviews/@12.9906667,80.2171388,10118m/data=!3m2!1e3!4b1!4m3!8m2!3m1!1e1?hl=en-US&entry=ttu&g_ep=EgoyMDI0MDgyOC4wIKXMDSoASAFQAw%3D%3D" target="blank"><i class="fa-solid fa-arrow-up-right-from-square fa-sm"></i> Check reviews</a>
                        </div>
                        
                     </div>
                        <div class="testibody">
                            <p><i class="fa-solid fa-quote-left fa-2xl " style="color: #d6d6d6;"></i> I had an excellent experience with Baleen Media for brand promotion. Their team dedication and attention to detail made the entire process smooth and efficient.Highly recommend!<i class="fa-solid fa-quote-left fa-2xl fa-rotate-180" style="color: #d6d6d6; "></i></p>
                            
                        </div>
                        
                    </div>
                </div>
                <!-- -----------------------------------tesicard 2 -->

                <div class="col-md-3 col-sm-3">
                    <div class="testicard">
                     <div class="testitop">
                        <div class="avatar">
                           <i class="testiava fa-solid fa-user fa-2xl"></i>
                        </div>
                        <div class="name">
                        <h2> Sundar M</h2>
                        <div class="rating">
                       
                            <i class="fa-solid fa-star  fa-sm" style="color: #FFD43B;"></i>
                            <i class="fa-solid fa-star  fa-sm" style="color: #FFD43B;"></i>
                            <i class="fa-solid fa-star  fa-sm" style="color: #FFD43B;"></i>
                            <i class="fa-solid fa-star  fa-sm" style="color: #FFD43B;"></i>
                            <i class="fa-solid fa-star fa-beat fa-sm" style="color: #FFD43B;"></i>
                            </div>
                            <a href="https://www.google.com/maps/contrib/115850134444791830042/reviews/@12.9849126,79.7023857,80946m/data=!3m2!1e3!4b1!4m3!8m2!3m1!1e1?hl=en-US&entry=ttu&g_ep=EgoyMDI0MDgyOC4wIKXMDSoASAFQAw%3D%3D" target="blank"><i class="fa-solid fa-arrow-up-right-from-square fa-sm"></i> Check reviews</a>
                        </div>
                        
                     </div>
                        <div class="testibody">
                            <p><i class="fa-solid fa-quote-left fa-2xl " style="color: #d6d6d6;"></i> I had an exceptional experience working with you. My sincere gratitude goes to the Baleen Media team. A special thank you to Usha ma'am and Monisha ma'am for their outstanding support and dedication. <i class="fa-solid fa-quote-left fa-2xl fa-rotate-180" style="color: #d6d6d6; "></i></p>
                            
                        </div>
                        
                    </div>
                </div>
                <!-- -----------------------------------------------------testicard 3 -->
                <div class="col-md-3 col-sm-3">
                    <div class="testicard">
                     <div class="testitop">
                        <div class="avatar">
                           <i class="testiava fa-solid fa-user fa-2xl"></i>
                        </div>
                        <div class="name">
                        <h2> Mano Desilva</h2>
                        <div class="rating">
                       
                            <i class="fa-solid fa-star  fa-sm" style="color: #FFD43B;"></i>
                            <i class="fa-solid fa-star  fa-sm" style="color: #FFD43B;"></i>
                            <i class="fa-solid fa-star  fa-sm" style="color: #FFD43B;"></i>
                            <i class="fa-solid fa-star  fa-sm" style="color: #FFD43B;"></i>
                            <i class="fa-solid fa-star fa-beat fa-sm" style="color: #FFD43B;"></i>
                            </div>
                            <a href="https://www.google.com/maps/contrib/112834749340488372980/reviews/@12.9979498,80.2174743,10118m/data=!3m2!1e3!4b1!4m3!8m2!3m1!1e1?hl=en-US&entry=ttu&g_ep=EgoyMDI0MDgyOC4wIKXMDSoASAFQAw%3D%3D" target="blank"><i class="fa-solid fa-arrow-up-right-from-square fa-sm"></i> Check reviews</a>
                        </div>
                        
                     </div>
                        <div class="testibody">
                            <p><i class="fa-solid fa-quote-left fa-2xl " style="color: #d6d6d6;"></i> I had an excellent experience with Baleen Media for service I had with them... staff's are very humble and helpful.. got all the info in a very clean professional manner.. Keep it up guys looks great!!! 👍 <i class="fa-solid fa-quote-left fa-2xl fa-rotate-180" style="color: #d6d6d6; "></i></p>
                            
                        </div>
                        
                    </div>
                </div>
                <!---------------------------------------------------------testicard 4  -->
                <div class="col-md-3 col-sm-3">
                    <div class="testicard">
                     <div class="testitop">
                        <div class="avatar">
                           <i class="testiava fa-solid fa-user fa-2xl"></i>
                        </div>
                        <div class="name">
                        <h2>Aravind don</h2>
                        <div class="rating">
                       
                            <i class="fa-solid fa-star  fa-sm" style="color: #FFD43B;"></i>
                            <i class="fa-solid fa-star  fa-sm" style="color: #FFD43B;"></i>
                            <i class="fa-solid fa-star  fa-sm" style="color: #FFD43B;"></i>
                            <i class="fa-solid fa-star  fa-sm" style="color: #FFD43B;"></i>
                            <i class="fa-solid fa-star fa-beat fa-sm" style="color: #FFD43B;"></i>
                            </div>
                            <a href="https://www.google.com/maps/contrib/111399086303415220129/reviews/@13.010418,80.2290056,5059m/data=!3m2!1e3!4b1!4m3!8m2!3m1!1e1?hl=en-US&entry=ttu&g_ep=EgoyMDI0MDgyOC4wIKXMDSoASAFQAw%3D%3D" target="blank"><i class="fa-solid fa-arrow-up-right-from-square fa-sm"></i> Check reviews</a>
                        </div>
                        
                     </div>
                        <div class="testibody">
                            <p><i class="fa-solid fa-quote-left fa-2xl " style="color: #d6d6d6;"></i> In five years of advertising experience , I suggest everyone to travel with Baleen media.Their service was litteraly good 🙂 thanks to Baleen media <i class="fa-solid fa-quote-left fa-2xl fa-rotate-180" style="color: #d6d6d6; "></i></p>
                            
                        </div>
                        
                    </div>
                </div>
                <!--  -->
            </div>
        </div>
     </section>

<!-------------------------------------------------------------------------------------------------- testi-demo -->
<!-- <h1 style="font-size: 40px; font-family:Montserrat;" class="text-center">TESTIMONIALS</h1>
<section class="testimonials">
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
    
    <div class="card rounded-lg " >
  <div class="card-body">
  <h4 class="card-title">Reno</h4>
    <h5></h5>
    <p class="card-text">Very professional and delivered high class work.</p>
    <img src="assets/images/pngwing.com (1).png" alt="">
</div>
 </div>
    </div>
    <div class="carousel-item">
    
    <div class="card rounded-lg " >
  <div class="card-body">
  <h4 class="card-title">Ramakrishnan S</h4>
    <p class="card-text">Professionally managed company. I would recommend 100% to the customers.</p>
    <img src="assets/images/pngwing.com (1).png" alt="">
</div>
  </div>

    </div>

    <div class="carousel-item">
    
    <div class="card rounded-lg " >
  <div class="card-body">
  <h4 class="card-title">Saravanan Kiruba</h4>
    <p class="card-text">Smooth process during execution and got Positive response.</p>
    <img src="assets/images/pngwing.com (1).png" alt="">
</div>
  </div>

    </div>

    <div class="carousel-item">

    <div class="card rounded-lg " >
  <div class="card-body">
  <h4 class="card-title">aravind don</h4>
    <p class="card-text">In five years of advertising experience , I suggest everyone to travel with Baleen media.Their service was litteraly good 🙂 thanks to Baleen media 🙏</p>
    <img src="assets/images/pngwing.com (1).png" alt="">
</div>
  </div>

    </div>

    <div class="carousel-item">

    <div class="card rounded-lg " >
  <div class="card-body">
    <h4 class="card-title">vinay syal</h4>
    <p class="card-text">Excellent and prompt service by BALEEN Media for putting my advt in Hindu Property Plus at very affordable rates.
    Thanks to BALEEN Media</p>
    <img src="assets/images/pngwing.com (1).png" alt="">
</div>
  </div>

    </div>


    <div class="carousel-item">

    <div class="card rounded-lg " >
  <div class="card-body">
  <h4 class="card-title">Asif Sharfuddin</h4>
    <p class="card-text">The experience was good and Leenah grace mam was very helpful in guiding and got the work done on time. Thanks to baleen media.</p>
    <img src="assets/images/pngwing.com (1).png" alt="">
</div>
  </div>
    </div>

    <div class="carousel-item">
    

    <div class="card" >
  <div class="card-body">
  <h4 class="card-title">Mano Desilva</h4>
    <p class="card-text">I had an excellent experience with Baleen Media for service I had with them... staff's are very humble and helpful.. got all the info in a very clean professional manner.. Keep it up guys looks great!!! 👍</p>
    <img src="assets/images/pngwing.com (1).png" alt="">
</div> 
  </div>
 </div>

 <div class="carousel-item">
    <div class="card" >
  <div class="card-body">
  <h4 class="card-title">Arafath M</h4>
    <p class="card-text">I had an excellent experience with Baleen Media for brand promotion. Monisha was incredibly helpful and provided continuous follow-up until the task was completed. Their  team dedication and attention to detail made the entire process smooth and efficient. Highly recommend!</p>
    <img src="assets/images/pngwing.com (1).png" alt="">
</div> 
  </div>
 </div>

</div>
  

 <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev">
    <span class="carousel-control-prev-icon " aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
    <span class="carousel-control-next-icon  " aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </button>
</div>

</section> -->
     <!----------------------------------------------------------------------------------------------FAQ  -->
<section class="faq-bg ">
 <h2 style="font-size: 40px; font-family:Montserrat;">FAQs</h2><br>
 <div class="faq-container ">
	 
 <!-- ------------------------------------- 1st -->
            
           <div class="faqbtn-div">   
        <button class="faqbtn " type="button" data-toggle="collapse" data-target="#collapseWidthExample" aria-expanded="false" aria-controls="collapseWidthExample">
         Why should I choose Baleenmedia over other advertising companies in Chennai?
         </button>
         </div>
        
 <div class="faqcard-div">
  <div class="collapse " id="collapseWidthExample">
    <div class="faq-card" >
    Baleenmedia stands out for its innovative approach, dedicated client service, and proven track record of delivering impactful advertising agency in Chennai. With a team of experienced professionals and a commitment to excellence, they strive to exceed client expectations and achieve measurable results in advertising effectiveness.
    </div>
  </div>
</div>   

<!-- ------------------------------------------------2nd -->

<div class="faqbtn-div">              
  <button class="faqbtn" type="button" data-toggle="collapse" data-target="#collapseWidthExample2" aria-expanded="false" aria-controls="collapseWidthExample2">
  What services does Baleenmedia offer as an advertising agency in Chennai?
  </button>
</div>

<div class="faqcard-div" >
  <div class="collapse " id="collapseWidthExample2">
    <div class="faq-card" >
    Baleenmedia specializes in a wide range of advertising services including digital marketing, branding, social media management, creative content development, and media planning. They tailor strategies to meet diverse client needs, aiming to enhance brand visibility and engagement effectively.
    </div>
  </div>
</div>   

<!-- ----------------------------------------------------3rd -->

<div class="faqbtn-div">              
  <button class="faqbtn" type="button" data-toggle="collapse" data-target="#collapseWidthExample3" aria-expanded="false" aria-controls="collapseWidthExample3">
  How can Baleenmedia help my business grow?
  </button>
</div>

<div class="faqcard-div">
  <div class="collapse " id="collapseWidthExample3">
    <div class="faq-card" >
    Baleenmedia leverages its expertise in digital and traditional advertising to enhance your brand visibility, attract more customers, and increase your market reach. They focus on driving measurable results through strategic campaigns and creative solutions.
    </div>
  </div>
</div>   
</div>
<!-- -------------------------------------------------4th -->

         

<!--  -->
      
    
	<!-- --------------------------------xxx-------------------------------------- -->
	<!-- <div class="container">
        <div class="row">
            <div class="col-md-12 "> -->

            
                            <!--<div class="col-md-12 offset-md-1">-->
                            
                <!-- <div id="accordion-1" class="accordion">
                    <div class="card">
                        <div class="card-header" id="heading-1-1">
                            <h5 style="font-size:20px;" data-toggle="collapse" data-target="#collapse-1-1" aria-controls="collapse-1-1" aria-expanded="false">Why should I choose Baleenmedia over other advertising companies in Chennai?<span class="fa fa-chevron-down"></span>
                            </h5>
                        </div>
                        <div id="collapse-1-1" class="collapse" aria-labelledby="heading-1-1" data-parent="#accordion-1">
                            <div style="font-size:16px;" class="card-body">Baleenmedia stands out for its innovative approach, dedicated client service, and proven track record of delivering impactful advertising agency in Chennai. With a team of experienced professionals and a commitment to excellence, they strive to exceed client expectations and achieve measurable results in advertising effectiveness.</div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="heading-1-2">
                            <h5 style="font-size:20px;" data-toggle="collapse" data-target="#collapse-1-2" aria-expanded="false" aria-controls="collapse-1-2">What services does Baleenmedia offer as an advertising agency in Chennai? <span class="fa fa-chevron-right"></span>
                            </h5>
                        </div>
                        <div id="collapse-1-2" class="collapse" aria-labelledby="heading-1-2" data-parent="#accordion-1">
                            <div style="font-size:16px;" class="card-body">Baleenmedia specializes in a wide range of advertising services including digital marketing, branding, social media management, creative content development, and media planning. They tailor strategies to meet diverse client needs, aiming to enhance brand visibility and engagement effectively.</div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="heading-1-3">
                            <h5 style="font-size:20px;" data-toggle="collapse" data-target="#collapse-1-3" aria-expanded="false" aria-controls="collapse-1-3">How can Baleenmedia help my business grow?<span class="fa fa-chevron-right"></span>
                            </h5>
                        </div>
                        <div id="collapse-1-3" class="collapse" aria-labelledby="heading-1-3" data-parent="#accordion-1">
                            <div style="font-size:16px;" class="card-body">Baleenmedia leverages its expertise in digital and traditional advertising to enhance your brand visibility, attract more customers, and increase your market reach. They focus on driving measurable results through strategic campaigns and creative solutions.</div>
                        </div>
                    </div>
                </div>
            </div>            
        </div>
    </div>
    
</div>
</section> -->
    <!-- <img src="assets/images/wave1.png" class="img-fluid pt-5 ">  -->
    
    
    <!-- ---------------------------------------------------FAQ demo -->
   <section class="faq-bg">
        <div class="container">
            <div class="row">
                <!-- faq-card1 -->
                 <div class="col-md-4">
                    <div class="">
                        <div class="faq-card-top">
                            <img src="" alt="">
                        </div>
                        <div class="faq-card-body">
                            <p></p>
                        </div>
                    </div>
                 </div>
                 <!-- xxx -->
            </div>
        </div>
    </section>
     <!-- -------------------------xxxx----------------- -->
    

<!-- section title starts -->
<section class="foc_bg py-0">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-titl ">
                    <div class="title">
                    <h2 style="font-size: 30px; font-family:Montserrat; "> Few of Our Clients </h2>
                    </div>                    
                </div>
                <!-- section_title starts -->
            </div>
        </div>
    </div>
    <!-- /.section title --> 
    
    <section class="section-padding" style="padding: 20px;">
        <div class="container">       
           <section class="customer-logos slider">
              <div class="slide"><img src="assets\images\portfolio\client\CanaraBank.jpg" alt="Camera Bank"></div>
              <div class="slide"><img src="assets\images\portfolio\client\ACEEngineering.jpg" alt="ACEEngineering"></div>   
              <div class="slide"><img src="assets\images\portfolio\client\Afton.jpg" alt="Afton"></div>   
              <div class="slide"><img src="assets\images\portfolio\client\AssetTreeHomes.jpg" alt="AssetTreeHomes"></div>   
              <div class="slide"><img src="assets\images\portfolio\client\BIG3.jpg" alt="BIG3"></div>   
              <div class="slide"><img src="assets\images\portfolio\client\Venper.jpg" alt="Venper"></div>  
              <div class="slide"><img src="assets\images\portfolio\client\StarBiriyani.jpg" alt="StarBiriyani"></div>  
              <div class="slide"><img src="assets\images\portfolio\client\UBER.jpg" alt="UBER"></div>  
              <div class="slide"><img src="assets\images\portfolio\client\HandloomKing.jpg" alt="HandloomKing"></div>   
              <div class="slide"><img src="assets\images\portfolio\client\MNEyeHospital.jpg" alt="MNEyeHospital"></div>  
              <div class="slide"><img src="assets\images\portfolio\client\Mahsa.jpg" alt="Mahsa"></div>  
              <div class="slide"><img src="assets\images\portfolio\client\PINK.jpg" alt="PINK"></div>  
              <div class="slide"><img src="assets\images\portfolio\client\PrasanthHospitals.jpg" alt="PrasanthHospitals"></div>  
              <div class="slide"><img src="assets\images\portfolio\client\RepcoBank.jpg" alt="RepcoBank"></div>  
              <div class="slide"><img src="assets\images\portfolio\client\sivetCollege.jpg" alt="sivetCollege"></div>
              <div class="slide"><img src="assets\images\portfolio\client\Sky pix.jpg" alt="Sky pix"></div>  
           </section>   
           <section class="section-padding" style="padding: 20px;">
        <div class="container">       
           <section class="customer-logos slider">
              <div class="slide"><img src="assets\images\portfolio\client\Wootunutrition.jpg" alt="Wootunutrition"></div>   
              <div class="slide"><img src="assets\images\portfolio\client\AaradyaaGold.jpg" alt="AaradyaaGold"></div>   
              <div class="slide"><img src="assets\images\portfolio\client\CrescentHeights.jpg" alt="CrescentHeights"></div>
              <div class="slide"><img src="assets\images\portfolio\client\UBEREATS.jpg" alt="UBEREATS"></div>  
              <div class="slide"><img src="assets\images\portfolio\client\Vetri Home Appliance.jpg" alt="Vetri Home Appliance"></div>
              <div class="slide"><img src="assets\images\portfolio\client\MGP.jpg" alt="MGP"></div>
          
           </section>       
        </div>
    </section>  
        </div>
    </section>
    <!-- <img src="assets/images/wave1.png" class="img-fluid ">  -->
    </section>
    <!-- /.service -->
    <!-- .empty-soace -->
    <!-- /.empty-soace 
    <section class="container minus-margin">
        <div class="row justify-content-center">
            <div class="col-sm-10"> 
                <div class="video-popup">
                    <div class="video-popup-overlay">
                        <a class="popup-youtube" href="https://www.youtube.com/watch?v=EqG2ZCj1deI"><i class="fa fa-fw fa-play"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>-->     

    <!-- banner -->
   
    <!-- <div class="empty-space" style="height: 130px"></div>

     <section class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <div class="about-border">
                        <img class="img-fluid" src="assets/images/projects/NewsPaper.jpg" alt="img">
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1 col-sm-12">
                    <div class="about-content">
                        <div class="wpb_wrapper">
                            <h2><strong> Promising Newspaper Advertising agency based in Chennai </strong></h2>
                            <p class="justify">Baleen media is a leading <H2> Newspaper advertising agency in Chennai</h2> but works all over India is also awarded for the best Ad agency in Chennai for shopping category by Times of India in 2019. This is one of the remarkable achievement in the journey.
Being a multi brand newspaper agency, we can help our customers to place their Ads in Daily Thanthi, Dinamalar, Times of India, The Hindu, Dinakaran, Malayala Manorama, Eenadu, Trinity Mirror, Deccan Chronicle, Indian Express, Malai Malar, Malai Chudar, Makkal Kural, News today, Talk Media, etc.,
However we are the one known for the best for Daily Thanthi advertising agency in Chennai & Times of India advertising agency in Chennai. We are working passionately to be on top 10 advertising agencies in Chennai. 
We are swift enough to help our customers in urgent/important occasions like publishing Public Notice Advertisement in newspaper, Name Change Advertisement in newspaper, Document Missing Ads in Newspaper. Our staff’s expertise will help you to do the same in lower price & get guidance on formalities too.</p>

                            <h2><strong>Top most Magazine Advertisements in Chennai </strong></h2>
                            <p class="justify"> Baleen Media also deal with publishing Ads in Magazines like Kumudham, Kungumam, Aananda Vikadan, Femina, Puthiya Thalaimurai, etc.,</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
     <div class="empty-space" style="height: 130px"></div>

     <section class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <div class="about-border">
                        <img class="img-fluid" src="assets/images/projects/Tv.jpg" alt="img">
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1 col-sm-12">
                    <div class="about-content">
                        <div class="wpb_wrapper">
                            <h2><strong> Best TV/ Radio Advertising Company in Chennai  </strong></h2>
                            <p class="justify">There is a maximum number of counts when it comes to people watching Television or listening Radio and with that this two factors play the best role in the marketing medium. We work with almost all the leading TV channels in Tamil language like Doordarshan, Sun TV, Vijay TV, Polimer News, Puthiya Thalaimurai, Thanthi TV, etc., For FM Radio Advertisements, we work in coordination with our customers on creating innovative jingles & ensure it is being published in prime/ non – prime times as per customer budget & needs. We stand in rank of one of the best FM Radio Advertising Agency in Chennai. 
</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


     <div class="empty-space" style="height: 130px"></div>

     <section class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <div class="about-border">
                        <img class="img-fluid" src="assets\images\desiner.jpg" alt="img">
                    </div>
                </div>
                 <div class="col-lg-5 offset-lg-1 col-sm-12">
                    <div class="about-content">
                        <div class="wpb_wrapper">
                            <h2><strong>Creative Logo Designers in Chennai  </strong></h2>
                            <p class="justify"> We always want our Clients to receive very innovative logo designs. Hence we have we are co- working with few of the promising professional logo designers which are not in house but limitless creative. 
We take care of your “A to Z” Promotions/Branding right from starting a company with a Simple Logo Design till it reaches out the whole India in all means of advertising media as well professional growth. We grow with you.
 </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

     <div class="empty-space" style="height: 130px"></div>

     <section class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <div class="about-border">
                        <img class="img-fluid" src="assets/images/projects/BusBranding.jpg" alt="img">
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1 col-sm-12">
                    <div class="about-content">
                        <div class="wpb_wrapper">
                            <h2><strong> Most known Bus/Auto/Van Advertising media in Chennai  </strong></h2>
                            <p class="justify">Baleen Media stands in one of the most innovative & creative outdoor advertising agency in Chennai. Which includes Bus, Auto, and Mobile Van poster advertising media.</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
  <div class="empty-space" style="height: 130px"></div>

     <section class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <div class="about-border">
                        <img class="img-fluid" src="assets\images\projects\Digital.jpg" alt="img">
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1 col-sm-12">
                    <div class="about-content">
                        <div class="wpb_wrapper">
                            <h2><strong> Summary </strong></h2>
                            <p class="justify">When you come across us, we guarantee that you will definitely put us in your favorite list of advertising company. We believe and work for growth, for our precious clients as well us and we know that our growth is of course happening when our clients grow their business.
Working together always results quicker than that of one way so as we said we grow with you let's keep going on this journey. </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    
<?php
include('include/Homefooter.php');
?>