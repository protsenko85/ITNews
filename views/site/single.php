<div class="col-md-8">

    <article class="post">

        <div class="leave-comment"><!--leave comment-->

            <h4>Leave a reply</h4>

            <form class="form-horizontal contact-form" role="form" method="post" action="#">

                <div class="form-group">

                    <div class="col-md-12"> <textarea rows="3" cols="90" name="text"></textarea>

                    </div>

                </div>

                <button type="submit" class="btn send-btn">Post Comment</button>

            </form>

        </div><!--end leave comment-->

        <div class="comments-block">

            <div class="comment-block">

                <div class="comment">

                    <a href="#" class="comment-img">

                        <img class="img-round" src="" alt="image">

                    </a>

                    <div class="comment-body">

                        <div class="comment-top">

                            <button class="replay btn pull-right" onclick=""> Replay

                            </button>

                            <h5>Stas 2</h5>

                            <p class="comment-date">

                                20-09-06

                            </p>

                        </div>

                        <div class="comment-text">

                            Text

                        </div>

                        <div class="comment-delete">

                            <button type="submit">

                                <i class="fa fa-trash"></i>

                            </button>

                        </div>

                    </div>

                </div>

                <div class="replay-comment" hidden>

                    <div class="leave-comment-child"><!--leave comment-->

                        <h4>Leave a reply for Іефі</h4>

                        <div class="form-group">

                            <div class="col-md-12">

                            </div>

                        </div>

                        <button type="submit" class="btn send-btn">Post Comment</button>

                    </div><!--end leave comment-->

                </div>

                <div class="comment-childs-container">

                    <div class="comment-childs">

                        <div class="comment-block">

                            <div class="comment">

                                <a href="#" class="comment-img">

                                    <img class="img-round" src=""

                                         alt="image">

                                </a>

                                <div class="comment-body">

                                    <div class="comment-top">

                                        <h5>Stas</h5>

                                        <p class="comment-date">

                                            2020-08-09

                                        </p>

                                    </div>

                                    <div class="comment-text">

                                        Text

                                    </div>

                                    <div class="comment-delete">

                                        <button type="submit">

                                            <i class="fa fa-trash"></i>

                                        </button>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>


        <div class="post-thumb">

            <a href="blog.html"><img src="" alt=" image "></a>

        </div>

        <div class="post-content">

            <header class="entry-header text-center text-uppercase">

                <h6>

                    <a href=""> Travel </a>

                </h6>

                <h1 class="entry-title"><a href="blog.html"> Home is peaceful place </a></h1>

            </header>

            <div class="entry-content">

                Text.

            </div>

            <div class="decoration">

                <a href="" class="btn btn-default">Tag</a>

            </div>

            <div class="social-share">

                <span class="social-share-title pull-left text-capitalize">By Stas On 20-02-12</span>

            </div>

        </div>

    </article>

</div>

<?php

echo \Yii::$app->view->renderFile('@app/views/site/right.php');

?>
