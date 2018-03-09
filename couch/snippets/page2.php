
    <section class="mbr-section content4 cid-qLBazTmo1t" id="content4-16">  

        <div class="container">
            <div class="media-container-row">
                <div class="title col-12 col-md-8">
          
                </div>
            </div>
        </div>
    </section>
    
<cms:pages masterpage='blog_post.php' paginate='1' limit='10'>
    <section class="mbr-section article content1 cid-qLBaAUBRiU" id="content1-17">

        <div class="container">
           <div class="media-container-row">
                <div class="title col-12 col-md-8">
                    <h2 class="align-center pb-3 mbr-fonts-style display-2"><a href="<cms:show k_page_link />"><cms:show k_page_title /></a></h2>            
                </div>
            </div>
            <div class="media-container-row">
                <div class="mbr-text col-12 col-md-8 mbr-fonts-style display-7">
                   <img class="thumb" src="<cms:show blog_image />" alt=""/>
                    <cms:excerptHTML count='75' ignore='img'><cms:show blog_content /></cms:excerptHTML> <a href="<cms:show k_page_link />">Loe tervet artiklit</a>
                
                </div>
            </div>
        </div>
    </section>
</cms:pages>

   
    <section class="mbr-section article content1 cid-qLBaAUBRiU">

        <div class="container">
            <div class="media-container-row">
                <div class="mbr-text col-12 col-md-8 mbr-fonts-style display-7">
                    <div class="mbr-text counter-container col-12 col-md-8 mbr-fonts-style display-7">
                        <div><strong>Postituste arhiiv</strong></div><div><strong><br></strong></div>
                        <ul>
                           <cms:archives masterpage='blog_post.php'>
                            <li class="li-horizontal"><a href="<cms:show k_archive_link />"><cms:date k_archive_date format='F Y' locale='estonian' /></a></li>
                            </cms:archives>                            
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </section>
