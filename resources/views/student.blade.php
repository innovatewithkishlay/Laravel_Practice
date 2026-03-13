<h2>Course Sections</h2>

@foreach($course as $key => $value)
    <p>{{ $key }} : {{ $value }}</p>
@endforeach
