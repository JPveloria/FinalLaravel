@include('partials.header')

<h1>EDITING PAGE</h1>
<form action="/updateCustomer" method="POST">
    @csrf

    <input type="hidden" id="id" class="form-control" name="id" value="{{$customer->id}}"/>
    
    <input type="text" id="form3Example1q" class="form-control" name="lastName" value="{{$customer->lastName}}"/>
    <label for="exampleInputlastName" class="form-label">Last Name</label><br>
    
    <input type="text" id="form3Example1q" class="form-control" name="firstName" value="{{$customer->firstName}}"/>
    <label for="exampleInputFirstName" class="form-label">First Name</label><br>
    
    <input type="text" id="form3Example1q" class="form-control" name="contactNumber" value="{{$customer->contactNumber}}"/>
    <label for="exampleInputContactNumber" class="form-label">Contact Number</label><br>

    <input type="text" id="form3Example1q" class="form-control" name="address" value="{{$customer->address}}"/>
    <label for="exampleInputAddress" class="form-label">Address</label><br>

    <input type="text" id="form3Example1q" class="form-control" name="email" value="{{$customer->email}}"/>
    <label for="exampleInputEmail" class="form-label">Email</label><br>

    <button type="submit" class="btn btn-primary">Submit</button>

</form>
@include('partials.footer')