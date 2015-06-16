<?php
$output = "";
$count = 0;
$matches = array();
$patterns = array();
$patterns[0] = '/@(?!font-face|import|media|keyframes|-)/';
$patterns[1] = '/\.([\w\-]*)\s*\((.*)\)\s*\{/';
$patterns[2] = '/\.([\w\-]*\(.*\)\s*;)/';
$patterns[3] = '/~"(.*)"/';
$replacements = array();
$replacements[3] = '$';
$replacements[2] = '@mixin \1(\2){';
$replacements[1] = '@include \1';
$replacements[0] = '#{"\1"}';

if(isset($_POST["searchVal"])){
	$string = $_POST["searchVal"];
	$output = preg_replace($patterns, $replacements, $string, -1, $count);
}else{
	$output = "No code entered";
}

// echo $output;
// $count;
echo "<div id=\"output\">$output</div>";
echo "<div id=\"count\">$count</div>";

?>