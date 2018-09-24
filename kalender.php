<?php require_once( 'couch/cms.php' ); ?>
    <cms:embed "header.php" />

    <cms:template title='Kalender' order="5" clonable='1'>
        <cms:editable name='desc' label='Ürituse kirjeldus' type='richtext' />
        <cms:editable name='location' label='Toimumispaik' type='text' />

        <cms:editable name="start_time" label="Üritus algab"
          opt_values=' Unspecified |
                      00:00 | 00:30 | 01:00 | 01:30 | 02:00 | 02:30 | 03:00 | 03:30 |
                      04:00 | 04:30 | 05:00 | 05:30 | 06:00 | 06:30 | 07:00 | 07:30 |
                      08:00 | 08:30 | 09:00 | 09:30 | 10:00 | 10:30 | 11:00 | 11:30 |
                      12:00 | 12:30 | 13:00 | 13:30 | 14:00 | 14:30 | 15:00 | 15:30 |
                      16:00 | 16:30 | 17:00 | 17:30 | 18:00 | 18:30 | 19:00 | 19:30 |
                      20:00 | 20:30 | 21:00 | 21:30 | 22:00 | 22:30 | 23:00 | 23:30 |'
          type='dropdown'
        />

        <cms:editable name="end_time" label="Üritus lõppeb"
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
            label='Mitmepäevase ürituse lõpukuupäev (kui üritus kestab üle 1 päeva)'
            desc='Sisesta kuupäev formaadis: yyyy-mm-dd näiteks: 2018-12-31'
            type='text'
            validator='regex=/(?:19|20)\d\d-(?:0[1-9]|1[012])-(?:0[1-9]|[12][0-9]|3[01])/'
            separator='#'
            validator_msg='regex=Incorrect date format'
        />

        <cms:editable name='image'
            label='Pilt'
            type='image'
        />

    </cms:template>

    <!-- Event's information-->
    <cms:if k_is_page >
        <div id="calendar-event" class="modal fade" role="dialog">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header justify-content-center">
                        <h4 class="modal-title"><cms:show k_page_title /></h4>
                        <a href="#" class="close-event" data-dismiss="modal"></a>
                    </div>
                    <div class="modal-body">
                        <img class="thumb" src="<cms:show image />" alt=""/>
                        <b>Asukoht:</b> <cms:show location /><br>
                        <b>Kuupäev:</b> <cms:date k_page_date format='%e. %B %Y' locale="estonian" charset="ISO-8859-4" />
                        <cms:if "<cms:not_empty end_date />" >
                            <b>-</b> <cms:date end_date format='%e. %B %Y' locale="estonian" charset="ISO-8859-4" />
                        </cms:if><br>
                        <cms:if start_time!='Unspecified' >
                            <b>Algusaeg:</b> <cms:show start_time /><br>
                        </cms:if>
                        <cms:if end_time!='Unspecified' >
                            <b>Lõpuaeg:</b> <cms:show end_time /><br>
                        </cms:if>
                        <b>Kirjeldus:</b> <cms:show desc /><br>
                    </div>
                </div>
            </div>
        </div>
    </cms:if>

   
    <section class="calendar-container">
        <div class="container">
            <div class="media-container-row">

                <cms:calendar date="<cms:gpc 'cal' />" masterpage='kalender.php' week_starts='1' show_future_entries='1'>
                    <div class="container-fluid calendar_big">
                        <header>
                            <div class="row p-1 d-none d-sm-flex">
                                <span class="col-sm p-1 text-center"><a href="<cms:concat masterpage='kalender.php' '?cal=' k_prev_calendar_date />"> << </a></span>
                                <h4 class="col-sm p-1 mb-4 text-center"><cms:date k_calendar_date format='%B %Y' locale="estonian" charset="ISO-8859-4" /></h4>
                                <span class="col-sm p-1 text-center"><a href="<cms:concat masterpage='kalender.php' '?cal=' k_next_calendar_date />"> >> </a></span>
                            </div>
                            <div class="col d-sm-none">
                                <h5 class="col-sm p-1 text-center"><a href="<cms:concat masterpage='kalender.php' '?cal=' k_prev_calendar_date />"> << </a> <cms:date k_calendar_date format='%B %Y' locale="estonian" charset="ISO-8859-4" /> <a href="<cms:concat k_page_link '?cal=' k_next_calendar_date />"> >> </a></h5>
                            </div>
                            <div class="row d-none d-sm-flex p-1 bg-darkblue text-white">
                                <cms:repeat count='7'>
                                    <h5 class="col-sm p-1 text-center"><cms:zebra 'E' 'T' 'K' 'N' 'R' 'L' 'P'/></h5>
                                </cms:repeat>
                            </div>
                        </header>

                        <div class="row border border-right-0 border-bottom-0 calendar_big_days">
                            <cms:weeks>
                                <cms:days >
                                    <cms:if k_timeline_position='present'>
                                        <cms:set calclass='cal-today' />
                                    <cms:else />
                                        <cms:set calclass='' />
                                    </cms:if>

                                    <cms:if k_day_of_week='0'>
                                        <cms:set day_of_week='Pühapäev' />
                                    <cms:else />
                                        <cms:if k_day_of_week='1'>
                                            <cms:set day_of_week='Esmaspäev' />
                                        <cms:else />
                                            <cms:if k_day_of_week='2'>
                                                <cms:set day_of_week='Teisipäev' />
                                            <cms:else />
                                                <cms:if k_day_of_week='3'>
                                                    <cms:set day_of_week='Kolmapäev' />
                                                <cms:else />
                                                    <cms:if k_day_of_week='4'>
                                                        <cms:set day_of_week='Neljapäev' />
                                                    <cms:else />
                                                        <cms:if k_day_of_week='5'>
                                                            <cms:set day_of_week='Reede' />
                                                        <cms:else />
                                                            <cms:if k_day_of_week='6'>
                                                                <cms:set day_of_week='Laupäev' />
                                                            </cms:if>
                                                        </cms:if>
                                                    </cms:if>
                                                </cms:if>
                                            </cms:if>
                                        </cms:if>
                                    </cms:if>

                                    <cms:if k_position='current_month' >
                                        <cms:if k_count_entries >
                                            <div class="day col-sm p-2 border border-left-0 border-top-0 text-truncate <cms:show calclass />">
                                                <h5 class="row align-items-center">
                                                    <span class="date col-1"><cms:show k_day /></span>
                                                    <small class="col d-sm-none text-center text-muted"><cms:show day_of_week /></small>
                                                    <span class="col-1"></span>
                                                </h5>
                                                <cms:entries limit='5' skip_custom_fields='1'>
                                                    <li>
                                                        <a href="<cms:concat masterpage='kalender.php' '?cal=' k_calendar_date '&p=' k_page_id />" class="event d-block p-1 pl-2 pr-2 mb-1 rounded text-truncate small bg-info text-white" title="<cms:show k_page_title />"><cms:show k_page_title /></a>
                                                    </li>
                                                </cms:entries>
                                            </div>
                                        <cms:else />
                                            <div class="day col-sm p-2 border border-left-0 border-top-0 text-truncate <cms:show calclass />">
                                                <h5 class="row align-items-center">
                                                    <span class="date col-1"><cms:show k_day /></span>
                                                    <small class="col d-sm-none text-center text-muted"><cms:show day_of_week /></small>
                                                    <span class="col-1"></span>
                                                </h5>
                                            </div>
                                        </cms:if>
                                    <cms:else />
                                        <cms:set calclass='d-none d-sm-inline-block bg-light text-muted' />
                                        <div class="day col-sm p-2 border border-left-0 border-top-0 text-truncate d-none <cms:show calclass />">
                                            <h5 class="row align-items-center">
                                                <span class="date col-1"><cms:show k_day /></span>
                                            </h5>
                                        </div>
                                    </cms:if>

                                </cms:days>
                                <div class="w-100"></div>
                            </cms:weeks>
                        </div>

                    </div>
                </cms:calendar>

            </div>
        </div>
    </section>

    <cms:embed "footer.php" />
<?php COUCH::invoke(); ?>