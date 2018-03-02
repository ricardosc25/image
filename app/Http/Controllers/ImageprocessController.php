<?php

namespace App\Http\Controllers;
use App\Foto;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Image;

class ImageprocessController extends Controller
{
    public function upload()
    {
     $image= Foto::select('imagen','position')->first();
      return view('portada')->with('image',$image);
    }

    public function postupload(Request $request)
    {
     
      $file         = $request->file('file');
      $rules = array('file' => 'required|mimes:png,gif,jpeg,jpg'); //'required|mimes:png,gif,jpeg,txt,pdf,doc'
      $validator = Validator::make(array('file'=> $file), $rules);
      if($validator->passes()){
                
                    $image = $file->move( 'img', sprintf('%s-%s.%s', time(), str_random(), explode('/', $file->getMimeType())[1]));
                    $img            = Foto::where('id','=',1)->first();
                    $img->imagen     = $image->getFilename();
                    $img->save();

                    
                    $bgSave='<img src="'.\App::make('url')->to('/'). '/img/'.$image->getFilename().'"  id="timelineBGload" class="headerimage ui-corner-all " style="top:0px;width:100%"/>';
                    $bgSave .="<div class='btn-save-drag'><p style='background-color:white; font-size: 0.8em;'>Drag and adjust the image</p><button class='bgSave btn btn-info bg-lg'>Save</button></div>";
                    $bgSave .= "<script>$('.headerimage').on('mouseover',function()
                      {

                        var y1 = $('#adjimage').height();
                        var y2 =  $('.headerimage').height();

                        $(this).draggable({

                          scroll: false,
                          axis: 'y',
                          drag: function(event, ui) {
                            if(ui.position.top >= 0)
                            {
                            ui.position.top = 0;
                            }
                            else if(ui.position.top <= y1 - y2)
                            {
                            ui.position.top = y1 - y2;
                            }
                        },
                        stop: function(event, ui)
                        {
                        }
                      });
                      });
                      $('.bgSave').on('click',function ()
                          {
                            var p = $('#timelineBGload').attr('style');
                            var Y =p.split('top:');
                            var Z=Y[1].split(';');
                            var dataString ='position='+Z[0];
                            $.ajax({
                              type: 'POST',
                              url: '";
                             $bgSave .= url('/cover-image-save');
                             $bgSave .="',
                              data: dataString,
                              cache: false,
                               headers: {
                                'X-CSRF-TOKEN': '". csrf_token() ."'
                                },
                              success: function(html)
                              {
                                if(html)
                                {
                                   location.reload(); 
                                 
                                  return false;
                                }
                              }
                            });
                          return false;
                          });
                      

                      </script>";
                    return $bgSave;


      }
    }

    public function postimgAdjustpostion(Request $request)
    {

      $usr            = Foto::where('id','=',1)->first();
      $usr->position  = $request->get('position');
      $usr->save();
      return redirect()->back();
    }


}
