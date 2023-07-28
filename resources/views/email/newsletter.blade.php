{{-- email/newsletter.blade.php --}}

{{-- <!DOCTYPE html>
<html>
<head>
    <title>Newsletter</title>
</head>
<body>
    <h1>{{ $emailContent['title'] }}</h1>
    <p>{{ $emailContent['content'] }}</p>
</body>
</html> --}}

<!DOCTYPE html>
<html>
<head>
    <title>Newsletter</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <h1>{{ $emailContent['title'] }}</h1>
        <p>{{ $emailContent['content'] }}</p>
        <!-- Unsubscribe Button -->
        <form action="{{ url('unsubscribe') }}" method="POST">
            @csrf
            <input type="hidden" name="email" value="{{ $email }}">
            <button type="submit" class="btn btn-danger">Unsubscribe</button>
        </form>
    </div>
</body>
</html>
