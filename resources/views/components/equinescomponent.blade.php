
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