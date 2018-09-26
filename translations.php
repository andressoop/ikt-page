<?php require_once('couch/cms.php'); ?>
    <cms:template title="Tõlked" order="9" executable='0' >

        <!--  Menüü -->
        <cms:editable name="group_menu" label="Menüü" desc="Menüü elementide tõlked" order="1" type="group"/>
            <cms:editable name="avaleht_ee" label="(EST) Avaleht" group="group_menu" order="1" type="text"/>
            <cms:editable name="avaleht_en" label="(ENG) Avaleht" group="group_menu" order="2" type="text"/>
            <cms:editable name="erialad_ee" label="(EST) Erialad" group="group_menu" order="3" type="text"/>
            <cms:editable name="erialad_en" label="(ENG) Erialad" group="group_menu" order="4" type="text"/>
            <cms:editable name="uudised_ee" label="(EST) Uudised" group="group_menu" order="5" type="text"/>
            <cms:editable name="uudised_en" label="(ENG) Uudised" group="group_menu" order="6" type="text"/>
            <cms:editable name="praktika_ee" label="(EST) Praktika" group="group_menu" order="7" type="text"/>
            <cms:editable name="praktika_en" label="(ENG) Praktika" group="group_menu" order="8" type="text"/>
            <cms:editable name="oppetoo_ee" label="(EST) Õppetöö" group="group_menu" order="9" type="text"/>
            <cms:editable name="oppetoo_en" label="(ENG) Õppetöö" group="group_menu" order="10" type="text"/>
            <cms:editable name="siseveeb_ee" label="(EST) Siseveeb" group="group_menu" order="11" type="text"/>
            <cms:editable name="siseveeb_en" label="(ENG) Siseveeb" group="group_menu" order="12" type="text"/>


    </cms:template>
<?php COUCH::invoke(); ?>