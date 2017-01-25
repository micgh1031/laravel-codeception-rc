@extends('layouts.adminHead')
@section('content')

   <div class="container">
      <header class="page-header" style="margin-top:80px;">
        <h3 class="page-title">PROJECTS CRAFTED BY NIGERIAN LARAVEL DEVELOPERS</h3>
      </header>

      @if(Session::has('message'))
        <p class="bg-success" style="padding:10px;border-radius:5px;">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
            {{{ Session::get('message') }}}
        </p>
      @endif

      <div class="row">
        @if($project)
          <table class="table table-striped table-bordered">
            <thead>
              <th>No</th>
              <th>Name</th>
              <th>Url</th>
              <th>Description</th>
              <th>Categories</th>
              <th>Email</th>
              <th>Tags</th>
              <th>Approval Status</th>
              <th>Edit</th>
              <th>Delete</th>
            </thead>

            <?php $kar = 1; ?>
            @foreach($project as $proj)
               <tr>
                  <td>{{ $kar }}</td>
                  <td>{{ strtoupper($proj->name) }}</td>
                  <td>{{ $proj->url }}</td>
                  <td>{{ $proj->description }}</td>
                  <td>{{ $proj->categories }}</td>
                  <td>{{ $proj->email }}</td>
                  <td>{{{ $proj->tags }}}</td>
                  <td>
                    @if($proj->approval_status == 0)
                     <p><a class="btn btn-danger" href={{{ URL::to('admin/projects')."/". $proj->id }}}>Not Approved</a></p>
                    @elseif ( $proj->approval_status == 1 )
                        <p class="btn btn-small btn-info">Approved</p>
                    @endif
                  </td>
                  <td><a class="btn btn-info">Edit</a></td>
                  <td><a class="btn btn-danger">Delete</a></td>
               </tr>
              <?php $kar++ ?>
           @endforeach
          </table>
       @endif
      </div>
   </div>
@stop