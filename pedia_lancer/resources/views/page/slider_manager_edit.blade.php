@extends('main')

@section('content')
<div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-4">Add Slider</h1>
            </div>
<div class="container mx-auto px-4 py-4">    
<form action="/slider_manager-update" method="post" enctype="multipart/form-data">
    @method('put')
    @csrf
    <input type="hidden" name="id" class= "form-control" value="{{$slider->id}}">
    <label for="">Status</label>
    <br>
    <select type="text" name="status" id="status"  class= "form-control">
        <option value="accepted">Accepted</option>
        <option value="rejected">Rejected</option>
        <option value="pending">Pending</option>
    </select>
    <br>
    
    <input type="submit" value="Simpan" class= "btn btn-primary">
</form>
</div>
@endsection