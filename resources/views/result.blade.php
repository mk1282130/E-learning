@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <h1>Excercise Result</h1>

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Queation</th>
                        <th scope="col">Answer</th>
                        <th scope="col">Correct_answer</th>
                        <th scope="col">True_of_Fauth</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($answers as $answer)
                    <tr>
                        <th scope="row">{{ $answer->answerGetOption()->first()->optionGetWord()->first()->question }}</th>
                        <td>{{ $answer->answerGetOption()->first()->option }}</td>
                        <td>{{ $answer->answerGetOption()->first()->optionGetWord()->first()->wordGetOption()->where('is_corrected',true)->first()->option }}</td>
                        @if($answer->answerGetOption()->first()->is_corrected)
                        <td>〇</td>
                        @else
                        <td>✖</td>
                        @endif
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
        <div class="col-sm-3"></div>
    </div>
@endsection