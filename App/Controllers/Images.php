<?php

namespace App\Controllers;

use \Core\View;
use \App\Models\Image;

class Images extends \Core\Controller
{
    #Show the index page
    public function imageAction(){
        //echo "Hello from the index action in the Listings controller";
        //echo "<p>Query string parameters: <pre></pre>" . htmlspecialchars(print_r($_GET, true)) . "</pre></p>";
        $images = Image::getAll();

        View::render('Image/image.php'
            ,[
            'images'=> $images
        ]
        );
    }


}