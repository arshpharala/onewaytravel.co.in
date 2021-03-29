@extends('cms.layouts.master')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Category</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Category</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">

                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <div class="card-title col-sm-12">
                                    Category List
                                    <div class="popular">
                                        Popular
                                    </div>
                                    <br>

                                        <div class="onoffswitch">
                                            <input type="checkbox" name="popular" 
                                                class="onoffswitch-checkbox" id="myonoffswitch" tabindex="0">
                                            <label class="onoffswitch-label" for="myonoffswitch">
                                                <span class="onoffswitch-inner"></span>
                                                <span class="onoffswitch-switch"></span>

                                            </label>

                                        </div>
                                      

                                </div>
                            </div>
                            {{-- <div class="col-sm-6"> --}}

                            {{-- </div> --}}

                            <!-- /.card-header -->
                            <div class="card-body">
                                <span class="message" id="success_type"></span>
                                <div class="table table-responsive">
                                    <table id="example1">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Popular</th>
                                                <th class=" text-center">
                                                   
                                                        Content
                                                    
                                                </th>
                                                <th class=" text-center">
                                                    
                                                        Faq's
                                                    
                                                </th>
                                                
                                                <th class=" text-center">
                                                    
                                                        Actions
                                                    
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach ($categories as $category)
                                                <tr>
                                                    <td>{{ $category->name }}</td>
                                                    <td class=" text-center">@if ($category->popular->exists)&nbsp; @endif<input type="checkbox" value="{{$category->id}}" @if ($category->popular->exists) checked @endif class="popularCategory" name="is_popular"></td>
                                                    <td class=" text-center">
                                                        
                                                            <a href="{{ route('categoryContentList', ['category' => $category->id]) }}"
                                                                class=" fa fa-list"></a>
                                                        
                                                    </td>
                                                    <td class=" text-center">
                                                       
                                                            <a href="{{ route('faqList', ['type' => 'category', 'id' => $category->id]) }}"
                                                                class="far fa-question-circle"></a>
                                                       
                                                    </td>
                                                   
                                                    <td class=" text-center">
                                                        
                                                            <a href="{{ Route('editCategory', ['category' => $category->id]) }}"
                                                                class="fa fa-edit"></a>
                                                       
                                                            <a href="#"
                                                                onclick="deleteItem('{{ route('deleteCategory', ['category' => $category->id]) }}')"
                                                                class="fa fa-trash" style="color: red"></a>
                                                       
                                                    </td>
                                                </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                               
                                    <a id="add" href="{{ route('createCategory') }}" class="btn btn-success" style="">Add new
                                        Record</a>
                               
                            </div>
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->

            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection
@section('footer')
    <script>
        success = $('#success_type');
        var table;
        $(document).ready(function() {


            table=$('#example1').DataTable({
                "columns": [{
                        "name": "Name"
                    },
                    {
                        "name": "Popular",
                        "sorting": false,
                        searching: false
                    },
                    {
                        "name": "Content",
                        "sorting": false,
                        searching: false
                    },
                    {
                        "name": "Faq",
                        "sorting": false,
                        searching: false
                    },
                    
                    {
                        "name": "Actions",
                        "sorting": false,
                        searching: false
                    }
                ]

            });
        });
            $('tbody').on('click','.popularCategory',function(){
              var id=$(this).val();
              var checked=$(this).attr('checked');
              var that = this;
              $.ajax({
                url:'{{route('categoryPopular')}}',
                data:{categoryId:id,checked:checked},
                type:'post',
                headers: {
                'X-CSRF-TOKEN': $("meta[name='token']").attr('content')
            },
            success: function(data) {
              if(data=='removed'){
                $(that).attr('checked',false);
              }
              else{
                $(that).attr("checked", true);
              }
                    success.fadeIn('slow', function(){

                        toastr.success('successfully '+data);
                        success.delay(3000).fadeOut(); 
                        location.reload();
                    });
                }
            
              });
            });
            $('#myonoffswitch').on('change',function(){
         
      
         if($(this).is(':checked')){
             $.fn.dataTable.ext.search.push(
                 function(settings, data, dataIndex) {  

  return data[1] 
     }
         )
              }
              else {
$.fn.dataTable.ext.search.pop()
}
table.draw()
     });
            

        

    </script>
@endsection
