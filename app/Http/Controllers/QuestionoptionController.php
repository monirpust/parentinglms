<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateQuestionoptionRequest;
use App\Http\Requests\UpdateQuestionoptionRequest;
use App\Repositories\QuestionoptionRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class QuestionoptionController extends AppBaseController
{
    /** @var  QuestionoptionRepository */
    private $questionoptionRepository;

    public function __construct(QuestionoptionRepository $questionoptionRepo)
    {
        $this->questionoptionRepository = $questionoptionRepo;
    }

    /**
     * Display a listing of the Questionoption.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $questionoptions = $this->questionoptionRepository->all();

        return view('questionoptions.index')
            ->with('questionoptions', $questionoptions);
    }

    /**
     * Show the form for creating a new Questionoption.
     *
     * @return Response
     */
    public function create()
    {
        return view('questionoptions.create');
    }

    /**
     * Store a newly created Questionoption in storage.
     *
     * @param CreateQuestionoptionRequest $request
     *
     * @return Response
     */
    public function store(CreateQuestionoptionRequest $request)
    {
        $input = $request->all();

        $questionoption = $this->questionoptionRepository->create($input);

        Flash::success('Questionoption saved successfully.');

        return redirect(route('questionoptions.index'));
    }

    /**
     * Display the specified Questionoption.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $questionoption = $this->questionoptionRepository->find($id);

        if (empty($questionoption)) {
            Flash::error('Questionoption not found');

            return redirect(route('questionoptions.index'));
        }

        return view('questionoptions.show')->with('questionoption', $questionoption);
    }

    /**
     * Show the form for editing the specified Questionoption.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $questionoption = $this->questionoptionRepository->find($id);

        if (empty($questionoption)) {
            Flash::error('Questionoption not found');

            return redirect(route('questionoptions.index'));
        }

        return view('questionoptions.edit')->with('questionoption', $questionoption);
    }

    /**
     * Update the specified Questionoption in storage.
     *
     * @param int $id
     * @param UpdateQuestionoptionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateQuestionoptionRequest $request)
    {
        $questionoption = $this->questionoptionRepository->find($id);

        if (empty($questionoption)) {
            Flash::error('Questionoption not found');

            return redirect(route('questionoptions.index'));
        }

        $questionoption = $this->questionoptionRepository->update($request->all(), $id);

        Flash::success('Questionoption updated successfully.');

        return redirect(route('questionoptions.index'));
    }

    /**
     * Remove the specified Questionoption from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $questionoption = $this->questionoptionRepository->find($id);

        if (empty($questionoption)) {
            Flash::error('Questionoption not found');

            return redirect(route('questionoptions.index'));
        }

        $this->questionoptionRepository->delete($id);

        Flash::success('Questionoption deleted successfully.');

        return redirect(route('questionoptions.index'));
    }
}
