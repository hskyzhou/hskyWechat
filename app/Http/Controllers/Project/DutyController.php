<?php

namespace App\Http\Controllers\Project;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Services\DutyService;

class DutyController extends Controller
{
	public $service;

	public function __construct(Service $service){
		$this->service = $service;
	}

	public function index(){
		
	}
}
