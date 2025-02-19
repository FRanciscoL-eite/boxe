<x-guest-layout>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $fighter['name'] }}</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f4f4; text-align: center; }
        .container { width: 50%; margin: auto; background: white; padding: 20px; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); }
        img { width: 150px; border-radius: 10px; }
        .record { font-size: 24px; font-weight: bold; }
        .details { text-align: left; margin-top: 20px; }
        .details p { margin: 5px 0; }
    </style>
</head>
<body>
    <div class="container">
        <h1>{{ $fighter['name'] }}</h1>
        <img src="{{ $fighter['image'] }}" alt="{{ $fighter['name'] }}">
        <p class="record">{{ $fighter['record'] }} ({{ $fighter['ko'] }})</p>
        <p>Division: {{ $fighter['division'] }}</p>
        <p>Rating: ⭐⭐⭐⭐⭐</p>
        
        <div class="details">
            <p><strong>Bouts:</strong> {{ $fighter['bouts'] }}</p>
            <p><strong>Rounds:</strong> {{ $fighter['rounds'] }}</p>
            <p><strong>KO Percentage:</strong> {{ $fighter['ko_percentage'] }}</p>
            <p><strong>Career:</strong> {{ $fighter['career'] }}</p>
            <p><strong>Debut:</strong> {{ $fighter['debut'] }}</p>
            <p><strong>Titles:</strong> {{ $fighter['titles'] }}</p>
            <p><strong>Nationality:</strong> {{ $fighter['nationality'] }}</p>
            <p><strong>Stance:</strong> {{ $fighter['stance'] }}</p>
            <p><strong>Height:</strong> {{ $fighter['height'] }}</p>
            <p><strong>Reach:</strong> {{ $fighter['reach'] }}</p>
            <p><strong>Residence:</strong> {{ $fighter['residence'] }}</p>
            <p><strong>Birth Place:</strong> {{ $fighter['birth_place'] }}</p>
        </div>
    </div>
</body>
</html>
</x-guest-layout>