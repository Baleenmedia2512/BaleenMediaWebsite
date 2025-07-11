<?php
include('include/top_tv.php');
?>
<style>
    /* =================================================================================banner css */
.service-banner{
    background-image: linear-gradient(#f1eafe, #e0cefd, #c4a6fb);
    padding-top:30px;
            border:0px;
}
.service-banner h1 {
    font-family: "Poppins", sans-serif;
    text-align: left;
    font-size: 30px;
    font-weight: 600;
    border-bottom: 2px solid black;
    padding-bottom: 10px;
    margin-bottom: 20px;
}
.service-banner p{
    font-size:13px;
            font-weight:bold;
            font-family: "Nunito", sans-serif;
            text-align:justify;
            line-height:1.4;
            color:#3d3d3d;
}

@media (min-width: 1000px){
    .row1{
    display:flex;
   align-items:center;
   justify-content:center;
}
.service-banner h1{
    font-family: "poppins", sans-serif;
    text-align:left;
    font-size: 60px;
    font-weight:600;
    border-bottom:2px solid black;
    padding-bottom:10px;
    margin-bottom:20px;
}
.service-banner p{
    font-size:20px;
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
/* ==============================================================================================service cards css */
section.ad-types {
    background-color: #ccc9e2; /* Main background */
    padding: 50px 10px;
}

.section-title {
    text-align: center;
    margin-bottom: 40px;
}

.section-title h2 {
    font-weight: 700;
    color: #c4a6fb;
}

.ad-cards-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 30px;
}

.ad-card {
    position: relative;
    width: 280px;
    height: 400px;
    background-color: #fffbf5;
    border-radius: 20px;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}



.ad-card img {
    width: 100%;
    height: 68%;
    object-fit: cover;
    padding:50px;
	transform: rotate(270deg);
}

.ad-card-content {
    padding: 20px;
    background-color: #fffbf5;
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
}

.ad-card-content h4 {
    font-size: 23px;
    color: black;
    font-weight:600;
    margin-bottom: 10px;
}

.ad-card-content p {
    font-size: 13px;
    color: black;
}



/* Media Queries for responsiveness */
@media (max-width: 992px) {
    .ad-cards-container {
        gap: 20px;
    }
}

@media (max-width: 768px) {
    .ad-card {
        width: 100%;
    }
}
/* ============================================================================================== service cards css end */
.We-work-with-bg{
    background-color:#fffbf5;
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
</style>


    <!-- breadcrumb -->
    <section class="service-banner"> <!-- ==========================banner ================================-->
<div class="container">
    <div class="row1">
        <div class="col-md-6">
            <h1>Television Advertisement</h1>
            <p>We are here to provide you the best Television Advertisementt.</p>
        </div>
        <div class="col-md-6">
            <img src="assets/images/tv.png" alt="" class="img-fluid">
        </div>
    </div>
</div>
<img src="assets/images/wave1.png" class="wave"> 
 </section>
    <!-- /.breadcrumb -->

    
<!-- ======================================================service cards -->
<div class="empty-space" style="height:150px; background-image: linear-gradient(white,#ccc9e3);">
  <h2 style="font-size: 50px; font-family:Montserrat;  padding:50px 0px;">Types of Ads</h2>
  </div>
        <!-- /.container -->
   
        <section class="ad-types">
    <div class="container">  
        <div class="row ad-cards-container">
            <div class="ad-card">
                <img src="assets/images/adtype/tv-scrollads.jpeg" alt="General Display">
                <div class="ad-card-content">
                    <h4>Scroll Ads</h4>
                    <p>Your advertisement will be displayed at the bottom of the tv shows.</p>
                </div>
            </div>
            
            <div class="ad-card">
                <img src="assets/images/adtype/tv-fullscreen.jpeg" alt="Single Column">
                <div class="ad-card-content">
                    <h4>Full-screen Ads</h4>
                    <p>Your advertisement will be displayed at the Ad break in full screen.</p>
                </div>
            </div>

           
        </div>
    </div>
</section>
  

    
    
     <div class="empty-space" style="height:100px; background-image: linear-gradient(#ccc9e2, #f8f9fa);"></div>


<?php

include('include/footer.php');
?>