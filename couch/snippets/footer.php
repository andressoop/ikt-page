                  
        <section class="footer">

            <div class="container">
                <div class="media-container-row content mbr-white">
                    <div class="col-12 col-md-3 mbr-fonts-style display-7">
                        <p class="mbr-text">
                            <cms:get_custom_field 'address' masterpage='globals.php' />
                        </p>
                    </div>
                    <div class="col-12 col-md-3 mbr-fonts-style display-7">
                        <p class="mbr-text">
                            <cms:get_custom_field 'links' masterpage='globals.php' />
                        </p>
                        <div class="footer-lower">
                            <div class="social-list">
                                <div class="soc-item">
                                    <a href="https://facebook.com/kutseharidus" target="_blank">
                                        <span class="mbr-iconfont mbr-iconfont-social socicon-facebook"></span>
                                    </a>
                                </div>
                                <div class="soc-item">
                                    <a href="https://www.youtube.com/user/kutseharidus" target="_blank">
                                        <span class="mbr-iconfont mbr-iconfont-social socicon-youtube"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="google-map"><iframe frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0Dx_boXQiwvdz8sJHoYeZNVTdoWONYkU&amp;q=place_id:ChIJR-nJ6Ec360YRyJmdPEJhxMs" allowfullscreen=""></iframe></div>
                    </div>
                </div>
                <div class="footer-lower">
                    <div class="media-container-row">
                        <div class="col-sm-12">
                            <hr>
                        </div>
                    </div>
                    <div class="media-container-row mbr-white">
                        <div class="col-sm-12 copyright">
                            <p class="mbr-text mbr-fonts-style display-7">
                                © Aasta Tegija 2018 veebimeistrite võidutöö, mille valmistasid <a href="https://www.linkedin.com/in/sandraonne/" target="_blank">Sandra Õnne</a> ja <a href="https://www.linkedin.com/in/andressoop/" target="_blank">Andres Soop</a>.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

<!--            Floating contact form -->
            <button class="btn-primary float-button"><span class="mbri-letter float-button-inner"></span></button>

            <div id="contact-form" class="modal fade" role="dialog">
                <div class="modal-dialog modal-md">

                    <div class="modal-content">
                        <div class="modal-header justify-content-center">
                            <h4 class="modal-title">Kirjuta meile</h4>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="../../contact.php" class="needs-validation" novalidate>
                                <div class="form-group">
                                    <input type="text" class="form-control form-field" name="name" placeholder="Ees- ja perekonnanimi"  required>
                                    <div class="invalid-feedback">
                                        Palun sisestage oma nimi.
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-field" name="email" placeholder="Sinu e-posti aadress"  required>
                                    <div class="invalid-feedback">
                                        Palun sisestaga korrektne e-posti aadress, et saaksime teile vastata.
                                    </div>
                                </div>
                                <div class="form-group">
                                    <textarea type="text" class="form-control form-field" name="message" placeholder="Kirja sisu" row="5" required></textarea>
                                    <div class="invalid-feedback">
                                        Palun lisage kirjale ka sisu.
                                    </div>
                                </div>
                                <div class="form-group mbr-section-btn text-center">
                                    <button type="submit" class="btn btn-secondary display-4">Saada</button>
                                </div>
                                <div class="messages"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </section>


        <script src="assets/web/assets/jquery/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="assets/popper/popper.min.js"></script>
        <script src="assets/tether/tether.min.js"></script>
        <script src="assets/smoothscroll/smooth-scroll.js"></script>
        <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
        <script src="assets/ytplayer/jquery.mb.ytplayer.min.js"></script>
        <script src="assets/vimeoplayer/jquery.mb.vimeo_player.js"></script>
        <script src="assets/dropdown/js/script.min.js"></script>
        <script src="assets/theme/js/script.js"></script>


    </body>
</html>