<x-app-layout>
    <div class="py-12 h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="text-lg p-7 font-medium text-framboise">
                    {{ __("Historique de prise de rendez vous") }}
                </div>
                    <div>
                    @if($appointements->isEmpty())
                        <p class="ps-5 py-5 font-folty text-framboise border-solid mb-4">Vous n'avez pris aucun rendez vous pour le moment</p>
                    @else
                        @foreach ($appointements as $appointement)
                            <div class="ps-5 py-5 font-folty text-framboise border-solid border-2 border-framboise mb-4">
                                <h2>Demande de rendez vous du {{\Carbon\Carbon::parse($appointement->horairedebut)->format('d/m/Y')}}</h2>
                                <h2> Début à {{ \Carbon\Carbon::parse($appointement ->horairedebut)->format('H:i') }} - Fin à {{ \Carbon\Carbon::parse($appointement-> horairefin)->format('H:i')}} </h2>
                                @if($appointement->Validation)
                                    <p>Validation: Validé</p>
                                @else
                                    <p>Validation: Non validé</p>
                                @endif
                                <p> Commentaire de Terradouceurs : {{ $appointement-> Commentaire}}</p>
                            </div>
                        @endforeach
                    @endif
                    </div>
            </div>
        </div>
    </div>
</x-app-layout>
