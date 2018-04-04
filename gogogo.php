<?php
// $lt_url = 'http://ism.responsive.net/Littlefield/';
//http://sim.responsive.net/lt/opscom/
$lt_url = 'http://sim.responsive.net/Littlefield/';
$filename = 'littlefield'.'.csv';
$institution = 'opscom'; //main competition
$id = 'tbskookkook';
$password = 'jibjibjib';

$sleep_time = 0.5;

// login
$url = $lt_url;
//set POST variables

define("COOKIE_FILE", "cookie.txt");

$fields = array(
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

//execute post
$result = curl_exec($ch);

//close connection
curl_close($ch);

sleep($sleep_time);

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

$myfile = fopen($filename, "w") or die("Unable to open file!");
fwrite($myfile, 'DAY,JOBIN,JOBQ,INV,S1Q,S1UTIL,S2Q,S2UTIL,S3Q,S3UTIL,JOBOUT1,JOBOUT2,JOBOUT3,JOBLT1,JOBLT2,JOBLT3,JOBREV1,JOBREV2,JOBREV3');
//echo //'DAY,JOBIN,JOBQ,INV,S1Q,S1UTIL,S2Q,S2UTIL,S3Q,S3UTIL,JOBOUT1,JOBOUT2,JOBOUT3,JOBLT1,JOBLT2,JOBLT3,JOBREV1,JOBREV2,JOBREV3';
fwrite($myfile,"\n");
//echo "\n";
for ($i=0; $i<sizeof($jobin); $i=$i+2)
{
	//DAY
	$data = $jobin[$i];
	//JOBIN
	$data .= ','.$jobin[$i+1];
	//JOBQ
	$data .= ','.$jobq[$i+1];
	//INV
	$data .= ','.$inv2[$i+1];
	//S1Q
	$data .= ','.$s1q[$i+1];
	//S1UTIL
	$data .= ','.$s1util[$i+1];

	//S2Q
	$data .= ','.$s2q[$i+1];
	//S2UTIL
	$data .= ','.$s2util[$i+1];
	//S3Q
	$data .= ','.$s3q[$i+1];
	//S3UTIL
	$data .= ','.$s3util[$i+1];
	//JOBOUT1
	$data .= ','.$jobout1[$i+1];

	//JOBOUT2
	$data .= ','.$jobout2[$i+1];
	//JOBOUT3
	$data .= ','.$jobout3[$i+1];
	//JOBLT1
	$data .= ','.$jobt1[$i+1];
	//JOBLT2
	$data .= ','.$jobt2[$i+1];
	//JOBLT3
	$data .= ','.$jobt3[$i+1];

	//JOBREV1
	$data .= ','.$jobrev1[$i+1];
	//JOBREV2
	$data .= ','.$jobrev2[$i+1];
	//JOBREV3
	$data .= ','.$jobrev3[$i+1];
	$data .= "\n";

	//echo $data;
	fwrite($myfile,$data);
}

fclose($myfile);

echo 'New File was created: '.$filename;

?>
