<?php require_once( 'couch/cms.php' ); 
include('header.php'); ?>
<cms:template title='Avaleht' />


<!--     Desktop only -->
        <section class="cid-qLAG2bmASf mbr-fullscreen desktop-only" data-bg-video=´<cms:editable name='main_video' type='richtext'>https://www.youtube.com/embed/a_IuD6VioIs</cms:editable>?rel=0&amp;showinfo=0&amp;autoplay=1&amp;loop=1´ id="header2-f" >
        
        
        <div class="mbr-overlay" style="opacity: 0.3; background-color: rgb(46, 46, 46);"></div>

        <div class="container align-center">
            <div class="row justify-content-md-center">
                <div class="mbr-white col-md-10">
                    <h1 class="mbr-section-title mbr-bold pb-3 mbr-fonts-style display-1"><cms:editable name='main_title' type='richtext'>INFO- JA KOMMUNIKATSIOONITEHNOLOOGIA OSAKOND</cms:editable></h1>
                    
                    <p class="mbr-text pb-3 mbr-fonts-style display-5">
                    <cms:editable name='main_tag' type='richtext'>
                    Kõik on siin Keeniused Keeniused Keeniused Keeniused Keeniused Keeniused Keeniused Keeniused ja Keeniused.
                    </cms:editable>
                    </p>
                    <div class="mbr-section-btn"><a class="btn btn-md btn-secondary display-4" href="page1.php">TULE ÕPPIMA</a></div>
                </div>
            </div>
        </div>
        <div class="mbr-arrow hidden-sm-down" aria-hidden="true">
            <a href="#features3-j">
                <i class="mbri-down mbr-iconfont"></i>
            </a>
        </div>

        </section>
               
<!--     Mobile only  -->
        <section class="cid-qLAG2bmASf mbr-fullscreen mobile-only" id="header2-f">

        <div class="mbr-overlay" style="opacity: 0.3; background-color: rgb(46, 46, 46);"></div>

        <div class="container align-center">
            <div class="row justify-content-md-center">
                <div class="mbr-white col-md-10">
                    <h1 class="mbr-section-title mbr-bold pb-3 mbr-fonts-style display-1"><cms:editable name='main_title' type='richtext'>INFO- JA KOMMUNIKATSIOONITEHNOLOOGIA OSAKOND</cms:editable></h1>

                    <p class="mbr-text pb-3 mbr-fonts-style display-5">
                    <cms:editable name='main_tag' type='richtext'>
                    Kõik on siin Keeniused Keeniused Keeniused Keeniused Keeniused Keeniused Keeniused Keeniused ja Keeniused.
                    </cms:editable>
                    </p>
                    <div class="mbr-section-btn"><a class="btn btn-md btn-secondary display-4" href="page1.php">TULE ÕPPIMA</a></div>
                </div>
            </div>
        </div>
        <div class="mbr-arrow hidden-sm-down" aria-hidden="true">
            <a href="#features3-j">
                <i class="mbri-down mbr-iconfont"></i>
            </a>
        </div>
        </section>

<!-- Uudised -->
       
        <section class="features3 cid-qLB07fbsZZ" id="features3-j">
        
            <div class="container">
                <div class="media-container-row">
                   <cms:pages masterpage='blog_post.php' paginate='1' limit='3'>
                    <div class="card p-3 col-12 col-md-6 col-lg-4">
                        <div class="card-wrapper">
                            <div class="card-img">
                                <img src="<cms:show blog_image />" alt="">
                            </div>
                            <div class="card-box">
                                <h4 class="card-title mbr-fonts-style display-7">
                                    <cms:show k_page_title /></h4>
                                <p class="mbr-text mbr-fonts-style display-7"><cms:excerpt count='15' ignore='img'><cms:show blog_content /></cms:excerpt> </p>
                            </div>
                            <div class="mbr-section-btn text-center"><a href="<cms:show k_page_link />" class="btn btn-secondary display-4">Loe lähemalt<br></a></div>
                        </div>
                    </div>
                    </cms:pages>
                </div>
            </div>
            
        </section>
        
       
<?php COUCH::invoke();
include('footer.php'); ?>