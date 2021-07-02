@extends('../app')

@section('content')


    <div class="col-md-12  p-1 text-center m-2 ">


        <span>

            <i class=" fas fa fa-solid fa-robot text-primary head mb-4">
                Control Robot base Engine


            </i>
        </span>


  

    </div>

    <div class=" container text-center mt-4">

        <div class="row mb-4">

            <div class="col md-12    d-flex  justify-content-center  ">
                <span  class="fas fa-arrow-alt-circle-up   btn btn-lg btn-warning text-dark " id="up">

            </div>

        </div>


        <div class="row   justify-content-center ">
            <div class="col-md-4 col-4    d-flex  justify-content-end  ">
                <span class="fas fa-arrow-alt-circle-right d-flex justify-content-end btn btn-lg btn-primary  text-light "   id="right">

            </div>
       
               
            <div class="col-md-1 col-4   ">
                <span class="far fa-stop-circle btn btn-lg btn-danger" id="stop">

            </div>



            <div class="col-md-4 col-4  d-flex  justify-content-start   ">
                <span class="fas fa-arrow-alt-circle-left d-flex justify-content-start btn btn-lg   btn-primary   text-light " id="left">

            </div>
        </div>

        <div class="row mt-4">

            <div class="col md-12      d-flex  justify-content-center ">
                <span class="fas fa-arrow-alt-circle-down btn btn-lg   btn-primary justify-content-center  text-light " id="down">

                </span>
            </div>

        </div>

    </div>

    <script> 
    $("#left").click(function(){
        alert('left');
    });
   </script>








@endsection
