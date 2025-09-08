<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body class="d-flex flex-column min-vh-100" style="background:#f3f6fb;">
    @include('layouts.navbar')

    @yield('content')

    @include('layouts.footer')

    <!-- Bootstrap JS & Icons -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script>
        // Interactivity for race selection
        document.addEventListener('DOMContentLoaded', function() {
            const raceCards = document.querySelectorAll('.race-card');
            const selectButtons = document.querySelectorAll('.select-race');
            const summaryName = document.getElementById('selectedRaceName');
            const summaryPrice = document.getElementById('selectedRacePrice');
            const buyBtn = document.getElementById('buyBtn');
            let selected = null;

            selectButtons.forEach((btn, idx) => {
                btn.addEventListener('click', function() {
                    if (btn.disabled) return;
                    selected = raceCards[idx];
                    // Disable all other cards
                    raceCards.forEach((card, i) => {
                        if (card !== selected) {
                            card.querySelector('.select-race').disabled = true;
                            card.style.opacity = 0.5;
                        } else {
                            card.querySelector('.select-race').classList.add('btn-success');
                            card.querySelector('.select-race').textContent = 'Selected';
                        }
                    });
                    // Update summary
                    summaryName.textContent = selected.getAttribute('data-race');
                    summaryPrice.textContent = 'Rp 200,000';
                    buyBtn.disabled = false;
                });
            });
        });
    </script>
</body>

</html>
