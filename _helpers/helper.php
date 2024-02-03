<?php
function base_url($a=''){
    $getbase_url=$GLOBALS['setUri']['base'];
    return $getbase_url.$a;
}
function assets($a=''){
    $getbase_assets=$GLOBALS['setUri']['assets'];
    return base_url($getbase_assets.$a);
}

function url($a='',$b=''){
    return base_url($b.'?halaman='.$a);

}

function templates($a=''){
    return assets($GLOBALS['template'].$a);
};

