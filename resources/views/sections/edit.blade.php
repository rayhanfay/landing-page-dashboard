<!-- resources/views/sections/edit.blade.php -->

@extends('adminlte::page')

@section('title', 'Edit Section')

@section('content_header')
    <h1>Edit Section - {{ ucfirst($section->section) }}</h1>
@stop

@section('content')
    <form action="{{ route('sections.update', $section->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="content">Content</label>
            <textarea name="content" id="content" rows="10" class="form-control">{{ $section->content }}</textarea>
        </div>
        <button type="submit" class="btn btn-success">Save</button>
    </form>
@stop
