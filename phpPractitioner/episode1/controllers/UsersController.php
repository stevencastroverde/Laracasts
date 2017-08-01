<?php


class UsersController {

    public function index(){

        $names = App::get('database')->selectAll('names');

        return view('users',compact($names));
    }

    public function store() {

        App::get('database')->insert('names',[
            'name' => $_POST['name'],
        ]);


       return redirect('users');

    }


}