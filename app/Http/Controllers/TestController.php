<?php

namespace App\Http\Controllers;

use App\Models\Option;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTestRequest;

class TestController extends Controller
{
    public function index()
    {
        $categories = Category::where('id',1)->first();
        $category = Category::where('id',2)->first();

        return view('client.test', compact('categories','category'));
    }
    public function post()
    {
        $categories = Category::where('id',1)->first();
        $category = Category::where('id',2)->first();

        return view('client.posttest', compact('categories','category'));
    }

    public function show($show_id)
    {
        $categories = Category::with(['categoryQuestions' => function ($query) {
            $query->inRandomOrder()
                ->with(['questionOptions' => function ($query) {
                    $query->inRandomOrder();
                }]);
        }])
        ->whereHas('categoryQuestions')
        ->findorfail($show_id);

        return view('client.show', compact('categories'));
    }

    public function store(StoreTestRequest $request)
    {
        $options = Option::find(array_values($request->input('questions')));

        $result = auth()->user()->userResults()->create([
            'total_points' => $options->sum('points')
        ]);

        $questions = $options->mapWithKeys(function ($option) {
            return [$option->question_id => [
                        'option_id' => $option->id,
                        'points' => $option->points
                    ]
                ];
            })->toArray();

        $result->questions()->sync($questions);

        return redirect()->route('client.results.show', $result->id);
    }
}
