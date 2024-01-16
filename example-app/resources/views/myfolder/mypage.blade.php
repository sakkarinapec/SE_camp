

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table</title>
</head>
<body>
    <h1>แม่สูตรคูณ แม่1-24</h1>

    <form action="{{ url('/my-route') }}" method="post">
        @csrf
        <label for="myinput">Enter a number (1-24): </label>
        <input type="number" name="myinput" min="1" max="24" required>
        <button type="submit">Enter</button>
    </form>
</body>
</html>




