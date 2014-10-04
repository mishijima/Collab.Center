@extends('._layouts/collab')

@section('main')
    <div class="row">
        <div class="col-md-2">
            <ul class="nav nav-tabs padding-top-10px">
                <li class="active">
                    <a href="#users" data-toggle="tab">Users</a>
                </li>
                <li>
                    <a href="#chat" data-toggle="tab">Chat</a>
                </li>
            </ul>
            <div id="myTabContent" class="tab-content">
                <div class="tab-pane fade active in" id="users">
                    <div id="userlist"></div>
                </div>
                <div class="tab-pane fade" id="chat">

                </div>
              </div>
        </div>
        <div class="col-md-10 no-padding-right">
            <!-- <div style="background-color: red;"></div> -->
            <div id="firepad" class="height-100pct"></div>
            <div class="loading"></div>
        </div>
    </div>
@stop
