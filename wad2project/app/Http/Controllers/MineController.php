<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Block;
use App\Type;
use App\User;
use Auth;
class MineController extends Controller
{




public function Welcome()
{

        return view('welcome');
}


public function Change()
{
    $id = 1;
    $change = User::find($id);

    return view('Change',compact('change'));
}

public function ChangeNow(Request $request)
{
$id = 1;
$name = $request->name;
$email = $request->email;
$currentpass = bcrypt($request->currentpass);
$newpassword =$request->newpassword;
$verpassword =$request->verpassword;


 
    $user = User::find($id);




    if($currentpass = $user->password)
    {

        if($newpassword == $verpassword)
        {
                $user->name = $name;
                $user->email = $email;
                $user->password = bcrypt($newpassword);
                $user->save();

            \Session::flash('flash_message','You have change your credentials');
            return redirect('AdminPage');
        }
        else
        {
             \Session::flash('flash_message','The passwords you enter does not match');

                 $id = 1;
                 $change = User::find($id);

            return view('Change',compact('change'));
        }
    }

    else
    {

                     \Session::flash('flash_message','The currentpassword you enter is not on the database');

                         $id = 1;
                         $change = User::find($id);


            return view('Change',compact('change'));
    }
}



//--------------------user
public function Index()
{
    $types = Type::all();

return view('index',compact('types'));


}

public function Clear()
{

  return redirect('index');
}


public function ShowBlocks(Request $request,$id)
{   
    $blocks = Block::all()
    ->where('type_id',$id);

    $type = Type::find($id);
    return view('TypeBlocks',compact('type','blocks'));
}

public function ThisBlock(Request $request,$id)
{   

  $block = Block::find($id);
    return view('Block',compact('block','url'));
}





//----------------------admin--------------



public function AdminPage()
{
    if (Auth::guest())
    {
        return redirect('index');
    }
    return view('AdminPage');
}






    public function NewBlockWindow()
    {

            if (Auth::guest())
    {
        return redirect('index');
    }
   $types = Type::all();

    
   			 return view('NewBlock',compact('types'));
    	
 
    }

        public function NewTypeWindow()
    {

            if (Auth::guest())
    {
        return redirect('index');
    }
    	return view('NewType');
    }


    public function CreateBlock(Request $request)
    {

            if (Auth::guest())
    {
        return redirect('index');
    }
    $type_id = $request-> type_id;
    $block_name = $request-> block_name;
    $transparency = $request-> transparency;
    $luminance = $request-> luminance;
    $blast_resistance = $request-> blast_resistance;
    $renewable = $request-> renewable;
    $stackable = $request-> stackable;
    $flammable = $request-> flammable;
    $drops = $request-> drops;
    $description = $request-> description;
  



    $block = new Block;
        $block->type_id = $type_id;
        $block->block_name = $block_name;
        $block->transparency = $transparency;
        $block->luminance = $luminance;
        $block->blast_resistance = $blast_resistance;
        $block->renewable = $renewable;
        $block->stackable = $stackable;
        $block->flammable = $flammable;
        $block->drops = $drops;
        $block->description = $description;
        $block->save();

 \Session::flash('flash_message','You have created a new Block');

        return view('AdminPage');
    }



    public function CreateType(Request $request)
    {

            if (Auth::guest())
    {
        return redirect('index');
    }
    		$type_name = $request-> type_name;

    		$type = new Type;

       			 $type->type_name = $type_name;
       			 $type->save();
 \Session::flash('flash_message','You have created a new Type');
			 return view('AdminPage');
    }



    public function UpdateType(Request $request)
    {

            if (Auth::guest())
    {
        return redirect('index');
    }
    	$types = Type::all();

    	return view('UpdateWhat',compact('types'));
    }

    public function DeleteWhat(Request $request)
    {

            if (Auth::guest())
    {
        return redirect('index');
    }
    	$types = Type::all();

    	return view('DeleteWhat',compact('types'));
    }

    public function DeleteThis(Request $request,$id)
    {

            if (Auth::guest())
    {
        return redirect('index');
    }
    	$delete = Type::find($id);
    	$delete->delete();

 \Session::flash('flash_message','You have Deleted a Type');
    	return redirect('AdminPage');
    }

    public function UpdateBlock(Request $request)
    {

            if (Auth::guest())
    {
        return redirect('index');
    }
    	$blocks = Block::all();

    	return view('UpdateWhatB',compact('blocks'));
    }

        public function UpdateThis(Request $request,$id)
    {

            if (Auth::guest())
    {
        return redirect('index');
    }
    	$type = Type::find($id);
    	return view('UpdateForm',compact('type'));
    	
    }
        public function UpdateNow(Request $request)
    {    if (Auth::guest())
    {
        return redirect('index');
    }

    	$id = $request->id;
    	$type_name = $request->type_name;

    	$type = Type::find($id);

        $type->id = $id;
    	$type->type_name = $type_name;
    	$type->save();

 \Session::flash('flash_message','You have Updated a Type');
    	return redirect('AdminPage');
    	
    }
    public function UpdateThisB(Request $request,$id)
    {
            if (Auth::guest())
    {
        return redirect('index');
    }
    	$block = Block::find($id);
    	$types = Type::all();

    	return view('UpdateFormB',compact('block','types'));
    }

        public function UpdateNowB(Request $request)
    {
            if (Auth::guest())
    {
        return redirect('index');
    }

		$id = $request->id;
		$type_id = $request->type_id;
    	$block_name = $request->block_name;
		$transparency = $request->transparency;
		$luminance = $request->luminance;
		$blast_resistance = $request->blast_resistance;
		$renewable = $request->renewable;
		$stackable = $request->stackable;
		$flammable = $request->flammable;
		$drops = $request->drops;
        $description = $request-> description;
            $image = $request-> image;



    	$block = Block::find($id);
    	$block->id = $id;
    	$type_id = $request->type_id;
    	$block->block_name = $block_name;
    	$block->transparency = $transparency;
    	$block->luminance = $luminance;
        $block->blast_resistance = $blast_resistance;
    	$block->renewable = $renewable;
    	$block->stackable = $stackable;
    	$block->flammable = $flammable;
        $block->flammable = $flammable;
    	$block->drops = $drops;
        $block->description = $description;
        $block->image=$image;
    	$block->save();

 \Session::flash('flash_message','You have Updated a Block');

    	return redirect('AdminPage');
    }

    public function DeleteWhatB(Request $request)
    {
            if (Auth::guest())
    {
        return redirect('index');
    }
    	$blocks = Block::all();

    	return view('DeleteWhatB',compact('blocks'));
    }

    public function DeleteThisB(Request $request,$id)
    {
            if (Auth::guest())
    {
        return redirect('index');
    }
    	$delete = Block::find($id);
    	$delete->delete();

         \Session::flash('flash_message','You have Deleted a Block');

    	return redirect('AdminPage');
    }

    public function Login()
    {
        return view('login');
    }

}


