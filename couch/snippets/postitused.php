
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
                           limit='10' >

                    <div class="container blog-posts">
                        <div class="media-container-row">
                            <div class="title col-md-10">
                                <h2 class="align-center pb-3 mbr-fonts-style display-2"><a href="<cms:show k_page_link />"><cms:show k_page_title /></a></h2>
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
                                <cms:excerptHTML count='75' ignore='img'><cms:show blog_content /></cms:excerptHTML>
                                <a href="<cms:show k_page_link />">
                                    <cms:if k_lang='ee'>
                                        Loe tervet artiklit
                                        <cms:else />
                                        Read full article
                                    </cms:if>
                                </a>

                            </div>
                        </div>
                    </div>

                    <cms:if k_paginated_bottom>
                    <!-- Navigeerimisnupud -->
                    <div class="container">
                        <div class="media-container-row">
                            <div class="mbr-text col-md-10 mbr-fonts-style display-7 blog-article">

                                <div class="paginate-next">
                                    <cms:if k_paginate_link_next >
                                        <a href="<cms:show_with_lc k_paginate_link_next />">
                                            <cms:if k_lang='ee'>
                                                Vanemad postitused
                                                <cms:else />
                                                Older articles
                                            </cms:if>
                                        </a>
                                    </cms:if>
                                </div>
                                <div class="paginate-prev">
                                    <cms:if k_paginate_link_prev >
                                        <a href="<cms:show_with_lc k_paginate_link_prev />">
                                            <cms:if k_lang='ee'>
                                                Uuemad postitused
                                                <cms:else />
                                                Newer articles
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
                <div class="media-container-row">
                    <cms:calendar date="<cms:gpc 'cal' />" week_starts='1' masterpage='kalender.php' show_future_entries='1'>
                        <table class="calendar_small">
                            <tr>
                                <th><a href="<cms:concat k_page_link '?cal=' k_prev_calendar_date />"> << </a></th>
                                <th colspan="5"><a href="<cms:concat masterpage='kalender.php' '?cal=' k_calendar_date />" class="calendar-link"><cms:date k_calendar_date format='%B %Y' locale="estonian" charset="ISO-8859-4" /></a></th>
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
                                                    <a href="<cms:concat masterpage='kalender.php' '?cal=' year=k_year '-' month=k_month '-' day=k_day />"><cms:show k_day /></a>
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
                    <div class="media-container-row">
                        <div class="mbr-textmbr-fonts-style display-7">
                            <div class="mbr-text mbr-fonts-style display-7">
                                <div class="sidebar-title">Postituste arhiiv</div>
                                <ul>
                                    <cms:archives masterpage='uudised.php'>
                                        <li class="list-group"><a href="<cms:show k_archive_link />"><cms:date k_archive_date format='%Y %B' locale="estonian" charset="ISO-8859-4" /></a></li>
                                    </cms:archives>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>
