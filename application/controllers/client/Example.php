<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Example extends CI_Controller {    
    var $data;

    public function __construct(){
        parent::__construct();
    }
    
    public function index(){
        $data = array(
        );
        $this->client->pages('example',$data);
    }
}