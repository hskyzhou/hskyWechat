<?php

namespace App\Http\Controllers\Project;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use EasyWeChat;

class WechatController extends Controller{
    
    public function server(){
    	// $server = EasyWeChat::server();

    	// dd($server);
    	// dd(app('wechat'));

    	$server = app('wechat')->server;

    	$server->setMessageHandler(function($message){
    		switch($message->MsgType){
    			default : 
    				break;
    		}
    	});

    	return $server->server();
    }
}
