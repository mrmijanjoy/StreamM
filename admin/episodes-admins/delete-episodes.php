<?php require "../includes/header.php"; ?>

<?php 

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $thumbnail =  $conn->query("SELECT * FROM episodes WHERE id='$id'");
    $thumbnail->execute();

    $getThumbnail = $thumbnail->fetch(PDO::FETCH_OBJ);

    unlink("videos/" . $getThumbnail->thumbnail);

    $video =  $conn->query("SELECT * FROM episodes WHERE id='$id'");
    $video->execute();

    $getVideo = $video->fetch(PDO::FETCH_OBJ);

    unlink("videos/" . $getVideo->video);

    $deleteEpisode = $conn->query("DELETE FROM episodes WHERE id='$id'");
    $deleteEpisode->execute();

    header("location:show-episodes.php");
}

?>