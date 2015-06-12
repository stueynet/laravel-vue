@extends('...master')
@section('content')
<div id="guestbook">
  <form method="POST" v-on="submit: onSubmitForm">
    <!-- (text) name Form Input -->
    <div class="form-group">
      <label for="name">
        Name
        <span class="error" v-if="! newMessage.name">*</span>
      </label>
      <input name="name" type="text" id="name" class="form-control" v-model="newMessage.name">
    </div>
    <!-- (text) message Form Input -->
    <div class="form-group">
      <label for="message">
        Message
        <span class="error" v-if="! newMessage.message">*</span>
      </label>
      <input name="message" type="text" id="message" class="form-control" v-model="newMessage.message">
    </div>
    <!-- (submit)  Form Input -->
    <div class="form-group" v-if="! submitted">
      <button name="" type="submit" id="" class="btn btn-primary" v-attr="disabled: errors">Sign guestbook</button>
    </div>
    <div class="alert alert-success" v-if="submitted">Thanks!</div>
  </form>
  <hr>
  <article v-repeat="messages">
    <h1>@{{ name }}</h1>
    <div class="message-body">
      @{{ message }}
    </div>
  </article>
</div>
@endsection