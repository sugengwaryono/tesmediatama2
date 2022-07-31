
<div class="panel panel-info">
           <div class="panel-heading">
             <h3 class="panel-title">{{$video->name}}</h3>
           </div>
           <div class="panel-body">
             <div class="row">
               <div class="col-md-12 col-lg-12 " align="center"> 
                 <iframe style="width:100%" 
                src="{{$video->url}}">
                </iframe> 
                </div>

               <div class=" col-md-12 col-lg-12 ">
                 <table class="table table-user-information">
                   <tbody>
                     <tr>
                       <td>Url:</td>
                       <td>{{$video->url}}</td>
                     </tr>
                     
                    
                   </tbody>
                 </table>


               </div>
             </div>
           </div>
                <div class="panel-footer">
                       <a data-toggle="tooltip" data-placement="right" title="Kirim Pesan" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"></i></a>
                       <span class="pull-right">

                           {!! Form::open(array('url' => 'dashboard/videos/' . $video->id)) !!}
                               {!! Form::hidden('_method', 'DELETE') !!}
                               <a href="{{ URL::to('dashboard/videos/' . $video->id . '/edit') }}" data-toggle="tooltip" data-placement="left" title="Ganti Data video" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
                               <button data-toggle="modal" title="Hapus video" data-target="#confirmDelete" data-placement="right" title="Hapus" class="btn btn-sm btn-danger" type="button"><i class="glyphicon glyphicon-trash"></i></button>
                           {!! Form::close() !!}

                       </span>
                   </div>
</div>
