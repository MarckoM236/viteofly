@php
    $theme = isset($invitation['theme']) ? $invitation['theme'] : 'default';
    $config = include resource_path("themes/$theme/config.php");
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$config['name']}}</title>

    @vite($config['assets'])
</head>
<body>
     <!-- content sections -->
    @foreach($config['sections'] as $section)
        <!-- dir themes out of views -->
        @include("themes::$theme.partials.$section")
    @endforeach

</body>
</html>