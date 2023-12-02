<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">{{ __('Adicionar novo produto') }}</h2>
                <form method="post" action="{{ route('dashboard.product.store') }}" class="mt-6 space-y-6">
                    @csrf

                    <div>
                        <x-input-label for="name" :value="__('Nome')" />
                        <x-text-input id="name" name="name" type="text" class="mt-1 block w-full"  />
                    </div>
                    <div>
                        <x-input-label for="description" :value="__('Descrição')" />
                        <x-text-input id="description" name="description" type="text" class="mt-1 block w-full"  />
                    </div>

                    <button class="btn-create" type="submit">Adicionar</button>
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

