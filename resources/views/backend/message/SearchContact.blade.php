@if(count($members) > 0)
    <div class="had-container">
        <div class="p-fixed users-main">
            <div class="user-box">
                <div class="main-friend-list">
                    @foreach($members as $member)
                        <li class="media userlist-box waves-effect waves-light">
                            <a class="media-left" href="#!" onclick="showChat('{{ $member->first_name }} {{ $member->middle_name }}')">
                                <img class="media-object img-radius img-radius" src="{{ asset('upload/user/image/'.$member->photo) }}" alt="image">
                                <div class="live-status bg-success"></div>
                            </a>
                            <div class="media-body">
                                <div class="f-13 chat-header">
                                    {{ $member->first_name }} {{ $member->middle_name }}
                                    <small class="d-block text-muted">10 min ago</small>
                                </div>
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
                    <div class="media userlist-box waves-effect waves-light">No Results Found</div>
                </div>
            </div>
        </div>
    </div>
@endif


<div class="showChat_inner" id="chatContainer">
    <div class="media chat-inner-header">
        <div class="card-tools">
            <span title="3 New Messages" class="badge bg-danger">3</span>
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fa fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" title="Contacts"
                data-widget="chat-pane-toggle">
                <a href="#" title="Notification preferences"
                    aria-label="Notification preferences">
                    <i class="icon fa fa-cog fa-fw " aria-hidden="true"></i>
                </a>
            </button>
            <button type="button" class="btn btn-tool back_friendlist"
                data-drawer-hide="displayChatbox" onclick="closeChatboxAndHide()" aria-controls="sidebar">
                <i class="fa fa-times"></i>
            </button>
        </div>
        <button type="button" class="btn btn-tool back_chatBox">
            <i class="feather icon-x"></i> Member Name
        </button>
    </div>

    <div class="main-friend-chat">
        <div class="media chat-messages">
            <a class="media-left photo-table" href="#!">
                <img class="media-object img-circle" style="height: 40px; width: 40px;"
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
                <img class="media-object img-circle" style="height: 40px; width: 40px;"
                src="{{ asset('upload/user/image/'.$member->photo) }}"
                alt="image">
            </a>
        </div>
        <div class="media chat-messages">
            <a class="media-left photo-table" href="#!">
                <img class="media-object img-circle" style="height: 40px; width: 40px;"
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
                <input type="text" class="form-control" placeholder="Write here . . ">
                <div class="input-group-append">
                    <button class="btn btn-primary waves-effect waves-light" type="button">
                        <i class="fa fa-comment"></i> Send <!-- Replace with your text -->
                    </button>
                </div>
            </div>
        </div>
    </div>

</div>
<script>

    function closeChatboxAndHide() {
        // Hide the chatbox container
        document.getElementById('chatContainer').style.display = 'none';
    }

   // Handle button click event
$('.input-group-button button').click(function () {
    sendMessage();
});

// Handle Enter key press event in the input field
$('.input-group-button input').keypress(function (e) {
    if (e.which === 13) {
        sendMessage();
    }
});

function sendMessage() {
    var message = $('.input-group-button input').val();

    // Add your logic to send the message (e.g., AJAX request, etc.)

    // Clear the input field after sending the message
    $('.input-group-button input').val('');
}


</script>
