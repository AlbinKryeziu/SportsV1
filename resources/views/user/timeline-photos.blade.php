@include('user/includes/header')

<section>
    <div class="gap gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row merged20" id="page-contents">
                        <div class="col-lg-3">
                            <aside class="sidebar static">
                                @include('user/includes/shortcuts')
                                <!-- Shortcuts -->
                            </aside>
                        </div>
                        <div class="col-lg-6">
                            <div class="central-meta">
                                <ul class="photos">
                                    @foreach($post as $key => $image)

                                    <li>
                                        <a class="strip" href="{{ asset('storage/'.$image->pathPhotos) }}" title="" data-strip-group="mygroup" data-strip-group-options="loop: false">
                                            <img src="{{ asset('storage/'.$image->pathPhotos) }}" alt="" style="width: 100%; height: 100%;" />
                                        </a>
                                    </li>
                                    @endforeach
                                </ul>
                                <div class="lodmore"><button class="btn-view btn-load-more"></button></div>
                            </div>
                            <!-- photos -->
                        </div>
                        <!-- centerl meta -->
                        <div class="col-lg-3">
                            <aside class="sidebar static">
                                <div class="widget friend-list stick-widget">
                                    <h4 class="widget-title">Friends</h4>
                                    <div id="searchDir"></div>
                                    <ul id="people-list" class="friendz-list">
                                        <li>
                                            <figure>
                                                <img src="images/resources/friend-avatar.jpg" alt="" />
                                                <span class="status f-online"></span>
                                            </figure>
                                            <div class="friendz-meta">
                                                <a href="time-line.html">bucky barnes</a>
                                                <i>wintersolder@gmail.com</i>
                                            </div>
                                        </li>
                                        <li>
                                            <figure>
                                                <img src="images/resources/friend-avatar2.jpg" alt="" />
                                                <span class="status f-away"></span>
                                            </figure>
                                            <div class="friendz-meta">
                                                <a href="time-line.html">Sarah Loren</a>
                                                <i>barnes@gmail.com</i>
                                            </div>
                                        </li>
                                        <li>
                                            <figure>
                                                <img src="images/resources/friend-avatar3.jpg" alt="" />
                                                <span class="status f-off"></span>
                                            </figure>
                                            <div class="friendz-meta">
                                                <a href="time-line.html">jason borne</a>
                                                <i>jasonb@gmail.com</i>
                                            </div>
                                        </li>
                                        <li>
                                            <figure>
                                                <img src="images/resources/friend-avatar4.jpg" alt="" />
                                                <span class="status f-off"></span>
                                            </figure>
                                            <div class="friendz-meta">
                                                <a href="time-line.html">Cameron diaz</a>
                                                <i>jasonb@gmail.com</i>
                                            </div>
                                        </li>
                                        <li>
                                            <figure>
                                                <img src="images/resources/friend-avatar5.jpg" alt="" />
                                                <span class="status f-online"></span>
                                            </figure>
                                            <div class="friendz-meta">
                                                <a href="time-line.html">daniel warber</a>
                                                <i>jasonb@gmail.com</i>
                                            </div>
                                        </li>
                                        <li>
                                            <figure>
                                                <img src="images/resources/friend-avatar6.jpg" alt="" />
                                                <span class="status f-away"></span>
                                            </figure>
                                            <div class="friendz-meta">
                                                <a href="time-line.html">andrew</a>
                                                <i>jasonb@gmail.com</i>
                                            </div>
                                        </li>
                                        <li>
                                            <figure>
                                                <img src="images/resources/friend-avatar7.jpg" alt="" />
                                                <span class="status f-off"></span>
                                            </figure>
                                            <div class="friendz-meta">
                                                <a href="time-line.html">amy watson</a>
                                                <i>jasonb@gmail.com</i>
                                            </div>
                                        </li>
                                        <li>
                                            <figure>
                                                <img src="images/resources/friend-avatar5.jpg" alt="" />
                                                <span class="status f-online"></span>
                                            </figure>
                                            <div class="friendz-meta">
                                                <a href="time-line.html">daniel warber</a>
                                                <i>jasonb@gmail.com</i>
                                            </div>
                                        </li>
                                        <li>
                                            <figure>
                                                <img src="images/resources/friend-avatar2.jpg" alt="" />
                                                <span class="status f-away"></span>
                                            </figure>
                                            <div class="friendz-meta">
                                                <a href="time-line.html">Sarah Loren</a>
                                                <i>barnes@gmail.com</i>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="chat-box">
                                        <div class="chat-head">
                                            <span class="status f-online"></span>
                                            <h6>Bucky Barnes</h6>
                                            <div class="more">
                                                <span><i class="ti-more-alt"></i></span>
                                                <span class="close-mesage"><i class="ti-close"></i></span>
                                            </div>
                                        </div>
                                        <div class="chat-list">
                                            <ul>
                                                <li class="me">
                                                    <div class="chat-thumb"><img src="images/resources/chatlist1.jpg" alt="" /></div>
                                                    <div class="notification-event">
                                                        <span class="chat-message-item">
                                                            Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks
                                                        </span>
                                                        <span class="notification-date"><time datetime="2004-07-24T18:18" class="entry-date updated">Yesterday at 8:10pm</time></span>
                                                    </div>
                                                </li>
                                                <li class="you">
                                                    <div class="chat-thumb"><img src="images/resources/chatlist2.jpg" alt="" /></div>
                                                    <div class="notification-event">
                                                        <span class="chat-message-item">
                                                            Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks
                                                        </span>
                                                        <span class="notification-date"><time datetime="2004-07-24T18:18" class="entry-date updated">Yesterday at 8:10pm</time></span>
                                                    </div>
                                                </li>
                                                <li class="me">
                                                    <div class="chat-thumb"><img src="images/resources/chatlist1.jpg" alt="" /></div>
                                                    <div class="notification-event">
                                                        <span class="chat-message-item">
                                                            Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks
                                                        </span>
                                                        <span class="notification-date"><time datetime="2004-07-24T18:18" class="entry-date updated">Yesterday at 8:10pm</time></span>
                                                    </div>
                                                </li>
                                            </ul>
                                            <form class="text-box">
                                                <textarea placeholder="Post enter to post..."></textarea>
                                                <div class="add-smiles">
                                                    <span title="add icon" class="em em-expressionless"></span>
                                                </div>
                                                <div class="smiles-bunch">
                                                    <i class="em em---1"></i>
                                                    <i class="em em-smiley"></i>
                                                    <i class="em em-anguished"></i>
                                                    <i class="em em-laughing"></i>
                                                    <i class="em em-angry"></i>
                                                    <i class="em em-astonished"></i>
                                                    <i class="em em-blush"></i>
                                                    <i class="em em-disappointed"></i>
                                                    <i class="em em-worried"></i>
                                                    <i class="em em-kissing_heart"></i>
                                                    <i class="em em-rage"></i>
                                                    <i class="em em-stuck_out_tongue"></i>
                                                </div>
                                                <button type="submit"></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- friends list sidebar -->
                            </aside>
                        </div>
                        <!-- sidebar -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="bottombar">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <span class="copyright">© Winku 2018. All rights reserved.</span>
                <i><img src="images/credit-cards.png" alt="" /></i>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('socail/js/main.min.js') }}"></script>
<script src="{{ asset('socail/js/script.js')}}"></script>
