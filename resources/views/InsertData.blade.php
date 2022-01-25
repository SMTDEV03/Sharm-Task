<head>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<section class="vh-100 bg-image" style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">

<style>
 .text-center.text-muted.mt-5.mb-0.log-btn.col {
    display: none;
}
p.text-center.text-muted.mt-5.mb-0.mrgn-btn {
  margin-top: 1rem!important;
}
.col {
float: left;
width: 109%;
margin: auto;
padding: 9px 0px;
margin-top: 6px;
}
.google {
background-color: #dd4b39;
color: white;
}
.btb-log {
  padding: 6px;
  font-size: 1.10rem;
}
.error {color: #FF0000;}

.text-danger {
    color: #FF0000;
    margin: 0 0 0 3px;
}
.sub-1 {
    text-align: center;
    font-weight: 500;
    margin: 10px 0 -8px 0;
}
</style>
</head>
 @if (session()->get('success'))
    <div class="alert alert-danger">
       <span> {{ session()->get('success') }}</span>
    </div>
@endif 
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Add User</h2>

              <form action="insertation" method="POST">
                @csrf
                    <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example1cg">Name</label>
                      <input type="text" id="fname" name="fname" class="form-control form-control-lg" />
                      @if ($errors->has('Name'))
                        <span class="text-danger uname">{{ $errors->first('Name') }}</span>
                       @endif
                      
                    </div>

                    <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example3cg">Email</label>
                         <input type="email" id="form3Example3cg" name="email" class="form-control form-control-lg" />
                         @if ($errors->has('email'))
                           <span class="text-danger paswd">{{ $errors->first('email') }}</span>
                         @endif
                        
                    </div>

                    <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example4cg">Phone</label>
                         <input type="text" id="phone" name="phone" class="form-control form-control-lg" />
                         <span class="error"></span>   
                         @if ($errors->has('phone'))
                           <span class="text-danger paswd">{{ $errors->first('phone') }}</span>
                         @endif
                         
                    </div>
                   
                   <div class="d-flex justify-content-center">
                    <button type="submit" name="submit" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body btb-log">Add</button>
                    </div>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>