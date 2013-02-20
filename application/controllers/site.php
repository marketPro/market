<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {

	public function index()
	{
		$this->load->view('view_index');
	}
	///////////////////////////
	function market(){
		$this->load->view('index_market');
		}
	///////////////////////////
	function market_deatils(){
		$this->load->view('market_details');
		}	
	///////////////////////////
	function user_register(){
		$this->load->view('user_register');
		}		
}
