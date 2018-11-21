<!DOCTYPE html>
<html>
    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
        <meta name="description" content="Tartu Kutsehariduskeskus INFO- JA KOMMUNIKATSIOONITEHNOLOOGIA OSAKOND">
        <meta name="keywords" content="TKHK,KHK,kutsehariduskeskus,Tartu Kutsehariduskeskus,IKT,info- ja kommunikatsioonitehnoloogia osakond">
        <meta name="theme-color" content="#0099d8">
        <meta name="author" content="Andres Soop ja Sandra Õnne">
        <title>IKT osakond</title>

        <link rel="shortcut icon" href="assets/images/KHK_logod_icon.png" type="image/x-icon">
        <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
        <link rel="stylesheet" href="assets/tether/tether.min.css">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
        <link rel="stylesheet" href="assets/socicon/css/styles.css">
        <link rel="stylesheet" href="assets/dropdown/css/style.css">
        <link rel="stylesheet" href="assets/theme/css/style.css">
        <link rel="stylesheet" href="assets/flag-icon-css/css/flag-icon.css">


    </head>
    <body>
        <section class="header-menu">

            <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm navbar-short">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <div class="hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </button>
                <div class="menu-logo">
                    <div class="navbar-brand">
                        <span class="navbar-logo">
                            <a href="index.php">
                                <img src="assets/images/KHK_logo_IKT-01-valge.png" alt="KHK IKT logo" title="" style="height: 3.8rem;">
                            </a>
                        </span>

                    </div>
                </div>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
                        <li class="nav-item"><a <cms:if k_template_name=='index.php'>class="nav-link link text-active display-4"<cms:else />class="nav-link link text-white display-4"</cms:if> href="<cms:link masterpage="index.php" />"><span class="mbri-home mbr-iconfont mbr-iconfont-btn"></span><cms:get_custom_field "avaleht_<cms:show k_lang />" masterpage='translations.php' /></a></li>
                        <li class="nav-item"><a <cms:if k_template_name=='erialad.php'>class="nav-link link text-active display-4"<cms:else />class="nav-link link text-white display-4"</cms:if> href="<cms:link masterpage="erialad.php" />"><span class="mbri-features mbr-iconfont mbr-iconfont-btn"></span><cms:get_custom_field "erialad_<cms:show k_lang />" masterpage='translations.php' /></a></li>
                        <li class="nav-item"><a <cms:if k_template_name=='uudised.php'>class="nav-link link text-active display-4"<cms:else />class="nav-link link text-white display-4"</cms:if> href="<cms:link masterpage="uudised.php" />"><span class="mbri-sun mbr-iconfont mbr-iconfont-btn"></span><cms:get_custom_field "uudised_<cms:show k_lang />" masterpage='translations.php' /></a></li>
                        <li class="nav-item"><a <cms:if k_template_name=='praktika.php'>class="nav-link link text-active display-4"<cms:else />class="nav-link link text-white display-4"</cms:if> href="<cms:link masterpage="praktika.php" />"><span class="mbri-website-theme mbr-iconfont mbr-iconfont-btn"></span><cms:get_custom_field "praktika_<cms:show k_lang />" masterpage='translations.php' /></a></li>
                        <li class="nav-item"><a <cms:if k_template_name=='oppetoo.php'>class="nav-link link text-active display-4"<cms:else />class="nav-link link text-white display-4"</cms:if> href="<cms:link masterpage="oppetoo.php" />"><span class="mbri-paperclip mbr-iconfont mbr-iconfont-btn"></span><cms:get_custom_field "oppetoo_<cms:show k_lang />" masterpage='translations.php' /></a></li>
                    </ul>
                    <div class="navbar-buttons mbr-section-btn">
                        <a class="btn btn-sm btn-primary display-4" href="https://tkhk.siseveeb.ee"><span class="mbri-sites mbr-iconfont mbr-iconfont-btn"></span><cms:get_custom_field "siseveeb_<cms:show k_lang />" masterpage='translations.php' /></a>
                    </div>
                    <div class="navbar-flags">
                        <div class="flag-item"><a href="<cms:show k_link_ee />"><span class="flag-icon flag-icon-ee"></span></a></div>
                        <div class="flag-item"><a href="<cms:show k_link_en />"><span class="flag-icon flag-icon-gb"></span></a></div>
                    </div>
                </div>
            </nav>
        </section>