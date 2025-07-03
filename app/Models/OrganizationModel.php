<?php

    namespace App\Models;
    use Illuminate\Database\Eloquent\Model;
     
   class OrganizationModel extends Model
   {
    protected $table = 'organization';
    protected $fillable = ['name', 'address', 'phone', 'tax_code','logo'];
    public $timestamps = false;

   }

