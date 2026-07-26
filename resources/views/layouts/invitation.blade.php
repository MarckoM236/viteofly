@php
    if (empty($arr_invitation) || count($arr_invitation) === 0) {
        echo '<div class="text-center p-5">
                <h2>Invitation no encontrada.</h2>
                <p>No existe la invitación o aún no esta lista, por favor verifique el código.</p>
              </div>';
        return;
    }

    $invitation = $arr_invitation[0];
    $theme = $invitation['theme'] ?? 'default';

    $folderPath = resource_path($invitation['folder']);
    $configPath = $folderPath . '/config.php';

    if (!is_dir($folderPath) || !is_file($configPath)) {
        echo '<div class="text-center p-5">
                <h2>Invitation no encontrada.</h2>
                <p>No existe la invitación o aún no esta lista, por favor verifique el código.</p>
              </div>';
        return;
    }

    $config = include $configPath;

    if (!is_array($config) || !isset($config['slug'], $config['name'], $config['assets'], $config['sections']) ||
        $config['slug'] !== $theme) {
        echo '<div class="text-center p-5">
                <h2>Invitation no encontrada.</h2>
                <p>No existe la invitación o aún no esta lista, por favor verifique el código.</p>
              </div>';
        return;
    }
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$config['name']}}</title>

    @vite($config['assets'])
    @vite(['resources/themes/themes.js'])
</head>
<body>
     <!-- content sections -->
    @foreach($config['sections'] as $section)
        <!-- dir themes out of views -->
        @include("themes::$theme.partials.$section")
    @endforeach

</body>
</html>