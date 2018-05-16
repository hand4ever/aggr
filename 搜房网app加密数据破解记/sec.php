<?php

$qstr = 'city='.urlencode('上海').'&messagename=GetDelegateTips&newcode=1210063040&type=8';
// $qstr = urlencode($qstr);

$dest = encrypt();
join2($qstr, $dest);

echo md5($qstr), PHP_EOL;
echo strtolower("DF87A14EACA93042481B0E0721DB4808");



function encrypt() {
    $strKey = 'g`of';
    $dest = ["\x67", "\x79","\x3D","\x36","\x74","\x58","\x54","\x62","\x65","\x76","\x24","\x3F","\x69","\x4C","\x64","\x7D","\x50","\x37","\x75","\xEB","\x81","\xA6","\x53","\xEB","\x92","\xAE","\x39","\x2A","\x31","\x6B","\x61","\x60","\x5E","\x47","\x37","\x21","\x4C","\x5F","\xEB","\x81","\xBF","\x78","\x33","\x3E","\xEB","\x81","\xBF","\x63","\x4B","\x48","\x70","\x7F","\x6C","\x46","\x75","\x6F","\x58","\x67","\x5A","\x70","\x47","\x51","\x56","\x41","\x6F","\xEB","\x81","\xA9","\xEB","\x92","\xAB","\x74","\x7B","\x7B","\x27","\x33","\x6B","\x5C"];
    for ($i=0; $i<count($dest); $i++) {
        for ($j=0; $j<strlen($strKey); $j++) {
            $dest[$i] ^= $strKey[$j];
        }
    }
    return $dest;
}
function join2(&$qstr, $dest){
    for($i=0; $i<count($dest); $i++) {
        $qstr .= $dest[$i];
    }
}


exit(PHP_EOL.PHP_EOL);
