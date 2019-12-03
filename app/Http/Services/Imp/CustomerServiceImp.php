<?php


namespace App\Http\Services\Imp;


use App\Customer;
use App\Http\Responsitories\Eloquent\CustomerResponsitoryEloquent;
use App\Http\Services\CustomerServiceInterface;

class CustomerServiceImp implements CustomerServiceInterface
{
    protected $customerResponsitory;

    public function __construct(CustomerResponsitoryEloquent $customerResponsitory)
    {
        $this->customerResponsitory = $customerResponsitory;
    }

    function getAll()
    {
        return $this->customerResponsitory->getAll();
    }

    function search($keyword)
    {
        return $this->customerResponsitory->search($keyword);
    }

    function findById($id)
    {
        return $this->customerResponsitory->findById($id);
    }

    function delete($id)
    {
        $customer = $this->customerResponsitory->findById($id);
        return $this->customerResponsitory->delete($customer);
    }

    function create($request)
    {
        $customer = new Customer();
        $customer->name = $request->name;
        $customer->age = $request->age;
        $this->customerResponsitory->save($customer);
    }
}
