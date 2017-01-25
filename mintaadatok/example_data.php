<!-- Ez tartalmazza a template-be beilleszttt összes szöveget ami bármilyen kreált templatebe behívható -->
<?php

$tulajdonos = "MSZ-Vill Kft.";

/* CÍMADATOK */

$cimadat_footer_head ="Elérhetőségünk";
$cimadat_cegnev = "MSZ-Vill Kft.";
$cimadat_email = "mszvill@gmail.com";
$cimadat_weboldal = "";
$cimadat_irszam = "6782";
$cimadat_varos = "Mórahalom";
$cimadat_cim = "Remény utca 11.";
$cimadat_cim_kieg = "";
$cimadat_tel1 = "+36 20 576 09 54";
$cimadat_tel1_link = "+36205760954";

$cimadat_nyitva_head = "Nyitvatartás";
$cimadat_nyitva_h = "Hétfő : 08:00 - 17:00";
$cimadat_nyitva_k = "Kedd : 08:00 - 17:00";
$cimadat_nyitva_sz = "Szerda : 08:00 - 17:00";
$cimadat_nyitva_cs = "Csütörtök : 08:00 - 17:00";
$cimadat_nyitva_p = "Péntek : 08:00 - 17:00";
$cimadat_nyitva_szo = "Szombat : Zárva";
$cimadat_nyitva_v = "Vasárnap : Zárva";
$cimadat_nyitva_rov_hkn = "Hétfő - Péntek: 08:00-17:00";
$cimadat_nyitva_rov_hvg = "Szombat - Vasárnap: Zárva";

/* OLDALSTRUKTÓRA / MENÜPONTOK */

$menu = array
    (
        array("ID","MENÜPONT NEVE","SZÜLŐ MENÜPONT ID","LINK","TITLE","ALMENÜ VAN?(0=nincs/1=van)"),
        array("1","Főoldal","0","index","Nyitólap","0"),
        array("2","Rólunk","0","rolunk","Bemutatkozás","0"),
        array("3","Szolgáltatások","0","szolgaltatasok","Szolgáltatások","0"),
        array("4","Kapcsolat","0","kapcsolat","Kapcsolat","0")
    );


$menu_submenu = array
    (
        array("ID","PARENT ID","MAX LEVEL","UL CLASS"),
        array("1","0","1","footer-menu list-inline text-uppercase"),
        array("2","3","1","")
    );


