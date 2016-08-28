<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Duty extends Model{

	protected $fillable;

	// protected $dateFormat = 'U';

	public function __construct(array $attributes = []){
		parent::__construct($attributes);

		/*设置操作的数据字段*/
		$this->fillable = array_values(config('project.field.duties'));
	}

	/*设置scope*/


	/*设置relation*/
}
