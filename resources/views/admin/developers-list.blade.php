@extends('layouts.adminHead')
@section('content')

   <div class="container">

      <header class="page-header" style="margin-top:80px;">
        <h3 class="page-title">NIGERIAN LARAVEL DEVELOPER'S DETAIL SUBMISSIONS</h3>
      </header>

       @if( Session::has('message'))
          <p class="bg-success" style="padding:10px;border-radius:5px;">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
              {{{ Session::get('message') }}}
          </p>
      @endif

      <div class="row">
        @if($developer)
        <table class="table table-striped table-bordered">
        <thead>
          <th>No</th>
          <th>Name</th>
          <th>Url</th>
          <th>Bio</th>
          <th>Email</th>
          <th>Work Place</th>
          <th>Code Name</th>
          <th>Tags</th>
          <th>Approval Status</th>
        </thead>

              <?php $kar = 1; ?>
         @foreach ( $developer as $dev )

             <tr>
                <td>{{ $kar }}</td>
                <td>{{ strtoupper($dev->name) }}</td>
                <td>{{ $dev->url }}</td>
                <td>{{ $dev->bio }}</td>
                <td>{{ $dev->email }}</td>
                <td>{{ $dev->work_place }}</td>
                <td>{{ $dev->code_name }}</td>
                <td>{{{ $dev->tags }}}</td>
                <td>

                @if ( $dev->approval_status == 0 )
                   <p><a class="btn btn-danger" href={{{ URL::to('admin/developers')."/". $dev->id }}}>Not Approved</a></p>
                @elseif ( $dev->approval_status == 1 )
                    <p class="btn btn-small btn-info">Approved</p>
                @endif
                </td>
             </tr>

               <?php $kar++ ?>
         @endforeach
       @endif
       </table>
      </div>
   </div>
@stop