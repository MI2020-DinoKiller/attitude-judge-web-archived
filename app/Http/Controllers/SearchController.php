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
    public function show(string $url, string $page = "1")
    {
        if (intval($page) == 0) {
            return redirect(route("search", [$url, "1"]));
        }
        $process = new Process(['python3', base_path().'/google_connected.py', $url, $page]);
        $process->run();
        if (!$process->isSuccessful()) {
            throw new ProcessFailedException($process);
        }
        $data = [
            'SSS'  => $process->getOutput(),
            'p'   => route("search2", [$url])
        ];
        return view('search')->with($data);
        // if ($news = $this->newsRepository->findByUrl($url)) {
        //     return view('frontend.news.show')
        //         ->withNews($news);
        // } else {
        //     return redirect()->route('frontend.news.index')
        //         ->withFlashSuccess(__('alerts.frontend.news.not_found'));
        // }
    }

    public function gotcha(Request $request) {
        return redirect(route("search", [$request->input('searchtext'), "1"]));
    }
}
