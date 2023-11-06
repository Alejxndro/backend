<?php

namespace App\Http\Controllers;
use App\Models\Reserva;
use Illuminate\Http\Request;

class reservaController extends Controller
{
    public function index()
    {
         // Obtener todos los productos de la base de datos
         $reserva = reserva::all();

         // Retornar los productos como respuesta
         return $reserva;
    }
    /**
     * Store  
     */
    public function store(Request $request)
    {
        $reserva = new reserva ($request->all());
        $reserva->save();
        return redirect()->action([reservaController::class, 'index']);
    }


    /**
     * Display 
     */
    public function show(string $id)
    {
        $reserva =  reserva::find($id);
        return $reserva;
    }

    

    /**
     * Update 
     */
    public function update(Request $request, string $id)
    {
    
    }

    /**
     * delete
     */
    public function destroy(string $id)
    {
        // Encuentra la categoría por su ID
        $reserva = reserva::find($id);
         // Verifica si la categoría existe
         if (!$reserva) {
            return response()->json(['mensaje' => 'reserva no encontrada'], 404);
        }

        // Realiza la eliminación
        $reserva->delete();

        // Retorna una respuesta
        return response()->json(['mensaje' => 'reserva eliminada'], 200);

    }
}
