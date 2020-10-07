<?php
/**
 * Created by PhpStorm.
 * User: miraclejohnoctaviojr
 * Date: 25/3/20
 * Time: 11:08 AM
 */
    defined('BASEPATH') OR exit('No direct script access allowed');

    require APPPATH . 'third_party/REST_Controller.php';
    require APPPATH . 'third_party/Format.php';

    use Restserver\Libraries\REST_Controller;

    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");

    class Api extends REST_Controller {

        public function __construct() {
            parent::__construct();

            // Load these helper to create JWT tokens
            $this->load->helper(array('jwt', 'authorization'));
        }

    }

/* End of file Api.php */



