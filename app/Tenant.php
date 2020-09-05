<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Multitenancy\Models\Tenant as TenantBase;
class Tenant extends TenantBase
// class Tenant extends Model
{
    protected $connection = 'landlord';

    // public static function booted()
    // {
    //     static::creating(fn(Tenant $model) => $model->createDatabase());
    // }
    //
    // public function createDatabase()
    // {
    //     // add logic to create database
    //     DB::statement('create database ' .$this->database );
    // }
}
