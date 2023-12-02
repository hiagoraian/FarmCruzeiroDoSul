<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">{{ __('Detalhes do Equino') }}</h2>

                    <ul>
                        <li>Nome: {{ $equine->name}}</li>
                        <li>Raça: {{ $equine->race}}</li>
                        <li>Pai: {{ $equine->father}}</li>
                        <li>Mãe: {{ $equine->mother}}</li>
                        <li>Descrição: {{ $equine->description}}</li>
                        <li>Idade: {{ $equine->age}}</li>
                        <li>Sexo: {{ $equine->gender}}</li>
                    </ul>
                    <div class="container-flex">
                        <div>
                        <form action="{{route('dashboard.equines.destroy', $equine->id)}}" method="POST">
                            @csrf()
                            @method('DELETE')
                            <button class="btn" type="submit">Deletar</button>
                        </form>
                        </div>
                        <div style="padding-left: 16px;">
                            <a href="{{route('dashboard.equines.edit', $equine->id)}}"><button class="btn" type="submit">Editar</button></a>
                        </div>
                        <div style="padding-left: 16px;">
                            <a href="{{route('dashboard')}}"><button class="btn" type="submit">Voltar</button></a>
                        </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<style>
    .container-flex{
        display: flex;
    }
    ul{
        margin-bottom: 32px;
    }
    h2{
        color:#ddd;
        margin-bottom: 32px;
    }
    li{
        font-size: 16px;
        padding-bottom: 8px;
        color: #ddd;
    }

    .btn {
        display: inline-block;
        padding: 4px 16px;
        background-color: rgb(59 130 246 / .5);
        color: #fff;
        text-decoration: none;
        border-radius: 5px;
        transition: background-color 0.3s;
    }
</style>
