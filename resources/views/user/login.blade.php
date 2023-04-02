@include('partials.header')

<h1>SIGN IN!</h1>
<form action="/login/process" method="POST">

  @csrf

  @error('email')
      <p>DI PWEDE ANG IYONG EMAIL!</p>
  @enderror
  <div
         style="background-color:#E6CDAE"
	</div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email address</label>
      <input 
      type="email" 
      class="form-control" 
      id="exampleInputEmail1" 
      aria-describedby="emailHelp"
      name="email">
      <div id="emailHelp" class="form-text">EMAILS ARE CONFIDENTIAL.</div>
    </div>

    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="password" 
      class="form-control" 
      id="exampleInputPassword1"
      name="password">
    </div>
   

    <button type="submit" class="btn btn-primary">Submit</button>
    <br>
    <h6><br><a href={{"/register"}}>WALA KA PANG ACCOUNT? DITO KA GUMAWA!(DI AKO GALIT HA)</a></h6>

</form>

  <br>

  

  @include('partials.footer')