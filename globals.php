<?php require_once('couch/cms.php'); ?>
    <cms:template title="Üldised sätted" order="8" executable='0' >

        <cms:editable name='address_ee' no_xss_check='1' label="(EST) Aadress" order="1" type="richtext"/>
        <cms:editable name='address_en' no_xss_check='1' label="(ENG) Aadress" order="2" type="richtext"/>

        <cms:editable name='contact_ee' no_xss_check='1' label="(EST) Kontakt" order="3" type="richtext"/>
        <cms:editable name='contact_en' no_xss_check='1' label="(ENG) Contact" order="4" type="richtext"/>

        <cms:editable name='links_ee' no_xss_check='1' label="(EST) Lingid" order="5" type="richtext"/>
        <cms:editable name='links_en' no_xss_check='1' label="(ENG) Lingid" order="6" type="richtext"/>

<!--        Sotsiaalmeedia ikoonid -->
        <cms:editable name="group_social" label="Sotsiaalmeedia lingid" desc="Ikooni eemaldamiseks jäta lahter tühjaks" order="7" type="group"/>
            <cms:editable name="facebook_id" label="Facebook" group="group_social" order="1" type="text"/>
            <cms:editable name="youtube_id" label="Youtube" group="group_social" order="2" type="text"/>
            <cms:editable name="twitter_id" label="Twitter" group="group_social" order="3" type="text"/>
            <cms:editable name="instagram_id" label="Instagram" group="group_social" order="4" type="text"/>

    </cms:template>
<?php COUCH::invoke(); ?>