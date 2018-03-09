<?php require_once( 'couch/cms.php' ); 
include('header.php'); ?>
<cms:template title='Erialad' />

<section class="mbr-section article content9 cid-qLB6TkMqUd" id="content9-y">
    
     

    <div class="container">
        <div class="inner-container" style="width: 100%;">
            <hr class="line" style="width: 25%;">
            <div class="section-text align-center mbr-fonts-style display-5"><cms:editable name='eriala_intro' type='richtext'>
            Osakonnas õpetavad erialaaineid mitmed kogemustega erialaspetsialistid, õppetöö raames teostavad õpilased erinevaid erialaprojekte.  Muutused IKT valdkonnas on kiired ja eeldavad pidevat enesetäiendamist. Osakonna tugevuseks on avatus uutele ideedele ja koostöövõrgustik erinevate Eesti ja Euroopa koolidega.
            </cms:editable></div>
            <hr class="line" style="width: 25%;">
        </div>
        </div>
</section>        


<section class="features2 cid-qLB6deAUgw" id="features2-v">

    <div class="container">
        <div class="media-container-row">
           <cms:pages masterpage='eriala_post.php'>
            <div class="card p-3 col-12 col-md-6 col-lg-4">
                <div class="card-wrapper">
                    <div class="card-img">
                        <img src="<cms:show eriala_image />" alt="">
                    </div>
                    <div class="card-box">
                        <h4 class="card-title pb-3 mbr-fonts-style display-7">
                           <cms:show k_page_title /></h4>
                        <p class="mbr-text mbr-fonts-style display-7">
                            <cms:excerpt count='15' ignore='img'><cms:show eriala_content /></cms:excerpt> <a href="<cms:show k_page_link />">Tutvu lähemalt...</a>
                        </p>
                    </div>
                </div>
            </div>
            </cms:pages>
        </div>
    </div>
</section>


<?php COUCH::invoke();
include('footer.php'); ?>