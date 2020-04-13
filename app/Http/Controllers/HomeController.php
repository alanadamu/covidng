<?php

namespace App\Http\Controllers;
use App\Models\Product\Move;
use App\Models\POS\Order;
use App\Models\POS\ProductLine;
use Carbon\Carbon;
use App\Http\Resources\Home AS HomeResource;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;

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

        $sales = Order::select( DB::raw('MONTHNAME(DATE_ADD(date_order, INTERVAL 0 HOUR)) month'),'id', DB::raw('sum(amount_total) sum'))
        ->groupBy('month')
        ->orderBy('id', 'ASC')
        ->get();
        $dailySales = Order::where( DB::raw('MONTH(DATE_ADD(date_order, INTERVAL 0 HOUR))'), '=', date('n') )
        ->select( DB::raw('DAY(DATE_ADD(date_order, INTERVAL 0 HOUR)) day'),'id', DB::raw('sum(amount_total) sum'))
        ->groupBy('day')
        ->orderBy('day', 'ASC')
        ->get();
        $dailyLabels = Order::select(DB::raw('DAY(DATE_ADD(date_order, INTERVAL 0 HOUR)) day'),'id')
        ->groupBy('day')
        ->orderBy('day', 'ASC')
        ->get();
        $profits = ProductLine::select( DB::raw('MONTHNAME(DATE_ADD(create_date, INTERVAL 0 HOUR)) month'),'id', DB::raw('sum(profit) sum'))
        ->groupBy('month')
        ->orderBy('id', 'ASC')
        ->get();
        $labels = Order::select(DB::raw('MONTHNAME(DATE_ADD(date_order, INTERVAL 0 HOUR)) month'),'id')
        ->groupBy('month')
        ->orderBy('id', 'ASC')
        ->get();

        $profit_today = ProductLine::whereDate(DB::raw('DATE_ADD(create_date, INTERVAL 0 HOUR)'), Carbon::today())->sum('profit');
        $profit_month = ProductLine::where( DB::raw('MONTH(DATE_ADD(create_date, INTERVAL 0 HOUR))'), '=', date('n') )->sum('profit');
        $profit_year = ProductLine::where( DB::raw('YEAR(DATE_ADD(create_date, INTERVAL 0 HOUR))'), '=', date('Y') )->sum('profit');
        $profit_all_time = ProductLine::sum('profit');

        $sales_today = Order::whereDate(DB::raw('DATE_ADD(date_order, INTERVAL 0 HOUR)'), Carbon::today())->sum('amount_total');
        $sales_month = Order::where( DB::raw('MONTH(DATE_ADD(date_order, INTERVAL 0 HOUR))'), '=', date('n') )->sum('amount_total');
        $sales_year = Order::where( DB::raw('YEAR(DATE_ADD(date_order, INTERVAL 0 HOUR))'), '=', date('Y') )->sum('amount_total');
        $sales_all_time = Order::sum('amount_total');
        
        $data['sales_today'] = $sales_today;
        $data['sales_month'] = $sales_month;
        $data['sales_year'] = $sales_year;
        $data['sales_all_time'] = $sales_all_time;

        $data['profit_today'] = $profit_today;
        $data['profit_month'] = $profit_month;
        $data['profit_year'] = $profit_year;
        $data['profit_all_time'] = $profit_all_time;

        foreach ($labels as $label) {
            $data['labels'][]=$label['month'];
        }
        foreach ($dailyLabels as $dailyLabel) {
            $data['dailyLabels'][]=$dailyLabel['day'];
        }
        foreach ($sales as $sale) {
            $data['sales'][]=$sale['sum'];
        }
        foreach ($dailySales as $dailySale) {
            $data['dailySales'][]=$dailySale['sum'];
        }
        foreach ($profits as $profit) {
            $data['profit'][]=$profit['sum'];
        }
        return new HomeResource($data);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $this->middleware('auth');

        return view('pages.dashboard2');
    }
}
