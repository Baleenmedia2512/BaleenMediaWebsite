<?php
include('include/top.php');
?>
<style>
    /* =================================================================================banner css */
.service-banner{
    background-image: linear-gradient(white,#ccc9e3);
    padding-top:30px;
            border:0px;
}
.service-banner h1 {
    font-family: "Poppins", sans-serif;
    text-align: left;
    font-size: 25px;
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
.form-flex{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    background-color: #ccc9e3;
    border-radius: 20px;
}
.contact-form-btn {
    font-size:18px;
    padding: 10px;
}
.form-control{
    font-size:13px;
    height: 45px;
    padding: 0px 20px;
    border: 1px solid #f1f1f1;
}
select.form-control:not([size]):not([multiple]){
    height: 45px;
}
</style>
 <!-- breadcrumb -->
 <section class="service-banner"> <!-- ==========================banner ================================-->
<div class="container">
    <div class="row1">
        <div class="col-md-6">
            <h1>Get Quotation for your Advertisement Today</h1>
            <p>Fill the form below to get the best advertisement service in Chennai. </p>
        </div>
        <div class="col-md-6">
            <img src="assets/images/quotepage img.png" alt="" class="img-fluid">
        </div>
    </div>
</div>
<img src="assets/images/wave1.png" class="wave"> 
 </section>
    <!-- /.breadcrumb -->
    <div class="empty-space" style="height:100px; background-image: linear-gradient(white,#fffaed);">
    
    </div>
   <section class="form-bg"style=" background:#fffaed;">
    <!-- contact_form -->
    <div class="container">
        <div class="row">   
			<div class="col-sm-4">
			</div>
            <div class="col-md-4 contact-form">
                					
					<form id="contactform_new" method="post" action="send-form-quotation.php" class="form-flex pb-5">
                    <h2 style="font-size: 30px; font-family:Montserrat;  padding:50px 0px;">Quotation form</h2>
						<div class="col-sm-12 form-group">
							<input type="text" id="name" name="name" onchange="Allowname()" class="form-control  " placeholder="Your Name*" required="yes">
						</div>
						<div class="col-sm-12 form-group">
							<input type="text" id="email" name="email" onchange="Allowemail()" class="form-control " placeholder="Your Mail* "required="yes" >
						</div>
						<div class="col-sm-12 form-group">
                        <input type="tel" id="mobile" name="mobile" class="form-control " 
           placeholder="Your Mobile*" required="yes" pattern="^0[0-9]{10}$|^[1-9][0-9]{9}$"
           title="Mobile number should start with '0' and be 11 digits long, or without '0' and be 10 digits long.">
						</div>
						<div class="col-sm-12 form-group">
							<select class="form-control" required = "yes" name="service" >								
								<option>Select Service</option>								
								<option>Newspaper Advertisement</option>
								<option>Paper Insert</option>								
								<option>Bus Advertisement</option>
								<option>Noparking Board</option>
								<option>Television Advertisement</option>								
								<option>Radio Advertisement</option>																
								<option>Hoardings</option>
                                <option>Lamppost Ads</option>	
                                <option>Traffic alert board</option>	
                                <option>Auto Rickshaw Ads</option>	
                                <option>Appartment screen Ads</option>
                                <option>Bus Shelter</option>	
                                <option>Phamplet distribution</option>	
                                <option>Software products development</option>
                                <option>Website development</option>
                                <option>Seo services</option>
                                <option>SMS Campaigns</option>																					

								<!--<option>Digital Marketing</option>-->
							</select>
						</div>
                        <button type="submit" name="submit" class="contact-form-btn"> Submit </button>
						
					</form>
                
            </div>
			<div class="col-sm-4">
			</div>
        </div>
    </div>
    </section>
    <!-- /contact_form -->
    <!-- .empty-soace -->
    <div class="empty-space" style="height:100px; background-image: linear-gradient(#fffaed, #f8f9fa);"></div>


    
   
        </div>
    </section>
       
    
    <!-- /.empty-soace -->

<?php
include('include/footer.php');
?>