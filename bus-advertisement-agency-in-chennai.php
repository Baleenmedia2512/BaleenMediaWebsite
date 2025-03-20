<?php
include('include/top_bus.php');
?>
<style>
    /* =================================================================================banner css */ 
    .service-banner {
        background-image: linear-gradient(#f1eafe, #e0cefd, #c4a6fb);
        padding-top: 30px;
        border: 0px;
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
    .service-banner p {
        font-size: 13px;
        font-weight: bold;
        font-family: "Nunito", sans-serif;
        text-align: justify;
        line-height: 1.4;
        color: #3d3d3d;
    }

    @media (min-width: 1000px) {
        .row1 {
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .service-banner h1 {
            font-size: 60px;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }
        .service-banner p {
            font-size: 20px;
            line-height: 1.6;
        }
    }

    .wave {
        width: 100%;
    }
    /* =================================================================================banner css end*/

    /* =================================================================================service-about css*/
    .service-about-bg {
        background: #ede3fd;
        display: flex;
        flex-direction: column;
        justify-content: center;
        
        padding: 20px;
        text-align: center;
    }
    .service-about-bg h2 {
        font-size: 20px;
    font-family: "Montserrat", sans-serif;
    font-weight: 600;
    padding: 20px 0px;
    color: #333;
    text-align: left;
    }
    .service-about-bg h3{
        font-size: 30px;
        font-family: "Montserrat", sans-serif;
    font-weight: 600;
    padding: 20px 0px;
    color: #333;

    } 
    .service-about-bg p {
        font-size: 16px;
        font-weight: 550;
        padding-bottom: 20px;
        font-family: "Nunito", sans-serif;
        color: #3d3d3d;
        line-height: 1.5;
        text-align: justify;
    }
    .service-about-bg .cta {
        font-family:  cursive;
        font-weight: 600;
        font-style: italic;
        font-size: 17px;
        color: #333;
        
    }

    @media (min-width: 1000px) {
        .service-about-bg h2 {
            font-size: 25px;
        }
        .service-about-bg h3{
        font-size: 38px;
        font-family: "Montserrat", sans-serif;
    font-weight: 600;
    padding: 20px 0px;
    color: #333;
    } 
        .service-about-bg p {
            font-size: 20px;
            line-height: 1.6;
            padding-bottom: 20px;
        }
        .service-about-bg .cta {
        font-family:  cursive;
        font-weight: 600;
        font-style: italic;
        font-size: 20px;
        color: #333;
        
    }
    }
    /* =================================================================================service-about css end*/

    .We-work-with-bg {
        background: #fffbf5;
        padding: 30px 0;
    }
    .We-work-with-bg h2 {
        font-size: 28px;
        font-family: "Montserrat", sans-serif;
        font-weight: 600;
        padding: 20px 0px;
        text-align: center;
    }
    .smp {
        margin-bottom: 20px;
        width: 100%;
        border-radius: 10px;
        border: 1px solid;
        text-align: center;
    }
    .smp img {
        border-radius: 9px;
        width: 100%;
        height: 250px;
    }
    .smp p {
        margin-top: 20px;
        font-size: 20px;
        font-weight: 600;
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    }

    @media (min-width: 1000px) {
        .We-work-with-bg h2 {
            font-size: 36px;
        }
        .smp p {
            font-size: 22px;
        }
    }
</style>

<!-- ==========================banner ================================-->
<section class="service-banner"> 
    <div class="container">
        <div class="row1">
            <div class="col-md-6">
                <h1> Bus Advertising</h1>
                <p>We are here to provide you the best Bus Advertising.</p>
            </div>
            <div class="col-md-6">
                <div class="pb-5 pt-5">
                    <img src="assets/images/bus.png" alt="Bus Advertising" class="img-fluid col-md-12 ml-5">
                </div>
            </div>
        </div>
    </div>
    <img src="assets/images/wave1.png" class="wave"> 
</section>

<div class="empty-space" style="height:50px; background-image: linear-gradient(white,#ede3fd);"></div>

<section class="service-about-bg"> 
<h3 style=" text-align: center; ">Why Bus Advertising?</h3>
    <h2>Bus Advertising and Branding in Chennai</h2>
    <p>Reach a wider audience with our expert bus advertising and branding services in Chennai. Our agency offers high-visibility placements across MTC buses, ensuring that your brand travels from desired bus depots in the city. From bus back advertising to full government bus wrap branding, we maximize your impact with eye-catching design suggestions tailored for high reach and engagement.</p>

    <h2>Affordable Bus Advertising Costs</h2>
    <p>We provide clear, competitive pricing for bus back advertising costs in Chennai, so you can plan an effective campaign within budget. As a trusted bus advertising agency in Chennai, we collaborate with MTC team to ensure that your ads are seen by thousands of people daily to build credibility and visibility.</p>

    <p class="cta">Partner with us to drive your Brand’s success with impactful bus advertising in Chennai.Let’s make your message memorable and mobile across the city!</p>
</section>

<section class="We-work-with-bg">
    <h2>Sample Ads</h2>  
    <div class="container">
        <div class="row">
            <!-- card1 -->
            <div class="col-md-4">
                <div class="smp">
                    <img src="assets/images/portfolio/work/work10.jpg" alt="Bus Back Advertising" class="img-fluid">
                    <p>Bus Back Advertising</p>
                </div>
            </div>
            <!-- card2 -->
            <div class="col-md-4">
                <div class="smp">
                    <img src="assets/images/portfolio/work/work18.jpg" alt="Full Bus Advertising" class="img-fluid">
                    <p>Full Bus Advertising</p>
                </div>
            </div>
            <!-- card3 -->
            <div class="col-md-4">
                <div class="smp">
                    <img src="assets/images/portfolio/work/work19.jpg" alt="Full Bus Advertising" class="img-fluid">
                    <p>Full Bus Advertising</p>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="empty-space" style="height:100px; background-image: linear-gradient(#fffbf5, #f8f9fa);"></div>

<?php
include('include/footer.php');
?>
