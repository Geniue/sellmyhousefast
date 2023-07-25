<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ServiceLocationController extends Controller
{
    public function home()
    {
        $list1 = [
            "Alabama",
            "Alaska",
            "Arizona",
            "Arkansas",
            "California",
            "Colorado",
            "Connecticut",
            "DC",
            "Delaware",
            "Florida",
            "Georgia",
            "Hawaii",
            "Idaho",
            "Illinois",
            "Indiana",
            "Iowa",
            "Kansas",
        ];
        $list2 = [
            'Kentucky',
            'Louisiana',
            'Maine',
            'Maryland',
            'Massachusetts',
            'Michigan',
            'Minnesota',
            'Mississippi',
            'Missouri',
            'Montana',
            'Nebraska',
            'Nevada',
            'New Hampshire',
            'New Jersey',
            'New Mexico',
            'New York',
            'North Carolina'
        ];
        $list3 = [
            'North Dakota',
            'Ohio',
            'Oklahoma',
            'Oregon',
            'Pennsylvania',
            'Rhode Island',
            'South Carolina',
            'South Dakota',
            'Tennessee',
            'Texas',
            'Utah',
            'Vermont',
            'Virginia',
            'Washington',
            'West Virginia',
            'Wisconsin',
            'Wyoming'
        ];

        $lists = [
            'list1' => $list1,
            'list2' => $list2,
            'list3' => $list3,
        ];
        // dd($lists);
        return view("app.home", compact("lists"));
    }
    public function location($slug)
    {
        $substring = substr($slug, strpos($slug, "houses-") + strlen("houses-"));

        $substring = Str::after($slug, 'houses-');
        // Capitalize the words in the substring
        $heading     = ucwords(str_replace('-', ' ', $substring));
        // dd($heading);
        return view("app.main_location", compact('heading'));
    }
}
