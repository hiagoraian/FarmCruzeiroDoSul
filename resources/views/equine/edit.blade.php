<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">{{ __('Editar Equino') }}</h2>
                <form method="post" action="{{route('dashboard.equines.update', $equine->id)}}" class="mt-6 space-y-6">
                    @csrf()
                    @method('PUT')

                    <div>
                        <x-input-label for="name" :value="__('Nome')" />
                        <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" value="{{$equine->name}}"  />
                    </div>
                    <div>
                        <x-input-label for="race" :value="__('Raça')" />
                        <x-text-input id="race" name="race" type="text" class="mt-1 block w-full"  value="{{$equine->race}}"/>
                    </div>
                    <div>
                        <x-input-label for="father" :value="__('Pai')" />
                        <x-text-input id="father" name="father" type="text" class="mt-1 block w-full"  value="{{$equine->father}}"/>
                    </div>

                    <div>
                        <x-input-label for="mother" :value="__('Mãe')" />
                        <x-text-input id="mother" name="mother" type="text" class="mt-1 block w-full"  value="{{$equine->mother}}"/>
                    </div>
                    <div>
                        <x-input-label for="description" :value="__('Descrição')" />
                        <x-text-input id="description" name="description" type="text" class="mt-1 block w-full"  value="{{$equine->description}}"/>
                    </div>
                    <div>
                        <x-input-label for="age" :value="__('Idade')" />
                        <x-text-input id="age" name="age" type="text" class="mt-1 block w-full" value="{{$equine->age}}" />
                    </div>
                    <div>
                        <x-input-label for="gender" :value="__('Sexo')" />
                        <x-text-input id="gender" name="gender" type="text" class="mt-1 block w-full" value="{{$equine->gender}}" />
                    </div>

                    <button class="btn-create" type="submit">Editar</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<style>
    .btn-create {
    display: inline-block;
    padding: 4px 16px;
    background-color: rgb(59 130 246 / .5);
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s;
}
</style>

