<?php require_once( 'couch/cms.php' ); 
include('header.php'); ?>
<cms:template title='Avaleht' />


<!--     Desktop only -->
        <section class="cid-qLAG2bmASf mbr-fullscreen desktop-only" data-bg-video="https://www.youtube.com/embed/a_IuD6VioIs?rel=0&amp;showinfo=0&amp;autoplay=1&amp;loop=1" id="header2-f">

        <div class="mbr-overlay" style="opacity: 0.3; background-color: rgb(46, 46, 46);"></div>

        <div class="container align-center">
            <div class="row justify-content-md-center">
                <div class="mbr-white col-md-10">
                    <h1 class="mbr-section-title mbr-bold pb-3 mbr-fonts-style display-1">INFO- JA KOMMUNIKATSIOONITEHNOLOOGIA OSAKOND&nbsp;</h1>

                    <p class="mbr-text pb-3 mbr-fonts-style display-5">Kõik on siin Keeniused Keeniused Keeniused Keeniused Keeniused Keeniused Keeniused Keeniused ja Keeniused.
                    </p>
                    <div class="mbr-section-btn"><a class="btn btn-md btn-secondary display-4" href="page1.html">TULE ÕPPIMA</a></div>
                </div>
            </div>
        </div>
        <div class="mbr-arrow hidden-sm-down" aria-hidden="true">
            <a href="#next">
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
                    <h1 class="mbr-section-title mbr-bold pb-3 mbr-fonts-style display-1">INFO- JA KOMMUNIKATSIOONITEHNOLOOGIA OSAKOND&nbsp;</h1>

                    <p class="mbr-text pb-3 mbr-fonts-style display-5">Kõik on siin Keeniused Keeniused Keeniused Keeniused Keeniused Keeniused Keeniused Keeniused ja Keeniused.
                    </p>
                    <div class="mbr-section-btn"><a class="btn btn-md btn-secondary display-4" href="page1.html">TULE ÕPPIMA</a></div>
                </div>
            </div>
        </div>
        <div class="mbr-arrow hidden-sm-down" aria-hidden="true">
            <a href="#next">
                <i class="mbri-down mbr-iconfont"></i>
            </a>
        </div>
        </section>

       
       <cms:editable name='main_content' type='richtext'>
        <section class="features3 cid-qLB07fbsZZ" id="features3-j">
        
            <div class="container">
                <div class="media-container-row">
                    <div class="card p-3 col-12 col-md-6 col-lg-4">
                        <div class="card-wrapper">
                            <div class="card-img">
                                <img src="assets/images/01.jpg" alt="Mobirise">
                            </div>
                            <div class="card-box">
                                <h4 class="card-title mbr-fonts-style display-7">
                                    Täna algavad ülekoolilised kutsevõistlused</h4>
                                <p class="mbr-text mbr-fonts-style display-7">Täna 6. märtsil algavad Tartu Kutsehariduskeskuse ülekoolilised kutsevõistlused Aasta Tegija 2018 tiitlile. Kokku on kavas 33 erinevat võistlust, milles osaleb üle 350 võistlejaga.</p>
                            </div>
                            <div class="mbr-section-btn text-center"><a href="index.html" class="btn btn-secondary display-4">Loe lähemalt<br></a></div>
                        </div>
                    </div>

                    <div class="card p-3 col-12 col-md-6 col-lg-4">
                        <div class="card-wrapper">
                            <div class="card-img">
                                <img src="assets/images/02.jpg" alt="Mobirise">
                            </div>
                            <div class="card-box">
                                <h4 class="card-title mbr-fonts-style display-7">Zone.ee aitab tulevasi IT-spetsialiste koolitada</h4>
                                <p class="mbr-text mbr-fonts-style display-7">Möödunud nädalal andis Zone Media OÜ Tartu Kutsehariduskeskusele üle serverite komplekti, et nii kaasa aidata IT erialade õppe arendamisse.
                                </p>
                            </div>
                            <div class="mbr-section-btn text-center"><a href="index.html" class="btn btn-secondary display-4">Loe lähemalt</a></div>
                        </div>
                    </div>

                    <div class="card p-3 col-12 col-md-6 col-lg-4">
                        <div class="card-wrapper">
                            <div class="card-img">
                                <img src="assets/images/03.jpg" alt="Mobirise">
                            </div>
                            <div class="card-box">
                                <h4 class="card-title mbr-fonts-style display-7">Raul Jaanson võitis fotograafide kutsevõistlustel hõbemedali</h4>
                                <p class="mbr-text mbr-fonts-style display-7">Möödunud nädalal Tallinnas peetud rahvusvahelistel kutsevõistlustel Prin(t)ouch 2017, kus võtsid mõõtu trükkalid ja fotograafid Eestist, Lätist, Venemaalt ja Kasahstanist.</p>
                            </div>
                            <div class="mbr-section-btn text-center"><a href="index.html" class="btn btn-secondary display-4">Loe lähemalt</a></div>
                        </div>
                    </div>


                </div>
            </div>
        </section>
        </cms:editable>
       
<?php COUCH::invoke(); 
 include('footer.php'); ?>