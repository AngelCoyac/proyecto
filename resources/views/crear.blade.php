<form action="{{ route('departamentos.guardar') }}" method="POST">
    @csrf

    <div>
        <label for="nombre">Nombre del departamento:</label>
        <input type="text" id="nombre" name="nombre" required>
    </div>

    <button type="submit">Guardar</button>
</form>
