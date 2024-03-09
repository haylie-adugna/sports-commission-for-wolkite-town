<aside id="aside-chat" class="control-sidebar control-sidebar-light chat-aside">
    <div class="tab-content">
        <div class="tab-pane active" id="control-sidebar-chat-tab">
            <div class="chat-header">
                <h3 class="control-sidebar-heading">Chat</h3>
                <button class="close-chat-btn" onclick="closeChat()"><i class="fa fa-times"></i></button>
            </div>
            <div class="direct-chat direct-chat-primary">
                <!-- Chat box goes here -->
                <div class="direct-chat-messages">
                    <!-- Chat messages go here -->
                    <h1>hi</h1>
                </div>
                <div class="direct-chat-contacts">
                    <!-- Chat contacts or user list goes here -->

                </div>
            </div>

            <!-- Form specific to the "aside-chat" aside -->
            <form id="chat-form" onsubmit="sendMessage(); return false;">
                <div class="input-group">
                    <input type="text" id="message-input" class="form-control" placeholder="Type your message...">
                    <span class="input-group-btn">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-send"></i></button>
                    </span>
                </div>
            </form>
            <!-- End of the form -->

        </div>
    </div>
</aside>

<script>
    function closeChat() {
        // Add your logic to close the chat
        var chatSidebar = document.getElementById('aside-chat');
        chatSidebar.classList.remove('control-sidebar-open');

        // Additional logic if needed, such as updating UI or notifying the server
    }

    function sendMessage() {
        // Add your logic to handle sending messages
        var messageInput = document.getElementById('message-input');
        var message = messageInput.value;

        // Add your code to handle the message (e.g., send it to the server, update chat UI, etc.)

        // Clear the input field after sending the message
        messageInput.value = '';
    }
</script>
