<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Customer extends Model
{
    use HasFactory;

    protected $table = 'pelanggan';

    protected $fillable = [
        'nama',
        'nomor_telepon',
        'alamat',
        'catatan',
        'total_pesanan',
        'name',
        'phone_number',
        'address',
        'notes',
        'total_orders',
    ];

public function transactions(): HasMany
    {
        return $this->hasMany(Transaction::class, 'pelanggan_id');
    }

public function getFormattedPhoneAttribute(): string
    {
        $rawPhone = $this->nomor_telepon ?? $this->phone_number;
        $phone = preg_replace('/[^0-9]/', '', (string) $rawPhone);
        if (str_starts_with($phone, '0')) {
            return '62'.substr($phone, 1);
        }

        return $phone;
    }

    public function getNameAttribute(): ?string
    {
        return $this->attributes['nama'] ?? null;
    }

    public function setNameAttribute($value): void
    {
        $this->attributes['nama'] = $value;
    }

    public function getPhoneNumberAttribute(): ?string
    {
        return $this->attributes['nomor_telepon'] ?? null;
    }

    public function setPhoneNumberAttribute($value): void
    {
        $this->attributes['nomor_telepon'] = $value;
    }

    public function getAddressAttribute(): ?string
    {
        return $this->attributes['alamat'] ?? null;
    }

    public function setAddressAttribute($value): void
    {
        $this->attributes['alamat'] = $value;
    }

    public function getNotesAttribute(): ?string
    {
        return $this->attributes['catatan'] ?? null;
    }

    public function setNotesAttribute($value): void
    {
        $this->attributes['catatan'] = $value;
    }

    public function getTotalOrdersAttribute(): int
    {
        return (int) ($this->attributes['total_pesanan'] ?? 0);
    }

    public function setTotalOrdersAttribute($value): void
    {
        $this->attributes['total_pesanan'] = (int) $value;
    }
}
