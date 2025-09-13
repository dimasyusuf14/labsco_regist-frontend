@extends('registration.layouts.index')

@section('content-left')
    <!-- Left: Form -->
    <div class="col-lg-8 col-12">
        <div class="card shadow-sm mb-4 pt-4 pb-0" style="border-radius: 16px">
            <div class="card-header bg-white border-0 px-4 mb-3">
                <h4 class="fw-bold mb-1" style="color:#375AD9;">Emergency Contact & Medical Information</h4>
                <span class="text-muted" style="font-size:16px;">Please fill in the form below to enter your
                    personal information.<br>If there is an asterisk <span class="text-danger">*</span>, it means
                    the field is required.</span>
            </div>
            <div class="card-body px-4">
                <form>
                    <!-- Emergency Contact Name -->
                    <div class="mb-3">
                        <label for="emergencyContactName" class="form-label fw-semibold">
                            Emergency Contact Name <span class="text-danger">*</span>
                        </label>
                        <input type="text" class="form-control" id="emergencyContactName" placeholder="Placeholder">
                    </div>

                    <!-- Emergency Contact Relation -->
                    <div class="mb-3">
                        <label for="emergencyContact" class="form-label fw-semibold">
                            Emergency Contact Relation<span class="text-danger">*</span>
                        </label>
                        <select class="form-select" id="emergencyContact">
                            <option value="" selected hidden>Select option</option>
                            <option value="parent">Parent</option>
                            <option value="sibling">Sibling</option>
                            <option value="spouse">Spouse</option>
                            <option value="friend">Friend</option>
                            <option value="other">Other</option>
                        </select>
                    </div>

                    <!-- Emergency Contact Phone -->
                    <div class="mb-3">
                        <label for="emergencyContactPhone" class="form-label fw-semibold">
                            Emergency Contact Phone Number <span class="text-danger">*</span>
                        </label>
                        <div class="input-group">
                            <span class="input-group-text">+62</span>
                            <input type="text" class="form-control" id="phone" placeholder="Placeholder">
                        </div>
                    </div>

                    <!-- Blood Type -->
                    <div class="mb-3">
                        <label for="bloodType" class="form-label fw-semibold">
                            Participant Blood Type <span class="text-danger">*</span>
                        </label>
                        <select class="form-select" id="bloodType">
                            <option value="" selected hidden>Select option</option>
                            <option value="a">A</option>
                            <option value="b">B</option>
                            <option value="ab">AB</option>
                            <option value="o">O</option>
                        </select>
                    </div>

                    <!-- Medical Condition -->
                    <div class="mb-3">
                        <label for="medicalCondition" class="form-label fw-semibold">
                            Your medical condition <span class="text-muted" style="font-size: 12px;">(if any, please
                                specify)</span>
                        </label>
                        <textarea class="form-control" id="medicalCondition" rows="3" placeholder="Placeholder"></textarea>
                    </div>

                    <!-- Insurance -->
                    <div class="mb-3">
                        <label class="form-label fw-semibold">
                            Insurance <span class="text-muted" style="font-size: 12px;">(if any, please specify)</span>
                        </label>
                        <div class="d-flex gap-4">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="insurance" id="insuranceYes"
                                    value="yes">
                                <label class="form-check-label" for="insuranceYes">Yes</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="insurance" id="insuranceNo"
                                    value="no">
                                <label class="form-check-label" for="insuranceNo">No</label>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <!-- Footer buttons -->
            <div class="d-flex justify-content-between border-top border-2 px-4 py-3">
                <a href="{{ route('registration-one') }}"
                    class="btn btn-outline-secondary fw-medium px-4 d-flex align-items-center gap-2"
                    style="font-size: 16px;">
                    <img src="{{ asset('assets/icons/ic-arrow-back.svg') }}" alt="Back" style="width:13px;height:11px;">
                    Back
                </a>
                <a href="{{ route('registration-three') }}"
                    class="btn btn-primary fw-medium px-4 d-flex align-items-center gap-2" style="font-size: 16px;">
                    Next
                    <img src="{{ asset('assets/icons/ic-arrow-next.svg') }}" alt="Next" style="width:13px;height:11px;">
                </a>
            </div>
        </div>
    </div>
@endsection
