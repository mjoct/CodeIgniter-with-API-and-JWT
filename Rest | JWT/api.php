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

        public function login_post() {
            // Have the dummy user to check credentials
            $dummy_user = [
                'username' => 'joe',
                'password' => '123'
            ];

            // Extract user data from POST request (Postman header)
            $username = $this->post('username');
            $password = $this->post('password');

            // Check if valid user
            if ($username == $dummy_user['username'] && $password == $dummy_user['password']) {

                // Create token from the user data and send it as response
                $token = AUTHORIZATION::generateToken(['username' => $dummy_user['username'], 'msg' => 'Blah Blah']);

                // Preapre the response
                $status = parent::HTTP_OK;
                $response = ['status' => $status, 'token' => $token];
                // REST_Controller provide this method to send response
                $this->response($response, $status);

            } else {
                $this->response(['msg' => 'Invalid username or password'], parent::HTTP_NOT_FOUND);
            }
        }


    }


/* End of file Api.php */



