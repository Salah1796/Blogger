@extends('layouts.admin_layout')
@section('content')

<?php
use Illuminate\Foundation\Auth\User;
        ?>
    <div id="page-wrapper" style="margin-top: 20px; padding: 10px; height: 1300px;">
        <h2 align="center" style="margin-bottom: 20px; font-family: cursive;">View All Posts
        </h2>

        <table class="table table-borderd table-hover">
            <thead>
            <tr>
                <th>Id</th>
                <th>Author</th>
                <th>Comment</th>




            </tr>
            </thead>

            <tbody>




            @foreach($Reports as $rep)
                <tr>

                    <td>{{$rep->id}}</td>
                    <td>{{$rep->comment_id}}</td>
                    <td><a href="{{url('User_info/'.$rep->user_id)}}">{{User::find($rep->user_id)->name}}</a></td>













                </tr>





            @endforeach
            </tbody></table>
    </div>
@endsection