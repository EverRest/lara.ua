@extends('layouts.app')

@section('content')
    <!-- #map section -->
    <div id="map">
    </div>
    <!-- .pet-form section -->
    <div class="modal fade" id="pet-form" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <form id="pform" method="POST" class="modal-content" enctype="multipart/form-data">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Find your friend</h4>
                </div>
                <div class="modal-body">
                    {{--<div class="input-group">--}}
                        {{--<span class="input-group-addon" id="basic-addon3"><i class="fa fa-map-marker" aria-hidden="true"></i></span>--}}
                        {{--<input type="text" id="address" name="address" class="form-control" placeholder="Click the button to collect address..." aria-describedby="basic-addon3">--}}
                    {{--</div>--}}
                    {{--<br>--}}
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1"><i class="fa fa-tags" aria-hidden="true"></i></span>
                        <input type="text" name="name" id="pet-name" class="form-control" placeholder="Name..." aria-describedby="basic-addon1">
                    </div>
                    <br>
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon2"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></span>
                        <textarea id="description" name="description" class="form-control" placeholder="Description..." aria-describedby="basic-addon2"></textarea>
                    </div>
                    <br>
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon4"><i class="fa fa-upload" aria-hidden="true"></i></span>
                        <input type="file" id="image" name="image" class="form-control" aria-describedby="basic-addon4">
                    </div>
                    <br>
                    <div class="input-group hidden">
                        <input type="text" name="owner" id="owner" value class="form-control">
                    </div>
                    {{--<div class="input-group hidden">--}}
                        {{--<input type="hidden" name="_token"  value="{{ csrf_token }}" class="form-control">--}}
                    {{--</div>--}}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Save changes</button>
                </div>
            </form><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <script type="text/javascript" src="{{ URL::asset('js/form-validation.js') }}"></script>
@endsection
