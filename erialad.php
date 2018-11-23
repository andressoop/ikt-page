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
    <cms:folder name="pohiharidus" title="Põhihariduse baasil" />
    <cms:folder name="keskharidus" title="Keskhariduse baasil" />

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
                                        <cms:get "eriala_title_<cms:show k_lang />" />
                                    </h2>
                                </div>
                            </div>
                            <div class="media-container-row">
                                <div class="mbr-text col-md-10 mbr-fonts-style display-7 blog-article">
                                    <img class="thumb" src="<cms:show eriala_image />" alt=""/>
                                    <cms:get "eriala_content_<cms:show k_lang />" />
                                </div>
                            </div>

                        <cms:else />

                            <cms:pages masterpage='osakond.php'>
                                <div class="media-container-row">
                                    <div class="title col-md-10">
                                        <h2 class="align-center pb-3 mbr-fonts-style display-2">
                                            <cms:get "osakond_tutvustus_title_<cms:show k_lang />" />
                                        </h2>
                                    </div>
                                </div>
                                <div class="media-container-row">
                                    <div class="mbr-text col-md-10 mbr-fonts-style display-7 blog-article">
                                        <cms:get "osakond_tutvustus_<cms:show k_lang />" />
                                        <div class="google-map"><iframe frameborder="0" style="border:0;width:100%;height:360px;" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0Dx_boXQiwvdz8sJHoYeZNVTdoWONYkU&amp;q=place_id:ChIJR-nJ6Ec360YRyJmdPEJhxMs" allowfullscreen=""></iframe></div>
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
                                    Keskhariduse baasil
                                </div>
                                <ul class="sidebar-menu">
                                    <cms:pages folder='keskharidus'>
                                        <cms:if k_lang='ee'>
                                            <li class="list-group"><a href="<cms:show_with_lc k_page_link />"><cms:get "eriala_title_<cms:show k_lang />" /></a></li>
                                            <cms:else />
                                            <li class="list-group"><a href="<cms:show_with_lc k_page_link />"><cms:get "eriala_title_<cms:show k_lang />" /></a></li>
                                        </cms:if>
                                    </cms:pages>
                                </ul>
                                <div class="sidebar-title">
                                    Põhihariduse baasil
                                </div>
                                <ul class="sidebar-menu">
                                    <cms:pages folder='pohiharidus'>
                                            <cms:if k_lang='ee'>
                                                <li class="list-group"><a href="<cms:show_with_lc k_page_link />"><cms:get "eriala_title_<cms:show k_lang />" /></a></li>
                                                <cms:else />
                                                <li class="list-group"><a href="<cms:show_with_lc k_page_link />"><cms:get "eriala_title_<cms:show k_lang />" /></a></li>
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