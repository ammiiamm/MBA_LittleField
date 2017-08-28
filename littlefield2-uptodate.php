<html>
<head>
<title>Littlefield-uptodate </title>
<!--<style>

body {
    background-color: #d0e4fe;
    font-family: "Calibri";
    font-size: 20px;
}

h1 {
    color: orange;
    text-align: center;
    font-family: "Calibri";
}

#header-fixed {
    position: fixed;
    top: 0px; display:none;
    background-color:white;
#headings {
  position: fixed;
  top: 0px;
  width: 960px;
}
}


</style>-->
</head>

<!--
<script type="text/javascript">

/* http://www.alistapart.com/articles/zebratables/ */
function removeClassName (elem, className) {
	elem.className = elem.className.replace(className, "").trim();
}

function addCSSClass (elem, className) {
	removeClassName (elem, className);
	elem.className = (elem.className + " " + className).trim();
}

String.prototype.trim = function() {
	return this.replace( /^\s+|\s+$/, "" );
}

function stripedTable() {
	if (document.getElementById && document.getElementsByTagName) {
		var allTables = document.getElementsByTagName('table');
		if (!allTables) { return; }

		for (var i = 0; i < allTables.length; i++) {
			if (allTables[i].className.match(/[\w\s ]*scrollTable[\w\s ]*/)) {
				var trs = allTables[i].getElementsByTagName("tr");
				for (var j = 0; j < trs.length; j++) {
					removeClassName(trs[j], 'alternateRow');
					addCSSClass(trs[j], 'normalRow');
				}
				for (var k = 0; k < trs.length; k += 2) {
					removeClassName(trs[k], 'normalRow');
					addCSSClass(trs[k], 'alternateRow');
				}
			}
		}
	}
}

window.onload = function() { stripedTable(); }

</script>
-->

<!--<style type="text/css">

/* Terence Ordona, portal[AT]imaputz[DOT]com         */
/* http://creativecommons.org/licenses/by-sa/2.0/    */

/* begin some basic styling here                     */
body {
	background: #FFF;
	color: #000;
	font: normal normal 12px Verdana, Geneva, Arial, Helvetica, sans-serif;
	margin: 10px;
	padding: 0
}

table, td, a {
	color: #000;
	font: normal normal 12px Verdana, Geneva, Arial, Helvetica, sans-serif
}

h1 {
	font: normal normal 18px Verdana, Geneva, Arial, Helvetica, sans-serif;
	margin: 0 0 5px 0
}

h2 {
	font: normal normal 16px Verdana, Geneva, Arial, Helvetica, sans-serif;
	margin: 0 0 5px 0
}

h3 {
	font: normal normal 13px Verdana, Geneva, Arial, Helvetica, sans-serif;
	color: #008000;
	margin: 0 0 15px 0
}
/* end basic styling                                 */

/* define height and width of scrollable area. Add 16px to width for scrollbar          */
div.tableContainer {
	clear: both;
	border: 1px solid #963;

	overflow: auto;

}

/* Reset overflow value to hidden for all non-IE browsers. */
html>body div.tableContainer {
	overflow: hidden;

}

/* define width of table. IE browsers only                 */
div.tableContainer table {
	float: left;

}

/* define width of table. Add 16px to width for scrollbar.           */
/* All other non-IE browsers.                                        */
html>body div.tableContainer table {

}

/* set table header to a fixed position. WinIE 6.x only                                       */
/* In WinIE 6.x, any element with a position property set to relative and is a child of       */
/* an element that has an overflow property set, the relative value translates into fixed.    */
/* Ex: parent element DIV with a class of tableContainer has an overflow property set to auto */
thead.fixedHeader tr {
	position: relative
}

/* set THEAD element to have block level attributes. All other non-IE browsers            */
/* this enables overflow to work on TBODY element. All other non-IE, non-Mozilla browsers */
html>body thead.fixedHeader tr {
	display: block
}

/* make the TH elements pretty */
thead.fixedHeader th {
	background: #C96;
	border-left: 1px solid #EB8;
	border-right: 1px solid #B74;
	border-top: 1px solid #EB8;
	font-weight: normal;
	padding: 4px 3px;
	text-align: left
}

/* make the A elements pretty. makes for nice clickable headers                */
thead.fixedHeader a, thead.fixedHeader a:link, thead.fixedHeader a:visited {
	color: #FFF;
	display: block;
	text-decoration: none;
	width: 100%
}

/* make the A elements pretty. makes for nice clickable headers                */
/* WARNING: swapping the background on hover may cause problems in WinIE 6.x   */
thead.fixedHeader a:hover {
	color: #FFF;
	display: block;
	text-decoration: underline;
	width: 100%
}

/* define the table content to be scrollable                                              */
/* set TBODY element to have block level attributes. All other non-IE browsers            */
/* this enables overflow to work on TBODY element. All other non-IE, non-Mozilla browsers */
/* induced side effect is that child TDs no longer accept width: auto                     */
html>body tbody.scrollContent {
	display: block;
	overflow: auto;
	width: 100%
}

/* make TD elements pretty. Provide alternating classes for striping the table */
/* http://www.alistapart.com/articles/zebratables/                             */
tbody.scrollContent td, tbody.scrollContent tr.normalRow td {
	background: #FFF;
	border-bottom: none;
	border-left: none;
	border-right: 1px solid #CCC;
	border-top: 1px solid #DDD;
	padding: 2px 3px 3px 4px
}

tbody.scrollContent tr.alternateRow td {
	background: #EEE;
	border-bottom: none;
	border-left: none;
	border-right: 1px solid #CCC;
	border-top: 1px solid #DDD;
	padding: 2px 3px 3px 4px
}

/* define width of TH elements: 1st, 2nd, and 3rd respectively.          */
/* Add 16px to last TH for scrollbar padding. All other non-IE browsers. */
/* http://www.w3.org/TR/REC-CSS2/selector.html#adjacent-selectors        */
html>body thead.fixedHeader th {
	width: 200px
}

