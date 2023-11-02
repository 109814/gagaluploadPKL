@if ($errors->any())
     <div class="alert alert-danger">
          <ul>
               @foreach ($errors->all() as $item)
                   <li>{{ $item }}</li>
               @endforeach
          </ul>
     </div>
    
@endif
@if (Session::get('sucess'))
     <div class="alert alert-sucess alert-dismissible fade show">
          <ul>
               <li>{{Session::get('sucess')}}</li>
          </ul>
     </div>
    
@endif