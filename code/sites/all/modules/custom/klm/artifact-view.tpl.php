<?php
global $base_url;
$nid = $_GET['nid'];
$brief = node_load($nid);
$aid = "";
if (!$brief) {
    drupal_goto($base_url);
}
if (!empty($brief->field_artifact)) {

    $aid = $brief->field_artifact['und'][0]['target_id'];
}
?>

<div class="row">
    <div class="col-md-12">
        <ul class="nav nav-tabs">
            <li role="presentation" class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                   aria-expanded="false">
                    Brief <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li role="presentation"><a href="<?php echo $base_url; ?>/node/<?php echo $nid; ?>"
                                               target="view">View</a>
                    </li>

                    <li role="presentation"><a
                            href="<?php echo $base_url; ?>/node/<?php echo $nid; ?>/moderation"
                            target="view">History</a></li>
                </ul>
            </li>
            <li>&nbsp;</li>
            <li role="presentation" class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                   aria-expanded="false">
                    Artifact <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <?php if ($aid != "") { ?>
                        <li role="presentation"><a href="<?php echo $base_url; ?>/node/<?php echo $aid; ?>"
                                                   target="view">View</a></li>

                        <li role="presentation"><a
                                href="<?php echo $base_url; ?>/node/<?php echo $aid; ?>/moderation"
                                target="view">History</a></li>
                    <?php } else { ?>
                        <li role="presentation">No Artifact uploaded yet</li>
                    <?php }?>
                </ul>
            </li>
        </ul>
    </div>

</div>
<div class="row">
    <div class="col-md-12">
        <iframe class="view" name="view" src="<?php echo $base_url; ?>/node/<?php echo $nid; ?>" width="100%"
                height="4048px"
                style="border-width:0px;"></iframe>
    </div>
</div>