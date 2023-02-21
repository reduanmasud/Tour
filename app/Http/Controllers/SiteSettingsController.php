<?php

namespace App\Http\Controllers;

use App\Models\SiteSetting;
use Illuminate\Http\Request;

class SiteSettingsController extends Controller
{

    protected $site;
    function __construct()
    {
        $this->site = SiteSetting::first();
    }


    public function update_image(Request $request)
    {
        $fileName = uniqid() . '.' . $request->site_logo->getClientOriginalExtension();
        $image_path =  $request->site_logo->storeAs('images', $fileName,'public');
        $this->site->site_image = $image_path;
        $this->site->save();

        return back()->with('success', "Logo Successfully Updated");
    }


    public function update_title(Request $request)
    {

        $this->site->site_title = $request->site_title;
        $this->site->save();

        return back()->with('success', "Title Successfully Updated");
    }
}
