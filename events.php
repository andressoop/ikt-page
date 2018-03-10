<?php require_once( 'couch/cms.php' );
include('header.php'); ?>
<cms:template title='Kalender' clonable='1'>
    <cms:editable name='desc' label='Description' type='textarea' />
    <cms:editable name='location' label='Location' type='text' />

    <cms:editable name="start_time" label="Time From (24 Hrs)"
      opt_values=' Unspecified |
                  00:00 | 00:30 | 01:00 | 01:30 | 02:00 | 02:30 | 03:00 | 03:30 |
                  04:00 | 04:30 | 05:00 | 05:30 | 06:00 | 06:30 | 07:00 | 07:30 |
                  08:00 | 08:30 | 09:00 | 09:30 | 10:00 | 10:30 | 11:00 | 11:30 |
                  12:00 | 12:30 | 13:00 | 13:30 | 14:00 | 14:30 | 15:00 | 15:30 |
                  16:00 | 16:30 | 17:00 | 17:30 | 18:00 | 18:30 | 19:00 | 19:30 |
                  20:00 | 20:30 | 21:00 | 21:30 | 22:00 | 22:30 | 23:00 | 23:30 |'
      type='dropdown'
    />

    <cms:editable name="end_time" label="Time Until (24 Hrs)"
      opt_values=' Unspecified |
                  00:00 | 00:30 | 01:00 | 01:30 | 02:00 | 02:30 | 03:00 | 03:30 |
                  04:00 | 04:30 | 05:00 | 05:30 | 06:00 | 06:30 | 07:00 | 07:30 |
                  08:00 | 08:30 | 09:00 | 09:30 | 10:00 | 10:30 | 11:00 | 11:30 |
                  12:00 | 12:30 | 13:00 | 13:30 | 14:00 | 14:30 | 15:00 | 15:30 |
                  16:00 | 16:30 | 17:00 | 17:30 | 18:00 | 18:30 | 19:00 | 19:30 |
                  20:00 | 20:30 | 21:00 | 21:30 | 22:00 | 22:30 | 23:00 | 23:30 |'
      type='dropdown'
    />

    <cms:editable name='end_date'
        label='Event End Date (if multi-days event)'
        desc='Enter date in yyyy-mm-dd format e.g. 2010-12-31'
        type='text'
        validator='regex=/(?:19|20)\d\d-(?:0[1-9]|1[012])-(?:0[1-9]|[12][0-9]|3[01])/'
        separator='#'
        validator_msg='regex=Incorrect date format'
    />
    
    <cms:editable name='image'
        label='Image'
        type='image'
    />

</cms:template>

<!-- Event's information-->
<section class="mbr-section content4 cid-qLBazTmo1t" id="content4-16">

    <div class="container">
        <div class="media-container-row align-center">
            <div class="title col-12 col-md-8">
                <cms:if k_is_page >
                    <!-- Page View -->
                    <img class="thumb" src="<cms:show image />" alt=""/>
                    <h2><cms:show k_page_title /></h2><br>
                    <b>Kirjeldus:</b> <cms:show desc /><br>
                    <b>Asukoht:</b> <cms:show location /><br>
                    <b>Kuupäev:</b> <cms:date k_page_date format='F j, Y' /><br>
                    <cms:if start_time!='Unspecified' >
                        <b>Algusaeg:</b> <cms:show start_time /><br>
                    </cms:if>
                    <cms:if "<cms:not_empty end_date />" >
                        <b>Kuni:</b> <cms:date end_date format='F j, Y' /><br>
                    </cms:if>
                    <cms:if end_time!='Unspecified' >
                        <b>Lõpuaeg:</b> <cms:show end_time /><br>
                    </cms:if>

                <cms:else />
                    
                </cms:if>
            </div>
        </div>
    </div>
</section>
   
<section class="mbr-section content4 cid-qLBazTmo1t" id="content4-16">  
        <div class="container">
            <div class="media-container-row">
            <cms:calendar date="<cms:gpc 'cal' />" masterpage='events.php' week_starts='1' show_future_entries='1'>
                    <table class="calendar_big">
                        <tr>
                            <th><a href="<cms:concat k_page_link '?cal=' k_prev_calendar_date />"> << </a></th>
                            <th colspan="5"><cms:date k_calendar_date format='%B %Y' locale="estonian" /></th>
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
                                        <td class='entries <cms:show tdclass />' align='center'>
                                            <a href="#"><cms:show k_day /></a>
                                            <ul>
                                            <cms:entries limit='2' skip_custom_fields='1'>
                                                <li>
                                                    <a href="<cms:show k_page_link />"><cms:show k_page_title /></a>
                                                </li>
                                            </cms:entries>
                                            </ul>
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

<?php COUCH::invoke();
include('footer.php'); ?>