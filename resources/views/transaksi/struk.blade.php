<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nota Kasir #{{ $transaction->invoice_number }} - Katara Laundry</title>
    <link rel="icon" type="image/jpeg" href="{{ asset('images/logo.katara.jpg') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Courier+Prime:wght@400;700&family=Plus+Jakarta+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <style>
        @media print {
            body {
                background: white !important;
                padding: 0 !important;
                margin: 0 !important;
            }
            .no-print {
                display: none !important;
            }
            .thermal-receipt {
                box-shadow: none !important;
                border: none !important;
                width: 100% !important;
                max-width: 58mm !important;
                margin: 0 auto !important;
                padding: 2mm !important;
            }
        }

        .thermal-font {
            font-family: 'Courier Prime', Courier, monospace;
        }
    </style>
</head>
<body class="bg-slate-100 text-slate-900 min-h-screen py-6 px-4 flex flex-col items-center">

<div class="no-print w-full max-w-sm flex items-center justify-between gap-2 mb-4">
        <a href="{{ route('pos.index') }}" class="inline-flex items-center gap-1.5 px-3 py-2 rounded-xl bg-white border border-slate-300 text-xs font-bold text-slate-700 hover:bg-slate-50 transition-colors shadow-xs">
            <i class="fa-solid fa-arrow-left"></i>
            <span>Kembali ke Kasir (F2)</span>
        </a>

        <div class="flex items-center gap-2">
            <button onclick="window.print()" class="inline-flex items-center gap-2 px-4 py-2 rounded-xl bg-brand-600 text-white text-xs font-bold hover:bg-brand-700 transition-colors shadow-md shadow-brand-500/20">
                <i class="fa-solid fa-print"></i>
                <span>Cetak Nota</span>
            </button>
        </div>
    </div>

<div class="thermal-receipt thermal-font w-full max-w-[80mm] sm:max-w-[76mm] bg-white p-5 border border-slate-300 rounded-xl shadow-lg text-xs leading-tight">
        
<div class="text-center pb-3 border-b border-dashed border-slate-400">
            <img src="{{ asset('images/logo.katara.jpg') }}" alt="Katara Laundry Logo" class="w-12 h-12 mx-auto mb-1.5 rounded-lg object-cover">
            <h2 class="font-bold text-sm tracking-wider uppercase">KATARA LAUNDRY</h2>
            <p class="text-[10px] text-slate-600 font-sans mt-0.5">Gerai Dinoyo &bull; Lowokwaru, Malang</p>
            <p class="text-[10px] text-slate-600 font-sans">Kawasan Kampus UB, UM, Polinema</p>
            <p class="text-[10px] text-slate-600 font-sans">WhatsApp: 0812-3456-7890</p>
        </div>

<div class="py-2.5 border-b border-dashed border-slate-400 text-[11px] space-y-1">
            <div class="flex justify-between">
                <span>No. Nota:</span>
                <strong class="font-bold">{{ $transaction->invoice_number }}</strong>
            </div>
            <div class="flex justify-between">
                <span>Waktu Masuk:</span>
                <span>{{ $transaction->order_date->format('d/m/Y H:i') }}</span>
            </div>
            <div class="flex justify-between">
                <span>Kasir:</span>
                <span>{{ $transaction->user ? $transaction->user->name : 'Kasir Gerai' }}</span>
            </div>
            <div class="flex justify-between">
                <span>Pelanggan:</span>
                <strong>{{ $transaction->customer->name }}</strong>
            </div>
            <div class="flex justify-between">
                <span>No. Telp:</span>
                <span>{{ $transaction->customer->phone_number }}</span>
            </div>
            @if($transaction->perfume)
                <div class="flex justify-between pt-0.5">
                    <span>Aroma Parfum:</span>
                    <strong class="text-slate-800">{{ $transaction->perfume->name }}</strong>
                </div>
            @endif
        </div>

