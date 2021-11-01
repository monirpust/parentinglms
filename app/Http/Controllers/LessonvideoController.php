<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateLessonvideoRequest;
use App\Http\Requests\UpdateLessonvideoRequest;
use App\Repositories\LessonvideoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class LessonvideoController extends AppBaseController
{
    /** @var  LessonvideoRepository */
    private $lessonvideoRepository;

    public function __construct(LessonvideoRepository $lessonvideoRepo)
    {
        $this->lessonvideoRepository = $lessonvideoRepo;
    }

    /**
     * Display a listing of the Lessonvideo.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $lessonvideos = $this->lessonvideoRepository->all();

        return view('lessonvideos.index')
            ->with('lessonvideos', $lessonvideos);
    }

    /**
     * Show the form for creating a new Lessonvideo.
     *
     * @return Response
     */
    public function create()
    {
        return view('lessonvideos.create');
    }

    /**
     * Store a newly created Lessonvideo in storage.
     *
     * @param CreateLessonvideoRequest $request
     *
     * @return Response
     */
    public function store(CreateLessonvideoRequest $request)
    {
        $input = $request->all();

        $lessonvideo = $this->lessonvideoRepository->create($input);

        Flash::success('Lessonvideo saved successfully.');

        return redirect(route('lessonvideos.index'));
    }

    /**
     * Display the specified Lessonvideo.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $lessonvideo = $this->lessonvideoRepository->find($id);

        if (empty($lessonvideo)) {
            Flash::error('Lessonvideo not found');

            return redirect(route('lessonvideos.index'));
        }

        return view('lessonvideos.show')->with('lessonvideo', $lessonvideo);
    }

    /**
     * Show the form for editing the specified Lessonvideo.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $lessonvideo = $this->lessonvideoRepository->find($id);

        if (empty($lessonvideo)) {
            Flash::error('Lessonvideo not found');

            return redirect(route('lessonvideos.index'));
        }

        return view('lessonvideos.edit')->with('lessonvideo', $lessonvideo);
    }

    /**
     * Update the specified Lessonvideo in storage.
     *
     * @param int $id
     * @param UpdateLessonvideoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateLessonvideoRequest $request)
    {
        $lessonvideo = $this->lessonvideoRepository->find($id);

        if (empty($lessonvideo)) {
            Flash::error('Lessonvideo not found');

            return redirect(route('lessonvideos.index'));
        }

        $lessonvideo = $this->lessonvideoRepository->update($request->all(), $id);

        Flash::success('Lessonvideo updated successfully.');

        return redirect(route('lessonvideos.index'));
    }

    /**
     * Remove the specified Lessonvideo from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $lessonvideo = $this->lessonvideoRepository->find($id);

        if (empty($lessonvideo)) {
            Flash::error('Lessonvideo not found');

            return redirect(route('lessonvideos.index'));
        }

        $this->lessonvideoRepository->delete($id);

        Flash::success('Lessonvideo deleted successfully.');

        return redirect(route('lessonvideos.index'));
    }
}
