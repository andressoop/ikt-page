<?php require_once('couch/cms.php'); ?>
    <cms:embed "header.php" />

    <cms:template title='Erialad' order="3" clonable='1'>
        <cms:editable name="group_erialad" label="Eriala tutvustus" type="group"/>
            <cms:editable name='eriala_title_ee' label="(EST) Eriala nimetus" group="group_erialad" order="1" type='text'/>
            <cms:editable name='eriala_title_en' label="(ENG) Eriala nimetus" group="group_erialad" order="2" type='text'/>
            <cms:editable name='eriala_content_ee' label="(EST) Eriala kirjeldus" group="group_erialad" order="3" type='richtext'/>
            <cms:editable name='eriala_content_en' label="(ENG) Eriala kirjeldus" group="group_erialad" order="4" type='richtext'/>
            <cms:editable name='eriala_image' group="group_erialad" order="5" label="Pilt"
                      crop='1'
                      width='640'
                      height='400'
                      type='image'
            />
    </cms:template>

    <cms:if k_is_page>
        <section class="eriala-head">
            <div class="container">
                <div class="media-container-row">
                    <div class="title col-12 col-md-8">
                        <h2 class="align-center pb-3 mbr-fonts-style display-2">
                            <cms:get "eriala_title_<cms:show k_lang />" />
                        </h2>
                    </div>
                </div>
            </div>
        </section>

        <section class="eriala-content">
            <div class="container">
                <div class="media-container-row">
                    <div class="mbr-text counter-container col-12 col-md-8 mbr-fonts-style display-7">
                        <img class="thumb" src="<cms:show eriala_image />" alt=""/>
                        <cms:get "eriala_content_<cms:show k_lang />" />
                    </div>
                    <div class="mbr-text back-button col-12 col-md-8 mbr-fonts-style display-7">
                        <a href="#" onclick="goBack()">
                            <cms:if k_lang='ee'>
                                Tagasi
                                <cms:else />
                                Go back
                            </cms:if>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </cms:if>

    <cms:embed "footer.php" />
<?php COUCH::invoke(); ?>