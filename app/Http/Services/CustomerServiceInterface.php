<?php


namespace App\Http\Services;


interface CustomerServiceInterface
{
    function getAll();

    function search($keyword);

    function findById($id);

    function delete($id);

    function create($request);
}
