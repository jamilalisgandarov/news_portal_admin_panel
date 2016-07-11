@extends('layouts.app')
@section('content')
<div style="padding-left:40px; padding-right:40px; min-height:500px">
	<div class="container">
		
		
		<table class="table table-bordered">
			<thead>
				<tr>
					<th class="text-center">Number</th>
					<th class="text-center">Title Az</th>
					<th class="text-center">Title En</th>
					<th class="text-center">Title Ru</th>
					<th class="text-center">Action</th>
				</tr>
			</thead>
			<tbody>
			@if(count($datas)>0)
				<?php $count=0;?>
				@foreach($datas as $data)
				
				
				<tr>
					<td class="text-center"><?php $count=$count+1 ;echo $count ?></td>
					<td class="text-center"><a href="/category/{{$data->id}}">{{$data->title_az}} </a></td>
					<td class="text-center"><a href="/category/{{$data->id}}">{{$data->title_en}} </a></td>
					<td class="text-center"><a href="/category/{{$data->id}}">{{$data->title_ru}} </a></td>
					<td class="text-center">
						<a href="edit/{{$data->id}}/category"><button class="btn btn-success">Edit</button></a>	&nbsp
						<a href="delete/{{$data->id}}/category"><button class="btn btn-danger">Delete</button></a>
					</td>
				</tr>
				
				
				@endforeach
				
				
			</tbody>
		</table>
		
		@endif
		{{--  <button class="btn btn-default"> <a href="/add/category">Create Category</a></button> --}}
	</div>
	
</div>

@endsection
{{-- <option value="volvo">Volvo</option>
<option value="saab">Saab</option> --}}