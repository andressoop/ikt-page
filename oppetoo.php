<?php require_once( 'couch/cms.php' ); ?>
    <cms:embed "header.php" />

    <cms:template title='Õppetöö' order="7" />

    <section class="oppetoo-title">
        <div class="container">
            <div class="media-container-row">
                <div class="title col-12 col-md-8">
                    <h2 class="align-center pb-3 mbr-fonts-style display-2">
                        <cms:editable name='oppetoo_title_first' label="Lõigu pealkiri" type='text'>Õppematerjalid</cms:editable>
                    </h2>
                </div>
            </div>
        </div>
    </section>

    <section class="eriala-content">
        <div class="container">
            <div class="media-container-row">
                <div class="mbr-text counter-container col-12 col-md-8 mbr-fonts-style display-7">
                    <cms:editable name='oppetoo_body_first' label="Lõigu tekst" type='richtext'>

                    </cms:editable>
                </div>
            </div>
        </div>
    </section>

    <section class="section-second-title">
           <div class="container">
            <div class="media-container-row">
                <div class="title col-12 col-md-8">
                    <h2 class="align-center pb-3 mbr-fonts-style display-2">
                        <cms:editable name='oppetoo_title_second' label="Lõigu pealkiri" type='text'>Konsultatsiooniajad</cms:editable>
                    </h2>
                </div>
            </div>
        </div>
    </section>

    <section class="eriala-content">
        <div class="container">
            <div class="media-container-row">
                <div class="mbr-text counter-container col-12 col-md-8 mbr-fonts-style display-7">
                    <cms:editable name='oppetoo_body_second' label="Lõigu tekst" type='richtext'>

                    </cms:editable>
                </div>
            </div>
        </div>
    </section>

    <cms:embed "footer.php" />
<?php COUCH::invoke(); ?>