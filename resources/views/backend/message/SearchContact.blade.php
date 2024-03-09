@if (count($members) > 0)
    <div class="had-container">
        <div class="p-fixed users-main">
            <div class="user-box">
                <div class="main-friend-list">
                    @foreach ($members as $member)
                        <li class="media userlist-box waves-effect waves-light">
                            <a class="media-left" href="#!" onclick="showChat('{{ $member->first_name }} {{ $member->middle_name }}')">
                                <img class="media-object img-radius img-radius"
                                    src="{{ asset('upload/user/image/'.$member->photo) }}"
                                    alt="image">
                                <div class="live-status bg-success"></div>
                            </a>
                            <div class="media-body">
                                <div class="f-13 chat-header">{{ $member->first_name }}
                                    {{ $member->middle_name }}<small
                                        class="d-block text-muted">10 min
                                        ago</small></div>
                            </div>
                        </li>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@else
    <div class="had-container">
        <div class="p-fixed users-main">
            <div class="user-box">
                <div class="main-friend-list">
                    <li class="media userlist-box waves-effect waves-light">No Results Found</li>
                </div>
            </div>
        </div>
    </div>
@endif

<div class="showChat_inner" id="chatContainer">
    <div class="media chat-inner-header">
        <button type="button" class="btn btn-tool back_chatBox">
            <i class="feather icon-x"></i> Josephin Doe
        </button>
    </div>
    <div class="main-friend-chat">
        <div class="media chat-messages">
            <a class="media-left photo-table" href="#!">
                <img class="media-object img-circle" style="height: 60px; width: 60px;"
                                    src="{{ asset('upload/user/image/'.$member->photo) }}"
                                    alt="image">
            </a>
            <div class="media-body chat-menu-content">
                <div class="">
                    <p class="chat-cont">I'm just looking around. Will you tell me something about
                        yourself?
                    </p>
                </div>
                <p class="chat-time">8:20 a.m.</p>
            </div>
        </div>
        <div class="media chat-messages">

            <div class="media-body chat-menu-reply">
                <div class="">
                    <p class="chat-cont">Ohh! very nice</p>
                </div>
                <p class="chat-time">8:22 a.m.</p>
            </div>
            <a class="media-left photo-table" href="#!">
                <img class="media-object img-circle" style="height: 60px; width: 60px;"
                src="{{ asset('upload/user/image/'.$member->photo) }}"
                alt="image">
            </a>
        </div>
        <div class="media chat-messages">
            <a class="media-left photo-table" href="#!">
                <img class="media-object img-circle" style="height: 60px; width: 60px;"
                src="{{ asset('upload/user/image/'.$member->photo) }}"
                alt="image">
            </a>
            <div class="media-body chat-menu-content">
                <div class="">
                    <p class="chat-cont">can you come with me?</p>
                </div>
                <p class="chat-time">8:20 a.m.</p>
            </div>
        </div>
    </div>
    <div class="chat-reply-box">
        <div class="right-icon-control">
            <div class="input-group input-group-button">
                <input type="text" class="form-control" placeholder="Write hear . . ">
                <div class="input-group-append">
                    <button class="btn btn-primary waves-effect waves-light" type="button"><i
                            class="feather icon-message-circle"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>
