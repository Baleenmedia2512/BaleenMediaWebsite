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
.We-work-with-bg .smp {
margin-bottom:20px;
width:100%;
border-radius:10px;
border:1px solid;
text-align: center;
background:white
}
.smp img{
	border-radius:9px;
	width:100%;
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
<!-- ==========================banner ================================-->
<section class="service-banner"> 
<div class="container">
    <div class="row1">
        <div class="col-md-6">
            <h1>Paper insert/Phamplet distribution Services </h1>
            <p>We are here to provide you the best Paper insert/Phamplet distribution Services .</p>
        </div>
        <div class="col-md-6">
            <img src="assets/images/pamphlets.png" alt="" class="img-fluid pb-5 pt-5">
        </div>
    </div>
</div>
<img src="assets/images/wave1.png" class="wave"> 
 </section>
 <!-- ============================================================================================================================================= -->
 <div class="empty-space" style="height:50px; background-image: linear-gradient(white,#ede3fd);"></div>
<section class="service-about-bg">
<h2 style="font-size: 20px; font-family:Montserrat;  padding:20px 0px;">Why Paper insert/Phamplet distribution Ads?</h2>
<p>Paper Inserts is a unique tool that creates a way of approaching News Paper Readers. Newspapers are still a demanding means of requirement from which paper inserts get easily delivered and attract audience attention. </p>
<br>
<p><span>Get your brand well known and remarkable by Paper insert/Phamplet distribution.</span></p>
</section>
 <!-- =========================================================================================================================================== -->
<section class="We-work-with-bg">
<h2 style="font-size: 40px; font-family:Montserrat;  padding:30px 0px;">Sample Ads</h2> 
<div class="container">
	<div class="row">
		<!-- card1 -->
		<div class="col-md-4">
			<div class="smp">
				<img src="assets/images/paper-insert.webp" alt="" class="img-fluid">
				<h1>Paper insertion</h1>
			</div>
		</div>
		<!-- card2 -->
		<div class="col-md-4">
			<div class="smp">
				<img src="assets/images/phamlet.jpg" alt="" class="img-fluid">
				<h1>Phamplet distribution</h1>
			</div>
		</div>
		<!-- card3 -->
		
	</div>
</div>
</section>


<div class="empty-space" style="height:100px; background-image: linear-gradient(#fffbf5, #f8f9fa);"></div>

<?php
include('include/footer.php');
?>