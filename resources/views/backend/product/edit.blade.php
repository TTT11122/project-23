@extends('layouts.master_backend')
@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
                        <div class="row">
                            <div class="col-md-12">
                              <div class="card mb-9">
                                <h5 class="card-header">Product</h5>
                                <div class="card-body">

<<<<<<< HEAD
                                <form action="{{ url('admin/product/insert') }}" method="post" enctype="multipart/form-data">
=======
                                <form action="{{ url('admin/product/update/'.$pro->procduct_id)}}" method="post" enctype="multipart/form-data">
>>>>>>> 5d86b96a27a11a5f53fb5123f1877cf80fbc9f8c
                                  @csrf
                                  <div>
                                    <label for="defaultFormControlInput" class="form-label">Name</label>
                                    <input
                                      type="text"
                                      name="name"
<<<<<<< HEAD
                                      value="${{pro->name}}"
=======
                                      value="{{$pro->name}}"
>>>>>>> 5d86b96a27a11a5f53fb5123f1877cf80fbc9f8c
                                      class="form-control"
                                      id="defaultFormControlInput"
                                      placeholder="กรุณากรอกชื่อสินค้า"
                                      aria-describedby="defaultFormControlHelp"
                                    />
<<<<<<< HEAD

=======
                                  <div class="mt-3">
                                    @error('name')
                                    <div class="alert alert-danger">{{message}}</div>
                                    @enderror
                                </div>
>>>>>>> 5d86b96a27a11a5f53fb5123f1877cf80fbc9f8c

                                    <label for="defaultFormControlInput" class="form-label">Price</label>
                                    <input
                                      type="text"
                                      name="price"
                                      value="{{$pro->price}}"
                                      class="form-control"
                                      id="defaultFormControlInput"
                                      placeholder="กรุณากรอกราคาสินค้า"
                                      aria-describedby="defaultFormControlHelp"
                                    />

                                    <label for="defaultFormControlInput" class="form-label">Description</label>
                                    <input
                                      type="text"
                                      name="description"
<<<<<<< HEAD
                                      vale="{{pro->description}}"
=======
                                      value="{{$pro->description}}"
>>>>>>> 5d86b96a27a11a5f53fb5123f1877cf80fbc9f8c
                                      class="form-control"
                                      id="defaultFormControlInput"
                                      placeholder="กรุณากรอกรายละเอียดสินค้า"
                                      aria-describedby="defaultFormControlHelp"
                                    />

                                    <label for="exampleFormControlSelect1" class="form-label">Category</label>
<<<<<<< HEAD
                                    <select name="category_id" class="form-select" id="exampleFormControlSelect1" aria-label="Default select example">
                                     <option selected> {{$spo->catehory_id}}</option>
                                     <option value="1">โทรศัพท์มือถือ</option>
                                     <option value="2">โน็ตบุ๊ค</option>
                                     <option value="3">คอมพิวเตอร์ตั้งโต๊ะ</option>
=======
                                    <select name="category_id" class="form-control" id="exampleFormControlSelect1" aria-label="Default select example">
                                        @foreach ( $cat as $c)
                                        <option value="{{$c->category_id}}"
                                            @if($c->category_id == $pro->category_id)
                                            selected @endif>
                                            {{ $c->name}}
                                        </option>
                                      @endforeach
>>>>>>> 5d86b96a27a11a5f53fb5123f1877cf80fbc9f8c
                                    </select>


                                    <label for="defaultFormControlInput" class="form-label">Images</label>
                                      <div class="input-group">
<<<<<<< HEAD
                                        <input type="file" name="image"value="{{$pro->image}}"type="file" class="form-control" id="inputGroupFile02" />
                                        <label class="input-group-text" for="inputGroupFile02">Upload</label>
                                      </div>
                                      <div class="mt-4">
                                        <img src="{{asset('backend/product/resize/'.$pro->image)}}"
                                        alt="">
                                        </div>

                                      <input type="submit" value="อัพเดท" class="btn btn-primary mt-3 mx-2">
=======
                                        <input name="image"  value="{{$pro->image}}" class="form-control" id="inputGroupFile02" />
                                        <label class="input-group-text" for="inputGroupFile02">Upload</label>
                                      </div>
                                      <div class="mt-4">
                                      <input type="submit"value="อัพเดท"class="btn btn-primary mt-3 mx-2">
>>>>>>> 5d86b96a27a11a5f53fb5123f1877cf80fbc9f8c
                                    <a href="{{ route('p.index') }}" class="btn btn-danger mt-3 mx-2">ย้อนกลับ</a>
                                  </div>
                                </form>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

<<<<<<< HEAD
=======
@endsection
>>>>>>> 5d86b96a27a11a5f53fb5123f1877cf80fbc9f8c
