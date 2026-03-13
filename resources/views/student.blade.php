<h2>Course Sections</h2>

@foreach($courses as $key => $value)
    <p>{{ $key }} : {{ $value }}</p>
@endforeach
