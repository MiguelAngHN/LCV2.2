@extends('layouts.hmf')

@section('title', 'Learn Cartoon / Secciones')

@section('content')

<div class="TituloPag">
    <p>Secciones</p>
    <p id="fecha-actual"></p>
    <script src="{{ asset ('assets/js/Current Date.js') }}"></script>
</div>

<div class="InfoSecciones">
    <div class="Secciones">
        <a href="{{route('seccions.numeros')}}">
            {{-- @foreach ($multimedias as $multimedia) --}}
            <img src="{{ asset('/storage/imagenes/h1z3Z1kadlKPUZTUO0fROSPFjTLNE2TyIhYFv4uC.gif') }}" alt="Gif de Números">
            {{-- @endforeach --}}
        </a>
        <p>Te gustan los números, aprende con ellos. Te brindamos
            un aprendizaje facil limitando la cantidad de números
            hasta 50. Vamos adentrate a este facinante mundo y comencemos nuestra
            aventura numérica.🎉 💯
        </p>
    </div>
    <div class="Secciones2">
        <p>Puedes distraerte, aprender y divertirte escribiendo
            como también puedes formar palabras. Conoscan sus emociones, aprendan
        más conocimientos y alimenten su imaginación.</p>
        <a href="{{route('seccions.lyp')}}">
            <img src="{{ asset('/storage/imagenes/TS8RPMo1N5fHE85UfOCV0trPeHIXdt8QpuM9tySG.gif') }}" alt="Gif de Letras"></a>
    </div>
    <div class="Secciones3">
        <a href="{{route('seccions.dibujo')}}">
            <img src="{{ asset('/storage/imagenes/w0pTyA246tcQzU3khaPRbJV49GTQs08bjZjRIuSc.gif') }}" alt="Gif de anime"></a>
        <p>Dibuja, colorea personajes de anime y animaciones.🌈 Lo mejor es
            que puedes interarctuar con ellos navegando por las
            secciones. Elige el que mas te guste y a PINTAR. 🖌️
        </p>
    </div>
</div>

@endsection