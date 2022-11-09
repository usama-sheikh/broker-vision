<?php

namespace App\Http\Controllers\User\Tracking;

use App\Http\Controllers\Controller;
use App\Models\Artist;
use App\Models\ArtistEvent;
use App\Models\Log;
use Illuminate\Support\Facades\DB;
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

            try{
                $celebrityUrl = $request->url;
                $response = Http::get(config('constants.sc_api_url'), [
                    'url' => $celebrityUrl,
                    'api_key'=> config('constants.sc_api_key'),
                ]);

                $sampleFile = 'sample2.html';
                $destinationPath=public_path()."/sample/";
                DB::beginTransaction();

                $artist = new Artist();
                $artist->user_id = auth()->user()->id;
                $artist->url = $request->url;
                $artist->save();

                File::put($destinationPath.$sampleFile,$response->body());

                $crawler = Goutte::request('GET', url('sample.html'));
                $crawler->filter('.styles_display-none__kcAaY > .styles_grid__2V6e6')->each(function ($node, $artist,$celebrityUrl) {
                    $artistEvent = new ArtistEvent();
                    $artistEvent->artist_id = $artist->id;
                    $artistEvent->user_id = auth()->user()->id;
                    $artistEvent->event_url = $celebrityUrl;
                    $celebrityEventUrl = 'https://www.vividseats.com'. $node->filter('.styles_col__2dlgD a')->attr('href');
//                    echo $node->filter('.styles_col__2dlgD a')->attr('href')  .'<br>';;
//                    echo $node->filter('.styles_col__2dlgD a div div p')->text()  .'<br>';;
//                    echo $node->filter('.styles_col__2dlgD a div div div p')->text()  .'<br>';;
//                    echo $node->filter('.styles_col__2dlgD > a > .styles_row__2rykK > .styles_col__2dlgD > p')->text() .'<br>';
//                    echo $node->filter('.styles_col__2dlgD > a > .styles_row__2rykK > .styles_col__2dlgD > .styles_col__2dlgD p')->text() .'<br>';
//                    echo $node->filter('.styles_col__2dlgD > a > .styles_row__2rykK > .styles_col__2dlgD > p')->last()->text() .'<br>';
                });
                // end task
                // File::delete($destinationPath.$sampleFile);
                DB::commit();
            }catch (\Exception $e){
                DB::rollBack();
                $log = new Log();
                $log->title = 'Error';
                $log->description = $e->getMessage();
                $log->save();
                return redirect()->back()->with('error', 'Something went wrong. Please try again.');
            }
            //    return redirect()->route('user.tracking.artist.index', ['id' => 1]);
        }else{
            return redirect()->back()->with('error', 'Invalid URL, URL must be of vividseats.com');
        }
    }

    public function process(){
//        $content = File::get(public_path()."/upload/first.txt");
//        dd($content);
        $events =
        $url = 'https://www.vividseats.com'. '/justin-bieber-tickets-london-o2-arena---london-2-14-2023--concerts-pop/production/3781333?AID=Performer-MainProductionList
Feb 14, 2023';
//        dd(redirect()->away($url));
        $productionId = explode("/", parse_url($url, PHP_URL_PATH));

        // fetching events code

        $response = Http::get(config('constants.vs_tickets_api_url'), [
            'productionId'=> $productionId[3],
        ]);

        dd($response->body());
        // crawler scrape code
        $crawler = Goutte::request('GET', url('sample.html'));
        $crawler->filter('.styles_display-none__kcAaY > .styles_grid__2V6e6')->each(function ($node) {
            echo $node->filter('.styles_col__2dlgD a')->attr('href')  .'<br>';;
            echo $node->filter('.styles_col__2dlgD a div div p')->text()  .'<br>';;
            echo $node->filter('.styles_col__2dlgD a div div div p')->text()  .'<br>';;
            echo $node->filter('.styles_col__2dlgD > a > .styles_row__2rykK > .styles_col__2dlgD > p')->text() .'<br>';
            echo $node->filter('.styles_col__2dlgD > a > .styles_row__2rykK > .styles_col__2dlgD > .styles_col__2dlgD p')->text() .'<br>';
            echo $node->filter('.styles_col__2dlgD > a > .styles_row__2rykK > .styles_col__2dlgD > p')->last()->text() .'<br>';
        });
    }
}
