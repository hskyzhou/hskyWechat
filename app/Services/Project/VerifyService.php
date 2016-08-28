<?php
	namespace App\Services\Project;

	class VerifyService{

		public function index(){
			$signature = request('signature', '');
			$timestamp = request('timestamp', '');
			$nonce = request('nonce', '');
			$token = config('wechat.token');

			$tmpArr = [$token, $timestamp, $nonce];
			sort($tmpArr, SORT_STRING);
			$tmpStr = implode($tmpArr);
			$tmpStr = sha1($tmpStr);

			if($tmpStr == $signature){
				return true;
			}else{
				return false;
			}
		}
	}	