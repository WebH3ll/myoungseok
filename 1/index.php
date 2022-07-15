<?php 

include("config.php");

print_r($_SERVER['QUERY_STRING']);
$query = fuck_extract_filtering($_SERVER['QUERY_STRING']);

parse_str($query, $arr);
echo "<br>";
print_r($arr);
echo "<br>";
foreach($arr as $key=>$value){
    $$key = fuck_path_change_or_check($value);
    echo "key :".$$key."   \tkey : ".$key."<br>";
}

echo "<br>";
echo "<br>";
echo "<br>";
echo $_SESSION['include_path'];

include($_SESSION['include_path']);

?>

<div style="magin-top:100px;">
안녕하세요 저희는 ElePHPant팀입니다 이번에 PHP 언어를 이용하여 개발 공부를 시작했는데요
아직 많이 부족한 지식으로 테스트용으로 개발된 사이트지만 보기만 하세요.. 보기만 하라니깐요?(^__________^)
</div>