<?php
include('include/top_newspaper.php');
?>

<!-- Meta tags for SEO -->
<meta name="description" content="Get current Times of India advertising rates 2025. Book newspaper ads in Times of India Chennai edition. Expert assistance for classified, display & digital ads at best rates.">
<meta name="keywords" content="Times of India ad rates, Times of India advertisement booking, book ad in Times of India, post ad in Times of India, Times of India newspaper advertising, TOI ad rates Chennai, Times of India classified ad rates">
<link rel="stylesheet" href="assets/css/style.css">

<style>
    /* Modern styling for Times of India ad rates page */
    :root {
        --primary-color: #5C2594;
        --secondary-color: #9E5CCB;
        --text-color: #333;
        --light-purple: #FAF8FE;
        --gradient-start: #AA60C8;
        --gradient-end: #D17D98;
    }

    /* General Styles */
    .page-content {
        color: var(--text-color);
        line-height: 1.6;
    }

    .section-title {
        font-family: "Poppins", sans-serif;
        color: var(--primary-color);
        margin-bottom: 1.5rem;
    }

    /* Banner Styling */
    .service-banner {
        background: linear-gradient(-45deg, var(--gradient-start), #D69ADE, #EABDE6, #FFDFEF, var(--gradient-end));
        background-size: 400% 400%;
        animation: gradient 15s ease infinite;
        background-position: center;
        padding: 60px 0 30px;
        border: 0;
        position: relative;
        overflow: hidden;
    }

    @keyframes gradient {
        0% { background-position: 0% 50%; }
        25% { background-position: 50% 100%; }
        50% { background-position: 100% 50%; }
        75% { background-position: 50% 0%; }
        100% { background-position: 0% 50%; }
    }

    /* Banner Content */
    .section-title {
        font-family: "Poppins", sans-serif;
        font-size: 2.5rem;
        font-weight: 700;
        color: var(--primary-color);
        margin-bottom: 1.5rem;
        position: relative;
        padding-bottom: 15px;
    }

    .section-title::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 80px;
        height: 4px;
        background: var(--primary-color);
        border-radius: 2px;
    }

    .banner-description {
        font-size: 1.1rem;
        font-family: "Nunito", sans-serif;
        color: #4a4a4a;
        line-height: 1.8;
        margin-bottom: 2rem;
        max-width: 600px;
    }

    .feature-title {
        color: var(--primary-color);
        font-weight: 600;
    }

    .benefits-list {
        margin-bottom: 2rem;
    }

    /* CTA Buttons */
    .cta-buttons {
        display: flex;
        gap: 20px;
        margin-top: 30px;
    }

    .btn {
        padding: 12px 28px;
        border-radius: 30px;
        font-weight: 600;
        transition: all 0.3s ease;
        text-decoration: none;
        font-size: 1rem;
    }

    .primary-btn {
        background: var(--primary-color);
        color: white;
        box-shadow: 0 4px 15px rgba(92, 37, 148, 0.2);
    }

    .primary-btn:hover {
        background: #4a1d78;
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(92, 37, 148, 0.3);
    }

    .secondary-btn {
        background: white;
        color: var(--primary-color);
        border: 2px solid var(--primary-color);
    }

    .secondary-btn:hover {
        background: var(--light-purple);
        transform: translateY(-2px);
    }

    /* Rate Table Styling */
    .rate-table {
        width: 100%;
        border-collapse: separate;
        border-spacing: 0;
        margin: 30px 0;
        background: white;
        box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        border-radius: 12px;
        overflow: hidden;
    }

    .rate-table th, .rate-table td {
        padding: 16px 20px;
        text-align: left;
        border-bottom: 1px solid #eee;
    }

    .rate-table th {
        background: var(--primary-color);
        color: white;
        font-weight: 600;
        text-transform: uppercase;
        font-size: 0.9rem;
        letter-spacing: 0.5px;
    }

    .rate-table tr:last-child td {
        border-bottom: none;
    }

    .rate-table tr:hover {
        background: var(--light-purple);
    }

    .rate-table td {
        font-size: 0.95rem;
        transition: all 0.3s ease;
    }

    /* Highlight Box Styling */
    .highlight-box {
        background: var(--light-purple);
        border-left: 4px solid var(--primary-color);
        padding: 25px;
        margin: 30px 0;
        border-radius: 0 12px 12px 0;
        box-shadow: 0 4px 15px rgba(0,0,0,0.05);
    }

    .highlight-box h3 {
        color: var(--primary-color);
        margin-bottom: 15px;
        font-size: 1.3rem;
    }

    .highlight-box ul {
        margin: 0;
        padding-left: 20px;
    }

    .highlight-box li {
        margin-bottom: 10px;
        color: #555;
    }

    /* Section Styling */
    .service-bg, .service-about-bg {
        padding: 60px 0;
    }

    .service-bg {
        background: white;
    }

    .service-about-bg {
        background: var(--light-purple);
    }

    /* List Styling */
    .content-list {
        padding-left: 20px;
        list-style: none;
    }

    .list-item {
        margin-bottom: 12px;
        position: relative;
    }

    .content-list .list-item::before {
        content: '•';
        color: var(--primary-color);
        font-weight: bold;
        position: absolute;
        left: -20px;
    }

    /* FAQ Section */
    .faq-container {
        max-width: 800px;
        margin: 0 auto;
    }

    .faqbtn-div {
        margin-bottom: 15px;
        transition: all 0.3s ease;
    }

    .faqbtn {
        width: 100%;
        padding: 20px;
        text-align: left;
        background: white;
        border: none;
        border-radius: 10px;
        font-weight: 600;
        color: var(--primary-color);
        cursor: pointer;
        transition: all 0.3s ease;
        box-shadow: 0 2px 10px rgba(0,0,0,0.05);
    }

    .faqbtn:hover {
        background: var(--light-purple);
        transform: translateY(-2px);
    }

    .faq-card {
        background: white;
        padding: 20px;
        border-radius: 10px;
        margin-top: 10px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.05);
        display: none;
    }
