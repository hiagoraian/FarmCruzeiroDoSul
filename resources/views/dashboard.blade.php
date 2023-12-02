<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Central de Controler') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div>
                    <table>
                        <thead>
                            <th>Nome</th>
                            <th>Raça</th>
                            <th>Pai</th>
                            <th>Mãe</th>
                        </thead>
                        <tbody>
                            @foreach ($equines as $equine)
                            <tr>
                                <td>{{$equine->name}}</td>
                                <td>{{$equine->race}}</td>
                                <td>{{$equine->father}}</td>
                                <td>{{$equine->mother}}</td>
                                <td>
                                    <a href=" ">Detalhes</a>
                                    <a href=" ">Editar</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    </div>
                    <div>
                    <table>
                        <thead>
                            <th>Ração</th>
                            <th>Sela</th>
                            <th>Vacinas</th>
                            <th>Acessorios</th>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                            <tr>
                                <td>{{$product->portion}}</td>
                                <td>{{$product->saddle}}</td>
                                <td>{{$product->vaccines}}</td>
                                <td>{{$product->accessories}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
