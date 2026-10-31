@extends('layouts.aplikasi')

@section('title', 'Kasir POS Transaksi Baru')
@section('page_title', 'Kasir POS - Buat Transaksi Baru')

@section('content')
<div class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-start" id="pos-app">

<div class="lg:col-span-7 space-y-4">
<div class="bg-white p-4 rounded-2xl border border-slate-200 shadow-xs space-y-3">
            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-3">
                <div class="relative flex-1">
                    <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-400">
                        <i class="fa-solid fa-magnifying-glass text-sm"></i>
                    </div>
                    <input type="text" id="service-search" placeholder="Cari layanan (misal: cuci setrika, bedcover, jas)..." class="w-full pl-10 pr-4 py-2 bg-slate-50 border border-slate-200 rounded-xl text-xs sm:text-sm focus:outline-none focus:ring-2 focus:ring-brand-500 transition-colors">
                </div>

<div class="flex items-center gap-1.5 p-1 bg-slate-100 rounded-xl shrink-0 text-xs font-bold">
                    <button type="button" onclick="filterCategory('semua')" class="category-tab px-3 py-1.5 rounded-lg bg-white text-brand-600 shadow-xs transition-all" data-category="semua">
                        Semua
                    </button>
                    <button type="button" onclick="filterCategory('kiloan')" class="category-tab px-3 py-1.5 rounded-lg text-slate-600 hover:text-slate-900 transition-all" data-category="kiloan">
                        🧺 Kiloan
                    </button>
                    <button type="button" onclick="filterCategory('satuan')" class="category-tab px-3 py-1.5 rounded-lg text-slate-600 hover:text-slate-900 transition-all" data-category="satuan">
                        👔 Satuan
                    </button>
                </div>
            </div>
        </div>

<div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-3.5" id="services-grid">
            @foreach($services as $svc)
                <div class="service-card bg-white p-4 rounded-2xl border border-slate-200 hover:border-brand-500 hover:shadow-md transition-all cursor-pointer group flex flex-col justify-between"
                     data-id="{{ $svc->id }}"
                     data-name="{{ $svc->name }}"
                     data-category="{{ $svc->category }}"
                     data-unit="{{ $svc->unit }}"
                     data-price="{{ (float) $svc->price }}"
                     data-min="{{ (float) $svc->min_order }}"
                     onclick="addToCart({{ $svc->id }}, '{{ addslashes($svc->name) }}', {{ (float) $svc->price }}, '{{ $svc->unit }}', {{ (float) $svc->min_order }})">
                    
                    <div>
                        <div class="flex items-center justify-between gap-2 mb-1.5">
                            <span class="px-2 py-0.5 rounded-md text-[10px] font-bold uppercase {{ $svc->category === 'kiloan' ? 'bg-amber-50 text-amber-700 border border-amber-200' : 'bg-blue-50 text-blue-700 border border-blue-200' }}">
                                {{ $svc->category }}
                            </span>
                            <span class="text-[11px] font-medium text-slate-400 flex items-center gap-1">
                                <i class="fa-regular fa-clock text-[10px]"></i>
                                {{ $svc->duration_hours }} Jam
                            </span>
                        </div>
                        <h4 class="font-bold text-slate-900 text-sm leading-snug group-hover:text-brand-600 transition-colors">
                            {{ $svc->name }}
                        </h4>
                        @if($svc->description)
                            <p class="text-[11px] text-slate-500 mt-1 line-clamp-2 leading-relaxed">
                                {{ $svc->description }}
                            </p>
                        @endif
                    </div>

                    <div class="mt-3 pt-3 border-t border-slate-100 flex items-center justify-between">
                        <div>
                            <span class="text-xs font-bold text-slate-900">
                                Rp {{ number_format($svc->price, 0, ',', '.') }}
                            </span>
                            <span class="text-[10px] text-slate-400">/ {{ $svc->unit }}</span>
                        </div>
                        <button type="button" class="w-8 h-8 rounded-lg bg-slate-100 group-hover:bg-brand-600 group-hover:text-white text-slate-600 flex items-center justify-center transition-colors">
                            <i class="fa-solid fa-plus text-xs"></i>
                        </button>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

