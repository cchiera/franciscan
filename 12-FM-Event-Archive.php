<?php include 'includes/header.php'; ?>
<div class="container-fluid">
    <hr class="header-hr">
</div>
<div class="individual-section-1 container wrapper-center">
    <div class="row">
        <div class="col-md-12">
            <?php include 'includes/breadcrumbs.php'; ?>
            <h1 class="event-archive-content-h1">Upcoming Events at Franciscan Ministries</h1>
            <div class="event-archive-content cloneme">
            <div class="row">
                <div class="col-md-2 content">
                    <div class="event-archive-circles"></div>
                </div>
                <div class="col-md-10 content">
                    <h1>Preserving Memory Through Diet</h1>
                    <h2>July 28, 2018 @ 1:00pm - 3:30pm</h2>
                    <p>ed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque architecto beatae vitae laudantium. Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo sit voluptatem accusantium doloremque laudantium, totam rem aperiam, llo inventore ver eaq</p>
                    <a href="#" class="white-button">RSVP <i class="fas fa-angle-right"></i></a>
                </div>
            </div>
            </div>
            <div class="insertAfterjs"></div>
        </div>
    </div>
</div>

<?php include 'includes/ready-to-learn.php'; ?>

<script type="text/javascript">
$(function() {
    $(".cloneme").clone().insertAfter(".insertAfterjs");
    $(".cloneme").clone().insertAfter(".insertAfterjs");
});
</script>

<?php include 'includes/footer.php'; ?>