@extends('app.registration.layouts.index')

@section('content-left')
    <!-- Left: Form -->
    <div class="card shadow-sm mb-4 pt-4 pb-0" style="border-radius: 16px">
        <div class="card-header bg-white border-0 px-4 mb-3">
            <h4 class="fw-bold mb-1" style="color:#375AD9;">Run Information</h4>
            <span class="text-muted" style="font-size:16px;">
                Please fill in the form below to provide your race information such as race pack and others.
                If there is an asterisk <span class="text-danger">*</span>, it means the field is required.
            </span>
        </div>

        <div class="card-body px-4">
            <form>
                <!-- Running Shirt Type -->
                <div class="mb-3">
                    <label class="form-label fw-semibold" style="font-size: 16px;font-weight: 500;color: #000000;">
                        Select Running Shirt Type <span class="text-danger">*</span>
                    </label>
                    <div class="d-flex gap-4">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="shirtType" id="shirtMen" value="men">
                            <label class="form-check-label" for="shirtMen">Men</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="shirtType" id="shirtWomen" value="women">
                            <label class="form-check-label" for="shirtWomen">Women</label>
                        </div>
                    </div>
                </div>

                <!-- Size Chart & Size Options (Initially Hidden) -->
                <div id="sizeChartWrapper" class="mb-3 d-none">
                    <div class="mb-3 text-start">
                        <img src="{{ asset('assets/images/example-sizechart.png') }}" alt="Size Chart"
                            class="img-fluid rounded" style="max-width: 225px; cursor:pointer;" data-bs-toggle="modal"
                            data-bs-target="#sizeChartModal">
                        <a href="#" class="d-block mt-2 text-primary" style="font-size: 13px;" data-bs-toggle="modal"
                            data-bs-target="#sizeChartModal">
                            Click on the image to see bigger size
                        </a>
                    </div>

                    <!-- Modal Size Chart -->
                    <div class="modal fade" id="sizeChartModal" tabindex="-1" aria-labelledby="sizeChartModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-md">
                            <div class="modal-content">
                                <div class="modal-header border-0">
                                    <h5 class="modal-title" id="sizeChartModalLabel">Size Chart</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body text-center">
                                    <img src="{{ asset('assets/images/example-sizechart.png') }}" alt="Size Chart"
                                        class="img-fluid rounded">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Men Sizes -->
                    <div id="sizeMen" class="d-none">
                        <label class="form-label fw-semibold">
                            Select Shirt Size (Men) <span class="text-danger">*</span>
                        </label>
                        <div class="d-flex flex-column gap-2">
                            @foreach (['S', 'M', 'L', 'XL', '2XL', '3XL', '4XL'] as $size)
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="shirtSizeMen"
                                        id="men{{ $size }}" value="{{ $size }}">
                                    <label class="form-check-label" for="men{{ $size }}">{{ $size }}</label>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Women Sizes -->
                    <div id="sizeWomen" class="d-none">
                        <label class="form-label fw-semibold">
                            Select Shirt Size (Women) <span class="text-danger">*</span>
                        </label>
                        <div class="d-flex flex-column gap-2">
                            @foreach (['S', 'M', 'L', 'XL'] as $size)
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="shirtSizeWomen"
                                        id="women{{ $size }}" value="{{ $size }}">
                                    <label class="form-check-label"
                                        for="women{{ $size }}">{{ $size }}</label>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <!-- Running Community Name -->
                <div class="mb-3">
                    <label for="communityName" class="form-label fw-semibold"
                        style="font-size: 16px;font-weight: 500;color: #000000;">
                        Running Community Name
                        <span class="text-muted ms-2" style="font-size: 12px;">
                            If any, please fill in correctly
                        </span>
                    </label>
                    <input type="text" class="form-control" id="communityName" placeholder="Placeholder">
                </div>

                <!-- Estimate Finish Time -->
                <div class="mb-3">
                    <label class="form-label fw-semibold" style="font-size: 16px;font-weight: 500;color: #000000;">
                        Estimate Finish Time <span class="text-danger">*</span>
                    </label>
                    <span class="text-primary d-block mb-2" style="font-size: 12px;">
                        Cut of time 24k (5 Hour)
                    </span>
                    <div class="d-flex gap-3">
                        <div>
                            <label for="finishHour" class="form-label small">Hour</label>
                            <input type="number" class="form-control" id="finishHour" placeholder="0" min="0">
                        </div>
                        <div>
                            <label for="finishMinute" class="form-label small">Minute</label>
                            <input type="number" class="form-control" id="finishMinute" placeholder="0" min="0"
                                max="59">
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <!-- Footer buttons -->
        <div class="d-flex justify-content-between border-top border-2 px-4 py-3" style="min-height:56px;">
            <a href="{{ route('registration-two') }}"
                class="btn btn-outline-secondary px-4 py-2 d-flex align-items-center gap-2"
                style="font-size:15px; font-weight:500; border-radius:8px; border-width:2px; box-shadow:none;">
                <img src="{{ asset('assets/images/icons/ic-arrow-back.svg') }}" alt="Back"
                    style="width:13px;height:11px;">
                <span style="font-size:15px; font-weight:500;">Back</span>
            </a>
            <a href="{{ route('data-confirmation') }}" class="btn btn-primary px-4 py-2 d-flex align-items-center gap-2"
                style="font-size:15px; font-weight:600; border-radius:8px; box-shadow:none;">
                <span style="font-size:15px; font-weight:600;">Next</span>
                <img src="{{ asset('assets/images/icons/ic-arrow-next.svg') }}" alt="Next"
                    style="width:13px;height:11px;">
            </a>
        </div>
    </div>

    <!-- Script to Toggle Size Chart -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const menRadio = document.getElementById("shirtMen");
            const womenRadio = document.getElementById("shirtWomen");
            const sizeChartWrapper = document.getElementById("sizeChartWrapper");
            const sizeMen = document.getElementById("sizeMen");
            const sizeWomen = document.getElementById("sizeWomen");

            function toggleSizeChart() {
                sizeChartWrapper.classList.remove("d-none");
                if (menRadio.checked) {
                    sizeMen.classList.remove("d-none");
                    sizeWomen.classList.add("d-none");
                } else if (womenRadio.checked) {
                    sizeWomen.classList.remove("d-none");
                    sizeMen.classList.add("d-none");
                } else {
                    sizeChartWrapper.classList.add("d-none");
                }
            }

            menRadio.addEventListener("change", toggleSizeChart);
            womenRadio.addEventListener("change", toggleSizeChart);
        });
    </script>
@endsection
