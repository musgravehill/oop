<?php

trait trHelperString {

    private static function _WDS($in) {
        $res = str_replace(array("\r", "\n", "\t"), ' ', $in);
        $res = preg_replace('/[^\w\d\s]/Uui', '', $res);
        $res = preg_replace('/\s{2,}/Uui', ' ', $res);
        return trim($res);
    }

}
