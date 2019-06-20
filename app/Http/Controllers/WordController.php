<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Word;
use App\User;
use App\Category;
use App\Option;
use App\Answer;
use App\Lesson;

class WordController extends Controller
{
    public function word($category)
    {
        $category = Category::find($category);
        return view('admin.word', compact('category'));
    }

    public function save(Request $request, $category_id)
    {
        $word = new Word();
        $word->question = $request->input('question');
        
        $option_1 = new Option();
        $option_1['is_corrected'] = '1';
        $option_1->option = $request->input('option_1');
        
        $option_2 = new Option();
        $option_2['is_corrected'] = '0';
        $option_2->option = $request->input('option_2');
        
        $option_3 = new Option();
        $option_3->option = $request->input('option_3');
        
        $category = Category::find($category_id);
        $category->words()->save($word);
        // $word->category_id = $category_id; *この書き方もできるけど、上記が望ましい

        $word->options()->save($option_1);
        $word->options()->save($option_2);
        $word->options()->save($option_3);

        // $options = $word->options()->get();
        $options = Option::all();

        // dd($option);
        return view('admin.wordList', compact('options', 'word'));
    }

    public function showWords($id)
    {   
        $category = Category::find($id);
        $words = Word::where('category_id', $id)->get();
        // dd($id);
        // $image = Word::find($id);
        
        return view('admin.wordShow', compact('word', 'words', 'category'));
    }

    public function lesson()
    {
        $words = Word::all();
        // dd($word);
        return view('lesson', compact('words'));
    }

    public function wordDelete($id)
    {
        $word = Word::find($id);
        // dd($word);
        $word->delete();

        return back();
    }

    public function wordEdit($id)
    {
        $word = Word::find($id);
        $options = Option::all();
        // dd($option);

        return view('admin.editWords', compact('id', 'word', 'options'));
    }

    // ** It is not finished yet **
    public function update(Request $request, $id)
    {
        $word = Word::find($id);
        $option = Option::find($id);
        $category = Category::find($id);
        // dd($category);

        $word->question = $request->input('question');
        // $option->option = $request->input('option_1');
        // $option_2->option = $request->input('option_2');
        // $option_3->option = $request->input('option_3');
        $word->save();

        return redirect('/category/{id}/showWords', compact('$category'));
    }

    public function saveAnswer(Request $request)
    {
        $answer_1 = new Answer();
        $answer_1->answer = $request->input('option_1');

        $answer_2 = new Answer();
        $answer_2->answer = $request->input('option_2');

        // dd($answer_1);
        $answer_1->save($answer_1);

        // dd($word);
        return view('result');
    }
}