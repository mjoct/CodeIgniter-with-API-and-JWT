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
            $this->load->helper(['jwt', 'authorization']);
        }

        public function hello_get() {
            $tokenData = "Hello World";

            // Create a token
            $token = AUTHORIZATION::generateToken($tokenData);
            // Set HTTP status code
            $status = parent::HTTP_OK;
            // Prepare the response
            $response = ['status' => $status, 'token' => $token];
            // REST_Controller provide this method to send response
            $this->response($response, $status);
        }
    }


/* End of file Api.php */



