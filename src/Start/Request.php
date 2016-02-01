<?php
class Start_Request {
    public static function make_request($url, $data = array()) {
        if (Start::$useCurl) {
            return Start_Net_Curl::make_request($url, $data);
        } else {
            return Start_Net_Stream::make_request($url, $data);
        }
    }
}
?>
