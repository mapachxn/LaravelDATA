<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PrincipalController extends Controller
{
    //
    public function index()
    {
        return view("index");
    }
    public function cruds()
    {
        return view("cruds.index");
    }
    #función para realizar la descarga de la base de datos
    public function descarga()
    {
        #$servicios = Usuario::all();
        #return view("vista", compact("servicios")).

        $ubicacionDescarga = getcwd() . DIRECTORY_SEPARATOR . "RespaldoBD_" . date("Y-m-d") . "_Encuentratucuarto.sql";
        $salida = "";
        $codigoSalida = 0;
        $comando = sprintf("%s --user=\"%s\" --password=\"%s\" %s > %s", env("UBICACION_MYSQLDUMP"), env("DB_USERNAME"), env("DB_PASSWORD"), env("DB_DATABASE"), $ubicacionDescarga);
        exec($comando, $salida, $codigoSalida);
        if ($codigoSalida !== 0) {
            return "Código de salida distinto de 0, se obtuvo código (" . $codigoSalida . "). Revise los ajustes e intente de nuevo";
        }
        return response()->download($ubicacionDescarga)->deleteFileAfterSend(true);
    }

    #función para mostrar la base de datos
    public function verbd()
    {
        return view("basededatos");
    }



    #views de la base de datos
    #se crearon como migraciones, en caso de consultar los comandos de MySQL

    #para que funcionen, se hace un llamado a la base de datos especificando la view y la mandamos a nuestra vista
    public function vista1()
    {
        $apartments = DB::table('apartments_view')->select('rooms', 'bathrooms')->get();
        return view("vistas.v1", compact("apartments"));
    }
    public function vista2()
    {
        $usersinfo = DB::table('information_user_view')->select('*')->get();
        return view("vistas.v2", compact("usersinfo"));
    }
    public function vista3()
    {
        $infoapartments = DB::table('apartments_info_view')->select('*')->get();
        return view("vistas.v3", compact("infoapartments"));
    }
    public function vista4()
    {
        $details = DB::table('vw_total_units_areas')->select('*')->get();
        return view("vistas.v4", compact("details"));
    }
    public function vista5()
    {
        $extraservices = DB::table('vw_available_extraservices')->select('*')->get();
        return view("vistas.v5", compact("extraservices"));
    }

    public function consulta1()
    {
        #Primera consulta:
        #Obtener detalles de unidades con información de apartamentos y servicios adicionales:

        $unitDetails = DB::table('units')
            ->join('apartments', 'units.apartment', '=', 'apartments.id')
            ->join('extraservices', 'units.extra_services', '=', 'extraservices.id')
            ->select('units.*', 'apartments.rooms', 'apartments.bathrooms', 'extraservices.name as extra_service_name')
            ->get();

        return view('consultas.c1', ['unitDetails' => $unitDetails]);
    }

    public function consulta2()
    {
        #Segunda Consulta:
        #Obtener detalles de usuarios con información de perfiles:
        $userDetails = DB::table('users')
            ->join('profiles', 'users.profile', '=', 'profiles.id')
            ->select('users.id', 'users.username', 'profiles.profile', 'profiles.description')
            ->get();

        return view('consultas.c2', ['userDetails' => $userDetails]);
    }
    public function consulta3()
    {
        #Tercera Consulta:
        #Obtener detalles de unidades con información de servicios adicionales y propietario:

        $unitServiceDetails = DB::table('units')
            ->join('extraservices', 'units.extra_services', '=', 'extraservices.id')
            ->select('units.id', 'units.street', 'units.neighborhood', 'extraservices.name as extra_service_name', 'extraservices.owner', 'extraservices.phone')
            ->get();

        return view('consultas.c3', ['unitServiceDetails' => $unitServiceDetails]);
    }
}