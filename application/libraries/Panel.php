<?php
class Panel {
	protected $_ci;
	
	function __construct(){
		$this->_ci = &get_instance();
	}
	
	function pages($page, $data=null){
		$data['head'] = $this->_ci->load->view('panel/elems/head', $data, TRUE);
		$data['content'] = $this->_ci->load->view('panel/pages/'.$page, $data, TRUE);
		$data['foot'] = $this->_ci->load->view('panel/elems/foot', $data, TRUE);
		$this->_ci->load->view('panel/display/pages', $data);
	}
	
	function pages_side($page, $data=null){
		$data['head'] = $this->_ci->load->view('panel/elems/head', $data, TRUE);
		$data['side'] = $this->_ci->load->view('panel/elems/side', $data, TRUE);
		$data['content'] = $this->_ci->load->view('panel/pages/'.$page, $data, TRUE);
		$data['foot'] = $this->_ci->load->view('panel/elems/foot', $data, TRUE);
		$this->_ci->load->view('panel/display/pages_side', $data);
	}
	
	function page_single($page, $data=null){
		$this->_ci->load->view('panel/pages/'.$page, $data);
	}
}

?>