<html>
<head>
    <title>Get Data</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Soal Pertama</h1>
    <h2>Kelipatan:</h2>
    @foreach ($multiples as $key => $values)
        <p>Kelipatan {{ $key }} : 
            @foreach ($values as $value)
                <span style="color: {{ $colors[$key - 2] }}">{{ $value }}</span> 
            @endforeach
        </p>
    @endforeach

    <h2>Daftar:</h2>
    <table>
        <tr>
            <th>Group</th>
            <th>NIK</th>
            <th>Nama</th>
        </tr>
        @foreach ($groups as $groupIndex => $group)
            <tr>
                <td>Group {{ $groupIndex }}</td>
            </tr>
            @foreach ($group as $person)
                <tr>
                    <td></td>
                    <td>{{ $person['NIK'] }}</td>
                    <td>{{ $person['Nama'] }}</td>
                </tr>
            @endforeach
        @endforeach
    </table>
</body>
</html>
