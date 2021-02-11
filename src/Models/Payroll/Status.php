<?php

namespace CleaniqueCoders\OpenPayroll\Models\Payroll;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $guarded = ['id'];
    protected $table   = 'payroll_statuses';
}
