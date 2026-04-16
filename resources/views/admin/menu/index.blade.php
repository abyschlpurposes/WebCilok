@extends('layouts.admin')

@section('page_title', 'Menu')

@section('content')
<link href="{{ asset('css/admin/menu.css') }}" rel="stylesheet">

<div class="menu-page-wrapper">
    <div class="welcome-section">
        <p class="welcome-text">Kelola menu makanan dan minuman</p>
    </div>

    <div class="menu-management-card">
        <div class="menu-header-actions">
            <div class="search-container">
                <i class="fas fa-search"></i>
                <input type="text" class="search-input" placeholder="Cari Menu">
            </div>
            <a href="{{ route('admin.menu.create') }}" class="btn-tambah-menu">Tambah Menu</a>
        </div>

        <div class="menu-list">
            @forelse($menus as $menu)
            <div class="menu-admin-item">
                <img src="{{ $menu->image ? asset('images/' . $menu->image) : asset('images/logo.jpeg') }}" class="menu-admin-img" alt="Menu Image">
                <div class="menu-admin-info">
                    <h3 class="menu-admin-name">{{ $menu->name }}</h3>
                    <span class="menu-admin-price">{{ $menu->price }}</span>
                </div>
                <div class="menu-item-actions">
                    <a href="{{ route('admin.menu.edit', $menu->id) }}" class="action-btn btn-edit"><i class="fas fa-pen"></i></a>
                    <form id="delete-form-{{ $menu->id }}" action="{{ route('admin.menu.delete', $menu->id) }}" method="POST" style="display:none;">
                        @csrf
                    </form>
                    <button type="button" class="action-btn btn-delete" onclick="showConfirm('Hapus Menu', 'Yakin ingin menghapus menu ini?', () => document.getElementById('delete-form-{{ $menu->id }}').submit())">
                        <i class="fas fa-trash-alt"></i>
                    </button>
                </div>
            </div>
            @empty
            <div class="menu-admin-item">
                <img src="{{ asset('images/logo.jpeg') }}" class="menu-admin-img" alt="Placeholder">
                <div class="menu-admin-info">
                    <h3 class="menu-admin-name">MENU 1</h3>
                    <span class="menu-admin-price">Rp. 1.000</span>
                </div>
                <div class="menu-item-actions">
                    <button class="action-btn btn-edit"><i class="fas fa-pen"></i></button>
                    <button class="action-btn btn-delete"><i class="fas fa-trash-alt"></i></button>
                </div>
            </div>
            @endforelse
        </div>
    </div>
</div>
@endsection
