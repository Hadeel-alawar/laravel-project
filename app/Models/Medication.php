<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medication extends Model
{
    use HasFactory;
    protected $fillable = ["scientific_name", "commercial_name", "cat", "manufacturer", "quantity", "expire_date", "price"];

    protected $hidden = ["created_at", "updated_at"];
    public function requests()
    {
        return $this->belongsToMany(Req::class, "med_req_pivot");
    }
}