<div class="lg:col-span-5">
        <form id="pos-form" action="{{ route('pos.store') }}" method="POST" class="bg-white rounded-2xl border border-slate-200 shadow-sm overflow-hidden flex flex-col">
            @csrf

<div class="p-4 bg-slate-900 text-white flex items-center justify-between border-b border-slate-800">
                <div class="flex items-center gap-2">
                    <i class="fa-solid fa-receipt text-brand-400"></i>
                    <h3 class="font-bold text-sm">Nota Transaksi Baru</h3>
                </div>
                <button type="button" onclick="clearCart()" class="text-[11px] font-semibold text-slate-400 hover:text-rose-300 transition-colors">
                    <i class="fa-solid fa-trash-can mr-1"></i> Kosongkan
                </button>
            </div>

            <div class="p-5 space-y-4">
<div>
                    <div class="flex items-center justify-between mb-1.5">
                        <label for="customer_id" class="text-xs font-bold uppercase tracking-wider text-slate-700">
                            Data Pelanggan <span class="text-rose-500">*</span>
                        </label>
                        <button type="button" onclick="openCustomerModal()" class="text-xs font-bold text-brand-600 hover:text-brand-800 flex items-center gap-1">
                            <i class="fa-solid fa-user-plus text-[10px]"></i>
                            <span>+ Pelanggan Baru</span>
                        </button>
                    </div>
                    <div class="relative mb-1.5">
                        <input type="text" id="customer-filter-input" placeholder="🔍 Cari nama atau no. telepon..." oninput="filterCustomerSelect(this.value)" class="w-full py-1.5 px-3 bg-slate-50 border border-slate-200 rounded-lg text-xs placeholder-slate-400 focus:ring-1 focus:ring-brand-500 focus:outline-none">
                    </div>
                    <select id="customer_id" name="customer_id" required class="w-full py-2.5 px-3 bg-slate-50 border border-slate-300 rounded-xl text-xs sm:text-sm font-medium focus:ring-2 focus:ring-brand-500 focus:outline-none">
                        <option value="">-- Pilih Pelanggan Terdaftar --</option>
                        @foreach($customers as $c)
                            <option value="{{ $c->id }}" data-phone="{{ $c->phone_number }}">
                                {{ $c->name }} ({{ $c->phone_number }})
                            </option>
                        @endforeach
                    </select>
                </div>

<div>
                    <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5">
                        Aroma Parfum Pilihan Pelanggan
                    </label>
                    <select name="perfume_id" class="w-full py-2.5 px-3 bg-slate-50 border border-slate-300 rounded-xl text-xs sm:text-sm font-medium focus:ring-2 focus:ring-brand-500 focus:outline-none">
                        <option value="">Aroma Standar Gerai Dinoyo</option>
                        @foreach($perfumes as $p)
                            <option value="{{ $p->id }}">{{ $p->name }} - {{ $p->aroma_character }}</option>
                        @endforeach
                    </select>
                </div>

<div>
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-xs font-bold uppercase tracking-wider text-slate-700">Rincian Layanan</span>
                        <span id="item-count" class="text-[11px] font-bold px-2 py-0.5 rounded-full bg-slate-100 text-slate-600">0 Item</span>
                    </div>

                    <div id="cart-container" class="space-y-2.5 max-h-64 overflow-y-auto pr-1">
<div id="empty-cart-msg" class="p-6 text-center border-2 border-dashed border-slate-200 rounded-xl text-slate-400 text-xs">
                            <i class="fa-solid fa-basket-shopping text-2xl mb-1.5 block text-slate-300"></i>
                            <span>Keranjang masih kosong. Klik layanan di sebelah kiri untuk menambahkan.</span>
                        </div>
                    </div>
                </div>

