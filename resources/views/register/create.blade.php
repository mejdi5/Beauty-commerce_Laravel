<x-layout>
  <div class='register-container'>
    <h1>Sign Up</h1>
    <div class='register-wrapper'>
       <form action="/register" method="POST" class="register-form">
        @csrf
        <div class="mb-3 register-form-item">
          <div>
            <label for="name" class="form-label">First Name</label>
            <input type="text" id="name" name="name" value="{{old('name')}}" placeholder="name.." class="form-input">
          </div>
           @error('name')
               <small class="error">{{$message}}</small>
           @enderror
        </div>
        <div class="mb-3 register-form-item">
          <div>
            <label for="lastName" class="form-label">Last Name</label>
            <input type="text" id="lastName" name="lastName" value="{{old('lastNname')}}" placeholder="last name.." class="form-input">
          </div>
           @error('lastName')
               <small class="error">{{$message}}</small>
           @enderror
        </div>
        <div class="mb-3 register-form-item">
          <div>
            <label for="email" class="form-label">Email</label>
            <input type="email" id="email" name="email" value="{{old('email')}}" placeholder="email.." class="form-input">
          </div>
           @error('email')
               <small class="error">{{$message}}</small>
           @enderror
        </div>
        <div  class="mb-3 register-form-item">
          <div>
            <label for="password" class="form-label">Password</label>
            <input type="password" id="password"  name="password" placeholder="password.." class="form-input">
          </div>
          @error('password')
               <small class="error">{{$message}}</small>
          @enderror
        </div>
        <button class="register-btn">Submit</button>
       </form>
    </div>
  </div>
</x-layout>


