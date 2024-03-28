<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="login-wrap">
  <h2>Admin Login</h2>
  
  <div class="form">
    <input type="text" placeholder="Username" name="email" />
    <x-input-error :messages="$errors->get('eamil')" class="mt-2" />
    
    <input type="password" placeholder="Password" name="password" />
    <x-input-error :messages="$errors->get('password')" class="mt-2" />
    <button> Sign in </button>
    <a href="#"> <p> Don't have an account? Register </p></a>
  </div>
</div>
    </form>
</x-guest-layout>
