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
                    <div style="display:flex;">
                        <div style="width:60%;">
                            <h2 class="text-lg font-semibold mb-4">Lista de Equinos</h2>
                            <table>
                                <thead>
                                    <tr>
                                        <th>Nome</th>
                                        <th>Raça</th>
                                        <th>Idade</th>
                                        <th>Opções</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($equines as $equine)
                                    <tr>
                                        <td>{{$equine->name}}</td>
                                        <td>{{$equine->race}}</td>
                                        <td>{{$equine->age}}</td>
                                        <td>
                                            <button class="btn">Detalhes</button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                        <div style="width:40%;">
                            <h2 class="text-lg font-semibold mb-4">Lista de Produtos</h2>
                            <table>
                                <thead>
                                    <tr>
                                        <th>Nome</th>
                                        <th>Descrição</th>
                                        <th>Opções</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $product)
                                    <tr>
                                        <td>{{$product->name}}</td>
                                        <td>{{$product->description}}</td>
                                        <td>
                                        <form action="{{route('dashboard.product.destroy', $product->id)}}" method="POST">
                                            @csrf()
                                            @method('DELETE')
                                            <button class="btn" type="submit">Deletar</button>
                                        </form>
                                
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
<style>
    table {
        width: 90%;
        border-collapse: collapse;
        margin: 20px 0;
        background-color: transparent;
        /* Alterado para transparente */
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
        overflow: hidden;
    }

    th,
    td {
        padding: 15px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    th {
        background-color: transparent;
        /* Alterado para transparente */

    }

    .btn {
        display: inline-block;
        padding: 4px 8px;
        background-color: rgb(59 130 246 / .5);
        color: #fff;
        text-decoration: none;
        border-radius: 5px;
        transition: background-color 0.3s;
    }
</style>