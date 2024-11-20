<!-- resources/views/institutions/create.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Institución</title>
</head>
<body>
    <h1>Registrar Institución</h1>

    @if(session('success'))
        <div style="color: green;">{{ session('success') }}</div>
    @endif

    <form action="{{ route('institutions.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div>
            <label for="name">Nombre:</label>
            <input type="text" name="name" id="name" required>
        </div>

        <div>
            <label for="address">Dirección:</label>
            <input type="text" name="address" id="address" required>
        </div>

        <div>
            <label for="logo">Logo:</label>
            <input type="file" name="logo" id="logo">
        </div>

        <div>
            <label for="password">Contraseña:</label>
            <input type="password" name="password" id="password" required>
        </div>

        <div>
            <label for="password_confirmation">Confirmar Contraseña:</label>
            <input type="password" name="password_confirmation" id="password_confirmation" required>
        </div>

        <div>
            <label for="admin_name">Nombre del Administrador:</label>
            <input type="text" name="admin_name" id="admin_name" required>
        </div>

        <div>
            <label for="admin_email">Correo del Administrador:</label>
            <input type="email" name="admin_email" id="admin_email" required>
        </div>

        <div>
            <label for="admin_user_id">ID de Usuario del Administrador:</label>
            <input type="number" name="admin_user_id" id="admin_user_id" required>
        </div>

        <div>
            <label for="school_number">Número de Escuela:</label>
            <input type="text" name="school_number" id="school_number" required>
        </div>

        <div>
            <label for="address_number">Número de Dirección:</label>
            <input type="text" name="address_number" id="address_number" required>
        </div>

        <button type="submit">Registrar Institución</button>
    </form>
</body>
</html>
