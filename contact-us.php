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
                            Thank you for your interest in AMZ Publication Hub! We are excited to hear from you and assist you with any inquiries, feedback, or support you may need. Let’s talk about your book:
                        </p>
                        <a class="btn-1" href="tel:+18447270033">CALL US</a> &nbsp;&nbsp;
                        <a class="btn-1" href="javascript:$zopim.livechat.window.show()">LIVE CHAT</a>

                    </div>
                </div>
                <div class="col-md-6"></div>
            </div>
        </div>
    </div>
    <div class="container py-5">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <?php
                // Check if the form is submitted
                if (isset($_POST['submit'])) {
                    // Retrieve the form data
                    $name = $_POST['c_name'];
                    $email = $_POST['c_email'];
                    $phone = $_POST['c_phone'];
                    $website = $_POST['website'];
                    $services = isset($_POST['services']) ? $_POST['services'] : array();
                    $genres = isset($_POST['genres']) ? $_POST['genres'] : array();
                    $message = $_POST['c_message'];
                    $ipAddress = $_SERVER['REMOTE_ADDR'];

                    // Compose the email
                    $to = 'marketing@amzpublicationhub.com, roy.harper@amzpublicationhub.com, sam@webnseoproviders.com, anthony.watson@amzpublicationhub.com';  // Replace with your email address
                    $subject = 'Contact Form Submission AMZ Publication Hub';
                    $body = "Name: $name\n"
                        . "Email: $email\n"
                        . "Phone: $phone\n"
                        . "Website: $website\n"
                        . "Services: " . implode(", ", $services) . "\n"
                        . "Genres: " . implode(", ", $genres) . "\n"
                        . "Message: $message\n"
                        . "IP Address: $ipAddress";

                    // Set the email headers
                    $headers = "From: $email\r\n"
                        . "Reply-To: $email\r\n";

                    // Send the email
                    if (mail($to, $subject, $body, $headers)) {
                        // Email sent successfully
                        echo "<script>window.location.href = 'https://amzpublicationhub.com/thank-you';</script>";
                        exit;
                    } else {
                        // Failed to send email
                        echo "Sorry, there was a problem sending your message. Please try again later.";
                    }
                }
                ?>

                <!-- HTML form -->
                <form class="row g-3" method="post">
                    <h5 class="fw-bold text-center">Fill out the form below and we will contact you promptly</h5>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="your-name" placeholder="Name*" required name="c_name">
                    </div>
                    <div class="col-md-6">
                        <input type="email" class="form-control" id="your-email" placeholder="Email*" required name="c_email">
                    </div>
                    <div class="col-6">
                        <input type="number" class="form-control" id="phone-number" placeholder="Phone*" required name="c_phone">
                    </div>
                    <div class="col-6">
                        <input type="text" class="form-control" id="website-url" placeholder="Website" name="website">
                    </div>
                    <div class="col-md-12">
                        <label for="flexCheckDefault" class="form-label"><b>Desired Service(s)*</b></label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Ghostwriting" id="Ghostwriting" name="services[]">
                            <label class="form-check-label" for="Ghostwriting">
                                Ghostwriting - I want to hire a professional to write or rewrite my book
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Editing" id="Editing" name="services[]">
                            <label class="form-check-label" for="Editing">
                                Editing - I have written a manuscript and would like a professional to review and/or edit it
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Publishing" id="Publishing" name="services[]">
                            <label class="form-check-label" for="Publishing">
                                Book Publishing Service
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Marketing" id="Marketing" name="services[]">
                            <label class="form-check-label" for="Marketing">
                                Book Marketing Service
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Others" id="Others" name="services[]">
                            <label class="form-check-label" for="Others">
                                Others
                            </label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="flexCheckDefault" class="form-label"><b>General Genre Category* </b></label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Business" id="Business" name="genres[]">
                            <label class="form-check-label" for="Business">
                                Business
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Biography" id="Biography" name="genres[]">
                            <label class="form-check-label" for="Biography">
                                Memoir/Biography
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Health" id="Health" name="genres[]">
                            <label class="form-check-label" for="Health">
                                Health
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Personal" id="Personal" name="genres[]">
                            <label class="form-check-label" for="Personal">
                                Self-Help/Personal Development
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Fiction" id="Fiction" name="genres[]">
                            <label class="form-check-label" for="Fiction">
                                Fiction
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="General" id="General" name="genres[]">
                            <label class="form-check-label" for="General">
                                General Nonfiction
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Children" id="Children" name="genres[]">
                            <label class="form-check-label" for="Children">
                                Children’s
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Other" id="Other" name="genres[]">
                            <label class="form-check-label" for="Other">
                                Other
                            </label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <textarea class="form-control" id="message" rows="3" placeholder="Tell us more about your project and publishing goals here" name="c_message" required></textarea>
                    </div>
                    <!-- <div class="col-md-12 mb-3">
                            <label for="formFile" class="form-label"><b> Please Attach Manuscript or Relevant Documents
                                    MS Word Preferred CHOOSE FILE</b>
                            </label>
                            <input class="form-control" type="file" id="formFile">
                        </div> -->
                    <div class="col-md-12 text-center">
                        <button type="submit" class="btn-1" name="submit">Submit Form</button>
                    </div>
                </form>



            </div>
            <div class="col-md-2"></div>
        </div>
        <div class="row py-5">
            <div class="col-md-12">
                <div class="maps">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12084.136485936831!2d-73.9572392!3d40.783264!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25965e68d592f%3A0x77377dab731025cf!2sAmazon%20Publishing%20Hub!5e0!3m2!1sen!2s!4v1685461841972!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
    <?php include './Includes/footer.php'; ?>
</body>

</html>
