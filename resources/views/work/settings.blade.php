@extends('work.layouts.header')
@section('contents')
<section class="profile-account-setting">
    <div class="container">
        <div class="account-tabs-setting">
            <div class="row">
                <div class="col-lg-3">
                    <div class="acc-leftbar">
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link" id="nav-acc-tab" data-toggle="tab" href="#nav-acc" role="tab"
                                aria-controls="nav-acc" aria-selected="true" aria-expanded="false"><i
                                    class="la la-cogs"></i>Account Setting</a>
                            <a class="nav-item nav-link" id="nav-status-tab" data-toggle="tab" href="#nav-status"
                                role="tab" aria-controls="nav-status" aria-selected="false" aria-expanded="false"><i
                                    class="fa fa-cogs"></i>update infos</a>
                            <a class="nav-item nav-link active" id="nav-password-tab" data-toggle="tab"
                                href="#nav-password" role="tab" aria-controls="nav-password" aria-selected="false"
                                aria-expanded="true"><i class="fa fa-lock"></i>Change Password</a>
                            <a class="nav-item nav-link" id="nav-notification-tab" data-toggle="tab"
                                href="#nav-notification" role="tab" aria-controls="nav-notification"
                                aria-selected="false" aria-expanded="false"><i class="fa fa-flash"></i>Notifications</a>
                            <a class="nav-item nav-link" id="nav-requests-tab" data-toggle="tab" href="#nav-requests"
                                role="tab" aria-controls="nav-requests" aria-selected="false" aria-expanded="false"><i
                                    class="fa fa-group"></i>Requests</a>
                            <a class="nav-item nav-link" id="security-login" data-toggle="tab" href="#security-login"
                                role="tab" aria-controls="security-login" aria-selected="false"><i
                                    class="fa fa-user-secret"></i>Security and Login</a>
                            <a class="nav-item nav-link" id="privacy" data-toggle="tab" href="#privacy" role="tab"
                                aria-controls="privacy" aria-selected="false"><i class="fa fa-paw"></i>Privacy</a>
                            <a class="nav-item nav-link" id="blockking" data-toggle="tab" href="#blockking" role="tab"
                                aria-controls="blockking" aria-selected="false" aria-expanded="false"><i
                                    class="fa fa-cc-diners-club"></i>Blocking</a>
                            <a class="nav-item nav-link" id="nav-deactivate-tab" data-toggle="tab"
                                href="#nav-deactivate" role="tab" aria-controls="nav-deactivate"
                                aria-selected="false"><i class="fa fa-random"></i>Deactivate Account</a>
                        </div>
                    </div>
                    <!--acc-leftbar end-->
                </div>
                <div class="col-lg-9">
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade" id="nav-acc" role="tabpanel" aria-labelledby="nav-acc-tab"
                            aria-expanded="false">
                            <div class="acc-setting">
                                <h3>Account Setting</h3>
                                <form>
                                    <div class="notbar">
                                        <h4>Notification Sound</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus pretium
                                            nulla quis erat dapibus, varius hendrerit neque suscipit. Integer in ex
                                            euismod, posuere lectus id</p>
                                        <div class="toggle-btn">
                                            <a href="#" title=""><img src="images/up-btn.png" alt=""></a>
                                        </div>
                                    </div>
                                    <!--notbar end-->
                                    <div class="notbar">
                                        <h4>Notification Email</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus pretium
                                            nulla quis erat dapibus, varius hendrerit neque suscipit. Integer in ex
                                            euismod, posuere lectus id</p>
                                        <div class="toggle-btn">
                                            <a href="#" title=""><img src="images/up-btn.png" alt=""></a>
                                        </div>
                                    </div>
                                    <!--notbar end-->
                                    <div class="notbar">
                                        <h4>Chat Message Sound</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus pretium
                                            nulla quis erat dapibus, varius hendrerit neque suscipit. Integer in ex
                                            euismod, posuere lectus id</p>
                                        <div class="toggle-btn">
                                            <a href="#" title=""><img src="images/up-btn.png" alt=""></a>
                                        </div>
                                    </div>
                                    <!--notbar end-->
                                    <div class="save-stngs">
                                        <ul>
                                            <li><button type="submit">Save Setting</button></li>
                                            <li><button type="submit">Restore Setting</button></li>
                                        </ul>
                                    </div>
                                    <!--save-stngs end-->
                                </form>
                            </div>
                            <!--acc-setting end-->
                        </div>
                        <div class="tab-pane fade" id="nav-status" role="tabpanel" aria-labelledby="nav-status-tab"
                            aria-expanded="false">
                            <div class="acc-setting">
                                    @include('work.tabs.edit')

                                <!--pro-work-status end-->
                            </div>
                            <!--acc-setting end-->
                        </div>
                        @include('work.tabs.change-password')
                        <div class="tab-pane fade" id="nav-notification" role="tabpanel"
                            aria-labelledby="nav-notification-tab" aria-expanded="false">
                            <div class="acc-setting">
                                <h3>Notifications</h3>
                                <div class="notifications-list">
                                    <div class="notfication-details">
                                        <div class="noty-user-img">
                                            <img src="http://via.placeholder.com/35x35" alt="">
                                        </div>
                                        <div class="notification-info">
                                            <h3><a href="#" title="">Jassica William</a> Comment on your project.</h3>
                                            <span>2 min ago</span>
                                        </div>
                                        <!--notification-info -->
                                    </div>
                                    <!--notfication-details end-->
                                    <div class="notfication-details">
                                        <div class="noty-user-img">
                                            <img src="http://via.placeholder.com/35x35" alt="">
                                        </div>
                                        <div class="notification-info">
                                            <h3><a href="#" title="">Poonam Verma</a> Bid on your Latest project.</h3>
                                            <span>2 min ago</span>
                                        </div>
                                        <!--notification-info -->
                                    </div>
                                    <!--notfication-details end-->
                                    <div class="notfication-details">
                                        <div class="noty-user-img">
                                            <img src="http://via.placeholder.com/35x35" alt="">
                                        </div>
                                        <div class="notification-info">
                                            <h3><a href="#" title="">Tonney Dhman</a> Comment on your project.</h3>
                                            <span>2 min ago</span>
                                        </div>
                                        <!--notification-info -->
                                    </div>
                                    <!--notfication-details end-->
                                    <div class="notfication-details">
                                        <div class="noty-user-img">
                                            <img src="http://via.placeholder.com/35x35" alt="">
                                        </div>
                                        <div class="notification-info">
                                            <h3><a href="#" title="">Jassica William</a> Comment on your project.</h3>
                                            <span>2 min ago</span>
                                        </div>
                                        <!--notification-info -->
                                    </div>
                                    <!--notfication-details end-->
                                    <div class="notfication-details">
                                        <div class="noty-user-img">
                                            <img src="http://via.placeholder.com/35x35" alt="">
                                        </div>
                                        <div class="notification-info">
                                            <h3><a href="#" title="">Jassica William</a> Comment on your project.</h3>
                                            <span>2 min ago</span>
                                        </div>
                                        <!--notification-info -->
                                    </div>
                                    <!--notfication-details end-->
                                    <div class="notfication-details">
                                        <div class="noty-user-img">
                                            <img src="http://via.placeholder.com/35x35" alt="">
                                        </div>
                                        <div class="notification-info">
                                            <h3><a href="#" title="">Poonam Verma </a> Bid on your Latest project.</h3>
                                            <span>2 min ago</span>
                                        </div>
                                        <!--notification-info -->
                                    </div>
                                    <!--notfication-details end-->
                                    <div class="notfication-details">
                                        <div class="noty-user-img">
                                            <img src="http://via.placeholder.com/35x35" alt="">
                                        </div>
                                        <div class="notification-info">
                                            <h3><a href="#" title="">Tonney Dhman</a> Comment on your project</h3>
                                            <span>2 min ago</span>
                                        </div>
                                        <!--notification-info -->
                                    </div>
                                    <!--notfication-details end-->
                                    <div class="notfication-details">
                                        <div class="noty-user-img">
                                            <img src="http://via.placeholder.com/35x35" alt="">
                                        </div>
                                        <div class="notification-info">
                                            <h3><a href="#" title="">Jassica William</a> Comment on your project.</h3>
                                            <span>2 min ago</span>
                                        </div>
                                        <!--notification-info -->
                                    </div>
                                    <!--notfication-details end-->
                                </div>
                                <!--notifications-list end-->
                            </div>
                            <!--acc-setting end-->
                        </div>
                        <div class="tab-pane fade" id="nav-requests" role="tabpanel" aria-labelledby="nav-requests-tab"
                            aria-expanded="false">
                            <div class="acc-setting">
                                <h3>Requests</h3>
                                <div class="requests-list">
                                    <div class="request-details">
                                        <div class="noty-user-img">
                                            <img src="http://via.placeholder.com/35x35" alt="">
                                        </div>
                                        <div class="request-info">
                                            <h3>Jessica William</h3>
                                            <span>Graphic Designer</span>
                                        </div>
                                        <div class="accept-feat">
                                            <ul>
                                                <li><button type="submit" class="accept-req">Accept</button></li>
                                                <li><button type="submit" class="close-req"><i
                                                            class="la la-close"></i></button></li>
                                            </ul>
                                        </div>
                                        <!--accept-feat end-->
                                    </div>
                                    <!--request-detailse end-->
                                    <div class="request-details">
                                        <div class="noty-user-img">
                                            <img src="http://via.placeholder.com/35x35" alt="">
                                        </div>
                                        <div class="request-info">
                                            <h3>John Doe</h3>
                                            <span>PHP Developer</span>
                                        </div>
                                        <div class="accept-feat">
                                            <ul>
                                                <li><button type="submit" class="accept-req">Accept</button></li>
                                                <li><button type="submit" class="close-req"><i
                                                            class="la la-close"></i></button></li>
                                            </ul>
                                        </div>
                                        <!--accept-feat end-->
                                    </div>
                                    <!--request-detailse end-->
                                    <div class="request-details">
                                        <div class="noty-user-img">
                                            <img src="http://via.placeholder.com/35x35" alt="">
                                        </div>
                                        <div class="request-info">
                                            <h3>Poonam</h3>
                                            <span>Wordpress Developer</span>
                                        </div>
                                        <div class="accept-feat">
                                            <ul>
                                                <li><button type="submit" class="accept-req">Accept</button></li>
                                                <li><button type="submit" class="close-req"><i
                                                            class="la la-close"></i></button></li>
                                            </ul>
                                        </div>
                                        <!--accept-feat end-->
                                    </div>
                                    <!--request-detailse end-->
                                    <div class="request-details">
                                        <div class="noty-user-img">
                                            <img src="http://via.placeholder.com/35x35" alt="">
                                        </div>
                                        <div class="request-info">
                                            <h3>Bill Gates</h3>
                                            <span>C &amp; C++ Developer</span>
                                        </div>
                                        <div class="accept-feat">
                                            <ul>
                                                <li><button type="submit" class="accept-req">Accept</button></li>
                                                <li><button type="submit" class="close-req"><i
                                                            class="la la-close"></i></button></li>
                                            </ul>
                                        </div>
                                        <!--accept-feat end-->
                                    </div>
                                    <!--request-detailse end-->
                                    <div class="request-details">
                                        <div class="noty-user-img">
                                            <img src="http://via.placeholder.com/35x35" alt="">
                                        </div>
                                        <div class="request-info">
                                            <h3>Jessica William</h3>
                                            <span>Graphic Designer</span>
                                        </div>
                                        <div class="accept-feat">
                                            <ul>
                                                <li><button type="submit" class="accept-req">Accept</button></li>
                                                <li><button type="submit" class="close-req"><i
                                                            class="la la-close"></i></button></li>
                                            </ul>
                                        </div>
                                        <!--accept-feat end-->
                                    </div>
                                    <!--request-detailse end-->
                                    <div class="request-details">
                                        <div class="noty-user-img">
                                            <img src="http://via.placeholder.com/35x35" alt="">
                                        </div>
                                        <div class="request-info">
                                            <h3>John Doe</h3>
                                            <span>PHP Developer</span>
                                        </div>
                                        <div class="accept-feat">
                                            <ul>
                                                <li><button type="submit" class="accept-req">Accept</button></li>
                                                <li><button type="submit" class="close-req"><i
                                                            class="la la-close"></i></button></li>
                                            </ul>
                                        </div>
                                        <!--accept-feat end-->
                                    </div>
                                    <!--request-detailse end-->
                                </div>
                                <!--requests-list end-->
                            </div>
                            <!--acc-setting end-->
                        </div>
                        <div class="tab-pane fade" id="nav-deactivate" role="tabpanel"
                            aria-labelledby="nav-deactivate-tab">
                            <div class="acc-setting">
                                <h3>Deactivate Account</h3>
                                <form>
                                    <div class="cp-field">
                                        <h5>Email</h5>
                                        <div class="cpp-fiel">
                                            <input type="text" name="email" placeholder="Email">
                                            <i class="fa fa-envelope"></i>
                                        </div>
                                    </div>
                                    <div class="cp-field">
                                        <h5>Password</h5>
                                        <div class="cpp-fiel">
                                            <input type="password" name="password" placeholder="Password">
                                            <i class="fa fa-lock"></i>
                                        </div>
                                    </div>
                                    <div class="cp-field">
                                        <h5>Please Explain Further</h5>
                                        <textarea></textarea>
                                    </div>
                                    <div class="cp-field">
                                        <div class="fgt-sec">
                                            <input type="checkbox" name="cc" id="c4">
                                            <label for="c4">
                                                <span></span>
                                            </label>
                                            <small>Email option out</small>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus pretium
                                            nulla quis erat dapibus, varius hendrerit neque suscipit. Integer in ex
                                            euismod, posuere lectus id,</p>
                                    </div>
                                    <div class="save-stngs pd3">
                                        <ul>
                                            <li><button type="submit">Save Setting</button></li>
                                            <li><button type="submit">Restore Setting</button></li>
                                        </ul>
                                    </div>
                                    <!--save-stngs end-->
                                </form>
                            </div>
                            <!--acc-setting end-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--account-tabs-setting end-->
    </div>
</section>
@endsection
