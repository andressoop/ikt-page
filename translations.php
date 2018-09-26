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

        <!-- Kontaktivorm -->
        <cms:editable name="group_contact_form" label="Kontaktivorm" desc="Kontaktivormi tekstide tõlked" order="2" type="group"/>
            <cms:editable name="contact_title_ee" label="(EST) Kontaktivormi pealkiri" group="group_contact_form" order="1" type="text"/>
            <cms:editable name="contact_title_en" label="(ENG) Kontaktivormi pealkiri" group="group_contact_form" order="2" type="text"/>
            <cms:editable name="placeholder_name_ee" label="(EST) Nime lahter" group="group_contact_form" order="3" type="text"/>
            <cms:editable name="placeholder_name_en" label="(ENG) Nime lahter" group="group_contact_form" order="4" type="text"/>
            <cms:editable name="placeholder_email_ee" label="(EST) E-posti lahter" group="group_contact_form" order="5" type="text"/>
            <cms:editable name="placeholder_email_en" label="(ENG) E-posti lahter" group="group_contact_form" order="6" type="text"/>
            <cms:editable name="placeholder_message_ee" label="(EST) Sõnumi lahter" group="group_contact_form" order="7" type="text"/>
            <cms:editable name="placeholder_message_en" label="(ENG) Sõnumi lahter" group="group_contact_form" order="8" type="text"/>
            <cms:editable name="error_name_ee" label="(EST) VEATEADE nime lahter" group="group_contact_form" order="9" type="text"/>
            <cms:editable name="error_name_en" label="(ENG) VEATEADE nime lahter" group="group_contact_form" order="10" type="text"/>
            <cms:editable name="error_email_ee" label="(EST) VEATEADE E-posti lahter" group="group_contact_form" order="11" type="text"/>
            <cms:editable name="error_email_en" label="(ENG) VEATEADE E-posti lahter" group="group_contact_form" order="12" type="text"/>
            <cms:editable name="error_message_ee" label="(EST) VEATEADE sõnumi lahter" group="group_contact_form" order="13" type="text"/>
            <cms:editable name="error_message_en" label="(ENG) VEATEADE sõnumi lahter" group="group_contact_form" order="14" type="text"/>
            <cms:editable name="success_message_ee" label="(EST) Teade kirja eduka saatmise puhul" group="group_contact_form" order="15" type="text"/>
            <cms:editable name="success_message_en" label="(ENG) Teade kirja eduka saatmise puhul" group="group_contact_form" order="16" type="text"/>
            <cms:editable name="button_send_ee" label="(EST) Saatmisnupp" group="group_contact_form" order="17" type="text"/>
            <cms:editable name="button_send_en" label="(ENG) Saatmisnupp" group="group_contact_form" order="18" type="text"/>


    </cms:template>
<?php COUCH::invoke(); ?>