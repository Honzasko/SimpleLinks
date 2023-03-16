<?php 
#load data
$settings_json = file_get_contents(getcwd()."/data/settings.json");
$settings = json_decode($settings_json,true);
$links_json = file_get_contents(getcwd()."/data/links.json");
$links = json_decode($links_json,true);

#render data and escape
$object = array();
$object['titles'] = array();
$object['urls'] = array();
$keys = array_keys($links);
$object['num'] = count($keys);

$icons = array("github","twitter","youtube","instagram","facebook","twitch","discord");

for($i = 0;$i < count($keys);$i++)
{
    $object['titles'][$i] = htmlspecialchars($links[$keys[$i]]['title']);
    for($k = 0;$k < count($icons);$k++)
    {
        $object['titles'][$i] = str_replace("[".$icons[$k]."]","<img src='./static/icons/".$icons[$k].".svg' width=32 height=32>",$object['titles'][$i]);
    }
    $object['urls'][$i] = htmlspecialchars($links[$keys[$i]]['url']);
}



#request template
require_once(getcwd()."/data/template.php");
?>