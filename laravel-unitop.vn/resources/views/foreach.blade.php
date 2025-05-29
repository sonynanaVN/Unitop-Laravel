@foreach($users as $user)
    <p>{{ $user['name'] }}</p>
    <p>{{ $user['email'] }}</p>
@endforeach

@php
 foreach($users as $user)
    echo $user['name'];
    echo $user['email'];
@endphp