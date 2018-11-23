<!-- Event popup -->
    <div id="calendar-event" class="modal fade" role="dialog">
        <div class="modal-dialog modal-md">
            <div class="modal-content-popup">
                <div class="modal-body-popup">
                </div>
            </div>
        </div>
    </div>
<!-- // Event popup -->

<section class="mbr-section content4 eriala-head" id="content4-16">

    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">

            </div>
        </div>
    </div>
</section>

<section class="blog-posts">
    <div class="container">

        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-12">

                <!--   Postitused  -->
                <cms:pages masterpage='uudised.php'
                           start_on=k_archive_date
                           stop_before=k_next_archive_date
                           paginate='1'
                           limit='5' >

                    <div class="container blog-posts">
                        <div class="media-container-row">
                            <div class="title col-md-10">
                                <h2 class="align-center pb-3 mbr-fonts-style display-2"><a href="<cms:show_with_lc k_page_link />"><cms:get "uudis_title_<cms:show k_lang />" /></a></h2>
                            </div>
                        </div>
                        <div class="media-container-row">
                            <div class="mbr-text col-md-10 mbr-fonts-style display-7 blog-article">

                                <cms:if k_lang='ee'>
                                    <p class="align-right">Postitatud <cms:date k_page_date format='%d. %B %Y' locale="estonian" charset="ISO-8859-4" /></p>
                                    <cms:else />
                                    <p class="align-right">Posted on <cms:date k_page_date format='%d %B %Y' locale="english" charset="ISO-8859-4" /></p>
                                </cms:if>
                                <img class="thumb" src="<cms:show blog_image />" alt=""/>
                                <cms:excerptHTML count='75' ignore='img'><cms:get "uudis_content_<cms:show k_lang />" /></cms:excerptHTML>
                                <a href="<cms:show_with_lc k_page_link />">
                                    <cms:if k_lang='ee'>
                                        Loe tervet artiklit
                                        <cms:else />
                                        Read full article
                                    </cms:if>
                                </a>

                            </div>
                        </div>
                    </div>

                    <!-- Navigeerimisnupud -->
                    <cms:if k_paginated_bottom>
                    <div class="container">
                        <div class="media-container-row">
                            <div class="mbr-text col-md-10 mbr-fonts-style display-7 blog-article">

                                <div class="paginate-next">
                                    <cms:if k_paginate_link_next >
                                        <a href="<cms:show_with_lc k_paginate_link_next />">
                                            <cms:if k_lang='ee'>
                                                << Vanemad postitused
                                                <cms:else />
                                                << Older articles
                                            </cms:if>
                                        </a>
                                    </cms:if>
                                </div>
                                <div class="paginate-prev">
                                    <cms:if k_paginate_link_prev >
                                        <a href="<cms:show_with_lc k_paginate_link_prev />">
                                            <cms:if k_lang='ee'>
                                                Uuemad postitused >>
                                                <cms:else />
                                                Newer articles >>
                                            </cms:if>
                                        </a>
                                    </cms:if>
                                </div>

                            </div>
                        </div>
                    </div>
                    </cms:if>

                </cms:pages>

            </div>

            <div class="col-lg-3 col-md-3 col-sm-12">

                <!--  Kalender  -->
                <div class="media-container-sidebar">
                    <cms:calendar date="<cms:gpc 'cal' />" week_starts='1' masterpage='kalender.php' show_future_entries='1'>
                        <table class="calendar_small">
                            <tr>
                                <th><a href="<cms:concat masterpage='uudised.php' '?cal=' k_prev_calendar_date '&lc=' k_lang />"> << </a></th>
                                <th colspan="5">
                                        <cms:if k_lang='ee'>
                                            <cms:date k_calendar_date format='%B %Y' locale="estonian" charset="ISO-8859-4" />
                                            <cms:else />
                                            <cms:date k_calendar_date format='%B %Y' locale="english" charset="ISO-8859-4" />
                                        </cms:if>
                                </th>
                                <th><a href="<cms:concat masterpage='uudised.php' '?cal=' k_next_calendar_date '&lc=' k_lang />"> >> </a></th>
                            </tr>
                            <tr>
                                <cms:repeat count='7'>
                                    <cms:if k_lang='ee'>
                                        <td class="months_heading"><cms:zebra 'E' 'T' 'K' 'N' 'R' 'L' 'P'/></td>
                                        <cms:else />
                                        <td class="months_heading"><cms:zebra 'M' 'T' 'W' 'T' 'F' 'S' 'S'/></td>
                                    </cms:if>
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
                                                <td class='dropdown entries <cms:show tdclass />' >
                                                    <cms:show k_day />
                                                    <ul class="cal-list dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <cms:entries limit='5' skip_custom_fields='1'>
                                                            <li>
                                                                <a href="<cms:show k_page_link />" class="calendar-day event d-block p-1 pl-2 pr-2 mb-1 rounded text-truncate small bg-info text-white">
                                                                    <cms:show k_page_title />
                                                                </a>
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

                <!--  Postituste arhiiv  -->
                <div class="container">
                    <div class="media-container-sidebar">
                        <div class="mbr-text mbr-fonts-style display-7">
                            <div class="sidebar-title">
                                <cms:if k_lang='ee'>
                                    Postituste arhiiv
                                    <cms:else />
                                    News archive
                                </cms:if>
                            </div>
                            <ul class="sidebar-menu">
                                <cms:archives masterpage='uudised.php' limit='12'>
                                    <cms:if k_lang='ee'>
                                        <li class="list-group"><a href="<cms:show_with_lc k_archive_link />"><cms:date k_archive_date format='%Y %B' locale="estonian" charset="ISO-8859-4" /></a></li>
                                        <cms:else />
                                        <li class="list-group"><a href="<cms:show_with_lc k_archive_link />"><cms:date k_archive_date format='%Y %B' locale="english" charset="ISO-8859-4" /></a></li>
                                    </cms:if>
                                </cms:archives>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>
