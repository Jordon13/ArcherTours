    


<div style="padding: 0.5em!important; width:auto!important; font-family: Verdana; color:rgba(35, 32, 32, 1)!important;">

<h4 style="padding-bottom:1em!important;">List Of Packages For Route Requested</h4>

<table style="border: 0.7px solid rgba(160,160,160,0.2);
    padding:0px!important;">
    <style>table tr th, table tr td{}</style>
    <thead style="background-color: #fdd800;">

        <tr>
            <th style="padding: 0.5em!important;border:1px solid #fdd800;">Place</th>
            <th style="padding: 0.5em!important;border:1px solid #fdd800;">Trip Type</th>
            <th style="padding: 0.5em!important;border:1px solid #fdd800;">Price Per Adult</th>
            <th style="padding: 0.5em!important;border:1px solid #fdd800;">Price Per Child</th>
            <th style="padding: 0.5em!important;border:1px solid #fdd800;">Discount</th>
            <th style="padding: 0.5em!important;border:1px solid #fdd800;">Origin</th>
            <th style="padding: 0.5em!important;border:1px solid #fdd800;">Destination</th>
            <th style="padding: 0.5em!important;border:1px solid #fdd800;">Book</th>
        </tr>
    </thead>

    <tbody>
            {packages}
        <tr>
            <td style="padding: 0.5em!important;border:1px solid #fdd800;">{price_place}</td>
            <td style="padding: 0.5em!important;border:1px solid #fdd800;">{trip_type}</td>
            <td style="padding: 0.5em!important;border:1px solid #fdd800;">{price_per_adult}</td>
            <td style="padding: 0.5em!important;border:1px solid #fdd800;">{price_per_child}</td>
            <td style="padding: 0.5em!important;border:1px solid #fdd800;">{price_discount}%</td>
            <td style="padding: 0.5em!important;border:1px solid #fdd800;">{price_origin}</td>
            <td style="padding: 0.5em!important;border:1px solid #fdd800;">{price_destination}</td>
            <td style="padding: 0.5em!important;border:1px solid #fdd800;"><a href="<?php echo site_url('/{package_unique_id}');?>" id={package_unique_id}>Book Now</a></td>
        </tr>
            {/packages}
    </tbody>

</table>
</div>

