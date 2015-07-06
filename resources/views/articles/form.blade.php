<!-- Title Form Textfield -->
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
    {!! $errors->first('title', '<small class="text-danger">* :message</small>') !!}
</div>

<!-- Body Form Textfield -->
<div class="form-group">
    {!! Form::label('body', 'Body:') !!}
    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
    {!! $errors->first('body', '<small class="text-danger">* :message</small>') !!}
</div>

<!-- Published_at Form Textfield -->
<div class="form-group">
    {!! Form::label('published_at', 'Published On:') !!}
    {!! Form::input('date', 'published_at', $defaultDate, ['class' => 'form-control']) !!}
    {!! $errors->first('published_at', '<small class="text-danger">:message</small>') !!}
</div>

<!-- Tags Form Textfield -->
<div class="form-group">
    {!! Form::label('tag_list', 'Tags:') !!}
    {!! Form::select('tag_list[]', $tags, null, ['class' => 'form-control', 'id' => 'tag_list', 'multiple']) !!}
</div>

<!-- Add New Article Submit Button -->
<div class="form-group">
    {!! Form::submit($submitButtonText, ['class' => 'form-control btn btn-primary']) !!}
</div>