<div class="pt-3 border-t border-slate-200 space-y-2 text-xs">
                    <div class="flex justify-between text-slate-600">
                        <span>Subtotal Tagihan:</span>
                        <span id="text-subtotal" class="font-bold text-slate-800">Rp 0</span>
                    </div>

                    <div class="flex items-center justify-between gap-3">
                        <span class="text-slate-600">Diskon / Potongan:</span>
                        <div class="w-32 relative">
                            <span class="absolute inset-y-0 left-0 pl-2 flex items-center text-slate-400 text-[10px]">Rp</span>
                            <input type="number" id="discount" name="discount" min="0" value="0" oninput="calculateTotal()" class="w-full pl-7 pr-2 py-1 bg-slate-50 border border-slate-200 rounded-lg text-xs text-right font-bold focus:ring-1 focus:ring-brand-500 focus:outline-none">
                        </div>
                    </div>

                    <div class="flex justify-between text-sm font-black pt-2 border-t border-slate-100 text-slate-900">
                        <span>TOTAL AKHIR:</span>
                        <span id="text-total" class="text-brand-600 text-base">Rp 0</span>
                    </div>
                </div>

<div class="p-3.5 bg-slate-50 rounded-xl border border-slate-200 space-y-3">
                    <div class="grid grid-cols-2 gap-2">
                        <div>
                            <label class="block text-[10px] font-bold uppercase tracking-wider text-slate-500 mb-1">Status Bayar</label>
                            <select id="payment_status" name="payment_status" onchange="adjustPaymentMode()" class="w-full py-1.5 px-2 bg-white border border-slate-300 rounded-lg text-xs font-semibold focus:outline-none">
                                <option value="lunas">Lunas Penuh</option>
                                <option value="uang_muka">Uang Muka (DP)</option>
                                <option value="belum_bayar">Bayar Nanti (Saat Ambil)</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-[10px] font-bold uppercase tracking-wider text-slate-500 mb-1">Metode</label>
                            <select name="payment_method" class="w-full py-1.5 px-2 bg-white border border-slate-300 rounded-lg text-xs font-semibold focus:outline-none">
                                <option value="tunai">Tunai (Cash)</option>
                                <option value="qris">QRIS Kasir</option>
                                <option value="transfer">Transfer Bank</option>
                            </select>
                        </div>
                    </div>

<div id="payment-input-container">
                        <label class="block text-[10px] font-bold uppercase tracking-wider text-slate-500 mb-1">Nominal Diterima Kasir (Rp)</label>
                        <div class="relative">
                            <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-slate-400 font-bold text-xs">Rp</span>
                            <input type="number" id="amount_paid" name="amount_paid" value="0" min="0" oninput="calculateChange()" class="w-full pl-9 pr-3 py-2 bg-white border border-slate-300 rounded-xl text-sm font-black text-slate-900 focus:outline-none focus:ring-2 focus:ring-brand-500">
                        </div>

<div class="grid grid-cols-4 gap-1.5 mt-2">
                            <button type="button" onclick="setCashPreset('exact')" class="py-1 bg-white border border-slate-200 hover:border-brand-500 rounded-lg text-[10px] font-bold text-slate-700">
                                Uang Pas
                            </button>
                            <button type="button" onclick="setCashPreset(20000)" class="py-1 bg-white border border-slate-200 hover:border-brand-500 rounded-lg text-[10px] font-bold text-slate-700">
                                20.000
                            </button>
                            <button type="button" onclick="setCashPreset(50000)" class="py-1 bg-white border border-slate-200 hover:border-brand-500 rounded-lg text-[10px] font-bold text-slate-700">
                                50.000
                            </button>
                            <button type="button" onclick="setCashPreset(100000)" class="py-1 bg-white border border-slate-200 hover:border-brand-500 rounded-lg text-[10px] font-bold text-slate-700">
                                100.000
                            </button>
                        </div>

<div class="mt-2.5 flex items-center justify-between text-xs font-bold pt-2 border-t border-slate-200/60">
                            <span class="text-slate-600">Kembalian:</span>
                            <span id="text-change" class="text-emerald-700 font-extrabold text-sm">Rp 0</span>
                        </div>
                    </div>
                </div>

