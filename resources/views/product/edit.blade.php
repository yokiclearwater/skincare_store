@extends('layouts.app')

@section('content')
    <div class="container flex md:flex-row flex-col gap-4">
        <img class="md:w-[40%] w-full m-auto rounded-lg object-cover shadow-md" src="{{ asset('images/' . $product->image) }}" alt="">
        <div class="container bg-rose-100 p-4 rounded-lg text-2xl">
            <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data"
                class="flex gap-3 flex-col">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="image">Choose An Image</label>
                    <input type="file" accept="image/*" class="form-control form-control-file" id="image"
                        name="image">
                </div>
                <div class="form-group">
                    <label for="name">Product Name</label>
                    <input required autocomplete="off" type="text" class="form-control form-control-lg" id="name"
                        placeholder="Enter Product Name" name="name" value="{{ $product->name }}">
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input required autocomplete="off" type="number" step="any" class="form-control form-control-lg"
                        id="price" placeholder="Price" name="price" value="{{ $product->price }}">
                </div>
                <div class="form-group">
                    <label for="category">Category</label>
                    <select required class="form-control form-control-lg" id="category" name="category">
                        @foreach ($categories as $category)
                            <option value="{{ $category }}" {{ $product->category == $category ? 'selected' : '' }}>
                                {{ $category }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea required class="form-control form-control-lg" id="description" rows="3" name="description">{{ $product->description }}</textarea>
                </div>
                <button type="submit" class="btn btn-danger bg-rose-400 btn-md text-2xl">Update</button>
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
    </div>


@endsection
