<div class="container">
    @if ($errors->any())
        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>
                        {{ $error }}
                    </li>
                @endforeach
            </ul>
        </div>
    @endif
    <h2 class="fs-4 text-secondary my-4">
        {{ __('Dashboard') }}
    </h2>
    <form action="{{ route('admin.projects.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                name="title">
            @error('title')
                <div class="invalid-feedback">
                    Please provide a valid title.
                </div>
            @enderror

        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea type="text" class="form-control @error('description') is-invalid @enderror" id="description"
                name="description" rows="4"></textarea>
            @error('description')
                <div class="invalid-feedback">
                    Please provide a valid description.
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="date" class="form-label">Date</label>
            <input type="date" class="form-control @error('date') is-invalid @enderror" id="date" name="date"
                value="">
            @error('date')
                <div class="invalid-feedback">
                    Please provide a valid date.
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="thumb" class="form-label">Screenshot</label>
            <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="thumb"
                name="thumb" value="">
            @error('thumb')
                <div class="invalid-feedback">
                    Please provide a valid screenshot URL.
                </div>
            @enderror
        </div>

        <div class="d-flex justify-content-between mt-4">
            <a href="{{ route('admin.projects.index') }}" class="btn btn-info">Back to main page</a>
            <button class="btn btn-success">Submit Changes</button>
        </div>
    </form>
</div>
