<!-- Contact form -->
<div class="contact-form">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="contact-form__heading">
                    <h2>Masz pytania? Pisz śmiało :)</h2>
                </div>
            </div>
            <div class="col-lg-9">
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
                                       data-form-pattern="Porszę podać poprawny adres email"
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
                                  class="form-group__input"
                                  autocomplete="off"
                                  name="message"
                                  data-form-control
                                  data-form-required="Proszę wprowadzić wiadomość"
                                  required></textarea>
                    </div>
                    <div class="form-group">
                        <label>
                            <input data-form-control type="checkbox" required> Wyrażam zgodę na przetwarzanie danych osobowych
                            zgodnie z ustawą o ochronie danych osobowych w związku z wysyłaniem zapytania przez formularz kontaktowy.
                            Podanie danych jest dobrowolne, ale niezbędne do przetworzenia zapytania. Zostałem poinformowany, że przysługuje mi prawo dostępu do swoich danych,
                            możliwości ich poprawienia, żądania zaprzestania ich przetwarzania. Administratorem danych osobowych jest osoba prywatna Przemysław Chudziński.
                        </label>
                    </div>
                    <button id="contactFormBtn" type="button" class="button button__primary">Wyślij</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- END: Contact form -->
