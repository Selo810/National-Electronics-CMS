@extends('layouts.main')
@section('content')


<div class="section">

<h4 class="blue-text">View Brands</h4>
<div>
<button class="button"> <a href="http://ne-cms-seanskiver.c9users.io/brand/create">Create a new Brand</a></button>
</div>
<br />
<table class="striped">
        <thead class="blue lighten-1">
          <tr>
              <th data-field="BrandName">Brand Name</th>
              <th data-field="Category">Category</th>
              <th data-field="ImagePath">Image Path</th>
              <th data-field="Created">Created </th>
              <th data-field="LastUpdated">Last Updated</th>
              <th data-field="edit" style="width: 1px;">edit</th>
              <th data-field="Delete" style="width: 1px;">Delete</th>
              
          </tr>
        </thead>
  
        <tbody>
        @foreach ($brands as $b)
        
        <tr>
            <td></b>{{ $b->brand_name }} </td>
            <td></b>{{ $b->category->category_name }}</td>
            <td> {{ $b->brand_image }} </td>
            <td></b> {{ date_format($b->created_at, "m/d/Y") }} at {{ date_format($b->created_at, "h:m A")  }}</td>
                        <td> {{ date_format($b->updated_at, "m/d/Y") }} at  {{ date_format($b->updated_at, "h:m A")  }}</td>
                        <td> <button class="button"><a href="/brand/edit/{{ $b->id }}" ><i class="Medium material-icons">mode_edit</i></a></button></td>
                        
                        <td><form action="/brand/{{$b->id}}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                
                            <button class="button" type="submit"><i class="Medium material-icons">delete</i></button>
                </form>
            </td>
        </tr>
        
          @endforeach
        </tbody>
      </table>
</div>



@endsection
            