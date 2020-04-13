<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model{

    protected $table = 'contact';
    protected $fillable = [ 'contact_location','contact_url','contact_phone','contact_email','contact_map' ];
    protected $guarded = [ 'contact_id' ];
    protected $casts = [ 'contact_update' => 'datetime' ];

}
