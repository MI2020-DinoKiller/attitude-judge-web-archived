<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;


class SearchController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param string $url
     * @return \Illuminate\Http\Response
     */
    public function show(string $url)
    {
        $process = new Process(['python3', base_path().'/google_connected.py', $url]);
        $process->run();
        if (!$process->isSuccessful()) {
            throw new ProcessFailedException($process);
        }
        return view('search')->with("SSS", $process->getOutput());
        // if ($news = $this->newsRepository->findByUrl($url)) {
        //     return view('frontend.news.show')
        //         ->withNews($news);
        // } else {
        //     return redirect()->route('frontend.news.index')
        //         ->withFlashSuccess(__('alerts.frontend.news.not_found'));
        // }
    }

    public function gotcha(Request $request) {
        return redirect(route("search", $request->input('searchtext')));
    }
}
