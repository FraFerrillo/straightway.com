
<x-layout>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card bg-light border-0 shadow my-5">
                    <div class="card-header bg-dark text-white">
                        Create new ad
                    </div>
                    <div class="card-body">
                        
                        @if (session('message'))
                        <div class="alert alert-success my-3">
                            {{session('message')}}
                        </div>
                        @endif
                        @if ($errors->any())
                        @foreach ($errors->all() as $error)
                        <div class="alert alert-danger my-2">
                            <p>{{$error}}</p>
                        </div>
                        @endforeach

                        @endif

                        <div class="col-12">
                            <h1 class="text-center">{{Auth::user()->name}}</h1>
                            <form action="{{route('ad.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                
                                <div class="mb-3 form-group row">
                                    <label for="title">Title</label>
                                    <input type="text" value="{{old('title')}}" name="title" class="form-control" id="title">
                                </div>
                                <div class="mb-3 form-group row">
                                    <label for="body">Description</label>
                                    <textarea name="body" id="body" cols="30" rows="10"
                                    class="form-control">{{old('body')}}</textarea>
                                </div>
                                <div class="mb-3 form-group row">
                                    <label for="price" class="form-label">Price</label>
                                    <input name="price" type="number" price="price" class="form-control" id="price" aria-describedby="titleHelp" value="{{old('price')}}">
                                </div>
                                <div class="text-end">
                                    <button type="submit" class="btn btn-primary shadow mt-2">Create</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
