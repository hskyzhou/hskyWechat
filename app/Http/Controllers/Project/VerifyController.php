<?php

namespace App\Http\Controllers\Project;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Services\Project\VerifyService as Service;

class VerifyController extends Controller{

	public $service;

	/*构造函数*/
	public function __construct(Service $service){
		$this->service = $service;
	}

	/*验证方法*/
	public function index(){
		return $this->service->index();
	}
}
