<?php
include('include/top.php');
?>
<style>
    /* Base styles */
    body .about-section_about h1 {
        font-family: "poppins", sans-serif;
        text-align: center;
        font-size: 50px;
        font-weight: 500;
        border-bottom: 1px solid black;
    }
    body .about-section_about p {
        font-family: "poppins", sans-serif;
        font-size: 14px;
        font-weight: 600;
        text-align: justify;
    }
    body .about-section_about span {
        font-family: "Gloria Hallelujah", cursive;
        font-weight: 700;
        font-style: italic;
        font-size: 35.5px;
    }
    .about-section_about {
        padding-top: 50px;
        background-color: #F1EAFF;
    }
    .about-section_about .about-img {
        margin-top: 40px;
    }
    .wave {
        width: 100%;
    }
    .contact-detials {
        padding: 50px 0;
    }
    .contact-card {
        display: flex;
        justify-content: center;
        flex-direction: column;
        align-items: center;
        border-radius: 30px;
        padding: 10px;
        text-align: center;
        margin-bottom: 20px;
    }
    .contact-card h1 {
        font-family: "poppins", sans-serif;
        font-size: 30px;
        font-weight: bold;
        margin-top: 10px;
    }
    .contact-card p {
        font-size: 18px;
        font-weight: 600;
        color: #454343;
    }
    .faback {
        background-color: white;
        padding: 35px;
        width: 150px;
        height: 150px;
        border-radius: 80px;
        margin: 20px 0;
    }
    .contact-form {
        background-color: #ccc9e3;
        padding: 30px;
    }
    .contact-form h2 {
        font-family: Montserrat, sans-serif;
        font-size: 30px;
        font-weight: 600;
        border-bottom: 1px solid;
        margin-bottom: 20px;
        text-align: center;
    }
    .form-group {
        width: 100%;
        font-size: 20px;
        margin-bottom: 15px;
    }
    .form-group input,
    .form-group textarea {
        width: 100%;
        font-size: 15px;
        font-weight: 600;
        border-radius: 10px;
        padding: 20px 12px;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }
    #contactForm {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }
    #contactForm button {
        font-size: 20px;
        font-weight: bold;
        padding: 15px;
        width: 50%;
        background: #7d50d3;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }
    #contactForm button:hover {
        background: #905ef1;
        color: white;
        box-shadow: 0 2px 10px gray;
    }
    /* Responsive iframe for the Google Form */
    .contact-form iframe {
        width: 100%;
        max-width: 100%;
        border: none;
    }
    /* Media queries for larger screens */
    @media screen and (min-width: 1204px) {
        body .about-section_about h1 {
            text-align: left;
            font-size: 60px;
            border-bottom: 2px solid black;
        }
        body .about-section_about p {
            font-size: 20.5px;
        }
        body .about-section_about span {
            font-size: 35.5px;
        }
        body .about-section_about .about-img {
            margin-top: 70px;
            margin-left: 50px;
        }
    }
    /* Media queries for tablets and mobile devices */
    @media screen and (max-width: 991px) {
        body .about-section_about h1 {
            font-size: 42px;
            text-align: center;
        }
        .contact-card h1 {
            font-size: 26px;
        }
        .contact-card p {
            font-size: 16px;
        }
    }
    @media screen and (max-width: 767px) {
        .container, .row, .col-md-6, .col-md-4 {
            width: 100%;
            padding: 0 15px;
            box-sizing: border-box;
        }
        .about-section_about h1 {
            font-size: 36px;
            text-align: center;
        }
        .contact-form {
            padding: 20px;
        }
        #contactForm button {
            width: 80%;
        }
        /* Adjust iframe height if needed */
        .contact-form iframe {
            height: 1800px; /* Adjust as necessary */
        }
    }
</style>
<!-- breadcrumb -->
<section class="about-section_about">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <h1>Contact Us</h1><br>
                <p class="justify">We are the best advertising company/agency in Chennai and we are more than delighted to assist you and connect with you for this journey of growth.</p>
            </div><br>
            <div class="col-md-6 col-sm-12">
                <img class="about-img" src="assets/images/contactus.png" style="width:100%;" alt="img">
            </div>
        </div>
    </div>
    <div class="empty-space" style="height:80px;"></div>
    <img src="assets/images/wave1.png" class="wave">
</section>
<!-- /.breadcrumb -->

<!-- contact details -->
<section class="contact-detials">
    <div class="container">
        <div class="row">
            <!-- Card 1 -->
            <div class="col-md-4">
                <div class="contact-card" style="background-color: #db88e866;">
                    <h1>Mobile</h1>
                    <img src="assets/images/mobile.png" alt="" class="img-fluid">
                    <p>Mobile : 95660 31113</p>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="col-md-4">
                <div class="contact-card" style="background-color: #a5f5ec78;">
                    <h1>E-Mail</h1>
                    <img src="assets/images/email.png" alt="" class="img-fluid">
                    <p>Mail address: leenah.grace@baleenmedia.com</p>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="col-md-4">
                <div class="contact-card" style="background-color: #f7505e52;">
                    <h1>Office Address</h1>
                    <img src="assets/images/Address.png" alt="" class="img-fluid">
                    <p>
                        Address : No.32, Kasthuribai Nagar,<br>
                        3rd cross street, Adyar,<br>
                        Chennai - 600020.<br>
                        (Nalli Silks Opposite)
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact form - Added an ID for automatic scroll -->
<section class="contact-form" id="googleForm">
    <!-- Google Form Embed -->
    <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSd_dLiZNUbSWGGPhk2NXX69S_sXVbJ_fxQ8o-vAHQKoIz5VfA/viewform?embedded=true" height="1517">Loading…</iframe>
</section>

<div class="empty-space" style="height:100px; background-image: linear-gradient(#ccc9e3, #f8f9fa);"></div>

<script>
    // Auto-scroll to the Google Form section when the page loads.
    window.addEventListener('load', function() {
        var googleFormSection = document.getElementById('googleForm');
        if (googleFormSection) {
            googleFormSection.scrollIntoView({ behavior: 'smooth' });
        }
    });

    // Optional: Handle custom form submission if using your own form (currently commented out)
    if (document.getElementById('contactForm')) {
        document.getElementById('contactForm').addEventListener('submit', function(event) {
            event.preventDefault();
            // Get form values
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const mobile = document.getElementById('mobile').value;
            const message = document.getElementById('message').value;
            // Mailto link construction
            const mailtoLink = `mailto:leenah.grace@baleenmedia.com?subject=Message from ${name}&body=Name: ${name}%0AEmail: ${email}%0AMobile: ${mobile}%0AMessage: ${message}`;
            // Open the mail client with the form data
            window.location.href = mailtoLink;
        });
    }
</script>
<?php
include('include/footer.php');
?>
