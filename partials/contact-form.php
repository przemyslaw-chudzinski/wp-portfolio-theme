<?php

$contactFormHeader = themeRedux('th-contactForm-header');
$contactFormSubheader = themeRedux('th-contactForm-subheader');
$contactFormRodo = themeRedux('th-contactForm-rodo');

?>

<!-- Contact form -->
<div class="contact-form">

    <div class="u-text-center">
        <div class="theme-heading theme-heading--with-underline theme-heading--with-underline-centered u-uppercase">
            <?php if($contactFormHeader): ?>
                <h2 class="theme-heading__text"><?= $contactFormHeader ?></h2>
            <?php endif; ?>
            <?php if($contactFormSubheader): ?>
                <div class="theme-heading__subtext"><?= $contactFormSubheader ?></div>
            <?php endif; ?>
        </div>
    </div>

    <form id="contactForm" class="form" novalidate data-site-url="<?= get_site_url(); ?>">

        <div data-form-message></div>
        <div class="row">
            <div class="col-12 col-lg-4">
                <div class="form-group">
                    <label for="name" class="form-group__label">Imię i Nazwisko *</label>
                    <input id="name"
                           type="text"
                           class="form-group__input"
                           autocomplete="off"
                           name="name"
                           required
                           data-form-control
                           data-form-required="Proszę podać imię i nazwisko">
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="form-group">
                    <label for="email" class="form-group__label">Adres email *</label>
                    <input id="email"
                           type="email"
                           name="email"
                           class="form-group__input"
                           autocomplete="off"
                           pattern="^(([^<>()\[\]\\.,;:\s@']+(\.[^<>()\[\]\\.,;:\s@']+)*)|('.+'))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$"
                           data-form-control
                           data-form-pattern="Proszę podać poprawny adres email"
                           data-form-required="Proszę podać adres email"
                           required>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="form-group">
                    <label for="phone" class="form-group__label">Numer telefonu</label>
                    <input id="phone"
                           type="text"
                           name="phone"
                           class="form-group__input"
                           data-form-control
                           autocomplete="off">
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="message" class="form-group__label">Wiadmość *</label>
            <textarea rows="7"
                      id="message"
                      class="form-group__input"
                      autocomplete="off"
                      name="message"
                      data-form-control
                      data-form-required="Proszę wprowadzić wiadomość"
                      required></textarea>
        </div>
        <div class="form-group">
            <div class="form-group__checkbox">
                <input id="confirmRules" data-form-control type="checkbox" required>
                <label for="confirmRules" class="form-group__checkbox-label">
                    <?= $contactFormRodo ?>
                </label>
            </div>
        </div>
        <button id="contactFormBtn" type="button" class="theme-button theme-button--secondary theme-button--with-icon u-uppercase"><strong>Wyślij wiadomość</strong></button>
    </form>
</div>
<!-- END: Contact form -->
