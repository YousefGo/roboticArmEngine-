<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Robotic Arm </title>
  

    <script type="text/javascript" src=" {{ asset("js/app.js") }}"></script>

    <link href = {{ asset("css/app.css") }} rel="stylesheet" />

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <style> 
    *{
       direction:  {{__('ui.styledir')}}
    }
    </style>


</head>

<body>
  
   <div class="continer-fulid">


      <nav class="navbar navbar-expand-lg navbar-dark darkBlue">
        <a class="navbar-brand" href="/"> {{__('ui.logo')}}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse m-2" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto" style="">
             
            <li class="nav-item dropdown ">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown09" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="flag-icon flag-icon-us"> </span> English</a>
                <div class="dropdown-menu" aria-labelledby="dropdown09">
                    <a class="dropdown-item"  href="{{route('engine.index','ar')}}"><span class="flag-icon flag-icon-fr"> </span>  عربي </a>
                    <a class="dropdown-item"href="{{route('engine.index','en')}}"><span class="flag-icon flag-icon-it"> </span>  English</a>
                </div>
            </li>

           
        
          </ul>
        
        </div>
      </nav>

         @yield('content')

   

     

        
      
      

    






       






















          



       






    </div>














  




















   








    <script type="text/javascript" src="{{ asset('js/script.js') }}"></script>

</body>

</html>
