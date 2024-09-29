@include('block.head')
@include('block.header')
<section id="aa-myaccount">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
        <div class="aa-myaccount-area">         
            <div class="row">
              </div>
              <div class="col-md-6">
                
                <div class="aa-myaccount-register"> 
                 <h4>Register</h4>
                 <form method="POST" action="" class="aa-login-form">
                  <label for="">Full Name<span>*</span></label>
                    <input type="text" name="name" placeholder="name">
                    <label  for="">Email address<span>*</span></label>
                    <input style="border:1pxsolid #ccc; font-size:16px;height:40px; margin-bottom:15px;padding:10px;width:100%" type="email" name="email" placeholder="Email">
                    
                    <label for="">Password<span>*</span></label>
                    <input type="password" name="password" placeholder="Password">
                    <label for="">Confirm Password<span>*</span></label>
                    <input type="password" name="confirm_password" placeholder="Confirm Password">
                    <button type="submit" class="aa-browse-btn">Register</button>    
                       @csrf 
                   @endif
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