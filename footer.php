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
                <form class="form">
                    <div class="row">
                        <div class="col-12 col-lg-4">
                            <div class="form-group">
                                <label for="name" class="form-group__label">Imię i Nazwisko</label>
                                <input id="name" type="text" class="form-group__input" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-12 col-lg-4">
                            <div class="form-group">
                                <label for="email" class="form-group__label">Adres email</label>
                                <input id="email" type="email" class="form-group__input" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-12 col-lg-4">
                            <div class="form-group">
                                <label for="phone" class="form-group__label">Number telefonu</label>
                                <input id="phone" type="text" class="form-group__input" autocomplete="off">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="message" class="form-group__label">Wiadmość</label>
                        <textarea rows="7" class="form-group__input" autocomplete="off"></textarea>
                    </div>
                    <button type="submit" class="button button__primary">Wyślij</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- END: Contact form -->
<footer class="footer">
    <div class="container">
        Built By <a href="http://przemyslawchudzinski.pl">Przemysław Chudziński</a>
    </div>
</footer>
<!-- Scripts -->
<script src="js/app.js"></script>
<?= wp_footer(); ?>
</body>
</html>
