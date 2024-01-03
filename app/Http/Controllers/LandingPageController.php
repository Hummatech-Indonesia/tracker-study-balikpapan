<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Contracts\Interfaces\NewsInterface;

class LandingPageController extends Controller
{
    private NewsInterface $news;

    public function __construct(NewsInterface $news){
        $this->news = $news;
    }

    /**
     * news
     *
     * @return view
     */
    public function news() : view
    {
        $news = $this->news->getByMonthNow();
        $latestNews = $this->news->getOneLatest();
        return view('news', ['news' => $news, 'latestNews' => $latestNews]);
    }

    /**
     * detailNews
     *
     * @param  mixed $news
     * @return view
     */
    public function detailNews(News $news) : view
    {
        $newsDetail = $this->news->show($news->id);
        $latestNews = $this->news->getByLatest();
        return view('detail-news', ['newsDetail' => $newsDetail, 'latestNews' => $latestNews]);
    }
}
