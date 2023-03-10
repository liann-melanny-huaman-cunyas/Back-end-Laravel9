@extends('template')
@section('content')

<div class="max-w-2xl mx-auto">
    <div class="max-w-3xl flex content-center text-center">
            <h3 class="text-cyan-600 max-w-max flex content-center text-center text-5xl ml-15 mb-8">   Paciente Nº {{ $gatos->id }} :  {{ $gatos->gatos }}</h3>
    </div>
	<div class="grid grid-cols-1 gap-4 mb-4 ">
        <p class="first-letter:leading-loose text-lg text-gray-700">
            <strong class="text-cyan-700">
                Nombre del dueño :
            </strong>
            {{ $gatos ->name }}
        </p>
        <p class="first-letter:leading-loose text-lg text-gray-700">
            <strong class="text-cyan-700">
                Edad :
            </strong>
            {{ $gatos ->edad }}
        </p>
        <p class="first-letter:leading-loose text-lg text-gray-700">
            <strong class="text-cyan-700">
                Descripcion :
            </strong>
            {{  $gatos->caracteristica }}
        </p>
	</div>
</div>
            <!-- Las variables ya se asignan sin corchetes
                @if ($gatos->edad <= 1)
                    <p>comida para gatitos</p>
                @else
                    <p>comida para gatotes</p>
                @endif
            -->
    @endsection

