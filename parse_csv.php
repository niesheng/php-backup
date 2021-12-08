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
$str = '"2021/10/01 0:22:47 JST","10977639933","order","250-7527788-7363044","000B30-APJP2","【進化版】AVANTEK 防音用イヤーマフ 遮音値36dB ANSI S3.19&CE EN352-1認証済み 聴覚保護 騒音対策 防音ヘッドホン (ブ?","1","amazon.jp","Amazon","","神奈川県","211-0044","","1,999.00","200.00","0","0","0","0","0","0","0","0","-330.00","-434.00","0","0","1,435.00"';

$values = parse_csv($str);

echo '<pre>';
print_r($values);
echo '</pre>';
?>
