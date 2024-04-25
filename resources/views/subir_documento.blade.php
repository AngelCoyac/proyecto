<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir Documento</title>
</head>
<body>
    <h1>Subir Documento</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('subir_documento') }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="documento">
        <br>
        <button type="submit">Subir Documento</button>
    </form>
</body>
</html>
