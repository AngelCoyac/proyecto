
<style>
    body {
        font-family: 'Arial', sans-serif;
        background-color: #f4f4f4;
    }

    .formulario_dep {
        width: 300px;
        margin: 0 auto;
        border-radius: 12px;
        margin-top: 5%;
        padding: 20px;
        background: white;
        box-shadow: 0 0 15px rgba(0,0,0,0.2);
    }

    .formulario_dep label {
        display: block;
        margin-bottom: 10px;
        color: #333;
        font-weight: bold;
    }

    .formulario_dep input[type="text"],
    .formulario_dep input[type="file"],
    .formulario_dep select {
        width: calc(100% - 20px);
        padding: 10px;
        margin-bottom: 15px;
        border: 2px solid #ddd;
        border-radius: 4px;
        transition: border-color 0.3s;
    }

    .formulario_dep input[type="text"]:focus,
    .formulario_dep input[type="file"]:focus,
    .formulario_dep select:focus {
        border-color: #0056b3;
        outline: none;
    }

    .formulario_dep button {
        width: 100%;
        padding: 10px;
        background-color: #007bff;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .formulario_dep button:hover {
        background-color: #0056b3;
    }
</style>


<div class="formulario_dep">
    <form action="{{ route('documentos.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="titulo">Título:</label>
        <input type="text" name="titulo" id="titulo" required>

        <label for="archivo">Archivo:</label>
        <input type="file" name="archivo" id="archivo" required>

        <label for="departamento_id">Departamento:</label>
        <select name="departamento_id" id="departamento_id" required>
            @foreach ($departamentos as $departamento)
                <option value="{{ $departamento->id }}">{{ $departamento->nombre }}</option>
            @endforeach
        </select>

        <button type="submit">Subir Documento</button>
    </form>
</div>
