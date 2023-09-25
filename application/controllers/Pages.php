<?php

declare(strict_types=1);

class Pages extends CI_Controller
{

	public function view($page = 'home')
	{
		if (!file_exists(APPPATH . 'views/pages/' . $page . '.php')) {
			show_404();
		}

		$data['title'] = ucfirst($page); // Capitalize the first letter

		$this->load->view('templates/_header', $data);
		$this->load->view('pages/' . $page, $data);
		$this->load->view('templates/_footer', $data);
	}
}
