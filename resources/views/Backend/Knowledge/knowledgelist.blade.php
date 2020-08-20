@extends('layouts.admindefault')
@section('title')
Knowledge list
@endsection
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-6">
            <h1 class="title">Article</h1>
        </div>
        <div class="col-6">
            <span class="float-right">
                <a href="{{url('admin/knowledge/create')}}" type="button" class="btn btn-success text-light">Create</a>
            </span>
        </div>
    </div>

    <div class="dropdown-divider"></div>
    <div class="row">
        <div class="col-md-6 col-sm-12">
            <label>
                show &nbsp;
            </label>
            <label>
                <select name="table_length" aria-controls="table" class="form-control">
                    <option value="10">10</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                </select>
            </label>
            <label>
                &nbsp;entries
            </label>
        </div>
        <div class="col-md-6 col-sm-12 text-right custom_seachbar_responsive">
            <label>
                search
            </label>
            <label>
                <input type="search" class="form-control" placeholder="" aria-controls="table">
            </label>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <table id="responsiveTable"
                class="table table-bordered table-hover table-striped text-center custom_responsive">
                <thead class="bg-info text-light">
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col" style="min-width: 25%; width: 25%;">title</th>
                        <th scope="col" style="min-width: 25%; width: 25%;">Description</th>
                        <th scope="col">Created Date</th>
                        <th scope="col">Updated Date</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <?php $count =1 ?>
                @foreach($knowledge as $i)
                <tbody>
                    <tr>
                        <th scope="row">{{$count++}}</th>
                        <td>{{$i->knowledge_heading}}</td>
                        <td>{{$i->knowledge_description}}</td>
                        <td>{{$i->knowledge_created_at}}</td>
                        <td>{{$i->knowledge_updated_at}}</td>
                        <td>
                            @if ($i->knowledge_status === 1)
                            Active
                            @else
                            Inactive
                            @endif
                        </td>
                        <td><a href="{{url('admin/knowledge/edit')}}" type="button"
                                class="btn btn-warning text-light">edit</a> </td>
                    </tr>
                </tbody>
                @endforeach
            </table>
            <div style="padding:20px">
                <ul class="pagination justify-content-center">
                    {{$knowledge->links()}}
                </ul>
            </div>
        </div>
    </div>
</div>
@stop