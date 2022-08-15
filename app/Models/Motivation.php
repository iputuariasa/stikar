<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Motivation extends Model
{
    use HasFactory;
    
    protected $guarded = ['id'];

    public function scopeFilter($query, array $filter)
    {
        $query->when($filter['searchMotivations'] ?? false, function($query, $search){
            return $query->where('pencetus', 'like', '%' . $search . '%')
                         ->orwhere('isi', 'like', '%' .$search . '%');
        });
    }
}
