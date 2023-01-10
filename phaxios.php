<?php


class phaxios {

    public static function get($url, $headers = [], $assoc = true, $auth = ['user' => null, 'pass' => null]) {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        if($auth['user'] != null && $auth['pass'] != null) {
            curl_setopt($ch, CURLOPT_USERPWD, $auth['user'] . ':' . $auth['pass']);
        }

        if(count($headers) > 0) {
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        }

        $result = json_decode(curl_exec($ch), $assoc);

        if(curl_errno($ch)) {
            echo 'Error: ' . curl_error($ch);
        }

        curl_close($ch);

        return $result;
    }



    public static function post($url, $headers = [], $body = [], $send_body_as_json = true, $assoc = true, $auth = ['user' => null, 'pass' => null]) {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);

        if($auth['user'] != null && $auth['pass'] != null) {
            curl_setopt($ch, CURLOPT_USERPWD, $auth['user'] . ':' . $auth['pass']);
        }

        if(count($body) > 0) {
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($body));
        }

        if($send_body_as_json) {
            $headers[] = 'Content-Type: application/json';
        }

        if(count($headers) > 0) {
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        }

        $result = json_decode(curl_exec($ch), $assoc);

        if(curl_errno($ch)) {
            echo 'Error: ' . curl_error($ch);
        }

        curl_close($ch);

        return $result;
    }



    public static function patch($url, $headers = [], $body = [], $send_body_as_json = true, $assoc = true, $auth = ['user' => null, 'pass' => null]) {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PATCH');

        if($auth['user'] != null && $auth['pass'] != null) {
            curl_setopt($ch, CURLOPT_USERPWD, $auth['user'] . ':' . $auth['pass']);
        }

        if(count($body) > 0) {
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($body));
        }

        if($send_body_as_json) {
            $headers[] = 'Content-Type: application/json';
        }

        if(count($headers) > 0) {
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        }

        $result = json_decode(curl_exec($ch), $assoc);

        if(curl_errno($ch)) {
            echo 'Error: ' . curl_error($ch);
        }

        curl_close($ch);

        return $result;
    }



    public static function put($url, $headers = [], $body = [], $assoc = true, $auth = ['user' => null, 'pass' => null]) {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');

        if($auth['user'] != null && $auth['pass'] != null) {
            curl_setopt($ch, CURLOPT_USERPWD, $auth['user'] . ':' . $auth['pass']);
        }

        if(count($body) > 0) {
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($body));
        }

        if(count($headers) > 0) {
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        }

        $result = json_decode(curl_exec($ch), $assoc);

        if(curl_errno($ch)) {
            echo 'Error: ' . curl_error($ch);
        }

        curl_close($ch);

        return $result;
    }



    public static function delete($url, $headers = [], $send_body_as_json = true, $assoc = true, $auth = ['user' => null, 'pass' => null]) {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'DELETE');

        if($auth['user'] != null && $auth['pass'] != null) {
            curl_setopt($ch, CURLOPT_USERPWD, $auth['user'] . ':' . $auth['pass']);
        }

        if($send_body_as_json) {
            $headers[] = 'Content-Type: application/json';
        }

        if(count($headers) > 0) {
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        }

        $result = json_decode(curl_exec($ch), $assoc);

        if(curl_errno($ch)) {
            echo 'Error: ' . curl_error($ch);
        }

        curl_close($ch);

        return $result;
    }


}