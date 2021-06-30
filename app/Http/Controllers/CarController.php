<?php

namespace App\Http\Controllers;

use App\DataTables\CarDataTable;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Requests\CreateCarRequest;
use App\Http\Requests\UpdateCarRequest;
use App\Repositories\CarRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use App\Models\Categori;
use App\Models\Brand;
use Response;
use Datatables;

class CarController extends AppBaseController
{
    /** @var  CarRepository */
    private $carRepository;

    public function __construct(CarRepository $carRepo)
    {
        $this->carRepository = $carRepo;
    }

    /**
     * Display a listing of the Car.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            return Datatables::of((new CarDataTable())->get())->make(true);
        }
    
        return view('cars.index');
    }

    /**
     * Show the form for creating a new Car.
     *
     * @return Response
     */
    public function create()
    {
        $combocat = Categori ::pluck('CATNAME','IDCAT');
        $combobrand = Brand ::pluck('BRANDNAME','IDBRAND');
        return view('cars.create')->with(compact('combocat','combobrand'));
    }

    /**
     * Store a newly created Car in storage.
     *
     * @param CreateCarRequest $request
     *
     * @return Response
     */
    public function store(CreateCarRequest $request)
    {
        $input = $request->all();
        $input['CARPICTURE'] = $input['CARPICTURE']->store('CARPICTURE');
        $car = $this->carRepository->create($input);

        Flash::success('Car saved successfully.');

        return redirect(route('cars.index'));
    }

    /**
     * Display the specified Car.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $car = $this->carRepository->find($id);

        if (empty($car)) {
            Flash::error('Car not found');

            return redirect(route('cars.index'));
        }

        return view('cars.show')->with('car', $car);
    }

    /**
     * Show the form for editing the specified Car.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $car = $this->carRepository->find($id);

        if (empty($car)) {
            Flash::error('Car not found');

            return redirect(route('cars.index'));
        }

        return view('cars.edit')->with('car', $car);
    }

    /**
     * Update the specified Car in storage.
     *
     * @param  int              $id
     * @param UpdateCarRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCarRequest $request)
    {
        $car = $this->carRepository->find($id);

        if (empty($car)) {
            Flash::error('Car not found');

            return redirect(route('cars.index'));
        }

        $car = $this->carRepository->update($request->all(), $id);

        Flash::success('Car updated successfully.');

        return redirect(route('cars.index'));
    }

    /**
     * Remove the specified Car from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $car = $this->carRepository->find($id);

        $car->delete();

        return $this->sendSuccess('Car deleted successfully.');
    }
}
