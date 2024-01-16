<?php

namespace App\Http\Controllers;

use App\Contracts\Interfaces\AlumniVideoGalleryInterface;
use App\Contracts\Interfaces\CompanyInterface;
use App\Models\News;
use App\Models\JobVacancy;
use Illuminate\Http\Request;
use App\Models\SliderGalleryAlumni;
use Illuminate\Contracts\View\View;
use App\Contracts\Interfaces\NewsInterface;
use App\Contracts\Interfaces\JobVacancyInterface;
use App\Contracts\Interfaces\GalleryAlumniInterface;

class LandingPageController extends Controller
{
    private NewsInterface $news;
    private SliderGalleryAlumni $slidergaleryalumni;
    private GalleryAlumniInterface $galleryAlumni;
    private JobVacancyInterface $jobVacancy;
    private CompanyInterface $company;
    private AlumniVideoGalleryInterface $alumniVidio;

    public function __construct(NewsInterface $news, SliderGalleryAlumni $slidergaleryalumni, GalleryAlumniInterface $galleryAlumni, JobVacancyInterface $jobVacancy, CompanyInterface $company,AlumniVideoGalleryInterface $alumniVidio)
    {
        $this->company = $company;
        $this->news = $news;
        $this->slidergaleryalumni = $slidergaleryalumni;
        $this->galleryAlumni = $galleryAlumni;
        $this->jobVacancy = $jobVacancy;
        $this->alumniVidio = $alumniVidio;
    }

    /**
     * news
     *
     * @return view
     */
    public function news(): view
    {
        $news = $this->news->getByMonthNow();
        $latestNews = $this->news->getOneLatest();
        return view('news', ['news' => $news, 'latestNews' => $latestNews]);
    }

    /**
     * alumni
     *
     * @return void
     */
    public function alumni()
    {
        $galleryAlumnis = $this->galleryAlumni->get();
        $slidergaleryalumnis = $this->slidergaleryalumni->get();
        $alumniVidio = $this->alumniVidio->getFirst();

        return view('galery-alumni', ['slidergaleryalumnis' => $slidergaleryalumnis, 'galleryAlumnis' => $galleryAlumnis,'alumniVidio' => $alumniVidio]);
    }

    /**
     * jobVacancy
     *
     * @param  mixed $request
     * @return void
     */
    public function jobVacancy(Request $request)
    {
        $jobVacancys = $this->jobVacancy->customPaginate($request, 10);
        $companies = $this->company->get();
        return view('lowongan', compact('jobVacancys', 'companies'));
    }


    /**
     * detailJobVacancy
     *
     * @param  mixed $jobVacancy
     * @return void
     */
    public function detailJobVacancy(JobVacancy $jobVacancy)
    {
        return view('detail-lowongan', compact('jobVacancy'));
    }

    /**
     * detailNews
     *
     * @param  mixed $news
     * @return view
     */
    public function detailNews(News $news): view
    {
        $newsDetail = $this->news->show($news->id);
        $latestNews = $this->news->getByLatest();
        return view('detail-news', ['newsDetail' => $newsDetail, 'latestNews' => $latestNews]);
    }
}
