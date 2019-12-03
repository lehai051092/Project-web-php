<?php


namespace App\Http\Responsitories\Eloquent;


use App\Customer;
use App\Http\Responsitories\CustomerResponsitoryInterface;

class CustomerResponsitoryEloquent implements CustomerResponsitoryInterface
{
    protected $customer;

    public function __construct(Customer $customer)
    {
        $this->customer = $customer;
    }

    function getAll()
    {
        return $this->customer->all();
    }

    function search($keyword)
    {
       return $this->customer->where("name","LIKE","%$keyword%")->get();
    }

    function delete($customer)
    {
        return $customer->delete();
    }

    function findById($id)
    {
        return $this->customer->findOrFail($id);
    }

    function save($customer)
    {
        $customer->save();
    }
}
