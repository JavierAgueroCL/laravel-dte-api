<?php

namespace App\Http\Controllers\API\V1;

use Response;
use App\Models\Provincia;
use Illuminate\Http\Request;
use App\Repositories\ProvinciaRepository;
use App\Http\Controllers\AppBaseController;
use App\Repositories\Criteria\RequestCriteria;
use App\Repositories\Criteria\LimitOffsetCriteria;
use App\Http\Request\API\CreateProvinciaAPIRequest;
use App\Http\Request\API\UpdateProvinciaAPIRequest;

/**
 * Class ProvinciaController.
 */
class ProvinciaAPIController extends AppBaseController
{
    /** @var ProvinciaRepository */
    private $provinciaRepository;

    public function __construct(ProvinciaRepository $provinciaRepo)
    {
        $this->provinciaRepository = $provinciaRepo;
    }

    /**
     * Display a listing of the Provincia.
     * GET|HEAD /provincias.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->provinciaRepository->pushCriteria(new RequestCriteria($request));
        $this->provinciaRepository->pushCriteria(new LimitOffsetCriteria($request));
        $provincias = $this->provinciaRepository->all();

        return $this->sendResponse($provincias->toArray(), 'Provincias retrieved successfully');
    }

    /**
     * Store a newly created Provincia in storage.
     * POST /provincias.
     *
     * @param CreateProvinciaAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateProvinciaAPIRequest $request)
    {
        $input = $request->all();

        $provincias = $this->provinciaRepository->create($input);

        return $this->sendResponse($provincias->toArray(), 'Provincia saved successfully');
    }

    /**
     * Display the specified Provincia.
     * GET|HEAD /provincias/{id}.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Provincia $provincia */
        $provincia = $this->provinciaRepository->findWithoutFail($id);

        if (empty($provincia)) {
            return $this->sendError('Provincia not found');
        }

        return $this->sendResponse($provincia->toArray(), 'Provincia retrieved successfully');
    }

    /**
     * Update the specified Provincia in storage.
     * PUT/PATCH /provincias/{id}.
     *
     * @param  int $id
     * @param UpdateProvinciaAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateProvinciaAPIRequest $request)
    {
        $input = $request->all();

        /** @var Provincia $provincia */
        $provincia = $this->provinciaRepository->findWithoutFail($id);

        if (empty($provincia)) {
            return $this->sendError('Provincia not found');
        }

        $provincia = $this->provinciaRepository->update($input, $id);

        return $this->sendResponse($provincia->toArray(), 'Provincia updated successfully');
    }

    /**
     * Remove the specified Provincia from storage.
     * DELETE /provincias/{id}.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Provincia $provincia */
        $provincia = $this->provinciaRepository->findWithoutFail($id);

        if (empty($provincia)) {
            return $this->sendError('Provincia not found');
        }

        $provincia->delete();

        return $this->sendResponse($id, 'Provincia deleted successfully');
    }
}
