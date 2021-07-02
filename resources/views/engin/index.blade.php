@extends('../app')

@section('content')


<div class="col-md-12  p-1 text-center m-2" >
          
   
<span>

  <i class=" fas fa-solid fa-robot text-primary head">
      {{__('ui.title')}}
   
 
  </i>
</span>       

     


</div>


<div class=" container text-center mt-4 m">

  <div class="row mb-4 ">

      <div class="col md-12    d-flex  justify-content-center  ">
          <span  class="fas fa-arrow-alt-circle-up   btn btn-lg btn-info " id="up">

      </div>

  </div>


  <div class="row   justify-content-center ">
      <div class="col-md-4 col-4    d-flex  justify-content-end  ">
          <span class="fas fa-arrow-alt-circle-right d-flex justify-content-end btn btn-lg btn-info "   id="right">

      </div>
 
         
      <div class="col-md-1 col-4   ">
          <span class="far fa-stop-circle btn btn-lg btn-danger" id="stop">

      </div>



      <div class="col-md-4 col-4  d-flex  justify-content-start   ">
          <span class="fas fa-arrow-alt-circle-left d-flex justify-content-start btn btn-lg btn-info" id="left">

      </div>
  </div>

  <div class="row mt-4">

      <div class="col md-12      d-flex  justify-content-center ">
          <span class="fas fa-arrow-alt-circle-down btn btn-lg btn-info  justify-content-center" id="down">

          </span>
      </div>

  </div>

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
            <label class="text-primary mx-auto"> 
                {{__('ui.updated')}}    
            </label>
        </div>

              
          @endif


          @if (session()->exists('msg'))
          <div class="row">
      
          <label class="text-warning mx-auto mt-2"> 

              {{__('ui.run')}} <span class="bg-warning text-dark text-uppercase"> {{$en['status']}} </span>    
          </label>
        </div>
            
        @endif      
    </th>
      <th class="text-light">{{__('ui.thd3')}}  </th>
        </tr>
  

        <tr>
          <td> <label class=" og  w-100  "> <i class="fas fa-cog "> &nbsp  {{__('ui.en1')}}</i>  </td>
          <td>  <input type="range" name="engineN1" class="pointss w-100 " name="points" value={{$en->engineN1}}
            oninput="changevalue3(0); " min="0" max="180">  </td>
          <td>             <label class="ps3 og   w-100     text-light"value={{$en->engineN1}}>{{$en->engineN1}}</label>
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



                





                <input type="hidden" name="status" value='{{$en->status}}'/>

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

    
@endsection
