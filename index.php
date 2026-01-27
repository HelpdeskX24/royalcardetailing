<?php /* Complete Single Page Car Wash & Detailing Website – USA Based */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Premium Car Detailing Services</title>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>
:root{
  --primary:#0A3D62;
  --secondary:#FF2D55;
  --dark:#0f0f0f;
  --light:#f5f6fa;
}
*{margin:0;padding:0;box-sizing:border-box;font-family:'Poppins',sans-serif;}
html{scroll-behavior:smooth;}
body{background:var(--light);color:#222;}

/* HEADER */
header{
  position:fixed;top:0;left:0;width:100%;
  background:#fff;box-shadow:0 2px 10px rgba(0,0,0,.08);
  z-index:999;
}
.navbar{
  max-width:1200px;margin:auto;
  display:flex;align-items:center;justify-content:space-between;
  padding:15px 20px;
}
.logo{font-size:24px;font-weight:700;color:var(--primary);}
.logo span{color:var(--secondary);}
.nav-links{display:flex;gap:25px;}
.nav-links a{text-decoration:none;color:#222;font-weight:500;}
.tfn{font-weight:600;color:var(--primary);}
.hamburger{display:none;flex-direction:column;gap:5px;cursor:pointer;}
.hamburger span{width:25px;height:3px;background:#222;}

/* GLOBAL */
section{padding:120px 20px;}
.container{max-width:1200px;margin:auto;}
h2{text-align:center;font-size:38px;margin-bottom:20px;color:var(--primary);}
.section-desc{
  text-align:center;
  max-width:900px;
  margin:0 auto 45px;
  font-size:16px;
  line-height:1.7;
}

.center-btn{text-align:center;margin-top:35px;}
.btn{
  display:inline-block;
  padding:14px 38px;
  background:var(--secondary);
  color:#fff;
  text-decoration:none;
  border-radius:30px;
  font-weight:600;
}

/* HERO */
#home{
  min-height:100vh;
  display:flex;
  align-items:center;
  justify-content:center;
  text-align:center;
  color:#fff;
  background:linear-gradient(rgba(0,0,0,.6),rgba(0,0,0,.6)),
  url('banner.jpg') center/cover;
}
#home h1{font-size:52px;margin-bottom:20px;}
#home p{font-size:20px;max-width:720px;margin:0 auto 35px;}
.hero-btns button{
  padding:15px 35px;margin:5px;
  border:none;border-radius:6px;
  font-size:16px;font-weight:600;cursor:pointer;
}
.hero-btns .primary{background:var(--secondary);color:#fff;}
.hero-btns .secondary{background:#fff;color:#000;}

/* ABOUT */
#about .wrap{display:flex;gap:40px;align-items:center;flex-wrap:wrap;}
#about img{width:100%;max-width:500px;border-radius:14px;}
#about p{margin-bottom:15px;line-height:1.7;}

/* GRIDS */
.services-grid,.pricing-grid,.gallery-grid,.testi-grid{
  display:grid;
  grid-template-columns:repeat(auto-fit,minmax(260px,1fr));
  gap:30px;
}
.card,.price-card,.testi-card{
  background:#fff;
  border-radius:14px;
  box-shadow:0 5px 25px rgba(0,0,0,.08);
  padding:25px;
  text-align:center;
}
.card img,.price-card img,.gallery-grid img{
  width:100%;height:220px;
  object-fit:cover;
  border-radius:12px;
  margin-bottom:15px;
}
.card h3,.price{color:var(--secondary);}

/* PRICING */
#pricing{background:#0f0f0f;color:#fff;}
#pricing h2{color:#fff;}
.price-card{background:#111;border:1px solid rgba(255,255,255,.1);}

/* CONTACT */
.contact-box{max-width:600px;margin:auto;text-align:center;}
.contact-box input,.contact-box textarea{
  width:100%;padding:14px;
  margin-bottom:15px;
  border-radius:8px;border:1px solid #ccc;
}
.contact-box button{
  background:var(--secondary);
  color:#fff;border:none;
  padding:14px 35px;
  border-radius:30px;
  font-size:16px;font-weight:600;
}
.thank-msg{display:none;color:green;font-weight:600;margin-top:15px;}

/* FOOTER */
footer{background:#0f0f0f;color:#ccc;padding:60px 20px;}
.footer-grid{
  display:grid;
  grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
  gap:30px;max-width:1200px;margin:auto;
}
footer h3{color:#fff;margin-bottom:15px;}
footer a{color:#ccc;text-decoration:none;display:block;margin-bottom:8px;}
.footer-bottom{text-align:center;margin-top:40px;font-size:14px;color:#777;}

/* RESPONSIVE */
@media(max-width:768px){
.nav-links{
  position:absolute;top:70px;left:0;width:100%;
  background:#fff;flex-direction:column;
  max-height:0;overflow:hidden;transition:.4s;
}
.nav-links.active{max-height:400px;padding:20px 0;}
.hamburger{display:flex;}
#about .wrap{flex-direction:column;}
}


/* Overlay Blur */
#cookieOverlay{
    position:fixed;
    inset:0;
    backdrop-filter:blur(6px);
    background:rgba(0,0,0,0.35);
    z-index:9998;
}

/* Cookie Box */
#cookieBox{
    position:fixed;
    top:50%;
    left:50%;
    transform:translate(-50%,-50%);
    background:#ffffff;
    width:90%;
    max-width:420px;
    padding:30px 25px;
    border-radius:12px;
    text-align:center;
    z-index:9999;
    box-shadow:0 10px 30px rgba(0,0,0,0.25);
    font-family:Arial, sans-serif;
}

#cookieBox h2{
    margin-bottom:12px;
    font-size:22px;
}

#cookieBox p{
    font-size:15px;
    color:#555;
    line-height:1.6;
}

#cookieBox a{
    color:#2b7cff;
    text-decoration:none;
}

/* Buttons */
.cookie-actions{
    display:flex;
    gap:15px;
    margin-top:22px;
}

.cookie-actions button{
    flex:1;
    padding:12px;
    border:none;
    border-radius:8px;
    font-size:16px;
    cursor:pointer;
}

.accept{
    background:#2ecc71;
    color:#fff;
}

.decline{
    background:#e63946;
    color:#fff;
}

/* Mobile */
@media(max-width:480px){
    #cookieBox{
        padding:25px 18px;
    }
}


</style>
</head>

<body>

<!-- COOKIE OVERLAY -->
<div id="cookieOverlay"></div>

<div id="cookieBox">
    <h2>🍪 Cookie Notice</h2>
    <p>
        This site uses cookies to enhance functionality, analyze performance,
        and ensure compliance with data protection regulations.
        <a href="#">Learn more.</a>
    </p>

    <div class="cookie-actions">
        <button class="accept" onclick="acceptCookies()">Accept</button>
        <button class="decline" onclick="declineCookies()">Decline</button>
    </div>
</div>


<header>
  <div class="navbar">
    <div class="logo">Car<span>Wash</span></div>
    <nav class="nav-links" id="navLinks">
      <a href="#home">Home</a>
      <a href="#about">About</a>
      <a href="#services">Services</a>
      <a href="#gallery">Gallery</a>
      <a href="#pricing">Pricing</a>
      <a href="#contact">Contact</a>
    </nav>
    <div class="tfn">📞 +1 888 123 4567</div>
    <div class="hamburger" onclick="toggleMenu()">
      <span></span><span></span><span></span>
    </div>
  </div>
</header>

<!-- HERO -->
<section id="home">
  <div class="container">
    <h1>Premium Car Detailing Services You Can Trust</h1>
    <p>Serving Washington, USA with professional car wash and detailing solutions designed to protect, restore, and enhance your vehicle’s appearance.</p>
    <div class="hero-btns">
      <button class="primary">Get Free Quote</button>
      <button class="secondary">Call Now</button>
    </div>
  </div>
</section>

<!-- ABOUT -->
<section id="about">
  <div class="container">
    <h2>About Us</h2>
    <p class="section-desc">
      We are a USA-based professional car wash and auto detailing company committed to delivering exceptional quality, reliability, and customer satisfaction. 
      Our experienced technicians use advanced tools, eco-friendly products, and proven techniques to ensure your vehicle looks its absolute best.
    </p>
    <div class="wrap "style="align-item:center;justify-content:center;margin-top:30px;">
      <img src="15.jpg">
      <div>
        <p>
          Whether it’s daily driving, long road trips, or luxury car care, we understand the importance of maintaining both the appearance and value of your vehicle. 
          From exterior protection to deep interior detailing, we treat every car as if it were our own.
        </p>
      </div>
    </div>
    <div class="center-btn">
      <a href="#services" class="btn">Click to Continue</a>
    </div>
  </div>
</section>

<!-- SERVICES -->
<section id="services">
  <div class="container">
    <h2>Our Services</h2>
    <p class="section-desc">
      We offer a complete range of professional car detailing services designed to meet the needs of every vehicle owner. 
      Our services focus on cleanliness, protection, and long-lasting results using industry-grade equipment and premium materials.
    </p>
    <div class="services-grid">
      <div class="card"><img src="1.webp"><h3>Exterior Wash</h3><p>Safe hand wash, wax application, and paint protection.</p></div>
      <div class="card"><img src="2.webp"><h3>Interior Cleaning</h3><p>Deep vacuuming, dashboard cleaning, and upholstery care.</p></div>
      <div class="card"><img src="3.webp"><h3>Car Polishing</h3><p>Enhance gloss, remove oxidation, and restore shine.</p></div>
      <div class="card"><img src="4.webp"><h3>Paint Correction</h3><p>Remove swirl marks, scratches, and imperfections.</p></div>
    </div>
    <div class="center-btn">
      <a href="#gallery" class="btn">Click to Continue</a>
    </div>
  </div>
</section>

<!-- GALLERY -->
<section id="gallery">
  <div class="container">
    <h2>Gallery</h2>
    <p class="section-desc">
      Take a look at some of our recent detailing projects and see the difference our professional care makes. 
      Each vehicle showcased here reflects our commitment to quality and attention to detail.
    </p>
    <div class="gallery-grid">
      <img src="14.jpg">
      <img src="https://images.unsplash.com/photo-1605559424843-9e4c228bf1c2">
      <img src="https://images.unsplash.com/photo-1542362567-b07e54358753">
      <img src="2a.jpg">
      <img src="3a.jpg">
      <img src="5a.jpg">
            <img src="https://images.unsplash.com/photo-1542362567-b07e54358753">
      <img src="4a.jpg">

    </div>
    <div class="center-btn">
      <a href="#pricing" class="btn">Click to Continue</a>
    </div>
  </div>
</section>

<!-- PRICING -->
<section id="pricing">
  <div class="container">
    <h2>Affordable Pricing – Top-Quality Results</h2>
    <p class="section-desc">
      Our pricing is transparent, competitive, and designed to deliver maximum value without compromising on quality. 
      Choose from our carefully crafted packages to match your vehicle’s needs and your budget.
    </p>
    <div class="pricing-grid">
      <div class="price-card"><img src="13.jpg"><div class="price">$350</div><h3>Car Polishing</h3></div>
      <div class="price-card"><img src="14.jpg"><div class="price">$100</div><h3>Paint Correction</h3></div>
      <div class="price-card"><img src="11.jpg"><div class="price">$60</div><h3>Interior Detail</h3></div>
      <div class="price-card"><img src="12.jpg"><div class="price">$45</div><h3>Express Wash</h3></div>
    </div>
    <div class="center-btn">
      <a href="#testimonials" class="btn">Click to Continue</a>
    </div>
  </div>
</section>

<!-- TESTIMONIAL -->
<section id="testimonials">
  <div class="container">
    <h2>Customer Testimonials</h2>
    <p class="section-desc">
      Our customers trust us for our professionalism, consistency, and outstanding results. 
      Here’s what some of our satisfied clients across Washington have to say about our services.
    </p>
    <div class="testi-grid">
      <div class="testi-card">⭐⭐⭐⭐⭐<p>Amazing service and attention to detail.</p><strong>- John D, WA</strong></div>
      <div class="testi-card">⭐⭐⭐⭐⭐<p>Very professional and worth every penny.</p><strong>- Sarah M, Seattle</strong></div>
      <div class="testi-card">⭐⭐⭐⭐⭐<p>Highly recommended detailing service.</p><strong>- Mike R, Everett</strong></div>
    </div>
    <div class="center-btn">
      <a href="#contact" class="btn">Click to Continue</a>
    </div>
  </div>
</section>

<!-- CONTACT -->
<section id="contact">
  <div class="container">
    <h2>Contact Us</h2>
    <p class="section-desc">
      Ready to give your car the care it deserves? Get in touch with us today for a free quote or to schedule your next detailing service.
    </p>
    <div class="contact-box">
      <input type="text" placeholder="Your Name">
      <input type="email" placeholder="Email Address">
      <textarea rows="4" placeholder="Your Message"></textarea>
      <button onclick="submitForm(event)">Send Message</button>
      <div class="thank-msg">Thank you for submitting! We will contact you soon.</div>
    </div>
  </div>
</section>

<!-- FOOTER -->
<footer>
  <div class="footer-grid">
    <div>
      <h3>About CarDetail</h3>
      <p>Professional car wash and detailing services proudly serving Washington, USA with quality and trust.</p>
    </div>
    <div>
      <h3>Policy Pages</h3>
      <a href="#home">Privacy Policy</a>
      <a href="#about">Terms and Conditions</a>
      <a href="#services">Cookie Policy</a>
      <a href="#pricing">Disclaimer</a>
      <a href="#contact">Contact</a>
    </div>
    <div>
      <h3>Quick Links</h3>
      <a href="#home">Home</a>
      <a href="#about">About</a>
      <a href="#services">Services</a>
      <a href="#pricing">Pricing</a>
    </div>
    <div>
      <h3>Contact Info</h3>
      <p>📍 Washington, USA</p>
      <p>📞 +1 888 123 4567</p>
      <p>✉️ info@cardetail.com</p>
    </div>
  </div>
  <div class="footer-bottom">© <?php echo date('Y'); ?> CarDetail. All Rights Reserved.</div>
</footer>

<script>
function toggleMenu(){
  document.getElementById('navLinks').classList.toggle('active');
}
function submitForm(e){
  e.preventDefault();
  document.querySelector('.thank-msg').style.display='block';
}
</script>

<script>
// Global variable to track if cookies are accepted
let cookieAccepted = false;

function acceptCookies(){
    cookieAccepted = true;
    document.getElementById("cookieBox").style.display="none";
    document.getElementById("cookieOverlay").style.display="none";
    localStorage.setItem("cookieAccepted","yes");
    
    // Remove mouse move listener after accepting
    document.removeEventListener('mousemove', handleMouseMove);
}

function declineCookies(){
    cookieAccepted = false;
    window.location.href = "https://www.google.com";
}

// Function to handle mouse movement
function handleMouseMove(event) {
    // Only redirect if cookies are not accepted
    if (!cookieAccepted && localStorage.getItem("cookieAccepted") !== "yes") {
        // Redirect to Google
        window.location.href = "https://www.google.com";
    }
}

window.onload = function(){
    if(localStorage.getItem("cookieAccepted") === "yes"){
        cookieAccepted = true;
        document.getElementById("cookieBox").style.display="none";
        document.getElementById("cookieOverlay").style.display="none";
    } else {
        // Add mouse move event listener only if cookies are not accepted
        document.addEventListener('mousemove', handleMouseMove);
        
        // Optional: Add a small delay before enabling mouse tracking
        // to give user a moment to see the cookie notice
        setTimeout(() => {
            if (!cookieAccepted && localStorage.getItem("cookieAccepted") !== "yes") {
                document.addEventListener('mousemove', handleMouseMove);
            }
        }, 500); // 0.5 second delay
    }
};
</script>

</body>
</html>
