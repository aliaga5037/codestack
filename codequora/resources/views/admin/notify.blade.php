@extends('layouts.admin')

@section('not')
<li><a href="{{ url('/admin/notify') }}"><i class="fa fa-btn "></i>Notifications
	@if (count($result) != 0)
	<span class="pull-right" style="background: red; padding: 2px;color:white;">
		{{count($result)}}
	</span>
	@endif
</a></li>
@stop
@section('content')
	
<div class="page-content">
	<div class="row">
		<div class="col-md-2">
			<div class="sidebar content-box" style="display: block;">
				<ul class="nav">
					<!-- Main menu -->
					<li><a href="/adminPage"><i class="glyphicon glyphicon-home"></i> Dashboard</a></li>
					<li><a href="/admin/tables"><i class="glyphicon glyphicon-list"></i> Tables</a></li>
					<li><a href="/admin/ques"><i class="glyphicon glyphicon-list"></i> Questions</a></li>
					<li><a href="/admin/cats"><i class="glyphicon glyphicon-list"></i> Categories</a></li>
				</ul>
			</div>
		</div>
		<div class="col-md-10">
			<div class="row">
				<div class="col-md-12">
					<div class="content-box-large">
						<div class="panel-heading">
							<div class="panel-title">Notifications</div>
						</div>
						<div class="panel-body">
						@foreach ($result as $res)
							
						
							<table class="table table-bordered">
								<thead>
									<tr>
										<th>{{$res->sualverena 	}}</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td><a href="/{{$res->user_id}}/question/{{$res->ques_id}}">{{$res->sual}}</a></td>
									</tr>
								</tbody>
							</table>
							@endforeach
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@stop