html>body thead.fixedHeader th + th {
	width: 240px
}

html>body thead.fixedHeader th + th + th {
	width: 316px
}

/* define width of TD elements: 1st, 2nd, and 3rd respectively.          */
/* All other non-IE browsers.                                            */
/* http://www.w3.org/TR/REC-CSS2/selector.html#adjacent-selectors        */
html>body tbody.scrollContent td {
	width: 200px
}

html>body tbody.scrollContent td + td {
	width: 240px
}

html>body tbody.scrollContent td + td + td {
	width: 300px
}

</style>-->
<script src= "//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>


<body>

<?php

//$lt_url = 'http://lab.responsive.net/Littlefield/';
$lt_url = 'http://ism.responsive.net/Littlefield/';
$filename = 'lt_'.date('Ymd_His').'.csv';
$institution = 'opscom';
$id = '<your_id>';
$password = '<your_password>';
$sleep_time = 0.2;
$mytime[30]='01:00';
$mytime[31]='01:12';
$mytime[32]='01:24';
$mytime[33]='01:36';
$mytime[34]='01:48';
$mytime[35]='02:00';
$mytime[36]='02:12';
$mytime[37]='02:24';
$mytime[38]='02:36';
$mytime[39]='02:48';
$mytime[40]='03:00';
$mytime[41]='03:12';
$mytime[42]='03:24';
$mytime[43]='03:36';
$mytime[44]='03:48';
$mytime[45]='04:00';
$mytime[46]='04:12';
$mytime[47]='04:24';
$mytime[48]='04:36';
$mytime[49]='04:48';
$mytime[50]='05:00';
$mytime[51]='05:12';
$mytime[52]='05:24';
$mytime[53]='05:36';
$mytime[54]='05:48';
$mytime[55]='06:00';
$mytime[56]='06:12';
$mytime[57]='06:24';
$mytime[58]='06:36';
$mytime[59]='06:48';
$mytime[60]='07:00';
$mytime[61]='07:12';
$mytime[62]='07:24';
$mytime[63]='07:36';
$mytime[64]='07:48';
$mytime[65]='08:00';
$mytime[66]='08:12';
$mytime[67]='08:24';
$mytime[68]='08:36';
$mytime[69]='08:48';
$mytime[70]='09:00';
$mytime[71]='09:12';
$mytime[72]='09:24';
$mytime[73]='09:36';
$mytime[74]='09:48';
$mytime[75]='10:00';
$mytime[76]='10:12';
$mytime[77]='10:24';
$mytime[78]='10:36';
$mytime[79]='10:48';
$mytime[80]='11:00';
$mytime[81]='11:12';
$mytime[82]='11:24';
$mytime[83]='11:36';
$mytime[84]='11:48';
$mytime[85]='12:00';
$mytime[86]='12:12';
$mytime[87]='12:24';
$mytime[88]='12:36';
$mytime[89]='12:48';
$mytime[90]='13:00';
$mytime[91]='13:12';
$mytime[92]='13:24';
$mytime[93]='13:36';
$mytime[94]='13:48';
$mytime[95]='14:00';
$mytime[96]='14:12';
$mytime[97]='14:24';
$mytime[98]='14:36';
$mytime[99]='14:48';
$mytime[100]='15:00';
$mytime[101]='15:12';
$mytime[102]='15:24';
$mytime[103]='15:36';
$mytime[104]='15:48';
$mytime[105]='16:00';
$mytime[106]='16:12';
$mytime[107]='16:24';
$mytime[108]='16:36';
$mytime[109]='16:48';
$mytime[110]='17:00';
$mytime[111]='17:12';
$mytime[112]='17:24';
$mytime[113]='17:36';
$mytime[114]='17:48';
$mytime[115]='18:00';
$mytime[116]='18:12';
$mytime[117]='18:24';
$mytime[118]='18:36';
$mytime[119]='18:48';
$mytime[120]='19:00';
$mytime[121]='19:12';
$mytime[122]='19:24';
$mytime[123]='19:36';
$mytime[124]='19:48';
$mytime[125]='20:00';
$mytime[126]='20:12';
$mytime[127]='20:24';
$mytime[128]='20:36';
$mytime[129]='20:48';
$mytime[130]='21:00';
$mytime[131]='21:12';
$mytime[132]='21:24';
$mytime[133]='21:36';
$mytime[134]='21:48';
$mytime[135]='22:00';
$mytime[136]='22:12';
$mytime[137]='22:24';
$mytime[138]='22:36';
$mytime[139]='22:48';
$mytime[140]='23:00';
$mytime[141]='23:12';
$mytime[142]='23:24';
$mytime[143]='23:36';
$mytime[144]='23:48';
$mytime[145]='00:00';
$mytime[146]='00:12';
$mytime[147]='00:24';
$mytime[148]='00:36';
$mytime[149]='00:48';
$mytime[150]='01:00';
$mytime[151]='01:12';
$mytime[152]='01:24';
$mytime[153]='01:36';
$mytime[154]='01:48';
$mytime[155]='02:00';
$mytime[156]='02:12';
$mytime[157]='02:24';
$mytime[158]='02:36';
$mytime[159]='02:48';
$mytime[160]='03:00';
$mytime[161]='03:12';
$mytime[162]='03:24';
$mytime[163]='03:36';
$mytime[164]='03:48';
$mytime[165]='04:00';
$mytime[166]='04:12';
$mytime[167]='04:24';
$mytime[168]='04:36';
$mytime[169]='04:48';
$mytime[170]='05:00';
$mytime[171]='05:12';
$mytime[172]='05:24';
$mytime[173]='05:36';
$mytime[174]='05:48';
$mytime[175]='06:00';
$mytime[176]='06:12';
$mytime[177]='06:24';
$mytime[178]='06:36';
$mytime[179]='06:48';
$mytime[180]='07:00';
$mytime[181]='07:12';
$mytime[182]='07:24';
$mytime[183]='07:36';
$mytime[184]='07:48';
$mytime[185]='08:00';
$mytime[186]='08:12';
$mytime[187]='08:24';
$mytime[188]='08:36';
$mytime[189]='08:48';
$mytime[190]='09:00';
$mytime[191]='09:12';
$mytime[192]='09:24';
$mytime[193]='09:36';
$mytime[194]='09:48';
$mytime[195]='10:00';
$mytime[196]='10:12';
$mytime[197]='10:24';
$mytime[198]='10:36';
$mytime[199]='10:48';
$mytime[200]='11:00';
$mytime[201]='11:12';
$mytime[202]='11:24';
$mytime[203]='11:36';
$mytime[204]='11:48';
$mytime[205]='12:00';
$mytime[206]='12:12';
$mytime[207]='12:24';
$mytime[208]='12:36';
$mytime[209]='12:48';
$mytime[210]='13:00';
$mytime[211]='13:12';
$mytime[212]='13:24';
$mytime[213]='13:36';
$mytime[214]='13:48';
$mytime[215]='14:00';
$mytime[216]='14:12';
$mytime[217]='14:24';
$mytime[218]='14:36';
$mytime[219]='14:48';
$mytime[220]='15:00';
$mytime[221]='15:12';
$mytime[222]='15:24';
$mytime[223]='15:36';
$mytime[224]='15:48';
$mytime[225]='16:00';
$mytime[226]='16:12';
$mytime[227]='16:24';
$mytime[228]='16:36';
$mytime[229]='16:48';
$mytime[230]='17:00';
$mytime[231]='17:12';
$mytime[232]='17:24';
$mytime[233]='17:36';
$mytime[234]='17:48';
$mytime[235]='18:00';
$mytime[236]='18:12';
$mytime[237]='18:24';
$mytime[238]='18:36';
$mytime[239]='18:48';
$mytime[240]='19:00';
$mytime[241]='19:12';
$mytime[242]='19:24';
$mytime[243]='19:36';
$mytime[244]='19:48';
$mytime[245]='20:00';
$mytime[246]='20:12';
$mytime[247]='20:24';
$mytime[248]='20:36';
$mytime[249]='20:48';
$mytime[250]='21:00';
$mytime[251]='21:12';
$mytime[252]='21:24';
$mytime[253]='21:36';
$mytime[254]='21:48';
$mytime[255]='22:00';
$mytime[256]='22:12';
$mytime[257]='22:24';
$mytime[258]='22:36';
$mytime[259]='22:48';
$mytime[260]='23:00';
$mytime[261]='23:12';
$mytime[262]='23:24';
$mytime[263]='23:36';
$mytime[264]='23:48';
$mytime[265]='00:00';
$mytime[266]='00:12';
$mytime[267]='00:24';
$mytime[268]='00:36';
$mytime[269]='00:48';
$mytime[270]='01:00';
$mytime[271]='01:12';
$mytime[272]='01:24';
$mytime[273]='01:36';
$mytime[274]='01:48';
$mytime[275]='02:00';
$mytime[276]='02:12';
$mytime[277]='02:24';
$mytime[278]='02:36';
$mytime[279]='02:48';
$mytime[280]='03:00';
$mytime[281]='03:12';
$mytime[282]='03:24';
$mytime[283]='03:36';
$mytime[284]='03:48';
$mytime[285]='04:00';
$mytime[286]='04:12';
$mytime[287]='04:24';
$mytime[288]='04:36';
$mytime[289]='04:48';
$mytime[290]='05:00';
$mytime[291]='05:12';
$mytime[292]='05:24';
$mytime[293]='05:36';
$mytime[294]='05:48';
$mytime[295]='06:00';
$mytime[296]='06:12';
$mytime[297]='06:24';
$mytime[298]='06:36';
$mytime[299]='06:48';
$mytime[300]='07:00';
$mytime[301]='07:12';
$mytime[302]='07:24';
$mytime[303]='07:36';
$mytime[304]='07:48';
$mytime[305]='08:00';
$mytime[306]='08:12';
$mytime[307]='08:24';
$mytime[308]='08:36';
$mytime[309]='08:48';
$mytime[310]='09:00';
$mytime[311]='09:12';
$mytime[312]='09:24';
$mytime[313]='09:36';
$mytime[314]='09:48';
$mytime[315]='10:00';
$mytime[316]='10:12';
$mytime[317]='10:24';
$mytime[318]='10:36';
$mytime[319]='10:48';
$mytime[320]='11:00';
$mytime[321]='11:12';
$mytime[322]='11:24';
$mytime[323]='11:36';
$mytime[324]='11:48';
$mytime[325]='12:00';
$mytime[326]='12:12';
$mytime[327]='12:24';
$mytime[328]='12:36';
$mytime[329]='12:48';
$mytime[330]='13:00';
$mytime[331]='13:12';
$mytime[332]='13:24';
$mytime[333]='13:36';
$mytime[334]='13:48';
$mytime[335]='14:00';
$mytime[336]='14:12';
$mytime[337]='14:24';
$mytime[338]='14:36';
$mytime[339]='14:48';
$mytime[340]='15:00';
$mytime[341]='15:12';
$mytime[342]='15:24';
$mytime[343]='15:36';
$mytime[344]='15:48';
$mytime[345]='16:00';
$mytime[346]='16:12';
$mytime[347]='16:24';
$mytime[348]='16:36';
$mytime[349]='16:48';
$mytime[350]='17:00';
$mytime[351]='17:12';
$mytime[352]='17:24';
$mytime[353]='17:36';
$mytime[354]='17:48';
$mytime[355]='18:00';
$mytime[356]='18:12';
$mytime[357]='18:24';
$mytime[358]='18:36';
$mytime[359]='18:48';
$mytime[360]='19:00';
$mytime[361]='19:12';
$mytime[362]='19:24';
$mytime[363]='19:36';
$mytime[364]='19:48';
$mytime[365]='20:00';
$mytime[366]='20:12';
$mytime[367]='20:24';
$mytime[368]='20:36';
$mytime[369]='20:48';
$mytime[370]='21:00';
$mytime[371]='21:12';
$mytime[372]='21:24';
$mytime[373]='21:36';
$mytime[374]='21:48';
$mytime[375]='22:00';
$mytime[376]='22:12';
$mytime[377]='22:24';
$mytime[378]='22:36';
$mytime[379]='22:48';
$mytime[380]='23:00';
$mytime[381]='23:12';
$mytime[382]='23:24';
$mytime[383]='23:36';
$mytime[384]='23:48';
$mytime[385]='00:00';
$mytime[386]='00:12';
$mytime[387]='00:24';
$mytime[388]='00:36';
$mytime[389]='00:48';
$mytime[390]='01:00';

