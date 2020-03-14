<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CreateCourseRequest;
use App\Http\Requests\Admin\UpdateCourseRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\Admin\Course;
use Illuminate\Http\Request;
use Flash;
use Response;

class CourseController extends AppBaseController
{
    /**
     * Display a listing of the Course.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        /** @var Course $courses */
        $courses = Course::all();

        return view('admin.courses.index')
            ->with('courses', $courses);
    }

    /**
     * Show the form for creating a new Course.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.courses.create');
    }

    /**
     * Store a newly created Course in storage.
     *
     * @param CreateCourseRequest $request
     *
     * @return Response
     */
    public function store(CreateCourseRequest $request)
    {
        $input = $request->all();

        /** @var Course $course */
        $course = Course::create($input);

        Flash::success(__('messages.saved', ['model' => __('models/courses.singular')]));

        return redirect(route('admin.courses.index'));
    }

    /**
     * Display the specified Course.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Course $course */
        $course = Course::find($id);

        if (empty($course)) {
            Flash::error(__('models/courses.singular').' '.__('messages.not_found'));

            return redirect(route('admin.courses.index'));
        }

        return view('admin.courses.show')->with('course', $course);
    }

    /**
     * Show the form for editing the specified Course.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var Course $course */
        $course = Course::find($id);

        if (empty($course)) {
            Flash::error(__('messages.not_found', ['model' => __('models/courses.singular')]));

            return redirect(route('admin.courses.index'));
        }

        return view('admin.courses.edit')->with('course', $course);
    }

    /**
     * Update the specified Course in storage.
     *
     * @param int $id
     * @param UpdateCourseRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCourseRequest $request)
    {
        /** @var Course $course */
        $course = Course::find($id);

        if (empty($course)) {
            Flash::error(__('messages.not_found', ['model' => __('models/courses.singular')]));

            return redirect(route('admin.courses.index'));
        }

        $course->fill($request->all());
        $course->save();

        Flash::success(__('messages.updated', ['model' => __('models/courses.singular')]));

        return redirect(route('admin.courses.index'));
    }

    /**
     * Remove the specified Course from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Course $course */
        $course = Course::find($id);

        if (empty($course)) {
            Flash::error(__('messages.not_found', ['model' => __('models/courses.singular')]));

            return redirect(route('admin.courses.index'));
        }

        $course->delete();

        Flash::success(__('messages.deleted', ['model' => __('models/courses.singular')]));

        return redirect(route('admin.courses.index'));
    }
}
