<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LogWhatsapp extends Model
{
    use HasFactory;

    protected $table = 'log_whatsapp';

    protected $fillable = [
        'transaksi_id',
        'pelanggan_id',
        'nomor_telepon',
        'jenis_pesan',
        'pesan',
        'status',
        'dikirim_pada',
        'payload_respons',
        'transaction_id',
        'customer_id',
        'phone_number',
        'type',
        'message',
        'sent_at',
        'response_payload',
    ];

    protected function casts(): array
    {
        return [
            'dikirim_pada' => 'datetime',
        ];
    }

    public function transaksi(): BelongsTo
    {
        return $this->belongsTo(Transaksi::class, 'transaksi_id');
    }

    public function transaction(): BelongsTo
    {
        return $this->transaksi();
    }

    public function pelanggan(): BelongsTo
    {
        return $this->belongsTo(Pelanggan::class, 'pelanggan_id');
    }

    public function customer(): BelongsTo
    {
        return $this->pelanggan();
    }

    public function getTypeLabelAttribute(): string
    {
        $type = $this->jenis_pesan ?? $this->type;

        return match ($type) {
            'nota_baru' => 'Nota Masuk Baru',
            'siap_ambil' => 'Pemberitahuan Siap Ambil',
            'pengingat_ambil' => 'Pengingat Pengambilan (>3 Hari)',
            'kustom' => 'Pesan Manual',
            default => ucfirst((string) $type),
        };
    }

    public function getTransactionIdAttribute(): mixed
    {
        return $this->attributes['transaksi_id'] ?? null;
    }

    public function setTransactionIdAttribute($value): void
    {
        $this->attributes['transaksi_id'] = $value;
    }

    public function getCustomerIdAttribute(): mixed
    {
        return $this->attributes['pelanggan_id'] ?? null;
    }

    public function setCustomerIdAttribute($value): void
    {
        $this->attributes['pelanggan_id'] = $value;
    }

    public function getPhoneNumberAttribute(): ?string
    {
        return $this->attributes['nomor_telepon'] ?? null;
    }

    public function setPhoneNumberAttribute($value): void
    {
        $this->attributes['nomor_telepon'] = $value;
    }

    public function getTypeAttribute(): ?string
    {
        return $this->attributes['jenis_pesan'] ?? null;
    }

    public function setTypeAttribute($value): void
    {
        $this->attributes['jenis_pesan'] = $value;
    }

    public function getMessageAttribute(): ?string
    {
        return $this->attributes['pesan'] ?? null;
    }

    public function setMessageAttribute($value): void
    {
        $this->attributes['pesan'] = $value;
    }

    public function getSentAtAttribute(): mixed
    {
        return $this->dikirim_pada;
    }

    public function setSentAtAttribute($value): void
    {
        $this->attributes['dikirim_pada'] = $value;
    }

    public function getResponsePayloadAttribute(): ?string
    {
        return $this->attributes['payload_respons'] ?? null;
    }

    public function setResponsePayloadAttribute($value): void
    {
        $this->attributes['payload_respons'] = $value;
    }
}

