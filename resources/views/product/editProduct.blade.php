@include('partials.header')

<h1>EDITING PAGE</h1>
<form action="/updateProduct" method="POST">
    @csrf

    <input type="hidden" id="id" class="form-control" name="id" value="{{$product->id}}"/>
    
    <input type="text" id="form3Example1q" class="form-control" name="name" value="{{$product->name}}"/>
    <label for="exampleInputlastName" class="form-label">Name</label><br>
    
    <input type="text" id="form3Example1q" class="form-control" name="quantity" value="{{$product->quantity}}"/>
    <label for="exampleInputFirstName" class="form-label">Quantity</label><br>
    
    <input type="text" id="form3Example1q" class="form-control" name="price" value="{{$product->price}}"/>
    <label for="exampleInputContactNumber" class="form-label">Price</label><br>

    <button type="submit" class="btn btn-primary">Submit</button>

</form>
@include('partials.footer')