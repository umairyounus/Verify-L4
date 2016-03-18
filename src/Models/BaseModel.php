<?php
namespace Toddish\Verify\Models;

use Illuminate\Database\Eloquent\Model;

class BaseModel extends \Eloquent
{
	protected $prefix = '';

	public function __construct(array $attributes = array())
	{
		parent::__construct($attributes);

		$this->prefix = config('verify.prefix', '');
		$this->table = $this->prefix . $this->getTable();
	}
}
