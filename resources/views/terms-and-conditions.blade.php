@extends('layouts.index')

@section('content')
    <div class="col-lg-8 py-4 col-12 mx-auto text-center d-flex flex-column justify-content-center align-items-center">

        <!-- Title -->
        <div class="mb-4 justify-content-start align-items-start text-start" style="width:100%; max-width:960px;">
            <h2 class="fw-bold">Syarat dan Ketentuan Event</h2>
            <p class="text-muted">
                Silakan baca syarat dan ketentuan di bawah ini. Jika Anda Setuju, harap nyatakan persetujuan Anda
                dengan mencentang kotak dan klik <b>“Saya Setuju”</b> di bagian bawah halaman untuk melanjutkan.
            </p>
        </div>

        <!-- Card Syarat & Ketentuan -->
        <div class="card shadow-sm mb-4 p-4 justify-content-start align-items-start text-start"
            style="border-radius: 16px; max-width:960px; width:100%; margin:auto;">
            <h4 class="fw-bold text-primary">SYARAT DAN KETENTUAN</h4>
            <ol class="mt-3">
                <li class="mb-2"><b>Pendaftaran:</b>
                    <ul>
                        <li>Peserta harus mendaftar melalui situs resmi Labsco Sport.</li>
                        <li>Pendaftaran dianggap sah setelah pembayaran diterima dan dikonfirmasi oleh panitia.</li>
                    </ul>
                </li>
                <li class="mb-2"><b>Kelayakan Peserta:</b>
                    <ul>
                        <li>Peserta harus berusia minimal 18 tahun pada hari acara.</li>
                        <li>Peserta yang berusia di bawah 18 tahun harus mendapat izin tertulis dari orang tua atau wali.
                        </li>
                    </ul>
                </li>
                <li class="mb-2"><b>Pembatalan dan Pengembalian Dana:</b>
                    <ul>
                        <li>Pembatalan pendaftaran hanya dapat dilakukan sebelum tanggal tertentu yang ditetapkan oleh
                            panitia.</li>
                        <li>Biaya pendaftaran tidak dapat dikembalikan setelah batas waktu pembatalan.</li>
                    </ul>
                </li>
                <li class="mb-2"><b>Perubahan Jadwal:</b>
                    <ul>
                        <li>Panitia berhak mengubah jadwal acara karena alasan cuaca atau keadaan darurat lainnya.</li>
                        <li>Peserta akan diberitahukan melalui email atau media sosial resmi Labsco Sport.</li>
                    </ul>
                </li>
                <li class="mb-2"><b>Kewajiban Peserta:</b>
                    <ul>
                        <li>Peserta harus mematuhi semua aturan dan peraturan yang ditetapkan oleh panitia.</li>
                        <li>Peserta bertanggung jawab untuk membawa peralatan pribadi yang diperlukan selama acara.</li>
                    </ul>
                </li>
                <li class="mb-2"><b>Asuransi:</b>
                    <ul>
                        <li>Panitia tidak bertanggung jawab atas cedera, kecelakaan, atau kehilangan barang yang terjadi
                            selama acara.</li>
                        <li>Peserta disarankan untuk memiliki asuransi pribadi.</li>
                    </ul>
                </li>
                <li class="mb-2"><b>Hak Cipta:</b>
                    <ul>
                        <li>Panitia berhak menggunakan foto dan video yang diambil selama acara untuk keperluan promosi
                            tanpa kompensasi tambahan.</li>
                    </ul>
                </li>
            </ol>
        </div>

        <!-- Card Peraturan Lari -->
        <div class="card shadow-sm mb-4 p-4 justify-content-start align-items-start text-start"
            style="border-radius: 16px; max-width:960px; width:100%; margin:auto;">
            <h4 class="fw-bold text-primary">PERATURAN LARI</h4>
            <ol class="mt-3">
                <li class="mb-2"><b>Start dan Finish:</b>
                    <ul>
                        <li>Peserta harus memulai lari dari titik start yang ditentukan dan menyelesaikannya di titik
                            finish.</li>
                        <li>Waktu start dan finish akan dicatat oleh panitia.</li>
                    </ul>
                </li>
                <li class="mb-2"><b>Perlengkapan Lari:</b>
                    <ul>
                        <li>Peserta harus mengenakan nomor bib yang diberikan oleh panitia selama seluruh durasi acara.</li>
                        <li>Peserta disarankan untuk mengenakan pakaian dan sepatu yang sesuai dengan kondisi cuaca dan rute
                            lari.</li>
                    </ul>
                </li>
                <li class="mb-2"><b>Jalur Lari:</b>
                    <ul>
                        <li>Peserta harus mengikuti jalur lari yang telah ditentukan oleh panitia.</li>
                        <li>Keluar dari jalur lari tanpa izin panitia akan mengakibatkan diskualifikasi.</li>
                    </ul>
                </li>
                <li class="mb-2"><b>Stasiun Air:</b>
                    <ul>
                        <li>Stasiun air akan disediakan di beberapa titik sepanjang jalur lari.</li>
                        <li>Peserta disarankan untuk tetap terhidrasi dengan baik selama lari.</li>
                    </ul>
                </li>
                <li class="mb-2"><b>Pemeriksaan Kesehatan:</b>
                    <ul>
                        <li>Peserta harus memastikan bahwa mereka dalam kondisi kesehatan yang baik sebelum mengikuti acara.
                        </li>
                        <li>Panitia berhak menghentikan peserta dari berlari jika dianggap tidak layak secara fisik.</li>
                    </ul>
                </li>
                <li class="mb-2"><b>Etika Lari:</b>
                    <ul>
                        <li>Peserta diharapkan untuk bersikap sportif dan menghormati peserta lainnya.</li>
                        <li>Peserta tidak boleh menghalangi atau mengganggu peserta lain selama lari.</li>
                    </ul>
                </li>
                <li class="mb-2"><b>Keamanan:</b>
                    <ul>
                        <li>Peserta harus mematuhi semua petunjuk keamanan yang diberikan oleh panitia.</li>
                        <li>Jika terjadi keadaan darurat, peserta harus segera menghubungi panitia atau petugas medis yang
                            bertugas.</li>
                    </ul>
                </li>
            </ol>
        </div>

        <!-- Technical Handbook -->
        <div class="card shadow-sm mb-4 p-4 text-start"
            style="border-radius: 16px; max-width:960px; width:100%; margin:auto;">
            <h4 class="fw-bold text-primary mb-3">Technical Handbook</h4>
            <div class="text-center">
                <img src="{{ asset('assets/images/preview-thb.png') }}" alt="Preview Dokumen" class="img-fluid rounded"
                    height="600" width="400" />
            </div>
        </div>

        <!-- Checkbox Agreement -->
        <div class="card shadow-sm mb-4 p-4 justify-content-start align-items-start text-start"
            style="border-radius: 16px; max-width:960px; width:100%; margin:auto;">
            <h4 class="fw-bold text-primary mb-3">KAMU SETUJU ?</h4>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="agreeCheck">
                <label class="form-check-label text-muted" for="agreeCheck">
                    Dengan mencentang kotak ini, saya, <b>Sultan Jordy Priadi</b>, dengan ini menyatakan bahwa saya telah
                    membaca
                    dan memahami syarat dan ketentuan serta peraturan lari yang disediakan oleh Labsco Runner.
                </label>
            </div>
        </div>

        <!-- Footer buttons -->
        <div class="card shadow-sm mb-4 px-4 py-3 border-0"
            style="border-radius: 16px; max-width:960px; width:100%; margin:auto; background:#fff; box-shadow:0 2px 8px rgba(0,0,0,0.07);">
            <div class="d-flex justify-content-between align-items-center w-100" style="min-height:56px;">
                <a href="{{ route('registration-one') }}"
                    class="btn btn-outline-secondary px-4 py-2 d-flex align-items-center gap-2"
                    style="font-size:15px; font-weight:500; border-radius:8px; border-width:2px; box-shadow:none;">
                    <img src="{{ asset('assets/icons/ic-arrow-back.svg') }}" alt="Back" style="width:13px;height:11px;">
                    <span style="font-size:15px; font-weight:500;">Back</span>
                </a>
                <a href="{{ route('registration-three') }}"
                    class="btn btn-primary px-4 py-2 d-flex align-items-center gap-2"
                    style="font-size:15px; font-weight:600; border-radius:8px; box-shadow:none;">
                    <span style="font-size:15px; font-weight:600;">Next</span>
                    <img src="{{ asset('assets/icons/ic-arrow-next.svg') }}" alt="Next" style="width:13px;height:11px;">
                </a>
            </div>
        </div>
    </div>
@endsection
