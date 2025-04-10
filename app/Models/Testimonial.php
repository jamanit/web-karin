<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected static function booted()
    {
        static::creating(function ($testimonial) {
            if (!$testimonial->order) {
                $testimonial->order = Testimonial::max('order') + 1;
            }
        });
    }
}
