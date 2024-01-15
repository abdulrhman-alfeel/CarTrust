<nav class="heronab-section ">
    @extends('layouts.app-master')
</nav>
@if(session()->has('message'))
<div class="alert alert-primary"   role="alert">
    <div style="text-align:center">
        <strong>عميلنا العزيز</strong>{{ session()->get('message') }}
    </div>
  </div>
   @endif 
@section('content')
   hellow
@endsection
