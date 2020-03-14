<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CreatePostRequest;
use App\Http\Requests\Admin\UpdatePostRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\Admin\Post;
use Illuminate\Http\Request;
use Flash;
use Response;

class PostController extends AppBaseController
{
    /**
     * Display a listing of the Post.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        /** @var Post $posts */
        $posts = Post::all();

        return view('admin.posts.index')
            ->with('posts', $posts);
    }

    /**
     * Show the form for creating a new Post.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.posts.create');
    }

    /**
     * Store a newly created Post in storage.
     *
     * @param CreatePostRequest $request
     *
     * @return Response
     */
    public function store(CreatePostRequest $request)
    {
        $input = $request->all();

        /** @var Post $post */
        $post = Post::create($input);

        Flash::success(__('messages.saved', ['model' => __('models/posts.singular')]));

        return redirect(route('admin.posts.index'));
    }

    /**
     * Display the specified Post.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Post $post */
        $post = Post::find($id);

        if (empty($post)) {
            Flash::error(__('models/posts.singular').' '.__('messages.not_found'));

            return redirect(route('admin.posts.index'));
        }

        return view('admin.posts.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified Post.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var Post $post */
        $post = Post::find($id);

        if (empty($post)) {
            Flash::error(__('messages.not_found', ['model' => __('models/posts.singular')]));

            return redirect(route('admin.posts.index'));
        }

        return view('admin.posts.edit')->with('post', $post);
    }

    /**
     * Update the specified Post in storage.
     *
     * @param int $id
     * @param UpdatePostRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePostRequest $request)
    {
        /** @var Post $post */
        $post = Post::find($id);

        if (empty($post)) {
            Flash::error(__('messages.not_found', ['model' => __('models/posts.singular')]));

            return redirect(route('admin.posts.index'));
        }

        $post->fill($request->all());
        $post->save();

        Flash::success(__('messages.updated', ['model' => __('models/posts.singular')]));

        return redirect(route('admin.posts.index'));
    }

    /**
     * Remove the specified Post from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Post $post */
        $post = Post::find($id);

        if (empty($post)) {
            Flash::error(__('messages.not_found', ['model' => __('models/posts.singular')]));

            return redirect(route('admin.posts.index'));
        }

        $post->delete();

        Flash::success(__('messages.deleted', ['model' => __('models/posts.singular')]));

        return redirect(route('admin.posts.index'));
    }
}