</style>

<!-- Service Banner -->
<section class="service-banner">
    <div class="container">
        <div class="row1">
            <div class="col-md-6">
                <h1 class="section-title">Times of India Advertising Rates 2025</h1>
                <p class="banner-description">Looking to advertise in India's most-read English newspaper? Get comprehensive information about Times of India advertisement rates, booking process, and strategic placement options for maximum impact. Whether you're planning classified ads, display advertisements, or obituary notices, we offer end-to-end assistance at the best rates.</p>
                <div class="cta-buttons">
                    <a href="/ContactUs" class="btn primary-btn">Get Today's Ad Rates</a>
                    <a href="#toi-ad-rates" class="btn secondary-btn">View Rate Card</a>
                </div>
            </div>
            <div class="col-md-6">
                <img src="assets/images/service cards/toi-newspaper.png" alt="Times of India Newspaper Chennai Edition" class="img-fluid" loading="lazy">
            </div>
        </div>
    </div>
    <img src="assets/images/wave1.png" class="wave" alt="Wave design" loading="lazy">
</section>

<section class="service-bg" id="toi-ad-rates">
    <div class="container">
        <h2>Times of India Advertisement Types & Rates</h2>
        <div class="highlight-box">
            <p><strong>Note:</strong> Rates mentioned below are indicative and subject to change. Contact us for the latest rates and special offers.</p>
        </div>
        
        <table class="rate-table">
            <thead>
                <tr>
                    <th>Ad Type</th>
                    <th>Rate Range (₹)</th>
                    <th>Min. Size</th>
                    <th>Popular For</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Classified Text Ad</td>
                    <td>300 - 500 per line</td>
                    <td>5 lines</td>
                    <td>Personal announcements, Property</td>
                </tr>
                <tr>
                    <td>Display Classified</td>
                    <td>1,200 - 2,000 per sq.cm</td>
                    <td>4x4 cm</td>
                    <td>Business ads, Services</td>
                </tr>
                <tr>
                    <td>Display Ad (B/W)</td>
                    <td>2,500 - 3,500 per sq.cm</td>
                    <td>8x8 cm</td>
                    <td>Brand promotions, Notices</td>
                </tr>
                <tr>
                    <td>Display Ad (Color)</td>
                    <td>3,500 - 5,000 per sq.cm</td>
                    <td>8x8 cm</td>
                    <td>Product launches, Events</td>
                </tr>
                <tr>
                    <td>Front Page Ad</td>
                    <td>8,000 - 12,000 per sq.cm</td>
                    <td>12x12 cm</td>
                    <td>Premium announcements</td>
                </tr>
            </tbody>
        </table>
    </div>
</section>

