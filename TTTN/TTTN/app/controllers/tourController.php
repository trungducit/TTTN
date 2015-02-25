<?php

class UsersController extends BaseController{

    public function  postTimSanpham(){
        // $chungloai= Chung_loai::all();
        //$loai=  Loai::all();
        $data=  Input::all();
        if(Input::get('text-search')==1){
            $searchtour = DB::table("tbl_tour")
                ->Where("tentour", "like", "%{$data['text-search']}%")
                ->get();
            return View::make("searchtour")->with("tour", $searchtour);

        }
    }
}



