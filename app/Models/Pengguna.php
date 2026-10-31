<?php

namespace App\Models;

use Database\Factories\PenggunaFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Pengguna extends Authenticatable
{
    use HasFactory, Notifiable;

    protected static function newFactory(): PenggunaFactory
    {
        return PenggunaFactory::new();
    }

    protected $table = 'pengguna';

    protected $fillable = [
        'nama',
        'email',
        'password',
        'peran',
        'nomor_telepon',
        'aktif',
        'name',
        'role',
        'phone_number',
        'is_active',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
            'aktif' => 'boolean',
        ];
    }

    public function getNameAttribute(): ?string
    {
        return $this->attributes['nama'] ?? null;
    }

    public function setNameAttribute($value): void
    {
        $this->attributes['nama'] = $value;
    }

    public function getRoleAttribute(): ?string
    {
        return $this->attributes['peran'] ?? null;
    }

    public function setRoleAttribute($value): void
    {
        $this->attributes['peran'] = $value;
    }

    public function getPhoneNumberAttribute(): ?string
    {
        return $this->attributes['nomor_telepon'] ?? null;
    }

    public function setPhoneNumberAttribute($value): void
    {
        $this->attributes['nomor_telepon'] = $value;
    }

    public function getIsActiveAttribute(): bool
    {
        return (bool) ($this->attributes['aktif'] ?? true);
    }

    public function setIsActiveAttribute($value): void
    {
        $this->attributes['aktif'] = (bool) $value;
    }

    public function isAdmin(): bool
    {
        return ($this->peran ?? $this->role) === 'administrator';
    }

    public function isKasir(): bool
    {
        return ($this->peran ?? $this->role) === 'kasir';
    }

    public function isOperator(): bool
    {
        return ($this->peran ?? $this->role) === 'operator';
    }

    public function transaksi(): HasMany
    {
        return $this->hasMany(Transaksi::class, 'pengguna_id');
    }

    public function transactions(): HasMany
    {
        return $this->transaksi();
    }
}
