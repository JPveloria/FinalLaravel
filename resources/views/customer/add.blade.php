@include('partials.header')

<h1>ADDING PAGE</h1>
<form action="/saveCustomer" method="POST">
    @csrf
    
    <input type="text" id="form3Example1q" class="form-control" name="lastName"/>
    <label for="exampleInputlastName" class="form-label">Last Name</label><br>
    
    <input type="text" id="form3Example1q" class="form-control" name="firstName"/>
    <label for="exampleInputFirstName" class="form-label">First Name</label><br>
    
    <input type="text" id="form3Example1q" class="form-control" name="contactNumber"/>
    <label for="exampleInputContactNumber" class="form-label">Contact Number</label><br>

    <input type="text" id="form3Example1q" class="form-control" name="address"/>
    <label for="exampleInputAddress" class="form-label">Address</label><br>

    <input type="text" id="form3Example1q" class="form-control" name="email"/>
    <label for="exampleInputEmail" class="form-label">Email</label><br>

    <button type="submit" class="btn btn-primary">Submit</button>

</form>
@include('partials.footer')