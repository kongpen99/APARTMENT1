<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RoomModel extends Model
{
    protected $table = 'rooms'; // Specify the table name if it's not the plural of the model name
    protected $fillable = ['name','price_per_day','price_per_month','status']; // Define fillable attributes for mass assignment

    public $timestamps = false; // Enable timestamps if your table has created_at and updated_at columns
    // You can add relationships, scopes, or other methods as needed
} 
   