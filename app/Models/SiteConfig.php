<?php

namespace App\Models;

use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteConfig extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected static function booted()
    {
        static::creating(function ($siteConfig) {
            if (!$siteConfig->order) {
                $siteConfig->order = SiteConfig::max('order') + 1;
            }
        });

        static::deleting(function ($side_config) {
            // delete files when deleted
            $files = ['file'];
            foreach ($files as $file) {
                if ($side_config->$file) {
                    Storage::disk('public')->delete($side_config->$file);
                }
            }
        });
    }
}
