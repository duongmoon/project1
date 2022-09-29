@extends('master.masterpage')


@section('main')
        <div class="mr-5">
            <h1 class="display-4 text-center font-weight_bold ">Model Index</h1>
            <table class="table table-warning table-hover">
                <thead class="text-dark">
                <tr>
                    <th scope="col">Model name</th>
                    <th scope="col">Image</th>
                    <th scope="col">Description</th>
                    <th scope="col">&nbsp;</th>
                    <th scope="col">&nbsp;</th>
                </tr>
                </thead>
                <tbody>
                @foreach($model as $e)
                    <tr>
                        <td>{{$e->modelname}}</td>
                        <td>
                            <img src="{{asset("/storage/images/Category/".$e->image)}}" alt="" height="60" width="90" data-toggle="tooltip" data-html="true" title="<image width='250px' height='250px' src='{{asset("/storage/images/Category/".$e->image)}}' />">
                        </td>
                        <td>{{$e->description}}</td>
                        <td><a type="button" class="btn btn-success btn-sm"
                               href="{{route('Model.edit',['modelid'=>$e->modelid])}}"
                            ><i class="fas fa-edit"></i></a> </td>
                        <td><a type="button" class="btn btn-danger btn-sm"
                               href="{{route('Model.confirm',['modelid'=>$e->modelid])}}"
                            ><i class="fas fa-trash"></i></a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
@endsection

@section('script')
@endsection
