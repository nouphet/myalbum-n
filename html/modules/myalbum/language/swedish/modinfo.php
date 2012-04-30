<?php
// Module Info

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) || ! defined( 'MYALBUM_MI_LOADED' ) ) {







// Appended by Xoops Language Checker -GIJOE- in 2006-05-26 06:00:52
define('_ALBM_MYALBUM_ADMENU_MYTPLSADMIN','Templates');

// Appended by Xoops Language Checker -GIJOE- in 2004-10-04 16:06:33
define('_ALBM_CFG_DEFAULTORDER','Default order in category\'s view');

// Appended by Xoops Language Checker -GIJOE- in 2004-06-24 17:58:59
define('_ALBM_CFG_USESITEIMG','Anvd [siteimg] vid ImageManager Integration');
define('_ALBM_CFG_DESCUSESITEIMG','Integrated Image Manager input [siteimg] istlet f [img].<br />Ni mte modifiera module.textsanitizer.php eller varje modul f att aktivera [siteimg] taggen.');

// Appended by Xoops Language Checker -GIJOE- in 2004-05-19 13:56:06
define('_ALBM_CFG_MIDDLEPIXEL','Max bild storlek vid visning av bilder en och en.');
define('_ALBM_CFG_DESCMIDDLEPIXEL','Specificera (breddxhd) t.ex. 480x480');

// Appended by Xoops Language Checker -GIJOE- in 2004-05-17 18:42:55
define('_ALBM_CFG_DESCPERPAGE','Ange valbara nummer separerade med \'|\' t.ex.) 10|20|50|100');

// Appended by Xoops Language Checker -GIJOE- in 2004-05-05 15:14:38
define('_ALBM_CFG_ALLOWNOIMAGE','Tills inskickade utan bilder');
define('_ALBM_CFG_ALLOWEDEXTS','Filtyper som kan laddas upp');
define('_ALBM_CFG_DESCALLOWEDEXTS','Ange fildelser med avgrsare \'|\'. (t.ex. \'jpg|jpeg|gif|png\').<br />Alla tecken mte vara skrivna i smbokster. Ange inga punkter eller mellanrum');
define('_ALBM_CFG_ALLOWEDMIME','MIME Typer som kan laddas upp');
define('_ALBM_CFG_DESCALLOWEDMIME','Ange MIME Typer med avgrsare \'|\'. (t.ex. \'image/gif|image/jpeg|image/png\')<br />Om Ni inte vill att filen skall kontrolleras mot MIME Typ, lna ftet blankt.');
define('_ALBM_MYALBUM_ADMENU_IMPORT','Importera Bilder');
define('_ALBM_MYALBUM_ADMENU_EXPORT','Exportera Bilder');
define('_ALBM_MYALBUM_ADMENU_MYBLOCKSADMIN','Block&Grupp Administration');

define( 'MYALBUM_MI_LOADED' , 1 ) ;

// The name of this module
define("_ALBM_MYALBUM_NAME","MyAlbum");

// A brief description of this module
define("_ALBM_MYALBUM_DESC","Skapar ett fotoalbum d anvdare kan sa/lga till/bedma olika foto.");

// Names of blocks for this module (Not all module has blocks)
define("_ALBM_BNAME_RECENT","Nyinkommna Foto");
define("_ALBM_BNAME_HITS","Topplacerade Foto");
define("_ALBM_BNAME_RANDOM","Slumpvalt Foto");
define("_ALBM_BNAME_RECENT_P","Nyinkommna Foto med Miniatyrer");
define("_ALBM_BNAME_HITS_P","Topplacerade Foto med Miniatyrer");

// Config Items
define( "_ALBM_CFG_PHOTOSPATH" , "Sv till Fotona" ) ;
define( "_ALBM_CFG_DESCPHOTOSPATH" , "Sv till katalogen som XOOPS  installerad i.<br />(Fsta tecknet mte vara '/'. Sista tecknet skall INTE vara  '/'.)<br />Denna katalogs rtigheter  777 eller 707 i unix." ) ;
define( "_ALBM_CFG_THUMBSPATH" , "Sv till Miniatyrbilderna" ) ;
define( "_ALBM_CFG_DESCTHUMBSPATH" , "Samma som 'Sv till Fotona'." ) ;
//define( "_ALBM_CFG_USEIMAGICK" , "Anvd ImageMagick f behandling av bilder" ) ;
//define( "_ALBM_CFG_DESCIMAGICK" , "Not use ImageMagick cause Not work resize or rotate the main photo, and make thumbnails by GD.<br />Det  btre att anvda ImageMagick om du kan." ) ;
define( "_ALBM_CFG_IMAGINGPIPE" , "Paket f bildbehandling" ) ;
define( "_ALBM_CFG_DESCIMAGINGPIPE" , "Ntan alla PHP installationer kan anvda GD. Men GD  funktionellt underlsen de andra tvpaketen.<br />Det  btre att anvda ImageMagick eller NetPBM om du kan." ) ;
define( "_ALBM_CFG_FORCEGD2" , "Tvinga GD2 konvertering" ) ;
define( "_ALBM_CFG_DESCFORCEGD2" , "en om GD  paketerad tillsammans med PHP och den anvder GD2(truecolor) konvertering.<br />Vissa PHP konfigurationer misslyckas att skapa miniatyrbilder i GD2<br />Denna instlning gler endast om man anvder GD" ) ;
define( "_ALBM_CFG_IMAGICKPATH" , "Sv till ImageMagick" ) ;
define( "_ALBM_CFG_DESCIMAGICKPATH" , "Fullstdig sv till 'convert'<br />(Sista tecknet skall INTE vara '/'.)<br />Denna instlning gler endast om man anvder ImageMagick" ) ;
define( "_ALBM_CFG_NETPBMPATH" , "Sv till NetPBM" ) ;
define( "_ALBM_CFG_DESCNETPBMPATH" , "Fullstdig sv till 'pnmscale' mm.<br />(Sista tecknet skall INTE vara '/'.)<br />Denna instlning gler endast om man anvder NetPBM" ) ;
define( "_ALBM_CFG_POPULAR" , "Trfar f att bli Popul" ) ;
define( "_ALBM_CFG_NEWDAYS" , "Dagar mellan visning av iconer f 'new'&'update'" ) ;
define( "_ALBM_CFG_NEWPHOTOS" , "Antal Foto som Nya pTop Page" ) ;
define( "_ALBM_CFG_PERPAGE" , "Visade Foto per sida" ) ;
define( "_ALBM_CFG_MAKETHUMB" , "G Miniatyr bild" ) ;
define( "_ALBM_CFG_DESCMAKETHUMB" , "N Ni drar 'Nej' till 'Ja',  det lpligt att 'Ga om Miniatyrer'." ) ;
//define( "_ALBM_CFG_THUMBWIDTH" , "Bredd pMiniatyrbild" ) ;
//define( "_ALBM_CFG_DESCTHUMBWIDTH" , "Hden pMiniatyrbilden avgs automatiskt utifr bredden." ) ;
define( "_ALBM_CFG_THUMBSIZE" , "Storlek pMiniatyrer (pixel)" ) ;
define( "_ALBM_CFG_THUMBRULE" , "Berningsregel f att ga miniatyrer" ) ;
define( "_ALBM_CFG_WIDTH" , "Max Foto bredd" ) ;
define( "_ALBM_CFG_DESCWIDTH" , "Detta inneb att fotots bredd kommer att fdras.<br />Om du anvder GD utan truecolor, inneb detta begrsning av bredden." ) ;
define( "_ALBM_CFG_HEIGHT" , "Max foto hd" ) ;
define( "_ALBM_CFG_DESCHEIGHT" , "Samma som 'Max foto bredd'." ) ;
define( "_ALBM_CFG_FSIZE" , "Max filstorlek" ) ;
define( "_ALBM_CFG_DESCFSIZE" , "Begrsning av storleken pden uppladdade filen." ) ;
define( "_ALBM_CFG_NEEDADMIT" , "Beher godknande f nytt foto" ) ;
define( "_ALBM_CFG_ADDPOSTS" , "Det nummer som lgs till 'User's posts' vid publicering av ett foto." ) ;
define( "_ALBM_CFG_DESCADDPOSTS" , "Normalt, 0 eller 1. Mindre  0 betyder 0" ) ;

define( "_ALBM_CFG_CATONSUBMENU" , "Registrera Topp kategorier i undermeny" ) ;
define( "_ALBM_CFG_NAMEORUNAME" , "Publicistens namn visas" ) ;
define( "_ALBM_CFG_DESCNAMEORUNAME" , "Vj vilket 'namn' som visas" ) ;
define( "_ALBM_OPT_USENAME" , "Riktigt Namn" ) ;
define( "_ALBM_OPT_USEUNAME" , "Alias Namn" ) ;

define( "_ALBUM_OPT_CALCFROMWIDTH" , "Bredd:specificerad  hd:automatisk" ) ;
define( "_ALBUM_OPT_CALCFROMHEIGHT" , "Bredd:automatisk  bredd:specificerad" ) ;
define( "_ALBUM_OPT_CALCWHINSIDEBOX" , "ange storlek i specificerad ruta" ) ;

// Sub menu titles
define("_ALBM_TEXT_SMNAME1","Lg till");
define("_ALBM_TEXT_SMNAME2","Popula");
define("_ALBM_TEXT_SMNAME3","Topplacerade");
define("_ALBM_TEXT_SMNAME4","Mina Foto");

// Names of admin menu items
define("_ALBM_MYALBUM_ADMENU0","Inskickade foto");
define("_ALBM_MYALBUM_ADMENU1","Foto Underhl");
define("_ALBM_MYALBUM_ADMENU2","Lg till/Editera Kategorier");
define("_ALBM_MYALBUM_ADMENU3","Kontrollera Konf&Milj);
define("_ALBM_MYALBUM_ADMENU4","Batch Registrering");
define("_ALBM_MYALBUM_ADMENU5","G om Miniatyrer");

?><?php
// Appended by Xoops Language Checker -GIJOE- in 2004-01-27 15:37:03
define('_ALBM_CFG_VIEWCATTYPE','Typ av vy i Kategorier');
define('_ALBM_CFG_COLSOFTABLEVIEW','Antal kolumner i tabell vyn');
define('_ALBM_OPT_VIEWLIST','List Vy');
define('_ALBM_OPT_VIEWTABLE','Tabell Vy');
define('_ALBM_MYALBUM_ADMENU_GPERM','Globala Rtigheter');
define('_MI_MYALBUM_GLOBAL_NOTIFY','Globala');
define('_MI_MYALBUM_GLOBAL_NOTIFYDSC','Globala underrtelseval rande myAlbum-P');
define('_MI_MYALBUM_CATEGORY_NOTIFY','Kategori');
define('_MI_MYALBUM_CATEGORY_NOTIFYDSC','Underrtelseval som gler f denna fotokategori');
define('_MI_MYALBUM_PHOTO_NOTIFY','Foto');
define('_MI_MYALBUM_PHOTO_NOTIFYDSC','Underrtelseval som gler f detta foto');
define('_MI_MYALBUM_GLOBAL_NEWPHOTO_NOTIFY','Nytt Foto');
define('_MI_MYALBUM_GLOBAL_NEWPHOTO_NOTIFYCAP','Underrta mig n not nytt foto har lagts till');
define('_MI_MYALBUM_GLOBAL_NEWPHOTO_NOTIFYDSC','Mottag underrtelse n not nytt foto har lagts till');
define('_MI_MYALBUM_GLOBAL_NEWPHOTO_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE}: Automatisk underrtelse : Nytt foto');
define('_MI_MYALBUM_CATEGORY_NEWPHOTO_NOTIFY','Nytt Foto');
define('_MI_MYALBUM_CATEGORY_NEWPHOTO_NOTIFYCAP','Underrta mig n not nytt foto har lagts till i denna kategori');
define('_MI_MYALBUM_CATEGORY_NEWPHOTO_NOTIFYDSC','Mottag underrtelse n not nytt foto har lagts till i denna kategori');
define('_MI_MYALBUM_CATEGORY_NEWPHOTO_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE}: Automatisk underrtelse : Nytt foto');

//d3comment integration
define("_ALBM_COM_DIRNAME","Comment integration directory");
define("_ALBM_COM_DIRNAMEDSC","When use D3-comment integration system. <br/>write your d3forum (html) directory <br/>If you do not use comments or use xoops comment system, leave this in empty.");
define("_ALBM_COM_FORUM_ID","d3forum_id");
define("_ALBM_COM_FORUM_IDDSC","When you set above integration diredtory, write forum_id");
define("_ALBM_COM_ORDER","Order of comment integration");
define("_ALBM_COM_ORDERDSC","When you set comment integration, select display order of comment posts");
define("_ALBM_COM_VIEW","View of comment-integration");
define("_ALBM_COM_VIEWDSC","select flat or thread");
define("_ALBM_COM_POSTSNUM","'Max posts displayed in comment integration");

}

?>
