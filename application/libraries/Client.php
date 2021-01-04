<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Client {
	
	protected $_ci;
	
	function __construct(){
		$this->_ci = &get_instance();
	}
	
	function pages($page, $data=null){
		$data['head'] = $this->_ci->load->view('client/elems/head', $data, TRUE);
		$data['content'] = $this->_ci->load->view('client/pages/'.$page, $data, TRUE);
		$data['foot'] = $this->_ci->load->view('client/elems/foot', $data, TRUE);
		$this->_ci->load->view('client/display/pages', $data);
	}
	
	function pages_side($page, $data=null){
		$data['head'] = $this->_ci->load->view('client/elems/head', $data, TRUE);
		$data['content'] = $this->_ci->load->view('client/pages/'.$page, $data, TRUE);
		$data['side'] = $this->_ci->load->view('client/elems/side', $data, TRUE);
		$data['foot'] = $this->_ci->load->view('client/elems/foot', $data, TRUE);
		$this->_ci->load->view('client/display/pages_side', $data);
	}
	
	function page_single($page, $data=null){
		$this->_ci->load->view('client/pages/'.$page, $data);
	}
}

?>