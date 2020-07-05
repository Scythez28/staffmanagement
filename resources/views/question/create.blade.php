@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header">Create New Question</div>

                <div class="card-body">
<!--                    <form action="/questionnaires/{{ $questionnaire->id }}/questions" method="post">

                        @csrf

                        <div class="form-group">
                            <label for="question">Question</label>
                            <input name="question[question]" type="text" class="form-control"
                                   value="{{ old('question.question') }}"
                                   id="question" aria-describedby="questionHelp" placeholder="Enter Question">
                            <small id="questionHelp" class="form-text text-muted">Ask simple and to-the-point questions for best results.</small>

                            @error('question.question')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group">
                            <fieldset>
                                <legend>Choices</legend>
                                <small id="choicesHelp" class="form-text text-muted">Give choices that give you the most insight into your question.</small>

                                <div>
                                    <div class="form-group">
                                        <label for="answer1">Choice 1</label>
                                        <input name="answers[][answer]" type="text"
                                               value="{{ old('answers.0.answer') }}"
                                               class="form-control" id="answer1" aria-describedby="choicesHelp" placeholder="Enter Choice 1">

                                        @error('answers.0.answer')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div>
                                    <div class="form-group">
                                        <label for="answer2">Choice 2</label>
                                        <input name="answers[][answer]" type="text"
                                               value="{{ old('answers.1.answer') }}"
                                               class="form-control" id="answer2" aria-describedby="choicesHelp" placeholder="Enter Choice 2">

                                        @error('answers.1.answer')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div>
                                    <div class="form-group">
                                        <label for="answer3">Choice 3</label>
                                        <input name="answers[][answer]" type="text"
                                               value="{{ old('answers.2.answer') }}"
                                               class="form-control" id="answer3" aria-describedby="choicesHelp" placeholder="Enter Choice 3">

                                      @error('answers.2.answer')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div>
                                    <div class="form-group">
                                        <label for="answer4">Choice 4</label>
                                        <input name="answers[][answer]" type="text"
                                               value="{{ old('answers.3.answer') }}"
                                               class="form-control" id="answer4" aria-describedby="choicesHelp" placeholder="Enter Choice 4">

                                      @error('answers.3.answer')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                            </fieldset>
                        </div>

                        <button type="submit" class="btn btn-primary">Add Question</button>

                    </form>-->
                    <form action="/questionnaires/{{ $questionnaire->id }}/questions" method="post">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="form-group">
                                    <select class="browser-default custom-select custom-select-lg " name="question[question_type]" id="question_type" required>
                                    <option value="" disabled selected>Choose your option</option>
                                    <option value="text">Text</option>
                                    <option value="textarea">Textarea</option>
                                    <option value="checkbox">Checkbox</option>
                                    <option value="radio">Radio Buttons</option>
                                    </select>               
                                <input class="form-control form-control-lg mt-4" name="question[question]" id="title" placeholder="Question" type="text" required> 
                                    <!-- this part will be in init.js -->
                                <span class="form-g"></span>

                                <div class="mt-4">
                                <button class="btn btn-primary">Submit</button>
                                </div>
                                </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
