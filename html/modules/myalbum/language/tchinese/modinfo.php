<?php
// Module Info

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) || ! defined( 'MYALBUM_MI_LOADED' ) ) {

define( 'MYALBUM_MI_LOADED' , 1 ) ;

// The name of this module
define("_ALBM_MYALBUM_NAME","相簿");

// A brief description of this module
define("_ALBM_MYALBUM_DESC","建立相片簿用戶 //評論 分享種相片");

//slideshow
define( "_ALBM_CFG_lINTERVAL" , "請指圖的顯示切換方式" ) ;
define( "_ALBM_CFG_DESClINTERVAL" , "圖時圖檔切換的時間5000=5秒" ) ;
define( "_ALBM_CFG_TRANSITION" , "指圖的切換方式" ) ;
define( "_ALBM_CFG_DESCTRANSITION" , "指圖的種類transition值23機指" ) ;
//slideshow end
//slideshow
define( "_ALBM_OPT_TRANSITION0" , "角中央" ) ;
define( "_ALBM_OPT_TRANSITION1" , "角往側" ) ;
define( "_ALBM_OPT_TRANSITION2" , "圓形中央" ) ;
define( "_ALBM_OPT_TRANSITION3" , "圓形往側" ) ;
define( "_ALBM_OPT_TRANSITION4" , "由往" ) ;
define( "_ALBM_OPT_TRANSITION5" , "由往" ) ;
define( "_ALBM_OPT_TRANSITION6" , "由左" ) ;
define( "_ALBM_OPT_TRANSITION7" , "由左" ) ;
define( "_ALBM_OPT_TRANSITION8" , "百葉窗式" ) ;
define( "_ALBM_OPT_TRANSITION9" , "百葉窗式橫" ) ;
define( "_ALBM_OPT_TRANSITION10" , "方格模式橫" ) ;
define( "_ALBM_OPT_TRANSITION11" , "方格模式" ) ;
define( "_ALBM_OPT_TRANSITION12" , "狀式隱模式" ) ;
define( "_ALBM_OPT_TRANSITION13" , "由兩側左中央" ) ;
define( "_ALBM_OPT_TRANSITION14" , "由兩側中央往左" ) ;
define( "_ALBM_OPT_TRANSITION15" , "由兩側往中央" ) ;
define( "_ALBM_OPT_TRANSITION16" , "由兩側中央" ) ;
define( "_ALBM_OPT_TRANSITION17" , "斜角式左" ) ;
define( "_ALBM_OPT_TRANSITION18" , "斜角式往左" ) ;
define( "_ALBM_OPT_TRANSITION19" , "斜角式左往" ) ;
define( "_ALBM_OPT_TRANSITION20" , "斜角式左" ) ;
define( "_ALBM_OPT_TRANSITION21" , "機條橫" ) ;
define( "_ALBM_OPT_TRANSITION22" , "機條" ) ;
define( "_ALBM_OPT_TRANSITION23" , "機" ) ;
//slideshow end

// Names of blocks for this module (Not all module has blocks)
define("_ALBM_BNAME_RECENT","最相片");
define("_ALBM_BNAME_HITS","熱門相片");
define("_ALBM_BNAME_RANDOM","機相片");
define("_ALBM_BNAME_RECENT_P","相片圖");
define("_ALBM_BNAME_HITS_P","熱門相片圖");

// Config Items
define("_ALBM_CFG_PHOTOSPATH","相片放的路");
define("_ALBM_CFG_DESCPHOTOSPATH","路應該裝到 XOOPS 統的目錄裡<br />(路稱應該 '/'而不 '/' 結尾)<br />而放相片的目錄限屬性 UNIX 統為 777 或 707");
define("_ALBM_CFG_THUMBSPATH","圖放的路");
define("_ALBM_CFG_DESCTHUMBSPATH","路應該裝到 XOOPS 統的目錄裡<br />(路稱應該 '/'而不 '/' 結尾)<br />而放相片的目錄限屬性 UNIX 統為 777 或 707.");
//define("_ALBM_CFG_USEIMAGICK","使用 ImageMagick 來圖檔");
//define("_ALBM_CFG_DESCIMAGICK","選()表示使用 GD (變更旋轉相片)<br />所請盡能使用 ImageMagick");
define("_ALBM_CFG_IMAGINGPIPE","相片件");
define("_ALBM_CFG_DESCIMAGINGPIPE"," PHP 環境能使用 GD 但 GD 的能於個件<br />最使用 ImageMagick 或者 NetPBM");
define("_ALBM_CFG_FORCEGD2","制使用 GD2 轉換");
define("_ALBM_CFG_DESCFORCEGD2","使 PHP 打的 GD 版本制 GD2 (全) 轉換<br />有些 PHP 使 GD2 建立圖失敗<br />個有使用 GD 有的");
define("_ALBM_CFG_IMAGICKPATH","ImageMagick 的路");
define("_ALBM_CFG_DESCIMAGICKPATH","'convert' 的完整路<br />(路稱請勿 '/' 結尾)<br />個有使用 ImageMagick 有的");
define("_ALBM_CFG_NETPBMPATH","NetPBM 的路");
define("_ALBM_CFG_DESCNETPBMPATH","\'pnmscale\' 的完整路<br />(路稱請勿 \'/\' 結尾)<br />個有使用 NetPBM 有的");
define("_ALBM_CFG_POPULAR","成為熱門相片的次數");
define("_ALBM_CFG_NEWDAYS","標示為''&'更'圖標的間日期");
define("_ALBM_CFG_NEWPHOTOS","首頁示相片的數");
define("_ALBM_CFG_DEFAULTORDER","分類的相片示順序");
define("_ALBM_CFG_PERPAGE","頁示相片");
define("_ALBM_CFG_DESCPERPAGE","輸選項數並 \'|\' 來分(例 10|20|50|100)");
define("_ALBM_CFG_ALLOWNOIMAGE","允有相片的評論");
define("_ALBM_CFG_MAKETHUMB","建立圖");
define("_ALBM_CFG_DESCMAKETHUMB","當 '' 改為 ''最重執行 '重建圖'");
//define("_ALBM_CFG_THUMBWIDTH","圖度");
//define("_ALBM_CFG_DESCTHUMBWIDTH","圖的高度依據度的值自動完成.");
define("_ALBM_CFG_THUMBSIZE","圖的尺 (pixel)");
define("_ALBM_CFG_THUMBRULE","圖建立的算");
define("_ALBM_CFG_WIDTH","相片最度");
define("_ALBM_CFG_DESCWIDTH","使用 ImageMagick 表度重<br />不使用 ImageMagick表度限制");
define("_ALBM_CFG_HEIGHT","相片最高度");
define("_ALBM_CFG_DESCHEIGHT","使用 ImageMagick 表高度重<br />不使用 ImageMagick 表高度限制");
define("_ALBM_CFG_FSIZE","最檔案");
define("_ALBM_CFG_DESCFSIZE","限制傳相片檔案之 (byte)<br />1048576 byte = 1 MB");
define("_ALBM_CFG_MIDDLEPIXEL","單示相片的最尺");
define("_ALBM_CFG_DESCMIDDLEPIXEL","指 ()x(高)<br />例480x480");
define("_ALBM_CFG_ADDPOSTS","當員照片後,員表數所數為");
define("_ALBM_CFG_DESCADDPOSTS","般為0 或 1 (於0表0)");
define("_ALBM_CFG_CATONSUBMENU","顯示分類於次選單");
define("_ALBM_CFG_NAMEORUNAME","顯示者的稱");
define("_ALBM_CFG_DESCNAMEORUNAME","選擇顯示實或號");
define("_ALBM_CFG_VIEWCATTYPE","分類中顯示相片的型式");
define("_ALBM_CFG_COLSOFTABLEVIEW","圖式顯示的欄位數");
define("_ALBM_CFG_ALLOWEDEXTS","允傳的副檔");
define("_ALBM_CFG_DESCALLOWEDEXTS","輸副檔並 \'|\' 分(例\'jpg|jpeg|gif|png\')<br />元必須全部不插號(.)或空白鍵");
define("_ALBM_CFG_ALLOWEDMIME","允傳的 MIME 類型");
define("_ALBM_CFG_DESCALLOWEDMIME","輸 MIME 類型並 \'|\' 分(例\'image/gif|image/jpeg|image/png\')<br />裡空白時表 MIME 類型檢");
define("_ALBM_CFG_USESITEIMG","使用 [siteimg] 圖案管員的整");
define("_ALBM_CFG_DESCUSESITEIMG","圖案管員的整中 [siteimg] 取 [img]<br />有必須 HACK module.textsanitizer.php 啟用 [siteimg] 標籤<br />XOOPS標準並此項");

define("_ALBM_OPT_USENAME","實");
define("_ALBM_OPT_USEUNAME","號");

define("_ALBUM_OPT_CALCFROMWIDTH","度:指  高度:自動");
define("_ALBUM_OPT_CALCFROMHEIGHT","度:自動  高度:指");
define("_ALBUM_OPT_CALCWHINSIDEBOX","論長較值方自動調整");

define("_ALBM_OPT_VIEWLIST","詳式顯示");
define("_ALBM_OPT_VIEWTABLE","圖式顯示");


// Sub menu titles
define("_ALBM_TEXT_SMNAME1","傳相片");
define("_ALBM_TEXT_SMNAME2","熱門相片");
define("_ALBM_TEXT_SMNAME3","質相片");
define("_ALBM_TEXT_SMNAME4","我的相片");

// Names of admin menu items
define("_ALBM_MYALBUM_ADMENU0","核傳相片");
define("_ALBM_MYALBUM_ADMENU1","相片管");
define("_ALBM_MYALBUM_ADMENU2","修//除 相片分類");
define("_ALBM_MYALBUM_ADMENU_GPERM","限管");
define("_ALBM_MYALBUM_ADMENU3","檢組環境");
define("_ALBM_MYALBUM_ADMENU4","相片批次傳");
define("_ALBM_MYALBUM_ADMENU5","重建圖");
define("_ALBM_MYALBUM_ADMENU_IMPORT","匯相片");
define("_ALBM_MYALBUM_ADMENU_EXPORT","匯相片");
define("_ALBM_MYALBUM_ADMENU_MYBLOCKSADMIN","區塊及組管");
define("_ALBM_MYALBUM_ADMENU_MYTPLSADMIN","樣管");

// Text for notifications
define("_MI_MYALBUM_GLOBAL_NOTIFY","全域知項目");
define("_MI_MYALBUM_GLOBAL_NOTIFYDSC","myAlbum-P 全域知項目");
define("_MI_MYALBUM_CATEGORY_NOTIFY","相片分類知項目");
define("_MI_MYALBUM_CATEGORY_NOTIFYDSC","核目相片分類的知項目");
define("_MI_MYALBUM_PHOTO_NOTIFY","相片知項目");
define("_MI_MYALBUM_PHOTO_NOTIFYDSC","核目相片的知項目");

define("_MI_MYALBUM_GLOBAL_NEWPHOTO_NOTIFY","相片");
define("_MI_MYALBUM_GLOBAL_NEWPHOTO_NOTIFYCAP","有相片時知我");
define("_MI_MYALBUM_GLOBAL_NEWPHOTO_NOTIFYDSC","有相片時收到知.");
define("_MI_MYALBUM_GLOBAL_NEWPHOTO_NOTIFYSBJ","[{X_SITENAME}] {X_MODULE}: 自動知 : 相片");

define("_MI_MYALBUM_CATEGORY_NEWPHOTO_NOTIFY","相片");
define("_MI_MYALBUM_CATEGORY_NEWPHOTO_NOTIFYCAP","有相片目的分類時知我");
define("_MI_MYALBUM_CATEGORY_NEWPHOTO_NOTIFYDSC","有相片目的分類時收到知");
define("_MI_MYALBUM_CATEGORY_NEWPHOTO_NOTIFYSBJ","[{X_SITENAME}] {X_MODULE}: 自動知 : 相片");

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