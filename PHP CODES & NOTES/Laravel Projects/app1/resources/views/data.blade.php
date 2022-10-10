<table rules="all" width="100%">
    <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Gender</th>
    <th>Subject</th>
</tr>
@foreach($data as $key=>$value)
<tr>
    <td>{{$value['name']}}</td>
</tr>
@endforeach
</table>
