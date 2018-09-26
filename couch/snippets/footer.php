                  
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
                                <cms:set facebook_id="<cms:get_custom_field 'facebook_id' masterpage='globals.php' />" />
                                <cms:set youtube_id="<cms:get_custom_field 'youtube_id' masterpage='globals.php' />" />
                                <cms:set twitter_id="<cms:get_custom_field 'twitter_id' masterpage='globals.php' />" />
                                <cms:set instagram_id="<cms:get_custom_field 'instagram_id' masterpage='globals.php' />" />

                                <cms:if facebook_id>
                                    <div class="soc-item">
                                        <a href="<cms:show facebook_id />">
                                            <span class="mbr-iconfont mbr-iconfont-social socicon-facebook"></span>
                                        </a>
                                    </div>
                                </cms:if>
                                <cms:if facebook_id>
                                    <div class="soc-item">
                                        <a href="<cms:show youtube_id />">
                                            <span class="mbr-iconfont mbr-iconfont-social socicon-youtube"></span>
                                        </a>
                                    </div>
                                </cms:if>
                                <cms:if twitter_id>
                                    <div class="soc-item">
                                        <a href="<cms:show twitter_id />">
                                            <span class="mbr-iconfont mbr-iconfont-social socicon-twitter"></span>
                                        </a>
                                    </div>
                                </cms:if>
                                <cms:if instagram_id>
                                    <div class="soc-item">
                                        <a href="<cms:show instagram_id />">
                                            <span class="mbr-iconfont mbr-iconfont-social socicon-instagram"></span>
                                        </a>
                                    </div>
                                </cms:if>
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
                                © Aasta Tegija 2018 veebimeistrite võidutöö, mille valmistasid <a href="https://www.linkedin.com/in/sandraonne/">Sandra Õnne</a> ja <a href="https://www.linkedin.com/in/andressoop/" target="_blank">Andres Soop</a>.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<!--            Floating contact form -->
        <button class="btn-primary float-button"><span class="mbri-letter float-button-inner"></span></button>

        <div id="contact-form" class="modal fade" role="dialog">
            <cms:form action="" method="post" id="contact-form-cms">
                <div class="modal-dialog modal-md">
                    <div class="modal-content">
                        <div class="modal-header justify-content-center">
                            <h4 class="modal-title">Kirjuta IKT osakonnale</h4>
                        </div>
                        <div class="modal-body">
                            <cms:capture into='my_buffer'>
                                <div class="form-group">
                                    <cms:input type="text" class="form-control form-field" name="name" id="name" placeholder="Ees- ja perekonnanimi"  required="1" />
                                    <cms:if k_error_name>
                                        <div class="form-error">
                                            Palun sisestage oma nimi.
                                        </div>
                                    </cms:if>
                                </div>
                                <div class="form-group">
                                    <cms:input type="text" class="form-control form-field" name="email" id="email" placeholder="Sinu e-posti aadress"  required="1" validator="email" />
                                    <cms:if k_error_email>
                                        <div class="form-error">
                                            Palun sisestaga korrektne e-posti aadress.
                                        </div>
                                    </cms:if>
                                </div>
                                <div class="form-group">
                                    <cms:input type="textarea" class="form-control form-field" name="message" id="message" placeholder="Kirja sisu" row="5" required="1" />
                                    <cms:if k_error_message>
                                        <div class="form-error">
                                            Palun lisage kirjale ka sisu.
                                        </div>
                                    </cms:if>
                                </div>
                            </cms:capture>

                            <cms:if k_success >
                                <p id='mail_success' class='form-success'>Kiri saadetud. Vastame teile peatselt.</p>

                                <cms:send_mail debug='1' from=k_email_from to=k_email_to subject='IKT lehe kaudu saabus kiri'>
                                    <cms:show k_success />
                                </cms:send_mail>

                                <cms:else />
                                    <cms:show my_buffer />
                            </cms:if>

                            <div class="modal-footer mbr-section-btn text-center">
                                <cms:if "<cms:not k_success />" >
                                    <button type="submit" class="btn btn-secondary display-4">Saada</button>
                                </cms:if>
                            </div>

                        </div>
                    </div>
                </div>
            </cms:form>
        </div>




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