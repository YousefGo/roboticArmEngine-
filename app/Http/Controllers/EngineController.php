<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Engin;
use Illuminate\Support\Facades\App;
class EngineController extends Controller
{
    // here  you should put id of enignie but the requiment is not clear 
    public  function showEngine($lang){
        App::setlocale($lang);
        $en =Engin::find(1);
        
        return view('engin.index',compact(('en')));
    }

    public  function showArabic(){
        App::setlocale('ar');
        $en =Engin::find(1);
        
        return view('engin.index',compact(('en')));
    }



    public  function update(Request $req){
        $en =Engin::find(1);
       
        if(isset($req->st)){
            if($req['status']=='on'){
                
                 $en['status']='off';
             
            }
            else {
              
               $en['status']='on';
            }
            $msg = "";
            session()->flash('msg',$msg);

            
        }
        else{

            $en['engineN1']=$req['engineN1'];
            $en['engineN2']=$req['engineN2'];
            $en['engineN3']=$req['engineN3'];
            $en['engineN4']=$req['engineN4'];
            $en['engineN5']=$req['engineN5'];
            $en['engineN6']=$req['engineN6'];
            session()->flash('message','updated succuessfly');

        }
    
     
        $en->save();
     
        return redirect()->route('engine.index',$req->lang);
    }



}
