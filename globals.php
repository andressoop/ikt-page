<?php require_once('couch/cms.php'); ?>
    <cms:template title="Üldised sätted" executable='0' >

        <cms:editable name='address' no_xss_check='1' label="Aadress" type="richtext"/>

        <cms:editable name='links' no_xss_check='1' label="Lingid" type="richtext"/>

    </cms:template>
<?php COUCH::invoke(); ?>