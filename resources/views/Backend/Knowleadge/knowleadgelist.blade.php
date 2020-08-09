@extends('layouts.admindefault')
@section('content')
<div class="container-fluid">
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
            <table id="responsiveTable"class="table table-hover table-striped text-center custom_responsive">
                <thead class="bg-info text-light">
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Created Date</th>
                        <th scope="col">Updated Date</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                        <td>Active</td>
                        <td><button type="button" class="btn btn-warning text-light">edit</button> </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                        <td>Active</td>
                        <td><button type="button" class="btn btn-warning text-light">edit</button> </td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                        <td>Active</td>
                        <td><button type="button" class="btn btn-warning text-light">edit</button> </td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                        <td>Active</td>
                        <td><button type="button" class="btn btn-warning text-light">edit</button> </td>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                        <td>Active</td>
                        <td><button type="button" class="btn btn-warning text-light">edit</button> </td>
                    </tr>
                    <tr>
                        <th scope="row">6</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                        <td>Active</td>
                        <td><button type="button" class="btn btn-warning text-light">edit</button> </td>
                    </tr>
                    <tr>
                        <th scope="row">7</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                        <td>Active</td>
                        <td><button type="button" class="btn btn-warning text-light">edit</button> </td>
                    </tr>
                    <tr>
                        <th scope="row">8</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                        <td>Active</td>
                        <td><button type="button" class="btn btn-warning text-light">edit</button> </td>
                    </tr>
                    <tr>
                        <th scope="row">9</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                        <td>Active</td>
                        <td><button type="button" class="btn btn-warning text-light">edit</button> </td>
                    </tr>
                    <tr>
                        <th scope="row">10</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                        <td>Active</td>
                        <td><button type="button" class="btn btn-warning text-light">edit</button> </td>
                    </tr>
                </tbody>
            </table>
            <nav aria-label="...">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                        <span class="page-link">Previous</span>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item active">
                        <span class="page-link">
                            2
                            <span class="sr-only">(current)</span>
                        </span>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
@stop