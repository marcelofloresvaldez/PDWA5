<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cadastro') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                <form action="/cadastrar" method="post">
                    @csrf <!-- token de formulario -->
                    <!-- titulo -->
                    <div>
                    <x-input-label for="titulo" :value="__('Titulo (ate 100 caracteres)')" />
                    <x-text-input id="titulo" class="block mt-1 w-full" type="text" name="titulo" :value="old('titulo')" maxlengeth="100" required autofocus autocomplete="titulo" />
                    <x-input-error :messages="$errors->get('titulo')" class="mt-2" />
                    </div>

                    <!-- diretor -->
                    <div>
                    <x-input-label for="diretor" :value="__('Diretor ')" />
                    <x-text-input id="diretor" class="block mt-1 w-full" type="text" name="diretor" :value="old('diretor')" maxlengeth="100" required autofocus autocomplete="diretor" />
                    <x-input-error :messages="$errors->get('diretor')" class="mt-2" />
                    </div>

                    <!-- data released -->
                    <div class="mt-4">
                    <x-input-label for="dataReleased" :value="__('Data de Lançamento')" />
                    <x-text-input id="dataReleased" class="block mt-1 w-full" type="date" name="dataReleased" :value="old('dataReleased')" required autocomplete="dataReleased" />
                    <x-input-error :messages="$errors->get('dataReleased')" class="mt-2" />
                    </div>


                    <!-- Tempo duraçao em mimutos -->
                    <div class="mt-4">
                    <x-input-label for="duracaoMinutos" :value="__('Duraçao em Minutos')" />
                    <x-text-input id="duracaoMinutos" class="block mt-1 w-full" type="number" name="duracaoMinutos" :value="old('duracaoMinutos')" required autocomplete="duracaoMinutos" />
                    <x-input-error :messages="$errors->get('duracaoMinutos')" class="mt-2" />
                    </div>

                    <!-- Cartaz -->
                    <div class="mt-4">
                    <x-input-label for="estreia" :value="__('Filme em Cartaz')" />
                    <input id="estreiaTrue"  type="radio" name="estreia" value="1" {{ old('booleano') == '1' ? 'checked' : ''  }} /> Sim
                    <input id="estreiaTrue"  type="radio" name="estreia" value="0" {{ old('booleano') == '0' ? 'checked' : ''  }} /> Nao
                    <x-input-error :messages="$errors->get('estreia')" class="mt-2" />
                    </div>
                    <div class="flex items-center justify-end mt-4 ">
                        <x-primary-button class="ms-4">
                            {{__('Cadastrar')  }}
                        </x-primary-button>

                    </div>


                   
                </form>        

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
