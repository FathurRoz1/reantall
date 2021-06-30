<?php

namespace App\Http\Controllers;

use App\DataTables\TestimoniDataTable;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Requests\CreateTestimoniRequest;
use App\Http\Requests\UpdateTestimoniRequest;
use App\Repositories\TestimoniRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use App\Models\Customer;
use Response;
use Datatables;

class TestimoniController extends AppBaseController
{
    /** @var  TestimoniRepository */
    private $testimoniRepository;

    public function __construct(TestimoniRepository $testimoniRepo)
    {
        $this->testimoniRepository = $testimoniRepo;
    }

    /**
     * Display a listing of the Testimoni.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            return Datatables::of((new TestimoniDataTable())->get())->make(true);
        }
    
        return view('testimonis.index');
    }

    /**
     * Show the form for creating a new Testimoni.
     *
     * @return Response
     */
    public function create()
    {
        $combocust = Customer ::pluck('CUSTNAME','IDCUST');
        return view('testimonis.create')->with(compact('combocust'));

    }

    /**
     * Store a newly created Testimoni in storage.
     *
     * @param CreateTestimoniRequest $request
     *
     * @return Response
     */
    public function store(CreateTestimoniRequest $request)
    {
        $input = $request->all();

        $testimoni = $this->testimoniRepository->create($input);

        Flash::success('Testimoni saved successfully.');

        return redirect(route('testimonis.index'));
    }

    /**
     * Display the specified Testimoni.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $testimoni = $this->testimoniRepository->find($id);

        if (empty($testimoni)) {
            Flash::error('Testimoni not found');

            return redirect(route('testimonis.index'));
        }

        return view('testimonis.show')->with('testimoni', $testimoni);
    }

    /**
     * Show the form for editing the specified Testimoni.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $testimoni = $this->testimoniRepository->find($id);

        if (empty($testimoni)) {
            Flash::error('Testimoni not found');

            return redirect(route('testimonis.index'));
        }

        return view('testimonis.edit')->with('testimoni', $testimoni);
    }

    /**
     * Update the specified Testimoni in storage.
     *
     * @param  int              $id
     * @param UpdateTestimoniRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTestimoniRequest $request)
    {
        $testimoni = $this->testimoniRepository->find($id);

        if (empty($testimoni)) {
            Flash::error('Testimoni not found');

            return redirect(route('testimonis.index'));
        }

        $testimoni = $this->testimoniRepository->update($request->all(), $id);

        Flash::success('Testimoni updated successfully.');

        return redirect(route('testimonis.index'));
    }

    /**
     * Remove the specified Testimoni from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $testimoni = $this->testimoniRepository->find($id);

        $testimoni->delete();

        return $this->sendSuccess('Testimoni deleted successfully.');
    }
}
