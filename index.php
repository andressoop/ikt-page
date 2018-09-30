<?php require_once('couch/cms.php'); ?>
    <cms:embed "header.php" />
    <cms:template title='Avaleht' order="1">
        <cms:editable name='main_title_ee' label="(EST) Lehe pealkiri / hüüdlause" order="1" type='text' />
        <cms:editable name='main_title_en' label="(ENG) Lehe pealkiri / hüüdlause" order="2" type='text' />

        <cms:editable name="group_main_button" label="Pealkirja nupp" desc="Lehe hüüdlause all oleva nupu seadistamine" order="3" type="group"/>
            <cms:editable name="main_button_text_ee" label="(EST) Nupu tekst" group="group_main_button" order="1" type="text" />
            <cms:editable name="main_button_text_en" label="(ENG) Nupu tekst" group="group_main_button" order="2" type="text" />
            <cms:editable name="main_button_link_ee" label="(EST) Nupu URL" group="group_main_button" order="3" type="text" />
            <cms:editable name="main_button_link_en" label="(ENG) Nupu URL" group="group_main_button" order="4" type="text" />

        <cms:editable name='osakonna_intro_ee' label="(EST) Osakonna lühike tutvustus" order="4" type='richtext' />
        <cms:editable name='osakonna_intro_en' label="(ENG) Osakonna lühike tutvustus" order="5" type='richtext' />
    </cms:template>

    <!-- Avakuva koos videoga -->
    <section class="mbr-fullscreen">

        <div class="mbr-overlay" style="opacity: 0.2; background-color: rgb(46, 46, 46);"></div>
        <div class="container align-center">
            <div class="row justify-content-md-center">
                <div class="mbr-white col-md-10 title-area">
                    <h1 class="mbr-section-title mbr-bold pb-3 mbr-fonts-style display-1">
                        <cms:get "main_title_<cms:show k_lang />" />
                    </h1>
                    <div class="mbr-section-btn">
                        <a class="btn btn-md btn-secondary display-4" href="<cms:link masterpage="<cms:get "main_button_link_<cms:show k_lang />" />" />">
                            <cms:get "main_button_text_<cms:show k_lang />" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="mbr-arrow hidden-sm-down" aria-hidden="true">
            <a href="#featured-intro">
                <i class="mbri-down mbr-iconfont"></i>
            </a>
        </div>

    </section>

    <section class="features-intro" id="featured-intro">
        <div class="container">
            <div class="inner-container" style="width: 100%;">
                <hr class="line" style="width: 25%;">
                <div class="section-text align-center mbr-fonts-style display-5">
                    <cms:get "osakonna_intro_<cms:show k_lang />" />
                </div>
                <hr class="line" style="width: 25%;">
            </div>
        </div>
    </section>

    <!-- Uudised -->
    <section class="features" id="features-news">

        <div class="container">
            <div class="media-container-row">
                <cms:pages masterpage='uudised.php' paginate='1' limit='3'>
                    <div class="card p-3 col-12 col-md-6 col-lg-4">
                        <div class="card-wrapper">
                            <div>
                                <div class="card-img">
                                    <img src="<cms:show blog_image />" alt="">
                                </div>
                                <div class="card-box">
                                    <h4 class="card-title mbr-fonts-style display-7">
                                        <cms:get "uudis_title_<cms:show k_lang />" />
                                    </h4>
                                    <p class="mbr-text mbr-fonts-style display-7">
                                        <cms:excerpt count='15' ignore='img'>
                                            <cms:get "uudis_content_<cms:show k_lang />" />
                                        </cms:excerpt>
                                    </p>
                                </div>
                            </div>
                            <div class="mbr-section-btn text-center">
                                <a href="<cms:show k_page_link />" class="btn btn-secondary display-4">
                                    <cms:if k_lang='ee'>
                                        Loe lähemalt
                                        <cms:else />
                                        Read more
                                    </cms:if>
                                </a>
                            </div>
                        </div>
                    </div>
                </cms:pages>
            </div>
        </div>

    </section>

    <cms:embed "footer.php" />
<?php COUCH::invoke(); ?>