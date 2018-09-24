<?php require_once('couch/cms.php'); ?>
    <cms:embed "header.php" />

    <cms:template title='Erialade loend' order="2"/>

    <section class="erialad-list">

        <div class="container">
            <div class="media-container-row">
                <cms:pages masterpage='eriala.php'>
                    <div class="card p-3 col-12 col-md-6 col-lg-4">
                        <div class="card-wrapper">
                            <div class="card-img">
                                <img src="<cms:show eriala_image />" alt="">
                            </div>
                            <div class="card-box">
                                <h4 class="card-title pb-3 mbr-fonts-style display-7">
                                    <cms:show k_page_title/>
                                </h4>
                                <p class="mbr-text mbr-fonts-style display-7">
                                    <cms:excerpt count='15' ignore='img'>
                                        <cms:show eriala_content/>
                                    </cms:excerpt>
                                    <a href="<cms:show k_page_link />">Tutvu lähemalt...</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </cms:pages>
            </div>
        </div>
    </section>

    <section class="erialad-section">
        <div class="container">
            <div class="inner-container" style="width: 100%;">
                <hr class="line" style="width: 25%;">
                <div class="section-text align-center mbr-fonts-style display-5">
                    <cms:editable name='eriala_intro' label="Eriala intro" type='richtext'>

                    </cms:editable>
                </div>
                <hr class="line" style="width: 25%;">
            </div>
        </div>
    </section>

    <section class="erialad-section">
        <div class="container">
            <div class="media-container-row">
                <div class="col-lg-12">
                    <div class="section-text mbr-fonts-style display-7">
                        <cms:editable name='osakonna_tutvustus' label="Osakonna tutvustus" type='richtext'>

                        </cms:editable>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <cms:embed "footer.php" />
<?php COUCH::invoke(); ?>