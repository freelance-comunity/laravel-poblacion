<?php

namespace App\Http\Controllers\Control;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Population;
use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use \Excel;
use Illuminate\Support\Facades\Input;
use DB;
use Charts;

class PopulationController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $population = Population::all();

        return view('backEnd.control.population.index', compact('population'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backEnd.control.population.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        
        Population::create($request->all());

        Session::flash('message', 'Population added!');
        Session::flash('status', 'success');

        return redirect('control/population');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function show($id)
    {
        $population = Population::findOrFail($id);

        return view('backEnd.control.population.show', compact('population'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $population = Population::findOrFail($id);

        return view('backEnd.control.population.edit', compact('population'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function update($id, Request $request)
    {
        
        $population = Population::findOrFail($id);
        $population->update($request->all());

        Session::flash('message', 'Population updated!');
        Session::flash('status', 'success');

        return redirect('control/population');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $population = Population::findOrFail($id);

        $population->delete();

        Session::flash('message', 'Population deleted!');
        Session::flash('status', 'success');

        return redirect('control/population');
    }

    public function importExcel(Request $request)
    {
         try {
            if ($request->hasFile('excel')) {
                $this->validate($request, ['excel' => 'required']);

                \Excel::selectSheets('POBLACION')->load($request->excel, function ($reader) {
                    //$excel = $reader->get()->toArray();
                    //iteración
                    $reader->each(function ($row) {
                       
                        $enrollment = $row->matricula;
                        $query = DB::table('populations')->where('enrollment', $enrollment);
                        $exists = $query->first();
                        // Checamos si ya existe un registro con la misma matricula, de ser así omitimos este paso
                        // y saltamos al else para realizar un update del registro ya existente de esa matricula
                        if (!$exists) {
                            $archive = new Population;
                            $archive->month = trim($row->mes);
                            $archive->date = $row->fecha;
                            $archive->status = trim($row->estatus);
                            $archive->campus = trim($row->plantel);
                            $archive->enrollment = $row->matricula;
                            $archive->career = trim($row->carrera);
                            $archive->name = trim($row->nombre);
                            $archive->system = trim($row->sistema);
                            $archive->sex = trim($row->sexo);
                            $archive->turn = trim($row->turno);
                            $archive->semi_day = trim($row->diasemi);
                            $archive->scholarship = trim($row->beca);
                            $archive->foreign = trim($row->foranea);
                            $archive->agreement = trim($row->convenio);
                            $archive->average = trim($row->promedio);
                            $archive->five_or_more = trim($row->cinco);
                            $archive->quarter = trim($row->cuatri);
                            $archive->year_income = trim($row->anioingreso);
                            $archive->year_discharge = trim($row->anioegreso);
                            $archive->observation_of_changes = trim($row->observacionescambios);
                            $archive->modification_date = $row->fechamodificaciones;
                            $archive->low = trim($row->baja);
                            $archive->administrative = trim($row->administrativa);
                            $archive->temporary = trim($row->temporal);
                            $archive->definitive = trim($row->definitiva);
                            $archive->low_date = $row->fechabaja;
                            $archive->observations_low = trim($row->observacionesbaja);
                            $archive->intern_letter = trim($row->cartapasante);
                            $archive->certificate = trim($row->certificado);
                            $archive->title = trim($row->titulo);
                            $archive->save();
                        } else {
                            DB::table('populations')
                                ->where('enrollment', $enrollment)
                                ->update([
                                    'month' => trim($row->mes),
                                    'date' => $row->fecha,
                                    'status' => trim($row->estatus),
                                    'campus' => trim($row->plantel),
                                    'enrollment' => trim($row->matricula),
                                    'career' => trim($row->carrera),
                                    'name' => trim($row->nombre),
                                    'system' => trim($row->sistema),
                                    'sex' => trim($row->sexo),
                                    'turn' => trim($row->turno),
                                    'semi_day' => trim($row->diasemi),
                                    'scholarship' => trim($row->beca),
                                    'foreign' => trim($row->foranea),
                                    'agreement' => trim($row->convenio),
                                    'average' => trim($row->promedio),
                                    'five_or_more' => trim($row->cinco),
                                    'quarter' => trim($row->cuatri),
                                    'year_income' => trim($row->anioingreso),
                                    'year_discharge' => trim($row->anioegreso),
                                    'observation_of_changes' => trim($row->observacionescambios),
                                    'modification_date' => $row->fechamodificaciones,
                                    'low' => trim($row->baja),
                                    'administrative' => trim($row->administrativa),
                                    'temporary' => trim($row->temporal),
                                    'definitive' => trim($row->definitiva),
                                    'low_date' => $row->fechabaja,
                                    'observations_low' => trim($row->observacionesbaja),
                                    'intern_letter' => trim($row->cartapasante),
                                    'certificate' => trim($row->certificado),
                                    'title' => trim($row->titulo),
                                ]);
                        }
                    });
                }, 'UTF-8', true);

                Session::flash('message', 'Archivo cargado exitosamente.');
                Session::flash('status', 'success');
                return redirect('control/population');
            } else {
                Session::flash('message', 'Por favor sube un archivo valido de tipo Excel.');
                Session::flash('status', 'success');
                return redirect('control/population');
            }
        } catch (\Exception $e) {
            Session::flash('message', '' . $e->getMessage() . '');
            Session::flash('status', 'success');
            return redirect('control/population');
            // return $e->getMessage();
        }
    }

        public function populationDate(Request $request)
    {   
        $this->validate($request, ['start' => 'required|date', 'end' => 'required|date']);

        $start_input = $request->input('start');
        $end_input = $request->input('end');
        $start = new Carbon($start_input);
        $end = new Carbon($end_input);
        $from = $start->toDateTimeString();
        $to = $end->toDateTimeString();

        if ($to < $from) {
            Session::flash('message', 'La fecha fin debe de ser mayor a la fecha de inicio.');
            Session::flash('status', 'success');
            return redirect('/');
        }

        // $current = Population::whereBetween('created_at', array($from, $to))->get();
        // return $current;
        $users = User::all();
        $a = Population::where('status', 'A')->whereBetween('created_at', array($from, $to))->get();
        $b = Population::where('status', 'B')->whereBetween('created_at', array($from, $to))->get();
        $esco = Population::where('system', 'ESCOLARIZADO')->whereBetween('created_at', array($from, $to))->get();
        $semi = Population::where('system', 'SEMIESCOLARIZADO')->whereBetween('created_at', array($from, $to))->get();
        $graduates = Population::where('intern_letter', 'SI')->whereBetween('created_at', array($from, $to))->get();

        // Consultas activos y bajas
        $actives = Population::where('status', 'A')->whereBetween('created_at', array($from, $to))->get();
        $lows = Population::where('status', 'B')->whereBetween('created_at', array($from, $to))->get();

        // Consulta activos y bajas por sistema educativo
        // $escoLows = $lows->where('system', 'ESCOLARIZADO');
        $escoLows = DB::table('populations')->where([
            ['status', '=', 'B'],
            ['system', '=', 'ESCOLARIZADO'],
        ])->whereBetween('created_at', [$from, $to])->count();
        $semiLows = DB::table('populations')->where([
            ['status', '=', 'B'],
            ['system', '=', 'SEMIESCOLARIZADO'],
        ])->whereBetween('created_at', [$from, $to])->count();

        // Consultas por plantel
        $tuxtla = Population::where('campus', 'TUXTLA')->where('status', 'A')->whereBetween('created_at', array($from, $to))->get();
        $cancun = Population::where('campus', 'CANCUN')->where('status', 'A')->whereBetween('created_at', array($from, $to))->get();
        $tapachula = Population::where('campus', 'TAPACHULA')->where('status', 'A')->whereBetween('created_at', array($from, $to))->get();

        // Consultas por carrera
        $enfermeria = Population::where('career', 'ENFERMERIA')->where('status', 'A')->whereBetween('created_at', array($from, $to))->get();
        $mecanica = Population::where('career', 'INGENIERIA MECANICA AUTOMOTRIZ')->where('status', 'A')->whereBetween('created_at', array($from, $to))->get();
        $derecho = Population::where('career', 'DERECHO')->where('status', 'A')->where('status', 'A')->whereBetween('created_at', array($from, $to))->get();
        $civil = Population::where('career', 'INGENIERIA CIVIL')->where('status', 'A')->whereBetween('created_at', array($from, $to))->get();
        $sistemas = Population::where('career', 'INGENIERIA EN SISTEMAS')->where('status', 'A')->whereBetween('created_at', array($from, $to))->get();
        $admon = Population::where('career', 'ADMINISTRACION DE EMPRESAS')->where('status', 'A')->whereBetween('created_at', array($from, $to))->get();
        $tsocial = Population::where('career', 'TRABAJO SOCIAL')->where('status', 'A')->whereBetween('created_at', array($from, $to))->get();
        $merca = Population::where('career', 'MERCADOTECNIA')->where('status', 'A')->whereBetween('created_at', array($from, $to))->get();
        $conta = Population::where('career', 'CONTADURIA PUBLICA')->where('status', 'A')->whereBetween('created_at', array($from, $to))->get();
        $informatica = Population::where('career', 'INFORMATICA ADMINISTRATIVA')->where('status', 'A')->whereBetween('created_at', array($from, $to))->get();
        $doc_educ_tab = Population::where('career', 'DOCTORADO EN EDUCACION TABASCO')->where('status', 'A')->whereBetween('created_at', array($from, $to))->get();
        $doc_educ = Population::where('career', 'DOCTORADO EN EDUCACION')->where('status', 'A')->whereBetween('created_at', array($from, $to))->get();
        $maes_calidad = Population::where('career', 'MAESTRIA EN CALIDAD')->where('status', 'A')->whereBetween('created_at', array($from, $to))->get();
        $maes_educ = Population::where('career', 'MAESTRIA EN EDUCACION ')->where('status', 'A')->whereBetween('created_at', array($from, $to))->get();
        $maes_educ_tab = Population::where('career', 'MAESTRIA EN EDUCACION TABASCO')->where('status', 'A')->whereBetween('created_at', array($from, $to))->get();
        $maes_der_fis = Population::where('career', 'MAESTRIA EN DERECHO FISCAL')->where('status', 'A')->whereBetween('created_at', array($from, $to))->get();
        $maes_admon_pub = Population::where('career', 'MAESTRIA EN ADMINISTRACION PUBLICA')->where('status', 'A')->whereBetween('created_at', array($from, $to))->get();
        $maes_comer_ven = Population::where('career', 'MAESTRIA EN COMERCIALIZACION Y VENTAS')->where('status', 'A')->whereBetween('created_at', array($from, $to))->get();

        // Consultas por documentos
        $title = Population::where('title', 'SI')->whereBetween('created_at', array($from, $to))->get();
        $intern = Population::where('intern_letter', 'SI')->whereBetween('created_at', array($from, $to))->get();
        $certificate = Population::where('certificate', 'SI')->whereBetween('created_at', array($from, $to))->get();

        $chart2 = Charts::create('area', 'c3')
            ->title('ESTATUS')
            ->responsive(true)
            ->elementLabel('TOTAL')
            ->labels(['ACTIVOS', 'BAJAS'])
            ->values([$a->count(), $b->count()])
            ->dimensions(0, 1000)
            ->responsive(true);

        $chart3 = Charts::create('bar', 'highcharts')
            ->title('MODALIDAD')
            ->labels(['ESCOLARIZADO', 'SEMIESCOLARIZADO'])
            ->elementLabel('TOTAL')
            ->values([$esco->count(), $semi->count()])
            ->dimensions(1000, 600)
            ->responsive(true);

        $chart4 = Charts::create('bar', 'c3')
            ->title('PLANTELES')
            ->labels(['TUXTLA', 'CANCUN', 'TAPACHULA'])
            ->elementLabel('TOTAL')
            ->values([$tuxtla->count(), $cancun->count(), $tapachula->count()])
            ->dimensions(800, 400)
            ->responsive(true);

        $chart5 = Charts::create('bar', 'highcharts')
            ->title('CARRERAS')
            ->labels(['ENFERMERIA', 'INGENIERIA MECANICA AUTOMOTRIZ', 'DERECHO', 'INGENIERIA CIVIL', 'INGENIERIA EN SISTEMAS', 'ADMINISTRACIÓN DE EMPRESAS', 'TRABAJO SOCIAL', 'MERCADOTECNIA', 'CONTADURIA PUBLICA',
                'INFORMATICA ADMINISTRATIVA', 'DOCTORADO EN EDUCACIÓN TABASCO', 'DOCTORADO EN EDUCACIÓN', 'MAESTRÍA EN CALIDAD', 'MESTRÍA EN EDUCACIÓN', 'MAESTRÍA EN EDUCACIÓN TABASCO', 'MAESTRÍA EN DERECHO FISCAL', 'MAESTRÍA EN ADMINISTRACIÓN PUBLICA', 'MAESTRÍA EN COMERCIALIZACIÓN Y VENTAS'])
            ->elementLabel('TOTAL')
            ->template("material")
            ->values([$enfermeria->count(), $mecanica->count(), $derecho->count(), $civil->count(), $sistemas->count(), $admon->count(), $tsocial->count(), $merca->count(), $conta->count(),
                $informatica->count(), $doc_educ_tab->count(), $doc_educ->count(), $maes_calidad->count(), $maes_educ->count(), $maes_educ_tab->count(), $maes_der_fis->count(), $maes_admon_pub->count(), $maes_comer_ven->count()])
            ->dimensions(1000, 600)
            ->responsive(true);

        $chart6 = Charts::create('bar', 'highcharts')
            ->title('DOCUMENTACIÓN')
            ->labels(['TITULO', 'CARTA DE PASANTE', 'CERTIFICADO'])
            ->elementLabel('TOTAL')
            ->values([$title->count(), $intern->count(), $certificate->count()])
            ->dimensions(1000, 600)
            ->responsive(true);

        $chart7 = Charts::create('pie', 'highcharts')
            ->title('SISTEMA')
            ->labels(['ESCOLARIZADO', 'SEMIESCOLARIZADO'])
            ->values([$escoLows, $semiLows])
            ->dimensions(800, 400)
            ->responsive(true);

        return view('home')
            ->with('users', $users)
            ->with('actives', $actives)
            ->with('lows', $lows)
            ->with('graduates', $graduates)
            ->with('chart2', $chart2)
            ->with('chart3', $chart3)
            ->with('chart4', $chart4)
            ->with('chart5', $chart5)
            ->with('chart6', $chart6)
            ->with('chart7', $chart7);
    }

}
