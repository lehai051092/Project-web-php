@extends('layouts.design')
@section('content')
    <div class="container">
        <form class="form-inline my-2 my-lg-0">
            @csrf
            <form class="form-inline">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-search"></i></span>
                    </div>
                    <input type="text" class="form-control" id="search-customers"  aria-label="Username" aria-describedby="basic-addon1">
                </div>
            </form>
        </form>
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Age</th>
                <th colspan="2"></th>
            </tr>
            </thead>
            <tbody id="list-customers">
            @foreach($customers as $key => $customer)
                <tr class="customer-{{$customer->id}}">
                    <th scope="row">{{++$key}}</th>
                    <td>{{$customer->name}}</td>
                    <td>{{$customer->age}}</td>
                    <td><button type="button" class="btn btn-danger delete-customer" data-id="{{$customer->id}}">DELETE</button></td>
                    <td><button type="button" class="btn btn-primary">EDIT</button></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
