<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Transaction extends Model
{
    use HasFactory;

    protected $table = 'transaksi';

    protected $fillable = [
        'nomor_nota',
        'pelanggan_id',
        'pengguna_id',
        'parfum_id',
        'slot_rak_id',
        'status',
        'status_pembayaran',
        'metode_pembayaran',
        'total_harga',
        'jumlah_dibayar',
        'diskon',
        'sisa_tagihan',
        'catatan',
        'tanggal_masuk',
        'estimasi_selesai',
        'tanggal_selesai',
        'tanggal_ambil',
        'wa_nota_terkirim',
        'wa_siap_terkirim',
        'wa_pengingat_terkirim',
        'invoice_number',
        'customer_id',
        'user_id',
        'perfume_id',
        'rack_slot_id',
        'payment_status',
        'payment_method',
        'total_price',
        'amount_paid',
        'discount',
        'remaining_balance',
        'notes',
        'order_date',
        'estimated_completion_date',
        'actual_completion_date',
        'pickup_date',
        'is_wa_entry_sent',
        'is_wa_ready_sent',
        'is_wa_reminder_sent',
    ];

    protected function casts(): array
    {
        return [
            'total_harga' => 'decimal:2',
            'jumlah_dibayar' => 'decimal:2',
            'diskon' => 'decimal:2',
            'sisa_tagihan' => 'decimal:2',
            'tanggal_masuk' => 'datetime',
            'estimasi_selesai' => 'datetime',
            'tanggal_selesai' => 'datetime',
            'tanggal_ambil' => 'datetime',
            'wa_nota_terkirim' => 'boolean',
            'wa_siap_terkirim' => 'boolean',
            'wa_pengingat_terkirim' => 'boolean',
        ];
    }

    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class, 'pelanggan_id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'pengguna_id');
    }

    public function perfume(): BelongsTo
    {
        return $this->belongsTo(Perfume::class, 'parfum_id');
    }

    public function rackSlot(): BelongsTo
    {
        return $this->belongsTo(RackSlot::class, 'slot_rak_id');
    }

    public function items(): HasMany
    {
        return $this->hasMany(TransactionItem::class, 'transaksi_id');
    }

    public function whatsappLogs(): HasMany
    {
        return $this->hasMany(WhatsappLog::class, 'transaksi_id');
    }

public function getStatusLabelAttribute(): string
    {
        return match ($this->status) {
            'menunggu_diproses' => 'Menunggu Diproses',
            'sedang_dicuci' => 'Sedang Dicuci',
            'sedang_dikeringkan' => 'Sedang Dikeringkan',
            'sedang_disetrika' => 'Sedang Disetrika',
            'sedang_dikemas' => 'Sedang Dikemas (Packing)',
            'siap_diambil' => 'Siap Diambil di Rak',
            'selesai' => 'Selesai / Sudah Diambil',
            'dibatalkan' => 'Dibatalkan',
            default => ucfirst(str_replace('_', ' ', (string) $this->status)),
        };
    }

public function getPaymentStatusLabelAttribute(): string
    {
        $status = $this->status_pembayaran ?? $this->payment_status;

        return match ($status) {
            'lunas' => 'Lunas',
            'uang_muka' => 'Uang Muka (DP)',
            'belum_bayar' => 'Belum Bayar',
            default => ucfirst((string) $status),
        };
    }

