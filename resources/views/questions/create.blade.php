@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h2>Ask Questions</h2>
                        <div class="ml-auto">
                            <a href="{{ route('questions.index') }}" class="btn btn-outline-secondary">Back</a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <form action="{{ route('questions.store') }}" method="post">
                    	@csrf
                    	<div class="form-group">
                    		<label for="question-title">Question Title</label>
                    		<input type="text" name="title" id="question-title" class="form-control {{ $error->has('title') ? 'is-invalid' : '' }}">
                    		@if($error->has('title'))
                    			<div class="invalid-feedback">
                    				<strong>{{ $error->first('title') }}</strong>
                    			</div>
                    		@endif
                    	</div>
                    	<div class="form-group">
                    		<label for="question-body">Explain Question</label>
                    		<textarea name="body" id="question-body" class="form-control {{ $error->has('body') ? 'is-invalid' : '' }}" row="10"></textarea>
                    		@if($error->has('body'))
                    			<div class="invalid-feedback">
                    				<strong>{{ $error->first('titbodyle') }}</strong>
                    			</div>
                    		@endif
                    	</div>
                    	<div class="form-group">
                    		<button type="submit" class="btn btn-outline-primary btn-lg">Ask Question</button>
                    	</div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
