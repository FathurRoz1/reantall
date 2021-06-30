<?php

namespace App\Http\Controllers;

use App\DataTables\CategoriDataTable;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Requests\CreateCategoriRequest;
use App\Http\Requests\UpdateCategoriRequest;
use App\Repositories\CategoriRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;
use Datatables;

class CategoriController extends AppBaseController
{
    /** @var  CategoriRepository */
    private $categoriRepository;

    public function __construct(CategoriRepository $categoriRepo)
    {
        $this->categoriRepository = $categoriRepo;
    }

    /**
     * Display a listing of the Categori.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            return Datatables::of((new CategoriDataTable())->get())->make(true);
        }
    
        return view('categoris.index');
    }

    /**
     * Show the form for creating a new Categori.
     *
     * @return Response
     */
    public function create()
    {
        return view('categoris.create');
    }

    /**
     * Store a newly created Categori in storage.
     *
     * @param CreateCategoriRequest $request
     *
     * @return Response
     */
    public function store(CreateCategoriRequest $request)
    {
        $input = $request->all();

        $categori = $this->categoriRepository->create($input);

        Flash::success('Categori saved successfully.');

        return redirect(route('categoris.index'));
    }

    /**
     * Display the specified Categori.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $categori = $this->categoriRepository->find($id);

        if (empty($categori)) {
            Flash::error('Categori not found');

            return redirect(route('categoris.index'));
        }

        return view('categoris.show')->with('categori', $categori);
    }

    /**
     * Show the form for editing the specified Categori.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $categori = $this->categoriRepository->find($id);

        if (empty($categori)) {
            Flash::error('Categori not found');

            return redirect(route('categoris.index'));
        }

        return view('categoris.edit')->with('categori', $categori);
    }

    /**
     * Update the specified Categori in storage.
     *
     * @param  int              $id
     * @param UpdateCategoriRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCategoriRequest $request)
    {
        $categori = $this->categoriRepository->find($id);

        if (empty($categori)) {
            Flash::error('Categori not found');

            return redirect(route('categoris.index'));
        }

        $categori = $this->categoriRepository->update($request->all(), $id);

        Flash::success('Categori updated successfully.');

        return redirect(route('categoris.index'));
    }

    /**
     * Remove the specified Categori from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $categori = $this->categoriRepository->find($id);

        $categori->delete();

        return $this->sendSuccess('Categori deleted successfully.');
    }
}