// login
$url = $lt_url.'CheckAccess';
//$url = $lt_url;
//set POST variables

define("COOKIE_FILE", "cookie.txt");

$fields = array(
						'institution' => urlencode($institution),
						'id' => urlencode($id),
						'password' => urlencode($password),
				);

//url-ify the data for the POST
foreach($fields as $key=>$value) { $fields_string .= $key.'='.$value.'&'; }
rtrim($fields_string, '&');

//open connection
$ch = curl_init();

//set the url, number of POST vars, POST data
curl_setopt($ch,CURLOPT_URL, $url);
curl_setopt($ch,CURLOPT_POST, count($fields));
curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_COOKIESESSION, true);
curl_setopt($ch, CURLOPT_COOKIEJAR, COOKIE_FILE);  //could be empty, but cause problems on some hosts
//curl_setopt($ch, CURLOPT_COOKIEFILE, '/var/www/ip4.x/file/tmp');  //could be empty, but cause problems on some hosts

//execute post
$result = curl_exec($ch);

//close connection
curl_close($ch);

//echo $result;
//////////////////////////////////////////////////////////////////////////////////////////////////////////////
/*sleep($sleep_time);

// get LTStatus
$ch = curl_init("http://lt.responsive.net/Littlefield/LTStatus");

curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, COOKIE_FILE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

$result = curl_exec($ch);
curl_close($ch);

$findme1   = '<b>';
$findme2   = '<hr';

$pos1 = strpos($result, $findme1);
$result = substr($result, $pos1);

$pos2 = strpos($result, $findme2);
$result = substr($result, 0, $pos2);

$findme1   = '</b>';
$findme2   = '<img';

$pos1 = strpos($result, $findme1);
$result = substr($result, $pos1+4);

$pos2 = strpos($result, $findme2);
$date = 'D'.trim(substr($result, 0, $pos2));

$pos1 = strpos($result, $findme1);
$result = substr($result, $pos1+4);

$pos2 = strpos($result, $findme2);
$team = trim(substr($result, 0, $pos2));

$pos1 = strpos($result, $findme1);
$bal = trim(substr($result, $pos1+4));
$bal = str_replace(",","",$bal);

//$result = strip_tags($result);
echo $date.','.$team.','.$bal.'<br/>';
//////////////////////////////////////////////////////////////////////////////////////////////////////////////
sleep($sleep_time);

// get Standing
$ch = curl_init("http://lt.responsive.net/Littlefield/Standing");

curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, COOKIE_FILE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

$result = curl_exec($ch);
curl_close($ch);

$find_font   = '<font face=arial';
$findme2   = '</table';

$pos1 = strpos($result, $find_font);
$result = substr($result, $pos1);

$pos2 = strpos($result, $findme2);
$result = substr($result, 0, $pos2);

while ($pos1 > 0)
{
	$findme1   = '>';
	$findme2   = '</font';

	//Rank
	$pos1 = strpos($result, $findme1);
	$result = substr($result, $pos1+1);
	$pos2 = strpos($result, $findme2);
	$rank = substr($result, 0, $pos2);

	$pos1 = strpos($result, $find_font);
	$result = substr($result, $pos1);

	//Team
	$pos1 = strpos($result, $findme1);
	$result = substr($result, $pos1+1);
	$pos2 = strpos($result, $findme2);
	$team = substr($result, 0, $pos2);
	$team = str_replace(",","",$team);

	$find_font = '<font face=arial';
	$pos1 = strpos($result, $find_font);
	$result = substr($result, $pos1);

	//Balance
	$pos1 = strpos($result, $findme1);
	$result = substr($result, $pos1+1);
	$pos2 = strpos($result, $findme2);
	$bal = trim(substr($result, 0, $pos2));
	$bal = str_replace(",","",$bal);

	$find_font = '<font face=arial';
	$pos1 = strpos($result, $find_font);
	$result = substr($result, $pos1);

	echo $rank.','.$team.','.$bal.'<br/>';
}

//////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////

sleep($sleep_time);
*/
// Plot of number of jobs accepted each day
//echo 'Plot of number of jobs accepted each day<br/>';
$ch = curl_init($lt_url.'Plot1?data=JOBIN&plottech=java');

curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, COOKIE_FILE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

$result = curl_exec($ch);
curl_close($ch);

$find_font = '<param name="data1" value="';
$findme2 = '>';

$pos1 = strpos($result, $find_font);
$result = substr($result, $pos1+27);

$pos2 = strpos($result, $findme2);
$result = substr($result, 0, $pos2-1);

$jobin = explode(" ", $result);
//echo $result.'<br/><br/>';

//////////////////////////////////////////////////////////////////////////////////////////////////////////////
sleep($sleep_time);

// Plot of daily average number of jobs waiting for kits
//echo 'Plot of daily average number of jobs waiting for kits<br/>';
$ch = curl_init($lt_url.'Plot1?data=JOBQ&x=all');

curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, COOKIE_FILE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

$result = curl_exec($ch);
curl_close($ch);

$find_font = '<param name="data1" value="';
$findme2 = '>';

$pos1 = strpos($result, $find_font);
$result = substr($result, $pos1+27);

$pos2 = strpos($result, $findme2);
$result = substr($result, 0, $pos2-1);

$jobq = explode(" ", $result);
//echo $result.'<br/><br/>';

//////////////////////////////////////////////////////////////////////////////////////////////////////////////
sleep($sleep_time);

// Plot of inventory level in kits (not an average)
//echo 'Plot of inventory level in kits (not an average)<br/>';
$ch = curl_init($lt_url.'Plot1?data=INV&x=all');

curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, COOKIE_FILE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

$result = curl_exec($ch);
curl_close($ch);

$find_font = '<param name="data1" value="';
$findme2 = '>';

$pos1 = strpos($result, $find_font);
$result = substr($result, $pos1+27);

$pos2 = strpos($result, $findme2);
$result = substr($result, 0, $pos2-1);

$inv = explode(" ", $result);
//echo $result.'<br/><br/>';

$inv2 = $inv;
$day = 0;
$j = 0;
for ($i=0; $i<sizeof($inv); $i=$i+2)
{
	if ($day != floor($inv[$i]))
	{
		$inv2[$j] = $inv[$i];
		$j++;
		$inv2[$j] = $inv[$i+1];
		$j++;
		$day = $inv[$i];
	}
	elseif ($inv2[$j-1] != NULL)
	{
		$inv2[$j-1] = $inv[$i+1];
	}
}

//print_r($inv);
//echo '<br/><br/>';
//print_r($inv2);


//////////////////////////////////////////////////////////////////////////////////////////////////////////////
sleep($sleep_time);

// Plot of daily average number of kits queued for station 1
//echo 'Plot of daily average number of kits queued for station 1<br/>';
$ch = curl_init($lt_url.'Plot1?data=S1Q&x=all');

curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, COOKIE_FILE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

$result = curl_exec($ch);
curl_close($ch);

$find_font = '<param name="data1" value="';
$findme2 = '>';

$pos1 = strpos($result, $find_font);
$result = substr($result, $pos1+27);

$pos2 = strpos($result, $findme2);
$result = substr($result, 0, $pos2-1);

$s1q = explode(" ", $result);
//echo $result.'<br/><br/>';

//////////////////////////////////////////////////////////////////////////////////////////////////////////////
sleep($sleep_time);

// Plot of utilization of station 1, averaged over each day
//echo 'Plot of utilization of station 1, averaged over each day<br/>';
$ch = curl_init($lt_url.'Plot1?data=S1UTIL&x=all');

curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, COOKIE_FILE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

$result = curl_exec($ch);
curl_close($ch);

$find_font = '<param name="data1" value="';
$findme2 = '>';

$pos1 = strpos($result, $find_font);
$result = substr($result, $pos1+27);

$pos2 = strpos($result, $findme2);
$result = substr($result, 0, $pos2-1);

$s1util = explode(" ", $result);
//echo $result.'<br/><br/>';

//////////////////////////////////////////////////////////////////////////////////////////////////////////////
sleep($sleep_time);

// Plot of daily average number of kits queued for station 2
//echo 'Plot of daily average number of kits queued for station 2<br/>';
$ch = curl_init($lt_url.'Plot1?data=S2Q&x=all');

curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, COOKIE_FILE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

$result = curl_exec($ch);
curl_close($ch);

$find_font = '<param name="data1" value="';
$findme2 = '>';

$pos1 = strpos($result, $find_font);
$result = substr($result, $pos1+27);

$pos2 = strpos($result, $findme2);
$result = substr($result, 0, $pos2-1);

$s2q = explode(" ", $result);
//echo $result.'<br/><br/>';

//////////////////////////////////////////////////////////////////////////////////////////////////////////////
sleep($sleep_time);

// Plot of utilization of station 2, averaged over each day
//echo 'Plot of utilization of station 2, averaged over each day<br/>';
$ch = curl_init($lt_url.'Plot1?data=S2UTIL&x=all');

curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, COOKIE_FILE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

$result = curl_exec($ch);
curl_close($ch);

$find_font = '<param name="data1" value="';
$findme2 = '>';

$pos1 = strpos($result, $find_font);
$result = substr($result, $pos1+27);

$pos2 = strpos($result, $findme2);
$result = substr($result, 0, $pos2-1);

$s2util = explode(" ", $result);
//echo $result.'<br/><br/>';

//////////////////////////////////////////////////////////////////////////////////////////////////////////////
sleep($sleep_time);

// Plot of daily average number of kits queued for station 3
//echo 'Plot of daily average number of kits queued for station 3<br/>';
$ch = curl_init($lt_url.'Plot1?data=S3Q&x=all');

curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, COOKIE_FILE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

$result = curl_exec($ch);
curl_close($ch);

$find_font = '<param name="data1" value="';
$findme2 = '>';

$pos1 = strpos($result, $find_font);
$result = substr($result, $pos1+27);

$pos2 = strpos($result, $findme2);
$result = substr($result, 0, $pos2-1);

$s3q = explode(" ", $result);
//echo $result.'<br/><br/>';

//////////////////////////////////////////////////////////////////////////////////////////////////////////////
sleep($sleep_time);

// Plot of utilization of station 3, averaged over each day
//echo 'Plot of utilization of station 3, averaged over each day<br/>';
$ch = curl_init($lt_url.'Plot1?data=S3UTIL&x=all');

curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, COOKIE_FILE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

$result = curl_exec($ch);
curl_close($ch);

$find_font = '<param name="data1" value="';
$findme2 = '>';

$pos1 = strpos($result, $find_font);
$result = substr($result, $pos1+27);

$pos2 = strpos($result, $findme2);
$result = substr($result, 0, $pos2-1);

$s3util = explode(" ", $result);
//echo $result.'<br/><br/>';

//////////////////////////////////////////////////////////////////////////////////////////////////////////////
sleep($sleep_time);

