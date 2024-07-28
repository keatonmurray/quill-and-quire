<div class="custom-hero-body custom-hero-on-sale">
    <div class="container has-text-centered">
        <h1 class="is-size-4 has-text-weight-semibold">Curious about something?</h1>
        <p class="mb-4 is-uppercase">We love friendly hellos!</p>
        <form id="contactForm" action="<?php echo site_url('contact/store'); ?>" method="POST">
            <div class="columns is-multiline mt-5">
                <div class="column is-12-mobile is-6-tablet is-6-desktop">
                    <div class="field has-text-left">
                        <label for="author_first_name" class="label">First name</label>
                        <div class="control">
                            <input name="author_first_name" class="input is-medium" type="text" placeholder="">
                        </div>
                    </div>
                </div>
                <div class="column is-12-mobile is-6-tablet is-6-desktop">
                    <div class="field has-text-left">
                        <label for="author_last_name" class="label">Last name</label>
                        <div class="control">
                            <input name="author_last_name" class="input is-medium" type="text" placeholder="">
                        </div>
                    </div>
                </div>

                <div class="column is-12-mobile is-6-tablet is-6-desktop">
                    <div class="field has-text-left">
                        <label for="author_email_address" class="label">Email address</label>
                        <div class="control">
                            <input type="text" name="author_email_address" class="input is-medium" placeholder="">
                        </div>
                    </div>
                </div>

                <div class="column is-12-mobile is-6-tablet is-6-desktop">
                    <div class="field has-text-left">
                        <label for="author_phone_number" class="label">Phone number</label>
                        <div class="field has-addons">
                            <p class="control">
                                <a class="button is-static is-medium" style="height: 50px">
                                +1
                                </a>
                            </p>
                            <p class="control is-expanded">
                                <input name="author_phone_number" class="input is-medium" type="tel">
                            </p>
                        </div>
                    </div>
                </div>

                <div class="column is-12-mobile is-12-tablet is-12-desktop">
                    <div class="field has-text-left">
                        <label for="author_message" class="label">Your message</label>
                        <div class="control">
                            <textarea name="author_message" class="textarea" placeholder="Enter your message here"></textarea>
                        </div>
                    </div>
                    <button type="submit" class="contact-us-btn btn-bordered button is-normal is-uppercase has-text-dark has-text-weight-semibold py-4 px-5 my-4">
                        <i class="fa-brands fa-rocketchat mr-2"></i>
                        Send message
                    </button>
                </div>
            </div>
            <script type="module" src="<?php echo base_url('assets/js/errors.js'); ?>"></script>
        </form>
    </div>
</div>