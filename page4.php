<?php require_once( 'couch/cms.php' ); 
include('header.php'); ?>
<cms:template title='Õppetöö' />

<cms:editable name='main_studies' type='richtext'>
<section class="mbr-section content4 cid-qLBfffq1Ei" id="content4-1h">

    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
               
                <h2 class="align-center pb-3 mbr-fonts-style display-2">Õppematerjalid</h2>
                
            </div>
        </div>
    </div>
</section>

<section class="mbr-section article content12 cid-qLBffgr8R1" id="content12-1i">
     
    <div class="container">
        <div class="media-container-row">
            <div class="mbr-text counter-container col-12 col-md-8 mbr-fonts-style display-7">
               
                <div><strong>Noorem tarkvaraarendaja (veebispetsialist)</strong></div><div><strong><br></strong></div><ul>
                    <li><strong>Materjal 1&nbsp;</strong> - Materjali lühikirjeldus. <a href="http://at13.ikt.khk.ee">Vaata siit!</a></li>
                    <li><strong>Materjal 2&nbsp;</strong>- Materjali lühikirjeldus. <a href="http://at13.ikt.khk.ee">Vaata siit!</a></li>
                    <li><strong>Materjal 3</strong> - Materjali lühikirjeldus. <a href="http://at13.ikt.khk.ee">Vaata siit!</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
</cms:editable>

<cms:editable name='main_konsultatsioon' type='richtext'>
<section class="mbr-section article content12 cid-qLBffhcnrA" id="content12-1j">

       <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
               
                <h2 class="align-center pb-3 mbr-fonts-style display-2">Konsultatsiooniajad</h2>
                
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="media-container-row">
            <div class="mbr-text counter-container col-12 col-md-8 mbr-fonts-style display-7">
                <div><strong>Õpetaja 1</strong></div><div><strong><br></strong></div><ul>
                    <li><strong>Aeg 1</strong> - lühikirjeldus. </li>
                </ul>
            </div>
        </div>
    </div>
</section>
</cms:editable>

<?php COUCH::invoke();
include('footer.php'); ?>