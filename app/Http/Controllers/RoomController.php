<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use Auth;
use App\Http\Requests\CustomerRequest;
use App\Http\Requests\RoomRequest;
use App\Room;
use Illuminate\Http\Request;
class RoomController extends Controller
{
    //
    public function getAdd(){
		return view('backend.Room');
    }
    public function postAdd(RoomRequest $request){
        $room = new Room();
        $room->name = $request->inputName;
        $file=$request->file('inputFile')->getClientOriginalName();

        $room->image = $request->file('inputFile')->move('public/img/',$file);
        $room->image = 'public/img/'.$file;
		$room->typeroom = $request->inputTyperoom;
		$room->number = $request->inputNumber;
		$room->area = $request->inputArea;
        $room->price = $request->inputPrice;

		$room->save();
		return redirect('display');
	}
	public function getList(){
		$rooms = Room::all();
		return view('backend.RoomDisplay',compact('rooms'));
    }

}
