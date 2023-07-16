<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Add product</title>
    <meta charset="UTF-8">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link rel="shortcut icon" href="favicon.ico">
    <!-- <meta name="robots" content="noindex, nofollow"> -->
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="product name" value="{{ old('name') }}">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror" cols="30" rows="10">{{ old('description') }}</textarea>
                </div>
    {{--            <div class="form-group">
                    <label for="features">Features</label>
                    <textarea name="features" id="features" class="form-control" cols="30" rows="10"></textarea>
                </div>
                <div class="form-group">
                    <label for="features">Documentation</label>
                    <textarea name="documentation" id="documentation" class="form-control" cols="30" rows="10"></textarea>
                </div>--}}
                <div class="form-group">
                    <label for="name">Price</label>
                    <input type="text" name="price" class="form-control @error('price') is-invalid @enderror" id="price" placeholder="product price" value="{{ old('price') }}">
                </div>

                <div class="form-group">
                    <label for="images">Select Images:</label>
                    <input type="file" name="images[]" multiple class="form-control-file @error('images') is-invalid @enderror" id="images">
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-dark px-4 py-2">Create</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script src="{{ asset('js/vendors.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>
</body>
</html>
