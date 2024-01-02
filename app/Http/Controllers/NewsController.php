<?php

namespace App\Http\Controllers;

use App\Contracts\Interfaces\NewsInterface;
use App\Http\Requests\NewsRequest;
use App\Http\Requests\NewsUpdateRequest;
use App\Models\News;
use App\Services\NewsService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    private NewsInterface $news;
    private NewsService $service;

    public function __construct(NewsInterface $newsInterface, NewsService $service)
    {
        $this->news = $newsInterface;
        $this->service = $service;
    }

    public function index(): View
    {
        $data = $this->news->get();
        return view('admin.upload-news', compact('data'));
    }

    /**
     * store
     *
     * @param  mixed $request
     * @return RedirectResponse
     */
    public function store(NewsRequest $request): RedirectResponse
    {
        $this->news->store($this->service->store($request));
        return redirect()->back()->with('success', trans(''));
    }

    /**
     * update
     *
     * @param  mixed $news
     * @param  mixed $request
     * @return RedirectResponse
     */
    public function update(News $news, NewsUpdateRequest $request): RedirectResponse
    {
        $this->news->update($news->id, $this->service->update($news, $request));
        return redirect()->back()->with('success', trans(''));
    }

    /**
     * destroy
     *
     * @param  mixed $news
     * @return RedirectResponse
     */
    public function destroy(News $news): RedirectResponse
    {
        $this->service->remove($news->thumbnail);
        $this->news->delete($news->id);
        return redirect()->back()->with('success', trans(''));
    }
}
