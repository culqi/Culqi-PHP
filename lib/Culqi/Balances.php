<?php
namespace Culqi;

class Balances extends Resource {

    const URL_BALANCES = "/balances/";

    public function getList($options = NULL) {
        return $this->request("GET", self::URL_BALANCES, $api_key = $this->culqi->api_key, $options);
    }

    public function get($alias = NULL) {
        return $this->request("GET", self::URL_BALANCES . $alias . "/", $api_key = $this->culqi->api_key);
    }

}