<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
      <style>
        @import "compass/css3";

* { box-sizing: border-box; margin: 0; padding:0; }

html {
  background: #95a5a6;
  background-image: url(http://subtlepatterns2015.subtlepatterns.netdna-cdn.com/patterns/dark_embroidery.png);
  font-family: 'Helvetica Neue', Arial, Sans-Serif;
  
  .login-wrap {
    position: relative;
    margin: 0 auto;
    background: #ecf0f1;
    width: 350px;
    border-radius: 5px;
    box-shadow: 3px 3px 10px #333;
    padding: 15px;
    
    h2 {
      text-align: center;
      font-weight: 200;
      font-size: 2em;
      margin-top: 10px;
      color: #34495e;
    }
    
    .form {
      padding-top: 20px;
      
      input[type="text"],
      input[type="password"],
      button {
        width: 80%;
        margin-left: 10%;
        margin-bottom: 25px;
        height: 40px;
        border-radius: 5px;
        outline: 0;
        -moz-outline-style: none;
      }
      
      input[type="text"],
      input[type="password"] {
        border: 1px solid #bbb;
        padding: 0 0 0 10px;
        font-size: 14px;
        &:focus {
          border: 1px solid #3498db;
        }
      }
      
      a {
        text-align: center;
        font-size: 10px;
        color: #3498db;
        
        p{
          padding-bottom: 10px;
        }
        
      }
      
      button {
        background: #e74c3c;
        border:none;
        color: white;
        font-size: 18px;
        font-weight: 200;
        cursor: pointer;
        transition: box-shadow .4s ease;
        
        &:hover {
          box-shadow: 1px 1px 5px #555;  
        }
          
        &:active {
            box-shadow: 1px 1px 7px #222;  
        }
        
      }
      
    }
    
    &:after{
    content:'';
    position:absolute;
    top: 0;
    left: 0;
    right: 0;    
    background:-webkit-linear-gradient(left,               
        #27ae60 0%, #27ae60 20%, 
        #8e44ad 20%, #8e44ad 40%,
        #3498db 40%, #3498db 60%,
        #e74c3c 60%, #e74c3c 80%,
        #f1c40f 80%, #f1c40f 100%
        );
       background:-moz-linear-gradient(left,               
        #27ae60 0%, #27ae60 20%, 
        #8e44ad 20%, #8e44ad 40%,
        #3498db 40%, #3498db 60%,
        #e74c3c 60%, #e74c3c 80%,
        #f1c40f 80%, #f1c40f 100%
        );
      height: 5px;
      border-radius: 5px 5px 0 0;
  }
    
  }
  
}

.gest-logo{text-align:center;
margin-top:10%}
        </style>
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
            <div class="gest-logo">
                <a href="/">
                   <img src="assets/images/logo2.png" width="100" height="100" alt="logo"  />
                </a>
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
        <script>
            // Login/Register form
// Author: Ian Pirro 
//------------------------------------
// Form will change from login to register and visa-versa based
// on if the user is already "registered"
// "Usernames" min-len is 5 chars
//
// Could be annoying... but fun anyways


// These users "already exist"
var users = [
{ name: 'ianpirro' },
{ name: 'joeschmoe' },
{ name: 'superdev' }
]

var loginform = {
  
  init: function() {
    this.bindUserBox();
  },
  
  bindUserBox: function() {
    var result = {};
    
    $(".form").delegate("input[name='un']", 'blur',  function(){
      var $self = $(this);
      
      // this grep would be replaced by $.post tp check db for user
      result = $.grep(users, function(elem, i){  
        return (elem.name == $self.val());
      });
      
      // This would be callback
      if (result.length === 1) {
        if( $("div.login-wrap").hasClass('register')) {
          loginform.revertForm();
          return;
        }
        else{
          return;
        }
      }
      
      if( !$("div.login-wrap").hasClass('register') ) {
        if ( $("input[name='un']").val().length > 4 )
          loginform.switchForm();
      }

    });
  },
  switchForm: function() {
    var $html = $("div.login-wrap").addClass('register');
    $html.children('h2').html('Register');
    $html.find(".form input[name='pw']").after("<input type='password' placeholder='Re-type password' name='rpw' />");
    $html.find('button').html('Sign up');
    $html.find('a p').html('Have an account? Sign in');
  },
  revertForm: function() {
    var $html = $("div.login-wrap").removeClass('register');
    $html.children('h2').html('Login');
    $html.find(".form input[name='rpw']").remove();
    $html.find('button').html('Sign in');
    $html.find('a p').html("Don't have an account? Register");
  },
  submitForm: function(){
    // ajax to handle register or login
  }
  
} // loginform {}


// Init login form
loginform.init();


// vertical align box   
(function(elem){ 
    elem.css("margin-top", Math.floor( ( $(window).height() / 2 ) - ( elem.height() / 2 ) ) );
}($(".login-wrap")));

$(window).resize(function(){
    $(".login-wrap").css("margin-top", Math.floor( ( $(window).height() / 2 ) - ( $(".login-wrap").height() / 2 ) ) );
  
});
        </script>
    </body>
</html>
