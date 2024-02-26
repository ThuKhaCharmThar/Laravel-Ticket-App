<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    public function priority()
    {
        return $this->belongsTo(Priority::class);
    }
    // public function label()
    // {
    //     return $this->belongsTo(Label::class);
    // }
    // public function category()
    // {
    //     return $this->belongsTo(Category::class);
    // }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    public function labels()
    {
        return $this->belongsToMany(Label::class, 'ticket_labels', 'ticket_id', 'label_id')
                    ->withTimestamps();
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'ticket_categories', 'ticket_id', 'category_id')
                    ->withTimestamps();
    }
}
