<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
  <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.jpg') }}">

    <!-- CSFR token for ajax call -->
    <!-- <meta name="_token" content="{{ csrf_token() }}"/> -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Sugarcane Yields</title>

    </style>

</head>

<body>
    

 <!-- page content -->
    <div class="right_col" role="main">
            <div class="container main"> 
              

                                
                                
                <div class="container" style="background:#ffffff">

                  <div class="row">
                     <div class="col-lg-12">
                       
     
                              <h5><center>Sugar cane Yield</center></h5>
                              <br />
                              <button class="btn btn-danger" onclick="add_conservancy()"><i class="glyphicon glyphicon-plus"></i> Add New Record</button>
                              <br />
                              <br />
                              <table id="table_id" class="table table-striped table-bordered" cellspacing="0"       width="100%">
                                      <thead>
                                        <tr>
                                         
                                           <th>ID</th>                                          
                                           <th>Area under cane</th>
                                           <th>Are Harvested</th>
                                           <th>Production Tonnes</th>
                                           <th>Average yield tonnes</th>
                                           <th>Year</th>
                                           <th style="width:85px;">Action
                                          </th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                      <?php foreach($post as $post){?>
                                             <tr>
                                                <td>{{$post->area_id}}</td>
                                                <td>{{$post->area_under_cane_ha}}</td>
                                                <td>{{$post->area_harvested_ha}}</td>
                                                <td>{{$post->production_tonnes}}</td>
                                                <td>{{$post->average_yield_tonnes_per_ha}}</td>
                                                <td>{{$post->year}}</td>                                      

                                                <td>
                                                  <button class="btn btn-success" onclick="edit_conservancy(<?php echo $post->area_id;?>)">Update Record</button>
                                               
                                                </td>
                                              </tr>
                                             <?php }?>



                                      </tbody>

                                      <tfoot>
                                        <tr>
                                           <th>ID</th>                                          
                                           <th>Area under cane</th>
                                           <th>Are Harvested</th>
                                           <th>Production Tonnes</th>
                                           <th>Average yield tonnes</th>
                                           <th>Year</th>
                                           <th style="width:85px;">Action
                                          </th>
                                         
                                        </tr>
                                      </tfoot>
                              </table>
                 
                      </div>
                                 
                  </div>
                                    
                </div>
                        
            </div>

          
              <script type="text/javascript" src="{{asset('vendors/jquery/dist/jquery.min.js')}}"></script>
              <script type="text/javascript" src="{{asset('vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
              <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.13/datatables.min.css"/>
              <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.13/datatables.min.js"></script>
              <script type="text/javascript" src="https://cdn.datatables.net/1.10.13/js/dataTables.bootstrap.min.js"></script>
               <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.5.3/css/bootstrapValidator.min.css" />
            <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.5.3/js/bootstrapValidator.min.js"></script>

            <!-- Sian starts here -->
            <script type="text/javascript">
                      $(document).ready( function () {

                        $('#form').bootstrapValidator({
                                      feedbackIcons: {
                                          valid: 'glyphicon glyphicon-ok',
                                          invalid: 'glyphicon glyphicon-remove',
                                          validating: 'glyphicon glyphicon-refresh'
                                      },
                                      fields: {
                                          area_under_cane_ha: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please enter a number '
                                                  },
                                                   numeric: {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },
                                          area_harvested_ha: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please enter a number '
                                                  },
                                                   numeric: {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },
                                          production_tonnes: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please enter a number '
                                                  },
                                                   numeric: {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },
                                          production_tonnes: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please enter a number '
                                                  },
                                                   numeric: {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },
                                           average_yield_tonnes_per_ha: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please enter a number '
                                                  },
                                                   numeric: {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          }
                                      }
                                  });
                          $('#table_id').DataTable();
                      } );
                      var save_method; //for save method string
                      var table;


                      function add_conservancy()
                      {
                        save_method = 'add';
                        $('#form')[0].reset(); // reset form on modals
                        $('#modal_form').modal('show'); // show bootstrap modal
                      //$('.modal-title').text('Add Person'); // Set Title to Bootstrap modal title
                      }

                      function edit_conservancy(id)
                      {
                        var url = '{{ route("fetchSugar", ":id") }}';
                        
                        save_method = 'update';
                        $('#form')[0].reset(); // reset form on modals

                        //Ajax Load data from ajax
                        $.ajax({
                          url : url.replace(':id', id),
                          type: "GET",
                          dataType: "JSON",
                          success: function(data)
                          {

                              $('[name="id"]').val(data.id);
                              $('[name="area_under_cane_ha"]').val(data.area_under_cane_ha);
                              $('[name="area_harvested_ha"]').val(data.area_harvested_ha);
                              $('[name="production_tonnes"]').val(data.production_tonnes);
                              $('[name="average_yield_tonnes_per_ha"]').val(data.average_yield_tonnes_per_ha);
                              $('[name="year"]').val(data.year);                                          
                              $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
                              $('.modal-title').text('Edit  details'); // Set title to Bootstrap modal title

                          },
                          error: function (jqXHR, textStatus, errorThrown)
                          {
                              alert('Error get data from ajax');
                          }
                      });
                      }



                      function save()
                      {
                        var url;
                        if(save_method == 'add')
                        {
                            url = "{{ route('storeSugar') }}";

                        }
                        else
                        {
                           url = "{{ route('updateSugar') }}";
                        }
                          
                          // console.log({area_under_cane_ha:area_under_cane_ha,
                          //             area_harvested_ha:area_harvested_ha,
                          //             production_tonnes:production_tonnes,
                          //             average_yield_tonnes_per_ha:average_yield_tonnes_per_ha,
                          //             year:year}

                          //             );
                         // ajax adding data to database
                         var data = $("#form").serialize();

                            $.ajax({
                              headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                  },
                              url : url,
                              type: "POST",
                              data: data,
                              dataType: "JSON",
                              success: function(result)
                              {
                              //    console.log($('#form').serialize());
                              //    //if success close modal and reload ajax table
                              //    $('#modal_form').modal('hide');
                              //   location.reload();// for reload a page
                              // },
                              // error: function (jqXHR, textStatus, errorThrown,error)
                              // {
                              //    alert('error');
                                 
                              // }
                              if(result.errors)
                    {
                        jQuery('.alert-danger').html('');

                        jQuery.each(result.errors, function(key, value){
                            jQuery('.alert-danger').show();
                            jQuery('.alert-danger').append('<li>'+value+'</li>');
                        });
                    }
                    else
                    {
                        jQuery('.alert-danger').hide();
                         $('#open').hide();
                         $('#myModal').modal('hide');
                         $('#modal_form').modal('hide');
                         location.reload();// for reload a page
                    }


                          
                          }});}

                      function delete_conservancy(id)
                      {
                        if(confirm('Are you sure delete this data?'))
                        {
                          // ajax delete data from database
                            $.ajax({
                              url : "{{asset('/Agriculture/show/')}}",
                              type: "POST",
                              dataType: "JSON",
                              success: function(data)
                              {
                                 
                                 location.reload();
                              },
                              error: function (jqXHR, textStatus, errorThrown)
                              {
                                  alert('Error deleting data');
                              }
                          });

                        }
                      }

            </script>

              <!-- Bootstrap modal -->
              <div class="modal fade" id="modal_form" role="dialog">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 class="modal-title">Add New Record</h3>
                  </div>
                  <div class="modal-body form">
                      <form action="#" id="form" class="form-horizontal">
                        <div class="alert alert-danger" style="display:none"></div
                            <input type="hidden" value="" name="id"/>
                            <div class="form-body">
                              
                              <div class="form-group">
                                <label class="control-label col-md-3">Area Under Cane</label>
                                <div class="col-md-9">
                                 
                                 <input name="area_under_cane_ha" class="form-control" type="text">
                                  @if ($errors->has('area_under_cane_ha'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('area_under_cane_ha') }}</strong>
                                    </span>
                                @endif
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3">Area Harvested</label>
                                <div class="col-md-9">
                                  <input name="area_harvested_ha"  class="form-control" type="text">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3">Production Tonnes</label>
                                <div class="col-md-9">
                                  <input name="production_tonnes"  class="form-control" type="text">
                                </div>
                              </div>
                               <div class="form-group">
                                <label class="control-label col-md-3">Average Yield Tonnes</label>
                                <div class="col-md-9">
                                  <input name="average_yield_tonnes_per_ha"  class="form-control" type="text">
                                </div>
                              </div>
                              
                              
                              <div class="form-group">
                                <label class="control-label col-md-3">Year</label>
                                <div class="col-md-9">
                                  <select class="form-control" id="year" name="year">
                                    <option value="">please select</option>
                                    <option value="2008">2008</option>
                                    <option value="2009">2009</option>
                                    <option value="2010">2010</option>
                                    <option value="2011">2011</option>
                                    <option value="2012">2012</option>
                                    <option value="2013">2013</option>
                                    <option value="2014">2014</option>
                                    <option value="2015">2015</option
                                    <option value="2016">2016</option>
                                    <option value="2017">2017</option>
                                    <option value="2018">2018</option>
                                    <option value="2019">2019</option>
                                    <option value="2020">2020</option>
                                    <option value="2021">2021</option>
                                    <option value="2022">2022</option>
                                    <option value="2023">2023</option>
                                  </select>
                                </div>
                              </div>

                              
                              </div>

                            
                      </form>
                  </div>
                      <div class="modal-footer">
                        <button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Save</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                      </div>
                    </div><!-- /.modal-content -->
                  </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
              <!-- End Bootstrap modal -->

            <!-- Siana ends here -->
        
   </div>
  <!-- page content -->
   

</body>
</html>