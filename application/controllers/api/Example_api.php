<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require(APPPATH.'/libraries/REST_Controller.php');
class Example_api extends REST_Controller {
    var $data;
    
    public function __construct(){
        parent::__construct();
    }
    
    public function examples_get() {
        date_default_timezone_set('Asia/Jakarta');
        
        $json['data'] = 'All Datas';
        
        $this->response($json);
    }
    
    public function example_get() {
        date_default_timezone_set('Asia/Jakarta');
        
        $json['data'] = 'Data';
        
        $this->response($json);
    }
    
    public function example_post() {
        date_default_timezone_set('Asia/Jakarta');
        
        $json['data'] = 'Post Data';
        
        $this->response($json);
    }
    
    public function example_put() {
        date_default_timezone_set('Asia/Jakarta');
        
        $json['data'] = 'Put Data';
        
        $this->response($json);
    }
    
    public function example_delete() {
        date_default_timezone_set('Asia/Jakarta');
        
        $json['data'] = 'Delete Data';
        
        $this->response($json);
    }
}