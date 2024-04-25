<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           Departamentos  
        </h2>
        <a class="boton1" href="{{ route('documents.create') }}">Agregar Documento</a>
    </x-slot>
    <link rel="stylesheet" href="{{asset('assetss/estilo.css')}}">
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <!-- Mostrar la imagen y el nombre de cada departamento -->
                <div class="depa">
                    <a href="{{route('finanzas')}}">
                    <img src="{{asset('imagenes/finanzas.jpg')}}" alt="Imagen de departamento" >
                    <center><h1>Finanzas</h1></center>
                    </a>
                </div>

                <div class="depa">
                <a href="{{route('RecursosHumanos')}}">
                    <img src="{{asset('imagenes/recursos.jpg')}}" alt="Imagen de departamento">
                    <center><h1>Recursos Humanos</h1></center>
                </a>
                </div>

                <div class="depa">
                <a href="{{route('tecnologias')}}">
                    <img src="{{asset('imagenes/tecnologias.jpg')}}" alt="Imagen de departamento">
                    <center><h1>Tecnologías</h1></center>
                    </a>
                </div>

                <div class="depa">
                <a href="{{route('administracion')}}">
                    <img src="{{asset('imagenes/administracion.jpg')}}" alt="Imagen de departamento">
                    <center><h1>Adminitración</h1></center>
                    </a>
                </div>

                <div class="depa">
                <a href="{{route('legal')}}">
                    <img src="{{asset('imagenes/leyes.jpg')}}" alt="Imagen de departamento">
                    <center><h1>Legal y Cumplimiento</h1></center>
                    </a>
                </div>

                <div class="depa">
                <a href="{{route('ventas')}}">
                    <img src="{{asset('imagenes/marketing.jpg')}}" alt="Imagen de departamento">
                    <center><h1>Ventas y Marketing</h1></center>
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
