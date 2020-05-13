@extends('schools.layout.schoollayout')

@section('title', 'Inventory Manager')

@section('content')

    <h3 class="center {{$school->themeColor ?: 'blue'}} white-text">INVENTORY MANAGEMENT SYSTEM</h3>

    

<script type="module" src="{{asset('assets/js/inventoryManager.js')}}"></script>
@endsection