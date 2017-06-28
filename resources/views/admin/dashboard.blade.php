@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                  <a href="{{ route('admin.item.list')}}" class="btn btn-primary">Listado de Items</a>
                  <a href="{{ route('admin.item.create')}}" class="btn btn-primary">Agregar Items</a>
                  <br>
                </div>
            </div>
        </div>
    </div>
@endsection
