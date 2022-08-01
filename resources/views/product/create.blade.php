@extends('layouts.app')

@section('content')
    <div class="container bg-blue-100 p-4 rounded-lg text-2xl">
        <form action={{ route('products.store') }} method="POST" enctype="multipart/form-data" class="flex gap-3 flex-col">
            @csrf
            <div class="form-group">
                <label for="image">Choose An Image</label>
                <input required type="file" accept="image/*" class="form-control form-control-file" id="image"
                    name="image">
            </div>
            <div class="form-group">
                <label for="name">Product Name</label>
                <input required autocomplete="off" type="text" class="form-control form-control-lg" id="name"
                    placeholder="Enter Product Name" name="name">
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input required autocomplete="off" type="number" step="any" class="form-control form-control-lg"
                    id="price" placeholder="Price" name="price">
            </div>
            <div class="form-group">
                <label for="category">Category</label>
                <select required class="form-control form-control-lg" id="category" name="category">
                    @foreach ($categories as $category)
                        <option>{{ $category }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea required class="form-control form-control-lg" id="description" rows="3" name="description"></textarea>
            </div>
            <button type="submit" class="btn btn-primary bg-blue-400 btn-md text-2xl">Submit</button>
        </form>
        @if ($errors->any())
            <div class="m-auto text-center w-4/8">
                @foreach ($errors->all() as $error)
                    <li class="text-red-500 list-none">
                        {{ $error }}
                    </li>
                @endforeach
            </div>
        @endif
    </div>


@endsection
