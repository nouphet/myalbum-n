<?php
//Polish translation by kaper@zk-p.pl

// Module Info

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) || ! defined( 'MYALBUM_MI_LOADED' ) ) {


// Appended by Xoops Language Checker -GIJOE- in 2006-05-26 06:00:53
define('_ALBM_MYALBUM_ADMENU_MYTPLSADMIN','Templates');

define( 'MYALBUM_MI_LOADED' , 1 ) ;

// The name of this module
define("_ALBM_MYALBUM_NAME","ZdjÛƒia");

// A brief description of this module
define("_ALBM_MYALBUM_DESC","Creates a photos section where users can search/submit/rate various photos.");

// Names of blocks for this module (Not all module has blocks)
define("_ALBM_BNAME_RECENT","Najnowsze zdjÛƒia");
define("_ALBM_BNAME_HITS","Najpopularniejsze zdjÛƒia");
define("_ALBM_BNAME_RANDOM","Losowe zdjÛƒie");
define("_ALBM_BNAME_RECENT_P","Najnowsze zdjÛƒia z miniaturami");
define("_ALBM_BNAME_HITS_P","Najpopularniejsze zdjÛƒia z miniaturami");

// Config Items
define( "_ALBM_CFG_PHOTOSPATH" , "é¶cieéøka do plikÖÿ zdjÙË" ) ;

define( "_ALBM_CFG_DESCPHOTOSPATH" , "é¶cieéøka wzglÛ≈na - podkatalog gé≥Öÿnego katalogu XOOPS<br />(é¶cieéøka powinna zaczynaÊ siÍ od znaku '/', nie powinna koÅƒzyÊ siÍ znakiem '/'.)<br />W systemie Unix prawa dostÛ—u powinny byÊ 777 lub 707." ) ;
define( "_ALBM_CFG_THUMBSPATH" , "é¶cieéøka do plikÖÿ miniaturek" ) ;
define( "_ALBM_CFG_DESCTHUMBSPATH" , "Uwagi analogiczne jak wobec é∂cieéøki do plikÖÿ zdjÙË" );
//define( "_ALBM_CFG_USEIMAGICK" , "Do obrÖ√ki obrazÖÿ uéøywaj biblioteki ImageMagick") ;
//define( "_ALBM_CFG_DESCIMAGICK" , "Not use ImageMagick cause Not work resize or rotate the main photo, and make thumbnails by GD.<br />You'd better use ImageMagick if you can." ) ;
define( "_ALBM_CFG_IMAGINGPIPE" , "Biblioteka do obrÖ√ki obrazÖÿ" ) ;
define( "_ALBM_CFG_DESCIMAGINGPIPE" , "PHP standardowo korzysta z biblioteki GD. Jednak ze wzglÛ≈u na problemy wystÛ—ujé±ce z té± biblioteké±, wskazane jest uéøycie jednej z pozostaé≥ych bibliotek." ) ;
define( "_ALBM_CFG_FORCEGD2" , "Wymué∂ konwersjÍ do formatu GD2" ) ;
define( "_ALBM_CFG_DESCFORCEGD2" , "Wymusza konwersjÍ do formatu GD2 (truecolor) nawet jeé∂li dystrybucja PHP zawiera bibliotekÍ GD. Uwaga - w niektÖ”ych konfiguracjach PHP moéøe nie utworzyÊ miniatur GD2.<br />Ta opcja ma znaczenie jedynie w przypadku uéøycia biblioteki GD." ) ;
define( "_ALBM_CFG_IMAGICKPATH" , "é¶cieéøka do biblioteki ImageMagick" ) ;
define( "_ALBM_CFG_DESCIMAGICKPATH" , "é¶cieéøka do pliku 'convert'<br />(nie powinna koÅƒzyÊ siÍ '/'.)<br />Opcja ma znaczenie jedynie w przypadku uéøycia biblioteki ImageMagick" ) ;
define( "_ALBM_CFG_NETPBMPATH" , "é¶cieéøka do biblioteki NetPBM" ) ;
define( "_ALBM_CFG_DESCNETPBMPATH" , "é¶cieéøka do plikÖÿ 'pnmscale' itd.<br />(nie powinna koÅƒzyÊ siÍ '/'.)<br />Opcja ma znaczenie jedynie w przypadku uéøycia biblioteki NetPBM" ) ;
define( "_ALBM_CFG_POPULAR" , "Liczba odsé≥on do uznania za popularny" ) ;
define( "_ALBM_CFG_NEWDAYS" , "Liczba dni wyé∂wietlania oznaczeÒ 'nowy', 'zmieniony'" ) ;
define( "_ALBM_CFG_NEWPHOTOS" , "Liczba nowych zdjÙË wyé∂wietlanych na gé≥Öÿnej stronie modué≥u" ) ;
define( "_ALBM_CFG_DEFAULTORDER" , "Default order in category's view" ) ;
define( "_ALBM_CFG_PERPAGE" , "Opcje wyboru liczby zdjÙË na stronie" ) ;
define( "_ALBM_CFG_DESCPERPAGE" , "Liczby rozdzielone znakiem '|'<br />np. 10|20|50|100" ) ;
define( "_ALBM_CFG_ALLOWNOIMAGE" , "Dopuszczalne nadsyé≥anie bez obrazÖÿ" ) ;
define( "_ALBM_CFG_MAKETHUMB" , "Miniatury z plikÖÿ" ) ;
define( "_ALBM_CFG_DESCMAKETHUMB" , "Zamiast generowaÊ miniatury przy kaéødym otwieraniu strony (obcié±éøenie serwera!), korzysta z gotowych plikÖÿ miniatur. Jeé∂li nie ma miniatur, moéøna utworzyÊ je w opcji Zarzé±dzanie Miniaturami." ) ;
//define( "_ALBM_CFG_THUMBWIDTH" , "Szerokoé∂Ê miniatury" ) ;
//define( "_ALBM_CFG_DESCTHUMBWIDTH" , "Wysokoé∂Ê miniatury zostanie obliczona proporcjonalnie do szerokoé∂ci" ) ;
define( "_ALBM_CFG_THUMBSIZE" , "Rozmiar miniatur (piksele)" ) ;
define( "_ALBM_CFG_THUMBRULE" , "Metoda obliczania rozmiaru miniatury" ) ;
define( "_ALBM_CFG_WIDTH" , "Dopuszczalna szerokoé∂Ê zdjÛƒia" ) ;
define( "_ALBM_CFG_DESCWIDTH" , "ZdjÛƒie zostanie przeskalowane do tego rozmiaru." ) ;
define( "_ALBM_CFG_HEIGHT" , "Dopuszczalna wysokoé∂Ê zdjÛƒia" ) ;
define( "_ALBM_CFG_DESCHEIGHT" , "ZdjÛƒie zostanie przeskalowane do tego rozmiaru" ) ;
define( "_ALBM_CFG_FSIZE" , "Dopuszczalny rozmiar pliku" ) ;
define( "_ALBM_CFG_DESCFSIZE" , "Rozmiar pliku sprawdzany przy nadsyé≥aniu zdjÛƒia" ) ;
define( "_ALBM_CFG_MIDDLEPIXEL" , "Dopuszczalna wielkoé∂Ê zdjÛƒia wyé∂wietlanego pojedynczo" ) ;
define( "_ALBM_CFG_DESCMIDDLEPIXEL" , "(szerokoé∂Ê)x(wysokoé∂Ê)<br />np. 480x480" ) ;
define( "_ALBM_CFG_ADDPOSTS" , "ZwiÛÃszenie licznika nadesé≥anych wiadomoé∂ci" ) ;
define( "_ALBM_CFG_DESCADDPOSTS" , "Wartoé∂Ê, o jaké±, po nadesé≥aniu kaéødego zdjÛƒia, zostanie zwiÛÃszony licznik wiadomoé∂ci nadesé≥anych przez uéøytkownika. <br/> Zwykle 0 lub 1. Wartoé∂Ê ujemna oznacza 0" ) ;
define( "_ALBM_CFG_CATONSUBMENU" , "Wyé∂wietlaÊ kategorie gé≥Öÿne w podmenu menu systemowego" ) ;
define( "_ALBM_CFG_NAMEORUNAME" , "Wyé∂wietlana nazwa / imiÍ uéøytkownika" ) ;
define( "_ALBM_CFG_DESCNAMEORUNAME" , "Autor wyé∂wietlany pod nazwé± (login) lub nazwiskiem" ) ;
define( "_ALBM_CFG_VIEWCATTYPE" , "SposÖ√ wyé∂wietlania w kategorii" ) ;
define( "_ALBM_CFG_ALLOWEDEXTS" , "Dopuszczalne rozszerzenia plikÖÿ" ) ;
define( "_ALBM_CFG_DESCALLOWEDEXTS" , "Rozszerzenia rozdzielone znakiem '|'<br/> np. 'jpg|jpeg|gif|png' .<br />Maé≥e litery, bez kropek. <br/>Ze wzgÛ≈Öÿ bezpieczeÅ‘twa nie dopuszczaj rozszerzeÒ 'php', 'html'...!" ) ;
define( "_ALBM_CFG_ALLOWEDMIME" , "Dopuszczalne typy MIME" ) ;
define( "_ALBM_CFG_DESCALLOWEDMIME" , "Typy MIME rozdzielone znakiem '|' (np 'image/gif|image/jpeg|image/png')<br />Puste pole - brak sprawdzania typu MIME" ) ;
define( "_ALBM_CFG_USESITEIMG" , "Obsé≥uga znacznika [siteimg] przez Menedéøer ObrazÖÿ" ) ;
define( "_ALBM_CFG_DESCUSESITEIMG" , "Znacznik [siteimg] udostÛ—nia obrazy z podkatalogÖÿ XOOPS:<br>
[siteimg=images/obraz.gif] daje kod<br>
<.img src= 'http://adres.xoops/images/obraz.gif'><br>
Uwaga: obsé≥uga znacznika dotyczy tylko tego modué≥u. Dla innych modué≥Öÿ naleéøy zmodyfikowaÊ odpowiedni plik textsanitizer.php." ) ;
define( "_ALBM_CFG_COLSOFTABLEVIEW" , "Liczba kolumn w widoku tabelarycznym" ) ;
define( "_ALBM_OPT_USENAME" , "Nazwisko" ) ;
define( "_ALBM_OPT_USEUNAME" , "Nazwa (login)" ) ;

define( "_ALBUM_OPT_CALCFROMWIDTH" , "szerokoé∂Ê:podana wysokoé∂Ê:auto" ) ;
define( "_ALBUM_OPT_CALCFROMHEIGHT" , "szerokoé∂Ê:auto  wysokoé∂Ê:podana" ) ;
define( "_ALBUM_OPT_CALCWHINSIDEBOX" , "kwadrat podanej wielkoé∂ci" ) ;

define( "_ALBM_OPT_VIEWLIST" , "Lista" ) ;
define( "_ALBM_OPT_VIEWTABLE" , "Tabela" ) ;


// Sub menu titles
define("_ALBM_TEXT_SMNAME1","Wyé∂lij nowe");
define("_ALBM_TEXT_SMNAME2","Najpopularniejsze");
define("_ALBM_TEXT_SMNAME3","Najwyéøej oceniane");
define("_ALBM_TEXT_SMNAME4","Moje");

// Names of admin menu items
define("_ALBM_MYALBUM_ADMENU0","Nadesé≥ane zdjÛƒia");
define("_ALBM_MYALBUM_ADMENU1","Zarzé±dzanie zdjÛƒiami");
define("_ALBM_MYALBUM_ADMENU2","Zarzé±dzanie kategoriami");
define("_ALBM_MYALBUM_ADMENU_GPERM","Uprawnienia");
define("_ALBM_MYALBUM_ADMENU3","é¶rodowisko");
define("_ALBM_MYALBUM_ADMENU4","Wgrywanie wsadowe");
define("_ALBM_MYALBUM_ADMENU5","Zarzé±dzanie miniaturami");
define("_ALBM_MYALBUM_ADMENU_IMPORT","Importuj");
define("_ALBM_MYALBUM_ADMENU_EXPORT","Eksportuj");
define("_ALBM_MYALBUM_ADMENU_MYBLOCKSADMIN","Bloki");

// Text for notifications
define('_MI_MYALBUM_GLOBAL_NOTIFY', 'Modué≥');
define('_MI_MYALBUM_GLOBAL_NOTIFYDSC', 'Powiadomienia w module');
define('_MI_MYALBUM_CATEGORY_NOTIFY', 'Kategoria');
define('_MI_MYALBUM_CATEGORY_NOTIFYDSC', 'Powiadomienia dotyczé±ce bieéøé±cej kategorii');
define('_MI_MYALBUM_PHOTO_NOTIFY', 'ZdjÛƒie');
define('_MI_MYALBUM_PHOTO_NOTIFYDSC', 'Powiadomienia dotyczé±ce bieéøé±cego zdjÛƒia');

define('_MI_MYALBUM_GLOBAL_NEWPHOTO_NOTIFY', 'Nowe zdjÛƒie');
define('_MI_MYALBUM_GLOBAL_NEWPHOTO_NOTIFYCAP', 'Powiadomienie o opublikowaniu nowego zdjÛƒia');
define('_MI_MYALBUM_GLOBAL_NEWPHOTO_NOTIFYDSC', 'Powiadomienie o opublikowaniu nowego zdjÛƒia');
define('_MI_MYALBUM_GLOBAL_NEWPHOTO_NOTIFYSBJ', '{X_SITENAME} - {X_MODULE}: Nowe zdjÛƒie');

define('_MI_MYALBUM_CATEGORY_NEWPHOTO_NOTIFY', 'Nowe zdjÛƒie');
define('_MI_MYALBUM_CATEGORY_NEWPHOTO_NOTIFYCAP', 'Powiadomienie o opublikowaniu nowego zdjÛƒia');
define('_MI_MYALBUM_CATEGORY_NEWPHOTO_NOTIFYDSC', 'Powiadomienie o opublikowaniu nowego zdjÛƒia');
define('_MI_MYALBUM_CATEGORY_NEWPHOTO_NOTIFYSBJ', '{X_SITENAME} - {X_MODULE}: Nowe zdjÛƒie');

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
