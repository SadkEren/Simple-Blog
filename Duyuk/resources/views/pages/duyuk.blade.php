@extends('layouts.default')

@section('content')


    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <form method="POST" action="{{ url('/newDuyuk') }}" enctype="multipart/form-data">
                    {{csrf_field() }}
                    <div class="form-floating">
                        <input class="form-control" name="title" maxlength="255" id="name" type="text" placeholder="Enter your title..." required />
                        <label for="name">Title</label>
                    </div>
                    <div class="form-floating">
                        <textarea class="form-control" name="content"  id="message" placeholder="Enter your Content here..." maxlength="255" style="height: 12rem" required></textarea>
                        <label for="message">Content</label>
                    </div>

                    <div><br>
                        <option selected>Select Category</option>
                        <select class="form-select"  name="categories_name" >
                            @foreach($yaz as $a)
                            <option  >{{$a->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-floating">
                        <label for="name">Select File</label><br>
                        <input class="form-control" name="imageEntry" id="name" type="file" required />
                    </div>

                    <input type="hidden" name="user_name" value="{{ Auth::user()->name}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <input type="hidden" name="user_id"   value="{{ Auth::user()->id}}"   class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                    <br>
                    <button class="btn btn-success bg-primary" type="submit">Send</button>
                </form>
                <br>
                <br>

            </div>
        </div>
    </div>

@endsection
