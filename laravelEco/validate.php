<?php



    namespace App\Http\Controllers;
    
    use App\Http\Requests\UserRequest;
    use App\Models\User;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Hash;
    
    class validate extends Controller
    {
        public function store(UserRequest $request)
        {
            $data = $request->validated();
            
            // Hash de la contraseña
            $data['contraseña'] = Hash::make($data['contraseña']);
            
            // Creación del usuario
            if ($data['rol'] == 'cli') {
                User::create($data);
            } else {
                \App\Models\Administrador::create($data);
            }
            
            return redirect()->back()->with('success', 'Usuario registrado exitosamente.');
        }
    }
    
    // UserRequest.php
    namespace App\Http\Requests;
    
    use Illuminate\Foundation\Http\FormRequest;
    
    class UserRequest extends FormRequest
    {
        public function authorize()
        {
            return true;
        }
    
        public function rules()
        {
            return [
                'nombre' => 'required|string|regex:/^[a-zA-Z\s]+$/',
                'apellido' => 'required|string|regex:/^[a-zA-Z\s]+$/',
                'email' => 'required|email|unique:users,email',
                'edad' => 'required|integer|min:1|max:120',
                'telefono' => 'required|digits_between:7,15',
                'genero' => 'required|in:mas,fem,otro',
                'rol' => 'required|in:adm,cli',
                'contraseña' => 'required|string|min:8|confirmed|regex:/[A-Z]/|regex:/[a-z]/|regex:/[0-9]/|regex:/[\W]/',
            ];
        }
        
        public function messages()
        {
            return [
                'nombre.regex' => 'El nombre solo puede contener letras y espacios.',
                'apellido.regex' => 'El apellido solo puede contener letras y espacios.',
                'contraseña.regex' => 'La contraseña debe contener al menos una mayúscula, una minúscula, un número y un carácter especial.',
            ];
        }
    }
    

