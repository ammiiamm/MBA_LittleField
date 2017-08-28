<html>
<head>
<title>Littlefield Summary</title>
<style>
<!--
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
-->
</style>
</head>


<body>
<h1>Statistics Data</h1>
<br>
<?php

$lt_url = 'http://lab.responsive.net/Littlefield/';
$filename = 'lt_'.date('Ymd_His').'.csv';
$institution = '<your_institution_id>';
$id = '<your_id>';
$password = '<your_password>';
$sleep_time = 0.1;

function sd_square($x, $mean) { return pow($x - $mean,2); }

// Function to calculate standard deviation (uses sd_square)
function call_sd($array) {
    // square root of sum of squares devided by N-1
    return sqrt(array_sum(array_map("sd_square", $array, array_fill(0,count($array), (array_sum($array) / count($array)) ) ) ) / (count($array)-1) );
}

// login
$url = $lt_url.'CheckAccess';
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
for ($i=0; $i<sizeof($jobq); $i=$i+2){
$list_jobq[$i] = $jobq[$i+1];
//echo $list_jobin[$i];
}



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


for ($i=0; $i<sizeof($jobin); $i=$i+2){
$list_jobin[$i] = $jobin[$i+1];
$list_jobq[$i] = $jobq[$i+1];
	$list_inv2[$i] = $inv2[$i+1];
	$list_s1q[$i] = $s1q[$i+1];
	$list_s1util[$i] = $s1util[$i+1];

	$list_s2q[$i] = $s2q[$i+1];
	$list_s2util[$i] = $s2util[$i+1];
	$list_s3q[$i] = $s3q[$i+1];
	$list_s3util[$i] = $s3util[$i+1];
	$list_jobout1[$i] = $jobout1[$i+1];

	$list_jobout2[$i] = $jobout2[$i+1];
	$list_jobout3[$i] = $jobout3[$i+1];
	$list_jobt1[$i] = $jobt1[$i+1];
	$list_jobt2[$i] = $jobt2[$i+1];
	$list_jobt3[$i] = $jobt3[$i+1];

	$list_jobrev1[$i] = $jobrev1[$i+1];
	$list_jobrev2[$i] = $jobrev2[$i+1];
	$list_jobrev3[$i] = $jobrev3[$i+1];

//echo $list_jobin[$i];
}
echo "[CUSTOMER ORDER]<br>";
if ($list_jobin > 0){
$jobin_mean = array_sum($list_jobin)/count($list_jobin);
}
$jobin_sd = call_user_func('call_sd', $list_jobin);
echo "Mean: ".$jobin_mean;
echo "<br>";
echo "SD: ".$jobin_sd;
echo "<br>";
echo "<br>[INVENTORY]<br>";
if ($list_inv2 > 0){
$inv_mean = array_sum($list_inv2)/count($list_inv2);
}else{
$inv_mean  = 0;
}
echo array_sum($list_inv2);
echo count($list_inv2);
echo "<br>";
$inv_sd = call_user_func('call_sd', $list_inv2);
echo "Mean: ".$inv_mean;
echo "<br>";
echo "SD: ".$inv_sd;

$sumalljobout = array_sum($list_jobout1) + array_sum($list_jobout2) + array_sum($list_jobout3);
if($list_s1util > 0){
$cap1 = array_sum($list_jobin)/array_sum($list_s1util);
}else{
$cap1 = 0;
}

if($list_s2util > 0){
$cap2 = array_sum($list_jobin)/array_sum($list_s2util);
}else{
$cap2 = 0;
}

if($list_s3util > 0){
$cap3 = array_sum($list_jobin)/array_sum($list_s3util);
}else{
$cap3 = 0;
}
echo "<br>";
echo "<br>[PRODUCTION PLAN]<br>";
echo "Current Capacity:";
echo "<table border = '1' cellspacing = '0'>";
echo "<tr><td>Station 1</td><td>".$cap1."</td></tr>";
echo "<tr><td>Station 2</td><td>".$cap2."</td></tr>";
echo "<tr><td>Station 3</td><td>".$cap3."</td></tr>";
echo "</table>";
?>

</body>
</html>
