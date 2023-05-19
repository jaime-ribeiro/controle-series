<x-layout title="Séries">
    <ul>
        @foreach ($series as $serie)
            <li>{{ $serie }}</li>
        @endforeach
    </ul>

    {{-- o blade vai ignorar o {{nome}} e não vai considerar ele como variável se utilizar o @ na frente --}}
    @{{nome}}

    <script>
        const series = {{Js::from($series)}};
    </script>
</x-layout>
