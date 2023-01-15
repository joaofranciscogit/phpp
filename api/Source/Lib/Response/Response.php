<?php

    namespace Autoload\Lib\Response;

    class Response
    {
        public function responseCode($code)
        {
            return header("HTTP/1.1 ".$code);
        }

        public function responseJson($json)
        {
            return json_encode($json);
        }
    }