@extends('layouts.master')

@section('content')



    <div class="panel panel-default">
        <div class="panel-heading">
            Chatroom
            <span class="badge pull-right">@{{ usersInRoom.length }}</span>
        </div>

    <chat-log v-bind:messages="messages"></chat-log>
    <chat-composer v-on:messagesent="addMessage"
                       :currentuser="currentuser"></chat-composer>

    </div>

    @endsection