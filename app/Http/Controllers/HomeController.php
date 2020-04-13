<?php

namespace App\Http\Controllers;
use App\Models\Product\Move;
use App\Models\POS\Order;
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

        $sales = Order::select( DB::raw('MONTHNAME(date_order) month'),'id', DB::raw('sum(amount_total) sum'))
        ->groupBy('month')
        ->orderBy('id', 'ASC')
        ->get();
        $labels = Order::select(DB::raw('MONTHNAME(date_order) month'),'id')
        ->groupBy('month')
        ->orderBy('id', 'ASC')
        ->get();

        $sales_today = Order::whereDate('date_order', Carbon::yesterday())->sum('amount_total');
        $sales_month = Order::where( DB::raw('MONTH(date_order)'), '=', date('n')-3 )->sum('amount_total');
        $sales_year = Order::where( DB::raw('YEAR(date_order)'), '=', date('Y') )->sum('amount_total');
        $sales_all_time = Order::sum('amount_total');
        
        $data['sales_today'] = $sales_today;
        $data['sales_month'] = $sales_month;
        $data['sales_year'] = $sales_year;
        $data['sales_all_time'] = $sales_all_time;

        foreach ($labels as $label) {
            $data['labels'][]=$label['month'];
        }
        foreach ($sales as $sale) {
            $data['stats'][]=$sale['sum'];
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
        $inv_value = Move::join('product_products', 'product_products.external_id', '=', 'product_moves.product_id')    
        ->join('product_templates', 'product_templates.external_id', '=', 'product_products.product_template_id')        
        ->select('product_moves.product_id', DB::raw('sum(value) sum'),DB::raw('product_templates.type type'))
        ->where('type', 'product')
        ->get()['0'];

        $sales_today = Order::whereDate('date_order', Carbon::yesterday())->sum('amount_total');
        $sales_month = Order::where( DB::raw('MONTH(date_order)'), '=', date('n')-3 )->sum('amount_total');
        $sales_year = Order::where( DB::raw('YEAR(date_order)'), '=', date('Y') )->sum('amount_total');
        $sales_all_time = Order::sum('amount_total');

        return view('pages.dashboard2',[
                                        'inv_value'=>$inv_value,
                                        'sales_today'=>$sales_today,
                                        'sales_month'=>$sales_month,
                                        'sales_year'=>$sales_year,
                                        'sales_all_time'=>$sales_all_time,
                                        ]);
    }
}
