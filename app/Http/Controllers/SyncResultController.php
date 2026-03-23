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

class SyncResultController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        
        // $this->dashboardService = new DashboardService();
        // $this->salesReportService = new SalesReportService();
        // $this->purchaseReportService = new PurchaseReportService();
        // $this->eventService = new EventService();
    }

    public function SyncResultFromEdge(Request $request){
        try{
            dd($request);
            
            return $this->invoiceService->createInvoice($request);
        }catch(\Exception $e){
            throw $e;
        }
    }
}
