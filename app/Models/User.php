<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;
use Althinect\FilamentSpatieRolesPermissions\Concerns\HasSuperAdmin;
use Spatie\Permission\Traits\HasRoles;
use Filament\Models\Contracts\HasAvatar;
use Illuminate\Support\Facades\Storage;
// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements HasAvatar
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable, HasRoles, HasSuperAdmin;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'whatsapp_number',
        'avatar_url',
        'custom_fields',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
            'custom_fields' => 'array',
        ];
    }

    public function getFilamentAvatarUrl(): ?string
    {
        // $avatarColumn = config('filament-edit-profile.avatar_column', 'avatar_url');
        // return $this->$avatarColumn ? Storage::url("$this->$avatarColumn") : null;
        return $this->avatar_url ? Storage::url("$this->avatar_url") : null;
    }

    protected static function booted()
    {
        static::updating(function ($user) {
            // Check if there's a new avatar and delete the old one if it exists
            if ($user->isDirty('avatar_url')) {
                if ($user->getOriginal('avatar_url') && $user->getOriginal('avatar_url') !== $user->avatar_url) {
                    Storage::disk('public')->delete($user->getOriginal('avatar_url'));
                }
            }
        });

        static::deleting(function ($user) {
            // delete files when deleted  
            if ($user) {
                if ($user->avatar_url) {
                    Storage::disk('public')->delete($user->avatar_url);
                }
            }
        });
    }
}
