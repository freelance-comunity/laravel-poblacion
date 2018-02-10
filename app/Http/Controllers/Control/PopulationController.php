<?php

namespace App\Http\Controllers\Control;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Population;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use \Excel;
use Illuminate\Support\Facades\Input;
use DB;

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

}
