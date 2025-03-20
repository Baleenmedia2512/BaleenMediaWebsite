<?php
include('include/top.php');
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
/* =================================================================================service-about css*/
.service-about-bg{
	background:#ede3fd;
	display:flex;
	flex-direction:column;
	justify-content:center;
	align-items:center;
	padding-bottom:20px;
}
.service-about-bg p{
	font-size:18px;
	font-weight:550;
	padding:0px 20px;
	font-family:nunito;
	color:black;
}
.service-about-bg span{
	font-family: "Gloria Hallelujah", cursive;
    font-weight: 600;
    font-style: italic;
    font-size: 18.5px;
	
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
</style>

<section class="service-banner"> <!-- ==========================banner ================================-->
<div class="container">
    <div class="row1">
        <div class="col-md-6">
            <h1>Radio Advertisement</h1>
            <p>We are here to provide you the best Radio Advertisement.</p>
        </div>
        <div class="col-md-6">
            <img src="assets/images/service cards/radio-serv.png" alt="" class="img-fluid pb-5 pt-5">
        </div>
    </div>
</div>
<img src="assets/images/wave1.png" class="wave"> 
 </section>
<!-- ======================================================service about -->
<div class="empty-space" style="height:50px; background-image: linear-gradient(white,#ede3fd);"></div>
<section class="service-about-bg">
<h2 style="font-size: 40px; font-family:Montserrat;  padding:20px 0px;">Why Radio Ads?</h2>
<p>Reach your target audience with radio advertising, which we often find is a highly effective and inexpensive means of generating new business. Target specific demographics based on the listener profiles of different stations.</p>
<br>
<p><span>A voice could do wonders and your brand will rock through FM Radio advertising.</span></p>
</section>
<!-- ======================================================service about end-->
<section class="We-work-with-bg">
<h2 style="font-size: 40px; font-family:Montserrat;  padding:30px 0px;">We work with</h2> 
                <!-- section_title starts -->
            </div>
        </div>
    </div>
    <!-- /.section title --> 
	
	<section class="section-padding" style="padding: 20px;">
		<div class="container">		  
		   <section class="customer-logos slider">
			  <div class="slide"><img src="assets/images/vendor/radio/1.jpg"></div>
			  <div class="slide"><img src="assets/images/vendor/radio/2.jpg"></div>
			  <div class="slide"><img src="assets/images/vendor/radio/3.jpg"></div>
			  <div class="slide"><img src="assets/images/vendor/radio/4.jpg"></div>
			  <div class="slide"><img src="assets/images/vendor/radio/5.jpg"></div>			  			  
		   </section>		
		</div>
    </section>
</section>	



 <div class="empty-space" style="height:100px; background-image: linear-gradient(#fffbf5, #f8f9fa);"></div>

<?php
include('include/footer.php');
?>