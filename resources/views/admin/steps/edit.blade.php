@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Edit Steps
                </div>

                <div class="panel-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="POST" action="{{ route('admin.steps.update', array('step' => $step)) }}">
                        <input type="hidden" name="_method" value="PUT">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                       <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $step->title) }}" />
                        </div>
                        <div class="form-group">
                             <label for="description">Description</label>
                             <input type="text" class="form-control" id="description" name="description" value="{{ old('description', $step->description) }}" />
                        </div>

                         <!-- <div class="form-group">
                                <label for="steps-content">Description</label>
                                <textarea placeholder="{{ old('description', $step->description) }}"
                                          style="resize: vertical"
                                          id="description-content"
                                          name="description"
                                          rows="10" spellcheck="false"
                                          class="form-control autosize-target text-left">
                                </textarea>
                            </div> -->
                        
                        <div class="form-group">
                            <label for="tip_id">Tip ID</label>
                            <input type="text" class="form-control" id="tip_id" name="tip_id" value="{{ old('tip_id', $step->tip_id) }}" />
                        </div>

                        <!-- <div class="form-group">
                                <label for="steps-content">Tip</label>
                                <textarea placeholder="{{ old('tip', $step->tip) }}"
                                          style="resize: vertical"
                                          id="tip-content"
                                          name="description"
                                          rows="2" spellcheck="false"
                                          class="form-control autosize-target text-left">
                                </textarea>
                            </div> -->

                        <!-- <div class="form-group">
                            <label for="picture">Picture</label>
                            <input type="text" class="form-control" id="picture" name="picture" value="{{ old('picture', $step->picture) }}" />
                        </div> -->

                        <a href="{{ route('admin.steps.index') }}" class="btn btn-default">Cancel</a>
                        <button type="submit" class="btn btn-primary pull-right">Submit</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
