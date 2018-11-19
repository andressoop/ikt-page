<?php require_once( 'couch/cms.php' ); ?>

    <cms:template title='Kalender' order="5" clonable='1'>
        <cms:editable name="group_event" label="Ürituse info" type="group"/>
        <cms:editable name='event_title_ee' label="(EST) Ürituse pealkiri" group="group_event" order="1" type='text'/>
        <cms:editable name='event_title_en' label="(ENG) Ürituse pealkiri" group="group_event" order="2" type='text'/>
        <cms:editable name='event_desc_ee' label="(EST) Ürituse kirjeldus" group="group_event" order="3" type='richtext'/>
        <cms:editable name='event_desc_en' label="(ENG) Ürituse kirjeldus" group="group_event" order="4" type='richtext'/>

        <cms:editable name='location' label='Toimumispaik' group="group_event" order="5" type='text' />
        <cms:editable name="start_time" label="Üritus algab" group="group_event" order="6"
          opt_values=' Unspecified |
                      00:00 | 00:30 | 01:00 | 01:30 | 02:00 | 02:30 | 03:00 | 03:30 |
                      04:00 | 04:30 | 05:00 | 05:30 | 06:00 | 06:30 | 07:00 | 07:30 |
                      08:00 | 08:30 | 09:00 | 09:30 | 10:00 | 10:30 | 11:00 | 11:30 |
                      12:00 | 12:30 | 13:00 | 13:30 | 14:00 | 14:30 | 15:00 | 15:30 |
                      16:00 | 16:30 | 17:00 | 17:30 | 18:00 | 18:30 | 19:00 | 19:30 |
                      20:00 | 20:30 | 21:00 | 21:30 | 22:00 | 22:30 | 23:00 | 23:30 |'
          type='dropdown'
        />

        <cms:editable name="end_time" label="Üritus lõppeb" group="group_event" order="7"
          opt_values=' Unspecified |
                      00:00 | 00:30 | 01:00 | 01:30 | 02:00 | 02:30 | 03:00 | 03:30 |
                      04:00 | 04:30 | 05:00 | 05:30 | 06:00 | 06:30 | 07:00 | 07:30 |
                      08:00 | 08:30 | 09:00 | 09:30 | 10:00 | 10:30 | 11:00 | 11:30 |
                      12:00 | 12:30 | 13:00 | 13:30 | 14:00 | 14:30 | 15:00 | 15:30 |
                      16:00 | 16:30 | 17:00 | 17:30 | 18:00 | 18:30 | 19:00 | 19:30 |
                      20:00 | 20:30 | 21:00 | 21:30 | 22:00 | 22:30 | 23:00 | 23:30 |'
          type='dropdown'
        />

        <cms:editable name='end_date' group="group_event" order="8"
            label='Mitmepäevase ürituse lõpukuupäev (kui üritus kestab üle 1 päeva)'
            desc='Sisesta kuupäev formaadis: yyyy-mm-dd näiteks: 2018-12-31'
            type='text'
            validator='regex=/(?:19|20)\d\d-(?:0[1-9]|1[012])-(?:0[1-9]|[12][0-9]|3[01])/'
            separator='#'
            validator_msg='regex=Incorrect date format'
        />

        <cms:editable name='image' group="group_event" order="9"
            label='Pilt'
            type='image'
        />

    </cms:template>

    <!-- Event's information-->
        <div id="calendar-event" role="dialog">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header justify-content-center">
                        <h4 class="modal-title"><cms:get "event_title_<cms:show k_lang />" /></h4>
                        <a href="#" class="close-event" data-dismiss="modal"></a>
                    </div>
                    <div class="modal-body">
                        <cms:if k_lang='ee'>
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
                            <b>Kirjeldus:</b> <cms:get "event_desc_<cms:show k_lang />" /><br>
                        <cms:else />
                            <img class="thumb" src="<cms:show image />" alt=""/>
                            <b>Location:</b> <cms:show location /><br>
                            <b>Date:</b> <cms:date k_page_date format='%e. %B %Y' locale="english" charset="ISO-8859-4" />
                            <cms:if "<cms:not_empty end_date />" >
                            <b>-</b> <cms:date end_date format='%e. %B %Y' locale="english" charset="ISO-8859-4" />
                            </cms:if><br>
                            <cms:if start_time!='Unspecified' >
                                <b>Starts:</b> <cms:show start_time /><br>
                            </cms:if>
                            <cms:if end_time!='Unspecified' >
                                <b>Ends:</b> <cms:show end_time /><br>
                            </cms:if>
                            <b>Description:</b> <cms:get "event_desc_<cms:show k_lang />" /><br>
                        </cms:if>
                    </div>
                </div>
            </div>
        </div>

<?php COUCH::invoke(); ?>