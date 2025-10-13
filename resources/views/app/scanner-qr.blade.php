@extends('app')

@section('content')
    <main id="main" class="category-run d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <section id="card-scanner">
            <div class="scanner-container text-center p-4">

                {{-- Manual Input --}}
                <div class="ticket-code-container mb-3 d-flex justify-content-center">
                    <input type="text" class="form-control ticket-code-input me-2" id="manualInput"
                        placeholder="Input BIB Number" style="max-width: 250px" />
                    <button class="btn btn-outline-secondary ticket-code-btn" onclick="processManualInput()">ENTER</button>
                </div>

                {{-- QR Reader --}}
                <div id="reader" class="qr-reader"></div>

                {{-- Placeholder --}}
                <div id="qrPlaceholder" class="qr-icon-placeholder">
                    <img src="/assets/images/icons/ic-qr-code.svg" alt="QR Icon" class="qr-icon" />
                    <div class="placeholder-text mt-3">
                        <div>Click “Start Scanner” to start</div>
                        <div>scanning the QR code</div>
                    </div>
                </div>

                {{-- Loading State --}}
                <div id="loadingContainer" class="qr-loading" style="display: none;">
                    <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                    <p class="mt-3 mb-0 fw-medium text-secondary">Initializing camera...</p>
                </div>

                {{-- Controls --}}
                <div class="scanner-controls mt-4 d-flex justify-content-center gap-2">
                    <button id="startBtn" class="btn btn-primary" onclick="startScanner()">
                        <i class="bi bi-play-fill me-1"></i> Start Scanner
                    </button>
                    <button id="flipBtn" class="btn btn-secondary" onclick="flipCamera()" style="display: none">
                        <i class="bi bi-arrow-repeat me-1"></i>
                    </button>
                    <button id="stopBtn" class="btn btn-danger" onclick="stopScanner()" style="display: none">
                        <i class="bi bi-stop-fill me-1"></i> Stop Scanner
                    </button>
                </div>
            </div>
        </section>
    </main>

    {{-- Modal Konfirmasi --}}
    <div class="modal fade" id="confirmationModal" tabindex="-1" aria-labelledby="confirmationModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content text-center">
                <div class="modal-body p-4">
                    <h5 id="confirmationModalLabel" class="fw-bold mb-3">Confirmation Dialog</h5>
                    <p id="scannedText" class="text-secondary mb-4"></p>
                    <div class="d-flex justify-content-center gap-3">
                        <button type="button" class="btn btn-warning text-white px-4" id="cancelBtn"
                            data-bs-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary px-4" id="confirmBtn">Confirmation</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Bootstrap & Icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/html5-qrcode"></script>

    <script>
        let html5QrCode = null;
        let cameras = [];
        let currentCameraId = null;
        let isScanning = false;
        let lastScannedData = null;
        let modalVisible = false;

        async function startScanner() {
            try {
                document.getElementById("qrPlaceholder").style.display = "none";
                document.getElementById("loadingContainer").style.display = "flex";
                document.getElementById("reader").style.display = "none";

                document.getElementById("startBtn").style.display = "none";
                document.getElementById("stopBtn").style.display = "inline-block";
                document.getElementById("flipBtn").style.display = "inline-block";

                html5QrCode = new Html5Qrcode("reader");
                cameras = await Html5Qrcode.getCameras();

                if (!cameras.length) {
                    alert("Tidak ada kamera ditemukan.");
                    resetUI();
                    return;
                }

                currentCameraId = cameras.find(c => c.label.toLowerCase().includes("back"))?.id || cameras[0].id;

                await html5QrCode.start(
                    currentCameraId, {
                        fps: 10,
                        qrbox: {
                            width: 250,
                            height: 250
                        }
                    },
                    (decodedText) => {
                        // Cegah pemanggilan berulang saat modal masih terbuka
                        if (!modalVisible && decodedText !== lastScannedData) {
                            lastScannedData = decodedText;
                            showConfirmationDialog(decodedText);
                        }
                    }
                );

                document.getElementById("loadingContainer").style.display = "none";
                document.getElementById("reader").style.display = "block";
                isScanning = true;

            } catch (err) {
                console.error("Error:", err);
                alert("Gagal memulai kamera. Pastikan izin telah diberikan.");
                resetUI();
            }
        }

        async function stopScanner() {
            if (html5QrCode && isScanning) {
                await html5QrCode.stop();
                await html5QrCode.clear();
            }
            resetUI();
        }

        async function flipCamera() {
            if (!isScanning || cameras.length < 2) return alert("Tidak ada kamera lain.");

            const currentIndex = cameras.findIndex(c => c.id === currentCameraId);
            const nextCamera = cameras[(currentIndex + 1) % cameras.length];
            currentCameraId = nextCamera.id;

            await html5QrCode.stop();
            await html5QrCode.clear();
            await html5QrCode.start(
                currentCameraId, {
                    fps: 10,
                    qrbox: {
                        width: 250,
                        height: 250
                    }
                },
                (decodedText) => {
                    if (!modalVisible && decodedText !== lastScannedData) {
                        lastScannedData = decodedText;
                        showConfirmationDialog(decodedText);
                    }
                }
            );
        }

        function resetUI() {
            document.getElementById("reader").style.display = "none";
            document.getElementById("loadingContainer").style.display = "none";
            document.getElementById("qrPlaceholder").style.display = "flex";
            document.getElementById("startBtn").style.display = "inline-block";
            document.getElementById("stopBtn").style.display = "none";
            document.getElementById("flipBtn").style.display = "none";
            isScanning = false;
            html5QrCode = null;
        }

        function processManualInput() {
            const input = document.getElementById("manualInput");
            const value = input.value.trim();
            if (!value) return alert("Please enter a ticket code");
            showConfirmationDialog(value);
            input.value = "";
        }

        function showConfirmationDialog(text) {
            modalVisible = true;
            lastScannedData = text;
            document.getElementById("scannedText").textContent = text;
            const modal = new bootstrap.Modal(document.getElementById("confirmationModal"));
            modal.show();

            // Reset modalVisible saat modal ditutup
            const modalElement = document.getElementById("confirmationModal");
            modalElement.addEventListener('hidden.bs.modal', () => {
                modalVisible = false;
            }, {
                once: true
            });
        }

        // Tombol Confirmation
        document.addEventListener("DOMContentLoaded", () => {
            document.getElementById("confirmBtn").addEventListener("click", () => {
                console.log("Confirmed Data:", lastScannedData);
                const modal = bootstrap.Modal.getInstance(document.getElementById("confirmationModal"));
                modal.hide();
                alert("Data confirmed: " + lastScannedData);
                modalVisible = false;
            });

            // Tombol Cancel
            document.getElementById("cancelBtn").addEventListener("click", () => {
                modalVisible = false;
            });
        });
    </script>
@endsection
