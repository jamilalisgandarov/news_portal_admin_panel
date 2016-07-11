@extends('layouts.app')

@section('content')

    <div class="container">
    	<div class="">
    		<ul class="nav nav-tabs">
			  	<li role="presentation" class="active"><a href="{{'/'}}">Home</a></li>
			  	<li role="presentation"><a href="/news/add">Add News</a></li>
			</ul>
			<hr>
    	</div>
	    <div class="">
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
	    			
					@for($i=1;$i<count($news);$i++)
						<tr>
		    				<td>{{$i+1}}</td>
		    				<td>{{$news[$i]->author->first_name}}</td>
		    				<td>{{$news[$i]->title_az}}</td>
		    				<td>{{$news[$i]->short_desc_az}}</td>
		    				<td>{{$news[$i]->subcategory->title_az}}</td>
		    				<td>{{$news[$i]->updated_at}}</td>

		    				<td>
		    					<a href="/news/{{$news[$i]->id}}/edit">
			    					<button type="button" class="btn btn-default" aria-label="Left Align">
			    						<span class="" aria-hidden="true">Edit</span>
			    					</button>
			    				</a>
		    				</td>
		    				<td>
		    					<a href="/news/{{$news[$i]->id}}/delete">
		    						<button type="button" class="btn btn-default" aria-label="Left Align" >
		    							<span class="" aria-hidden="true">Delete</span>
		    						</button>
		    					</a>
		    				</td>
		    			</tr>
	    			@endfor
	    			
	    		</tbody>
    			
			</table>
			<hr>
	    </div>
    </div>

@stop