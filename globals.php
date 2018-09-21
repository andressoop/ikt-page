<?php require_once('couch/cms.php'); ?>
    <cms:template title="Üldised sätted" executable='0' >

        <cms:editable name='address' no_xss_check='1' label="Aadress" type="richtext"/>

        <cms:editable name='links' no_xss_check='1' label="Lingid" type="richtext"/>

<!--        Sotsiaalmeedia ikoonid -->
        <cms:editable name="group_social" label="Sotsiaalmeedia lingid" desc="Ikooni eemaldamiseks jäta lahter tühjaks" type="group"/>
            <cms:editable name="facebook_id" label="Facebook" group="group_social" type="text"/>
            <cms:editable name="youtube_id" label="Youtube" group="group_social" type="text"/>
            <cms:editable name="twitter_id" label="Twitter" group="group_social" type="text"/>
            <cms:editable name="instagram_id" label="Instagram" group="group_social" type="text"/>

    </cms:template>
<?php COUCH::invoke(); ?>