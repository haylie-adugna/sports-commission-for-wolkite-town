    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h5>Best Highlight images</h5>
            </div>
            <div class="card-block">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        @foreach ($events as $event)
                            <div class="swiper-slide">
                                <a href="#"
                                    onclick="openImagePopup('{{ asset('upload/event/image/' . $event->image) }}')">
                                    <img src="{{ asset('upload/event/image/' . $event->image) }}" width="220"
                                        height="140" alt="Image">
                                </a>
                            </div>
                        @endforeach
                        <style>
                            /* Adjust modal size and position */
                            .popup-container {
                              width: auto !important;
                              max-width: 90% !important;
                              margin-left: -45% !important;
                              height: auto !important;
                              max-height: 90% !important;
                              margin-top: -45% !important;
                            }

                            /* Style the video and image */
                            .popup-container video,
                            .popup-container img {
                              width: 100%;
                              height: auto;
                              max-height: 100%;
                            }

                            /* Style the close button */
                            .popup-close {
                              position: absolute;
                              top: 10px;
                              right: 10px;
                              background-color: rgba(0, 0, 0, 0.5);
                              color: white;
                              border: none;
                              padding: 5px 10px;
                              cursor: pointer;
                              font-size: 16px;
                              z-index: 9999;
                            }

                            /* Animation for images */
                            @keyframes fadeIn {
                              from {
                                opacity: 0;
                                transform: translateY(20px);
                              }
                              to {
                                opacity: 1;
                                transform: translateY(0);
                              }
                            }

                            .popup-container img {
                              animation: fadeIn 0.5s ease-in-out;
                            }
                          </style>
                        <!-- JavaScript to handle the image popup -->
                        <script>
                            function openImagePopup(imageSrc) {
                                // Show SweetAlert2 modal with image
                                Swal.fire({
                                    html: `
        <div class="image-popup-container">
          <button class="image-popup-close" onclick="Swal.close()">Close</button>
          <img src="${imageSrc}" alt="Image">
        </div>`,
                                    showCloseButton: false,
                                    showConfirmButton: false,
                                    customClass: {
                                        container: 'image-popup-container',
                                        popup: 'image-popup',
                                        content: 'image-popup-content',
                                        closeButton: 'image-popup-close'
                                    }
                                });
                            }
                        </script>

                    </div>

                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h5>Best Highlight Video</h5>
            </div>
            <div class="card-block">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        @foreach ($events as $event)
                            <div class="swiper-slide">
                                <a href="#"
                                    onclick="openVideoPopup('{{ asset('upload/event/video/' . $event->video) }}')">
                                    <video width="220" height="140" autoplay muted>
                                        <source src="{{ asset('upload/event/video/' . $event->video) }}"
                                            type="video/mp4">
                                    </video>
                                </a>
                            </div>
                        @endforeach

                        <script>
                            function openVideoPopup(videoSrc) {
                                // Show SweetAlert2 modal with video player
                                Swal.fire({
                                    html: `
                                  <div class="video-popup-container">
                                    <button class="video-popup-close" onclick="Swal.close()">Close</button>
                                    <video width="100%" controls autoplay>
                                      <source src="${videoSrc}" type="video/mp4">
                                      Your browser does not support the video tag.
                                    </video>
                                  </div>`,
                                    showCloseButton: false,
                                    showConfirmButton: false,
                                    customClass: {
                                        container: 'video-popup-container',
                                        popup: 'video-popup',
                                        content: 'video-popup-content',
                                        closeButton: 'video-popup-close'
                                    }
                                });
                            }
                        </script>
                        <style>
                            /* Adjust modal size and position */
                            .video-popup-container {
                                width: 100%;
                                max-width: 100%;
                                height: auto;
                                margin: 0;
                                padding: 0;
                                box-shadow: none;
                            }

                            /* Style the video player */
                            .video-popup-container video {
                                width: 100%;
                                height: auto;
                            }

                            /* Style the close button */
                            .video-popup-close {
                                position: absolute;
                                top: 10px;
                                right: 10px;
                                background-color: rgba(0, 0, 0, 0.5);
                                color: white;
                                border: none;
                                padding: 5px 10px;
                                cursor: pointer;
                                font-size: 16px;
                                z-index: 9999;
                            }
                        </style>
                    </div>

                </div>
            </div>
        </div>

    </div>
    <div id="styleSelector">
    </div>
