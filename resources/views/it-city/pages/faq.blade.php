@extends('it-city.layouts.master')
@section('head-tag')
    <title>
        سوالات متداول
    </title>
@endsection

@section('content')
    <!-- inner page banner -->
    <div id="inner_banner" class="section inner_banner_section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div class="title-holder">
                            <div class="title-holder-cell text-right">
                                <h1 class="page-title">سوالات متداول</h1>
                                <ol class="breadcrumb rtl">
                                    <li><a href="{{ route('customer.home') }}">خانه</a></li>
                                    <li><a href="{{ route('it-city.pc.smart-assemble.index') }}">اسمبل هوشمند</a></li>
                                    <li class="active">سوالات متداول</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end inner page banner -->

    <!-- section -->
    <div class="section padding_layout_1">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="row" style="margin-bottom: 30px;">
                        <div class="col-md-12">
                            <div class="full margin_bottom_30">
                                <div class="accordion border_circle">
                                    <div class="bs-example">
                                        <div class="panel-group" id="accordion" style="margin-top: 0;">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <p class="panel-title"><a data-toggle="collapse"
                                                                              data-parent="#accordion"
                                                                              href="#collapseOne">1. When can we get
                                                            started?<i class="fa fa-angle-down"></i></a></p>
                                                </div>
                                                <div id="collapseOne" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                        <p>Contrary to popular belief, Lorem Ipsum is not simply random
                                                            text. It has roots in a piece of classical Latin literature
                                                            from 45 BC, making it
                                                            over 2000 years old. Richard McClintock, a Latin professor
                                                            at Hampden-Sydney College in Virginia, looked up one of the
                                                            more obscure Latin words,
                                                            consectetur, from a Lorem Ipsum passage, and going through
                                                            the cites of the word in classical literature, discovered
                                                            the undoubtable source. </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <p class="panel-title"><a data-toggle="collapse"
                                                                              data-parent="#accordion"
                                                                              href="#collapseTwo">2. How do I get in
                                                            touch with you?<i class="fa fa-angle-down"></i></a></p>
                                                </div>
                                                <div id="collapseTwo" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                        <p>Contrary to popular belief, Lorem Ipsum is not simply random
                                                            text. It has roots in a piece of classical Latin literature
                                                            from 45 BC, making it
                                                            over 2000 years old. Richard McClintock, a Latin professor
                                                            at Hampden-Sydney College in Virginia, looked up one of the
                                                            more obscure Latin words,
                                                            consectetur, from a Lorem Ipsum passage, and going through
                                                            the cites of the word in classical literature, discovered
                                                            the undoubtable source. </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <p class="panel-title"><a data-toggle="collapse"
                                                                              data-parent="#accordion"
                                                                              href="#collapseThree">3. What documents do
                                                            I need to start?<i class="fa fa-angle-down"></i></a></p>
                                                </div>
                                                <div id="collapseThree" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                        <p>Contrary to popular belief, Lorem Ipsum is not simply random
                                                            text. It has roots in a piece of classical Latin literature
                                                            from 45 BC, making it
                                                            over 2000 years old. Richard McClintock, a Latin professor
                                                            at Hampden-Sydney College in Virginia, looked up one of the
                                                            more obscure Latin words,
                                                            consectetur, from a Lorem Ipsum passage, and going through
                                                            the cites of the word in classical literature, discovered
                                                            the undoubtable source. </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <p class="panel-title"><a data-toggle="collapse"
                                                                              data-parent="#accordion"
                                                                              href="#collapseFour">4. How much does it
                                                            cost?<i class="fa fa-angle-down"></i></a></p>
                                                </div>
                                                <div id="collapseFour" class="panel-collapse collapse in">
                                                    <div class="panel-body">
                                                        <p>Contrary to popular belief, Lorem Ipsum is not simply random
                                                            text. It has roots in a piece of classical Latin literature
                                                            from 45 BC, making it
                                                            over 2000 years old. Richard McClintock, a Latin professor
                                                            at Hampden-Sydney College in Virginia, looked up one of the
                                                            more obscure Latin words,
                                                            consectetur, from a Lorem Ipsum passage, and going through
                                                            the cites of the word in classical literature, discovered
                                                            the undoubtable source. </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <p class="panel-title"><a data-toggle="collapse"
                                                                              data-parent="#accordion"
                                                                              href="#collapseFive">5. What other help is
                                                            available?<i class="fa fa-angle-down"></i></a></p>
                                                </div>
                                                <div id="collapseFive" class="panel-collapse collapse in">
                                                    <div class="panel-body">
                                                        <p>Contrary to popular belief, Lorem Ipsum is not simply random
                                                            text. It has roots in a piece of classical Latin literature
                                                            from 45 BC, making it
                                                            over 2000 years old. Richard McClintock, a Latin professor
                                                            at Hampden-Sydney College in Virginia, looked up one of the
                                                            more obscure Latin words,
                                                            consectetur, from a Lorem Ipsum passage, and going through
                                                            the cites of the word in classical literature, discovered
                                                            the undoubtable source. </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <p class="panel-title"><a data-toggle="collapse"
                                                                              data-parent="#accordion"
                                                                              href="#collapseSix">6. Are you fully
                                                            insured?<i class="fa fa-angle-down"></i></a></p>
                                                </div>
                                                <div id="collapseSix" class="panel-collapse collapse in">
                                                    <div class="panel-body">
                                                        <p>Contrary to popular belief, Lorem Ipsum is not simply random
                                                            text. It has roots in a piece of classical Latin literature
                                                            from 45 BC, making it
                                                            over 2000 years old. Richard McClintock, a Latin professor
                                                            at Hampden-Sydney College in Virginia, looked up one of the
                                                            more obscure Latin words,
                                                            consectetur, from a Lorem Ipsum passage, and going through
                                                            the cites of the word in classical literature, discovered
                                                            the undoubtable source. </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="full">
                                <div class="service_blog_inner">
                                    <div class="icon text_align_left"><img src="images/it_service/si1.png" alt="#">
                                    </div>
                                    <h4 class="service-heading">Fast service</h4>
                                    <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="full">
                                <div class="service_blog_inner">
                                    <div class="icon text_align_left"><img src="images/it_service/si2.png" alt="#">
                                    </div>
                                    <h4 class="service-heading">Secure payments</h4>
                                    <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="full">
                                <div class="service_blog_inner">
                                    <div class="icon text_align_left"><img src="images/it_service/si3.png" alt="#">
                                    </div>
                                    <h4 class="service-heading">Expert team</h4>
                                    <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="full" style="margin-top: 15px;">
                                <h3>Need file recovery?</h3>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                    laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et
                                    quasi architecto beatae vitae dicta sunt explicabo.. </p>
                                <p><a class="btn main_bt" href="#">Read More</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="full">
                                <div class="main_heading text_align_left">
                                    <h2>Experienced Staff</h2>
                                    <p class="large">Our experts have been featured in press numerous times.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <div class="full team_blog_colum">
                                <div class="it_team_img"><img class="img-responsive"
                                                              src="images/it_service/team-member-1.jpg" alt="#"></div>
                                <div class="team_feature_head">
                                    <h4>Dean Michael</h4>
                                </div>
                                <div class="team_feature_social">
                                    <div class="social_icon">
                                        <ul class="list-inline">
                                            <li><a class="fa fa-facebook" href="https://www.facebook.com/"
                                                   title="Facebook" target="_blank"></a></li>
                                            <li><a class="fa fa-google-plus" href="https://plus.google.com/"
                                                   title="Google+" target="_blank"></a></li>
                                            <li><a class="fa fa-twitter" href="https://twitter.com" title="Twitter"
                                                   target="_blank"></a></li>
                                            <li><a class="fa fa-linkedin" href="https://www.linkedin.com"
                                                   title="LinkedIn" target="_blank"></a></li>
                                            <li><a class="fa fa-instagram" href="https://www.instagram.com"
                                                   title="Instagram" target="_blank"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="full team_blog_colum">
                                <div class="it_team_img"><img class="img-responsive"
                                                              src="images/it_service/team-member-2.jpg" alt="#"></div>
                                <div class="team_feature_head">
                                    <h4>Ruby Jake</h4>
                                </div>
                                <div class="team_feature_social">
                                    <div class="social_icon">
                                        <ul class="list-inline">
                                            <li><a class="fa fa-facebook" href="https://www.facebook.com/"
                                                   title="Facebook" target="_blank"></a></li>
                                            <li><a class="fa fa-google-plus" href="https://plus.google.com/"
                                                   title="Google+" target="_blank"></a></li>
                                            <li><a class="fa fa-twitter" href="https://twitter.com" title="Twitter"
                                                   target="_blank"></a></li>
                                            <li><a class="fa fa-linkedin" href="https://www.linkedin.com"
                                                   title="LinkedIn" target="_blank"></a></li>
                                            <li><a class="fa fa-instagram" href="https://www.instagram.com"
                                                   title="Instagram" target="_blank"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="full team_blog_colum">
                                <div class="it_team_img"><img class="img-responsive"
                                                              src="images/it_service/team-member-3.jpg" alt="#"></div>
                                <div class="team_feature_head">
                                    <h4>David Hussay</h4>
                                </div>
                                <div class="team_feature_social">
                                    <div class="social_icon">
                                        <ul class="list-inline">
                                            <li><a class="fa fa-facebook" href="https://www.facebook.com/"
                                                   title="Facebook" target="_blank"></a></li>
                                            <li><a class="fa fa-google-plus" href="https://plus.google.com/"
                                                   title="Google+" target="_blank"></a></li>
                                            <li><a class="fa fa-twitter" href="https://twitter.com" title="Twitter"
                                                   target="_blank"></a></li>
                                            <li><a class="fa fa-linkedin" href="https://www.linkedin.com"
                                                   title="LinkedIn" target="_blank"></a></li>
                                            <li><a class="fa fa-instagram" href="https://www.instagram.com"
                                                   title="Instagram" target="_blank"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="side_bar">
                        <div class="side_bar_blog">
                            <h4>SEARCH</h4>
                            <div class="side_bar_search">
                                <div class="input-group stylish-input-group">
                                    <input class="form-control" placeholder="Search" type="text">
                                    <span class="input-group-addon">
                <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                </span></div>
                            </div>
                        </div>
                        <div class="side_bar_blog">
                            <h4>GET A QUOTE</h4>
                            <p>An duo lorem altera gloriatur. No imperdiet adver sarium pro. No sit sumo lorem. Mei ea
                                eius elitr consequ unturimperdiet.</p>
                            <a class="btn sqaure_bt" href="it_service.html">View Service</a></div>
                        <div class="side_bar_blog">
                            <h4>OUR SERVICE</h4>
                            <div class="categary">
                                <ul>
                                    <li><a href="it_data_recovery.html"><i class="fa fa-angle-right"></i> Data recovery</a>
                                    </li>
                                    <li><a href="it_computer_repair.html"><i class="fa fa-angle-right"></i> Computer
                                            repair</a></li>
                                    <li><a href="it_mobile_service.html"><i class="fa fa-angle-right"></i> Mobile
                                            service</a></li>
                                    <li><a href="it_network_solution.html"><i class="fa fa-angle-right"></i> Network
                                            solutions</a></li>
                                    <li><a href="it_techn_support.html"><i class="fa fa-angle-right"></i> Technical
                                            support</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="side_bar_blog">
                            <h4>RECENT NEWS</h4>
                            <div class="categary">
                                <ul>
                                    <li><a href="it_data_recovery.html"><i class="fa fa-angle-right"></i> Land lights
                                            let be divided</a></li>
                                    <li><a href="it_computer_repair.html"><i class="fa fa-angle-right"></i> Seasons over
                                            bearing air</a></li>
                                    <li><a href="it_mobile_service.html"><i class="fa fa-angle-right"></i> Greater open
                                            after grass</a></li>
                                    <li><a href="it_network_solution.html"><i class="fa fa-angle-right"></i> Gathered
                                            was divide second</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="side_bar_blog">
                            <h4>TAG</h4>
                            <div class="tags">
                                <ul>
                                    <li><a href="#">Bootstrap</a></li>
                                    <li><a href="#">HTML5</a></li>
                                    <li><a href="#">Wordpress</a></li>
                                    <li><a href="#">Bootstrap</a></li>
                                    <li><a href="#">HTML5</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end section -->
@endsection
