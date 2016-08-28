<?php

namespace App\Http\Controllers\Project;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Wechat;

class WechatController extends Controller{
    
    public function server(){
    	$server = EasyWeChat::server();
    }
}
