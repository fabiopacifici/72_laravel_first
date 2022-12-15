<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Page</title>
</head>

<body>
  <header>
    <nav class="nav justify-content-center">
      <a class="nav-link active" href="{{ route('home') }}">Home</a>
      <a class="nav-link" href="{{ route('about') }}">About</a>
    </nav>
  </header>
  <main>

    <h1>{{$page_title}}</h1>
    <p>{{$description}}</p>

    <div class="students">
      <!--  Loop over the students array -->
      <h2>Students (con foreach)</h2>

      <ul>

        @foreach($students as $student)
        <li>{{$student}}</li>
        @endforeach

      </ul>
    </div>


    <div class="teachers">
      <h2>Teachers</h2>
      @if(count($teachers) > 0)
      <ul>

        @foreach($teachers as $teacher)
        <li>{{$teacher}}</li>
        @endforeach
      </ul>
      @else
      <p>No teachers for this class yet!</p>
      @endif
    </div>


    <div class="teachers">
      <h2>Teacher (with forelse)</h2>
      <ul>
        @forelse($teachers as $teacher)
        <li>{{$teacher}}</li>
        @empty
        <li>No teachers</li>
        @endforelse
      </ul>
    </div>

  </main>

</body>

</html>