// Plot of number of completed jobs each day
//echo 'Plot of number of completed jobs each day<br/>';
$ch = curl_init($lt_url.'Plotk?data=JOBOUT&x=all');

curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, COOKIE_FILE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

$result = curl_exec($ch);
curl_close($ch);

$result1 = $result;
$result2 = $result;
$result3 = $result;

$find_font = '<param name="data1" value="';
$findme2 = '>';

$pos1 = strpos($result1, $find_font);
$result1 = substr($result1, $pos1+27);

$pos2 = strpos($result1, $findme2);
$result1 = substr($result1, 0, $pos2-1);

$find_font = '<param name="data2" value="';
$findme2 = '>';

$pos1 = strpos($result2, $find_font);
$result2 = substr($result2, $pos1+27);

$pos2 = strpos($result2, $findme2);
$result2 = substr($result2, 0, $pos2-1);

$find_font = '<param name="data3" value="';
$findme2 = '>';

$pos1 = strpos($result3, $find_font);
$result3 = substr($result3, $pos1+27);

$pos2 = strpos($result3, $findme2);
$result3 = substr($result3, 0, $pos2-1);

$jobout1 = explode(" ", $result1);
$jobout2 = explode(" ", $result2);
$jobout3 = explode(" ", $result3);
//echo $result1.'<br/>';
//echo $result2.'<br/>';
//echo $result3.'<br/><br/>';

//////////////////////////////////////////////////////////////////////////////////////////////////////////////
sleep($sleep_time);

// Plot of daily average job lead time
//echo 'Plot of daily average job lead time<br/>';
$ch = curl_init($lt_url.'Plotk?data=JOBT&x=all');

curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, COOKIE_FILE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

$result = curl_exec($ch);
curl_close($ch);

$result1 = $result;
$result2 = $result;
$result3 = $result;

$find_font = '<param name="data1" value="';
$findme2 = '>';

$pos1 = strpos($result1, $find_font);
$result1 = substr($result1, $pos1+27);

$pos2 = strpos($result1, $findme2);
$result1 = substr($result1, 0, $pos2-1);

$find_font = '<param name="data2" value="';
$findme2 = '>';

$pos1 = strpos($result2, $find_font);
$result2 = substr($result2, $pos1+27);

$pos2 = strpos($result2, $findme2);
$result2 = substr($result2, 0, $pos2-1);

$find_font = '<param name="data3" value="';
$findme2 = '>';

$pos1 = strpos($result3, $find_font);
$result3 = substr($result3, $pos1+27);

$pos2 = strpos($result3, $findme2);
$result3 = substr($result3, 0, $pos2-1);

$jobt1 = explode(" ", $result1);
$jobt2 = explode(" ", $result2);
$jobt3 = explode(" ", $result3);
//echo $result1.'<br/>';
//echo $result2.'<br/>';
//echo $result3.'<br/><br/>';

//////////////////////////////////////////////////////////////////////////////////////////////////////////////
sleep($sleep_time);

// Plot of daily average revenue per job
//echo 'Plot of daily average revenue per job<br/>';
$ch = curl_init($lt_url.'Plotk?data=JOBREV&x=all');
$myperiod = 1;
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, COOKIE_FILE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

$result = curl_exec($ch);
curl_close($ch);

$result1 = $result;
$result2 = $result;
$result3 = $result;

$find_font = '<param name="data1" value="';
$findme2 = '>';

$pos1 = strpos($result1, $find_font);
$result1 = substr($result1, $pos1+27);

$pos2 = strpos($result1, $findme2);
$result1 = substr($result1, 0, $pos2-1);

$find_font = '<param name="data2" value="';
$findme2 = '>';

$pos1 = strpos($result2, $find_font);
$result2 = substr($result2, $pos1+27);

$pos2 = strpos($result2, $findme2);
$result2 = substr($result2, 0, $pos2-1);

$find_font = '<param name="data3" value="';
$findme2 = '>';

$pos1 = strpos($result3, $find_font);
$result3 = substr($result3, $pos1+27);

$pos2 = strpos($result3, $findme2);
$result3 = substr($result3, 0, $pos2-1);

$jobrev1 = explode(" ", $result1);
$jobrev2 = explode(" ", $result2);
$jobrev3 = explode(" ", $result3);
//echo $result1.'<br/>';
//echo $result2.'<br/>';
//echo $result3.'<br/><br/>';

//header("Content-type: application/x-msdownload");
//header("Content-Disposition: attachment; filename=$filename");
//header("Pragma: no-cache");
//header("Expires: 0");
//echo "<div id='tableContainer' class='tableContainer'>";
echo "<table border = '1' width='100%' cellspacing = '0' >";
echo "<tr>";
echo "<th bgcolor='#EEBB88'><b>Time</b></th>
<th bgcolor = '#EEBB88'><b>DAY</b></th>
<th bgcolor = '#EEBB88'><b>Job IN</b></th>
<th bgcolor = '#EEBB88'><b>Job Q</b></th>
<th bgcolor='#EEBB88'><b>Inv</b></th>
<th  bgcolor='#EEBB88'><b>S1 Q</b></th>
<th  bgcolor='#EEBB88'><b>S1 Util</b></th>
<th bgcolor = '#EEBB88'><b>S1 Cap</b></th>
<th bgcolor ='#EEBB88'><b>S2 Q</b></th>
<th bgcolor ='#EEBB88'><b>S2 Util</b></th>
<th bgcolor = '#EEBB88'><b>S2 Cap</b></th>
<th  bgcolor='#EEBB88'><b>S3 Q</b></th>
<th bgcolor='#EEBB88'><b>S3 Util</b></th>
<th bgcolor = '#EEBB88'><b>S3 Cap</b></th>
<th bgcolor = '#EEBB88'><b>Job Out1</b></th>
<th bgcolor = '#EEBB88'><b>Job Out2</b></th>
<th bgcolor = '#EEBB88'><b>Job Out3</b></th>
<th bgcolor='#EEBB88'><b>Job LT1</b></th>
<th bgcolor='#EEBB88'><b>Job LT2</b></th>
<th bgcolor='#EEBB88'><b>Job LT3</b></th>
<th bgcolor ='#EEBB88'><b>Job Rev1</b></th>
<th bgcolor ='#EEBB88'><b>Job Rev2</b></th>
<th bgcolor ='#EEBB88'><b>Job Rev3</b></th>
<th bgcolor = '#EEBB88'><b>SD Plan</b></th>
<th bgcolor ='#EEBB88'><b>Revenue</b></th>
<th bgcolor = '#EEBB88' ><b>Cost</b></th>
<th bgcolor = '#EEBB88'><b>Left Job</b></th>
</tr></thead>";
//echo 'DAY,JOBIN,JOBQ,INV,S1Q,S1UTIL,S2Q,S2UTIL,S3Q,S3UTIL,JOBOUT1,JOBOUT2,JOBOUT3,JOBLT1,JOBLT2,JOBLT3,JOBREV1,JOBREV2,JOBREV3';
//echo "";
//echo "\n";

