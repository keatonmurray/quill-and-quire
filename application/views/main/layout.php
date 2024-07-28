<?php $this->load->view('templates/header'); ?>
    
    <section id="home" class="hero is-fullheight full-page-background">
        <?php echo $homepage; ?>
    </section>

    <section id="on-sale" class="hero is-fullheight">
        <?php echo $on_sale; ?>
    </section>

    <section id="about-us">
        <?php echo $about_us; ?>
    </section>

    <section id="contact-us" class="hero is-fullheight">
        <?php echo $contact_us; ?>
    </section>
    <script src="<?php echo base_url('assets/js/errors.js'); ?>"></script>
    
<?php $this->load->view('templates/footer'); ?>
