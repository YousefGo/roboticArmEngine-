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
                    <a class="dropdown-item"  href="{{route('engine.showarabic')}}"><span class="flag-icon flag-icon-fr"> </span>  عربي </a>
                    <a class="dropdown-item"href="{{route('engine.index','en')}}"><span class="flag-icon flag-icon-it"> </span>  English</a>
                </div>
            </li>

           
        
          </ul>
        
        </div>
      </nav>

   

   

     

        <div class="col-md-12  p-1 text-center m-2" >
          
                <span>

                    <i class=" fas fa-solid fa-robot text-primary head">
                        {{__('ui.title')}}
                     
                   
                    </i>
                </span>

     


        </div>
        <form action="{{route('store.engine')}}" method="Post"  class="text-center" onload="myFunction()">
          @csrf
         <div class="container">
            <table class="table black  text-center  ">
                <tr>
              <th class="text-light"> {{__('ui.thd1')}}</th>
              <th>  
                  
                 
                @if (session()->exists('message'))
        
                <div class="row">
                    <h4 class="text-primary mx-auto"> 
                        {{__('ui.updated')}}    
                    </h4>
                </div>
    
                      
                  @endif
    
    
                  @if (session()->exists('msg'))
                  <div class="row">
              
                  <h4 class="text-warning mx-auto mt-2"> 
    
                      {{__('ui.run')}} {{$en['status']}}    
                  </h4>
                </div>
                    
                @endif
            
              </th>
              <th class="text-light">{{__('ui.thd3')}}  </th>
                </tr>
            
               <td>  <label class=" og  w-100 "> <i class="fas fa-cog "> &nbsp  {{__('ui.en1')}}</i> </label></td>
               <td>   <input type="range" step='0.1' name="engineN1" class="pointss   "  value={{$en->engineN1}}
                oninput="changevalue3(0); " min="0" max="180" ></td>
               <td>                 <label class="ps3 og   w-100    text-light" value='{{$en->engineN1}}'>{{$en->engineN1}}</label>
               </td>
    
      
                </tr>

              <tr>
              <td> <label class=" og  w-100  "> <i class="fas fa-cog "> &nbsp  {{__('ui.en2')}}</i>  </td>
              <td>  <input type="range" name="engineN2" class="pointss w-100 " name="points" value={{$en->engineN2}}
                oninput="changevalue3(1); " min="0" max="180">  </td>
              <td>             <label class="ps3 og   w-100     text-light"value={{$en->engineN2}}>{{$en->engineN2}}</label>
              </td>

              </tr>


              <tr>
                <td> <label class=" og  w-100  "> <i class="fas fa-cog "> &nbsp  {{__('ui.en3')}}</i>  </td>
                <td>  <input type="range" name="engineN3" class="pointss w-100 "  value={{$en->engineN3}}
                  oninput="changevalue3(2); " min="0" max="180">  </td>
                <td>             <label class="ps3 og   w-100     text-light"value={{$en->engineN3}}>{{$en->engineN3}}</label>
                </td>
  
                </tr>


                <tr>
                    <td> <label class=" og  w-100  "> <i class="fas fa-cog "> &nbsp  {{__('ui.en4')}}</i>  </td>
                    <td>  <input type="range" name="engineN4" class="pointss w-100 "  value={{$en->engineN4}}
                      oninput="changevalue3(3); " min="0" max="180">  </td>
                    <td>             <label class="ps3 og   w-100     text-light"value={{$en->engineN4}}>{{$en->engineN4}}</label>
                    </td>
      
                    </tr>



                    <tr>
                        <td> <label class=" og  w-100  "> <i class="fas fa-cog "> &nbsp  {{__('ui.en5')}}</i>  </td>
                        <td>  <input type="range" name="engineN5" class="pointss w-100 "  value={{$en->engineN5}}
                          oninput="changevalue3(4); " min="0" max="180">  </td>
                        <td>             <label class="ps3 og   w-100     text-light"value={{$en->engineN5}}>{{$en->engineN5}}</label>
                        </td>
          
                        </tr>



                        
                    <tr>
                        <td> <label class=" og  w-100  "> <i class="fas fa-cog "> &nbsp  {{__('ui.en6')}}</i>  </td>
                        <td>  <input type="range" name="engineN6" class="pointss w-100 "  value={{$en->engineN6}}
                          oninput="changevalue3(5); " min="0" max="180">  </td>
                        <td>             <label class="ps3 og   w-100     text-light"value={{$en->engineN6}}>{{$en->engineN6}}</label>
                        </td>
          
                        </tr>



                        






                        <input type="hidden" name="lang" value='{{__('ui.lang')}}'/>

             </table>
             <button type="submit" class="btn btn-primary  col-md-2      btn-sm border border-light border-3  h-50">
                <span>
                    <i class=" fas fa-solid fa-server text-light p-1"> {{__('ui.saveBtn')}} </i>
                </span>
            </button>
          
         
                <button type="submit" name="st"  value="{{$en->status}}"
                    class="btn btn-warning col-md-2 btn-sm border border-warning border-3 h-50">
    
                    <span>
                        <i class="fa-solid fas fa-play text-dark p-1">
                            {{__('ui.runBtn')}}
                            @if ($en->status=='on')
                               {{'OFF'}}
                            @else
                            {{'ON'}}

                            @endif
                        </i>
    
                    </span>
                </button>

         </div>

         
        </form>
      

    






       






















          



       






    </div>














  




















   








    <script type="text/javascript" src="{{ asset('js/script.js') }}"></script>

</body>

</html>
