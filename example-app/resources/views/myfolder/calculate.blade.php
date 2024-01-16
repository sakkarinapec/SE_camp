
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ผลคูณสำหรับ {{ $number }}</title>
</head>
<body>
    <h1>ตารางการคูณสำหรับ {{ $number }}</h1>
    
    <table border="1">
        <tr>
            <th>ตัวคูณ</th>
            <th>ผลลัพธ์</th>
        </tr>
        @for ($i = 1; $i <= 12; $i++)
            <tr>
                <td>{{ $i }}</td>
                <td>{{ $number * $i }}</td>
            </tr>
        @endfor
    </table>
</body>
</html>
