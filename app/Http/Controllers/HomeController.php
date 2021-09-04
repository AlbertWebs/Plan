<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Session;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;
use Artesaos\SEOTools\Facades\JsonLd;
// OR with multi
use Artesaos\SEOTools\Facades\JsonLdMulti;

// OR
use Artesaos\SEOTools\Facades\SEOTools;

use Carbon\Carbon;
class HomeController extends Controller
{
    public function index()
    {
        
        // ***Stock Exchange API*** //
        // $queryString = http_build_query([
        //     'access_key' => 'f39afa4bf53c93e273152da1b21c4f98'
        //   ]);
          
        //   $ch = curl_init(sprintf('%s?%s', 'http://api.marketstack.com/v1/tickers/aapl/eod', $queryString));
        //   curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
          
        //   $json = curl_exec($ch);
        //   curl_close($ch);
          
        //   $apiResult = json_decode($json, true);
     
        $page_title = 'Leading FX School | Forex Training Center';
        $url = url('/');
        $pageDescription = "Learn to trade the global forex market Currencies, Indices, Futures, Commodities, Stocks, and Crypto as a professional,  Pipdot FX Consultants - Forex Academy";
        $SiteTitle = html_entity_decode($page_title);
        $SiteSettings = DB::table('_site_settings')->get();
       
        foreach($SiteSettings as $Seo){
            $logoLink = "$url/uploads/logo/$Seo->logo_two";
            SEOMeta::setTitle(' '.$SiteTitle.' - PipDot Consultants');
            SEOMeta::setDescription($pageDescription);
            SEOMeta::setCanonical(''.$url.'');
    
            OpenGraph::setDescription($pageDescription);
            OpenGraph::setTitle(' '.$SiteTitle.' - PipDot Consultants');
            OpenGraph::setUrl(''.$url.'/about-us');
            OpenGraph::addProperty('type', 'website');
            OpenGraph::addProperty('image', $logoLink);
            OpenGraph::addProperty('fb:app_id','pt-pt');
    
            TwitterCard::setTitle(' '.$SiteTitle.' - PipDot Consultants');
            TwitterCard::setSite(''.$Seo->twitter.'');
            
            JsonLd::setTitle(' '.$SiteTitle.' - PipDot Consultants');
            JsonLd::setDescription($pageDescription);
            JsonLd::addImage(''.$logoLink.'');
        }
        
        $Sliders = DB::table('sliders')->get();
      
        
        return view('front.index',compact('Sliders','page_title'));
    }

    public function contact()
    {
        
        $page_title = 'Contact US';
        $url = url('/');
        $pageDescription = "Contact The Best Forex Academy In Nairobi - PipDot Consultants, Forex School In Kenya";
        $SiteTitle = html_entity_decode($page_title);
        $SiteSettings = DB::table('_site_settings')->get();
       
        foreach($SiteSettings as $Seo){
            $logoLink = "$url/uploads/logo/$Seo->logo_two";
            SEOMeta::setTitle(' '.$SiteTitle.' - PipDot Consultants');
            SEOMeta::setDescription($pageDescription);
            SEOMeta::setCanonical(''.$url.'/contact-us');
    
            OpenGraph::setDescription($pageDescription);
            OpenGraph::setTitle(' '.$SiteTitle.' - PipDot Consultants');
            OpenGraph::setUrl(''.$url.'/contact-us');
            OpenGraph::addProperty('type', 'website');
            OpenGraph::addProperty('image', $logoLink);
            OpenGraph::addProperty('fb:app_id','pt-pt');
    
            TwitterCard::setTitle(' '.$SiteTitle.' - PipDot Consultants');
            TwitterCard::setSite(''.$Seo->twitter.'');
            
            JsonLd::setTitle(' '.$SiteTitle.' - PipDot Consultants');
            JsonLd::setDescription($pageDescription);
            JsonLd::addImage(''.$logoLink.'');
        }
        
        $Sliders = DB::table('sliders')->get();
        return view('front.contact',compact('Sliders','page_title'));
    }


    public function terms()
    {
        $Terms = Term::all();
        $page_title = 'Terms and Conditions';
        
        $url = url('/');
        $pageDescription = "Terms and Conditions - PipDot Consultants - Forex School In Westlands";
        $SiteTitle = html_entity_decode($page_title);
        $SiteSettings = DB::table('_site_settings')->get();
       
        foreach($SiteSettings as $Seo){
            $logoLink = "$url/uploads/logo/$Seo->logo_two";
            SEOMeta::setTitle(' '.$SiteTitle.' - PipDot Consultants');
            SEOMeta::setDescription($pageDescription);
            SEOMeta::setCanonical(''.$url.'/terms-and-conditions');
    
            OpenGraph::setDescription($pageDescription);
            OpenGraph::setTitle(' '.$SiteTitle.' - PipDot Consultants');
            OpenGraph::setUrl(''.$url.'/terms-and-conditions');
            OpenGraph::addProperty('type', 'website');
            OpenGraph::addProperty('image', $logoLink);
            OpenGraph::addProperty('fb:app_id','pt-pt');
    
            TwitterCard::setTitle(' '.$SiteTitle.' - PipDot Consultants');
            TwitterCard::setSite(''.$Seo->twitter.'');
            
            JsonLd::setTitle(' '.$SiteTitle.' - PipDot Consultants');
            JsonLd::setDescription($pageDescription);
            JsonLd::addImage(''.$logoLink.'');
        }
        $Sliders = DB::table('sliders')->get();
        return view('front.terms',compact('Sliders','page_title','Terms'));
    }

