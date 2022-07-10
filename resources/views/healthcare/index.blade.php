<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>healthcare</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        
    </head>
    <body>
        <h1>日々の数値から生活習慣を防ごう！</h1>
        
        <div class='healthcareUsers'>
            @foreach($healthcare as $healthcareuser)
              <div class= 'healthcareuser'>
                  <p class= 'ユーザID'>{{ $healthcareuser->id }}</p>
                  <p class= 'ユーザネーム'>{{ $healthcareuser->name }}</p>
              </div>
            @endforeach
        </div>
    </body>
</html>
