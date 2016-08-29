<?php

namespace App\Http\Controllers\Project;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Services\Project\DutyService as Service;

class DutyController extends Controller
{
	public $service;

	public function __construct(Service $service){
		\Log::error(func_get_args());
		$this->service = $service;
	}

	public function index($attributes = []){
		\Log::debug(func_get_args());
		return $this->service->index($attributes);
	}
}
