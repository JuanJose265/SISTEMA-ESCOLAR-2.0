<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Institución</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
        }

        h1 {
            text-align: center;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: 0 auto;
        }

        div {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"],
        input[type="number"],
        input[type="file"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="file"] {
            padding: 4px;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            background-color: #45a049;
        }

        .error {
            color: red;
            font-size: 0.9em;
        }

        .success {
            color: green;
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <h1>Registrar Institución</h1>

    @if(session('success'))
        <p class="success">{{ session('success') }}</p>
    @endif

    <form action="{{ route('institutions.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="name">Nombre:</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}" required>
            @error('name')<span class="error">{{ $message }}</span>@enderror
        </div>

        <div>
            <label for="address">Dirección:</label>
            <input type="text" id="address" name="address" value="{{ old('address') }}" required>
            @error('address')<span class="error">{{ $message }}</span>@enderror
        </div>

        <div>
            <label for="logo">Logo:</label>
            <input type="file" id="logo" name="logo" accept="image/*">
            @error('logo')<span class="error">{{ $message }}</span>@enderror
        </div>

        <div>
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required>
            @error('password')<span class="error">{{ $message }}</span>@enderror
        </div>

        <div>
            <label for="password_confirmation">Confirmar Contraseña:</label>
            <input type="password" id="password_confirmation" name="password_confirmation" required>
        </div>

        <div>
            <label for="admin_name">Nombre del Administrador:</label>
            <input type="text" id="admin_name" name="admin_name" value="{{ old('admin_name') }}" required>
            @error('admin_name')<span class="error">{{ $message }}</span>@enderror
        </div>

        <div>
            <label for="admin_email">Correo del Administrador:</label>
            <input type="email" id="admin_email" name="admin_email" value="{{ old('admin_email') }}" required>
            @error('admin_email')<span class="error">{{ $message }}</span>@enderror
        </div>

        <div>
            <label for="admin_user_id">ID de Usuario del Administrador:</label>
            <input type="number" id="admin_user_id" name="admin_user_id" value="{{ old('admin_user_id') }}" required>
            @error('admin_user_id')<span class="error">{{ $message }}</span>@enderror
        </div>

        <div>
            <label for="school_number">Número de Escuela:</label>
            <input type="text" id="school_number" name="school_number" value="{{ old('school_number') }}" required>
            @error('school_number')<span class="error">{{ $message }}</span>@enderror
        </div>

        <div>
            <label for="address_number">Número de Dirección:</label>
            <input type="text" id="address_number" name="address_number" value="{{ old('address_number') }}" required>
            @error('address_number')<span class="error">{{ $message }}</span>@enderror
        </div>

        <button type="submit">Registrar</button>
    </form>
</body>
</html>
