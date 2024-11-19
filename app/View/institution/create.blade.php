<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Institución</title>
</head>
<body>
    <h1>Registrar Institución</h1>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <form action="{{ route('institutions.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="name">Nombre:</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}" required>
            @error('name')<span style="color: red;">{{ $message }}</span>@enderror
        </div>

        <div>
            <label for="address">Dirección:</label>
            <input type="text" id="address" name="address" value="{{ old('address') }}" required>
            @error('address')<span style="color: red;">{{ $message }}</span>@enderror
        </div>

        <div>
            <label for="logo">Logo:</label>
            <input type="file" id="logo" name="logo" accept="image/*">
            @error('logo')<span style="color: red;">{{ $message }}</span>@enderror
        </div>

        <div>
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required>
            @error('password')<span style="color: red;">{{ $message }}</span>@enderror
        </div>

        <div>
            <label for="password_confirmation">Confirmar Contraseña:</label>
            <input type="password" id="password_confirmation" name="password_confirmation" required>
        </div>

        <div>
            <label for="admin_name">Nombre del Administrador:</label>
            <input type="text" id="admin_name" name="admin_name" value="{{ old('admin_name') }}" required>
            @error('admin_name')<span style="color: red;">{{ $message }}</span>@enderror
        </div>

        <div>
            <label for="admin_email">Correo del Administrador:</label>
            <input type="email" id="admin_email" name="admin_email" value="{{ old('admin_email') }}" required>
            @error('admin_email')<span style="color: red;">{{ $message }}</span>@enderror
        </div>

        <div>
            <label for="admin_user_id">ID de Usuario del Administrador:</label>
            <input type="number" id="admin_user_id" name="admin_user_id" value="{{ old('admin_user_id') }}" required>
            @error('admin_user_id')<span style="color: red;">{{ $message }}</span>@enderror
        </div>

        <div>
            <label for="school_number">Número de Escuela:</label>
            <input type="text" id="school_number" name="school_number" value="{{ old('school_number') }}" required>
            @error('school_number')<span style="color: red;">{{ $message }}</span>@enderror
        </div>

        <div>
            <label for="address_number">Número de Dirección:</label>
            <input type="text" id="address_number" name="address_number" value="{{ old('address_number') }}" required>
            @error('address_number')<span style="color: red;">{{ $message }}</span>@enderror
        </div>

        <button type="submit">Registrar</button>
    </form>
</body>
</html>
