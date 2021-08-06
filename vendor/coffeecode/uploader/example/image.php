<link rel="stylesheet" href="style.css">

<div class="form">
    <form name="env" method="post" enctype="multipart/form-data">
        <?php
        require __DIR__ . "/../src/Uploader.php";
        require __DIR__ . "/../src/Image.php";

<<<<<<< HEAD
        //$image = new CoffeeCode\Uploader\Image("uploads", "images", false); //SEM PASTAS DE ANO E MÊS
        $image = new CoffeeCode\Uploader\Image("uploads", "images");

=======
        $image = new CoffeeCode\Uploader\Image("uploads", "images");
        
>>>>>>> 7de010e53e6c2059a02563df32edb53c805e113c
        if ($_FILES) {
            try {
                $upload = $image->upload($_FILES['image'], $_POST['name']);
                echo "<img src='{$upload}' width='100%'>";
            } catch (Exception $e) {
                echo "<p>(!) {$e->getMessage()}</p>";
            }
        }
        ?>
        <input type="text" name="name" placeholder="Image Name" required/>
        <input type="file" name="image" required/>
        <button>Send Image</button>
    </form>
</div>


