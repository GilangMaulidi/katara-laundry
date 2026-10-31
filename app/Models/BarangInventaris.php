<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangInventaris extends Model
{
    use HasFactory;

    protected $table = 'barang_inventaris';

    protected $fillable = [
        'nama',
        'kategori',
        'satuan',
        'stok',
        'stok_minimal',
        'biaya_per_satuan',
        'catatan',
        'name',
        'category',
        'unit',
        'stock',
        'minimum_stock',
        'cost_per_unit',
        'notes',
    ];

    protected function casts(): array
    {
        return [
            'stok' => 'decimal:2',
            'stok_minimal' => 'decimal:2',
            'biaya_per_satuan' => 'decimal:2',
        ];
    }

    public function isLowStock(): bool
    {
        $currentStock = $this->stok ?? $this->stock ?? 0;
        $minStock = $this->stok_minimal ?? $this->minimum_stock ?? 0;

        return (float) $currentStock <= (float) $minStock;
    }

    public function getIsLowStockAttribute(): bool
    {
        return $this->isLowStock();
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

    public function getStockAttribute(): mixed
    {
        return $this->attributes['stok'] ?? 0;
    }

    public function setStockAttribute($value): void
    {
        $this->attributes['stok'] = $value;
    }

    public function getMinimumStockAttribute(): mixed
    {
        return $this->attributes['stok_minimal'] ?? 0;
    }

    public function setMinimumStockAttribute($value): void
    {
        $this->attributes['stok_minimal'] = $value;
    }

    public function getCostPerUnitAttribute(): mixed
    {
        return $this->attributes['biaya_per_satuan'] ?? 0;
    }

    public function setCostPerUnitAttribute($value): void
    {
        $this->attributes['biaya_per_satuan'] = $value;
    }

    public function getNotesAttribute(): ?string
    {
        return $this->attributes['catatan'] ?? null;
    }

    public function setNotesAttribute($value): void
    {
        $this->attributes['catatan'] = $value;
    }
}

