@extends('layouts.index')

@section('content')
    <div class="container py-4" style="max-width:1200px;">

        <!-- Header -->
        <div class="text-start mb-5 ">
            <h2 class="fw-bold mb-1">Event Registration</h2>
            <p class="text-muted" style="font-size: 16px;">Please enter your personal information accurately, step by step.
            </p>
        </div>

        {{-- Wizard nav --}}

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
            <div class="col-lg-8 col-12">
                <div class="card shadow-sm mb-4 py-3 text-center" style="border-radius: 16px">
                    <h3 class="fw-bold mb-1" style="color:#375AD9;">Participant: 1/4</h3>
                </div>

                <!-- Registration Form -->
                @yield('content-left')

            </div>

            <!-- Right: Terms & Info -->
            @include('registration.layouts.terms-info')

        </div>
    </div>
@endsection
