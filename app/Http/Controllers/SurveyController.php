<?php

namespace App\Http\Controllers;

use App\Models\Survey;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Requests\SurveyRequest;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\SubmitSurveyRequest;
use App\Contracts\Interfaces\SurveyInterface;
use App\Contracts\Interfaces\SubmitSurveyInterface;
use App\Contracts\Interfaces\Auth\RegisterInterface;

class SurveyController extends Controller
{
    private SurveyInterface $survey;
    private SubmitSurveyInterface $submitSurvey;
    private RegisterInterface $user;

    public function __construct(SurveyInterface $survey, SubmitSurveyInterface $submitSurvey, RegisterInterface $user)
    {
        $this->survey = $survey;
        $this->submitSurvey = $submitSurvey;
        $this->user = $user;
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
        $submitSurvey = $this->submitSurvey->getByStudent(auth()->user()->student->id);

        return view('alumni.job-survey',compact('survey','submitSurvey'));
    }

    /**
     * surveyResults
     *
     * @return View
     */
    public function surveyResults(Survey $survey) : View
    {
        $bussiness = $this->submitSurvey->countBussiness($survey->id);
        $work = $this->submitSurvey->countWork($survey->id);
        $study = $this->submitSurvey->countStudy($survey->id);
        $notWork = $this->submitSurvey->countNotWork($survey->id);

        $chartData = [
            ['name' => 'Membuat Wirausaha', 'y' => $bussiness, 'drilldown' => 'Membuat Wirausaha'],
            ['name' => 'Bekerja', 'y' => $work, 'drilldown' => 'Bekerja'],
            ['name' => 'Kuliah', 'y' => $study, 'drilldown' => 'Kuliah'],
            ['name' => 'Tidak ada Kegiatan', 'y' => $notWork, 'drilldown' => 'Tidak ada Kegiatan'],
        ];

        $chartDataJson = json_encode($chartData);

        return view('admin.survey-results', ['study' => $study, 'work' => $work, 'bussiness' => $bussiness, 'notWork' => $notWork, 'survey' => $survey, 'chartDataJson' => $chartDataJson]);
    }

    /**
     * submit
     *
     * @param  mixed $survey
     * @param  mixed $request
     * @return RedirectResponse
     */
    public function submit(SubmitSurveyRequest $request, Survey $survey) : RedirectResponse
    {
        $data = $request->validated();
        $data['student_id'] = auth()->user()->student->id;
        $data['survey_id'] = $survey->id;

        $this->user->update(auth()->user()->id, $data);
        $this->submitSurvey->store($data);

        return redirect()->back()->with('success',trans('alert.update_success'));
    }
}
