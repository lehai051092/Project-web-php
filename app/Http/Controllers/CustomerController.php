<?php

namespace App\Http\Controllers;

use App\Http\Services\Imp\CustomerServiceImp;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    protected $customerService;

    public function __construct(CustomerServiceImp $customerService)
    {
        $this->customerService = $customerService;
    }

    public function index()
    {
        $customers = $this->customerService->getAll();

        return view("customers.list", compact("customers"));
    }

    public function search(Request $request)
    {
        if ($request->ajax()) {
            $keyword = $request->keyword;
            $customers = $this->customerService->search($keyword);
            return response()->json($customers);
        }
    }

    public function delete($id)
    {
        $this->customerService->delete($id);
        return response()->json([
            'message' => 'xoa thanh cong'
        ]);
    }

    public function add(Request $request)
    {
        if ($request->ajax()) {
            $customer = $this->customerService->create($request);
            return response()->json($customer);
        }
    }
}
