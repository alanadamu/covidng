<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Models\POS\Order;
use App\Models\Covid\State;
use Illuminate\Support\Arr;
use App\Models\Product\Move;
use App\Models\Covid\CovidCase;
use App\Models\POS\ProductLine;
use Illuminate\Support\Facades\DB;
use App\Http\Resources\Home AS HomeResource;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function stats(){

        // $cases = CovidCase::get();

        $cases = CovidCase::select( DB::raw('date'),'id', DB::raw('sum(value) sum'))
        ->groupBy('date')
        ->orderBy('date', 'ASC')
        ->get();
        // $dailyCases = CovidCase::where( DB::raw('MONTH(DATE_ADD(date, INTERVAL 0 HOUR))'), '=', date('n') )
        // ->select( DB::raw('DAY(DATE_ADD(date, INTERVAL 0 HOUR)) day'),'id', DB::raw('sum(value) sum'))
        // ->groupBy('day')
        // ->orderBy('day', 'ASC')
        // ->get();
        $dailyCases = CovidCase::where('date','<','2020-04-20')->where('date','>','2020-04-16')->select( DB::raw('date'),'id', DB::raw('sum(value) sum'))
        ->groupBy('date')
        ->orderBy('date', 'ASC')
        ->get();
        $dailyStateCases = State::with('covid_cases')->get();
        $dateLabels = CovidCase::groupBy('date')->orderBy('date','asc')->get('date');
        // dd($dateLabels);
        // $dailyStateCases = State::withCount(['covid_case' => function ($query) {
        //     $query->select(DB::raw('sum(value)'));
        //     $query->groupBy('date');
        //     // $query->orderBy('date', 'ASC');
        //     // dd($query);
        // }])->where('id',2)->get();
        // $dailyLabels = CovidCase::select(DB::raw('DATE(DATE_ADD(date, INTERVAL 0 HOUR)) day'),'id')
        // ->groupBy('day')
        // ->orderBy('day', 'ASC')
        // ->get();
        // $profits = ProductLine::select( DB::raw('MONTHNAME(DATE_ADD(create_date, INTERVAL 0 HOUR)) month'),'id', DB::raw('sum(profit) sum'))
        // ->groupBy('month')
        // ->orderBy('id', 'ASC')
        // ->get();
        // $labels = Order::select(DB::raw('MONTHNAME(DATE_ADD(date_order, INTERVAL 0 HOUR)) month'),'id')
        // ->groupBy('month')
        // ->orderBy('id', 'ASC')
        // ->get();

        // $profit_today = ProductLine::whereDate(DB::raw('DATE_ADD(create_date, INTERVAL 0 HOUR)'), Carbon::today())->sum('profit');
        // $profit_month = ProductLine::where( DB::raw('MONTH(DATE_ADD(create_date, INTERVAL 0 HOUR))'), '=', date('n') )->sum('profit');
        // $profit_year = ProductLine::where( DB::raw('YEAR(DATE_ADD(create_date, INTERVAL 0 HOUR))'), '=', date('Y') )->sum('profit');
        // $profit_all_time = ProductLine::sum('profit');

        // $sales_today = Order::whereDate(DB::raw('DATE_ADD(date_order, INTERVAL 0 HOUR)'), Carbon::today())->sum('amount_total');
        // $sales_month = Order::where( DB::raw('MONTH(DATE_ADD(date_order, INTERVAL 0 HOUR))'), '=', date('n') )->sum('amount_total');
        // $sales_year = Order::where( DB::raw('YEAR(DATE_ADD(date_order, INTERVAL 0 HOUR))'), '=', date('Y') )->sum('amount_total');
        // $sales_all_time = Order::sum('amount_total');
        
        // $data['sales_today'] = $sales_today;
        // $data['sales_month'] = $sales_month;
        // $data['sales_year'] = $sales_year;
        // $data['sales_all_time'] = $sales_all_time;

        // $data['profit_today'] = $profit_today;
        // $data['profit_month'] = $profit_month;
        // $data['profit_year'] = $profit_year;
        // $data['profit_all_time'] = $profit_all_time;

        // foreach ($labels as $label) {
        //     $data['labels'][]=$label['month'];
        // }

        foreach ($dailyCases as $dailyCase) {
            $data['dailyCases'][]=$dailyCase['sum'];
            $date =  Carbon::parse($dailyCase->date)->format('d/m/Y');
            $data['dailyLabels'][] = $date;
        }
        $data['dailyStateCases'][]=$dailyStateCases;
        $data['dateLabels'][]=$dateLabels;
        $sum_value = 0;
        foreach ($cases as $case) {
            $sum_value += $case['sum'];
            $data['cases'][]=$sum_value;
            $date =  Carbon::parse($case->date)->format('d/m/Y');
            $data['labels'][] = $date;
        }


        // dd($dailyCases);
        return new HomeResource($data);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // $this->middleware('auth');

        return view('pages.dashboard2');
    }
}
