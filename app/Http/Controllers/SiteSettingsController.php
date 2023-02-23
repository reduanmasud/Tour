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

    public function contact_us_page()
    {
        return view('account.contact-us');
    }

    public function contact_us_page_update(Request $request)
    {
        $this->site->site_contact_us = $request->contact;
        $this->site->save();

        return back()->with('success', 'Contact page successfully updated');
    }
    public function index()
    {
        return view('account.settings');
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


    public function update_bkash(Request $request)
    {

        $this->site->site_bkash = $request->site_bkash;
        $this->site->save();

        return back()->with('success', "bKash Successfully Updated");
    }
}
