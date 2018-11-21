<?php require_once('couch/cms.php'); ?>

    <cms:template title='Osakonna tutvustus' order="2">
        <cms:editable name='osakond_tutvustus_title_ee' label="(EST) Osakonna tutvustuse lõigu pealkiri" order="1" type='text' />
        <cms:editable name='osakond_tutvustus_title_en' label="(ENG) Osakonna tutvustuse lõigu pealkiri" order="2" type='text' />
        <cms:editable name='osakond_tutvustus_ee' label="(EST) Osakonna tutvustus" order="3" type='richtext' />
        <cms:editable name='osakond_tutvustus_en' label="(ENG) Osakonna tutvustus" order="4" type='richtext' />
    </cms:template>

<?php COUCH::invoke(); ?>