<?php
namespace App\Controllers;
class Page extends BaseController

{
	
		public function contact()
	{
	
		return view('contact', [
		'title' => 'Halaman contact',
		'content' => 'Ini adalah halaman contact yang menjelaskan tentang isi halaman ini.']);
	}
	
		public function faqs()
	{
	
		echo "Ini halaman FAQ";
	}
	
		public function tos()
	{
		echo "ini halaman Term of Services";
	}
}