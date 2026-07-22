<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo mensaje desde el portfolio</title>
</head>
<body style="margin:0; padding:24px; background-color:#0d1117; font-family:'JetBrains Mono', Consolas, monospace; color:#e6edf3;">

    <div style="max-width:560px; margin:0 auto; background-color:#161b22; border:1px solid #30363d; border-radius:8px; padding:24px;">

        <p style="margin:0 0 24px; color:#00c9a7; font-size:14px;">
            // nuevo mensaje desde el portfolio
        </p>

        <p style="margin:0 0 4px; color:#8b949e; font-size:12px;">Nombre</p>
        <p style="margin:0 0 18px; font-size:14px;">{{ $nombre }} {{ $apellido }}</p>

        <p style="margin:0 0 4px; color:#8b949e; font-size:12px;">Email</p>
        <p style="margin:0 0 18px; font-size:14px;">
            <a href="mailto:{{ $email }}" style="color:#00f5d4; text-decoration:none;">{{ $email }}</a>
        </p>

        <p style="margin:0 0 4px; color:#8b949e; font-size:12px;">Mensaje</p>
        <p style="margin:0; font-size:14px; line-height:1.6; white-space:pre-wrap;">{{ $mensaje }}</p>

    </div>

</body>
</html>