/*Basic Slider*/
$basic_slider_bg = "$theme_images_url/slider/slider-1.jpg";
$basic_slider_content = array
    (
        array
            (
            array("ID","Tartalom")
            ),
        array
            (
            array("1","<h3 class='text-uppercase'>MSZ-Vill Kft.</h3>
                <h4 class='text-uppercase'>Démász partner szerelés</h4>
                <a class='text-uppercase' href='szolgaltatasok'>Megnézem</a>"),
            array("2","<h3 class='text-uppercase'>MSZ-Vill Kft.</h3>
                <h4 class='text-uppercase'>Erősáramú villanyszerelés</h4>
                <a class='text-uppercase' href='szolgaltatasok'>Megnézem</a>
                "),
            array("3","<h3 class='text-uppercase'>MSZ-Vill Kft.</h3>
                <h4 class='text-uppercase'>Erősáramú kisfeszültségű Kábel szerelés</h4>
                <a class='text-uppercase' href='szolgaltatasok'>Megnézem</a>
                "),
            array("4","<h3 class='text-uppercase'>MSZ-Vill Kft.</h3>
                <h4 class='text-uppercase'>Felülvizsgálatok</h4>
                <a class='text-uppercase' href='szolgaltatasok'>Megnézem</a>
                "),
            array("5","<h3 class='text-uppercase'>MSZ-Vill Kft.</h3>
                <h4 class='text-uppercase'>Akkreditált gyakorlati képzőhely</h4>
                <a class='text-uppercase' href='szolgaltatasok'>Megnézem</a>
                ")
        )
    );





/* ARTICLE HEAD TÍPUSÚ BLOKKOK */

$article_head = array
    (
        array("ID","Címsor tag(h1, h2,h3, stb)","Címsor szöveg","Alcím tag(h1, h2, h3, stb)","Alcím szöveg","CLASSOK"),
        array("1","h2","Kiemelt szolgáltatásaink","p","Ezek a fő tevékenységeink","content-head text-center"),
        array("2","h2","Rólunk","p","Ismerje meg cégünket","content-head content-head-lite text-center text-uppercase"),
        array("3","h2","Miért válasszon minket?","","","text-uppercase")
    );

/* ARTICLE TEXT TÍPUSÚ BLOKKOK */

$article_text = array
    (
        array("ID","CÍMSOR TAG(h1, h2,h3, stb)","CÍMSOR SZÖVEG","ALCÍM TAG(h1, h2, h3, stb)","ALCÍM SZÖVEG","SZÖVEG","CÍMSOR CLASSOK","CÍMSOR IKON","SZÖVEG CLASSOK","MODUL HÁTTÉRKÉP","MODUL HÁTTÉRKÉP CLASSOK"),
        array("1","h4","Rólunk","p","Üdvözöljük a DBWEB.HU Template 006 demó lapján","
            <p>Ismerje meg sablonunkat annak lapjait olvasgatva. Tapasztalja ki funkcióit. A követkző minta link az egyes számú aloldalra navigálja el önt.</p>
            <a class='bttn bttn-xs center-block' href='rolunk'>Rólunk</a>
            ","content-head text-center text-uppercase","","","",""),
        array("2","","","","","
            <p>Ut a mauris nisi. Donec ultrices lectus et velit commodo, non suscipit eros efficitur. Phasellus sed nulla non nulla dapibus convallis. Nam nunc purus, blandit sit amet enim quis, mattis rhoncus arcu. In dapibus dolor at velit ornare tincidunt. Donec varius leo vitae arcu lacinia dapibus. Nulla facilisi. In quis vestibulum ipsum. Ut elit sem, pellentesque a risus eu, feugiat gravida ex. Nullam placerat, enim sit amet fringilla laoreet, sem nisi lobortis risus, eu venenatis elit magna malesuada urna.</p>
            <a class='bttn bttn-xs center-block' href='rolunk'>Rólunk</a>
            ","content-head text-center text-uppercase","","text-justify","",""),
        array("3","h3","Cég bemutatkozása","","","
            <p class='jumbotron'>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nisl est, scelerisque eu arcu consectetur, fermentum consequat turpis. Cras efficitur tempus lorem sit amet viverra. Duis at placerat odio. Proin ex nisi, suscipit nec faucibus ut, maximus nec neque. Nulla et tristique magna. In varius orci sit amet gravida aliquam. Phasellus sodales arcu nec neque ornare, non efficitur nibh ultricies.</p>
            <p>Ut a mauris nisi. Donec ultrices lectus et velit commodo, non suscipit eros efficitur. Phasellus sed nulla non nulla dapibus convallis. Nam nunc purus, blandit sit amet enim quis, mattis rhoncus arcu. In dapibus dolor at velit ornare tincidunt. Donec varius leo vitae arcu lacinia dapibus. Nulla facilisi. In quis vestibulum ipsum. Ut elit sem, pellentesque a risus eu, feugiat gravida ex. Nullam placerat, enim sit amet fringilla laoreet, sem nisi lobortis risus, eu venenatis elit magna malesuada urna.</p>
            ","backnumber egy dark","","","",""),
       array("4","h3","Démász partner szerelés","","","
            <p class='jumbotron'>Teljes-körű ügyintézéssel tervezéstől a kivitelezésig</p>
            <p>Ut a mauris nisi. Donec ultrices lectus et velit commodo, non suscipit eros efficitur. Phasellus sed nulla non nulla dapibus convallis. Nam nunc purus, blandit sit amet enim quis, mattis rhoncus arcu. In dapibus dolor at velit ornare tincidunt. Donec varius leo vitae arcu lacinia dapibus. Nulla facilisi. In quis vestibulum ipsum. Ut elit sem, pellentesque a risus eu, feugiat gravida ex. Nullam placerat, enim sit amet fringilla laoreet, sem nisi lobortis risus, eu venenatis elit magna malesuada urna.</p>
            ","backnumber one dark","","","",""),
        array("5","h3","Erősáramú villanyszerelés","","","
            <p class='jumbotron'>Lakóházak, ingatlanok, csarnokok...</p>
            <p>Ut a mauris nisi. Donec ultrices lectus et velit commodo, non suscipit eros efficitur. Phasellus sed nulla non nulla dapibus convallis. Nam nunc purus, blandit sit amet enim quis, mattis rhoncus arcu. In dapibus dolor at velit ornare tincidunt. Donec varius leo vitae arcu lacinia dapibus. Nulla facilisi. In quis vestibulum ipsum. Ut elit sem, pellentesque a risus eu, feugiat gravida ex. Nullam placerat, enim sit amet fringilla laoreet, sem nisi lobortis risus, eu venenatis elit magna malesuada urna.</p>
            ","backnumber two dark","","","",""),
        array("6","h3","Erősáramú kisfeszültségű Kábel szerelés","","","
            <p class='jumbotron'>Kábel toldás, végzárás...</p>
            <p>Ut a mauris nisi. Donec ultrices lectus et velit commodo, non suscipit eros efficitur. Phasellus sed nulla non nulla dapibus convallis. Nam nunc purus, blandit sit amet enim quis, mattis rhoncus arcu. In dapibus dolor at velit ornare tincidunt. Donec varius leo vitae arcu lacinia dapibus. Nulla facilisi. In quis vestibulum ipsum. Ut elit sem, pellentesque a risus eu, feugiat gravida ex. Nullam placerat, enim sit amet fringilla laoreet, sem nisi lobortis risus, eu venenatis elit magna malesuada urna.</p>
            ","backnumber three dark","","","",""),
        array("7","h3","Felülvizsgálatok","","","
            <p class='jumbotron'>Érintésvédelmi felülvizsgálatok, Erősáramú berendezések felülvizsgálata, villámvédelmei felülvizsgálatok</p>
            <p>Ut a mauris nisi. Donec ultrices lectus et velit commodo, non suscipit eros efficitur. Phasellus sed nulla non nulla dapibus convallis. Nam nunc purus, blandit sit amet enim quis, mattis rhoncus arcu. In dapibus dolor at velit ornare tincidunt. Donec varius leo vitae arcu lacinia dapibus. Nulla facilisi. In quis vestibulum ipsum. Ut elit sem, pellentesque a risus eu, feugiat gravida ex. Nullam placerat, enim sit amet fringilla laoreet, sem nisi lobortis risus, eu venenatis elit magna malesuada urna.</p>
            ","backnumber four dark","","","",""),
        array("8","h3","Akkreditált gyakorlati képzőhely","","","
            <p class='jumbotron'>Villanyszerelő Tanulók szakmai gyakorlata, vizsgára felkészítés</p>
            <p>Ut a mauris nisi. Donec ultrices lectus et velit commodo, non suscipit eros efficitur. Phasellus sed nulla non nulla dapibus convallis. Nam nunc purus, blandit sit amet enim quis, mattis rhoncus arcu. In dapibus dolor at velit ornare tincidunt. Donec varius leo vitae arcu lacinia dapibus. Nulla facilisi. In quis vestibulum ipsum. Ut elit sem, pellentesque a risus eu, feugiat gravida ex. Nullam placerat, enim sit amet fringilla laoreet, sem nisi lobortis risus, eu venenatis elit magna malesuada urna.</p>
            ","backnumber five dark","","","",""),
        array("9","","","","","
            <p class='col-sm-6 text-center'>Vegye fel velünk a kapcsolatot!</p>
            <div class='col-sm-6 text-center'><a class='bttn-sm bttn-bdr-black' href='kapcsolat'>Kapcsolat</a></div>
            ","","","kapcsolatlink","",""),
        array("10","h2","Kiemelt szolgáltatásaink","","","
            <p>Tekintsen be legfontosabb szolgáltatásaink listájába.</p>
            ","text-uppercase","","SZÖVEG CLASSOK","","")
    );



/* ARTICLE IMAGE TÍPUSÚ BLOKK */

$article_image = array
    (
        array("KÉP_ID","KÉP_THUMB_URL","KÉP_URL","KÉP_TITLE","KÉP_NAGYÍTÁS(I/N)","KÉP_LINK(I/N)","KÉP_LINK_URL"),
        array("1","","$theme_images_url/bemutatkozas-img.jpg","Rólunk","n","i","rolunk"),
        array("2","","$theme_images_url/rolunk/rolunk_img.jpg","Rólunk kép 1","i","n",""),
        array("3","","$theme_images_url/rolunk/img-2.jpg","Rólunk kép 2","n","n",""),
        array("4","","$theme_images_url/rolunk/img-3.jpg","Rólunk kép 3","n","n",""),
        array("5","","$theme_images_url/szolgaltatasok/szolgaltatas_1.jpg","Démász partner","i","n",""),
        array("6","","$theme_images_url/szolgaltatasok/szolgaltatas_2.jpg","Erősáramú villanyszerelés","i","n",""),
        array("7","","$theme_images_url/szolgaltatasok/szolgaltatas_3.jpg","Erősáramú kisfeszültségű Kábel szerelés","i","n",""),
        array("8","","$theme_images_url/szolgaltatasok/szolgaltatas_4.jpg","Felülvizsgálatok","i","n",""),
        array("9","","$theme_images_url/szolgaltatasok/szolgaltatas_5.jpg","Akkreditált gyakorlati képzőhely","i","n","")
    );

/* ARTICLE LISTA TÍPUSÚ BLOKK */

$article_contlist = array
    (
        array
            (
            array("ID","IKON CLASS","IKONHELY TARTALOM","CÍMSOR TAG(h1,h2,stb)","CÍMSOR SZÖVEG","LINK_URL","SZÖVEG","BLOKK KÉP")            
            ),
        array
            (
            array("1","","","h3","Démász partner szerelés","szolgaltatasok","
                <p>teljes-körű ügyintézéssel tervezéstől a kivitelezésig</p>
                <a href='szolgaltatasok'>Tovább</a>
                ","$theme_images_url/szolgaltatasok/szolgaltatas1.jpg"),
            array("2","","","","Erősáramú villanyszerelés","szolgaltatasok","
                <p>lakóházak, ingatlanok, csarnokok...</p>
                <a href='szolgaltatasok'>Tovább</a>
                ","$theme_images_url/szolgaltatasok/szolgaltatas2.jpg"),
            array("3","","","","Erősáramú kisfeszültségű kábel szerelés","szolgaltatasok","
                <p>Kábel toldás, végzárás...</p>
                <a href='szolgaltatasok'>Tovább</a>
                ","$theme_images_url/szolgaltatasok/szolgaltatas3.jpg"),
            array("4","","","","Felülvizsgálatok","szolgaltatasok","
                <p>érintésvédelmi felülvizsgálatok, Erősáramú berendezések felülvizsgálata, villámvédelmei felülvizsgálatok</p>
                <a href='szolgaltatasok'>Tovább</a>
                ","$theme_images_url/szolgaltatasok/szolgaltatas4.jpg"),
            array("5","","","","Akkreditált gyakorlati képzőhely","szolgaltatasok","
                <p>Villanyszerelő Tanulók szakmai gyakorlata, vizsgára felkészítés</p>
                <a href='szolgaltatasok'>Tovább</a>
                ","$theme_images_url/szolgaltatasok/szolgaltatas5.jpg")
            )
    );

/* ARTICLE TABELEMENTS TÍPUSÚ BLOKK */

$article_tab = array
    (
        array
            (
            array("ID","TAB NEVE","TAB AZONOSÍTÓ","AKTÍV TAB (I/N)","KÉP URL","KÉP ALT","SZÖVEG")
            ),
        array
            (
            array("1","Tapasztalat","sectionA","i","$theme_images_url/rolunk/img-1.jpg","rólunk kép 1","
                Nullam vitae diam non ipsum commodo rutrum. Etiam ex mi, faucibus et enim ut, auctor lobortis nunc. Praesent quis risus pharetra, iaculis velit et, facilisis felis. Aliquam enim quam, rutrum ut urna id, tristique eleifend nibh. Phasellus erat lacus, feugiat nec auctor ac, semper vitae lectus.
                "),
            array("2","Eszközök","sectionB","n","$theme_images_url/rolunk/img-2.jpg","rólunk kép 2","
                Aenean luctus elementum blandit. Duis lobortis lorem vitae diam scelerisque, ac efficitur nibh bibendum. Vivamus vel tortor sit amet turpis venenatis commodo nec ut orci. Duis vulputate quam auctor velit vehicula, et imperdiet elit eleifend. Ut lobortis fringilla velit vel tincidunt. Mauris sed augue dictum, hendrerit urna eu, pellentesque quam.
                "),
            array("3","Minőség","sectionC","n","$theme_images_url/rolunk/img-3.jpg","rólunk kép 3","
                Ut a mauris nisi. Donec ultrices lectus et velit commodo, non suscipit eros efficitur. Phasellus sed nulla non nulla dapibus convallis. Nam nunc purus, blandit sit amet enim quis, mattis rhoncus arcu. In dapibus dolor at velit ornare tincidunt. Donec varius leo vitae arcu lacinia dapibus. Nulla facilisi. In quis vestibulum ipsum. Ut elit sem, pellentesque a risus eu, feugiat gravida ex.
                ")
            )
    );

/* ARTICLE ACCORDION TÍPUSÚ BLOKK */

$article_accordion = array
    (
        array
            (
                array("ID","PANEL IKON","PANEL FELIRAT","COLLAPSE TARTALOM","COLLAPSE TARTALOM ID")
            ),
        array
            (
                array("1","fa fa-cog","Démász partner szerelés","
                    Teljes-körű ügyintézéssel tervezéstől a kivitelezésig
                    ","collapseOne"),
                array("2","fa fa-cog","Erősáramú villanyszerelés","
                    Lakóházak, ingatlanok, csarnokok...
                    ","collapseTwo"),
                array("3","fa fa-cog","Erősáramú kisfeszültségű Kábel szerelés","
                    Kábel toldás, végzárás...
                    ","collapseFree"),
                array("4","fa fa-cog","Felülvizsgálatok","
                    Érintésvédelmi felülvizsgálatok, Erősáramú berendezések felülvizsgálata, villámvédelmei felülvizsgálatok
                    ","collapseFour"),
                array("5","fa fa-cog","Akkreditált gyakorlati képzőhely","
                    Villanyszerelő Tanulók szakmai gyakorlata, vizsgára felkészítés
                    ","collapseFour")
            )
    );

/* SOCIAL NETWORKS */
$social_networks = array
    (
        array("ID","SZOCIÁLIS HÁLÓ NEVE","SZOCIÁLIS HÁLÓ IKON CLASS","SZOCIÁLIS HÁLÓ LINK"),
        array("1","facebook","fa fa-facebook","http://facebook.com"),
        array("2","twitter","fa fa-twitter","http://twitter.com"),
        array("3","google +","fa fa-google-plus","http://plus.google.com")
    );
/* FŐMENÜ KIEGÉSZÍTŐTARTALOM */
$fomenu_kieg = array
    (
        array("Írjon nekünk","kapcsolat")
    );


/* TOPBAR INFO BLOKK START */

$hivjon_most = "Hívjon most: ";



/* FOOTER */

$footer_background = "$theme_images_url/footer_2.jpg";

/* NYITÓLAP SZOLGÁLTATÁSOK BLOKK START */

$article_2_background ="$theme_images_url/rolunk_bg.jpg";




/*************************/
/* KAPCSOLAT OLDAL START */
/*************************/

$article_8_cim = "Cím";
$article_8_telefon = "Telefonszám";
$article_8_email = "E-mail";


/*****************/
/* MODULOK START */
/*****************/

/* MUNKÁINKBÓL MODUL 1 BLOKK START */

$modul_1_head ="Munkáinkból";
$modul_1_subhead ="Referencia munkáink száma szinte végtelen, rengeteg megbízást teljesítünk határidőre a megrendelőink igényei szerint.";
$modul_1_morelink = array
    (
        array("01","További munkáink","munkaink","munkáink")
    );
$modul_1_galeri_url = "$theme_images_url/munkaink";
$modul_1_galeri_thumb_url ="$theme_images_url/munkaink/thumb";
$modul_1_content = array
  (
      array("$modul_1_galeri_url/1.jpg","$modul_1_galeri_url/1.jpg","Referencia Egy","Üzletünk kívülről","weboldal, seo","#"),
      array("$modul_1_galeri_url/2.jpg","$modul_1_galeri_url/2.jpg","Referencia 2","Referencia Kettő","weboldal, blog, seo","#"),
      array("$modul_1_galeri_url/3.jpg","$modul_1_galeri_url/3.jpg","Referencia 3","Referencia Három","weboldal, blog","#"),
      array("$modul_1_galeri_url/4.jpg","$modul_1_galeri_url/4.jpg","Referencia 4","Referencia Négy","webáruház","#"),
      array("$modul_1_galeri_url/5.jpg","$modul_1_galeri_url/5.jpg","Referencia 5","Referencia Öt","webáruház, seo, blog","#")
  );

/* MUNKÁINKBÓL MODUL 1 BLOKK STOP */

$modul_3_content = array
  (
      array("$modul_1_galeri_url/1.jpg","$modul_1_galeri_url/1.jpg","Referencia Egy","Üzletünk kívülről","weboldal, seo","#"),
      array("$modul_1_galeri_url/2.jpg","$modul_1_galeri_url/2.jpg","Referencia 2","Referencia Kettő","weboldal, blog, seo","#"),
      array("$modul_1_galeri_url/3.jpg","$modul_1_galeri_url/3.jpg","Referencia 3","Referencia Három","weboldal, blog","#"),
      array("$modul_1_galeri_url/4.jpg","$modul_1_galeri_url/4.jpg","Referencia 4","Referencia Négy","webáruház","#"),
      array("$modul_1_galeri_url/5.jpg","$modul_1_galeri_url/5.jpg","Referencia 5","Referencia Öt","webáruház, seo, blog","#")
  );

/****************/
/* MODULOK STOP */
/****************/

?>
