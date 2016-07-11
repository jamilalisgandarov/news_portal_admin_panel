@extends('layouts.app')
@section('content')

  <ul>
{{Session::get('message')}}
  </ul>

  <div class="container">
 
    		<table class="table table-striped">
	    		<thead>
	    			<tr>
		    			<th>Row</th>
		    			<th>Author</th>
		    			<th>Title</th>
		    			<th>Short description</th>
		    			<th>Catecory</th>
		    			<th>updated time</th>
		    			<th>Edit</th>
		    			<th>Delete</th>
	    			</tr>
	    		</thead>
	    		<tbody>
	    			
					@for($i=0;$i<count($news);$i++)
						<tr>
		    				<td>{{$i+1}}</td>
		    				<td>{{$news[$i]->user->first_name}}</td>
		    				<td>{{$news[$i]->title_az}}</td>
		    				<td>{{$news[$i]->short_desc_az}}</td>
		    				<td>{{$news[$i]->subcategory->title_az}}</td>
		    				<td>{{$news[$i]->updated_at}}</td>

		    				<td>
			    				@if(\Auth::user()->status==0||\Auth::user()->id==$news[$i]->user_id)
			    					<a href="/news/{{$news[$i]->id}}/edit">
				    					<button type="button" class="btn btn-default" aria-label="Left Align">
				    						<span class="" aria-hidden="true">Edit</span>
				    					</button>
				    				</a>
				    			@else
		    						<button type="button" class="btn btn-default" aria-label="Left Align" disabled>
		    							<span class="" aria-hidden="true">Edit</span>
		    						</button>
				    			@endif
		    				</td>
		    				<td>
		    					@if(\Auth::user()->status==0||\Auth::user()->id==$news[$i]->user_id)
			    					<a href="/news/{{$news[$i]->id}}/delete">
			    						<button type="button" class="btn btn-default" aria-label="Left Align" >
			    							<span class="" aria-hidden="true">Delete</span>
			    						</button>
			    					</a>
		    					@else
		    						<button type="button" class="btn btn-default" aria-label="Left Align" disabled>
		    							<span class="" aria-hidden="true">Delete</span>
		    						</button>
			    					
		    					@endif
		    				</td>
		    			</tr>
	    			@endfor
	    			
	    		</tbody>
    			
			</table>
    </div>

@endsection
