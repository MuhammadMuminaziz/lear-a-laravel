<input type="text" name="title" class="form-control mb-2 @error('title') is-invalid @enderror" value="{{ old('title', $task->title) }}" placeholder="The name of the title">
@error('title')
<div class="invalid-feedback">
    {{ $message }}
</div>
@enderror
<button class="btn btn-primary" type="submit">{{ $submit }}</button>