<?php

namespace App\Http\Controllers;

use App\Models\Survey;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Requests\SurveyRequest;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\SubmitSurveyRequest;
use App\Contracts\Interfaces\SurveyInterface;

class SurveyController extends Controller
{
    private SurveyInterface $survey;

    public function __construct(SurveyInterface $survey)
    {
        $this->survey = $survey;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $survies = $this->survey->get();
        return view('admin.survei-alumni',compact('survies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SurveyRequest $survey)
    {
        $this->survey->store($survey->validated());
        return redirect()->back()->with('success', trans('alert.add_success'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(SurveyRequest $request,Survey $survey)
    {
        $this->survey->update($survey->id,$request->validated());
        return redirect()->back()->with('success', trans('alert.update_success'));
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Survey $survey)
    {
        $this->survey->delete($survey->id);
        return redirect()->back()->with('success', trans('alert.delete_success'));
    }

    /**
     * survey
     *
     * @return View
     */
    public function survey() : View
    {
        $survey = $this->survey->getLatest();

        return view('alumni.job-survey',compact('survey'));
    }

    /**
     * surveyResults
     *
     * @return View
     */
    public function surveyResults() : View
    {
        return view('admin.survey-results');
    }

    /**
     * submit
     *
     * @param  mixed $survey
     * @param  mixed $request
     * @return RedirectResponse
     */
    public function submit(SubmitSurveyRequest $request,Survey $survey) : RedirectResponse
    {
        dd($request);
        $data = $request->validated();
        $data['survey_id'] = $survey->id;

        $this->survey->store($data);

        return redirect()->back()->with('success',trans('alert.add_success'));
    }
}
