<div class="border border-gray-300 rounded p-4 bg-gray-50 shadow-md">
    <h2 class="text-2xl font-bold mb-2">{{ $local }} vs {{ $visitant }}</h2>
    <p><strong>Data:</strong> {{ $data }}</p>
    <p>
        <strong>Resultat:</strong> 
        @if($resultat)
            {{ $resultat }}
        @else
            <span class="text-gray-500">Pendent</span>
        @endif
    </p>
</div>