<div class="space-y-2">
                    <label class="flex items-center gap-2.5 p-2.5 bg-emerald-50/70 border border-emerald-200 rounded-xl cursor-pointer text-xs font-semibold text-emerald-900">
                        <input type="checkbox" name="send_whatsapp" value="1" checked class="w-4 h-4 rounded text-emerald-600 focus:ring-emerald-500 border-emerald-300">
                        <div class="flex-1">
                            <span class="flex items-center gap-1.5">
                                <i class="fa-brands fa-whatsapp text-emerald-600"></i>
                                <span>Kirim Notifikasi WhatsApp Nota Masuk</span>
                            </span>
                            <span class="text-[10px] text-emerald-700 font-normal block">Otomatis kirim rincian nota & tautan lacak ke nomor pelanggan</span>
                        </div>
                    </label>

                    <input type="text" name="notes" placeholder="Catatan khusus transaksi (misal: pisah luntur, kerah kotor)..." class="w-full px-3 py-1.5 bg-slate-50 border border-slate-200 rounded-xl text-xs focus:outline-none">
                </div>
            </div>

<div class="p-4 bg-slate-50 border-t border-slate-200">
                <button type="submit" id="btn-submit" disabled class="w-full py-3 px-4 rounded-xl bg-slate-300 text-slate-500 font-black text-sm shadow-md transition-all flex items-center justify-center gap-2 cursor-not-allowed">
                    <i class="fa-solid fa-print"></i>
                    <span>SIMPAN & CETAK NOTA KASIR</span>
                </button>
            </div>
        </form>
    </div>

</div>

<div id="customer-modal" class="fixed inset-0 z-50 bg-slate-900/60 backdrop-blur-xs flex items-center justify-center p-4 hidden">
    <div class="bg-white rounded-2xl max-w-md w-full p-6 shadow-2xl border border-slate-200 animate-in fade-in zoom-in duration-200">
        <div class="flex items-center justify-between pb-3 border-b border-slate-100">
            <h3 class="font-bold text-base text-slate-900 flex items-center gap-2">
                <i class="fa-solid fa-user-plus text-brand-600"></i>
                <span>Tambah Pelanggan Baru</span>
            </h3>
            <button type="button" onclick="closeCustomerModal()" class="text-slate-400 hover:text-slate-600 p-1">
                <i class="fa-solid fa-xmark text-base"></i>
            </button>
        </div>

        <form id="quick-customer-form" onsubmit="submitQuickCustomer(event)" class="mt-4 space-y-3.5 text-xs">
            <div>
                <label class="block font-bold uppercase tracking-wider text-slate-700 mb-1">Nama Lengkap <span class="text-rose-500">*</span></label>
                <input type="text" id="new_cust_name" required placeholder="Contoh: Budi Santoso (Mahasiswa UB)" class="w-full px-3 py-2 bg-slate-50 border border-slate-300 rounded-xl focus:ring-2 focus:ring-brand-500 focus:outline-none text-sm">
            </div>

            <div>
                <label class="block font-bold uppercase tracking-wider text-slate-700 mb-1">Nomor WhatsApp / Telepon <span class="text-rose-500">*</span></label>
                <input type="tel" id="new_cust_phone" required placeholder="08xxxxxxxxxx" class="w-full px-3 py-2 bg-slate-50 border border-slate-300 rounded-xl focus:ring-2 focus:ring-brand-500 focus:outline-none text-sm font-mono">
            </div>

            <div>
                <label class="block font-bold uppercase tracking-wider text-slate-700 mb-1">Alamat / Kost di Dinoyo</label>
                <textarea id="new_cust_address" rows="2" placeholder="Kost Dinoyo Asri Kav 4..." class="w-full px-3 py-2 bg-slate-50 border border-slate-300 rounded-xl focus:ring-2 focus:ring-brand-500 focus:outline-none"></textarea>
            </div>

            <div class="pt-2 flex items-center justify-end gap-2">
                <button type="button" onclick="closeCustomerModal()" class="px-4 py-2 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-700 font-semibold">
                    Batal
                </button>
                <button type="submit" id="btn-save-cust" class="px-4 py-2 rounded-xl bg-brand-600 hover:bg-brand-700 text-white font-bold flex items-center gap-1.5 shadow-xs">
                    <i class="fa-solid fa-save"></i>
                    <span>Simpan Pelanggan</span>
                </button>
            </div>
        </form>
    </div>
