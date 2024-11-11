<?php get_header(); ?>
    <main>
       <article>
        <!-- デスク画像 -->
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/top.png" alt="デスク画像">
        <!-- about -->
        <section>
            <div id="about">
                <h2 class="about-wapper">About</h2>
                <div class="adout-contents">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/abut.png" alt="">
                    <div class="name">
                        <h3>Yumika Tanno</h3>
                        <ul>
                            <li>33歳  北海道旭川市在住</li>
                            <li>職業  営業職</li>
                            <li>趣味  料理と愛猫と遊ぶこと</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- works -->
        <section>
            <div id="works">
                <h2 class="works-wapper">Works</h2>
                <div class="works-contents">
                    <div class="works-item">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/corporate-website.png" alt="Myprofile">
                        <h3>コーポレートサイト制作</h3>
                        <p>オンラインスクールの課題で作成したものです。</p>
                    </div>
                    <div class="works-item">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/corporate-website.png" alt="">
                        <h3>コーポレートサイト制作</h3>
                        <p>オンラインスクールの課題で作成したものです。</p>
                    </div>
                    <div class="works-item">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/corporate-website.png" alt="">
                        <h3>コーポレートサイト制作</h3>
                        <p>オンラインスクールの課題で作成したものです。</p>
                    </div>
                </div>
            </div>
        </section>
       </article>
    </main>
    <?php get_footer();