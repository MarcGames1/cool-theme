<article class=<?php post_class('c-post u-margin-bottom-20') ?>>
                    <h2 class ='c-post-title'>
                        <a href='<?php the_permalink(); ?>'
                            title='<?php the_title_attribute(); ?>'><?php the_title(); ?></a>
                    </h2>
                    <div class='c-post__meta'>
                        <?php _themename__post_meta() ?>
                    </div>
                    <div class='c-post__excerpt'><?php the_excerpt(); ?> </div>

                    <?php _themename__readmore_link() ?>
                </article>