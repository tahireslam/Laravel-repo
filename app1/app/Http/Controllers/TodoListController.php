<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\ListItem;
use Log;
class TodoListController extends Controller
{
    public function index(){
        $items = ListItem::all();
        return view('welcome',compact('items'));
    }
    public function saveItem(Request $request){
        log::info(json_encode($request->all()));
        $newListItem = new ListItem;
        $newListItem->name = $request->listItem;
        $newListItem->is_complete = 0;
        $newListItem->save();
        $items = ListItem::all();
        //return view('welcome',compact('items'));
        return redirect('/');
    }
    public function completeItem(Request $request){
        //delte list item

        log::info(json_encode($request->all()));
        $item = ListItem::find($request->id);
        $item->delete();
        $items = ListItem::all();
        return redirect('/');
       // return view('welcome',compact('items'));
    }
    public function editItem(Request $request){
        //edit list item
        log::info(json_encode($request->all()));
        $item = ListItem::find($request->id);
        $item->name = $request->listItem;
        $item->save();
        $items = ListItem::all();
        //return redirect('/');

       // return view('welcome',compact('items'));
    }
}
