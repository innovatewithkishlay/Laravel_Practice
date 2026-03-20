@php
    $usercount = count($users);
@endphp

@if($id >= $usercount)
    <h1>Oooops not found</h1>
@else
    <h1>{{ $users[$id] }}</h1>
@endif

@php
$fact=1;
@endphp
@for($i=1;$i<=10;$i++)
    @php
    $fact=$fact*$i;
    @endphp

@endfor
<h1>Factorial of 10 is {{$fact}}</h1>

@for($i=1;$i<=$id;$i++)
    <h3>hello</h3>

@endfor