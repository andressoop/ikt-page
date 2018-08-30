<?php require_once('couch/cms.php');
include('header.php'); ?>
    <cms:template title='Erialad' clonable='1'>
        <cms:editable name='eriala_content' type='richtext'/>
        <cms:editable name='eriala_image'
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
                            <cms:show k_page_title/>
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
                        <cms:show eriala_content/>
                    </div>
                    <div class="mbr-text col-12 col-md-8 mbr-fonts-style display-7">
                        <a href="#" onclick="goBack()">Tagasi</a>
                    </div>
                </div>
            </div>
        </section>
    </cms:if>

<?php COUCH::invoke();
include('footer.php'); ?>