</div>
@endsection

@push('scripts')
<script>
    let cart = [];

    function filterCategory(category) {
        document.querySelectorAll('.category-tab').forEach(btn => {
            if (btn.dataset.category === category) {
                btn.className = 'category-tab px-3 py-1.5 rounded-lg bg-white text-brand-600 shadow-xs transition-all';
            } else {
                btn.className = 'category-tab px-3 py-1.5 rounded-lg text-slate-600 hover:text-slate-900 transition-all';
            }
        });

        document.querySelectorAll('.service-card').forEach(card => {
            if (category === 'semua' || card.dataset.category === category) {
                card.style.display = 'flex';
            } else {
                card.style.display = 'none';
            }
        });
    }

    document.getElementById('service-search').addEventListener('input', function(e) {
        const query = e.target.value.toLowerCase();
        document.querySelectorAll('.service-card').forEach(card => {
            const name = card.dataset.name.toLowerCase();
            if (name.includes(query)) {
                card.style.display = 'flex';
            } else {
                card.style.display = 'none';
            }
        });
    });

    function addToCart(serviceId, serviceName, price, unit, minOrder) {
        const existingIndex = cart.findIndex(item => item.serviceId === serviceId);

        if (existingIndex > -1) {
            cart[existingIndex].quantity = +(cart[existingIndex].quantity + (unit === 'kg' ? 1.0 : 1.0)).toFixed(2);
        } else {
            cart.push({
                serviceId: serviceId,
                name: serviceName,
                price: price,
                unit: unit,
                quantity: minOrder > 0 ? minOrder : 1.0,
                notes: ''
            });
        }

        renderCart();
    }

    function renderCart() {
        const container = document.getElementById('cart-container');
        const countBadge = document.getElementById('item-count');
        const submitBtn = document.getElementById('btn-submit');

        if (cart.length === 0) {
            container.innerHTML = `
                <div id="empty-cart-msg" class="p-6 text-center border-2 border-dashed border-slate-200 rounded-xl text-slate-400 text-xs">
                    <i class="fa-solid fa-basket-shopping text-2xl mb-1.5 block text-slate-300"></i>
                    <span>Keranjang masih kosong. Klik layanan di sebelah kiri untuk menambahkan.</span>
                </div>
            `;
            countBadge.textContent = '0 Item';
            submitBtn.disabled = true;
            submitBtn.className = 'w-full py-3 px-4 rounded-xl bg-slate-300 text-slate-500 font-black text-sm shadow-md transition-all flex items-center justify-center gap-2 cursor-not-allowed';
            calculateTotal();
            return;
        }

        countBadge.textContent = cart.length + ' Item';
        submitBtn.disabled = false;
        submitBtn.className = 'w-full py-3 px-4 rounded-xl bg-brand-600 hover:bg-brand-700 text-white font-black text-sm shadow-lg shadow-brand-500/30 transition-all flex items-center justify-center gap-2 cursor-pointer';

        let html = '';
        cart.forEach((item, index) => {
            const subtotal = item.quantity * item.price;
            html += `
                <div class="p-3 bg-slate-50 border border-slate-200 rounded-xl space-y-2">
                    <div class="flex items-center justify-between gap-2">
                        <div class="font-bold text-slate-800 text-xs truncate">
                            ${item.name}
                            <span class="text-[10px] text-slate-400 font-normal">(@ Rp ${formatRupiah(item.price)})</span>
                        </div>
                        <button type="button" onclick="removeFromCart(${index})" class="text-slate-400 hover:text-rose-500 p-1">
                            <i class="fa-solid fa-xmark text-xs"></i>
                        </button>
                    </div>

<div class="flex items-center justify-between gap-2 pt-1 border-t border-slate-200/60">
                        <div class="flex items-center gap-1.5">
                            <button type="button" onclick="updateQty(${index}, -${item.unit === 'kg' ? 0.5 : 1})" class="w-6 h-6 rounded-lg bg-white border border-slate-300 hover:bg-slate-100 flex items-center justify-center text-xs font-bold text-slate-700">
                                -
                            </button>
                            <input type="number" step="${item.unit === 'kg' ? '0.05' : '1'}" min="0.1" value="${item.quantity}" onchange="setExactQty(${index}, this.value)" class="w-16 py-1 px-1 text-center bg-white border border-slate-300 rounded-lg text-xs font-bold text-slate-800 focus:outline-none">
                            <span class="text-xs text-slate-500 font-medium">${item.unit}</span>
                            <button type="button" onclick="updateQty(${index}, +${item.unit === 'kg' ? 0.5 : 1})" class="w-6 h-6 rounded-lg bg-white border border-slate-300 hover:bg-slate-100 flex items-center justify-center text-xs font-bold text-slate-700">
                                +
                            </button>
                        </div>
                        <span class="font-black text-slate-900 text-xs">
                            Rp ${formatRupiah(subtotal)}
                        </span>
                    </div>

<input type="hidden" name="items[${index}][service_id]" value="${item.serviceId}">
                    <input type="hidden" name="items[${index}][quantity]" value="${item.quantity}">
                    <input type="hidden" name="items[${index}][notes]" value="${item.notes}">
                </div>
            `;
        });

        container.innerHTML = html;
        calculateTotal();
    }

    function updateQty(index, delta) {
        let newQty = cart[index].quantity + delta;
        if (newQty < 0.1) newQty = 0.1;
        cart[index].quantity = +newQty.toFixed(2);
        renderCart();
    }

    function setExactQty(index, value) {
        let val = parseFloat(value);
        if (isNaN(val) || val < 0.1) val = 0.1;
        cart[index].quantity = +val.toFixed(2);
        renderCart();
    }

    function removeFromCart(index) {
        cart.splice(index, 1);
        renderCart();
    }

    function clearCart() {
        cart = [];
        renderCart();
    }

    function calculateTotal() {
        let subtotal = 0;
        cart.forEach(item => {
            subtotal += (item.quantity * item.price);
        });

        const discountInput = document.getElementById('discount');
        const discount = parseFloat(discountInput.value) || 0;
        const total = Math.max(0, subtotal - discount);

        document.getElementById('text-subtotal').textContent = 'Rp ' + formatRupiah(subtotal);
        document.getElementById('text-total').textContent = 'Rp ' + formatRupiah(total);

        const payStatus = document.getElementById('payment_status').value;
        if (payStatus === 'lunas') {
            document.getElementById('amount_paid').value = total;
        }

        calculateChange();
    }

    function adjustPaymentMode() {
        const payStatus = document.getElementById('payment_status').value;
        const amountPaidInput = document.getElementById('amount_paid');
        const totalText = document.getElementById('text-total').textContent;
        const rawTotal = parseRupiah(totalText);

        if (payStatus === 'lunas') {
            amountPaidInput.value = rawTotal;
        } else if (payStatus === 'belum_bayar') {
            amountPaidInput.value = 0;
        } else if (payStatus === 'uang_muka') {
            amountPaidInput.value = Math.round(rawTotal * 0.5);
        }

        calculateChange();
    }

    function setCashPreset(amount) {
        if (amount === 'exact') {
            const totalText = document.getElementById('text-total').textContent;
            document.getElementById('amount_paid').value = parseRupiah(totalText);
        } else {
            document.getElementById('amount_paid').value = amount;
        }
        calculateChange();
    }

    function calculateChange() {
        const totalText = document.getElementById('text-total').textContent;
        const total = parseRupiah(totalText);
        const paid = parseFloat(document.getElementById('amount_paid').value) || 0;
        const change = paid - total;

        const changeEl = document.getElementById('text-change');
        if (change >= 0) {
            changeEl.textContent = 'Rp ' + formatRupiah(change);
            changeEl.className = 'text-emerald-700 font-extrabold text-sm';
        } else {
            changeEl.textContent = 'Kurang Rp ' + formatRupiah(Math.abs(change));
            changeEl.className = 'text-rose-600 font-extrabold text-sm';
        }
    }

    function formatRupiah(number) {
        return Math.round(number).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
    }

    function parseRupiah(text) {
        return parseFloat(text.replace(/[^0-9]/g, '')) || 0;
    }

    function openCustomerModal() {
        document.getElementById('customer-modal').classList.remove('hidden');
    }

    function closeCustomerModal() {
        document.getElementById('customer-modal').classList.add('hidden');
    }

    function submitQuickCustomer(e) {
        e.preventDefault();
        const btn = document.getElementById('btn-save-cust');
        btn.disabled = true;
        btn.innerHTML = '<i class="fa-solid fa-spinner fa-spin"></i> Menyimpan...';

        const data = {
            name: document.getElementById('new_cust_name').value,
            phone_number: document.getElementById('new_cust_phone').value,
            address: document.getElementById('new_cust_address').value,
            _token: '{{ csrf_token() }}'
        };

        fetch("{{ route('pos.customer.quick') }}", {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json'
            },
            body: JSON.stringify(data)
        })
        .then(res => res.json())
        .then(res => {
            btn.disabled = false;
            btn.innerHTML = '<i class="fa-solid fa-save"></i> <span>Simpan Pelanggan</span>';

            if (res.success) {
                const select = document.getElementById('customer_id');
                const opt = document.createElement('option');
                opt.value = res.customer.id;
                opt.textContent = `${res.customer.name} (${res.customer.phone_number})`;
                opt.selected = true;
                select.appendChild(opt);

                closeCustomerModal();
                document.getElementById('quick-customer-form').reset();
            } else {
                alert(res.message || 'Gagal menyimpan pelanggan.');
            }
        })
        .catch(err => {
            btn.disabled = false;
            btn.innerHTML = '<i class="fa-solid fa-save"></i> <span>Simpan Pelanggan</span>';
            alert('Terjadi kesalahan jaringan.');
        });
    }

    let customerFilterTimeout = null;
    function filterCustomerSelect(query) {
        clearTimeout(customerFilterTimeout);
        const select = document.getElementById('customer_id');
        const q = (query || '').trim().toLowerCase();

        const options = select.querySelectorAll('option');
        let matched = 0;
        options.forEach((opt, idx) => {
            if (idx === 0) return;
            const text = opt.textContent.toLowerCase();
            const isMatch = text.includes(q);
            opt.style.display = isMatch ? '' : 'none';
            if (isMatch) matched++;
        });

        if (q.length >= 2) {
            customerFilterTimeout = setTimeout(() => {
                fetch(`{{ route('kasir.customer.search') }}?q=${encodeURIComponent(q)}`)
                    .then(res => res.json())
                    .then(data => {
                        if (data.success && data.customers && data.customers.length > 0) {
                            data.customers.forEach(cust => {
                                const exists = Array.from(select.options).some(o => o.value == cust.id);
                                if (!exists) {
                                    const opt = document.createElement('option');
                                    opt.value = cust.id;
                                    const custName = cust.nama || cust.name || 'Pelanggan';
                                    const custPhone = cust.nomor_telepon || cust.phone_number || '';
                                    opt.textContent = `${custName} (${custPhone})`;
                                    opt.dataset.phone = custPhone;
                                    select.appendChild(opt);
                                }
                            });
                        }
                    })
                    .catch(() => {});
            }, 300);
        }
    }
</script>
@endpush
