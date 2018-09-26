<?php require_once( 'couch/cms.php' ); ?>
    <cms:embed "header.php" />

    <cms:template title='Uudised' order="4" clonable='1' commentable='1'>
           <cms:editable name='blog_content' label="Uudise sisu" type='richtext' />
           <cms:editable name='blog_image' label="Pilt"
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
                    <h2 class="align-center pb-3 mbr-fonts-style display-2"><cms:show k_page_title /></h2>
                </div>
            </div>
        </div>
    </section>

    <section class="mbr-section article content1 blog-posts">

        <div class="container ">
            <div class="media-container-row">
                <div class="mbr-text col-12 col-md-8 mbr-fonts-style display-7 blog-article">
                    <p class="align-right">Postitatud <cms:date k_page_date format='%d. %B %Y' locale="estonian" charset="ISO-8859-4" /></p>
                    <img class="thumb" src="<cms:show blog_image />" alt=""/>
                    <cms:show blog_content />

                    <!-- Comments -->
                    <div class="comment-section">
                        <cms:if k_comments_count >
                            <h2>Kommentaarid</h2>
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
                                                <div class="comment-date"><cms:date k_comment_date format='%d. %B %Y' locale="estonian" charset="ISO-8859-4"/></div>
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
                        <a href="#" onclick="goBack()">Tagasi</a>
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