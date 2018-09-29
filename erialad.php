<?php require_once('couch/cms.php'); ?>
    <cms:embed "header.php" />

    <cms:template title='Erialade loend' order="2">
        <cms:editable name='osakond_tutvustus_title_ee' label="(EST) Osakonna tutvustuse lõigu pealkiri" order="1" type='text' />
        <cms:editable name='osakond_tutvustus_title_en' label="(ENG) Osakonna tutvustuse lõigu pealkiri" order="2" type='text' />
        <cms:editable name='osakond_tutvustus_ee' label="(EST) Osakonna tutvustus" order="3" type='richtext' />
        <cms:editable name='osakond_tutvustus_en' label="(ENG) Osakonna tutvustus" order="4" type='richtext' />
    </cms:template>

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
                                    <cms:get "eriala_title_<cms:show k_lang />" />
                                </h4>
                                <p class="mbr-text mbr-fonts-style display-7">
                                    <cms:excerpt count='15' ignore='img'>
                                        <cms:get "eriala_content_<cms:show k_lang />" />
                                    </cms:excerpt>
                                    <a href="<cms:show_with_lc k_page_link />">
                                        <cms:if k_lang='ee'>
                                            Tutvu lähemalt...
                                            <cms:else />
                                            Learn more...
                                        </cms:if>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </cms:pages>
            </div>
        </div>
    </section>

    <section class="section-second-title">
        <div class="container">
            <div class="media-container-row">
                <div class="title col-12 col-md-8">
                    <h2 class="align-center pb-3 mbr-fonts-style display-2">
                        <cms:get "osakond_tutvustus_title_<cms:show k_lang />" />
                    </h2>
                </div>
            </div>
        </div>
    </section>

    <section class="erialad-section">
        <div class="container">
            <div class="media-container-row">
                <div class="col-lg-12">
                    <div class="erialad-section-text mbr-fonts-style display-7">
                        <cms:get "osakond_tutvustus_<cms:show k_lang />" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <cms:embed "footer.php" />
<?php COUCH::invoke(); ?>