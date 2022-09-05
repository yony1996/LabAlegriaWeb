<?php

namespace App\Http\Controllers;

use App\Models\Appoiment;
use App\Models\Result;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChartController extends Controller
{
    public function appoiments()
    {
        $appoiments=Appoiment::all()->count();
        $results=Result::all()->count();

        if($appoiments>0){
            //mysql
           $monthlyApCounts = Appoiment::select(
            DB::raw('MONTH(created_at) as month'),
            DB::raw('COUNT(1) as count')
            )->groupBy('month')->get()->toArray();
           //postgrest
           /* $monthlyCounts = Appoiment::select(
            DB::raw('EXTRACT(MONTH FROM created_at) AS month'),
            DB::raw('COUNT(1) AS count')
            )->groupBy('month')->get()->toArray();*/



            $counts = array_fill(0, 12, 0);

            foreach ($monthlyApCounts as $monthlyApCount) {
                $index = $monthlyApCount['month'] - 1;
                $counts[$index] = $monthlyApCount['count'];
            }

           // return view('charts.appoiments', compact('counts'));
        }

        if($results>0){
             //mysql
           $monthlyRsCounts = Result::select(
            DB::raw('MONTH(created_at) as month'),
            DB::raw('COUNT(1) as count')
            )->groupBy('month')->get()->toArray();
           //postgrest
           /* $monthlyCounts = Appoiment::select(
            DB::raw('EXTRACT(MONTH FROM created_at) AS month'),
            DB::raw('COUNT(1) AS count')
            )->groupBy('month')->get()->toArray();*/



            $counts = array_fill(0, 12, 0);

            foreach ($monthlyRsCounts as $monthlyRsCount) {
                $index = $monthlyRsCount['month'] - 1;
                $results[$index] = $monthlyRsCount['count'];
            }
        }

        return view('charts.appoiments', compact('counts','results'));

    }

}
