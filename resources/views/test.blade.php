<!-- <h1>This is the learning for redirect</h1>
<a href="{{route('testing')}}">Click here to go to the testing</a> -->

@foreach($students as $student)
    <p>{{$student['name']}}</p>
    @if($student['marks']>=45)
        <i>Pass</i>
    @elseif($student['marks']<45)
        <i>Failed</i>
    @endif
@endforeach