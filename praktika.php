<?php require_once( 'couch/cms.php' ); ?>
    <cms:embed "header.php" />

    <cms:template title='Praktika' />

    <section class="mbr-section content4 cid-qLBdf21SG5">
        <div class="container">
            <div class="media-container-row">
                <div class="title col-12 col-md-8">
                    <h2 class="align-center pb-3 mbr-fonts-style display-2">Praktikapakkumised</h2>
                </div>
            </div>
        </div>
    </section>

    <section class="mbr-section article content12 cid-qLBdC3oald">
        <div class="container">
            <div class="media-container-row">
                <div class="mbr-text counter-container col-12 col-md-8 mbr-fonts-style display-7">
                    <cms:editable name='main_content' label="Praktikapakkumised" type='richtext'>
                        
                    </cms:editable>
                </div>
            </div>
        </div>
    </section>

    <cms:embed "footer.php" />
<?php COUCH::invoke(); ?>