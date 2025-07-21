<?php
include('include/top_times.php');
?>



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
        padding-top: 60px;
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
        font-size: 3rem;
        font-weight: 700;
        color: var(--primary-color);
        margin-bottom: 1.8rem;
        position: relative;
        padding-bottom: 20px;
    }

    .section-title::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100px;
        height: 5px;
        background: var(--primary-color);
        border-radius: 3px;
    }

    .banner-description {
        font-size: 1.4rem;
        font-family: "Nunito", sans-serif;
        color: #4a4a4a;
        line-height: 1.8;
        margin-bottom: 2.5rem;
        max-width: 800px;
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
                <img src="assets/images/India best news.jpeg" alt="Times of India Newspaper Chennai Edition" class="img-fluid" loading="lazy"style="max-width:100%; border-radius: 8px;">
            </div>
        </div>
    </div>
    <img src="assets/images/wave1.png" class="wave" alt="Wave design" loading="lazy">
</section>

<section class="service-bg" id="toi-ad-rates">
    <div class="container">
        <h2 class="section-title">Times of India Advertisement Types & Rates</h2>
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

<!-- Detailed Ad Booking Information Section -->
<section class="ad-booking-guide">
    <div class="container">
        <h2 class="section-title">Complete Guide to Times of India Advertising</h2>
        
        <div class="info-card">
            <h3 class="info-title">Understanding Times of India Ad Rates</h3>
            <p class="info-text">Looking for the best Times of India ad rates for your campaign? Our comprehensive rate card covers every advertising option, from premium display advertisements to cost-effective classifieds. The Times of India ad rates vary based on factors like page positioning, ad size, and day of publication. Weekend editions and special supplements often have different pricing structures to accommodate various marketing budgets.</p>
        </div>

        <div class="info-card">
            <h3 class="info-title">Simplified Times of India Advertisement Booking</h3>
            <p class="info-text">The Times of India advertisement booking process has never been easier. Our streamlined booking system allows you to select your preferred edition, choose your ad type, and secure your spot in India's leading English daily. Whether you're planning a weekend campaign or a long-term advertising strategy, our expert team ensures a smooth booking experience.</p>
        </div>

        <div class="info-card">
            <h3 class="info-title">How to Book Ad in Times of India</h3>
            <p class="info-text">Ready to book ad in Times of India? Follow our simple three-step process: First, select your ad category and size. Second, provide your ad content or let our design team create it for you. Finally, choose your preferred publication date. We handle everything from artwork requirements to final placement, ensuring your advertisement makes the maximum impact.</p>
        </div>

        <div class="info-card">
            <h3 class="info-title">Quick Guide to Post Ad in Times of India</h3>
            <p class="info-text">When you need to post ad in Times of India quickly and efficiently, our express booking service is here to help. We offer same-day booking for urgent notices and classified ads, with rapid processing for display advertisements. Our dedicated team ensures your ad meets all technical specifications and publishing guidelines.</p>
        </div>

        <div class="info-card">
            <h3 class="info-title">Benefits of Times of India Newspaper Advertising</h3>
            <p class="info-text">Times of India newspaper advertising offers unparalleled reach and credibility. With a readership spanning millions across India, your message reaches decision-makers, affluent consumers, and your target audience. Special advertising packages combine print and digital presence, maximizing your campaign's effectiveness across multiple platforms.</p>
        </div>
    </div>
</section>

<style>
    .ad-booking-guide {
        background: linear-gradient(135deg, #fff, var(--light-purple));
        padding: 70px 0;
    }

    .info-card {
        background: white;
        border-radius: 15px;
        padding: 30px;
        margin-bottom: 30px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.05);
        border-left: 5px solid var(--primary-color);
        transition: transform 0.3s ease;
    }

    .info-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 35px rgba(0,0,0,0.1);
    }

    .info-title {
        color: var(--primary-color);
        font-size: 1.8rem;
        margin-bottom: 20px;
        font-family: "Poppins", sans-serif;
        font-weight: 600;
    }

    .info-text {
        font-size: 1.2rem;
        line-height: 1.8;
        color: #444;
        margin-bottom: 0;
    }

    @media (max-width: 768px) {
        .info-title {
            font-size: 1.5rem;
        }
        
        .info-text {
            font-size: 1.1rem;
        }

        .info-card {
            padding: 20px;
        }
    }
</style>

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

        <h2 class="section-title">Popular Ad Categories in TOI Chennai Edition</h2>
        <ul class="content-list">
            <li class="list-item">Matrimonial Advertisements</li>
            <li class="list-item">Property Buy/Sell/Rent</li>
            <li class="list-item">Recruitment & Job Postings</li>
            <li class="list-item">Business Advertisements</li>
            <li class="list-item">Obituary & Death Notices</li>
            <li class="list-item">Public Notices & Tenders</li>
            <li class="list-item">Education & Training</li>
            <li class="list-item">Brand & Product Launches</li>
        </ul>
    </div>
</section> 

    <section class="service-bg">
        <div class="container">
            <h2 class="section-title">How to Book an Ad in Times of India</h2>
            <ol class="larger-text">
                <li><strong>Contact Us:</strong> Share your advertising requirements</li>
                <li><strong>Get Quote:</strong> Receive customized rate options</li>
                <li><strong>Design Support:</strong> Free assistance with ad design</li>
                <li><strong>Preview & Approve:</strong> Review your ad layout</li>
                <li><strong>Secure Booking:</strong> Confirm your ad spot</li>
                <li><strong>Publication:</strong> Ad appears on chosen date</li>
            </ol>        <div class="highlight-box">
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

