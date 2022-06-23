@extends('front/master')

@section("meta_title",$data->meta_title)
@section("meta_keywords",$data->meta_keywords)
@section("meta_description",$data->meta_description)

@section('container')



<h3 style="text-align: center;">{{ $data['name'] }}</h3>
<div class="information">
<div class="container">
<div class="row">
<div class="col-lg-12">
<p style="color: black;text-align: justify;">
	{!! $data['description'] !!}
</p>
</div>
</div>

</div>


@endsection