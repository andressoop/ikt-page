<?php require_once( 'couch/cms.php' ); ?>
    <cms:embed "header.php" />

    <cms:template title='Praktika' order="6" clonable="1">
        <cms:editable name="group_praktika" label="Praktika alaleht" type="group"/>
            <cms:editable name='praktikad_title_ee' label="(EST) Pealkiri" group="group_praktika" order="1" type='text' />
            <cms:editable name='praktikad_title_en' label="(ENG) Pealkiri" group="group_praktika" order="2" type='text' />
            <cms:editable name='praktikad_content_ee' label="(EST) Sisu" group="group_praktika" order="3" type='richtext' />
            <cms:editable name='praktikad_content_en' label="(ENG) Sisu" group="group_praktika" order="4" type='richtext' />
    </cms:template>

    <section class="mbr-section content4 eriala-head" id="content4-16">
        <div class="container">
            <div class="media-container-row">
                <div class="title col-12 col-md-8">

                </div>
            </div>
        </div>
    </section>

    <section class="blog-posts">
        <div class="container">
            <div class="row">

                <!-- Lehe sisu -->
                <div class="col-lg-9 col-md-9 col-sm-12">
                    <div class="container blog-posts">
                        <cms:if k_is_page>

                            <div class="media-container-row">
                                <div class="title col-md-10">
                                    <h2 class="align-center pb-3 mbr-fonts-style display-2">
                                        <cms:get "praktikad_title_<cms:show k_lang />" />
                                    </h2>
                                </div>
                            </div>
                            <div class="media-container-row">
                                <div class="mbr-text col-md-10 mbr-fonts-style display-7 blog-article">
                                    <cms:get "praktikad_content_<cms:show k_lang />" />
                                </div>
                            </div>

                        <cms:else />

                            <cms:pages masterpage='praktika.php'
                                       start_on=k_archive_date
                                       stop_before=k_next_archive_date
                                       limit='1' >
                                <div class="media-container-row">
                                    <div class="title col-md-10">
                                        <h2 class="align-center pb-3 mbr-fonts-style display-2">
                                            <cms:get "praktikad_title_<cms:show k_lang />" />
                                        </h2>
                                    </div>
                                </div>
                                <div class="media-container-row">
                                    <div class="mbr-text col-md-10 mbr-fonts-style display-7 blog-article">
                                        <cms:get "praktikad_content_<cms:show k_lang />" />
                                    </div>
                                </div>
                            </cms:pages>

                        </cms:if>
                    </div>
                </div>

                <!--  Lehtede lingid  -->
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <div class="container">
                        <div class="media-container-sidebar">
                            <div class="mbr-text mbr-fonts-style display-7">
                                <div class="sidebar-title">
                                    <cms:get_custom_field "praktika_<cms:show k_lang />" masterpage='translations.php' />
                                </div>
                                <ul class="sidebar-menu">
                                    <cms:pages masterpage='praktika.php'>
                                        <cms:if k_lang='ee'>
                                            <li class="list-group"><a href="<cms:show_with_lc k_page_link />"><cms:get "praktikad_title_<cms:show k_lang />" /></a></li>
                                            <cms:else />
                                            <li class="list-group"><a href="<cms:show_with_lc k_page_link />"><cms:get "praktikad_title_<cms:show k_lang />" /></a></li>
                                        </cms:if>
                                    </cms:pages>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <cms:embed "footer.php" />
<?php COUCH::invoke(); ?>