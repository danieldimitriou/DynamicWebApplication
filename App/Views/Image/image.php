<h1>images</h1>
<form method="post" enctype="multipart/form-data">

    <div class="mb-3">
        <label></label>
        <input type="file" class="form-control" id="inputImage" name="image">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php
$image = $_FILES['image'] ?? null;
$imagePath = '';
if($image){
//    $imagePath = 'images/'.randomString(8)



    move_uploaded_file($image['tmp_name'],'test.jpg');
}



foreach($images as $image){
    echo "{$image['ID']} " . "{$image['userID']} " . "{$image['description']}" . "{$image['photoLink']}";
    echo "<br>";
    echo '<pre>';
    var_dump($_FILES);
    echo '<pre>';

}
?>
<!---->
<!--<form method="post" enctype="multipart/form-data">-->
<!---->
<!--    <div class="form-group">-->
<!--        <label>Product Image</label><br>-->
<!--        <input type="file" name="image">-->
<!--    </div>-->
<!---->
<!--    <button type="submit" class="btn btn-primary">Submit</button>-->
<!--</form>-->