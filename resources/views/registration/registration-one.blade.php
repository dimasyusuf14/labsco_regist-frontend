@extends('registration.layouts.index')

@section('content-left')
    <!-- Left: Form -->

    <div class="card shadow-sm mb-4 pt-4 pb-0" style="border-radius: 16px">
        <div class="card-header bg-white border-0 px-4 mb-3">
            <h4 class="fw-bold mb-1" style="color:#375AD9;">Participant Information</h4>
            <span class="text-muted" style="font-size:16px;">Please fill in the form below to enter your
                personal information.<br>If there is an asterisk <span class="text-danger">*</span>, it means
                the field is required.</span>
        </div>
        <div class="card-body px-4">
            <form>
                <div class="mb-3">
                    <label for="email" class="form-label fw-semibold"
                        style="font-size: 16px;font-weight: 500;color: #000000;">Email <span
                            class="text-danger">*</span></label>
                    <input type="email" class="form-control" id="email" placeholder="Placeholder">
                </div>
                <div class="mb-3">
                    <label for="confirmEmail" class="form-label fw-semibold"
                        style="font-size: 16px;font-weight: 500;color: #000000;">Confirmation Email <span
                            class="text-danger">*</span></label>
                    <input type="email" class="form-control" id="confirmEmail" placeholder="Placeholder">
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label fw-semibold"
                        style="font-size: 16px;font-weight: 500;color: #000000;">Phone Number <span
                            class="text-danger">*</span></label>
                    <div class="input-group">
                        <span class="input-group-text">+62</span>
                        <input type="text" class="form-control" id="phone" placeholder="Placeholder">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="fname" class="form-label fw-semibold"
                        style="font-size: 16px;font-weight: 500;color: #000000;">First Name <span
                            class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="fname" placeholder="Placeholder">
                </div>
                <div class="mb-3">
                    <label for="lname" class="form-label fw-semibold"
                        style="font-size: 16px;font-weight: 500;color: #000000;">Last Name <span
                            class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="lname" placeholder="Placeholder">
                </div>
                <div class="mb-3">
                    <label for="dob" class="form-label fw-semibold"
                        style="font-size: 16px;font-weight: 500;color: #000000;">Date of Birth <span
                            class="text-danger">*</span></label>
                    <input type="date" class="form-control" id="dob" placeholder="Placeholder">
                </div>
                <div class="mb-3">
                    <label for="gender" class="form-label fw-semibold"
                        style="font-size: 16px;font-weight: 500;color: #000000;">Gender <span
                            class="text-danger">*</span></label>
                    <select class="form-select" id="gender">
                        <option selected>Placeholder</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="ktp" class="form-label fw-semibold"
                        style="font-size: 16px;font-weight: 500;color: #000000;">KTP/Passport <span
                            class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="ktp" placeholder="Placeholder">
                </div>
                <div class="mb-3">
                    <label for="nationality" class="form-label fw-semibold"
                        style="font-size: 16px;font-weight: 500;color: #000000;">Nationality <span
                            class="text-danger">*</span></label>
                    <select class="form-select" id="nationality">
                        <option selected>Placeholder</option>
                        <option value="indonesia">Indonesia</option>
                        <option value="foreigner">Foreigner</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="city" class="form-label fw-semibold"
                        style="font-size: 16px;font-weight: 500;color: #000000;">City <span
                            class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="city" placeholder="Placeholder">
                </div>
            </form>
        </div>
        <div class="d-flex justify-content-between border-top border-2 px-4 py-3" style="min-height:56px;">
            <a href="#" class="btn btn-outline-secondary px-4 py-2 d-flex align-items-center gap-2"
                style="font-size:15px; font-weight:500; border-radius:8px; border-width:2px; box-shadow:none;">
                <img src="{{ asset('assets/icons/ic-arrow-back.svg') }}" alt="Back" style="width:13px;height:11px;">
                <span style="font-size:15px; font-weight:500;">Back</span>
            </a>
            <a href="{{ route('registration-two') }}" class="btn btn-primary px-4 py-2 d-flex align-items-center gap-2"
                style="font-size:15px; font-weight:600; border-radius:8px; box-shadow:none;">
                <span style="font-size:15px; font-weight:600;">Next</span>
                <img src="{{ asset('assets/icons/ic-arrow-next.svg') }}" alt="Next" style="width:13px;height:11px;">
            </a>
        </div>
    </div>
@endsection
