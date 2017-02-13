@extends('layouts.app')

@section('title','| All Emails')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>All Emails</h1>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <h3 id="sent-title">SENT</h3>
            </div>

            <form id='form-select'>
                <div class="col-md-3 add-top-5">
                    <div class="radio">
                        <label>
                            <input type="radio" name="optionsRadios" id="sent_email" value="option1">
                            Sent Emails
                        </label>
                    </div>
                </div>
                <div class="col-md-3 add-top-5">
                    <div class="radio">
                        <label>
                            <input type="radio" name="optionsRadios" id="draft_email" value="option1">
                            Draft Emails
                        </label>
                    </div>
                </div>
            </form>
        </div>
        <div class="row"  style='display:none' id="sent-target">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Subject</th>
                            <th>Body</th>
                            <th>Sent By</th>
                            <th>Group/Member</th>
                            <th>Status</th>
                            <th>Edit</th>
                            <th>View</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($emails as $email)
                            @if($email->status == 'sent')
                            <tr>
                                <td>{{$email->id}}</td>
                                <td>{{$email->Subject}}</td>
                                <td>{{substr(strip_tags($email->body),0,5)}}{{strlen($email->body)>5?"....":""}}</td>
                                <td>{{$email->user->name}}</td>
                                @if($email->type == "group")
                                <td>Group</td>
                                @else
                                    <td>Member</td>
                                @endif
                                <td>{{$email->status}}</td>
                                <td><a href="{{route('emails.editEmail',$email->id)}}" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-pencil"></span></a></td>
                                <td><a href="" class="btn btn-success btn-xs"><span class="glyphicon glyphicon-eye-open"></span></a></td>
                                <td>
                                    <a href="" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash"></span></a></td>
                            </tr>
                            @endif
                        @endforeach
                        </tbody>
                    </table>

                </div>

            </div>

        </div>
        <div class="row"  style='display:none' id="draft-target">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Subject</th>
                            <th>Body</th>
                            <th>Sent By</th>
                            <th>Group/Member</th>
                            <th>Status</th>
                            <th>Edit</th>
                            <th>View</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($emails as $email)
                            @if($email->status == 'draft')
                            <tr>
                                <td>{{$email->id}}</td>
                                <td>{{$email->Subject}}</td>
                                <td>{{substr(strip_tags($email->body),0,5)}}{{strlen($email->body)>5?"....":""}}</td>
                                <td>{{$email->user->name}}</td>
                                @if($email->type == "group")
                                <td>Group</td>
                                @else
                                    <td>Member</td>
                                @endif
                                <td>{{$email->status}}</td>
                                <td><a href="{{route('emails.editEmail',$email->id)}}" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-pencil"></span></a></td>
                                <td><a href="" class="btn btn-success btn-xs"><span class="glyphicon glyphicon-eye-open"></span></a></td>
                                <td>
                                    <a href="" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash"></span></a></td>
                            </tr>
                            @endif
                        @endforeach
                        </tbody>
                    </table>

                </div>

            </div>
        </div>
    </div>
    <div class="text-center">
        <div class="col-md-12">
            <div class="text-center">
                {{$emails->links()}}
            </div>
        </div>

    </div>
@endsection

@section('scripts')
    <script>
        $(document)
                .ready(function () {
                    $("#draft_email").click();
                });
        $('input[name=optionsRadios]').click(function () {
            if (this.id == "sent_email") {
                $("#sent-target").show('slow');
                $("#draft-target").hide('slow');
            } else if (this.id == "draft_email") {
                $("#sent-target").hide('slow');
                $("#draft-target").show('slow');
            }
        });

    </script>
@endsection