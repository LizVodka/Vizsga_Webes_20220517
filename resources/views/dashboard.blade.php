<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tesztkérdések') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <select name="temakor" id="temakor">
                        <option value="termeszetvedelem">Természetvédelem</option>
                        <option value="kutyak">Kutyák</option>
                    </select>
                    @foreach ($kerdesek as $kerdes)
                    <div class="box container">
                        <div class="box question">{{$kerdes->kerdes}}</div>
                        <div class="box answer">{{$kerdes->v1}}</div>
                        <div class="box answer">{{$kerdes->v2}}</div>
                        <div class="box answer">{{$kerdes->v3}}</div>
                        <div class="box answer">{{$kerdes->v4}}</div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
