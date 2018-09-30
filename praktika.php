<?php require_once( 'couch/cms.php' ); ?>
    <cms:embed "header.php" />
    <cms:template title='Praktika' order="6">
        <cms:editable name='praktika_title_ee' label="(EST) Lõigu pealkiri" order="1" type='text' />
        <cms:editable name='praktika_title_en' label="(ENG) Lõigu pealkiri" order="2" type='text' />
        <cms:editable name='praktika_content_ee' label="(EST) Lõigu tekst" order="3" type='richtext' />
        <cms:editable name='praktika_content_en' label="(ENG) Lõigu tekst" order="4" type='richtext' />
    </cms:template>

    <section class="praktika-title">
        <div class="container">
            <div class="media-container-row">
                <div class="title col-12 col-md-8">
                    <h2 class="align-center pb-3 mbr-fonts-style display-2">
                        <cms:get "praktika_title_<cms:show k_lang />" />
                    </h2>
                </div>
            </div>
        </div>
    </section>

    <section class="praktika-body">
        <div class="container">
            <div class="media-container-row">
                <div class="mbr-text counter-container col-12 col-md-8 mbr-fonts-style display-7">
                    <cms:get "praktika_content_<cms:show k_lang />" />
                </div>
            </div>
        </div>
    </section>

    <cms:embed "footer.php" />
<?php COUCH::invoke(); ?>