<x-layout>
    <div class='login-container'>
      <h1>Sign In</h1>
      <div class='login-wrapper'>
         <form action="/login" method="POST" class="login-form">
          @csrf
          <div class="mb-3 login-form-item">
            <div>
              <label for="email" class="form-label">Email</label>
              <input type="email" id="email" name="email" value="{{old('email')}}" placeholder="email.." class="form-input">
            </div>
             @error('email')
                 <small class="error">{{$message}}</small>
             @enderror
          </div>
          <div  class="mb-3 login-form-item">
            <div>
              <label for="password" class="form-label">Password</label>
              <input type="password" id="password"  name="password" placeholder="password.." class="form-input">
            </div>
            @error('password')
                 <small class="error">{{$message}}</small>
            @enderror
          </div>
          <button class="login-btn">Submit</button>
         </form>
      </div>
    </div>
  </x-layout>
