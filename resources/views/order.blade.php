@extends('layouts.app')

@section('content')
<style>
    /* Styling to match Figma Design */
    .pemesanan-wrapper {
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 50px 15px;
        background-color: transparent;
    }
    .pemesanan-card {
        background-color: #e6e6e6; /* Light gray from design */
        border-radius: 20px;
        padding: 40px 40px 60px 40px; /* extra padding at bottom for button overlap */
        width: 100%;
        max-width: 600px;
        position: relative;
        box-shadow: 0 4px 15px rgba(0,0,0,0.05);
    }
    .form-group-custom {
        margin-bottom: 20px;
    }
    .form-group-custom label {
        display: block;
        font-size: 12px;
        color: #333;
        margin-bottom: 6px;
        margin-left: 15px;
        font-weight: 500;
        font-family: inherit;
    }
    .form-group-custom .form-control-custom {
        width: 100%;
        border: none;
        border-radius: 50px;
        padding: 12px 20px;
        font-size: 14px;
        background-color: #ffffff;
        outline: none;
        box-sizing: border-box;
    }
    .pemesanan-btn {
        background-color: #a3222a; /* Red color matching the screenshot */
        color: white;
        border: none;
        border-radius: 50px;
        padding: 10px 45px;
        font-size: 16px;
        font-weight: 600;
        position: absolute;
        bottom: -20px;
        right: 40px;
        cursor: pointer;
        box-shadow: 2px 4px 8px rgba(0,0,0,0.2);
        transition: transform 0.2s, background-color 0.2s;
    }
    .pemesanan-btn:hover {
        background-color: #8f1d24;
        transform: translateY(-2px);
    }
    #orderSummary {
        font-size: 13px;
        color: #555;
        margin-top: 15px;
        padding: 15px;
        border-radius: 15px;
        background-color: rgba(255,255,255,0.6);
        display: none; /* Shown via JS */
    }
</style>

<div class="container pemesanan-wrapper">
    <div class="pemesanan-card">
        <form id="orderForm">
            @csrf
            <div class="form-group-custom">
                <label>Nama</label>
                <input type="text" name="customer_name" class="form-control-custom" required>
            </div>
            <div class="form-group-custom">
                <label>No. Whatsapp</label>
                <input type="tel" name="whatsapp" class="form-control-custom" required>
            </div>
            <div class="form-group-custom">
                <label>Alamat</label>
                <input type="text" name="address" class="form-control-custom" required>
            </div>
            <div class="form-group-custom">
                <label>Catatan:(Level Berapa)</label>
                <input type="text" name="note" class="form-control-custom">
            </div>
            
            <div id="orderSummary">
                <strong>Pesanan Anda:</strong><br>
                <span id="summaryDetail">Memuat...</span>
            </div>

            <button type="submit" class="pemesanan-btn">Pesan</button>
        </form>
    </div>
</div>
@endsection

@push('scripts')
<script>
    let cart = JSON.parse(localStorage.getItem('checkoutCart')) || [];
    if(cart.length === 0) {
        $('#orderSummary').html('<p style="margin:0;">Tidak ada pesanan. <a href="{{ route('menu') }}">Kembali ke menu</a></p>').show();
    } else {
        let total = 0, html = '';
        cart.forEach(item => {
            let subtotal = item.price * item.quantity;
            total += subtotal;
            html += `<div>${item.name} x ${item.quantity} = Rp ${subtotal.toLocaleString('id-ID')}</div>`;
        });
        html += `<hr style="margin:10px 0; border-top: 1px solid #ccc;"><strong>Total: Rp ${total.toLocaleString('id-ID')}</strong>`;
        $('#summaryDetail').html(html);
        $('#orderSummary').show();
    }
    
    $('#orderForm').submit(function(e) {
        e.preventDefault();
        let items = cart.map(i => ({ menu_id: i.id, quantity: i.quantity }));
        $.ajax({
            url: "{{ route('order.store') }}",
            method: 'POST',
            data: {
                _token: '{{ csrf_token() }}',
                customer_name: $('input[name="customer_name"]').val(),
                whatsapp: $('input[name="whatsapp"]').val(),
                address: $('input[name="address"]').val(),
                note: $('input[name="note"]').val(),
                items: items
            },
            success: function(res) {
                localStorage.removeItem('cart');
                localStorage.removeItem('checkoutCart');
                window.location.href = res.redirect_url;
            },
            error: function() { alert('Gagal memesan, coba lagi.'); }
        });
    });
</script>
@endpush