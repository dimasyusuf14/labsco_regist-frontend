<nav aria-label="Wizard nav">
    <ul class="pagination gap-2">
        @php
            $step_curr = $step_curr ?? 1; // Default to step 1 if not set
            // Define the step variables in an array
            $steps = [
                1 => $step_1 ?? false,
                2 => $step_2 ?? false,
                3 => $step_3 ?? false,
                4 => $step_4 ?? false,
                5 => $step_5 ?? false,
            ];
        @endphp
        @foreach ($steps as $step => $isActive)
            @php
                $changeStep = "changeStep($step)";
                $class = $step_curr === $step ? 'current' : ($isActive ? 'active' : '');
                $class .= $steps[5] ? ' linked' : '';
                $click = $steps[5] ? "wire:click=$changeStep" : '';
            @endphp

            <li class="page-item">
                <button type="button" class="page-link {{ $class }}" {{ $click }}>
                    <span wire:loading.remove wire:target="{{ $changeStep }}">{{ $step }}</span>
                    <div wire:loading wire:target="{{ $changeStep }}">
                        <span class="spinner-border spinner-border-sm"role="status"></span>
                    </div>
                </button>
            </li>
        @endforeach
    </ul>
</nav>