//initial variables
$sumjobin = 0;
$sumjobout = 0;

//for ($i=0; $i<sizeof($jobin); $i=$i+2)
for ($i=0; $i<780; $i=$i+2)
{
/*	comment old code out (for csv)
	$data = $jobin[$i];

	$data .= ','.$jobin[$i+1];
	$data .= ','.$jobq[$i+1];
	$data .= ','.$inv2[$i+1];
	$data .= ','.$s1q[$i+1];
	$data .= ','.$s1util[$i+1];

	$data .= ','.$s2q[$i+1];
	$data .= ','.$s2util[$i+1];
	$data .= ','.$s3q[$i+1];
	$data .= ','.$s3util[$i+1];
	$data .= ','.$jobout1[$i+1];

	$data .= ','.$jobout2[$i+1];
	$data .= ','.$jobout3[$i+1];
	$data .= ','.$jobt1[$i+1];
	$data .= ','.$jobt2[$i+1];
	$data .= ','.$jobt3[$i+1];

	$data .= ','.$jobrev1[$i+1];
	$data .= ','.$jobrev2[$i+1];
	$data .= ','.$jobrev3[$i+1];
	$data .= "\n";

	echo $data;
*/

//STEP1 set real date align with day in game
$realday = '';

//STEP2 set real time align with day in game

switch($myperiod){
//set date
//case 50:
	//$realtime = '12:00';
	//$realday = '<b>Sun</b>';
	//$header = 1;
	//break;
case 31:
	$header = 1;
	$realday = '<b>Fri</b>';
	$realtime = $mytime[$myperiod];
	break;
case 151;
	$realtime = $mytime[$myperiod];
	$realday = '<b>Sat</b>';
	$header = 1;
	break;
case 271;
	$realtime = $mytime[$myperiod];
	$realday = '<b>Sun</b>';
	$header = 1;
	break;


default;
	$realtime = $mytime[$myperiod];
	$header = 0;
	break;
	}


//STEP3 Calculation
$sdplan = 0;

//Revenue=M*S=JOBOUT1*JOBREV1
/*
if($jobout1[$i+1] > 0){
	$revenue = $jobout1[$i+1] * $jobrev1[$i+1];
}else if ($jobout2[$i+1] > 0){
	$revenue = $jobout2[$i+1] * $jobrev2[$i+1];
}else if ($jobout3[$i+1] > 0){
	$revenue = $jobout3[$i+1] * $jobrev3[$i+1];
}else{
	$revenue = 0;
}
*/
$revenue = ($jobout1[$i+1] * $jobrev1[$i+1]) + ($jobout2[$i+1] * $jobrev2[$i+1]) + ($jobout3[$i+1] * $jobrev3[$i+1]);

//Cost
$cost = 0;

//LEFTJOB=(SUMJOBIN+JOBIN)-(SUMJOBOUT+JOBOUT1)
$sumjobin = $sumjobin + $jobin[$i+1];
//sum all 3 contracts
$sumjobout = $sumjobout + $jobout1[$i+1]+ $jobout2[$i+1] + $jobout3[$i+1];
$leftjob = $sumjobin - $sumjobout;
if($s1util[$i+1]>0){
	$s1cap = round((($jobout1[$i+1]+ $jobout2[$i+1] + $jobout3[$i+1]) / $s1util[$i+1]),3);
}else{
	$s1cap = 0;
}
if($s2util[$i+1]>0){
	$s2cap = round((($jobout1[$i+1]+ $jobout2[$i+1] + $jobout3[$i+1]) / $s2util[$i+1]),3);
}else{
	$s2cap = 0;
}
if($s3util[$i+1]>0){
	$s3cap = round((($jobout1[$i+1]+ $jobout2[$i+1] + $jobout3[$i+1]) / $s3util[$i+1]),3);
}else{
	$s3cap = 0;
}

//STEP4 set value from game or fix day
	//if ($jobin[$i] <> ''){

	if($header == 1){

echo "<tr><td bgcolor='#EEBB88'><b>Time</b></td>
<th bgcolor = '#EEBB88'><b>DAY</b></th>
<th bgcolor = '#EEBB88'><b>Job IN</b></th>
<th bgcolor = '#EEBB88'><b>Job Q</b></th>
<th bgcolor='#EEBB88'><b>Inv</b></th>
<th  bgcolor='#EEBB88'><b>S1 Q</b></th>
<th  bgcolor='#EEBB88'><b>S1 Util</b></th>
<th bgcolor = '#EEBB88'><b>S1 Cap</b></th>
<th bgcolor ='#EEBB88'><b>S2 Q</b></th>
<th bgcolor ='#EEBB88'><b>S2 Util</b></th>
<th bgcolor = '#EEBB88'><b>S2 Cap</b></th>
<th  bgcolor='#EEBB88'><b>S3 Q</b></th>
<th bgcolor='#EEBB88'><b>S3 Util</b></th>
<th bgcolor = '#EEBB88'><b>S3 Cap</b></th>
<th bgcolor = '#EEBB88'><b>Job Out1</b></th>
<th bgcolor = '#EEBB88'><b>Job Out2</b></th>
<th bgcolor = '#EEBB88'><b>Job Out3</b></th>
<th bgcolor='#EEBB88'><b>Job LT1</b></th>
<th bgcolor='#EEBB88'><b>Job LT2</b></th>
<th bgcolor='#EEBB88'><b>Job LT3</b></th>
<th bgcolor ='#EEBB88'><b>Job Rev1</b></th>
<th bgcolor ='#EEBB88'><b>Job Rev2</b></th>
<th bgcolor ='#EEBB88'><b>Job Rev3</b></th>
<th bgcolor = '#EEBB88'><b>SD Plan</b></th>
<th bgcolor ='#EEBB88'><b>Revenue</b></th>
<th bgcolor = '#EEBB88' ><b>Cost</b></th>
<th bgcolor = '#EEBB88'><b>Left Job</b></th></tr>";

	}
  //if($myperiod >= 1 && $myperiod <= 50){
	if($myperiod >= 1 && $myperiod <= 30){
		//echo "";
		//echo "<tr><td bgcolor='#F6CEF5'></td>
		echo "<td bgcolor='#F6CEF5'> </td>
		<td >".$jobin[$i]."</td>
		<td bgcolor = '#ECCEF5'>".$jobin[$i+1]."</td>
		<td>".$jobq[$i+1]."</td>
		<td bgcolor='#F6E3CE'>".$inv2[$i+1]."</td>
		<td bgcolor='#F5F6CE'>".$s1q[$i+1]."</td>
		<td bgcolor='#F5F6CE'>".$s1util[$i+1]."</td>
		<td bgcolor='#F5F6CE'>".$s1cap."</td>
		<td bgcolor ='#D8F6CE'>".$s2q[$i+1]."</td>
		<td bgcolor ='#D8F6CE'>".$s2util[$i+1]."</td>
		<td bgcolor ='#D8F6CE'>".$s2cap."</td>
		<td bgcolor='#F5F6CE'>".$s3q[$i+1]."</td>
		<td bgcolor='#F5F6CE'>".$s3util[$i+1]."</td>
		<td bgcolor='#F5F6CE'>".$s3cap."</td>
		<td bgcolor = '#ECCEF5'>".$jobout1[$i+1]."</td>
		<td bgcolor = '#ECCEF5'>".$jobout2[$i+1]."</td>
		<td bgcolor = '#ECCEF5'>".$jobout3[$i+1]."</td>
		<td bgcolor='#F5F6CE'>".$jobt1[$i+1]."</td>
		<td bgcolor='#F5F6CE'>".$jobt2[$i+1]."</td>
		<td bgcolor='#F5F6CE'>".$jobt3[$i+1]."</td>
		<td bgcolor ='#D8F6CE'>".$jobrev1[$i+1]."</td>
		<td bgcolor ='#D8F6CE'>".$jobrev2[$i+1]."</td>
		<td bgcolor ='#D8F6CE'>".$jobrev3[$i+1]."</td>
		<td>".$sdplan."</td>
		<td bgcolor ='#D8F6CE'>".$revenue."</td>
		<td>".$cost."</td>
		<td bgcolor = '#ECCEF5'>".$leftjob."</td>";
		echo "</tr>";
	}else{
		//echo "<tr><td bgcolor='#F6CEF5'></td>
		echo "<td bgcolor='#F6CEF5'>".$realday.$realtime."</td>
		<td >".$myperiod."</td>
		<td bgcolor = '#ECCEF5'>".$jobin[$i+1]."</td>
		<td>".$jobq[$i+1]."</td>";
		if($jobin[$i+1] <> ''){
		echo "<td bgcolor='#F6E3CE'>".$inv2[$i+1]."</td>";
		}else{
		echo "<td bgcolor='#F6E3CE'>".''."</td>";
		}
		echo "<td bgcolor='#F5F6CE'>".$s1q[$i+1]."</td>
		<td bgcolor='#F5F6CE'>".$s1util[$i+1]."</td>
		<td bgcolor='#F5F6CE'>".$s1cap."</td>
		<td bgcolor ='#D8F6CE'>".$s2q[$i+1]."</td>
		<td bgcolor ='#D8F6CE'>".$s2util[$i+1]."</td>
		<td bgcolor ='#D8F6CE'>".$s2cap."</td>
		<td bgcolor='#F5F6CE'>".$s3q[$i+1]."</td>
		<td bgcolor='#F5F6CE'>".$s3util[$i+1]."</td>
		<td bgcolor='#F5F6CE'>".$s3cap."</td>
		<td >".$jobout1[$i+1]."</td>
		<td bgcolor = '#ECCEF5'>".$jobout2[$i+1]."</td>
		<td >".$jobout3[$i+1]."</td>
		<td >".$jobt1[$i+1]."</td>
		<td bgcolor='#F5F6CE'>".$jobt2[$i+1]."</td>
		<td >".$jobt3[$i+1]."</td>
		<td >".$jobrev1[$i+1]."</td>
		<td bgcolor ='#D8F6CE'>".$jobrev2[$i+1]."</td>
		<td >".$jobrev3[$i+1]."</td>
		<td>".$sdplan."</td>
		<td bgcolor ='#D8F6CE'>".$revenue."</td>
		<td>".$cost."</td>
		<td bgcolor = '#ECCEF5'>".$leftjob."</td>";
		echo "</tr>";
	}



//LAST STEP : add counter / clear value
	$myperiod = $myperiod + 1;
	$sdplan = 0;
	$revenue = 0;
	$cost = 0;
	$leftjob = 0;
	$header = 0;
}
echo "</table>";
?>

</body>
</html>
