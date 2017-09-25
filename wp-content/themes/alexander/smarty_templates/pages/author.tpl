<section class="author">
    <div class="row">
        <div class="col-sm-1 white"></div>
        <div class="col-xs silver">
            <section class="row center-xs">
                <div class="col-sm-12 col-md-10">
                    <section class="single--post--page--banner page--banner interior--page--banner">
                        <section class="page--banner--image" style="background: url('{$siteURL}/wp-content/uploads/2017/06/pexels-photo-136413.jpg')">
                            <section class="single--post--title baby--blue--gradient">
                                <h1>{$author_name}</h1>
                            </section>
                        </section>
                    </section>
                    <div class="row between-xs standard--post">
                        <div class="col-sm-12 post--pagination">
                            {$pagination->pagination($max_num_pages)}
                        </div>
                        <div class="col-sm-12">
                            {foreach $posts as $post key=key}
                                {if $key > 1}
                                    {if $post.link !== ''}
                                        {assign 'link' {$post.link} }
                                        {assign 'target' '_blank'}
                                    {elseif $post.media !== ''}
                                        {assign 'link' {$post.media} }
                                        {assign 'target' '_blank'}
                                    {else}
                                        {assign 'link' {$post.post_link} }
                                        {assign 'target' '_self'}
                                    {/if}
                                    <article class="box--shadow--all">
                                        <a href="{$link}"  target="{$target}">
                                            <div class="row">
                                                <div class="col-sm-12 col-md-3 col-md-no-padding-right">
                                                    <div class="post--image--container bg--image--container">
                                                        <section class="page--banner--image" style="background: url('{$siteURL}/wp-content/uploads/2017/06/pexels-photo-136413.jpg')"></section>
                                                    </div>
                                                </div>
                                                <section class="col-md-9 col-sm-12 col-md-no-padding-left">
                                                    <div class="post--content">
                                                        <h1>{$post.post_name}</h1>
                                                        <span class="post--author">{$post.author}</span>
                                                        <span class="post--date">{$post.post_date}</span>
                                                    </div>
                                                </section>
                                            </div>
                                        </a>
                                    </article>
                                {/if}
                            {/foreach}
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</section>