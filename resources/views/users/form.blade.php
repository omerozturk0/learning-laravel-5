<!-- Name Form Textfield -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
    {!! $errors->first('name', '<small class="text-danger">:message</small>') !!}
</div>

<!-- Email Form Textfield -->
<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
    {!! $errors->first('email', '<small class="text-danger">:message</small>') !!}
</div>

<!-- Password Form Textfield -->
<div class="form-group">
    {!! Form::label('password', 'Password:') !!}
    {!! Form::password('password', ['class' => 'form-control']) !!}
    {!! $errors->first('password', '<small class="text-danger">:message</small>') !!}
</div>

<!-- Password confirmation Form Textfield -->
<div class="form-group">
    {!! Form::label('password_confirmation', 'Password confirmation:') !!}
    {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
    {!! $errors->first('password_confirmation', '<small class="text-danger">:message</small>') !!}
</div>

<!-- Add New Article Submit Button -->
<div class="form-group">
    {!! Form::submit($submitButtonText, ['class' => 'form-control btn btn-primary']) !!}
</div>