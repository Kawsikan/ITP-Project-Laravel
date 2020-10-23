@extends('layouts.adminapp')

@section('content')


@php
    $check = session('check');    

@endphp
@if( $check == 2)
    <script>alert('Package Removed Unsuccessful')</script>
 
@elseif($check== 1)
<script>alert('Package Removed successfully')</script>
@endif

<!DOCTYPE html>
<html lang="en">
<head>
  
<style>

h1, form, input, p { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 16px;
      color: #666;
      }
      h1 {
      padding: 10px 0;
      font-size: 32px;
      font-weight: 300;
      text-align: center;
      }
      p {
      font-size: 12px;
      }
      hr {
      color: #a9a9a9;
      opacity: 0.3;
      }
      .main-block {
      max-width: 380px; 
      min-height: 250px; 
      padding: 10px 0;
      margin: 10% auto;
      border-radius: 5px; 
      border: solid 1px #ccc;
      box-shadow: 1px 2px 5px rgba(0,0,0,.31); 
      background: #ebebeb; 

      position: absolute;
      left:42%;
      top:10%;
      }
      form {
      margin: 0 30px;
      }
      .account-type, .gender {
      margin: 15px 0;
      }
      input[type=radio] {
      display: none;
      }
      label#icon {
      margin: 0;
      border-radius: 5px 0 0 5px;
      }
      label.radio {
      position: relative;
      display: inline-block;
      padding-top: 4px;
      margin-right: 20px;
      text-indent: 30px;
      overflow: visible;
      cursor: pointer;
      }
      label.radio:before {
      content: "";
      position: absolute;
      top: 2px;
      left: 0;
      width: 20px;
      height: 20px;
      border-radius: 50%;
      background: #058B31;
      }
      label.radio:after {
      content: "";
      position: absolute;
      width: 9px;
      height: 4px;
      top: 8px;
      left: 4px;
      border: 3px solid #fff;
      border-top: none;
      border-right: none;
      transform: rotate(-45deg);
      opacity: 0;
      }
      input[type=radio]:checked + label:after {
      opacity: 1;
      }
      input[type=text], input[type=password] {
      width: calc(100% - 57px);
      height: 36px;
      margin: 13px 0 0 -5px;
      padding-left: 10px; 
      border-radius: 0 5px 5px 0;
      border: solid 1px #cbc9c9; 
      box-shadow: 1px 2px 5px rgba(0,0,0,.09); 
      background: #fff; 
      }
      input[type=password] {
      margin-bottom: 15px;
      }
      #icon {
      display: inline-block;
      padding: 9.3px 15px;
      box-shadow: 1px 2px 5px rgba(0,0,0,.09); 
      background: #058B31;
      color: #fff;
      text-align: center;
      }
      .btn-block {
      margin-top: 10px;
      text-align: center;
      }
      .subBtn {
      width: 100%;
      padding: 10px 0;
      margin: 10px auto;
      border-radius: 5px; 
      border: none;
      background: #058B31; 
      font-size: 14px;
      font-weight: 600;
      color: #fff;
      }
      subBtn:hover {
      background: #26a9e0;
      }
    





</style>



</head>
<body>






<div class="main-block">
      <h1>Remove Package</h1>
      <form action="/package/remove" method="post">
        @csrf
        @method('DELETE')
        <hr>
        
        <label id="icon" for="name"><i class="fa fa-cogs"></i></label><input type="text" name="pname" id="name" placeholder="Enter Package Name" required/>
     
     <br>
        <div class="btn-block">
        
          <button class="subBtn"type="submit" href="/">Submit</button>
        </div>
      </form>
    </div>

</body>
</html>






@endsection