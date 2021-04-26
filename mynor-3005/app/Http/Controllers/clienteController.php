<?php


namespace App\Http\Controllers;

use App\Categoria;
use App\Cliente;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use App\Departamento;
use App\Genero;
use Illuminate\Support\Facades\DB;



class clienteController extends Controller
{

    public function registrarC()
    {
        //Consultamos las marcas de productos que estan en la Base de datos
        $Generos =  Genero::all();
        $Departamentos = Departamento::all();
        $Categorias = Categoria::all();

        //Se retorna la ruta y se envian los objetos o variables hacia la vista
        return view('formulario.registrarcliente', compact('Generos', 'Departamentos', 'Categorias'));

    }

    public function guardarC(Request $request)
    {

        //Validaciones del formulario
        $data = request()->all(); // termina el bloque de validaciones

        Cliente::create([
            'nit' => $data['nit'],
            'nombre' => $data['nombre'],
            'fecha_de_nacimiento' => $data['nacimiento'],
            'edad' => $data['edad'],
            'correo' => $data['correo'],
            'telefono' => $data['telefono'],
            'departamento_iddepartamento' => $data['departamento'],
            'categoria_idcategoria' => $data['categoria'],
            'genero_idgenero' => $data['genero'],



        ]);

        return redirect()->route('2')->with('success', 'Registro realizado exitosamente');

    }

    public function regis()
    {
        return view('formulario.cliente');
    }

    public function registrarCate()
    {

        return view('formulario.registrarcatego');

    }

    public function guardarCat(Request $request)
    {
        $data = request()->all();
        categoria::create([
            'des_categoria' => $data['categ'],

        ]);
        return redirect()->route('4')->with('success', 'Registro realizado exitosamente');

    }
    public function registrarDe()
    {

        return view('formulario.registrardepar');

    }

    public function guardarDe(Request $request)
    {
        $data = request()->all();
        departamento::create([
            'de_departamento'=> $data ['dep']
        ]);
        return redirect()->route('6')->with('success', 'Registro realizado exitosamente');

    }
    public function registrarge()
    {

        return view('formulario.registrargenero');

    }

    public function guardarge(Request $request)
    {
        $data = request()->all();
        genero::create([
            'des_genero' => $data['gen'],
        ]);
        return redirect()->route('8')->with('success', 'Registro realizado exitosamente');

    }

    public function MostrarC()
    {
        $clientes = DB::table('cliente')
            ->join('genero','genero.idgenero','=', 'cliente.genero_idgenero')
            ->join('departamento','departamento.iddepartamento','=', 'cliente.departamento_iddepartamento')
            ->join('categoria','categoria.idcategoria','=', 'cliente.categoria_idcategoria')
            ->select('cliente.*','genero.des_genero as genero','categoria.des_categoria as categoria', 'departamento.de_departamento as departamento')
            ->get();

        return view('formulario.mostrardatos', compact('clientes'));

    }
    public function eliminarcliente(Cliente $cliente)
    {
        $cliente->delete();
        return back()->with('succes', 'cliente eliminado correctamento');
    }

    public function MostrarCate()
    {
        $datos['Categorias']=Categoria::paginate(10);
        return view('formulario.mostrarcategoria',$datos);

    }
    public function eliminarcate(Categoria $cate)
    {
        $cate->delete();
        return back()->with('succes', 'categoria eliminado correctamento');
    }

    public function MostrarD()
    {
        $datos['departamentos']=Departamento::paginate(10);
        return view('formulario.mostrardepar',$datos);

    }
    public function eliminarde(departamento $depa)
    {
        $depa->delete();
        return back()->with('succes', 'departamento eliminado correctamento');
    }

    public function Mostrargene()
    {
        $datos['generos']=Genero::paginate(10);
        return view('formulario.mostrargenero',$datos);
    }

    public function eliminarge(genero $genero1)
    {
        $genero1->delete();
        return back()->with('succes', 'cliente eliminado correctamento');
    }


}
