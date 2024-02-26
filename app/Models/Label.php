<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Label extends Model
{
    use HasFactory;
    public function tickets()
    {
        return $this->belongsToMany(Ticket::class,'ticket_labels', 'ticket_id', 'label_id');
    }
}
