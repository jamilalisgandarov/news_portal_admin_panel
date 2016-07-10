@extends('layouts.app')
@section('content')

<div style="padding-left:40px; padding-right:40px; min-height:500px">

        <h1>{{$catId->title_az}}</h1>
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
        @if(count($catId->categories)>0)
        <?php $count=0;?>
        @foreach($catId->categories as $subcata)
        
        
        <tr>
            <td class="text-center"><?php $count=$count+1 ;echo $count ?></td>
            <td class="text-center"><a class="mm" href="/subcategory/{{$subcata->id}}">{{$subcata->title_az}}</a></td>
            <td class="text-center"><a class="mm" href="/subcategory/{{$subcata->id}}">{{$subcata->title_en}}</a></td>
            <td class="text-center"><a class="mm" href="/subcategory/{{$subcata->id}}">{{$subcata->title_ru}}</a></td>
            <td class="text-center">
                <a class="mm" href="/edit/{{$subcata->id}}/subcategory"><button class="btn btn-success">Edit</button></a> &nbsp
                <a href="/delete/{{$subcata->id}}/subcategory"><button class="btn btn-danger">Delete</button></a>
            </td>
        </tr>
        
        
        @endforeach
        
        
    </tbody>
</table>

@endif
    <a href="/add/{{$catId->id}}/subcategory">
        <button style="margin-bottom:20px" class="btn btn-primary">Create category for <b style="color:black">{{$catId->title_az}}</b></button>
    </a>
</div>


@endsection
