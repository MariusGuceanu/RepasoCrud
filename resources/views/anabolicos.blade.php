<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Esteroides Anabolicos') }}
        </h2>
    </x-slot>
    <table style="border:solid; margin-left: 5%; border-top: 5%;">
        <thead style="border:solid;">
            <tr style="border:solid;">
                <th style="border:solid;">ID</th>
                <th style="border:solid;">Nombre</th>
                <th style="border:solid;">Tipo</th>
                <th style="border:solid;">Descripción</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody style="border:solid;">
            @foreach ($anabolicos as $anabolico)
            <tr style="border:solid;">
                <td style="border:solid;">{{ $anabolico->id }}</td>
                <td style="border:solid;">{{ $anabolico->nombre }}</td>
                <td style="border:solid;">{{ $anabolico->tipo }}</td>
                <td style="border:solid;">{{ $anabolico->descripcion }}</td>
                <td style="border:solid;">
                    <form style="display: inline-block;" action="{{ route('anabolicos.edit', $anabolico->id) }}"
                        method="GET">
                        @csrf
                        <button type="submit">Modificar</button>
                    </form>
                    <form style="display: inline-block;" action="{{ route('anabolicos.destroy', $anabolico->id) }}"
                        method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <a style="margin:auto; border:solid; margin:5%" href="{{ route('anabolicos.create') }}">Agregar Anabólico</a>
</x-app-layout>