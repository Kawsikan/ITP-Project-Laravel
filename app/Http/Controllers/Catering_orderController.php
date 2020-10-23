<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use App\Catering_order;
use App\Customer;

class Catering_orderController extends Controller
{
        // Show customer Detail name, email, tel, permanent address & package detail date, location, Bill amount
        public function adminShowAllCOrders(){
                $corder = Catering_order::all()->where('cstatus','incomplete');
                $count = Catering_order::all()->where('cstatus','completed')->count();
                return view('catering_orders.showcorder', ['corders' => $corder, 'count' => $count]);
            }

        public function adminViewAllCOrders($id){
            //$customer = Customer::find($id);
            $corder = Catering_order::findorFail($id);
            return view('catering_orders.viewcorder',['corders' => $corder]);
        }
        public function searchcorder(Request $request){
            $searchcorder = $request->get('searchcorder');
            $corder = DB::table('catering_orders')->where('name', 'like','%'.$searchcorder.'%')->paginate(10);   
            $count = Catering_order::all()->where('cstatus','completed')->count();
            return view('catering_orders.showcorder', ['corders' => $corder, 'count' => $count]);
        } 

       /* public function getCateringOrderPay()
        {
            $orders = Catering_order::all();
            return view('cateringorders',compact('caterorders'));
    
        }
    
    
        public function showCateringOderPayDetails()
        {
            $caterorders = Catering_order::all();
            return view('cateringorders',compact('caterorders'));
    
        }
    
        public function deleteCateringOderPayment($id)
        {
            $caterorders = Catering_order::find($id);
            $caterorders->delete();
            return redirect()->back();
        }
    
        public function calcTotIncomeCatering(){
            $calcTotcatering = DB::table('catering_orders')->sum('amount');
            $incomecatering = new CateringReports();
            $incomecatering->amount = $calcTotcatering;
            $incomecatering->save();
    
           return redirect()->back()->with('msg','Amount has been calculated');
    
    }*/

}
