<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Parfum extends Model
{
    use HasFactory;

    protected $table = 'parfum';

    protected $fillable = [
        'nama',
        'karakter_aroma',
        'deskripsi',
        'aktif',
        'name',
        'aroma_character',
        'description',
        'is_active',
    ];

    protected function casts(): array
    {
        return [
            'aktif' => 'boolean',
        ];
    }

    public function transaksi(): HasMany
    {
        return $this->hasMany(Transaksi::class, 'parfum_id');
    }

    public function transactions(): HasMany
    {
        return $this->transaksi();
    }

    public function getNameAttribute(): ?string
    {
        return $this->attributes['nama'] ?? null;
    }

    public function setNameAttribute($value): void
    {
        $this->attributes['nama'] = $value;
    }

    public function getAromaCharacterAttribute(): ?string
    {
        return $this->attributes['karakter_aroma'] ?? null;
    }

    public function setAromaCharacterAttribute($value): void
    {
        $this->attributes['karakter_aroma'] = $value;
    }

    public function getDescriptionAttribute(): ?string
    {
        return $this->attributes['deskripsi'] ?? null;
    }

    public function setDescriptionAttribute($value): void
    {
        $this->attributes['deskripsi'] = $value;
    }

    public function getIsActiveAttribute(): bool
    {
        return (bool) ($this->attributes['aktif'] ?? true);
    }

    public function setIsActiveAttribute($value): void
    {
        $this->attributes['aktif'] = (bool) $value;
    }
}

