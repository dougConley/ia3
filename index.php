<?php

include('run.php');

$full_html = "<!DOCTYPE html>\n";

$head = "<head>
    <meta charset=\"UTF-8\">
    <title>HOlas</title>
</head>\n";

$full_html .= $head;

$foot = "<footer>\n";
$foot .= "  <div>".myDate()."</div>\n";
$foot .= "</footer>";

$full_html .= $foot;

echo $full_html;


?>