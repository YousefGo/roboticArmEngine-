
 function changevalue3($indexnumber){

  var $val =document.getElementsByClassName('pointss')[$indexnumber].value;
   
    document.getElementsByClassName('ps3')[$indexnumber].innerHTML=+$val;

 }


 

 $('#moveControl').submit(function(){
   event.preventDefault();
 let up = $("#up").val();
 let right = $("#right").val();
 let left= $("#left").val();
 let down = $("#right").val();
 let stop = $("#stop").val();
 let _token = $("input[name=_token]").val();

  $.ajax(
      {
      url:"{{route('engine.addMove')}}",  
      type:'POST',
      data:{
          up:up,
          right:right,
          left:left,
          down:down,
          stop:stop , 
          _token : _token ,
      },
      success:function(reponse){

          if(reponse)
          {
             //$("#tbl tbody").prepend();
             console.log(reponse);
          }
      }
      }

  ); // end of ajax 

 })

});