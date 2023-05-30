<!DOCTYPE html>
<html lang="en">

<head>
    <?php include './Includes/head.php'; ?>

    <title>Contact Us</title>
</head>

<body>
    <?php include './Includes/header.php'; ?>
    <div class="contact-page">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div style="margin: 120px 0px 0px 0px">
                        <h1>
                            Contact
                            <span class="fw-bold"> Us</span>
                        </h1>
                        <p class="pb-3">
                            Hi there! We're excited to help you with your book publishing & marketing needs. Please provide your contact information and we'll get back to you shortly.
                        </p>
                        <a class="btn-1" href="#">LET'S CONNECTED</a>
                    </div>
                </div>
                <div class="col-md-6"></div>
            </div>
        </div>
    </div>
    <div class="container py-5">
        <div class="row">
            <div class="col-md-6">
                <form class="row g-3">
                    <div class="col-md-6">
                        <label for="your-name" class="form-label">Your Name</label>
                        <input type="text" class="form-control" id="your-name" placeholder="John Doe" required="">
                    </div>
                    <div class="col-md-6">
                        <label for="your-email" class="form-label">Your Email</label>
                        <input type="email" class="form-control" id="your-email" placeholder="john45@example.com" required="">
                    </div>
                    <div class="col-6">
                        <label for="phone-number" class="form-label">Phone Number</label>
                        <input type="number" class="form-control" id="phone-number" placeholder="+123 4567 890" required="">
                    </div>
                    <div class="col-6">
                        <label for="website-url" class="form-label">Website URL</label>
                        <input type="text" class="form-control" id="website-url" placeholder="www.example.com">
                    </div>
                    <div class="col-md-12">
                        <label for="services" class="form-label">Services</label>
                        <select id="services" class="form-select" required="">
                            <option disabled="" value="" selected="">Please Select a Service</option>
                            <option>E-Book Writing & Publishing</option>
                            <option>Book Editing & Proofreading</option>
                            <option>Book Cover Design</option>
                            <option>Book Illustrations</option>
                            <option>Audiobook Narration</option>
                            <option>Book Publishing</option>
                            <option>Book Printing</option>
                            <option>Book Marketing</option>
                            <option>Author Website</option>
                            <option>Amazon-publishing</option>
                        </select>
                    </div>
                    <div class="col-md-12">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" id="message" rows="3"></textarea>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn-1">SEND MESSAGE</button>
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <div class="maps">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12084.136485936831!2d-73.9572392!3d40.783264!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25965e68d592f%3A0x77377dab731025cf!2sAmazon%20Publishing%20Hub!5e0!3m2!1sen!2s!4v1685461841972!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
    <div class="container py-5">
        <div class="row">
            <div class="col-md-4 text-center">
                <div class="cont-divs">
                    <i class="fa-solid fa-location-dot"></i>
                    <h6 class="fw-bold">Mailing Address</h6>
                    <a href="https://goo.gl/maps/g5gyFUok5tfmuTBbA" target="_blank">1248 Madison Ave Unit #205, New York, <br> NY 10128, United States</a>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="cont-divs">
                    <i class="fa-solid fa-envelope"></i>
                    <h6 class="fw-bold">Mail</h6>
                    <a href="mailto:marketing@amzpublicationhub.com">marketing@amzpublicationhub.com</a>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="cont-divs">
                    <i class="fa-solid fa-headphones"></i>
                    <h6 class="fw-bold">Phone</h6>
                    <a href="tel:+18447270033">+1-844-727-0033</a>
                </div>
            </div>
        </div>
    </div>
    <?php include './Includes/footer.php'; ?>
</body>

</html>