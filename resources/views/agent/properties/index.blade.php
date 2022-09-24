@extends('frontend.layouts.app')

@section('styles')
<link href="{{asset('frontend/css/styles.css')}}" rel="stylesheet">

@endsection

@section('content')

    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col s12 m9">

                    <h4 class="agent-title text-center">قائمة العقارات</h4>
                    
                    <div class="agent-content">
                        <table class="striped responsive-table table">
                            <thead>
                                <tr>
                                    <th scope="col">SL.</th>
                                    <th scope="col">العنوان</th>
                                    <th scope="col">النوع</th>
                                    <th scope="col">المدينة</th>
                                    <th scope="col">تنفيذ</th>
                                </tr>
                            </thead>
                    
                            <tbody>
                                @foreach( $properties as $key => $property )
                                    <tr>
                                        <td class="right-align">{{$key+1}}.</td>
                                        <td>
                                            <span class="tooltipped" data-position="bottom" data-tooltip="{{$property->title}}">
                                                {{ str_limit($property->title,30) }}
                                            </span>
                                        </td>
                                        
                                        <td>{{ ucfirst($property->type) }}</td>
                                        <td>{{ ucfirst($property->city) }}</td>
    
                                        <td class="center">
                                            <a href="{{route('property.show',$property->slug)}}" target="_blank" class="btn btn-small green waves-effect">
                                                <i class="material-icons">visibility</i>
                                            </a>
                                            <button type="button" class="btn btn-small deep-orange accent-3 waves-effect" onclick="deleteProperty({{$property->id}})">
                                                <i class="material-icons">delete</i>
                                            </button>
                                            <form action="{{route('agent.properties.destroy',$property->slug)}}" method="POST" id="del-property-{{$property->id}}" style="display:none;">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="center">
                            {{ $properties->links() }}
                        </div>
                    </div>
        
                </div>

            </div>
        </div>
    </section>

@endsection

@section('scripts')
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        function deleteProperty(id){
            swal({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            buttons: true,
            dangerMode: true,
            buttons: ["Cancel", "Yes, delete it!"]
            }).then((value) => {
                if (value) {
                    document.getElementById('del-property-'+id).submit();
                    swal(
                    'Deleted!',
                    'Property has been deleted.',
                    'success',
                    {
                        buttons: false,
                        timer: 1000,
                    })
                }
            })
        }
    </script>
@endsection