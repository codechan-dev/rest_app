<x-app-layout>
<div>
    <table style="border:1;">
        <tr>
            <th>id </th>
            <th>name</th>
            <th>email</th>
            <th>created at</th>
        </tr>
        @foreach($data as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->email}}</td>
            <td>{{$item->created_at}}</td>
        </tr>
        @endforeach
    </table>
   
</div>

</x-app-layout>