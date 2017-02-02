@extends('layouts.master')

@section('content')

    <h1>Chatroom</h1>

    <chat-log v-bind:messages="messages"></chat-log>
    <chat-composer v-on:messagesent="addMessage"
                       :currentuser="currentuser"></chat-composer>

    @endsection