 <div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">{{env('APP_NAME')}}</a></li>
                    <li class="breadcrumb-item"><a href="javascript: void(0);">{{$site_title}}</a></li>
                   
                </ol>
            </div>
           <div style="background:beige;">
               @php
                  $show_noti= Session::get('message');
               @endphp
               @if($show_noti)
               <h5 class="text-info" style="font-weight:700;">
                   <i>
                       {{$show_noti}}
                   </i>
               </h5>
               @endif
           </div>
        </div>
    </div>
</div> 