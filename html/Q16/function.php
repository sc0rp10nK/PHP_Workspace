<?php
function sortData(string $sortKey,int ...$arry){
    switch($sortKey){
        case 'A':
            print "<p>昇順に整列</p>";
            sort($arry);
        break;
        case 'D':
            print "<p>降順に整列</p>";
            rsort($arry);
        break;
        default:
        print "<p>parameter error!!! = {$sortKey}</p>";
        break;
    }
    return $arry;
}
?>