public function getPaymentMethodLabelAttribute(): string
    {
        $method = $this->metode_pembayaran ?? $this->payment_method;

        return match ($method) {
            'tunai' => 'Tunai (Cash)',
            'qris' => 'QRIS Kasir',
            'transfer' => 'Transfer Bank',
            default => strtoupper((string) $method),
        };
    }

    public function getInvoiceNumberAttribute(): ?string
    {
        return $this->attributes['nomor_nota'] ?? null;
    }

    public function setInvoiceNumberAttribute($value): void
    {
        $this->attributes['nomor_nota'] = $value;
    }

    public function getCustomerIdAttribute(): mixed
    {
        return $this->attributes['pelanggan_id'] ?? null;
    }

    public function setCustomerIdAttribute($value): void
    {
        $this->attributes['pelanggan_id'] = $value;
    }

    public function getUserIdAttribute(): mixed
    {
        return $this->attributes['pengguna_id'] ?? null;
    }

    public function setUserIdAttribute($value): void
    {
        $this->attributes['pengguna_id'] = $value;
    }

    public function getPerfumeIdAttribute(): mixed
    {
        return $this->attributes['parfum_id'] ?? null;
    }

    public function setPerfumeIdAttribute($value): void
    {
        $this->attributes['parfum_id'] = $value;
    }

    public function getRackSlotIdAttribute(): mixed
    {
        return $this->attributes['slot_rak_id'] ?? null;
    }

    public function setRackSlotIdAttribute($value): void
    {
        $this->attributes['slot_rak_id'] = $value;
    }

    public function getPaymentStatusAttribute(): ?string
    {
        return $this->attributes['status_pembayaran'] ?? null;
    }

    public function setPaymentStatusAttribute($value): void
    {
        $this->attributes['status_pembayaran'] = $value;
    }

    public function getPaymentMethodAttribute(): ?string
    {
        return $this->attributes['metode_pembayaran'] ?? null;
    }

    public function setPaymentMethodAttribute($value): void
    {
        $this->attributes['metode_pembayaran'] = $value;
    }

    public function getTotalPriceAttribute(): mixed
    {
        return $this->attributes['total_harga'] ?? 0;
    }

    public function setTotalPriceAttribute($value): void
    {
        $this->attributes['total_harga'] = $value;
    }

    public function getAmountPaidAttribute(): mixed
    {
        return $this->attributes['jumlah_dibayar'] ?? 0;
    }

    public function setAmountPaidAttribute($value): void
    {
        $this->attributes['jumlah_dibayar'] = $value;
    }

    public function getDiscountAttribute(): mixed
    {
        return $this->attributes['diskon'] ?? 0;
    }

    public function setDiscountAttribute($value): void
    {
        $this->attributes['diskon'] = $value;
    }

    public function getRemainingBalanceAttribute(): mixed
    {
        return $this->attributes['sisa_tagihan'] ?? 0;
    }

    public function setRemainingBalanceAttribute($value): void
    {
        $this->attributes['sisa_tagihan'] = $value;
    }

    public function getNotesAttribute(): ?string
    {
        return $this->attributes['catatan'] ?? null;
    }

    public function setNotesAttribute($value): void
    {
        $this->attributes['catatan'] = $value;
    }

    public function getOrderDateAttribute(): mixed
    {
        return $this->tanggal_masuk;
    }

    public function setOrderDateAttribute($value): void
    {
        $this->attributes['tanggal_masuk'] = $value;
    }

    public function getEstimatedCompletionDateAttribute(): mixed
    {
        return $this->estimasi_selesai;
    }

    public function setEstimatedCompletionDateAttribute($value): void
    {
        $this->attributes['estimasi_selesai'] = $value;
    }

    public function getActualCompletionDateAttribute(): mixed
    {
        return $this->tanggal_selesai;
    }

    public function setActualCompletionDateAttribute($value): void
    {
        $this->attributes['tanggal_selesai'] = $value;
    }

    public function getPickupDateAttribute(): mixed
    {
        return $this->tanggal_ambil;
    }

    public function setPickupDateAttribute($value): void
    {
        $this->attributes['tanggal_ambil'] = $value;
    }

    public function getIsWaEntrySentAttribute(): bool
    {
        return (bool) ($this->attributes['wa_nota_terkirim'] ?? false);
    }

    public function setIsWaEntrySentAttribute($value): void
    {
        $this->attributes['wa_nota_terkirim'] = (bool) $value;
    }

    public function getIsWaReadySentAttribute(): bool
    {
        return (bool) ($this->attributes['wa_siap_terkirim'] ?? false);
    }

    public function setIsWaReadySentAttribute($value): void
    {
        $this->attributes['wa_siap_terkirim'] = (bool) $value;
    }

    public function getIsWaReminderSentAttribute(): bool
    {
        return (bool) ($this->attributes['wa_pengingat_terkirim'] ?? false);
    }

    public function setIsWaReminderSentAttribute($value): void
    {
        $this->attributes['wa_pengingat_terkirim'] = (bool) $value;
    }
}
