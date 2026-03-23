<?php

namespace app\Http\Controllers\Admin;

// use App\Modules\Dashboard\Services\DashboardService;
// use App\Modules\Report\Services\SalesReportService;
// use App\Modules\Report\Services\PurchaseReportService;
// use App\Modules\Member\Services\MemberService;
// use App\Modules\Event\Services\EventService;
// use App\Modules\Member\Requests\MemberCreateRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//use Carbon\Carbon;
//use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        
        // $this->dashboardService = new DashboardService();
        // $this->salesReportService = new SalesReportService();
        // $this->purchaseReportService = new PurchaseReportService();
        // $this->eventService = new EventService();
    }

    //public function dashboard(Request $request)
    public function dashboard()
    {

        //dd(Auth::user()->name);
        //dd('xcxc');
        //$data['monthlySales'] = $this->dashboardService->monthlySalesReport($request);
        //$data['monthlyPurchase'] = $this->dashboardService->monthlyPurchaseReport($request);
        //$data['monthlySalesReturn'] = $this->dashboardService->monthlySalesReturnReport($request);
        //$data['chqIn'] = 125000.00;
        //$data['event'] = $this->eventService->getEventsOnToday();
        $data['slug'] = 'dashboard';
        $data['title'] = 'Dashboard';
        $data['sub_page'] = 'Dashboard';
        return view('admin.dashboard.admin_dashboard', $data);
    }

    // public function generateReportByDateRange(Request $request){
    //     return $this->dashboardService->generateReportByDateRange($request);
    // }
}
