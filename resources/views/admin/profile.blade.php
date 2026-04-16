@extends('layouts.admin')

@section('page_title', 'Profile')

@section('content')
<link href="{{ asset('css/admin/profile.css') }}" rel="stylesheet">

<div class="profile-page-wrapper">
    <div class="welcome-section">
        <p class="welcome-text">Kelola informasi profil Anda</p>
    </div>

    <div class="profile-card-container">
        <div class="profile-avatar-large" style="{{ $user->profile_image ? 'background-image: url(' . asset('uploads/profile/' . $user->profile_image) . ');' : '' }}">
            @if(!$user->profile_image)
                {{ strtoupper(substr($user->username, 0, 1)) }}
            @endif
        </div>
        <div class="profile-card">
            <div class="profile-info-left">
                <h2 class="profile-name">{{ $user->name }}</h2>
                <div class="profile-about">
                    <h4>Tentang</h4>
                    <p>
                        Administrator Warung Cilok Mak Pik. Bertanggung jawab penuh atas pengelolaan menu dan monitoring pesanan masuk secara real-time.
                    </p>
                </div>
            </div>
            
            <div class="profile-details-right">
                <div class="detail-box">
                    <div class="detail-icon icon-email"><i class="fas fa-envelope"></i></div>
                    <div class="detail-content">
                        <label>Email</label>
                        <span>{{ $user->email }}</span>
                    </div>
                </div>
                
                <div class="detail-box">
                    <div class="detail-icon icon-user"><i class="fas fa-user-alt"></i></div>
                    <div class="detail-content">
                        <label>Username</label>
                        <span>{{ $user->username }}</span>
                    </div>
                </div>
                
                <div class="detail-box">
                    <div class="detail-icon icon-pass"><i class="fas fa-lock"></i></div>
                    <div class="detail-content">
                        <label>Password</label>
                        <span>********</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <a href="{{ route('admin.profile.edit') }}" class="btn-edit-profile">Edit Profile</a>
</div>

@if(session('success'))
<script>
    document.addEventListener('DOMContentLoaded', function() {
        showAlert('Berhasil!', "{{ session('success') }}");
    });
</script>
@endif
@endsection
