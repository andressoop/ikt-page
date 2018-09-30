<?php require_once( 'couch/cms.php' ); ?>
    <cms:embed "header.php" />
    <cms:template title='Õppetöö' order="7">
        <cms:editable name='oppetoo1_title_ee' label="(EST) Lõigu pealkiri" order="1" type='text' />
        <cms:editable name='oppetoo1_title_en' label="(ENG) Lõigu pealkiri" order="2" type='text' />
        <cms:editable name='oppetoo1_content_ee' label="(EST) Lõigu tekst" order="3" type='richtext' />
        <cms:editable name='oppetoo1_content_en' label="(ENG) Lõigu tekst" order="4" type='richtext' />

        <cms:editable name='oppetoo2_title_ee' label="(EST) Lõigu pealkiri" order="5" type='text' />
        <cms:editable name='oppetoo2_title_en' label="(ENG) Lõigu pealkiri" order="6" type='text' />
        <cms:editable name='oppetoo2_content_ee' label="(EST) Lõigu tekst" order="7" type='richtext' />
        <cms:editable name='oppetoo2_content_en' label="(ENG) Lõigu tekst" order="8" type='richtext' />
    </cms:template>

    <section class="oppetoo-title">
        <div class="container">
            <div class="media-container-row">
                <div class="title col-12 col-md-8">
                    <h2 class="align-center pb-3 mbr-fonts-style display-2">
                        <cms:get "oppetoo1_title_<cms:show k_lang />" />
                    </h2>
                </div>
            </div>
        </div>
    </section>

    <section class="eriala-content">
        <div class="container">
            <div class="media-container-row">
                <div class="mbr-text counter-container col-12 col-md-8 mbr-fonts-style display-7">
                    <cms:get "oppetoo1_content_<cms:show k_lang />" />
                </div>
            </div>
        </div>
    </section>

    <section class="section-second-title">
           <div class="container">
            <div class="media-container-row">
                <div class="title col-12 col-md-8">
                    <h2 class="align-center pb-3 mbr-fonts-style display-2">
                        <cms:get "oppetoo2_title_<cms:show k_lang />" />
                    </h2>
                </div>
            </div>
        </div>
    </section>

    <section class="eriala-content">
        <div class="container">
            <div class="media-container-row">
                <div class="mbr-text counter-container col-12 col-md-8 mbr-fonts-style display-7">
                    <cms:get "oppetoo2_content_<cms:show k_lang />" />
                </div>
            </div>
        </div>
    </section>

    <cms:embed "footer.php" />
<?php COUCH::invoke(); ?>