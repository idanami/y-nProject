<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/app.css">
    <title>Y&A Poll App</title>
</head>
<body>
    <h3>Y&A Project</h3>
    @foreach ($polls as $poll)
        <h4 class="options-title">{{ $poll->title }}</h4>
        <form action="/api/poll/" id="new_vote_added{{$poll->id}}" class="new_vote_added" method="GET" enctype="multipart/form-data">
            @csrf
            @forelse ($poll->options as $option)
                <div class="options-container">
                    <input type="radio" name="radio_option" id="radioOption{{ $option->id }}" value="{{ $option->id }}"/>
                    <label for="radioOption{{ $option->id }}">{{ $option->option }} ({{ $option->pivot['votes'] }})</label>
                </div>
            @empty
                <p>no option</p>
            @endforelse

            <input type="submit" class="btn-submit__vote"value="Submit Vote">
        </form>
    @endforeach

    <script src="js/app.js"></script>
</body>
</html>
