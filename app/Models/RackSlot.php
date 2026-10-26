<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class RackSlot extends Model
{
    use HasFactory;

    protected $table = 'slot_rak';

    protected $fillable = [
        'kode_rak',
        'nomor_slot',
        'kode',
        'status',
        'catatan',
        'rack_code',
        'slot_number',
        'code',
        'notes',
    ];

    public function transactions(): HasMany
    {
        return $this->hasMany(Transaction::class, 'slot_rak_id');
    }

public function isAvailable(): bool
    {
        return $this->status === 'tersedia';
    }

    public function getRackCodeAttribute(): ?string
    {
        return $this->attributes['kode_rak'] ?? null;
    }

    public function setRackCodeAttribute($value): void
    {
        $this->attributes['kode_rak'] = $value;
    }

    public function getSlotNumberAttribute(): mixed
    {
        return $this->attributes['nomor_slot'] ?? null;
    }

    public function setSlotNumberAttribute($value): void
    {
        $this->attributes['nomor_slot'] = $value;
    }

    public function getCodeAttribute(): ?string
    {
        return $this->attributes['kode'] ?? null;
    }

    public function setCodeAttribute($value): void
    {
        $this->attributes['kode'] = $value;
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
