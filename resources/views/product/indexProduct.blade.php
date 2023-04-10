@include('partials.header')
<x-nav/>

<div>

  @if(Session::has('success'))
    {{Session::get('success')}}
    @endif

</div>

<div
         style="background-color:#D28140"
	</div>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Quantity</th>
      <th scope="col">Price</th>
      <th></th>
      <th>

      </th>
    </tr>
  </thead>
  @foreach ($products as $product)
  <tbody>
    <tr>
      <th scope="row">{{$product->id}}</th>
      <td>{{$product->name}}</td>
      <td>{{$product->quantity}}</td>
      <td>{{$product->price}}</td>
      <td><a href="editProduct/{{$product->id}}">Edit</a></td>
      <td><a href="deleteProduct/{{$product->id}}">Delete</a></td>
    </tr>
  </tbody>
  @endforeach
</table>

@include('partials.footer')