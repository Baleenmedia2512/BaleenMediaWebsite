<?php
include('include/top.php');
?>
<!-- ==========================stylesheet ================================-->
<style>
    /* =================================================================================banner css */
.folio-banner{
    background-image: linear-gradient(#f1eafe, #e0cefd, #c4a6fb);
    padding-top:30px;
            border:0px;
}
.folio-banner h1 {
    font-family: "Poppins", sans-serif;
    text-align: left;
    font-size: 40px;
    font-weight: 600;
    border-bottom: 2px solid black;
    padding-bottom: 10px;
    margin-bottom: 20px;
}
.folio-banner p{
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
.folio-banner h1{
    font-family: "poppins", sans-serif;
    text-align:left;
    font-size: 60px;
    font-weight:600;
    border-bottom:2px solid black;
    padding-bottom:10px;
    margin-bottom:20px;
}
.folio-banner p{
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



/* =================================================================================our work css */
              /* Container for the gallery */
              .gallery-container {
            padding: 10px;
            background-color:#ccc9e3;
            padding-bottom:50px;
        }

        /* Grid layout for cards */
        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }

        /* For larger screens (PC view) - 4 cards per row */
        @media (min-width: 768px) {
            .gallery-grid {
                grid-template-columns: repeat(4, 1fr);
            }
        }

        /* Card styles */
        .gallery-card {
            background-image: linear-gradient(black, gray);
            border:1px solid gray;
            padding:5px;
            overflow: hidden;
            transition: transform 0.3s;
            cursor: pointer;
        }

        .gallery-card:hover {
            transform: translateY(-5px);
        }

        /* Image inside the card */
        .gallery-card img {
            width: 100%;
            height: 200px; /* Fixed height */
            object-fit: cover; /* Ensures all images are the same size */
        }

        /* Overlay and popup image styles */
        .overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.8);
    display: none;
    z-index: 1000;
}

.image-popup {
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%) scale(0);
    
    border-radius: 10px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
    z-index: 1001;
    transition: transform 0.3s ease;
}


.image-popup img {
    max-width: 90vw;
    max-height: 80vh;
    
}
.image-popup.open {
    transform: translate(-50%, -50%) scale(1);
    transition: transform 0.3s ease;
}
/* =================================================================================our work css end */

/* ==============================================================================================our client */
.client-bg{
    background-color: #FFFBF5;
}
 

 /*  =====================================================================================our team css*/
 .our-team-bg{
    background-color:#ccc9e3;
 }
 /* =========================crousal */
 .carousel-control-prev{
    background:none;
    border:none;
 }
 .carousel-control-next{
    background:none;
    border:none;
 }
 .carousel-item{
    border:1px solid;
    border-radius:20px;
    margin-bottom:20px;
 }
 .carousel-item img{
    object-fit: contain;
    border-radius:19px;
 }
 /*  =======================uiverse card ==========*/
 .single-team{
    background-color: #fffbf5;
    padding-bottom:20px;
 }
 .team-grid {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            gap: 20px;
        }
 /* From Uiverse.io by eslam-hany */ 
.teamcard {
  position: relative;
  width: 300px;
  height: 400px;
  background-color: #f1eafe;
  /* background-image: linear-gradient(#f1eafe , #e0cefd, #c4a6fb); */
  display: flex;
  flex-direction:column;
  align-items: center;
  justify-content: center;
  font-size: 25px;
  font-weight: bold;
  border-radius: 15px;
  cursor: pointer;
}
.teamcard h1{
    font-size:30px;
    font-weight:600;
    font-family:poppins;
    color:black;
}
.teamcard p{
    color:black;
    font-size:18px;
    font-weight:600;
    font-family:Nunito;
}

