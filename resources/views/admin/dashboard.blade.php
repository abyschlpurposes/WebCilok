@extends('layouts.admin')

@section('page_title', 'Dashboard')

@section('content')
<link href="{{ asset('css/admin/dashboard.css') }}" rel="stylesheet">

<div class="dashboard-wrapper">
    <div class="welcome-section">
        <p class="welcome-text">Selamat datang di Admin Dashboard Warung Cilok Pedas</p>
    </div>

    <div class="stats-container">
        <div class="stat-card">
            <div class="stat-icon icon-transaksi"><i class="fas fa-chart-line"></i></div>
            <div class="stat-info">
                <h4>Total Transaksi</h4>
                <div class="count">+{{ $totalTransaksi }}</div>
            </div>
        </div>
        <div class="stat-card">
            <div class="stat-icon icon-menu"><i class="fas fa-book-open"></i></div>
            <div class="stat-info">
                <h4>Menu</h4>
                <div class="count">{{ $totalMenu }}</div>
            </div>
        </div>
        <div class="stat-card">
            <div class="stat-icon icon-income"><i class="fas fa-dollar-sign"></i></div>
            <div class="stat-info">
                <h4>Pendapatan Hari ini</h4>
                <div class="count">{{ number_format($pendapatanHariIni, 0, ',', '.') }}</div>
            </div>
        </div>
    </div>

    <div class="transactions-section">
        <h3>Transaksi Terbaru</h3>
        <div class="transactions-table-card">
            <table class="table-custom">
                <thead>
                    <tr>
                        <th style="width: 30%;">Nama Pembeli</th>
                        <th style="width: 20%;">Total Pembelian</th>
                        <th style="width: 30%;">Hari, Jam</th>
                        <th style="width: 20%;">Status pembelian</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($recentTransactions as $tx)
                    <tr>
                        <td>{{ $tx['nama'] }}</td>
                        <td>{{ number_format($tx['total'], 0, ',', '.') }}</td>
                        <td>{{ $tx['waktu'] }}</td>
                        <td>
                            <span class="status-badge status-{{ $tx['status'] }}">
                                {{ $tx['status'] }}
                            </span>
                        </td>
                    </tr>
                    @endforeach
                    <!-- Fill with empty rows to match height -->
                    <tr><td>&nbsp;</td><td></td><td></td><td></td></tr>
                    <tr><td>&nbsp;</td><td></td><td></td><td></td></tr>
                </tbody>
            </table>
            
            <a href="{{ route('admin.transaksi') }}" class="btn-lihat-semua">Lihat Transaksi</a>
        </div>
    </div>
</div>
@endsection