<div class="py-2.5 border-b border-dashed border-slate-400">
            <table class="w-full text-[11px]">
                <thead>
                    <tr class="border-b border-slate-300 pb-1 text-left font-bold">
                        <th>Item</th>
                        <th class="text-right">Qty</th>
                        <th class="text-right">Total</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    @foreach($transaction->items as $item)
                        <tr>
                            <td class="py-1">
                                <span class="font-bold block">{{ $item->service->name }}</span>
                                <span class="text-[10px] text-slate-500 font-sans">@ Rp {{ number_format($item->unit_price, 0, ',', '.') }}</span>
                            </td>
                            <td class="text-right py-1 whitespace-nowrap">
                                {{ (float) $item->quantity }} {{ $item->service->unit }}
                            </td>
                            <td class="text-right py-1 font-bold whitespace-nowrap">
                                Rp {{ number_format($item->subtotal, 0, ',', '.') }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

<div class="py-2.5 border-b border-dashed border-slate-400 text-[11px] space-y-1">
            <div class="flex justify-between">
                <span>Total Tagihan:</span>
                <strong>Rp {{ number_format($transaction->total_price + $transaction->discount, 0, ',', '.') }}</strong>
            </div>
            @if($transaction->discount > 0)
                <div class="flex justify-between text-slate-600">
                    <span>Diskon / Potongan:</span>
                    <span>- Rp {{ number_format($transaction->discount, 0, ',', '.') }}</span>
                </div>
            @endif
            <div class="flex justify-between font-bold text-xs pt-0.5 border-t border-slate-200">
                <span>TOTAL AKHIR:</span>
                <span>Rp {{ number_format($transaction->total_price, 0, ',', '.') }}</span>
            </div>
            <div class="flex justify-between pt-1">
                <span>Metode Bayar:</span>
                <span class="uppercase">{{ $transaction->payment_method_label }}</span>
            </div>
            <div class="flex justify-between">
                <span>Jumlah Dibayar:</span>
                <strong>Rp {{ number_format($transaction->amount_paid, 0, ',', '.') }}</strong>
            </div>
            <div class="flex justify-between">
                <span>Status:</span>
                <strong class="uppercase font-bold">{{ $transaction->payment_status_label }}</strong>
            </div>
            @if($transaction->remaining_balance > 0)
                <div class="flex justify-between text-rose-600 font-bold">
                    <span>Sisa Piutang (DP):</span>
                    <span>Rp {{ number_format($transaction->remaining_balance, 0, ',', '.') }}</span>
                </div>
            @endif
        </div>

<div class="py-2.5 border-b border-dashed border-slate-400 text-[11px] text-center space-y-1 bg-slate-50 rounded-lg my-2 p-2">
            <p class="text-[10px] text-slate-500 uppercase tracking-wider font-bold font-sans">Estimasi Pakaian Selesai</p>
            <p class="font-bold text-xs">
                {{ $transaction->estimated_completion_date ? $transaction->estimated_completion_date->translatedFormat('l, d M Y - H:i') . ' WIB' : '48 Jam Pengerjaan' }}
            </p>
            @if($transaction->rackSlot)
                <p class="text-[10px] text-brand-700 font-bold font-sans mt-1">
                    Slot Rak Siap Ambil: <strong>{{ $transaction->rackSlot->code }}</strong>
                </p>
            @endif
        </div>

<div class="text-center pt-2 pb-2">
<div class="inline-flex items-center justify-center gap-0.5 py-1 px-4 bg-white border border-slate-300 rounded mb-1">
                <span class="w-1 h-8 bg-slate-900 inline-block"></span>
                <span class="w-0.5 h-8 bg-slate-900 inline-block"></span>
                <span class="w-1.5 h-8 bg-slate-900 inline-block"></span>
                <span class="w-0.5 h-8 bg-slate-900 inline-block"></span>
                <span class="w-2 h-8 bg-slate-900 inline-block"></span>
                <span class="w-1 h-8 bg-slate-900 inline-block"></span>
                <span class="w-0.5 h-8 bg-slate-900 inline-block"></span>
                <span class="w-1.5 h-8 bg-slate-900 inline-block"></span>
                <span class="w-0.5 h-8 bg-slate-900 inline-block"></span>
                <span class="w-1 h-8 bg-slate-900 inline-block"></span>
                <span class="w-2 h-8 bg-slate-900 inline-block"></span>
                <span class="w-0.5 h-8 bg-slate-900 inline-block"></span>
                <span class="w-1.5 h-8 bg-slate-900 inline-block"></span>
                <span class="w-1 h-8 bg-slate-900 inline-block"></span>
            </div>
            <p class="text-[10px] tracking-widest font-mono font-bold">{{ $transaction->invoice_number }}</p>
            <p class="text-[9px] text-slate-500 font-sans mt-1">Lacak status cucian di: <strong>{{ route('tracking.show', $transaction->invoice_number) }}</strong></p>
        </div>

<div class="pt-2 text-[9px] text-slate-500 font-sans leading-tight border-t border-dashed border-slate-400 space-y-1">
            <p class="font-bold text-slate-700 text-center uppercase">Ketentuan Pengambilan:</p>
            <p>1. Pengambilan cucian wajib menunjukkan struk ini atau WhatsApp terdaftar.</p>
            <p>2. Komplain pakaian maksimal 1x24 jam setelah cucian diambil.</p>
            <p>3. Cucian yang tidak diambil lebih dari 30 hari di luar tanggung jawab gerai.</p>
            <p class="text-center font-bold text-slate-700 pt-1">-- Terima Kasih --</p>
        </div>
    </div>

<script>
        const urlParams = new URLSearchParams(window.location.search);
        if (urlParams.get('autoprint') === '1') {
            window.print();
        }
    </script>
</body>
</html>
