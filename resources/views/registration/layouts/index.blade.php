@extends('layouts.index')

@section('content')
    <div class="container py-4" style="max-width:1200px;">

        <!-- Header -->
        <div class="text-start mb-5 ">
            <h2 class="fw-bold mb-1">Event Registration</h2>
            <p class="text-muted" style="font-size: 16px;">Please enter your personal information accurately, step by step.
            </p>
        </div>

        <!-- Progress Steps -->
        <div class="d-flex justify-content-center align-items-center mb-5 gap-0" style="max-width:600px;margin:auto;">
            <!-- Step 1 -->
            <div class="text-center" style="min-width:80px;">
                <div class="rounded-3 d-flex align-items-center justify-content-center fw-bold"
                    style="width:48px;height:48px;background:#00C853;box-shadow:0 2px 8px rgba(0,0,0,0.07);">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <circle cx="12" cy="12" r="12" fill="none" />
                        <path d="M7 12.5l3.5 3.5 6-7" stroke="#fff" stroke-width="2.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </div>
                <small class="d-block mt-2 fw-semibold" style="color:#375AD9;font-size:15px;">Participant 1</small>
            </div>

            <div class="flex-grow-1 d-flex align-items-center" style="min-width:40px;">
                <div style="height:3px;width:100%;background:#E3EAFD;"></div>
            </div>

            <!-- Step 2 -->
            <div class="text-center" style="min-width:80px;">
                <div class="rounded-3 d-flex align-items-center justify-content-center fw-bold"
                    style="width:48px;height:48px;background:#F37F0D;box-shadow:0 2px 8px rgba(0,0,0,0.07);color:#fff;font-size:20px;">
                    2
                </div>
                <small class="d-block mt-2" style="color:#375AD9;font-size:15px;">Participant 2</small>
            </div>

            <div class="flex-grow-1 d-flex align-items-center" style="min-width:40px;">
                <div style="height:3px;width:100%;background:#E3EAFD;"></div>
            </div>

            <!-- Step 3 -->
            <div class="text-center" style="min-width:80px;">
                <div class="rounded-3 border border-2 d-flex align-items-center justify-content-center fw-bold"
                    style="width:48px;height:48px;background:#fff;color:#375AD9;font-size:20px;border-color:#E3EAFD;">
                    3
                </div>
                <small class="d-block mt-2" style="color:#375AD9;font-size:15px;">Participant 3</small>
            </div>

            <div class="flex-grow-1 d-flex align-items-center" style="min-width:40px;">
                <div style="height:3px;width:100%;background:#E3EAFD;"></div>
            </div>

            <!-- Step 4 -->
            <div class="text-center" style="min-width:80px;">
                <div class="rounded-3 border border-2 d-flex align-items-center justify-content-center fw-bold"
                    style="width:48px;height:48px;background:#fff;color:#375AD9;font-size:20px;border-color:#E3EAFD;">
                    4
                </div>
                <small class="d-block mt-2" style="color:#375AD9;font-size:15px;">Participant</small>
            </div>
        </div>

        <!-- Sub Navigation Text -->
        <div class="d-flex justify-content-center align-items-center gap-3 mb-4">
            <div class="d-flex align-items-center">
                <div class="rounded-circle border border-2 d-flex align-items-center justify-content-center"
                    style="width:20px;height:20px;color:#F37F0D;border-color:#F37F0D;">
                    <i class="bi bi-circle-fill" style="font-size:8px;color:#F37F0D;"></i>
                </div>
                <span class="fw-semibold ms-2" style="color:#375AD9;">Participant Information</span>
            </div>

            <div class="d-flex align-items-center">
                <div class="rounded-circle border border-2 d-flex align-items-center justify-content-center"
                    style="width:20px;height:20px;color:#ccc;">
                </div>
                <span class="text-muted ms-2">Emergency Contact & Medical Information</span>
            </div>

            <div class="d-flex align-items-center">
                <div class="rounded-circle border border-2 d-flex align-items-center justify-content-center"
                    style="width:20px;height:20px;color:#ccc;">
                </div>
                <span class="text-muted ms-2">Run Information</span>
            </div>

            <div class="d-flex align-items-center">
                <div class="rounded-circle border border-2 d-flex align-items-center justify-content-center"
                    style="width:20px;height:20px;color:#ccc;">
                </div>
                <span class="text-muted ms-2">Data Confirmation</span>
            </div>
        </div>


        <div class="row g-4">
            <!-- Left: Form -->
            @yield('content-left')

            <!-- Right: Terms & Info -->
            @include('registration.layouts.terms-info')

        </div>
    </div>
@endsection
