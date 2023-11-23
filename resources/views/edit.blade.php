<form action="{{ route('anabolicos.update', $anabolico->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="nombre" value="{{ $anabolico->nombre }}">
    <input type="text" name="tipo" value="{{ $anabolico->tipo }}">
    <textarea name="descripcion">{{ $anabolico->descripcion }}</textarea>
    <button type="submit">Actualizar</button>
</form>
