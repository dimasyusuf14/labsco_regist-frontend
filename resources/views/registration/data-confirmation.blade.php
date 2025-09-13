@extends('registration.layouts.index')

@section('content-left')
    <div class="col-lg-8 col-12">

        <!-- Personal Information -->
        <div class="card shadow-sm mb-4 p-3" style="border-radius: 16px;">
            <div class="card-header bg-white border-0">
                <h5 class="fw-bold mb-0" style="color:#375AD9;">Personal Information</h5>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label class="form-label fw-semibold" style="font-size: 16px">Email Address</label>
                    <span class="d-block px-3 py-2 rounded" style="background:#F4F7FF;">user@email.com</span>
                </div>
                <div class="mb-3">
                    <label class="form-label fw-semibold" style="font-size: 16px">Name</label>
                    <span class="d-block px-3 py-2 rounded" style="background:#F4F7FF;">Sutoto Jontor Pilot</span>
                </div>
                <div class="mb-3">
                    <label class="form-label fw-semibold" style="font-size: 16px">Phone Number</label>
                    <span class="d-block px-3 py-2 rounded" style="background:#F4F7FF;">081234567234</span>
                </div>
                <div class="mb-3">
                    <label class="form-label fw-semibold" style="font-size: 16px">Gender</label>
                    <span class="d-block px-3 py-2 rounded" style="background:#F4F7FF;">Laki-Laki</span>
                </div>
                <div class="mb-3">
                    <label class="form-label fw-semibold" style="font-size: 16px">KTP/Passport</label>
                    <span class="d-block px-3 py-2 rounded" style="background:#F4F7FF;">123456789123451234</span>
                </div>
                <div class="mb-3">
                    <label class="form-label fw-semibold" style="font-size: 16px">Nationality</label>
                    <span class="d-block px-3 py-2 rounded" style="background:#F4F7FF;">Indonesia</span>
                </div>
                <div class="mb-3">
                    <label class="form-label fw-semibold" style="font-size: 16px">City</label>
                    <span class="d-block px-3 py-2 rounded" style="background:#F4F7FF;">Kota Bogor</span>
                </div>
            </div>
        </div>

        <!-- Guardian & Medical History Information -->
        <div class="card shadow-sm mb-4 p-3" style="border-radius: 16px;">
            <div class="card-header bg-white border-0">
                <h5 class="fw-bold mb-0" style="color:#375AD9;">Guardian & Medical History Information</h5>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label class="form-label fw-semibold" style="font-size: 16px">Guardian Name</label>
                    <span class="d-block px-3 py-2 rounded" style="background:#F4F7FF;">Hendra Rahmat</span>
                </div>
                <div class="mb-3">
                    <label class="form-label fw-semibold" style="font-size: 16px">Guardian Phone Number</label>
                    <span class="d-block px-3 py-2 rounded" style="background:#F4F7FF;">081234567890</span>
                </div>
                <div class="mb-3">
                    <label class="form-label fw-semibold" style="font-size: 16px">Guardian Relationship</label>
                    <span class="d-block px-3 py-2 rounded" style="background:#F4F7FF;">Brother</span>
                </div>
                <div class="mb-3">
                    <label class="form-label fw-semibold" style="font-size: 16px">Blood Type</label>
                    <span class="d-block px-3 py-2 rounded" style="background:#F4F7FF;">O</span>
                </div>
                <div class="mb-3">
                    <label class="form-label fw-semibold" style="font-size: 16px">Medical History</label>
                    <span class="d-block px-3 py-2 rounded" style="background:#F4F7FF;">Asthma (under control)</span>
                </div>
            </div>
        </div>

        <!-- Informasi Event Lari -->
        <div class="card shadow-sm mb-4 p-3" style="border-radius: 16px;">
            <div class="card-header bg-white border-0">
                <h5 class="fw-bold mb-0" style="color:#375AD9;">Informasi Event Lari</h5>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label class="form-label fw-semibold" style="font-size: 16px">Kategori</label>
                    <span class="d-block px-3 py-2 rounded" style="background:#F4F7FF;">Fun Run - 10K</span>
                </div>
                <div class="mb-3">
                    <label class="form-label fw-semibold" style="font-size: 16px">Nomor BIB</label>
                    <span class="d-block px-3 py-2 rounded" style="background:#F4F7FF;">123456</span>
                </div>
                <div class="mb-3">
                    <label class="form-label fw-semibold" style="font-size: 16px">Pengambilan Paket</label>
                    <span class="d-block px-3 py-2 rounded" style="background:#F4F7FF;">1 Agustus 2024 - Afternoon Session
                        (15:00 - 17:00)</span>
                </div>
                <div class="mb-3">
                    <label class="form-label fw-semibold" style="font-size: 16px">Kartu Komunitas Lari</label>
                    <span class="d-block px-3 py-2 rounded" style="background:#F4F7FF;">BRT2023-014</span>
                </div>
            </div>
        </div>

        <!-- Footer Buttons -->
        <div class="d-flex justify-content-between">
            <a href="{{ route('registration-two') }}" class="btn btn-outline-secondary px-4 fw-medium">
                Back
            </a>
            <a href="#" class="btn btn-primary px-4 fw-medium">
                Next
            </a>
        </div>
    </div>
@endsection
