@extends('layouts.main')

@section('hyasabcontentauncha')

<div class="container">
    <div class="container-inner">
        <h2 class="section-title">Add Post Category</h2>
        <div class="post-form-card">
            <form action="{{ route('category.store') }}" method="POST">
                @csrf
                <!-- CATEGORY NAME -->
                @if (session('success'))
                    <p style="color: green">{{ session('success') }}</p>
                @endif
                <div class="form-group">
                    <label>Category Name</label>
                    <input type="text" name="categoryName" placeholder="Enter category name" >
                    @error('categoryName')
                        <p style="color: red">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit" class="btn-submit">
                    Save Category
                </button>
            </form>
        </div>
    </div>
</div>


{{-- Listing CATEOGORIES --}}
<section>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Category Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach ( $categories as $category )
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->categoryName }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</section>


@endsection