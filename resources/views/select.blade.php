<select>
@foreach($datas as $data)
	
	  <optgroup label="{{$data->title_az}}">

		  @foreach($data->categories as $da)

				<option value="{{$da->id}}">{{$da->title_az}} {{$da->id}}</option>

		  @endforeach
	    
	  </optgroup>

@endforeach
</select>

