<?php require_once( 'couch/cms.php' ); ?>
    <cms:embed "header.php" />

    <cms:template title='Uudised' order="4" clonable='1' commentable='1'>
        <cms:editable name="group_uudised" label="Uudis" type="group"/>
            <cms:editable name='uudis_title_ee' label="(EST) Uudise pealkiri" group="group_uudised" order="1" type='text'/>
            <cms:editable name='uudis_title_en' label="(ENG) Uudise pealkiri" group="group_uudised" order="2" type='text'/>
            <cms:editable name='uudis_content_ee' label="(EST) Uudise sisu" group="group_uudised" order="3" type='richtext'/>
            <cms:editable name='uudis_content_en' label="(ENG) Uudise sisu" group="group_uudised" order="4" type='richtext'/>
            <cms:editable name='blog_image' group="group_uudised" order="5" label="Pilt"
               crop='1'
               width='640'
               height='400'
               type='image'
            />
    </cms:template>

    <cms:if k_is_page >
    <section class="mbr-section content4 eriala-head">

        <div class="container">
            <div class="media-container-row">
                <div class="title col-12 col-md-8">
                    <h2 class="align-center pb-3 mbr-fonts-style display-2">
                        <cms:get "uudis_title_<cms:show k_lang />" />
                    </h2>
                </div>
            </div>
        </div>
    </section>

    <section class="mbr-section article content1 blog-posts">

        <div class="container ">
            <div class="media-container-row">
                <div class="mbr-text col-12 col-md-8 mbr-fonts-style display-7 blog-article">
                    <cms:if k_lang='ee'>
                        <p class="align-right">Postitatud <cms:date k_page_date format='%d. %B %Y' locale="estonian" charset="ISO-8859-4" /></p>
                        <cms:else />
                        <p class="align-right">Posted on <cms:date k_page_date format='%d %B %Y' locale="english" charset="ISO-8859-4" /></p>
                    </cms:if>
                    <img class="thumb" src="<cms:show blog_image />" alt=""/>
                    <cms:get "uudis_content_<cms:show k_lang />" />

                    <!-- Comments -->
                    <div class="comment-section">
                        <cms:if k_comments_count >
                            <h2>
                                <cms:if k_lang='ee'>
                                    Kommentaarid
                                    <cms:else />
                                    Comments
                                </cms:if>
                            </h2>
                            <ol class="comment-ol">
                                <cms:comments page_id=k_page_id order='asc'>
                                    <li>
                                        <div>
                                            <cms:gravatar email="<cms:show k_comment_author_email />" size="60" />
                                            <a name="<cms:show k_comment_anchor />"
                                        </div>
                                        <div>
                                            <div>
                                                <div><cms:show k_comment_author /></div>
                                                <div class="comment-date">
                                                    <cms:if k_lang='ee'>
                                                        <cms:date k_comment_date format='%d. %B %Y' locale="estonian" charset="ISO-8859-4"/>
                                                        <cms:else />
                                                        <cms:date k_comment_date format='%d. %B %Y' locale="english" charset="ISO-8859-4"/>
                                                    </cms:if>
                                                </div>
                                            </div>
                                            <div>
                                                <p><cms:show k_comment /></p>
                                                <hr>
                                            </div>
                                        </div>
                                    </li>
                                </cms:comments>
                            </ol>
                        </cms:if>

                        <cms:embed 'comment-form.inc' />
                    </div>
                    <div class="mbr-text col-12 col-md-8 mbr-fonts-style display-7">
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
        </div>

    </section>
    <cms:else />
        <cms:embed 'postitused.php' />
    </cms:if>

    <cms:embed "footer.php" />
<?php COUCH::invoke(); ?>