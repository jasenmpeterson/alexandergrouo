<section class="locations--page--banner page--banner interior--page--banner row center-xs middle-xs">
    <div class="col-xs">
        <section class="page--banner--image" style="background: url({$featured_image})"></section>
        <div class="col-xs page--banner--content">
            <h1>{$page_title}</h1>
        </div>
    </div>
</section>

<div class="row center-xs">
    <div class="col-md-1 dark--gray"></div>
    <div class="col-md-4 col-sm-12 baby--blue--gradient">
        <div class="box locations--list">
            {foreach from=$locations item=location name=locations}
            <div class="locations--container {if $smarty.foreach.locations.iteration == 1}active{/if}" data-location-id="{$location.location|replace:' ':''}">
                <h1>
                <span class="title">{$location.location}</span>
                    <span class="arrow">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 321.4 158.2">
                            <path d="M313.6 71.8L245 3.2c-4.2-4.2-11-4.2-15.3 0-4.2 4.2-4.2 11 0 15.3l50.2 50.2H10.8C4.8 68.7 0 73.5 0 79.5s4.8 10.8 10.8 10.8h269.1l-50.2 50.2c-4.2 4.2-4.2 11 0 15.3 2.1 2.1 4.9 3.2 7.6 3.2 2.7 0 5.5-1 7.6-3.2l68.6-68.6c4.3-4.3 4.3-11.2.1-15.4zm0 0"/>
                        </svg>
                    </span>
                </h1>
            </div>
            {/foreach}
        </div>
    </div>
    <div class="col-lg-7 col-md-7 col-sm-12">
        {foreach $locations as $addresses name=addresses}
            <section class="locations--map--container box {if $smarty.foreach.addresses.iteration == 1}active{/if}" data-location-id="{$addresses.location|replace:' ':''}">
                <section class="circular--map" style="background: url({$addresses.skyline_image.url})"></section>
                <section class="locations--addresses">
                    <div class="box">
                        <section class="address">
                            <a href="https://www.google.com/maps/search/?api=1&query={$addresses.addresses[0].street|replace:' ':'+'} {$addresses.addresses[0].location|replace:' ':'+'}" target="_blank">
                                <h2>{$addresses.addresses[0].street}</h2>
                                <h1>{$addresses.addresses[0].location}</h1>
                            </a>
                        </section>
                        <section class="phone">
                            {foreach $addresses.addresses[0]['phone'] as $phone name=phone }
                                {assign "phone_number" {$phone['number']|replace:'T ':''}}
                                <h1><a href="tel:{$phone_number}">{$phone['number']}</a></h1>
                            {/foreach}
                        </section>
                    </div>
                </section>
            </section>
        {/foreach}
    </div>
    <div class="col-md-1 col-sm-12 silver"></div>
</div>

<div class="row">
    <div class="col-md-1 col-sm-12 dark--blue"></div>
    <div class="col-md-5 col-sm-12">
        {$locations_form}
    </div>
    <div class="col-md-6 col-sm-12 silver"></div>
</div>