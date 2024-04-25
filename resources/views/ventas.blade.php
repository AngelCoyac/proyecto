<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
          
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 20px;
}

.container {
    width: 80%;
    max-width: 1200px;
    margin: 0 auto;
    background-color: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
}

h1 {
    color: #333;
    text-align: center;
}

.document-list {
    margin-top: 20px;
}

.document-item {
    background-color: #e9ecef;
    margin-bottom: 10px;
    padding: 10px;
    border-radius: 4px;
    display: flex;
    justify-content: space-between;  
    align-items: center;  
}

.document-item a {
    text-decoration: none;
    color: #007bff;
}

.document-item a:hover {
    text-decoration: underline;
}

.document-item .btn-primary {
    margin-left: auto; 
}

    </style>
</head>
<body>
<h1>Ventas y Marketing</h1>

<div class="container">
   
@if(isset($documentos) && $documentos->isNotEmpty())
    @foreach($documentos as $documento)
        <div class="document-item">
            <a href="{{ asset('storage/' . $documento->ruta_archivo) }}">
                {{ $documento->titulo }}
            </a>

            <a href="{{ route('documentos.descargar', ['id' => $documento->id]) }}" class="btn btn-primary" download>
                Descargar
            </a>
        </div>
    @endforeach
@else
    <p>No hay documentos disponibles.</p>
@endif

</div>
</body>
</html>