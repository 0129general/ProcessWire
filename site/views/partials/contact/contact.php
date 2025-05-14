<section class="wpo-contact-pg-section section-padding pt-0">
    <div class="container">
        <div class="row">
            <div class="col col-lg-10 offset-lg-1">
                <div class="office-info">
                    <div class="row">
                        <!-- Address -->
                        <div class="col col-xl-4 col-lg-6 col-md-6 col-12">
                            <div class="office-info-item">
                                <div class="office-info-icon"><i class="fi flaticon-placeholder"></i></div>
                                <div class="office-info-text">
                                    <h2><?= $page->contact_address_title ?></h2>
                                    <p><?= $page->contact_address_text ?></p>
                                </div>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="col col-xl-4 col-lg-6 col-md-6 col-12">
                            <div class="office-info-item">
                                <div class="office-info-icon"><i class="fi flaticon-email"></i></div>
                                <div class="office-info-text">
                                    <h2><?= $page->contact_email_title ?></h2>
                                    <p><?= $page->contact_email_1 ?></p>
                                    <p><?= $page->contact_email_2 ?></p>
                                </div>
                            </div>
                        </div>

                        <!-- Phone -->
                        <div class="col col-xl-4 col-lg-6 col-md-6 col-12">
                            <div class="office-info-item">
                                <div class="office-info-icon"><i class="fi flaticon-phone-call"></i></div>
                                <div class="office-info-text">
                                    <h2><?= $page->contact_phone_title ?></h2>
                                    <p><?= $page->contact_phone_1 ?></p>
                                    <p><?= $page->contact_phone_2 ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="wpo-contact-title">
                    <h2><?= $page->contact_form_title ?></h2>
                    <p><?= $page->contact_form_desc ?></p>
                </div>

                <div class="wpo-contact-form-area">
                    <form method="post" class="contact-validation-active" id="consultancy-form">
                        <div>
                            <input type="text" name="name" placeholder="<?= $page->form_name_placeholder ?>" class="form-control" />
                        </div>
                        <div>
                            <input type="email" name="email" placeholder="<?= $page->form_email_placeholder ?>" class="form-control" />
                        </div>
                        <div>
                            <input type="text" name="address" placeholder="<?= $page->form_address_placeholder ?>" class="form-control" />
                        </div>
                        <div>
                            <select name="service" class="form-control">
                                <option disabled selected><?= $page->form_services_title ?></option>
                                <?php foreach ($page->contact_services as $option): ?>
                                    <option><?= $option->service_option ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="fullwidth">
                            <textarea name="note" placeholder="<?= $page->form_message_placeholder ?>" class="form-control"></textarea>
                        </div>
                        <div class="submit-area">
                            <button type="submit" class="theme-btn"><?= $page->form_submit_text ?></button>
                            <div id="loader"><i class="ti-reload"></i></div>
                        </div>
                        <div class="clearfix error-handling-messages">
                            <div id="success"><?= $page->form_success_message ?></div>
                            <div id="error"><?= $page->form_error_message ?></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>