<?php

namespace Culqi;

use Culqi\Utils\Validation\PlanValidation as PlanValidation;

/**
 * Class Plans
 *
 * @package Culqi
 */
class Plans extends Resource {

    const URL_PLANS = "/plans/";

    /**
     * @param array|null $options
     *
     * @return all Plans.
     */
    public function all($options=[]) {
        try {
            PlanValidation::list($options);
            return $this->request("GET", self::URL_PLANS, $api_key = $this->culqi->api_key, $options);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    /**
     * @param array|null $options
     *
     * @return create Plan response.
     */
    public function create($options = NULL, $encryption_params=[]) {
        try {
            PlanValidation::create($options);
            return $this->request("POST", self::URL_PLANS, $api_key = $this->culqi->api_key, $options, false, $encryption_params);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    /**
     * @param string|null $id
     *
     * @return get a Plan.
     */
    public function get($id) {
        try {
            $this->helpers::validateStringStart($id, "pln");
            return $this->request("GET", self::URL_PLANS . $id . "/", $api_key = $this->culqi->api_key);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    /**
     * @param string|null $id
     *
     * @return delete a Plan.
     */
    public function delete($id) {
        try {
            $this->helpers::validateStringStart($id, "pln");
            return $this->request("DELETE", self::URL_PLANS . $id . "/", $api_key = $this->culqi->api_key);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    /**
     * @param string|null $id
     * @param array|null $options
     *
     * @return update Plan response.
     */
    public function update($id = NULL, $options = NULL, $encryption_params=[]) {
        try {
            $this->helpers::validateStringStart($id, "pln");
            return $this->request("PATCH", self::URL_PLANS . $id . "/", $api_key = $this->culqi->api_key, $options, false, $encryption_params);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

}
