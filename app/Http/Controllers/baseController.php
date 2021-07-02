<?php

namespace App\Http\Controllers;
use App\Models\Move;

use Illuminate\Http\Request;

class baseController extends Controller
{
    public function addMove(Request $req){
        $move = new Move();

        if(isset($req->up)){   
        $move->up = 1;
        $move->save();
        return response()->json($move);
        
        }
        else if (isset($req->right)){
            $move->right = 1;
            $move->save();
            return response()->json($move);

            
        }
        else if (isset($req->left)){
            $move->left = 1;
            $move->save();
            return response()->json($move);

        }
        else if (isset($req->down)){
            $move->down = 1;
            $move->save();
            return response()->json($move);

        }
        else if (isset($req->stop)){
            $move->stop = 1;
            $move->save();
            return response()->json($move);
 
        }
    
    } 
}
