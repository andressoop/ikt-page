   <section class="mbr-section content4 cid-qLBazTmo1t grid-12" id="content4-16">  
        <div class="container col-md-12" align-right>
            <div class="media-container-row">
                <!-- List view -->
                <cms:calendar date="<cms:gpc 'cal' />" week_starts='1' masterpage='events.php' show_future_entries='1'>
                    <table class="calendar_small">
                        <tr>
                           <th><a href="<cms:concat k_page_link '?cal=' k_prev_calendar_date />"> << </a></th>
                            <th colspan="5"><cms:date k_calendar_date format='%B %Y' locale="estonian" charset="ISO-8859-4" /></th>
                            <th><a href="<cms:concat k_page_link '?cal=' k_next_calendar_date />"> >> </a></th>
                        </tr>
                        <tr>
                            <cms:repeat count='7'>
                            <td class="months_heading"><cms:zebra 'E' 'T' 'K' 'N' 'R' 'L' 'P'/></td>
                            </cms:repeat>
                        </tr>

                        <cms:weeks>
                            <tr>
                            <cms:days >
                                <cms:if k_timeline_position='present'>
                                    <cms:set tdclass='today' />
                                <cms:else />
                                    <cms:set tdclass='' />
                                </cms:if>

                                <cms:if k_position='current_month' >
                                    <cms:if k_count_entries >
                                        <td class='entries <cms:show tdclass />' >
                                            <a href="<cms:link masterpage='events.php' year=k_year month=k_month day=k_day />"><cms:show k_day /></a>
                                        </td>
                                    <cms:else />
                                        <td class='<cms:show tdclass />' ><cms:show k_day /></td>
                                    </cms:if>
                                <cms:else />
                                    <td class='other_month'><cms:show k_day /></td>
                                </cms:if>
                            </cms:days>
                            </tr>
                        </cms:weeks>
                    </table>
                </cms:calendar>
            </div>
        </div>
    </section>

   
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
                            <li class="li-horizontal"><a href="<cms:show k_archive_link />"><cms:date k_archive_date format='%B %Y' locale="estonian" charset="ISO-8859-4" /></a></li>
                            </cms:archives>                            
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </section>
