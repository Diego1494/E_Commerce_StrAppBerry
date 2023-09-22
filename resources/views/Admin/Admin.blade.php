@extends('Layout.app')

@section('title', 'Admin')

@section('content')
<div class="container">
  <div class="row">
	 <div class="col">
        @if(session()->get('success'))
         <div class="alert alert-success">
            {{ session()->get('success') }}
          </div>
           @endif
             <section class="intro">
              <div class="bg-image h-100" style="background-color: #f5f7fa;">
               <div class="mask d-flex align-items-center h-100">
                 <div class="container">
                   <div class="row justify-content-center">
                     <div class="col-12">
                      <div class="card">
                       <div class="card-body p-0">
                        <div class="table-responsive table-scroll" data-mdb-perfect-scrollbar="true" style="position: relative; height: 700px">
                          <table class="table table-light mb-0">
                            <thead style="">
                              <tr>
                                 <th>Imagen</th>
							     <th>Nombre</th>
							     <th>Precio</th>
                                 <th>Accion</th>
                              </tr>
                             </thead>
                             <tbody>
                                 @foreach($producto as $productos)
                              <tr>
                                  <td class="table-light">
                                     <img src="./image/{{$productos->imagen}}" class="img-thumbnail" width="150" height="120">
                                  </td>
                                  <td class="table-light">{{$productos->nombre}}</td>
                                  <td class="table-light">$ {{$productos->precio}}</td>
                                  <td class="table-light"><form action="{{ route('edit', $productos->id)}}">
                                      <button class="btn btn-dark" type="submit">   
                                      <i class="ti ti-edit-circle"></i></button>
                                      </form>
                                      <form action="{{ route('destroy', $productos->id)}}">
                                       @csrf
                                      <button class="btn btn-danger" type="submit" onclick="return confirm('Esta seguro de borrar')" >
                                      <i class="ti ti-trash-x-filled"></i></button>
                                      </form>
                                  </td>
                             </tr>
                                      @endforeach
					         </tbody>
                         </table>
                        </div>
                       </div>
                      </div>
                     </div>
                    </div>
                   </div>
                  </div>
                 </div>
                </section>
               </div>
            </div>
           </div>
@endsection