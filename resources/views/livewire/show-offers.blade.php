<div class="main-container">
    <div class="left-container">
        <h2>OFERTAS DISPONIBLES</h2>
        @forelse($offers as $offer)
            <div class="sub-container" wire:key="{{ $offer->id }}">
                <h3 class="fields-offers"><i data-feather="home"></i>
                    <span>{{ strtoupper($offer->company->company_name) }}</span>
                </h3>
                <h3 class="fields-offers"><i data-feather="briefcase"></i>
                    <span>{{ strtoupper($offer->occupation->occupation_name) }}</span>
                </h3>
                <h3 class="fields-offers"><i data-feather="map-pin"></i>
                    <span>{{ strtoupper($offer->ubication->municipality_name) }}</span>
                </h3>
                <button class="show-btn" wire:click.prevent="selectOffer({{ $offer->id }})">
                    <i>SHOW</i>
                </button>
            </div>
        @empty
            <h2>NO HAY VACANTES DISPONIBLES</h2>
        @endforelse
    </div>
    <div class="right-container">
        <h2>DETALLES DE LA OFERTA</h2>
        <div class="sub-container-2">
            @if ($selectedOffer)
                <h3 class="fields-offers-2"><i data-feather="home"></i> <span></span>EMPRESA:</h3>
                {{ $selectedOffer->company->company_name }}

                <h3 class="fields-offers-2"><i data-feather="briefcase"></i> <span></span> CARGO:</h3>
                {{ $selectedOffer->occupation->occupation_name }}

                <h3 class="fields-offers-2"><i data-feather="book-open"></i> <span></span>HABILIDAD:</h3>
                {{ $selectedOffer->skill->skill_name }}

                <h3 class="fields-offers-2"><i data-feather="calendar"></i> <span></span>EXPERIENCIA (MESES):</h3>
                {{ $selectedOffer->months_experience }}

                <h3 class="fields-offers-2"><i data-feather="clock"></i> <span></span>JORNADA:</h3>
                {{ $selectedOffer->workday->workday }}

                <h3 class="fields-offers-2"><i data-feather="file-text"></i> <span></span>TIPO DE CONTRATO:</h3>
                {{ $selectedOffer->contract_type->contract_type }}

                <h3 class="fields-offers-2"><i data-feather="dollar-sign"></i> <span></span>SALARIO:</h3>
                {{ $selectedOffer->salary->salary_range }}

                <h3 class="fields-offers-2"><i data-feather="award"></i> <span></span>NIVEL ACADÉMICO:</h3>
                {{ $selectedOffer->academic_level->academic_level }}

                <h3 class="fields-offers-2"><i data-feather="map-pin"></i> <span></span>UBICACIÓN:</h3>
                {{ $selectedOffer->ubication->municipality_name }}

                <h3 class="fields-offers-2"><i data-feather="calendar"></i> <span></span>FECHA DE INICIO:</h3>
                {{ $selectedOffer->start_date }}

                <h3 class="fields-offers-2"><i data-feather="calendar"></i> <span></span>FECHA DE CIERRE:</h3>
                {{ $selectedOffer->closing_date }}
                <div class="buttons">
                    <form action="{{ route('candidate.postulation', ['user' => $user->id, 'offer' => $selectedOffer]) }}" method="POST">
                        @csrf
                        <button class="btn-postulation">POSTULARME</button>
                    </form>                    
                    <button class="back-btn">
                        ATRÁS
                    </button>
                </div>
            @else
                <p>No se ha seleccionado ninguna oferta.</p>
            @endif
        </div>
    </div>


    {{-- <script>
        $(document).ready(function() {
            // OCULTAR EL 2 CONTENEDOR
            $('.right-container').hide();

            // CLICK BOTON VER
            $('.show-btn').on('click', function() {
                // OCULTAR EL RIMER CONTENEDOR
                $('.left-container').hide();
                // MOSTRAR EL SEGUNDO CONTENEDOR
                $('.right-container').show();
            });
        });
    </script> --}}

</div>
