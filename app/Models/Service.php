<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Service extends Model
{
    use HasFactory;

    protected $table = 'layanan';

    protected $fillable = [
        'nama',
        'kategori',
        'satuan',
        'harga',
        'durasi_jam',
        'minimal_order',
        'deskripsi',
        'aktif',
        'name',
        'category',
        'unit',
        'price',
        'duration_hours',
        'min_order',
        'description',
        'is_active',
    ];

    protected function casts(): array
    {
        return [
            'harga' => 'decimal:2',
            'minimal_order' => 'decimal:2',
            'durasi_jam' => 'integer',
            'aktif' => 'boolean',
        ];
    }

    public function transactionItems(): HasMany
    {
        return $this->hasMany(TransactionItem::class, 'layanan_id');
    }

    public function getNameAttribute(): ?string
    {
        return $this->attributes['nama'] ?? null;
    }

    public function setNameAttribute($value): void
    {
        $this->attributes['nama'] = $value;
    }

    public function getCategoryAttribute(): ?string
    {
        return $this->attributes['kategori'] ?? null;
    }

    public function setCategoryAttribute($value): void
    {
        $this->attributes['kategori'] = $value;
    }

    public function getUnitAttribute(): ?string
    {
        return $this->attributes['satuan'] ?? null;
    }

    public function setUnitAttribute($value): void
    {
        $this->attributes['satuan'] = $value;
    }

    public function getPriceAttribute(): mixed
    {
        return $this->attributes['harga'] ?? 0;
    }

    public function setPriceAttribute($value): void
    {
        $this->attributes['harga'] = $value;
    }

    public function getDurationHoursAttribute(): mixed
    {
        return $this->attributes['durasi_jam'] ?? 0;
    }

    public function setDurationHoursAttribute($value): void
    {
        $this->attributes['durasi_jam'] = $value;
    }

    public function getMinOrderAttribute(): mixed
    {
        return $this->attributes['minimal_order'] ?? 1;
    }

    public function setMinOrderAttribute($value): void
    {
        $this->attributes['minimal_order'] = $value;
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
