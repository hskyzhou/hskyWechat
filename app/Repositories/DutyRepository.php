<?php 
	namespace App\Repositories;

	use  Bosnadev\Repositories\Eloquent\Repository;

	class DutyRepository extends Repository{
		public function model(){
			return \App\Models\Duty::class;
		}
	}