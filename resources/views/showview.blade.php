@php
    $usercount = count($users);
@endphp

@if($id >= $usercount)
    <h1>User not found</h1>
@else
    <h1>{{ $users[$id] }}</h1>
@endif