<?php

namespace App\Http\Controllers\User\Tracking;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Goutte;

class TrackingController extends Controller
{
    /**
     * Show the page.
     *
     */
    public function index()
    {
        return view('user.Tracking.index');
    }

    /**
     * Show the page.
     *
     */
    public function trackingArtist($id)
    {
        return view('user.Tracking.tracking-artist');
    }

    public function trackingProcess(Request $request)
    {
        $request->validate([
            'url' => 'required|url',
        ]);

        $validDomainURL = parse_url($request->url);
        if($validDomainURL['host'] == 'vividseats.com'|| $validDomainURL['host'] == 'www.vividseats.com'){

            $response = Http::get(config('constants.sc_api_url'), [
                'url' => $request->url,
                'api_key'=> config('constants.sc_api_key'),
            ]);

            $file = 'sample2.html';
            $destinationPath=public_path()."/upload/";
            if (!is_dir($destinationPath)) {  mkdir($destinationPath,0777,true);  }
            File::put($destinationPath.$file,$response->body());
            //    return redirect()->route('user.tracking.artist.index', ['id' => 1]);
        }else{
            return redirect()->back()->with('error', 'Invalid URL, URL must be of vividseats.com');
        }
    }

    public function process(){
//        $content = File::get(public_path()."/upload/first.txt");
//        dd($content);
        $events =
        $crawler = Goutte::request('GET', url('sample.html'));
        $crawler->filter('.styles_display-none__kcAaY > .styles_grid__2V6e6')->each(function ($node) {
            echo $node->filter('.styles_col__2dlgD a')->attr('href')  .'<br>';;
            echo $node->filter('.styles_col__2dlgD a div div p')->text()  .'<br>';;
            echo $node->filter('.styles_col__2dlgD a div div div p')->text()  .'<br>';;
//            echo $node->filter('.styles_col__2dlgD a div .styles_col__2dlgD div p')->text();
            echo $node->filter('.styles_col__2dlgD > a > .styles_row__2rykK > .styles_col__2dlgD > p')->text() .'<br>';
            echo $node->filter('.styles_col__2dlgD > a > .styles_row__2rykK > .styles_col__2dlgD > .styles_col__2dlgD p')->text() .'<br>';
            echo $node->filter('.styles_col__2dlgD > a > .styles_row__2rykK > .styles_col__2dlgD > p')->last()->text() .'<br>';
            //            echo $node->filter('.styles_col__2dlgD a div .styles_col__2dlgD .styles_col__2dlgD div p')->text();
//            echo $node->filter('.styles_col__2dlgD a div .styles_col__2dlgD .styles_sm__Z_NM2')->text();
        });
    }
}
