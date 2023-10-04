<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.6/css/unicons.css">
    <title>MOTOURHOME</title>
</head>
<body>

    <!-- HEADER -->
    <nav>
        <div class="container">
            <h2 class="log">MOTOURHOME</h2>
            <div class="search-bar">
                <i class="uil uil-search"></i>
                <input type="search" placeholder="Search for inspirations and new ideas!">
            </div>
            <div class="create">
                <label  class="btn btn-primary" for="create-post">Create</label>
                <div class="profile-photo">
                    <img src="#" alt="">
                </div>
            </div>
        </div>
    </nav>

    <!-- MAIN SECTION -->
    <main>
        <div class="container">
            <!-- LEFT -->
            <div class="left">
                <a class="profile">
                    <div class="profile-photo">
                        <img src="" alt="">
                    </div>
                    <div class="handle">
                        <h4>Usuario</h4>
                        <p class="text-muted">@user</p>
                    </div>
                </a>
                <!-- SIDEBAR -->
                <div class="sidebar">
                    <a class="menu-item active">
                        <span><i><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 16 16" id="home"><path fill="#231f20" d="M13.85 7.6 13 6.77 8.35 2.15a.48.48 0 0 0-.7 0L3 6.72l-.83.82a.5.5 0 1 0 .7.71v5.2a.5.5 0 0 0 .5.5h9.29a.5.5 0 0 0 .5-.5V8.3a.52.52 0 0 0 .35.14.51.51 0 0 0 .36-.15.49.49 0 0 0-.02-.69ZM6.38 13V8.92h3V13Zm5.76 0H10.4V8.42a.51.51 0 0 0-.5-.5h-4a.51.51 0 0 0-.5.5V13H3.85V7.31L8 3.2l4.14 4.11Z" data-name="Layer 2"></path></svg></i></span><h3>Home</h3>
                    </a>
                    <a class="menu-item">
                        <span><i><svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" width="20" height="20" viewBox="0 0 64 64" id="compass"><polygon fill="#1e252d" points="16.1 47.89 35.42 36.12 27.88 28.58 16.1 47.89"></polygon><polygon fill="#1e252d" points="36.12 35.41 47.89 16.1 28.58 27.87 36.12 35.41"></polygon><path fill="#1e252d" d="M32,0A32,32,0,1,0,64,32,32,32,0,0,0,32,0Zm0,58.9A26.91,26.91,0,1,1,58.91,32,26.9,26.9,0,0,1,32,58.9Z"></path><path fill="#1e252d" d="M32 12.16a2 2 0 1 0-2-2A2 2 0 0 0 32 12.16zM10.18 30a2 2 0 1 0 2 2A2 2 0 0 0 10.18 30zM32 51.84a2 2 0 1 0 2 2A2 2 0 0 0 32 51.84zM53.81 30a2 2 0 1 0 2 2A2 2 0 0 0 53.81 30z"></path></svg></i></span><h3>Explore</h3>
                    </a>
                    <a class="menu-item" id="notifications">    
                        <span><i><svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" width="24" height="24" viewBox="0 0 24 24" id="bell"><path d="M18,13.18V10a6,6,0,0,0-5-5.91V3a1,1,0,0,0-2,0V4.09A6,6,0,0,0,6,10v3.18A3,3,0,0,0,4,16v2a1,1,0,0,0,1,1H8.14a4,4,0,0,0,7.72,0H19a1,1,0,0,0,1-1V16A3,3,0,0,0,18,13.18ZM8,10a4,4,0,0,1,8,0v3H8Zm4,10a2,2,0,0,1-1.72-1h3.44A2,2,0,0,1,12,20Zm6-3H6V16a1,1,0,0,1,1-1H17a1,1,0,0,1,1,1Z"></path></svg><small class="notification-count">9+</small></i></span><h3>Notifications</h3>
                        <!-- NOTIFICATIONS POPUP -->
                        <div class="notifications-popup">
                            <div>
                                <div class="profile-photo">
                                    <img src="" alt="Profile Pic1">
                                </div>
                                <div class="notification-body">
                                    <b>Dean Kennedy</b> accepted your friend request
                                    <small class="text-muted">2 DAYSA GO</small>
                                </div>
                                <div class="profile-photo">
                                    <img src="" alt="Profile Pic2">
                                </div>
                                <div class="notification-body">
                                    <b>Reggie Watts</b> comented on your post
                                    <small class="text-muted">2 DAYSA GO</small>
                                </div>
                                <div class="profile-photo">
                                    <img src="" alt="Profile Pic3">
                                </div>
                                <div class="notification-body">
                                    <b>Erikah Baduh</b> tagged you in a comment
                                    <small class="text-muted">2 DAYSA GO</small>
                                </div>
                                <div class="profile-photo">
                                    <img src="" alt="Profile Pic4">
                                </div>
                                <div class="notification-body">
                                    <b>Marc Rebillet</b> commented on a post you are tagged in
                                    <small class="text-muted">2 DAYSA GO</small>
                                </div>
                            </div>
                        </div>
                    </a>
                    <!-- END NOTIFICATIONS POPUP -->

                    <a class="menu-item" id="messages-notifications">
                        <span><i><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" id="message"><path d="M19,4H5A3,3,0,0,0,2,7V17a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V7A3,3,0,0,0,19,4ZM5,6H19a1,1,0,0,1,1,1l-8,4.88L4,7A1,1,0,0,1,5,6ZM20,17a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V9.28l7.48,4.57a1,1,0,0,0,1,0L20,9.28Z"></path></svg><small class="notification-count">6</small></i></span><h3>Messages</h3>
                    </a>
                    <a class="menu-item">
                        <span><i><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" id="star-shape"><path d="M22,9.67A1,1,0,0,0,21.14,9l-5.69-.83L12.9,3a1,1,0,0,0-1.8,0L8.55,8.16,2.86,9a1,1,0,0,0-.81.68,1,1,0,0,0,.25,1l4.13,4-1,5.68a1,1,0,0,0,.4,1,1,1,0,0,0,1.05.07L12,18.76l5.1,2.68a.93.93,0,0,0,.46.12,1,1,0,0,0,.59-.19,1,1,0,0,0,.4-1l-1-5.68,4.13-4A1,1,0,0,0,22,9.67Zm-6.15,4a1,1,0,0,0-.29.89l.72,4.19-3.76-2a1,1,0,0,0-.94,0l-3.76,2,.72-4.19a1,1,0,0,0-.29-.89l-3-3,4.21-.61a1,1,0,0,0,.76-.55L12,5.7l1.88,3.82a1,1,0,0,0,.76.55l4.21.61Z"></path></svg></i></span><h3>Bookmarks</h3>
                    </a>
                    <a class="menu-item">
                        <span><i><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" id="analysis-chart"><path d="M3 3.25a.75.75 0 0 1 .75.75v14A1.251 1.251 0 0 0 5 19.25h16a.75.75 0 0 1 0 1.5H5A2.753 2.753 0 0 1 2.25 18V4A.75.75 0 0 1 3 3.25Zm16.47 6.22-3.525 3.525-4.476-3.58a.75.75 0 0 0-.999.055l-4 4a.75.75 0 0 0 1.06 1.06l3.525-3.525 4.476 3.58a.75.75 0 0 0 .999-.055l4-4a.75.75 0 0 0-1.06-1.06Z"></path></svg></i></span><h3>Analytics</h3>
                    </a>
                    <a class="menu-item" id="theme">
                        <span><i><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" id="palette"><path fill="none" d="M0 0h24v24H0V0z"></path><path d="M12 22C6.49 22 2 17.51 2 12S6.49 2 12 2s10 4.04 10 9c0 3.31-2.69 6-6 6h-1.77c-.28 0-.5.22-.5.5 0 .12.05.23.13.33.41.47.64 1.06.64 1.67A2.5 2.5 0 0 1 12 22zm0-18c-4.41 0-8 3.59-8 8s3.59 8 8 8c.28 0 .5-.22.5-.5a.54.54 0 0 0-.14-.35c-.41-.46-.63-1.05-.63-1.65a2.5 2.5 0 0 1 2.5-2.5H16c2.21 0 4-1.79 4-4 0-3.86-3.59-7-8-7z"></path><circle cx="6.5" cy="11.5" r="1.5"></circle><circle cx="9.5" cy="7.5" r="1.5"></circle><circle cx="14.5" cy="7.5" r="1.5"></circle><circle cx="17.5" cy="11.5" r="1.5"></circle></svg></i></span><h3>Theme</h3>
                    </a>
                    <a class="menu-item">
                        <span><i><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0  0 92 92" id="gear"><path d="M46 65.3c-10.6 0-19.3-8.6-19.3-19.3 0-10.6 8.6-19.3 19.3-19.3 10.6 0 19.3 8.6 19.3 19.3 0 10.6-8.7 19.3-19.3 19.3zm0-31.5c-6.7 0-12.2 5.5-12.2 12.2 0 6.7 5.5 12.2 12.2 12.2 6.7 0 12.2-5.5 12.2-12.2 0-6.7-5.5-12.2-12.2-12.2zM46 92h-.5c-3.5 0-6.5-.4-6.7-.4-1.6-.2-2.8-1.4-3.1-3l-1-7.2c-2.2-.7-4.3-1.6-6.3-2.7L22.8 83c-1.3 1-3 .9-4.3 0-.1-.1-2.5-2-5-4.4l-.4-.4c-2.5-2.5-4.3-4.9-4.4-5-1-1.3-1-3 0-4.3l4.4-5.8c-1.1-2-1.9-4.2-2.6-6.4l-7-1c-1.6-.2-2.8-1.5-3-3.1-.1-.1-.5-3.1-.5-6.6v-.5c0-3.5.4-6.5.4-6.7.2-1.6 1.4-2.8 3-3.1l7.2-1c.7-2.2 1.6-4.3 2.7-6.3L9 22.8c-1-1.3-.9-3 0-4.3.1-.1 2-2.5 4.4-5l.4-.4c2.5-2.5 4.9-4.3 5-4.4 1.3-1 3-1 4.3 0l5.8 4.4c2-1.1 4.2-1.9 6.4-2.6l1-7c.2-1.6 1.5-2.8 3.1-3C39.5.4 42.5 0 46 0h.5c3.5 0 6.5.4 6.7.4 1.6.2 2.8 1.4 3.1 3l1 7.2c2.2.7 4.3 1.6 6.3 2.7L69.2 9c1.3-1 3-.9 4.3 0 .1.1 2.5 2 5 4.4l.4.4c2.5 2.5 4.3 4.9 4.4 5 1 1.3 1 3 0 4.3L79 28.9c1.1 2 1.9 4.2 2.6 6.4l7 1c1.6.2 2.8 1.5 3 3.1 0 .1.4 3.2.4 6.7v.5c0 3.5-.4 6.5-.4 6.7-.2 1.6-1.4 2.8-3 3.1l-7.2 1c-.7 2.2-1.6 4.3-2.7 6.3l4.3 5.7c1 1.3.9 3 0 4.3-.1.1-2 2.5-4.4 5l-.4.4c-2.5 2.5-4.9 4.3-5 4.4-1.3 1-3 1-4.3 0L63.1 79c-2 1.1-4.2 1.9-6.4 2.6l-1 7c-.2 1.6-1.5 2.8-3.1 3-.1 0-3.1.4-6.6.4zm-3.6-7.2c.9.1 2 .1 3.1.1h.5c1.1 0 2.2 0 3.1-.1l.9-6.6c.2-1.5 1.3-2.6 2.7-3 3.1-.7 6.1-1.9 8.8-3.6.8-.5 1.8-.6 2.7-.4.5.1 1 .4 1.4.7l5.3 4c.7-.6 1.5-1.3 2.3-2.1l.4-.4c.8-.8 1.5-1.6 2.1-2.3l-4-5.3c-.9-1.2-.9-2.8-.2-4 1.7-2.6 2.9-5.5 3.6-8.5.3-1.5 1.5-2.7 3-2.9l6.7-.9c.1-.9.1-2 .1-3.1V46c0-1.1 0-2.2-.1-3.1l-6.6-.9c-1.4-.2-2.6-1.3-3-2.7-.7-3.1-1.9-6-3.5-8.7-.2-.2-.3-.5-.4-.8-.4-1.1-.2-2.4.5-3.3l4.1-5.4c-.6-.7-1.3-1.5-2.1-2.3l-.4-.4c-.8-.8-1.6-1.5-2.3-2.1l-5.3 4c-1.3.9-3 .9-4.2 0-2.6-1.6-5.5-2.8-8.5-3.6-1.4-.3-2.5-1.5-2.7-3L49.5 7c-.9-.1-2-.1-3.1-.1H46c-1.1 0-2.2 0-3.1.1l-.9 6.8c-.2 1.6-1.4 2.8-3 3-3 .7-5.9 1.9-8.5 3.5-.8.5-1.8.6-2.7.4-.5-.1-1-.4-1.4-.7l-5.2-4c-.7.6-1.5 1.3-2.3 2.1l-.4.4c-.8.8-1.5 1.6-2.1 2.3l4 5.3c.9 1.2.9 2.7.2 4-.1.1-.1.2-.2.3-1.6 2.6-2.8 5.5-3.5 8.5-.3 1.4-1.5 2.5-3 2.7l-6.7.9c-.1.9-.1 2-.1 3.1v.4c0 1.1 0 2.2.1 3.1l6.6.9c1.6.2 2.8 1.4 3 3v.1c.7 3 1.9 5.8 3.5 8.4.5.9.7 2 .3 3-.1.4-.4.8-.7 1.2L16 70.9c.6.7 1.3 1.5 2.1 2.3l.4.4c.8.8 1.6 1.5 2.3 2.1l5.3-4c1.3-1 3.2-.9 4.4.1 2.6 1.6 5.4 2.7 8.3 3.5 1.4.3 2.5 1.5 2.7 3l.9 6.5z"></path></svg></i></span><h3>Settings</h3>
                    </a>
                </div>
                <!-- END SIDEBAR -->
                <label for="create-post" class="btn btn-primary">Create Post</label>
            </div>
            <!-- END LEFT -->

            <!-- MIDDLE -->
            <div class="middle">
                <!-- STORIES -->
                <div class="stories">
                    <div class="story">
                        <div class="profile-photo">
                            <img src="" alt="">
                        </div>
                        <p class="name">Your Story</p>
                    </div>
                    <div class="story">
                        <div class="profile-photo">
                            <img src="" alt="">
                        </div>
                        <p class="name">Lilla Jane</p>
                    </div>
                    <div class="story">
                        <div class="profile-photo">
                            <img src="" alt="">
                        </div>
                        <p class="name">Desmond Doss</p>
                    </div>
                    <div class="story">
                        <div class="profile-photo">
                            <img src="" alt="">
                        </div>
                        <p class="name">Bob Marley</p>
                    </div>
                    <div class="story">
                        <div class="profile-photo">
                            <img src="" alt="">
                        </div>
                        <p class="name">Mary Jane</p>
                    </div>
                    <div class="story">
                        <div class="profile-photo">
                            <img src="" alt="">
                        </div>
                        <p class="name">Flor Filó</p>
                    </div>
                </div>
                <!-- END STORIES -->
                <form action="" class="create-post">
                    <div class="profile-photo">
                        <img src="" alt="">
                    </div>
                    <input type="text" placeholder="What's on your mind, Cleito?" id="create-post">
                    <input type="submit" value="Post" class="btn btn-primary">
                </form>

                <!-- FEEDS -->
                <div class="feeds">
                    <!-- FEED POST 1 -->
                    <div class="feed">
                        <div class="head">
                            <div class="user">
                                <div class="profile-photo">
                                    <img src="" alt="">
                                </div>
                                <div class="ingo">
                                    <h3>Lana Rose</h3>
                                    <small>Dubai, 15 MINUTES AGO</small>
                                </div>
                            </div>
                            <span class="edit">
                                <i class="uil uil-ellipsis-h"></i>
                            </span>
                        </div>
                        <div class="photo">
                            <img src="" alt="">
                            <div class="action-buttons">
                                <div class="interaction-buttons">
                                    <span><i class="uil uil-heart"></i></span>
                                    <span><i class="uil uil-comment-dots"></i></span>
                                    <span><i class="uil uil-share-alt"></i></span>
                                </div>
                                <div class="bookmark">
                                    <span><i class="uil uil-bookmark-full"></i></span>
                                </div>
                            </div>

                            <div class="liked-by">
                                <span><img src="" alt=""></span>
                                <span><img src="" alt=""></span>
                                <span><img src="" alt=""></span>
                                <p>Liked by <b>Ernest Achiever</b> and <b>2,122 others</b></p>
                            </div>
                            <div class="caption">
                                <p><b>Lana Rose</b> lorem ipsum dolores sit amet. <span class="harsh-tag">#PeaceNLove</span></p>
                                <div class="comments text-muted">View all 325 comments</div>
                            </div>

                        </div>
                    </div>
                    <!-- FEED POST 2 -->
                    <div class="feed">
                        <div class="head">
                            <div class="user">
                                <div class="profile-photo">
                                    <img src="" alt="">
                                </div>
                                <div class="ingo">
                                    <h3>Lana Rose</h3>
                                    <small>Dubai, 15 MINUTES AGO</small>
                                </div>
                            </div>
                            <span class="edit">
                                <i class="uil uil-ellipsis-h"></i>
                            </span>
                        </div>
                        <div class="photo">
                            <img src="" alt="">
                            <div class="action-buttons">
                                <div class="interaction-buttons">
                                    <span><i class="uil uil-heart"></i></span>
                                    <span><i class="uil uil-comment-dots"></i></span>
                                    <span><i class="uil uil-share-alt"></i></span>
                                </div>
                                <div class="bookmark">
                                    <span><i class="uil uil-bookmark-full"></i></span>
                                </div>
                            </div>

                            <div class="liked-by">
                                <span><img src="" alt=""></span>
                                <span><img src="" alt=""></span>
                                <span><img src="" alt=""></span>
                                <p>Liked by <b>Ernest Achiever</b> and <b>2,122 others</b></p>
                            </div>
                            <div class="caption">
                                <p><b>Lana Rose</b> lorem ipsum dolores sit amet. <span class="harsh-tag">#PeaceNLove</span></p>
                                <div class="comments text-muted">View all 325 comments</div>
                            </div>

                        </div>
                    </div>
                    <!-- FEED POST 3 -->
                    <div class="feed">
                        <div class="head">
                            <div class="user">
                                <div class="profile-photo">
                                    <img src="" alt="">
                                </div>
                                <div class="ingo">
                                    <h3>Lana Rose</h3>
                                    <small>Dubai, 15 MINUTES AGO</small>
                                </div>
                            </div>
                            <span class="edit">
                                <i class="uil uil-ellipsis-h"></i>
                            </span>
                        </div>
                        <div class="photo">
                            <img src="" alt="">
                            <div class="action-buttons">
                                <div class="interaction-buttons">
                                    <span><i class="uil uil-heart"></i></span>
                                    <span><i class="uil uil-comment-dots"></i></span>
                                    <span><i class="uil uil-share-alt"></i></span>
                                </div>
                                <div class="bookmark">
                                    <span><i class="uil uil-bookmark-full"></i></span>
                                </div>
                            </div>

                            <div class="liked-by">
                                <span><img src="" alt=""></span>
                                <span><img src="" alt=""></span>
                                <span><img src="" alt=""></span>
                                <p>Liked by <b>Ernest Achiever</b> and <b>2,122 others</b></p>
                            </div>
                            <div class="caption">
                                <p><b>Lana Rose</b> lorem ipsum dolores sit amet. <span class="harsh-tag">#PeaceNLove</span></p>
                                <div class="comments text-muted">View all 325 comments</div>
                            </div>

                        </div>
                    </div>
                    <!-- FEED POST 4 -->
                    <div class="feed">
                        <div class="head">
                            <div class="user">
                                <div class="profile-photo">
                                    <img src="" alt="">
                                </div>
                                <div class="ingo">
                                    <h3>Lana Rose</h3>
                                    <small>Dubai, 15 MINUTES AGO</small>
                                </div>
                            </div>
                            <span class="edit">
                                <i class="uil uil-ellipsis-h"></i>
                            </span>
                        </div>
                        <div class="photo">
                            <img src="" alt="">
                            <div class="action-buttons">
                                <div class="interaction-buttons">
                                    <span><i class="uil uil-heart"></i></span>
                                    <span><i class="uil uil-comment-dots"></i></span>
                                    <span><i class="uil uil-share-alt"></i></span>
                                </div>
                                <div class="bookmark">
                                    <span><i class="uil uil-bookmark-full"></i></span>
                                </div>
                            </div>

                            <div class="liked-by">
                                <span><img src="" alt=""></span>
                                <span><img src="" alt=""></span>
                                <span><img src="" alt=""></span>
                                <p>Liked by <b>Ernest Achiever</b> and <b>2,122 others</b></p>
                            </div>
                            <div class="caption">
                                <p><b>Lana Rose</b> lorem ipsum dolores sit amet. <span class="harsh-tag">#PeaceNLove</span></p>
                                <div class="comments text-muted">View all 325 comments</div>
                            </div>

                        </div>
                    </div>
                    <!-- FEED POST 5 -->
                    <div class="feed">
                        <div class="head">
                            <div class="user">
                                <div class="profile-photo">
                                    <img src="" alt="">
                                </div>
                                <div class="ingo">
                                    <h3>Lana Rose</h3>
                                    <small>Dubai, 15 MINUTES AGO</small>
                                </div>
                            </div>
                            <span class="edit">
                                <i class="uil uil-ellipsis-h"></i>
                            </span>
                        </div>
                        <div class="photo">
                            <img src="" alt="">
                            <div class="action-buttons">
                                <div class="interaction-buttons">
                                    <span><i class="uil uil-heart"></i></span>
                                    <span><i class="uil uil-comment-dots"></i></span>
                                    <span><i class="uil uil-share-alt"></i></span>
                                </div>
                                <div class="bookmark">
                                    <span><i class="uil uil-bookmark-full"></i></span>
                                </div>
                            </div>

                            <div class="liked-by">
                                <span><img src="" alt=""></span>
                                <span><img src="" alt=""></span>
                                <span><img src="" alt=""></span>
                                <p>Liked by <b>Ernest Achiever</b> and <b>2,122 others</b></p>
                            </div>
                            <div class="caption">
                                <p><b>Lana Rose</b> lorem ipsum dolores sit amet. <span class="harsh-tag">#PeaceNLove</span></p>
                                <div class="comments text-muted">View all 325 comments</div>
                            </div>

                        </div>
                    </div>
                    <!-- FEED POST 6 -->
                    <div class="feed">
                        <div class="head">
                            <div class="user">
                                <div class="profile-photo">
                                    <img src="" alt="">
                                </div>
                                <div class="ingo">
                                    <h3>Lana Rose</h3>
                                    <small>Dubai, 15 MINUTES AGO</small>
                                </div>
                            </div>
                            <span class="edit">
                                <i class="uil uil-ellipsis-h"></i>
                            </span>
                        </div>
                        <div class="photo">
                            <img src="" alt="">
                            <div class="action-buttons">
                                <div class="interaction-buttons">
                                    <span><i class="uil uil-heart"></i></span>
                                    <span><i class="uil uil-comment-dots"></i></span>
                                    <span><i class="uil uil-share-alt"></i></span>
                                </div>
                                <div class="bookmark">
                                    <span><i class="uil uil-bookmark-full"></i></span>
                                </div>
                            </div>

                            <div class="liked-by">
                                <span><img src="" alt=""></span>
                                <span><img src="" alt=""></span>
                                <span><img src="" alt=""></span>
                                <p>Liked by <b>Ernest Achiever</b> and <b>2,122 others</b></p>
                            </div>
                            <div class="caption">
                                <p><b>Lana Rose</b> lorem ipsum dolores sit amet. <span class="harsh-tag">#PeaceNLove</span></p>
                                <div class="comments text-muted">View all 325 comments</div>
                            </div>

                        </div>
                    </div>
                    <!-- FEED POST 7 -->
                    <div class="feed">
                        <div class="head">
                            <div class="user">
                                <div class="profile-photo">
                                    <img src="" alt="">
                                </div>
                                <div class="ingo">
                                    <h3>Lana Rose</h3>
                                    <small>Dubai, 15 MINUTES AGO</small>
                                </div>
                            </div>
                            <span class="edit">
                                <i class="uil uil-ellipsis-h"></i>
                            </span>
                        </div>
                        <div class="photo">
                            <img src="" alt="">
                            <div class="action-buttons">
                                <div class="interaction-buttons">
                                    <span><i class="uil uil-heart"></i></span>
                                    <span><i class="uil uil-comment-dots"></i></span>
                                    <span><i class="uil uil-share-alt"></i></span>
                                </div>
                                <div class="bookmark">
                                    <span><i class="uil uil-bookmark-full"></i></span>
                                </div>
                            </div>

                            <div class="liked-by">
                                <span><img src="" alt=""></span>
                                <span><img src="" alt=""></span>
                                <span><img src="" alt=""></span>
                                <p>Liked by <b>Ernest Achiever</b> and <b>2,122 others</b></p>
                            </div>
                            <div class="caption">
                                <p><b>Lana Rose</b> lorem ipsum dolores sit amet. <span class="harsh-tag">#PeaceNLove</span></p>
                                <div class="comments text-muted">View all 325 comments</div>
                            </div>
                        </div>
                    </div>
                    <!-- END FEED -->
                </div>
                <!-- END FEEDS -->
            </div>
            <!-- END MIDDLE -->
            
            <!-- RIGHT -->
            <div class="right">
                <div class="messages">
                    <div class="heading">
                        <h4>Messages</h4><i class="uil uil-edit"></i>
                    </div>
                    <!-- SEARCH BAR -->
                    <div class="search-bar">
                        <i class="uil uil-search"></i>
                        <input type="text" placeholder="Search messages" id="message-search">
                    </div>
                    <!-- MESSAGES CATEGORY -->
                    <div class="category">
                        <h6 class="active">Primary</h6>
                        <h6>General</h6>
                        <h6 class="message-requests">Requests(4)</h6>                    
                    </div>
                    <!-- MESSAGE -->
                    <div class="message">
                        <div class="profile-photo">
                            <img src="" alt="">
                            <div class="active"></div>
                        </div>
                        <div class="message-body">
                            <h5>Xingo Manso</h5>
                            <p class="text-muted">Cabei diacorda</p>
                        </div>
                    </div>
                    <!-- MESSAGE -->
                    <div class="message">
                        <div class="profile-photo">
                            <img src="" alt="">
                        </div>
                        <div class="message-body">
                            <h5>Lelé do Boné</h5>
                            <p class="text-muted">3 new messages</p>
                        </div>
                    </div>
                    <!-- MESSAGE -->
                    <div class="message">
                        <div class="profile-photo">
                            <img src="" alt="">
                        </div>
                        <div class="message-body">
                            <h5>Leleu do Creu</h5>
                            <p class="text-muted">Ta rolando hein</p>
                        </div>
                    </div>
                    <!-- MESSAGE -->
                    <div class="message">
                        <div class="profile-photo">
                            <img src="" alt="">
                        </div>
                        <div class="message-body">
                            <h5>Xingola Muda</h5>
                            <p class="text-muted">5 new messages</p>
                        </div>
                    </div>
                    <!-- MESSAGE -->
                    <div class="message">
                        <div class="profile-photo">
                            <img src="" alt="">
                            <div class="active"></div>
                        </div>
                        <div class="message-body">
                            <h5>Doce como Memel</h5>
                            <p class="text-muted">E ai best</p>
                        </div>
                    </div>
                </div>
                <!-- END MESSAGES -->

                <!-- FRIEND REQUESTS -->
                <div class="friend-requests">
                    <h4>Requests</h4>
                    <div class="request">
                        <div class="info">
                            <div class="profile-photo">
                                <img src="" alt="">
                            </div>
                            <div>
                                <h5>Param Aluia</h5>
                                <p class="text-muted">
                                    12 mutual friends
                                </p>
                            </div>
                        </div>
                        <div class="action">
                            <button class="btn btn-primary">
                                Accept
                            </button>
                            <button class="btn">
                                Decline
                            </button>
                        </div>
                    </div>
                    <div class="request">
                        <div class="info">
                            <div class="profile-photo">
                                <img src="" alt="">
                            </div>
                            <div>
                                <h5>Param Aluia</h5>
                                <p class="text-muted">
                                    12 mutual friends
                                </p>
                            </div>
                        </div>
                        <div class="action">
                            <button class="btn btn-primary">
                                Accept
                            </button>
                            <button class="btn">
                                Decline
                            </button>
                        </div>
                    </div>
                    <div class="request">
                        <div class="info">
                            <div class="profile-photo">
                                <img src="" alt="">
                            </div>
                            <div>
                                <h5>Param Aluia</h5>
                                <p class="text-muted">
                                    12 mutual friends
                                </p>
                            </div>
                        </div>
                        <div class="action">
                            <button class="btn btn-primary">
                                Accept
                            </button>
                            <button class="btn">
                                Decline
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END RIGHT -->
        </div>
        <!-- END CONTAINER -->
    </main>

    <!-- THEME CUSTOMIZATION -->
    <div class="customize-theme">
        <div class="card">
            <h2>Customize your view</h2>
            <p class="text-muted">Manage your font size, color and background</p>

            <!-- FONT SIZES -->
            <div class="font-size">
                <h4>Font Size</h4>
                <div>
                    <h6>Aa</h6>
                    <div class="choose-size">
                        <span class="font-size-1"></span>
                        <span class="font-size-2 active"></span>
                        <span class="font-size-3"></span>
                        <span class="font-size-4"></span>
                        <span class="font-size-5"></span>
                    </div>
                    <h3>Aa</h3>
                </div>
            </div>

            <!-- PRIMARY COLORS -->
            <div class="color">
                <h4>Color</h4>
                <div class="choose-color">
                    <span class="color-1 active"></span>
                    <span class="color-2"></span>
                    <span class="color-3"></span>
                    <span class="color-4"></span>
                    <span class="color-5"></span>
                </div>
            </div>

            <!-- BACKGROUND COLORS -->
            <div class="background">
                <h4>Background</h4>
                <div class="choose-bg">
                    <div class="bg-1">
                        <span></span>
                        <h5 for="bg-1">Light</h5>
                    </div>
                    <div class="bg-2">
                        <span></span>
                        <h5>Dim</h5>
                    </div>
                    <div class="bg-3">
                        <span></span>
                        <h5 for="bg-3">Lights out</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script src="index.js"></script>
</body>
</html>