.teamcard::before,
.teamcard::after {
  position: absolute;
  content: "";
  width: 30%;
  height: 30%;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 25px;
  font-weight: bold;
  background-image: linear-gradient( #e0cefd, #c4a6fb);
  transition: all 0.5s;
}

.teamcard::before {
  top: 0;
  right: 0;
  border-radius: 0 15px 0 100%;
}

.teamcard::after {
  bottom: 0;
  left: 0;
  border-radius: 0 100%  0 15px;
}

.teamcard:hover::before,
.teamcard:hover:after {
  width: 100%;
  height: 100%;
  border-radius: 15px;
  transition: all 0.5s;
}
 /* =========================single images nth child  division */
.teamcard:hover:after {
    /* background-image:url("assets/images/Leenah.jpg"); */
    background:url("assets/images/Leenah.jpg"); 
    background-size:300px 400px;
}
.teamcard:nth-child(2):hover:after {
    /* background-image:url("assets/images/Leenah.jpg"); */
    background:url("assets/images/team/Usha mam.jpg"); 
    background-size:300px 400px;
}
.teamcard:nth-child(3):hover:after {
    /* background-image:url("assets/images/Leenah.jpg"); */
    background:url("assets/images/female.png"); 
    background-size:300px 400px;
}
.teamcard:nth-child(4):hover:after {
    /* background-image:url("assets/images/Leenah.jpg"); */
    background:url("assets/images/male.png"); 
    background-size:300px 400px;
}
.teamcard:nth-child(5):hover:after {
    /* background-image:url("assets/images/Leenah.jpg"); */
    background:url("assets/images/male.png"); 
    background-size:300px 400px;
}
.teamcard:nth-child(6):hover:after {
    /* background-image:url("assets/images/Leenah.jpg"); */
    background:url("assets/images/male.png"); 
    background-size:300px 400px;
}
.teamcard:nth-child(7):hover:after {
    /* background-image:url("assets/images/Leenah.jpg"); */
    background:url("assets/images/male.png"); 
    background-size:300px 400px;
}
  /* =========================fam */
  .fam-card{
    border:1px solid;
    border-radius:20px;
    margin-bottom:20px;
  }
  .fam-card img{
    object-fit: contain;
    border-radius:19px;
  }
   
</style>
<!-- ==========================stylesheet end ================================-->
<!-- ==========================content ================================-->
 <section class="folio-banner"> <!-- ==========================banner ================================-->
<div class="container">
    <div class="row1">
        <div class="col-md-6">
            <h1>Our Portfolio</h1>
            <p>We love what we guide our clients for their brand growth and get known as the greatest advertising company in Chennai. We believe in long-term connections where creativity and excellence are mandatory.
            We are as excited to have you as you are for your brand growth.</p>
        </div>
        <div class="col-md-6">
            <img src="assets/images/team.png" alt="" class="img-fluid">
        </div>
    </div>
</div>
<img src="assets/images/wave1.png" class="wave"> 
 </section>
 <!-- ==========================banner end ================================-->
  <div class="empty-space" style="height:150px; background-image: linear-gradient(white,#ccc9e3);">
  <h2 style="font-size: 50px; font-family:Montserrat;  padding:50px 0px;">Our Works</h2>
  </div>
 <!-- ==========================our works ================================-->
 <div class="gallery-container">

 
        <div class="gallery-grid">
            <!-- Card 1 -->
            <div class="gallery-card">
                <img src="assets/images/portfolio/work/work1.jpg" alt="Image 1" class="gallery-image">
            </div>
            <!-- Card 2 -->
            <div class="gallery-card">
                <img src="assets/images/portfolio/work/work11.jpg" alt="Image 2" class="gallery-image">
            </div>
            <!-- Card 3 -->
            <div class="gallery-card">
                <img src="assets/images/portfolio/work/work12.jpg" alt="Image 3" class="gallery-image">
            </div>
            <!-- Card 4 -->
            <div class="gallery-card">
                <img src="assets/images/portfolio/work/work14.jpg" alt="Image 4" class="gallery-image">
            </div>
            <!-- Card 5 -->
            <div class="gallery-card">
                <img src="assets/images/portfolio/work/work15.jpg" alt="Image 4" class="gallery-image">
            </div>
            <!-- Card 6 -->
            <div class="gallery-card">
                <img src="assets/images/portfolio/work/work6.jpg" alt="Image 4" class="gallery-image">
            </div>
            <!-- Card 7 -->
            <div class="gallery-card">
                <img src="assets/images/portfolio/work/work7.jpg" alt="Image 4" class="gallery-image">
            </div>
            <!-- Card 8 -->
            <div class="gallery-card">
                <img src="assets/images/portfolio/work/work8.jpg" alt="Image 4" class="gallery-image">
            </div>
            <!-- Card 9 -->
            <div class="gallery-card">
                <img src="assets/images/portfolio/work/work9.jpg" alt="Image 4" class="gallery-image">
            </div>
            <!-- Card 10 -->
            <div class="gallery-card">
                <img src="assets/images/portfolio/work/work10.jpg" alt="Image 4" class="gallery-image">
            </div>
             <!-- Card 11 -->
             <div class="gallery-card">
                <img src="assets/images/portfolio/work/work16.jpg" alt="Image 4" class="gallery-image">
            </div>
             <!-- Card 12 -->
             <div class="gallery-card">
                <img src="assets/images/portfolio/work/work17.jpg" alt="Image 4" class="gallery-image">
            </div>
            <!-- Card 13 -->
            <div class="gallery-card">
                <img src="assets/images/portfolio/work/work18.jpg" alt="Image 4" class="gallery-image">
            </div>
            <!-- Card 14 -->
            <div class="gallery-card">
                <img src="assets/images/portfolio/work/work19.jpg" alt="Image 4" class="gallery-image">
            </div>
            
            
            <!-- Add more cards as needed -->
        </div>
        
    </div>

    <!-- Fullscreen Image Popup -->
    <div class="overlay"></div>
    <div class="image-popup">
        <img src="" alt="Popup Image">
        
    </div>

<!-- ==========================our works end ================================-->
<!-- <div class="empty-space" style="height:150px; background-image: linear-gradient(#ccc9e3,#fffbf5);">
  <h2 style="font-size: 50px; font-family:Montserrat;  padding:30px 0px;">Our Clients</h2>
  </div> -->
<!-- ==========================our clients ================================-->
 <!--<section class="client-bg pb-5">
 <h2 style="font-size: 50px; font-family:Montserrat;  padding:30px 0px;">Our Clients</h2>
<section class="section-padding" style="padding: 20px; zoom:40%;">
        <div class="mb-5">       
           <section class="customer-logos slider mb-5">
              <div class="slide border border-dark"><img src="assets\images\portfolio\client\CanaraBank.jpg" alt="Camera Bank"></div>
              <div class="slide border border-dark"><img src="assets\images\portfolio\client\ACEEngineering.jpg" alt="ACEEngineering"></div>   
              <div class="slide border border-dark"><img src="assets\images\portfolio\client\Afton.jpg" alt="Afton"></div>   
              <div class="slide border border-dark"><img src="assets\images\portfolio\client\AssetTreeHomes.jpg" alt="AssetTreeHomes"></div>   
              <div class="slide border border-dark"><img src="assets\images\portfolio\client\BIG3.jpg" alt="BIG3"></div>   
              <div class="slide border border-dark"><img src="assets\images\portfolio\client\Venper.jpg" alt="Venper"></div>  
              <div class="slide border border-dark"><img src="assets\images\portfolio\client\StarBiriyani.jpg" alt="StarBiriyani"></div>  
              <div class="slide border border-dark"><img src="assets\images\portfolio\client\UBER.jpg" alt="UBER"></div>  
              <div class="slide border border-dark"><img src="assets\images\portfolio\client\HandloomKing.jpg" alt="HandloomKing"></div>   
              <div class="slide border border-dark"><img src="assets\images\portfolio\client\MNEyeHospital.jpg" alt="MNEyeHospital"></div>  
              <div class="slide border border-dark"><img src="assets\images\portfolio\client\Mahsa.jpg" alt="Mahsa"></div>  
              <div class="slide border border-dark"><img src="assets\images\portfolio\client\PINK.jpg" alt="PINK"></div>  
              <div class="slide border border-dark"><img src="assets\images\portfolio\client\PrasanthHospitals.jpg" alt="PrasanthHospitals"></div>  
              <div class="slide border border-dark"><img src="assets\images\portfolio\client\RepcoBank.jpg" alt="RepcoBank"></div>  
              <div class="slide border border-dark"><img src="assets\images\portfolio\client\sivetCollege.jpg" alt="sivetCollege"></div>
              <div class="slide border border-dark"><img src="assets\images\portfolio\client\Sky pix.jpg" alt="Sky pix"></div>
              <div class="slide border border-dark"><img src="assets/images/portfolio/client/latest/shanti junior.png" alt="sangeetha"></div>
              <div class="slide border border-dark"><img src="assets/images/portfolio/client/latest/avr homes.png" alt="avr homes"></div>   
           </section>   
           <section class="section-padding" style="padding: 20px;">
        <div class="mt-5">       
           <section class="customer-logos slider">
              <div class="slide border border-dark"><img src="assets\images\portfolio\client\Wootunutrition.jpg" alt="Wootunutrition"></div>   
              <div class="slide border border-dark"><img src="assets\images\portfolio\client\AaradyaaGold.jpg" alt="AaradyaaGold"></div>   
              <div class="slide border border-dark"><img src="assets\images\portfolio\client\CrescentHeights.jpg" alt="CrescentHeights"></div>
              <div class="slide border border-dark"><img src="assets\images\portfolio\client\UBEREATS.jpg" alt="UBEREATS"></div>  
              <div class="slide border border-dark"><img src="assets\images\portfolio\client\Vetri Home Appliance.jpg" alt="Vetri Home Appliance"></div>
              <div class="slide border border-dark"><img src="assets\images\portfolio\client\MGP.jpg" alt="MGP"></div>
              <div class="slide border border-dark"><img src="assets/images/portfolio/client/latest/kopuramChit logo.png" alt="MGP"></div>
              <div class="slide border border-dark"><img src="assets/images/portfolio/client/latest/kun capital logo.jpeg" alt="MGP"></div>
              <div class="slide border border-dark"><img src="assets/images/portfolio/client/latest/little elly.jpeg" alt="MGP"></div>
              <div class="slide border border-dark"><img src="assets/images/portfolio/client/latest/loyalo college.jpeg" alt="MGP"></div>
              <div class="slide border border-dark"><img src="assets/images/portfolio/client/latest/merloam estates logo.png" alt="MGP"></div>
              <div class="slide border border-dark"><img src="assets/images/portfolio/client/latest/mgr janaki college.jpeg" alt="MGP"></div>
              <div class="slide border border-dark"><img src="assets/images/portfolio/client/latest/peps matress.png" alt="MGP"></div>
              <div class="slide border border-dark"><img src="assets/images/portfolio/client/latest/shanti education logo.jpeg" alt="MGP"></div>
              <div class="slide border border-dark"><img src="assets/images/portfolio/client/latest/vwe.jpeg" alt="MGP"></div>

           </section>       
        </div>
    </section>  
    <section class="section-padding" style="padding: 20px;">
        <div class="mt-5">       
           <section class="customer-logos slider">
              <div class="slide border border-dark"><img src="assets/images/portfolio/client/latest/ansariEstate logo.png" alt="ansari"></div>
              <div class="slide border border-dark"><img src="assets/images/portfolio/client/latest/apollo sandoori logo.jpeg" alt="apollo"></div>
              <div class="slide border border-dark"><img src="assets/images/portfolio/client/latest/arka.png" alt="arka"></div>
              <div class="slide border border-dark"><img src="assets/images/portfolio/client/latest/avr builders.png" alt="avr"></div>
              <div class="slide border border-dark"><img src="assets/images/portfolio/client/latest/chaithanya.jpeg" alt="chaithanya"></div>
              <div class="slide border border-dark"><img src="assets/images/portfolio/client/latest/chennaiport logo.png" alt="chennai port"></div>
              <div class="slide border border-dark"><img src="assets/images/portfolio/client/latest/crystal homes logo.png" alt="crytal homes"></div>
              <div class="slide border border-dark"><img src="assets/images/portfolio/client/latest/eaglefleet logo.png" alt="eaglefleet"></div>
              <div class="slide border border-dark"><img src="assets/images/portfolio/client/latest/euro kids.png" alt="euro kids"></div>
              <div class="slide border border-dark"><img src="assets/images/portfolio/client/latest/Grace Scans.jpg" alt="grace scan"></div>
              <div class="slide border border-dark"><img src="assets/images/portfolio/client/latest/hema's kitchen.png" alt="hema kit"></div>
              <div class="slide border border-dark"><img src="assets/images/portfolio/client/latest/hotel ramada.png" alt="ramada"></div>
              <div class="slide border border-dark"><img src="assets/images/portfolio/client/latest/hotel sangeetha logo.png" alt="sangeetha"></div>
              <div class="slide border border-dark"><img src="assets/images/portfolio/client/latest/ideal abacus logo.jpeg" alt="sangeetha"></div>
              <div class="slide border border-dark"><img src="assets/images/portfolio/client/latest/india builders.jpeg" alt="sangeetha"></div>
              <div class="slide border border-dark"><img src="assets/images/portfolio/client/latest/jiore logo.jpeg" alt="sangeetha"></div>
              <div class="slide border border-dark"><img src="assets/images/portfolio/client/latest/jj infra logo.jpeg" alt="sangeetha"></div>
              <div class="slide border border-dark"><img src="assets/images/portfolio/client/latest/kesar gift.jpeg" alt="sangeetha"></div>
              <div class="slide border border-dark"><img src="assets/images/portfolio/client/latest/shopee inn.jpeg" alt="sangeetha"></div>
              <div class="slide border border-dark"><img src="assets/images/portfolio/client/latest/sivet college.jpeg" alt="sangeetha"></div>
              <div class="slide border border-dark"><img src="assets/images/portfolio/client/latest/tvs college.jpeg" alt="sangeetha"></div>
              <div class="slide border border-dark"><img src="assets/images/portfolio/client/latest/vgn homes.png" alt="sangeetha"></div>

           </section>       
        </div>
    </section>  
        </div>
    </section>
    <!-- </section> -->
    

 
  
<!-- =============================our clients end================================== -->

 <!-- ==========================our team/fam of bm ================================-->
 
 <section class="our-team-bg">
<!-- ============================group -->
<h2 style="font-size: 40px; font-family:Montserrat;padding:20px 0px;">Fame of Baleen Media</h2>
<div class="fam-contain">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="fam-card">
                    <img src="assets/images/portfolio/team/team baleen2.jpg" alt=""class="img-fluid">
                </div>
            </div>
            <div class="col-md-6">
                <div class="fam-card">
                    <img src="assets/images/portfolio/team/team baleen 3.jpg" alt=""class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ============================sliderteam -->
<div class="container-fluid pb-5">
<div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/images/portfolio/team/team baleen 4.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="assets/images/portfolio/team/team tech.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="assets/images/portfolio/team/team baleen 4.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </button>
</div>
</div>
</section>
 <!-- ============================single -->
 <section class="single-team">
 <h2 style="font-size: 50px; font-family:Montserrat;  padding:20px 0px;">Our Team</h2>
  <div class="team-grid">
    <!-- card-1 -->
  <div class="teamcard"><h1>Leenah Grace</h1>   <p>Proprietrix</p></div>
  <!-- card-2 -->
  <div class="teamcard"><h1>Usha Rani</h1>   <p>Procurement Manager</p></div>
  <!-- card-3 -->
  <div class="teamcard"><h1>Marry Monisha </h1>   <p>Client Support</p></div>
  <!-- card-4 -->
  <div class="teamcard"><h1>Sivaramakrishnan</h1>   <p>Full-stack developer</p></div>
  <!-- card-5 -->
  <div class="teamcard"><h1>Logeshwaran</h1>   <p>Full-stack developer</p></div>
  <!-- card-6 -->
  <div class="teamcard"><h1>Asath Kameel</h1>   <p>Full-stack developer</p></div>
   <!-- card-7 -->
   <div class="teamcard"><h1>Kumaravel</h1>   <p>Full-stack developer</p></div>
</div>    
</section> 
  <!-- ==========================our team end ================================-->
<!-- ==========================content end================================-->
<div class="empty-space" style="height:100px; background-image: linear-gradient(#fffbf5, #f8f9fa);"></div>
<!-- =====================================script popup img -->

  <script>
        // Select all gallery images
        const images = document.querySelectorAll('.gallery-image');
        const popup = document.querySelector('.image-popup');
        const popupImage = popup.querySelector('img');
        const overlay = document.querySelector('.overlay');

        // Function to show popup
images.forEach((img) => {
    img.addEventListener('click', (e) => {
        popupImage.src = e.target.src; // Set the clicked image's source
        overlay.style.display = 'block'; // Show overlay
        popup.classList.add('open'); // Add open class to display popup
    });
});

       // Function to hide popup when clicking outside the image
overlay.addEventListener('click', () => {
    popup.classList.remove('open'); // Remove open class to close popup
    overlay.style.display = 'none'; // Hide overlay
});
    </script>

<?php
include('include/footer.php');
?>