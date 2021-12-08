<?php
function parse_csv($string, $delim = ',', $quote='"') {
    //Double quote parsing errors may occur
    //$new = str_replace("{$quote}{$quote}", $quote, $string);

    $matches = array();
    preg_match_all("/\s*({$quote}?)(.*?)\\1\s*(?:{$delim}|$)/",
        $string, $matches);

    array_pop($matches[2]);
    return $matches[2];
}
$str = 'c "s""v""","s", "f\ny" ';

$values = parse_csv($str);

echo '<pre>';
print_r($values);
echo '</pre>';
?>
