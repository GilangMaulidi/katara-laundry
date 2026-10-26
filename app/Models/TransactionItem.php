<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TransactionItem extends Model
{
    use HasFactory;

    protected $table = 'detail_transaksi';

    protected $fillable = [
        'transaksi_id',
        'layanan_id',
        'kuantitas',
        'harga_satuan',
        'subtotal',
        'catatan',
        'transaction_id',
        'service_id',
        'quantity',
        'unit_price',
        'notes',
    ];

    protected function casts(): array
    {
        return [
            'kuantitas' => 'decimal:2',
            'harga_satuan' => 'decimal:2',
            'subtotal' => 'decimal:2',
        ];
    }

    public function transaction(): BelongsTo
    {
        return $this->belongsTo(Transaction::class, 'transaksi_id');
    }

    public function service(): BelongsTo
    {
        return $this->belongsTo(Service::class, 'layanan_id');
    }

    public function getTransactionIdAttribute(): mixed
    {
        return $this->attributes['transaksi_id'] ?? null;
    }

    public function setTransactionIdAttribute($value): void
    {
        $this->attributes['transaksi_id'] = $value;
    }

    public function getServiceIdAttribute(): mixed
    {
        return $this->attributes['layanan_id'] ?? null;
    }

    public function setServiceIdAttribute($value): void
    {
        $this->attributes['layanan_id'] = $value;
    }

    public function getQuantityAttribute(): mixed
    {
        return $this->attributes['kuantitas'] ?? 0;
    }

    public function setQuantityAttribute($value): void
    {
        $this->attributes['kuantitas'] = $value;
    }

    public function getUnitPriceAttribute(): mixed
    {
        return $this->attributes['harga_satuan'] ?? 0;
    }

    public function setUnitPriceAttribute($value): void
    {
        $this->attributes['harga_satuan'] = $value;
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