<!-- Creative Ad Solutions Section -->
<section class="creative-solutions-section">
    <div class="container">
        <h2 class="section-title text-center">Creative Ad Solutions</h2>
        <div class="solutions-grid">
            <div class="solution-card">
                <div class="solution-icon">📰</div>
                <h3 class="solution-title">Premium Print Ads</h3>
                <p class="solution-description">Stand out with strategically placed advertisements in prime newspaper sections. Perfect for brand launches and corporate announcements.</p>
                <div class="solution-features">
                    <span class="feature-tag">Front Page</span>
                    <span class="feature-tag">Op-Ed Page</span>
                    <span class="feature-tag">Business Section</span>
                </div>
            </div>

            <div class="solution-card">
                <div class="solution-icon">🎯</div>
                <h3 class="solution-title">Classified Power</h3>
                <p class="solution-description">Reach your target audience effectively with our strategically placed classified advertisements. Ideal for property, recruitment, and services.</p>
                <div class="solution-features">
                    <span class="feature-tag">Property Listings</span>
                    <span class="feature-tag">Job Postings</span>
                    <span class="feature-tag">Service Ads</span>
                </div>
            </div>

            <div class="solution-card">
                <div class="solution-icon">🌟</div>
                <h3 class="solution-title">Display Excellence</h3>
                <p class="solution-description">Create lasting impressions with eye-catching display advertisements. Perfect for product launches and brand campaigns.</p>
                <div class="solution-features">
                    <span class="feature-tag">Color Ads</span>
                    <span class="feature-tag">Custom Sizes</span>
                    <span class="feature-tag">Premium Positions</span>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Additional Styles -->
<style>
    .creative-solutions-section {
        background: linear-gradient(135deg, var(--light-purple), #fff);
        padding: 80px 0;
        margin: 40px 0;
    }

    .solutions-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 30px;
        margin-top: 50px;
    }

    .solution-card {
        background: white;
        padding: 35px;
        border-radius: 20px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        transition: all 0.3s ease;
        text-align: center;
    }

    .solution-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 40px rgba(92, 37, 148, 0.15);
    }

    .solution-icon {
        font-size: 3.5rem;
        margin-bottom: 20px;
    }

    .solution-title {
        font-size: 1.8rem;
        color: var(--primary-color);
        margin-bottom: 15px;
        font-family: "Poppins", sans-serif;
        font-weight: 600;
    }

    .solution-description {
        font-size: 1.2rem;
        color: #555;
        line-height: 1.6;
        margin-bottom: 25px;
    }

    .solution-features {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
        justify-content: center;
    }

    .feature-tag {
        background: var(--light-purple);
        color: var(--primary-color);
        padding: 8px 16px;
        border-radius: 20px;
        font-size: 1rem;
        font-weight: 500;
    }

        /* Common heading and content styles */
    .content-heading {
        font-size: 2.5rem;
        color: var(--primary-color);
        margin-bottom: 30px;
        font-family: "Poppins", sans-serif;
        font-weight: 600;
        position: relative;
        padding-bottom: 15px;
    }

    .content-heading::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 80px;
        height: 4px;
        background: var(--primary-color);
        border-radius: 2px;
    }

    .larger-text {
        font-size: 1.4rem;
        line-height: 1.8;
        color: #444;
    }

    .larger-text li {
        margin-bottom: 12px;
    }

    /* Make other text elements larger */
    .rate-table th {
        font-size: 1.1rem;
    }

    .rate-table td {
        font-size: 1.2rem;
        padding: 20px;
    }

    .list-item {
        font-size: 1.2rem;
    }

    .highlight-box p {
        font-size: 1.2rem;
    }

    .faqbtn {
        font-size: 1.3rem;
    }

    .faq-card p {
        font-size: 1.2rem;
    }    @media (max-width: 768px) {
        .section-title {
            font-size: 2.5rem;
        }

        .solution-card {
            padding: 25px;
        }

        .solution-title {
            font-size: 1.5rem;
        }

        .solution-description {
            font-size: 1.1rem;
        }
    }
</style>

<section class="faq-bg">
    <div class="container">
        <h2 class="section-title">FAQs About Times of India Advertising</h2>
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
            <h2 class="section-title">Why Choose Us for Times of India Ad Booking?</h2>
            <ul class="larger-text">
                <li><strong>Official Advertising Partner:</strong> Direct access to best rates</li>
                <li><strong>Expert Guidance:</strong> Strategic advice on ad placement and timing</li>
                <li><strong>Hassle-free Process:</strong> End-to-end booking assistance</li>
                <li><strong>Competitive Rates:</strong> Best pricing guaranteed</li>
                <li><strong>Quality Assurance:</strong> 100% accurate ad placement</li>
            </ul>
        </div>
    </section><!-- Call to Action -->
    <section class="service-banner" style="padding-bottom: 40px;">
        <div class="container text-center">
            <h2 class="section-title">Ready to Advertise in Times of India?</h2>
            <p class="larger-text">Get expert assistance and best rates for your Times of India advertisement campaign.</p>
            <div class="cta-buttons">
                <a href="/ContactUs" class="btn primary-btn">Get Started</a>
                <a href="tel:+918925326906" class="btn secondary-btn">Call Now</a>
            </div>
        </div>
    </section><script>
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
