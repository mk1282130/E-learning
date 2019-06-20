<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Word;
use App\Option;
use App\Lesson;
use App\Category;
use App\Answer;
use App\LearnedWord;

class LessonController extends Controller
{
    // ***default***

    public function lesson($category_id)
    {
        $lesson = Lesson::firstOrCreate([
            'category_id' => $category_id,
            'user_id' => auth()->user()->id
        ]);
        
        if($lesson->wasRecentlyCreated) {
            return redirect()->route('lesson_show',['lesson_id'=>$lesson->id,'index'=>0]);
        } else {
            return redirect('/category/{id}/result');
        }

        // return view('lesson', compact('words', 'options'));
    }

    // ***restart_lesson***

    // public function lesson($category_id)
    // {
    //     $lesson = Lesson::Create([
    //         'category_id' => $category_id,
    //         'user_id' => auth()->user()->id
    //     ]);

    //     return redirect()->route('lesson_show',['lesson_id'=>$lesson->id,'index'=>0]);
    // }

    public function lesson_show($lesson_id, $index)
    {
        $lesson = Lesson::find($lesson_id);
        $words = Word::where('category_id',$lesson->category_id)->get();
        $word = $words[$index];
        $options = $word->options()->get()->shuffle();
        
        return view('lesson', compact('lesson', 'word', 'index', 'options'));
    }

    public function lesson_store($lesson_id, $option_id, $index)
    {
        $lesson = Lesson::find($lesson_id);
        $option = Option::find($option_id);

        Answer::Create([
            'lesson_id' => $lesson->id,
            'option_id' => $option->id
        ]);

        LearnedWord::firstOrCreate([
            'word_id' => $option->word_id,
            'user_id' => auth()->user()->id
        ]);

        $words = Word::where('category_id',$lesson->category_id)->get();
        $index += 1;

        if (count($words) > $index) {
            return redirect()->route('lesson_show', ['lesson_id' => $lesson->id, 'index' => $index]);
        } else {
            return redirect()->route('result', ['lesson_id' => $lesson->id]);
        }
    }

    public function result($lesson_id)
    {
        $answers = Answer::where('lesson_id', $lesson_id)->get();
        
        return view('result', compact('answers'));
    }

    // public function lesson_log($lesson_id)
    // {
    //     $lesson_log = Answer::find('$lesson_id', $lesson_id);

    //     return view('user', compact('lesson_log'));
    // }

    public function wordImage(Request $request, $word_id) 
    {
        $wordImage = $request->word_image;
        $filename = time().'.'.$wordImage->getClientOriginalExtension();
        request()->word_image->move(public_path('/uploads/word_image/'), $filename );

        $word = Word::find($word_id);
        $word->image = $filename;
        $word->save();
        
        return redirect()->back();
    }
}
