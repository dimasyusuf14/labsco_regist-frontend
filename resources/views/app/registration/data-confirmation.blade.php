@extends('app.registration.layouts.index')

@section('content-left')
    <!-- Personal Information -->
    <div class="card shadow-sm mb-4 pt-4 pb-0" style="border-radius: 16px;">
        <div class="card-header bg-white border-0 px-4">
            <h5 class="fw-bold mb-0" style="color:#375AD9;">Personal Information</h5>
        </div>
        <div class="card-body px-4">
            <div class="mb-3">
                <label class="form-label fw-semibold" style="font-size: 16px; font-weight: 500;color: #000000;">Email
                    Address</label>
                <span class="d-block px-3 py-2 rounded" style="background:#F4F7FF;">user@email.com</span>
            </div>
            <div class="mb-3">
                <label class="form-label fw-semibold" style="font-size: 16px; font-weight: 500;color: #000000;">Full
                    Name</label>
                <span class="d-block px-3 py-2 rounded" style="background:#F4F7FF;">Sutoto Jontor Pilot</span>
            </div>
            <div class="mb-3">
                <label class="form-label fw-semibold" style="font-size: 16px; font-weight: 500;color: #000000;">Phone
                    Number</label>
                <span class="d-block px-3 py-2 rounded" style="background:#F4F7FF;">081234567234</span>
            </div>
            <div class="mb-3">
                <label class="form-label fw-semibold"
                    style="font-size: 16px; font-weight: 500;color: #000000;">Gender</label>
                <span class="d-block px-3 py-2 rounded" style="background:#F4F7FF;">Laki-Laki</span>
            </div>
            <div class="mb-3">
                <label class="form-label fw-semibold" style="font-size: 16px; font-weight: 500;color: #000000;">ID/Passport
                    Number</label>
                <span class="d-block px-3 py-2 rounded" style="background:#F4F7FF;">123456789123451234</span>
            </div>
            <div class="mb-3">
                <label class="form-label fw-semibold"
                    style="font-size: 16px; font-weight: 500;color: #000000;">Nationality</label>
                <span class="d-block px-3 py-2 rounded" style="background:#F4F7FF;">Indonesia</span>
            </div>
            <div class="mb-3">
                <label class="form-label fw-semibold" style="font-size: 16px; font-weight: 500;color: #000000;">City</label>
                <span class="d-block px-3 py-2 rounded" style="background:#F4F7FF;">Kota Bogor</span>
            </div>
        </div>
    </div>

    <!-- Guardian & Medical History Information -->
    <div class="card shadow-sm mb-4 pt-4 pb-0" style="border-radius: 16px;">
        <div class="card-header bg-white border-0 px-4">
            <h5 class="fw-bold mb-0" style="color:#375AD9;">Guardian & Medical History Information</h5>
        </div>
        <div class="card-body px-4">
            <div class="mb-3">
                <label class="form-label fw-semibold" style="font-size: 16px;font-weight: 500;color: #000000;">Guardian
                    Name</label>
                <span class="d-block px-3 py-2 rounded" style="background:#F4F7FF;">Hendra Rahmat</span>
            </div>
            <div class="mb-3">
                <label class="form-label fw-semibold" style="font-size: 16px;font-weight: 500;color: #000000;">Guardian
                    Phone Number</label>
                <span class="d-block px-3 py-2 rounded" style="background:#F4F7FF;">081234567890</span>
            </div>
            <div class="mb-3">
                <label class="form-label fw-semibold" style="font-size: 16px;font-weight: 500;color: #000000;">Relationship
                    with Guardian</label>
                <span class="d-block px-3 py-2 rounded" style="background:#F4F7FF;">Brother</span>
            </div>
            <div class="mb-3">
                <label class="form-label fw-semibold" style="font-size: 16px;font-weight: 500;color: #000000;">Blood
                    Type</label>
                <span class="d-block px-3 py-2 rounded" style="background:#F4F7FF;">O</span>
            </div>
            <div class="mb-3">
                <label class="form-label fw-semibold" style="font-size: 16px;font-weight: 500;color: #000000;">Medical
                    History</label>
                <span class="d-block px-3 py-2 rounded" style="background:#F4F7FF;">Asthma (under control)</span>
            </div>
        </div>
    </div>

    <!-- Running Event Information -->
    <div class="card shadow-sm mb-4 pt-4 pb-0" style="border-radius: 16px;">
        <div class="card-header bg-white border-0 px-4">
            <h5 class="fw-bold mb-0" style="color:#375AD9;">Running Event Information</h5>
        </div>
        <div class="card-body px-4">
            <div class="mb-3">
                <label class="form-label fw-semibold"
                    style="font-size: 16px;font-weight: 500;color: #000000;">Category</label>
                <span class="d-block px-3 py-2 rounded" style="background:#F4F7FF;">Fun Run - 10K</span>
            </div>
            <div class="mb-3">
                <label class="form-label fw-semibold" style="font-size: 16px;font-weight: 500;color: #000000;">Shirt
                    Size</label>
                <span class="d-block px-3 py-2 rounded" style="background:#F4F7FF;">XL</span>
            </div>
            <div class="mb-3">
                <label class="form-label fw-semibold" style="font-size: 16px;font-weight: 500;color: #000000;">Race Kit
                    Collection</label>
                <span class="d-block px-3 py-2 rounded mb-2" style="background:#F4F7FF;">On-site</span>
                <span class="d-block px-3 py-2 rounded" style="background:#F4F7FF;">1 August 2024 - Afternoon Session
                    (15:00 - 17:00)</span>
            </div>
            <div class="mb-3">
                <label class="form-label fw-semibold" style="font-size: 16px;font-weight: 500;color: #000000;">Running
                    Community Name</label>
                <span class="d-block px-3 py-2 rounded" style="background:#F4F7FF;">BRT2023-014</span>
            </div>
        </div>

        <!-- Footer buttons -->
        <div class="d-flex justify-content-between border-top border-2 px-4 py-3" style="min-height:56px;">
            <a href="{{ route('registration-three') }}"
                class="btn btn-outline-secondary px-4 py-2 d-flex align-items-center gap-2"
                style="font-size:15px; font-weight:500; border-radius:8px; border-width:2px; box-shadow:none;">
                <img src="{{ asset('assets/images/icons/ic-arrow-back.svg') }}" alt="Back"
                    style="width:13px;height:11px;">
                <span style="font-size:15px; font-weight:500;">Back</span>
            </a>
            <a href="{{ route('terms-and-conditions') }}"
                class="btn btn-primary px-4 py-2 d-flex align-items-center gap-2"
                style="font-size:15px; font-weight:600; border-radius:8px; box-shadow:none;">
                <span style="font-size:15px; font-weight:600;">Next</span>
                <img src="{{ asset('assets/images/icons/ic-arrow-next.svg') }}" alt="Next"
                    style="width:13px;height:11px;">
            </a>
        </div>
    </div>
@endsection
