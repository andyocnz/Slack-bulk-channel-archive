

<?php 
//Replace with your token
$json_url = "https://slack.com/api/channels.list?token=________________&pretty=1";
$json = file_get_contents($json_url);


$data = json_decode($json);
$m=count($data->channels);
echo "total channels:".$m."<br>";

$k=0;

for($i=0; $i<$m; $i++) {

//echo $data->channels[$i]->name."<br>";
$cn=$data->channels[$i]->name;
$cn2=$data->channels[$i]->is_archived;

if (strpos($cn, 'sk-') !== false and $cn2==0) {
   echo $data->channels[$i]->name."(".$cn2.") (id=";
   $cid=$data->channels[$i]->id;
   echo $cid.');<br>';
//Replace with your token
$json_url2 = "https://slack.com/api/channels.archive?token=__________________&channel=".$cid."&pretty=1";
$json2 = file_get_contents($json_url2);
++$k;
}

}
echo "total sk channels archived:".$k."<br>";



?>