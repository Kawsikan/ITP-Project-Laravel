@extends('layouts.adminapp')

@section('content')
            <!---------------------------------------------------------------------------------------------------------------------------------------->
            <!---------------------------------------------------------------------------------------------------------------------------------------->
            <!-------------------------------------------------------Start of catering_packages.create view ------------------------------------------>

            <div class="bg-light container-fluid">

                <div class="row">
                    <div class="col-sm-8 offset-sm-3">
                        <br><br><br>
                        <a href="/showadmin" class="btn btn-danger">
                            <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-backspace-fill"
                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M15.683 3a2 2 0 0 0-2-2h-7.08a2 2 0 0 0-1.519.698L.241 7.35a1 1 0 0 0 0 1.302l4.843 5.65A2 2 0 0 0 6.603 15h7.08a2 
                                    2 0 0 0 2-2V3zM5.829 5.854a.5.5 0 1 1 .707-.708l2.147 2.147 2.146-2.147a.5.5 0 1 1 .707.708L9.39 8l2.146 2.146a.5.5 0 
                                    0 1-.707.708L8.683 8.707l-2.147 2.147a.5.5 0 0 1-.707-.708L7.976 8 5.829 5.854z" />
                            </svg></a>
                        <br><br>
                        <div class="text-center">
                            <h2>New Package Menu</h2>
                        </div>
                        <div>
                            <!----- To show Error when when invalid input is given (Laravel validation) -->
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div><br />
                            @endif
                            <!--------------------------- Form tag Start-------------------------------->
                            <div class="bg-white shadow mx-auto" style="border-radius: 21px 21px 21px 21px;">
                                <form method="get" action="/add-package">
                                    <div class="col-sm-8 offset-sm-3">
                                        @csrf
                                        <br>
                                        <div class="form-group">
                                            <label for="p_name">Package</label>
                                            <input type="text" class="form-control col-sm-7" name="p_name"
                                                placeholder="Enter unique name" value="{{ old('p_name') }}"/>
                                            <small id="emailHelp" class="form-text text-muted">Make sure the name does
                                                not
                                                exist for other packages.</small>
                                        </div>
                                        <div class="form-group">
                                            <label for="description">Items</label>
                                            <textarea class="form-control col-sm-7" name="description"
                                                value="{{ old('description') }}"> </textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="price">Price</label>
                                            <input type="text" class="form-control col-sm-7" name="price"
                                                placeholder="Rs." value="{{ old('price') }}"/>
                                        </div>
                                        <br>
                                        <div class="col-sm-7 text-center">
                                            <button type="submit" class="btn btn-primary">Add Package</button>
                                        </div>
                                        <br>
                                    </div>
                                </form>
                            </div>
                            <!--------------------------- Form tag Ends------------------------------->
                        </div>
                    </div>
                </div>
                <!-- End of catering_packages.create view  -->
                <!---------------------------------------------------------------------------------------------------------------------------------------->
                <!---------------------------------------------------------------------------------------------------------------------------------------->

                @endsection