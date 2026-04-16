@extends('layouts.admin')

@section('page_title', 'Riwayat')

@section('content')
<link href="{{ asset('css/admin/riwayat.css') }}" rel="stylesheet">

<div class="riwayat-container">
    <h1 class="page-main-title">Riwayat</h1>

    <div class="search-wrapper">
        <div class="search-box">
            <i class="fas fa-search"></i>
            <input type="text" id="searchInput" placeholder="Cari data riwayat..." onkeyup="filterTable()">
        </div>
    </div>
    
    <div class="riwayat-table-card">
        <table class="table-riwayat" id="riwayatTable">
            <thead>
                <tr>
                    <th>Nama Pembeli</th>
                    <th>Nama Menu</th>
                    <th>Jumlah</th>
                    <th>No Telp</th>
                    <th>Alamat</th>
                </tr>
            </thead>
            <tbody>
                @forelse($history as $item)
                <tr class="riwayat-row">
                    <td class="searchable">{{ $item->order->customer_name ?? 'N/A' }}</td>
                    <td class="searchable">{{ $item->menu->name ?? 'Unknown' }}</td>
                    <td>{{ $item->quantity }}</td>
                    <td class="searchable">{{ $item->order->whatsapp ?? 'N/A' }}</td>
                    <td class="searchable">{{ $item->order->address ?? 'N/A' }}</td>
                </tr>
                @empty
                <tr><td colspan="5">Belum ada riwayat transaksi.</td></tr>
                @endforelse
                
                <!-- Placeholder for when no results are found -->
                <tr id="noResultsRow" style="display: none;">
                    <td colspan="5" style="padding: 30px; color: #888;">Data tidak ditemukan.</td>
                </tr>

                <!-- Extra empty rows for design fidelity if list is short -->
                @if(count($history) < 5)
                    @for($i = 0; $i < (5 - count($history)); $i++)
                    <tr class="empty-row"><td>&nbsp;</td><td></td><td></td><td></td><td></td></tr>
                    @endfor
                @endif
            </tbody>
        </table>
    </div>
</div>

<script>
function filterTable() {
    const input = document.getElementById('searchInput');
    const filter = input.value.toLowerCase();
    const table = document.getElementById('riwayatTable');
    const rows = table.getElementsByClassName('riwayat-row');
    const emptyRows = table.getElementsByClassName('empty-row');
    const noResultsRow = document.getElementById('noResultsRow');
    let hasResults = false;

    // Filter main data rows
    for (let i = 0; i < rows.length; i++) {
        const row = rows[i];
        const cells = row.getElementsByClassName('searchable');
        let textContent = '';
        
        for (let j = 0; j < cells.length; j++) {
            textContent += cells[j].textContent.toLowerCase() + ' ';
        }

        if (textContent.indexOf(filter) > -1) {
            row.style.display = "";
            hasResults = true;
        } else {
            row.style.display = "none";
        }
    }

    // Show/hide "No Results" message
    if (noResultsRow) {
        if (!hasResults && filter !== '') {
            noResultsRow.style.display = '';
        } else {
            noResultsRow.style.display = 'none';
        }
    }

    // Hide empty/design rows when searching
    for (let i = 0; i < emptyRows.length; i++) {
        emptyRows[i].style.display = filter === '' ? '' : 'none';
    }
}
</script>
@endsection
