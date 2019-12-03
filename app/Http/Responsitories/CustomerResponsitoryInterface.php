<?php


namespace App\Http\Responsitories;


interface CustomerResponsitoryInterface
{
    function getAll();

    function search($keyword);

    function delete($customer);

    function findById($id);

    function save($customer);
}
