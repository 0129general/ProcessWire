<?php
// Define PHP variables for dynamic content
$address = "7 Green Lake Street Crawfordsville, IN 47933";
$email1 = "bliize@gmail.com";
$email2 = "bliize@gmail.com";
$phone1 = "+1 800 123 456 789";
$phone2 = "+1 800 123 654 987";
$contactTitle = "Have Any Question?";
$contactDescription = "It is a long established fact that a reader will be distracted content of a page when looking.";
$services = ["Subject 1", "Subject 2", "Subject 3", "Subject 4"];

// Content of tags as variables
$addressTitle = "Address";
$emailTitle = "Email Us";
$callNowTitle = "Call Now";
$servicesTitle = "Services";
$formNamePlaceholder = "Your Name*";
$formEmailPlaceholder = "Your Email*";
$formAddressPlaceholder = "Address";
$formMessagePlaceholder = "Message...";
$formSubmitText = "Get in Touch";
$thankYouMessage = "Thank you";
$errorMessage = "Error occurred while sending email. Please try again later.";
?>

<!-- start wpo-contact-pg-section -->
<section class="wpo-contact-pg-section section-padding pt-0">
    <div class="container">
        <div class="row">
            <div class="col col-lg-10 offset-lg-1">
                <div class="office-info">
                    <div class="row">
                        <div class="col col-xl-4 col-lg-6 col-md-6 col-12">
                            <div class="office-info-item">
                                <div class="office-info-icon">
                                    <div class="icon">
                                        <i class="fi flaticon-placeholder"></i>
                                    </div>
                                </div>
                                <div class="office-info-text">
                                    <h2><?= $addressTitle ?></h2>
                                    <p><?= $address ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col col-xl-4 col-lg-6 col-md-6 col-12">
                            <div class="office-info-item">
                                <div class="office-info-icon">
                                    <div class="icon">
                                        <i class="fi flaticon-email"></i>
                                    </div>
                                </div>
                                <div class="office-info-text">
                                    <h2><?= $emailTitle ?></h2>
                                    <p><?= $email1 ?></p>
                                    <p><?= $email2 ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col col-xl-4 col-lg-6 col-md-6 col-12">
                            <div class="office-info-item">
                                <div class="office-info-icon">
                                    <div class="icon">
                                        <i class="fi flaticon-phone-call"></i>
                                    </div>
                                </div>
                                <div class="office-info-text">
                                    <h2><?= $callNowTitle ?></h2>
                                    <p><?= $phone1 ?></p>
                                    <p><?= $phone2 ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wpo-contact-title">
                    <h2><?= $contactTitle ?></h2>
                    <p><?= $contactDescription ?></p>
                </div>
                <div class="wpo-contact-form-area">
                    <form method="post" class="contact-validation-active" id="consultancy-form">
                        <div>
                            <input type="text" class="form-control" name="name" id="name" placeholder="<?= $formNamePlaceholder ?>">
                        </div>
                        <div>
                            <input type="email" class="form-control" name="email" id="email" placeholder="<?= $formEmailPlaceholder ?>">
                        </div>
                        <div>
                            <input type="text" class="form-control" name="address" id="address" placeholder="<?= $formAddressPlaceholder ?>">
                        </div>
                        <div>
                            <select name="service" class="form-control">
                                <option disabled="disabled" selected=""><?= $servicesTitle ?></option>
                                <?php foreach ($services as $service) : ?>
                                    <option><?= $service ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="fullwidth">
                            <textarea class="form-control" name="note" id="note" placeholder="<?= $formMessagePlaceholder ?>"></textarea>
                        </div>
                        <div class="submit-area">
                            <button type="submit" class="theme-btn"><?= $formSubmitText ?></button>
                            <div id="loader">
                                <i class="ti-reload"></i>
                            </div>
                        </div>
                        <div class="clearfix error-handling-messages">
                            <div id="success"><?= $thankYouMessage ?></div>
                            <div id="error"><?= $errorMessage ?></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> <!-- end container -->
</section>
<!-- end wpo-contact-pg-section -->