@include('block.head')
@include('block.header')
<section id="aa-myaccount">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
        <div class="aa-myaccount-area">         
            <div class="row">
              <div class="col-md-6">
                <div class="aa-myaccount-login">
                <h4>Login</h4>
                 <form method="POST" action="" class="aa-login-form">         
                  <label for="">Username or Email address<span>*</span></label>
                   <input style="border:1pxsolid #ccc; font-size:16px;height:40px; margin-bottom:15px;padding:10px;width:100%" type="email" placeholder="Email">
                   <label for="">Password<span>*</span></label>
                    <input type="password" placeholder="Password">
                    <button type="submit" class="aa-browse-btn">Login</button>
                    <label class="rememberme" for="rememberme"><input type="checkbox" id="rememberme"> Remember me </label>
                    <p class="aa-lost-password"><a href="#">Lost your password?</a></p>
                    @csrf
                  </form>
                </div>
              </div>
            </div>          
         </div>
       </div>
     </div>
   </div>
 </section>
   @include('block.footer')