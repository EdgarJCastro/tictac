@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4 col-sm-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="profile-info">
                        <h3>Jugador</h3>
                        <div class="username">{{ $user->name }}</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="list-group">
                        <h3>Oponentes</h3>
                        @foreach($users as $opponent)
                            <a href="" class="list-group-item clearfix">
                                <span class="opponent-info">
                                    {{ $opponent->name }} <br>
                                </span>                               
                                <form action="/new-game" method="post">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="user_id" value="{{ $opponent->id }}">
                                    <button type="submit" class="btn btn-primary pull-right">Jugar</button>
                                </form>
                            </a>
                        @endforeach
                    </div>
                    {{ $users->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="new-game-modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">Invitar a jugar</h4>
            </div>
            <div class="modal-body">
                <p><span id="from"></span> Invitado a jugar.</p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" id="play-button" type="button">Aceptar</button>
            </div>
        </div>
    </div>
</div>
<form action="" id="new-game-form" method="get">
    {{ csrf_field() }}
</form>
@endsection

@section('scripts')
    <script language="javascript">
        var pusher = new Pusher('5a2c1546ccbd0ebfa401');
        var gamePlayChannel = pusher.subscribe('new-game-channel');
        gamePlayChannel.bind('App\\Events\\NewGame', function(data) {
            if(data.destinationUserId == '{{ $user->id }}'){
                $('#from').html(data.from);
                $('#new-game-form').attr('action', '/board/' + data.gameId);
                $('#new-game-modal').modal('show');
            }
        });
        $('#play-button').on('click', function(){
           $('#new-game-form').submit();
        });
    </script>
@endsection