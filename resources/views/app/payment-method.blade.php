@extends('app')

@section('content')
    <div class="container py-4" style="max-width:1200px;">

        <div class="row g-0 shadow-md">
            <!-- Left Section -->
            <div class="col-lg-8 col-12 p-4">
                <!-- Participant -->
                <div class="card shadow-sm mb-4 p-4" style="border-radius: 16px">
                    <h5 class="fw-bold text-primary mb-3" style="font-size:20px;">Participant</h5>
                    <div class="mb-2 p-3 rounded" style="background:#F4F7FF; font-size:15px; font-weight:500;">
                        Register as <br><span class="fw-semibold">sultan@jordy.com - Jordy <span class="text-danger"
                                style="font-weight:600;">(4536)</span></span>
                    </div>
                    <div class="mb-2 p-3 rounded" style="background:#F4F7FF; font-size:15px; font-weight:500;">
                        Register as <br><span class="fw-semibold">fahril@anggaara.com - Angga <span class="text-danger"
                                style="font-weight:600;">(1234)</span></span>
                    </div>
                    <div class="mb-2 p-3 rounded" style="background:#F4F7FF; font-size:15px; font-weight:500;">
                        Register as <br><span class="fw-semibold">ilham@ramadan.com - Ilham <span class="text-danger"
                                style="font-weight:600;">(2323)</span></span>
                    </div>
                    <div class="mb-2 p-3 rounded" style="background:#F4F7FF; font-size:15px; font-weight:500;">
                        Register as <br><span class="fw-semibold">irvan@pramana.com - Irvan <span class="text-danger"
                                style="font-weight:600;">(1253)</span></span>
                    </div>
                </div>

                <!-- Payment Method -->
                <div class="card shadow-sm mb-4 p-4" style="border-radius: 16px">
                    <h5 class="fw-bold text-primary mb-3" style="font-size:20px;">Payment Method</h5>

                    <!-- Transfer Bank -->
                    <div class="card shadow-sm mb-3" style="border-radius:12px; background:#F4F7FF;">
                        <div class="form-check p-0 d-flex align-items-center flex-row" style="min-height:56px;">
                            <input class="form-check-input payment-radio ms-3 me-3" type="radio" name="paymentMethod"
                                id="transferBank" data-bs-toggle="collapse" data-bs-target="#collapseTransfer"
                                style="margin-top:0;">
                            <label
                                class="form-check-label d-flex justify-content-between align-items-center flex-grow-1 p-3 m-0"
                                for="transferBank" style="font-size:15px; font-weight:500;">
                                <span>Transfer Bank</span>
                                <span>
                                    <img src="{{ asset('assets/images/bri.png') }}" alt="BRI" width="40">
                                    <img src="{{ asset('assets/images/bni.png') }}" alt="BNI" width="40">
                                </span>
                            </label>
                        </div>
                        <div class="collapse px-3 pb-3" id="collapseTransfer">
                            <div class="row g-3 mt-2">
                                <div class="col-4">
                                    <div class="card text-center p-2">
                                        <img src="{{ asset('assets/images/bri.png') }}" alt="BRI" width="60">

                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="card text-center p-2">
                                        <img src="{{ asset('assets/images/bni.png') }}" alt="BNI" width="60">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- E-Wallet -->
                    <div class="card shadow-sm mb-3" style="border-radius:12px; background:#F4F7FF;">
                        <div class="form-check p-0 d-flex align-items-center flex-row" style="min-height:56px;">
                            <input class="form-check-input payment-radio ms-3 mt-3" type="radio" name="paymentMethod"
                                id="ewallet" data-bs-toggle="collapse" data-bs-target="#collapseEwallet">
                            <label class="form-check-label d-flex justify-content-between align-items-center w-100 p-3"
                                for="ewallet" style="font-size:15px; font-weight:500;">
                                <span>E-Wallet</span>
                                <span>
                                    <img src="{{ asset('assets/images/gopay.png') }}" alt="GoPay" width="40">
                                    <img src="{{ asset('assets/images/gopay.png') }}" alt="Gopay" width="40">
                                    <img src="{{ asset('assets/images/gopay.png') }}" alt="Gopay" width="40">
                                </span>
                            </label>
                        </div>
                        <div class="collapse px-3 pb-3" id="collapseEwallet">
                            <div class="row g-3 mt-2">
                                <div class="col-4">
                                    <div class="card text-center p-2">
                                        <img src="{{ asset('assets/images/gopay.png') }}" alt="GoPay" width="60">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="card text-center p-2">
                                        <img src="{{ asset('assets/images/gopay.png') }}" alt="Gopay" width="60">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="card text-center p-2">
                                        <img src="{{ asset('assets/images/gopay.png') }}" alt="Gopay" width="60">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- QRIS -->
                    <div class="card shadow-sm mb-3" style="border-radius:12px; background:#F4F7FF;">
                        <div class="form-check p-0 d-flex align-items-center flex-row" style="min-height:56px;">
                            <input class="form-check-input payment-radio ms-3 mt-3" type="radio" name="paymentMethod"
                                id="qris" data-bs-toggle="collapse" data-bs-target="#collapseQris">
                            <label class="form-check-label d-flex justify-content-between align-items-center w-100 p-3"
                                for="qris" style="font-size:15px; font-weight:500;">
                                <span>QRIS</span>
                                <span>
                                    <img src="{{ asset('assets/images/qris.png') }}" alt="QRIS" width="40">
                                </span>
                            </label>
                        </div>
                        <div class="collapse px-3 pb-3" id="collapseQris">
                            <div class="row g-3 mt-2">
                                <div class="col-6 col-md-4">
                                    <div class="card text-center p-2">
                                        <img src="{{ asset('assets/images/qris.png') }}" alt="QRIS" width="60">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Script supaya hanya satu collapse terbuka -->
                <script>
                    document.querySelectorAll('.payment-radio').forEach(radio => {
                        radio.addEventListener('change', function() {
                            document.querySelectorAll('.collapse').forEach(c => {
                                if (c.id !== this.dataset.bsTarget.replace('#', '')) {
                                    new bootstrap.Collapse(c, {
                                        hide: true
                                    });
                                }
                            });
                        });
                    });
                </script>

            </div>

            <!-- Right Section -->
            <div class="col-lg-4 col-12 p-4">
                <!-- Billing Details -->
                <div class="card shadow-sm mb-4 p-4" style="border-radius: 16px">
                    <h5 class="fw-bold text-primary mb-3" style="font-size:20px;">Billing Details</h5>
                    <p class="text-muted mb-3" style="font-size:14px;">Silahkan bayar sesuai angka yang tertera di bawah
                        ini.</p>
                    <table class="table table-borderless mb-2" style="font-size:15px;">
                        <tbody>
                            <tr>
                                <td class="text-muted" style="font-size:14px;">Kategori Event</td>
                                <td class="text-end">
                                    <div class="text-muted" style="font-size:14px;">Regular 5K <span
                                            class="fw-bold">1</span></div>
                                    <div class="text-muted" style="font-size:14px;">Regular 10K <span
                                            class="fw-bold">3</span></div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-muted" style="font-size:14px;">Jumlah</td>
                                <td class="text-end fw-bold" style="font-size:15px;">4 Orang</td>
                            </tr>
                            <tr>
                                <td class="text-muted" style="font-size:14px;">Biaya</td>
                                <td class="text-end" style="font-size:15px;">Rp1.220.000</td>
                            </tr>
                            <tr>
                                <td class="text-muted" style="font-size:14px;">Diskon Voucher</td>
                                <td class="text-end text-danger" style="font-size:15px;">- Rp100.000</td>
                            </tr>
                            <tr>
                                <td class="text-muted" style="font-size:14px;">Subtotal</td>
                                <td class="text-end fw-bold" style="font-size:15px; color:#22C55E;">Rp1.120.000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Voucher -->
                <div class="card mb-3 align-items-center" style="border-radius: 16px"">
                    <div class="d-flex align-items-center justify-content-center p-0 m-0"
                        style="background:#E3EAFD; border-radius:8px; width:40px; height:40px; min-width:40px; min-height:40px; max-width:40px; max-height:40px; box-sizing:border-box;">
                        <img src="{{ asset('assets/images/icons/ic-voucher.svg') }}" alt="Voucher"
                            style="width:35px; height:35px; display:block;">
                    </div>
                    <input type="text" class="form-control" placeholder="Masukan Kode Voucher"
                        style="height:40px; font-size:15px; border-radius:8px; border:1.5px solid #E3EAFD;">
                    <button class="btn btn-outline-secondary px-3"
                        style="height:40px; font-size:15px; font-weight:600; border-radius:8px; border:1.5px solid #E3EAFD;">SIMPAN</button>
                </div>

                <!-- Pay Button -->
                <button class="btn w-100 fw-bold py-2"
                    style="background:#5A35F4; border:none; border-radius:12px; font-size:18px; font-weight:700; color:#fff;">
                    Bayar dengan Virtual Account
                </button>
            </div>
        </div>
    </div>

    <!-- Script: Only expand the selected payment method card, others collapse -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const radios = document.querySelectorAll('.payment-radio');
            const collapseMap = {
                transferBank: document.getElementById('collapseTransfer'),
                ewallet: document.getElementById('collapseEwallet'),
                qris: document.getElementById('collapseQris')
            };
            radios.forEach(radio => {
                radio.addEventListener('change', function() {
                    Object.entries(collapseMap).forEach(([key, collapse]) => {
                        if (collapse) {
                            if (radio.id === key) {
                                new bootstrap.Collapse(collapse, {
                                    show: true
                                });
                            } else {
                                new bootstrap.Collapse(collapse, {
                                    hide: true
                                });
                            }
                        }
                    });
                });
            });
        });
    </script>
@endsection
