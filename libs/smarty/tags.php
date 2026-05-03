<?
/*

CREATE TABLE `tag` (
  `id` int(11) NOT NULL auto_increment,
  `id_news` int(11) NOT NULL,
  `tag` varchar(100) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=cp1251 PACK_KEYS=0 AUTO_INCREMENT=34 ;

INSERT INTO `tag` VALUES (1, 1, 'uroki.uz');
INSERT INTO `tag` VALUES (2, 1, 'новости');
INSERT INTO `tag` VALUES (3, 1, 'flash');
INSERT INTO `tag` VALUES (4, 2, 'текст');
INSERT INTO `tag` VALUES (5, 2, 'музыка');
INSERT INTO `tag` VALUES (6, 3, 'uroki.uz');
INSERT INTO `tag` VALUES (7, 4, 'новости');
INSERT INTO `tag` VALUES (16, 4, 'php');
INSERT INTO `tag` VALUES (17, 0, 'учеба');
INSERT INTO `tag` VALUES (18, 5, 'uroki.uz');
INSERT INTO `tag` VALUES (19, 1, 'uroki.uz');
INSERT INTO `tag` VALUES (20, 8, 'поиски');
INSERT INTO `tag` VALUES (21, 5, 'знани€');
INSERT INTO `tag` VALUES (22, 3, 'сила');
INSERT INTO `tag` VALUES (23, 4, 'усидчивость');
INSERT INTO `tag` VALUES (24, 6, 'Flash');
INSERT INTO `tag` VALUES (25, 8, 'поиски');
INSERT INTO `tag` VALUES (26, 12, 'php');
INSERT INTO `tag` VALUES (27, 9, 'php');
INSERT INTO `tag` VALUES (28, 1, 'php');
INSERT INTO `tag` VALUES (29, 4, 'php');
INSERT INTO `tag` VALUES (30, 7, 'Word');
INSERT INTO `tag` VALUES (31, 5, 'Hello');
INSERT INTO `tag` VALUES (32, 7, 'TCK');
INSERT INTO `tag` VALUES (33, 9, 'школа');
        
*/

$db = mysql_connect ("localhost","root","");
mysql_select_db ("new_tags",$db);


$result = mysql_query("SELECT * FROM tag") or die("Ќе могу выполнить запрос");
$arr =  Array();
$names =  Array();
$namesi = 0;
if (mysql_num_rows($result)) {
 while ($f = mysql_fetch_array($result)) {
   if ($f[tag] != $arr[$arri]) {
     $arr[$f[tag]]++;
     if (!in_array($f[tag],$names)) {
       $names[$namesi] = $f[tag];
       $namesi++;
     }
   }
 }
}







?>



<script src="swfobject.js" type="text/javascript"></script>
<script type="text/javascript">
        var flashvars = {};
        flashvars.mode = "tags";
        flashvars.minFontSize = "10"; // минимальный размер шрифта.
        flashvars.maxFontSize = "30"; // максимальный размер шрифта.
        flashvars.tcolor = "0xFF4500"; // цвет самого редкого €рлыка.
        flashvars.tcolor2 = "0x808080"; // цвет самого попул€рного €рлыка. ƒл€ остальных €рлыков будет выбран цвет между этими двум€.
        flashvars.hicolor = "0x000000"; // цвет текста при наведении курсора на €рлык.
        flashvars.distr = "true";
        flashvars.tspeed = "150"; // скорость вращени€ Flash ќблака тегов
		flashvars.tagcloud = "<tags><? for ($i=0;$i<$namesi;$i++) { if($arr[$names[$i]] > 0)  { echo "<a href='?tags=".$names[$i]."' style='".$arr[$names[$i]]."'>".$names[$i]."</a>";}}?></tags>";
	    var params = {};
        //params.wmode = "transparent"; // этот параметр обозначает прозрачный фон.
        params.bgcolor = "#f2f2f2"; //  цвет фона Flash ќблака тегов.
        params.allowscriptaccess = "always";
        var attributes = {};
        attributes.id = "b-cumulus";
        attributes.name = "tagcloud";
        swfobject.embedSWF("tagcloud.swf", "b-cumulus", "640", "420", "9.0.0", false, flashvars, params, attributes);
		// 640 - это ширина виджета в пиксел€х. 420 - это высота виджета в пиксел€х.
      </script>
<div id="b-cumulus">
<a href="http://www.adobe.com/go/getflashplayer">
<img alt='Get Adobe Flash player' src="/img/get_flash_player.gif"/>
</a>
</div>

