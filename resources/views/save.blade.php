<!DOCTYPE html>
<html>
<head>
    <title>Saved Messages</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; background-color: #f9f9f9; }
        .message { border-bottom: 1px solid #ccc; padding: 10px 0; background: white; border-radius: 6px; margin-bottom: 15px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
        .message:last-child { border-bottom: none; }
        .name { font-weight: bold; color: #ff6600; /* orange */ }
        .email { color: #228B22; /* forest green */ font-style: italic; }
        .date { font-size: 0.9em; color: #999; margin-top: 5px; }
        h1 { color: #333; border-bottom: 2px solid #ff6600; padding-bottom: 10px; }
    </style>
</head>
<body>
    <h1>Saved Messages</h1>

    @if(count($messages) > 0)
        @foreach($messages as $msg)
            <div class="message">
                <div class="name">Name: {{ $msg['name'] }}</div>
                <div class="email">Email: {{ $msg['email'] }}</div>
                <div>Message: {{ $msg['message'] }}</div>
                <div class="date">Submitted at: {{ $msg['submitted_at'] }}</div>
            </div>
        @endforeach
    @else
        <p>No messages saved yet.</p>
    @endif
</body>
</html>
