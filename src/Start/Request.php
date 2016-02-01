<?php
class Start_Request {
    public static function make_request($url, $data = array()) {
        try {
            return Start_Net_Stream::make_request($url, $data);
        } catch (Start_Error_SSLError $e) {
            // fallback to CURL
            return Start_Net_Curl::make_request($url, $data);
        }
    }
}
?>
