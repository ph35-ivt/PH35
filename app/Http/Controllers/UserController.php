<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Country;
use App\Post;
use App\Comment;
use App\RoleUser;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $listCountry= Country::all();
        return view('user.create_user', compact('listCountry'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        User::create($data);
        dd( 'success');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //CÁCH 1
        // //xoá post
        // $listPost = Post::where('user_id', $id)->get();
        // foreach ($listPost as  $post) {

        //     //xoá comment
        //     $listComment = Comment::where('post_id', $post->id)->get();
        //     foreach ($listComment as $comment) {
        //         $comment->delete();
        //     }
        //     $post->delete();
        // }
        // //xoá role user
        // $listRoleUser = RoleUser::where('user_id', $id)->get();
        // foreach ($listRoleUser as $roleUser) {
        //     $roleUser->delete();
        // }
        // User::destroy($id);
        // return 'success';

        //CÁCH 2
        $user = User::find($id);
        //1.xoá comment
        $user->comments()->delete();
        //2. xoá post
        $user->posts()->delete();
        //3. xoá role user
        $user->roleUsers()->delete();
        //4. xoá user
        $user->delete();
        // User::destroy($id);
        return 'success';
    }
}