<section class="service-about-bg">
    <div class="container">
        <h2 class="section-title">Why Advertise in Times of India?</h2>
        <ul class="content-list benefits-list">
            <li class="list-item"><strong class="feature-title">Largest English Daily:</strong> Reach over 15.5 million readers across India</li>
            <li class="list-item"><strong class="feature-title">Credible Platform:</strong> 180+ years of trusted journalism</li>
            <li class="list-item"><strong class="feature-title">Premium Readership:</strong> Connect with high-income, educated audience</li>
            <li class="list-item"><strong class="feature-title">Multiple Editions:</strong> Target specific cities or go national</li>
            <li class="list-item"><strong class="feature-title">Strategic Supplements:</strong> Times Property, Education Times, Times Life</li>
        </ul>

        <h2>Popular Ad Categories in TOI Chennai Edition</h2>
        <ul>
            <li>Matrimonial Advertisements</li>
            <li>Property Buy/Sell/Rent</li>
            <li>Recruitment & Job Postings</li>
            <li>Business Advertisements</li>
            <li>Obituary & Death Notices</li>
            <li>Public Notices & Tenders</li>
            <li>Education & Training</li>
            <li>Brand & Product Launches</li>
        </ul>
    </div>
</section>

<section class="service-bg">
    <div class="container">
        <h2>How to Book an Ad in Times of India</h2>
        <ol>
            <li><strong>Contact Us:</strong> Share your advertising requirements</li>
            <li><strong>Get Quote:</strong> Receive customized rate options</li>
            <li><strong>Design Support:</strong> Free assistance with ad design</li>
            <li><strong>Preview & Approve:</strong> Review your ad layout</li>
            <li><strong>Secure Booking:</strong> Confirm your ad spot</li>
            <li><strong>Publication:</strong> Ad appears on chosen date</li>
        </ol>

        <div class="highlight-box">
            <h3>Value-Added Services</h3>
            <ul>
                <li>Free ad design assistance</li>
                <li>Multi-city booking support</li>
                <li>Digital edition inclusion</li>
                <li>Strategic day selection</li>
                <li>Category-specific placement</li>
            </ul>
        </div>
    </div>
</section>

<section class="faq-bg">
    <div class="container">
        <h2>FAQs About Times of India Advertising</h2>
        <div class="faq-container">
            <div class="faqbtn-div">
                <button class="faqbtn" type="button">What is the minimum budget needed for TOI advertising?</button>
            </div>
            <div class="faqcard-div">
                <div class="faq-card">
                    <p>The minimum budget varies by ad type. Classified text ads start from ₹1,500, while display ads typically start from ₹5,000. Contact us for detailed rates based on your specific requirements.</p>
                </div>
            </div>

            <div class="faqbtn-div">
                <button class="faqbtn" type="button">How far in advance should I book my ad?</button>
            </div>
            <div class="faqcard-div">
                <div class="faq-card">
                    <p>For regular classified ads, 24-48 hours advance booking is recommended. For display ads and premium positions, book 3-5 days in advance. Festival season may require earlier bookings.</p>
                </div>
            </div>

            <div class="faqbtn-div">
                <button class="faqbtn" type="button">Do you offer discounts for bulk bookings?</button>
            </div>
            <div class="faqcard-div">
                <div class="faq-card">
                    <p>Yes, we offer attractive discounts for bulk bookings, multiple insertions, and annual contracts. Special rates are available for regular advertisers and campaign packages.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="service-about-bg" style="background: linear-gradient(#FAF8FE, #f8f9fa);">
    <div class="container">
        <h2>Why Choose Us for Times of India Ad Booking?</h2>
        <ul>
            <li><strong>Official Advertising Partner:</strong> Direct access to best rates</li>
            <li><strong>Expert Guidance:</strong> Strategic advice on ad placement and timing</li>
            <li><strong>Hassle-free Process:</strong> End-to-end booking assistance</li>
            <li><strong>Competitive Rates:</strong> Best pricing guaranteed</li>
            <li><strong>Quality Assurance:</strong> 100% accurate ad placement</li>
        </ul>
    </div>
</section>

<!-- Call to Action -->
<section class="service-banner" style="padding-bottom: 40px;">
    <div class="container text-center">
        <h2>Ready to Advertise in Times of India?</h2>
        <p>Get expert assistance and best rates for your Times of India advertisement campaign.</p>
        <div class="cta-buttons">
            <a href="/ContactUs" class="btn primary-btn">Get Started</a>
            <a href="tel:+918925326906" class="btn secondary-btn">Call Now</a>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const faqBtns = document.querySelectorAll('.faqbtn');
    faqBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            const card = this.closest('.faqbtn-div').nextElementSibling.querySelector('.faq-card');
            if (card.style.display === 'none' || !card.style.display) {
                card.style.display = 'block';
            } else {
                card.style.display = 'none';
            }
        });
    });
});
</script>
