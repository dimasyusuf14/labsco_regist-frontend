@extends('layouts.index')

@section('content')
    <style>
        .collapse-btn {
            min-height: 56px;
            transition: background 0.2s;
        }

        .collapse-btn:focus,
        .collapse-btn:active,
        .collapse-btn.show,
        .collapse-btn[aria-expanded="true"] {
            box-shadow: none !important;
            border: none !important;
            outline: none !important;
        }

        .arrow-icon {
            display: flex;
            align-items: center;
            height: 100%;
        }

        /* --- Ticket Card --- */
        .ticket-card {
            width: 308px;
            height: 239px;
            background: #f0f5ff;
            border-radius: 16px;
            padding: 16px;
            box-shadow: 0 .125rem .25rem rgba($black, .075);
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            font-family: "Inter", sans-serif;
            transition: transform 0.2s ease, border 0.2s ease;
            margin: 8px;
        }

        .ticket-card:hover {
            transform: translateY(-3px);
            border: 2px solid #5B7EFF;
        }

        /* Tambahan border saat selected */
        .ticket-card.selected {
            border: 2px solid #375AD9;
        }

        .ticket-card-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: .5rem;
        }

        .ticket-card-title {
            font-size: 20px;
            font-weight: 700;
            margin-bottom: .5rem;
            color: #000;
        }

        .ticket-card-info {
            font-size: 14px;
            color: #6b7280;
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .ticket-card-price {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 15px;
            margin-bottom: 1rem;
            color: #6b7280;
        }

        .ticket-price {
            font-weight: 700;
            font-size: 18px;
            color: #2563EB;
        }

        /* --- Button --- */
        .ticket-btn {
            width: 100%;
            padding: .7rem;
            border-radius: 8px;
            font-weight: 600;
            font-size: 15px;
            border: none;
        }

        .ticket-btn.select {
            background: #2563EB;
            color: #fff;
        }

        .ticket-btn.select:hover {
            background: #1d4ed8;
        }

        .ticket-btn.selected {
            background: #F37F0D;
            color: #fff;
        }

        .ticket-btn.soldout {
            background: #9ca3af;
            color: #fff;
            cursor: not-allowed;
        }

        /* --- Badges --- */
        .badge-success-custom {
            background: #2f5233;
            color: #f9d835;
            padding: 4px 10px;
            border-radius: 6px;
            font-size: 13px;
            font-weight: 600;
        }

        .badge-danger-custom {
            background: #dc2626;
            color: #fff;
            padding: 4px 10px;
            border-radius: 6px;
            font-size: 13px;
            font-weight: 600;
        }

        .ticket-distance {
            font-size: 14px;
            font-weight: 600;
            color: #000;
        }

        .rounded-32 {
            border-radius: 32px !important;
        }
    </style>
    <div class="container py-4">
        <div class="mx-auto" style="max-width:900px;">
            <div class="card p-4 shadow-sm rounded-32">
                <h4 class="mb-3 fw-bold">Labsco Marathon</h4>
                <!-- Early Bird -->
                <div class="mb-3 shadow border border-2 p-2" style="border-radius:8px;">
                    <button
                        class="btn fw-bold w-100 text-start d-flex justify-content-between align-items-center collapse-btn"
                        type="button" data-bs-toggle="collapse" data-bs-target="#earlyBirdCollapse" aria-expanded="false"
                        aria-controls="earlyBirdCollapse" style="background:#f8f9fa; border-radius:8px;">
                        <span>Early Bird | 01 August - 25 August 2025</span>
                        <span class="badge text-white px-4 py-2 fs-6 fw-bold" style="background:#F37F0D;">The period has
                            ended</span>
                        <span class="arrow-icon"><i class="bi bi-chevron-down"></i></span>
                    </button>
                    <div class="collapse show p-2" id="earlyBirdCollapse">
                        <div class="row row-cols-2 justify-content-center" style="border-radius:8px;">
                            <!-- 5K -->
                            <div class="ticket-card" data-race="5K Fun Run" data-price="200000" data-stock="true">
                                <div>
                                    <div class="ticket-card-header">
                                        <span class="badge-success-custom">Regular</span>
                                        <span class="ticket-distance">5.0 Km</span>
                                    </div>
                                    <h5 class="ticket-card-title">5K Fun Run</h5>
                                    <div class="ticket-card-info"><i class="bi bi-people"></i> Max 1000 Participants
                                    </div>
                                    <div class="ticket-card-price">
                                        <span>Reguler</span>
                                        <span class="ticket-price">Rp 200,000</span>
                                    </div>
                                </div>
                                <button class="ticket-btn select">Select This Race</button>
                            </div>

                            <!-- 10K -->
                            <div class="ticket-card" data-race="10K Challenge" data-price="200000" data-stock="true">
                                <div>
                                    <div class="ticket-card-header">
                                        <span class="badge-success-custom">Regular</span>
                                        <span class="ticket-distance">10 Km</span>
                                    </div>
                                    <h5 class="ticket-card-title">10K Challenge</h5>
                                    <div class="ticket-card-info"><i class="bi bi-people"></i> Max 1000 Participants
                                    </div>
                                    <div class="ticket-card-price">
                                        <span>Reguler</span>
                                        <span class="ticket-price">Rp 200,000</span>
                                    </div>
                                </div>
                                <button class="ticket-btn select">Select This Race</button>
                            </div>

                            <!-- 24K -->
                            <div class="ticket-card" data-race="24K Half Marathon" data-price="200000" data-stock="true">
                                <div>
                                    <div class="ticket-card-header">
                                        <span class="badge-success-custom">Regular</span>
                                        <span class="ticket-distance">24 Km</span>
                                    </div>
                                    <h5 class="ticket-card-title">24K Half Marathon</h5>
                                    <div class="ticket-card-info"><i class="bi bi-people"></i> Max 1000 Participants
                                    </div>
                                    <div class="ticket-card-price">
                                        <span>Reguler</span>
                                        <span class="ticket-price">Rp 200,000</span>
                                    </div>
                                </div>
                                <button class="ticket-btn select">Select This Race</button>
                            </div>

                            <!-- 42K -->
                            <div class="ticket-card" data-race="42K Full Marathon" data-price="200000" data-stock="false">
                                <div>
                                    <div class="ticket-card-header">
                                        <span class="badge-danger-custom">Regular</span>
                                        <span class="ticket-distance">42 Km</span>
                                    </div>
                                    <h5 class="ticket-card-title">42K Full Marathon</h5>
                                    <div class="ticket-card-info"><i class="bi bi-people"></i> Max 1000 Participants
                                    </div>
                                    <div class="ticket-card-price">
                                        <span>Reguler</span>
                                        <span class="ticket-price">Rp 200,000</span>
                                    </div>
                                </div>
                                <button class="ticket-btn soldout" disabled>Sold Out</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Regular -->
                <div class="mb-3 shadow border border-2">
                    <button
                        class="btn fw-bold w-100 text-start d-flex justify-content-between align-items-center collapse-btn"
                        type="button" data-bs-toggle="collapse" data-bs-target="#regularCollapse" aria-expanded="true"
                        aria-controls="regularCollapse" style="background:#f8f9fa;">
                        <span>Regular | 26 August - 26 September 2025</span>
                        <span class="badge bg-primary">Tickets available</span>
                        <span class="arrow-icon"><i class="bi bi-chevron-up"></i></span>
                    </button>
                    <div class="collapse show border border-2 mt-2" id="regularCollapse">
                        <div class="row row-cols-2 g-4 justify-content-center p-4">
                            <!-- 5K -->
                            <div class="ticket-card" data-race="5K Fun Run" data-price="200000" data-stock="true">
                                <div>
                                    <div class="ticket-card-header">
                                        <span class="badge-success-custom">Regular</span>
                                        <span class="ticket-distance">5.0 Km</span>
                                    </div>
                                    <h5 class="ticket-card-title">5K Fun Run</h5>
                                    <div class="ticket-card-info"><i class="bi bi-people"></i> Max 1000 Participants
                                    </div>
                                    <div class="ticket-card-price">
                                        <span>Reguler</span>
                                        <span class="ticket-price">Rp 200,000</span>
                                    </div>
                                </div>
                                <button class="ticket-btn select">Select This Race</button>
                            </div>

                            <!-- 10K -->
                            <div class="ticket-card" data-race="10K Challenge" data-price="200000" data-stock="true">
                                <div>
                                    <div class="ticket-card-header">
                                        <span class="badge-success-custom">Regular</span>
                                        <span class="ticket-distance">10 Km</span>
                                    </div>
                                    <h5 class="ticket-card-title">10K Challenge</h5>
                                    <div class="ticket-card-info"><i class="bi bi-people"></i> Max 1000 Participants
                                    </div>
                                    <div class="ticket-card-price">
                                        <span>Reguler</span>
                                        <span class="ticket-price">Rp 200,000</span>
                                    </div>
                                </div>
                                <button class="ticket-btn select">Select This Race</button>
                            </div>

                            <!-- 24K -->
                            <div class="ticket-card" data-race="24K Half Marathon" data-price="200000"
                                data-stock="true">
                                <div>
                                    <div class="ticket-card-header">
                                        <span class="badge-success-custom">Regular</span>
                                        <span class="ticket-distance">24 Km</span>
                                    </div>
                                    <h5 class="ticket-card-title">24K Half Marathon</h5>
                                    <div class="ticket-card-info"><i class="bi bi-people"></i> Max 1000 Participants
                                    </div>
                                    <div class="ticket-card-price">
                                        <span>Reguler</span>
                                        <span class="ticket-price">Rp 200,000</span>
                                    </div>
                                </div>
                                <button class="ticket-btn select">Select This Race</button>
                            </div>

                            <!-- 42K -->
                            <div class="ticket-card" data-race="42K Full Marathon" data-price="200000"
                                data-stock="false">
                                <div>
                                    <div class="ticket-card-header">
                                        <span class="badge-danger-custom">Regular</span>
                                        <span class="ticket-distance">42 Km</span>
                                    </div>
                                    <h5 class="ticket-card-title">42K Full Marathon</h5>
                                    <div class="ticket-card-info"><i class="bi bi-people"></i> Max 1000 Participants
                                    </div>
                                    <div class="ticket-card-price">
                                        <span>Reguler</span>
                                        <span class="ticket-price">Rp 200,000</span>
                                    </div>
                                </div>
                                <button class="ticket-btn soldout" disabled>Sold Out</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Summary -->
        <div class="card mt-4 p-3 shadow-sm d-flex flex-row justify-content-between align-items-center" id="summaryBar"
            style="max-width:900px;margin:auto;">
            <div>
                <span id="selectedRaceName" class="fw-bold">No race selected</span>
            </div>
            <div>
                <span>Total Price</span>
                <span id="selectedRacePrice" class="fw-bold text-primary ms-2">Rp 0</span>
                <button class="btn btn-primary ms-3" id="buyBtn" disabled>Buy Tickets</button>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Collapse arrow toggle
            function toggleArrow(btn, collapseId) {
                var collapse = document.getElementById(collapseId);
                var icon = btn.querySelector('.arrow-icon i');
                collapse.addEventListener('show.bs.collapse', function() {
                    icon.classList.remove('bi-chevron-down');
                    icon.classList.add('bi-chevron-up');
                });
                collapse.addEventListener('hide.bs.collapse', function() {
                    icon.classList.remove('bi-chevron-up');
                    icon.classList.add('bi-chevron-down');
                });
            }
            var earlyBtn = document.querySelector('[data-bs-target="#earlyBirdCollapse"]');
            var regularBtn = document.querySelector('[data-bs-target="#regularCollapse"]');
            toggleArrow(earlyBtn, 'earlyBirdCollapse');
            toggleArrow(regularBtn, 'regularCollapse');

            // Ticket selection
            const raceCards = document.querySelectorAll('.ticket-card');
            const raceNameEl = document.getElementById('selectedRaceName');
            const racePriceEl = document.getElementById('selectedRacePrice');
            const buyBtn = document.getElementById('buyBtn');

            raceCards.forEach(card => {
                const btn = card.querySelector('.ticket-btn');
                if (btn && !btn.classList.contains('soldout')) {
                    btn.addEventListener('click', () => {
                        // Reset all buttons & cards
                        raceCards.forEach(c => {
                            const b = c.querySelector('.ticket-btn');
                            if (b && !b.classList.contains('soldout')) {
                                b.textContent = 'Select This Race';
                                b.classList.remove('selected');
                                b.classList.add('select');
                            }
                            c.classList.remove('selected'); // reset border card
                        });

                        // Select current
                        btn.textContent = 'Race Selected';
                        btn.classList.remove('select');
                        btn.classList.add('selected');
                        card.classList.add('selected'); // tambahkan border

                        // Update summary
                        raceNameEl.textContent = card.dataset.race;
                        racePriceEl.textContent = "Rp " + parseInt(card.dataset.price)
                            .toLocaleString('id-ID');
                        buyBtn.disabled = false;
                    });
                }
            });
        });
    </script>
@endsection
