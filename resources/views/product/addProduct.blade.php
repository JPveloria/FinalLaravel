@include('partials.header')

<h1>ADDING PAGE</h1>
<form action="/saveProduct" method="POST">
    @csrf
    
    <input type="text" id="form3Example1q" class="form-control" name="name"/>
    <label for="exampleInputlastName" class="form-label">Name</label><br>
    
    <input type="text" id="form3Example1q" class="form-control" name="quantity"/>
    <label for="exampleInputFirstName" class="form-label">Quantity</label><br>
    
    <input type="text" id="form3Example1q" class="form-control" name="contactNumber"/>
    <label for="exampleInputContactNumber" class="form-label">Price</label><br>

    <button type="submit" class="btn btn-primary">Submit</button>

</form>
@include('partials.footer')