    public function privacy()
    {
        $Privacy = Privacy::all();
        $page_title = 'Privacy Policy';
        $url = url('/');
        $pageDescription = "Privacy Policy - PipDot Consultants - Forex School In Nairoi";
        $SiteTitle = html_entity_decode($page_title);
        $SiteSettings = DB::table('_site_settings')->get();
       
        foreach($SiteSettings as $Seo){
            $logoLink = "$url/uploads/logo/$Seo->logo_two";
            SEOMeta::setTitle(' '.$SiteTitle.' - PipDot Consultants');
            SEOMeta::setDescription($pageDescription);
            SEOMeta::setCanonical(''.$url.'/privacy-policy');
    
            OpenGraph::setDescription($pageDescription);
            OpenGraph::setTitle(' '.$SiteTitle.' - PipDot Consultants');
            OpenGraph::setUrl(''.$url.'/privacy-policy');
            OpenGraph::addProperty('type', 'website');
            OpenGraph::addProperty('image', $logoLink);
            OpenGraph::addProperty('fb:app_id','pt-pt');
    
            TwitterCard::setTitle(' '.$SiteTitle.' - PipDot Consultants');
            TwitterCard::setSite(''.$Seo->twitter.'');
            
            JsonLd::setTitle(' '.$SiteTitle.' - PipDot Consultants');
            JsonLd::setDescription($pageDescription);
            JsonLd::addImage(''.$logoLink.'');
        }
        $Sliders = DB::table('sliders')->get();
        return view('front.privacies',compact('Sliders','page_title','Privacy'));
    }
 
    public function copyright()
    {
        $Copyright = Copyright::all();
        // dd($Copyright);
        $page_title = 'Copyright Statement';
        $url = url('/');
        $pageDescription = "Copyright Statement - PipDot Consultants - Forex School In Kenya";
        $SiteTitle = html_entity_decode($page_title);
        $SiteSettings = DB::table('_site_settings')->get();
       
        foreach($SiteSettings as $Seo){
            $logoLink = "$url/uploads/logo/$Seo->logo_two";
            SEOMeta::setTitle(' '.$SiteTitle.' - PipDot Consultants');
            SEOMeta::setDescription($pageDescription);
            SEOMeta::setCanonical(''.$url.'/copyright');
    
            OpenGraph::setDescription($pageDescription);
            OpenGraph::setTitle(' '.$SiteTitle.' - PipDot Consultants');
            OpenGraph::setUrl(''.$url.'/copyright');
            OpenGraph::addProperty('type', 'website');
            OpenGraph::addProperty('image', $logoLink);
            OpenGraph::addProperty('fb:app_id','pt-pt');
    
            TwitterCard::setTitle(' '.$SiteTitle.' - PipDot Consultants');
            TwitterCard::setSite(''.$Seo->twitter.'');
            
            JsonLd::setTitle(' '.$SiteTitle.' - PipDot Consultants');
            JsonLd::setDescription($pageDescription);
            JsonLd::addImage(''.$logoLink.'');
        }
        $Sliders = DB::table('sliders')->get();
        return view('front.copyrights',compact('Sliders','page_title','Copyright'));
    }

    public function about(){
        $About = About::all();
        $page_title = 'About Us';
        $url = url('/');
        $pageDescription = "About PipDot Consultants - Forex Academy In Nairobi - Forex School In Kenya";
        $SiteTitle = html_entity_decode($page_title);
        $SiteSettings = DB::table('_site_settings')->get();
       
        foreach($SiteSettings as $Seo){
            $logoLink = "$url/uploads/logo/$Seo->logo_two";
            SEOMeta::setTitle(' '.$SiteTitle.' - PipDot Consultants');
            SEOMeta::setDescription($pageDescription);
            SEOMeta::setCanonical(''.$url.'/about-us');
    
            OpenGraph::setDescription($pageDescription);
            OpenGraph::setTitle(' '.$SiteTitle.' - PipDot Consultants');
            OpenGraph::setUrl(''.$url.'/about-us');
            OpenGraph::addProperty('type', 'website');
            OpenGraph::addProperty('image', $logoLink);
            OpenGraph::addProperty('fb:app_id','pt-pt');
    
            TwitterCard::setTitle(' '.$SiteTitle.' - PipDot Consultants');
            TwitterCard::setSite(''.$Seo->twitter.'');
            
            JsonLd::setTitle(' '.$SiteTitle.' - PipDot Consultants');
            JsonLd::setDescription($pageDescription);
            JsonLd::addImage(''.$logoLink.'');
        }
        $Sliders = DB::table('sliders')->get();
        return view('front.about',compact('Sliders','page_title','About'));
    }
}
